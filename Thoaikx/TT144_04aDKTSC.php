<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csF0462E56 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
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
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
$DC ="";$tungay ="";$denngay ="";$madv ="";
$loaihinhdv = "";
if(isset($_POST['create'])){
	$DC = $_POST['phanloai'];
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];		
	$loaihinhdv = loaihinhdv($madv[0]);
}
?>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: left;font-weight: bold;">
			<nobr>Bộ, tỉnh: </nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 04a-ĐK/TSC</nobr></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Cơ quan quản lý cấp trên: ".$madv[3]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Cơ quan, tổ chức, đơn vị sử dụng tài sản: ".$madv[2]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>

	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã đơn vị: ".$madv[1]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Loại hình đơn vị: ".$loaihinhdv; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
</table>
<?php

	$sqld = "Select * From tblqlts Where madonvi Like '$msdv%' and TKVDAT like '" .$DC . "%' and chitiethinhthai Like 'Quyền sử dụng đất%' or chitiethinhthai Like 'Đất%' and ngaysudung <= '" . doingay($denngay) . "'";
	$queryd = mysqli_query($con,$sqld);
	$ttslv=0;$tcshcsn=0;$tlno=0;$tct=0;$tbt=0;$tblc=0;$tk=0;
		$kq = "";
		$dckv = "";
		$dtkv = "";
		$gtskt = "";
	while($rowd = mysqli_fetch_array($queryd)){
		$sqldht = "Select * From tblhientrang Where TTQLTS = " . $rowd['TTQLTS']." and ngaythang in (select max(ngaythang) from tblhientrang where TTQLTS = " . $rowd['TTQLTS']." and ngaythang <= '" . doingay($denngay) . "' )";
		$querydht = mysqli_query($con,$sqldht);
		$sl1 = 0;$sl2 = 0;$sl3 = 0;$sl4 = 0;$sl5 = 0;$sl6 = 0;$sl7 = 0;
		$sl11 = 0;$sl12 = 0;$sl13 = 0;$sl14 = 0;$sl15 = 0;$sl16 = 0;$sl17 = 0;
		while($rowdht = mysqli_fetch_array($querydht)){
			if($rowdht['phanloai'] === 'Trụ sở làm việc'){
				$sl1 = $rowdht['soluong'];
				$sl11 = $sl11 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Cơ sở HĐ sự nghiệp'){
				$sl2 = $rowdht['soluong'];
				$sl12 = $sl12 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Làm nhà ở'){
				$sl3 = $rowdht['soluong'];
				$sl13 = $sl13 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Cho thuê'){
				$sl4 = $rowdht['soluong'];
				$sl14 = $sl14 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Bỏ trống'){
				$sl5 = $rowdht['soluong'];
				$sl15 = $sl15 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Bị lấn chiếm'){
				$sl6 = $rowdht['soluong'];
				$sl16 = $sl16 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Khác'){
				$sl7 = $rowdht['soluong'];
				$sl17 = $sl17 + $rowdht['soluong'];
			}
		}
		$kq = "Làm trụ sở làm việc: " .$sl11. " m2; Làm cơ sở HĐ sự nghiệp: ".$sl12." m2; Làm nhà ở: ".$sl13." m2; Cho thuê: ".$sl14." m2; Bỏ trống: ".$sl15." m2; Bị lấn chiếm:".$sl16." m2; Sử dụng vào mục đích khác: ".$sl17." m2";
		$dckv = $rowd['DCKV'];
		$dtkv = $rowd['DTKV'];
		$gtskt = $rowd['ngansach'] + $rowd['nguonkhac'];

	}
	$dtkv = dinhdangso($dtkv);
	$gtskt = dinhdangso($gtskt);

?>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td  style="text-align: center;font-weight: bold;">BÁO CÁO KÊ KHAI TRỤ SỞ LÀM VIỆC, CƠ SỞ HOẠT ĐỘNG SỰ NGHIỆP CỦA CƠ QUAN, TỔ CHỨC, ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold; ">I- Về đất: </td>
	</tr>
	<tr>
		<td style="text-align: left;"><?php echo  "a- Địa chỉ: ".$dckv;?> </td>
	</tr>
	<tr>
		<td style="text-align: left;"><?php echo  "b- Diện tích khuân viên đất: ".$dtkv ." m2"; ?> </td>
	</tr>
	<tr>
		<td style="text-align: left;"><?php echo  "c- Hiện trạng sử dung: ".$kq;?> </td>
	</tr>
	<tr>
		<td style="text-align: left;"><?php echo  "d- Giá trị theo sổ kế toán: ".$gtskt. " Nghìn đồng";?> </td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold; ">II- Về nhà: </td>
	</tr>
