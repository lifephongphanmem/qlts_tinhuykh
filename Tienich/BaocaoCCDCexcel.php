<head>
<meta charset='utf-8'>
<?php
	$tungay = "";
	$denngay = "";
	$madv ="";
	if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	}
	require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
?>
</head>
<body>

<?php
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblxuatdung inner join thongtindonvi on tblxuatdung.madonvi=thongtindonvi.madonvi where tblxuatdung.madonvi Like '$msdv%' and tblxuatdung.ngayxuat <= '". doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
$cc =  array(array("A","B","C","D",0,0,0,0,0,0,0,0));
$cs=0;
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv) {
		$sqlcc = "Select chitiethinhthai,mataisan,tenchitiet,dvt,sum(soluong) as soluong,sum(sotien) as sotien from tblxuatdung where madonvi = '$_madv[ma]' and ngayxuat <= '" . doingay($denngay) . "' group by chitiethinhthai,mataisan,tenchitiet,dvt order by chitiethinhthai";
		$querycc = mysqli_query($con, $sqlcc);
		$i = 0;
		$tc2 = 0;
		$tc4 = 0;
		$tc6 = 0;
		$tc8 = 0;
		while ($rowcc = mysqli_fetch_array($querycc)) {
			$cc[$cs][0] = $rowcc['chitiethinhthai'];
			$cc[$cs][1] = $rowcc['mataisan'];
			$cc[$cs][2] = $rowcc['tenchitiet'];
			$cc[$cs][3] = $rowcc['dvt'];
			$sqlbh = "Select soluong,sotien from tblbaohong where madonvi = '$_madv[ma]' and ngaythang <= '" . doingay($denngay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "'";
			$querybh = mysqli_query($con, $sqlbh);
			$bhslck = 0;
			$bhstck = 0;
			while ($rowbh = mysqli_fetch_array($querybh)) {
				$bhslck = $bhslck + kieudouble($rowbh['soluong']);
				$bhstck = $bhstck + kieudouble($rowbh['sotien']);
			}
			$cc[$cs][10] = kieudouble($rowcc['soluong']) - $bhslck;
			$cc[$cs][11] = kieudouble($rowcc['sotien']) - $bhstck;
			// dau ky hong
			$sqlbhdk = "Select soluong,sotien from tblbaohong where madonvi = '$_madv[ma]' and ngaythang < '" . doingay($tungay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "'";
			$querybhdk = mysqli_query($con, $sqlbhdk);
			$bhsldk = 0;
			$bhstdk = 0;
			while ($rowbhdk = mysqli_fetch_array($querybhdk)) {
				$bhsldk = $bhsldk + kieudouble($rowbhdk['soluong']);
				$bhstdk = $bhstdk + kieudouble($rowbhdk['sotien']);
			}
			// dau ky tang
			$sqlccdk = "Select soluong,sotien from tblxuatdung where madonvi = '$_madv[ma]' and ngayxuat < '" . doingay($tungay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "'";
			$queryccdk = mysqli_query($con, $sqlccdk);
			$ccsldk = 0;
			$ccstdk = 0;
			while ($rowccdk = mysqli_fetch_array($queryccdk)) {
				$ccsldk = $ccsldk + kieudouble($rowccdk['soluong']);
				$ccstdk = $ccstdk + kieudouble($rowccdk['sotien']);
			}
			$cc[$cs][4] = $ccsldk - $bhsldk;
			$cc[$cs][5] = $ccstdk - $bhstdk;
			$cc[$cs][6] = kieudouble($rowcc['soluong']) - $ccsldk;
			$cc[$cs][7] = kieudouble($rowcc['sotien']) - $ccstdk;
			$cc[$cs][8] = $bhslck - $bhsldk;
			$cc[$cs][9] = $bhstck - $bhstdk;
			$cs = $cs + 1;
			$tc2 = $tc2 + $ccstdk - $bhstdk;
			$tc4 = $tc4 + kieudouble($rowcc['sotien']) - $ccstdk;
			$tc6 = $tc6 + $bhstck - $bhstdk;
			$tc8 = $tc8 + kieudouble($rowcc['sotien']) - $bhstck;
		}
	}
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','ĐVCQ: '. $madv[3],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','BÁO CÁO TÌNH HÌNH TĂNG GIẢM CÔNG CỤ, DỤNG CỤ','B','Time New Roman',16,'','','L3',0,'');
dulieumotcot($objPHPExcel,'A4','Từ ngày: '.$tungay.' đến ngày '.$denngay,'','Time New Roman',11,'','','L4',0,'');
dulieumotcot($objPHPExcel,'A6','STT','B','Time New Roman',10,'','','A7',6,'C');
dulieumotcot($objPHPExcel,'B6','Công cụ, dụng cụ','B','Time New Roman',10,'','','D6',12,'C');
dulieumotcot($objPHPExcel,'E6','Đầu kỳ','B','Time New Roman',10,'','','F6',7,'C');
dulieumotcot($objPHPExcel,'G6','Ghi tăng trong kỳ','B','Time New Roman',10,'','','H6',7,'C');
dulieumotcot($objPHPExcel,'I6','Ghi giảm trong kỳ','B','Time New Roman',10,'','','J6',7,'C');
dulieumotcot($objPHPExcel,'K6','Cuối kỳ','B','Time New Roman',10,'','','L6',7,'C');
dulieumotcot($objPHPExcel,'B7','Mã','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C7','Tên','B','Time New Roman',10,'','','',25,'C');
dulieumotcot($objPHPExcel,'D7','Đơn vị','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'E7','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F7','Thành tiền','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'G7','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H7','Thành tiền','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I7','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J7','Thành tiền','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'K7','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L7','Thành tiền','B','Time New Roman',10,'','','',13,'C');
kedong($objPHPExcel,'A6','L7',1,'Mỏng');

$index=8;$tennhomsau = "";$tennhom="";$group1=0;
for($i = 0; $i < $cs; $i++)
{
	$tennhom=$cc[$i][0];
	if ($tennhom != $tennhomsau)
	{
		$group1 = $index + 1;
			$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B'.$index, $cc[$i][0]);
		dinhdangBI($objPHPExcel,'A'.$index,'L'.$index,1,'BI');
	}	
	$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A'.($index + 1),$i+1)
	->setCellValue('B'.($index + 1), $cc[$i][1])
	->setCellValue('C'.($index + 1), $cc[$i][2])
	->setCellValue('D'.($index + 1), $cc[$i][3])
	->setCellValue('E'.($index + 1), $cc[$i][4])
	->setCellValue('F'.($index + 1), $cc[$i][5])
	->setCellValue('G'.($index + 1), $cc[$i][6])
	->setCellValue('H'.($index + 1), $cc[$i][7])
	->setCellValue('I'.($index + 1), $cc[$i][8])
	->setCellValue('J'.($index + 1), $cc[$i][9])
	->setCellValue('K'.($index + 1), $cc[$i][10])
	->setCellValue('L'.($index + 1), $cc[$i][11])
	;
	$tennhomsau=$cc[$i][0];
$index++;
$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('F'.($group1-1), "=Sum(F".$group1.":F".$index.")")
	->setCellValue('H'.($group1-1), "=Sum(H".$group1.":H".$index.")")
	->setCellValue('J'.($group1-1), "=Sum(J".$group1.":J".$index.")")
	->setCellValue('L'.($group1-1), "=Sum(L".$group1.":L".$index.")");
}
		
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A6','L'.($index),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A8','A'.($index),$i,'');
dinhdangle($objPHPExcel,'B8','D'.($index),$i,'T');
dinhdangle($objPHPExcel,'E8','L'.($index),$i,'P');
dinhdangsoxls($objPHPExcel,'E8','L'.($index),$i,'BT');
dinhdangxuongdong($objPHPExcel,'B8','D'.($index),$i);
kedong($objPHPExcel,'A8','L'.($index),$i,'Mỏng');
dulieumotcot($objPHPExcel,'H'.($index + 1),'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','L'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','L'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 3),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','L'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 6),'','B','Time New Roman',11,'','','L'.($index + 6),0,'');
taofile($objPHPExcel,"BaocaoCCDC.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BaocaoCCDC.xls">Bấm vào đây để tải file về</a>
</body>