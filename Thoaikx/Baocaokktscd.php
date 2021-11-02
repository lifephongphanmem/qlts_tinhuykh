	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=UTF-8'>
	<style type="text/css">
		.cs3D3BE940 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs54291A7F {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:italic; }
		.cs6B03CC12 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; }
		.csE9F2AA97 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csCDE32A0F {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; padding-left:2px;padding-right:2px;}
		.cs260D573 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:17px; font-weight:bold; font-style:normal; padding-left:2px;padding-right:2px;}
		.csD5EA53CA {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:19px; font-weight:normal; font-style:normal; text-decoration: underline;padding-left:2px;padding-right:2px;}
		@media print {
		   .in{
			  display: none !important;
		   }
		}
	</style>
<link rel="stylesheet" href="buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php	
	$tungay = "";
	$madv ="";
	$noidung="";
	if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
		if(isset($_POST['noidung']))
			$noidung = $_POST['noidung'];
	}
	$ngaytach =  explode('/',$tungay);
?>	
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:33px;"></td>
		<td style="height:0px;width:58px;"></td>
		<td style="height:0px;width:97px;"></td>
		<td style="height:0px;width:50px;"></td>
		<td style="height:0px;width:43px;"></td>
		<td style="height:0px;width:39px;"></td>
		<td style="height:0px;width:13px;"></td>
		<td style="height:0px;width:80px;"></td>
		<td style="height:0px;width:38px;"></td>
		<td style="height:0px;width:62px;"></td>
		<td style="height:0px;width:112px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:89px;"></td>
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:82px;"></td>
		<td style="height:0px;width:100px;"></td>
		<td style="height:0px;width:1px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="8" style="width:448px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo "Bộ, cơ quan cấp trên: ".$madv[3]; ?></nobr></td>
		<td class="cs260D573" colspan="13" style="width:765px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csE9F2AA97" colspan="8" style="width:448px;height:22px;line-height:18px;text-align:left;vertical-align:top;"><nobr><?php echo "Đơn vị báo cáo: ".$madv[2]; ?></nobr></td>
		<td class="csD5EA53CA" colspan="13" style="width:765px;height:24px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;Ph&#250;c</nobr></td>
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
		<td></td><td class="csCDE32A0F" colspan="13" style="width:765px;height:23px;line-height:18px;text-align:center;vertical-align:top;"><nobr><?php echo "Ngày: ".$ngaytach[0]." tháng ".$ngaytach[1]." năm ".$ngaytach[2]; ?></nobr></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>

	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
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
		<td class="cs260D573" colspan="13" style="width:765px;height:22px;line-height:19px;text-align:center;vertical-align:middle;"><nobr><?php echo "BÁO CÁO KIỂM KÊ TÀI SẢN CỐ ĐỊNH NĂM ".$ngaytach[2]; ?></nobr></td>
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
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	function tangsl($TTQLTS)
	{
		global $tungay;
		global $con;
		$kq=0;
		$sql = "Select tanggiam,soluong From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) ."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row['tanggiam'] == "Tăng")
				$kq+= $row['soluong'];
			else
				$kq-= $row['soluong'];
		}
		return $kq;		
	}
	function tangst($TTQLTS)
	{
		global $tungay;
		global $con;
		$kq=0;
		$sql = "Select tanggiam,sotien From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) ."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row['tanggiam'] == "Tăng")
				$kq+= $row['sotien'];
			else
				$kq-= $row['sotien'];
		}
		return $kq;		
	}
	function luykehaomon($TTQLTS)
	{
		global $ngaytach;
		global $con;
		$sohaomon = 0;

		$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $ngaytach[2] . " and TTQLTS = " . $TTQLTS.
			" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $ngaytach[2] . " and TTQLTS = " . $TTQLTS.")";
		$queryhm = mysqli_query($con, $sql);
		while ($rowhm = mysqli_fetch_array($queryhm)) {
			$sohaomon += $rowhm['sodu'];
			//$sohaomon += $rowhm['sotien'];
		}
		return $sohaomon;
	}
	function phantramhaomon($tentaisan)
	{		
		$kq=0;
		global $con;
		$sql = "Select phantramhaomon From tbldanhsachqd32 Where  tentaiqd32 = '" . $tentaisan . "' and  mataisanqd32 like 'TS%'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq= $row['phantramhaomon'];
		}
		return $kq;		
	}
	function haomonnam($TTQLTS)
	{
		global $con;
		global $tungay;
		global $ngaytach;
		$kq=0;
		$sql = "Select round(sotien) as sotien From tblhaomon Where TTQLTS = '" . $TTQLTS . "' and namhaomon = ". $ngaytach[2];
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq= $row['sotien'];
		}
		return $kq;		
	}
	function checkts($TTQLTS)
	{
		global $con;
		global $tungay;
		$sql = "Select TTQLTS from tbldenghi WHERE hinhthuc like 'Thu hồi%' and  TTQLTS = " . $TTQLTS . " and ngaythang <='" . doingay($tungay) . "'";
		$qrsql = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($qrsql)) {
			return true;
		}
		return false;
	}
	function ghichu($TTQLTS)
	{
		global $con;
		global $tungay;
		$kq = "";
		$sql = "Select noidung from tbldenghi WHERE hinhthuc like 'Thu hồi%' and  TTQLTS = " . $TTQLTS . " and ngaythang <='" . doingay($tungay) . "'";
		$qrsql = mysqli_query($con, $sql);
		while ($rowkk = mysqli_fetch_array($qrsql)) {
			$kq = $rowkk['noidung'];
		}
		return $kq;
	}
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	?>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="2" width="5%">STT</th>
			<th rowspan="2" >Tên tài sản cố định</th>
			<th rowspan="2" >Năm đưa vào SD</th>
			<th rowspan="2" >Đơn vị tính</th>
			<th rowspan="2" >Số lượng</th>
			<th rowspan="2" >Đơn giá</th>
			<th rowspan="2" >Thành tiền</th>
			<th colspan="2" >Hao mòn năm</th>
			<th rowspan="2" >Lũy kế hao mòn</th>
			<th rowspan="2" >Giá trị còn lại</th>
			<th rowspan="2" >Giá trị TS đến ngày KK</th>
			<th rowspan="2" >Ghi chú</th>
		</tr>
		<tr>
			<th style="font-weight: inherit;">%HM</th>
			<th style="font-weight: inherit;">Số tiền</th>
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
			<th style="font-weight: inherit;">11 = 7-9-10</th>
			<th style="font-weight: inherit;">12</th>
			<th style="font-weight: inherit;">13</th>
		</tr>
		<?php
	//Hết tiêu đề
	//Lấy danh sách đơn vị

	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and tblqlts.ngaysudung <= '" . doingay($tungay) . "' and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
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
			echo "<td></td>";
			echo "<td colspan='12' style='vertical-align:middle;font-weight: bold'>$_madv[ten]</td>";
			echo "</tr>";
		//
		$sqlkk = "Select DISTINCT tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.chitiethinhthai,year(ngaysudung) as nsd,tblqlts.DVT,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,tblqlts.phantram,tblqlts.tentaisan,tbldanhsachqd32.hinhthaitaisan".
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
		$sqlkk = $sqlkk . " where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]'".
			" and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" .  doingay($tungay) ."'  ELSE ngaysudung <= '" . doingay($tungay) ."' END)".
		//	" and tblqlts.ngaysudung <= '" . doingay($tungay) . "'".
		" and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))  order by tbldanhsachqd32.ttsx,tblqlts.tenchitiet";
		
		$querykk=mysqli_query($con,$sqlkk);
		$kk =  array(array("A","B","C","D",0,0,0,0,0,0,0,0,""));
		$cs=0;$i=0;$tc3=0;$tc4=0;$tc5=0;$tc7=0;$tc8=0;
		$tenpl="";$gr6=0;$gr8=0;$gr10=0;$gr11=0;;$tc6=0;$tc8=0;$tc10=0;$tc11=0;$stt=0;$tengr="";
		while($rowkk=mysqli_fetch_array($querykk))
		{
			$kk[$cs][0] = $rowkk['hinhthaitaisan'];
			$kk[$cs][1]=$rowkk['tenchitiet'];
			$kk[$cs][2]=$rowkk['nsd'];
			$kk[$cs][3]=$rowkk['DVT'];	
			$kk[$cs][4]=$rowkk['SL'] + tangsl($rowkk['TTQLTS']);
			if($rowkk['SL'] + tangsl($rowkk['TTQLTS']) > 0)
				$kk[$cs][5]=($rowkk['NG'] + tangst($rowkk['TTQLTS']))/($rowkk['SL'] + tangsl($rowkk['TTQLTS']));
			else
				$kk[$cs][5] =0;
			$kk[$cs][6]=$rowkk['NG'] + tangst($rowkk['TTQLTS']);
			$kk[$cs][7] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
			if(checkts($rowkk['TTQLTS']))
				$kk[$cs][7] = 0;
			$kk[$cs][8] = luykehaomon($rowkk['TTQLTS']);
			$kk[$cs][9] = phantramhaomon($rowkk['tentaisan']);
			$kk[$cs][10] = haomonnam($rowkk['TTQLTS']);
			$kk[$cs][11] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
			if(checkts($rowkk['TTQLTS']))
				$kk[$cs][11] = 0;
			$kk[$cs][12] = ghichu($rowkk['TTQLTS']);
			$cs = $cs + 1;
		}
		for($i=0;$i<$cs;$i++)
		{
			$stt++;
			$tenpl  = $kk[$i][0];
			if ( $tenpl != $tengr)
			{
				for($j=0;$j<$cs;$j++)
				{
					if ($kk[$j][0]==$tenpl)
					{
						$gr6 += $kk[$j][6];
						$gr8 += $kk[$j][8];
						$gr10 += $kk[$j][10];
						$gr11 += $kk[$j][11];
						$tc6 += $kk[$j][6];
						$tc8 += $kk[$j][8];
						$tc10 += $kk[$j][10];
						$tc11 += $kk[$j][11];
					}
				}
		echo "<tr style='vertical-align:middle;font-weight: bold'>";
			echo "<td ></td>";
			echo "<td colspan='5' style='text-align:left;'><nobr>$tenpl</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($gr6)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr></nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($gr10)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($gr8)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($gr11)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($gr11)."</nobr></td>";
			echo "<td ></td>";
		echo "</tr>";
				$gr6=0;$gr8=0;$gr10=0;$gr11=0;
			}
		echo "<tr style='vertical-align:middle;'>";
			echo "<td style='text-align:center;'><nobr>$stt</nobr></td>";
			echo "<td style='text-align:left;'><nobr>". $kk[$i][1] ."</nobr></td>";
			echo "<td style='text-align:center;'><nobr>". $kk[$i][2] ."</nobr></td>";
			echo "<td style='text-align:center;'><nobr>". $kk[$i][3] ."</nobr></td>";
			echo "<td style='text-align:center;'><nobr>". dinhdangso($kk[$i][4]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". dinhdangso($kk[$i][5]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". dinhdangso($kk[$i][6]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". $kk[$i][9] ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". dinhdangso($kk[$i][10]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". dinhdangso($kk[$i][8]) ."</nobr></td>";
			echo "<td style=text-align:right;'><nobr>". dinhdangso($kk[$i][11]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>". dinhdangso($kk[$i][11]) ."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".$kk[$i][12]."</nobr></td>";
		echo "</tr>";
			$tengr = $kk[$i][0];
		}
		echo "<tr style='vertical-align:middle;font-weight: bold'>";
			echo "<td  style='width:32px;height:23px;'></td>";
			echo "<td colspan='5' style='text-align:center;'><nobr>Tổng cộng</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($tc6)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr></nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($tc10)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($tc8)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($tc11)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr>".dinhdangso($tc11)."</nobr></td>";
			echo "<td style='text-align:right;'><nobr></nobr></td>";
			echo "<td></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td></td>
		<td class="cs6B03CC12" colspan="6" style="width:320px;height:25px;"></td>
		<td class="cs6B03CC12" colspan="6" style="width:321px;height:25px;"></td>
		<td class="cs54291A7F" colspan="5" style="width:320px;height:25px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[7].', ngày ... tháng ... năm ......'; ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td></td>
		<td class="cs3D3BE940" colspan="6" style="width:320px;height:25px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr>Người&nbsp;lập&nbsp;biểu</nobr></td>
		<td class="cs3D3BE940" colspan="6" style="width:321px;height:25px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="cs3D3BE940" colspan="5" style="width:320px;height:25px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;height: 80px;">
		<td style="width:0px;height:25px;"></td>
		<td></td>
		<td class="cs54291A7F" colspan="6" style="width:320px;height:25px;line-height:17px;text-align:center;vertical-align:top;"><nobr>(K&#253;&nbsp;t&#234;n)</nobr></td>
		<td class="cs54291A7F" colspan="6" style="width:321px;height:25px;line-height:17px;text-align:center;vertical-align:top;"><nobr>(K&#253;&nbsp;t&#234;n)</nobr></td>
		<td class="cs54291A7F" colspan="5" style="width:320px;height:25px;line-height:17px;text-align:center;vertical-align:top;"><nobr>(K&#253;&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:55px;"></td>
		<td></td>
		<td class="cs3D3BE940" colspan="6" style="width:320px;height:55px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[4];?></nobr></td>
		<td class="cs3D3BE940" colspan="6" style="width:321px;height:55px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[5];?></nobr></td>
		<td class="cs3D3BE940" colspan="5" style="width:320px;height:55px;line-height:17px;text-align:center;vertical-align:bottom;"><nobr><?php echo $madv[6];?></nobr></td>
	</tr>
</table>
</body>
</html>