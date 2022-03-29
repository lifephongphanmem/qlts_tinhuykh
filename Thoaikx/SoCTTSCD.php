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
$phanloai = "";
$tungay = "";
$denngay = "";
$madv ="";
$noidung = "";
$tgsc = "";
$nam = "";
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$nam = $_POST['nam'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['tgsc']))
		$tgsc = true;
	else
		$tgsc = false;
}
if(isset($_POST['noidung']))
	$noidung = $_POST['noidung'];
$machuong ="";
$masons = "";
$sql = "Select machuong,maqhns from thongtindonvi where madonvi = '$madv[0]'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$machuong = $row['machuong'];
	$masons =$row['maqhns'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Mã chương: <?php echo  $machuong;?></nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số SCT_TSCD1</nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Đơn vị báo cáo: ".$madv[2]; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã đơn vị: ".$masons; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Đơn vị thành viên: ".$madv[2]; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">SỔ CHI TIẾT TÀI SẢN CỐ ĐỊNH</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic">  <?php echo "Năm: ".$nam  ?></td>
		</tr>
		<tr>
			<td style="text-align: right;font-weight: bold; font-style: italic;">Đơn vị tính: đồng </td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">Nhóm TSCĐ</th>
			<th width="20%">Tên tài sản</th>
			<th  >Người sử dụng</th>
			<th  >Nước sản xuất</th>
			<th  >Ngày sử dụng</th>
			<th >Số năm sử dụng</th>
			<th >Tỷ lệ HM</th>
			<th >Nguyên giá</th>
			<th >Giá trị hao mòn đầu kỳ</th>
			<th >Số hao mòn trong kỳ</th>
			<th >Giá trị hao mòn lũy kế</th>
			<th >Giá trị còn lại</th>
		</tr>
		<tr style="text-align: center">
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>D</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
		</tr>
<?php
//làm việc với cơ sở dữ liệu
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
$cc = array();
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
function giamtk($msts,$condition)
{
	global $nam;
	global $con;
	$soluong = 0;
	$sotien = 0;
	$kq = 0;
	$sql = "Select distinct tblqlts.DTKV,tblqlts.DTXD,ngansach+nguonkhac as NG ".
		" From tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS ".
		" Where tblqlts.TTQLTS = ". $msts ." and Year(tbldenghi.ngaythang) = ".$nam;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$soluong = $row['DTKV'] + $row['DTXD'];
		$sotien = $row['NG'];
	}
	if($condition == "Số lượng")
		$kq = $soluong;
	if($condition == "Số tiền")
		$kq = $sotien;
	return $kq;
}
//tính số lượng
function tinhtoan($msts,$condition,$condition1,$tanggiam)
{
	global $con;
	global $nam;
	global $tgsc;
	$soluongts = 0;
	$sotients = 0;
	$sotang = 0;
	$sogiam = 0;
	$slg = 0;
	$sotientang = 0;
	$sotiengiam = 0;
	$stg = 0;
	$kq = 0;

	//xác định số tiền tăng nguyên giá
	$sqltg = "Select lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien" .
		" from tbltanggiam where TTQLTS = " . $msts .
		($condition == "Đầu kỳ" ? " and Year(ngaytanggiam) < '" . $nam . "' " : "") .
		($condition == "Trong kỳ" ? " and Year(ngaytanggiam) = '" . $nam . "' " : "") .
		($condition == "Cuối kỳ" ? " and Year(ngaytanggiam) <= '" . $nam . "' " : "");
		//echo $sqltg;
	$querytg = mysqli_query($con, $sqltg);
	while ($rowtg = mysqli_fetch_array($querytg)) {
		if ($rowtg['tanggiam'] == "Tăng") {
			$sotang = $sotang + $rowtg['soluong'];
			$sotientang += $rowtg['ngansach'] + $rowtg['nguonkhac'];
		}
		if ($rowtg['tanggiam'] == "Giảm") {
			$slg += $rowtg['soluong'];
			$stg += $rowtg['ngansach'] + $rowtg['nguonkhac'];
		}
	}

	//Số lượng giảm trong kỳ
	$sql = "Select distinct tblqlts.DTKV,tblqlts.DTXD,ngansach+nguonkhac as NG " .
		" From tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS " .
		" Where tblqlts.TTQLTS = " . $msts . " and (tbldenghi.hinhthuc = 'Thanh lý'  or tbldenghi.hinhthuc = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán')" .
		//($condition == "Đầu kỳ" ? " and Year(tbldenghi.ngaythang) < '" . $nam . "' " : "") .
		//($condition == "Trong kỳ" ? " and Year(tbldenghi.ngaythang) = '" . $nam . "' " : "") .
		//($condition == "Cuối kỳ" ? " and Year(tbldenghi.ngaythang) <= '" . $nam . "' " : "");
		($condition == "Cuối kỳ" ? " and Year(tbldenghi.ngaythang) < '" . $nam . "' " : "");
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$sogiam = $row['DTKV'] + $row['DTXD'];
		$sotiengiam = $row['NG'] + $sotientang;
	}
	$sql = "Select distinct DTKV,DTXD,ngansach+nguonkhac as NG" .
		" from tblqlts where TTQLTS = " . $msts .
		($condition == "Đầu kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) < '" . $nam . "'  ELSE Year(ngaysudung) < '" . $nam . "' END) " : "") .
		($condition == "Trong kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) = '" . $nam . "'  ELSE  Year(ngaysudung) = '" . $nam . "' END) " : "") .
		($condition == "Cuối kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) <= '" . $nam . "'  ELSE Year(ngaysudung) <= '" . $nam . "' END)" : "");
	//($condition == "Đầu kỳ"? " and ngaysudung < '" . doingay($tungay) . "' ":"").
	//($condition == "Trong kỳ"? " and ngaysudung between '" . doingay($tungay) . "' and '" . doingay($denngay) . "' ":"").
	//($condition == "Cuối kỳ"? " and ngaysudung <= '" . doingay($denngay) . "' ":"");
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$soluongts += $row['DTKV'] + $row['DTXD'];
		$sotients += $row['NG'];
	}
	if ($tgsc) {
		if ($condition1 == "Số lượng" && $tanggiam == "")
			$kq = $soluongts + $sotang - $sogiam - $slg;
		if ($condition1 == "Số tiền" && $tanggiam == "")
			$kq = $sotients + $sotientang - $sotiengiam - $stg;
		if ($tanggiam == "Tăng" && $condition1 == "Số lượng")
			$kq = $soluongts + $sotang;
		if ($tanggiam == "Giảm" && $condition1 == "Số lượng")
			$kq = $sogiam + $slg;
		if ($tanggiam == "Tăng" && $condition1 == "Số tiền")
			$kq = $sotients + $sotientang;
		if ($tanggiam == "Giảm" && $condition1 == "Số tiền")
			$kq = $sotiengiam + $stg;
	} else {
		if ($condition1 == "Số lượng" && $tanggiam == "")
			$kq = $soluongts + $sotang - $sogiam;
		if ($condition1 == "Số tiền" && $tanggiam == "")
			$kq = $sotients + $sotientang - $sotiengiam;
		if ($tanggiam == "Tăng" && $condition1 == "Số lượng")
			$kq = $soluongts;
		if ($tanggiam == "Giảm" && $condition1 == "Số lượng")
			$kq = $sogiam;
		if ($tanggiam == "Tăng" && $condition1 == "Số tiền")
			$kq = $sotients;
		if ($tanggiam == "Giảm" && $condition1 == "Số tiền")
			$kq = $sotiengiam;
	}

	return $kq;
}

