 <head>
<meta charset='utf-8'>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$ngaythang = date('Y-m-d');
$phanloai = "";
$nam = "";
$mah ="";
$madv ="";
$ts5 = "No";
$noidung="";
$hmtd = "No";
$hmht = "No";
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$nam = $_POST['nambc'];
	$mah =$_POST['huyen'];
	if(isset($_POST['ts5']))
		$ts5 = $_POST['ts5'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $_POST['msdv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['noidung']))
		$noidung = $_POST['noidung'];
	if(isset($_POST['hmtd']))
		$hmtd = $_POST['hmtd'];
	if(isset($_POST['hmht']))
		$hmht = $_POST['hmht'];
}
$tendv = "";
$nlb="";
$ktt="";
$sql = "Select tendv,nlb,ptkt From thongtindonvi WHERE madonvi = '$msdv'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$tendv = $row['tendv'];
	$nlb = $row['nlb'];
	$ktt = $row['ptkt'];
}
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';
?>
</head>
<body>

<?php
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
$cs=0;
//luu cac thong tin vao file excel
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Bộ: ','B','Time New Roman',11,'T','','N1',0,'');
dulieumotcot($objPHPExcel,'A2',$madv[2],'B','Time New Roman',11,'T','','N2',0,'');

dulieumotcot($objPHPExcel,'O1','Mẫu số S31 - H','B','Time New Roman',11,'','','T1',0,'');
dulieumotcot($objPHPExcel,'O2','(Ban hành theo QĐ số: 19/2006/QĐ-BTC','','Time New Roman',11,'','','T2',0,'');
dulieumotcot($objPHPExcel,'O3','ngày 30/03/2006 của Bộ trưởng Bộ Tài Chính)','','Time New Roman',11,'','','T3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ TÀI SẢN CỐ ĐỊNH','B','Time New Roman',16,'','','T4',0,'');
dulieumotcot($objPHPExcel,'A5','Năm:'.$nam,'BI','Time New Roman',11,'','','T5',0,'');
dulieumotcot($objPHPExcel,'A6','Loại tài sản cố định: ............. ','BI','Time New Roman',11,'','','T6',0,'');

dulieumotcot($objPHPExcel,'A7','STT','B','Time New Roman',10,'','','A9',4,'C');
dulieumotcot($objPHPExcel,'B7','GHI TĂNG TÀI SẢN CỐ ĐỊNH','B','Time New Roman',10,'','','H7',0,'');
dulieumotcot($objPHPExcel,'I7','HAO MÒN TÀI SẢN CỐ ĐỊNH','B','Time New Roman',10,'','','P7',0,'');
dulieumotcot($objPHPExcel,'Q7','GHI GIẢM TSCĐ','B','Time New Roman',10,'','','T7',0,'');

dulieumotcot($objPHPExcel,'B8','Chứng từ','','Time New Roman',10,'','','C8',0,'');
dulieumotcot($objPHPExcel,'D8','Tên, đặc điểm, ký hiệu TSCĐ','','Time New Roman',10,'','','D9',15,'C');
dulieumotcot($objPHPExcel,'E8','Nước sản xuất','','Time New Roman',10,'','','E9',5,'C');
dulieumotcot($objPHPExcel,'F8','Năm đưa vào sử dụng ở đơn vị','','Time New Roman',10,'','','F9',5,'C');
dulieumotcot($objPHPExcel,'G8','Số hiệu TSCĐ','','Time New Roman',10,'','','G9',5,'C');
dulieumotcot($objPHPExcel,'H8','Nguyên giá TSCĐ','','Time New Roman',10,'','','H9',13,'C');
dulieumotcot($objPHPExcel,'I8','Hao mòn 1 năm','','Time New Roman',10,'','','J8',0,'C');
dulieumotcot($objPHPExcel,'K8','Số hao mòn các năm trước chuyển sang','','Time New Roman',10,'','','K9',13,'C');
dulieumotcot($objPHPExcel,'L8','Năm '.($nam -3),'','Time New Roman',10,'','','L9',12,'C');
dulieumotcot($objPHPExcel,'M8','Năm '.($nam -2),'','Time New Roman',10,'','','M9',12,'C');
dulieumotcot($objPHPExcel,'N8','Năm '.($nam -1),'','Time New Roman',10,'','','N9',12,'C');
dulieumotcot($objPHPExcel,'O8','Năm '.$nam,'','Time New Roman',10,'','','O9',12,'C');
dulieumotcot($objPHPExcel,'P8','Lũy kế hao mòn đến khi chuyển sổ hoặc ghi giảm TSCĐ','','Time New Roman',10,'','','P9',15,'C');
dulieumotcot($objPHPExcel,'Q8','Chứng từ','','Time New Roman',10,'','','R8',7,'C');
dulieumotcot($objPHPExcel,'S8','Lý do ghi giảm TSCĐ','','Time New Roman',10,'','','S9',12,'C');
dulieumotcot($objPHPExcel,'T8','Giá trị còn lại của TSCĐ','','Time New Roman',10,'','','T9',13,'C');

