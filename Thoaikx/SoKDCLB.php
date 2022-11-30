<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs4B17AE5C {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B65 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs54F31D69 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }		
		.cs16D304E2 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }		
		.cs550435DA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs101A94F7 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
		@media print {
		   .in{
			  display: none !important;
		   }
		}
	</style>
<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 750px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">

<?php
		$tungay = "";
		$denngay = "";
		$noisudung="";
		$tencc="";
		$madv ="";
		if(isset($_POST['create'])){
			$tungay = $_POST['nttu'];
			$denngay = $_POST['ntden'];
			$noisudung=$_POST['noisudung'];
			$tencc=$_POST['tencc'];
			$madv = explode('>',$_POST['MADV']);
			$msdv = $madv[0];			
			if($_POST['donvi'] != "")
				$msdv = $_POST['donvi'];
		}
		//nếu ko chạy từ thoại thì return luôn
?>
		
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:86px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:29px;"></td>
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:3px;"></td>
		<td style="height:0px;width:61px;"></td>
		<td style="height:0px;width:45px;"></td>
		<td style="height:0px;width:34px;"></td>
		<td style="height:0px;width:49px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:42px;"></td>
		<td style="height:0px;width:23px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:7px;"></td>
		<td style="height:0px;width:49px;"></td>
		<td style="height:0px;width:51px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:68px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="csE9F2AA97" colspan="8" rowspan="2" style="width:379px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2]; ?></nobr></td>
		<td class="cs550435DA" colspan="10" style="width:347px;height:19px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;S21&nbsp;-&nbsp;H</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:3px;"></td>
		<td class="cs101A94F7" colspan="10" rowspan="2" style="width:347px;height:39px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;QĐ&nbsp;số:&nbsp;19/2006/QĐ-BTC</nobr><br/><nobr>ng&#224;y&nbsp;30/03/2006&nbsp;của&nbsp;Bộ&nbsp;trưởng&nbsp;BTC)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:36px;"></td>
		<td colspan="8"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td colspan="18"></td>		
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csE9F2AA97" colspan="18" style="width:726px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>SỔ&nbsp;DỤNG&nbsp;CỤ&nbsp;L&#194;U&nbsp;BỀN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="18" style="width:726px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr><?php echo "Năm: ".substr($denngay,6,4) ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td colspan="3"></td>		
		<td class="csB6E29E9B" colspan="3" style="width:112px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Nơi&nbsp;sử&nbsp;dụng:</nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:226px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $noisudung; ?></nobr></td>
		<td colspan="5" ></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td colspan="3"></td>
		<td class="csB6E29E9B" colspan="4" style="width:157px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>T&#234;n&nbsp;c&#244;ng&nbsp;cụ&nbsp;dung&nbsp;cụ:</nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:181px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $tencc; ?></nobr></td>
		<td colspan="5" ></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td colspan="3"></td>
		<td class="csB6E29E9B" colspan="4" style="width:157px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Quy&nbsp;c&#225;ch,&nbsp;phẩm&nbsp;chất:</nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:181px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr></nobr></td>
		<td colspan="5" ></td>
	</tr>	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:17px;"></td>
		<td ></td>		
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td colspan="10"></td>		
		<td class="csE9F2AA97" colspan="4" style="width:89px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Tồn&nbsp;đầu&nbsp;kỳ:</nobr></td>
		<td class="csE9F2AA97" colspan="4" style="width:96px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr></nobr></td>		
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs4B17AE5C" style="width:84px;height:23px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>Ng&#224;y</nobr></td>
		<td class="cs425CAA45" colspan="3" style="width:100px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;phiếu</nobr></td>
		<td class="cs425CAA45" rowspan="2" colspan="5" style="width:191px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Diễn&nbsp;giải</nobr></td>
		<td class="cs425CAA45" colspan="8" style="width:229px;height:22px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;lượng</nobr></td>
		<td class="cs54F31D69" style="width:67px;height:23px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>Ghi</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csDC952B64" style="width:84px;height:23px;line-height:18px;text-align:center;vertical-align:top;"><nobr>ghi&nbsp;sổ</nobr></td>
		<td class="cs16D304E1" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Nhập</nobr></td>
		<td class="cs16D304E1" colspan="2" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Xuất</nobr></td>
		<td class="cs16D304E1" colspan="3" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Nhập</nobr></td>
		<td class="cs16D304E1" colspan="3" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Xuất</nobr></td>
		<td class="cs16D304E1" colspan="2" style="width:75px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Tồn</nobr></td>
		<td class="cs16D304E1" style="width:67px;height:23px;line-height:18px;text-align:center;vertical-align:top;"><nobr>ch&#250;</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csDC952B64" style="width:84px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="cs16D304E1" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
		<td class="cs16D304E1" colspan="2" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>3</nobr></td>
		<td class="cs16D304E1" colspan="5" style="width:191px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>4</nobr></td>
		<td class="cs16D304E1" colspan="3" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td class="cs16D304E1" colspan="3" style="width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>6</nobr></td>
		<td class="cs16D304E1" colspan="2" style="width:75px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>7</nobr></td>
		<td class="cs16D304E1" style="width:67px;height:23px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>8</nobr></td>
	</tr>	
	</table>
	<?php
		function sapxep($in_bike1, $in_bike2){
			 if ($in_bike1["ngaythang"] > $in_bike2["ngaythang"]){ 
				return 1; 
			} 
			else if ($in_bike1["ngaythang"] == $in_bike2["ngaythang"]){ 
				return 0; 
			} 
			else { 
				return -1; 
			} 
		}

	require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
		require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	 
		//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblxuatdung inner join thongtindonvi on tblxuatdung.madonvi=thongtindonvi.madonvi where tblxuatdung.madonvi Like '$msdv%' and ngayxuat between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";	
	//Duyệt từng đơn vị
		foreach($_aDV as $_madv){
			//
			echo "<tr style='vertical-align:top;'>";
				echo "<td style='width:0px;height:24px;'></td>";
				echo "<td class='csDC952B64' colspan='18' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
			echo "</tr>";
				//
			$cs=0;$ton=0;
			$cc=array();
			$sqlcc = "Select ngayxuat,ttxuatdung,lydoxuat,soluong from tblxuatdung where madonvi = '$_madv[ma]' and ngayxuat between '". doingay($tungay)."' and '".doingay($denngay)
						 . "' and tenchitiet='".$tencc."' and noisudung Like '".$noisudung."%' order by ngayxuat";
			$querycc=mysqli_query($con,$sqlcc);
			while($rowcc=mysqli_fetch_array($querycc)){
				$ton += kieudouble($rowcc['soluong']);
				$cc[$cs]=array("ngaythang"=> $rowcc['ngayxuat'],
								1=>$rowcc['ttxuatdung'],
								2=>'',
								3=>$rowcc['lydoxuat'],
								4=>$rowcc['soluong'],
								5=>'');			
				$cs++;
			}
			
			$sqlbh = "Select ngaythang,ttbaohong,Lydohong,soluong from tblbaohong where madonvi = '$_madv[ma]' and ngaythang between '". doingay($tungay)."' and '".doingay($denngay)."' and tenchitiet='".$tencc."' and noibaohong Like '".$noisudung."%' order by ngaythang";
			$querybh=mysqli_query($con,$sqlbh);
			while($rowbh=mysqli_fetch_array($querybh)){
				$ton -= kieudouble($rowbh['soluong']);
				$cc[$cs]=array("ngaythang"=> $rowbh['ngaythang'],
								1=>'',
								2=>$rowbh['ttbaohong'],
								3=>$rowbh['Lydohong'],
								4=>'',
								5=>$rowbh['soluong']);	
				$cs++;
			}
			
			uasort($cc, "sapxep");
			$ton=0;
			foreach($cc as $value){		
					$ton+=(kieudouble($value[4])-kieudouble($value[5]));		
				echo "<tr style='vertical-align:top;'>";
					echo "<td style='width:0px;height:24px;'></td>";
					echo "<td class='csDC952B65' style='width:84px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".ngaythang($value['ngaythang'])."</nobr></td>";				
					echo "<td class='cs16D304E2' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$value[1]."</nobr></td>";
					echo "<td class='cs16D304E2' colspan='2' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$value[2]."</nobr></td>";
					echo "<td class='cs16D304E2' colspan='5' style='width:191px;height:23px;line-height:18px;text-align:left;vertical-align:middle;'><nobr>".$value[3]."</nobr></td>";
					echo "<td class='cs16D304E2' colspan='3' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$value[4]."</nobr></td>";
					echo "<td class='cs16D304E2' colspan='3' style='width:76px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$value[5]."</nobr></td>";
					echo "<td class='cs16D304E2' colspan='2' style='width:75px;height:23px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>".$ton."</nobr></td>";
					echo "<td class='cs16D304E2' style='width:67px;height:23px;'>&nbsp;</td>";
				echo "</tr>";
			}
		}
		echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td colspan="8"></td>		
		<td class="cs5DE5F832" colspan="10" style="width:343px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;Sổ&nbsp;n&#224;y&nbsp;c&#243;&nbsp;...&nbsp;trang,&nbsp;đ&#225;nh&nbsp;số&nbsp;từ&nbsp;trang&nbsp;01&nbsp;đến&nbsp;trang</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td colspan="8"></td>		
		<td class="cs5DE5F832" colspan="10" style="width:343px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr>-&nbsp;Ng&#224;y&nbsp;mở&nbsp;sổ:</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td ></td>		
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="5" style="width:243px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="6" style="width:243px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="7" style="width:244px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Ng&#224;y&nbsp;.....&nbsp;th&#225;ng&nbsp;.....&nbsp;năm&nbsp;.....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="csB6E29E9B" colspan="5" style="width:243px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Người&nbsp;ghi&nbsp;sổ</nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:243px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:244px;height:21px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="5" style="width:243px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="6" style="width:243px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="7" style="width:244px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:bottom;">
		<td style="width:0px;height:67px;"></td>
	</tr>
	<tr style="vertical-align:bottom;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="5" style="width:243px;height:20px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[4]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="6" style="width:243px;height:20px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[5]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="7" style="width:244px;height:20px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6]; ?></nobr></td>
	</tr>
</table>
</body>
</html>