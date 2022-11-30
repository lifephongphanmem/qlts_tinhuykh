<?php include "$_SERVER[DOCUMENT_ROOT]/Thoaikx/general.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600,700" />
	<meta name='viewport' content='width=device-width, initial-scale=1' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title> BIÊN BẢN KIỂM KÊ | QLTS</title>
	<!-- <link rel="shortcut icon" href="{{ url('assets/media/logos/LIFESOFT.png') }}" /> -->
	<!-- <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
	<!-- <link href="{{ url('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
	<!-- <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
	<style type="text/css">
		body {
			font: normal 14px/16px time, serif;
		}

		table,
		p {
			width: 90%;
			margin: auto;
		}

		td,
		th {
			padding: 5px;
		}

		p {
			padding: 5px;
		}

		.sangtrangmoi {
			page-break-before: always
		}

		span {
			text-transform: uppercase;
			font-weight: bold;
		}

		@media print {
			.in {
				display: none !important;
			}

			#myBtn {
				display: none !important;
			}
		}

		#fixNav {
			/*background: #f7f7f7;*/
			background: #f9f9fa;
			width: 100%;
			height: 50px;
			display: block;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
			/*Đổ bóng cho menu*/
			position: fixed;
			/*Cho menu cố định 1 vị trí với top và left*/
			top: 0;
			/*Nằm trên cùng*/
			left: 0;
			/*Nằm sát bên trái*/
			z-index: 100000;
			/*Hiển thị lớp trên cùng*/
		}

		#fixNav ul {
			margin: 0;
			padding: 0;
		}

		#fixNav ul li {
			list-style: none inside;
			width: auto;
			float: left;
			line-height: 35px;
			/*Cho text canh giữa menu*/
			color: #fff;
			padding: 0;
			margin-left: 10px;
			margin-top: 5px;
			position: relative;
		}

		#fixNav ul li a {
			text-transform: uppercase;
			white-space: nowrap;
			/*Cho chữ trong menu không bị wrap*/
			padding: 0 10px;
			color: #fff;
			display: block;
			font-size: 0.8em;
			text-decoration: none;
		}


		#myBtn {
			display: none;
			position: fixed;
			bottom: 30px;
			right: 20px;
			justify-content: center;
			align-items: center;
			width: 36px;
			height: 36px;
			z-index: 100;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: transparent;
			cursor: pointer;
			padding: 15px;
			color: black;
			/*border-radius: 4px ;*/
			border-radius: 0.42rem !important;
		}

		#myBtn:hover {
			color: #3699FF;
		}
	</style>
	<script>
		function ExDoc() {
			var sourceHTML = document.getElementById("data").innerHTML;
			var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
			var fileDownload = document.createElement("a");
			document.body.appendChild(fileDownload);
			fileDownload.href = source;
			fileDownload.download = $('#title').val() + '.doc';
			fileDownload.click();
			document.body.removeChild(fileDownload);
		}

		function exportTableToExcel() {
			var downloadLink;
			var dataType = 'application/vnd.ms-excel';
			var tableHeader = document.getElementById('data_header');
			var tableSelect = document.getElementById('data_render');
			var tableFooter = document.getElementById('data_footer');
			var tableHTML = tableHeader.outerHTML.replace(/ /g, '%20') + tableSelect.outerHTML.replace(/ /g, '%20') + tableFooter.outerHTML.replace(/ /g, '%20');

			// Specify file name
			var filename = $('#title').val() + '.xls';

			// Create download link element
			downloadLink = document.createElement("a");

			document.body.appendChild(downloadLink);

			if (navigator.msSaveOrOpenBlob) {
				var blob = new Blob(['\ufeff', tableHTML], {
					type: dataType
				});
				navigator.msSaveOrOpenBlob(blob, filename);
			} else {
				// Create a link to the file
				downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

				// Setting the file name
				downloadLink.download = filename;

				//triggering the function
				downloadLink.click();
			}
		}
	</script>
</head>

