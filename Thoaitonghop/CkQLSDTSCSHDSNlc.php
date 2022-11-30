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
	$dv="";$ngbaocao="";$madv ="";
	if(isset($_POST['create'])){
		if ($_POST['dv'] == "")
			$dv = $_POST['msdv'];
		else
			$dv = $_POST['dv'];
		$ngbaocao = $_POST['nhaomon'];	
		$madv = explode('>',$_POST['MADV']);
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
		<td style="text-align: left;font-weight: bold;width: 50%">
			<nobr>Bộ, tỉnh: </nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 09b-CK/TSC</nobr></td>
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
            <td style="text-align: center;font-weight: bold;"><nobr>CÔNG KHAI TÌNH HÌNH QUẢN LÝ, SỬ DỤNG TRỤ SỞ LÀM VIỆC, SƠ SỞ HOẠT ĐỘNG SỰ NGHIỆP</nobr></td>
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;"><?php echo "NĂM ".$ngbaocao; ?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th style = "font-size: 12px" rowspan="4" width="3%">STT</th>
			<th style = "font-size: 12px" rowspan="4" width="9%">Danh mục cơ sở nhà đất làm TSLV và cơ sở HĐSN của cơ quan, đơn vị, tổ chức</th>
			<th style = "font-size: 12px" colspan="8">Công khai về đất</th>
			<th style = "font-size: 12px" colspan="11">Công khai về nhà</th>
			<th style = "font-size: 12px" rowspan="4" width="4%">Ghi chú</th>
		</tr>
		<tr>
			<th style = "font-size: 12px" rowspan="3" >Diện tích (m2)</th>
			<th style = "font-size: 12px" rowspan="3" >Giá trị quyền sử dụng đát theo sổ kế toán (Nghìn đồng)</th>
			<th style = "font-size: 12px" colspan="6" >Hiện trạng sử dụng đất đến thời điểm công khai (m2)</th>
			<th style = "font-size: 12px" rowspan="3" >Năm sử dụng</th>
			<th style = "font-size: 12px" rowspan="3" >Tổng diện tích sàn sử dụng (m2)</th>
			<th style = "font-size: 12px" colspan="2">Giá trị theo sổ kế toán(Nghìn đồng)</th>
			<th style = "font-size: 12px" colspan="7" >Hiện trạng sử dụng nhà đến thời điểm công khai </br> (lấy theo diện tích sàn sử dụng (m2))</th>
		</tr>
		<tr>
			<th style = "font-size: 12px" rowspan="2" >Trự sở làm việc</th>
			<th style = "font-size: 12px" colspan="4" >Hoạt động sự nghiệp</th>
			<th style = "font-size: 12px" rowspan="2" >Sử dụng khác</th>
			<th style = "font-size: 12px" rowspan="2" >Nguyên giá</th>
			<th style = "font-size: 12px" rowspan="2" >Giá trị còn lại</th>
			<th style = "font-size: 12px" rowspan="2" >Trụ sở làm việc</th>
			<th style = "font-size: 12px" colspan="5" >Hoạt động sự nghiệp</th>
			<th style = "font-size: 12px" rowspan="2" >Sử dụng khác</th>
		</tr>
		<tr>
			<th style = "font-size: 12px" >Không kinh doanh</th>
			<th style = "font-size: 12px" >Kinh doanh</th>
			<th style = "font-size: 12px" >Cho thuê</th>
			<th style = "font-size: 12px" >Liên doanh, liên kết</th>
			<th style = "font-size: 12px" >Không kinh doanh</th>
			<th style = "font-size: 12px" >Kinh doanh</th>
			<th style = "font-size: 12px" >Cho thuê</th>
			<th style = "font-size: 12px" >Liên doanh, liên kết</th>
			<th style = "font-size: 12px" >Sử dụng hỗ hợp</th>
		</tr>
		<tr style = "font-size: 12px; text-align: center; font-style: italic;">
			<td >1</td>
			<td >2</td>
			<td >3</td>
			<td >4</td>
			<td >5</td>
			<td >6</td>
			<td >7</td>
			<td >8</td>
			<td >9</td>
			<td >10</td>
			<td >11</td>
			<td >12</td>
			<td >13</td>
			<td >14</td>
			<td >15</td>
			<td >16</td>
			<td >17</td>
			<td >18</td>
			<td >19</td>
			<td >20</td>
			<td >21</td>
			<td >22</td>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" where tblqlts.madonvi Like '$dv%'  and year(ngaysudung) <= ".$ngbaocao;
$_sQLdv = $_sQLdv . " and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $ngbaocao . ") order by chitiethinhthai";
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
	echo "<tr style='font-weight: bold;font-size: 12px;'>";
	echo "<td >" . $sttdv . "</td>";
	echo "<td colspan='19' >$_madv[ten]</td>";
	echo "</tr>";

	$sql = "Select tenchitiet,DTKV,ngansach+nguonkhac as ng,TKVDAT from tblqlts where (chitiethinhthai Like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and madonvi = '" . $_madv['ma'] . "' and year(ngaysudung) <= " . $ngbaocao;
	$sql = $sql . " and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $ngbaocao . ") order by chitiethinhthai";
	$queryct = mysqli_query($con, $sql);
	$i = 0;
	while ($rowct = mysqli_fetch_array($queryct)) {
		$i = $i + 1;
		echo "<tr>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'>$i</td>";
		echo "<td style = 'font-size: 12px; text-align: left; font-weight: bold;'>" . $rowct['tenchitiet'] . "</td>";
		echo "<td style = 'font-size: 12px; text-align: right; font-weight: bold;'>" . dinhdangso($rowct['DTKV']) . "</td>";
		echo "<td style = 'font-size: 12px; text-align: right; font-weight: bold;'>" . dinhdangso($rowct['ng']) . "</td>";
		echo "<td style = 'font-size: 12px; text-align: right; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: right; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "<td style = 'font-size: 12px; text-align: center; font-weight: bold;'></td>";
		echo "</tr>";
		$sqlnha = "Select tenchitiet,year(ngaysudung) as nam,TDTSXD,ngansach,nguonkhac ".
			"  from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 ".
			"where (tblqlts.chitiethinhthai Like 'Nhà%' or tblqlts.chitiethinhthai Like 'Vật kiến trúc%' or hinhthaitaisan like 'Nhà%') and TKVDAT = '" . $rowct['TKVDAT'] . "' and madonvi like '" . $dv . "%' and year(ngaysudung) <= " . $ngbaocao;
		$sqlnha = $sqlnha . " and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $ngbaocao . ")";
		$query = mysqli_query($con, $sqlnha);
		$j = 0;
		while ($row = mysqli_fetch_array($query)) {
			$j = $j + 1;
			echo "<tr>";
			echo "<td style = 'font-size: 12px; text-align: center;'>$j</td>";
			echo "<td style = 'font-size: 12px; text-align: left;'>" . $row['tenchitiet'] . "</td>";
			echo "<td style = 'font-size: 12px; text-align: center;'></td>";
			echo "<td style = 'font-size: 12px; text-align: center;'></td>";
			echo "<td style = 'font-size: 12px; text-align: center;'></td>";
			echo "<td style = 'font-size: 12px; text-align: center;'></td>";
			echo "<td style = 'font-size: 12px; text-align: center;'></td>";
			echo "<td style = 'font-size: 12px; text-align: left;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: left;'></td>";
			echo "<td style = 'font-size: 12px; text-align: left;'>" . $row['nam'] . "</td>";
			echo "<td style = 'font-size: 12px; text-align: left;'>" . dinhdangso($row['TDTSXD']) . "</td>";
			echo "<td style = 'font-size: 12px; text-align: right;'>" . dinhdangso($row['ngansach'] + $row['nguonkhac']) . "</td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "<td style = 'font-size: 12px; text-align: right;'></td>";
			echo "</tr>";
		}
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