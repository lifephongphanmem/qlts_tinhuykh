<?php include "$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csAE6773EC {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs9E02721E {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs9A9D4AA {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; }
		.cs79C72D74 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.csF9DCB330 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs3E52F49E {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.csD5F51E12 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; padding-left:2px;}
		.csAADA37C6 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; }
		.cs85CED65A {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-left:2px;}
		.cs265DCF67 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs11FFE362 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:italic; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs2C853136 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:19px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
		   .in{
			  display: none !important;
		   }
		}
	</style>
	<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 1000px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<?php	
	$madv = $_GET["id"];
	$ma = explode('>',$madv);		
	$ab = trim($ma[0]);
	$kiemke=$ma[13];	
	echo "<form role='form' method='POST' action = 'BbKKTSCD.php?id=$madv' class='form-horizontal form-groups-bordered'>";
	$TDKK = "";
	$SoBB = "";	
	$truongban="";
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sql = "Select GIO, PHUT, ngay1,sohieu from tblkiemke where TTkiemke = '" . $kiemke . "'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{		
		$TDKK = $row['GIO']." giờ ".$row['PHUT']. " phút, ngày ".substr($row['ngay1'],8,2) ." tháng ". substr($row['ngay1'],5,2) .  " năm ". substr($row['ngay1'],0,4);	
		$SoBB = "Số hiệu biên bản: ". $row['sohieu'];	
	}
	$artp = array(array("A","B","C","D"));
	$ar = array(array("A","B","C","D",0,0,0,0,0,0,0,0,0,0));
	$ctp = 0;
	$c = 0;
	$sql = "Select 	hotencb,chucvucanbo,daidientp,thanhphan from tblthanhphankk where TTkiemke = '" . $kiemke . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['thanhphan'] == "Trưởng ban")
			$truongban = $row['hotencb'];
		$artp[$ctp][0] = $row['hotencb'];
		$artp[$ctp][1] = $row['chucvucanbo'];
		$artp[$ctp][2] = $row['daidientp'];
		$artp[$ctp][3] = $row['thanhphan'];
		$ctp++;
	}	
	$sql = "Select tblkiemken.tenchitiet,tblqlts.mataisan,tblqlts.noidung,tblkiemken.nhom1sllt,".
	" tblkiemken.nhom1nglt,tblkiemken.nhom1cllt,tblkiemken.nhom2sltt,tblkiemken.nhom2ngtt,tblkiemken.nhom2cltt,".
	" tblkiemken.nhom3slcl,tblkiemken.nhom3ngcl,tblkiemken.nhom3clcl, tblkiemken.chitiethinhthai".
	" From tblkiemken inner join tblqlts on tblkiemken.TTQLTS = tblqlts.TTQLTS".
	" where tblkiemken.TTkiemke = '" . $kiemke . "' and tblqlts.mataisan Not like 'C%'";	
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ar[$c][0] = $row['tenchitiet'];
		$ar[$c][1] = $row['mataisan'];
		$ar[$c][2] = $row['noidung'];
		$ar[$c][3] = $row['chitiethinhthai'];
		$ar[$c][4] = $row['nhom1sllt'];
		$ar[$c][5] = $row['nhom1nglt'];
		$ar[$c][6] = $row['nhom1cllt'];
		$ar[$c][7] = $row['nhom2sltt'];
		$ar[$c][8] = $row['nhom2ngtt'];
		$ar[$c][9] = $row['nhom2cltt'];
		$ar[$c][10] = $row['nhom3slcl'];
		$ar[$c][11] = $row['nhom3ngcl'];
		$ar[$c][12] = $row['nhom3clcl'];	
		$c++;
	}	
