<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csF0462E56 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs3F3A5E2F {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csA96B98F9 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs5017E93B {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csA913234 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs82D98BB6 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csE33A3B23 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs8FC8786E {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.csA4A4F90C {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csD3053F26 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs914D1A68 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csCDE32A0F {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; padding-left:2px;padding-right:2px;}
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
<div class="in" style="margin-left: 1100px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
$DC ="";$tungay ="";$denngay ="";$madv ="";
$loaihinhdv = "";
if(isset($_POST['create'])){
	$DC = $_POST['phanloai'];
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];		
	$loaihinhdv = loaihinhdv($madv[0]);
}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:1061px;height:693px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:28px;"></td>
		<td style="height:0px;width:65px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:56px;"></td>
		<td style="height:0px;width:2px;"></td>
		<td style="height:0px;width:18px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:2px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:87px;"></td>
		<td style="height:0px;width:68px;"></td>
		<td style="height:0px;width:28px;"></td>
		<td style="height:0px;width:69px;"></td>
		<td style="height:0px;width:27px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:55px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:47px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:43px;"></td>
		<td style="height:0px;width:38px;"></td>
		<td style="height:0px;width:38px;"></td>
		<td style="height:0px;width:28px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:17px;"></td>
		<td style="height:0px;width:18px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:10px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ,&nbsp;tỉnh:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;"></td>
		<td colspan="6"></td>
		<td class="csB6E29E9B" colspan="13" style="width:388px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;01-ĐK/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;chủ&nbsp;quản:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3]; ?></nobr></td>
		<td colspan="6"></td>
		<td class="cs62AA4CC9" colspan="13" rowspan="2" style="width:388px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;Th&#244;ng&nbsp;tư&nbsp;số&nbsp;09/2012/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;19/01/2012&nbsp;của&nbsp;Bộ&nbsp;t&#224;i&nbsp;ch&#237;nh)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;sử&nbsp;dụng&nbsp;t&#224;i&nbsp;sản:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2]; ?></nobr></td>
		<td colspan="6"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:171px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php  echo $madv[1];?></nobr></td>
		<td colspan="19"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Loại&nbsp;h&#236;nh&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $loaihinhdv;?></nobr></td>
		<td colspan="19"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:13px;"></td>
		<td colspan="32"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:31px;"></td>
		<td class="csE5855143" colspan="32" style="width:1057px;height:31px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>B&#193;O&nbsp;C&#193;O&nbsp;K&#202;&nbsp;KHAI&nbsp;TRỤ&nbsp;SỞ&nbsp;L&#192;M&nbsp;VIỆC,&nbsp;CƠ&nbsp;SỞ&nbsp;HOẠT&nbsp;ĐỘNG&nbsp;SỰ&nbsp;NGHIỆP</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td colspan="32"></td>
	</tr>
<?php
	function loaihinhdv($ms)
	{		
		$kq="";
		global $con;
		$sql = "Select loaihinh from thongtindonvi";			
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
	$sqld = "Select * From tblqlts Where madonvi Like '$msdv%' and TKVDAT like '" .$DC . "%' and chitiethinhthai Like 'Quyền sử dụng đất%' or chitiethinhthai Like 'Đất%' and ngaysudung <= '" . doingay($denngay) . "'";
	$queryd = mysqli_query($con,$sqld);
	$ttslv=0;$tcshcsn=0;$tlno=0;$tct=0;$tbt=0;$tblc=0;$tk=0;
		$kq = "";
		$dckv = "";
		$dtkv = "";
		$gtskt = "";
	while($rowd = mysqli_fetch_array($queryd)){		
		$sqldht = "Select * From tblhientrang Where TTQLTS = " . $rowd['TTQLTS']." and ngaythang in (select max(ngaythang) from tblhientrang where TTQLTS = " . $rowd['TTQLTS']." and ngaythang <= '" . doingay($denngay) . "' )";		
		$querydht = mysqli_query($con,$sqldht);
		$sl1 = 0;$sl2 = 0;$sl3 = 0;$sl4 = 0;$sl5 = 0;$sl6 = 0;$sl7 = 0;
		$sl11 = 0;$sl12 = 0;$sl13 = 0;$sl14 = 0;$sl15 = 0;$sl16 = 0;$sl17 = 0;
		while($rowdht = mysqli_fetch_array($querydht)){
			if($rowdht['phanloai'] === 'Trụ sở làm việc'){
				$sl1 = $rowdht['soluong'];
				$sl11 = $sl11 + $rowdht['soluong'];
			}
			if($rowdht['phanloai'] === 'Cơ sở HĐ sự nghiệp'){
				$sl2 = $rowdht['soluong'];	
				$sl12 = $sl12 + $rowdht['soluong'];				
			}
			if($rowdht['phanloai'] === 'Làm nhà ở'){
				$sl3 = $rowdht['soluong'];
				$sl13 = $sl13 + $rowdht['soluong'];				
			}
			if($rowdht['phanloai'] === 'Cho thuê'){
				$sl4 = $rowdht['soluong'];
				$sl14 = $sl14 + $rowdht['soluong'];						
			}
			if($rowdht['phanloai'] === 'Bỏ trống'){
				$sl5 = $rowdht['soluong'];
				$sl15 = $sl15 + $rowdht['soluong'];				
			}
			if($rowdht['phanloai'] === 'Bị lấn chiếm'){
				$sl6 = $rowdht['soluong'];
				$sl16 = $sl16 + $rowdht['soluong'];				
			}
			if($rowdht['phanloai'] === 'Khác'){
				$sl7 = $rowdht['soluong'];
				$sl17 = $sl17 + $rowdht['soluong'];				
			}
		}
		$kq = "Làm trụ sở làm việc: " .$sl11. " m2; Làm cơ sở HĐ sự nghiệp: ".$sl12." m2; Làm nhà ở: ".$sl13." m2; Cho thuê: ".$sl14." m2; Bỏ trống: ".$sl15." m2; Bị lấn chiếm:".$sl16." m2; Sử dụng vào mục đích khác: ".$sl17." m2";
		$dckv = $rowd['DCKV'];
		$dtkv = $rowd['DTKV'];
		$gtskt = $rowd['ngansach'] + $rowd['nguonkhac'];
		
	}
		
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='csB6E29E9B' style='width:65px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><p>Địa&nbsp;chỉ:</p></td>";
		echo"<td class='csB6E29E9B' colspan='29' style='width:958px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$dckv</nobr></td>";
		echo"<td></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='csB6E29E9B' colspan='30' style='width:1023px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>I&nbsp;-&nbsp;Về&nbsp;đất:</nobr></td>";
		echo"<td></td>";
	echo"</tr>";
	$dtkv = dinhdangso($dtkv);
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='cs62AA4CC9' colspan='10' style='width:357px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>a&nbsp;-&nbsp;Diện&nbsp;t&#237;ch&nbsp;khu&#226;n&nbsp;vi&#234;n:</nobr></td>";
		echo"<td class='cs62AA4CC9' colspan='17' style='width:620px;height:24px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$dtkv</nobr></td>";
		echo"<td class='cs62AA4CC9' colspan='3' style='width:46px;height:24px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>m2</nobr></td>";
		echo"<td></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='cs62AA4CC9' colspan='7' style='width:179px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>b&nbsp;-&nbsp;Hiện&nbsp;trạng&nbsp;sử&nbsp;dụng:</nobr></td>";
		echo"<td class='cs62AA4CC9' colspan='20' style='width:798px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><p>$kq</p></td>";
		echo"<td class='cs62AA4CC9' colspan='3' style='width:46px;height:24px;'></td>";
		echo"<td></td>";
	echo"</tr>";
	$gtskt = dinhdangso($gtskt);
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='cs62AA4CC9' colspan='7' style='width:179px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>c&nbsp;-&nbsp;Gi&#225;&nbsp;trị&nbsp;theo&nbsp;sổ&nbsp;kế&nbsp;to&#225;n:</nobr></td>";
		echo"<td class='cs62AA4CC9' colspan='18' style='width:766px;height:24px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>$gtskt</nobr></td>";
		echo"<td class='cs62AA4CC9' colspan='5' style='width:78px;height:24px;line-height:18px;text-align:right;vertical-align:middle;'><nobr>Ng&#224;n&nbsp;đồng</nobr></td>";
		echo"<td></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td></td>";
		echo"<td class='csB6E29E9B' colspan='10' style='width:357px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>II&nbsp;-&nbsp;Về&nbsp;nh&#224;:</nobr></td>";
		echo"<td class='csB6E29E9B' colspan='15' style='width:588px;height:24px;'></td>";
		echo"<td class='csB6E29E9B' colspan='5' style='width:78px;height:24px;'></td>";
		echo"<td></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:12px;'></td>";
		echo"<td colspan='32'></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:34px;'></td>";
		echo"<td class='cs3F3A5E2F' colspan='3' style='width:113px;height:33px;'></td>";
		echo"<td class='csE33A3B23' colspan='2' style='width:57px;height:33px;'></td>";
		echo"<td class='csE33A3B23' colspan='4' style='width:56px;height:33px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>NĂM</nobr></td>";
		echo"<td class='csE33A3B23' style='width:86px;height:33px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>NG&#192;Y</nobr></td>";
		echo"<td class='cs82D98BB6' colspan='7' style='width:287px;height:32px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>GI&#193;&nbsp;TRỊ&nbsp;THEO&nbsp;SỔ&nbsp;KẾ&nbsp;TO&#193;N</nobr><br/><nobr>(ng&#224;n&nbsp;đồng)</nobr></td>";
		echo"<td class='csE33A3B23' style='width:56px;height:33px;'></td>";
		echo"<td class='csE33A3B23' colspan='2' style='width:57px;height:33px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>DT</nobr></td>";
		echo"<td class='csE33A3B23' style='width:57px;height:33px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>Tổng</nobr><br/><nobr>DT</nobr></td>";
		echo"<td class='cs82D98BB6' colspan='11' style='width:282px;height:32px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>HIỆN&nbsp;TRẠNG&nbsp;SỬ&nbsp;DỤNG</nobr><br/><nobr>(m2)</nobr></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:23px;'></td>";
		echo"<td class='csA913234' colspan='3' style='width:113px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>T&#192;I&nbsp;SẢN</nobr></td>";
		echo"<td class='cs914D1A68' colspan='2' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>CẤP</nobr></td>";
		echo"<td class='cs914D1A68' colspan='4' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>X&#194;Y</nobr></td>";
		echo"<td class='cs914D1A68' style='width:86px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>TH&#193;NG,&nbsp;NĂM</nobr></td>";
		echo"<td class='cs8FC8786E' colspan='4' style='width:191px;height:22px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>";
		echo"<td class='csD3053F26' colspan='3' style='width:95px;height:23px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>Gi&#225;&nbsp;trị</nobr></td>";
		echo"<td class='cs914D1A68' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>SỐ</nobr></td>";
		echo"<td class='cs914D1A68' colspan='2' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>X&#194;Y</nobr></td>";
		echo"<td class='cs914D1A68' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>S&#192;N</nobr></td>";
		echo"<td class='csD3053F26' style='width:47px;height:23px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>Trụ&nbsp;sở</nobr></td>";
		echo"<td class='csD3053F26' style='width:42px;height:23px;line-height:15px;text-align:center;vertical-align:bottom;'><nobr>Cơ&nbsp;sở</nobr></td>";
		echo"<td class='cs8FC8786E' colspan='9' style='width:191px;height:22px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Sử&nbsp;dụng&nbsp;kh&#225;c</nobr></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:34px;'></td>";
		echo"<td class='cs5017E93B' colspan='3' style='width:113px;height:33px;'></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>HẠNG</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='4' style='width:56px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>DỰNG</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:86px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>SỬ&nbsp;DỤNG</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Nguồn</nobr><br/><nobr>NS</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Nguồn</nobr><br/><nobr>kh&#225;c</nobr></td>";
		echo"<td class='cs8FC8786E' colspan='3' style='width:95px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>c&#242;n&nbsp;lại</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:56px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>TẦNG</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>DỰNG</nobr><br/><nobr>(m2)</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:57px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>X&#194;Y</nobr><br/><nobr>DỰNG</nobr></td>";
		echo"<td class='cs8FC8786E' style='width:47px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>l&#224;m</nobr><br/><nobr>việc</nobr></td>";
		echo"<td class='cs8FC8786E' style='width:42px;height:33px;line-height:15px;text-align:center;vertical-align:top;'><nobr>HCSN</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:37px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>L&#224;m</nobr><br/><nobr>nh&#224;&nbsp;ở</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:37px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Cho</nobr><br/><nobr>thu&#234;</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:38px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Bỏ</nobr><br/><nobr>trống</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:37px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Bị&nbsp;lấn</nobr><br/><nobr>chiếm</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='3' style='width:38px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Kh&#225;c</nobr></td>";
	echo"</tr>";
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td class='cs5017E93B' colspan='3' style='width:113px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>1</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>2</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='4' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>3</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:86px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>4</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:95px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>5</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:95px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>6</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='3' style='width:95px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>7</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>8</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>9</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:57px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>10</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:47px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>11</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:42px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>12</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:37px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>13</nobr></td>";
		echo"<td class='csA4A4F90C' style='width:37px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>14</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:38px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>15</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='2' style='width:37px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>16</nobr></td>";
		echo"<td class='csA4A4F90C' colspan='3' style='width:38px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>17</nobr></td>";
	echo"</tr>";
//Hàm tính nguyên giá
function tgts($mats)
{
	global $denngay;
	global $con;
	$kq=0;
	$sql = "Select tanggiam,sotien From tbltanggiam Where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = '" . $mats . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['tanggiam'] == "Tăng")
			$kq += kieudouble($row['sotien']);
		else
			$kq -= kieudouble($row['sotien']);
	}
	return $kq;
}
//tính nguyên giá tài sản
function nguyengia ($TTQLTS,$val,$madvtv)
{
	$kq =0;$ngansach =0;$nguonkhac = 0;
	global $denngay;
	global $con;
	$sql = "Select ngansach,nguonkhac from tblqlts where madonvi = '$madvtv' and ngaysudung <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach = $row["ngansach"];
		$nguonkhac = $row["nguonkhac"];
	}
	$sql = "Select nguonkhac,ngansach,tanggiam from tbltanggiam where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach += $row["ngansach"];
		$nguonkhac += $row["nguonkhac"];
	}
	if($val == "ngansach")
		$kq = $ngansach;
	else
		$kq = $nguonkhac;
	return $kq;
}
//
$Ttdtxd = 0;
$Ttdtsxd = 0;
$TtnNS = 0;
$TtNK = 0;
$Ttgtcl = 0;
$Tttslv = 0;
$Ttcshcsn = 0;
$Ttlno = 0;
$Ttct = 0;
$Ttbt = 0;
$Ttblc = 0;
$Ttk = 0;

	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and tblqlts.chitiethinhthai Like 'Nhà%' and tblqlts.TKVDAT like '" .$DC . "%' and tblqlts.ngaysudung <= '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv) {
		//Tên đơn vị
		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs8FC8786E' colspan='32' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo "</tr>";
		//Kết thúc tên đơn vị
		$ngNS = 0;
		$ngK = 0;
		$gtcl = 0;
		$tnNS = 0;
		$tNK = 0;
		$tgtcl = 0;
		$tdtxd = 0;
		$tdtsxd = 0;
		$ttslv = 0;
		$tcshcsn = 0;
		$tlno = 0;
		$tct = 0;
		$tbt = 0;
		$tblc = 0;
		$tk = 0;
		$sqlts = "Select TTQLTS,tenchitiet,CAPH,namsanxuat,ngaysudung,ngansach,nguonkhac,SOTA,DTXD,TDTSXD".
			"  From tblqlts where madonvi = '$_madv[ma]' and chitiethinhthai = 'Nhà' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" . doingay($denngay)."'  ELSE ngaysudung <= '" . doingay($denngay)."' END) ".
			" and TKVDAT like '$DC%'  and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and ngaythang < '" . doingay($tungay) . "')";
		$queryts = mysqli_query($con, $sqlts);
		while ($rowts = mysqli_fetch_array($queryts)) {
			$tt = $rowts['TTQLTS'];
			$cl = 0;
			$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
			$queryhm = mysqli_query($con, $sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)) {
				$cl = $rowhm['sodu'] + $rowhm['sotien'];
			}
			$sqlht = "Select distinct phanloai,soluong From tblhientrang Where  TTQLTS = " . $rowts['TTQLTS'];
			$queryht = mysqli_query($con, $sqlht);
			$tslv = 0;
			$cshcsn = 0;
			$lno = 0;
			$ct = 0;
			$bt = 0;
			$blc = 0;
			$k = 0;
			while ($rowht = mysqli_fetch_array($queryht)) {
				if ($rowht['phanloai'] === 'Trụ sở làm việc') {
					$tslv = $rowht['soluong'];
					$ttslv += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Cơ sở HĐ sự nghiệp') {
					$cshcsn = $rowht['soluong'];
					$tcshcsn += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Làm nhà ở') {
					$lno = $rowht['soluong'];
					$tlno += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Cho thuê') {
					$ct = $rowht['soluong'];
					$tct += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Bỏ trống') {
					$bt = $rowht['soluong'];
					$tbt += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Bị lấn chiếm') {
					$blc = $rowht['soluong'];
					$tblc += $rowht['soluong'];
				}
				if ($rowht['phanloai'] === 'Khác') {
					$k = $rowht['soluong'];
					$tk += $rowht['soluong'];
				}
			}
			$tents = $rowts['tenchitiet'];
			$caph = $rowts['CAPH'];
			$namxd = $rowts['namsanxuat'];
			$ntsd = ngaythang($rowts['ngaysudung']);
			$ngNS = nguyengia($rowts['TTQLTS'], "ngansach", $_madv['ma']);
			$ngK = nguyengia($rowts['TTQLTS'], "nguonkhac", $_madv['ma']);
			$gtcl = $ngNS + $ngK - $cl;
			$sotang = $rowts['SOTA'];
			$dtxd = $rowts['DTXD'];
			$dtsxd = $rowts['TDTSXD'];
			$tnNS = $tnNS + $ngNS;
			$tNK = $tNK + $ngK;
			$tgtcl += $gtcl;
			$tdtxd += $rowts['DTXD'];
			$tdtsxd += $rowts['TDTSXD'];

			$Ttdtxd += $rowts['DTXD'];
			$Ttdtsxd += $rowts['TDTSXD'];
			$TtnNS += $ngNS;
			$TtNK += $ngK;
			$Ttgtcl += $gtcl;
			$Tttslv += $tslv;
			$Ttcshcsn += $cshcsn;
			$Ttlno += $lno;
			$Ttct += $ct;
			$Ttbt += $bt;
			$Ttblc += $blc;
			$Ttk += $k;

			echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:24px;'></td>";
			echo "<td class='cs5017E93B' colspan='3' style='width:113px;height:23px;'>$tents</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;text-align:center;'>$caph</td>";
			echo "<td class='csA4A4F90C' colspan='4' style='width:56px;height:23px;text-align:center;'>$namxd</td>";
			echo "<td class='csA4A4F90C' style='width:86px;height:23px;text-align:center;'>$ntsd</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:95px;height:23px;text-align:right;'>" . dinhdangso($ngNS) . "</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:95px;height:23px;text-align:right;'>" . dinhdangso($ngK) . "</td>";
			echo "<td class='csA4A4F90C' colspan='3' style='width:95px;height:23px;text-align:right;'>" . dinhdangso($gtcl) . "</td>";
			echo "<td class='csA4A4F90C' style='width:56px;height:23px;text-align:center;'>$sotang</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;text-align:right;'>".dinhdangso($dtxd)."</td>";
			echo "<td class='csA4A4F90C' style='width:57px;height:23px;text-align:right;'>".dinhdangso($dtsxd)."</td>";
			echo "<td class='csA4A4F90C' style='width:47px;height:23px;text-align:right;'>".dinhdangso($tslv)."</td>";
			echo "<td class='csA4A4F90C' style='width:42px;height:23px;text-align:right;'>".dinhdangso($cshcsn)."</td>";
			echo "<td class='csA4A4F90C' style='width:37px;height:23px;text-align:right;'>".dinhdangso($lno)."</td>";
			echo "<td class='csA4A4F90C' style='width:37px;height:23px;text-align:right;'>".dinhdangso($ct)."</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:38px;height:23px;text-align:right;'>".dinhdangso($bt)."</td>";
			echo "<td class='csA4A4F90C' colspan='2' style='width:37px;height:23px;text-align:right;'>".dinhdangso($blc)."</td>";
			echo "<td class='csA4A4F90C' colspan='3' style='width:38px;height:23px;text-align:right;'>".dinhdangso($k)."</td>";
			echo "</tr>";
		}
		$tdtxd = dinhdangso($tdtxd);
		$tdtsxd = dinhdangso($tdtsxd);
		$tnNS = dinhdangso($tnNS);
		$tNK = dinhdangso($tNK);
		$tgtcl = dinhdangso($tgtcl);
		$ttslv = dinhdangso($ttslv);
		$tcshcsn = dinhdangso($tcshcsn);
		$tlno = dinhdangso($tlno);
		$tct = dinhdangso($tct);
		$tbt = dinhdangso($tbt);
		$tblc = dinhdangso($tblc);
		$tk = dinhdangso($tk);

		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csA96B98F9' colspan='3' style='width:113px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Cộng</nobr></td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;'></td>";
		echo "<td class='cs8FC8786E' colspan='4' style='width:56px;height:23px;'></td>";
		echo "<td class='cs8FC8786E' style='width:86px;height:23px;'></td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:95px;height:23px;text-align:right;'>$tnNS</td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:95px;height:23px;text-align:right;'>$tNK</td>";
		echo "<td class='cs8FC8786E' colspan='3' style='width:95px;height:23px;text-align:right;'>$tgtcl</td>";
		echo "<td class='cs8FC8786E' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;text-align:right;'>$tdtxd</td>";
		echo "<td class='cs8FC8786E' style='width:57px;height:23px;text-align:right;'>$tdtsxd</td>";
		echo "<td class='cs8FC8786E' style='width:47px;height:23px;text-align:right;'>$ttslv</td>";
		echo "<td class='cs8FC8786E' style='width:42px;height:23px;text-align:right;'>$tcshcsn</td>";
		echo "<td class='cs8FC8786E' style='width:37px;height:23px;text-align:right;'>$tlno</td>";
		echo "<td class='cs8FC8786E' style='width:37px;height:23px;text-align:right;'>$tct</td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:38px;height:23px;text-align:right;'>$tbt</td>";
		echo "<td class='cs8FC8786E' colspan='2' style='width:37px;height:23px;text-align:right;'>$tblc</td>";
		echo "<td class='cs8FC8786E' colspan='3' style='width:38px;height:23px;text-align:right;'>$tk</td>";
		echo "</tr>";
	}
