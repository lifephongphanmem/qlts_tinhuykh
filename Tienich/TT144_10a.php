<head>
<meta charset='utf-8'>
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
</head>
<body>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$kq = "";$dckv="";$dtkv=0;$gtskt=0;
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';

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

$objPHPExcel = new PHPExcel();

dulieumotcot($objPHPExcel,'A1','Bộ, tỉnh: ','B','Time New Roman',11,'T','','K1',0,'');
dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','H2',0,'');
dulieumotcot($objPHPExcel,'I2','Mẫu số 10a-CK/TSC','B','Time New Roman',11,'','','K2',0,'');

dulieumotcot($objPHPExcel,'A3','CÔNG KHAI TÌNH HÌNH ĐẦU TƯ XÂY DỰNG, MUA SẮM, GIAO, THUÊ TÀI SẢN CÔNG','B','Time New Roman',16,'','','K3',0,'');
dulieumotcot($objPHPExcel,'A4','Năm: '.$nam,'B','Time New Roman',10,'','','K4',0,'');

dulieumotcot($objPHPExcel,'A6','STT','','Time New Roman',10,'','','A7',5,'');
dulieumotcot($objPHPExcel,'B6','TÀI SẢN','','Time New Roman',10,'','','B7',20,'');
dulieumotcot($objPHPExcel,'C6','ĐẦU TƯ XÂY DỰNG/ MUA SẮM','','Time New Roman',10,'','','E6',8,'');
dulieumotcot($objPHPExcel,'F6','TIẾP NHẬN','','Time New Roman',10,'','','H6',8,'');
dulieumotcot($objPHPExcel,'I6','THUÊ','','Time New Roman',10,'','','K6',10,'');

dulieumotcot($objPHPExcel,'C7','Số lượng','','Time New Roman',10,'','','C7',24,'C');
dulieumotcot($objPHPExcel,'D7','Diện tích','B','Time New Roman',10,'','','D7',0,'C');
dulieumotcot($objPHPExcel,'E7','Nguyên giá','','Time New Roman',10,'','','E7',15,'C');

dulieumotcot($objPHPExcel,'F7','Số lượng','','Time New Roman',10,'','','F7',24,'C');
dulieumotcot($objPHPExcel,'G7','Diện tích','B','Time New Roman',10,'','','G7',0,'C');
dulieumotcot($objPHPExcel,'H7','Nguyên giá','','Time New Roman',10,'','','H7',15,'C');

dulieumotcot($objPHPExcel,'I7','Số lượng','','Time New Roman',10,'','','I7',24,'C');
dulieumotcot($objPHPExcel,'J7','Diện tích','B','Time New Roman',10,'','','J7',0,'C');
dulieumotcot($objPHPExcel,'K7','Nguyên giá','','Time New Roman',10,'','','K7',15,'C');

dulieumotcot($objPHPExcel,'A8','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B8','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C8','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D8','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E8','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F8','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G8','7','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H8','8','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I8','9','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J8','10','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K8','11','','Time New Roman',10,'','','',0,'C');

kedong($objPHPExcel,'A6','K8',1,'Mỏng');

