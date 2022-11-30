<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>QLTS</title>
    <style type="text/css">
        body {
            font: normal 14px time, serif;
        }

        table, p {
            width: 99%;
            margin: auto;
        }

        #tabcontent td, #tabcontent th {
            padding: 10px;
        }
        tr td:first-child {text-align: center;}
    @media print {
		   .in{
			  display: none !important;
		   }
		}
    </style>
	<link rel="stylesheet" href="/thoaikx/buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$ts5="No";
$nam = $_POST['nambc'];
if(isset($_POST['create'])){
	if(isset($_POST['ts5']))
		$ts5 = $_POST['ts5'];
	$mah =$_POST['huyen'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $_POST['msdv'];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
$tendv = "";
$nlb="";
$ktt="";
$ttdv="";
$sql = "Select tendv,nlb,ptkt,ttdv From thongtindonvi WHERE madonvi = '$msdv'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	$tendv = $row['tendv'];
	$nlb = $row['nlb'];
	$ktt = $row['ptkt'];
	$ttdv = $row['ttdv'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>Bộ, tỉnh: </nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 10c-CK/TSC</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr><?php echo "Tên đơn vị: ".$tendv; ?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr></nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">CÔNG KHAI TÌNH HÌNH XỬ LÝ TÀI SẢN CÔNG</td>
		</tr>
		<tr>
			<td  style="text-align: center;font-weight: bold; font-style: italic"> Năm: <?php echo  $nam;?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; font-size: 12px">
		<tr style="font-weight: bold">
			<th rowspan="2" style="font-weight: inherit;" width="3%">STT</th>
			<th rowspan="2" style="font-weight: inherit;" width="20%">Danh mục tài sản trong kỳ báo cáo được xử lý</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Thu hồi</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Điều chuyển</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Bán</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Thanh lý</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Tiêu hủy</th>
			<th colspan="4"  style="font-weight: inherit;" width="10%">Xử lý trong trường hợp bị mất, bị hủy hoại</th>
			<th rowspan="2" style="font-weight: inherit;" width="3%">Ghi chú</th>
		</tr>
		<tr style="font-weight: bold">
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
			<th  style="font-weight: inherit;" >Số lượng</th>
			<th  style="font-weight: inherit;" >Diện tích</th>
			<th  style="font-weight: inherit;" >Nguyên giá</th>
			<th  style="font-weight: inherit;" >Giá trị còn lại</th>
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
			<th style="font-weight: inherit;">21</th>
			<th style="font-weight: inherit;">22</th>
			<th style="font-weight: inherit;">23</th>
			<th style="font-weight: inherit;">24</th>
			<th style="font-weight: inherit;">25</th>
			<th style="font-weight: inherit;">26</th>
			<th style="font-weight: inherit;">27</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
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
function sohaomonnam($idts,$nam)
{
	global $con;
	$sohaomon = 0;
	$sql = "select sotien,sodu,namhaomon from tblhaomon where namhaomon = " . $nam . " and TTQLTS = " . $idts;
	$queryhm = mysqli_query($con, $sql);
	while ($rowhm = mysqli_fetch_array($queryhm)) {
		$sohaomon = $rowhm['sotien'];
	}
	return $sohaomon;
}

function soduhm($idts,$nam,$namsd,$nguyengia)
{
	$soduhm = 0;
	for ($i = $namsd; $i <= $nam; $i++){
		$soduhm += sohaomon($idts,$i);
	}
	if($soduhm >= $nguyengia)
		$soduhm = $nguyengia;
	return $soduhm;
}

function chekts($idts,$nam)
{
	global $con;
	$sql = "Select TTQLTS from tbltanggiam WHERE tanggiam like 'Điều chuyển%' and  TTQLTS = " . $idts . " and year(ngaytanggiam) = " . $nam;
	$qrsql = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($qrsql)) {
		return true;
	}
	return false;
}
function giatriconlai($idts,$nam,$nguyengia)
{
	global $con;
	$kq = 0;
	$sohaomon = 0;
	$sql = "Select max(namhaomon), sotien,sodu from tblhaomon where TTQLTS = ". $idts ." and year(ngaythang) <=".$nam;
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql)){
		$sohaomon = $row['sotien'] + $row['sodu'];
	}
	$kq = $nguyengia - $sohaomon;
	if($kq<=0)
		$kq = 0;
	return $kq;
}


