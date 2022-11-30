<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs44DA3238 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs7DC1BDF5 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs244ACD9A {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs1DB80D35 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs8556A6FD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csC9E98832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs434EF778 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs260D573 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:17px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
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
<div class="in" style="margin-left: 1100px;">
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
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:46px;"></td>
		<td style="height:0px;width:144px;"></td>
		<td style="height:0px;width:2px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:33px;"></td>
		<td style="height:0px;width:24px;"></td>
		<td style="height:0px;width:78px;"></td>
		<td style="height:0px;width:18px;"></td>
		<td style="height:0px;width:69px;"></td>
		<td style="height:0px;width:27px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:56px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:238px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ,&nbsp;cơ&nbsp;quan&nbsp;TW,&nbsp;tỉnh,&nbsp;th&#224;nh&nbsp;phố:</nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:387px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3]; ?></nobr></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="5" style="width:333px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Biểu&nbsp;số&nbsp;01</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:94px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:531px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2]; ?></nobr></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" rowspan="2" style="width:333px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;k&#232;m&nbsp;theo&nbsp;th&#244;ng&nbsp;tư&nbsp;số&nbsp;112/2006/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;27/12/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;Bộ&nbsp;T&#224;i&nbsp;Ch&#237;nh)</nobr></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs260D573" colspan="17" style="width:1041px;height:22px;line-height:20px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs2C853136" colspan="17" style="width:1041px;height:23px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td style="width:0px;height:23px;"></td>
		<td class="cs2C853136" colspan="17" style="width:1041px;height:23px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>BẢNG&nbsp;TỔNG&nbsp;HỢP&nbsp;DANH&nbsp;MỤC&nbsp;T&#192;I&nbsp;SẢN&nbsp;ĐỀ&nbsp;NGHỊ&nbsp;TRANG&nbsp;CẤP</nobr></td>
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
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	//Tiêu đề
		echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:42px;'></td>";
			echo "<td class='cs44DA3238' style='width:46px;height:41px;'></td>";
			echo "<td class='cs1DB80D35' colspan='3' style='width:191px;height:41px;'></td>";
			echo "<td class='cs425CAA45' colspan='3' style='width:249px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Hiện&nbsp;c&#243;&nbsp;tại&nbsp;đơn&nbsp;vị</nobr><br/><nobr>(Đang&nbsp;quản&nbsp;l&#253;&nbsp;sử&nbsp;dụng)</nobr></td>";
			echo "<td class='cs425CAA45' colspan='9' style='width:498px;height:40px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Đề&nbsp;nghị&nbsp;trang&nbsp;cấp</nobr></td>";
			echo "<td class='cs1DB80D35' style='width:55px;height:41px;'></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:28px;'></td>";
			echo "<td class='cs244ACD9A' style='width:46px;height:28px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Số</nobr></td>";
			echo "<td class='csC9E98832' colspan='3' style='width:191px;height:28px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>T&#234;n&nbsp;t&#224;i&nbsp;sản</nobr></td>";
			echo "<td class='cs434EF778' style='width:57px;height:28px;'></td>";
			echo "<td class='cs434EF778' style='width:95px;height:28px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>";
			echo "<td class='cs434EF778' style='width:95px;height:28px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Gi&#225;&nbsp;trị&nbsp;c&#242;n&nbsp;lại</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='6' style='width:248px;height:27px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Mua&nbsp;sắm</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='3' style='width:249px;height:27px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tiếp&nbsp;nhận</nobr></td>";
			echo "<td class='csC9E98832' style='width:55px;height:28px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Ghi</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:61px;'></td>";
			echo "<td class='csDC952B64' style='width:46px;height:60px;line-height:18px;text-align:center;vertical-align:top;'><nobr>TT</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='3' style='width:191px;height:60px;'></td>";
			echo "<td class='cs8556A6FD' style='width:57px;height:60px;line-height:18px;text-align:center;vertical-align:top;'><nobr>Số</nobr><br/><nobr>&nbsp;lượng</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:top;'><nobr>theo&nbsp;SSKT</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:top;'><nobr>theo&nbsp;SSKT</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr><br/></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:56px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Chủng&nbsp;loại,</nobr><br/><nobr>cấp&nbsp;hạng</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>dự&nbsp;to&#225;n</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:57px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Chủng&nbsp;loại,</nobr><br/><nobr>cấp&nbsp;hạng</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:60px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>dự&nbsp;to&#225;n</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs16D304E1' style='width:55px;height:60px;line-height:18px;text-align:center;vertical-align:top;'><nobr>ch&#250;</nobr></td>";
		echo "</tr>";
		
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct madonvi,tendv from tbltrangcap where madonvi Like '$msdv%' and ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){
		//Tên đơn vị
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:25px;'></td>";
			echo "<td class='cs16D304E1' colspan='17' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
			echo "</tr>";
		//
		$sqldn = "Select * from tbltrangcap where madonvi = '$_madv[ma]' and ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$querydn=mysqli_query($con,$sqldn);
		$dn =  array(array("A","B","C",0,0,0,0,0,0,0));
		$cs=0;$i=0;
		$tcclms = 0;$tccltn = 0;
		while($rowdn=mysqli_fetch_array($querydn))		
		{
			$dn[$cs][0] = $rowdn['tengoi'];
			if ($rowdn['hinhthuc'] == "Mua sắm")
			{
				$dn[$cs][1] = $rowdn['caphang'];
				$dn[$cs][2] = "";
				$dn[$cs][6] = $rowdn['soluong'];
				$dn[$cs][7] = $rowdn['sotien'];
				$dn[$cs][8] = 0;
				$dn[$cs][9] = 0;
				$tcclms = $tcclms + $rowdn['sotien'];
			}
			else
			{	
				$dn[$cs][1] = "";
				$dn[$cs][2] = $rowdn['caphang'];
				$dn[$cs][6] = 0;
				$dn[$cs][7] = 0;
				$dn[$cs][8] = $rowdn['soluong'];
				$dn[$cs][9] = $rowdn['sotien'];
				$tccltn = $tccltn + $rowdn['sotien'];
			}
			$dn[$cs][3] = 0;
			$dn[$cs][4] = 0;
			$dn[$cs][5] = 0;		
			$cs = $cs + 1;		
		}	
		$ten1="";$ten2="";$ten3="";$sl6=0;$sl7=0;$sl8=0;$sl9=0;$stt =0;
		for($i=0;$i<$cs;$i++)
		{	
			$stt++;
			$ten1 = $dn[$i][0];$ten2=$dn[$i][1];$ten3=$dn[$i][2];$sl6=dinhdangso($dn[$i][6]);$sl7=dinhdangso($dn[$i][7]);$sl8=dinhdangso($dn[$i][8]);$sl9=dinhdangso($dn[$i][9]);
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:27px;'></td>";
			echo "<td class='cs7DC1BDF5' style='width:46px;height:26px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='3' style='width:191px;height:26px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$ten1</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:57px;height:26px;'></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:26px;'></td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:26px;'></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:56px;height:26px;text-align:center;'>$sl6</td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:95px;height:26px;text-align:left;'>$ten2</td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:95px;height:26px;text-align:right;'>$sl7</td>";
			echo "<td class='cs8556A6FD' style='width:57px;height:26px;text-align:center;'>$sl8</td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:26px;text-align:left;'>$ten3</td>";
			echo "<td class='cs8556A6FD' style='width:95px;height:26px;text-align:right;'>$sl9</td>";
			echo "<td class='cs8556A6FD' style='width:55px;height:26px;'></td>";
		echo "</tr>";
		}
		$tcclms = dinhdangso($tcclms);$tccltn = dinhdangso($tccltn);
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:27px;'></td>";
			echo "<td class='csDC952B64' style='width:46px;height:26px;'></td>";
			echo "<td class='cs16D304E1' colspan='3' style='width:191px;height:26px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
			echo "<td class='cs16D304E1' style='width:57px;height:26px;'></td>";
			echo "<td class='cs16D304E1' style='width:95px;height:26px;'></td>";
			echo "<td class='cs16D304E1' style='width:95px;height:26px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:56px;height:26px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:95px;height:26px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:95px;height:26px;text-align:right;'>$tcclms</td>";
			echo "<td class='cs16D304E1' style='width:57px;height:26px;'></td>";
			echo "<td class='cs16D304E1' style='width:95px;height:26px;'></td>";
			echo "<td class='cs16D304E1' style='width:95px;height:26px;text-align:right;'>$tccltn</td>";
			echo "<td class='cs16D304E1' style='width:55px;height:26px;'></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:9px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td class="cs62AA4CC9" colspan="8" style="width:523px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="9" style="width:522px;height:20px;text-align:center;vertical-align:middle;font-style:italic;"><?php echo $madv[7].", ngày ... tháng ... năm ......"; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:523px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;lập&nbsp;biểu</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:523px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="9" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:523px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="9" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:78px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:523px;height:78px;text-align:center;vertical-align:middle;"><?php echo $madv[4]; ?></td>
		<td class="csB6E29E9B" colspan="9" style="width:522px;height:78px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>