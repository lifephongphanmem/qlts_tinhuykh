<head>
<meta charset='utf-8'>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$DC ="";
$tungay ="";
$denngay ="";
$madv ="";
$mah="";
$loaihinhdv = "";
function loaihinhdv($ms)
{
	$kq="";
	global $con;
	$sql = "Select loaihinh from thongtindonvi  Where madonvi = '$ms'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq= $row['loaihinh'];
	}
	return $kq;
}
if(isset($_POST['create'])){
	$DC = $_POST['phanloai'];
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$mah =$_POST['huyen'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	$loaihinhdv = loaihinhdv($madv[0]);
}
	?>
</head>
<body>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$kq = "";$dckv="";$dtkv=0;$gtskt=0;
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';

$sqld = "Select * From tblqlts Where madonvi Like '$msdv%' and TKVDAT = '" .$DC . "' and chitiethinhthai Like 'Quyền sử dụng đất%' or chitiethinhthai Like 'Đất%' and ngaysudung <= '" . doingay($denngay) . "'";
$queryd = mysqli_query($con,$sqld);
$ttslv=0;$tcshcsn=0;$tlno=0;$tct=0;$tbt=0;$tblc=0;$tk=0;
$kq = "";
$dckv = "";
$dtkv = "";
$gtskt = "";
while($rowd = mysqli_fetch_array($queryd)){
	$sqldht = "Select distinct phanloai,soluong From tblhientrang Where TTQLTS = " . $rowd['TTQLTS']." and ngaythang in (select max(ngaythang) from tblhientrang where TTQLTS = " . $rowd['TTQLTS']." and ngaythang <= '" . doingay($denngay) . "' )";
	$querydht = mysqli_query($con,$sqldht);
	$sl1 = 0;$sl2 = 0;$sl3 = 0;$sl4 = 0;$sl5 = 0;$sl6 = 0;$sl7 = 0;
	$sl11 = 0;$sl12 = 0;$sl13 = 0;$sl14 = 0;$sl15 = 0;$sl16 = 0;$sl17 = 0;
	while($rowdht = mysqli_fetch_array($querydht)){
		if($rowdht['phanloai'] === 'Trụ sở làm việc'){
			$sl1 = $rowdht['soluong'];
			$sl11 = $sl11 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Cơ sở HĐ sự nghiệp'){
			$sl2 = $rowdht['soluong'];
			$sl12 = $sl12 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Làm nhà ở'){
			$sl3 = $rowdht['soluong'];
			$sl13 = $sl13 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Cho thuê'){
			$sl4 = $rowdht['soluong'];
			$sl14 = $sl14 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Bỏ trống'){
			$sl5 = $rowdht['soluong'];
			$sl15 = $sl15 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Bị lấn chiếm'){
			$sl6 = $rowdht['soluong'];
			$sl16 = $sl16 + $rowdht['soluong'];
		}
		if($rowdht['phanloai'] === 'Khác'){
			$sl7 = $rowdht['soluong'];
			$sl17 = $sl17 + $rowdht['soluong'];
		}
	}
	$kq = "Làm trụ sở làm việc: " .$sl11. " m2; Làm cơ sở HĐ sự nghiệp: ".$sl12." m2; Làm nhà ở: ".$sl13." m2; Cho thuê: ".$sl14." m2; Bỏ trống: ".$sl15." m2; Bị lấn chiếm:".$sl16." m2; Sử dụng vào mục đích khác: ".$sl17." m2";
	$dckv = $rowd['DCKV'];
	$dtkv = $rowd['DTKV'];
	$gtskt = $rowd['ngansach'] + $rowd['nguonkhac'];

}
	//Tạo mảng chứa thông tin về đất để truyền excel
		$_aDat=array('kq' => $kq,
			'dckv' => $dckv,
			'dtkv' => $dtkv,
			'gtskt' => $gtskt);
	//
//Hàm tính nguyên giá
function tgts($mats)
{
	global $denngay;
	global $con;
	$kq=0;
	$sql = "Select tanggiam,sotien From tbltanggiam Where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = '" . $mats . "'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		if($row['tanggiam'] == "Tăng")
			$kq += kieudouble($row['sotien']);
		else
			$kq -= kieudouble($row['sotien']);
	}
	return $kq;
}
//tính nguyên giá tài sản
function nguyengia ($TTQLTS,$val,$madvtv)
{
	$kq =0;$ngansach =0;$nguonkhac = 0;
	global $denngay;
	global $con;
	$sql = "Select ngansach,nguonkhac from tblqlts where madonvi = '$madvtv' and ngaysudung <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach = $row["ngansach"];
		$nguonkhac = $row["nguonkhac"];
	}
	$sql = "Select nguonkhac,ngansach,tanggiam from tbltanggiam where ngaytanggiam <= '".doingay($denngay)."' and TTQLTS = ".$TTQLTS;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$ngansach += $row["ngansach"];
		$nguonkhac += $row["nguonkhac"];
	}
	if($val == "ngansach")
		$kq = $ngansach;
	else
		$kq = $nguonkhac;
	return $kq;
}

