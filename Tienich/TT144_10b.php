<head>
<meta charset='utf-8'>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$ts5="No";
$nam = $_POST['nambc'];
if(isset($_POST['create'])){
	if(isset($_POST['ts5']))
		$ts5 = $_POST['ts5'];
	$mah =$_POST['huyen'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $_POST['msdv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
$tendv = "";
$nlb="";
$ktt="";
$ttdv="";
$sql = "Select tendv,nlb,ptkt,ttdv From thongtindonvi WHERE madonvi = '$msdv'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$tendv = $row['tendv'];
	$nlb = $row['nlb'];
	$ktt = $row['ptkt'];
	$ttdv = $row['ttdv'];
}
	?>
</head>
<body>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$kq = "";$dckv="";$dtkv=0;$gtskt=0;
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';
//làm việc với cơ sở dữ liệu
// kết nối csdl
function sapxep($in_bike1, $in_bike2){
	if ($in_bike1["ngaythang"] > $in_bike2["ngaythang"]){
		return 1;
	}
	else if ($in_bike1["ngaythang"] == $in_bike2["ngaythang"]){
		return 0;
	}
	else {
		return -1;
	}
}
function sohaomonnam($idts,$nam)
{
	global $con;
	$sohaomon = 0;
	$sql = "select sotien,sodu,namhaomon from tblhaomon where namhaomon = " . $nam . " and TTQLTS = " . $idts;
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon = $rowhm['sotien'];
	}
	return $sohaomon;
}

function soduhm($idts,$nam,$namsd,$nguyengia)
{
	$soduhm = 0;
	for ($i = $namsd; $i <= $nam; $i++){
		$soduhm += sohaomon($idts,$i);
	}
	if($soduhm >= $nguyengia)
		$soduhm = $nguyengia;
	return $soduhm;
}

function chekts($idts,$nam)
{
	global $con;
	$sql = "Select TTQLTS from tbltanggiam WHERE tanggiam like 'Điều chuyển%' and  TTQLTS = " . $idts . " and year(ngaytanggiam) = " . $nam;
	$qrsql = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($qrsql)) {
		return true;
	}
	return false;
}
function sohaomon($idts,$nam)
{
	$chek = chekts($idts,$nam);
	if($chek)
	{
		$sohaomon = 0;
	}
	else {
		global $con;
		$namsd = 0;
		$sohaomon = 0;
		$nguyengia = 0;
		$hm = 0;
		$hm32 = 0;
		$sql = "Select year(ngaysudung) as namsd,(ngansach+nguonkhac) as nguyengia, phantram, phantram32 From Tblqlts where TTQLTS = " . $idts;
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$namsd = $row['namsd'];
			$nguyengia = $row['nguyengia'];
			$hm = $row['phantram'];
			$hm32 = $row['phantram32'];
		}
		$tangst = 0;
		$giamst = 0;
		$sql = "Select ngansach,nguonkhac,tanggiam,sotien from tbltanggiam" .
			" where (tanggiam not like 'Thanh lý%' and tanggiam not like 'Thu hồi%' and tanggiam not like 'Điều chuyển%') and TTQLTS = " . $idts . " and year(ngaytanggiam) <= " . $nam;
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			if ($row['tanggiam'] == "Tăng")
				$tangst += $row['ngansach'] + $row['nguonkhac'];
			else
				$giamst += $row['sotien'];
		}
		$nguyengia += $tangst - $giamst;
		if ($nam >= $namsd) {
			if ($nam < 2013 && $nam > $namsd)
				$sohaomon += $nguyengia * $hm32 / 100;
			if ($nam >= 2013 && $nam < 2015)
				$sohaomon += $nguyengia * $hm32 / 100;
			if ($nam >= 2015)
				$sohaomon += $nguyengia * $hm / 100;
		}
	}
	return $sohaomon;
}

$objPHPExcel = new PHPExcel();

dulieumotcot($objPHPExcel,'A1','Bộ, tỉnh: ','B','Time New Roman',11,'T','','K1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','H2',0,'');
dulieumotcot($objPHPExcel,'I2','Mẫu số 10b-CK/TSC','B','Time New Roman',11,'','','K2',0,'');

dulieumotcot($objPHPExcel,'A3','CÔNG KHAI TÌNH HÌNH QUẢN LÝ, SỬ DỤNG TÀI SẢN CÔNG','B','Time New Roman',16,'','','K3',0,'');
dulieumotcot($objPHPExcel,'A4','Năm: '.$nam,'B','Time New Roman',10,'','','K4',0,'');

