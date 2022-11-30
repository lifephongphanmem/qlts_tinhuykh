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
include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$key = $_GET["id"];
$ma = explode('>',$key);
$ab = trim($ma[0]);
$kiemke=$ma[1];
$tungay = "";
$denngay = "";
$madv ="";
$val="";
$tendv ="";
if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	$tendv = $_POST['tendv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];


}
$maqhns = "";
$tendv = "";
$tencqcq = "";
$nlb = "";
$ptkt = "";
$ttdv = "";
$sql = "Select maqhns,tendv,tencqcq,nlb,ptkt,ttdv From thongtindonvi Where madonvi = '$ma[0]'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$maqhns = $row['maqhns'];
	$tendv = $row['tendv'];
	$tencqcq = $row['tencqcq'];
	$nlb = $row['nlb'];
	$ptkt = $row['ptkt'];
	$ttdv = $row['ttdv'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ: </nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số C23 – HD</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Đơn vị: ".$tendv; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>((Ban hành kèm theo QĐ số 19/2006/QĐ ngày 30/3/2006 và </br>Thông Tư số 185/2010/TT.BTC ngày 15/11/2010 của Bộ Tài Chính)</nobr></td>
		</tr>
		</table>
<br/>
		<table cellspacing="0" cellpadding="0" border="0" style="line-height:18px">
		<tr>
            <td  style="text-align: center;font-weight: bold;height:24px;line-height:18px">BIÊN BAN KIỂM KÊ VẬT TƯ, CÔNG CỤ, SẢN PHẨM, HÀNG HÓA</td>
		</tr>
	</table>
<br/>
<table cellspacing="0" cellpadding="0" border="0" style="line-height:18px">
	<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$kiemke = $_GET["id"];
	 $sql = "Select GIO, PHUT, ngay1,sohieu from tblkiemke where TTkiemke = '" . $ma[1] . "'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngaykk =$row['ngay1'];
		$TDKK = $row['GIO']." giờ ".$row['PHUT']. " , ngày ".substr($row['ngay1'],8,2) ." tháng ". substr($row['ngay1'],5,2) .  " năm ". substr($row['ngay1'],0,4);
	}
	?>
	<tr>
		<td colspan="8" style="text-align: left;height:24px;line-height:18px"> Thời điểm kiểm kê: <?php echo $TDKK;?>  	</td>
	</tr>
	<tr>
		<td colspan="8" style="text-align: left;height:24px;line-height:18px"> Ban kiểm kê gồm:</td>
	</tr>
	<?php
	$artp = array(array("A","B","C","D"));
	$ctp = 0;
	$sql = "Select 	hotencb,chucvucanbo,daidientp,thanhphan from tblthanhphankk where TTkiemke = '" . $ma[1] . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['thanhphan'] == "Trưởng ban")
			$truongban = $row['hotencb'];
		echo "<tr>";
		echo "<td style='width:40px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>"." Ông/ Bà: "."</td>";
		echo "<td style='width:120px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>".$row['hotencb']."</td>";
		echo "<td style='width:40px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>"." chức vụ:". "</td>";
		echo "<td style='width:100px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>". $row['chucvucanbo']."</td>";
		echo "<td style='width:40px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>"." đại diện: "."</td>";
		echo "<td style='width:170px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>". $row['daidientp'] ."</td>";
		echo "<td style='width:40px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>"." thành phần: ". "</td>";
		echo "<td style='width:100px;height:24px;line-height:18px;text-align:left;vertical-align:top;'>". $row['thanhphan'] ."</td>";
		echo "</tr>";
	}
	?>
	<tr>
		<td colspan="8" style="text-align: left">-	Đã kiểm kê kho những mặt hàng dưới đây:</td>
	</tr>