<?php
include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$key = $_GET["id"];
$ma = explode('>', $key);
$ab = trim($ma[0]);
$kiemke = $ma[1];
$maqhns = "";
$tendv = "";
$tencqcq = "";
$nlb = "";
$ptkt = "";
$ttdv = "";
$sql = "Select maqhns,tendv,tencqcq,nlb,ptkt,ttdv From thongtindonvi Where madonvi = '$ma[0]'";

$qrsql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($qrsql)) {
	$maqhns = $row['maqhns'];
	$tendv = $row['tendv'];
	$tencqcq = $row['tencqcq'];
	$nlb = $row['nlb'];
	$ptkt = $row['ptkt'];
	$ttdv = $row['ttdv'];
}
$TDKK = "";
$SoBB = "";
$truongban = "";
$ngaykk = "";
$sql = "Select GIO, PHUT, ngay1,sohieu from tblkiemke where TTkiemke = '" . $kiemke . "'";
$qrsql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($qrsql)) {
	$ngaykk = $row['ngay1'];
	$TDKK = $row['GIO'] . " giờ " . $row['PHUT'] . " phút, ngày " . substr($row['ngay1'], 8, 2) . " tháng " . substr($row['ngay1'], 5, 2) .  " năm " . substr($row['ngay1'], 0, 4);
	$SoBB = "Số hiệu biên bản: " . $row['sohieu'];
}
$artp = array(array("A", "B", "C", "D"));
$ar = array(array("A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0));
$ctp = 0;
$c = 0;
$sql = "Select 	hotencb,chucvucanbo,daidientp,thanhphan from tblthanhphankk where TTkiemke = '" . $ma[1] . "'";
$qrsql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($qrsql)) {
	if ($row['thanhphan'] == "Trưởng ban")
		$truongban = $row['hotencb'];
	$artp[$ctp][0] = $row['hotencb'];
	$artp[$ctp][1] = $row['chucvucanbo'];
	$artp[$ctp][2] = $row['daidientp'];
	$artp[$ctp][3] = $row['thanhphan'];
	$ctp++;
}
$sql = "Select tblkiemken.tenchitiet,tblqlts.mataisan,tblqlts.noidung,tblkiemken.nhom1sllt," .
	" tblkiemken.nhom1nglt,round(tblkiemken.nhom1cllt) as nhom1cllt,tblkiemken.nhom2sltt,tblkiemken.nhom2ngtt,round(tblkiemken.nhom2cltt) as nhom2cltt," .
	" tblkiemken.nhom3slcl,tblkiemken.nhom3ngcl,round(tblkiemken.nhom3clcl) as nhom3clcl, tblkiemken.chitiethinhthai" .
	" From tblkiemken inner join tblqlts on tblkiemken.TTQLTS = tblqlts.TTQLTS" .
	" where tblkiemken.TTkiemke = '" . $ma[1] . "' and tblqlts.mataisan Not like 'C%' and" .
	" tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . $ngaykk . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))" .
	" order by tblkiemken.chitiethinhthai,tblkiemken.tenchitiet,tblqlts.mataisan";
$qrsql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($qrsql)) {
	$ar[$c][0] = $row['tenchitiet'];
	$ar[$c][1] = $row['mataisan'];
	$ar[$c][2] = $row['noidung'];
	$ar[$c][3] = $row['chitiethinhthai'];
	$ar[$c][4] = $row['nhom1sllt'];
	$ar[$c][5] = $row['nhom1nglt'];
	$ar[$c][6] = $row['nhom1cllt'];
	$ar[$c][7] = $row['nhom2sltt'];
	$ar[$c][8] = $row['nhom2ngtt'];
	$ar[$c][9] = $row['nhom2cltt'];
	$ar[$c][10] = $row['nhom3slcl'];
	$ar[$c][11] = $row['nhom3ngcl'];
	$ar[$c][12] = $row['nhom3clcl'];
	$c++;
}
?>

