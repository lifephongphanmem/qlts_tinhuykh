<head>
<meta charset='utf-8'>
<?php
$phanloai = "";
$nam = "";
$mah ="";
$madv ="";
$ts5 = "No";
$noidung="";
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$nam = $_POST['nambc'];
	$mah =$_POST['huyen'];
	if(isset($_POST['ts5']))
		$ts5 = $_POST['ts5'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['noidung']))
		$noidung = $_POST['noidung'];
}

require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';
?>
</head>
<body>

<?php
$cs=0;
//luu cac thong tin vao file excel
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1',$madv[3],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2',$madv[2],'B','Time New Roman',11,'T','','',0,'');

dulieumotcot($objPHPExcel,'J1','Mẫu số : S24-H','B','Time New Roman',11,'','','S1',0,'');
dulieumotcot($objPHPExcel,'J2','(Ban hành theo Thông tư số 107/2017/TT-BTC','','Time New Roman',11,'','','S2',0,'');
dulieumotcot($objPHPExcel,'J3','ngày 10/10/2017 của Bộ Tài chính)','','Time New Roman',11,'','','S3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ TÀI SẢN CỐ ĐỊNH','B','Time New Roman',16,'','','S4',0,'');
dulieumotcot($objPHPExcel,'A5','Loại tài sản cố định: .......................','Time New Roman','',11,'','','S5',0,'');
dulieumotcot($objPHPExcel,'A6','Dùng cho .......................','Time New Roman','',11,'','','S6',0,'');

dulieumotcot($objPHPExcel,'A7','STT','B','Time New Roman',10,'','','A9',6,'C');
dulieumotcot($objPHPExcel,'B7','Chứng từ','B','Time New Roman',10,'','','C8',25,'');
dulieumotcot($objPHPExcel,'D7','Ghi tăng tài sản cố định','B','Time New Roman',10,'','','I7',20,'C');
dulieumotcot($objPHPExcel,'J7','Khấu hao (hao mòn) tài sản cố định','B','Time New Roman',10,'','','O7',11,'C');
dulieumotcot($objPHPExcel,'P7','Ghi giảm tài sản cố định','B','Time New Roman',10,'','','S7',11,'C');

dulieumotcot($objPHPExcel,'D8','Tên, đặc điểm, ký hiệu TSCĐ','B','Time New Roman',10,'','','D9',20,'C');
dulieumotcot($objPHPExcel,'E8','Nước sản xuất','B','Time New Roman',10,'','','E9',7,'C');
dulieumotcot($objPHPExcel,'F8','Năm đưa vào sử dụng ở đơn vị','B','Time New Roman',10,'','','F9',8,'C');
dulieumotcot($objPHPExcel,'G8','Số hiệu TSCĐ','B','Time New Roman',10,'','','G9',11,'C');
dulieumotcot($objPHPExcel,'H8','Thẻ TSCĐ','B','Time New Roman',10,'','','H9',8,'C');
dulieumotcot($objPHPExcel,'I8','Nguyên giá TSCĐ','B','Time New Roman',10,'','','I9',13,'C');
dulieumotcot($objPHPExcel,'J8','Khấu hao','B','Time New Roman',10,'','','K8',0,'C');
dulieumotcot($objPHPExcel,'L8','Hao mòn','B','Time New Roman',10,'','','M8',12,'C');
dulieumotcot($objPHPExcel,'N8','Tổng số khấu hao (hao mòn) phát sinh trong năm','B','Time New Roman',10,'','','N9',12,'C');
dulieumotcot($objPHPExcel,'O8','Lũy kế khấu hao/hao mòn đã tính đến khi chuyển sổ hoặc ghi giảm TSCĐ','B','Time New Roman',10,'','','O9',0,'C');
dulieumotcot($objPHPExcel,'P8','Chứng từ','B','Time New Roman',10,'','','Q8',7,'C');
dulieumotcot($objPHPExcel,'R8','Lý do ghi giảm TSCĐ','B','Time New Roman',10,'','','R9',12,'C');
dulieumotcot($objPHPExcel,'S8','Giá trị còn lại của TSCĐ','B','Time New Roman',10,'','','S9',12,'C');

