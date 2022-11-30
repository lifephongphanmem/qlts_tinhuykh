<?php require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php"); 
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csF0462E56 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs7DC1BDF5 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs293F1D1D {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs9ABF747E {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs8556A6FD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs1D0A4484 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
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
<div class="in" style="margin-left: 800px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<?php
	$madv = $_GET["id"];
	$ma = explode('>',$madv);
	$ab = trim($ma[0]);	
	$mats = "";
	$cancu = "";
	$tents = "";
	$nsx = "";
	$bpsx = "";	
	$dcsd = "";
	$lddc = "";	
	$now = getdate();
	$cxuat = "Công xuất (diện tích thiết kế): ";			
	$ctugg = "Ghi giảm TSCĐ chứng từ số: ";
	$ldogg = "Lý do ghi giảm: ";	
	$ngaylap = "Ngày ". $now["mday"] . " tháng " . $now["mon"] . " năm " . $now["year"]; 	
	if(isset($_POST['taothe']))
	{
		$cancu = "Căn cứ " . $_POST['cancu'];
		$dcsd = "Đình chỉ sử dụng TSCĐ: " . $_POST['dcsd'];
		$lddc = "Lý do đình chỉ: " . $_POST['lddc'];	
		$mats = $_POST['bookId'];		
	}
	$ar = array(array("A","B",0,"D",0,0));
	$arpt = array(array("","",0,0));
	$c=0;
	$cpt=0;
	$sql = "SELECT TTQLTS, ngaynhap, ngansach+nguonkhac as nguyengia FROM tblqlts Where TTQLTS = '" . $mats . "' and madonvi = '". $ab ."'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$ar[$c][0] = $row['TTQLTS'];
		$ar[$c][1] = $row['ngaynhap'];
		$ar[$c][2] = $row['nguyengia'];
		$ar[$c][3] = "";
		$ar[$c][4] = "";
		$ar[$c][5] = "";
		$c++;
	}
	$sql = "SELECT namhaomon, sotien,sodu FROM tblhaomon Where TTQLTS = '" . $mats . "' and madonvi = '". $ab ."'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$ar[$c][0] = "";
		$ar[$c][1] = "";
		$ar[$c][2] = "";
		$ar[$c][3] = $row['namhaomon'];
		$ar[$c][4] = $row['sotien'];
		$ar[$c][5] = $row['sotien'] +  $row['sodu'];
		$c++;
	}
	$sql = "Select tenphutung,dovitinh,soluong,sotien From tblphutung where TTQLTS = '". $mats ."' and madonvi = '". $ab ."'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$arpt[$cpt][0] = $row['tenphutung'];
		$arpt[$cpt][1] = $row['dovitinh'];
		$arpt[$cpt][2] = $row['soluong'];
		$arpt[$cpt][3] = $row['sotien'];
		$cpt++;
	}
	$sql  =  "Select distinct mataisan,tentaisan,tenchitiet,NUOCSX,namsanxuat,noidung,ngaysudung,CAPH from tblqlts Where TTQLTS = '" . $mats . "' and madonvi = '".$ab."'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$tents = "Tên, ký hiệu mã, quy cách (cấp hạng) TSCĐ: " . $row['tentaisan'] . " - " . $row['CAPH'] . " Số hiệu TSCĐ: " . $row['CAPH'];
		$nsx = "Nước sản xuất (xây dựng): " . $row['NUOCSX'] . " ............năm sản xuất: " . $row['namsanxuat'];
		$bpsx = "Bộ phận quản lý, sử dụng: " . $row['noidung'] . " ..............năm đưa vào sử dụng: " . ngaythang($row['ngaysudung']);		
	}
