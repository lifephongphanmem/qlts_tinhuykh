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
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['tgsc']))
		$tgsc = true;
	else
		$tgsc = false;
}
echo $tgsc;
if(isset($_POST['noidung']))
	$noidung = $_POST['noidung'];
$machuong ="";
$sql = "Select machuong from thongtindonvi where madonvi = '$madv[0]'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$machuong = $row['machuong'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, tỉnh: </nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 08b-ĐK/TSC</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã đơn vị: ".$madv[1]; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BÁO CÁO TỔNG HỢP TÌNH HÌNH TĂNG, GIẢM TÀI SẢN CÔNG</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic">  <?php echo "Kỳ báo cáo: Từ ngày ".$tungay. " đến ngày ". $denngay  ?></td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;"> </td>
		</tr>
	</table>
<table cellspacing="0" cellpadding="0" border="0" style="margin: 20px auto; border-collapse: collapse;">
	<tr>
		<td colspan="14" style="font-style: italic">ĐVT cho: Số lượng là: Cái, khuôn viên; Diện tích là: m2; Nguyên giá là: Nghìn đồng.</td>
	</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="2" width="20%">TÀI SẢN</th>
			<th rowspan="2" >MÃ ĐƠN VỊ</th>
			<th colspan="3" >SỐ ĐẦU KỲ</th>
			<th colspan="3" >SỐ TĂNG TRONG KỲ</th>
			<th colspan="3" >SỐ GIẢM TRONG KỲ</th>
			<th colspan="3" >SỐ CUỐI KỲ</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;">Đơn giá</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;">Đơn giá</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;">Đơn giá</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Diện tích</th>
			<th style="font-weight: inherit;">Đơn giá</th>
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
			<th style="font-weight: inherit;">12</th>
			<th style="font-weight: inherit;">13</th>
			<th style="font-weight: inherit;">14</th>
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
	global $tungay;
	global $denngay;
	global $con;
	$soluong = 0;
	$sotien = 0;
	$kq = 0;
	$sql = "Select distinct tblqlts.DTKV,tblqlts.DTXD,ngansach+nguonkhac as NG ".
		" From tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS ".
		" Where tblqlts.TTQLTS = ". $msts ." and tbldenghi.ngaythang between '".doingay($tungay)."' and '".doingay($denngay)."'";
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
	global $tungay;
	global $denngay;
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
		($condition == "Đầu kỳ" ? " and ngaytanggiam < '" . doingay($tungay) . "' " : "") .
		($condition == "Trong kỳ" ? " and ngaytanggiam between '" . doingay($tungay) . "' and '" . doingay($denngay) . "' " : "") .
		($condition == "Cuối kỳ" ? " and ngaytanggiam <= '" . doingay($denngay) . "' " : "");
	//	echo $sqltg;
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
		($condition == "Đầu kỳ" ? " and tbldenghi.ngaythang < '" . doingay($tungay) . "' " : "") .
		($condition == "Trong kỳ" ? " and tbldenghi.ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "' " : "") .
		($condition == "Cuối kỳ" ? " and tbldenghi.ngaythang <= '" . doingay($denngay) . "' " : "");
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$sogiam = $row['DTKV'] + $row['DTXD'];
		$sotiengiam = $row['NG'] + $sotientang;
	}
	$sql = "Select distinct DTKV,DTXD,ngansach+nguonkhac as NG" .
		" from tblqlts where TTQLTS = " . $msts .
		($condition == "Đầu kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen < '" . doingay($tungay) . "'  ELSE ngaysudung < '" . doingay($tungay) . "' END) " : "") .
		($condition == "Trong kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'  ELSE  ngaysudung between '" . doingay($tungay) . "' and '" . doingay($denngay) . "' END) " : "") .
		($condition == "Cuối kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" . doingay($denngay) . "'  ELSE ngaysudung <= '" . doingay($denngay) . "' END)" : "");
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

