<?php include 'general.php'; 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
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
	</style>
<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div style="margin-left: 1100px;">
<input id="in" type="submit" class="buttonPro medium blue" onclick="this.style.display ='none'; window.print()" value="In báo cáo"  />
</div>

<?php
	
	$mats = "";$ttthanhly="";
	$So =""; $Tkn = ""; $Tkc = ""; $cancu = ""; $ketluan = ""; $chiphitl = ""; $giatrith = "";
	
	if(isset($_POST['create']))
	{
		$ttthanhly = "";
		$So =$_POST['so'];
		$Tkn = $_POST['tkn'];
		$Tkc = $_POST['tkc'];
		$cancu = $_POST['cc'];
		$ketluan = $_POST['kl'];
		$chiphitl = $_POST['CPTL'];
		$giatrith = $_POST['GTTH'];
		$mats = "";
		if(kt($mats) == "C")
		{
			$sql = "Update tblthanhly set So= '$So',TKN = '$Tkn', TKC = '$Tkc', CC = '$cancu', kltt = '$ketluan', cptl = '$chiphitl', gtth = '$giatrith'".
			" where TTQLTS = '".$mats."'";
			$qrsql = mysqli_query($con,$sql);			
		}
		else
		{
			$sql = "Insert into tblthanhly (TTQLTS,So,TKN,TKC,CC,kltt,cptl,gtth) Values ($mats,$So,$Tkn,$Tkc,$cancu,$ketluan,$chiphitl,$giatrith)";
			$qrsql = mysqli_query($con,$sql);
		}		
	}
	$artp = array(array("A","B","C","D"));
	$ctp = 0;
	$sql = "Select 	hoten,chucvucanbo,daidientp,thanhphan from tblthanhphantl where ttthanhly = '" . $ttthanhly . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$artp[$ctp][0] = $row['hoten'];
		$artp[$ctp][1] = $row['chucvucanbo'];
		$artp[$ctp][2] = $row['daidientp'];
		$artp[$ctp][3] = $row['thanhphan'];
		$ctp++;
	}	
	function kt($mats)
	{
		global $con;
		$kq = "";
		$sql = "Select * From taisanthanhly Where mataisanthanhly = '" . $mats . "'";
		$qrsql = mysqli_query($con,$sql);
		if($qrsql)
			$kq = "C";
		return $kq;
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
		<td class="csB6E29E9B" colspan="14" rowspan="2" style="width:348px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>tendv</nobr></td>
		<td class="cs550435DA" colspan="7" style="width:263px;height:17px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;C53&nbsp;-&nbsp;HD</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td class="cs101A94F7" colspan="7" rowspan="4" style="width:263px;height:52px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19/2006/QĐ-BTC&nbsp;ng&#224;y</nobr><br/><nobr>30/03/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC&nbsp;v&#224;&nbsp;sửa&nbsp;đổi,&nbsp;bổ</nobr><br/><nobr>sung&nbsp;theo&nbsp;th&#244;ng&nbsp;tư&nbsp;số&nbsp;185/2010/TT-BTC)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:81px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ&nbsp;phận:</nobr></td>
		<td class="csB6E29E9B" colspan="14" style="width:348px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>bophan</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:177px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;ĐV&nbsp;c&#243;&nbsp;QH&nbsp;với&nbsp;NS:</nobr></td>
		<td class="csB6E29E9B" colspan="13" style="width:252px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>madvqhns</nobr></td>
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
		<td class="cs5DE5F832" colspan="11" style="width:273px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>NTBB</nobr></td>
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
		<td class="cs5DE5F832" colspan="22" style="width:674px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $cancu; ?></nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="cs5DE5F832" colspan="15" style="width:425px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>về&nbsp;việc&nbsp;thanh&nbsp;l&#253;&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định.</nobr></td>
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
		$nggia =0;$hm =0;
		$sql = "Select * From tblqlts Where TTQLTS = '" . $mats . "'";
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
			echo "<td class='cs1698ECB3' colspan='5' style='width:150px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". $row['ngaysudung']."</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:192px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>Số&nbsp;thẻ&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:201px;height:20px;'></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:21px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:162px;height:21px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Nguy&#234;n&nbsp;gi&#225;&nbsp;TSCĐ</nobr></td>";
			$nggia  = kieudouble($row['ngansach']) + kieudouble($row['nguonkhac']);
			echo "<td class='cs1698ECB3' colspan='19' style='width:543px;height:21px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>". dinhdangso($nggia)."</nobr></td>";
		echo "</tr>";
		}
		$sql = "Select sotien, sodu From tblhaomon Where TTQLTS = '" . $mats . "'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
		$hm = kieudouble($row['sotien']) + kieudouble($row['sodu']);		
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;hao&nbsp;m&#242;n&nbsp;đ&#227;&nbsp;tr&#237;ch&nbsp;đến&nbsp;thời&nbsp;điểm&nbsp;thanh&nbsp;l&#253;</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".dinhdangso(hm)."</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:20px;'></td>";
			echo "<td></td>";
			echo "<td class='cs62AA4CC9' colspan='10' style='width:341px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;c&#242;n&nbsp;lại&nbsp;của&nbsp;TSCĐ</nobr></td>";
			echo "<td class='cs1698ECB3' colspan='13' style='width:364px;height:20px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".dinhdangso($nggia - $hm)."</nobr></td>";
		echo "</tr>";
		}
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
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>HTTBTL</nobr></td>
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
		<td class="cs1698ECB3" colspan="4" style="width:142px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr> <?php echo $chiphitl; ?> </nobr></td>
		<td class="cs62AA4CC9" colspan="6" style="width:115px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>(viết&nbsp;bằng&nbsp;chữ)</nobr></td>
		<td class="cs1698ECB3" colspan="8" style="width:276px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo docso($chiphitl); ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" style="width:170px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Gi&#225;&nbsp;trị&nbsp;thu&nbsp;hồi:</nobr></td>
		<td class="cs1698ECB3" colspan="4" style="width:142px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $giatrith; ?></nobr></td>
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
		<td class="cs62AA4CC9" colspan="12" style="width:364px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>ngaythangtl</nobr></td>
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
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>TTDV</nobr></td>
		<td class="csB6E29E9B" colspan="12" style="width:364px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>HTKTT</nobr></td>
	</tr>
</table>
</body>
</html>