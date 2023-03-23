	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>

	<head>
		<title>Document</title>
		<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=UTF-8'>

		<style>
			table,
			p {
				width: 98%;
				margin: auto;
			}

			@media print {
				.in {
					display: none !important;
				}
			}
		</style>
		<link rel="stylesheet" href="buttonPro.css" />
	</head>
	<div class="in" style="margin-left: 900px;">
		<input type="submit" class="buttonPro medium blue" onclick=" window.print()" value="In báo cáo" />
		<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'" />
	</div>

	<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
		<?php
		$tungay = "";
		$madv = "";
		$noidung = "";
		if (isset($_POST['create'])) {
			$tungay = $_POST['nttu'];
			$madv = explode('>', $_POST['MADV']);
			$msdv = $madv[0];
			if ($_POST['donvi'] != "")
				$msdv = $_POST['donvi'];
			if (isset($_POST['noidung']))
				$noidung = $_POST['noidung'];
		}
		$ngaytach =  explode('/', $tungay);
		?>
		<table cellpadding="0" cellspacing="0" border="0" style="margin: 20px auto; border-collapse: collapse;">

			<tr style="vertical-align:top;font-weight: bold;">
				<td width="60%" style="text-align: left;">
					<?php echo "Bộ, cơ quan cấp trên: " . $madv[3]; ?>
				</td>
				<td width="40%" style="text-align: center;">CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
			</tr>
			<tr style="vertical-align:top;font-weight: bold;">
				<td style="text-align: left;">
					<?php echo "Đơn vị báo cáo: " . $madv[2]; ?>
				</td>
				<td style="text-align:center">
					Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;Phúc
				</td>
			</tr>

			<tr style="vertical-align:top;">
				<td></td>
				<td style="text-align:center;vertical-align:top;font-style: italic;">
					<nobr><?php echo "Ngày: " . $ngaytach[0] . " tháng " . $ngaytach[1] . " năm " . $ngaytach[2]; ?></nobr>
				</td>
			</tr>

			
			<tr style="vertical-align:top;font-weight: bold;">				
				<td colspan="2" style="text-align:center;vertical-align:middle;">
					<?php echo "BÁO CÁO KIỂM KÊ TÀI SẢN CỐ ĐỊNH NĂM " . $ngaytach[2]; ?>
				</td>				
			</tr>
			
		</table>
		<?php
		require("$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php");
		function catchuoi($str, $sokytu = 13, $themo = '', $thedong = '</br>')
		{
			$s_kq = '';
			if (strlen($str) == 0) {
				return $themo . $thedong;
			}
			$a_chuoi = array_chunk(explode(' ', $str), $sokytu);
			for ($i = 0; $i < count($a_chuoi); $i++) {
				$s_kq .= implode(' ', $a_chuoi[$i]);
				if ($i < count($a_chuoi) - 2)
					$s_kq .= $thedong;
			}
			// foreach (array_chunk(explode(' ', $str), $sokytu) as $chuoi) {
			//     $s_kq .= ($themo . implode(' ', $chuoi) . $thedong);
			// }
			return $s_kq;
		}

		function tangsl($TTQLTS)
		{
			global $tungay;
			global $con;
			$kq = 0;
			$sql = "Select tanggiam,soluong From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) . "'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				if ($row['tanggiam'] == "Tăng")
					$kq += $row['soluong'];
				else
					$kq -= $row['soluong'];
			}
			return $kq;
		}
		function tangst($TTQLTS)
		{
			global $tungay;
			global $con;
			$kq = 0;
			$sql = "Select tanggiam,sotien From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) . "'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				if ($row['tanggiam'] == "Tăng")
					$kq += $row['sotien'];
				else
					$kq -= $row['sotien'];
			}
			return $kq;
		}
		function luykehaomon($TTQLTS)
		{
			global $ngaytach;
			global $con;
			$sohaomon = 0;
			$sql = "select MAX(namhaomon), sotien,sodu,namhaomon,TTQLTS,TTTS from tblhaomon where namhaomon <= " . $ngaytach[2] . " and TTQLTS = " . $TTQLTS .
				" and namhaomon in (select MAX(namhaomon) from tblhaomon where namhaomon <= " . $ngaytach[2] . " and TTQLTS = " . $TTQLTS . ")";
			$queryhm = mysqli_query($con, $sql);
			while ($rowhm = mysqli_fetch_array($queryhm)) {
				$sohaomon += $rowhm['sodu'];
				$sohaomon += $rowhm['sotien'];
			}
			return $sohaomon;
		}
		function phantramhaomon($tentaisan)
		{
			$kq = 0;
			global $con;
			$sql = "Select phantramhaomon From tbldanhsachqd32 Where  tentaiqd32 = '" . $tentaisan . "' and  mataisanqd32 like 'TS%'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				$kq = $row['phantramhaomon'];
			}
			return $kq;
		}
		function haomonnam($TTQLTS)
		{
			global $con;
			global $tungay;
			global $ngaytach;
			$kq = 0;
			$sql = "Select round(sotien) as sotien From tblhaomon Where TTQLTS = '" . $TTQLTS . "' and namhaomon = " . $ngaytach[2];
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				$kq = $row['sotien'];
			}
			return $kq;
		}
		function checkts($TTQLTS)
		{
			global $con;
			global $tungay;
			$sql = "Select TTQLTS from tbldenghi WHERE hinhthuc like 'Thu hồi%' and  TTQLTS = " . $TTQLTS . " and ngaythang <='" . doingay($tungay) . "'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
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
			<thead>
				<tr>
					<th rowspan="2">STT</th>
					<th rowspan="2">Tên tài sản cố định</th>
					<th rowspan="2">Năm đưa vào SD</th>
					<th rowspan="2">Đơn vị tính</th>
					<th rowspan="2">Số lượng</th>
					<th rowspan="2">Đơn giá</th>
					<th rowspan="2">Thành tiền</th>
					<th colspan="2">Hao mòn năm</th>
					<th rowspan="2">Lũy kế hao mòn</th>
					<th rowspan="2">Giá trị còn lại</th>
					<th rowspan="2">Giá trị TS đến ngày KK</th>
					<th rowspan="2">Ghi chú</th>
				</tr>
				<tr>
					<th style="font-weight: inherit;">%HM</th>
					<th style="font-weight: inherit;">Số tiền</th>
				</tr>
				<tr>
					<th width="2%" style="font-weight: inherit;">1</th>
					<th style="font-weight: inherit;">2</th>
					<th width="5%" style="font-weight: inherit;">3</th>
					<th width="5%" style="font-weight: inherit;">4</th>
					<th width="5%" style="font-weight: inherit;">5</th>
					<th width="5%" style="font-weight: inherit;">6</th>
					<th width="5%" style="font-weight: inherit;">7</th>
					<th width="5%" style="font-weight: inherit;">8</th>
					<th width="5%" style="font-weight: inherit;">9</th>
					<th width="5%" style="font-weight: inherit;">10</th>
					<th width="5%" style="font-weight: inherit;">11 = 7-9-10</th>
					<th width="5%" style="font-weight: inherit;">12</th>
					<th width="5%" style="font-weight: inherit;">13</th>
				</tr>
			</thead>
			<?php
			//Hết tiêu đề
			//Lấy danh sách đơn vị

			$_sQLdv = "Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and tblqlts.ngaysudung <= '" . doingay($tungay) . "' and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
			$_qdv = mysqli_query($con, $_sQLdv);
			$_aDV = array();
			while ($_r = mysqli_fetch_array($_qdv)) {
				$_aDV[] = array(
					'ma' => $_r['madonvi'],
					'ten' => $_r['tendv']
				);
			}
			//Duyệt từng đơn vị
			foreach ($_aDV as $_madv) {
				//Tên đơn vị
				echo "<tr style='vertical-align:top;'>";
				echo "<td></td>";
				echo "<td colspan='12' style='vertical-align:middle;font-weight: bold'>$_madv[ten]</td>";
				echo "</tr>";
				//
				$sqlkk = "Select DISTINCT tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.chitiethinhthai,year(ngaysudung) as nsd,tblqlts.DVT,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,tblqlts.phantram,tblqlts.tentaisan,tbldanhsachqd32.hinhthaitaisan" .
					" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32";
				$sqlkk = $sqlkk . " where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]'" .
					" and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" .  doingay($tungay) . "'  ELSE ngaysudung <= '" . doingay($tungay) . "' END)" .
					//	" and tblqlts.ngaysudung <= '" . doingay($tungay) . "'".
					" and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))  order by tbldanhsachqd32.ttsx,tblqlts.tenchitiet";

				$querykk = mysqli_query($con, $sqlkk);
				$kk =  array(array("A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0, ""));
				$cs = 0;
				$i = 0;
				$tc3 = 0;
				$tc4 = 0;
				$tc5 = 0;
				$tc7 = 0;
				$tc8 = 0;
				$tenpl = "";
				$gr6 = 0;
				$gr8 = 0;
				$gr10 = 0;
				$gr11 = 0;;
				$tc6 = 0;
				$tc8 = 0;
				$tc10 = 0;
				$tc11 = 0;
				$stt = 0;
				$tengr = "";
				while ($rowkk = mysqli_fetch_array($querykk)) {
					$kk[$cs][0] = $rowkk['hinhthaitaisan'];
					$kk[$cs][1] = $rowkk['tenchitiet'];
					$kk[$cs][2] = $rowkk['nsd'];
					$kk[$cs][3] = $rowkk['DVT'];
					$kk[$cs][4] = $rowkk['SL'] + tangsl($rowkk['TTQLTS']);
					if ($rowkk['SL'] + tangsl($rowkk['TTQLTS']) > 0)
						$kk[$cs][5] = ($rowkk['NG'] + tangst($rowkk['TTQLTS'])) / ($rowkk['SL'] + tangsl($rowkk['TTQLTS']));
					else
						$kk[$cs][5] = 0;
					$kk[$cs][6] = $rowkk['NG'] + tangst($rowkk['TTQLTS']);
					$kk[$cs][7] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
					if (checkts($rowkk['TTQLTS']))
						$kk[$cs][7] = 0;
					$kk[$cs][8] = luykehaomon($rowkk['TTQLTS']);
					$kk[$cs][9] = phantramhaomon($rowkk['tentaisan']);
					$kk[$cs][10] = haomonnam($rowkk['TTQLTS']);
					$kk[$cs][11] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
					if (checkts($rowkk['TTQLTS']))
						$kk[$cs][11] = 0;
					$kk[$cs][12] = ghichu($rowkk['TTQLTS']);
					$cs = $cs + 1;
				}
				for ($i = 0; $i < $cs; $i++) {
					$stt++;
					$tenpl  = $kk[$i][0];
					if ($tenpl != $tengr) {
						for ($j = 0; $j < $cs; $j++) {
							if ($kk[$j][0] == $tenpl) {
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
						echo "<td style='text-align:right;'><nobr>" . dinhdangso($gr6) . "</nobr></td>";
						echo "<td style='text-align:right;'><nobr></nobr></td>";
						echo "<td style='text-align:right;'><nobr>" . dinhdangso($gr10) . "</nobr></td>";
						echo "<td style='text-align:right;'><nobr>" . dinhdangso($gr8) . "</nobr></td>";
						echo "<td style='text-align:right;'><nobr>" . dinhdangso($gr11) . "</nobr></td>";
						echo "<td style='text-align:right;'><nobr>" . dinhdangso($gr11) . "</nobr></td>";
						echo "<td ></td>";
						echo "</tr>";
						$gr6 = 0;
						$gr8 = 0;
						$gr10 = 0;
						$gr11 = 0;
					}
					echo "<tr style='vertical-align:middle;'>";
					echo "<td style='text-align:center;'><nobr>$stt</nobr></td>";
					echo "<td style='text-align:left;word-wrap: break-word;'>" . catchuoi($kk[$i][1], 15) . "</td>";
					echo "<td style='text-align:center;'><nobr>" . $kk[$i][2] . "</nobr></td>";
					echo "<td style='text-align:center;'><nobr>" . $kk[$i][3] . "</nobr></td>";
					echo "<td style='text-align:center;'><nobr>" . dinhdangso($kk[$i][4]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . dinhdangso($kk[$i][5]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . dinhdangso($kk[$i][6]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . $kk[$i][9] . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . dinhdangso($kk[$i][10]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . dinhdangso($kk[$i][8]) . "</nobr></td>";
					echo "<td style=text-align:right;'><nobr>" . dinhdangso($kk[$i][11]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . dinhdangso($kk[$i][11]) . "</nobr></td>";
					echo "<td style='text-align:right;'><nobr>" . $kk[$i][12] . "</nobr></td>";
					echo "</tr>";
					$tengr = $kk[$i][0];
				}
				echo "<tr style='vertical-align:middle;font-weight: bold'>";
				echo "<td style='width:32px;height:23px;'></td>";
				echo "<td colspan='5' style='text-align:center;'><nobr>Tổng cộng</nobr></td>";
				echo "<td style='text-align:right;'><nobr>" . dinhdangso($tc6) . "</nobr></td>";
				echo "<td style='text-align:right;'><nobr></nobr></td>";
				echo "<td style='text-align:right;'><nobr>" . dinhdangso($tc10) . "</nobr></td>";
				echo "<td style='text-align:right;'><nobr>" . dinhdangso($tc8) . "</nobr></td>";
				echo "<td style='text-align:right;'><nobr>" . dinhdangso($tc11) . "</nobr></td>";
				echo "<td style='text-align:right;'><nobr>" . dinhdangso($tc11) . "</nobr></td>";
				echo "<td style='text-align:right;'><nobr></nobr></td>";
				echo "<td></td>";
				echo "</tr>";
			}
			echo "</table>";
			?>
			<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
				<tr style="vertical-align:top;text-align: center;">
					<td width="33%"></td>
					<td width="33%"></td>
					<td width="34%" style="font-style: italic;">
						<?php echo   '........., ngày ... tháng ... năm ......'; ?>
					</td>
				</tr>

				<tr style="vertical-align:top;text-align: center;">
					<td style="font-weight: bold;">
						Người lập biểu
					</td>
					<td style="font-weight: bold;">
						<nobr>Kế&nbsp;to&#225;n&nbsp;trưởng</nobr>
					</td>
					<td style="font-weight: bold;">
						<nobr>Thủ&nbsp;trưởng&nbsp;đơn&nbsp;vị</nobr>
					</td>
				</tr>
				<tr style="vertical-align:top;text-align: center;">
					<td style="font-style: italic;">Ký tên</td>
					<td style="font-style: italic;">Ký tên</td>
					<td style="font-style: italic;">Ký tên, đóng dấu</td>
				</tr>
				<tr style="vertical-align:bottom; height: 100px;text-align: center;">
					<td><?php echo $madv[4]; ?></td>
					<td><?php echo $madv[5]; ?></td>
					<td><?php echo $madv[6]; ?></td>
				</tr>
			</table>
	</body>

	</html>