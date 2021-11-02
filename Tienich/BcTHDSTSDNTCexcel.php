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
dulieumotcot($objPHPExcel,'A1','Bộ, cơ quan TW, tỉnh, thành phố:	Phòng Tài chính Thành Phố Lai Châu','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị:	UBND Phường Đoàn Kết','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'H1','Mẫu số S55a - HD','B','Time New Roman',11,'','','L1',0,'');
dulieumotcot($objPHPExcel,'H2','(Ban hành kèm theo thông tư số 112/2006/TT-BTC','','Time New Roman',11,'','','L2',0,'');
dulieumotcot($objPHPExcel,'H3','ngày 27/12/2006 của Bộ trưởng Bộ Tài Chính)','','Time New Roman',11,'','','L3',0,'');
dulieumotcot($objPHPExcel,'A4','CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM','B','Time New Roman',12,'','','L4',0,'');
dulieumotcot($objPHPExcel,'A5','Độc lập - Tự do - Hạnh phúc','','Time New Roman',12,'','','L5',0,'');
dulieumotcot($objPHPExcel,'A7','BẢNG TỔNG HỢP DANH MỤC TÀI SẢN ĐỀ NGHỊ TRANG CẤP','','Time New Roman',14,'','','L7',0,'');

dulieumotcot($objPHPExcel,'A8','STT','B','Time New Roman',10,'','','A10',6,'');
dulieumotcot($objPHPExcel,'B8','Tên tài sản','B','Time New Roman',10,'','','B10',25,'C');
dulieumotcot($objPHPExcel,'C8','Hiện có tại đơn vị (Đang quản lý sử dụng)','B','Time New Roman',10,'','','E8',7,'C');
dulieumotcot($objPHPExcel,'F8','Tỉ lệ hao mòn','B','Time New Roman',10,'','','K8',7,'C');
dulieumotcot($objPHPExcel,'L8','Ghi chú','B','Time New Roman',10,'','','L10',6,'C');
dulieumotcot($objPHPExcel,'C9','Số lượng','B','Time New Roman',10,'','','C10',0,'C');
dulieumotcot($objPHPExcel,'D9','Nguyên giá theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','D10',13,'C');
dulieumotcot($objPHPExcel,'E9','Giá trị còn lại theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','E10',13,'C');
dulieumotcot($objPHPExcel,'E9','Giá trị còn lại theo SSKT (nghìn đồng)','B','Time New Roman',10,'','','E10',13,'C');
dulieumotcot($objPHPExcel,'F9','Mua sắm','B','Time New Roman',10,'','','H9',0,'C');
dulieumotcot($objPHPExcel,'I9','Tiếp nhận','B','Time New Roman',10,'','','K9',7,'C');
dulieumotcot($objPHPExcel,'F10','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G10','Chủng loại, cấp hạng','B','Time New Roman',10,'','','',12,'C');
dulieumotcot($objPHPExcel,'H10','Giá trị dự toán (nghìn đồng)','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I10','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J10','Chủng loại, cấp hạng','B','Time New Roman',10,'','','',12,'C');
dulieumotcot($objPHPExcel,'K10','Giá trị dự toán (nghìn đồng)','B','Time New Roman',10,'','','',13,'C');

kedong($objPHPExcel,'A8','L10',1,'Mỏng');

	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct madonvi,tendv from tbltrangcap where madonvi Like '$msdv%' and ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){		
		$sqldn = "Select * from tbltrangcap where madonvi = '$_madv[ma]' and ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$querydn=mysqli_query($con,$sqldn);
		$dn =  array(array("A","B","C",0,0,0,0,0,0,0,"D","E"));
		$cs=0;$i=0;
		$tcclms = 0;$tccltn = 0;
		while($rowdn=mysqli_fetch_array($querydn))		
		{
			$dn[$cs][0] = $rowdn['tengoi'];
			if ($rowdn['hinhthuc'] == "Mua sắm")
			{
				$dn[$cs][1] = $rowdn['caphang'];
				$dn[$cs][2] = "";
				$dn[$cs][6] = kieudouble($rowdn['soluong']);
				$dn[$cs][7] = kieudouble($rowdn['sotien']);
				$dn[$cs][8] = 0;
				$dn[$cs][9] = 0;
				$tcclms = $tcclms + kieudouble($rowdn['sotien']);
			}
			else
			{	
				$dn[$cs][1] = "";
				$dn[$cs][2] = $rowdn['caphang'];
				$dn[$cs][6] = 0;
				$dn[$cs][7] = 0;
				$dn[$cs][8] = kieudouble($rowdn['soluong']);
				$dn[$cs][9] = kieudouble($rowdn['sotien']);
				$tccltn = $tccltn + kieudouble($rowdn['sotien']);
			}
			$dn[$cs][3] = 0;
			$dn[$cs][4] = 0;
			$dn[$cs][5] = 0;
			$dn[$cs][10] = $_madv['ten'];
			$dn[$cs][11] = $rowdn['chitiethinhthai'];
			$cs = $cs + 1;		
		}
	}