<body>
	<div class="in">
		<nav id="fixNav">
			<ul>
				<li>
					<button type="button" class="btn btn-success" border-radius:=border-radius: 30px=30px onclick="window.print()">
						<i class="fas fa-print"></i>&ensp;In dữ liệu
					</button>
				</li>
				<li>
					<button type="button" class="btn btn-primary" onclick="ExDoc()">
						<i class="far fa-file-word"></i>&ensp;Kết xuất file Doc
					</button>
				</li>
				<li>
					<button type="button" class="btn btn-primary" onclick="exportTableToExcel()">
						<i class="far fa-file-excel"></i>&ensp;Export Excel
					</button>
				</li>
			</ul>
		</nav>
	</div>
	<div id="data" style="position: relative; margin-top: 70px; margin-bottom:50px; font-size:14px">
		<table id="data_header" cellpadding="0" cellspacing="0" border="0">
			<tr style="vertical-align:top;">
				<td colspan="4" style="font-weight: bold;">
					Tên đơn vị <?php echo $tendv; ?>
				</td>

				<td colspan="4" style="text-align:center">
					Mẫu số C53-HD
				</td>
			</tr>

			<tr style="vertical-align:top;">
				<td colspan="8" style="font-weight: bold;">
					Mã QHNS: <?php echo $maqhns; ?>
				</td>
			</tr>

			<tr style="vertical-align:top;">
				<td colspan="8" style="text-align: center;font-weight: bold;">
					BIÊN BẢN KIỂM KÊ TÀI SẢN CỐ ĐỊNH
				</td>
			</tr>
			<tr style="vertical-align:top;">
				<td colspan="8" style="font-style: italic;text-align: center">
					Thời điểm kiểm kê: <?php echo $TDKK; ?>
				</td>
			</tr>

			<tr style="vertical-align:top;">
				<td colspan="8">
					Ban kiểm kê gồm:
				</td>
			</tr>
			<?php
			foreach ($artp as $artp) {
				echo "<tr>";
				echo "<td>Ông(Bà):</td>";
				echo "<td>" . $artp[0] . "</td>";
				echo "<td>Chức vụ:</td>";
				echo "<td>" . $artp[1] . "</td>";
				echo "<td>Đại diện:</td>";
				echo "<td>" . $artp[2] . "</td>";
				echo "<td>Thành phần:</td>";
				echo "<td>" . $artp[3] . "</td>";
				echo "</tr>";
			}
			?>
			<tr style="vertical-align:top;">
				<td colspan="8">
					Đã kiểm kê TSCĐ, kết quả như sau:
				</td>
				<td></td>
			</tr>
		</table>

		<table id="data_render" cellpadding="0" cellspacing="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
			<thead>
				<tr style="font-weight: bold;">
					<td rowspan="2" width="5%" style="text-align:center;">
						Số TT
					</td>
					<td rowspan="2" style="text-align:center;">
						Tên tài sản cố định
					</td>
					<td rowspan="2" style="text-align:center;">
						Mã số
					</td>
					<td rowspan="2" style="text-align:center;">
						Nơi sử dụng
					</td>
					<td colspan="3" style="text-align:center;">
						Theo sổ kế toán
					</td>
					<td colspan="3" style="text-align:center;">
						Thực tế kiểm kê
					</td>
					<td colspan="3" style="text-align:center;">
						Chênh lệch
					</td>
					<td rowspan="2" style="text-align:center;">
						Ghi chú
					</td>
				</tr>
				<tr style="text-align:center;font-weight: bold;">
					<td> Số<br />lượng </td>
					<td> Nguyên giá </td>
					<td> Giá trị<br />còn lại </td>

					<td> Số<br />lượng </td>
					<td> Nguyên giá </td>
					<td> Giá trị<br />còn lại </td>

					<td> Số<br />lượng </td>
					<td> Nguyên giá </td>
					<td> Giá trị<br />còn lại </td>
				</tr>
			</thead>
			<?php
			$stt = 0;
			$groupname = "";
			$C1ng = 0;
			$C1cl = 0;
			$C2ng = 0;
			$C2cl = 0;
			$C3ng = 0;
			$C3cl = 0;
			foreach ($ar as $ar1) {
				if ($ar1[3] != $groupname) {
					echo "<tr><td></td><td colspan='13' style='font-weight: bold;'>" . $ar1[3] . "</td></tr>";
					$T1sl = 0;
					$T1ng = 0;
					$T1cl = 0;
					$T2sl = 0;
					$T2ng = 0;
					$T2cl = 0;
					$T3sl = 0;
					$T3ng = 0;
					$T3cl = 0;
					foreach ($ar as $ar2) {
						if ($ar2[3] == $ar1[3]) {
							$T1sl += $ar2[4];
							$T1ng += $ar2[5];
							$T1cl += $ar2[6];
							$T2sl += $ar2[7];
							$T2ng += $ar2[8];
							$T2cl += $ar2[9];
							$T3sl += $ar2[10];
							$T3ng += $ar2[11];
							$T3cl += $ar2[12];
							$C1ng += $ar2[5];
							$C1cl += $ar2[6];
							$C2ng += $ar2[8];
							$C2cl += $ar2[9];
							$C3ng += $ar2[11];
							$C3cl += $ar2[12];
							$stt++;
							echo "<tr>";
							echo "<td style='text-align:center;'>$stt</td>";
							echo "<td>" . $ar2[0] . "</td>";
							echo "<td>" . $ar2[1] . "</td>";
							echo "<td>" . $ar2[2] . "</td>";
							echo "<td style='text-align:center;'>" . dinhdangso($ar2[4]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[5]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[6]) . "</td>";
							echo "<td style='text-align:center;'>" . dinhdangso($ar2[7]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[8]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[9]) . "</td>";
							echo "<td style='text-align:center;'>" . dinhdangso($ar2[10]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[11]) . "</td>";
							echo "<td style='text-align:right;'>" . dinhdangso($ar2[12]) . "</td>";
							echo "<td></td>";
							echo "</tr>";
						}
					}
					$groupname = $ar1[3];
					echo "<tr>";
					echo "<td colspan='4' style='text-align:center;font-weight: bold;'>Cộng</td>";
					echo "<td style='font-weight: bold;text-align:center;'>" . dinhdangso($T1sl) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T1ng) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T1cl) . "</td>";
					echo "<td style='font-weight: bold;text-align:center;'>" . dinhdangso($T2sl) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T2ng) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T2cl) . "</td>";
					echo "<td style='font-weight: bold;text-align:center;'>" . dinhdangso($T3sl) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T3ng) . "</td>";
					echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($T3cl) . "</td>";
					echo "<td></td>";
					echo "</tr>";
				}
			}
			echo "<tr>";
			echo "<td colspan='5' style='text-align:center;font-weight: bold;'>Tổng cộng</td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C1ng) . "</td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C1cl) . "</td>";
			echo "<td></td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C2ng) . "</td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C2cl) . "</td>";
			echo "<td></td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C3ng) . "</td>";
			echo "<td style='font-weight: bold;text-align:right;'>" . dinhdangso($C3cl) . "</td>";
			echo "<td></td>";
			echo "</tr>";
			?>
		</table>
		<table id="data_footer" cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;">
			<tr style="vertical-align:top; font-weight: bold;">
				<td style="text-align:center;">
					Thủ trưởng đơn vị
				</td>
				<td style="text-align:center;">
					Kế toán trưởng
				</td>
				<td style="text-align:center;">
					Trưởng ban kiểm kê
				</td>
			</tr>
			<tr style="vertical-align:top;">

				<td style="text-align:center;font-style: italic;">
					(Ý kiến giải quyết số chênh lệch)</br>
					(Ký họ tên đóng dấu)
				</td>
				<td style="text-align:center;font-style: italic;">
					(Ký họ tên)
				</td>
				<td style="text-align:center;font-style: italic;">
					(Ký họ tên)
				</td>
			</tr>
			<tr>
				<td colspan="3" style="height:100px;"></td>
			</tr>

			<tr>
				<td style="text-align:center;">
					<?php echo $ttdv;; ?>
				</td>
				<td style="text-align:center;">
					<?php echo $ptkt;; ?>
				</td>
				<td style="text-align:center;">
					<?php echo $truongban; ?>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>