dulieumotcot($objPHPExcel,'B9','Số hiệu','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C9','Ngày tháng','B','Time New Roman',10,'','','',0,'C');

dulieumotcot($objPHPExcel,'J9','Tỷ lệ %','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K9','Số tiền','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L9','Tỷ lệ %','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'M9','Số tiền','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'P9','Số hiệu','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Q9','Ngày tháng','B','Time New Roman',10,'','','',0,'C');

kedong($objPHPExcel,'A7','S9',1,'Mỏng');

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
function sokhauhao($idts,$nam,$condition)
{
	global $con;
	$kq = 0;
	$sokhauhao = 0;
	$phantramkh =0;
	$sql = "select sokhnam,namkhauhao,tylekhauhao from tblhaomon where namkhauhao = " . $nam . " and TTQLTS = " . $idts;
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sokhauhao = $rowhm['sokhnam'];
		$phantramkh = $rowhm['tylekhauhao'];
	}
	if($condition == "Phần trăm")
		$kq = $phantramkh;
	if($condition == "Số tiền")
		$kq = $sokhauhao;
	return $kq;
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
function sohmlk($idts,$nam)
{
	global $con;
	$sohaomon = 0;
	$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.
		" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.")";
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon += $rowhm['sodu'];
		$sohaomon += $rowhm['sotien'];
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
			" where (tanggiam not like 'Thanh lý%'  or tanggiam not like 'Tiêu hủy%' or tanggiam not like 'Thu hồi%' or tanggiam not like 'Điều chuyển%') and TTQLTS = " . $idts . " and year(ngaytanggiam) <= " . $nam;
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

