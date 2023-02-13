<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csAA5B9630 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.csDC952B64 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.cs425CAA45 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs16D304E1a {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csA0A5FAFF {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-left:2px;}
		.csB8DDBB53 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; padding-right:2px;}
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
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
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
	$phanloai = "";
	$tungay = "";
	$denngay = "";
	$madv ="";	
	$nambc="";
	$noidung="";
	if(isset($_POST['create'])){
		if ($_POST['sobg'] != "")
			$phanloai = explode('>',$_POST['sobg']);
		$nambc = $_POST['nambc'];		
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
		if(isset($_POST['noidung']))
			$noidung=$_POST['noidung'];
	}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:5px;"></td>
		<td style="height:0px;width:35px;"></td>
		<td style="height:0px;width:84px;"></td>
		<td style="height:0px;width:195px;"></td>
		<td style="height:0px;width:25px;"></td>
		<td style="height:0px;width:6px;"></td>
		<td style="height:0px;width:125px;"></td>
		<td style="height:0px;width:77px;"></td>
		<td style="height:0px;width:127px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:81px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Đơn vị: ".$madv[2]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="3" style="width:304px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:335px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;số&nbsp;C55&nbsp;-&nbsp;HD</nobr></td>
	</tr>

	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="3" style="width:165px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr><?php echo "Mã ĐVQHNS: ".$madv[1]; ?></nobr></td>
		<td class="csB6E29E9B" colspan="2" style="width:220px;height:20px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:18px;"></td>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2C853136" colspan="9" style="width:716px;height:24px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>BẢNG&nbsp;T&#205;NH&nbsp;HAO&nbsp;M&#210;N&nbsp;TSCĐ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="cs5DE5F832" colspan="9" style="width:716px;height:22px;text-align:center;vertical-align:middle;"><?php echo "Năm: ".$nambc; ?></td>
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
	</tr>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
	//Tiêu đề báo cáo
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:65px;'></td>";
		echo"<td class='csAA5B9630' style='width:5px;height:63px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>TT</nobr></td>";
		echo"<td class='cs425CAA45' colspan='5' style='width:344px;height:63px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Loại&nbsp;t&#224;i&nbsp;sản&nbsp;cố&nbsp;định</nobr></td>";
		echo"<td class='cs425CAA45' style='width:124px;height:63px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Nguy&#234;n&nbsp;gi&#225;</nobr></td>";
		echo"<td class='cs425CAA45' style='width:76px;height:63px;line-height:18px;text-align:center;vertical-align:middle;'><nobr>Tỉ&nbsp;lệ</nobr><br/><nobr>hao</nobr><br/><nobr>m&#242;n</nobr></td>";
		echo"<td class='cs425CAA45' style='width:126px;height:63px;line-height:18px;text-align:center;vertical-align:middle;'>Số hao mòn<br/>tính vào $nambc</td>";
	echo"</tr>";
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'";
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
		if (strlen($madv[0]) <16){
			echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:24px;'></td>";
		echo "<td class='cs425CAA45' colspan='9' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo "</tr>";
		}
		$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.phantram,tblqlts.chitiethinhthai,tblqlts.ngansach+tblqlts.nguonkhac as NG,tbldanhsachqd32.hinhthaitaisan
		From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
		where noidung like '$noidung%' and  tblqlts.madonvi = '$_madv[ma]'";
			//" and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and year(ngaythang) < " . $nambc . ") order by tbldanhsachqd32.ttsx";
		if ($phanloai == "")
		{
			$sqlts = $sqlts." and tblqlts.chitiethinhthai like '" .$phanloai."%'";
		}
		else
		{
			$sqlts = $sqlts." and (";
			$count=0;$chars=str_split($_POST["sobg"]);
			foreach($chars as $char)
			{
				if($char=='>')
				{
					$count++;
				}
			}
			for($i=0;$i<$count;$i++)
			{
				if ($i == $count - 1)
					$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%'";
				else
					$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%' or ";
			}	
			$sqlts = $sqlts.")";		
		}
		//$sqlts = $sqlts." and year(tblqlts.ngaysudung) <= '" . $nambc . "'".
		$sqlts = $sqlts . " and (CASE WHEN year(ngaythangchuyen) > 0 THEN year(tblqlts.ngaythangchuyen) <= " . $nambc."  ELSE year(tblqlts.ngaysudung) <= " . $nambc." END) ".
		" and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and year(ngaythang) < " . $nambc . ") order by tbldanhsachqd32.ttsx";

		$queryts=mysqli_query($con,$sqlts);
		$tg =  array(array(0,"","",0,0,0));
		$cs=0;$i=0;
		$HM = 0;
		$tsl1 = 0;$tsl3 = 0;
		while($rowts=mysqli_fetch_array($queryts)) {
			$tanggiam = 0;
			$sql = "Select sotien,tanggiam from tbltanggiam where TTQLTS = " . $rowts['TTQLTS'];
			$qrsql = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				if ($row['tanggiam'] == "Tăng")
					$tanggiam += $row['sotien'];
				if ($row['tanggiam'] == 'Giảm')
					$tanggiam -= $row['sotien'];
			}
			$HM = 0;
			$sqlhm = "Select sodu, sotien from tblhaomon where TTQLTS = " . $rowts['TTQLTS'] . " and namhaomon = " . $nambc;
			$queryhm = mysqli_query($con, $sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)) {
				$HM = $rowhm['sotien'];
			}
			$tg[$cs][0] = $cs + 1;
			$tg[$cs][1] = $rowts['tenchitiet'];
			$tg[$cs][2] = $rowts['hinhthaitaisan'];
			$tg[$cs][3] = $rowts['NG'] + $tanggiam;
			$tg[$cs][4] = $rowts['phantram'];
			$tg[$cs][5] = $HM;
			$cs = $cs + 1;

		}
		 $sl1=0; $sl2= 0; $sl3 = 0;$tennhomsau = "";$stt =0;
		for($i = 0; $i < $cs; $i++)
		{
			$stt ++;		
			$tennhom=$tg[$i][2];
			$tents=$tg[$i][1];
			$sl1 = dinhdangso($tg[$i][3]);
			$sl2 = $tg[$i][4];
			$sl3 = dinhdangso($tg[$i][5]);
			$tsl1 = $tsl1 + $tg[$i][3];
			$tsl3 = $tsl3 + $tg[$i][5];
			if ($tennhom != $tennhomsau)
			{
				//Nhóm tài sản
				$nhomsl1 = 0 ; $nhomsl3 = 0; $j=0;
				for($j=0;$j<$cs;$j++){
					if ($tg[$j][2]==$tennhom)
					{
						$nhomsl1= $nhomsl1 + $tg[$j][3];
						$nhomsl3=$nhomsl3 + $tg[$j][5];
					}				
				}

				$nhomsl1 = dinhdangso($nhomsl1);$nhomsl3=dinhdangso($nhomsl3);
				echo"<tr style='vertical-align:top;'>";
				echo"<td style='width:0px;height:24px;'></td>";
				echo"<td class='csDC952B64' style='width:5px;height:23px;'></td>";
				echo"<td class='cs16D304E1' colspan='5' style='width:344px;height:23px;text-align:Left;'>$tennhom</td>";
				echo"<td class='cs16D304E1' style='width:124px;height:23px;text-align:right;'>$nhomsl1</td>";
				echo"<td class='cs16D304E1' style='width:76px;height:23px;text-align:center;'>X</td>";
				echo"<td class='cs16D304E1' style='width:126px;height:23px;text-align:right;'>$nhomsl3</td>";
				echo"</tr>";
			}			
			//Chi tiết
			echo"<tr style='vertical-align:top;'>";
				echo"<td style='width:0px;height:24px;'></td>";
				echo"<td class='csDC952B64' style='width:5px;height:23px;text-align:center;'>$stt</td>";
				echo"<td class='cs16D304E1a' colspan='5' style='width:344px;height:23px;'>$tents</td>";
				echo"<td class='cs16D304E1a' style='width:124px;height:23px;text-align:right;'>$sl1</td>";
				echo"<td class='cs16D304E1a' style='width:76px;height:23px;text-align:center;'>$sl2</td>";
				echo"<td class='cs16D304E1a' style='width:126px;height:23px;text-align:right;'>$sl3</td>";
			echo"</tr>";
			$tennhomsau=$tg[$i][2];

		}
		$tsl1 = dinhdangso($tsl1);$tsl3 = dinhdangso($tsl3);
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='csDC952B64' style='width:5px;height:23px;'></td>";
			echo"<td class='cs16D304E1' colspan='5' style='width:344px;height:23px;text-align:center;'>Tổng cộng</td>";
			echo"<td class='cs16D304E1' style='width:124px;height:23px;text-align:right;'>$tsl1</td>";
			echo"<td class='cs16D304E1' style='width:76px;height:23px;text-align:center;'>X</td>";
			echo"<td class='cs16D304E1' style='width:126px;height:23px;text-align:right;'>$tsl3</td>";
		echo"</tr>";
	}
?>
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
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="4" style="width:360px;height:20px;"></td>
		<td class="cs62AA4CC9" colspan="5" style="width:360px;height:20px;text-align:center;vertical-align:middle;font-style:italic;"><?php echo "Ngày ... tháng ... năm ......"; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs77A39B34" colspan="5" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:20px;"></td>
		<td class="cs77A39B34" colspan="4" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
		<td class="cs77A39B34" colspan="5" style="width:360px;height:20px;line-height:18px;text-align:center;vertical-align:middle;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:77px;"></td>
		<td class="csB6E29E9B" colspan="4" style="width:360px;height:77px;text-align:center;vertical-align:middle;"><?php echo $madv[5]; ?></td>
		<td class="csB6E29E9B" colspan="5" style="width:360px;height:77px;text-align:center;vertical-align:middle;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>