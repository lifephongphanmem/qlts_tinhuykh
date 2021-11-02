<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs4B17AE5C {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs7DC1BDF5 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs293F1D1D {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs54F31D69 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs8556A6FD {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs434EF778 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs4D6B429C {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:italic; padding-left:2px;padding-right:2px;}
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
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:47px;"></td>
		<td style="height:0px;width:47px;"></td>
		<td style="height:0px;width:144px;"></td>
		<td style="height:0px;width:98px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:105px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:83px;"></td>
		<td style="height:0px;width:20px;"></td>
		<td style="height:0px;width:38px;"></td>
		<td style="height:0px;width:36px;"></td>
		<td style="height:0px;width:69px;"></td>
		<td style="height:0px;width:106px;"></td>
		<td style="height:0px;width:105px;"></td>
		<td style="height:0px;width:65px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:238px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ,&nbsp;cơ&nbsp;quan&nbsp;TW,&nbsp;tỉnh,&nbsp;th&#224;nh&nbsp;phố:</nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:387px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3]; ?></nobr></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="4" style="width:345px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Biểu&nbsp;số&nbsp;04</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:94px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:531px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2]; ?></nobr></td>
		<td></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="4" rowspan="2" style="width:345px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;k&#232;m&nbsp;theo&nbsp;th&#244;ng&nbsp;tư&nbsp;số&nbsp;112/2006/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;27/12/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;Bộ&nbsp;T&#224;i&nbsp;Ch&#237;nh)</nobr></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs260D573" colspan="15" style="width:1040px;height:22px;line-height:20px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs2C853136" colspan="15" style="width:1040px;height:23px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
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
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs2C853136" colspan="15" style="width:1040px;height:23px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>BẢNG&nbsp;TỔNG&nbsp;HỢP&nbsp;DANH&nbsp;MỤC&nbsp;T&#192;I&nbsp;SẢN&nbsp;ĐỀ&nbsp;NGHỊ&nbsp;XỬ&nbsp;L&#221;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs4D6B429C" colspan="15" style="width:1040px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(B&#225;n,&nbsp;điều&nbsp;chuyển,&nbsp;thu&nbsp;hồi,&nbsp;thanh&nbsp;l&#253;)</nobr></td>
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
		<td></td>
		<td></td>
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	//Tiêu đề
		echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:21px;'></td>";
			echo "<td class='cs4B17AE5C' style='width:45px;height:20px;'></td>";
			echo "<td class='cs54F31D69' colspan='3' style='width:288px;height:20px;'></td>";
			echo "<td class='cs54F31D69' colspan='4' style='width:268px;height:20px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Hiện&nbsp;c&#243;&nbsp;tại&nbsp;đơn&nbsp;vị</nobr></td>";
			echo "<td class='cs54F31D69' colspan='6' style='width:373px;height:20px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Đề&nbsp;nghị&nbsp;xử&nbsp;l&#253;</nobr></td>";
			echo "<td class='cs54F31D69' style='width:64px;height:20px;'></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:21px;'></td>";
			echo "<td class='cs293F1D1D' style='width:45px;height:21px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Số</nobr></td>";
			echo "<td class='cs434EF778' colspan='3' style='width:288px;height:21px;'></td>";
			echo "<td class='cs8556A6FD' colspan='4' style='width:268px;height:20px;line-height:18px;text-align:center;vertical-align:top;'><nobr>(Đang&nbsp;quản&nbsp;l&#253;&nbsp;sử&nbsp;dụng)</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='6' style='width:373px;height:20px;line-height:18px;text-align:center;vertical-align:top;'><nobr>(B&#225;n,&nbsp;điều&nbsp;chuyển,&nbsp;thu&nbsp;hồi,&nbsp;thanh&nbsp;l&#253;)</nobr></td>";
			echo "<td class='cs434EF778' style='width:64px;height:21px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Ghi</nobr></td>";
		echo "</tr>";
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:60px;'></td>";
			echo "<td class='cs7DC1BDF5' style='width:45px;height:59px;line-height:18px;text-align:center;vertical-align:top;'><nobr>TT</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='3' style='width:288px;height:59px;line-height:18px;text-align:center;vertical-align:top;'><nobr>T&#234;n&nbsp;t&#224;i&nbsp;sản</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:57px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:104px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr><br/><nobr>theo&nbsp;SSKT</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:105px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Gi&#225;&nbsp;trị&nbsp;c&#242;n&nbsp;lại</nobr><br/><nobr>theo&nbsp;SSKT</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:57px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
			echo "<td class='cs8556A6FD' colspan='2' style='width:104px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Chủng&nbsp;loại,</nobr><br/><nobr>cấp&nbsp;hạng</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:105px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Gi&#225;&nbsp;trị&nbsp;c&#242;n&nbsp;lại</nobr><br/><nobr>theo&nbsp;SSKT</nobr><br/><nobr>(ngh&#236;n&nbsp;đồng)</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:104px;height:59px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Phương&nbsp;thức</nobr><br/><nobr>xử&nbsp;l&#253;</nobr></td>";
			echo "<td class='cs8556A6FD' style='width:64px;height:59px;line-height:18px;text-align:center;vertical-align:top;'><nobr>ch&#250;</nobr></td>";
		echo "</tr>";
		// Hết tiêu đề
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tbldenghi inner join thongtindonvi on tbldenghi.madonvi=thongtindonvi.madonvi where tbldenghi.madonvi Like '$msdv%' and tbldenghi.ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
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
				echo "<td style='width:0px;height:23px;'></td>";
				echo "<td class='cs8556A6FD' colspan='15' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo "</tr>";
		// hết đơn vị
		$sqlxl = "Select tblqlts.TTQLTS,tblqlts.tenchitiet, tblqlts.CAPH, tbldenghi.hinhthuc,(tblqlts.ngansach + tblqlts.nguonkhac) as NG,tblqlts.DTKV,tblqlts.DTXD 
		from tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS 
		where tblqlts.madonvi = '$_madv[ma]' and tbldenghi.ngaythang between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
		$queryxl=mysqli_query($con,$sqlxl);
		$xl =  array(array("A","B","C",0,0,0,0,0));
		$cs=0;$i=0;
		$tccl = 0;
		while($rowxl=mysqli_fetch_array($queryxl))		
		{
			$xl[$cs][0] = $rowxl['tenchitiet'];
			$xl[$cs][1] = $rowxl['CAPH'];
			$xl[$cs][2] = $rowxl['hinhthuc'];
			$xl[$cs][3] = 0;
			$xl[$cs][4] = 0;
			$xl[$cs][5] = 0;
			$xl[$cs][6] = $rowxl['DTKV']+$rowxl['DTXD'];
			$sqllkhm = "select sodu,sotien from tblhaomon where TTQLTS = " . $rowxl['TTQLTS'];
			$querylkhm=mysqli_query($con,$sqllkhm);
			$lkhm = 0;
			while($rowlkhm=mysqli_fetch_array($querylkhm))		
			{
				$lkhm = $rowlkhm['sodu']+$rowlkhm['sotien'];
			}
			$xl[$cs][7] = $rowxl['NG'] - $lkhm;
			$tccl = $tccl + $rowxl['NG'] - $lkhm;
			$cs = $cs + 1;		
		}

		$ten1="";$ten2="";$ten3="";$sl6=0;$sl7=0;$stt=0;
		for($i=0;$i<$cs;$i++)
		{	
			$stt++;
			$ten1 = $xl[$i][0];
			$ten2=$xl[$i][1];
			$ten3=$xl[$i][2];
			$sl6=dinhdangso($xl[$i][6]);
			$sl7=dinhdangso($xl[$i][7]/1000);
			echo "<tr style='vertical-align:top;'>";
				echo "<td style='width:0px;height:23px;'></td>";
				echo "<td class='cs7DC1BDF5' style='width:45px;height:22px;text-align:center;'>$stt</td>";
				echo "<td class='cs8556A6FD' colspan='3' style='width:288px;height:22px;text-align:left;'>$ten1</td>";
				echo "<td class='cs8556A6FD' style='width:57px;height:22px;'></td>";
				echo "<td class='cs8556A6FD' style='width:104px;height:22px;'></td>";
				echo "<td class='cs8556A6FD' colspan='2' style='width:105px;height:22px;'></td>";
				echo "<td class='cs8556A6FD' colspan='2' style='width:57px;height:22px;text-align:center;'>$sl6</td>";
				echo "<td class='cs8556A6FD' colspan='2' style='width:104px;height:22px;text-align:left;'>$ten2</td>";
				echo "<td class='cs8556A6FD' style='width:105px;height:22px;text-align:right;'>$sl7</td>";
				echo "<td class='cs8556A6FD' style='width:104px;height:22px;text-align:left;'>$ten3</td>";
				echo "<td class='cs8556A6FD' style='width:64px;height:22px;'></td>";
			echo "</tr>";
		}
		$tccl = dinhdangso(kieudouble($tccl)/1000);
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:23px;'></td>";
			echo "<td class='csDC952B64' style='width:45px;height:22px;'></td>";
			echo "<td class='cs16D304E1' colspan='3' style='width:288px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
			echo "<td class='cs16D304E1' style='width:57px;height:22px;'></td>";
			echo "<td class='cs16D304E1' style='width:104px;height:22px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:105px;height:22px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:57px;height:22px;'></td>";
			echo "<td class='cs16D304E1' colspan='2' style='width:104px;height:22px;'></td>";
			echo "<td class='cs16D304E1' style='width:105px;height:22px;text-align:right;'>$tccl</td>";
			echo "<td class='cs16D304E1' style='width:104px;height:22px;'></td>";
			echo "<td class='cs16D304E1' style='width:64px;height:22px;'></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>	
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="cs62AA4CC9" colspan="7" style="width:522px;height:19px;"></td>
		<td class="cs62AA4CC9" colspan="8" style="width:522px;height:19px;text-align:center;vertical-align:middle;font-style:italic;"><?php echo $madv[7].", ngày ... tháng ... năm ......"; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;lập&nbsp;biểu</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="7" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="8" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="7" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:522px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:82px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:522px;height:82px;text-align:center;vertical-align:middle;"><?php echo $madv[4]; ?></td>
		<td class="csB6E29E9B" colspan="8" style="width:522px;height:82px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>