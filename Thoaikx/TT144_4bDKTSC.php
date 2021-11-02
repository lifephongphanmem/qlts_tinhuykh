<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csF0462E56 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs5DE5F832 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; padding-left:2px;padding-right:2px;}
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
		$sql = "Select loaihinh from thongtindonvi WHERE madonvi = '".$ms."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
?>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: left;font-weight: bold;width: 50%">
			<nobr>Bộ, tỉnh: </nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 04b-ĐK/TSC</nobr></td>
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
		<td colspan="3" style="text-align: center;font-weight: bold;">BÁO CÁO KÊ KHAI XE Ô TÔ CỦA CƠ QUAN, TỔ CHỨC, ĐƠN VỊ</td>
	</tr>
</table>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
	<tr>
		<th rowspan="4" width="20%">TÀI SẢN</th>
		<th rowspan="4" >NHÃN HIỆU</th>
		<th rowspan="4" >BIỂN KIỂM SOÁT</th>
		<th rowspan="4" >SỐ CHỖ NGỒI/TẢI TRỌNG</th>
		<th rowspan="4" >NƯỚC SẢN XUẤT</th>
		<th rowspan="4" >NĂM SẢN XUẤT</th>
		<th rowspan="4" >NGÀY, THÁNG, NĂM SỬ DỤNG</th>
		<th rowspan="4" >CÔNG SUẤT XE</th>
		<th rowspan="4" >CHỨC DANH SỬ DỤNG XE</th>
		<th rowspan="4" >NGUỒN GỐC XE</th>
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
		<th style="font-weight: inherit;">16</th>
		<th style="font-weight: inherit;">17</th>
		<th style="font-weight: inherit;">18</th>
		<th style="font-weight: inherit;">19</th>
		<th style="font-weight: inherit;">20</th>
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
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
		"  INNER JOIN tbldanhsachqd32 ON tblqlts.mataisan = tbldanhsachqd32.mataisanqd32".
		" where tblqlts.madonvi Like '$msdv%' and (tblqlts.chitiethinhthai Like 'Phương tiện vận tải%'  or tbldanhsachqd32.hinhthaitaisan Like 'Xe ô tô%')and ngaysudung <= '" . doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
			'ten'=>$_r['tendv']
		);
	}
	$TtnNS = 0; $TtnK = 0;$Ttgtcl = 0;$Ttcong = 0;
	$Ttqlnn = 0;$Ttkd = 0; $Ttkkd = 0; $Tthdk = 0;
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv) {
		//Tên đơn vị
		echo "<tr style='vertical-align:top;'>";
		echo "<td colspan='20' style='vertical-align:middle;font-weight: bold;text-align: left'>$_madv[ten]</td>";
		echo "</tr>";
		//Kết thúc tên đơn vị
		$tnNS = 0; $tnK = 0;$tgtcl = 0;$tcong = 0;
		$tqlnn = 0;$tkd = 0; $tkkd = 0; $thdk = 0;
		$sqlts = "Select *  From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 ".
			" Where madonvi = '$_madv[ma]' and (hinhthaitaisan Like 'Xe ô tô%' or hinhthaitaisan Like 'Phương tiện vận tải%') and ngaysudung <= '" . doingay($denngay) . "'".
			" and TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
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
			$qlnn = dinhdangso($qlnn);
			$kd = dinhdangso($kd);
			$kkd = dinhdangso($kkd);
			$hdk = dinhdangso($hdk);
			$cong=dinhdangso($nNS+$nK);
			$nNS = dinhdangso($nNS);
			$nK = dinhdangso($nK);
			$gtcl = dinhdangso($gtcl);

			echo "<tr>";
			echo "<td style='text-align: left;'><nobr>" . $tents . "</nobr></td>";
			echo "<td style='text-align: left;'>".$nh."</td>";
			echo "<td style='text-align: center;'>".$bks."</td>";
			echo "<td style='text-align: center;'>".$scntt."</td>";
			echo "<td style='text-align: right;'><nobr>" . $nsx . "</nobr></td>";
			echo "<td style='text-align: right;'><nobr>" . $tgsx . "</nobr></td>";
			echo "<td style='text-align: right;'>" . $ntsd . "</td>";
			echo "<td style='text-align: right;'>" . $csxe . "</td>";
			echo "<td style='text-align: right;'>".$cdsd."</td>";
			echo "<td style='text-align: right;'>".$ngxe."</td>";
			echo "<td style='text-align: right;'>".$cong."</td>";
			echo "<td style='text-align: right;'>".$nNS."</td>";
			echo "<td style='text-align: right;'>".$nK."</td>";
			echo "<td style='text-align: right;'>".$gtcl."</td>";
			echo "<td style='text-align: right;'>".$qlnn."</td>";
			echo "<td style='text-align: right;'>".$kd."</td>";
			echo "<td style='text-align: right;'>".$kkd."</td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'>".$hdk."</td>";
			echo "</tr>";
		}
		$TtnNS += $tnNS; $TtnK += $tnK;$Ttgtcl += $tgtcl;$Ttcong = 0;
		$Ttqlnn += $tqlnn;$Ttkd += $tkd; $Ttkkd += $tkkd; $Tthdk += $thdk;

		$tcong = dinhdangso($tnNS+$tnK);
		$tnNS = dinhdangso($tnNS); $tnK = dinhdangso($tnK);$tgtcl = dinhdangso($tgtcl);		
		$tqlnn = dinhdangso($tqlnn);$tkd = dinhdangso($tkd); $tkkd = dinhdangso($tkkd); $thdk = dinhdangso($thdk);

		echo "<tr style='font-weight: bold'>";
		echo "<td style='text-align: center;font-weight: bold'>Cộng</td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'>".$tcong."</td>";
		echo "<td style='text-align: right;'>".$tnNS."</td>";
		echo "<td style='text-align: right;'>".$tnK."</td>";
		echo "<td style='text-align: right;'>".$gtcl."</td>";
		echo "<td style='text-align: right;'>".$tqlnn."</td>";
		echo "<td style='text-align: right;'>".$tkd."</td>";
		echo "<td style='text-align: right;'>".$tkkd."</td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'></td>";
		echo "<td style='text-align: right;'>".$thdk."</td>";
		echo "</tr>";
	}
	// in tổng cộng

	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: center;font-weight: bold'>Tổng cộng</td>";
	echo "<td style='text-align: left;'></td>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'>".dinhdangso($TtnNS+$TtnK)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($TtnNS)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($TtnK)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($Ttgtcl)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($Ttqlnn)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($Ttkd)."</td>";
	echo "<td style='text-align: right;'>".dinhdangso($Ttkkd)."</td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'></td>";
	echo "<td style='text-align: right;'>".dinhdangso($Tthdk)."</td>";
	echo "</tr>";

	?>
	<table >
		<tr>
			<td  style="text-align: center;width=50%;">............, ngày ... tháng ... năm ......</td>
			<td  style="text-align: center;width=50%;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center;: center; font-weight: bold;">XÁC NHẬN CỦA CƠ QUAN QUẢN LÝ CẤP TRÊN (nếu có)</td>
			<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ</td>
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
			<td style="text-align: center; font-style: italic;">(Ký, họ tên và đóng dấu)</td>
		</tr>
		<tr style="height: 75px">
			<td </td>
			<td></td>
		</tr>
		<tr ">
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-weight: bold;"><?php echo $madv[6]; ?></td>
		</tr>
	</table>
	<table>
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832" colspan="6" style="width:187px;height:22px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;lần&nbsp;đầu</nobr></td>
			<td></td>
			<?php
			if(isset($_POST['create'])){
				$abc = $_POST['option'];
			}
			if($abc === 'Báo cáo kê khai lần đầu'){
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
			}
			else{
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'></td>";
			}
			?>
			<td colspan="30"></td>
		</tr>
		<tr style="vertical-align:top;">
			<td class="cs5DE5F832" colspan="6" style="width:187px;height:23px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>-&nbsp;B&#225;o&nbsp;c&#225;o&nbsp;k&#234;&nbsp;khai&nbsp;bổ&nbsp;sung</nobr></td>
			<td></td>
			<?php
			if(isset($_POST['create'])){
				$abc = $_POST['option'];
			}
			if($abc === 'Báo cáo kê khai bổ xung'){
				echo"<td class='csF0462E56' colspan='2'  style='width:23px;height:22px;text-align:center;'><b>X</b></td>";
			}else{
				echo"<td class='csF0462E56' colspan='2' style='width:23px;height:22px;text-align:center;'></td>";
			}

			?>
			<td colspan="30"></td>
		</tr>
	</table>
</body>
</html>