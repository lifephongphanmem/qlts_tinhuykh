<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csE71035DC {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
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
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.csE5855143 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:21px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		.cs1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
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
$tungay ="";$denngay ="";$madv ="";
$loaihinhdv = "";
if(isset($_POST['create'])){		
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	$loaihinhdv = loaihinhdv($madv[0]);
}
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
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:1089px;height:539px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:100px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:20px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:15px;"></td>
		<td style="height:0px;width:43px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:17px;"></td>
		<td style="height:0px;width:40px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:36px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:64px;"></td>
		<td style="height:0px;width:13px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:58px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ,&nbsp;tỉnh:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;"></td>
		<td colspan="5"></td>
		<td class="csB6E29E9B" colspan="7" style="width:388px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;02-ĐK/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;chủ&nbsp;quản:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3]; ?></nobr></td>
		<td colspan="5"></td>
		<td class="cs62AA4CC9" colspan="7" rowspan="2" style="width:388px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;Th&#244;ng&nbsp;tư&nbsp;số&nbsp;09/2012/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;19/01/2012&nbsp;của&nbsp;Bộ&nbsp;t&#224;i&nbsp;ch&#237;nh)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;sử&nbsp;dụng&nbsp;t&#224;i&nbsp;sản:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2]; ?></nobr></td>
		<td colspan="5"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:171px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[1]; ?></nobr></td>
		<td colspan="12"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:171px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Loại&nbsp;h&#236;nh&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="9" style="width:311px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $loaihinhdv;?></nobr></td>
		<td colspan="12"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:15px;"></td>
		<td colspan="24"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:27px;"></td>
		<td class="csE5855143" colspan="24" style="width:1085px;height:27px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>B&#193;O&nbsp;C&#193;O&nbsp;K&#202;&nbsp;KHAI&nbsp;XE&nbsp;&#212;&nbsp;T&#212;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td colspan="24"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:35px;"></td>
		<td class="cs3F3A5E2F" style="width:98px;height:34px;"></td>
		<td class="csE33A3B23" style="width:56px;height:34px;"></td>
		<td class="csE33A3B23" colspan="4" style="width:57px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>BIỂN</nobr><br/></td>
		<td class="csE33A3B23" colspan="2" style="width:57px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>SỐ&nbsp;CHỖ</nobr></td>
		<td class="csE33A3B23" style="width:56px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>NƯỚC</nobr><br/></td>
		<td class="csE33A3B23" style="width:57px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>NĂM</nobr></td>
		<td class="csE33A3B23" style="width:76px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>NG&#192;Y</nobr><br/><nobr>TH&#193;NG</nobr></td>
		<td class="csE33A3B23" colspan="2" style="width:56px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>C&#212;NG</nobr></td>
		<td class="csE33A3B23" colspan="2" style="width:57px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>CHỨC</nobr><br/><nobr>DANH</nobr></td>
		<td class="csE33A3B23" style="width:56px;height:34px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>NGUỒN</nobr></td>
		<td class="cs82D98BB6" colspan="4" style="width:230px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>GI&#193;&nbsp;TRỊ&nbsp;THEO&nbsp;SỔ&nbsp;KẾ&nbsp;TO&#193;N</nobr><br/><nobr>(ng&#224;n&nbsp;đồng)</nobr></td>
		<td class="cs82D98BB6" colspan="4" style="width:220px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>HIỆN&nbsp;TRẠNG&nbsp;SỬ&nbsp;DỤNG</nobr><br/><nobr>(chiếc)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="csA913234" style="width:98px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>T&#192;I&nbsp;SẢN</nobr></td>
		<td class="cs914D1A68" style="width:56px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NH&#195;N</nobr></td>
		<td class="cs914D1A68" colspan="4" style="width:57px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>KIỂM</nobr></td>
		<td class="cs914D1A68" colspan="2" style="width:57px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NGỒI/</nobr></td>
		<td class="cs914D1A68" style="width:56px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>SẢN</nobr></td>
		<td class="cs914D1A68" style="width:57px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>SẢN</nobr></td>
		<td class="cs914D1A68" style="width:76px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NĂM</nobr></td>
		<td class="cs914D1A68" colspan="2" style="width:56px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>SUẤT</nobr></td>
		<td class="cs914D1A68" colspan="2" style="width:57px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>SỬ</nobr></td>
		<td class="cs914D1A68" style="width:56px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>GỐC</nobr></td>
		<td class="cs8FC8786E" colspan="3" style="width:153px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>
		<td class="csD3053F26" style="width:76px;height:19px;line-height:15px;text-align:center;vertical-align:bottom;"><nobr>Gi&#225;&nbsp;trị</nobr></td>
		<td class="cs1" style="width:47px;height:18px;"></td>
		<td class="cs8FC8786E" colspan="2" style="width:114px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>HĐ&nbsp;sư&nbsp;nghiệp</nobr></td>
		<td class="csD3053F26" style="width:57px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:45px;"></td>
		<td class="cs5017E93B" style="width:98px;height:44px;"></td>
		<td class="csA4A4F90C" style="width:56px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>HIỆU</nobr></td>
		<td class="csA4A4F90C" colspan="4" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>SO&#193;T</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>TẢI</nobr><br/><nobr>TRỌNG</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>XUẤT</nobr></td>
		<td class="csA4A4F90C" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>XUẤT</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>SỬ</nobr><br/><nobr>&nbsp;DỤNG</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:56px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>XE</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>DỤNG</nobr><br/><nobr>XE</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>XE</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:76px;height:44px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguồn</nobr><br/><nobr>NS</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:44px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguồn</nobr><br/><nobr>kh&#225;c</nobr></td>
		<td class="cs8FC8786E" style="width:76px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>c&#242;n&nbsp;lại</nobr></td>
		<td class="cs8FC8786E" style="width:47px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>QLNN</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:44px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Kinh</nobr><br/><nobr>Doanh</nobr></td>
		<td class="csA4A4F90C" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Kh&#244;ng</nobr><br/><nobr>KD</nobr></td>
		<td class="cs8FC8786E" style="width:57px;height:44px;line-height:15px;text-align:center;vertical-align:top;"><nobr>HĐ <br> kh&#225;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="cs5017E93B" style="width:98px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
		<td class="csA4A4F90C" colspan="4" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>3</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>4</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td class="csA4A4F90C" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>6</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>7</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:56px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>8</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>9</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>10</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:76px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>11</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>12</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>13</nobr></td>
		<td class="csA4A4F90C" style="width:47px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>14</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>15</nobr></td>
		<td class="csA4A4F90C" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>16</nobr></td>
		<td class="csA4A4F90C" style="width:57px;height:20px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>17</nobr></td>
	</tr>
	<?php
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

	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and chitiethinhthai Like 'Phương tiện vận tải%' and ngaysudung <= '" . doingay($denngay) . "' and TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
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
			echo"<td class='csA4A4F90C' colspan='24' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo"</tr>";
		//
		$tnNS = 0; $tnK = 0;$tgtcl = 0;
		$tqlnn = 0;$tkd = 0; $tkkd = 0; $thdk = 0;
		$sqlts = "Select * From tblqlts Where madonvi = '$_madv[ma]' and chitiethinhthai Like 'Phương tiện vận tải%' and ngaysudung <= '" . doingay($denngay) . "' and TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
		$queryts = mysqli_query($con,$sqlts);
		while($rowts = mysqli_fetch_array($queryts)){
			$sqlht = "Select * from tblhientrang Where TTQLTS = " . $rowts['TTQLTS'];
			$queryht = mysqli_query($con,$sqlht);
			$qlnn = 0;$kd = 0; $kkd = 0; $hdk = 0;
			while($rowht = mysqli_fetch_array($queryht)){
				if($rowht['phanloai'] === 'QLNN'){
					$qlnn = $rowht['soluong'];
					$tqlnn = $tqlnn + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Kinh doanh'){
					$kd = $rowht['soluong'];
					$tkd = $tkd + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Không KD'){
					$kkd = $rowht['soluong'];
					$tkkd = $tkkd + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Khác'){
					$hdk = $rowht['soluong'];
					$thdk = $thdk + $rowht['soluong'];
				}
			}
			//Còn lại 
			$cl = 0 ;
			$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
			$queryhm = mysqli_query($con,$sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)){
				$cl = $rowhm['sodu'] + $rowhm['sotien'];
			}		
			//Tăng giảm
			$sqltg = "Select * From tbltanggiam where TTQLTS = " . $rowts['TTQLTS'];
			$querytg =  mysqli_query($con,$sqltg);
			$tg = 0;
			while ($rowtg = mysqli_fetch_array($querytg)){
				if($rowtg['tanggiam'] == 'Tăng'){
					$tg = $tg + $rowtg['sotien'];
				}else{
					$tg = $tg - $rowtg['sotien'];
				}				
			}
			$tents = $rowts['tenchitiet'];
			$nh = $rowts['NHXE'];
			$bks = $rowts['BKSXE'];
			$scntt = $rowts['CNXE'];
			$nsx = $rowts['NUOCSX'];
			$tgsx = $rowts['namsanxuat'];
			$ntsd = ngaythang($rowts['ngaysudung']);
			$csxe = $rowts['CXXE'];
			$cdsd = $rowts['CDSD'];
			$ngxe = $rowts['NGGOXE'];
			//$nNS = $rowts['ngansach'];
			$nNS = nguyengia($rowts['TTQLTS'],"ngansach",$_madv['ma']);
			$tnNS = $tnNS + $nNS;
			$nK = nguyengia($rowts['TTQLTS'],"nguonkhac",$_madv['ma']);
			//$nK = $rowts['nguonkhac'];
			$tnK = $tnK + $nK;
			$gtcl = $rowts['ngansach'] + $rowts['nguonkhac'] + $tg - $cl;
			$tgtcl = $tgtcl + $gtcl;
			
			//định dạng số
			$qlnn = dinhdangso($qlnn);$kd = dinhdangso($kd); $kkd = dinhdangso($kkd); $hdk = dinhdangso($hdk);
			$nNS = dinhdangso($nNS);
			$nK = dinhdangso($nK);
			$gtcl = dinhdangso($gtcl);
			
			//$cl = dinhdangso($cl);
			echo"<tr style='vertical-align:top;'>";
				echo"<td style='width:0px;height:24px;'></td>";
				echo"<td class='cs5017E93B' style='width:98px;height:23px;line-height:15px;text-align:left;vertical-align:middle;'><p>$tents</p></td>";
				echo"<td class='csA4A4F90C' style='width:56px;height:23px;text-align:left;vertical-align:middle;'>$nh</td>";
				echo"<td class='csA4A4F90C' colspan='4' style='width:57px;height:23px;text-align:left;vertical-align:middle;'>$bks</td>";
				echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;text-align:center;vertical-align:middle;'>$scntt</td>";
				echo"<td class='csA4A4F90C' style='width:56px;height:23px;text-align:left;vertical-align:middle;'>$nsx </td>";
				echo"<td class='csA4A4F90C' style='width:57px;height:23px;text-align:center;vertical-align:middle;'>$tgsx</td>";
				echo"<td class='csA4A4F90C' style='width:76px;height:23px;text-align:center;vertical-align:middle;'>$ntsd</td>";
				echo"<td class='csA4A4F90C' colspan='2' style='width:56px;height:23px;text-align:left;vertical-align:middle;'>$csxe</td>";
				echo"<td class='csA4A4F90C' colspan='2' style='width:57px;height:23px;text-align:left;vertical-align:middle;'>$cdsd</td>";
				echo"<td class='csA4A4F90C' style='width:56px;height:23px;'>$ngxe</td>";
				echo"<td class='csA4A4F90C' colspan='2' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$nNS</td>";
				echo"<td class='csA4A4F90C' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$nK</td>";
				echo"<td class='csA4A4F90C' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$gtcl</td>";
				echo"<td class='csA4A4F90C' style='width:47px;height:23px;text-align:right;vertical-align:middle;'>$qlnn</td>";
				echo"<td class='csA4A4F90C' style='width:56px;height:23px;text-align:right;vertical-align:middle;'>$kd</td>";
				echo"<td class='csA4A4F90C' style='width:57px;height:23px;text-align:right;vertical-align:middle;'>$kkd</td>";
				echo"<td class='csA4A4F90C' style='width:57px;height:23px;text-align:right;vertical-align:middle;'>$hdk</td>";
			echo"</tr>";
		}
		$tnNS = dinhdangso($tnNS); $tnK = dinhdangso($tnK);$tgtcl = dinhdangso($tgtcl);		
		$tqlnn = dinhdangso($tqlnn);$tkd = dinhdangso($tkd); $tkkd = dinhdangso($tkkd); $thdk = dinhdangso($thdk);
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='csA96B98F9' style='width:98px;height:23px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Tổng&nbsp;cộng:</nobr></td>";
			echo"<td class='cs8FC8786E' style='width:56px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' colspan='4' style='width:57px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' style='width:56px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' style='width:57px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' style='width:76px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' colspan='2' style='width:56px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' colspan='2' style='width:57px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' style='width:56px;height:23px;'></td>";
			echo"<td class='cs8FC8786E' colspan='2' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$tnNS</td>";
			echo"<td class='cs8FC8786E' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$tnK</td>";
			echo"<td class='cs8FC8786E' style='width:76px;height:23px;text-align:right;vertical-align:middle;'>$tgtcl</td>";
			echo"<td class='cs8FC8786E' style='width:47px;height:23px;text-align:right;vertical-align:middle;'>$tqlnn</td>";
			echo"<td class='cs8FC8786E' style='width:56px;height:23px;text-align:right;vertical-align:middle;'>$tkd</td>";
			echo"<td class='cs8FC8786E' style='width:57px;height:23px;text-align:right;vertical-align:middle;'>$tkkd</td>";
			echo"<td class='cs8FC8786E' style='width:57px;height:23px;text-align:right;vertical-align:middle;'>$thdk</td>";
		echo"</tr>";
	}	