$index = 10;
$ts =  array(array("A","B","C","D","E","F","G","H",0,0,0,0,0,0,0,"I","K","L",0));
$cs=0;$i=0;

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
	$Tnguyengiadv = 0;
	$Thaomoncsdv = 0;
	$Tnam1dv = 0;
	$Tnam2dv = 0;
	$Tnam3dv = 0;
	$Tnam4dv = 0;
	$Tluykedv = 0;
	$Tgiatricldv = 0;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':S' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
	$index++;
	$sql_sd = "Select DISTINCT noidung from tblqlts where madonvi = '$_madv[ma]' ";
	$query_sd = mysqli_query($con, $sql_sd);
	while ($row_sd = mysqli_fetch_array($query_sd)) {
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index,'Nơi SD: '. $row_sd[0])->mergeCells('B' . $index . ':S' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
		$index++;
		if ($ts5 == "No") {
			$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
				"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
				"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
				" where tblqlts.noidung = '$row_sd[0]' and tblqlts.madonvi = '$_madv[ma]' and " .
				" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam . "  ELSE year(ngaysudung) <= " . $nam . " END) ";
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
			$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán' or hinhthuc  = 'Tiêu hủy') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx, TTQLTS DESC";
		} else {
			$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
				"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
				"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
				" where tblqlts.noidung like '$noidung%' and (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and " .
				" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam . "  ELSE year(ngaysudung) <= " . $nam . " END) ";
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
			$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán' or hinhthuc  = 'Tiêu hủy') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx, TTQLTS DESC";
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
			$sotiengiam = 0;
			$ngaythanggiam = "";
			$sqltg = "Select TTTGTS,lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien,ngaytanggiam" .
				" from tbltanggiam where TTQLTS = " . $row['TTQLTS'] . " and year(ngaytanggiam) <= " . $nam;
			$qrsqltg = mysqli_query($con, $sqltg);
			while ($rowtg = mysqli_fetch_array($qrsqltg)) {
				if ($rowtg['tanggiam'] == "Tăng") {
					$tangsl = $tangsl + $rowtg['soluong'];
					$tangst = $tangst + $rowtg['ngansach'] + $rowtg['nguonkhac'];
				}
				if ($rowtg['tanggiam'] == "Giảm") {
					$giamsl = $giamsl + $rowtg['soluong'];
					$giamst = $giamst + $rowtg['sotien'];
				}
				if ($rowtg['tanggiam'] == "Thanh lý" || $rowtg['tanggiam'] == "Thu hồi" || $rowtg['tanggiam'] == "Tiêu hủy" || $rowtg['tanggiam'] == "Điều chuyển") {
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
			$ts[$cs][7] = $row['mataisan'] . "." . $row['TTQLTS'];
			$ts[$cs][8] = $row['NG'] + $tangst - $giamst;
			$sohmnam = 0;

			if ($nam >= 2015) {
				$ts[$cs][9] = $row['phantram'];
				$sohmnam = $row['phantram'] * ($row['NG'] + $tangst - $giamst) / 100;
				$ts[$cs][10] = $sohmnam;
			} else {
				$ts[$cs][9] = $row['phantram32'];
				$sohmnam = $row['phantram32'] * ($row['NG'] + $tangst - $giamst) / 100;
				$ts[$cs][10] = $sohmnam;
			}
			$ts[$cs][10] = sohaomonnam($row['TTQLTS'], $nam);
			/*
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
            */
			$ts[$cs][11] = sokhauhao($row['TTQLTS'], $nam, 'Phần trăm');
			$ts[$cs][12] = sokhauhao($row['TTQLTS'], $nam, 'Số tiền');
			$ts[$cs][13] = sokhauhao($row['TTQLTS'], $nam, 'Số tiền') + sohaomonnam($row['TTQLTS'], $nam);
			$ts[$cs][14] = sohmlk($row['TTQLTS'], $nam);
			$ts[$cs][15] = $stttg;
			$ts[$cs][16] = ngaythang($ngaythanggiam);
			$ts[$cs][17] = $ldotg;
			if ($ngaythanggiam != "")
				//$ts[$cs][19] = $row['NG'] + $tangst - $giamst - soduhm($row['TTQLTS'], $nam, $row['nsd'], $row['NG'] + $tangst - $giamst);
				$ts[$cs][18] = $sotiengiam;
			else
				$ts[$cs][18] = 0;

			$cs = $cs + 1;
			$Tnguyengia += $row['NG'] + $tangst - $giamst;
			$Thaomoncs += sokhauhao($row['TTQLTS'], $nam, 'Số tiền') + ($row['phantram32'] * ($row['NG'] + $tangst - $giamst) / 100);
			$Tluyke += sohmlk($row['TTQLTS'], $nam);
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
						$grnguyengia += $ts[$j][8];
						$grhaomoncs += $ts[$j][13];
						$grhaomonlk += $ts[$j][14];
						$grgiatricl += $ts[$j][18];
					}
				}
				$Tnguyengia +=$grnguyengia;
				$Thaomoncs += $grhaomoncs;
				$Tluyke += $grhaomonlk;
				$Tgiatricl += $grgiatricl;

				$Tnguyengiadv += $grnguyengia;
				$Thaomoncsdv += $grhaomoncs;
				$Tluykedv += $grhaomonlk;
				$Tgiatricldv += $grgiatricl;
