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
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
		   .in{
			  display: none !important;
		   }
		}
	</style>
<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 1100px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
	$tungay = "";
	$denngay = "";
	$madv ="";
	$nam = "";
	if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$nam = substr($denngay,6,4);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];	
	}
?>	
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:44px;"></td>
		<td style="height:0px;width:221px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:37px;"></td>
		<td style="height:0px;width:40px;"></td>
		<td style="height:0px;width:76px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:1px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="4" style="width:375px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Tên đơn vị: ".$madv[2]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="5" rowspan="2" style="width:328px;height:24px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;S23&nbsp;-&nbsp;H</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:2px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:39px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" style="width:328px;height:39px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19/2006/QĐ-BTC</nobr><br/><nobr>ng&#224;y&nbsp;30/03/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC)</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:13px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="9" style="width:703px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>BẢNG&nbsp;TỔNG&nbsp;HỢP&nbsp;CHI&nbsp;TIẾT&nbsp;DỤNG&nbsp;CỤ&nbsp;L&#194;U&nbsp;BỀN</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<?php		
		echo "<td class='csE9F2AA97' colspan='9' style='width:703px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Năm: $nam </nobr></td>";
		?>		
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs62AA4CC9" style="width:221px;height:24px;line-height:18px;text-align:right;vertical-align:middle;"><nobr>T&#224;i&nbsp;khoản:</nobr></td>
		<td class="cs62AA4CC9" colspan="5" style="width:307px;height:24px;"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	function tondk($mats,$tungay)
	{
		global $msdv;
		global $con;
		$kq=0;	
		$sql = "Select thanhtien From tblqlcc Where madonvi Like '$msdv%' and TTQLcc = '" . $mats . "' and ngaysudung < '" . doingay($tungay) . "'";
		$qrsql = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($qrsql))			
		{
			$kq = $kq + kieudouble($row['thanhtien']);
		}
		$sql = "Select tblbaohong.sotien From tblbaohong INNER JOIN tblqlcc ON tblbaohong.TTQLcc = tblqlcc.TTQLcc Where tblqlcc.madonvi Like '$msdv%' and tblqlcc.TTQLcc = '" . $mats . "' and tblbaohong.ngaythang < '" . doingay($tungay) . "'";
		$qrsql = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($qrsql))
		{
			$kq = $kq - kieudouble($row['sotien']);
		}
		return $kq;
	}
	function nhaptk($mats,$tungay,$denngay)
	{
		global $msdv;
		global $con;
		$kq=0;
		$sql = "Select thanhtien From tblqlcc Where madonvi Like '$msdv%' and TTQLcc = '" . $mats . "' and ngaysudung Between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$qrsql = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($qrsql))	
		{
			$kq = $kq + kieudouble($row['thanhtien']);
		}
		return $kq;
	}
	function xuattk($mats,$tungay,$denngay)
	{
		global $msdv;
		global $con;
		$kq= 0;
		$sql = "Select tblbaohong.sotien FROM tblbaohong INNER JOIN tblqlcc ON tblbaohong.TTQLcc = tblqlcc.TTQLcc Where tblqlcc.madonvi Like '$msdv%' and tblqlcc.TTQLcc = '" . $mats . "' and tblbaohong.ngaythang Between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql)){
			$kq = $kq + kieudouble($row['sotien']);
		}
		return $kq;
	}	
	$sql = "Select TTQLcc,tenchitiet,mataisan,CAPH FROM tblqlcc where madonvi Like '$msdv%' and mataisan like 'C%' and ngaysudung <= '". doingay($denngay) ."'";
	$qrsql=mysqli_query($con,$sql);
	$ar = array(array("A","B",0,0,0,0,"C"));
	$cs = 0;
	$Tsl1= 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0;	
	while($row = mysqli_fetch_array($qrsql))
	{
		$ar[$cs][0] = $row['tenchitiet'];
		$ar[$cs][1] = $row['CAPH'];
		$ar[$cs][2] = tondk($row['TTQLcc'],$tungay,$denngay);
		$ar[$cs][3] = nhaptk($row['TTQLcc'],$tungay,$denngay);
		$ar[$cs][4] = xuattk($row['TTQLcc'],$tungay,$denngay);
		$ar[$cs][5] = kieudouble(tondk($row['TTQLcc'],$tungay,$denngay)) + kieudouble(nhaptk($row['TTQLcc'],$tungay,$denngay)) - kieudouble(xuattk($row['TTQLcc'],$tungay,$denngay));
		$Tsl1 += kieudouble(tondk($row['TTQLcc'],$tungay,$denngay));
		$Tsl2 += kieudouble(nhaptk($row['TTQLcc'],$tungay,$denngay));
		$Tsl3 += kieudouble(xuattk($row['TTQLcc'],$tungay,$denngay));
		$Tsl4 += kieudouble(tondk($row['TTQLcc'],$tungay,$denngay)) + kieudouble(nhaptk($row['TTQLcc'],$tungay,$denngay)) - kieudouble(xuattk($row['TTQLcc'],$tungay,$denngay));	
		$cs+=1;									
	}	
	echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td height='27' style='width:0px;height:30px;'></td>";
		echo "<td class='csAA5B9630' rowspan='2' style='width:42px;height:58px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>TT</nobr></td>";
		echo "<td class='cs425CAA45' rowspan='2' style='width:220px;height:58px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>T&#234;n&nbsp;dụng&nbsp;cụ&nbsp;l&#226;u&nbsp;bền</nobr></td>";
		echo "<td class='cs425CAA45' rowspan='2' style='width:76px;height:58px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Quy&nbsp;c&#225;ch</nobr><br/><nobr>dụng&nbsp;cụ</nobr><br/><nobr>l&#226;u&nbsp;bền</nobr></td>";
		echo "<td class='cs425CAA45' colspan='5' style='width:306px;height:18px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;lượng</nobr></td>";
		echo "<td class='cs425CAA45' rowspan='2' style='width:57px;height:58px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Ghi&nbsp;ch&#250;</nobr></td>";
		echo "<td></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:43px;'></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:76px;height:42px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tồn</nobr><br/><nobr>&nbsp;đầu&nbsp;kỳ</nobr></td>";
		echo "<td class='cs16D304E1' style='width:75px;height:42px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Nhập</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:42px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Xuất</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:42px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tồn</nobr></td>";
		echo "<td></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs7DC1BDF5' style='width:42px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>1</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:220px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>2</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>3</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>4</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:75px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>5</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>6</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>7</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:57px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>8</nobr></td>";
		echo "<td></td>";
	echo "</tr>";
	$stt = 0;
	for($i=0;$i<$cs;$i++)
	{
		$stt += 1;
		$ten1 = $ar[$i][0];
		$ten3=$ar[$i][1];
		$sl1= dinhdangso($ar[$i][2]);
		$sl2=dinhdangso($ar[$i][3]);
		$sl3=dinhdangso($ar[$i][4]);
		$sl4=dinhdangso($ar[$i][5]);
		
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:40px;'></td>";
		echo "<td class='cs7DC1BDF5' style='width:42px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
		echo "<td class='cs1D0A4484' style='width:218px;height:23px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$ten1</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$ten3</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl1</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:75px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl2</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl3</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$sl4</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:57px;height:23px;'></td>";
		echo "<td></td>";
	echo "</tr>";
	}
		$Tsl1 = dinhdangso($Tsl1);
		$Tsl2 = dinhdangso($Tsl2);
		$Tsl3 = dinhdangso($Tsl3);
		$Tsl4 = dinhdangso($Tsl4);
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64' style='width:42px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'></td>";
		echo "<td class='cs16D304E1' style='width:220px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;'></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$Tsl1</nobr></td>";
		echo "<td class='cs16D304E1' style='width:75px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$Tsl2</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$Tsl3</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$Tsl4</nobr></td>";
		echo "<td class='cs16D304E1' style='width:57px;height:23px;'></td>";
		echo "<td></td>";
	echo "</tr>";	
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:10px;'></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
	echo "</tr>	";
	echo "</table>";	
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="6" style="width:361px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Sổ&nbsp;n&#224;y&nbsp;c&#243;&nbsp;...&nbsp;trang,&nbsp;đ&#225;nh&nbsp;số&nbsp;từ&nbsp;trang&nbsp;01&nbsp;đến</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="6" style="width:361px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr>trang&nbsp;......</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:39px;"></td>
		<td class="cs62AA4CC9" colspan="2" style="width:265px;height:39px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:230px;height:39px;"></td>
	  <td class="cs62AA4CC9" colspan="4" style="width:213px;height:39px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>.........,&nbsp;ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm</nobr><nobr>........</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:265px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;ghi&nbsp;sổ</nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:230px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:213px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="2" style="width:265px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="4" style="width:230px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="4" style="width:213px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:90px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:265px;height:77px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[4]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:230px;height:77px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[5]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:213px;height:77px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6]; ?></nobr></td>
	</tr>
</table>
</body>
</html>