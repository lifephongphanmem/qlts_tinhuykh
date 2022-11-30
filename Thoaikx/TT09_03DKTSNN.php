<?php require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csE71035DC {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csA96B98F9 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs5017E93B {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs4307EBDF {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; padding-left:2px;}
		.csA913234 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs82D98BB6 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.cs8FC8786E {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.csA4A4F90C {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csD3053F26 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:bold; font-style:normal; }
		.cs914D1A68 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom: #000000 1px solid;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:normal; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
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
<div class="in" style="margin-left: 1100px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$denngay="";
	$tungay ="";		
	$ckbts = "No";
	$ckbld = "";
	$ckbbs ="";
	$loaihinhdv = "";
	if(isset($_POST['create']))
	{		
		$denngay = $_POST['ntden'];
		$tungay = $_POST['nttu'];			
		if(isset($_POST['ts']))			
			$ckbts = $_POST['ts'];
		if(isset($_POST['ld']))			
			$ckbld = "X";
		if(isset($_POST['bs']))			
			$ckbbs = "X";
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
		$sql = "Select loaihinh from thongtindonvi where madonvi = '$ms'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
	function sthm ($mats)
	{
		global $denngay;
		global $con;
		$kq=0;
		$sql = "Select * From tblhaomon Where TTQLTS = '" . $mats . "' and ngaythang <= '$denngay'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$kq += $row['sotien'] + $row['sodu'];
		}
		return $kq;
	}
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
				$kq += $row['sotien'];
			else
				$kq -= $row['sotien'];
		}		
		return $kq;
	}
	function htsd ($mats, $phanloai)
	{
		$kq =0;
		global $con;
		$sql = "Select soluong From tblhientrang Where TTQLTS = '" . $mats . "' and phanloai = '" . $phanloai . "' order by TThientrang";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$kq +=  $row['soluong'];
		}
		return $kq;
	}
