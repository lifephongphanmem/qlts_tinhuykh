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
	$dv="";$nhaomon="";$bac="";
	if(isset($_POST['create'])){
		$dv = $_POST['dv'];
		$nhaomon = $_POST['nhaomon'];	
		$bac = $_POST['bac'];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, ngành, tỉnh: </nobr>
            </td>  
			<td></td>
			<td></td>
        </tr>
		<tr>			         
			<td style="text-align: left; font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$dv; ?></nobr></td>
			<td></td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số: 01F-ĐK/TSNN</nobr></td>
		</tr>
		<tr> 			
			<td style="text-align: left;font-weight: bold;">Mã đơn vị: </td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td style="text-align: center;font-weight: bold;"><nobr>BÁO CÁO HAO MÒN TÀI SẢN NHÀ NƯỚC CỦA ĐƠN VỊ TRỰC TIẾP SỬ DỤNG</nobr></td>			
		</tr>
		<tr>
            <td style="text-align: center;">(Áp dụng cho tài sản không phải là đất)</td>
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;"><nobr><?php echo "Hao mòn năm: ".$nhaomon; ?></nobr></td>			
		</tr>
		<tr>
            <td style="text-align: center;font-weight: bold;"><nobr><?php echo "Chi tiết tài sản đến bậc:".$bac; ?></nobr></td>			
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th>Tên tài sản</th>
			<th width="15%">Mã số</th>
			<th width="15%">Số hao mòn trong năm</th>
			<th width="15%">Lũy kế hao mòn</th>
			<th width="15%">Ghi chú</th>			
		</tr>		
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	$ts =  array(array("A","B1","B2","B3","B4","B5","C",0,0));
	$cs=0;
	$sql = "Select TTQLTS,mataisan,tenchitiet,bac1,bac2,bac3,bac4,bac5 from tblqlts where chitiethinhthai Not Like 'Đất%' and chitiethinhthai Not like 'Quyền sử dụng đất%'";
	$sql = $sql." and madonvi = '".$dv."' and year(ngaysudung) <= ".$nhaomon." order by bac1,bac2,bac3,bac4,bac5,tenchitiet";
	$queryct = mysqli_query($con,$sql);
	while($rowct = mysqli_fetch_array($queryct)){				
		$sqlhm = "Select sotien,sodu from tblhaomon where TTQLTS = ".$rowct['TTQLTS']." and year(ngaythang) <= ".$nhaomon;
		$query = mysqli_query($con,$sqlhm);$sohmn=0;$luykehm=0;
		while($row = mysqli_fetch_array($query)){
			$sohmn = $row['sotien'];
			$luykehm = $row['sotien'] + $row['sodu'];
		}
		$ts[$cs][0] = $rowct['tenchitiet'];
		$ts[$cs][1] = $rowct['bac1'];
		$ts[$cs][2] = $rowct['bac2'];
		$ts[$cs][3] = $rowct['bac3'];
		$ts[$cs][4] = $rowct['bac4'];
		$ts[$cs][5] = $rowct['bac5'];
		$ts[$cs][6] = $rowct['mataisan']."-".$rowct['TTQLTS'];
		$ts[$cs][7] = $sohmn;
		$ts[$cs][8] = $luykehm;
		$cs = $cs + 1;
	}
	$tennhomsau1="";$tennhom1="";$tennhomsau2="";$tennhom2="";$tennhomsau3="";$tennhom3="";$tennhomsau4="";$tennhom4="";$tennhomsau5="";$tennhom5="";
	for($i=0;$i<$cs;$i++)
	{		
		if ($bac == "1")
		{			
			$tennhom1 = $ts[$i][1];
			//echo $ts[$i][0];
			if ($tennhom1 != $tennhomsau1)
			{
				$t11=0;$t12=0;
				for($j=0;$j<$cs;$j++)
				{
					if ($ts[$j][1]==$tennhom1)
					{
						$t11=$t11+$ts[$j][7];$t12=$t12+$ts[$j][8];	
					}
				}
				$t11=dinhdangso($t11);$t12=dinhdangso($t12);
				echo "<tr>";
					echo "<td style='text-align: left;font-weight: bold;'>".$tennhom1."</td>";
					echo "<td style='text-align: left;font-weight: bold;'></td>";
					echo "<td style='text-align: right;font-weight: bold;'>$t11</td>";
					echo "<td style='text-align: right;font-weight: bold;'>$t12</td>";
					echo "<td style='text-align: right;font-weight: bold;'></td>";				
				echo "</tr>";
			}		
			$tennhomsau1 = $ts[$i][1];
		}
		else
		{
			$tennhom1 = $ts[$i][1];
			if ($tennhom1 != $tennhomsau1)
			{
				$t11=0;$t12=0;
				for($j=0;$j<$cs;$j++)
				{
					if ($ts[$j][1]==$tennhom1)
					{
						$t11=$t11+$ts[$j][7];$t12=$t12+$ts[$j][8];	
					}
				}
				$t11=dinhdangso($t11);$t12=dinhdangso($t12);
				echo "<tr>";
					echo "<td style='text-align: left;font-weight: bold;'>".$tennhom1."</td>";
					echo "<td style='text-align: left;font-weight: bold;'></td>";
					echo "<td style='text-align: right;font-weight: bold;'>$t11</td>";
					echo "<td style='text-align: right;font-weight: bold;'>$t12</td>";
					echo "<td style='text-align: right;font-weight: bold;'></td>";				
				echo "</tr>";
			}		
			$tennhomsau1 = $ts[$i][1];
			$tennhom2 = $ts[$i][2];
			if ($tennhom2 != $tennhomsau2)
			{
				$t21=0;$t22=0;
				for($z=0;$z<$cs;$z++)
				{
					if ($ts[$z][2]==$tennhom2)
					{
						$t21=$t21+$ts[$z][7];$t22=$t22+$ts[$z][8];	
					}
				}
				$t21=dinhdangso($t21);$t22=dinhdangso($t22);
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;".$tennhom2."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>$t21</td>";
					echo "<td style='text-align: right;'>$t22</td>";
					echo "<td style='text-align: right;'></td>";				
				echo "</tr>";
			}
			$tennhomsau2 = $ts[$i][2];
			$tennhom3 = $ts[$i][3];
			if ($tennhom3 != $tennhomsau3)
			{
				$t31=0;$t32=0;
				for($g=0;$g<$cs;$g++)
				{
					if ($ts[$g][3]==$tennhom3)
					{
						$t31=$t31+$ts[$g][7];$t32=$t32+$ts[$g][8];	
					}
				}
				$t31=dinhdangso($t31);$t32=dinhdangso($t32);
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom3."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>$t31</td>";
					echo "<td style='text-align: right;'>$t32</td>";
					echo "<td style='text-align: right;'></td>";				
				echo "</tr>";
			}
			$tennhomsau3 = $ts[$i][3];
			$tennhom4 = $ts[$i][4];
			if ($tennhom4 != $tennhomsau4)
			{
				$t41=0;$t42=0;
				for($h=0;$h<$cs;$h++)
				{
					if ($ts[$h][4]==$tennhom4)
					{
						$t41=$t41+$ts[$h][7];$t42=$t42+$ts[$h][8];	
					}
				}
				$t41=dinhdangso($t41);$t42=dinhdangso($t42);
				echo "<tr>";
					if ($tennhom4 != "")
						echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom4."</td>";
					else
						echo "<td style='text-align: left;'>".$tennhom4."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>$t41</td>";
					echo "<td style='text-align: right;'>$t42</td>";
					echo "<td style='text-align: right;'></td>";				
				echo "</tr>";
			}
			$tennhomsau4 = $ts[$i][4];
			$tennhom5 = $ts[$i][5];
			if ($tennhom5 != $tennhomsau5)
			{
				$t51=0;$t52=0;
				for($e=0;$e<$cs;$e++)
				{
					if ($ts[$e][5]==$tennhom5)
					{
						$t51=$t51+$ts[$e][7];$t52=$t52+$ts[$e][8];	
					}
				}
				$t51=dinhdangso($t51);$t52=dinhdangso($t52);
				echo "<tr>";
					if ($tennhom5 != "")
						echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom5."</td>";
					else
						echo "<td style='text-align: left;'>".$tennhom5."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>$t51</td>";
					echo "<td style='text-align: right;'>$t52</td>";
					echo "<td style='text-align: right;'></td>";				
				echo "</tr>";
			}
			$tennhomsau5 = $ts[$i][5];
			echo "<tr>";
				if ($tennhom5 != "")
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ts[$i][0]."</td>";
				else if ($tennhom4 != "")
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ts[$i][0]."</td>";
				else
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ts[$i][0]."</td>";
				echo "<td style='text-align: left;'>".$ts[$i][6]."</td>";
				echo "<td style='text-align: right;'>".dinhdangso($ts[$i][7])."</td>";
				echo "<td style='text-align: right;'>".dinhdangso($ts[$i][8])."</td>";
				echo "<td style='text-align: right;'></td>";				
			echo "</tr>";
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