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
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$dv="";$nambaocao="";$madv="";
	if(isset($_POST['create'])){
		$madv = explode('>',$_POST['MADV']);
		if ($_POST['dv'] == "")
			$dv = $_POST['msdv'];
		else
			$dv = $_POST['dv'];
		$nambaocao = $_POST['nhaomon'];
		$loaihinhdv = loaihinhdv($madv[0]);
	}
function loaihinhdv($ms)
{
	$kq="";
	global $con;
	$sql = "Select loaihinh from thongtindonvi where madonvi = '$ms'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq= $row['loaihinh'];
	}
	return $kq;
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, tỉnh: </nobr>
			</td>
			<td width="40%">
			</td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 09a-CK/TSC</nobr></td>
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
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;"><nobr>CÔNG KHAI TÌNH HÌNH ĐẦU TƯ XÂY DỰNG, MUA SẮM, GIAO, THUÊ TÀI SẢN CÔNG </nobr></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;"><?php echo "NĂM ".$nambaocao; ?></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
            <td></td>
			<td></td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan = "2" width="4%">Stt</th>
			<th rowspan = "2" width="15%">Tên tài sản</th>
			<th rowspan = "2" width="5%">Đơn vị tính</th>
			<th rowspan = "2" width="5%">Số lượng</th>
			<th rowspan = "2" width="5%">Nhãn hiệu</th>
			<th rowspan = "2" width="7%">Nước sản xuất</th>
			<th rowspan = "2" width="6%">Năm sản xuất</th>
			<th rowspan = "2" width="9%">Giá mua/thuê (Nghìn đồng)</th>
			<th rowspan = "2" width="9%">Hình thức mua sắm/thuê</th>
			<th rowspan = "2" width="9%">Nhà cung cấp (người bán)</th>
			<th rowspan = "2" width="9%">Giá trị các khoản hoa hồng, chiết khấu, khuyến mãi thu được khi thực hiện mua sắm (nếu có)</th>
			<th colspan = "2">Việc sử dụng các khoản hoa hồng, chiết khấu, khuyến mại (nếu có)</th>
			<th rowspan = "2" width="3%">Ghi chú</th>
		</tr>
		<tr>
			<th width="7%">Nộp NSNN (Nghìn đồng)</th>
			<th width="7%">Được để lại đơn vị (Nghìn đồng)</th>
		</tr>
		<tr style="font-style: italic;text-align: center">
			<td >1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
			<td>10</td>
			<td>11</td>
			<td>12</td>
			<td>13</td>
			<td>14</td>
		</tr>
		
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl

	require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" where tblqlts.madonvi Like '$dv%' and year(tblqlts.ngaysudung) = " . $nambaocao;
$_sQLdv = $_sQLdv . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nambaocao . ")";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)) {
	$_aDV[] = array('ma' => $_r['madonvi'],
		'ten' => $_r['tendv']
	);
}
$sttdv = 0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	$sttdv++;
// in tên đơn vị
	echo "<tr style='font-weight: bold;'>";
	echo "<td >".$sttdv."</td>";
	echo "<td colspan='19' >$_madv[ten]</td>";
	echo "</tr>";

	$sql = "select tblqlts.tenchitiet,ngansach+nguonkhac as nguyengia,DTKV,DVT,NHXE,NUOCSX,namsanxuat,lydotang, " .
		"tbldanhsachqd32.bac1 from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
	$sql = $sql . " Where madonvi = '" . $_madv['ma'] . "' and year(tblqlts.ngaysudung) = " . $nambaocao;
	$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nambaocao . ")";
	$sql = $sql . " order by tbldanhsachqd32.bac1";
	$queryct = mysqli_query($con, $sql);
	$i = 0;
	$tennhomsau1 = "";
	$tennhom1 = "";
	while ($rowct = mysqli_fetch_array($queryct)) {
		$tennhom1 = $rowct['bac1'];
		if ($tennhom1 != $tennhomsau1) {
			echo "<tr>";
			echo "<td></td>";
			echo "<td style='text-align: left;font-weight: bold;font-style: italic'>" . $tennhom1 . "</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "</tr>";
		}
		$i = $i + 1;
		echo "<tr>";
		echo "<td>$i</td>";
		echo "<td style='text-align: left;'>" . $rowct['tenchitiet'] . "</td>";
		echo "<td style='text-align: left;'>" . $rowct['DVT'] . "</td>";
		echo "<td style='text-align: right;'>" . $rowct['DTKV'] . "</td>";
		echo "<td style='text-align: right;'>" . $rowct['NHXE'] . "</td>";
		echo "<td style='text-align: right;'>" . $rowct['namsanxuat'] . "</td>";
		echo "<td style='text-align: right;'>" . $rowct['DTKV'] . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($rowct['nguyengia']) . "</td>";
		echo "<td>" . $rowct['lydotang'] . "</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		$tennhomsau1 = $rowct['bac1'];
	}
}
?>
	</table>
	<table>
		<tr></tr>
		<tr>
			<td></td>
			<td></td>
			<td style="text-align: center;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">Người lập biểu</td>
			<td></td>
			<td style="text-align: center; font-weight: bold;">Thủ trưởng đơn vị</td>			
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
			<td></td>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
		</tr>
	</table>
</body>		
</html>	