dulieumotcot($objPHPExcel,'B9','Số hiệu','','Time New Roman',10,'','','',5,'C');
dulieumotcot($objPHPExcel,'C9','Ngày tháng','','Time New Roman',10,'','','',8,'C');
dulieumotcot($objPHPExcel,'Q9','Số hiệu','','Time New Roman',10,'','','',5,'C');
dulieumotcot($objPHPExcel,'R9','Ngày tháng','','Time New Roman',10,'','','',8,'C');
dulieumotcot($objPHPExcel,'I9','Tỷ lệ %','','Time New Roman',10,'','','',5,'C');
dulieumotcot($objPHPExcel,'J9','Số tiền','','Time New Roman',10,'','','',8,'C');

dulieumotcot($objPHPExcel,'A10','A','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B10','B','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C10','C','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D10','D','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E10','E','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F10','F','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G10','G','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H10','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I10','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J10','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K10','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L10','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'M10','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'N10','7','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'O10','8','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'P10','9','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Q10','H','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'R10','I','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'S10','K','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'T10','10','','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A7','T10',1,'Mỏng');

$index = 11;

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
// in tên đơn vị
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':T' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'B');
	$index++;

//
	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat,".
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,".
			"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where tblqlts.noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam."  ELSE year(ngaysudung) <= " . $nam." END) ";
		if ($phanloai == "") {
			$sql = $sql . " and tblqlts.chitiethinhthai like '" . $phanloai . "%'";
		} else {
			$sql = $sql . " and (";
			$count = 0;
			$chars = str_split($_POST["sobg"]);
			foreach ($chars as &$char) {
				if ($char == '>') {
					$count++;
				}
			}
			for ($i = 0; $i < $count; $i++) {
				if ($i == $count - 1)
					$sql = $sql . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%'";
				else
					$sql = $sql . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%' or ";
			}
			$sql = $sql . ")";
		}
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat,".
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,".
			"tblqlts.phantram,tblqlts.phantram32" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
			" where tblqlts.noidung like '$noidung%' and (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam."  ELSE year(ngaysudung) <= " . $nam." END) ";
		if ($phanloai == "") {
			$sql = $sql . " and tblqlts.chitiethinhthai like '" . $phanloai . "%'";
		} else {
			$sql = $sql . " and (";
			$count = 0;
			$chars = str_split($_POST["sobg"]);
			foreach ($chars as &$char) {
				if ($char == '>') {
					$count++;
				}
			}
			for ($i = 0; $i < $count; $i++) {
				if ($i == $count - 1)
					$sqlts = $sqlts . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%'";
				else
					$sqlts = $sqlts . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%' or ";
			}
			$sql = $sql . ")";
		}
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("", "", "", "", "", "", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, "", "", "", 0));
	$cs = 0;
	$i = 0;
	$Tnguyengia = 0;
	$Thaomoncs = 0;
	$Tnam1 = 0;
	$Tnam2 = 0;
	$Tnam3 = 0;
	$Tnam4 = 0;
	$Tluyke = 0;
	$Tgiatricl = 0;
	while ($row = mysqli_fetch_array($qrsql)) {
		$tangsl = 0;
		$giamsl = 0;
		$tangst = 0;
		$giamst = 0;
		$ldotg = "";
		$sltng = 0;
		$stttg = "";
		$sotiengiam =0;
		$ngaythanggiam = "";
		$sqltg = "Select TTTGTS,lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien,ngaytanggiam".
			" from tbltanggiam where TTQLTS = " . $row['TTQLTS'] . " and year(ngaytanggiam) <= " . $nam;
		$qrsqltg = mysqli_query($con, $sqltg);
		while ($rowtg = mysqli_fetch_array($qrsqltg)) {
			if ($rowtg['tanggiam'] == "Tăng") {
				$tangsl = $tangsl + $rowtg['soluong'];
				$tangst = $tangst + $rowtg['ngansach'] + $rowtg['nguonkhac'];
			}
			if($rowtg['tanggiam'] == "Giảm")  {
				$giamsl = $giamsl + $rowtg['soluong'];
				$giamst = $giamst + $rowtg['sotien'];
			}
			if($rowtg['tanggiam'] == "Thanh lý" || $rowtg['tanggiam'] == "Thu hồi" || $rowtg['tanggiam'] == "Điều chuyển")
			{
				$sotiengiam = $rowtg['sotien'];
				$ldotg = $rowtg['lydotanggiam'];
				$ngaythanggiam = $rowtg['ngaytanggiam'];
				$stttg = $rowtg['TTTGTS'];
			}
			if (($rowtg['tanggiam'] == "Giảm") && ($rowtg['nam'] == $nam))
				$sltng = $sltng + $rowtg['soluong'];
		}
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['TTQLTS'];
		$ts[$cs][2] = ngaythang($row['ngaysudung']);
		$ts[$cs][3] = $row['tenchitiet'];
		$ts[$cs][4] = $row['NUOCSX'];
		$ts[$cs][5] = $row['nsd'];
		$ts[$cs][6] = $row['mataisan'] . "." . $row['TTQLTS'];
		$ts[$cs][7] = $row['NG'] + $tangst - $giamst;
		if ($nam >= 2015) {
			$ts[$cs][8] = $row['phantram'];
			$ts[$cs][9] = $row['phantram'] * ($row['NG'] + $tangst - $giamst) / 100;
		} else {
			$ts[$cs][8] = $row['phantram32'];
			$ts[$cs][9] = $row['phantram32'] * ($row['NG'] + $tangst - $giamst) / 100;
		}
		if($hmtd == "Yes") {
			$haomonnam = 0;
			$sodu = 0;
			$tonghm = 0;
			$nam1 = 0;
			$nam2 = 0;
			$nam3 = 0;
			$nam4 = 0;
			$sqlhm = "select sotien,sodu,namhaomon from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $row['TTQLTS'];
			//		echo $sqlhm;
			$queryhm = mysqli_query($con, $sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)) {
				if ($rowhm['namhaomon'] == $nam) {
					$haomonnam = $rowhm['sotien'];
					$sodu = $rowhm['sodu'];
				} else {
					$sodu = $rowhm['sodu'] + $rowhm['sotien'];
				}
			}
			$tonghm = $haomonnam + $sodu;
			$nam1 = sohaomonnam($row['TTQLTS'], $nam - 3);
			$nam2 = sohaomonnam($row['TTQLTS'], $nam - 2);
			$nam3 = sohaomonnam($row['TTQLTS'], $nam - 1);
			if($hmht == "No")
				$nam4 = sohaomonnam($row['TTQLTS'], $nam);
			else
				$nam4 = 0;
			$ts[$cs][10] = $tonghm - $nam1 - $nam2 - $nam3 - $nam4;
			$ts[$cs][11] = $nam1;
			$ts[$cs][12] = $nam2;
			$ts[$cs][13] = $nam3;
			$ts[$cs][14] = $nam4;
			$ts[$cs][15] = $tonghm;
		}
		else {
			$ts[$cs][10] = soduhm($row['TTQLTS'], $nam - 4, $row['nsd'], $row['NG'] + $tangst - $giamst);
			if (soduhm($row['TTQLTS'], $nam - 4, $row['nsd'], $row['NG'] + $tangst - $giamst) < $row['NG'] + $tangst - $giamst)
				$ts[$cs][11] = sohaomon($row['TTQLTS'], $nam - 3);
			else
				$ts[$cs][11] = 0;
			if (soduhm($row['TTQLTS'], $nam - 3, $row['nsd'], $row['NG'] + $tangst - $giamst) < $row['NG'] + $tangst - $giamst)
				$ts[$cs][12] = sohaomon($row['TTQLTS'], $nam - 2);
			else
				$ts[$cs][12] = 0;
			if (soduhm($row['TTQLTS'], $nam - 2, $row['nsd'], $row['NG'] + $tangst - $giamst) < $row['NG'] + $tangst - $giamst)
				$ts[$cs][13] = sohaomon($row['TTQLTS'], $nam - 1);
			else
				$ts[$cs][13] = 0;
			if($hmht == "No")
				if (soduhm($row['TTQLTS'], $nam - 1, $row['nsd'], $row['NG'] + $tangst - $giamst) < $row['NG'] + $tangst - $giamst)
					$ts[$cs][14] = sohaomon($row['TTQLTS'], $nam);
				else
					$ts[$cs][14] = 0;
			else
				$ts[$cs][14] = 0;
			$ts[$cs][15] = soduhm($row['TTQLTS'], $nam, $row['nsd'], $row['NG'] + $tangst - $giamst);
		}
		$ts[$cs][16] = $stttg;
		$ts[$cs][17] = ngaythang($ngaythanggiam);
		$ts[$cs][18] = $ldotg;
		if ($ngaythanggiam != "")
			//$ts[$cs][19] = $row['NG'] + $tangst - $giamst - soduhm($row['TTQLTS'], $nam, $row['nsd'], $row['NG'] + $tangst - $giamst);
			$ts[$cs][19] = $sotiengiam;
		else
			$ts[$cs][19] = 0;

		$cs = $cs + 1;
		$Tnguyengia += $row['NG'] + $tangst - $giamst;
		$Thaomoncs += soduhm($row['TTQLTS'], $nam - 4, $row['nsd'], $row['NG'] + $tangst - $giamst);
		$Tnam1 += sohaomon($row['TTQLTS'], $nam - 3);
		$Tnam2 += sohaomon($row['TTQLTS'], $nam - 2);
		$Tnam3 += sohaomon($row['TTQLTS'], $nam - 1);
		$Tnam4 += sohaomon($row['TTQLTS'], $nam);
		$Tluyke += soduhm($row['TTQLTS'], $nam, $row['nsd'], $row['NG'] + $tangst - $giamst);
		if ($ngaythanggiam != "")
			//$Tgiatricl += $row['NG'] + $tangst - $giamst - soduhm($row['TTQLTS'], $nam, $row['nsd'], $row['NG'] + $tangst - $giamst);
			$Tgiatricl += $sotiengiam;
		else
			$Tgiatricl += 0;
	}
	$j = 0;
	$tennhomsau = "";
	$tennhom = "";
	$stt = 0;
	$Tnguyengia = 0;
	$Thaomoncs = 0;
	$Tnam1 = 0;
	$Tnam2 = 0;
	$Tnam3 = 0;
	$Tnam4 = 0;
	$Tluyke = 0;
	$Tgiatricl = 0;
	for ($i = 0; $i < $cs; $i++) {
		$stt++;
		$tennhom = $ts[$i][0];
		if ($tennhom != $tennhomsau) {
			//nhóm group
			$grnguyengia = 0;
			$grhaomoncs = 0;
			$grnam1 = 0;
			$grnam2 = 0;
			$grnam3 = 0;
			$grnam4 = 0;
			$grhaomonlk = 0;
			$grgiatricl = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$grnguyengia += $ts[$j][7];
					$grhaomoncs += $ts[$j][10];
					$grnam1 += $ts[$j][11];
					$grnam2 += $ts[$j][12];
					$grnam3 += $ts[$j][13];
					$grnam4 += $ts[$j][14];
					$grhaomonlk += $ts[$j][15];
					$grgiatricl += $ts[$j][19];
				}
			}
			$Tnguyengia += $grnguyengia;
			$Thaomoncs += $grhaomoncs;
			$Tnam1 += $grnam1;
			$Tnam2 += $grnam2;
			$Tnam3 += $grnam3;
			$Tnam4 += $grnam4;
			$Tluyke += $grhaomonlk;
			$Tgiatricl += $grgiatricl;
			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, '')
				->setCellValue('B' . $index, $tennhom)->mergeCells('B' . $index . ':G' . $index)
				->setCellValue('H' . $index, dinhdangso($grnguyengia))
				->setCellValue('I' . $index, '')
				->setCellValue('J' . $index, '')
				->setCellValue('K' . $index, dinhdangso($grhaomoncs))
				->setCellValue('L' . $index, dinhdangso($grnam1))
				->setCellValue('M' . $index, dinhdangso($grnam2))
				->setCellValue('N' . $index, dinhdangso($grnam3))
				->setCellValue('O' . $index, dinhdangso($grnam4))
				->setCellValue('P' . $index, dinhdangso($grhaomonlk))
				->setCellValue('Q' . $index, '')
				->setCellValue('R' . $index, '')
				->setCellValue('S' . $index, '')
				->setCellValue('T' . $index, dinhdangso($grgiatricl));
				dinhdangBI($objPHPExcel, 'B' . $index, 'T' . $index, 1, 'BI');
			$index++;
		}
		// chi tiết
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $ts[$i][1])
			->setCellValue('C' . $index, $ts[$i][2])
			->setCellValue('D' . $index, $ts[$i][3])
			->setCellValue('E' . $index, $ts[$i][4])
			->setCellValue('F' . $index, $ts[$i][5])
			->setCellValue('G' . $index, $ts[$i][6])
			->setCellValue('H' . $index, dinhdangso($ts[$i][7]))
			->setCellValue('I' . $index, $ts[$i][8])
			->setCellValue('J' . $index, dinhdangso($ts[$i][9]))
			->setCellValue('K' . $index, dinhdangso($ts[$i][10]))
			->setCellValue('L' . $index, dinhdangso($ts[$i][11]))
			->setCellValue('M' . $index, dinhdangso($ts[$i][12]))
			->setCellValue('N' . $index, dinhdangso($ts[$i][13]))
			->setCellValue('O' . $index, dinhdangso($ts[$i][14]))
			->setCellValue('P' . $index, dinhdangso($ts[$i][15]))
			->setCellValue('Q' . $index, $ts[$i][16])
			->setCellValue('R' . $index, $ts[$i][17])
			->setCellValue('S' . $index, $ts[$i][18])
			->setCellValue('T' . $index, dinhdangso($ts[$i][19]));
		$index++;
		$tennhomsau = $ts[$i][0];
	}
