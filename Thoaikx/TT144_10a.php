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
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 10a-CK/TSC</nobr></td>
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
            <td  style="text-align: center;font-weight: bold;">CÔNG KHAI TÌNH HÌNH ĐẦU TƯ XÂY DỰNG, MUA SẮM, GIAO, THUÊ TÀI SẢN CÔNG</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic">Năm: <?php echo  $nam;?></td>
		</tr>
			<tr>
				<td style="text-align: right;font-style: italic; font-style: italic;">ĐVT cho: Số lượng là: Cái, khuôn viên; Diện tích là: m2; Nguyên giá là: Nghìn đồng.</td>
			</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; font-size: 12px">
		<tr style="font-weight: bold">
			<th rowspan="2" style="font-weight: inherit;" width="3%">STT</th>
			<th rowspan="2" style="font-weight: inherit;" width="20%">TÀI SẢN</th>
			<th colspan="3" style="font-weight: inherit;" width="25%">ĐẦU TƯ XÂY DỰNG/ MUA SẮM</th>
			<th colspan="3" style="font-weight: inherit;" width="25%">TIẾP NHẬN</th>
			<th colspan="3" style="font-weight: inherit;"  >THUÊ</th>
		</tr>
		<tr style="font-weight: bold">
			<th style="font-weight: inherit;" >Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;" >Nguyên giá</th>
			<th style="font-weight: inherit;" >Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;" >Nguyên giá</th>
			<th style="font-weight: inherit;" >Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;" >Nguyên giá</th>
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
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
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
$tong2 = 0;
$tong3 = 0;
$tong4 = 0;
$tong5 = 0;
$tong6 = 0;
$tong7 = 0;
$tong8 = 0;
$tong9 = 0;
$tong10 = 0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
// in tên đơn vị
	echo "<tr >";
	echo "<td colspan='11' style='font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
