<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csAA5B9630 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.csCDE32A0F {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; padding-left:2px;padding-right:2px;}
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
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
<div class="in" style="margin-left: 1100px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
$BP = "";
$tungay = "";
$denngay = "";
$madv ="";
if(isset($_POST['create'])){
	$BP = $_POST['phanloai'];
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
		if($_POST['donvi'] != "")
			$msdv = $_POST['donvi'];
}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:1066px;height:360px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:47px;"></td>
		<td style="height:0px;width:219px;"></td>
		<td style="height:0px;width:71px;"></td>
		<td style="height:0px;width:78px;"></td>
		<td style="height:0px;width:75px;"></td>
		<td style="height:0px;width:43px;"></td>
		<td style="height:0px;width:90px;"></td>
		<td style="height:0px;width:91px;"></td>
		<td style="height:0px;width:85px;"></td>
		<td style="height:0px;width:191px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:46px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csE9F2AA97" colspan="3" rowspan="2" style="width:333px;height:22px;"><?php echo "Tên đơn vị: ".$madv[2]; ?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="4" style="width:397px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:2px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="4" rowspan="2" style="width:397px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;Ph&#250;c</nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:18px;"></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:33px;"></td>
		<td class="csE5855143" colspan="12" style="width:1062px;height:33px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>DANH&nbsp;MỤC&nbsp;C&#212;NG&nbsp;CỤ,&nbsp;DỤNG&nbsp;CỤ&nbsp;L&#194;U&nbsp;BỀN&nbsp;THEO&nbsp;TI&#202;U&nbsp;CHUẨN&nbsp;MỚI</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csCDE32A0F" colspan="12" style="width:1062px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ph&#226;n&nbsp;loại&nbsp;theo&nbsp;quyết&nbsp;định&nbsp;số&nbsp;32/2008/QĐ-BTC&nbsp;được&nbsp;&#225;p&nbsp;dụng&nbsp;từ&nbsp;ng&#224;y&nbsp;01/01/2009)</nobr></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:54px;"></td>
		<td class="csAA5B9630" style="width:45px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>STT</nobr></td>
		<td class="cs425CAA45" colspan="3" style="width:367px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>T&#234;n&nbsp;TSCĐ&nbsp;được&nbsp;chuyển&nbsp;sang&nbsp;c&#244;ng&nbsp;cụ,&nbsp;dụng&nbsp;cụ</nobr><br/><nobr>l&#226;u&nbsp;bền</nobr></td>
		<td class="cs425CAA45" style="width:74px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Năm&nbsp;sử</nobr><br/><nobr>dụng</nobr></td>
		<td class="cs425CAA45" colspan="3" style="width:223px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Cấp&nbsp;hạng&nbsp;(Th&#244;ng&nbsp;số&nbsp;kỹ</nobr><br/><nobr>thuật)</nobr></td>
		<td class="cs425CAA45" style="width:84px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;lượng</nobr></td>
		<td class="cs425CAA45" style="width:190px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n&nbsp;gi&#225;&nbsp;theo&nbsp;sổ</nobr><br/><nobr>s&#225;ch&nbsp;kế&nbsp;to&#225;n</nobr></td>
		<td class="cs425CAA45" colspan="2" style="width:75px;height:52px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ghi&nbsp;ch&#250;</nobr></td>
	</tr>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblxuatdung inner join thongtindonvi on tblxuatdung.madonvi=thongtindonvi.madonvi where tblxuatdung.madonvi Like '$msdv%' and ngayxuat between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'".($BP ==""?"":"and noisudung = '" .$BP . "'");
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
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='cs16D304E1' colspan='12' style='border-top-style: none;font-weight: bold;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo"</tr>";
		//
		$sqlts = "Select tenchitiet,Year(ngayxuat) AS YearSD, CAPH, soluong, sotien, noisudung From tblxuatdung Where madonvi = '$_madv[ma]' and ngayxuat BETWEEN '" . doingay($tungay) . "' AND '" . doingay($denngay) . "'".($BP ==""?"":"and noisudung = '" .$BP . "'");	
		$queryts=mysqli_query($con,$sqlts);
		$i=0;$soluong = 0; $sotien = 0;$tstien = 0;
		while($rowts=mysqli_fetch_array($queryts)){
			$i=$i+1;
			$tents = $rowts['tenchitiet'];
			$namsd = $rowts['YearSD'];
			$CAPH = $rowts['CAPH'];
			$soluong = dinhdangso($rowts['soluong']);
			$sotien = dinhdangso($rowts['sotien']);
			$tstien = $tstien + $rowts['sotien'];
			echo"<tr style='vertical-align:top;'>";
				echo"<td style='width:0px;height:24px;'></td>";
				echo"<td class='csDC952B64' style='width:45px;height:23px;text-align:center;'>$i</td>";
				echo"<td class='cs16D304E1' colspan='3' style='width:367px;height:23px;'>$tents</td>";
				echo"<td class='cs16D304E1' style='width:74px;height:23px;text-align:center;'>$namsd</td>";
				echo"<td class='cs16D304E1' colspan='3' style='width:223px;height:23px;text-align:center;'>$CAPH </td>";
				echo"<td class='cs16D304E1' style='width:84px;height:23px;text-align:center;'>$soluong</td>";
				echo"<td class='cs16D304E1' style='width:190px;height:23px;text-align:right;'>$sotien</td>";
				echo"<td class='cs16D304E1' colspan='2' style='width:75px;height:23px;'></td>";
			echo"</tr>";
		}
		$tstien = dinhdangso($tstien);
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='csDC952B64' style='width:45px;height:23px;'></td>";
			echo"<td class='cs16D304E1' colspan='3' style='width:367px;font-weight: bold; height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>TỔNG&nbsp;CỘNG</nobr></td>";
			echo"<td class='cs16D304E1' style='width:74px;height:23px;'></td>";
			echo"<td class='cs16D304E1' colspan='3' style='width:223px;height:23px;'></td>";
			echo"<td class='cs16D304E1' style='width:84px;height:23px;'></td>";
			echo"<td class='cs16D304E1' style='width:190px;height:23px;text-align:right;font-weight: bold;'>$tstien</td>";
			echo"<td class='cs16D304E1' colspan='2' style='width:75px;height:23px;'></td>";
		echo"</tr>";
	}
?>	

	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:14px;"></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td class="cs62AA4CC9" colspan="2" style="width:266px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:267px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="3" style="width:266px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="3" style="width:267px;height:20px;"></td>
	</tr>

	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:266px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;ghi&nbsp;sổ</nobr></td>
		<td class="csB6E29E9B" colspan="4" style="width:267px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Bộ&nbsp;phận&nbsp;h&#224;nh&nbsp;ch&#237;nh</nobr></td>
		<td class="csB6E29E9B" colspan="3" style="width:266px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="3" style="width:267px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="2" style="width:266px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="4" style="width:267px;height:20px;"></td>
		<td class="cs77A39B34" colspan="3" style="width:266px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="3" style="width:267px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:266px;height:67px;text-align:center;vertical-align:middle;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:267px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:266px;height:67px;text-align:center;vertical-align:middle;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:267px;height:67px;text-align:center;vertical-align:middle;"></td>
	</tr>

	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:266px;height:67px;text-align:center;vertical-align:middle;"><?php echo $madv[4]; ?></td>
		<td class="csB6E29E9B" colspan="4" style="width:267px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:266px;height:67px;text-align:center;vertical-align:middle;"><?php echo $madv[5]; ?></td>
		<td class="csB6E29E9B" colspan="3" style="width:267px;height:67px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>