</table>
<?php
	function loaihinhdv($ms)
	{
		$kq="";
		global $con;
		$sql = "Select loaihinh from thongtindonvi WHERE madonvi = '".$ms."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
	$sqld = "Select * From tblqlts Where madonvi Like '$msdv%' and TKVDAT like '" .$DC . "%' and chitiethinhthai Like 'Quyền sử dụng đất%' or chitiethinhthai Like 'Đất%' and ngaysudung <= '" . doingay($denngay) . "'";
	$queryd = mysqli_query($con,$sqld);
	$ttslv=0;$tcshcsn=0;$tlno=0;$tct=0;$tbt=0;$tblc=0;$tk=0;
		$kq = "";
		$dckv = "";
		$dtkv = 0;
		$gtskt = 0;
	while($rowd = mysqli_fetch_array($queryd)){
		$sqldht = "Select * From tblhientrang Where TTQLTS = " . $rowd['TTQLTS']." and ngaythang in (select max(ngaythang) from tblhientrang where TTQLTS = " . $rowd['TTQLTS']." and ngaythang <= '" . doingay($denngay) . "' )";
		$querydht = mysqli_query($con,$sqldht);
		$sl1 = 0;$sl2 = 0;$sl3 = 0;$sl4 = 0;$sl5 = 0;$sl6 = 0;$sl7 = 0;
		$sl11 = 0;$sl12 = 0;$sl13 = 0;$sl14 = 0;$sl15 = 0;$sl16 = 0;$sl17 = 0;
		while($rowdht = mysqli_fetch_array($querydht)){
			if($rowdht['phanloai'] === 'Trụ sở làm việc'){
				$sl1 = $rowdht['soluong'];
				$sl11 = $sl11 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Cơ sở HĐ sự nghiệp'){
				$sl2 = $rowdht['soluong'];
				$sl12 = $sl12 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Làm nhà ở'){
				$sl3 = $rowdht['soluong'];
				$sl13 = $sl13 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Cho thuê'){
				$sl4 = $rowdht['soluong'];
				$sl14 = $sl14 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Bỏ trống'){
				$sl5 = $rowdht['soluong'];
				$sl15 = $sl15 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Bị lấn chiếm'){
				$sl6 = $rowdht['soluong'];
				$sl16 = $sl16 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Khác'){
				$sl7 = $rowdht['soluong'];
				$sl17 = $sl17 + $rowdht['soluong'];
			}
		}
		$kq = "Làm trụ sở làm việc: " .$sl11. " m2; Làm cơ sở HĐ sự nghiệp: ".$sl12." m2; Làm nhà ở: ".$sl13." m2; Cho thuê: ".$sl14." m2; Bỏ trống: ".$sl15." m2; Bị lấn chiếm:".$sl16." m2; Sử dụng vào mục đích khác: ".$sl17." m2";
		$dckv = $DC;
		$dtkv += $rowd['DTKV'];
		$gtskt += $rowd['ngansach'] + $rowd['nguonkhac'];

	}
?>
<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="4" width="20%">TÀI SẢN</th>
			<th rowspan="4" >CẤP HẠNG</th>
			<th rowspan="4" >NĂM XÂY DỰNG</th>
			<th rowspan="4" >NGÀY, THÁNG, NĂM SỬ DỤNG</th>
			<th colspan="4" >GIÁ TRỊ THEO SỔ KẾ TOÁN </br> (Nghìn đồng)</th>
			<th rowspan="4" >SỐ TẦNG</th>
			<th rowspan="4" >DIỆN TÍCH XÂY DỰNG (m2)</th>
			<th rowspan="4" >TỔNG DIỆN TÍCH SÀN SỬ DỤNG (m2)</th>
			<th colspan="7" >HIỆN TRẠNG SỬ DỤNG </br> (m2)</th>
		</tr>
		<tr>
			<th colspan="3" width="20%">Nguyên giá</th>
			<th rowspan="3" >Giá trị còn lại</th>
			<th rowspan="3" >Trụ sở làm việc</th>
			<th rowspan="3" >Cơ sở hoạt động sử nghiệp</th>
			<th rowspan="3" >Kinh doanh</th>
			<th rowspan="3" >Cho thuê</th>
			<th rowspan="3" >Liên doanh liên kết</th>
			<th rowspan="3" >Sử dụng hỗn hợp</th>
			<th rowspan="3" >Sử dụng khác</th>
		</tr>
		<tr>
			<th rowspan="2" >Tổng cộng</th>
			<th colspan="2" >Trong đó</th>
		</tr>
		<tr>
			<th  >Nguồn NS</th>
			<th  >Nguồn khác</th>
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
			<th style="font-weight: inherit;">15</th>
			<th style="font-weight: inherit;">16</th>
			<th style="font-weight: inherit;">17</th>
			<th style="font-weight: inherit;">18</th>
		</tr>
<?php
//làm việc với cơ sở dữ liệu

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
//Hàm tính nguyên giá
function tgts($mats)
{
	global $denngay;
	global $con;
	$kq=0;
	$sql = "Select tanggiam,sotien From tbltanggiam Where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = '" . $mats . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['tanggiam'] == "Tăng")
			$kq += kieudouble($row['sotien']);
		else
			$kq -= kieudouble($row['sotien']);
	}
	return $kq;
}
//tính nguyên giá tài sản
function nguyengia ($TTQLTS,$val,$madvtv)
{
	$kq =0;$ngansach =0;$nguonkhac = 0;
	global $denngay;
	global $con;
	$sql = "Select ngansach,nguonkhac from tblqlts where madonvi = '$madvtv' and ngaysudung <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach = $row["ngansach"];
		$nguonkhac = $row["nguonkhac"];
	}
	$sql = "Select nguonkhac,ngansach,tanggiam from tbltanggiam where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach += $row["ngansach"];
		$nguonkhac += $row["nguonkhac"];
	}
	if($val == "ngansach")
		$kq = $ngansach;
	else
		$kq = $nguonkhac;
	return $kq;
}
function sohmlk($idts)
{
	global $denngay;
	global $con;
	$sohaomon = 0;
	$nam = substr($denngay,6,4);
	$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.
		" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.")";
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon += $rowhm['sodu'];
		$sohaomon += $rowhm['sotien'];
	}
	return $sohaomon;
}
//
$Ttdtxd = 0;
$Ttdtsxd = 0;
$Ttong = 0;
$TtnNS = 0;
$TtNK = 0;
$Ttgtcl = 0;
$Tttslv = 0;
$Ttcshcsn = 0;
$Ttlno = 0;
$Ttct = 0;
$Ttbt = 0;
$Ttblc = 0;
$Ttk = 0;

