<head>
<meta charset='utf-8'>
<?php
$BP = "";
$tungay = "";
$denngay = "";
$madv ="";
if(isset($_POST['create'])){
	$BP = $_POST['phanloai'];
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

$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblxuatdung inner join thongtindonvi on tblxuatdung.madonvi=thongtindonvi.madonvi where tblxuatdung.madonvi Like '$msdv%' and ngayxuat between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'".($BP ==""?"":"and noisudung = '" .$BP . "'");
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
dulieumotcot($objPHPExcel,'A1','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','C1',0,'');
dulieumotcot($objPHPExcel,'D1','CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM','B','Time New Roman',13,'','','G1',0,'');
dulieumotcot($objPHPExcel,'D2','Độc lập - Tự do - Hạnh phúc','B','Time New Roman',11,'','','G2',0,'');

dulieumotcot($objPHPExcel,'A4','DANH MỤC CÔNG CỤ, DỤNG CỤ LÂU BỀN THEO TIÊU CHUẨN MỚI','B','Time New Roman',16,'','','G4',0,'');
dulieumotcot($objPHPExcel,'A5','(Phân loại theo quyết định số 32/2008/QĐ-BTC được áp dụng từ ngày 01/01/2009)','I','Time New Roman',11,'','','G5',0,'');

dulieumotcot($objPHPExcel,'A6','STT','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'B6','Tên TSCĐ được chuyển sang công cụ, dụng cụ lâu bền','B','Time New Roman',10,'','','',40,'C');
dulieumotcot($objPHPExcel,'C6','Năm sử dụng','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'D6','Cấp hạng (Thông số kỹ thuật)','B','Time New Roman',10,'','','',20,'C');
dulieumotcot($objPHPExcel,'E6','Số lượng','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'F6','Nguyên giá theo sổ sách kế toán','B','Time New Roman',10,'','','',15,'C');
dulieumotcot($objPHPExcel,'G6','Ghi chú','B','Time New Roman',10,'','','',5,'C');

kedong($objPHPExcel,'A6','G6',1,'Mỏng');

$index=7;$tennhomsau = "";$tennhom="";$group1=0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {

	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':E' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
	$index++;
	//
	$sqlts = "Select tenchitiet,Year(ngayxuat) AS YearSD, CAPH, soluong, sotien, noisudung From tblxuatdung Where madonvi = '$_madv[ma]' and ngayxuat BETWEEN '" . doingay($tungay) . "' AND '" . doingay($denngay) . "'".($BP ==""?"":"and noisudung = '" .$BP . "'");
	$queryts=mysqli_query($con,$sqlts);
	$stt=0;$soluong = 0; $sotien = 0;$tstien = 0;
	while($rowts=mysqli_fetch_array($queryts)){
		$stt++;
		$tents = $rowts['tenchitiet'];
		$namsd = $rowts['YearSD'];
		$CAPH = $rowts['CAPH'];
		$soluong = dinhdangso($rowts['soluong']);
		$sotien = dinhdangso($rowts['sotien']);
		$tstien = $tstien + $rowts['sotien'];

		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $tents)
			->setCellValue('C' . $index, $namsd)
			->setCellValue('D' . $index, $CAPH)
			->setCellValue('E' . $index, $soluong)
			->setCellValue('F' . $index, $sotien)
			->setCellValue('G' . $index, '');
		$index++;
	}
	$tstien = dinhdangso($tstien);
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, '')
		->setCellValue('B' . $index, 'TỔNG CỘNG')
		->setCellValue('C' . $index, '')
		->setCellValue('D' . $index, '')
		->setCellValue('E' . $index, '')
		->setCellValue('F' . $index, $tstien)
		->setCellValue('G' . $index, '');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A7','G'.($index),$stt,'Time New Roman',10);
dinhdangle($objPHPExcel,'A7','A'.($index),$stt,'');
dinhdangle($objPHPExcel,'B7','B'.($index),$stt,'T');
dinhdangle($objPHPExcel,'C7','C'.($index),$stt,'');
dinhdangle($objPHPExcel,'D7','D'.($index),$stt,'T');
dinhdangle($objPHPExcel,'E7','F'.($index),$stt,'P');
dinhdangsoxls($objPHPExcel,'F7','F'.($index),$stt,'BT');
dinhdangxuongdong($objPHPExcel,'A7','G'.($index),$stt);
kedong($objPHPExcel,'A7','G'.($index),$stt,'Mỏng');
dulieumotcot($objPHPExcel,'A'.($index + 1),'Người lập biểu','B','Time New Roman',11,'','','B'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'C'.($index + 1),'Kế toán trưởng','B','Time New Roman',11,'','','D'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'F'.($index + 1),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','G'.($index + 1),0,'');

dulieumotcot($objPHPExcel,'A'.($index + 2),'(Ký, họ tên)','I','Time New Roman',11,'','','B'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'C'.($index + 2),'(Ký, họ tên)','I','Time New Roman',11,'','','D'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'F'.($index + 2),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','G'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'C'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'F'.($index + 6),'','B','Time New Roman',11,'','','G'.($index + 6),0,'');
taofile($objPHPExcel,"DmDCLB.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\DmDCLB.xls">Bấm vào đây để tải file về</a>
</body>