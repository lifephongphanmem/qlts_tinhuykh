<head>
<meta charset='utf-8'>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
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
?>
</head>
<body>

<?php

$cs=0;
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Mã chương: ','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị báo cáo: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','Mã ĐV có QH với NS:','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'E1','Mẫu số B04 - H','B','Time New Roman',11,'','','J1',0,'');
dulieumotcot($objPHPExcel,'E2','(Ban hành theo QĐ số: 19/2006/QĐ-BTC','','Time New Roman',11,'','','J2',0,'');
dulieumotcot($objPHPExcel,'E3','ngày 30/03/2006 của Bộ trưởng BTC và sửa đổi,','','Time New Roman',11,'','','J3',0,'');
dulieumotcot($objPHPExcel,'E4','bổ sung theo thông tư số 185/2010/TT-BTC)','','Time New Roman',11,'','','J4',0,'');
dulieumotcot($objPHPExcel,'A5','BÁO CÁO TÌNH HÌNH TĂNG, GIẢM TSCĐ','B','Time New Roman',16,'','','J5',0,'');
dulieumotcot($objPHPExcel,'A6','Năm: '.$nam,'','Time New Roman',11,'','','J6',0,'');

dulieumotcot($objPHPExcel,'A7','- Loại TSCĐ, Nhóm TSCĐ','B','Time New Roman',10,'','','A8',25,'C');
dulieumotcot($objPHPExcel,'B7','Đơn vị tính','B','Time New Roman',10,'','','B8',25,'C');
dulieumotcot($objPHPExcel,'C7','Số đầu năm','B','Time New Roman',10,'','','D7',7,'C');
dulieumotcot($objPHPExcel,'E7','Tăng trong năm','B','Time New Roman',10,'','','F7',7,'C');
dulieumotcot($objPHPExcel,'G7','Giảm trong năm','B','Time New Roman',10,'','','H7',7,'C');
dulieumotcot($objPHPExcel,'I7','Số cuối năm','B','Time New Roman',10,'','','J7',0,'C');

dulieumotcot($objPHPExcel,'C8','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D8','Giá trị','B','Time New Roman',10,'','','',12,'C');

dulieumotcot($objPHPExcel,'E8','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F8','Giá trị','B','Time New Roman',10,'','','',12,'C');

dulieumotcot($objPHPExcel,'G8','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H8','Giá trị','B','Time New Roman',10,'','','',12,'C');

dulieumotcot($objPHPExcel,'I8','Số lượng','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J8','Giá trị','B','Time New Roman',10,'','','',12,'C');

