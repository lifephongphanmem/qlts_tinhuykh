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
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$tendv; ?></nobr></td>
			<td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số : S23-H</nobr></td>
        </tr>
		<tr>

			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã QHNS: ".$madv[1]; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành theo Thông tư số 107/2017/TT-BTC </br>ngày 10/10/2017 của Bộ Tài chính)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BẢNG TỔNG HỢP  CHI TIẾT NGUYÊN LIỆU, VẬT LIỆU,</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold;">CÔNG CỤ, DỤNG CỤ, SẢN PHẨM, HÀNG HÓA</td>
		</tr>

		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;"> Tháng: ..........năm .............</td>
		</tr>
			<tr>
				<td  style="text-align: center;font-weight: bold; font-style: italic"> Tài khoản: ..............</td>
			</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="2" width="5%">STT</th>
			<th rowspan="2" width="60%">Tên, quy cách nguyên liệu, vật liệu (Công cụ, dụng cụ, sản phẩm, hàng hóa)</th>
			<th colspan="4" >SỐ LƯỢNG</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">Tồn đầu kỳ</th>
			<th style="font-weight: inherit;">Nhập trong kỳ</th>
			<th style="font-weight: inherit;">Xuất trong kỳ</th>
			<th style="font-weight: inherit;">Tồn cuối kỳ</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">A</th>
			<th style="font-weight: inherit;">B</th>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3</th>
			<th style="font-weight: inherit;">4</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
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
function tondk($madonvi,$tencc)
{
	global $tungay;
	global $con;
	$kq=0;
	$sql = "Select DTKV from tblqlcc WHERE madonvi = '$madonvi'".
			($tungay == ""?"":" and ngaysudung < '" . doingay($tungay) . "'")." and tenchitiet = '$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq += $row['DTKV'];
	}
	$sql = "select soluong from tblxuatdung WHERE madonvi = '$madonvi'".
			($tungay == ""?"":" and ngayxuat < '" . doingay($tungay) . "'"). " and tenchitiet = '$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq -= $row['soluong'];
	}
	return $kq;
}
function nhaptk($madonvi,$tencc)
{
	global $tungay;
	global $denngay;
	global $con;
	$kq = 0;
	$sql = "Select Sum(DTKV) as SumofDTKV from tblqlcc WHERE madonvi = '$madonvi'".
			($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'")
			. " and tenchitiet='$tencc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$kq += $row['SumofDTKV'];
	}
	return $kq;
}
function xuattk($madonvi,$tencc)
{
	global $tungay;
	global $denngay;
	global $con;
	$kq = 0;
	$sql = "Select Sum(soluong) as Sumofsoluong from tblxuatdung where madonvi = '$madonvi'".
			($tungay == ""?"":" and ngayxuat >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngayxuat <= '" . doingay($denngay) . "'")
			. " and tenchitiet='$tencc' ";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$kq += $row['Sumofsoluong'];
	}
	return $kq;
}
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
		($tungay == ""?"":" and tblqlcc.ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and tblqlcc.ngaysudung <= '" . doingay($denngay) . "'");
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
	$cc = array();
	$ton = 0;
	$cs = 0;
	$tongnhap =0;
	$tongxuat =0;
	$tongdk = 0;
	$tongck = 0;
	$sql = "Select tenchitiet from tblqlcc WHERE madonvi = '$_madv[ma]'".
			($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'")
			. " Group by tenchitiet";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql)) {
		$cc[$cs] = array(0 => $row['tenchitiet'],
				1 => ($tungay == ""?"":tondk($_madv['ma'],$row['tenchitiet'])),
				2 => nhaptk($_madv['ma'],$row['tenchitiet']),
				3 => xuattk($_madv['ma'],$row['tenchitiet']));
		$cs++;
	}
}
$ton = 0;$stt=0;

	foreach ($cc as $value) {
		$stt++;
		$ton = $value[1] + $value[2] - $value[3];
		$tongnhap += $value[2];
		$tongxuat += $value[3];
		$tongdk += $value[1];
		$tongck += $ton;
		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>".$value[0]."</nobr></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($value[1])."</nobr></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($value[2])."</nobr></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($value[3])."</nobr></td>";
		echo "<td style='text-align: right;'>" . dinhdangso($ton) . "</td>";
		echo "</tr>";
	}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> Cộng </td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongdk)."</nobr></td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongnhap)."</nobr></td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tongxuat)."</nobr></td>";
echo "<td style='text-align: right;font-weight: bold;'>" . dinhdangso($tongck) . "</td>";
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