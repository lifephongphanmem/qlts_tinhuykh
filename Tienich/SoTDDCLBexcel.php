<head>
<meta charset='utf-8'>
<?php
$nam="";
$noisd="";
$loaicc="";
$madv ="";
$nam = "";
if(isset($_POST['create']))
{
	$nam = $_POST['nam'];
	$noisd = $_POST['noisudung'];
	$loaicc = $_POST['loaicc'];
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
function my_sort($ar, $br)
{
	if ($ar["0"] == $br["0"])
		return 0;
	return ($ar["0"] > $br["0"])? 1:-1;
}
//$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
//	($tungay == ""?"":" and tblqlcc.ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and tblqlcc.ngaysudung <= '" . doingay($denngay) . "'");
//$_qdv=mysqli_query($con,$_sQLdv);
//$_aDV=array();
//while($_r=mysqli_fetch_array($_qdv)){
//	$_aDV[]=array('ma'=>$_r['madonvi'],
//		'ten'=>$_r['tendv']
//	);
//}

//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Bộ: ','B','Time New Roman',11,'T','','H1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','H2',0,'');
dulieumotcot($objPHPExcel,'I1','Mẫu số : S26-H','B','Time New Roman',10,'','','N1',0,'');
dulieumotcot($objPHPExcel,'I2','(Ban hành theo Thông tư số 107/2017/TT-BTC','','Time New Roman',10,'','','N2',0,'');
dulieumotcot($objPHPExcel,'I3','ngày 10/10/2017 của Bộ Tài chính)','','Time New Roman',10,'','','N3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ THEO DÕI DỤNG CỤ LÂU BỀN TẠI NƠI SỬ DỤNG','B','Time New Roman',16,'','','N4',0,'');
dulieumotcot($objPHPExcel,'A5','Năm: '.$nam,'','Time New Roman',11,'','','N5',0,'');
dulieumotcot($objPHPExcel,'A6','Tên đơn vị, phòng ban (hoặc người sử dụng): '.$noisd,'','Time New Roman',11,'T','','N6',0,'');
dulieumotcot($objPHPExcel,'A7','Loại công cụ, dụng cụ (hoặc nhóm công cụ, dụng cụ): '.$loaicc,'','Time New Roman',11,'T','','N7',0,'');

dulieumotcot($objPHPExcel,'A8','Ngày, tháng ghi sổ','B','Time New Roman',10,'','','A10',10,'C');
dulieumotcot($objPHPExcel,'B8','Ghi tăng dụng cụ lâu bền','B','Time New Roman',10,'','','H8',0,'C');
dulieumotcot($objPHPExcel,'B9','Chứng từ','B','Time New Roman',10,'','','C9',0,'C');
dulieumotcot($objPHPExcel,'B10','Số hiệu','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C10','Ngày tháng','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'D9','Tên dụng cụ lâu bền','B','Time New Roman',10,'','','D10',30,'C');
dulieumotcot($objPHPExcel,'E9','Đơn vị tính','B','Time New Roman',10,'','','E10',5,'C');
dulieumotcot($objPHPExcel,'F9','Số lượng','B','Time New Roman',10,'','','F10',5,'C');
dulieumotcot($objPHPExcel,'G9','Đơn giá','B','Time New Roman',10,'','','G10',15,'C');
dulieumotcot($objPHPExcel,'H9','Thành tiền','B','Time New Roman',10,'','','H10',15,'C');

dulieumotcot($objPHPExcel,'I8','Ghi giảm dụng cụ lâu bền','B','Time New Roman',10,'','','N8',0,'C');
dulieumotcot($objPHPExcel,'I9','Chứng từ','B','Time New Roman',10,'','','J9',0,'C');
dulieumotcot($objPHPExcel,'I10','Số hiệu','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J10','Ngày tháng','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'K9','Lý do','B','Time New Roman',10,'','','K10',20,'C');
dulieumotcot($objPHPExcel,'L9','Số lượng','B','Time New Roman',10,'','','L10',5,'C');
dulieumotcot($objPHPExcel,'M9','Đơn giá','B','Time New Roman',10,'','','M10',10,'C');
dulieumotcot($objPHPExcel,'N9','Thành tiền','B','Time New Roman',10,'','','N10',10,'C');

dulieumotcot($objPHPExcel,'A11','A','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B11','B','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C11','C','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D11','D','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E11','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F11','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G11','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H11','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I11','E','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J11','F','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K11','G','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L11','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'M11','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'N11','7','','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A8','N11',1,'Mỏng');

$index=12;$tennhomsau = "";$tennhom="";$group1=0;

//$ar = array(array("A","B","C","D",0,0,0,0,"E","F","G",0,0,0,0,0));
$ar = array();
$c=0;
$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0;
$sql = "Select ngayxuat,ttxuatdung,tenchitiet,dvt,soluong,dongia,sotien from tblxuatdung where madonvi Like '$msdv%'".
	" and mataisan like 'C%' ".
	($loaicc == ""?"":" and chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and noisudung = '" . $noisd . "'").
	($nam == ""?"": " and year(ngayxuat) = ".$nam);
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$ar[$c][0] = $row['ngayxuat'];
	$ar[$c][1] = $row['ttxuatdung'];
	$ar[$c][2] = $row['tenchitiet'];
	$ar[$c][3] = $row['dvt'];
	$ar[$c][4] = $row['ngayxuat'];
	$ar[$c][5] = $row['soluong'];
	$ar[$c][6] = $row['dongia'];
	$ar[$c][7] = $row['sotien'];
	$ar[$c][8] = "";
	$ar[$c][9] = "";
	$ar[$c][10] = "";
	$ar[$c][11] = 0;
	$ar[$c][12] = 0;
	$ar[$c][13] = 0;
	$c++;
}
$sql = "Select ngaythang,tenchitiet,TTbaohong,Lydohong,soluong,dongia,sotien,dvt from tblbaohong where madonvi Like '$msdv%'".
	"  and mataisan like 'C%' ".
	($loaicc == ""?"":" and chitiethinhthai = '" . $loaicc . "'").($noisd == ""?"":" and noibaohong = '" . $noisd . "'").
	($nam == ""?"": " and year(ngaythang) = ".$nam);
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$ar[$c][0] = $row['ngaythang'];
	$ar[$c][1] = "";
	$ar[$c][2] = $row['tenchitiet'];
	$ar[$c][3] = $row['dvt'];
	$ar[$c][4] = "";
	$ar[$c][5] = 0;
	$ar[$c][6] = 0;
	$ar[$c][7] = 0;
	$ar[$c][8] = $row['TTbaohong'];
	$ar[$c][9] = $row['ngaythang'];
	$ar[$c][10] = $row['Lydohong'];
	$ar[$c][11] = $row['soluong'];
	$ar[$c][12] = $row['dongia'];
	$ar[$c][13] = $row['sotien'];
	$c++;
}
uasort($ar,"my_sort");
	$tongtt =0;
	$tongttg = 0;
	$stt=0;
	foreach ($ar as $ar) {
		$stt++;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, ngaythang($ar[0]))
			->setCellValue('B' . $index, '')
			->setCellValue('C' . $index, ngaythang($ar[4]))
			->setCellValue('D' . $index, $ar[2])
			->setCellValue('E' . $index, $ar[3])
			->setCellValue('F' . $index, dinhdangso($ar[5]))
			->setCellValue('G' . $index, dinhdangso($ar[6]))
			->setCellValue('H' . $index, dinhdangso($ar[7]))
			->setCellValue('I' . $index, '')
			->setCellValue('J' . $index, ngaythang($ar[9]))
			->setCellValue('K' . $index, $ar[10])
			->setCellValue('L' . $index, dinhdangso($ar[11]))
			->setCellValue('M' . $index, dinhdangso($ar[12]))
			->setCellValue('N' . $index, dinhdangso($ar[13]));
		$index++;

		$tongtt += $ar[7];
		$tongttg += kieudouble($ar[13]);
		$dst = $tongtt;
		$dstg = $tongttg;
		}