?>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:29px;"></td>
		<td style="height:0px;width:55px;"></td>
		<td style="height:0px;width:45px;"></td>
		<td style="height:0px;width:65px;"></td>
		<td style="height:0px;width:3px;"></td>
		<td style="height:0px;width:75px;"></td>
		<td style="height:0px;width:87px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:49px;"></td>
		<td style="height:0px;width:24px;"></td>
		<td style="height:0px;width:74px;"></td>
		<td style="height:0px;width:39px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:45px;"></td>
		<td style="height:0px;width:4px;"></td>
		<td style="height:0px;width:71px;"></td>
		<td style="height:0px;width:29px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:79px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:18px;"></td>
		<td style="height:0px;width:71px;"></td>
		<td style="height:0px;width:75px;"></td>
		<td style="height:0px;width:41px;"></td>
		<td style="height:0px;width:1px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="csE9F2AA97" colspan="15" rowspan="2" style="width:595px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;đơn&nbsp;vị: </nobr> <?php echo $ma[2]?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs550435DA" colspan="6" style="width:305px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;C53&nbsp;-&nbsp;HD</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="cs101A94F7" colspan="6" rowspan="4" style="width:305px;height:58px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19/2006/QĐ-BTC</nobr><br/><nobr>ng&#224;y&nbsp;30/03/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC&nbsp;v&#224;&nbsp;sửa&nbsp;đổi,</nobr><br/><nobr>bổ&nbsp;sung&nbsp;theo&nbsp;th&#244;ng&nbsp;tư&nbsp;số&nbsp;185/2010/TT-BTC)</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="15" style="width:595px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ&nbsp;phận: </nobr></td>
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
		<td class="csE9F2AA97" colspan="15" style="width:595px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;DV&nbsp;QHNS: </nobr><?php echo $ma[1]?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:11px;"></td>
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
		<td style="width:0px;height:8px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2C853136" colspan="27" style="width:1075px;height:24px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>BI&#202;N&nbsp;BẢN&nbsp;KIỂM&nbsp;K&#202;&nbsp;TSCĐ</nobr></td>
		<td></td>
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
		<td style="width:0px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:130px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Thời&nbsp;điểm&nbsp;kiểm&nbsp;k&#234;:</nobr></td>
		<td class="cs62AA4CC9" colspan="10" style="width:447px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $TDKK; ?> </nobr></td>
		<td class="cs62AA4CC9" colspan="14" style="width:503px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $SoBB; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="28" style="width:1080px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Ban&nbsp;kiểm&nbsp;k&#234;&nbsp;gồm:</nobr></td>
	</tr>
	<?php
	foreach ($artp as $artp)
	{
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:24px;'></td>";
			echo "<td class='cs62AA4CC9' colspan='3' style='width:85px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>&#212;ng&nbsp;(B&#224;):</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='5' style='width:275px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>".$artp[0]."</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='3' style='width:74px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>Chức&nbsp;vụ:</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='2' style='width:113px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>".$artp[1]."</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:98px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>Đại&nbsp;diện:</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='4' style='width:129px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>".$artp[2]."</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='2' style='width:100px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>Th&#224;nh&nbsp;phần:</nobr></td>";
			echo "<td class='cs62AA4CC9' colspan='5' style='width:206px;height:24px;line-height:18px;text-align:left;vertical-align:top;'><nobr>".$artp[3]."</nobr></td>";
		echo "</tr>";
	}
	?>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs62AA4CC9" colspan="27" style="width:1079px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đ&#227;&nbsp;kiểm&nbsp;k&#234;&nbsp;TSCĐ,&nbsp;kết&nbsp;quả&nbsp;như&nbsp;sau:</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:39px;"></td>
		<td></td>
		<td class="csAE6773EC" rowspan="2" style="width:27px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Số</nobr><br/><nobr>TT</nobr></td>
		<td class="csF9DCB330" rowspan="2" colspan="4" style="width:167px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>T&#234;n&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr></td>
		<td class="csF9DCB330" rowspan="2" style="width:74px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>M&#227;&nbsp;số</nobr></td>
		<td class="csF9DCB330" rowspan="2" colspan="2" style="width:87px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Nơi&nbsp;sử&nbsp;dụng</nobr></td>
		<td class="csF9DCB330" colspan="7" style="width:238px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Theo&nbsp;sổ&nbsp;kế&nbsp;to&#225;n</nobr></td>
		<td class="csF9DCB330" colspan="6" style="width:252px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Thực&nbsp;tế&nbsp;kiểm&nbsp;k&#234;</nobr></td>
		<td class="csF9DCB330" colspan="4" style="width:184px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Ch&#234;nh&nbsp;lệch</nobr></td>
		<td class="csF9DCB330" rowspan="2" colspan="2" style="width:41px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Ghi</nobr><br/><nobr>ch&#250;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:39px;"></td>
		<td></td>		
		<td class="cs3E52F49E" style="width:48px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Số</nobr><br/><nobr>lượng</nobr></td>
		<td class="cs3E52F49E" colspan="2" style="width:97px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n</nobr><br/><nobr>gi&#225;</nobr></td>
		<td class="cs3E52F49E" colspan="4" style="width:91px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>c&#242;n&nbsp;lại</nobr></td>
		<td class="cs3E52F49E" colspan="2" style="width:48px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Số</nobr><br/><nobr>lượng</nobr></td>
		<td class="cs3E52F49E" colspan="2" style="width:99px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n</nobr><br/><nobr>gi&#225;</nobr></td>
		<td class="cs3E52F49E" colspan="2" style="width:103px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>&nbsp;c&#242;n&nbsp;lại</nobr></td>
		<td class="cs3E52F49E" colspan="2" style="width:38px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Số</nobr><br/><nobr>lượng</nobr></td>
		<td class="cs3E52F49E" style="width:70px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n</nobr><br/><nobr>gi&#225;</nobr></td>
		<td class="cs3E52F49E" style="width:74px;height:38px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>c&#242;n&nbsp;lại</nobr></td>
		
	</tr>
	<?php
	$stt = 0;
	$groupname = "";
	$C1ng = 0; $C1cl = 0; $C2ng = 0; $C2cl = 0; $C3ng = 0; $C3cl = 0;
	foreach ($ar as $ar1)
	{			
		if($ar1[3] != $groupname)
		{			
			echo "<tr style='vertical-align:top;'>";
				echo "<td style='width:0px;height:26px;'></td>";
				echo "<td></td>";
				echo "<td class='cs9E02721E' style='width:27px;height:25px;'></td>";
				echo "<td class='csD5F51E12' colspan='4' style='width:165px;height:25px;line-height:17px;text-align:left;vertical-align:middle;'><nobr>".$ar1[3]."</nobr></td>";
				echo "<td class='cs3E52F49E' style='width:74px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:87px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' style='width:48px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:97px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='4' style='width:91px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:48px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:99px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:103px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:38px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' style='width:70px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' style='width:74px;height:25px;'></td>";
				echo "<td class='cs3E52F49E' colspan='2' style='width:41px;height:25px;'></td>";
			echo "</tr>";			
			$groupname=$ar1[3];		
			$T1sl=0; $T1ng=0;$T1cl=0;$T2sl=0; $T2ng=0;$T2cl=0;$T3sl=0; $T3ng=0;$T3cl=0;
			foreach ($ar as $ar2)
			{							
				if($ar2[3] == $groupname)
				{
					$T1sl += kieudouble($ar2[4]);					
					$T1ng += kieudouble($ar2[5]);
					$T1cl += kieudouble($ar2[6]);
					$T2sl += kieudouble($ar2[7]);
					$T2ng += kieudouble($ar2[8]);
					$T2cl += kieudouble($ar2[9]);
					$T3sl += kieudouble($ar2[10]);
					$T3ng += kieudouble($ar2[11]);
					$T3cl += kieudouble($ar2[12]);					
					$C1ng += kieudouble($ar2[5]);
					$C1cl += kieudouble($ar2[6]);			
					$C2ng += kieudouble($ar2[8]);
					$C2cl += kieudouble($ar2[9]);			
					$C3ng += kieudouble($ar2[11]);
					$C3cl += kieudouble($ar2[12]);	
				$stt ++;				
				echo "<tr style='vertical-align:top;'>";
					echo "<td style='width:0px;height:39px;'></td>";
					echo "<td></td>";
					echo "<td class='cs9A9D4AA' style='width:27px;height:38px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
					echo "<td class='cs85CED65A' colspan='4' style='width:165px;height:38px;line-height:17px;text-align:left;vertical-align:middle;'><nobr>".$ar2[0]."</nobr></td>";
					echo "<td class='csAADA37C6' style='width:74px;height:38px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".$ar2[1]."</nobr></td>";
					echo "<td class='cs85CED65A' colspan='2' style='width:85px;height:38px;line-height:17px;text-align:left;vertical-align:middle;'><nobr>".$ar2[2]."</nobr></td>";
					echo "<td class='csAADA37C6' style='width:48px;height:38px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar2[4])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:97px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[5])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='4' style='width:91px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[6])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:48px;height:38px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar2[7])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:99px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[8])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:103px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[9])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:38px;height:38px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar2[10])."</nobr></td>";
					echo "<td class='csAADA37C6' style='width:70px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[11])."</nobr></td>";
					echo "<td class='csAADA37C6' style='width:74px;height:38px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar2[12])."</nobr></td>";
					echo "<td class='csAADA37C6' colspan='2' style='width:41px;height:38px;'></td>";
				echo "</tr>";
				echo "<tr style='vertical-align:top;'>";
				}
			}					
			echo "<td style='width:0px;height:22px;'></td>";
			echo "<td></td>";
			echo "<td class='cs9E02721E' style='width:27px;height:22px;'></td>";
			echo "<td class='cs3E52F49E' colspan='7' style='width:330px;height:22px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
			echo "<td class='cs3E52F49E' style='width:48px;height:22px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($T1sl)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:97px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T1ng)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='4' style='width:91px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T1cl)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:48px;height:22px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($T2sl)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:99px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T2ng)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:103px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T2cl)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:38px;height:22px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($T3sl)."</nobr></td>";
			echo "<td class='cs3E52F49E' style='width:70px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T3ng)."</nobr></td>";
			echo "<td class='cs3E52F49E' style='width:74px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($T3cl)."</nobr></td>";
			echo "<td class='cs3E52F49E' colspan='2' style='width:41px;height:22px;'></td>";
		}
	}
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:22px;'></td>";
		echo "<td></td>";
		echo "<td class='cs9E02721E' style='width:27px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' colspan='3' style='width:164px;height:22px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:77px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:87px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' style='width:48px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:97px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C1ng)."</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='4' style='width:91px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C1cl)."</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:48px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:99px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C2ng)."</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:103px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C2cl)."</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:38px;height:22px;'></td>";
		echo "<td class='cs3E52F49E' style='width:70px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C3ng)."</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:74px;height:22px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($C3cl)."</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:41px;height:22px;'></td>";
	echo "</tr>";
	echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
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
		<td class="csB6E29E9B" colspan="8" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
		<td class="csB6E29E9B" colspan="10" style="width:359px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Trưởng&nbsp;ban&nbsp;kiểm&nbsp;k&#234;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:18px;"></td>
		<td></td>
		<td class="cs11FFE362" colspan="8" style="width:360px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(&#221;&nbsp;kiến&nbsp;giải&nbsp;quyết&nbsp;số&nbsp;ch&#234;nh&nbsp;lệch)</nobr></td>
		<td class="cs11FFE362" colspan="10" style="width:359px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs11FFE362" colspan="9" style="width:360px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:17px;"></td>
		<td></td>
		<td class="cs11FFE362" colspan="8" style="width:360px;height:17px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
		<td class="cs77A39B34" colspan="10" style="width:359px;height:17px;"></td>
		<td class="cs77A39B34" colspan="9" style="width:360px;height:17px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:89px;"></td>
		<td></td>
		<td class="csB6E29E9B" colspan="8" style="width:360px;height:89px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $ma[6]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="10" style="width:359px;height:89px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $ma[5]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:360px;height:89px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $truongban; ?></nobr></td>
	</tr>
</table>
</body>
</html>