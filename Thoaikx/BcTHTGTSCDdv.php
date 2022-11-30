<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs4B17AE5C {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs7DC1BDF5 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs54F31D69 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs8556A6FD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs2C853136 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:19px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
			.in{
				display: none !important;
			}
		}
	</style>
	<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 1100px;">
	<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
	<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
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
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:36px;"></td>
		<td style="height:0px;width:44px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:52px;"></td>
		<td style="height:0px;width:126px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:37px;"></td>
		<td style="height:0px;width:53px;"></td>
		<td style="height:0px;width:5px;"></td>
		<td style="height:0px;width:105px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:65px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:19px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:43px;"></td>
		<td style="height:0px;width:54px;"></td>
		<td style="height:0px;width:51px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:95px;"></td>
		<td style="height:0px;width:10px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:90px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;chương: <?php echo $machuong;?></nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:344px;height:20px;"></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="9" style="width:366px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;B04&nbsp;-&nbsp;H</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:111px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Đơn vị báo cáo: ".$madv[2]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:323px;height:20px;"></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="9" rowspan="3" style="width:366px;height:58px;line-height:18px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="5" style="width:163px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Mã ĐV có QH với NS: ".$madv[1]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:271px;height:20px;"></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:18px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs2C853136" colspan="21" style="width:1008px;height:24px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>B&#193;O&nbsp;C&#193;O&nbsp;T&#204;NH&nbsp;H&#204;NH&nbsp;TĂNG,&nbsp;GIẢM&nbsp;TSCĐ</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="11" style="width:428px;height:22px;text-align:center;vertical-align:middle;"><?php echo "Từ ngày: ".$tungay."     đến ngày: ".$denngay; ?></td>
		<td></td>
		<td class="cs5DE5F832" colspan="4" style="width:210px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;t&#237;nh:&nbsp;............</nobr></td>
	</tr>
