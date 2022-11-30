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
	$dv="";$ngbaocao="";
	if(isset($_POST['create'])){
		$dv = $_POST['dv'];
		$ngbaocao = $_POST['nhaomon'];	
	}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>SỞ Y TẾ TỈNH LAI CHÂU</nobr>
            </td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo $dv; ?></nobr></td>
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;">BÁO CÁO KIỂM KÊ TÀI SẢN CỐ ĐỊNH</td>
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;"><?php echo "NĂM ".$ngbaocao; ?></td>
		</tr>
		<tr>
			<td></td>            
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="2" width="4%">STT</th>
			<th rowspan="2" width="17%">Tên, đặc điểm, ký hiệu TSCĐ</th>
			<th rowspan="2" width="8%">Nước SX</th>
			<th rowspan="2" width="8%">Năm sử dụng</th>
			<th rowspan="2" width="8%">Số hiệu TSCĐ</th>
			<th colspan="3">Sổ sách</th>
			<th colspan="2">Kiểm kê</th>
			<th colspan="2">Chênh lệch</th>		
			<th rowspan="2" width="7%">Đề nghị thanh lý</th>
		</tr>		
		<tr>
			<th width="4%">Số lượng</th>
			<th width="13%">Nguyên giá</th>
			<th width="13%">Giá trị còn lại</th>
			<th width="4%">Số lượng</th>
			<th width="13%">Giá trị còn lại</th>
			<th>Thừa</th>
			<th>Thiếu</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	$sql = "select tblkiemken.tenchitiet,tblkiemken.nhom1sllt,tblkiemken.nhom1nglt,tblkiemken.nhom1cllt,tblkiemken.nhom2sltt,tblkiemken.nhom2cltt";
	$sql = $sql." From tblkiemken inner join tblkiemke on tblkiemken.TTkiemke = tblkiemke.TTkiemke Where tblkiemke.madonvi = '".$dv."' and year(tblkiemke.ngay1) = ".$ngbaocao;	
	$queryct = mysqli_query($con,$sql);$i=0;
	while($rowct = mysqli_fetch_array($queryct)){
		$i=$i+1;
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td style='text-align: left;'>".$rowct['tenchitiet']."</td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom1sllt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom1nglt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom1cllt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom2sltt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom2cltt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['nhom1cllt'] - $rowct['nhom2cltt'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['tenchitiet'])."</td>";
			echo "<td></td>";
		echo "</tr>";
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