$index = 9;
$stt = 0;
$sttdv = 0;
//Lấy danh sách đơn vị
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
$tong2 = 0;
$tong3 = 0;
$tong4 = 0;
$tong5 = 0;
$tong6 = 0;
$tong7 = 0;
$tong8 = 0;
$tong9 = 0;
$tong10 = 0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	$sttdv++;
	//Tên đơn vị
	// in tên đơn vị
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $sttdv);
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':K' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'B');
	$index++;
	//Kết thúc tên đơn vị

	if ($ts5 == "No") {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
			"tblqlts.phantram,tbldanhsachqd32.hinhthaitaisan, tblqlts.lydotang" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
			" where  tblqlts.madonvi = '$_madv[ma]' and " .
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	} else {
		$sql = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.NUOCSX,tblqlts.namsanxuat," .
			"year(ngaysudung) as nsd,tblqlts.ngaysudung,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG," .
			"tblqlts.phantram,tblqlts.phantram32" .
			" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
			" where (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and " .
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= '" . $nam . "'  ELSE year(ngaysudung) <= '" . $nam . "' END) ";
		$sql = $sql . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
	}
	$qrsql = mysqli_query($con, $sql);
	$ts = array(array("", 0, 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;

	while ($row = mysqli_fetch_array($qrsql)) {
		$ts[$cs][0] = $row['hinhthaitaisan'];
		$ts[$cs][1] = $row['tenchitiet'];
		if ($row['lydotang'] == "Thuê") {
			$ts[$cs][2] = 0;
			$ts[$cs][3] = 0;
			$ts[$cs][4] = 0;
			$ts[$cs][5] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][7] = 0;
			$ts[$cs][8] = 1;
			$ts[$cs][9] = $row['SL'];
			$ts[$cs][10] = $row['NG'];
		} elseif ($row['lydotang'] == "Được tiếp nhận") {
			$ts[$cs][2] = 0;
			$ts[$cs][3] = 0;
			$ts[$cs][4] = 0;
			$ts[$cs][5] = 1;
			$ts[$cs][6] = $row['SL'];
			$ts[$cs][7] = $row['NG'];
			$ts[$cs][8] = 0;
			$ts[$cs][9] = 0;
			$ts[$cs][10] = 0;
		} else {
			$ts[$cs][2] = 1;
			$ts[$cs][3] = $row['SL'];
			$ts[$cs][4] = $row['NG'];
			$ts[$cs][5] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][7] = 0;
			$ts[$cs][8] = 0;
			$ts[$cs][9] = 0;
			$ts[$cs][10] = 0;
		}
		if ($row['SL'] <= 1) {
			$ts[$cs][3] = 0;
			$ts[$cs][6] = 0;
			$ts[$cs][9] = 0;
		}

		$cs = $cs + 1;
	}
	$j = 0;
	$tennhomsau = "";
	$tennhom = "";
	$stt = 0;
	for ($i = 0; $i < $cs; $i++) {
		$stt++;
		//tổng cộng
		$tong2 += $ts[$i][2];
		$tong3 += $ts[$i][3];
		$tong4 += $ts[$i][4];
		$tong5 += $ts[$i][5];
		$tong6 += $ts[$i][6];
		$tong7 += $ts[$i][7];
		$tong8 += $ts[$i][8];
		$tong9 += $ts[$i][9];
		$tong10 += $ts[$i][10];
		$tennhom = $ts[$i][0];
		$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? '1 - Đất khuân viên' : ($tennhom == 'Nhà, công trình xây dựng' ? '2 - Nhà' : ($tennhom == 'Nhà' ? '2 - Nhà' : ($tennhom == 'Xe ô tô' ? '3 - Xe ô tô' : ($tennhom == 'Phương tiện vận tải đường bộ' ? '3 - Xe ô tô' : '4 - Tài sản cố định khác'))));
		$tengroup = $tenhienthi;
		if ($tengroup != $tennhomsau) {
			//nhóm group
			$tongnhom2 = 0;
			$tongnhom3 = 0;
			$tongnhom4 = 0;
			$tongnhom5 = 0;
			$tongnhom6 = 0;
			$tongnhom7 = 0;
			$tongnhom8 = 0;
			$tongnhom9 = 0;
			$tongnhom10 = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($ts[$j][0] == $tennhom) {
					$tongnhom2 += $ts[$j][2];
					$tongnhom3 += $ts[$j][3];
					$tongnhom4 += $ts[$j][4];
					$tongnhom5 += $ts[$j][5];
					$tongnhom6 += $ts[$j][6];
					$tongnhom7 += $ts[$j][7];
					$tongnhom8 += $ts[$j][8];
					$tongnhom9 += $ts[$j][9];
					$tongnhom10 += $ts[$j][10];
				}
			}
			// in Group

			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, "")
				->setCellValue('B' . $index, $tenhienthi)
				->setCellValue('C' . $index, dinhdangso($tongnhom2))
				->setCellValue('D' . $index, dinhdangso($tongnhom3))
				->setCellValue('E' . $index, dinhdangso($tongnhom4))
				->setCellValue('F' . $index, dinhdangso($tongnhom5))
				->setCellValue('G' . $index, dinhdangso($tongnhom6))
				->setCellValue('H' . $index, dinhdangso($tongnhom7))
				->setCellValue('I' . $index, dinhdangso($tongnhom8))
				->setCellValue('J' . $index, dinhdangso($tongnhom9))
				->setCellValue('K' . $index, dinhdangso($tongnhom10));
			dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
			$index++;
		}
		// chi tiết
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $ts[$i][1])
			->setCellValue('C' . $index, dinhdangso($ts[$i][2]))
			->setCellValue('D' . $index, dinhdangso($ts[$i][3]))
			->setCellValue('E' . $index, dinhdangso($ts[$i][4]))
			->setCellValue('F' . $index, dinhdangso($ts[$i][5]))
			->setCellValue('G' . $index, dinhdangso($ts[$i][6]))
			->setCellValue('H' . $index, dinhdangso($ts[$i][7]))
			->setCellValue('I' . $index, dinhdangso($ts[$i][8]))
			->setCellValue('J' . $index, dinhdangso($ts[$i][9]))
			->setCellValue('K' . $index, dinhdangso($ts[$i][10]));
		$index++;
		$tennhomsau = $tenhienthi;
	}
}
// in tổng cộng

dulieumotcot($objPHPExcel, 'A' . $index, 'Tổng cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
dulieumotcot($objPHPExcel, 'C' . $index, dinhdangso($tong2), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'D' . $index, dinhdangso($tong3), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'E' . $index, dinhdangso($tong4), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'F' . $index, dinhdangso($tong5), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'G' . $index, dinhdangso($tong6), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'H' . $index, dinhdangso($tong7), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'I' . $index, dinhdangso($tong8), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'J' . $index, dinhdangso($tong9), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'K' . $index, dinhdangso($tong10), 'B', 'Time New Roman', 10, '', '', '', 0, '');

// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','K'.$index,$stt,'Time New Roman',8);
dinhdangle($objPHPExcel,'A9','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B9','B'.$index,$stt,'T');
dinhdangle($objPHPExcel,'C9','K'.$index,$stt,'P');

kedong($objPHPExcel,'A9','K'.$index,$stt,'Mỏng');
$index ++;
dulieumotcot($objPHPExcel,'F'.$index,'............, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'NGƯỜI LẬP BÁO CÁO','B','Time New Roman',11,'','','E'.$index,0,'');
dulieumotcot($objPHPExcel,'F'.$index,'THỦ TRƯỞNG ĐƠN VỊ','B','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','E'.$index,0,'');
dulieumotcot($objPHPExcel,'F'.$index,'(Ký, họ tên và đóng dấu)','I','Time New Roman',11,'','','K'.$index,0,'');
//Xuất ra file Excel
taofile($objPHPExcel,"TT144_10a.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save(str_replace('.php', '.xls', __FILE__));
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT144_10a.xls">Bấm vào đây để tải file về</a>
</body>