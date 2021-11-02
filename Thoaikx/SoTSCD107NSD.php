<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>QLTS</title>
    <style type="text/css">
        body {
            font: normal 14px time, serif;
        }

        table, p {
            width: 99%;
            margin: auto;
        }

        #tabcontent td, #tabcontent th {
            padding: 10px;
        }
        tr td:first-child {text-align: center;}
    @media print {
		   .in{
			  display: none !important;
		   }
		}
    </style>
	<link rel="stylesheet" href="/thoaikx/buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$ngaythang = date('Y-m-d');
$phanloai = "";
$nam = "";
$mah ="";
$madv ="";
$ts5 = "No";
$nguoisudung="";
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
	if(isset($_POST['nguoisudung']))
		$nguoisudung = $_POST['nguoisudung'];
	if(isset($_POST['hmtd']))
		$hmtd = $_POST['hmtd'];
	if(isset($_POST['hmht']))
		$hmht = $_POST['hmht'];
}
$tendv = "";
$nlb="";
$ktt="";
$maqhns ="";
$sql = "Select tendv,nlb,ptkt,maqhns,ttdv From thongtindonvi WHERE madonvi = '$msdv'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$tendv = $row['tendv'];
	$nlb = $row['nlb'];
	$ktt = $row['ptkt'];
	$ttdv = $row['ttdv'];
	$maqhns = $row['maqhns'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Tên đơn vị: ".$tendv; ?></nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số : S24-H</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã QHNS: ".$maqhns; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành theo Thông tư số 107/2017/TT-BTC </br> ngày 10/10/2017 của Bộ Tài chính)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">SỔ TÀI SẢN CỐ ĐỊNH</td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;"> Loại tài sản cố định: .......................</td>
		</tr>
			<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;"> Dùng cho .......................</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; font-size: 12px">
		<tr style="font-weight: bold">
			<th rowspan="3" style="font-weight: inherit;" width="2%">STT</th>
			<th colspan="2" rowspan="2" style="font-weight: inherit;" width="8%">Chứng từ</th>
			<th colspan="6" style="font-weight: inherit;" width="38%">Ghi tăng tài sản cố định</th>
			<th colspan="6" style="font-weight: inherit;" width="35%">Khấu hao (hao mòn) tài sản cố định</th>
			<th colspan="4" style="font-weight: inherit;" width="25%">Ghi giảm TSCĐ</th>
		</tr>
		<tr style="font-weight: bold">
			<th rowspan="2" style="font-weight: inherit;" width="14%">Tên, đặc điểm, ký hiệu TSCĐ</th>
			<th rowspan="2" style="font-weight: inherit;" width="3%">Nước sản xuất</th>
			<th rowspan="2" style="font-weight: inherit;" width="3%">Năm đưa vào sử dụng ở đơn vị</th>
			<th rowspan="2" style="font-weight: inherit;" width="5%">Số hiệu TSCĐ</th>
			<th rowspan="2" style="font-weight: inherit;" width="5%">Thẻ TSCĐ</th>
			<th rowspan="2" style="font-weight: inherit;" width="5%">Nguyên giá TSCĐ</th>
			<th colspan="2" style="font-weight: inherit;" width="5%">Khấu hao</th>
			<th colspan="2" style="font-weight: inherit;" width="8%">Hao mòn</th>
			<th rowspan="2" style="font-weight: inherit;" width="5%">Tổng số khấu hao (hao mòn) phát sinh trong năm</th>
			<th rowspan="2" style="font-weight: inherit;" width="6%">Lũy kế khấu hao/hao mòn đã tính đến khi chuyển sổ hoặc ghi giảm TSCĐ</th>
			<th colspan="2" style="font-weight: inherit;" width="8%">Chứng từ</th>
			<th rowspan="2" style="font-weight: inherit;" width="11%">Lý do ghi giảm TSCĐ</th>
			<th rowspan="2" style="font-weight: inherit;" width="8%">Giá trị còn lại của TSCĐ</th>
		</tr>
		<tr style="font-weight: bold">
			<th style="font-weight: inherit;" width="3%">Số hiệu</th>
			<th style="font-weight: inherit;">Ngày tháng</th>
			<th style="font-weight: inherit;" width="3%">Tỷ lệ %</th>
			<th style="font-weight: inherit;">Số tiền</th>
			<th style="font-weight: inherit;" width="3%">Tỷ lệ %</th>
			<th style="font-weight: inherit;">Số tiền</th>
			<th style="font-weight: inherit;" width="3%">Số hiệu</th>
			<th style="font-weight: inherit;">Ngày, tháng</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">A</th>
			<th style="font-weight: inherit;">B</th>
			<th style="font-weight: inherit;">C</th>
			<th style="font-weight: inherit;">D</th>
			<th style="font-weight: inherit;">E</th>
			<th style="font-weight: inherit;">F</th>
			<th style="font-weight: inherit;">G</th>
			<th style="font-weight: inherit;">H</th>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3</th>
			<th style="font-weight: inherit;">4</th>
			<th style="font-weight: inherit;">5</th>
			<th style="font-weight: inherit;">6=3+5</th>
			<th style="font-weight: inherit;">7</th>
			<th style="font-weight: inherit;">I</th>
			<th style="font-weight: inherit;">K</th>
			<th style="font-weight: inherit;">L</th>
			<th style="font-weight: inherit;">8</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
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
	if(count($_aDV) > 1) {
// in tên đơn vị
		echo "<tr >";
		echo "<td ></td>";
		echo "<td colspan='19' style='font-weight: bold;'>$_madv[ten]</td>";
		echo "</tr>";
	}