//Lấy danh sách đơn vị
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 where tblqlts.madonvi Like '$msdv%'".
	" and tbldanhsachqd32.hinhthaitaisan Like 'Nhà%' and tblqlts.TKVDAT like '" .$DC . "%' and tblqlts.ngaysudung <= '" . doingay($denngay) . "'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	//Tên đơn vị
	echo "<tr style='vertical-align:top;'>";
	echo "<td colspan='18' style='vertical-align:middle;font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
	//Kết thúc tên đơn vị
	$ngNS = 0;
	$ngK = 0;
	$gtcl = 0;
	$tnNS = 0;
	$tNK = 0;
	$tgtcl = 0;
	$tdtxd = 0;
	$tdtsxd = 0;
	$ttslv = 0;
	$tcshcsn = 0;
	$tlno = 0;
	$tct = 0;
	$tbt = 0;
	$tblc = 0;
	$tk = 0;
	$sqlts = "Select TTQLTS,tenchitiet,CAPH,namsanxuat,ngaysudung,ngansach,nguonkhac,SOTA,DTXD,TDTSXD".
		"  From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32  ".
		" where madonvi = '$_madv[ma]' and hinhthaitaisan like 'Nhà%' and ".
		" (CASE WHEN year(ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" . doingay($denngay)."'  ELSE ngaysudung <= '" . doingay($denngay)."' END) ".
		" and TKVDAT like '$DC%'  and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and ngaythang < '" . doingay($tungay) . "')";
	$queryts = mysqli_query($con, $sqlts);
	while ($rowts = mysqli_fetch_array($queryts)) {
		$tt = $rowts['TTQLTS'];
		$cl = 0;
		$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
		$queryhm = mysqli_query($con, $sqlhm);
		while ($rowhm = mysqli_fetch_array($queryhm)) {
			$cl = $rowhm['sodu'] + $rowhm['sotien'];
		}
		$sqlht = "Select distinct phanloai,soluong From tblhientrang Where  TTQLTS = " . $rowts['TTQLTS'];
		$queryht = mysqli_query($con, $sqlht);
		$tslv = 0;
		$cshcsn = 0;
		$lno = 0;
		$ct = 0;
		$bt = 0;
		$blc = 0;
		$k = 0;
		while ($rowht = mysqli_fetch_array($queryht)) {
			if ($rowht['phanloai'] === 'Trụ sở làm việc') {
				$tslv = $rowht['soluong'];
				$ttslv += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Cơ sở HĐ sự nghiệp') {
				$cshcsn = $rowht['soluong'];
				$tcshcsn += $cshcsn;
			}
			if ($rowht['phanloai'] === 'Làm nhà ở') {
				$lno = $rowht['soluong'];
				$tlno += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Cho thuê') {
				$ct = $rowht['soluong'];
				$tct += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Bỏ trống') {
				$bt = $rowht['soluong'];
				$tbt += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Bị lấn chiếm') {
				$blc = $rowht['soluong'];
				$tblc += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Khác') {
				$k = $rowht['soluong'];
				$tk += $rowht['soluong'];
			}
		}
		$tents = $rowts['tenchitiet'];
		$caph = $rowts['CAPH'];
		$namxd = $rowts['namsanxuat'];
		$ntsd = ngaythang($rowts['ngaysudung']);
		$ngNS = nguyengia($rowts['TTQLTS'], "ngansach", $_madv['ma']);
		$ngK = nguyengia($rowts['TTQLTS'], "nguonkhac", $_madv['ma']);
		$gtcl = $ngNS + $ngK - sohmlk($rowts['TTQLTS']);
		$sotang = $rowts['SOTA'];
		$dtxd = $rowts['DTXD'];
		$dtsxd = $rowts['TDTSXD'];
		$tnNS += $ngNS;
		$tNK += $ngK;
		$tgtcl += $gtcl;
		$tdtxd += $rowts['DTXD'];
		$tdtsxd += $rowts['TDTSXD'];

		$Ttdtxd += $rowts['DTXD'];
		$Ttdtsxd += $rowts['TDTSXD'];
		$Ttong += $ngNS+$ngK;
		$TtnNS += $ngNS;
		$TtNK += $ngK;
		$Ttgtcl += $gtcl;
		$Tttslv += $tslv;
		$Ttcshcsn += $cshcsn;
		$Ttlno += $lno;
		$Ttct += $ct;
		$Ttbt += $bt;
		$Ttblc += $blc;
		$Ttk += $k;
		echo "<tr>";
		echo "<td style='text-align: left;'><nobr>" . $tents . "</nobr></td>";
		echo "<td style='text-align: left;'>".$caph."</td>";
		echo "<td style='text-align: center;'>".$namxd."</td>";
		echo "<td style='text-align: center;'>".$ntsd."</td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($ngNS+$ngK) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($ngNS) . "</nobr></td>";
		echo "<td style='text-align: right;'>" . dinhdangso($ngK) . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($gtcl) . "</td>";
		echo "<td style='text-align: right;'>".$sotang."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($dtxd)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($dtsxd)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($tslv)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($cshcsn)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($lno)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($ct)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($bt)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($blc)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($k)."</td>";
		echo "</tr>";
	}
	$tdtxd = dinhdangso($tdtxd);
	$tdtsxd = dinhdangso($tdtsxd);
	$Ttongcong = dinhdangso($tnNS + $tNK);
	$tnNS = dinhdangso($tnNS);
	$tNK = dinhdangso($tNK);
	$tgtcl = dinhdangso($tgtcl);
	$ttslv = dinhdangso($ttslv);
	$tcshcsn = dinhdangso($tcshcsn);
	$tlno = dinhdangso($tlno);
	$tct = dinhdangso($tct);
	$tbt = dinhdangso($tbt);
	$tblc = dinhdangso($tblc);
	$tk = dinhdangso($tk);

	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: center;'><nobr>Cộng</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: right;'><nobr>" . $Ttongcong . "</nobr></td>";
	echo "<td style='text-align: right;'>" . $tnNS . "</td>";
	echo "<td style='text-align: right;'>" . $tNK . "</td>";
	echo "<td style='text-align: right;'><nobr>" . $tgtcl . "</nobr></td>";
	echo "<td style='text-align: center;'>X</td>";
	echo "<td style='text-align: right;'>" . $tdtxd . "</td>";
	echo "<td style='text-align: right;'><nobr>" . $tdtsxd . "</nobr></td>";
	echo "<td style='text-align: right;'>" . $ttslv . "</td>";
	echo "<td style='text-align: right;'>" . $tcshcsn . "</td>";
	echo "<td style='text-align: right;'>" . $tlno . "</td>";
	echo "<td style='text-align: right;'>" . $tct . "</td>";
	echo "<td style='text-align: right;'>" . $tbt . "</td>";
	echo "<td style='text-align: right;'>" . $tblc . "</td>";
	echo "<td style='text-align: right;'>" . $tk . "</td>";
	echo "</tr>";
}
// in tổng cộng
echo "<tr style='font-weight: bold'>";
echo "<td style='text-align: center;'><nobr>Tổng cộng</nobr></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: right;'><nobr>" . dinhdangso($Ttong) . "</nobr></td>";
echo "<td style='text-align: right;'>" . dinhdangso($TtnNS) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($TtNK) . "</td>";
echo "<td style='text-align: right;'><nobr>" . dinhdangso($Ttgtcl) . "</nobr></td>";
echo "<td style='text-align: center;'>X</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttdtxd) . "</td>";
echo "<td style='text-align: right;'><nobr>" . dinhdangso($Ttdtsxd) . "</nobr></td>";
echo "<td style='text-align: right;'>" . dinhdangso($Tttslv) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttcshcsn) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttlno) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttct) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttbt) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttblc) . "</td>";
echo "<td style='text-align: right;'>" . dinhdangso($Ttk) . "</td>";
echo "</tr>";