$tongtt = dinhdangso($tongtt);
$tongttg = dinhdangso($tongttg);
$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A' . $index, '')
	->setCellValue('B' . $index, '')
	->setCellValue('C' . $index, '')
	->setCellValue('D' . $index, 'Tổng cộng')
	->setCellValue('E' . $index, '')
	->setCellValue('F' . $index, '')
	->setCellValue('G' . $index, '')
	->setCellValue('H' . $index, $tongtt)
	->setCellValue('I' . $index, '')
	->setCellValue('J' . $index, '')
	->setCellValue('K' . $index, '')
	->setCellValue('L' . $index, '')
	->setCellValue('M' . $index, '')
	->setCellValue('N' . $index, $tongttg);

// truyền dữ liệu
dinhdangfont($objPHPExcel,'A12','F'.($index),$stt+1,'Time New Roman',10);
dinhdangle($objPHPExcel,'A12','A'.($index),$stt+1,'');
dinhdangle($objPHPExcel,'B12','B'.($index),$stt+1,'T');
dinhdangle($objPHPExcel,'C12','C'.($index),$stt+1,'');
dinhdangle($objPHPExcel,'D12','D'.($index),$stt+1,'T');
dinhdangle($objPHPExcel,'E12','E'.($index),$stt+1,'');
dinhdangle($objPHPExcel,'F12','H'.($index),$stt+1,'P');
dinhdangsoxls($objPHPExcel,'F12','H'.($index),$stt+1,'BT');
dinhdangle($objPHPExcel,'I12','J'.($index),$stt+1,'');
dinhdangle($objPHPExcel,'K12','K'.($index),$stt+1,'T');
dinhdangle($objPHPExcel,'L12','N'.($index),$stt+1,'P');
dinhdangsoxls($objPHPExcel,'L12','N'.($index),$stt+1,'BT');

//dinhdangxuongdong($objPHPExcel,'B10','D'.($index),$stt);
kedong($objPHPExcel,'A12','N'.($index),$stt+1,'Mỏng');
dulieumotcot($objPHPExcel,'G'.($index + 1),'- Sổ này có ... trang, đánh số từ trang 01 đến trang ......','I','Time New Roman',11,'T','','N'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'G'.($index + 2),'- Ngày mở sổ: .....................','I','Time New Roman',11,'T','','N'.($index + 2),0,'');

dulieumotcot($objPHPExcel,'I'.($index + 3),'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','N'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 4),'Người ghi sổ','B','Time New Roman',11,'','','D'.($index + 4),0,'');
dulieumotcot($objPHPExcel,'E'.($index + 4),'Kế toán trưởng','B','Time New Roman',11,'','','H'.($index + 4),0,'');
dulieumotcot($objPHPExcel,'I'.($index + 4),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','N'.($index + 4),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 5),'(Ký, họ tên)','I','Time New Roman',11,'','','D'.($index + 5),0,'');
dulieumotcot($objPHPExcel,'E'.($index + 5),'(Ký, họ tên)','I','Time New Roman',11,'','','H'.($index + 5),0,'');
dulieumotcot($objPHPExcel,'I'.($index + 5),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','N'.($index + 5),0,'');
taofile($objPHPExcel,"SoTDDCLB.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoTDDCLB.xls">Bấm vào đây để tải file về</a>
</body>