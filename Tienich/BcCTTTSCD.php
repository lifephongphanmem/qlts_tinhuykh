<head>
<meta charset='utf-8'>
	<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
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
dulieumotcot($objPHPExcel,'I1','Mẫu số BCTANGTS','B','Time New Roman',11,'T','','K1',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị báo cáo: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','Mã đơn vị: '.$masons,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A4','Đơn vị thành viên: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');

dulieumotcot($objPHPExcel,'A5','BÁO CÁO CHI TIẾT TĂNG TÀI SẢN CỐ ĐỊNH','B','Time New Roman',16,'','','K5',0,'');
dulieumotcot($objPHPExcel,'A6','Năm '.$nam,'Time New Roman','',11,'','','K6',0,'');
dulieumotcot($objPHPExcel,'A7','Đơn vị tính: đồng','B','Time New Roman',10,'P','','K7',0,'');

dulieumotcot($objPHPExcel,'A8','STT','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'B8','Nhóm TSCĐ	','B','Time New Roman',10,'','','',10,'');
dulieumotcot($objPHPExcel,'C8','Số thẻ','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'D8','Tên tài sản','B','Time New Roman',10,'','','',30,'C');
dulieumotcot($objPHPExcel,'E8','Người sử dụng','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'F8','Ngày tăng','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'G8','Số năm sử dụng','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'H8','Nguyên giá','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'I8','Giá trị hao mòn trong kỳ','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'J8','Giá trị còn lại','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'K8','Lý do','B','Time New Roman',10,'','','',11,'C');

dulieumotcot($objPHPExcel,'A9','A','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B9','B','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C9','C','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D9','D','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E9','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F9','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G9','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H9','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I9','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J9','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K9','7','','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A8','K9',1,'Mỏng');

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


$index = 10;
$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'";
//($nam == ""?"":" and tblqlts.ngaysudung <= '" . $nam . "'");
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)){
	$_aDV[]=array('ma'=>$_r['madonvi'],
		'ten'=>$_r['tendv']
	);
}
foreach($_aDV as $_madv) {
	$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.DVT,tblqlts.DTKV,tblqlts.DTXD,tblqlts.chitiethinhthai,ngansach+nguonkhac as NG,tblqlts.ngaysudung,
					tblqlts.mataisan, tblqlts.nguoisudung, tblqlts.tentaisan, tblqlts.sonamsd, tblqlts.sohaomon, tblqlts.conlai,tblqlts.lydotang,tbldanhsachqd32.hinhthaitaisan
					from tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32
					where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]' and Year(tblqlts.ngaysudung) = $nam";
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
	$sqlts = $sqlts ." order by tbldanhsachqd32.mataisanqd32";
	//echo $sqlts;
	$queryts = mysqli_query($con, $sqlts);
	$tg = array(array(0, "A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0));
	$cs = 0;
	$i = 0;
	$tongNG = 0;
	$tongHM = 0;
	$tongCL = 0;
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
		$tg[$cs][1] = $rowts['mataisan'];
		$tg[$cs][2] = $rowts['mataisan'].".".$rowts['TTQLTS'];
		$tg[$cs][3] = $rowts['tenchitiet'];
		$tg[$cs][4] = $rowts['tentaisan'];
		$tg[$cs][5] = $rowts['nguoisudung'];
		$tg[$cs][6] = ngaythang($rowts['ngaysudung']);
		$tg[$cs][7] = $rowts['sonamsd'];
		$tg[$cs][8] = $rowts['NG'];
		$tg[$cs][9] = $rowts['sohaomon'];
		$tg[$cs][10] = $rowts['conlai'];
		$tg[$cs][11] = $rowts['lydotang'];

		$cs = $cs + 1;
		//$stdk=$stdk + kieudouble($rowts['NG']) + $sttang - $stgiam;$sttkt=$sttkt+$sttangtk;$sttkg=$sttkg+$stgiamtk;$stck=$stck+kieudouble($rowts['NG']) + $sttang - $stgiam + $sttangtk - $stgiamtk;
		//}
	}
	///
	$nhoms8 = 0;
	$nhoms9 = 0;
	$nhoms10 = 0;

	$j = 0;
	$stt = 0;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':S' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'S' . $index, 1, 'B');
	$index++;
	for ($i = 0; $i < $cs; $i++) {
		$tongNG += $tg[$i][8];
		$tongHM += $tg[$i][9];
		$tongCL += $tg[$i][10];
		$stt++;
		$tennhom = $tg[$i][4];
		$tents = $tg[$i][3];

		$sl1 = dinhdangso($tg[$i][8]);
		$sl2 = dinhdangso($tg[$i][9]);
		$sl3 = dinhdangso($tg[$i][10]);
		//$tenhienthi = $tennhom == 'Quyền sử dụng đất' ? 'Đất khuân viên' : ($tennhom == 'Nhà' ? 'Nhà' : ($tennhom == 'Phương tiện vận tải đường bộ' ? 'Xe ô tô' : 'Tài sản cố định khác'));
		$tengroup = $tennhom;

		if($tennhom != $tennhomsau) {
			//if ($tennhom == 'Quyền sử dụng đất' || $tennhom == 'Nhà' || $tennhom == 'Phương tiện vận tải đường bộ') {
			// Nhom tai san
			$nhoms8 = 0;
			$nhoms9 = 0;
			$nhoms10 = 0;
			$j = 0;
			for ($j = 0; $j < $cs; $j++) {
				if ($tg[$j][4] == $tennhom) {
					$nhoms8 += $tg[$j][8];
					$nhoms9 += $tg[$j][9];
					$nhoms10 += $tg[$j][10];
				}
			}
			$nhoms8 = dinhdangso($nhoms8);
			$nhoms9 = dinhdangso($nhoms9);
			$nhoms10 = dinhdangso($nhoms10);
			// in Group
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('B' . $index, $tg[$i][1])
				->setCellValue('D' . $index, $tennhom)
				->setCellValue('H' . $index, $nhoms8)
				->setCellValue('I' . $index, $nhoms9)
				->setCellValue('J' . $index, $nhoms10);
			dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
			$index++;
		}
		//Chi tiết
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('C' . $index, $tg[$i][2])
			->setCellValue('D' . $index, $tg[$i][3])
			->setCellValue('E' . $index, $tg[$i][5])
			->setCellValue('F' . $index, $tg[$i][6])
			->setCellValue('G' . $index, $tg[$i][7])
			->setCellValue('H' . $index, $sl1)
			->setCellValue('I' . $index, $sl2)
			->setCellValue('J' . $index, $sl3)
			->setCellValue('K' . $index, $tg[$i][11]);
		$index++;
		$tennhomsau = $tennhom;
	}
//Cổng tổng
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('C' . $index, 'Tổng cộng')
		->setCellValue('H' . $index, dinhdangso($tongNG))
		->setCellValue('I' . $index, dinhdangso($tongHM))
		->setCellValue('J' . $index, dinhdangso($tongCL));
	dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','K'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A9','A'.$index,$i,'');
dinhdangle($objPHPExcel,'B9','B'.$index,$i,'T');
dinhdangle($objPHPExcel,'C9','F'.$index,$i,'T');
dinhdangle($objPHPExcel,'D9','D'.$index,$i,'T');
dinhdangle($objPHPExcel,'E9','M'.$index,$i,'');
dinhdangle($objPHPExcel,'F9','K'.$index,$i,'P');

dinhdangsoxls($objPHPExcel,'F9','K'.$index,$i,'BT');

dinhdangxuongdong($objPHPExcel,'A9','K'.$index,$i);
dinhdangxuongdong($objPHPExcel,'R10','R'.$index,$i);

kedong($objPHPExcel,'A9','K'.$index,$i,'Mỏng');
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