</table>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
//Tiêu đề báo cáo
echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
echo "<tr style='vertical-align:top;'>";
echo "<td style='width:0px;height:22px;'></td>";
echo "<td class='cs4B17AE5C' colspan='2' style='width:44px;height:21px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>S</nobr></td>";
echo "<td class='cs54F31D69' colspan='5' style='width:267px;height:21px;'></td>";
echo "<td class='cs54F31D69' colspan='2' style='width:66px;height:21px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Đơn&nbsp;vị</nobr></td>";
echo "<td class='cs425CAA45' colspan='3' style='width:162px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;đầu&nbsp;năm</nobr></td>";
echo "<td class='cs425CAA45' colspan='4' style='width:162px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tăng&nbsp;trong&nbsp;năm</nobr></td>";
echo "<td class='cs425CAA45' colspan='4' style='width:161px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Giảm&nbsp;trong&nbsp;năm</nobr></td>";
echo "<td class='cs425CAA45' colspan='3' style='width:162px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;cuối&nbsp;năm</nobr></td>";
echo "</tr>";
echo "<tr style='vertical-align:top;'>";
echo "<td style='width:0px;height:41px;'></td>";
echo "<td class='csDC952B64' colspan='2' style='width:44px;height:40px;line-height:18px;text-align:center;vertical-align:top;'><nobr>T</nobr><br/><nobr>T</nobr></td>";
echo "<td class='cs16D304E1' colspan='5' style='width:267px;height:40px;line-height:18px;text-align:center;vertical-align:top;'><nobr>-&nbsp;Loại&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr><br/><nobr>-&nbsp;Nh&#243;m&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:40px;line-height:18px;text-align:center;vertical-align:top;'><nobr>t&#237;nh</nobr><br/><nobr>số&nbsp;lượng</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:57px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>SL</nobr></td>";
echo "<td class='cs16D304E1' style='width:104px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>GT</nobr></td>";
echo "<td class='cs16D304E1' style='width:56px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>SL</nobr></td>";
echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>GT</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:56px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>SL</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>GT</nobr></td>";
echo "<td class='cs16D304E1' style='width:57px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>SL</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>GT</nobr></td>";
echo "</tr>";
echo "<tr style='vertical-align:top;'>";
echo "<td style='width:0px;height:21px;'></td>";
echo "<td class='csDC952B64' colspan='2' style='width:44px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>A</nobr></td>";
echo "<td class='cs16D304E1' colspan='5' style='width:267px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>B</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>C</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>1</nobr></td>";
echo "<td class='cs16D304E1' style='width:104px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>2</nobr></td>";
echo "<td class='cs16D304E1' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>3</nobr></td>";
echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>4</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>5</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>6</nobr></td>";
echo "<td class='cs16D304E1' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>7</nobr></td>";
echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>8</nobr></td>";
echo "</tr>";
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
//tính toán số giảm trong năm
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
		" Where tblqlts.TTQLTS = " . $msts . " and (tbldenghi.hinhthuc = 'Thanh lý'  or tbldenghi.hinhthuc = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán' or hinhthuc  = 'Tiêu hủy')" .
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
//Lấy danh sách đơn vị
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
foreach($_aDV as $_madv){
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung
					from tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]'";
	if ($phanloai == "")
	{
		$sqlts = $sqlts." and tblqlts.chitiethinhthai like '" .$phanloai."%'";
	}
	else
	{
		$sqlts = $sqlts." and (";
		$count=0;$chars=str_split($_POST["sobg"]);
		foreach($chars as &$char)
		{
			if($char=='>')
			{
				$count++;
			}
		}
		for($i=0;$i<$count;$i++)
		{
			if ($i == $count - 1)
				$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%'";
			else
				$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%' or ";
		}
		$sqlts = $sqlts.")";
	}
	$sqlts = $sqlts . " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN tblqlts.ngaythangchuyen <= '" .  doingay($denngay) ."'  ELSE tblqlts.ngaysudung <= '" . doingay($denngay) ."' END) ".
	//$sqlts = $sqlts." and tblqlts.ngaysudung <= '" . doingay($denngay) .
		 " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or tbldenghi.hinhthuc = 'Thu hồi' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Tiêu hủy') and ngaythang <= '" . doingay($tungay) . "') order by tbldanhsachqd32.ttsx";
	//echo $sqlts;
	$queryts=mysqli_query($con,$sqlts);
	$tg =  array(array(0,"A","B","N",0,0,0,0,0,0,0,0));
	$cs=0;$i=0;
	$stdk=0;$sttkt=0;$sttkg=0;$stck=0;
	$tennhom="";$tents="";$dvt="";$tennhomsau="";
	$sl1=0;$sl2=0;$sl3=0;$sl4=0;$sl5=0;$sl6=0;$sl7=0;$sl8=0;
	while($rowts=mysqli_fetch_array($queryts)) {
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

			$tg[$cs][4] = tinhtoan($rowts['TTQLTS'],"Đầu kỳ","Số lượng","");
			$tg[$cs][5] = tinhtoan($rowts['TTQLTS'],"Đầu kỳ","Số tiền","");
			$tg[$cs][6] = tinhtoan($rowts['TTQLTS'],"Trong kỳ","Số lượng","Tăng");
			$tg[$cs][7] = tinhtoan($rowts['TTQLTS'],"Trong kỳ","Số tiền","Tăng");

			$tg[$cs][8] = tinhtoan($rowts['TTQLTS'],"Trong kỳ","Số lượng","Giảm");
			$tg[$cs][9] = tinhtoan($rowts['TTQLTS'],"Trong kỳ","Số tiền","Giảm");
			$tg[$cs][10] = tinhtoan($rowts['TTQLTS'],"Cuối kỳ","Số lượng","");
			$tg[$cs][11] = tinhtoan($rowts['TTQLTS'],"Cuối kỳ","Số tiền","");

			$cs = $cs + 1;
			//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhomsl2=0;$nhomsl4=0;$nhomsl6=0;$nhomsl8=0;$j=0;$stt=0;
	//Tên đơn vị
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:22px;'></td>";
	echo "<td class='csDC952B64' colspan='23' style='width:44px;height:21px;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
	echo "</tr>";
	//print $tg;
	for($i=0;$i<$cs;$i++)
	{
		$stdk += $tg[$i][5];
		$sttkt += $tg[$i][7];
		$sttkg += $tg[$i][9];
		$stck += $tg[$i][11];
		$stt++;
		$tennhom=$tg[$i][3];
		$tents=$tg[$i][1];
		$dvt=$tg[$i][2];
		$sl1 = dinhdangso($tg[$i][4]);
		$sl2 = dinhdangso($tg[$i][5]);
		$sl3 = dinhdangso($tg[$i][6]);
		$sl4 = dinhdangso($tg[$i][7]);
		$sl5 = dinhdangso($tg[$i][8]);
		$sl6 = dinhdangso($tg[$i][9]);
		$sl7 = dinhdangso($tg[$i][10]);
		$sl8 = dinhdangso($tg[$i][11]);
		if ($tennhom != $tennhomsau) {
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
			echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:22px;'></td>";
			echo "<td class='csDC952B64' colspan='2' style='width:44px;height:21px;'></td>";
			echo "<td class='cs16D304E1' colspan='5' style='width:267px;height:21px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$tennhom</td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:21px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:57px;height:21px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
			echo "<td class='cs16D304E1' style='width:104px;height:21px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$nhomsl2</nobr></td>";
			echo "<td class='cs16D304E1' style='width:56px;height:21px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
			echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:21px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$nhomsl4</nobr></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:56px;height:21px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:21px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$nhomsl6</nobr></td>";
			echo "<td class='cs16D304E1' style='width:57px;height:21px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:21px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$nhomsl8</nobr></td>";
			echo "</tr>";
		}
		// Chi tiet
		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:21px;'></td>";
		echo "<td class='cs7DC1BDF5' colspan='2' style='width:44px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='5' style='width:267px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$tents</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:66px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$dvt</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl1</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl2</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl3</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='3' style='width:105px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl4</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl5</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl6</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl7</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl8</nobr></td>";
		echo "</tr>";
		$tennhomsau=$tg[$i][3];
	}
	// Tong cong
	$stdk = dinhdangso($stdk);$sttkt = dinhdangso($sttkt);$sttkg = dinhdangso($sttkg);$stck = dinhdangso($stck);
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:21px;'></td>";
	echo "<td class='csDC952B64' colspan='2' style='width:44px;height:20px;'></td>";
	echo "<td class='cs16D304E1' colspan='5' style='width:267px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tổng&nbsp;cộng</nobr></td>";
	echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:20px;'></td>";
	echo "<td class='cs16D304E1' colspan='2' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
	echo "<td class='cs16D304E1' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$stdk</nobr></td>";
	echo "<td class='cs16D304E1' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
	echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sttkt</nobr></td>";
	echo "<td class='cs16D304E1' colspan='2' style='width:56px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
	echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sttkg</nobr></td>";
	echo "<td class='cs16D304E1' style='width:57px;height:20px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>x</nobr></td>";
	echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:20px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$stck</nobr></td>";
	echo "</tr>";
}
echo "</table>";
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="cs62AA4CC9" colspan="8" style="width:344px;height:19px;"></td>
		<td class="cs62AA4CC9" colspan="7" style="width:344px;height:19px;"></td>
		<td class="cs62AA4CC9" colspan="8" style="width:344px;height:19px;text-align:center;vertical-align:middle;font-style:italic;"><?php echo $madv[7].", ngày ... tháng ... năm ......"; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;ghi&nbsp;sổ</nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="7" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:344px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:77px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:344px;height:77px;text-align:center;vertical-align:middle;"><?php echo $madv[4]; ?></td>
		<td class="csB6E29E9B" colspan="7" style="width:344px;height:77px;text-align:center;vertical-align:middle;"><?php echo $madv[5]; ?></td>
		<td class="csB6E29E9B" colspan="8" style="width:344px;height:77px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>