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
		.csE5855143 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:18px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
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
	$loaihinhdv = "";
	if(isset($_POST['create']))
	{		
		$denngay = $_POST['ntden'];
		$tungay = $_POST['nttu'];	
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];			
		if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];		
		$loaihinhdv = loaihinhdv($madv[0])	;
	}	
	function loaihinhdv($ms){		
		$kq="";
		global $con;
		$sql = "Select loaihinh from thongtindonvi where madonvi = '$ms'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql)){				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}

	function sthm ($mats, $ms)
	{
		//global $msdv;
		$kq=0;
		global $con;
		$sql = "Select * From tblhaomon Where madonvi = '$ms' and TTQLTS = '" . $mats . "'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql)){
			$kq += kieudouble($row['sotien']) + kieudouble($row['sodu']);
		}
		return $kq;
	}

	function htsd ($mats, $phanloai, $ms)
	{
		global $msdv;
		global $con;
		$kq =0;
		$sql = "Select soluong From tblhientrang Where madonvi = '$ms' and TTQLTS = '" . $mats . "' and phanloai = '" . $phanloai . "' order by TThientrang";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$kq +=  kieudouble($row['soluong']);
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
		<td class="csB6E29E9B" colspan="5" style="width:322px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;03-DM/TSNN</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị&nbsp;chủ&nbsp;quản:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $madv[3]; ?></nobr></td>
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
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:21px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php  echo $madv[1];?></nobr></td>
		<td colspan="6"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" style="width:175px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Loại&nbsp;h&#236;nh&nbsp;đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:449px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo $loaihinhdv;?></nobr></td>
		<td colspan="6"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:14px;"></td>
		<td colspan="15"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:27px;"></td>
		<td class="csE5855143" colspan="15" style="width:1038px;height:27px;line-height:24px;text-align:center;vertical-align:middle;"><nobr>DANH&nbsp;MỤC&nbsp;T&#192;I&nbsp;SẢN&nbsp;KH&#193;C&nbsp;(TRỪ&nbsp;TRỤ&nbsp;SỞ&nbsp;L&#192;M&nbsp;VIỆC,&nbsp;CƠ&nbsp;SỞ&nbsp;HOẠT&nbsp;ĐỘNG&nbsp;SỰ&nbsp;NGHIỆP&nbsp;V&#192;&nbsp;XE&nbsp;&#212;&nbsp;T&#212;)&nbsp;ĐỀ&nbsp;NGHỊ&nbsp;XỬ&nbsp;L&#221;</nobr></td>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td colspan="15"></td>
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
		<td class="csA4A4F90C" colspan="2" style="width:191px;height:32px;line-height:15px;text-align:center;vertical-align:middle;font-weight: bold"><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:95px;height:33px;line-height:15px;text-align:center;vertical-align:middle;font-weight: bold"><nobr>Gi&#225;&nbsp;trị</nobr><br/><nobr>c&#242;n&nbsp;lại</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:56px;height:33px;line-height:15px;text-align:center;vertical-align:middle;font-weight: bold"><nobr>QLNN</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:112px;height:32px;line-height:15px;text-align:center;vertical-align:middle;font-weight: bold"><nobr>HĐ&nbsp;sự&nbsp;nghiệp</nobr></td>
		<td class="cs914D1A68" rowspan="2" style="width:55px;height:33px;line-height:15px;text-align:center;vertical-align:middle;font-weight: bold"><nobr>HĐ</nobr><br/><nobr>kh&#225;c</nobr></td>
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
		<td class="csA4A4F90C" style="width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>3</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>4</nobr></td>
		<td class="csA4A4F90C" colspan="2" style="width:76px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>5</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>6</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>7</nobr></td>
		<td class="csA4A4F90C" style="width:95px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>8</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>9</nobr></td>
		<td class="csA4A4F90C" style="width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>10</nobr></td>
		<td class="csA4A4F90C" style="width:56px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>11</nobr></td>
		<td class="csA4A4F90C" style="width:55px;height:18px;line-height:15px;text-align:center;vertical-align:middle;"><nobr>12</nobr></td>
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
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'  and ngaysudung <= '".doingay($denngay)."'" .
		" and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and TTQLTS in (select TTQLTS from tbldenghi)";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){
			//
		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:19px;'></td>";
		echo "<td class='cs8FC8786E' colspan='15' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo "</tr>";
			//
		$ar = array(array("A","B","C","D","E",0,0,0,0,0,0,0,0,0));
		$c=0;
		$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0; $Tsl5 = 0; $Tsl6 = 0; $Tsl7 = 0;	
		$sql = "Select TTQLTS,tenchitiet,NUOCSX,namsanxuat,mataisan,ngaynhap,ngansach,nguonkhac from tblqlts where madonvi = '$_madv[ma]' and ngaysudung <= '".doingay($denngay)."'" .
		" and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and TTQLTS in (select TTQLTS from tbldenghi)";	
		$qrsql = mysqli_query($con,$sql);	
		while ($row = mysqli_fetch_array($qrsql))
		{
			$nNS=nguyengia($row['TTQLTS'],"ngansach",$_madv['ma']);
			$nNK=nguyengia($row['TTQLTS'],"nguonkhac",$_madv['ma']);
			$ar[$c][0] = $row['tenchitiet'];
			$ar[$c][1] = $row['mataisan'].".".$row['TTQLTS'];
			$ar[$c][2] = $row['NUOCSX'];
			$ar[$c][3] = $row['namsanxuat'];
			$ar[$c][4] = $row['ngaynhap'];
			$ar[$c][5] = kieudouble($nNS);
			$ar[$c][6] = kieudouble($nNK);
			$ar[$c][7] = kieudouble($nNS)+ kieudouble($nNK) - kieudouble(sthm($row['TTQLTS'],$_madv['ma']));
			$ar[$c][8] = htsd($row['TTQLTS'], "QLNN", $_madv['ma']);
			$ar[$c][9] = htsd($row['TTQLTS'], "Kinh doanh", $_madv['ma']);
			$ar[$c][10] = htsd($row['TTQLTS'], "Không KD", $_madv['ma']);
			$ar[$c][11] = htsd($row['TTQLTS'], "Khác", $_madv['ma']);		
			$Tsl1 += kieudouble($nNS);
			$Tsl2 += kieudouble($nNK);
			$Tsl3 += kieudouble($nNS)+ kieudouble($nNK) - kieudouble(sthm($row['TTQLTS'],$_madv['ma']));
			$Tsl4 += kieudouble(htsd($row['TTQLTS'], "QLNN", $_madv['ma']));
			$Tsl5 += kieudouble(htsd($row['TTQLTS'], "Kinh doanh", $_madv['ma']));
			$Tsl6 += kieudouble(htsd($row['TTQLTS'], "Không KD", $_madv['ma']));
			$Tsl7 += kieudouble(htsd($row['TTQLTS'], "Khác", $_madv['ma']));
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
		<td colspan="15"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="7" style="width:521px;height:20px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>.........,&nbsp;ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm&nbsp;......</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>THỦ&nbsp;TRƯỞNG&nbsp;CƠ&nbsp;QUAN,&nbsp;TỔ&nbsp;CHỨC,&nbsp;ĐƠN&nbsp;VỊ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="7" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="8" style="width:521px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:79px;"></td>
		<td class="csB6E29E9B" colspan="7" style="width:521px;height:79px;"></td>
		<td class="csB6E29E9B" colspan="8" style="width:521px;height:79px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6];?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:13px;"></td>
		<td colspan="15"></td>
	</tr>	
</table>
</body>
</html>