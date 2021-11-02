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
	$dv="";$ngbaocao="";$bac="";
	if(isset($_POST['create'])){
		$dv = $_POST['dv'];
		$ngbaocao = $_POST['nttu'];	
		$bac = $_POST['bac'];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, ngành, tỉnh: </nobr>
            </td>
            <td>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số:01A-ĐK/TSNN</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$dv; ?></nobr></td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Mã đơn vị: </nobr>
            </td>
            <td></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;">BÁO CÁO TÀI SẢN NHÀ NƯỚC CỦA ĐƠN VỊ TRỰC TIẾP SỬ DỤNG</td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Thời điểm báo cáo: ".$ngbaocao; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;"><?php echo "Chi tiết tài sản đến bậc: ".$bac; ?></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
            <td style="text-align: right;font-style: italic;"><nobr>ĐVT cho: Diện tích đăt là: Mét vuông; Diện tích nhà là: Mét vuông;Số lượng là: Cái, Khuôn viên; Giá trị là: Nghìn đồng</nobr></td>			
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="3" width="19%">Tài sản</th>
			<th rowspan="3" width="5%">Năm đưa vào sử dụng</th>
			<th rowspan="3" width="6%">Cấp nhà hoặc số chỗ ngồi, tải trọng hoặc thông số kỹ thuật</th>
			<th rowspan="3" width="6%">Số tầng</th>
			<th rowspan="3" width="6%">Số lượng tài sản</th>
			<th rowspan="3" width="6%">Diện tích</th>
			<th rowspan="3" width="4%">Tủ lệ chất lượng còn lại (%)</th>
			<th colspan="3">Nguyên giá</th>
			<th rowspan="3" width="12%">Giá trị còn lại</th>			
		</tr>
		<tr>
			<th rowspan="2" width="12%">Tổng cộng</th>			
			<th colspan="2">Trong đó</th>
		</tr>
		<tr>
			<th width="12%">Ngân sách</th>
			<th width="12%">Nguồn khác</th>			
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	$ts =  array(array("A","B",0,0,0,0,0,0));
	$cs=0;
	$sql = "select count(tblqlts.TTQLTS) as s,tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,Sum(tblqlts.DTKV+tblqlts.TDTSXD) as sl,Sum(tblqlts.ngansach) as ns,Sum(tblqlts.nguonkhac) as nk,Sum(tblqlts.ngansach+tblqlts.nguonkhac) as ng";
	$sql = $sql." From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
	$sql = $sql." Where tblqlts.madonvi = '".$dv."' and tblqlts.ngaysudung <= '".doingay($ngbaocao)."'";
	$sql = $sql." Group by tbldanhsachqd32.bac1,tbldanhsachqd32.bac2";
	$queryct = mysqli_query($con,$sql);
	while($rowct = mysqli_fetch_array($queryct)){
		$sqlhm = "Select Max(tblhaomon.TThaomon),tblhaomon.TTQLTS,tblhaomon.sodu,tblhaomon.sotien From (tblhaomon inner join tblqlts on tblhaomon.TTQLTS = tblqlts.TTQLTS) inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
		$sqlhm = $sqlhm." Where tbldanhsachqd32.bac1 = '".$rowct['bac1']."' and tbldanhsachqd32.bac2 = '".$rowct['bac2']."'";
		$sqlhm = $sqlhm." and tblhaomon.ngaythang <= '".doingay($ngbaocao)."' and tblqlts.madonvi = '".$dv."'";
		$sqlhm = $sqlhm." Group by tblhaomon.TTQLTS";
		$queryhm = mysqli_query($con,$sqlhm);$sohaomon=0;
		while($rowhm = mysqli_fetch_array($queryhm)){
			$sohaomon = $sohaomon + $rowhm['sodu'] + $rowhm['sotien'];
		}
		$ts[$cs][0] = $rowct['bac1'];
		$ts[$cs][1] = $rowct['bac2'];
		$ts[$cs][2] = $rowct['s'];
		$ts[$cs][3] = $rowct['sl'];
		$ts[$cs][4] = $rowct['ng'];
		$ts[$cs][5] = $rowct['ns'];
		$ts[$cs][6] = $rowct['nk'];
		$ts[$cs][7] = $rowct['ng']-$sohaomon;
		$cs = $cs + 1;		
	}
	$tennhomsau1="";$tennhom1="";
	for($i=0;$i<$cs;$i++)
	{
		$tennhom1 = $ts[$i][0];
		if ($tennhom1 != $tennhomsau1)
		{
			$t11=0;$t12=0;$t13=0;$t14=0;$t15=0;$t16=0;
			for($j=0;$j<$cs;$j++)
			{
				if ($ts[$j][0]==$tennhom1)
				{
					$t11=$t11+$ts[$j][2];$t12=$t12+$ts[$j][3];$t13=$t13+$ts[$j][4];$t14=$t14+$ts[$j][5];$t15=$t15+$ts[$j][6];$t16=$t16+$ts[$j][7];	
				}
			}
			$t11=dinhdangso($t11);$t12=dinhdangso($t12);$t13=dinhdangso($t13);$t14=dinhdangso($t14);$t15=dinhdangso($t15);$t16=dinhdangso($t16);				
			echo "<tr>";
				echo "<td style='text-align: left;font-weight: bold;'>".$tennhom1."</td>";
				echo "<td style='text-align: left;font-weight: bold;'></td>";
				echo "<td style='text-align: left;font-weight: bold;'></td>";
				echo "<td style='text-align: left;font-weight: bold;'></td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t11."</td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t12."</td>";
				echo "<td style='text-align: left;font-weight: bold;'></td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t13."</td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t14."</td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t15."</td>";
				echo "<td style='text-align: right;font-weight: bold;'>".$t16."</td>";
			echo "</tr>";	
		}		
		$tennhomsau1 = $ts[$i][0];
		echo "<tr>";
			echo "<td style='text-align: left;'>".$ts[$i][1]."</td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][2])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][3])."</td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][4])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][5])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][6])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][7])."</td>";
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