//
	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
			"tblqlts.phantram,tbldanhsachqd32.hinhthaitaisan, tblqlts.lydotang" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where  tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
			"tblqlts.phantram,tblqlts.phantram32,tbldanhsachqd32.hinhthaitaisan, tblqlts.lydotang" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("", 0, 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;

	while ($row = mysqli_fetch_array($qrsql)) {
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['tenchitiet'];
		if ($row['lydotang'] == "Thuê") {
			$ts[$cs][2] = 0;
			$ts[$cs][3] = 0;
			$ts[$cs][4] = 0;
			$ts[$cs][5] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][7] = 0;
			$ts[$cs][8] = 1;
			$ts[$cs][9] = $row['SL'];
			$ts[$cs][10] = $row['NG'];
		} elseif ($row['lydotang'] == "Được tiếp nhận") {
			$ts[$cs][2] = 0;
			$ts[$cs][3] = 0;
			$ts[$cs][4] = 0;
			$ts[$cs][5] = 1;
			$ts[$cs][6] = $row['SL'];
			$ts[$cs][7] = $row['NG'];
			$ts[$cs][8] = 0;
			$ts[$cs][9] = 0;
			$ts[$cs][10] = 0;
		} else {
			$ts[$cs][2] = 1;
			$ts[$cs][3] = $row['SL'];
			$ts[$cs][4] = $row['NG'];
			$ts[$cs][5] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][7] = 0;
			$ts[$cs][8] = 0;
			$ts[$cs][9] = 0;
			$ts[$cs][10] = 0;
		}
		if($row['SL'] <= 1){
			$ts[$cs][3] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][9] = 0;
		}

		/*
		if($row['hinhthaitaisan'] != 'Quyền sử dụng đất' && $row['hinhthaitaisan'] != 'Nhà, công trình xây dựng' && $row['hinhthaitaisan'] != 'Nhà' && $row['hinhthaitaisan'] != 'Vật kiến trúc'){
			$ts[$cs][3] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][9] = 0;
		}*/
		$cs = $cs + 1;
	}
	$j = 0;
	$tennhomsau = "";
	$tennhom = "";
	$stt = 0;
	for ($i = 0; $i < $cs; $i++) {
		$stt++;
		//tổng cộng
		$tong2 += $ts[$i][2];
		$tong3 += $ts[$i][3];
		$tong4 += $ts[$i][4];
		$tong5 += $ts[$i][5];
		$tong6 += $ts[$i][6];
		$tong7 += $ts[$i][7];
		$tong8 += $ts[$i][8];
		$tong9 += $ts[$i][9];
		$tong10 += $ts[$i][10];
		$tennhom = $ts[$i][0];
		$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? '1 - Đất khuân viên' : ($tennhom == 'Nhà, công trình xây dựng' ? '2 - Nhà' : ($tennhom == 'Nhà' ? '2 - Nhà' : ($tennhom == 'Xe ô tô' ? '3 - Xe ô tô' : ($tennhom == 'Phương tiện vận tải đường bộ' ? '3 - Xe ô tô' : '4 - Tài sản cố định khác'))));
		$tengroup = $tenhienthi;
		if ($tengroup != $tennhomsau) {
			//nhóm group
			$tongnhom2 = 0;
			$tongnhom3 = 0;
			$tongnhom4 = 0;
			$tongnhom5 = 0;
			$tongnhom6 = 0;
			$tongnhom7 = 0;
			$tongnhom8 = 0;
			$tongnhom9 = 0;
			$tongnhom10 = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$tongnhom2 += $ts[$j][2];
					$tongnhom3 += $ts[$j][3];
					$tongnhom4 += $ts[$j][4];
					$tongnhom5 += $ts[$j][5];
					$tongnhom6 += $ts[$j][6];
					$tongnhom7 += $ts[$j][7];
					$tongnhom8 += $ts[$j][8];
					$tongnhom9 += $ts[$j][9];
					$tongnhom10 += $ts[$j][10];
				}
			}
			/*
			if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà, công trình xây dựng' || $tennhom == 'Nhà' || $tennhom == 'Xe ô tô' || $tennhom == 'Phương tiện vận tải đường bộ') {
				//nhóm group
				$j = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($ts[$j][0] == $tennhom) {
						$tongnhom2 += $ts[$j][2];
						$tongnhom3 += $ts[$j][3];
						$tongnhom4 += $ts[$j][4];
						$tongnhom5 += $ts[$j][5];
						$tongnhom6 += $ts[$j][6];
						$tongnhom7 += $ts[$j][7];
						$tongnhom8 += $ts[$j][8];
						$tongnhom9 += $ts[$j][9];
						$tongnhom10 += $ts[$j][10];
					}
				}
			}
			if ($tennhom != 'Quyền sử dụng đất' && $tennhom != 'Nhà, công trình xây dựng' && $tennhom != 'Nhà' &&  $tennhom != 'Xe ô tô' && $tennhom != 'Phương tiện vận tải đường bộ') {
				//nhóm group
				$j = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($ts[$j][0] == $tennhom) {
						$tongnhom2 += $ts[$j][2];
						$tongnhom3 += $ts[$j][3];
						$tongnhom4 += $ts[$j][4];
						$tongnhom5 += $ts[$j][5];
						$tongnhom6 += $ts[$j][6];
						$tongnhom7 += $ts[$j][7];
						$tongnhom8 += $ts[$j][8];
						$tongnhom9 += $ts[$j][9];
						$tongnhom10 += $ts[$j][10];
					}
				}
			}*/
			// in Group
			echo "<tr >";
			echo "<td ></td>";
			echo "<td  style='font-weight: bold;text-align: left'>$tenhienthi</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom2) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom3) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom4) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom5) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom6) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom7) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom8) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom9) . "</td>";
			echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tongnhom10) . "</td>";
			echo "</tr>";
		}
		// chi tiết
		echo "<tr >";
		echo "<td style='text-align: center'>" . $stt . "</td>";
		echo "<td style='text-align: left'>" . $ts[$i][1] . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][2]) . "</td>";
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
}
// in tổng cộng
echo "<tr >";
echo "<td colspan='2' style='font-weight: bold;text-align: center'> Tổng cộng</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong2) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong3) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong4) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong5) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong6) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong7) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong8) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong9) . "</td>";
echo "<td style='font-weight: bold;text-align: right;'>" . dinhdangso($tong10) . "</td>";
echo "</tr>";
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