?>
</table>
<table>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="csE9F2AA97" colspan="14" style="width:502px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>III&nbsp;-&nbsp;C&#225;c&nbsp;hồ&nbsp;sơ,&nbsp;giấy&nbsp;tờ&nbsp;li&#234;n&nbsp;quan&nbsp;đến&nbsp;quyền&nbsp;quản&nbsp;l&#253;,&nbsp;sử&nbsp;dụng&nbsp;nh&#224;,&nbsp;đất:</nobr></td>
		<td></td>
		<td class="cs5DE5F832" colspan="14" style="width:486px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>(Giấy&nbsp;chứng&nbsp;nhận&nbsp;quyền&nbsp;sử&nbsp;dụng&nbsp;đất,&nbsp;Hợp&nbsp;đồng&nbsp;thu&#234;&nbsp;đất,&nbsp;Giấy&nbsp;tờ&nbsp;kh&#225;c)</nobr></td>
		<td></td>
		<td></td>
	</tr>
</table>
	<table >
		<tr>
			<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
			<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center;: center; font-weight: bold;">XÁC NHẬN CỦA CƠ QUAN QUẢN LÝ CẤP TRÊN (nếu có)</td>
			<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ</td>
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
		</tr>
		<tr style="height: 75px">
			<td </td>
			<td></td>
		</tr>
		<tr ">
			<td style="text-align: center; font-style: italic;"></td>
			<td style="text-align: center; font-weight: bold;"><?php echo $madv[6]; ?></td>
		</tr>
	</table>

	<table>
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832" colspan="6" style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>
			<td></td>
			<?php
			if(isset($_POST['create'])){
				$abc = $_POST['option'];
			}
			if($abc === 'Báo cáo kê khai lần đầu'){
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
			}
			else{
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'></td>";
			}
			?>
			<td colspan="30"></td>
		</tr>
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832" colspan="6" style="width:187px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;bổ&nbsp;sung</nobr></td>
			<td></td>
			<?php
			if(isset($_POST['create'])){
				$abc = $_POST['option'];
			}
			if($abc === 'Báo cáo kê khai bổ xung'){
				echo"<td class='csF0462E56' colspan='2'  style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
			}else{
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'></td>";
			}

			?>
			<td colspan="30"></td>
		</tr>
</table>
</body>
</html>