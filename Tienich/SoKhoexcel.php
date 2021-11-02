<head>
<meta charset='utf-8'>
<?php

$madv ="";
$val="";
$tendv ="";
$nam = "";
if(isset($_POST['create'])){
	$nam = $_POST['nam'];
	if($_POST['tencc'] != "")
		$val = explode('>',$_POST['tencc']);
	if($_POST['macc'] != "")
		$val = explode('>',$_POST['macc']);
	$madv = explode('>',$_POST['MADV']);
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
dulieumotcot($objPHPExcel,'H1','Mẫu số : S21-H','B','Time New Roman',11,'','','J1',0,'');
dulieumotcot($objPHPExcel,'H2','(Ban hành theo QĐ số: 19 - 2006/QĐ/BTC','','Time New Roman',11,'','','J2',0,'');
dulieumotcot($objPHPExcel,'H3','ngày 30/03/2006 của Bộ trưởng BTC),','','Time New Roman',11,'','','J3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ KHO','B','Time New Roman',16,'','','J4',0,'');
dulieumotcot($objPHPExcel,'A5','(Hoặc thẻ kho)','','Time New Roman',11,'','','J5',0,'');
dulieumotcot($objPHPExcel,'A6','- Tên nhãn hiệu quy cách, vật tư:'. $val[1],'','Time New Roman',11,'T','','J6',0,'');
dulieumotcot($objPHPExcel,'A7','- Đơn vị tính: '. $val[2]. '.............. Mã số: '. $val[0],'','Time New Roman',11,'T','','J7',0,'');

dulieumotcot($objPHPExcel,'A8','STT','B','Time New Roman',10,'','','A9',6,'');
dulieumotcot($objPHPExcel,'B8','Ngày tháng','B','Time New Roman',10,'','','B9',10,'');
dulieumotcot($objPHPExcel,'C8','Số hiệu chứng từ','B','Time New Roman',10,'','','D8',10,'C');
dulieumotcot($objPHPExcel,'C9','Nhập','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'D9','Xuất','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'E8','Diễn giải','B','Time New Roman',10,'','','E9',30,'C');
dulieumotcot($objPHPExcel,'F8','Ngày nhập xuất','B','Time New Roman',10,'','','F9',10,'C');
dulieumotcot($objPHPExcel,'G8','Số lượng','B','Time New Roman',10,'','','I8',30,'C');
dulieumotcot($objPHPExcel,'G9','Nhập','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'H9','Xuất','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'I9','Tồn','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'J8','Ký xác nhận của kế toán','B','Time New Roman',10,'','','J9',0,'C');
kedong($objPHPExcel,'A8','J8',1,'Mỏng');

$index=10;$tennhomsau = "";$tennhom="";$group1=0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':E' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
	$sql = "Delete  From tbldc";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,STR1,SL1) ".
		" Select ngaysudung,GCTS,DTKV from tblqlcc WHERE madonvi = '$_madv[ma]'".
		($nam == ""?"":" and Year(ngaysudung) = '" . $nam . "'").
		//($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'").
		($_POST['tencc'] == ""?"":" and tenchitiet = '$val[1]'").($_POST['macc'] == ""?"":" and TTQLcc = '$val[3]'").
		" order by ngaysudung";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,STR1,SL2) ".
		"Select ngayxuat,lydoxuat,soluong from tblxuatdung where madonvi = '$_madv[ma]'".
		($nam == ""?"":" and Year(ngayxuat) = '" . $nam . "'").
		//($tungay == ""?"":" and ngayxuat >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngayxuat <= '" . doingay($denngay) . "'").
		($_POST['tencc'] == ""?"":" and tenchitiet = '$val[1]'").($_POST['macc'] == ""?"":" and TTQLcc = '$val[3]'").
		"  order by ngayxuat";
	$qrsql = mysqli_query($con,$sql);
	$ton = 0;$stt=0;
	$sql = "Select NTCT,STR1,SL1,SL2 from tbldc ORDER BY NTCT,ID";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql)) {
		$index ++;
		$stt++;
		$ton += ($row[2] - $row[3]);
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, ngaythang($row['NTCT']))
			->setCellValue('C' . $index, '')
			->setCellValue('D' . $index, '')
			->setCellValue('E' . $index, $row[1])
			->setCellValue('F' . $index, ngaythang($row['NTCT']))
			->setCellValue('G' . $index, dinhdangso($row[2]))
			->setCellValue('H' . $index, dinhdangso($row[3]))
			->setCellValue('I' . $index, dinhdangso($ton))
			->setCellValue('J' . $index, '');
	}
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A6','J'.($index),$stt,'Time New Roman',10);
dinhdangle($objPHPExcel,'A10','F'.($index),$stt,'');
dinhdangle($objPHPExcel,'E10','E'.($index),$stt,'T');
dinhdangsoxls($objPHPExcel,'G10','J'.($index),$stt,'BT');
dinhdangxuongdong($objPHPExcel,'B8','D'.($index),$stt);
kedong($objPHPExcel,'A9','J'.($index),$stt,'Mỏng');
dulieumotcot($objPHPExcel,'H'.($index + 1),'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','J'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Người lập biểu','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'E'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','J'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'E'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 3),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','J'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 6),'','B','Time New Roman',11,'','','J'.($index + 6),0,'');
taofile($objPHPExcel,"SoKho.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoKho.xls">Bấm vào đây để tải file về</a>
</body>