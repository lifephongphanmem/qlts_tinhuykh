<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
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
$nam = "";
if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$nam = explode("/",$tungay);
	$nam = $nam[2];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	$tendv = $_POST['tendv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">

            </td>
            <td width="36%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 01b/TH/MSTT</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">

			</td>
			<td width="36%">
			</td>
			<td style="text-align: center;font-style: italic"><nobr>(Ban hành theo Thông tư 35/2016/TT-BTC </br> ngày 26/02/2016 của Bộ Tài chính)</nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>BỘ, NGÀNH, ĐỊA PHƯƠNG: <?php echo $tendv;?></nobr> </td>
			<td style="text-align: center;font-weight: bold" colspan="2"><nobr>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;" ><nobr></nobr> </td>
			<td style="text-align: center;font-weight: bold" colspan="2" ><nobr>Độc lập - Tự do - Hạnh phúc</nobr></td>
		</tr>
		</table>
</br>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BẢNG TỔNG HỢP NHU CẦU MUA SẮM TẬP TRUNG QUỐC GIA</td>
		</tr>
		<tr>
				<td style="text-align: center;font-weight: bold; font-style: italic;"> Năm: <?php echo $nam;?></td>
			</tr>
			<tr>
				<td style="text-align: center;font-weight: bold; font-style: italic;">Kính gửi: Bộ Tài chính</td>
			</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="5%">STT</th>
			<th width="20%">Tên tài sản</th>
			<th>Số lượng (chiếc)</th>
			<th>Chủng loại</th>
			<th>Dự toán (đồng)</th>
			<th>Nguồn vốn mua sắm</th>
			<th>Phương thức thanh toán</th>
			<th>Dự kiến thời gian địa điểm</th>
			<th>Các đề xuất khác (để tham khảo)</th>
			<th>Ghi chú</th>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic;">(1)</td>
			<td style="text-align: center;font-style: italic;">(2)</td>
			<td style="text-align: center;font-style: italic;">(3)</td>
			<td style="text-align: center;font-style: italic;">(4)</td>
			<td style="text-align: center;font-style: italic;">(5)</td>
			<td style="text-align: center;font-style: italic;">(6)</td>
			<td style="text-align: center;font-style: italic;">(7)</td>
			<td style="text-align: center;font-style: italic;">(8)</td>
			<td style="text-align: center;font-style: italic;">(9)</td>
			<td style="text-align: center;font-style: italic;">(10)</td>
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
$tong =0;
$_sQLdv="Select distinct tentaisan from tbltrangcap where madonvi Like '$msdv%' and tentaisan like 'Xe ô%' ".
		($tungay == ""?"":" and ngaythang >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaythang <= '" . doingay($denngay) . "'");
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r =mysqli_fetch_array($_qdv)) {
//
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td class='csDC952B64' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;'>$_r[0]</td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "</tr>";
//
	$cs = 0;
	$cc = array();
	$sql = "Select tendv,caphang,Sum(soluong) as SL, Sum(sotien) as ST,nguonvon,phuongthuctt,diadiem,dexuat,ghichu from tbltrangcap WHERE tentaisan = '$_r[0]'" .
		($tungay == "" ? "" : " and ngaythang >= '" . doingay($tungay) . "'") . ($denngay == "" ? "" : " and ngaythang <= '" . doingay($denngay) . "'")
		. " Group by tendv";
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$cc[$cs] = array(0 => $row['tendv'],
			1 => $row['SL'],
			2 => $row['caphang'],
			3 => $row['ST'],
			4 => $row['nguonvon'],
			5 => $row['phuongthuctt'],
			6 => $row['diadiem'],
			7 => $row['dexuat'],
			8 => $row['ghichu']);
		$cs++;
	}
	$stt = 0;
	foreach ($cc as $value) {
		$stt++;
		$tong += $value[3];
		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>" . $value[0] . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($value[1]) . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[2] . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($value[3]) . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[4] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[5] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[6] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[7] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $value[8] . "</nobr></td>";
		echo "</tr>";
	}
}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> TỔNG CỘNG </td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: right;font-weight: bold;'><nobr>".dinhdangso($tong)."</nobr></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
echo "<td style='text-align: left;'></td>";
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
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP BIỂU</td>
		<td style="text-align: center; font-weight: bold;">THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi họ tên và đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	