</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="2%" style="text-align: center" rowspan="3">STT</th>
			<th width="15%" style="text-align: center" rowspan="3">Tên chi tiết</th>
			<th width="5%" style="text-align: center" rowspan="3">Mã số</th>
			<th width="5%" style="text-align: center" rowspan="3">Đơn vị tính</th>
			<th width="8%" style="text-align: center" rowspan="3">Đơn giá</th>
			<th width="12%" style="text-align: center" rowspan="2" colspan="2">Sổ kế toán</th>
			<th width="12%" style="text-align: center" rowspan="2" colspan="2">Theo kiểm kê</th>
			<th width="26%" style="text-align: center" colspan="4">Chênh lệch</th>
			<th width="20%"style="text-align: center" rowspan="2" colspan="3">Phẩm chất</th>
			<th rowspan="3"></th>
		</tr>
		<tr>
			<th width="12%" style="text-align: center" colspan="2">Thừa</th>
			<th width="12%" style="text-align: center" colspan="2">Thiếu</th>
		</tr>
		<tr>
			<th width="4%" style="text-align: center" >Số lượng</th>
			<th width="8%" style="text-align: center" >Thành tiền</th>
			<th width="4%" style="text-align: center" >Số lượng</th>
			<th width="8%" style="text-align: center" >Thành tiền</th>
			<th width="4%" style="text-align: center" >Số lượng</th>
			<th width="8%" style="text-align: center" >Thành tiền</th>
			<th width="4%" style="text-align: center" >Số lượng</th>
			<th width="8%" style="text-align: center" >Thành tiền</th>
			<th width="7%" style="text-align: center" >Còn tốt 100 %</th>
			<th width="7%" style="text-align: center" >Kém phẩm chất</th>
			<th width="7%" style="text-align: center" >Mất phẩm chất</th>
		</tr>
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
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");

$tongdk=0;
$tongnhap=0;
$tongxuat=0;
$tongck=0;
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$ma[0]%'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
			'ten'=>$_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
//
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td class='csDC952B64' colspan='18' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;'>$_madv[ten]</td>";
	echo "</tr>";
//
	$stt = 0;
	$sql = "select TTkiemken,tentscc,tenchitiet,noisudung,chitiethinhthai,macc,DVT,dongia,soluong,thanhtien,soluongkk,thanhtienkk,soluongthua,thanhtienthua,soluongthieu,thanhtienthieu,phamchat from tblkiemken where TTkiemke = '$ma[1]'";
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$tongdk += $row['thanhtien'];
		$tongnhap += $row['thanhtienkk'];
		$tongxuat += $row['thanhtienthua'];
		$tongck += $row['thanhtienthieu'];

		$stt++;
		echo "<tr>";
		echo "<td>$stt</td>";
		echo "<td>$row[tenchitiet]</td>";
		echo "<td>$row[macc]</td>";
		echo "<td>$row[DVT]</td>";
		echo "<td style='text-align: right'>" . dinhdangso($row['dongia']) . "</td>";
		echo "<td style='text-align: center'>" . dinhdangso($row['soluong']) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($row['thanhtien']) . "</td>";
		echo "<td style='text-align: center'>" . dinhdangso($row['soluongkk']) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($row['thanhtienkk']) . "</td>";
		echo "<td style='text-align: center'>" . dinhdangso($row['soluongthua']) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($row['thanhtienthua']) . "</td>";
		echo "<td style='text-align: center'>" . dinhdangso($row['soluongthieu']) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($row['thanhtienthieu']) . "</td>";
		if ($row['phamchat'] == "Còn tốt 100 %") {
			echo "<td style='text-align: center'>X</td>";
			echo "<td></td>";
			echo "<td></td>";
		} elseif ($row['phamchat'] == "Kém phẩm chất") {
			echo "<td></td>";
			echo "<td style='text-align: center'>X</td>";
			echo "<td></td>";
		} elseif ($row['phamchat'] == "Mất phẩm chất") {
			echo "<td></td>";
			echo "<td></td>";
			echo "<td style='text-align: center'>X</td>";
		} else {
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
		}
		echo "</tr>";
	}
}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> Cộng </td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongdk)."</nobr></td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongnhap)."</nobr></td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongxuat)."</nobr></td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: right;font-weight: bold;'>" . dinhdangso($tongck) . "</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "<td style='text-align: center;font-weight: bold;'>X</td>";
echo "</tr>";
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