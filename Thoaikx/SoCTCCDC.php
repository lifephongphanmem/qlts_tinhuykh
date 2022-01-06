<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
	//$tungay = $_POST['nttu'];
	//$denngay = $_POST['ntden'];
	$val = explode('>',$_POST['tencc']);
	$madv = explode('>',$_POST['MADV']);
	$nam = $_POST['nam'];
	$msdv = $madv[0];
	$tendv = $_POST['tendv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Tên đơn vị: ".$tendv; ?></nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số : S22-H</nobr></td>
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
            <td  style="text-align: center;font-weight: bold;">SỔ CHI TIẾT NGUYÊN LIỆU VẬT LIỆU, CÔNG CỤ, DỤNG CỤ, SẢN PHẨM, HÀNG HÓA</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-style: italic;">Năm: <?php echo $nam;?></td>
		</tr>
		<tr>
			<td  style="text-align: center;font-style: italic;">Tài khoản: ...............</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-style: italic;">Tên kho: ...............</td>
		</tr>
		<tr>
			<td  style="text-align: left;font-style: italic;">Tên nguyên liệu, vật liệu, công cụ, dụng cụ, sản phẩm, hàng hóa: <?php echo $val[1];?></td>
		</tr>
		<tr>
			<td style="text-align: left;font-style: italic;">Đơn vị tính: <?php echo $val[2];?>............... Quy cách, phẩm chất: ....................</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th colspan="2" width="15%">CHỨNG TỪ</th>
			<th rowspan="2" width="15%">Diễn giải</th>
			<th rowspan="2" width="6%">Đơn giá</th>
			<th colspan="2" width="15%">NHẬP</th>
			<th colspan="2" width="15%">XUẤT</th>
			<th colspan="2" width="15%">TỒN</th>
			<th rowspan="2" width="10%">Ghi chú</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">Số hiệu</th>
			<th style="font-weight: inherit;">Ngày, tháng</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Thành tiền</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Thành tiền</th>
			<th style="font-weight: inherit;">Số lượng</th>
			<th style="font-weight: inherit;">Thành tiền</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">A</th>
			<th style="font-weight: inherit;">B</th>
			<th style="font-weight: inherit;">C</th>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3=1x2</th>
			<th style="font-weight: inherit;">4</th>
			<th style="font-weight: inherit;">5=1x4</th>
			<th style="font-weight: inherit;">6</th>
			<th style="font-weight: inherit;">7=1x6</th>
			<th style="font-weight: inherit;">D</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	function sapxep($in_bike1, $in_bike2){
	if ($in_bike1["ngaythang"] >= $in_bike2["ngaythang"]){
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
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
		//($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'");
		($tungay == ""?"":" and  Year(ngaysudung) = '" . $nam . "'");
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
	$sql = "Delete From tbldc";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,ID,STR1,SL1,SL2,SL3)".
		" Select ngaysudung,TTQLcc,GCTS,dongia,DTKV,thanhtien from tblqlcc WHERE madonvi = '$_madv[ma]'".
		" and Year(ngaysudung) ='$nam'"
		. " and tenchitiet = '$val[1]' order by ngaysudung";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,ID,STR1,SL1,SL4,SL5)".
		" Select ngayxuat,ttxuatdung,lydoxuat,dongia,soluong,sotien from tblxuatdung where madonvi = '$_madv[ma]'".
		" and Year(ngayxuat) ='$nam'"
		. " and tenchitiet='$val[1]'  order by ngayxuat";
	$querycc = mysqli_query($con,$sql);
	$ton = 0;
	$stt = 0;
	$tont = 0;
	$tongnhap = 0;
	$tongxuat = 0;
	$tiennhap = 0;
	$tienxuat = 0;
	$sql = "Select ID,NTCT,STR1,SL1,SL2,SL3,SL4,SL5 From tbldc ORDER BY NTCT";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$stt++;
		$tont += ($row['SL3'] - $row['SL5']);
		$ton += ($row['SL2'] - $row['SL4']);
		$tongnhap += $row['SL2'];
		$tongxuat += $row['SL4'];
		$tiennhap += $row['SL3'];
		$tienxuat += $row['SL5'];
		echo "<tr>";
		echo "<td style='text-align: center;'>" . $row[0] . "</td>";
		echo "<td style='text-align: center;'><nobr>" . ngaythang($row[1]) . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $row[2] . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($row[3]) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($row[4]) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($row[5]) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($row[6]) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($row[7]) . "</nobr></td>";
		echo "<td style='text-align: right;'><nobr>" . dinhdangso($ton) . "</nobr></td>";
		echo "<td style='text-align: right;'>" . dinhdangso($tont) . "</td>";
		echo "<td style='text-align: right;'></td>";
		echo "</tr>";
	}
	echo "<tr>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: center;'><nobr></nobr></td>";
	echo "<td style='text-align: center; font-weight: bold;'><nobr>Cộng</nobr></td>";
	echo "<td style='text-align: right;font-weight: bold;'><nobr></nobr></td>";
	echo "<td style='text-align: right;font-weight: bold;'><nobr>" . dinhdangso($tongnhap) . "</nobr></td>";
	echo "<td style='text-align: right;font-weight: bold;'><nobr>" . dinhdangso($tiennhap) . "</nobr></td>";
	echo "<td style='text-align: right;font-weight: bold;'><nobr>" . dinhdangso($tongxuat) . "</nobr></td>";
	echo "<td style='text-align: right;font-weight: bold;'>" . dinhdangso($tienxuat) . "</td>";
	echo "<td style='text-align: right;font-weight: bold;'>" . dinhdangso($tongnhap - $tongxuat) . "</td>";
	echo "<td style='text-align: right;font-weight: bold;'>" . dinhdangso($tiennhap - $tienxuat) . "</td>";
	echo "<td style='text-align: right;'></td>";
	echo "</tr>";
}
?>
	</table>
	<table >
		<tr>
			<td width="33%"></td>
			<td colspan="2"  style="text-align: left;">- Sổ này có ... trang, đánh số từ trang số 01 đến trang ...</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2" style="text-align: left;">- Ngày mở sổ: ....................</td>
		</tr>
		<tr>
			<td></td>
			<td width="33%"></td>
			<td style="text-align: center;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">Người lập biểu</td>
			<td style="text-align: center; font-weight: bold;"> Kế toán trưởng</td>
			<td style="text-align: center; font-weight: bold;">Thủ trưởng đơn vị</td>			
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
			<td style="text-align: center; font-style: italic;">(ký, họ tên)</td>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên, đóng dấu)</td>
		</tr>
	</table>
</body>		
</html>	