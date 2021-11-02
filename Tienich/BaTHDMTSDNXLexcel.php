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
$cs=0;
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Bộ, cơ quan TW, tỉnh, thành phố: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị:	'.$madv[3],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'G1','Biểu số 04','B','Time New Roman',11,'','','J1',0,'');
dulieumotcot($objPHPExcel,'G2','(Ban hành kèm theo thông tư số 112/2006/TT-BTC','','Time New Roman',11,'','','J2',0,'');
dulieumotcot($objPHPExcel,'G3','ngày 27/12/2006 của Bộ trưởng Bộ Tài Chính)','','Time New Roman',11,'','','J3',0,'');
dulieumotcot($objPHPExcel,'A4','CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM','B','Time New Roman',12,'','','J4',0,'');
dulieumotcot($objPHPExcel,'A5','Độc lập - Tự do - Hạnh phúc','','Time New Roman',12,'','','J5',0,'');
dulieumotcot($objPHPExcel,'A6','BẢNG TỔNG HỢP DANH MỤC TÀI SẢN ĐỀ NGHỊ XỬ LÝ','','Time New Roman',14,'','','J6',0,'');
dulieumotcot($objPHPExcel,'A7','(Bán, điều chuyển, thu hồi, thanh lý)','','Time New Roman',12,'','','J7',0,'');

dulieumotcot($objPHPExcel,'A8','STT','B','Time New Roman',10,'','','A9',6,'');
dulieumotcot($objPHPExcel,'B8','Tên tài sản','B','Time New Roman',10,'','','B9',35,'C');
dulieumotcot($objPHPExcel,'C8','Hiện có tại đơn vị (Đang quản lý sử dụng)','B','Time New Roman',10,'','','E8',7,'C');
dulieumotcot($objPHPExcel,'F8','Đề nghị xử lý (Bán, điều chuyển, thu hồi, thanh lý)','B','Time New Roman',10,'','','I8',7,'C');
dulieumotcot($objPHPExcel,'J8','Ghi chú','B','Time New Roman',10,'','','J9',13,'C');
dulieumotcot($objPHPExcel,'C9','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D9','Nguyên giá theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'E9','Giá trị còn lại theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'F9','Số lượng','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'G9','Chủng loại, cấp hạng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'H9','Giá trị còn lại theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I9','Phương thức xử lý','B','Time New Roman',10,'','','',13,'C');

kedong($objPHPExcel,'A8','J9',1,'Mỏng');
$tccl=0;$cs = 0;
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tbldenghi inner join thongtindonvi on tbldenghi.madonvi=thongtindonvi.madonvi where tbldenghi.madonvi Like '$msdv%' and tbldenghi.ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){	
		// hết đơn vị
		$sqlxl = "Select tblqlts.TTQLTS,tblqlts.tenchitiet, tblqlts.CAPH, tbldenghi.hinhthuc,(tblqlts.ngansach + tblqlts.nguonkhac) as NG,tblqlts.DTKV,tblqlts.DTXD,tbldenghi.chitiethinhthai 
		from tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS 
		where tblqlts.madonvi = '$_madv[ma]' and tbldenghi.ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$queryxl=mysqli_query($con,$sqlxl);
		$xl =  array(array("A","B","C",0,0,0,0,0,"D","E"));
		$cs=0;$i=0;
		$tccl = 0;
		while($rowxl=mysqli_fetch_array($queryxl))		
		{
			$xl[$cs][0] = $rowxl['tenchitiet'];
			$xl[$cs][1] = $rowxl['CAPH'];
			$xl[$cs][2] = $rowxl['hinhthuc'];
			$xl[$cs][3] = 0;
			$xl[$cs][4] = 0;
			$xl[$cs][5] = 0;
			$xl[$cs][6] = kieudouble($rowxl['DTKV'])+kieudouble($rowxl['DTXD']);
			$sqllkhm = "select sodu,sotien from tblhaomon where TTQLTS = " . $rowxl['TTQLTS'];
			$querylkhm=mysqli_query($con,$sqllkhm);
			$lkhm = 0;
			while($rowlkhm=mysqli_fetch_array($querylkhm))		
			{
				$lkhm = kieudouble($rowlkhm['sodu'])+kieudouble($rowlkhm['sotien']);
			}
			$xl[$cs][7] = kieudouble($rowxl['NG']) - $lkhm;
			$xl[$cs][8] = $rowxl['chitiethinhthai'];
			$xl[$cs][9] = $_madv['ten'];
			$tccl = $tccl + kieudouble($rowxl['NG']) - $lkhm;
			$cs = $cs + 1;		
		}
	}

