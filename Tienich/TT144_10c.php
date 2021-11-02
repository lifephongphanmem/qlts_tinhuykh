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
function giatriconlai($idts,$nam,$nguyengia)
{
	global $con;
	$kq = 0;
	$sohaomon = 0;
	$sql = "Select max(namhaomon), sotien,sodu from tblhaomon where TTQLTS = ". $idts ." and year(ngaythang) <=".$nam;
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql)){
		$sohaomon = $row['sotien'] + $row['sodu'];
	}
	$kq = $nguyengia - $sohaomon;
	if($kq<=0)
		$kq = 0;
	return $kq;
}

$objPHPExcel = new PHPExcel();

dulieumotcot($objPHPExcel,'A1','Bộ, tỉnh: ','B','Time New Roman',11,'T','','Q1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','Q2',0,'');
dulieumotcot($objPHPExcel,'R2','Mẫu số 10c-CK/TSC','B','Time New Roman',11,'','','AA2',0,'');

dulieumotcot($objPHPExcel,'A3','CÔNG KHAI TÌNH HÌNH XỬ LÝ TÀI SẢN CÔNG','B','Time New Roman',16,'','','AA3',0,'');
dulieumotcot($objPHPExcel,'A4','Năm: '.$nam,'B','Time New Roman',10,'','','AA4',0,'');

dulieumotcot($objPHPExcel,'A6','STT','','Time New Roman',10,'','','A7',5,'');
dulieumotcot($objPHPExcel,'B6','Danh mục tài sản trong kỳ báo cáo được xử lý','','Time New Roman',10,'','','B7',20,'C');
dulieumotcot($objPHPExcel,'C6','Thu hồi','','Time New Roman',10,'','','F6',8,'');
dulieumotcot($objPHPExcel,'G6','Điều chuyển','','Time New Roman',10,'','','J6',8,'');
dulieumotcot($objPHPExcel,'K6','Bán','','Time New Roman',10,'','','N6',8,'');
dulieumotcot($objPHPExcel,'O6','Thanh lý','','Time New Roman',10,'','','R6',8,'');
dulieumotcot($objPHPExcel,'S6','Tiêu hủy','','Time New Roman',10,'','','V6',8,'');
dulieumotcot($objPHPExcel,'W6','Xử lý trong trường hợp bị mất, bị hủy hoại','','Time New Roman',10,'','','Z6',8,'C');
dulieumotcot($objPHPExcel,'AA6','Ghi chú','','Time New Roman',10,'','','AA7',8,'C');

dulieumotcot($objPHPExcel,'C7','Số lượng','','Time New Roman',10,'','','C7',10,'C');
dulieumotcot($objPHPExcel,'D7','Diện tích','','Time New Roman',10,'','','D7',10,'C');
dulieumotcot($objPHPExcel,'E7','Nguyên giá','','Time New Roman',10,'','','E7',10,'C');
dulieumotcot($objPHPExcel,'F7','Giá trị còn lai','','Time New Roman',10,'','','F7',10,'C');

dulieumotcot($objPHPExcel,'G7','Số lượng','','Time New Roman',10,'','','G7',10,'C');
dulieumotcot($objPHPExcel,'H7','Diện tích','','Time New Roman',10,'','','H7',10,'C');
dulieumotcot($objPHPExcel,'I7','Nguyên giá','','Time New Roman',10,'','','I7',10,'C');
dulieumotcot($objPHPExcel,'J7','Giá trị còn lai','','Time New Roman',10,'','','J7',10,'C');

dulieumotcot($objPHPExcel,'K7','Số lượng','','Time New Roman',10,'','','K7',10,'C');
dulieumotcot($objPHPExcel,'L7','Diện tích','','Time New Roman',10,'','','L7',10,'C');
dulieumotcot($objPHPExcel,'M7','Nguyên giá','','Time New Roman',10,'','','M7',10,'C');
dulieumotcot($objPHPExcel,'N7','Giá trị còn lai','','Time New Roman',10,'','','N7',10,'C');

dulieumotcot($objPHPExcel,'O7','Số lượng','','Time New Roman',10,'','','O7',10,'C');
dulieumotcot($objPHPExcel,'P7','Diện tích','','Time New Roman',10,'','','P7',10,'C');
dulieumotcot($objPHPExcel,'Q7','Nguyên giá','','Time New Roman',10,'','','Q7',10,'C');
dulieumotcot($objPHPExcel,'R7','Giá trị còn lai','','Time New Roman',10,'','','R7',10,'C');

dulieumotcot($objPHPExcel,'S7','Số lượng','','Time New Roman',10,'','','S7',10,'C');
dulieumotcot($objPHPExcel,'T7','Diện tích','','Time New Roman',10,'','','T7',10,'C');
dulieumotcot($objPHPExcel,'U7','Nguyên giá','','Time New Roman',10,'','','U7',10,'C');
dulieumotcot($objPHPExcel,'V7','Giá trị còn lai','','Time New Roman',10,'','','V7',10,'C');

