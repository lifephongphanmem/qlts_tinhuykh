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
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, tỉnh: </nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 10b-CK/TSC</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$tendv; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr></nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">CÔNG KHAI TÌNH HÌNH QUẢN LÝ, SỬ DỤNG TÀI SẢN CÔNG</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic"> Năm: <?php echo  $nam;?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; font-size: 12px">
		<tr style="font-weight: bold">
			<th rowspan="3" style="font-weight: inherit;" width="3%">STT</th>
			<th rowspan="3" style="font-weight: inherit;" width="20%">TÀI SẢN</th>
			<th colspan="2" rowspan="2" style="font-weight: inherit;" width="10%">TỔNG CỘNG</th>
			<th colspan="7" style="font-weight: inherit;"  >HIỆN TRẠNG SỬ DỤNG</th>
		</tr>
		<tr style="font-weight: bold">
			<th rowspan="2" style="font-weight: inherit;" >Quản lý nhà nước</th>
			<th colspan="5" style="font-weight: inherit;" >Hoạt động sự nghiệp</th>
			<th rowspan="2" style="font-weight: inherit;" >Sử dụng khác</th>
		</tr>
		<tr style="font-weight: bold">
			<th style="font-weight: inherit;" >SỐ LƯỢNG</th>
			<th style="font-weight: inherit;">DIỆN TÍCH</th>
			<th style="font-weight: inherit;" >Không kinh doanh</th>
			<th style="font-weight: inherit;">Kinh doanh</th>
			<th style="font-weight: inherit;" >Cho thuê</th>
			<th style="font-weight: inherit;">Liên doanh, liên kết</th>
			<th style="font-weight: inherit;" >Sử dụng hỗn hợp</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3</th>
			<th style="font-weight: inherit;">4</th>
			<th style="font-weight: inherit;">5</th>
			<th style="font-weight: inherit;">6</th>
			<th style="font-weight: inherit;">7</th>
			<th style="font-weight: inherit;">8</th>
			<th style="font-weight: inherit;">9</th>
			<th style="font-weight: inherit;">10</th>
			<th style="font-weight: inherit;">11</th>
		</tr>
<?php 
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
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
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
	echo "<tr >";
	echo "<td colspan='10' style='font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
//
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
			"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan" .
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
			echo "<tr >";
			echo "<td ></td>";
			echo "<td  style='font-weight: bold;text-align: left'>$tenhienthi</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom4)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom5)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom6)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom7)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom8)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom9)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom10)."</td>";
			echo "</tr>";
		}
		// chi tiết
		echo "<tr >";
		echo "<td style='text-align: center'>" . $stt . "</td>";
		echo "<td style='text-align: left'>" . $ts[$i][1] . "</td>";
		echo "<td style='text-align: center'>" . $ts[$i][2] . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][3]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][4]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][5]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][6]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][7]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][8]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][9]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][10]) . "</td>";
		echo "</tr>";
		$tennhomsau = $tenhienthi;
	}
	// in tổng cộng
	echo "<tr >";
	echo "<td ></td>";
	echo "<td style='font-weight: bold;text-align: center'> Tổng cộng</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong4)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong5)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong6)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong7)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong8)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong9)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong10)."</td>";
	echo "</tr>";
}
?>
	</table>
<table >
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP BÁO CÁO</td>
		<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên và đóng dấu)</td>
	</tr>
	<tr style="height: 80px">
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-style: italic;"></td>
	</tr>
	<tr>
		<td style="text-align: center; font-weight: bold ;"><?php echo $nlb;?></td>
		<td style="text-align: center; font-weight: bold ;"><?php echo $ttdv;?></td>
	</tr>
</table>
</body>		
</html>	