?>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td class="cs62AA4CC9" colspan="14" style="width:544px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="10" style="width:545px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ng&#224;y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;th&#225;ng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;năm</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="14" style="width:544px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>X&#193;C&nbsp;NHẬN&nbsp;CỦA&nbsp;CẤP&nbsp;C&#211;&nbsp;THẨM&nbsp;QUYỀN</nobr></td>
		<td class="csB6E29E9B" colspan="10" style="width:545px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>THỦ&nbsp;TRƯỞNG&nbsp;CƠ&nbsp;QUAN,&nbsp;TỔ&nbsp;CHỨC,&nbsp;ĐƠN&nbsp;VỊ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="14" style="width:544px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
		<td class="cs77A39B34" colspan="10" style="width:545px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
		<td class="csB6E29E9B" colspan="14" style="width:544px;height:67px;"></td>		
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
		<td class="cs5DE5F832" colspan="4" style="width:187px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>
		<td></td>		
		<?php
		if(isset($_POST['create'])){
		$abc = $_POST['option'];		
		}
		if($abc === 'Báo cáo kê khai lần đầu'){
			echo"<td class='csE71035DC' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;vertical-align:middle;'><b>X</b></td>";
		}
		else{
			echo"<td class='csE71035DC' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'></td>";
		}		
		?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
	</tr>
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
		<td class="cs5DE5F832" colspan="4" style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;bổ&nbsp;sung</nobr></td>
		<td></td>		
		<?php
		if(isset($_POST['create'])){
		$abc = $_POST['option'];		
		}
		if($abc === 'Báo cáo kê khai bổ xung'){
			echo"<td class='csE71035DC' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;vertical-align:middle;'><b>X</b></td>";
		}else{
			echo"<td class='csE71035DC' colspan='2' rowspan='2' style='width:23px;height:22px;text-align:center;'></td>";
		}		
		?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="10" style="width:187px;height:22px;text-align:center;"><?php echo $madv[6]; ?> </td>			
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:2px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
</body>
</html>