dulieumotcot($objPHPExcel,'A6','STT','','Time New Roman',10,'','','A8',5,'');
dulieumotcot($objPHPExcel,'B6','TÀI SẢN','','Time New Roman',10,'','','B8',20,'');
dulieumotcot($objPHPExcel,'C6','TỔNG CỘNG','','Time New Roman',10,'','','D7',8,'');
dulieumotcot($objPHPExcel,'E6','HIỆN TRẠNG SỬ DỤNG','','Time New Roman',10,'','','K6',8,'');

dulieumotcot($objPHPExcel,'E7','Quản lý nhà nước','','Time New Roman',10,'','','E8',10,'');
dulieumotcot($objPHPExcel,'F7','Hoạt động sự nghiệp	','','Time New Roman',10,'','','J7',10,'');
dulieumotcot($objPHPExcel,'K7','Sử dụng khác','','Time New Roman',10,'','','K7',10,'');

dulieumotcot($objPHPExcel,'C8','SỐ LƯỢNG','','Time New Roman',10,'','','C8',10,'');
dulieumotcot($objPHPExcel,'D8','DIỆN TÍCH','','Time New Roman',10,'','','D8',10,'');

dulieumotcot($objPHPExcel,'F8','Không kinh doanh','','Time New Roman',10,'','','F8',24,'C');
dulieumotcot($objPHPExcel,'G8','Kinh doanh','B','Time New Roman',10,'','','G8',0,'C');
dulieumotcot($objPHPExcel,'H8','Cho thuê','','Time New Roman',10,'','','H8',15,'C');
dulieumotcot($objPHPExcel,'I8','Liên doanh, liên kết','','Time New Roman',10,'','','I8',24,'C');
dulieumotcot($objPHPExcel,'J8','Sử dụng hỗn hợp','B','Time New Roman',10,'','','J8',0,'C');

dulieumotcot($objPHPExcel,'A9','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B9','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C9','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D9','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E9','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F9','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G9','7','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H9','8','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I9','9','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J9','10','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K9','11','','Time New Roman',10,'','','',0,'C');

kedong($objPHPExcel,'A6','K9',1,'Mỏng');

