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
	$nam = $_POST['nam'];
	if($_POST['tencc'] != "")
		$val = explode('>',$_POST['tencc']);
	if($_POST['macc'] != "")
		$val = explode('>',$_POST['macc']);
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
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số : S21-H</nobr></td>
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
            <td colspan="2"  style="text-align: center;font-weight: bold;">SỔ KHO</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;font-weight: bold;">(Hoặc thẻ kho)</td>
		</tr>
		<tr>
			<td width="50%" style="text-align: right;">Ngày lập thẻ:..................</td>
			<td  style="text-align: left;">Số tờ: ..................</td>
		</tr>
		<tr>
			<td  style="text-align: left;"> - Tên nhãn hiệu quy cách, vật tư: <?php echo $val[1];?></td>
			<td  style="text-align: left;"> Đơn vị tính: <?php echo $val[2];?></td>
		</tr>
		<tr>
			<td style="text-align: left;"> - Quy cách, phẩm chất: .......................... </td>
			<td style="text-align: left;">  Mã số: <?php echo $val[0];?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="3" width="8%">Ngày tháng ghi sổ</th>
			<th colspan="3" width="10%">Chứng từ</th>
			<th rowspan="3" width="30%">Diễn giải</th>
			<th rowspan="3" width="8%">Ngày nhập xuất</th>
			<th colspan="3" rowspan="2" width="30%">Số lượng</th>
			<th rowspan="3" width="10%">Ghi chú (Ký xác nhận của kế toán)</th>
		</tr>
		<tr>
			<th rowspan="2" width="8%">Ngày tháng</th>
			<th colspan="2" width="10%">Số hiệu chứng từ</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">Nhập</th>
			<th style="font-weight: inherit;">Xuất</th>
			<th style="font-weight: inherit;">Nhập</th>
			<th style="font-weight: inherit;">Xuất</th>
			<th style="font-weight: inherit;">Tồn</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">A</th>
			<th style="font-weight: inherit;">B</th>
			<th style="font-weight: inherit;">C</th>
			<th style="font-weight: inherit;">D</th>
			<th style="font-weight: inherit;">E</th>
			<th style="font-weight: inherit;">F</th>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3</th>
			<th style="font-weight: inherit;">G</th>
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
		return 1;
	}
	else {
		return -1;
	}
}
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlcc inner join thongtindonvi on tblqlcc.madonvi=thongtindonvi.madonvi where tblqlcc.madonvi Like '$msdv%'".
		//($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'");
		($nam == ""?"":" and Year(ngaysudung) = '" . $nam . "'");
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
	$sql = "Delete  From tbldc";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,STR1,SL1) ".
	" Select ngaysudung,GCTS,DTKV from tblqlcc WHERE madonvi = '$_madv[ma]'".
			($nam == ""?"":" and Year(ngaysudung) = '" . $nam . "'").
			//($tungay == ""?"":" and ngaysudung >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngaysudung <= '" . doingay($denngay) . "'").
			($_POST['tencc'] == ""?"":" and tenchitiet = '$val[1]'").($_POST['macc'] == ""?"":" and TTQLcc = '$val[3]'").
			" order by ngaysudung";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Insert into tbldc (NTCT,STR1,SL2) ".
		"Select ngayxuat,lydoxuat,soluong from tblxuatdung where madonvi = '$_madv[ma]'".
			($nam == ""?"":" and Year(ngayxuat) = '" . $nam . "'").
			//($tungay == ""?"":" and ngayxuat >= '" . doingay($tungay) . "'").($denngay == ""?"":" and ngayxuat <= '" . doingay($denngay) . "'").
			($_POST['tencc'] == ""?"":" and tenchitiet = '$val[1]'").($_POST['macc'] == ""?"":" and TTQLcc = '$val[3]'").
			"  order by ngayxuat";
	$qrsql = mysqli_query($con,$sql);
	$ton = 0;$stt=0;
	$sql = "Select NTCT,STR1,SL1,SL2,ID from tbldc ORDER BY NTCT,ID";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql)) {
		$stt++;
		$ton += ($row[2] - $row[3]);
		echo "<tr>";
		echo "<td style='text-align: center;'>".ngaythang($row['NTCT'])."</td>";
		echo "<td style='text-align: center;'><nobr>".ngaythang($row['NTCT'])."</nobr></td>";
		echo "<td style='text-align: center;'><nobr></nobr></td>";
		echo "<td style='text-align: center;'><nobr></nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[1]."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".ngaythang($row['NTCT'])."</nobr></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($row[2])."</nobr></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($row[3])."</nobr></td>";
		echo "<td style='text-align: right;'>" . dinhdangso($ton) . "</td>";
		echo "<td style='text-align: right;'></td>";
		echo "</tr>";
	}
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