$objPHPExcel = new PHPExcel();

dulieumotcot($objPHPExcel,'A1','Bộ, tỉnh: ','B','Time New Roman',11,'T','','H1',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị chủ quản: '. $madv[3],'B','Time New Roman',11,'T','','H2',0,'');
dulieumotcot($objPHPExcel,'A3','Đơn vị sử dụng tài sản: '. $madv[2],'B','Time New Roman',11,'T','','H3',0,'');
dulieumotcot($objPHPExcel,'A4','Mã đơn vị: '.$madv[1],'B','Time New Roman',11,'T','','H4',0,'');
dulieumotcot($objPHPExcel,'A5','Loại hình đơn vị: '.$loaihinhdv,'B','Time New Roman',11,'T','','H5',0,'');

dulieumotcot($objPHPExcel,'I1','Mẫu số 01-ĐK/TSNN','B','Time New Roman',11,'','','R1',0,'');
dulieumotcot($objPHPExcel,'I2','(Ban hành theo Thông tư số 09/2012/TT-BTC','','Time New Roman',11,'','','R2',0,'');
dulieumotcot($objPHPExcel,'I3','ngày 19/01/2012 của Bộ tài chính)','','Time New Roman',11,'','','R3',0,'');

dulieumotcot($objPHPExcel,'A6','BÁO CÁO KÊ KHAI TRỤ SỞ LÀM VIỆC, CƠ SỞ HOẠT ĐỘNG SỰ NGHIỆP','B','Time New Roman',16,'','','R6',0,'');
dulieumotcot($objPHPExcel,'A7','Địa chỉ: '.$dckv,'B','Time New Roman',10,'T','','R7',0,'');
dulieumotcot($objPHPExcel,'A8','I - Về đất: ','B','Time New Roman',10,'T','','R8',0,'');
dulieumotcot($objPHPExcel,'A9','a - Diện tích khuân viên: '.$dtkv.' m2','','Time New Roman',10,'T','','R9',0,'');
dulieumotcot($objPHPExcel,'A10','b - Hiện trạng sử dụng: '.$kq,'','Time New Roman',10,'T','','R10',0,'C');
dulieumotcot($objPHPExcel,'A11','c - Giá trị theo sổ kế toán: '.$gtskt.' Ngàn đồng','','Time New Roman',10,'T','','R11',0,'C');
dulieumotcot($objPHPExcel,'A12','I - Về nhà: ','B','Time New Roman',10,'T','','R12',0,'');

dulieumotcot($objPHPExcel,'A13','STT','','Time New Roman',10,'','','A15',5,'C');
dulieumotcot($objPHPExcel,'B13','TÀI SẢN','','Time New Roman',10,'','','B15',20,'C');
dulieumotcot($objPHPExcel,'C13','CẤP HẠNG','','Time New Roman',10,'','','C15',8,'C');
dulieumotcot($objPHPExcel,'D13','NĂM XÂY DỰNG','','Time New Roman',10,'','','D15',8,'C');
dulieumotcot($objPHPExcel,'E13','NGÀY THÁNG, NĂM SỬ DỤNG','','Time New Roman',10,'','','E15',10,'C');
dulieumotcot($objPHPExcel,'F13','GIÁ TRỊ THEO SỔ KẾ TOÁN (ngàn đồng)','','Time New Roman',10,'','','H13',24,'C');
dulieumotcot($objPHPExcel,'F14','Nguyên giá','B','Time New Roman',10,'','','G14',0,'C');
dulieumotcot($objPHPExcel,'F15','Nguồn NS','','Time New Roman',10,'','','F15',15,'C');
dulieumotcot($objPHPExcel,'G15','Nguồn khác','','Time New Roman',10,'','','G15',15,'C');
dulieumotcot($objPHPExcel,'H14','Giá trị còn lại','','Time New Roman',10,'','','H15',15,'C');
dulieumotcot($objPHPExcel,'I13','SỐ TẦNG','','Time New Roman',10,'','','I15',8,'C');
dulieumotcot($objPHPExcel,'J13','DT XÂY DỰNG (m2)','','Time New Roman',10,'','','J15',8,'C');
dulieumotcot($objPHPExcel,'K13','Tổng DT SÀN XÂY DỰNG','','Time New Roman',10,'','','K15',8,'C');
dulieumotcot($objPHPExcel,'L13','HIỆN TRẠNG SỬ DỤNG (m2)','','Time New Roman',10,'','','R13',0,'C');
dulieumotcot($objPHPExcel,'L14','Trụ sở làm việc','B','Time New Roman',10,'','','L15',8,'C');
dulieumotcot($objPHPExcel,'M14','Cơ sở HCSN','B','Time New Roman',10,'','','M15',8,'C');
dulieumotcot($objPHPExcel,'N14','Sử dụng khác','B','Time New Roman',10,'','','R14',8,'C');
dulieumotcot($objPHPExcel,'N15','Làm nhà ở','','Time New Roman',10,'','','N15',8,'C');
dulieumotcot($objPHPExcel,'O15','Cho thuê','','Time New Roman',10,'','','O15',8,'C');
dulieumotcot($objPHPExcel,'P15','Bỏ trống','','Time New Roman',10,'','','P15',8,'C');
dulieumotcot($objPHPExcel,'Q15','Bị lấn chiếm','','Time New Roman',10,'','','Q15',8,'C');
dulieumotcot($objPHPExcel,'R15','Khác','','Time New Roman',10,'','','R15',8,'C');

dulieumotcot($objPHPExcel,'A16','','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'B16','1','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'C16','2','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'D16','3','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'E16','4','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'F16','5','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'G16','6','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'H16','7','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I16','8','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'J16','9','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'K16','10','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'L16','11','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'M16','12','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'N16','13','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'O16','14','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'P16','15','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'Q16','16','','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'R16','17','','Time New Roman',10,'','','',0,'C');
dinhdangheight($objPHPExcel,6,25);
dinhdangheight($objPHPExcel,13,25);
dinhdangheight($objPHPExcel,14,25);
dinhdangheight($objPHPExcel,15,25);
dinhdangheight($objPHPExcel,16,25);
kedong($objPHPExcel,'A13','R15',1,'Mỏng');

$index = 16;
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
$Ttdtxd = 0;
$Ttdtsxd = 0;
$TtnNS = 0;
$TtNK = 0;
$Ttgtcl = 0;
$Tttslv = 0;
$Ttcshcsn = 0;
$Ttlno = 0;
$Ttct = 0;
$Ttbt = 0;
$Ttblc = 0;
$Ttk = 0;
//Duyệt từng đơn vị
foreach($_aDV as $_madv){
	$sttdv++;
	//Tên đơn vị
	// in tên đơn vị
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $sttdv);
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('B' . $index, $_madv['ten'])->mergeCells('B' . $index . ':R' . $index);
	dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'B');
	$index++;
	//Kết thúc tên đơn vị

	$ngNS = 0;
	$ngK = 0;
	$gtcl = 0;
	$tnNS = 0;
	$tNK = 0;
	$tgtcl = 0;
	$tdtxd = 0;
	$tdtsxd = 0;
	$ttslv = 0;
	$tcshcsn = 0;
	$tlno = 0;
	$tct = 0;
	$tbt = 0;
	$tblc = 0;
	$tk = 0;
	$sqlts = "Select TTQLTS,tenchitiet,CAPH,namsanxuat,ngaysudung,ngansach,nguonkhac,SOTA,DTXD,TDTSXD".
		"  From tblqlts where madonvi = '$_madv[ma]' and chitiethinhthai = 'Nhà' and ".
		" (CASE WHEN year(ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" . doingay($denngay)."'  ELSE ngaysudung <= '" . doingay($denngay)."' END) ".
	" and TKVDAT like '$DC%'  and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and ngaythang < '" . doingay($tungay) . "')";
	$queryts=mysqli_query($con,$sqlts);
	while($rowts=mysqli_fetch_array($queryts)) {
		$stt++;
		$tt = $rowts['TTQLTS'];
		$cl = 0;
		$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
		$queryhm = mysqli_query($con, $sqlhm);
		while ($rowhm = mysqli_fetch_array($queryhm)) {
			$cl = $rowhm['sodu'] + $rowhm['sotien'];
		}
		$sqlht = "Select distinct phanloai,soluong From tblhientrang Where  TTQLTS = " . $rowts['TTQLTS'];
		$queryht = mysqli_query($con, $sqlht);
		$tslv = 0;
		$cshcsn = 0;
		$lno = 0;
		$ct = 0;
		$bt = 0;
		$blc = 0;
		$k = 0;
		while ($rowht = mysqli_fetch_array($queryht)) {
			if ($rowht['phanloai'] === 'Trụ sở làm việc') {
				$tslv = $rowht['soluong'];
				$ttslv += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Cơ sở HĐ sự nghiệp') {
				$cshcsn = $rowht['soluong'];
				$tcshcsn += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Làm nhà ở') {
				$lno = $rowht['soluong'];
				$tlno += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Cho thuê') {
				$ct = $rowht['soluong'];
				$tct += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Bỏ trống') {
				$bt = $rowht['soluong'];
				$tbt += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Bị lấn chiếm') {
				$blc = $rowht['soluong'];
				$tblc += $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Khác') {
				$k = $rowht['soluong'];
				$tk += $rowht['soluong'];
			}
		}
		$tents = $rowts['tenchitiet'];
		$caph = $rowts['CAPH'];
		$namxd = $rowts['namsanxuat'];
		$ntsd = ngaythang($rowts['ngaysudung']);
		$ngNS = nguyengia($rowts['TTQLTS'], "ngansach", $_madv['ma']);
		$ngK = nguyengia($rowts['TTQLTS'], "nguonkhac", $_madv['ma']);
		$gtcl = $ngNS + $ngK - $cl;
		$sotang = $rowts['SOTA'];
		$dtxd = $rowts['DTXD'];
		$dtsxd = $rowts['TDTSXD'];
		$tnNS = $tnNS + $ngNS;
		$tNK = $tNK + $ngK;
		$tgtcl += $gtcl;
		$tdtxd += $rowts['DTXD'];
		$tdtsxd += $rowts['TDTSXD'];

		$Ttdtxd += $rowts['DTXD'];
		$Ttdtsxd += $rowts['TDTSXD'];
		$TtnNS += $ngNS;
		$TtNK += $ngK;
		$Ttgtcl += $gtcl;
		$Tttslv += $tslv;
		$Ttcshcsn += $cshcsn;
		$Ttlno += $lno;
		$Ttct += $ct;
		$Ttbt += $bt;
		$Ttblc += $blc;
		$Ttk += $k;

		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $tents)
			->setCellValue('C' . $index, $caph)
			->setCellValue('D' . $index, $namxd)
			->setCellValue('E' . $index, $ntsd)
			->setCellValue('F' . $index, dinhdangso($ngNS))
			->setCellValue('G' . $index, dinhdangso($ngK))
			->setCellValue('H' . $index, dinhdangso($gtcl))
			->setCellValue('I' . $index, $sotang)
			->setCellValue('J' . $index, dinhdangso($dtxd))
			->setCellValue('K' . $index, dinhdangso($dtsxd))
			->setCellValue('L' . $index, dinhdangso($tslv))
			->setCellValue('M' . $index, dinhdangso($cshcsn))
			->setCellValue('N' . $index, dinhdangso($lno))
			->setCellValue('O' . $index, dinhdangso($ct))
			->setCellValue('P' . $index, dinhdangso($bt))
			->setCellValue('Q' . $index, dinhdangso($blc))
			->setCellValue('R' . $index, dinhdangso($k));
		$index++;
	}
	$tdtxd = dinhdangso($tdtxd);
	$tdtsxd = dinhdangso($tdtsxd);
	$tnNS = dinhdangso($tnNS);
	$tNK = dinhdangso($tNK);
	$tgtcl = dinhdangso($tgtcl);
	$ttslv = dinhdangso($ttslv);
	$tcshcsn = dinhdangso($tcshcsn);
	$tlno =dinhdangso($tlno);
	$tct=dinhdangso($tct);
	$tbt =dinhdangso($tbt);
	$tblc = dinhdangso($tblc);
	$tk  = dinhdangso($tk);

	// in tổng cộng
	dulieumotcot($objPHPExcel, 'A' . $index, 'Cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
	dulieumotcot($objPHPExcel, 'F' . $index, $tnNS, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'G' . $index, $tNK, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'H' . $index, $tgtcl, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'J' . $index, $tdtxd, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'K' . $index, $tdtsxd, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'L' . $index, $ttslv, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'M' . $index, $tcshcsn, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'N' . $index, $tlno, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'O' . $index, $tct, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'P' . $index, $tbt, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'Q' . $index, $tblc, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'R' . $index, $tk, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	$index++;
}
dulieumotcot($objPHPExcel, 'A' . $index, 'Tổng cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
dulieumotcot($objPHPExcel, 'F' . $index, dinhdangso($TtnNS), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'G' . $index, dinhdangso($TtNK), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'H' . $index, dinhdangso($Ttgtcl), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'J' . $index, dinhdangso($Ttdtxd), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'K' . $index, dinhdangso($Ttdtsxd), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'L' . $index, dinhdangso($Tttslv), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'M' . $index, dinhdangso($Ttcshcsn), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'N' . $index, dinhdangso($Ttlno), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'O' . $index, dinhdangso($Ttct), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'P' . $index, dinhdangso($Ttbt), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'Q' . $index, dinhdangso($Ttblc), 'B', 'Time New Roman', 10, '', '', '', 0, '');
dulieumotcot($objPHPExcel, 'R' . $index, dinhdangso($Ttk), 'B', 'Time New Roman', 10, '', '', '', 0, '');

// truyền dữ liệu
dinhdangfont($objPHPExcel,'A16','R'.$index,$stt,'Time New Roman',8);
dinhdangle($objPHPExcel,'A16','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B16','B'.$index,$stt,'T');
dinhdangle($objPHPExcel,'C16','E'.$index,$stt,'');
dinhdangle($objPHPExcel,'F16','H'.$index,$stt,'P');
dinhdangle($objPHPExcel,'I16','I'.$index,$stt,'');
dinhdangle($objPHPExcel,'J16','R'.$index,$stt,'P');

dinhdangsoxls($objPHPExcel,'F16','H'.$index,$stt,'BT');
dinhdangsoxls($objPHPExcel,'J16','R'.$index,$stt,'1P');

dinhdangxuongdong($objPHPExcel,'B16','B'.$index,$stt);

kedong($objPHPExcel,'A16','R'.$index,$stt,'Mỏng');
$index ++;
dulieumotcot($objPHPExcel, 'A' . $index, 'III - Các hồ sơ, giấy tờ liên quan đến quyền quản lý, sử dụng nhà, đất:   (Giấy chứng nhận quyền sử dụng đất, Hợp đồng thuê đất, giấy tờ khác)', 'B', 'Time New Roman', 10, 'T', '', 'R'.$index, 0, '');
$index++;
dulieumotcot($objPHPExcel,'H'.$index,'THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ','B','Time New Roman',11,'','','R'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'H'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','R'.$index,0,'');

//Xuất ra file Excel
taofile($objPHPExcel,"TT09_01DKTSNNexcel.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save(str_replace('.php', '.xls', __FILE__));
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT09_01DKTSNNexcel.xls">Bấm vào đây để tải file về</a>
</body>