?>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:175px;"></td>
		<td style="height:0px;width:30px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:87px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:70px;"></td>
		<td style="height:0px;width:7px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:56px;"></td>
		<td style="height:0px;width:57px;"></td>
		<td style="height:0px;width:56px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Bộ,&nbsp;tỉnh:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;"></td>
		<td></td>
		<td class="csB6E29E9B" colspan="5" style="width:322px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;03-ĐK/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;chủ&nbsp;quản:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3];?></nobr></td>
		<td></td>
		<td class="cs62AA4CC9" colspan="5" rowspan="2" style="width:322px;height:40px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(Ban&nbsp;h&#224;nh&nbsp;theo&nbsp;Th&#244;ng&nbsp;tư&nbsp;số&nbsp;09/2012/TT-BTC</nobr><br/><nobr>ng&#224;y&nbsp;19/01/2012&nbsp;của&nbsp;Bộ&nbsp;t&#224;i&nbsp;ch&#237;nh)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;sử&nbsp;dụng&nbsp;t&#224;i&nbsp;sản:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[2];?></nobr></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:21px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>M&#227;&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[1];?></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Loại&nbsp;h&#236;nh&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $loaihinhdv;?></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
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
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:27px;"></td>
		<td class="csE5855143" colspan="15" style="width:1038px;height:27px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>B&#193;O&nbsp;C&#193;O&nbsp;K&#202;&nbsp;KHAI&nbsp;T&#192;I&nbsp;SẢN&nbsp;C&#211;&nbsp;NGUY&#202;N&nbsp;GI&#193;&nbsp;TỪ&nbsp;500&nbsp;TRIỆU&nbsp;ĐỒNG&nbsp;TRỞ&nbsp;L&#202;N</nobr></td>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td style="width:0px;height:30px;"></td>
		<td class="csE71035DC" rowspan="3" colspan="3" style="width:30px;height:76px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>T&#192;I&nbsp;SẢN</nobr></td>
		<td class="cs82D98BB6" rowspan="3" style="width:86px;height:30px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>K&#221;</nobr><br/><nobr>HIỆU</nobr></td>
		<td class="cs82D98BB6" rowspan="3" style="width:76px;height:30px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NƯỚC&nbsp;SẢN</nobr><br/><nobr>XUẤT</nobr><br/><br/></td>
		<td class="cs82D98BB6" rowspan="3" style="width:56px;height:30px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NĂM</nobr><br/><nobr>SẢN</nobr><br/><nobr>XUẤT</nobr><br/><br/></td>
		<td class="cs82D98BB6" rowspan="3" colspan="2" style="width:30px;height:76px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>NG&#192;Y</nobr><br/><nobr>TH&#193;NG</nobr><br/><nobr>NĂM&nbsp;SỬ</nobr><br/><nobr>DỤNG</nobr><br/></td>
		<td class="cs82D98BB6" colspan="3" style="width:287px;height:30px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>GI&#193;&nbsp;TRỊ&nbsp;THEO&nbsp;SỔ&nbsp;KẾ&nbsp;TO&#193;N</nobr><br/><nobr>(ng&#224;n&nbsp;đồng)</nobr></td>
		<td class="cs82D98BB6" colspan="4" style="width:225px;height:30px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>HIỆN&nbsp;TRẠNG&nbsp;SỬ&nbsp;DỤNG</nobr><br/><nobr>(C&#225;i,&nbsp;chiếc)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:33px;"></td>		
		<td class="csA4A4F90C" colspan="2" style="width:191px;height:32px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>c&#242;n&nbsp;lại</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:56px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>QLNN</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:112px;height:32px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>HĐ&nbsp;sự&nbsp;nghiệp</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:55px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>HĐ</nobr><br/><nobr>kh&#225;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:34px;"></td>		
		<td class="csA4A4F90C" style="width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguồn</nobr><br/><nobr>NS</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Nguồn</nobr><br/><nobr>kh&#225;c</nobr></td>		
		<td class="csA4A4F90C" style="width:55px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Kinh</nobr><br/><nobr>Doanh</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:33px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>Kh&#244;ng</nobr><br/><nobr>KD</nobr></td>		
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:19px;"></td>
		<td class="cs5017E93B" colspan="3" style="width:228px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>1</nobr></td>
		<td class="csA4A4F90C" style="width:86px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>2</nobr></td>
		<td class="csA4A4F90C" style="width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>6</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>7</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>8</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>9</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>10</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>11</nobr></td>
		<td class="csA4A4F90C" style="width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>12</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>13</nobr></td>
		<td class="csA4A4F90C" style="width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>14</nobr></td>
	</tr>
	<?php
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
		//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and ngaysudung <= '".doingay($denngay)."' and ngansach+nguonkhac >=500000000";
	if ($ckbts == "No")
			$_sQLdv .= " and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and chitiethinhthai Not like 'Vật kiến trúc%'";
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
			echo "<td class='cs8FC8786E' colspan='24' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo"</tr>";
		//
		$ar = array(array("A","B","C","D","E",0,0,0,0,0,0,0,0,0));
		$c=0;
		$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0; $Tsl5 = 0; $Tsl6 = 0; $Tsl7 = 0;	
		$sql = "Select TTQLTS,tenchitiet,NUOCSX,namsanxuat,mataisan,ngaynhap,ngansach,nguonkhac from tblqlts where madonvi = '$_madv[ma]' and ngaysudung <= '".doingay($denngay)."'" .
		" and ngansach+nguonkhac >=500000000 ";
		if ($ckbts == "No")
			$sql .= "and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and chitiethinhthai Not like 'Vật kiến trúc%'";	
		$qrsql = mysqli_query($con,$sql);	
		while ($row = mysqli_fetch_array($qrsql))
		{
				$ar[$c][0] = $row['tenchitiet'];
				$ar[$c][1] = $row['mataisan'].".".$row['TTQLTS'];
				$ar[$c][2] = $row['NUOCSX'];
				$ar[$c][3] = $row['namsanxuat'];
				$ar[$c][4] = $row['ngaynhap'];
				$ar[$c][5] = nguyengia($row['TTQLTS'],"ngansach",$_madv['ma']);
				$ar[$c][6] = nguyengia($row['TTQLTS'],"nguonkhac",$_madv['ma']);

				//$ar[$c][5] = $row['ngansach'];
				//$ar[$c][6] = $row['nguonkhac'];
				$ar[$c][7] = $row['ngansach'] + $row['nguonkhac'] + tgts($row['TTQLTS']) - sthm($row['TTQLTS']);
				$ar[$c][8] = htsd($row['TTQLTS'], "QLNN");
				$ar[$c][9] = htsd($row['TTQLTS'], "Kinh doanh");
				$ar[$c][10] = htsd($row['TTQLTS'], "Không KD");
				$ar[$c][11] = htsd($row['TTQLTS'], "Khác");		
				$Tsl1 += $row['ngansach'];
				$Tsl2 += $row['nguonkhac'];
				$Tsl3 += $row['ngansach'] + $row['nguonkhac'] + tgts($row['TTQLTS']) - sthm($row['TTQLTS']);
				$Tsl4 += htsd($row['TTQLTS'], "QLNN");
				$Tsl5 += htsd($row['TTQLTS'], "Kinh doanh");
				$Tsl6 += htsd($row['TTQLTS'], "Không KD");
				$Tsl7 += htsd($row['TTQLTS'], "Khác");
				$c++;
		}
		foreach ($ar as $ar)
		{
			echo "<tr style='vertical-align:top;'>";
				echo "<td style='width:0px;height:19px;'></td>";
				echo "<td class='cs4307EBDF' colspan='3' style='width:226px;height:18px;line-height:15px;text-align:left;vertical-align:middle;'><nobr>".$ar[0]."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:86px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".$ar[1]."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".$ar[2]."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".$ar[3]."</nobr></td>";
				echo "<td class='csA4A4F90C' colspan='2' style='width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".ngaythang($ar[4])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:95px;height:18px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[5])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:95px;height:18px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[6])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:95px;height:18px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($ar[7])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[8])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[9])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[10])."</nobr></td>";
				echo "<td class='csA4A4F90C' style='width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($ar[11])."</nobr></td>";		
			echo "</tr>";
		}
		echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:34px;'></td>";
			echo "<td class='csA96B98F9' colspan='3' style='width:228px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>Tổng&nbsp;cộng:</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:86px;height:33px;'></td>";
			echo "<td class='cs8FC8786E' style='width:76px;height:33px;'></td>";
			echo "<td class='cs8FC8786E' style='width:56px;height:33px;'></td>";
			echo "<td class='cs8FC8786E' colspan='2' style='width:76px;height:33px;'></td>";
			echo "<td class='cs8FC8786E' style='width:95px;height:33px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($Tsl1)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:95px;height:33px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($Tsl2)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:95px;height:33px;line-height:15px;text-align:right;vertical-align:middle;'><nobr>".dinhdangso($Tsl3)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:56px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($Tsl4)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:55px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($Tsl5)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:56px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($Tsl6)."</nobr></td>";
			echo "<td class='cs8FC8786E' style='width:55px;height:33px;line-height:15px;text-align:center;vertical-align:middle;'><nobr>".dinhdangso($Tsl7)."</nobr></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:28px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
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
		<td class="cs62AA4CC9" colspan="7" style="width:521px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>.........,&nbsp;ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm&nbsp;......</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>X&#193;C&nbsp;NHẬN&nbsp;CỦA&nbsp;CẤP&nbsp;C&#211;&nbsp;THẨM&nbsp;QUYỀN</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>THỦ&nbsp;TRƯỞNG&nbsp;CƠ&nbsp;QUAN,&nbsp;TỔ&nbsp;CHỨC,&nbsp;ĐƠN&nbsp;VỊ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="7" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
		<td class="cs77A39B34" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:79px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:521px;height:79px;"></td>
		
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
		<td style="width:0px;height:23px;"></td>
		<td class="cs5DE5F832" style="width:171px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>		
		<td></td>		
		<td class="csE71035DC" rowspan="2" style="width:23px;height:22px;line-height:15px;text-align:center;vertical-align:middle;"><nobr><?php echo $ckbld ?></nobr></td>
		<td></td>
		<td></td>
		<td></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs5DE5F832" style="width:171px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;bổ&nbsp;sung</nobr></td>
		<td></td>		
		<td class="csE71035DC" rowspan="2" style="width:23px;height:22px;line-height:15px;text-align:center;vertical-align:middle;"><nobr> <?php echo $ckbbs ?></nobr></td>
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
	</tr>
</table>
</body>
</html>