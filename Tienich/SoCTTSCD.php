<head>
<meta charset='utf-8'>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$phanloai = "";
$tungay = "";
$denngay = "";
$madv ="";
$noidung = "";
$tgsc = "";
$nam = "";
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$nam = $_POST['nam'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['tgsc']))
		$tgsc = true;
	else
		$tgsc = false;
}
if(isset($_POST['noidung']))
	$noidung = $_POST['noidung'];
$machuong ="";
$masons = "";
$sql = "Select machuong,maqhns from thongtindonvi where madonvi = '$madv[0]'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$machuong = $row['machuong'];
	$masons =$row['maqhns'];
}


require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';
?>
</head>
<body>

<?php
$cs=0;
//luu cac thong tin vao file excel
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Mã chương: '.$machuong,'B','Time New Roman',11,'T','','H1',0,'');
dulieumotcot($objPHPExcel,'I1','Mẫu số SCT_TSCD1','B','Time New Roman',11,'T','','L1',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị báo cáo: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','Mã đơn vị: '.$masons,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A4','Đơn vị thành viên: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');

dulieumotcot($objPHPExcel,'A5','SỔ CHI TIẾT TÀI SẢN CỐ ĐỊNH','B','Time New Roman',16,'','','L5',0,'');
dulieumotcot($objPHPExcel,'A6','Năm '.$nam,'Time New Roman','',11,'','','L6',0,'');

