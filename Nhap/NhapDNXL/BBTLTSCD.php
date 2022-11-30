<?php include "$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=UTF-8'>
	<style type="text/css">
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs1698ECB3 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.csE5855143 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:21px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
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
<?php
	$mats = "";
	$ttthanhly="";
	$So =""; $Tkn = ""; $Tkc = ""; $cancu = ""; $ketluan = ""; $chiphitl = 0; $giatrith = 0;$truongban="";
	$tendv="";$madvqhns="";$TTDV="";$HTKTT="";
	$now = getdate();
	$ngaylap = "Ngày ". $now["mday"] . " tháng " . $now["mon"] . " năm " . $now["year"]; 	
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	if(isset($_POST['create']))
	{
		$ttthanhly = $_POST['ttthanhly'];
		$So = "Số: ".$_POST['So'];
		$Tkn = "TK Nợ: ".$_POST['TKN'];
		$Tkc = "TK Có: ".$_POST['TKC'];
		$cancu = $_POST['CC'];
		$ketluan = $_POST['kltt'];
		$chiphitl = str_replace(",","",$_POST['CPTL']);
		$chiphitl = (double)$chiphitl;
		$giatrith = str_replace(",","",$_POST['GTTH']);
		$giatrith = (double)$giatrith;
		$mats =$_POST['mats'];	
		$tendv=$_POST['tendv'];	
		$madvqhns=$_POST['madvqhns'];	
		$TTDV=$_POST['TTDV'];	
		$HTKTT=$_POST['HTKTT'];	
	}	
	$artp = array(array("A","B","C","D"));
	$ctp = 0;
	$sql = "Select 	hoten,chucvucanbo,daidientp,thanhphan from tblthanhphantl where ttthanhly = '" . $ttthanhly . "'";	
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['thanhphan'] == "Trưởng ban")
			$truongban = $row['hoten'];
		$artp[$ctp][0] = $row['hoten'];
		$artp[$ctp][1] = $row['chucvucanbo'];
		$artp[$ctp][2] = $row['daidientp'];
		$artp[$ctp][3] = $row['thanhphan'];
		$ctp++;
	}		