$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'";
		//($nam == ""?"":" and tblqlts.ngaysudung <= '" . $nam . "'");
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
			'ten'=>$_r['tendv']
	);
}
//Duyệt từng đơn vị
$_sQLdv="Select thongtindonvi.madonvi, thongtindonvi.tendv from thongtindonvi where thongtindonvi.madonvi Like '$msdv%' and LENGTH(madonvi) >= 16 ORDER BY tendv";
//$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tbltanggiam inner join thongtindonvi on tbltanggiam.madonvi=thongtindonvi.madonvi where tbltanggiam.madonvi Like '$msdv%' and ngaytanggiam <= '" . doingay($denngay) . "'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}

//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung,
					tblqlts.mataisan, tblqlts.nguoisudung, tblqlts.tentaisan, tblqlts.sonamsd, tblqlts.sohaomon, tblqlts.conlai,tblqlts.NUOCSX,tblqlts.phantram,tbldanhsachqd32.hinhthaitaisan
					from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]' and Year(tblqlts.ngaysudung) <= $nam";
	if ($phanloai == "") {
		$sqlts = $sqlts . " and tblqlts.chitiethinhthai like '" . $phanloai . "%'";
	} else {
		$sqlts = $sqlts . " and (";
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
		$sqlts = $sqlts . ")";
	}
	$sqlts = $sqlts . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán' or hinhthuc  = 'Tiêu hủy') and year(ngaythang) <= " . $nam . ")";
	$sqlts = $sqlts ." order by tbldanhsachqd32.ttsx,tbldanhsachqd32.mataisanqd32,tblqlts.TTQLTS";
	//echo $sqlts;
	$queryts = mysqli_query($con, $sqlts);
	$tg = array(array(0, "A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0));
	//$tg = array();
	$cs = 0;
	$i = 0;
	$tongNG = 0;
	$tongHMdk = 0;
	$tongHMtk = 0;
	$tongHMlk = 0;
	$tongCL = 0;
	$tennhom = "";
	$tents = "";
	$dvt = "";
	$tennhomsau = "";
	$sl1 = 0;
	$sl2 = 0;
	$sl3 = 0;
	$sl4 = 0;
	$sl5 = 0;
	while ($rowts = mysqli_fetch_array($queryts)) {
			$tg[$cs][0] = $cs + 1;
			$tg[$cs][1] = $rowts['mataisan'];
			$tg[$cs][2] = $rowts['mataisan'] . "." . $rowts['TTQLTS'];
			$tg[$cs][3] = $rowts['tenchitiet'];
			$tg[$cs][4] = $rowts['hinhthaitaisan'];
			$tg[$cs][5] = $rowts['nguoisudung'];
			$tg[$cs][6] = $rowts['NUOCSX'];
			$tg[$cs][7] = ngaythang($rowts['ngaysudung']);
			$tg[$cs][8] = $rowts['sonamsd'];
			$tg[$cs][9] = $rowts['phantram'];
			$tg[$cs][10] = $rowts['NG'] ;
			if($tgsc) {
				$tg[$cs][10] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số tiền", "");
			}
			$tg[$cs][11] = 0;
			$tg[$cs][12] = 0;
			$tg[$cs][13] = 0;
			$tg[$cs][14] = $rowts['NG'];
		$sqlhm = "Select sodu,sotien from tblhaomon where TTQLTS =".$rowts['TTQLTS']." and namhaomon = $nam";
		$qrsqlhm = mysqli_query($con,$sqlhm);
		while($rowhm = mysqli_fetch_array($qrsqlhm)) {
			$kq = 0;
			$tg[$cs][11] = $rowhm['sodu'];
			$tg[$cs][12] = $rowhm['sotien'];
			$tg[$cs][13] = $rowhm['sotien'] + $rowhm['sodu'];
			$tg[$cs][14] = $rowts['NG'] - $rowhm['sotien'] - $rowhm['sodu'];
			if($tgsc) {
				$tg[$cs][14] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số tiền", "") - $rowhm['sotien'] - $rowhm['sodu'];
			}
		}

		$cs = $cs + 1;
		//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhoms1 = 0;
	$nhoms2 = 0;
	$nhoms3 = 0;
	$nhoms4 = 0;
	$nhoms5 = 0;
	$tennhomsau ="";
	$j = 0;
	$stt = 0;
	echo "<tr style='vertical-align:top;'>";
	echo "<td colspan='12' style='vertical-align:middle;font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
//
	for ($i = 0; $i < $cs; $i++) {
		$tongNG += $tg[$i][10];
		$tongHMdk += $tg[$i][11];
		$tongHMtk += $tg[$i][12];
		$tongHMlk += $tg[$i][13];
		$tongCL += $tg[$i][14];
		$stt++;
		$tennhom = $tg[$i][4];
		$tents = $tg[$i][3];

		$sl1 = dinhdangso($tg[$i][10]);
		$sl2 = dinhdangso($tg[$i][11]);
		$sl3 = dinhdangso($tg[$i][12]);
		$sl4 = dinhdangso($tg[$i][13]);
		$sl5 = dinhdangso($tg[$i][14]);
		//$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? 'Đất khuân viên' : ($tennhom == 'Nhà' ? 'Nhà' : ($tennhom == 'Phương tiện vận tải đường bộ' ? 'Xe ô tô' : 'Tài sản cố định khác'));
		$tengroup = $tennhom;

		if($tennhom != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
				// Nhom tai san
				$nhoms1 = 0;
				$nhoms2 = 0;
				$nhoms3 = 0;
				$nhoms4 = 0;
				$nhoms5 = 0;
				$j = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($tg[$j][4] == $tennhom) {
						$nhoms1 += $tg[$j][10];
						$nhoms2 += $tg[$j][11];
						$nhoms3 += $tg[$j][12];
						$nhoms4 += $tg[$j][13];
						$nhoms5 += $tg[$j][14];
					}
				}
			$nhoms1 = dinhdangso($nhoms1);
			$nhoms2 = dinhdangso($nhoms2);
			$nhoms3 = dinhdangso($nhoms3);
			$nhoms4 = dinhdangso($nhoms4);
			$nhoms5 = dinhdangso($nhoms5);
				echo "<tr style='font-weight: bold'>";
				echo "<td style='text-align: left;'><nobr>"  . "</nobr></td>";
				echo "<td style='text-align: left;'><nobr>" . $tennhom . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhoms1 . "</nobr></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhoms2 . "</nobr></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhoms3 . "</nobr></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhoms4 . "</nobr></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhoms5 . "</nobr></td>";
				echo "</tr>";
		}
		//Chi tiết
		echo "<tr>";
		echo "<td style='text-align: center;'><nobr>" . $tg[$i][2] . "</nobr></td>";
		echo "<td style='text-align: left;'> ". $tg[$i][3]."</td>";
		echo "<td style='text-align: left;'>". $tg[$i][5]  . "</td>";
		echo "<td style='text-align: right;'>". $tg[$i][6]  . "</td>";
		echo "<td style='text-align: right;'>". $tg[$i][7]  . "</td>";
		echo "<td style='text-align: right;'>". $tg[$i][8]  . "</td>";
		echo "<td style='text-align: right;'>". $tg[$i][9]  . "</td>";
		echo "<td style='text-align: right;'><nobr>" . $sl1 . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . $sl2 . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . $sl3 . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . $sl4 . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . $sl5 . "</nobr></td>";
		echo "</tr>";
		$tennhomsau=$tennhom;
	}
//Cổng tổng
	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'><nobr>Tổng cộng</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'><nobr>" . dinhdangso($tongNG) . "</nobr></td>";
	echo "<td style='text-align: right;'><nobr>" . dinhdangso($tongHMdk) . "</nobr></td>";
	echo "<td style='text-align: right;'><nobr>" . dinhdangso($tongHMtk) . "</nobr></td>";
	echo "<td style='text-align: right;'><nobr>" . dinhdangso($tongHMlk) . "</nobr></td>";
	echo "<td style='text-align: right;'><nobr>" . dinhdangso($tongCL) . "</nobr></td>";
	echo "</tr>";
}
?>
	</table>
<table >
	<tr>

	</tr>
	<tr>
		<td width="30%"></td>
		<td width="30%"></td>
		<td width="40%" style="text-align: center;"> ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">Người lập biểu</td>
		<td style="text-align: center;: center; font-weight: bold;">Trưởng phòng</td>
		<td style="text-align: center; font-weight: bold;"> Thủ trưởng đơn vị</td>
	</tr>

</table>
</body>		
</html>	