?>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:67px;"></td>
		<td style="height:0px;width:28px;"></td>
		<td style="height:0px;width:59px;"></td>
		<td style="height:0px;width:91px;"></td>
		<td style="height:0px;width:101px;"></td>
		<td style="height:0px;width:37px;"></td>
		<td style="height:0px;width:68px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:28px;"></td>
		<td style="height:0px;width:56px;"></td>
		<td style="height:0px;width:50px;"></td>
		<td style="height:0px;width:110px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="csE9F2AA97" colspan="7" rowspan="2" style="width:447px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $ma[2];?></nobr></td>
		<td class="cs550435DA" colspan="6" style="width:283px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;sổ&nbsp;S12-DNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td class="cs101A94F7" colspan="6" rowspan="3" style="width:283px;height:44px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;k&#232;m&nbsp;theo&nbsp;QĐ&nbsp;số&nbsp;48/2006/QĐ-BTC&nbsp;ng&#224;y</nobr><br/><nobr>14/9/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="7" style="width:447px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $ma[7];?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:17px;"></td>
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
		<td style="width:0px;height:26px;"></td>
		<td class="csE5855143" colspan="13" style="width:730px;height:26px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>THẺ&nbsp;T&#192;I&nbsp;SẢN&nbsp;CỐ&nbsp;ĐỊNH</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs5DE5F832" colspan="13" style="width:730px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr><?php echo $ngaylap; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:16px;"></td>
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
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $cancu; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $tents; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $nsx; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:21px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $bpsx; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $cxuat; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $dcsd; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="13" style="width:734px;height:20px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $lddc; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:12px;"></td>
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
	</table>	
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csF0462E56" rowspan="2" style="width:65px;height:25px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;hiệu</nobr><br/><nobr>chứng</nobr><br/><nobr>từ</nobr></td>
		<td class="cs9ABF747E" colspan="6" style="width:383px;height:25px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n&nbsp;gi&#225;&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr></td>
		<td class="cs9ABF747E" colspan="6" style="width:282px;height:25px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị&nbsp;hao&nbsp;m&#242;n&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:41px;"></td>		
		<td class="cs8556A6FD" colspan="2" style="width:86px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ng&#224;y&nbsp;th&#225;ng</nobr><br/><nobr>năm</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:191px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Diễn&nbsp;giải</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:104px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>
		<td class="cs8556A6FD" colspan="3" style="width:66px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Năm</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:105px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>hao&nbsp;m&#242;n</nobr></td>
		<td class="cs8556A6FD" style="width:109px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Cộng&nbsp;dồn</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs7DC1BDF5" style="width:65px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>A</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:86px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>B</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:191px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>C</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:104px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="cs8556A6FD" colspan="3" style="width:66px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:105px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>3</nobr></td>
		<td class="cs8556A6FD" style="width:109px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>4</nobr></td>
	</tr>
	<?php
	foreach ($ar as $ar)
	{
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs7DC1BDF5' style='width:65px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$ar[0]."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:86px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".ngaythang($ar[1])."</nobr></td>";
		echo "<td class='cs1D0A4484' colspan='2' style='width:189px;height:23px;line-height:18px;text-align:left;vertical-align:middle;'><nobr></nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:104px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso(kieudouble($ar[2]))."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='3' style='width:66px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$ar[3]."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:105px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso(kieudouble($ar[4]))."</nobr></td>";
		echo "<td class='cs8556A6FD' style='width:109px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso(kieudouble($ar[5]))."</nobr></td>";
	echo "</tr>";
	}
	?>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="13" style="width:730px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Dụng&nbsp;cụ&nbsp;phụ&nbsp;t&#249;ng&nbsp;k&#232;m&nbsp;theo</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:43px;"></td>
		<td class="csF0462E56" colspan="2" style="width:93px;height:41px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>STT</nobr></td>
		<td class="cs9ABF747E" colspan="4" style="width:287px;height:41px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>T&#234;n,&nbsp;quy&nbsp;c&#225;ch&nbsp;dụng</nobr><br/><nobr>cụ,&nbsp;phụ&nbsp;t&#249;ng</nobr></td>
		<td class="cs9ABF747E" colspan="2" style="width:90px;height:41px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Đơn&nbsp;vị</nobr><br/><nobr>t&#237;nh</nobr></td>
		<td class="cs9ABF747E" colspan="3" style="width:99px;height:41px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;lượng</nobr></td>
		<td class="cs9ABF747E" colspan="2" style="width:159px;height:41px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs7DC1BDF5" colspan="2" style="width:93px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>A</nobr></td>
		<td class="cs8556A6FD" colspan="4" style="width:287px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>B</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:90px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>C</nobr></td>
		<td class="cs8556A6FD" colspan="3" style="width:99px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="cs8556A6FD" colspan="2" style="width:159px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
	</tr>
	<?php
	$stt = 0;
	foreach ($arpt as $arpt)
	{
	$stt++;
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs7DC1BDF5' colspan='2' style='width:93px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='4' style='width:287px;height:23px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$arpt[0]."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:90px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$arpt[1]."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='3' style='width:99px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso(kieudouble($arpt[2]))."</nobr></td>";
		echo "<td class='cs8556A6FD' colspan='2' style='width:159px;height:23px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso(kieudouble($arpt[3]))."</nobr></td>";
	echo "</tr>";
	}
	?>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:12px;"></td>
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
		<td class="cs5DE5F832" colspan="13" style="width:730px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $ctugg; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs5DE5F832" colspan="13" style="width:730px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo $ldogg; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:17px;"></td>
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
		<td class="cs62AA4CC9" colspan="4" style="width:245px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="5" style="width:245px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:244px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm&nbsp;.....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:245px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;lập&nbsp;biểu</nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:245px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:244px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:245px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="5" style="width:245px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="4" style="width:244px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:86px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:245px;height:86px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $ma[4];?></nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:245px;height:86px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $ma[5];?></nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:244px;height:86px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $ma[6];?></nobr></td>
	</tr>
</table>
</body>
</html>