// in tổng cộng
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td class='csA96B98F9' colspan='3' style='width:113px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Tổng cộng</nobr></td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;'></td>";
	echo "<td class='cs8FC8786E' colspan='4' style='width:56px;height:23px;'></td>";
	echo "<td class='cs8FC8786E' style='width:86px;height:23px;'></td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:95px;height:23px;text-align:right;'>".dinhdangso($TtnNS)."</td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:95px;height:23px;text-align:right;'>".dinhdangso($TtNK)."</td>";
	echo "<td class='cs8FC8786E' colspan='3' style='width:95px;height:23px;text-align:right;'>".dinhdangso($Ttgtcl)."</td>";
	echo "<td class='cs8FC8786E' style='width:56px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>X</nobr></td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;text-align:right;'>".dinhdangso($Ttdtxd)."</td>";
	echo "<td class='cs8FC8786E' style='width:57px;height:23px;text-align:right;'>".dinhdangso($Ttdtsxd)."</td>";
	echo "<td class='cs8FC8786E' style='width:47px;height:23px;text-align:right;'>".dinhdangso($Tttslv)."</td>";
	echo "<td class='cs8FC8786E' style='width:42px;height:23px;text-align:right;'>".dinhdangso($Ttcshcsn)."</td>";
	echo "<td class='cs8FC8786E' style='width:37px;height:23px;text-align:right;'>".dinhdangso($Ttlno)."</td>";
	echo "<td class='cs8FC8786E' style='width:37px;height:23px;text-align:right;'>".dinhdangso($Ttct)."</td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:38px;height:23px;text-align:right;'>".dinhdangso($Ttbt)."</td>";
	echo "<td class='cs8FC8786E' colspan='2' style='width:37px;height:23px;text-align:right;'>".dinhdangso($Ttblc)."</td>";
	echo "<td class='cs8FC8786E' colspan='3' style='width:38px;height:23px;text-align:right;'>".dinhdangso($Ttk)."</td>";
	echo "</tr>";
