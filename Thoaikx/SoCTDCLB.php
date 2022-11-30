<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs4B17AE5C {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64a {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs54F31D69 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1a {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs5EA817F2 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:12px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.csCDE32A0F {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; padding-left:2px;padding-right:2px;}
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:12px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
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
	$denngay="";
	$tungay ="";
	$nam="";
	$noisd="";
	$tencc="";
	$madv ="";
	if(isset($_POST['create'])){		
	$denngay = $_POST['ntden'];
	$tungay = $_POST['nttu'];
	$nam = substr($denngay,6,4);
	$noisd = $_POST['noisudung'];	
	$tencc = $_POST['tencc'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];	
	}
?>	
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:83px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:6px;"></td>
		<td style="height:0px;width:73px;"></td>
		<td style="height:0px;width:33px;"></td>
		<td style="height:0px;width:34px;"></td>
		<td style="height:0px;width:11px;"></td>
		<td style="height:0px;width:82px;"></td>
		<td style="height:0px;width:13px;"></td>
		<td style="height:0px;width:41px;"></td>
		<td style="height:0px;width:29px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:86px;"></td>
		<td style="height:0px;width:68px;"></td>
		<td style="height:0px;width:105px;"></td>
		<td style="height:0px;width:77px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csE9F2AA97" colspan="6" rowspan="2" style="width:384px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Tên đơn vị: ".$madv[2]?></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="6" style="width:381px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;S21&nbsp;-&nbsp;H</nobr></td>
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
		<td class="cs62AA4CC9" colspan="6" rowspan="2" style="width:381px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19/2006/QĐ-BTC</nobr><br/><nobr>ng&#224;y&nbsp;30/03/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:38px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2C853136" colspan="19" style="width:1052px;height:24px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>SỔ&nbsp;DỤNG&nbsp;CỤ&nbsp;L&#194;U&nbsp;BỀN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<?php
		require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
		require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
		function quycach($tencc)
		{
			global $msdv;
			global $con;
			$kq="";
			$sql = "Select CAPH FROM tblqlcc Where madonvi Like '$msdv%' and tenchitiet = '" . $tencc. "'";
			$qrsql= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($qrsql))
			{
				$kq = $row[0];
			}
			return $kq;
		}
		// Tính tồn đầu kỳ
		function tondksl($tencc,$tungay)
		{
			global $msdv;
			global $noisd;
			global $con;
			$kq="";
			$sql = "Select soluong FROM tblxuatdung Where madonvi Like '$msdv%' and tenchitiet = '" . $tencc. "' and noisudung = '" . $noisd. "' and mataisan Like 'C%' and ngayxuat < '".doingay($tungay)."'";
			$qrsql= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($qrsql))
			{
				$kq += $row['soluong'];
			}		
			$sql = "Select soluong FROM tblbaohong Where madonvi Like '$msdv%' and tenchitiet = '" . $tencc. "' and noibaohong = '" . $noisd. "' and mataisan Like 'C%' and ngaythang < '".doingay($tungay)."'";
			$qrsql= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($qrsql))
			{
				$kq -= $row['soluong'];
			}
			return $kq;
		}
		function tondktien($tencc,$tungay)
		{
			global $noisd;
			global $con;
			global $msdv;
			$kq="";
			$sql = "Select sotien FROM tblxuatdung Where madonvi Like '$msdv%' and tenchitiet = '" . $tencc. "' and noisudung = '" . $noisd. "' and mataisan Like 'C%' and ngayxuat < '".doingay($tungay)."'";
			$qrsql= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($qrsql))
			{
				$kq += $row['sotien'];
			}
			$sql = "Select sotien FROM tblbaohong Where madonvi Like '$msdv%' and tenchitiet = '" . $tencc. "' and noibaohong = '" . $noisd. "' and mataisan Like 'C%' and ngaythang < '".doingay($tungay)."'";
			$qrsql= mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($qrsql))
			{
				$kq -= $row['sotien'];
			}
			return $kq;
		}
		//hoán vị dữ liệu
		function hoanvi($x,$y)
		{
			$tam = $x;
			$x = $y;
			$y = $tam;
		}
		function hoanvidong($ar,$col,$rowx,$rowy)
		{
			for ($i=0; $i<=$col; $i++)
			{				
				hoanvi($ar[$rowx][$i],$ar[$rowy][$i]);
			}
		}		
		// Gán dữ liệu
		$ar = array(array("A","B","C",0,0,0,0,0,0,0,0,0));
		$c=0;
		$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0;
		$sql = "Select ngayxuat,ttxuatdung,lydoxuat,soluong,sotien from tblxuatdung where madonvi Like '$msdv%' and mataisan like 'C%' and ngayxuat Between '".doingay($tungay)."' and '".doingay($denngay)."'".($tencc==""?"":" and tenchitiet='".$tencc."'").($noisd==""?"":" and noisudung='".$noisd."'");		
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))		
		{
			$ar[$c][0] = $row['ngayxuat'];
			$ar[$c][1] = $row['ttxuatdung'];
			$ar[$c][2] = $row['lydoxuat'];
			$ar[$c][3] = $row['soluong'];
			$ar[$c][4] = $row['sotien'];
			$ar[$c][5] = 0;
			$ar[$c][6] = 0;
			$c++;			
		}		
		$sql = "Select ngaythang,TTbaohong,Lydohong,soluong,sotien from tblbaohong where madonvi Like '$msdv%' and tenchitiet = '" . $tencc . "' and noibaohong = '" . $noisd. "' and mataisan like 'C%' and ngaythang Between '".doingay($tungay)."' and '".doingay($denngay)."'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))		
		{
			$ar[$c][0] = $row['ngaythang'];
			$ar[$c][1] = $row['TTbaohong'];
			$ar[$c][2] = $row['Lydohong'];
			$ar[$c][3] = 0;
			$ar[$c][4] = 0;
			$ar[$c][5] = $row['soluong'];
			$ar[$c][6] = $row['sotien'];
			$c++;			
		}		
		for($i =0;$i<$c;$i++)
		{				
			$artam= "";			
			for ($j = $i +1 ; $j <$c ; $j++)
			{					
				if(strtotime($ar[$i][0]) > strtotime($ar[$j][0]))
				{					
					for ($k = 0; $k < 7; $k++)
					{							
						$artam = $ar[$i][$k];
						$ar[$i][$k] = $ar[$j][$k];									
						$ar[$j][$k] = $artam;												
					}
				}					
			}			
		}
		//krsort($ar);	
		echo "<td class='cs5DE5F832' colspan='19' style='width:1052px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Năm: </nobr>$nam</td>";
		?>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>				
		<td class="csB6E29E9B" colspan="3" style="width:112px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Nơi&nbsp;sử&nbsp;dụng:</nobr></td>
		<?php
			echo "<td class='csB6E29E9B' colspan='7' style='width:226px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$noisd</nobr></td>";
		?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="5" style="width:157px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;c&#244;ng&nbsp;cụ&nbsp;dung&nbsp;cụ:</nobr></td>
		<?php
		echo "<td class='csB6E29E9B' colspan='5' style='width:181px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$tencc</nobr></td>";
		?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csB6E29E9B" colspan="5" style="width:157px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Quy&nbsp;c&#225;ch,&nbsp;phẩm&nbsp;chất:</nobr></td>
		<?php
		$qcpc= quycach($tencc);
		echo "<td class='csB6E29E9B' colspan='5' style='width:181px;height:24px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>$qcpc</nobr></td>";
		?>
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
		<td class="csE9F2AA97" colspan="2" style="width:98px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Tồn&nbsp;đầu&nbsp;kỳ:</nobr></td>
		<?php
		$tondk=dinhdangso(tondksl($tencc,$tungay));
		$tondkt = dinhdangso(tondktien($tencc,$tungay));
		echo "<td class='cs5EA817F2' style='width:64px;height:22px;line-height:15px;text-align:left;vertical-align:top;'><nobr>$tondk</nobr></td>";
		echo "<td class='cs5EA817F2' style='width:101px;height:22px;line-height:15px;text-align:right;vertical-align:top;'><nobr>$tondkt</nobr></td>";
		?>
		<td></td>
	</tr>
	</table>	
	<?php
	echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs4B17AE5C' style='width:94px;height:23px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Ng&#224;y</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:172px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Chứng&nbsp;từ</nobr></td>";
		echo "<td class='cs54F31D69' colspan='4' style='width:191px;height:23px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Diễn</nobr></td>";
		echo "<td class='cs425CAA45' colspan='5' style='width:172px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Nhập</nobr></td>";
		echo "<td class='cs425CAA45' colspan='4' style='width:171px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Xuất</nobr></td>";
		echo "<td class='cs425CAA45' colspan='2' style='width:172px;height:22px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tồn</nobr></td>";
		echo "<td class='cs54F31D69' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:bottom;'><nobr>Ghi</nobr></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64' style='width:94px;height:23px;line-height:18px;text-align:center;vertical-align:top;'><nobr>ghi&nbsp;sổ</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;hiệu</nobr></td>";
		echo "<td class='cs16D304E1' style='width:95px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Ng&#224;y&nbsp;th&#225;ng</nobr></td>";
		echo "<td class='cs16D304E1' colspan='4' style='width:191px;height:23px;line-height:18px;text-align:center;vertical-align:top;'><nobr>giải</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;lượng</nobr></td>";
		echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:69px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;lượng</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:101px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs16D304E1' style='width:67px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số&nbsp;lượng</nobr></td>";
		echo "<td class='cs16D304E1' style='width:104px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:top;'><nobr>ch&#250;</nobr></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64' style='width:94px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>1</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>2</nobr></td>";
		echo "<td class='cs16D304E1' style='width:95px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>3</nobr></td>";
		echo "<td class='cs16D304E1' colspan='4' style='width:191px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>4</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:66px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>5</nobr></td>";
		echo "<td class='cs16D304E1' colspan='3' style='width:105px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>6</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:69px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>7</nobr></td>";
		echo "<td class='cs16D304E1' colspan='2' style='width:101px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>8</nobr></td>";
		echo "<td class='cs16D304E1' style='width:67px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>9</nobr></td>";
		echo "<td class='cs16D304E1' style='width:104px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>10</nobr></td>";
		echo "<td class='cs16D304E1' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>11</nobr></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";	
	for($i=0;$i<$c;$i++)
	{		
		$tonsl =0;
		$tontt=0;
		$ngay1 = ngaythang($ar[$i][0]);
		$ten1=$ar[$i][1];
		$ten2 = $ar[$i][2];
		$sl1= dinhdangso($ar[$i][3]);
		$sl2=dinhdangso($ar[$i][4]);
		$sl3=dinhdangso($ar[$i][5]);
		$sl4=dinhdangso($ar[$i][6]);
		$Tsl1 += kieudouble($ar[$i][3]);
		$Tsl2 += kieudouble($ar[$i][4]);
		$Tsl3 += kieudouble($ar[$i][5]);
		$Tsl4 += kieudouble($ar[$i][6]);
		$tonsl = tondksl($tencc,$tungay) + $Tsl1 - $Tsl3;
		$tontt = dinhdangso(tondktien($tencc,$tungay) + $Tsl2 - $Tsl4);
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='csDC952B64a' style='width:94px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$ngay1</nobr></td>";
		echo "<td class='cs16D304E1a' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$ten1</nobr></td>";
		echo "<td class='cs16D304E1a' style='width:95px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$ngay1</nobr></td>";
		echo "<td class='cs16D304E1a' colspan='4' style='width:191px;height:23px;line-height:18px;text-align:Left;vertical-align:middle;'><nobr>$ten2</nobr></td>";
		echo "<td class='cs16D304E1a' colspan='2' style='width:66px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl1</nobr></td>";
		echo "<td class='cs16D304E1a' colspan='3' style='width:105px;height:23px;line-height:18px;text-align:Right;vertical-align:middle;'><nobr>$sl2</nobr></td>";
		echo "<td class='cs16D304E1a' colspan='2' style='width:69px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$sl3</nobr></td>";
		echo "<td class='cs16D304E1a' colspan='2' style='width:101px;height:23px;line-height:18px;text-align:Right;vertical-align:middle;'><nobr>$sl4</nobr></td>";
		echo "<td class='cs16D304E1a' style='width:67px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>$tonsl</nobr></td>";
		echo "<td class='cs16D304E1a' style='width:104px;height:23px;line-height:18px;text-align:Right;vertical-align:middle;'><nobr>$tontt</nobr></td>";
		echo "<td class='cs16D304E1a' style='width:76px;height:23px;'></td>";
	echo "</tr>";
	}
	?>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
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
		<td class="csCDE32A0F" colspan="8" style="width:431px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Sổ&nbsp;n&#224;y&nbsp;c&#243;&nbsp;...&nbsp;trang,&nbsp;đ&#225;nh&nbsp;số&nbsp;từ&nbsp;trang&nbsp;01&nbsp;đến&nbsp;trang</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td class="csCDE32A0F" colspan="8" style="width:431px;height:23px;line-height:18px;text-align:left;vertical-align:top;"><nobr>-&nbsp;Ng&#224;y&nbsp;mở&nbsp;sổ:</nobr></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:352px;height:21px;"></td>
		<td class="cs62AA4CC9" colspan="10" style="width:352px;height:21px;"></td>
		<td class="cs77A39B34" colspan="5" style="width:352px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ng&#224;y&nbsp;.....&nbsp;th&#225;ng&nbsp;.....&nbsp;năm&nbsp;.....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;ghi&nbsp;sổ</nobr></td>
		<td class="cs77A39B34" colspan="10" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="cs77A39B34" colspan="5" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="10" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="5" style="width:352px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:67px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:352px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[4]; ?></nobr></td>
		<td class="cs77A39B34" colspan="10" style="width:352px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[5]; ?></nobr></td>
		<td class="cs77A39B34" colspan="5" style="width:352px;height:67px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6]; ?></nobr></td>
	</tr>
	</table>
</body>