// in tổng cộng
	dulieumotcot($objPHPExcel, 'D' . $index, 'Cộng', 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'H' . $index, dinhdangso($Tnguyengia), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'K' . $index, dinhdangso($Thaomoncs), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'L' . $index, dinhdangso($Tnam1), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'M' . $index, dinhdangso($Tnam2), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'N' . $index, dinhdangso($Tnam3), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'O' . $index, dinhdangso($Tnam4), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'P' . $index, dinhdangso($Tluyke), 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'T' . $index, dinhdangso($Tgiatricl), 'B', 'Time New Roman', 10, '', '', '', 0, '');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A11','T'.$index,$stt,'Time New Roman',8);
dinhdangle($objPHPExcel,'A11','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B11','B'.$index,$stt,'T');
dinhdangle($objPHPExcel,'C11','C'.$index,$stt,'');
dinhdangle($objPHPExcel,'D11','E'.$index,$stt,'T');
dinhdangle($objPHPExcel,'F11','F'.$index,$stt,'');
dinhdangle($objPHPExcel,'G11','G'.$index,$stt,'T');
dinhdangle($objPHPExcel,'H11','P'.$index,$stt,'P');
dinhdangle($objPHPExcel,'Q11','R'.$index,$stt,'');
dinhdangle($objPHPExcel,'S11','S'.$index,$stt,'T');
dinhdangle($objPHPExcel,'T11','T'.$index,$stt,'P');

dinhdangsoxls($objPHPExcel,'H11','H'.$index,$stt,'BT');
dinhdangsoxls($objPHPExcel,'I11','I'.$index,$stt,'1P');
dinhdangsoxls($objPHPExcel,'J11','P'.$index,$stt,'BT');
dinhdangsoxls($objPHPExcel,'T11','T'.$index,$stt,'BT');

dinhdangxuongdong($objPHPExcel,'D11','D'.$index,$stt);
dinhdangxuongdong($objPHPExcel,'K11','K'.$index,$stt);

kedong($objPHPExcel,'A11','T'.$index,$stt,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'N'.$index,'....... , ngày ... tháng ... năm ......','B','Time New Roman',11,'','','T'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'D'.$index,'Người lập biểu','B','Time New Roman',11,'','','I'.$index,0,'');
dulieumotcot($objPHPExcel,'N'.$index,'Kế toán trưởng','B','Time New Roman',11,'','','T'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'D'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','I'.$index,0,'');
dulieumotcot($objPHPExcel,'N'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','T'.$index,0,'');

taofile($objPHPExcel,"SoTSCDexcel.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoTSCDexcel.xls">Bấm vào đây để tải file về</a>
</body>