$index=11;$tennhomsau = "";$tennhom="";$group1=0;$tennhomsau1 = "";$tennhom1="";$sogr1=0;$sogr2=0;$tong7=0;$tong9=0;$sttn1=0;
for($i = 0; $i < $cs; $i++)
{
	$tennhom=$dn[$i][10];
	if ($tennhom != $tennhomsau)
	{		
		$sogr1=$sogr1 + 1;
		$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B'.$index, $dn[$i][10])->mergeCells('B'.$index.':L'.$index);
		dinhdangBI($objPHPExcel,'A'.$index,'L'.$index,1,'B');
	}
	$tennhom1=$dn[$i][11];
	if ($tennhom1 != $tennhomsau1)
	{ 
		$sogr2=$sogr2 + 1;		
			$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B'.($index + 1 + $sttn1), $dn[$i][11]);
		dinhdangBI($objPHPExcel,'A'.($index+1 + $sttn1),'L'.($index+1+$sttn1),1,'BI');
		$sttn1=$sttn1 + 1;
		$group1 = $index + 1 + $sttn1;
	}
	$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A'.($index + 2+$sttn1-1),$i+1)
	->setCellValue('B'.($index + 2+$sttn1-1), $dn[$i][0])
	->setCellValue('C'.($index + 2+$sttn1-1), $dn[$i][3])
	->setCellValue('D'.($index + 2+$sttn1-1), $dn[$i][4])
	->setCellValue('E'.($index + 2+$sttn1-1), $dn[$i][5])
	->setCellValue('F'.($index + 2+$sttn1-1), $dn[$i][6])
	->setCellValue('G'.($index + 2+$sttn1-1), $dn[$i][1])
	->setCellValue('H'.($index + 2+$sttn1-1), $dn[$i][7])
	->setCellValue('I'.($index + 2+$sttn1-1), $dn[$i][8])
	->setCellValue('J'.($index + 2+$sttn1-1), $dn[$i][1])
	->setCellValue('K'.($index + 2+$sttn1-1), $dn[$i][9])
	->setCellValue('L'.($index + 2+$sttn1-1), "")	
	;
	$tong7 = $tong7 + kieudouble($dn[$i][7]);$tong9 = $tong9 + kieudouble($dn[$i][9]);
	$tennhomsau=$dn[$i][10];
	$tennhomsau1=$dn[$i][11];
$index++;
$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('H'.($group1-1), "=Sum(H".$group1.":H".($index+$sttn1).")")
	->setCellValue('K'.($group1-1), "=Sum(K".$group1.":K".($index+$sttn1).")")
	;	
}

dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1),'Tổng cộng','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1),$tong7,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'K'.($index+$sogr2+$sogr1),$tong9,'B','Time New Roman',10,'','','',0,'');
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A11','L'.($index+$sogr2+$sogr1),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A11','A'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'B11','B'.($index+$sogr2+$sogr1),$i,'T');
dinhdangle($objPHPExcel,'F11','G'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'H11','H'.($index+$sogr2+$sogr1),$i,'P');
dinhdangle($objPHPExcel,'I11','J'.($index+$sogr2+$sogr1),$i,'');
dinhdangle($objPHPExcel,'K11','K'.($index+$sogr2+$sogr1),$i,'P');

dinhdangsoxls($objPHPExcel,'F11','F'.($index+$sogr2+$sogr1),$i,'1P');
dinhdangsoxls($objPHPExcel,'H11','H'.($index+$sogr2+$sogr1),$i,'BT');
dinhdangsoxls($objPHPExcel,'I11','I'.($index+$sogr2+$sogr1),$i,'1P');
dinhdangsoxls($objPHPExcel,'K11','K'.($index+$sogr2+$sogr1),$i,'BT');

dinhdangxuongdong($objPHPExcel,'B11','B'.($index+$sogr2+$sogr1),$i);

kedong($objPHPExcel,'A11','L'.($index+$sogr2+$sogr1),$i,'Mỏng');

dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1 - 1 + 2),'Hà Nội, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','L'.($index+$sogr2+$sogr1 - 1 + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 3),'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 3),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1 - 1 + 3),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','L'.($index+$sogr2+$sogr1 - 1 + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1 - 1 + 4),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','L'.($index+$sogr2+$sogr1 - 1 + 4),0,'');
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 7),'Nguyễn Văn Sinh','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 7),'Nguyễn Văn Sinh','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index+$sogr2+$sogr1 - 1 + 7),'Trần Thủ Trưởng','B','Time New Roman',11,'','','L'.($index+$sogr2+$sogr1 - 1 + 7),0,'');
taofile($objPHPExcel,"BcTHDSTSDNTCxls.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BaHMTSCD.xls">Bấm vào đây để tải file về</a>
</body>