//}
	$sql_sd = "Select DISTINCT nguoisudung from tblqlts where madonvi = '$_madv[ma]' ".
		($nguoisudung = ""? "":" AND nguoisudung = '".$nguoisudung."'");
	$query_sd = mysqli_query($con, $sql_sd);
	while ($row_sd = mysqli_fetch_array($query_sd)) {
		echo "<tr >";
		echo "<td ></td>";
		echo "<td colspan='19' style='font-weight: bold;'>$row_sd[0]</td>";
		echo "</tr>";
		if ($ts5 == "No") {
			$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
				"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
				"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
				" where tblqlts.nguoisudung = '$row_sd[0]' and tblqlts.madonvi = '$_madv[ma]' and " .
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
				"tblqlts.phantram,tblqlts.phantram32" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
				" where tblqlts.nguoisudung like '$nguoisudung%' and (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and " .
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
				echo "<tr >";
				echo "<td ></td>";
				echo "<td colspan='7' style='font-weight: bold;'>$tennhom</td>";
				echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($grnguyengia) . "</td>";
				echo "<td ></td>";
				echo "<td ></td>";
				echo "<td ></td>";
				echo "<td ></td>";
				echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($grhaomoncs) . "</td>";
				echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($grhaomonlk) . "</td>";
				echo "<td ></td>";
				echo "<td ></td>";
				echo "<td ></td>";
				echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($grgiatricl) . "</td>";
				echo "</tr>";
				$tennhomsau = $ts[$i][0];
			}
			if ($ts[$i][0] == $tennhom) {
				// chi tiết
				echo "<tr >";
				echo "<td >$stt</td>";
				echo "<td style='text-align: center'>" . $ts[$i][1] . "</td>";
				echo "<td style='text-align: center'>" . $ts[$i][2] . "</td>";
				echo "<td >" . $ts[$i][3] . "</td>";
				echo "<td >" . $ts[$i][4] . "</td>";
				echo "<td style='text-align: center'>" . $ts[$i][5] . "</td>";
				echo "<td >" . $ts[$i][6] . "</td>";
				echo "<td >" . $ts[$i][7] . "</td>";
				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][8]) . "</td>";

				echo "<td style='text-align: center'>" . $ts[$i][11] . "</td>";
				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][12]) . "</td>";
				echo "<td style='text-align: center'>" . $ts[$i][9] . "</td>";
				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][10]) . "</td>";

				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][13]) . "</td>";
				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][14]) . "</td>";
				echo "<td style='text-align: center'>" . $ts[$i][15] . "</td>";
				echo "<td style='text-align: center'>" . $ts[$i][16] . "</td>";
				echo "<td style='text-align: left'>" . $ts[$i][17] . "</td>";
				echo "<td style='text-align: right'>" . dinhdangso($ts[$i][18]) . "</td>";
				echo "</tr>";

			}
		}
		// in tổng cộng
		echo "<tr >";
		echo "<td ></td>";
		echo "<td ></td>";
		echo "<td ></td>";
		echo "<td style='font-weight: bold;text-align: center'>Cộng</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tnguyengia) . "</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Thaomoncs) . "</td>";
		echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tluyke) . "</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: center'>X</td>";
		echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tgiatricl) . "</td>";
		echo "</tr>";
	}
	echo "<tr >";
	echo "<td colspan='8' style='font-weight: bold;text-align: center'>Tổng cộng - $_madv[ten]</td>";
	echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tnguyengiadv) . "</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Thaomoncsdv) . "</td>";
	echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tluykedv) . "</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($Tgiatricldv) . "</td>";
	echo "</tr>";
}
?>
	</table>
<table >
	<tr>
		<td colspan="3" style="text-align: left">- Sổ này có ..... trang, đánh số từ trang 01 đến trang .....</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: left">- Ngày mở sổ: ...............................................</td>
	</tr>
	<tr>
		<td width="33%"></td>
		<td width="33%"></td>
		<td width="33%" style="text-align: center;font-style: italic">Ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP SỔ</td>
		<td style="text-align: center; font-weight: bold;"> KẾ TOÁN TRƯỞNG</td>
		<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên, đóng dấu)</td>
	</tr>
	<tr style="height: 80px">
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-style: italic;"></td>
	</tr>
	<tr>
		<td style="text-align: center; font-weight: bold ;"><?php echo $nlb;?></td>
		<td style="text-align: center; font-weight: bold ;"><?php echo $ktt;?></td>
		<td style="text-align: center; font-weight: bold ;"><?php echo $ttdv;?></td>
	</tr>
</table>
</body>		
</html>	