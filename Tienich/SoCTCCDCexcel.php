<head>
<meta charset='utf-8'>
<?php
$madv ="";
$val="";
$tendv ="";
$nam = "";
if(isset($_POST['create'])){
	$val = explode('>',$_POST['tencc']);
	$madv = explode('>',$_POST['MADV']);
	$nam = $_POST['nam'];
	$msdv = $madv[0];
	$tendv = $_POST['tendv'];
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

$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
	($nam == ""?"":" and Year(ngaysudung) = '" . $nam . "'");
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Bộ: ','B','Time New Roman',11,'T','','G1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','G2',0,'');
dulieumotcot($objPHPExcel,'H1','Mẫu số : S22-H','B','Time New Roman',10,'','','K1',0,'');
dulieumotcot($objPHPExcel,'H2','(Ban hành theo QĐ số: 19 - 2006/QĐ/BTC','','Time New Roman',10,'','','K2',0,'');
dulieumotcot($objPHPExcel,'H3','ngày 30/03/2006 của Bộ trưởng BTC),','','Time New Roman',10,'','','K3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ CHI TIẾT NGUYÊN LIỆU VẬT LIỆU, CÔNG CỤ, DỤNG CỤ, SẢN PHẨM, HÀNG HÓA','B','Time New Roman',16,'','','K4',0,'');
dulieumotcot($objPHPExcel,'A5','Năm:'. $nam,'','Time New Roman',11,'','','K5',0,'');
dulieumotcot($objPHPExcel,'A6','Tài khoản: ...............','','Time New Roman',11,'','','K6',0,'');
dulieumotcot($objPHPExcel,'A7','Tên kho: ...............','','Time New Roman',11,'','','K7',0,'');
dulieumotcot($objPHPExcel,'A8','Tên nguyên liệu, vật liệu, công cụ, dụng cụ, sản phẩm, hàng hóa: '. $val[1],'','Time New Roman',11,'T','','K8',0,'');
dulieumotcot($objPHPExcel,'A9','- Đơn vị tính: '. $val[2]. '.............. Quy cách, phẩm chất: ','','Time New Roman',11,'T','','K9',0,'');

dulieumotcot($objPHPExcel,'A10','CHỨNG TỪ','B','Time New Roman',10,'','','B10',18,'');
dulieumotcot($objPHPExcel,'A11','Số hiệu','','Time New Roman',10,'','','',8,'C');
dulieumotcot($objPHPExcel,'B11','Ngày, tháng','','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'C10','Diễn giải','B','Time New Roman',10,'','','C11',30,'');
dulieumotcot($objPHPExcel,'D10','Đơn giá','B','Time New Roman',10,'','','D11',10,'C');
dulieumotcot($objPHPExcel,'E10','NHẬP','B','Time New Roman',10,'','','F10',7,'C');
dulieumotcot($objPHPExcel,'G10','XUẤT','B','Time New Roman',10,'','','H10',7,'C');
dulieumotcot($objPHPExcel,'I10','TỒN','B','Time New Roman',10,'','','J10',7,'C');

dulieumotcot($objPHPExcel,'E11','Số lượng','','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'F11','Thành tiền','','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'G11','Số lượng','','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'H11','Thành tiền','','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'I11','Số lượng','','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'J11','Thành tiền','','Time New Roman',10,'','','',7,'C');

dulieumotcot($objPHPExcel,'K10','Ghi chú','B','Time New Roman',10,'','','K11',0,'C');
dulieumotcot($objPHPExcel,'A12','A','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B12','B','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C12','C','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D12','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E12','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F12','3=1x2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G12','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H12','5=1x4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I12','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J12','7=1x6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K12','D','','Time New Roman',10,'','','',0,'C');

kedong($objPHPExcel,'A10','K10',1,'Mỏng');

$index=13;$tennhomsau = "";$tennhom="";$group1=0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':E' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
		$index++;
	$sql = "Delete  From tbldc";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,SL6,STR1,SL1,SL2,SL3)".
		" Select ngaysudung,TTQLcc,GCTS,dongia,DTKV,thanhtien from tblqlcc WHERE madonvi = '$_madv[ma]'".
		" and Year(ngaysudung) ='$nam'"
		. " and tenchitiet = '$val[1]' order by ngaysudung";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,SL6,STR1,SL1,SL4,SL5)".
		" Select ngayxuat,ttxuatdung,lydoxuat,dongia,soluong,sotien from tblxuatdung where madonvi = '$_madv[ma]'".
		" and Year(ngayxuat) ='$nam'"
		. " and tenchitiet='$val[1]'  order by ngayxuat";
	$querycc = mysqli_query($con,$sql);
	$ton = 0;
	$stt = 0;
	$tont = 0;
	$tongnhap = 0;
	$tongxuat = 0;
	$tiennhap = 0;
	$tienxuat = 0;
	$sql = "Select SL6,NTCT,STR1,SL1,SL2,SL3,SL4,SL5 From tbldc ORDER BY NTCT,ID";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$stt++;
		$tont += ($row['SL3'] - $row['SL5']);
		$ton += ($row['SL2'] - $row['SL4']);
		$tongnhap += $row['SL2'];
		$tongxuat += $row['SL4'];
		$tiennhap += $row['SL3'];
		$tienxuat += $row['SL5'];
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $row[0])
			->setCellValue('B' . $index, ngaythang($row[1]))
			->setCellValue('C' . $index, $row[2])
			->setCellValue('D' . $index, dinhdangso($row[3]))
			->setCellValue('E' . $index, dinhdangso($row[4]))
			->setCellValue('F' . $index, dinhdangso($row[5]))
			->setCellValue('G' . $index, dinhdangso($row[6]))
			->setCellValue('H' . $index, dinhdangso($row[7]))
			->setCellValue('I' . $index, dinhdangso($ton))
			->setCellValue('J' . $index, dinhdangso($tont))
			->setCellValue('K' . $index, '');
		$index++;
	}
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, '')
		->setCellValue('B' . $index, '')
		->setCellValue('C' . $index, 'Cộng')
		->setCellValue('D' . $index, '')
		->setCellValue('E' . $index, dinhdangso($tongnhap))
		->setCellValue('F' . $index,  dinhdangso($tiennhap))
		->setCellValue('G' . $index, dinhdangso($tongxuat))
		->setCellValue('H' . $index, dinhdangso($tienxuat))
		->setCellValue('I' . $index, dinhdangso($tongnhap - $tongxuat))
		->setCellValue('J' . $index, dinhdangso($tiennhap - $tienxuat))
		->setCellValue('K' . $index, '');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A13','K'.($index),$stt,'Time New Roman',10);
dinhdangle($objPHPExcel,'A13','F'.($index),$stt,'');
dinhdangle($objPHPExcel,'C13','C'.($index),$stt,'T');
dinhdangsoxls($objPHPExcel,'E13','J'.($index),$stt,'BT');
dinhdangxuongdong($objPHPExcel,'B13','D'.($index),$stt);
kedong($objPHPExcel,'A10','K'.($index),$stt,'Mỏng');
dulieumotcot($objPHPExcel,'H'.($index + 1),'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','K'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Người lập biểu','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','K'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 3),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','K'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 6),'','B','Time New Roman',11,'','','K'.($index + 6),0,'');
taofile($objPHPExcel,"SoCTCCDC.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoCTCCDC.xls">Bấm vào đây để tải file về</a>
</body>