dulieumotcot($objPHPExcel,'A7','Nhóm TSCĐ','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'B7','Tên tài sản	','B','Time New Roman',10,'','','B7',30,'');
dulieumotcot($objPHPExcel,'C7','Người sử dụng','B','Time New Roman',10,'','','C7',10,'C');
dulieumotcot($objPHPExcel,'D7','Nước sản xuất','B','Time New Roman',10,'','','D7',11,'C');
dulieumotcot($objPHPExcel,'E7','Ngày sử dụng','B','Time New Roman',10,'','','E7',11,'C');
dulieumotcot($objPHPExcel,'F7','Số năm sử dụng','B','Time New Roman',10,'','','F7',11,'C');
dulieumotcot($objPHPExcel,'G7','Tỷ lệ HM','B','Time New Roman',10,'','','G7',11,'C');
dulieumotcot($objPHPExcel,'H7','Nguyên giá','B','Time New Roman',10,'','','H7',11,'C');
dulieumotcot($objPHPExcel,'I7','Giá trị hao mòn đầu kỳ','B','Time New Roman',10,'','','I7',11,'C');
dulieumotcot($objPHPExcel,'J7','Số hao mòn trong kỳ','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'K7','Giá trị hao mòn lũy kế','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'L7','Giá trị còn lại','B','Time New Roman',10,'','','',11,'C');

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
dulieumotcot($objPHPExcel,'L8','11','','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A7','L8',1,'Mỏng');

$cc = array();
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
function giamtk($msts,$condition)
{
	global $nam;
	global $con;
	$soluong = 0;
	$sotien = 0;
	$kq = 0;
	$sql = "Select distinct tblqlts.DTKV,tblqlts.DTXD,ngansach+nguonkhac as NG ".
		" From tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS ".
		" Where tblqlts.TTQLTS = ". $msts ." and Year(tbldenghi.ngaythang) = ".$nam;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$soluong = $row['DTKV'] + $row['DTXD'];
		$sotien = $row['NG'];
	}
	if($condition == "Số lượng")
		$kq = $soluong;
	if($condition == "Số tiền")
		$kq = $sotien;
	return $kq;
}
//tính số lượng
function tinhtoan($msts,$condition,$condition1,$tanggiam)
{
	global $con;
	global $nam;
	global $tgsc;
	$soluongts = 0;
	$sotients = 0;
	$sotang = 0;
	$sogiam = 0;
	$slg = 0;
	$sotientang = 0;
	$sotiengiam = 0;
	$stg = 0;
	$kq = 0;

	//xác định số tiền tăng nguyên giá
	$sqltg = "Select lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien" .
		" from tbltanggiam where TTQLTS = " . $msts .
		($condition == "Đầu kỳ" ? " and Year(ngaytanggiam) < '" . $nam . "' " : "") .
		($condition == "Trong kỳ" ? " and Year(ngaytanggiam) = '" . $nam . "' " : "") .
		($condition == "Cuối kỳ" ? " and Year(ngaytanggiam) <= '" . $nam . "' " : "");
	//echo $sqltg;
	$querytg = mysqli_query($con, $sqltg);
	while ($rowtg = mysqli_fetch_array($querytg)) {
		if ($rowtg['tanggiam'] == "Tăng") {
			$sotang = $sotang + $rowtg['soluong'];
			$sotientang += $rowtg['ngansach'] + $rowtg['nguonkhac'];
		}
		if ($rowtg['tanggiam'] == "Giảm") {
			$slg += $rowtg['soluong'];
			$stg += $rowtg['ngansach'] + $rowtg['nguonkhac'];
		}
	}

	//Số lượng giảm trong kỳ
	$sql = "Select distinct tblqlts.DTKV,tblqlts.DTXD,ngansach+nguonkhac as NG " .
		" From tblqlts inner join tbldenghi on tblqlts.TTQLTS = tbldenghi.TTQLTS " .
		" Where tblqlts.TTQLTS = " . $msts . " and (tbldenghi.hinhthuc = 'Thanh lý'  or tbldenghi.hinhthuc = 'Điều chuyển' or hinhthuc  = 'Thu hồi' or hinhthuc  = 'Bán')" .
		($condition == "Đầu kỳ" ? " and Year(tbldenghi.ngaythang) < '" . $nam . "' " : "") .
		($condition == "Trong kỳ" ? " and Year(tbldenghi.ngaythang) = '" . $nam . "' " : "") .
		($condition == "Cuối kỳ" ? " and Year(tbldenghi.ngaythang) <= '" . $nam . "' " : "");
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$sogiam = $row['DTKV'] + $row['DTXD'];
		$sotiengiam = $row['NG'] + $sotientang;
	}
	$sql = "Select distinct DTKV,DTXD,ngansach+nguonkhac as NG" .
		" from tblqlts where TTQLTS = " . $msts .
		($condition == "Đầu kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) < '" . $nam . "'  ELSE Year(ngaysudung) < '" . $nam . "' END) " : "") .
		($condition == "Trong kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) = '" . $nam . "'  ELSE  Year(ngaysudung) = '" . $nam . "' END) " : "") .
		($condition == "Cuối kỳ" ? " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(ngaythangchuyen) <= '" . $nam . "'  ELSE Year(ngaysudung) <= '" . $nam . "' END)" : "");
	//($condition == "Đầu kỳ"? " and ngaysudung < '" . doingay($tungay) . "' ":"").
	//($condition == "Trong kỳ"? " and ngaysudung between '" . doingay($tungay) . "' and '" . doingay($denngay) . "' ":"").
	//($condition == "Cuối kỳ"? " and ngaysudung <= '" . doingay($denngay) . "' ":"");
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$soluongts += $row['DTKV'] + $row['DTXD'];
		$sotients += $row['NG'];
	}
	if ($tgsc) {
		if ($condition1 == "Số lượng" && $tanggiam == "")
			$kq = $soluongts + $sotang - $sogiam - $slg;
		if ($condition1 == "Số tiền" && $tanggiam == "")
			$kq = $sotients + $sotientang - $sotiengiam - $stg;
		if ($tanggiam == "Tăng" && $condition1 == "Số lượng")
			$kq = $soluongts + $sotang;
		if ($tanggiam == "Giảm" && $condition1 == "Số lượng")
			$kq = $sogiam + $slg;
		if ($tanggiam == "Tăng" && $condition1 == "Số tiền")
			$kq = $sotients + $sotientang;
		if ($tanggiam == "Giảm" && $condition1 == "Số tiền")
			$kq = $sotiengiam + $stg;
	} else {
		if ($condition1 == "Số lượng" && $tanggiam == "")
			$kq = $soluongts + $sotang - $sogiam;
		if ($condition1 == "Số tiền" && $tanggiam == "")
			$kq = $sotients + $sotientang - $sotiengiam;
		if ($tanggiam == "Tăng" && $condition1 == "Số lượng")
			$kq = $soluongts;
		if ($tanggiam == "Giảm" && $condition1 == "Số lượng")
			$kq = $sogiam;
		if ($tanggiam == "Tăng" && $condition1 == "Số tiền")
			$kq = $sotients;
		if ($tanggiam == "Giảm" && $condition1 == "Số tiền")
			$kq = $sotiengiam;
	}

	return $kq;
}


