<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csAA5B9630 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs7DC1BDF5 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs8556A6FD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs1D0A4484 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs11FFE362 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:italic; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
		   .in{
			  display: none !important;
		   }
		}
	</style>
<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 700px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php	
	$tungay = "";
	$denngay = "";
	$madv ="";
	if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	}	
	?>	
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:32px;"></td>
		<td style="height:0px;width:32px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:32px;"></td>
		<td style="height:0px;width:140px;"></td>
		<td style="height:0px;width:15px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:91px;"></td>
		<td style="height:0px;width:52px;"></td>
		<td style="height:0px;width:72px;"></td>
		<td style="height:0px;width:63px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" rowspan="2" style="width:60px;height:25px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Tên đơn vị:</nobr></td>
		<td class="csB6E29E9B" colspan="9" rowspan="2" style="width:333px;height:25px;text-align:left;vertical-align:middle;"><?php echo $madv[2]; ?></td>
		<td class="csB6E29E9B" colspan="6" style="width:298px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;&nbsp;C21&nbsp;-&nbsp;HD</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:5px;"></td>
		<td class="cs62AA4CC9" colspan="6" rowspan="4" style="width:298px;height:59px;line-height:18px;text-align:center;vertical-align:top;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19&nbsp;-&nbsp;2006/QĐ/BTC</nobr><br/><nobr>ng&#224;y&nbsp;30/03/2006&nbsp;v&#224;&nbsp;th&#244;ng&nbsp;tư&nbsp;số&nbsp;185/2010/TT-</nobr><br/><nobr>BTC&nbsp;ng&#224;y&nbsp;15/11/2010&nbsp;của&nbsp;Bộ&nbsp;t&#224;i&nbsp;ch&#237;nh)</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:71px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ&nbsp;phận:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:322px;height:24px;"></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:167px;height:25px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;ĐV&nbsp;c&#243;&nbsp;QH&nbsp;với&nbsp;NS:</nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:226px;height:25px;text-align:left;vertical-align:middle;"><?php echo $madv[1]; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:5px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="11" style="width:432px;height:25px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>GIẤY&nbsp;B&#193;O&nbsp;HỎNG,&nbsp;MẤT&nbsp;C&#212;NG&nbsp;CỤ,&nbsp;DỤNG&nbsp;CỤ</nobr></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:27px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	<?php
		echo "<td class='cs62AA4CC9' colspan='11' style='width:432px;height:27px;line-height:18px;text-align:center;vertical-align:top;'>Từ ngày: $tungay   đến ngày: $denngay</td>";
	?>		
		<td></td>
		<td></td>
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	function ngayxuat($macc)
	{
		global $con;
		$kq = "";
		$sql = "Select ngayxuat From tblxuatdung where TTQLcc =". $macc;
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = ngaythang($row['ngayxuat']);
		}
		return $kq;
	}
	function nguyengia($macc)
	{
		global $con;
		$kq = 0;
		$sql = "Select dongia From tblxuatdung where TTQLcc =". $macc;
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = ngaythang($row['dongia']);
		}
		return $kq;
	}
	$qrsql = mysqli_query($con,"Select tenchitiet,DVT,ngaythang,soluong,sotien,Lydohong,TTQLcc From tblbaohong where madonvi Like '$msdv%' and ngaythang Between '".doingay($tungay)."' and '".doingay($denngay)."'");
	$ar = array(array("A","B",0,0,0,"D"));
	$cs = 0;	
	$tsotien = 0;
	while($rowts=mysqli_fetch_array($qrsql))		
	{
		$ar[$cs][0] = $rowts['tenchitiet'];
		$ar[$cs][1] = $rowts['DVT'];
		$ar[$cs][2] = $rowts['soluong'];
		$ar[$cs][3] = ngayxuat($rowts['TTQLcc'])." đến ". ngaythang($rowts['ngaythang']);
		$ar[$cs][4] = $rowts['sotien'];
		$ar[$cs][5] = $rowts['Lydohong'];			
		$cs = $cs + 1;		
		$tsotien = $tsotien + $rowts['sotien'];
	}	
	echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";		 
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:105px;'></td>";
		echo "<td class='csAA5B9630' style='width:30px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>TT</nobr></td>";
		echo "<td class='cs425CAA45' colspan='4' style='width:124px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>T&#234;n&nbsp;c&#244;ng&nbsp;cụ,</nobr><br/><nobr>dụng&nbsp;cụ&nbsp;b&#225;o</nobr><br/><nobr>hỏng,&nbsp;mất</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:43px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Đơn</nobr><br/><nobr>vị</nobr><br/><nobr>t&#237;nh</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:42px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr><br/><nobr>b&#225;o</nobr><br/><nobr>hỏng,</nobr><br/><nobr>mất</nobr></td>";
		echo "<td class='cs425CAA45' colspan='3' style='width:177px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Thời&nbsp;gian&nbsp;sử&nbsp;dụng&nbsp;từ</nobr><br/><nobr>ng&#224;y&nbsp;...&nbsp;đến&nbsp;ng&#224;y&nbsp;....</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:91px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>c&#244;ng&nbsp;cụ,</nobr><br/><nobr>dụng&nbsp;cụ&nbsp;xuất</nobr><br/><nobr>d&#249;ng</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:123px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>L&#253;&nbsp;do</nobr><br/><nobr>hỏng,</nobr><br/><nobr>mất</nobr></td>";
		echo "<td class='cs425CAA45' style='width:62px;height:103px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Ghi&nbsp;ch&#250;</nobr></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64' style='width:30px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>A</nobr></td>";
		echo "<td class='cs16D304E1' colspan='4' style='width:124px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>B</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:43px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>C</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:42px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>1</nobr></td>";
		echo "<td class='cs16D304E1' colspan='3' style='width:177px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>2</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:91px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>3</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:123px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>D</nobr></td>";
		echo "<td class='cs16D304E1' style='width:62px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>E</nobr></td>";
	echo"</tr>";
	$stt = 0;
	for($i=0;$i<$cs;$i++)
	{
		$stt += 1;
		$tenct = $ar[$i][0];
		$dvt=$ar[$i][1];
		$sl=$ar[$i][2];
		$tg=$ar[$i][3];
		$st=dinhdangso($ar[$i][4]);
		$lydo=$ar[$i][5];	
		
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:23px;'></td>";
		echo "<td class='cs7DC1BDF5' style='width:30px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
		echo "<td class='cs1D0A4484' colspan='4' style='width:122px;height:22px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$tenct</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:43px;height:22px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$dvt</nobr></td>";
		echo "<td class='cs1D0A4484' colspan='2' style='width:40px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='3' style='width:177px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$tg</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:91px;height:22px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$st</nobr></td>";
		echo "<td class='cs1D0A4484' colspan='2' style='width:121px;height:22px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$lydo</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:62px;height:22px;'></td>";
	echo "</tr>";
	}
	$tsotien = dinhdangso($tsotien);
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64' style='width:30px;height:23px;'></td>";
		echo "<td class='cs16D304E1' colspan='4' style='width:124px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:43px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:42px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
		echo "<td class='cs16D304E1' colspan='3' style='width:177px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:91px;height:23px;text-align:right;'>$tsotien</td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:123px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
		echo "<td class='cs16D304E1' style='width:62px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
	 echo "</tr>";
	echo "</table>";
?>	
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="8" style="width:212px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="5" style="width:211px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:278px;height:24px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>.........,&nbsp;ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm&nbsp;............</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:39px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:212px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Người&nbsp;lập&nbsp;biểu</nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:211px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>&#221;&nbsp;kiến&nbsp;của&nbsp;người&nbsp;phụ&nbsp;tr&#225;ch</nobr><br/><nobr>bộ&nbsp;phận&nbsp;sử&nbsp;dụng</nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:278px;height:39px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:28px;"></td>
		<td class="cs11FFE362" colspan="8" style="width:212px;height:28px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs11FFE362" colspan="5" style="width:211px;height:28px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs11FFE362" colspan="4" style="width:278px;height:28px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:60px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:212px;height:60px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[4]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:211px;height:60px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[5]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:278px;height:60px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6]; ?></nobr></td>
	</tr>
</table>
</body>
</html>