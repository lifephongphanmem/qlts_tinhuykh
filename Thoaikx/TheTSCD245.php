<?php require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs8A77DDF0 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs2A8593E6 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs1698ECB3 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs2C853136 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:19px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
		   .in{
			  display: none !important;
		   }
	</style>
	<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 800px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$madv = $_GET["id"];	
	$ma = explode('>',$madv);		
	$so=""; $tentaisan=""; $thongso=""; $namsx = ""; $nuocsx =""; $ngaysudung="";$ngaynhap="";$nguyengia=0;$noidung="";
	$sql = "Select TTQLTS,tenchitiet,GCTS,namsanxuat,NUOCSX,ngaysudung,ngaynhap,ngansach,nguonkhac,noidung from tblqlts where TTQLTS = ".$ma[14];
	$qrsql= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$so=$row[0];
		$tentaisan=$row[1];
		$thongso = $row[2];
		$namsx = $row[3];
		$nuocsx = $row[4];
		$ngaysudung= substr($row[5],8,2)."/". substr($row[5],5,2) . "/".substr($row[5],0,4)  ;
		$ngaynhap = substr($row[6],8,2)."/". substr($row[6],5,2) . "/".substr($row[6],0,4)  ;
		$nguyengia = dinhdangso(($row[7] + $row[8])/1000);
		$noidung = $row[9];
	}
?>

<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:750px;height:418px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:432px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:288px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" style="width:428px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;đơn&nbsp;vị: <?php echo $ma[2];?></nobr></td>
		<td class="cs8A77DDF0" colspan="2" style="width:314px;height:23px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;01-TSCĐ/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" style="width:428px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;đơn&nbsp;vị: <?php echo $ma[1];?></nobr></td>
		<td class="cs2A8593E6" colspan="2" rowspan="2" style="width:314px;height:46px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;k&#232;m&nbsp;theo&nbsp;Th&#244;ng&nbsp;tư&nbsp;số&nbsp;245/2009/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;31/12/2009&nbsp;của&nbsp;Bộ&nbsp;T&#224;i&nbsp;ch&#237;nh)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" style="width:428px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Cơ&nbsp;quan&nbsp;quản&nbsp;l&#253;&nbsp;cấp&nbsp;tr&#234;n: <?php echo $ma[3];?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:26px;"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="cs2C853136" colspan="3" style="width:746px;height:25px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>THẺ&nbsp;T&#192;I&nbsp;SẢN&nbsp;CỐ&nbsp;ĐỊNH</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" colspan="3" style="width:746px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số: <?php echo $so;?>-TSCĐ/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>1.&nbsp;T&#234;n&nbsp;t&#224;i&nbsp;sản: <?php echo $tentaisan;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>2.&nbsp;Th&#244;ng&nbsp;số&nbsp;kỹ&nbsp;thuật: <?php echo $thongso;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>3.&nbsp;Năm&nbsp;sản&nbsp;xuất: <?php echo $namsx;?> Nước&nbsp;sản&nbsp;xuất: <?php echo $nuocsx;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>4.&nbsp;Thời&nbsp;gian&nbsp;đưa&nbsp;v&#224;o&nbsp;sử&nbsp;dụng: <?php echo $ngaysudung;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>5.&nbsp;Thời&nbsp;gian&nbsp;mua&nbsp;sắm: <?php echo $ngaynhap;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>6.&nbsp;Nguy&#234;n&nbsp;gi&#225;: <?php echo $nguyengia;?>&nbsp;(ng&#224;n&nbsp;đồng).</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs1698ECB3" colspan="3" style="width:748px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>7.&nbsp;T&#234;n&nbsp;người&nbsp;hoặc&nbsp;bộ&nbsp;phận&nbsp;trực&nbsp;tiếp&nbsp;sử&nbsp;dụng: <?php echo $noidung;?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" style="width:288px;height:24px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>............,&nbsp;ng&#224;y.....&nbsp;th&#225;ng.....&nbsp;năm&nbsp;......</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:35px;"></td>
		<td></td>
		<td></td>
		<td class="cs550435DA" style="width:288px;height:35px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>THỦ&nbsp;TRƯỞNG&nbsp;CƠ&nbsp;QUAN,</nobr><br/><nobr>TỔ&nbsp;CHỨC,&nbsp;ĐƠN&nbsp;VỊ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" style="width:288px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n&nbsp;v&#224;&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
</table>
</body>
</html>