$index = 10;
$stt = 0;
$sttdv = 0;
//Lấy danh sách đơn vị
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" where tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)) {
	$_aDV[] = array('ma' => $_r['madonvi'],
		'ten' => $_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	$sttdv++;
	//Tên đơn vị
	// in tên đơn vị
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $sttdv);
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':K' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'B');
	$index++;
	//Kết thúc tên đơn vị

	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat,".
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,".
			"tblqlts.phantram,tbldanhsachqd32.hinhthaitaisan" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where  tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat,".
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,".
			"tblqlts.phantram,tblqlts.phantram32" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " .$nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("",  0, 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$tong4 =0; $tong5=0; $tong6 =0; $tong7 =0; $tong8 =0; $tong9 =0; $tong10 =0;
	while ($row = mysqli_fetch_array($qrsql)) {
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['tenchitiet'];
		$ts[$cs][2] = 1;
		$ts[$cs][3] = $row['SL'];
		$ts[$cs][4] = 0;
		$ts[$cs][5] = 0;
		$ts[$cs][6] = 0;
		$ts[$cs][7] = 0;
		$ts[$cs][8] = 0;
		$ts[$cs][9] = 0;
		$ts[$cs][10] =0;
		$sqlht = "Select distinct phanloai, soluong from tblhientrang WHERE TTQLTS = ".$row['TTQLTS'] ." and year(ngaythang) <= ".$nam;
		$qrsqlht = mysqli_query($con, $sqlht);
		while ($rowht = mysqli_fetch_array($qrsqlht)){
			if($rowht['phanloai'] == 'QLNN' ||$rowht['phanloai'] == 'Trụ sở làm việc') {
				$ts[$cs][4] = $rowht['soluong'];
				$tong4 += $rowht['soluong'];
			}
			elseif($rowht['phanloai'] == 'Không KD' ) {
				$ts[$cs][5] = $rowht['soluong'];
				$tong5 += $rowht['soluong'];
			}
			elseif($rowht['phanloai'] == 'Kinh doanh' ) {
				$ts[$cs][6] = $rowht['soluong'];
				$tong6 += $rowht['soluong'];
			}
			elseif($rowht['phanloai'] == 'Cho thuê') {
				$ts[$cs][7] = $rowht['soluong'];
				$tong7 += $rowht['soluong'];
			}
			elseif($rowht['phanloai'] == 'HĐ khác') {
				$ts[$cs][8] = $rowht['soluong'];
				$tong8 += $rowht['soluong'];
			}
			elseif($rowht['phanloai'] == 'Cơ sở HĐ sự nghiệp') {
				$ts[$cs][9] = $rowht['soluong'];
				$tong9 += $rowht['soluong'];
			}
			else {
				$ts[$cs][10] = $rowht['soluong'];
				$tong10 += $rowht['soluong'];
			}
		}
		$cs = $cs + 1;
	}
	$j = 0;
	$tennhomsau = "";
	$tennhom = "";
	$stt = 0;
	for ($i = 0; $i < $cs; $i++) {
		$tennhom = $ts[$i][0];
		$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? '1 - Đất khuân viên' : ($tennhom == 'Nhà, công trình xây dựng' ? '2 - Nhà' : ($tennhom == 'Nhà' ? '2 - Nhà' :($tennhom == 'Xe ô tô' ? '3 - Xe ô tô' :($tennhom == 'Phương tiện vận tải đường bộ' ? '3 - Xe ô tô' : '4 - Tài sản cố định khác'))));
		$tengroup = $tenhienthi;
		$stt++;
		if ($tengroup != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
			//nhóm group
			$tongnhom4 = 0;
			$tongnhom5 = 0;
			$tongnhom6 = 0;
			$tongnhom7 = 0;
			$tongnhom8 = 0;
			$tongnhom9 = 0;
			$tongnhom10 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$tongnhom4 += $ts[$j][4];
					$tongnhom5 += $ts[$j][5];
					$tongnhom6 += $ts[$j][6];
					$tongnhom7 += $ts[$j][7];
					$tongnhom8 += $ts[$j][8];
					$tongnhom9 += $ts[$j][9];
					$tongnhom10 += $ts[$j][10];
				}
			}
			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, "")
				->setCellValue('B' . $index, $tenhienthi)
				->setCellValue('C' . $index, "")
				->setCellValue('D' .$index, "")
				->setCellValue('E' . $index, dinhdangso($tongnhom4))
				->setCellValue('F' . $index, dinhdangso($tongnhom5))
				->setCellValue('G' . $index, dinhdangso($tongnhom6))
				->setCellValue('H' . $index, dinhdangso($tongnhom7))
				->setCellValue('I' . $index, dinhdangso($tongnhom8))
				->setCellValue('J' . $index, dinhdangso($tongnhom9))
				->setCellValue('K' . $index, dinhdangso($tongnhom10));
			dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
			$index++;
		}
		// chi tiết
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $ts[$i][1])
			->setCellValue('C' . $index, $ts[$i][2])
			->setCellValue('D' . $index, dinhdangso($ts[$i][3]))
			->setCellValue('E' . $index, dinhdangso($ts[$i][4]))
			->setCellValue('F' . $index, dinhdangso($ts[$i][5]))
			->setCellValue('G' . $index, dinhdangso($ts[$i][6]))
			->setCellValue('H' . $index, dinhdangso($ts[$i][7]))
			->setCellValue('I' . $index, dinhdangso($ts[$i][8]))
			->setCellValue('J' . $index, dinhdangso($ts[$i][9]))
			->setCellValue('K' . $index, dinhdangso($ts[$i][10]));
		$index++;
		$tennhomsau = $tenhienthi;
	}
}
// in tổng cộng
dulieumotcot($objPHPExcel, 'B' . $index, 'Tổng cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
dulieumotcot($objPHPExcel, 'C' . $index, 'X', 'B', 'Time New Roman', 10, '', '', 'C' . $index, 0, '');
dulieumotcot($objPHPExcel, 'D' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'E' . $index, dinhdangso($tong4), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'F' . $index, dinhdangso($tong5), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'G' . $index, dinhdangso($tong6), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'H' . $index, dinhdangso($tong7), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'I' . $index, dinhdangso($tong8), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'J' . $index, dinhdangso($tong9), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'K' . $index, dinhdangso($tong10), 'B', 'Time New Roman', 10, '', '', '', 0, '');

// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','K'.$index,$stt,'Time New Roman',8);
dinhdangle($objPHPExcel,'A10','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B10','B'.$index,$stt,'T');
dinhdangle($objPHPExcel,'C10','K'.$index,$stt,'P');

kedong($objPHPExcel,'A10','K'.$index,$stt,'Mỏng');
$index ++;
dulieumotcot($objPHPExcel,'F'.$index,'............, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'NGƯỜI LẬP BÁO CÁO','B','Time New Roman',11,'','','E'.$index,0,'');
dulieumotcot($objPHPExcel,'F'.$index,'THỦ TRƯỞNG ĐƠN VỊ','B','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','E'.$index,0,'');
dulieumotcot($objPHPExcel,'F'.$index,'(Ký, họ tên và đóng dấu)','I','Time New Roman',11,'','','K'.$index,0,'');
//Xuất ra file Excel
taofile($objPHPExcel,"TT144_10b.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save(str_replace('.php', '.xls', __FILE__));
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT144_10b.xls">Bấm vào đây để tải file về</a>
</body>