$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
		($denngay == ""?"":" and tblqlcc.ngaysudung <= '" . doingay($denngay) . "'");
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
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung
					from tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]'";
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
	$sqlts = $sqlts . " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN tblqlts.ngaythangchuyen <= '" . doingay($denngay) . "'  ELSE tblqlts.ngaysudung <= '" . doingay($denngay) . "' END) " .
		//$sqlts = $sqlts." and tblqlts.ngaysudung <= '" . doingay($denngay) .
		" and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or tbldenghi.hinhthuc = 'Thu hồi' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Tiêu hủy') and ngaythang <= '" . doingay($tungay) . "') order by tbldanhsachqd32.ttsx";
	//echo $sqlts;
	$queryts = mysqli_query($con, $sqlts);
	$tg = array(array(0, "A", "B", "N", 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$stdk = 0;
	$sttkt = 0;
	$sttkg = 0;
	$stck = 0;
	$tennhom = "";
	$tents = "";
	$dvt = "";
	$tennhomsau = "";
	$sl1 = 0;
	$sl2 = 0;
	$sl3 = 0;
	$sl4 = 0;
	$sl5 = 0;
	$sl6 = 0;
	$sl7 = 0;
	$sl8 = 0;
	while ($rowts = mysqli_fetch_array($queryts)) {
		$nam1 = 0;
		$thang1 = 0;
		$nam2 = 0;
		$thang2 = 0;
		$chuoi1 = "";
		$chuoi2 = "";
		if ($rowts['ngaysudung'] != "") {
			$chuoi1 = explode('-', $rowts['ngaysudung']);
		}
		$ngaysd = doingay($rowts['ngaysudung']);
		$chuoi2 = explode('/', $tungay);
		$kq = 0;
		$tang = 0;
		$sttang = 0;
		$stgiam = 0;
		$kqtk = 0;
		$tangtk = 0;
		$sttangtk = 0;
		$stgiamtk = 0;
		//if ($rowts['DTKV'] + $rowts['DTXD'] + $tang > $kq) {
		$tg[$cs][0] = $cs + 1;
		$tg[$cs][1] = $rowts['tenchitiet'];
		$tg[$cs][2] = $rowts['DVT'];
		$tg[$cs][3] = $rowts['chitiethinhthai'];

		$tg[$cs][4] = tinhtoan($rowts['TTQLTS'], "Đầu kỳ", "Số lượng", "");
		$tg[$cs][5] = tinhtoan($rowts['TTQLTS'], "Đầu kỳ", "Số tiền", "")/1000;
		$tg[$cs][6] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số lượng", "Tăng");
		$tg[$cs][7] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số tiền", "Tăng")/1000;

		$tg[$cs][8] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số lượng", "Giảm");
		$tg[$cs][9] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số tiền", "Giảm")/1000;
		$tg[$cs][10] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số lượng", "");
		$tg[$cs][11] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số tiền", "")/1000;

		$cs = $cs + 1;
		//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhomsl2 = 0;
	$nhomsl4 = 0;
	$nhomsl6 = 0;
	$nhomsl8 = 0;
	$j = 0;
	$stt = 0;
//
	echo "<tr style='vertical-align:top;'>";
	echo "<td colspan='14' style='vertical-align:middle;font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
//
	for ($i = 0; $i < $cs; $i++) {
		$stdk += $tg[$i][5];
		$sttkt += $tg[$i][7];
		$sttkg += $tg[$i][9];
		$stck += $tg[$i][11];
		$stt++;
		$tennhom = $tg[$i][3];
		$tents = $tg[$i][1];
		$dvt = $tg[$i][2];
		$sl1 = dinhdangso($tg[$i][4]);
		$sl2 = dinhdangso($tg[$i][5]);
		$sl3 = dinhdangso($tg[$i][6]);
		$sl4 = dinhdangso($tg[$i][7]);
		$sl5 = dinhdangso($tg[$i][8]);
		$sl6 = dinhdangso($tg[$i][9]);
		$sl7 = dinhdangso($tg[$i][10]);
		$sl8 = dinhdangso($tg[$i][11]);
		$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? 'Đất khuân viên' : ($tennhom == 'Nhà' ? 'Nhà' : ($tennhom == 'Phương tiện vận tải đường bộ' ? 'Xe ô tô' : 'Tài sản cố định khác'));
		$tengroup = $tenhienthi;
		if($tengroup != $tennhomsau) {
			if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
				// Nhom tai san
				$nhomsl2 = 0;
				$nhomsl4 = 0;
				$nhomsl6 = 0;
				$nhomsl8 = 0;
				$j = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($tg[$j][3] == $tennhom) {
						$nhomsl2 += $tg[$j][5];
						$nhomsl4 += $tg[$j][7];
						$nhomsl6 += $tg[$j][9];
						$nhomsl8 += $tg[$j][11];
					}
				}
				$nhomsl2 = dinhdangso($nhomsl2);
				$nhomsl4 = dinhdangso($nhomsl4);
				$nhomsl6 = dinhdangso($nhomsl6);
				$nhomsl8 = dinhdangso($nhomsl8);
				echo "<tr style='font-weight: bold'>";
				echo "<td style='text-align: left;'><nobr>" . $tenhienthi . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl2 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl4 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl6 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>" . $nhomsl8 . "</td>";
				echo "</tr>";
			}
			if ($tennhom != 'Quyền sử dụng đất' && $tennhom != 'Nhà' && $tennhom != 'Phương tiện vận tải đường bộ') {
				// Nhom tai san
				$nhomsl2 = 0;
				$nhomsl4 = 0;
				$nhomsl6 = 0;
				$nhomsl8 = 0;
				$j = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($tg[$j][3] == $tennhom) {
						$nhomsl2 += $tg[$j][5];
						$nhomsl4 += $tg[$j][7];
						$nhomsl6 += $tg[$j][9];
						$nhomsl8 += $tg[$j][11];
					}
				}
				$nhomsl2 = dinhdangso($nhomsl2);
				$nhomsl4 = dinhdangso($nhomsl4);
				$nhomsl6 = dinhdangso($nhomsl6);
				$nhomsl8 = dinhdangso($nhomsl8);
				//Group
				echo "<tr style='font-weight: bold'>";
				echo "<td style='text-align: left;'><nobr>" . $tenhienthi . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl2 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl4 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'><nobr>" . $nhomsl6 . "</nobr></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>" . $nhomsl8 . "</td>";
				echo "</tr>";
			}
		}
		//Chi tiết
		echo "<tr>";
		echo "<td style='text-align: left;'><nobr>" . $tents . "</nobr></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: right;'>";if($sl1 > 0) echo ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl1); echo "</td>";
		echo "<td style='text-align: right;'>" . ($tennhom == 'Quyền sử dụng đất' ? $sl1 : $tennhom == 'Nhà' ? $sl1 : $tennhom == 'Phương tiện vận tải đường bộ' ? $sl1 : '') . "</td>";
		echo "<td style='text-align: right;'><nobr>" . $sl2 . "</nobr></td>";
		echo "<td style='text-align: right;'>";if($sl3 > 0) echo ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl3); echo "</td>";
		echo "<td style='text-align: right;'>" . ($tennhom == 'Quyền sử dụng đất' ? $sl3 : $tennhom == 'Nhà' ? $sl3 : $tennhom == 'Phương tiện vận tải đường bộ' ? $sl3 : '') . "</td>";
		echo "<td style='text-align: right;'><nobr>" . $sl4 . "</nobr></td>";
		echo "<td style='text-align: right;'>";if($sl5 > 0) echo ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl5); echo "</td>";
		echo "<td style='text-align: right;'>" . ($tennhom == 'Quyền sử dụng đất' ? $sl5 : $tennhom == 'Nhà' ? $sl5 : $tennhom == 'Phương tiện vận tải đường bộ' ? $sl5 : '') . "</td>";
		echo "<td style='text-align: right;'><nobr>" . $sl6 . "</nobr></td>";
		echo "<td style='text-align: right;'>";if($sl7 > 0) echo ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl7); echo "</td>";
		echo "<td style='text-align: right;'>" . ($tennhom == 'Quyền sử dụng đất' ? $sl7 : $tennhom == 'Nhà' ? $sl7 : $tennhom == 'Phương tiện vận tải đường bộ' ? $sl7 : '') . "</td>";
		echo "<td style='text-align: right;'>" . $sl8 . "</td>";
		echo "</tr>";
		$tennhomsau=$tenhienthi;
	}
//Cổng tổng
	$stdk = dinhdangso($stdk);$sttkt = dinhdangso($sttkt);$sttkg = dinhdangso($sttkg);$stck = dinhdangso($stck);
	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: left;'><nobr>Tổng cộng</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'><nobr>" . $stdk . "</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'><nobr>" . $sttkt . "</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'><nobr>" . $sttkg . "</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'>" . $stck . "</td>";
	echo "</tr>";
}
?>
	</table>
<table >
	<tr>

	</tr>
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">Người lập biểu</td>
		<td style="text-align: center; font-weight: bold;"> Kế toán trưởng</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên)</td>
	</tr>
</table>
</body>		
</html>	