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
	$kq = "";
	global $con;
	$sql = "Select loaihinh from thongtindonvi where madonvi = '$ms'";
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$kq = $row['loaihinh'];
	}
	return $kq;
}
?>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: left;font-weight: bold;width: 50%">
			<nobr>Bộ, tỉnh: </nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 09c-CK/TSC</nobr></td>
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
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: center;font-weight: bold;"><nobr>CÔNG KHAI TÌNH HÌNH QUẢN LÝ, SỬ DỤNG XE Ô TÔ VÀ TÀI SẢN CỐ ĐỊNH KHÁC</nobr></td>
	</tr>
	<tr>
		<td style="text-align: center;font-weight: bold;"><?php echo "NĂM ".$nambaocao; ?></td>
	</tr>
</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan = "4" width="4%">STT</th>
			<th rowspan = "4" width="13%">Danh mục phương tiện đi lại và tài sản khác của cơ quan, đơn vị, tổ chức</th>
			<th rowspan = "4" width="5%">Bộ phận sử dụng</th>
			<th rowspan = "4" width="5%">Số lượng</th>
			<th colspan = "4">Giá trị theo sổ sách kế toán đến thời điểm công khai (Nghìn đồng)</th>
			<th colspan = "7">Mục đích sử dụng</th>
		</tr>
		<tr>
			<th colspan = "3">Nguyên giá</th>
			<th rowspan = "3" width="7%">Giá trị còn lại</th>
			<th rowspan = "3" width="5%">Phục vụ chức danh có tiêu chuẩn</th>
			<th rowspan = "3" width="5%">Phục vụ công tác chung</th>
			<th rowspan = "3" width="5%">Phục vụ hoạt động đặc thù</th>
			<th rowspan = "3" width="5%">Kinh doanh</th>
			<th rowspan = "3" width="5%">Cho thuê</th>
			<th rowspan = "3" width="5%">Liên doanh, liên kết</th>
			<th rowspan = "3" width="5%">Sử dụng khác</th>
		</tr>
		<tr>
			<th rowspan="2" width="7%">Tổng cộng</th>
			<th colspan="2" width="7%">Trong đó</th>
		</tr>
		<tr>
			<th  width="7%">Nguồn ngân sách</th>
			<th  width="7%">Nguồn khác</th>
		</tr>
		<tr style="font-style: italic">
			<td style="text-align: center;">1</td>
			<td style="text-align: center;">2</td>
			<td style="text-align: center;">3</td>
			<td style="text-align: center;">4</td>
			<td style="text-align: center;">5</td>
			<td style="text-align: center;">6</td>
			<td style="text-align: center;">7</td>
			<td style="text-align: center;">8</td>
			<td style="text-align: center;">9</td>
			<td style="text-align: center;">10</td>
			<td style="text-align: center;">11</td>
			<td style="text-align: center;">12</td>
			<td style="text-align: center;">13</td>
			<td style="text-align: center;">14</td>
			<td style="text-align: center;">14</td>
		</tr>
		
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl

require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" where tblqlts.madonvi Like '$dv%'  and year(tblqlts.ngaysudung) <= ".$nambaocao.
	" and (tblqlts.chitiethinhthai not like 'Đất%' and tblqlts.chitiethinhthai not like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai not like 'Nhà%' and tblqlts.chitiethinhthai not like 'Vật kiến trúc%')";
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
	echo "<td >" . $sttdv . "</td>";
	echo "<td colspan='19' >$_madv[ten]</td>";
	echo "</tr>";


	$sql = "select tblqlts.tenchitiet,tblqlts.TTQLTS,tbldanhsachqd32.bac1,tblqlts.CNXE,tblqlts.CXXE,year(tblqlts.ngaysudung) as nsd,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.noidung" .
		" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
	$sql = $sql . " where tblqlts.madonvi = '" . $_madv['ma'] . "' and year(tblqlts.ngaysudung) <= " . $nambaocao .
		" and (tblqlts.chitiethinhthai not like 'Đất%' and tblqlts.chitiethinhthai not like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai not like 'Nhà%' and tblqlts.chitiethinhthai not like 'Vật kiến trúc%')";
	$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nambaocao . ") order by tbldanhsachqd32.ttsx";
	$queryct = mysqli_query($con, $sql);
	$i = 0;
	$tennhomsau1 = "";
	$tennhom1 = "";
	while ($rowct = mysqli_fetch_array($queryct)) {
		$tennhom1 = $rowct['bac1'];
		if ($tennhom1 != $tennhomsau1) {
			echo "<tr>";
			echo "<td></td>";
			echo "<td style='text-align: left;font-weight: bold;'>" . $tennhom1 . "</td>";
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
			echo "<td></td>";
			echo "</tr>";
		}
		$i = $i + 1;
		echo "<tr>";
		echo "<td>$i</td>";
		echo "<td style='text-align: left;'>" . $rowct['tenchitiet'] . "</td>";
		echo "<td>" . $rowct['noidung'] . "</td>";
		echo "<td style='text-align: center;'>1</td>";
		$sqlhm = "Select sodu,sotien From tblhaomon where TTQLTS = " . $rowct['TTQLTS'] . " and year(ngaythang) <= " . $nambaocao;
		$queryhm = mysqli_query($con, $sqlhm);
		$hmn = 0;
		while ($rowhm = mysqli_fetch_array($queryhm)) {
			$hmn = $rowhm['sodu'] + $rowhm['sotien'];
		}
		echo "<td style='text-align: right;'>" . dinhdangso($rowct['ngansach'] + $rowct['nguonkhac']) . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($rowct['ngansach']) . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($rowct['nguonkhac']) . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($rowct['nguonkhac'] + $rowct['ngansach'] - $hmn) . "</td>";
		$sqlht = "Select phanloai From tblhientrang where TTQLTS = " . $rowct['TTQLTS'];
		$queryht = mysqli_query($con, $sqlht);
		$pv1 = "";
		$pv2 = "";
		$pv3 = "";
		$pv4 = "";
		while ($rowht = mysqli_fetch_array($queryht)) {
			if ($rowht['phanloai'] == 'Xe phục vụ chức danh')
				$pv1 = "X";
			else if ($rowht['phanloai'] == 'Xe phục vụ chung')
				$pv2 = "X";
			else if ($rowht['phanloai'] == 'Xe chuyên dùng')
				$pv3 = "X";
			else
				$pv4 = "X";
		}
		echo "<td style='text-align: left;'>" . $pv1 . "</td>";
		echo "<td style='text-align: left;'>" . $pv2 . "</td>";
		echo "<td style='text-align: left;'>" . $pv3 . "</td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'>" . $pv4 . "</td>";
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
			<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ tên)</td>
			<td></td>
			<td style="text-align: center; font-style: italic;">(Ký, đóng dấu, ghi rõ họ tên)</td>
		</tr>
	</table>
</body>		
</html>	