?>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:13px;"></td>
		<td colspan="32"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td></td>
		<td class="csE9F2AA97" colspan="14" style="width:502px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>III&nbsp;-&nbsp;C&#225;c&nbsp;hồ&nbsp;sơ,&nbsp;giấy&nbsp;tờ&nbsp;li&#234;n&nbsp;quan&nbsp;đến&nbsp;quyền&nbsp;quản&nbsp;l&#253;,&nbsp;sử&nbsp;dụng&nbsp;nh&#224;,&nbsp;đất:</nobr></td>
		<td></td>
		<td class="cs5DE5F832" colspan="14" style="width:486px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>(Giấy&nbsp;chứng&nbsp;nhận&nbsp;quyền&nbsp;sử&nbsp;dụng&nbsp;đất,&nbsp;Hợp&nbsp;đồng&nbsp;thu&#234;&nbsp;đất,&nbsp;Giấy&nbsp;tờ&nbsp;kh&#225;c)</nobr></td>
		<td></td>
		<td></td>
	</tr>
	
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td colspan="16"></td>
		<td class="csE9F2AA97" colspan="14" style="width:486px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>THỦ&nbsp;TRƯỞNG&nbsp;CƠ&nbsp;QUAN,&nbsp;TỔ&nbsp;CHỨC,&nbsp;ĐƠN&nbsp;VỊ</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td colspan="16"></td>
		<td class="csCDE32A0F" colspan="14" style="width:486px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs5DE5F832" colspan="6" style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>
		<td></td>
		<?php
		if(isset($_POST['create'])){
		$abc = $_POST['option'];		
		}
		if($abc === 'Báo cáo kê khai lần đầu'){
			echo"<td class='csF0462E56' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
		}
		else{
			echo"<td class='csF0462E56' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'></td>";
		}		
		?>
		<td colspan="30"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:2px;"></td>
		<td colspan="32"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:16px;"></td>
		<td colspan="32"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" colspan="6" style="width:187px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;bổ&nbsp;sung</nobr></td>
		<td></td>
		<?php
		if(isset($_POST['create'])){
		$abc = $_POST['option'];		
		}
		if($abc === 'Báo cáo kê khai bổ xung'){
			echo"<td class='csF0462E56' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
		}else{
			echo"<td class='csF0462E56' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'></td>";
		}
		
		?>
		<td colspan="30"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:1px;"></td>
		<td colspan="32"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:7px;"></td>
<td colspan="32"></td>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td colspan="16"></td>
		<td class="csE9F2AA97" colspan="14" style="width:486px;height:22px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
		<td></td>
		<td></td>
	</tr>
</table>
</body>
</html>