$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	" where tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)) {
	$_aDV[] = array('ma' => $_r['madonvi'],
		'ten' => $_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
// in tên đơn vị
	echo "<tr >";
	echo "<td colspan='27' style='font-weight: bold;text-align: left'>$_madv[ten]</td>";
	echo "</tr>";
//
	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tbldanhsachqd32.hinhthaitaisan," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where  tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS  in (select TTQLTS from tbldenghi where  year(ngaythang) = " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tbldanhsachqd32.hinhthaitaisan," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32" .
			" where (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS  in (select TTQLTS from tbldenghi where  year(ngaythang) = " . $nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("",  0, 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$tong4 =0; $tong5=0; $tong8 =0; $tong9 =0; $tong12 =0; $tong13 =0;
	$tong16 =0;
	$tong17 =0;
	$tong20 =0;
	$tong21 =0;
	$tong24 =0;
	$tong25 =0;
	while ($row = mysqli_fetch_array($qrsql)) {
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['tenchitiet'];
		$ts[$cs][2] = 0;
		$ts[$cs][3] = 0;
		$ts[$cs][4] = 0;
		$ts[$cs][5] = 0;
		$ts[$cs][6] = 0;
		$ts[$cs][7] = 0;
		$ts[$cs][8] = 0;
		$ts[$cs][9] = 0;
		$ts[$cs][10] = 0;
		$ts[$cs][11] = 0;
		$ts[$cs][12] = 0;
		$ts[$cs][13] = 0;
		$ts[$cs][14] = 0;
		$ts[$cs][15] = 0;
		$ts[$cs][16] = 0;
		$ts[$cs][17] = 0;
		$ts[$cs][18] = 0;
		$ts[$cs][19] = 0;
		$ts[$cs][20] = 0;
		$ts[$cs][21] = 0;
		$ts[$cs][22] = 0;
		$ts[$cs][23] = 0;
		$ts[$cs][24] = 0;
		$ts[$cs][25] = 0;
		$ts[$cs][26] = 0;
		$ts[$cs][27] = 0;
		$sqlxl =  "Select hinhthuc from tbldenghi where TTQLTS = ". $row['TTQLTS'];
		$qrsqlxl = mysqli_query($con,$sqlxl);
		while($rowxl = mysqli_fetch_array($qrsqlxl)){
			if ($rowxl['hinhthuc'] == "Thu hồi") {
				$ts[$cs][2] = 1;
				$ts[$cs][3] =  $row['SL'];
				$ts[$cs][4] =  $row['NG'];
				$ts[$cs][5] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			} elseif ($rowxl['hinhthuc'] == "Điều chuyển") {
				$ts[$cs][6] = 1;
				$ts[$cs][7] =  $row['SL'];
				$ts[$cs][8] =  $row['NG'];
				$ts[$cs][9] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Bán") {
				$ts[$cs][10] = 1;
				$ts[$cs][11] =  $row['SL'];
				$ts[$cs][12] =  $row['NG'];
				$ts[$cs][13] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Thanh lý") {
				$ts[$cs][14] = 1;
				$ts[$cs][15] =  $row['SL'];
				$ts[$cs][16] =  $row['NG'];
				$ts[$cs][17] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  elseif ($rowxl['hinhthuc'] == "Tiêu hủy") {
				$ts[$cs][18] = 1;
				$ts[$cs][19] =  $row['SL'];
				$ts[$cs][20] =  $row['NG'];
				$ts[$cs][21] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}elseif ($rowxl['hinhthuc'] == "Xử lý trong trường hợp bị mất, bị hủy hoại") {
				$ts[$cs][22] = 1;
				$ts[$cs][23] =  $row['SL'];
				$ts[$cs][24] =  $row['NG'];
				$ts[$cs][25] = giatriconlai($row['TTQLTS'],$nam,$row['NG']);
			}  else {

			}
			if($row['SL'] <= 1){
				$ts[$cs][3] = 0;
				$ts[$cs][7] = 0;
				$ts[$cs][11] = 0;
				$ts[$cs][15] = 0;
				$ts[$cs][19] = 0;
				$ts[$cs][23] = 0;
			}
		}


		$cs = $cs + 1;
	}
	$j = 0;
	$tennhomsau = "";
	$tennhom = "";
	$stt = 0;
	for ($i = 0; $i < $cs; $i++) {
		$tennhom = $ts[$i][0];
		$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? '1 - Đất khuân viên' : ($tennhom == 'Nhà, công trình xây dựng' ? '2 - Nhà' : ($tennhom == 'Nhà' ? '2 - Nhà' :($tennhom == 'Xe ô tô' ? '3 - Xe ô tô' :($tennhom == 'Phương tiện vận tải đường bộ' ? '3 - Xe ô tô' : '4 - Tài sản cố định khác'))));
		$tengroup = $tenhienthi;
		$stt++;
		if ($tengroup != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
			//nhóm group
			$tongnhom4 = 0;
			$tongnhom5 = 0;
			$tongnhom8 = 0;
			$tongnhom9 = 0;
			$tongnhom12 = 0;
			$tongnhom13 = 0;
			$tongnhom16 = 0;
			$tongnhom17 = 0;
			$tongnhom20 = 0;
			$tongnhom21 = 0;
			$tongnhom24 = 0;
			$tongnhom25 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$tongnhom4 += $ts[$j][4];
					$tongnhom5 += $ts[$j][5];
					$tongnhom8 += $ts[$j][8];
					$tongnhom9 += $ts[$j][8];
					$tongnhom12 += $ts[$j][12];
					$tongnhom13 += $ts[$j][13];
					$tongnhom16 += $ts[$j][16];
					$tongnhom17 += $ts[$j][17];
					$tongnhom20 += $ts[$j][20];
					$tongnhom21 += $ts[$j][21];
					$tongnhom24 += $ts[$j][24];
					$tongnhom25 += $ts[$j][25];

					$tong4 += $ts[$j][4];
					$tong5 += $ts[$j][5];
					$tong8 += $ts[$j][8];
					$tong9 += $ts[$j][8];
					$tong12 += $ts[$j][12];
					$tong13 += $ts[$j][13];
					$tong16 += $ts[$j][16];
					$tong17 += $ts[$j][17];
					$tong20 += $ts[$j][20];
					$tong21 += $ts[$j][21];
					$tong24 += $ts[$j][24];
					$tong25 += $ts[$j][25];
				}
			}
			// in Group
			echo "<tr >";
			echo "<td ></td>";
			echo "<td  style='font-weight: bold;text-align: left'>$tenhienthi</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom4)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom5)."</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom8)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom9)."</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom12)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom13)."</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom16)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom17)."</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom20)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom21)."</td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom24)."</td>";
			echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tongnhom25)."</td>";
			echo "<td ></td>";
			echo "</tr>";
		}

		// chi tiết
		echo "<tr >";
		echo "<td style='text-align: center'>" . $stt . "</td>";
		echo "<td style='text-align: left'>" . $ts[$i][1] . "</td>";
		echo "<td style='text-align: center'>" . $ts[$i][2] . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][3]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][4]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][5]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][6]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][7]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][8]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][9]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][10]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][11]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][12]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][13]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][14]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][15]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][16]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][17]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][18]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][19]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][20]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][21]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][22]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][23]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][24]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][25]) . "</td>";
		echo "<td style='text-align: right'>" . dinhdangso($ts[$i][26]) . "</td>";
		echo "</tr>";
		$tennhomsau = $tenhienthi;
	}
	// in tổng cộng
	echo "<tr >";
	echo "<td ></td>";
	echo "<td style='font-weight: bold;text-align: center'> Tổng cộng</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong4)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong5)."</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong8)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong9)."</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong12)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong13)."</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong16)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong17)."</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong20)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong21)."</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: center'>X</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong24)."</td>";
	echo "<td style='font-weight: bold;text-align: right;'>".dinhdangso($tong25)."</td>";
	echo "<td ></td>";
	echo "</tr>";
}
?>
	</table>
<table >
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP BÁO CÁO</td>
		<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, họ tên)</td>
		<td style="text-align: center; font-style: italic;">(ký, họ tên và đóng dấu)</td>
	</tr>
	<tr style="height: 80px">
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-style: italic;"></td>
	</tr>
	<tr>
		<td style="text-align: center; font-weight: bold ;"><?php echo $nlb;?></td>
		<td style="text-align: center; font-weight: bold ;"><?php echo $ttdv;?></td>
	</tr>
</table>
</body>		
</html>	