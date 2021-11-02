<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csA1694609 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.csDE7DC299 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:italic; }
		.cs9E02721E {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs9A9D4AA {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; }
		.csF9DCB330 {color:#000000;background-color:transparent;border-left-style: none;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.cs73A224C1 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:italic; }
		.cs3E52F49E {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; }
		.csAADA37C6 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; }
		.cs11FFE362 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:13px; font-weight:normal; font-style:italic; }
		.csB6E29E9B {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:bold; font-style:normal; }
		.cs77A39B34 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:italic; }
		.cs62AA4CC9 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:16px; font-weight:normal; font-style:normal; }
		.csDC8759AC {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:19px; font-weight:bold; font-style:normal; }
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
	$tungay = "";
	$denngay = "";
	$madv ="";
	if(isset($_POST['create'])) {
		$tungay = $_POST['nttu'];
		$denngay = $_POST['ntden'];
		$madv = explode('>', $_POST['MADV']);
		$msdv = $madv[0];
		if ($_POST['donvi'] != "")
			$msdv = $_POST['donvi'];
	}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:52px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:73px;"></td>
		<td style="height:0px;width:3px;"></td>
		<td style="height:0px;width:186px;"></td>
		<td style="height:0px;width:50px;"></td>
		<td style="height:0px;width:71px;"></td>
		<td style="height:0px;width:49px;"></td>
		<td style="height:0px;width:109px;"></td>
		<td style="height:0px;width:22px;"></td>
		<td style="height:0px;width:24px;"></td>
		<td style="height:0px;width:95px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:45px;"></td>
		<td style="height:0px;width:87px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:45px;"></td>
		<td style="height:0px;width:104px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:25px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:68px;height:25px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>ĐVCQ:</nobr></td>
		<td class="csB6E29E9B" colspan="10" style="width:682px;height:25px;"><?php echo $madv[3]; ?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csB6E29E9B" colspan="2" style="width:68px;height:24px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Đơn&nbsp;vị:</nobr></td>
		<td class="csB6E29E9B" colspan="10" style="width:682px;height:24px;"><?php echo $madv[2]; ?></td>
		<td></td>
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
		<td class="csDC8759AC" colspan="11" style="width:748px;height:25px;line-height:22px;text-align:center;vertical-align:middle;"><nobr>B&#193;O&nbsp;C&#193;O&nbsp;T&#204;NH&nbsp;H&#204;NH&nbsp;TĂNG&nbsp;GIẢM&nbsp;C&#212;NG&nbsp;CỤ,&nbsp;DỤNG&nbsp;CỤ</nobr></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:28px;"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<?php		
		echo "<td class='cs62AA4CC9' colspan='11' style='width:748px;height:28px;text-align:center;'>Từ ngày: $tungay   đến ngày: $denngay</td>";
		?>
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
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	<?php
	require ("$_SERVER[DOCUMENT_ROOT]/thoaikx/general.php");
	//Tiêu đề
	echo "<table cellpadding='0' cellspacing='0' border='0' style='border-width:0px;empty-cells:show;'>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:28px;'></td>";
		echo "<td class='csA1694609' style='width:50px;height:27px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>ST</nobr></td>";
		echo "<td class='csF9DCB330' colspan='6' style='width:398px;height:26px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Cộng&nbsp;cụ,&nbsp;dụng&nbsp;cụ</nobr></td>";
		echo "<td class='csF9DCB330' colspan='2' style='width:157px;height:26px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Đầu&nbsp;kỳ</nobr></td>";
		echo "<td class='csF9DCB330' colspan='4' style='width:150px;height:26px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Ghi&nbsp;tăng&nbsp;trong&nbsp;kỳ</nobr></td>";
		echo "<td class='csF9DCB330' colspan='3' style='width:152px;height:26px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Ghi&nbsp;giảm&nbsp;trong&nbsp;kỳ</nobr></td>";
		echo "<td class='csF9DCB330' colspan='2' style='width:148px;height:26px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Cuối&nbsp;kỳ</nobr></td>";
	echo "</tr>";
	echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:45px;'></td>";
		echo "<td class='cs9E02721E' style='width:50px;height:44px;line-height:17px;text-align:center;vertical-align:top;'><nobr>T</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:88px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>M&#227;</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='3' style='width:238px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>T&#234;n</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:70px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Đơn&nbsp;vị</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:48px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:108px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:45px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:104px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:44px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:107px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:44px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Số</nobr><br/><nobr>lượng</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:103px;height:44px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Th&#224;nh&nbsp;tiền</nobr></td>";
	echo "</tr>";
	//
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblxuatdung inner join thongtindonvi on tblxuatdung.madonvi=thongtindonvi.madonvi where tblxuatdung.madonvi Like '$msdv%' and tblxuatdung.ngayxuat <= '". doingay($denngay) . "'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)) {
		$_aDV[] = array('ma' => $_r['madonvi'],
			'ten' => $_r['tendv']
		);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv) {
		//Tên đơn vị
		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:26px;'></td>";
		echo "<td class='cs73A224C1' colspan='18' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo "</tr>";
		//
		$sqlcc = "Select chitiethinhthai,mataisan,tenchitiet,dvt,sum(soluong) as soluong,sum(sotien) as sotien from tblxuatdung where madonvi = '$_madv[ma]' and ngayxuat <= '" . doingay($denngay) . "' group by chitiethinhthai,mataisan,tenchitiet,dvt order by chitiethinhthai";
		$querycc = mysqli_query($con, $sqlcc);
		$cc = array(array("A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0));
		$cs = 0;
		$i = 0;
		$tc2 = 0;
		$tc4 = 0;
		$tc6 = 0;
		$tc8 = 0;
		while ($rowcc = mysqli_fetch_array($querycc)) {
			$cc[$cs][0] = $rowcc['chitiethinhthai'];
			$cc[$cs][1] = $rowcc['mataisan'];
			$cc[$cs][2] = $rowcc['tenchitiet'];
			$cc[$cs][3] = $rowcc['dvt'];
			$sqlbh = "Select soluong,sotien from tblbaohong where madonvi = '$_madv[ma]' and ngaythang <= '" . doingay($denngay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "' and dvt = '" . $rowcc['dvt'] . "'";
			$querybh = mysqli_query($con, $sqlbh);
			$bhslck = 0;
			$bhstck = 0;
			while ($rowbh = mysqli_fetch_array($querybh)) {
				$bhslck = $bhslck + $rowbh['soluong'];
				$bhstck = $bhstck + $rowbh['sotien'];
			}
			//cuối kỳ
			$cc[$cs][10] = $rowcc['soluong'] - $bhslck;
			$cc[$cs][11] = $rowcc['sotien'] - $bhstck;
			// dau ky hong
			$sqlbhdk = "Select soluong,sotien from tblbaohong where madonvi = '$_madv[ma]' and ngaythang < '" . doingay($tungay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "' and dvt = '" . $rowcc['dvt'] . "'";
			$querybhdk = mysqli_query($con, $sqlbhdk);
			$bhsldk = 0;
			$bhstdk = 0;
			while ($rowbhdk = mysqli_fetch_array($querybhdk)) {
				$bhsldk = $bhsldk + $rowbhdk['soluong'];
				$bhstdk = $bhstdk + $rowbhdk['sotien'];
			}
			// dau ky tang
			$sqlccdk = "Select soluong,sotien from tblxuatdung where madonvi = '$_madv[ma]' and ngayxuat < '" . doingay($tungay) . "' and mataisan = '" . $rowcc['mataisan'] . "' and tenchitiet = '" . $rowcc['tenchitiet'] . "' and dvt = '" . $rowcc['dvt'] . "'";
			$queryccdk = mysqli_query($con, $sqlccdk);
			$ccsldk = 0;
			$ccstdk = 0;
			while ($rowccdk = mysqli_fetch_array($queryccdk)) {
				$ccsldk = $ccsldk + $rowccdk['soluong'];
				$ccstdk = $ccstdk + $rowccdk['sotien'];
			}
			//đầu kỳ
			$cc[$cs][4] = $ccsldk - $bhsldk;
			$cc[$cs][5] = $ccstdk - $bhstdk;
			//tăng
			$cc[$cs][6] = $rowcc['soluong'] - $ccsldk;
			$cc[$cs][7] = $rowcc['sotien'] - $ccstdk;
			//giảm
			$cc[$cs][8] = $bhslck - $bhsldk;
			$cc[$cs][9] = $bhstck - $bhstdk;
			$cs = $cs + 1;
			$tc2 = $tc2 + $ccstdk - $bhstdk;
			$tc4 = $tc4 + $rowcc['sotien'] - $ccstdk;
			$tc6 = $tc6 + $bhstck - $bhstdk;
			$tc8 = $tc8 + $rowcc['sotien'] - $bhstck;
		}
		$j = 0;
		$tennhom = "";
		$tennhomsau = "";
		$ma = "";
		$ten = "";
		$dvt = "";
		$sl1 = "";
		$sl2 = "";
		$sl3 = "";
		$sl4 = "";
		$sl5 = "";
		$sl6 = "";
		$sl7 = "";
		$sl8 = "";
		$stt = 0;

		$j = 0;
		$tennhom = "";
		$tennhomsau = "";
		$ma = "";
		$ten = "";
		$dvt = "";
		$sl1 = "";

		for ($i = 0; $i < $cs; $i++) {
			$stt++;
			$tennhom = $cc[$i][0];
			$ma = $cc[$i][1];
			$ten = $cc[$i][2];
			$dvt = $cc[$i][3];
			$sl1 = dinhdangso($cc[$i][4]);
			$sl2 = dinhdangso($cc[$i][5]);
			$sl3 = dinhdangso($cc[$i][6]);
			$sl4 = dinhdangso($cc[$i][7]);
			$sl5 = dinhdangso($cc[$i][8]);
			$sl6 = dinhdangso($cc[$i][9]);
			$sl7 = dinhdangso($cc[$i][10]);
			$sl8 = dinhdangso($cc[$i][11]);
			// nhóm công cụ
			if ($tennhom != $tennhomsau) {
				$nhomsl2 = 0;
				$nhomsl4 = 0;
				$nhomsl6 = 0;
				$nhomsl8 = 0;
				for ($j = 0; $j < $cs; $j++) {
					if ($cc[$j][0] == $tennhom) {
						$nhomsl2 = $nhomsl2 + $cc[$j][5];
						$nhomsl4 = $nhomsl4 + $cc[$j][7];
						$nhomsl6 = $nhomsl6 + $cc[$j][9];
						$nhomsl8 = $nhomsl8 + $cc[$j][11];
					}
				}
				$nhomsl2 = dinhdangso($nhomsl2);
				$nhomsl4 = dinhdangso($nhomsl4);
				$nhomsl6 = dinhdangso($nhomsl6);
				$nhomsl8 = dinhdangso($nhomsl8);
				echo "<tr style='vertical-align:top;'>";
				echo "<td style='width:0px;height:26px;'></td>";
				echo "<td class='csDE7DC299' style='width:50px;height:25px;'></td>";
				echo "<td class='cs73A224C1' colspan='6' style='width:398px;height:25px;line-height:17px;text-align:left;vertical-align:middle;'><nobr>$tennhom</nobr></td>";
				echo "<td class='cs73A224C1' style='width:48px;height:25px;'></td>";
				echo "<td class='cs73A224C1' style='width:108px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$nhomsl2</nobr></td>";
				echo "<td class='cs73A224C1' colspan='2' style='width:45px;height:25px;'></td>";
				echo "<td class='cs73A224C1' colspan='2' style='width:104px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$nhomsl4</nobr></td>";
				echo "<td class='cs73A224C1' style='width:44px;height:25px;'></td>";
				echo "<td class='cs73A224C1' colspan='2' style='width:107px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$nhomsl6</nobr></td>";
				echo "<td class='cs73A224C1' style='width:44px;height:25px;'></td>";
				echo "<td class='cs73A224C1' style='width:103px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$nhomsl8</nobr></td>";
				echo "</tr>";
			}
			// chi tiết
			echo "<tr style='vertical-align:top;'>";
			echo "<td style='width:0px;height:26px;'></td>";
			echo "<td class='cs9A9D4AA' style='width:50px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$stt</nobr></td>";
			echo "<td class='csAADA37C6' colspan='2' style='width:88px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$ma</nobr></td>";
			echo "<td class='csAADA37C6' colspan='3' style='width:238px;height:25px;line-height:17px;text-align:left;vertical-align:middle;'><nobr>$ten</nobr></td>";
			echo "<td class='csAADA37C6' style='width:70px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$dvt</nobr></td>";
			echo "<td class='csAADA37C6' style='width:48px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$sl1</nobr></td>";
			echo "<td class='csAADA37C6' style='width:108px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$sl2</nobr></td>";
			echo "<td class='csAADA37C6' colspan='2' style='width:45px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$sl3</nobr></td>";
			echo "<td class='csAADA37C6' colspan='2' style='width:104px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$sl4</nobr></td>";
			echo "<td class='csAADA37C6' style='width:44px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$sl5</nobr></td>";
			echo "<td class='csAADA37C6' colspan='2' style='width:107px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$sl6</nobr></td>";
			echo "<td class='csAADA37C6' style='width:44px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>$sl7</nobr></td>";
			echo "<td class='csAADA37C6' style='width:103px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$sl8</nobr></td>";
			echo "</tr>";
			$tennhomsau = $cc[$i][0];
		}
		//tổng cộng
		$tc2 = dinhdangso($tc2);
		$tc4 = dinhdangso($tc4);
		$tc6 = dinhdangso($tc6);
		$tc8 = dinhdangso($tc8);
		echo "<tr style='vertical-align:top;'>";
		echo "<td style='width:0px;height:26px;'></td>";
		echo "<td class='cs9E02721E' style='width:50px;height:25px;'></td>";
		echo "<td class='cs3E52F49E' colspan='6' style='width:398px;height:25px;line-height:17px;text-align:center;vertical-align:middle;'><nobr>Tổng&nbsp;cộng</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:48px;height:25px;'></td>";
		echo "<td class='cs3E52F49E' style='width:108px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$tc2</nobr></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:45px;height:25px;'></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:104px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$tc4</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:44px;height:25px;'></td>";
		echo "<td class='cs3E52F49E' colspan='2' style='width:107px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$tc6</nobr></td>";
		echo "<td class='cs3E52F49E' style='width:44px;height:25px;'></td>";
		echo "<td class='cs3E52F49E' style='width:103px;height:25px;line-height:17px;text-align:right;vertical-align:middle;'><nobr>$tc8</nobr></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
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
		<td class="cs77A39B34" colspan="5" style="width:330px;height:22px;"></td>
		<td class="cs77A39B34" colspan="5" style="width:301px;height:22px;"></td>
		<td class="cs77A39B34" colspan="8" style="width:431px;height:22px;line-height:18px;text-align:center;vertical-align:bottom;"><nobr>...........,&nbsp;ng&#224;y&nbsp;...&nbsp;th&#225;ng&nbsp;...&nbsp;năm&nbsp;.......</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:22px;"></td>
		<td class="csB6E29E9B" colspan="5" style="width:330px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Thủ&nbsp;kho</nobr></td>
		<td class="csB6E29E9B" colspan="5" style="width:301px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr></td>
		<td class="csB6E29E9B" colspan="8" style="width:431px;height:22px;line-height:18px;text-align:center;vertical-align:top;"><nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:43px;"></td>
		<td class="cs11FFE362" colspan="5" style="width:330px;height:43px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs11FFE362" colspan="5" style="width:301px;height:43px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n)</nobr></td>
		<td class="cs11FFE362" colspan="8" style="width:431px;height:43px;line-height:15px;text-align:center;vertical-align:top;"><nobr>(K&#253;,&nbsp;họ&nbsp;t&#234;n,&nbsp;đ&#243;ng&nbsp;dấu)</nobr></td>
	</tr>
		<tr style="vertical-align:top;">
			<td style="width:0px;height:51px;"></td>
			<td class="csB6E29E9B" colspan="5" style="width:330px;height:51px;text-align:center;"></td>
			<td class="csB6E29E9B" colspan="5" style="width:301px;height:51px;text-align:center;"></td>
			<td class="csB6E29E9B" colspan="8" style="width:431px;height:51px;text-align:center;"></td>
		</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:51px;"></td>
		<td class="csB6E29E9B" colspan="5" style="width:330px;height:51px;text-align:center;"><?php echo $madv[4]; ?></td>
		<td class="csB6E29E9B" colspan="5" style="width:301px;height:51px;text-align:center;"><?php echo $madv[5]; ?></td>
		<td class="csB6E29E9B" colspan="8" style="width:431px;height:51px;text-align:center;"><?php echo $madv[6]; ?></td>
	</tr>
</table>
</body>
</html>