dulieumotcot($objPHPExcel,'A9','C','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B9','1','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C9','2','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D9','3','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E9','4','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F9','5','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G9','6','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H9','7','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I9','8','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J9','9','B','Time New Roman',10,'','','',0,'C');
$index = 10;
kedong($objPHPExcel,'A7','J9',1,'Mỏng');
$tg =  array(array(0,"A","B","N","D",0,0,0,0,0,0,0,0));
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
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung, tbldanhsachqd32.hinhthaitaisan
					from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]'";
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
	$sqlts = $sqlts . " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN Year(tblqlts.ngaythangchuyen) <= '" . $nam . "'  ELSE Year(tblqlts.ngaysudung) <= '" . $nam . "' END) " .
		//$sqlts = $sqlts." and tblqlts.ngaysudung <= '" . doingay($denngay) .
		" and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or tbldenghi.hinhthuc = 'Thu hồi' or hinhthuc  = 'Điều chuyển' or hinhthuc  = 'Tiêu hủy') and Year(ngaythang) < '" . $nam . "') order by tbldanhsachqd32.ttsx";
	//echo $sqlts;
	$queryts = mysqli_query($con, $sqlts);
	$tg = array(array(0, "A", "B", "N", 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$stdk = 0;
	$sttkt = 0;
	$sttkg = 0;
	$stck = 0;
	$tennhom = "";
	$tents = "";
	$dvt = "";
	$tennhomsau = "";
	$sl1 = 0;
	$sl2 = 0;
	$sl3 = 0;
	$sl4 = 0;
	$sl5 = 0;
	$sl6 = 0;
	$sl7 = 0;
	$sl8 = 0;
	while ($rowts = mysqli_fetch_array($queryts)) {
		$nam1 = 0;
		$thang1 = 0;
		$nam2 = 0;
		$thang2 = 0;
		$chuoi1 = "";
		$chuoi2 = "";
		if ($rowts['ngaysudung'] != "") {
			$chuoi1 = explode('-', $rowts['ngaysudung']);
		}
		$ngaysd = doingay($rowts['ngaysudung']);
		$chuoi2 = explode('/', $tungay);
		$kq = 0;
		$tang = 0;
		$sttang = 0;
		$stgiam = 0;
		$kqtk = 0;
		$tangtk = 0;
		$sttangtk = 0;
		$stgiamtk = 0;
		//if ($rowts['DTKV'] + $rowts['DTXD'] + $tang > $kq) {
		$tg[$cs][0] = $cs + 1;
		$tg[$cs][1] = $rowts['tenchitiet'];
		$tg[$cs][2] = $rowts['DVT'];
		$tg[$cs][3] = $rowts['hinhthaitaisan'];

		$tg[$cs][4] = tinhtoan($rowts['TTQLTS'], "Đầu kỳ", "Số lượng", "");
		$tg[$cs][5] = tinhtoan($rowts['TTQLTS'], "Đầu kỳ", "Số tiền", "");
		$tg[$cs][6] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số lượng", "Tăng");
		$tg[$cs][7] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số tiền", "Tăng");

		$tg[$cs][8] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số lượng", "Giảm");
		$tg[$cs][9] = tinhtoan($rowts['TTQLTS'], "Trong kỳ", "Số tiền", "Giảm");
		$tg[$cs][10] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số lượng", "");
		$tg[$cs][11] = tinhtoan($rowts['TTQLTS'], "Cuối kỳ", "Số tiền", "");

		$cs = $cs + 1;
		//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhomsl2 = 0;
	$nhomsl4 = 0;
	$nhomsl6 = 0;
	$nhomsl8 = 0;
	$j = 0;
	$stt = 0;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':J' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
	$index++;
	for ($i = 0; $i < $cs; $i++) {
		$stdk += $tg[$i][5];
		$sttkt += $tg[$i][7];
		$sttkg += $tg[$i][9];
		$stck += $tg[$i][11];
		$stt++;
		$tennhom = $tg[$i][3];
		$tents = $tg[$i][1];
		$dvt = $tg[$i][2];
		$sl1 = dinhdangso($tg[$i][4]);
		$sl2 = dinhdangso($tg[$i][5]);
		$sl3 = dinhdangso($tg[$i][6]);
		$sl4 = dinhdangso($tg[$i][7]);
		$sl5 = dinhdangso($tg[$i][8]);
		$sl6 = dinhdangso($tg[$i][9]);
		$sl7 = dinhdangso($tg[$i][10]);
		$sl8 = dinhdangso($tg[$i][11]);
//$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? 'Đất khuân viên' : ($tennhom == 'Nhà' ? 'Nhà' : ($tennhom == 'Phương tiện vận tải đường bộ' ? 'Xe ô tô' : 'Tài sản cố định khác'));
		$tengroup = $tennhom;

		if ($tennhom != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
			// Nhom tai san
			$nhomsl2 = 0;
			$nhomsl4 = 0;
			$nhomsl6 = 0;
			$nhomsl8 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($tg[$j][3] == $tennhom) {
					$nhomsl2 += $tg[$j][5];
					$nhomsl4 += $tg[$j][7];
					$nhomsl6 += $tg[$j][9];
					$nhomsl8 += $tg[$j][11];
				}
			}
			$nhomsl2 = dinhdangso($nhomsl2);
			$nhomsl4 = dinhdangso($nhomsl4);
			$nhomsl6 = dinhdangso($nhomsl6);
			$nhomsl8 = dinhdangso($nhomsl8);
			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, $tennhom)
				->setCellValue('D' . $index, $nhomsl2)
				->setCellValue('F' . $index, $nhomsl4)
				->setCellValue('H' . $index, $nhomsl6)
				->setCellValue('J' . $index, $nhomsl8);
			dinhdangBI($objPHPExcel, 'A' . $index, 'J' . $index, 1, 'B');
			$index++;
		}
		//Chi tiết

		if ($sl1 > 0)
			$sl1 = $tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl1;
		if ($sl3 > 0)
			$sl3 = ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl3);
		if ($sl5 > 0)
			$sl5 = ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl5);
		if ($sl7 > 0)
			$sl7 = ($tennhom == 'Quyền sử dụng đất' ? '1' : $tennhom == 'Nhà' ? '1' : $tennhom == 'Phương tiện vận tải đường bộ' ? '1' : $sl7);
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $tents)
			->setCellValue('B' . $index, $dvt)
			->setCellValue('C' . $index, $sl1)
			->setCellValue('D' . $index, $sl2)
			->setCellValue('E' . $index, $sl3)
			->setCellValue('F' . $index, $sl4)
			->setCellValue('G' . $index, $sl5)
			->setCellValue('H' . $index, $sl6)
			->setCellValue('I' . $index, $sl7)
			->setCellValue('J' . $index, $sl8);
		$tennhomsau = $tennhom;
		$index++;
	}
	//Cổng tổng
	$stdk = dinhdangso($stdk);
	$sttkt = dinhdangso($sttkt);
	$sttkg = dinhdangso($sttkg);
	$stck = dinhdangso($stck);

	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, 'Tổng cộng')
		->setCellValue('D' . $index, $stdk)
		->setCellValue('F' . $index, $sttkt)
		->setCellValue('H' . $index, $sttkg)
		->setCellValue('J' . $index, $stck);
	dinhdangBI($objPHPExcel, 'A' . $index, 'J' . $index, 1, 'B');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','J'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A10','B'.$index,$i,'T');
dinhdangle($objPHPExcel,'C10','J'.$index,$i,'P');
dinhdangsoxls($objPHPExcel,'C10','J'.$index,$i,'BT');
dinhdangxuongdong($objPHPExcel,'B10','C'.$index,$i);
kedong($objPHPExcel,'A10','J'.$index,$i,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'H'.$index,'Hà Nội, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'B'.$index,'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.$index,'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.$index,'Thủ trưởng đơn vị','B','Time New Roman',11,'','','K'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'C'.$index,'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'F'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','J'.$index,0,'');
dulieumotcot($objPHPExcel,'B'.($index + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 7),'','B','Time New Roman',11,'','','J'.($index + 7),0,'');
taofile($objPHPExcel,"BcTHTGTSCDdvxls.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BcTHTGTSCDdvxls.xls">Bấm vào đây để tải file về</a>
</body>