?>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td width="4" style="width:0px;height:0px;"></td>
		<td width="1" style="height:0px;width:21px;"></td>
		<td width="70" style="height:0px;width:50px;"></td>
		<td width="10" style="height:0px;width:10px;"></td>
		<td width="96" style="height:0px;width:96px;"></td>
		<td width="6" style="height:0px;width:6px;"></td>
		<td width="8" style="height:0px;width:8px;"></td>
		<td width="35" style="height:0px;width:35px;"></td>
		<td width="26" style="height:0px;width:26px;"></td>
		<td width="22" style="height:0px;width:22px;"></td>
		<td width="61" style="height:0px;width:61px;"></td>
		<td width="27" style="height:0px;width:27px;"></td>
		<td width="2" style="height:0px;width:2px;"></td>
		<td width="18" style="height:0px;width:18px;"></td>
		<td width="21" style="height:0px;width:21px;"></td>
		<td width="26" style="height:0px;width:26px;"></td>
		<td width="21" style="height:0px;width:21px;"></td>
		<td width="15" style="height:0px;width:15px;"></td>
		<td width="38" style="height:0px;width:38px;"></td>
		<td width="23" style="height:0px;width:23px;"></td>
		<td width="1" style="height:0px;width:1px;"></td>
		<td width="20" style="height:0px;width:20px;"></td>
		<td width="23" style="height:0px;width:23px;"></td>
		<td width="129" style="height:0px;width:129px;"></td>
		<td width="29" style="height:0px;width:29px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:17px;"></td>
		<td class="csB6E29E9B" colspan="3" rowspan="2" style="width:81px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="14" rowspan="2" style="width:348px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $tendv; ?></nobr></td>
		<td class="cs550435DA" colspan="7" style="width:263px;height:17px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;C53&nbsp;-&nbsp;HD</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td class="cs101A94F7" colspan="7" rowspan="4" style="width:263px;height:52px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(Ban hành theo Thông tư số 107/2017/TT-BTC </br> ngày 10/10/2017 của Bộ Tài chính)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:81px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ&nbsp;phận:</nobr></td>
		<td class="csB6E29E9B" colspan="14" style="width:348px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:177px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;ĐV&nbsp;c&#243;&nbsp;QH&nbsp;với&nbsp;NS:</nobr></td>
		<td class="csB6E29E9B" colspan="13" style="width:252px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madvqhns; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td colspan="18" style="width:0px;height:9px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td colspan="25" style="width:0px;height:19px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:26px;"></td>
		<td class="csE5855143" colspan="24" style="width:724px;height:26px;line-height:25px;text-align:center;vertical-align:middle;"><nobr>BI&#202;N&nbsp;BẢN&nbsp;THANH&nbsp;L&#221;&nbsp;TSCĐ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="11" style="width:273px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr><?php echo $ngaylap;?></nobr></td>
		<td></td>
		<td class="cs5DE5F832" colspan="5" style="width:198px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $So; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="5" style="width:198px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $Tkn; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs5DE5F832" colspan="5" style="width:198px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $Tkc; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="cs5DE5F832" colspan="22" style="width:674px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $cancu; ?></nobr><nobr> về&nbsp;việc&nbsp;thanh&nbsp;l&#253;&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định.</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
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
		<td class="csE9F2AA97" colspan="15" style="width:425px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>I-&nbsp;Ban&nbsp;thanh&nbsp;l&#253;&nbsp;TSCĐ&nbsp;gồm:</nobr></td>
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
		<td style="width:0px;height:1px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<?php
	foreach ($artp as $artp)
	{
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:24px;'></td>";
			echo "<td class='cs62AA4CC9' colspan='2' style='width:71px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>&#212;ng&nbsp;(b&#224;):</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='6' style='width:181px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$artp[0]."</nobr></td>";
			echo "<td class='cs62AA4CC9' style='width:22px;height:24px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>-</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:108px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$artp[1]."</nobr></td>";
			echo "<td class='cs62AA4CC9' style='width:21px;height:24px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>-</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='7' style='width:144px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$artp[2]."</nobr></td>";
			echo "<td class='cs62AA4CC9' style='width:23px;height:24px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>-</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='2' style='width:158px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$artp[3]."</nobr></td>";
		echo "</tr>";
	}
	?>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:4px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="15" style="width:425px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>II-&nbsp;Tiến&nbsp;h&#224;nh&nbsp;thanh&nbsp;l&#253;&nbsp;TSCĐ&nbsp;gồm:</nobr></td>
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
	<?php
		$nggia =0;
		$sotiencl =0;
		$sql = "Select ngansach,nguonkhac,tenchitiet,mataisan,CAPH,TTQLTS,NUOCSX,ngaysudung  From tblqlts Where TTQLTS = " . $mats ;
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{		
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;T&#234;n,&nbsp;k&#253;&nbsp;hiệu&nbsp;m&#227;,&nbsp;quy&nbsp;c&#225;ch&nbsp;(cấp&nbsp;hạng)&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". $row['tenchitiet'].", " . $row['mataisan'] . ", ".$row['CAPH']." </nobr></td>";
		echo"</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Số&nbsp;hiệu&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". $row['TTQLTS']."</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Nước&nbsp;sản&nbsp;xuất&nbsp;(x&#226;y&nbsp;dựng)</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". $row['NUOCSX']."</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:162px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Năm&nbsp;đưa&nbsp;v&#224;o&nbsp;sử&nbsp;dụng</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='5' style='width:150px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". ngaythang($row['ngaysudung'])."</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:192px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>Số&nbsp;thẻ&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:201px;height:20px;'></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:21px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:162px;height:21px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Nguy&#234;n&nbsp;gi&#225;&nbsp;TSCĐ</nobr></td>";
			$nggia  = $row['ngansach'] + $row['nguonkhac'];
			echo "<td class='cs1698ECB3' colspan='19' style='width:543px;height:21px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". dinhdangso($nggia)."</nobr></td>";
		echo "</tr>";
		}
		$sql = "Select sotien  From tbltanggiam Where TTQLTS = " . $mats . " and lydotanggiam = 'Thanh lý'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$sotiencl = $row['sotien'];
		}
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;hao&nbsp;m&#242;n&nbsp;đ&#227;&nbsp;tr&#237;ch&nbsp;đến&nbsp;thời&nbsp;điểm&nbsp;thanh&nbsp;l&#253;</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".dinhdangso($nggia - $sotiencl)."</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;c&#242;n&nbsp;lại&nbsp;của&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".dinhdangso($sotiencl)."</nobr></td>";
		echo "</tr>";		
	?>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="15" style="width:425px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>III-&nbsp;Kết&nbsp;luận&nbsp;của&nbsp;ban&nbsp;thanh&nbsp;l&#253;&nbsp;TSCĐ:</nobr></td>
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
		<td></td>
		<td class="cs5DE5F832" colspan="23" style="width:703px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $ketluan; ?></nobr></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
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
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Trưởng&nbsp;ban&nbsp;thanh&nbsp;l&#253;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
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
		<td></td>
		<td></td>
		<td class="cs77A39B34" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
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
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $truongban;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="15" style="width:425px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>IV&nbsp;-&nbsp;Kết&nbsp;quả&nbsp;thanh&nbsp;l&#253;&nbsp;TSCĐ:</nobr></td>
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
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" style="width:170px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Chi&nbsp;ph&#237;&nbsp;thanh&nbsp;l&#253;&nbsp;TSCĐ:</nobr></td>
		<td class="cs1698ECB3" colspan="4" style="width:142px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr> <?php echo dinhdangso($chiphitl); ?> </nobr></td>
		<td class="cs62AA4CC9" colspan="6" style="width:115px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>(viết&nbsp;bằng&nbsp;chữ)</nobr></td>
		<td class="cs1698ECB3" colspan="8" style="width:276px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo docso($chiphitl); ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" style="width:170px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;thu&nbsp;hồi:</nobr></td>
		<td class="cs1698ECB3" colspan="4" style="width:142px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo dinhdangso($giatrith); ?></nobr></td>
		<td class="cs62AA4CC9" colspan="6" style="width:115px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>(viết&nbsp;bằng&nbsp;chữ)</nobr></td>
		<td class="cs1698ECB3" colspan="8" style="width:276px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo docso($giatrith); ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="23" style="width:707px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Đ&#227;&nbsp;ghi&nbsp;giảm&nbsp;sổ&nbsp;TSCĐ&nbsp;ng&#224;y&nbsp;........&nbsp;th&#225;ng&nbsp;...........&nbsp;năm&nbsp;.......................</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:6px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="cs62AA4CC9" colspan="12" style="width:364px;height:21px;"></td>
		<td class="cs62AA4CC9" colspan="12" style="width:364px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr><?php echo $ngaylap;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
		<td class="cs77A39B34" colspan="12" style="width:364px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $TTDV; ?></nobr></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $HTKTT; ?></nobr></td>
	</tr>
</table>
</body>
</html>