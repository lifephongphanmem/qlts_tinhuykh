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
	$dv="";$ngtu="";$ngden="";
	if(isset($_POST['create'])){
		$dv = $_POST['dv'];
		$ngtu = $_POST['nttu'];	
		$ngden = $_POST['ntden'];
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
            <td style="text-align: center;font-weight: bold;">BÁO CÁO GIẢM TÀI SẢN NHÀ NƯỚC CỦA ĐƠN VỊ TRỰC TIẾP SỬ DỤNG</td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;"><?php echo "Ký báo cáo: Từ ngày ".$ngtu." đến ngày ".$ngden; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>
            </td>
            <td style="text-align: center;font-weight: bold;">Chi tiết tài sản đến bậc: 6</td>
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
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	$ts =  array(array("A","B","C","D","E","F","G","H","Y",0,0,0,0,0,0));
	$cs=0;
	$sql = "select tblqlts.TTQLTS,tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3,tbldanhsachqd32.bac4,tbldanhsachqd32.bac5,tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.ngansach+tblqlts.nguonkhac as ng";
	$sql = $sql.",tblqlts.tenchitiet,year(tblqlts.ngaysudung) as nsd";
	$sql = $sql." From (tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32) inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS";
	$sql = $sql." Where tblqlts.madonvi = '".$dv."' and tbldenghi.ngaythang between '".doingay($ngtu)."' and '".doingay($ngden)."'";
	$sql = $sql." order by tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3,tbldanhsachqd32.bac4,tbldanhsachqd32.bac5";
	$queryct = mysqli_query($con,$sql);
	while($rowct = mysqli_fetch_array($queryct)){
		$sqlhm = "Select tblhaomon.TThaomon,tblhaomon.TTQLTS,tblhaomon.sodu,tblhaomon.sotien From tblhaomon";		
		$sqlhm = $sqlhm." Where tblhaomon.TTQLTS = ".$rowct['TTQLTS'];		
		$sqlhm = $sqlhm." and tblhaomon.ngaythang <= '".doingay($ngden)."' and tblhaomon.madonvi = '".$dv."'";
		//echo $sqlhm;
		$queryhm = mysqli_query($con,$sqlhm);$sohaomon=0;
		while($rowhm = mysqli_fetch_array($queryhm)){
			$sohaomon = $rowhm['sodu'] + $rowhm['sotien'];
		}
		$ts[$cs][0] = $rowct['bac1'];
		$ts[$cs][1] = $rowct['bac2'];
		$ts[$cs][2] = $rowct['bac3'];
		$ts[$cs][3] = $rowct['bac4'];
		$ts[$cs][4] = $rowct['bac5'];
		$ts[$cs][5] = $rowct['tenchitiet'];
		$ts[$cs][6] = $rowct['nsd'];
		$ts[$cs][7] = "";
		$ts[$cs][8] = "";
		$ts[$cs][9] = 1;
		$ts[$cs][10] = $rowct['sl'];
		$ts[$cs][11] = $rowct['ng'];
		$ts[$cs][12] = $rowct['ngansach'];
		$ts[$cs][13] = $rowct['nguonkhac'];
		$ts[$cs][14] = $rowct['ng']-$sohaomon;
		$cs = $cs + 1;		
	}
	$tennhomsau1="";$tennhom1="";$tennhomsau2="";$tennhom2="";$tennhomsau3="";$tennhom3="";$tennhomsau4="";$tennhom4="";$tennhomsau5="";$tennhom5="";
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
					$t11=$t11+$ts[$j][9];$t12=$t12+$ts[$j][10];$t13=$t13+$ts[$j][11];$t14=$t14+$ts[$j][12];$t15=$t15+$ts[$j][13];$t16=$t16+$ts[$j][14];	
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
		$tennhom2 = $ts[$i][1];
		if ($tennhom2 != $tennhomsau2)
		{
			$t21=0;$t22=0;$t23=0;$t24=0;$t25=0;$t26=0;
			for($z=0;$z<$cs;$z++)
			{
				if ($ts[$z][1]==$tennhom2)
				{
					$t21=$t21+$ts[$z][9];$t22=$t22+$ts[$z][10];$t23=$t23+$ts[$z][11];$t24=$t24+$ts[$z][12];$t25=$t25+$ts[$z][13];$t26=$t26+$ts[$z][14];	
				}
			}
			$t21=dinhdangso($t21);$t22=dinhdangso($t22);$t23=dinhdangso($t23);$t24=dinhdangso($t24);$t25=dinhdangso($t25);$t26=dinhdangso($t26);
			echo "<tr>";
				echo "<td style='text-align: left;'>".$tennhom2."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t21."</td>";
				echo "<td style='text-align: right;'>".$t22."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t23."</td>";
				echo "<td style='text-align: right;'>".$t24."</td>";
				echo "<td style='text-align: right;'>".$t25."</td>";
				echo "<td style='text-align: right;'>".$t26."</td>";
			echo "</tr>";	
		}
		$tennhomsau2 = $ts[$i][1];		
		$tennhom3 = $ts[$i][2];
		if ($tennhom3 != $tennhomsau3)
		{
			$t31=0;$t32=0;$t33=0;$t34=0;$t35=0;$t36=0;
			for($z=0;$z<$cs;$z++)
			{
				if ($ts[$z][2]==$tennhom3)
				{
					$t31=$t31+$ts[$z][9];$t32=$t32+$ts[$z][10];$t33=$t33+$ts[$z][11];$t34=$t34+$ts[$z][12];$t35=$t35+$ts[$z][13];$t36=$t36+$ts[$z][14];	
				}
			}
			$t31=dinhdangso($t31);$t32=dinhdangso($t32);$t33=dinhdangso($t33);$t34=dinhdangso($t34);$t35=dinhdangso($t35);$t36=dinhdangso($t36);
			echo "<tr>";
				echo "<td style='text-align: left;'>".$tennhom3."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t31."</td>";
				echo "<td style='text-align: right;'>".$t32."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t33."</td>";
				echo "<td style='text-align: right;'>".$t34."</td>";
				echo "<td style='text-align: right;'>".$t35."</td>";
				echo "<td style='text-align: right;'>".$t36."</td>";
			echo "</tr>";	
		}
		$tennhomsau3 = $ts[$i][2];	
		$tennhom4 = $ts[$i][3];
		if ($tennhom4 != $tennhomsau4)
		{
			$t41=0;$t42=0;$t43=0;$t44=0;$t45=0;$t46=0;
			for($z=0;$z<$cs;$z++)
			{
				if ($ts[$z][3]==$tennhom4)
				{
					$t41=$t41+$ts[$z][9];$t42=$t42+$ts[$z][10];$t43=$t43+$ts[$z][11];$t44=$t44+$ts[$z][12];$t45=$t45+$ts[$z][13];$t46=$t46+$ts[$z][14];	
				}
			}
			$t41=dinhdangso($t41);$t42=dinhdangso($t42);$t43=dinhdangso($t43);$t44=dinhdangso($t44);$t45=dinhdangso($t45);$t46=dinhdangso($t46);
			echo "<tr>";
				echo "<td style='text-align: left;'>".$tennhom4."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t41."</td>";
				echo "<td style='text-align: right;'>".$t42."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t43."</td>";
				echo "<td style='text-align: right;'>".$t44."</td>";
				echo "<td style='text-align: right;'>".$t45."</td>";
				echo "<td style='text-align: right;'>".$t46."</td>";
			echo "</tr>";	
		}
		$tennhomsau4 = $ts[$i][3];
		$tennhom5 = $ts[$i][4];
		if ($tennhom5 != $tennhomsau5)
		{
			$t51=0;$t52=0;$t53=0;$t54=0;$t55=0;$t56=0;
			for($z=0;$z<$cs;$z++)
			{
				if ($ts[$z][3]==$tennhom4)
				{
					$t51=$t51+$ts[$z][9];$t52=$t52+$ts[$z][10];$t53=$t53+$ts[$z][11];$t54=$t54+$ts[$z][12];$t55=$t55+$ts[$z][13];$t56=$t56+$ts[$z][14];	
				}
			}
			$t51=dinhdangso($t51);$t52=dinhdangso($t52);$t53=dinhdangso($t53);$t54=dinhdangso($t54);$t55=dinhdangso($t55);$t56=dinhdangso($t56);
			echo "<tr>";
				echo "<td style='text-align: left;'>".$tennhom5."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t51."</td>";
				echo "<td style='text-align: right;'>".$t52."</td>";
				echo "<td style='text-align: left;'></td>";
				echo "<td style='text-align: right;'>".$t53."</td>";
				echo "<td style='text-align: right;'>".$t54."</td>";
				echo "<td style='text-align: right;'>".$t55."</td>";
				echo "<td style='text-align: right;'>".$t56."</td>";
			echo "</tr>";	
		}
		$tennhomsau5 = $ts[$i][4];
		echo "<tr>";
			echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;".$ts[$i][5]."</td>";
			echo "<td style='text-align: left;'>".$ts[$i][6]."</td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][9])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][10])."</td>";
			echo "<td style='text-align: left;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][11])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][12])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][13])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ts[$i][14])."</td>";
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