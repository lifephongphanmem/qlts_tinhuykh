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
		.up_text{ text-transform: uppercase;}
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
	$khoi="";$ngabc="";$ploai="";$madv ="";$bac="";
	if(isset($_POST['create'])){
		$khoi = $_POST['khoi'];
		$ngabc = $_POST['nttu'];
		$ploai = $_POST['ploai'];	
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];				
		//$bac = $_POST['bac'];
	}
?>	
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Bộ, ngành, tỉnh: "; ?></nobr>
            </td>
            <td style="text-align: center; font-weight: bold;">
                <nobr>TỔNG HỢP TÀI SẢN NHÀ NƯỚC</nobr>
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Biểu số:02A-ĐK/TSNN</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$madv[2]; ?></nobr></td>
			<td style="text-align: center; font-weight: bold;">
			<?php 				
				echo "Phân 3: Chi tiết theo từng đơn vị";
			?>
			</td>
		</tr>
		<tr>
			<td style="text-align: left;font-weight: bold;">
				<nobr>Mã đơn vị:</nobr>
            </td>
            <td style="text-align: center;"><?php echo "Ngày báo cáo: ".$ngabc ?></td>
			<td style="text-align: center; font-weight: bold;"></td>
		</tr>
		<tr>
			<td></td>
            <td style="text-align: center;">Chi tiết tài sản đến bậc: 6</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
            <td style="text-align: right;font-style: italic;"><nobr>ĐVT cho: Diện tích đăt là: Mét vuông; Diện tích nhà là: Mét vuông;Số lượng là: Cái, Khuôn viên; Giá trị là: Nghìn đồng</nobr></td>			
			<td></td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="3" width="20%">Tài sản</th>
			<th rowspan="3" width="7%">Mã tài sản</th>
			<th rowspan="3" width="7%">Số lượng</th>
			<th rowspan="3" width="10%">Diện tích</th>			
			<th colspan="3">Nguyên giá</th>
			<th rowspan="3" width="13%">Giá trị còn lại</th>			
		</tr>
		<tr>
			<th rowspan="2" width="13%">Tổng cộng</th>			
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
	function dinhdangso($so)
	{
	$kq = "";
	if ($so > 0)
		$kq = number_format($so);
	return $kq;	
	}
	function kieudouble($so)
	{
		$kq = "";$a="";
		$kq1 = 0;$vt1=0;$vt2=0;
		if ($so != "")
		{
			$vt1 = strpos($so,",");
			$vt2 = strpos($so,".");
			if ($vt1==-1 && $vt2==-1)
			{
				$kq1 = (double)$so;
			}
			else
			{
				if ($vt1 > 0)
				{
					$kq = str_replace(",","",$so);
				}
				else
				{
					$kq = str_replace(".","",$so);
				}
			}			
			$kq1 = (double)$kq;
		}
		else
		{
			$kq1 = 0;
		}
		return $kq1;
	}
	function doingay($ngay)
	{
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
	}
	$sqldv = "Select madonvi,tendv From thongtindonvi where madonvi Like '".$msdv.".%'";
	$querydv = mysqli_query($con,$sqldv);
	while($rowsdv = mysqli_fetch_array($querydv)){
		echo "<tr>";
			echo "<td style='text-align: left;font-weight: bold;' class='up_text'>".$rowsdv['tendv']."</td>";
			echo "<td></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'</td>";
			echo "<td></td>";
		echo "</tr>";
		$ts =  array(array("A","B","1","2","3","4","5",0,0,0,0,0,0));
		$cs=0;
		$sql = "select tblqlts.TTQLTS,tbldanhsachqd32.bac1,tblqlts.DTKV+tblqlts.TDTSXD as sl,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.ngansach+tblqlts.nguonkhac as ng";
		$sql = $sql.",tbldanhsachqd32.bac2,tbldanhsachqd32.bac3,tbldanhsachqd32.bac4,tbldanhsachqd32.bac5,tblqlts.tenchitiet,tblqlts.mataisan";
		$sql = $sql." From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
		$sql = $sql." Where tblqlts.madonvi = '".$rowsdv['madonvi']."' and tblqlts.ngaysudung <= '".doingay($ngabc)."'";
		$sql = $sql." order by tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3,tbldanhsachqd32.bac4,tbldanhsachqd32.bac5,tblqlts.TTQLTS";
		//echo $sql;
		$queryct = mysqli_query($con,$sql);
		while($rowct = mysqli_fetch_array($queryct)){
			$sqlhm = "Select tblhaomon.sodu,tblhaomon.sotien From (tblhaomon inner join tblqlts on tblhaomon.TTQLTS = tblqlts.TTQLTS) inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
			$sqlhm = $sqlhm." Where tblqlts.TTQLTS = ".$rowct['TTQLTS']." and tblhaomon.ngaythang <= '".doingay($ngabc)."'";
			$queryhm = mysqli_query($con,$sqlhm);$sohaomon=0;
			while($rowhm = mysqli_fetch_array($queryhm)){
				$sohaomon = $rowhm['sodu'] + $rowhm['sotien'];
			}
			$ts[$cs][0] = $rowct['tenchitiet'];	
			$ts[$cs][1] = $rowct['mataisan'];
			$ts[$cs][2] = $rowct['bac1'];
			$ts[$cs][3] = $rowct['bac2'];
			$ts[$cs][4] = $rowct['bac3'];
			$ts[$cs][5] = $rowct['bac4'];
			$ts[$cs][6] = $rowct['bac5'];
			$ts[$cs][7] = 1;
			$ts[$cs][8] = $rowct['sl'];
			$ts[$cs][9] = $rowct['ng'];
			$ts[$cs][10] = $rowct['ngansach'];
			$ts[$cs][11] = $rowct['nguonkhac'];
			$ts[$cs][12] = $sohaomon;
			$cs = $cs + 1;
		}
		$tennhomsau1="";$tennhom1="";$tennhom2="";$tennhomsau2="";$tennhom3="";$tennhomsau3="";$tennhom4="";$tennhomsau4="";$tennhom5="";$tennhomsau5="";
		for($i=0;$i<$cs;$i++)
		{			
			$tennhom1 = $ts[$i][2];$t11=0;$t12=0;$t13=0;$t14=0;$t15=0;$t16=0;
			if ($tennhom1 != $tennhomsau1)
			{									
				for($j=0;$j<$cs;$j++)
				{
					if ($ts[$j][2]==$tennhom1)
					{
						$t11=$t11+$ts[$j][7];$t12=$t12+$ts[$j][8];$t13=$t13+$ts[$j][9];$t14=$t14+$ts[$j][10];$t15=$t15+$ts[$j][11];$t16=$t16+$ts[$j][12];	
					}
				}
				$t11=dinhdangso($t11);$t12=dinhdangso($t12);$t13=dinhdangso($t13);$t14=dinhdangso($t14);$t15=dinhdangso($t15);$t16=dinhdangso($t16);				
				echo "<tr>";
					echo "<td style='text-align: left;font-weight: bold;'>".$tennhom1."</td>";
					echo "<td style='text-align: left;font-weight: bold;'>".$i."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t11."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t12."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t13."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t14."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t15."</td>";
					echo "<td style='text-align: right;font-weight: bold;'>".$t16."</td>";
				echo "</tr>";
					
			}
			$tennhomsau1=$ts[$i][2];
			$tennhom2 = $ts[$i][3];
			if ($tennhom2 != $tennhomsau2)	
			{
				$t21=0;$t22=0;$t23=0;$t24=0;$t25=0;$t26=0;
				for($z=0;$z<$cs;$z++)
				{
					if ($ts[$z][3]==$tennhom2)
					{
						$t21=$t21+$ts[$z][7];$t22=$t22+$ts[$z][8];$t23=$t23+$ts[$z][9];$t24=$t24+$ts[$z][10];$t25=$t25+$ts[$z][11];$t26=$t26+$ts[$z][12];	
					}
				}
				$t21=dinhdangso($t21);$t22=dinhdangso($t22);$t23=dinhdangso($t23);$t24=dinhdangso($t24);$t25=dinhdangso($t25);$t26=dinhdangso($t26);				
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;".$tennhom2."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>".$t21."</td>";
					echo "<td style='text-align: right;'>".$t22."</td>";
					echo "<td style='text-align: right;'>".$t23."</td>";
					echo "<td style='text-align: right;'>".$t24."</td>";
					echo "<td style='text-align: right;'>".$t25."</td>";
					echo "<td style='text-align: right;'>".$t26."</td>";
				echo "</tr>";
			}
			$tennhomsau2 = $ts[$i][3];
			$tennhom3 = $ts[$i][4];
			if ($tennhom3 != $tennhomsau3)	
			{
				$t31=0;$t32=0;$t33=0;$t34=0;$t35=0;$t36=0;
				for($g=0;$g<$cs;$g++)
				{
					if ($ts[$g][4]==$tennhom3)
					{
						$t31=$t31+$ts[$g][7];$t32=$t32+$ts[$g][8];$t33=$t33+$ts[$g][9];$t34=$t34+$ts[$g][10];$t35=$t35+$ts[$g][11];$t36=$t36+$ts[$g][12];	
					}
				}
				$t31=dinhdangso($t31);$t32=dinhdangso($t32);$t33=dinhdangso($t33);$t34=dinhdangso($t34);$t35=dinhdangso($t35);$t36=dinhdangso($t36);				
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom3."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>".$t31."</td>";
					echo "<td style='text-align: right;'>".$t32."</td>";
					echo "<td style='text-align: right;'>".$t33."</td>";
					echo "<td style='text-align: right;'>".$t34."</td>";
					echo "<td style='text-align: right;'>".$t35."</td>";
					echo "<td style='text-align: right;'>".$t36."</td>";
				echo "</tr>";
			}
			$tennhomsau3 = $ts[$i][4];
			$tennhom4 = $ts[$i][5];
			if ($tennhom4 != $tennhomsau4)	
			{
				$t41=0;$t42=0;$t43=0;$t44=0;$t45=0;$t46=0;
				for($h=0;$h<$cs;$h++)
				{
					if ($ts[$h][5]==$tennhom4)
					{
						$t41=$t41+$ts[$h][7];$t42=$t42+$ts[$h][8];$t43=$t43+$ts[$h][9];$t44=$t44+$ts[$h][10];$t45=$t45+$ts[$h][11];$t46=$t46+$ts[$h][12];	
					}
				}
				$t41=dinhdangso($t41);$t42=dinhdangso($t42);$t43=dinhdangso($t43);$t44=dinhdangso($t44);$t45=dinhdangso($t45);$t46=dinhdangso($t46);				
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom4."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>".$t41."</td>";
					echo "<td style='text-align: right;'>".$t42."</td>";
					echo "<td style='text-align: right;'>".$t43."</td>";
					echo "<td style='text-align: right;'>".$t44."</td>";
					echo "<td style='text-align: right;'>".$t45."</td>";
					echo "<td style='text-align: right;'>".$t46."</td>";
				echo "</tr>";
			}
			$tennhomsau4 = $ts[$i][5];
			$tennhom5 = $ts[$i][6];
			if ($tennhom5 != $tennhomsau5)	
			{
				$t51=0;$t52=0;$t53=0;$t54=0;$t55=0;$t56=0;
				for($e=0;$e<$cs;$e++)
				{
					if ($ts[$e][6]==$tennhom5)
					{
						$t51=$t51+$ts[$e][7];$t52=$t52+$ts[$e][8];$t53=$t53+$ts[$e][9];$t54=$t54+$ts[$e][10];$t55=$t55+$ts[$e][11];$t56=$t56+$ts[$e][12];	
					}
				}
				$t51=dinhdangso($t51);$t52=dinhdangso($t52);$t53=dinhdangso($t53);$t54=dinhdangso($t54);$t55=dinhdangso($t55);$t56=dinhdangso($t56);				
				echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$tennhom5."</td>";
					echo "<td style='text-align: left;'></td>";
					echo "<td style='text-align: right;'>".$t51."</td>";
					echo "<td style='text-align: right;'>".$t52."</td>";
					echo "<td style='text-align: right;'>".$t53."</td>";
					echo "<td style='text-align: right;'>".$t54."</td>";
					echo "<td style='text-align: right;'>".$t55."</td>";
					echo "<td style='text-align: right;'>".$t56."</td>";
				echo "</tr>";
			}
			$tennhomsau4 = $ts[$i][5];
			echo "<tr>";
					echo "<td style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$ts[$i][0]."</td>";
					echo "<td style='text-align: left;'>".$ts[$i][1]."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][7])."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][8])."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][9])."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][10])."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][11])."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ts[$i][12])."</td>";
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