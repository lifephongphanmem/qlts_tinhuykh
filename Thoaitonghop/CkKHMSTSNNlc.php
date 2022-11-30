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
	$dv="";$nambaocao="";$madv="";
	if(isset($_POST['create'])){
		$madv = explode('>',$_POST['MADV']);
		if ($_POST['dv'] == "")
			$dv = $_POST['msdv'];
		else
			$dv = $_POST['dv'];
		$nambaocao = $_POST['nhaomon'];
	}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Bộ, ngành, tỉnh: ......................." ?> </nobr>
            </td>
            <td>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số 01</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Cơ quan, đơn vị, tổ chức: ".$madv[2]; ?></nobr></td>
			<td></td>
			<td style="text-align: center;">(Ban hành kèm theo Thông tư số 89/2010/TT/BTC</td>
		</tr>
		<tr>
			<td></td>
            <td></td>
			<td style="text-align: center;">ngày 16/6/2010 của Bộ Tài chính)</td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;">CÔNG KHAI KẾ HOẠCH MUA SẮM TÀI SẢN NHÀ NƯỚC</td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;"><?php echo "THEO DỰ TOÁN NĂM ".$nambaocao; ?></td>
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
			<th width="6%">Stt</th>
			<th width="20%">Tên tài sản dự kiến mua</th>
			<th width="12%"> Dự toán được cấp có thẩm quyền duyệt(ngàn đồng)</th>
			<th width="7%">Đơn vị tính</th>
			<th width="7%">Số lượng dự kiến mua sắm</th>
			<th width="8%">Quy cách, chất liệu, chủng hạng</th>
			<th width="12%">Đơn giá dự kiến mua sắm</th>
			<th width="11%">Thời gian dự kiến mua sắm</th>
			<th width="14%">Hình thức mua sắm(ghi rõ đấu thầu, chỉ định thầu, chào hàng cạnh tranh, mua sắm trược tiếp)</th>
			<th>Ghi chú</th>
		</tr>
		
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	$sql = "select tbltrangcap.tengoi,tbltrangcap.sotien,tbltrangcap.soluong,tbltrangcap.caphang,tbltrangcap.ngaythang,tbltrangcap.hinhthuc,tbldanhsachqd32.bac1 from tbltrangcap inner join tbldanhsachqd32 on tbltrangcap.mataisan = tbldanhsachqd32.mataisanqd32";	
	$sql = $sql." Where tbltrangcap.madonvi = '".$dv."' and year(tbltrangcap.ngaythang) = ".$nambaocao;
	$sql = $sql." order by tbldanhsachqd32.bac1";
	//echo $sql;
	$queryct = mysqli_query($con,$sql);$i = 0;$tennhomsau1="";$tennhom1="";
	while($rowct = mysqli_fetch_array($queryct)){
		$tennhom1=$rowct['bac1'];
		if ($tennhom1 != $tennhomsau1)
		{			
			echo "<tr>";
				echo "<td></td>";
				echo "<td style='text-align: left;font-weight: bold;'>".$tennhom1."</td>";
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
				echo "<td style='text-align: left;'>".$rowct['tengoi']."</td>";
				echo "<td style='text-align: right;'>".dinhdangso($rowct['sotien'])."</td>";
				echo "<td></td>";
				echo "<td style='text-align: right;'>".$rowct['soluong']."</td>";
				echo "<td>".$rowct['caphang']."</td>";
				echo "<td style='text-align: right;'>".dinhdangso($rowct['sotien']/$rowct['soluong'])."</td>";
				echo "<td style='text-align: center;'>".ngaythang($rowct['ngaythang'])."</td>";
				echo "<td>".$rowct['hinhthuc']."</td>";
				echo "<td></td>";
			echo "</tr>";
		$tennhomsau1=$rowct['bac1'];
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