dulieumotcot($objPHPExcel,'W7','Số lượng','','Time New Roman',10,'','','W7',10,'C');
dulieumotcot($objPHPExcel,'X7','Diện tích','','Time New Roman',10,'','','X7',10,'C');
dulieumotcot($objPHPExcel,'Y7','Nguyên giá','','Time New Roman',10,'','','Y7',10,'C');
dulieumotcot($objPHPExcel,'Z7','Giá trị còn lai','','Time New Roman',10,'','','Z7',10,'C');

dulieumotcot($objPHPExcel,'A8','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B8','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C8','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D8','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E8','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F8','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G8','7','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H8','8','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I8','9','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J8','10','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K8','11','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L8','12','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'M8','13','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'N8','14','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'O8','15','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'P8','16','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Q8','17','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'R8','18','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'S8','19','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'T8','20','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'U8','21','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'V8','22','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'W8','23','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'X8','24','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Y8','25','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Z8','26','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'AA8','27','','Time New Roman',10,'','','',0,'C');

kedong($objPHPExcel,'A6','AA8',1,'Mỏng');

$index = 9;
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
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':AA' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'AA' . $index, 1, 'B');
	$index++;
	//Kết thúc tên đơn vị

	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tbldanhsachqd32.hinhthaitaisan," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where  tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS  in (select TTQLTS from tbldenghi where  year(ngaythang) = " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tbldanhsachqd32.hinhthaitaisan," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS  in (select TTQLTS from tbldenghi where  year(ngaythang) = " . $nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("",  0, 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$tong4 =0; $tong5=0; $tong8 =0; $tong9 =0; $tong12 =0; $tong13 =0;
	$tong16 =0;
	$tong17 =0;
	$tong20 =0;
	$tong21 =0;
	$tong24 =0;
	$tong25 =0;
	while ($row = mysqli_fetch_array($qrsql)) {
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['tenchitiet'];
		$ts[$cs][2] = 0;
		$ts[$cs][3] = 0;
		$ts[$cs][4] = 0;
		$ts[$cs][5] = 0;
		$ts[$cs][6] = 0;
		$ts[$cs][7] = 0;
		$ts[$cs][8] = 0;
		$ts[$cs][9] = 0;
		$ts[$cs][10] = 0;
		$ts[$cs][11] = 0;
		$ts[$cs][12] = 0;
		$ts[$cs][13] = 0;
		$ts[$cs][14] = 0;
		$ts[$cs][15] = 0;
		$ts[$cs][16] = 0;
		$ts[$cs][17] = 0;
		$ts[$cs][18] = 0;
		$ts[$cs][19] = 0;
		$ts[$cs][20] = 0;
		$ts[$cs][21] = 0;
		$ts[$cs][22] = 0;
		$ts[$cs][23] = 0;
		$ts[$cs][24] = 0;
		$ts[$cs][25] = 0;
		$ts[$cs][26] = 0;
		$ts[$cs][27] = 0;
		$sqlxl =  "Select hinhthuc from tbldenghi where TTQLTS = ". $row['TTQLTS'];
		$qrsqlxl = mysqli_query($con,$sqlxl);
		while($rowxl = mysqli_fetch_array($qrsqlxl)){
			if ($rowxl['hinhthuc'] == "Thu hồi") {
				$ts[$cs][2] = 1;
				$ts[$cs][3] =  $row['SL'];
				$ts[$cs][4] =  $row['NG'];
				$ts[$cs][5] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			} elseif ($rowxl['hinhthuc'] == "Điều chuyển") {
				$ts[$cs][6] = 1;
				$ts[$cs][7] =  $row['SL'];
				$ts[$cs][8] =  $row['NG'];
				$ts[$cs][9] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Bán") {
				$ts[$cs][10] = 1;
				$ts[$cs][11] =  $row['SL'];
				$ts[$cs][12] =  $row['NG'];
				$ts[$cs][13] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Thanh lý") {
				$ts[$cs][14] = 1;
				$ts[$cs][15] =  $row['SL'];
				$ts[$cs][16] =  $row['NG'];
				$ts[$cs][17] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Tiêu hủy") {
				$ts[$cs][18] = 1;
				$ts[$cs][19] =  $row['SL'];
				$ts[$cs][20] =  $row['NG'];
				$ts[$cs][21] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}elseif ($rowxl['hinhthuc'] == "Xử lý trong trường hợp bị mất, bị hủy hoại") {
				$ts[$cs][22] = 1;
				$ts[$cs][23] =  $row['SL'];
				$ts[$cs][24] =  $row['NG'];
				$ts[$cs][25] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  else {

			}
			if($row['SL'] <= 1){
				$ts[$cs][3] = 0;
				$ts[$cs][7] = 0;
				$ts[$cs][11] = 0;
				$ts[$cs][15] = 0;
				$ts[$cs][19] = 0;
				$ts[$cs][23] = 0;
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
			$tongnhom8 = 0;
			$tongnhom9 = 0;
			$tongnhom12 = 0;
			$tongnhom13 = 0;
			$tongnhom16 = 0;
			$tongnhom17 = 0;
			$tongnhom20 = 0;
			$tongnhom21 = 0;
			$tongnhom24 = 0;
			$tongnhom25 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$tongnhom4 += $ts[$j][4];
					$tongnhom5 += $ts[$j][5];
					$tongnhom8 += $ts[$j][8];
					$tongnhom9 += $ts[$j][8];
					$tongnhom12 += $ts[$j][12];
					$tongnhom13 += $ts[$j][13];
					$tongnhom16 += $ts[$j][16];
					$tongnhom17 += $ts[$j][17];
					$tongnhom20 += $ts[$j][20];
					$tongnhom21 += $ts[$j][21];
					$tongnhom24 += $ts[$j][24];
					$tongnhom25 += $ts[$j][25];

					$tong4 += $ts[$j][4];
					$tong5 += $ts[$j][5];
					$tong8 += $ts[$j][8];
					$tong9 += $ts[$j][8];
					$tong12 += $ts[$j][12];
					$tong13 += $ts[$j][13];
					$tong16 += $ts[$j][16];
					$tong17 += $ts[$j][17];
					$tong20 += $ts[$j][20];
					$tong21 += $ts[$j][21];
					$tong24 += $ts[$j][24];
					$tong25 += $ts[$j][25];
				}
			}
			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, "")
				->setCellValue('B' . $index, $tenhienthi)

				->setCellValue('E' . $index, dinhdangso($tongnhom4))
				->setCellValue('F' . $index, dinhdangso($tongnhom5))

				->setCellValue('I' . $index, dinhdangso($tongnhom8))
				->setCellValue('J' . $index, dinhdangso($tongnhom9))

				->setCellValue('M' . $index, dinhdangso($tongnhom12))
				->setCellValue('N' . $index, dinhdangso($tongnhom13))

				->setCellValue('Q' . $index, dinhdangso($tongnhom16))
				->setCellValue('R' . $index, dinhdangso($tongnhom17))

				->setCellValue('U' . $index, dinhdangso($tongnhom20))
				->setCellValue('V' . $index, dinhdangso($tongnhom21))

				->setCellValue('Y' . $index, dinhdangso($tongnhom24))
				->setCellValue('Z' . $index, dinhdangso($tongnhom25));
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
			->setCellValue('K' . $index, dinhdangso($ts[$i][10]))
			->setCellValue('L' . $index, dinhdangso($ts[$i][11]))
			->setCellValue('M' . $index, dinhdangso($ts[$i][12]))
			->setCellValue('N' . $index, dinhdangso($ts[$i][13]))
			->setCellValue('O' . $index, dinhdangso($ts[$i][14]))
			->setCellValue('P' . $index, dinhdangso($ts[$i][15]))
			->setCellValue('Q' . $index, dinhdangso($ts[$i][16]))
			->setCellValue('R' . $index, dinhdangso($ts[$i][17]))
			->setCellValue('S' . $index, dinhdangso($ts[$i][18]))
			->setCellValue('T' . $index, dinhdangso($ts[$i][19]))
			->setCellValue('U' . $index, dinhdangso($ts[$i][20]))
			->setCellValue('V' . $index, dinhdangso($ts[$i][21]))
			->setCellValue('W' . $index, dinhdangso($ts[$i][22]))
			->setCellValue('X' . $index, dinhdangso($ts[$i][23]))
			->setCellValue('Y' . $index, dinhdangso($ts[$i][24]))
			->setCellValue('Z' . $index, dinhdangso($ts[$i][25]))
			->setCellValue('AA' . $index, dinhdangso($ts[$i][26]));
		$index++;
		$tennhomsau = $tenhienthi;
	}
}
// in tổng cộng
dulieumotcot($objPHPExcel, 'B' . $index, 'Tổng cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
dulieumotcot($objPHPExcel, 'C' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'D' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'E' . $index, dinhdangso($tong4), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'F' . $index, dinhdangso($tong5), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'G' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'H' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'I' . $index, dinhdangso($tong8), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'J' . $index, dinhdangso($tong9), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'K' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'L' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'M' . $index, dinhdangso($tong12), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'N' . $index, dinhdangso($tong13), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'O' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'P' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'Q' . $index, dinhdangso($tong16), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'R' . $index, dinhdangso($tong17), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'S' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'T' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'U' . $index, dinhdangso($tong20), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'V' . $index, dinhdangso($tong21), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'W' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'X' . $index, 'X', 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'Y' . $index, dinhdangso($tong24), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'Z' . $index, dinhdangso($tong25), 'B', 'Time New Roman', 10, '', '', '', 0, '');


// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','AA'.$index,$stt,'Time New Roman',8);
dinhdangle($objPHPExcel,'A9','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B9','B'.$index,$stt,'T');
dinhdangle($objPHPExcel,'C9','Z'.$index,$stt,'P');

kedong($objPHPExcel,'A9','AA'.$index,$stt,'Mỏng');
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