// in Group
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A' . $index, '')
					->setCellValue('B' . $index, $tennhom)->mergeCells('B' . $index . ':H' . $index)
					->setCellValue('I' . $index, dinhdangso($grnguyengia))
					->setCellValue('J' . $index, '')
					->setCellValue('K' . $index, '')
					->setCellValue('L' . $index, '')
					->setCellValue('M' . $index, '')
					->setCellValue('N' . $index, dinhdangso($grhaomoncs))
					->setCellValue('N' . $index, dinhdangso($grhaomonlk))
					->setCellValue('N' . $index, '')
					->setCellValue('N' . $index, '')
					->setCellValue('N' . $index, '')
					->setCellValue('N' . $index, dinhdangso($grgiatricl));
				dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
				$index++;
				$tennhomsau = $ts[$i][0];

			}
			if ($ts[$i][0] == $tennhom) {
				// chi tiết
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A' . $index, $stt)
					->setCellValue('B' . $index, $ts[$i][1])
					->setCellValue('C' . $index, $ts[$i][2])
					->setCellValue('D' . $index, $ts[$i][3])
					->setCellValue('E' . $index, $ts[$i][4])
					->setCellValue('F' . $index, $ts[$i][5])
					->setCellValue('G' . $index, $ts[$i][6])
					->setCellValue('H' . $index, $ts[$i][7])
					->setCellValue('I' . $index, dinhdangso($ts[$i][8]))
					->setCellValue('J' . $index, $ts[$i][11])
					->setCellValue('K' . $index, dinhdangso($ts[$i][12]))
					->setCellValue('L' . $index, $ts[$i][9])
					->setCellValue('M' . $index, dinhdangso($ts[$i][10]))
					->setCellValue('N' . $index, dinhdangso($ts[$i][13]))
					->setCellValue('O' . $index, dinhdangso($ts[$i][14]))
					->setCellValue('P' . $index, $ts[$i][15])
					->setCellValue('Q' . $index, $ts[$i][16])
					->setCellValue('R' . $index, $ts[$i][17])
					->setCellValue('S' . $index, dinhdangso($ts[$i][18]));
				$index++;
			}
		}
		// in tổng cộng
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, 'Cộng')->mergeCells('A' . $index . ':D' . $index)
			->setCellValue('E' . $index, 'X')
			->setCellValue('F' . $index, 'X')
			->setCellValue('G' . $index, 'X')
			->setCellValue('H' . $index, 'X')
			->setCellValue('I' . $index, dinhdangso($Tnguyengia))
			->setCellValue('J' . $index, 'X')
			->setCellValue('K' . $index, 'X')
			->setCellValue('L' . $index, 'X')
			->setCellValue('M' . $index, 'X')
			->setCellValue('N' . $index, dinhdangso($Thaomoncs))
			->setCellValue('O' . $index, dinhdangso($Tluyke))
			->setCellValue('P' . $index, 'X')
			->setCellValue('Q' . $index, 'X')
			->setCellValue('R' . $index, 'X')
			->setCellValue('S' . $index, dinhdangso($Tgiatricl));
		dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
		$index++;
	}

	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, 'Tổng cộng - '.$_madv['ten'])->mergeCells('A' . $index . ':H' . $index)
		->setCellValue('I' . $index, dinhdangso($Tnguyengiadv))
		->setCellValue('J' . $index, 'X')
		->setCellValue('K' . $index, 'X')
		->setCellValue('L' . $index, 'X')
		->setCellValue('M' . $index, 'X')
		->setCellValue('N' . $index, dinhdangso($Thaomoncsdv))
		->setCellValue('O' . $index, dinhdangso($Tluykedv))
		->setCellValue('P' . $index, 'X')
		->setCellValue('Q' . $index, 'X')
		->setCellValue('R' . $index, 'X')
		->setCellValue('S' . $index, dinhdangso($Tgiatricldv));
	dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
	$index++;
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','S'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A10','A'.$index,$i,'');
dinhdangle($objPHPExcel,'B10','B'.$index,$i,'T');
dinhdangle($objPHPExcel,'C10','F'.$index,$i,'');
dinhdangle($objPHPExcel,'D10','D'.$index,$i,'T');
dinhdangle($objPHPExcel,'J10','M'.$index,$i,'');
dinhdangle($objPHPExcel,'N10','O'.$index,$i,'P');
dinhdangle($objPHPExcel,'M10','M'.$index,$i,'P');
dinhdangle($objPHPExcel,'K10','K'.$index,$i,'P');
dinhdangle($objPHPExcel,'S10','S'.$index,$i,'P');
dinhdangle($objPHPExcel,'I10','I'.$index,$i,'P');

dinhdangsoxls($objPHPExcel,'F10','F'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'G10','G'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'H10','H'.$index,$i,'2P');
dinhdangsoxls($objPHPExcel,'I10','K'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'M10','M'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'N10','N'.$index,$i,'BT');

dinhdangxuongdong($objPHPExcel,'D10','D'.$index,$i);
dinhdangxuongdong($objPHPExcel,'R10','R'.$index,$i);

kedong($objPHPExcel,'A10','S'.$index,$i,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'J'.$index,'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'Thủ trưởng đơn vị','B','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'','B','Time New Roman',11,'','','N'.$index,0,'');
taofile($objPHPExcel,"SoTSCD107.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoTSCD107.xls">Bấm vào đây để tải file về</a>
</body>