$index=10;$tennhomsau = "";$tennhom="";$group1=0;$tennhomsau1 = "";$tennhom1="";$sogr1=0;$sogr2=0;$tong7=0;$sttn1=0;
for($i = 0; $i < $cs; $i++)
{
	$tennhom=$xl[$i][9];
	if ($tennhom != $tennhomsau)
	{		
		$sogr1=$sogr1 + 1;
		$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B'.$index, $xl[$i][9])->mergeCells('B'.$index.':J'.$index);
		dinhdangBI($objPHPExcel,'A'.$index,'J'.$index,1,'B');
	}
	$tennhom1=$xl[$i][8];
	if ($tennhom1 != $tennhomsau1)
	{ 
		$sogr2=$sogr2 + 1;		
			$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B'.($index + 1 + $sttn1), $xl[$i][8]);
		dinhdangBI($objPHPExcel,'A'.($index+1 + $sttn1),'J'.($index+1+$sttn1),1,'BI');
		$sttn1=$sttn1 + 1;
		$group1 = $index + 1 + $sttn1;
	}
	$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A'.($index + 2+$sttn1-1),$i+1)
	->setCellValue('B'.($index + 2+$sttn1-1), $xl[$i][0])
	->setCellValue('C'.($index + 2+$sttn1-1), $xl[$i][3])
	->setCellValue('D'.($index + 2+$sttn1-1), $xl[$i][4])
	->setCellValue('E'.($index + 2+$sttn1-1), $xl[$i][5])
	->setCellValue('F'.($index + 2+$sttn1-1), $xl[$i][6])
	->setCellValue('G'.($index + 2+$sttn1-1), $xl[$i][1])
	->setCellValue('H'.($index + 2+$sttn1-1), $xl[$i][7])
	->setCellValue('I'.($index + 2+$sttn1-1), $xl[$i][2])
	->setCellValue('J'.($index + 2+$sttn1-1), "")
	;
	//$tong7 = $tong7 + kieudouble($xl[$i][7]);
	$tennhomsau=$xl[$i][9];
	$tennhomsau1=$xl[$i][8];
$index++;
$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('H'.($group1-1), "=Sum(H".$group1.":H".($index+$sttn1).")")
	;	
}

dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1),'Tổng cộng','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1),$tccl,'B','Time New Roman',10,'','','',0,'');
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','J'.($index+$sogr2+$sogr1),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A10','A'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'B10','B'.($index+$sogr2+$sogr1),$i,'T');
dinhdangle($objPHPExcel,'F10','F'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'H10','H'.($index+$sogr2+$sogr1),$i,'P');
dinhdangle($objPHPExcel,'G10','G'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'I10','I'.($index+$sogr2+$sogr1),$i,'');

dinhdangsoxls($objPHPExcel,'F10','F'.($index+$sogr2+$sogr1),$i,'1P');
dinhdangsoxls($objPHPExcel,'H10','H'.($index+$sogr2+$sogr1),$i,'BT');

dinhdangxuongdong($objPHPExcel,'B10','B'.($index+$sogr2+$sogr1),$i);

kedong($objPHPExcel,'A10','J'.($index+$sogr2+$sogr1),$i,'Mỏng');

dulieumotcot($objPHPExcel,'G'.($index+$sogr2+$sogr1 - 1 + 2),'Hà Nội, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','J'.($index+$sogr2+$sogr1 - 1 + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 3),'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 3),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.($index+$sogr2+$sogr1 - 1 + 3),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','J'.($index+$sogr2+$sogr1 - 1 + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','J'.($index+$sogr2+$sogr1 - 1 + 4),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','J'.($index+$sogr2+$sogr1 - 1 + 7),0,'');
taofile($objPHPExcel,"BaTHDMTSDNXLxls.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BaTHDMTSDNXLxls.xls">Bấm vào đây để tải file về</a>
</body>