$index = 9;
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'";
//($nam == ""?"":" and tblqlts.ngaysudung <= '" . $nam . "'");
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}
//Duyệt từng đơn vị
$_sQLdv="Select thongtindonvi.madonvi, thongtindonvi.tendv from thongtindonvi where thongtindonvi.madonvi Like '$msdv%' and LENGTH(madonvi) >= 16 ORDER BY tendv";
//$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tbltanggiam inner join thongtindonvi on tbltanggiam.madonvi=thongtindonvi.madonvi where tbltanggiam.madonvi Like '$msdv%' and ngaytanggiam <= '" . doingay($denngay) . "'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung,
					tblqlts.mataisan, tblqlts.nguoisudung, tblqlts.tentaisan, tblqlts.sonamsd, tblqlts.sohaomon, tblqlts.conlai,tblqlts.NUOCSX,tblqlts.phantram,tbldanhsachqd32.hinhthaitaisan
					from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]' and Year(tblqlts.ngaysudung) <= $nam";
	if ($phanloai == "") {
		$sqlts = $sqlts . " and tblqlts.chitiethinhthai like '" . $phanloai . "%'";
	} else {
		$sqlts = $sqlts . " and (";
		$count = 0;
		$chars = str_split($_POST["sobg"]);
		foreach ($chars as &$char) {
			if ($char == '>') {
				$count++;
			}
		}
		for ($i = 0; $i < $count; $i++) {
			if ($i == $count - 1)
				$sqlts = $sqlts . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%'";
			else
				$sqlts = $sqlts . "tblqlts.chitiethinhthai like '" . $phanloai[$i] . "%' or ";
		}
		$sqlts = $sqlts . ")";
	}
	$sqlts = $sqlts . " order by tbldanhsachqd32.ttsx";
	//echo $sqlts;
	$queryts = mysqli_query($con, $sqlts);
	$tg = array(array(0, "A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$tongNG = 0;
	$tongHMdk = 0;
	$tongHMtk = 0;
	$tongHMlk = 0;
	$tongCL = 0;
	$tennhom = "";
	$tents = "";
	$dvt = "";
	$tennhomsau = "";
	$sl1 = 0;
	$sl2 = 0;
	$sl3 = 0;
	$sl4 = 0;
	$sl5 = 0;
	while ($rowts = mysqli_fetch_array($queryts)) {
		$sqlhm = "Select sodu,sotien, max(namhaomon) as namhm from tblhaomon where TTQLTS =" . $rowts['TTQLTS'] . " and namhaomon <= $nam";
		$qrsqlhm = mysqli_query($con, $sqlhm);
		while ($rowhm = mysqli_fetch_array($qrsqlhm)) {
			$kq = 0;
			$tg[$cs][0] = $cs + 1;
			$tg[$cs][1] = $rowts['mataisan'];
			$tg[$cs][2] = $rowts['mataisan'] . "." . $rowts['TTQLTS'];
			$tg[$cs][3] = $rowts['tenchitiet'];
			$tg[$cs][4] = $rowts['hinhthaitaisan'];
			$tg[$cs][5] = $rowts['nguoisudung'];
			$tg[$cs][6] = $rowts['NUOCSX'];
			$tg[$cs][7] = ngaythang($rowts['ngaysudung']);
			$tg[$cs][8] = $rowts['sonamsd'];
			$tg[$cs][9] = $rowts['phantram'];
			$tg[$cs][10] = $rowts['NG'];
			if ($rowhm['namhm'] == $nam) {
				$tg[$cs][11] = $rowhm['sodu'];
				$tg[$cs][12] = $rowhm['sotien'];
				$tg[$cs][13] = $rowhm['sotien'] + $rowhm['sodu'];
				$tg[$cs][14] = $rowts['NG'] - $rowhm['sotien'] - $rowhm['sodu'];
			} else {
				$tg[$cs][11] = $rowhm['sotien'] + $rowhm['sodu'];
				$tg[$cs][12] = 0;
				$tg[$cs][13] = $rowhm['sotien'] + $rowhm['sodu'];
				$tg[$cs][14] = $rowts['NG'] - $rowhm['sotien'] - $rowhm['sodu'];
			}
		}

		$cs = $cs + 1;
		//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhoms1 = 0;
	$nhoms2 = 0;
	$nhoms3 = 0;
	$nhoms4 = 0;
	$nhoms5 = 0;

	$j = 0;
	$stt = 0;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':S' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
	$index++;
	for ($i = 0; $i < $cs; $i++) {
		$tongNG += $tg[$i][10];
		$tongHMdk += $tg[$i][11];
		$tongHMtk += $tg[$i][12];
		$tongHMlk += $tg[$i][13];
		$tongCL += $tg[$i][14];
		$stt++;
		$tennhom = $tg[$i][4];
		$tents = $tg[$i][3];

		$sl1 = dinhdangso($tg[$i][10]);
		$sl2 = dinhdangso($tg[$i][11]);
		$sl3 = dinhdangso($tg[$i][12]);
		$sl4 = dinhdangso($tg[$i][13]);
		$sl5 = dinhdangso($tg[$i][14]);
		//$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? 'Đất khuân viên' : ($tennhom == 'Nhà' ? 'Nhà' : ($tennhom == 'Phương tiện vận tải đường bộ' ? 'Xe ô tô' : 'Tài sản cố định khác'));
		$tengroup = $tennhom;

		if ($tennhom != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
			// Nhom tai san
			$nhoms1 = 0;
			$nhoms2 = 0;
			$nhoms3 = 0;
			$nhoms4 = 0;
			$nhoms5 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($tg[$j][4] == $tennhom) {
					$nhoms1 += $tg[$j][10];
					$nhoms2 += $tg[$j][11];
					$nhoms3 += $tg[$j][12];
					$nhoms4 += $tg[$j][13];
					$nhoms5 += $tg[$j][14];
				}
			}
			$nhoms1 = dinhdangso($nhoms1);
			$nhoms2 = dinhdangso($nhoms2);
			$nhoms3 = dinhdangso($nhoms3);
			$nhoms4 = dinhdangso($nhoms4);
			$nhoms5 = dinhdangso($nhoms5);
// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, $tg[$i][1])
				->setCellValue('B' . $index, $tennhom)->mergeCells('B' . $index . ':H' . $index)
				->setCellValue('H' . $index, $nhoms1)
				->setCellValue('I' . $index, $nhoms2)
				->setCellValue('J' . $index, $nhoms3)
				->setCellValue('K' . $index, $nhoms4)
				->setCellValue('L' . $index, $nhoms5);
			dinhdangBI($objPHPExcel, 'A' . $index, 'L' . $index, 1, 'B');
			$index++;
		}
		//Chi tiết
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $tg[$i][2])
			->setCellValue('B' . $index, $tg[$i][3])
			->setCellValue('C' . $index, $tg[$i][5])
			->setCellValue('D' . $index, $tg[$i][6])
			->setCellValue('E' . $index, $tg[$i][7])
			->setCellValue('F' . $index, $tg[$i][8])
			->setCellValue('G' . $index, $tg[$i][9])
			->setCellValue('H' . $index, $sl1)
			->setCellValue('I' . $index, $sl2)
			->setCellValue('J' . $index, $sl3)
			->setCellValue('K' . $index, $sl4)
			->setCellValue('L' . $index, $sl5);
		$index++;
		$tennhomsau = $tennhom;
	}
//Cổng tổng
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, 'Tổng cộng')->mergeCells('A' . $index . ':B' . $index)
		->setCellValue('H' . $index, dinhdangso($tongNG))
		->setCellValue('I' . $index, dinhdangso($tongHMdk))
		->setCellValue('J' . $index, dinhdangso($tongHMtk))
		->setCellValue('K' . $index, dinhdangso($tongHMlk))
		->setCellValue('L' . $index, dinhdangso($tongCL));
	dinhdangBI($objPHPExcel, 'A' . $index, 'L' . $index, 1, 'B');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','L'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A9','A'.$index,$i,'');
dinhdangle($objPHPExcel,'B9','B'.$index,$i,'T');
dinhdangle($objPHPExcel,'C9','F'.$index,$i,'T');
dinhdangle($objPHPExcel,'D9','D'.$index,$i,'T');
dinhdangle($objPHPExcel,'E9','M'.$index,$i,'');
dinhdangle($objPHPExcel,'F9','L'.$index,$i,'P');

dinhdangsoxls($objPHPExcel,'F9','L'.$index,$i,'BT');

dinhdangxuongdong($objPHPExcel,'A9','L'.$index,$i);
dinhdangxuongdong($objPHPExcel,'R10','R'.$index,$i);

kedong($objPHPExcel,'A9','L'.$index,$i,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'J'.$index,'....... , ngày ... tháng ... năm ......','I','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'Thủ trưởng đơn vị','B','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','N'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,'','B','Time New Roman',11,'','','N'.$index,0,'');
taofile($objPHPExcel,"SoTSCD107.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoTSCD107.xls">Bấm vào đây để tải file về</a>
</body>