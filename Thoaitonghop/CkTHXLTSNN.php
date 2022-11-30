<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Công khai tình hình xử lý tài sản nhà nước</title>
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
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 09d-CK/TSC</nobr></td>
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
            <td style="text-align: center;font-weight: bold;"><nobr>CÔNG KHAI TÌNH HÌNH XỬ LÝ TÀI SẢN CÔNG</nobr></td>
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;"><?php echo "NĂM ".$nambaocao; ?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan = "3" width="4%">STT</th>
			<th rowspan = "3" width="15%">Danh mục tài sản trong kỳ báo cáo được xử lý</th>
			<th colspan = "3">Giá trị theo sổ sách kế toán (Nghìn đồng) </th>
			<th colspan = "6">Hình thức xử lý theo Quyết định của cấp có thẩm quyền</th>
			<th rowspan= "3">Kết quả xử lý đến thời điểm báo cáo</th>
			<th colspan = "3">Số tiền thu được từ xử lý tài sản (Nghìn đồng)</th>
			<th rowspan = "3" width="7%">Chi phí xử lý tài sản</th>
			<th rowspan = "3" width="7%">Ghi chú</th>
		</tr>
		<tr>
			<th colspan = "2" >Nguyên giá</th>
			<th rowspan = "2" >Giá trị còn lại</th>
			<th rowspan = "2" >Điều chuyển</th>
			<th rowspan = "2"  >Bán</th>
			<th rowspan = "2"  align="center">Thanh lý</th>
			<th rowspan = "2"  align="center">Tiêu hủy</th>
			<th rowspan = "2"  align="center">Xử lý trong trường hợp bị mất, bị hủy hoại</th>
			<th rowspan = "2"  align="center">Xử lý khác</th>
			<th rowspan = "2"  align="center">Tổng cộng</th>
			<th rowspan = "2"  align="center">Đã nộp tài khoản tạm giữ</th>
			<th rowspan = "2"  align="center">Chưa nộp tài khoản tạm giữ</th>
		</tr>
		<tr>
			<th >Nguồn ngân sách</th>
			<th >Nguồn khác</th>
		</tr>
		<tr style="font-style: italic">
			<td align="center">1</td>
			<td align="center">2</td>
			<td align="center">3</td>
			<td align="center">4</td>
			<td align="center">5</td>
			<td align="center">6</td>
			<td align="center">7</td>
			<td align="center">8</td>
			<td align="center">9</td>
			<td align="center">10</td>
			<td align="center">11</td>
			<td align="center">12</td>
			<td align="center">13</td>
			<td align="center">14</td>
			<td align="center">15</td>
			<td align="center">16</td>
			<td align="center">17</td>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
function sohmlk($idts)
{
	global $nambaocao;
	global $con;
	$sohaomon = 0;

	$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $nambaocao . " and TTQLTS = " . $idts.
		" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $nambaocao . " and TTQLTS = " . $idts.")";
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon += $rowhm['sodu'];
		$sohaomon += $rowhm['sotien'];
	}
	return $sohaomon;
}

$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi inner join tbldenghi on tblqlts.TTQLTS=tbldenghi.TTQLTS".
	" where tblqlts.madonvi Like '$dv%'  and year(tbldenghi.ngaythang) = " . $nambaocao;
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
if (strlen($madv[0]) <16) {
	echo "<tr style='font-weight: bold;font-size: 12px;'>";
	echo "<td >" . $sttdv . "</td>";
	echo "<td colspan='19' >$_madv[ten]</td>";
	echo "</tr>";
}
	$sql = "select tblqlts.TTQLTS,tblqlts.tentaisan,tblqlts.chitiethinhthai,tblqlts.tenchitiet ,tblqlts.ngansach,tblqlts.nguonkhac,tbldenghi.noidung, tbldenghi.hinhthuc from tblqlts inner join tbldenghi on tblqlts.TTQLTS=tbldenghi.TTQLTS";
	$sql = $sql . " Where tbldenghi.madonvi =  '" . $_madv['ma'] . "' and year(tbldenghi.ngaythang) = " . $nambaocao;
	$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nambaocao . ")";
	$queryct = mysqli_query($con, $sql);
	$i = 0;
	while ($rowct = mysqli_fetch_array($queryct)) {
		$i = $i + 1;
		$dieuchuyen = "";
		$ban = "";
		$thanhly = "";
		$tieuhuy = "";
		$xulykhac = "";
		if ($rowct['hinhthuc'] == "Điều chuyển")
			$dieuchuyen = $rowct['hinhthuc'];
		if ($rowct['hinhthuc'] == "Bán")
			$ban = $rowct['hinhthuc'];
		if ($rowct['hinhthuc'] == "Thanh lý")
			$thanhly = $rowct['hinhthuc'];
		if ($rowct['hinhthuc'] == "Tiêu hủy")
			$tieuhuy = $rowct['hinhthuc'];
		if ($rowct['hinhthuc'] != "Điều chuyển" && $rowct['hinhthuc'] != "Bán" && $rowct['hinhthuc'] != "Thanh lý" && $rowct['hinhthuc'] != "Tiêu hủy")
			$xulykhac = $rowct['hinhthuc'];

		echo "<tr>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$i</td>";
		echo "<td style = 'font-size: 12px; text-align: left; '>" . $rowct['tenchitiet'] . "</td>";
		echo "<td style = 'font-size: 12px; text-align: right; '>" . dinhdangso($rowct['ngansach']) . "</td>";
		echo "<td style = 'font-size: 12px; text-align: left; '>" . dinhdangso($rowct['nguonkhac']) . "</td>";
		echo "<td style = 'font-size: 12px; text-align: right; '>" . dinhdangso($rowct['ngansach'] + $rowct['nguonkhac'] - sohmlk($rowct['TTQLTS'])) . "</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$dieuchuyen</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$ban</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$thanhly</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$tieuhuy</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '>$xulykhac</td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "<td style = 'font-size: 12px; text-align: center; '></td>";
		echo "</tr>";
	}
}
	
?>	
	</table>		
	<table>
		<tr></tr>
		<tr>
			<td style="text-align: center;"> ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tháng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; năm </td>
			<td></td>
			<td style="text-align: center;"> ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tháng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; năm </td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">NGƯỜI LẬP BIỂU</td>
			<td></td>
			<td style="text-align: center; font-weight: bold;">THỦ TRƯỞNG CƠ QUAN</td>			
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
			<td></td>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
		</tr>
	</table>
</body>
</html>