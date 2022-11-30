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
function sohmlk($idts)
{
	global $denngay;
	global $con;
	$sohaomon = 0;
	$nam = substr($denngay,6,4);
	$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.
		" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $idts.")";
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon += $rowhm['sodu'];
		$sohaomon += $rowhm['sotien'];
	}
	return $sohaomon;
}
	function sthm ($mats)
	{
		global $denngay;
		global $con;
		$nam = substr($denngay,6,4);
		$kq=0;
		$sql = "Select * From tblhaomon Where TTQLTS = '" . $mats . "' and namhaomon <= '$nam'";
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
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: left;font-weight: bold;width: 50%">
			<nobr>Bộ, tỉnh: </nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 04c-ĐK/TSC</nobr></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Cơ quan quản lý cấp trên: ".$madv[3]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Cơ quan, tổ chức, đơn vị sử dụng tài sản: ".$madv[2]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>

	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Mã đơn vị: ".$madv[1]; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Loại hình đơn vị: ".$loaihinhdv; ?></nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ></td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center;font-weight: bold;">BÁO CÁO KÊ KHAI TÀI SẢN CỐ ĐỊNH KHÁC CỦA CƠ QUAN, TỔ CHỨC, ĐƠN VỊ </br> (NGOÀI TRỤ SỞ LÀM VIỆC, CƠ SỞ HOẠT ĐỘNG SỰ NGHIỆP, XE Ô TÔ)</td>
	</tr>
</table>
<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
	<tr>
		<th rowspan="4"  >TÀI SẢN</th>
		<th rowspan="4" >KÝ HIỆU</th>
		<th rowspan="4" >NƯỚC SẢN XUẤT</th>
		<th rowspan="4" >NĂM SẢN XUẤT</th>
		<th rowspan="4" >NGÀY, THÁNG, NĂM SỬ DỤNG</th>
		<th colspan="4" >GIÁ TRỊ THEO SỔ KẾ TOÁN </br> (Nghìn đồng)</th>
		<th colspan="6" >HIỆN TRẠNG SỬ DỤNG </br> (m2)</th>
	</tr>
	<tr>
		<th colspan="3" >Nguyên giá</th>
		<th rowspan="3" >Giá trị còn lại</th>
		<th rowspan="3" >Quản lý nhà nước</th>
		<th colspan="4" >Hoạt động sự nghiệp</th>
		<th rowspan="3" >Sử dụng khác</th>
	</tr>
	<tr>
		<th rowspan="2" >Tổng cộng</th>
		<th colspan="2" >Trong đó</th>
		<th rowspan="2" >Không kinh doanh</th>
		<th rowspan="2" >Kinh doanh</th>
		<th rowspan="2" >Cho thuê</th>
		<th rowspan="2" >Liên doanh, liên kết</th>
	</tr>
	<tr>
		<th  >Nguồn NS</th>
		<th  >Nguồn khác</th>
	</tr>
	<tr>
		<th style="font-weight: inherit;">1</th>
		<th style="font-weight: inherit;">2</th>
		<th style="font-weight: inherit;">3</th>
		<th style="font-weight: inherit;">4</th>
		<th style="font-weight: inherit;">5</th>
		<th style="font-weight: inherit;">6</th>
		<th style="font-weight: inherit;">7</th>
		<th style="font-weight: inherit;">8</th>
		<th style="font-weight: inherit;">9</th>
		<th style="font-weight: inherit;">10</th>
		<th style="font-weight: inherit;">11</th>
		<th style="font-weight: inherit;">12</th>
		<th style="font-weight: inherit;">13</th>
		<th style="font-weight: inherit;">14</th>
		<th style="font-weight: inherit;">15</th>
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
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv ".
		"from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi ".
		" INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 ".
		" where tblqlts.madonvi Like '$msdv%' and ngaysudung <= '".doingay($denngay)."'";
	if ($ckbts == "No")
		$_sQLdv .= "and (tblqlts.chitiethinhthai Not like 'Phương tiện vận tải%' and tbldanhsachqd32.hinhthaitaisan Not like 'Xe ô tô%')".
			" and (tblqlts.chitiethinhthai Not like 'Nhà%' and tbldanhsachqd32.hinhthaitaisan Not like 'Nhà%')".
			" and tblqlts.chitiethinhthai Not like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai Not like 'Đất%'".
			" and (tblqlts.chitiethinhthai Not like 'Vật kiến trúc%' and tbldanhsachqd32.hinhthaitaisan Not like 'Vật kiến trúc%')";
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
		echo "<td colspan='15' style='vertical-align:middle;font-weight: bold;text-align: left'>$_madv[ten]</td>";
		echo "</tr>";
		//
		$ar = array(array("A","B","C","D","E",0,0,0,0,0,0,0,0,0));
		$c=0;
		$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0; $Tsl5 = 0; $Tsl6 = 0; $Tsl7 = 0;$tcong = 0;
		$sql = "Select TTQLTS,tenchitiet,NUOCSX,namsanxuat,mataisan,ngaynhap,ngansach,nguonkhac".
			"  From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32  ".
			" where madonvi = '$_madv[ma]' and ngaysudung <= '".doingay($denngay)."'";
		if ($ckbts == "No")
			$sql .= "and (tblqlts.chitiethinhthai Not like 'Phương tiện vận tải%' and tbldanhsachqd32.hinhthaitaisan Not like 'Xe ô tô%')".
				" and (tblqlts.chitiethinhthai Not like 'Nhà%' and tbldanhsachqd32.hinhthaitaisan Not like 'Nhà%')".
			" and tblqlts.chitiethinhthai Not like 'Quyền sử dụng đất%' and tblqlts.chitiethinhthai Not like 'Đất%'".
				" and (tblqlts.chitiethinhthai Not like 'Vật kiến trúc%' and tbldanhsachqd32.hinhthaitaisan Not like 'Vật kiến trúc%')";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
				$ar[$c][0] = $row['tenchitiet'];
				$ar[$c][1] = $row['mataisan'].".".$row['TTQLTS'];
				$ar[$c][2] = $row['NUOCSX'];
				$ar[$c][3] = $row['namsanxuat'];
				$ar[$c][4] = $row['ngaynhap'];
				$ar[$c][5] = nguyengia($row['TTQLTS'],"ngansach",$_madv['ma'])+ nguyengia($row['TTQLTS'],"nguonkhac",$_madv['ma']);
				$ar[$c][6] = nguyengia($row['TTQLTS'],"ngansach",$_madv['ma']);
				$ar[$c][7] = nguyengia($row['TTQLTS'],"nguonkhac",$_madv['ma']);

				//$ar[$c][5] = $row['ngansach'];
				//$ar[$c][6] = $row['nguonkhac'];
				//$ar[$c][8] = $row['ngansach'] + $row['nguonkhac'] + tgts($row['TTQLTS']) - sohmlk($row['TTQLTS']);
				$ar[$c][8] = $row['ngansach'] + $row['nguonkhac'] - sohmlk($row['TTQLTS']);
				$ar[$c][9] = htsd($row['TTQLTS'], "QLNN");
				$ar[$c][10] = htsd($row['TTQLTS'], "Kinh doanh");
				$ar[$c][11] = htsd($row['TTQLTS'], "Không KD");
				$ar[$c][12] = htsd($row['TTQLTS'], "Khác");
				$tcong += nguyengia($row['TTQLTS'],"ngansach",$_madv['ma'])+ nguyengia($row['TTQLTS'],"nguonkhac",$_madv['ma']);
				$Tsl1 += $row['ngansach'];
				$Tsl2 += $row['nguonkhac'];
				$Tsl3 += $row['ngansach'] + $row['nguonkhac'] - sohmlk($row['TTQLTS']);
				$Tsl4 += htsd($row['TTQLTS'], "QLNN");
				$Tsl5 += htsd($row['TTQLTS'], "Kinh doanh");
				$Tsl6 += htsd($row['TTQLTS'], "Không KD");
				$Tsl7 += htsd($row['TTQLTS'], "Khác");
				$c++;
		}
		foreach ($ar as $ar)
		{
			echo "<tr>";
			echo "<td style='text-align: left;' width='30px'><nobr>" . $ar[0] . "</nobr></td>";
			echo "<td style='text-align: left;'>".$ar[1]."</td>";
			echo "<td style='text-align: center;'>".$ar[2]."</td>";
			echo "<td style='text-align: center;'>".$ar[3]."</td>";
			echo "<td style='text-align: center;'><nobr>" . ngaythang($ar[4]) . "</nobr></td>";
			echo "<td style='text-align: right;'><nobr>" . dinhdangso($ar[5]) . "</nobr></td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ar[6]) . "</td>";
			echo "<td style='text-align: right;'>" . dinhdangso($ar[7]) . "</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ar[8])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ar[9])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ar[11])."</td>";
			echo "<td style='text-align: right;'>".dinhdangso($ar[10])."</td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'>".dinhdangso($ar[12])."</td>";
			echo "</tr>";

		}
		echo "<tr style='font-weight: bold'>";
		echo "<td style='text-align: center;font-weight: bold'>Cộng</td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'>".dinhdangso($tcong)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl1)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl2)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl3)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl4)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl6)."</td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl5)."</td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'>".dinhdangso($Tsl7)."</td>";
		echo "</tr>";
	}
	?>

	<table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td style="text-align: center;font-style: italic;;width: 40%">
				............, ngày ... tháng ... năm ......
			</td>
			<td width="30%"></td>
			<td style="text-align: center; font-style: italic;;"><nobr>............, ngày ... tháng ... năm ......</nobr></td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold;"><nobr>XÁC NHẬN CỦA CƠ QUAN QUẢN LÝ CẤP TRÊN (nếu có)</nobr></td>
			<td></td>
			<td style="text-align: center;font-weight: bold;" >THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ</td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic;"><nobr>(Ký, họ tên và đóng dấu)</nobr></td>
			<td></td>
			<td style="text-align: center;font-style: italic;" >(Ký, họ tên và đóng dấu)</td>
		</tr>
		<tr style="height: 75px">
			<td > </td>
			<td></td>
			<td ></td>
		</tr>
		<tr ">
		<td  style="text-align: center; font-style: italic;"></td>
		<td></td>
		<td  style="text-align: center; font-weight: bold;"><?php echo $madv[6]; ?></td>
		</tr>
	</table>
	<table >
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832"  style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>
			<td></td>
			<td class="csE71035DC"  style="width:23px;height:22px;line-height:15px;text-align:center;vertical-align:middle;"><nobr><?php echo $ckbld ?></nobr></td>
		</tr>
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832" style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>- Báo cáo kê khai bổ sung</nobr></td>
			<td></td>
			<td class="csE71035DC" style="width:23px;height:22px;line-height:15px;text-align:center;vertical-align:middle;"><nobr> <?php echo $ckbbs ?></nobr></td>
		</tr>
	</table>
</body>
</html>