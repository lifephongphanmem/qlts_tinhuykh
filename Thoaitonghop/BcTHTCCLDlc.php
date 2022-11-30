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
	$dv="";$ngttu="";$ngtden="";
	if(isset($_POST['create'])){
		$dv = $_POST['dv'];
		$ngttu = $_POST['nttu'];	
		$ngtden = $_POST['ntden'];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>SỞ Y TẾ TỈNH LAI CHÂU</nobr>
            </td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$dv; ?></nobr></td>
		</tr>
		<tr>
            <td style="text-align: center;">BÁO CÁO TÌNH HÌNH TĂNG CÔNG CỤ LAO ĐỘNG</td>
		</tr>
		<tr>
            <td style="text-align: center;"><?php echo "Kỳ báo cáo từ: ".$ngttu." đến ".$ngtden; ?></td>
		</tr>
		<tr>
			<td></td>            
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th height = '50px' width="5%">STT</th>
			<th height = "50px" width="26%">Tên công cụ</th>
			<th height = "50px" width="12%">Mã công cụ</th>
			<th height = "50px" width="10%">Ngày tăng</th>
			<th height = "50px" width="19%">Bộ phận sử dụng</th>
			<th height = "50px" width="6%">Số lượng</th>
			<th height = "50px" width="10%">Đơn giá</th>
			<th height = "50px" >Thành tiền</th>		
		</tr>		
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	$sql = "select tenchitiet,mataisan,ngaysudung,noidung,DTKV,dongia,thanhtien";
	$sql = $sql." From tblqlcc Where ngaysudung Between '".doingay($ngttu)."' and '".doingay($ngtden)."' and madonvi = '".$dv."' order by TTQLcc";	
	$queryct = mysqli_query($con,$sql);$i=0;
	while($rowct = mysqli_fetch_array($queryct)){
		$i=$i+1;
		echo "<tr>";	
			echo "<td>$i</td>";
			echo "<td style='text-align: left;'>".$rowct['tenchitiet']."</td>";
			echo "<td style='text-align: left;'>".$rowct['mataisan']."</td>";
			echo "<td>".$rowct['ngaysudung']."</td>";
			echo "<td style='text-align: left;'>".$rowct['noidung']."</td>";
			echo "<td style='text-align: right;'>".$rowct['DTKV']."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['dongia'])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($rowct['thanhtien'])."</td>";
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