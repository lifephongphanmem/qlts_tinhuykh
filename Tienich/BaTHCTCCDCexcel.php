<head>
<meta charset='utf-8'>
<?php
$tungay = "";
$denngay = "";
$madv ="";
$val="";
$tendv ="";
if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
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
function tondk($madonvi,$tencc)
{
	global $tungay;
	global $con;
	$kq=0;
	$sql = "Select thanhtien from tblqlcc WHERE madonvi = '$madonvi'".
		($tungay == ""?"":" and ngaysudung < '" . doingay($tungay) . "'")." and tenchitiet = '$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq += $row['thanhtien'];
	}
	$sql = "select sotien from tblxuatdung WHERE madonvi = '$madonvi'".
		($tungay == ""?"":" and ngayxuat < '" . doingay($tungay) . "'"). " and tenchitiet = '$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq -= $row['sotien'];
	}
	return $kq;
}
function nhaptk($madonvi,$tencc)
{
	global $tungay;
	global $denngay;
	global $con;
	$kq = 0;
	$sql = "Select Sum(thanhtien) as Sumofthanhtien from tblqlcc WHERE madonvi = '$madonvi'".
		($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'")
		. " and tenchitiet='$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$kq += $row['Sumofthanhtien'];
	}
	return $kq;
}
function xuattk($madonvi,$tencc)
{
	global $tungay;
	global $denngay;
	global $con;
	$kq = 0;
	$sql = "Select Sum(sotien) as Sumofsotien from tblxuatdung where madonvi = '$madonvi'".
		($tungay == ""?"":" and ngayxuat >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngayxuat <= '" . doingay($denngay) . "'")
		. " and tenchitiet='$tencc' ";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$kq += $row['Sumofsotien'];
	}
	return $kq;
}
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
	($tungay == ""?"":" and tblqlcc.ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and tblqlcc.ngaysudung <= '" . doingay($denngay) . "'");
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
dulieumotcot($objPHPExcel,'A1','Bộ: ','B','Time New Roman',11,'T','','B1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $tendv,'B','Time New Roman',11,'T','','B2',0,'');
dulieumotcot($objPHPExcel,'C1','Mẫu số : S23-H','B','Time New Roman',10,'','','F1',0,'');
dulieumotcot($objPHPExcel,'C2','(Ban hành theo QĐ số: 19 - 2006/QĐ/BTC','','Time New Roman',10,'','','F2',0,'');
dulieumotcot($objPHPExcel,'C3','ngày 30/03/2006 của Bộ trưởng BTC),','','Time New Roman',10,'','','F3',0,'');

dulieumotcot($objPHPExcel,'A4','BẢNG TỔNG HỢP  CHI TIẾT NGUYÊN LIỆU, VẬT LIỆU,','B','Time New Roman',16,'','','F4',0,'');
dulieumotcot($objPHPExcel,'A5','CÔNG CỤ, DỤNG CỤ, SẢN PHẨM, HÀNG HÓA','B','Time New Roman',11,'','','F5',0,'');
dulieumotcot($objPHPExcel,'A6','Tài khoản: ...............','','Time New Roman',11,'','','F6',0,'');
dulieumotcot($objPHPExcel,'A7','Tháng: ..........năm .............','','Time New Roman',11,'','','F7',0,'');

dulieumotcot($objPHPExcel,'A8','STT','B','Time New Roman',10,'','','A9',10,'');
dulieumotcot($objPHPExcel,'B8','Tên, quy cách nguyên liệu, vật liệu (Công cụ, dụng cụ, sản phẩm, hàng hóa)','B','Time New Roman',10,'','','B9',80,'');
dulieumotcot($objPHPExcel,'C8','SỐ TIỀN','B','Time New Roman',10,'','','F8',40,'C');
dulieumotcot($objPHPExcel,'C9','Tồn đầu kỳ','','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'D9','Nhập trong kỳ','','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'E9','Xuất trong kỳ','','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'F9','Tồn cuối kỳ','','Time New Roman',10,'','','',10,'C');

dulieumotcot($objPHPExcel,'A10','A','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B10','B','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C10','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D10','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E10','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F10','4','','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A8','F9',1,'Mỏng');

$index=11;$tennhomsau = "";$tennhom="";$group1=0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':F' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
		$index++;
		$cc = array();
		$ton = 0;
		$cs = 0;
		$sql = "Select tenchitiet from tblqlcc WHERE madonvi = '$_madv[ma]'".
			($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'")
			. " Group by tenchitiet";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$cc[$cs] = array(0 => $row['tenchitiet'],
				1 => ($tungay == ""?"":tondk($_madv['ma'],$row['tenchitiet'])),
				2 => nhaptk($_madv['ma'],$row['tenchitiet']),
				3 => xuattk($_madv['ma'],$row['tenchitiet']));
			$cs++;
		}
	$ton = 0;$stt=0;
	$tongnhap =0;
	$tongxuat =0;
	$tongdk = 0;
	$tongck = 0;
	foreach ($cc as $value) {
		$stt++;
		$ton = (kieudouble($value[1]) + kieudouble($value[2]) - kieudouble($value[3]));
		$tongnhap += kieudouble($value[2]);
		$tongxuat += kieudouble($value[3]);
		$tongdk += kieudouble($value[1]);
		$tongck += $ton;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $value[0])
			->setCellValue('C' . $index, dinhdangso($value[1]))
			->setCellValue('D' . $index, dinhdangso($value[2]))
			->setCellValue('E' . $index, dinhdangso($value[3]))
			->setCellValue('F' . $index, dinhdangso($ton));
		$index++;
	}
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, '')
		->setCellValue('B' . $index, 'Cộng')
		->setCellValue('C' . $index, dinhdangso($tongdk))
		->setCellValue('D' . $index, dinhdangso($tongnhap))
		->setCellValue('E' . $index, dinhdangso($tongxuat))
		->setCellValue('F' . $index, dinhdangso($tongck));
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','F'.($index),$stt+1,'Time New Roman',10);
dinhdangle($objPHPExcel,'A11','A'.($index),$stt+1,'');
dinhdangle($objPHPExcel,'B11','B'.($index),$stt+1,'T');
dinhdangsoxls($objPHPExcel,'C11','F'.($index),$stt+1,'BT');
//dinhdangxuongdong($objPHPExcel,'B10','D'.($index),$stt);
kedong($objPHPExcel,'A10','F'.($index),$stt+1,'Mỏng');
dulieumotcot($objPHPExcel,'C'.($index + 1),'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','F'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Người lập biểu','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'C'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','F'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'C'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','F'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'C'.($index + 6),'','B','Time New Roman',11,'','','F'.($index + 6),0,'');
taofile($objPHPExcel,"BaTHCTCCDC.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BaTHCTCCDC.xls">Bấm vào đây để tải file về</a>
</body>