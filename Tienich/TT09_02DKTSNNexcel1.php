<head>
<meta charset='utf-8'>
</head>
<body>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$tungay ="";$denngay ="";$madv ="";$mah ="";
$loaihinhdv = "";
if(isset($_POST['create'])){		
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
	$madv = explode('>',$_POST['MADV']);
	$mah =$_POST['huyen'];
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	$loaihinhdv = loaihinhdv($madv[0]);
}
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
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();

dulieumotcot($objPHPExcel,'A1','Bộ, tỉnh: ','B','Time New Roman',11,'T','','H1',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị chủ quản: '. $madv[3],'B','Time New Roman',11,'T','','H2',0,'');
dulieumotcot($objPHPExcel,'A3','Đơn vị sử dụng tài sản: '. $madv[2],'B','Time New Roman',11,'T','','H3',0,'');
dulieumotcot($objPHPExcel,'A4','Mã đơn vị: '.$madv[1],'B','Time New Roman',11,'T','','H4',0,'');
dulieumotcot($objPHPExcel,'A5','Loại hình đơn vị: '.$loaihinhdv,'B','Time New Roman',11,'T','','H5',0,'');

dulieumotcot($objPHPExcel,'I1','Mẫu số 01-ĐK/TSNN','B','Time New Roman',11,'','','R1',0,'');
dulieumotcot($objPHPExcel,'I2','(Ban hành theo Thông tư số 09/2012/TT-BTC','','Time New Roman',11,'','','R2',0,'');
dulieumotcot($objPHPExcel,'I3','ngày 19/01/2012 của Bộ tài chính)','','Time New Roman',11,'','','R3',0,'');

dulieumotcot($objPHPExcel,'A6','BÁO CÁO KÊ KHAI Ô TÔ','B','Time New Roman',16,'','','R6',0,'');

dulieumotcot($objPHPExcel,'A13','STT','','Time New Roman',10,'','','A15',5,'C');
dulieumotcot($objPHPExcel,'B13','TÀI SẢN','','Time New Roman',10,'','','B15',20,'C');
dulieumotcot($objPHPExcel,'C13','NHÃN HIỆU','','Time New Roman',10,'','','C15',8,'C');
dulieumotcot($objPHPExcel,'D13','BIỂN KIỂM SOÁT','','Time New Roman',10,'','','D15',8,'C');
dulieumotcot($objPHPExcel,'E13','SỐ CHỖ NGỒI/ TẢI TRỌNG','','Time New Roman',10,'','','E15',10,'C');
dulieumotcot($objPHPExcel,'F13','NƯỚC SẢN XUẤT','','Time New Roman',10,'','','F15',10,'C');
dulieumotcot($objPHPExcel,'G13','NĂM SẢN XUẤT','','Time New Roman',10,'','','G15',10,'C');
dulieumotcot($objPHPExcel,'H13','NGÀY THÁNG NĂM SỬ DỤNG','','Time New Roman',10,'','','H15',10,'C');
dulieumotcot($objPHPExcel,'I13','CÔNG SUẤT XE','','Time New Roman',10,'','','I15',10,'C');
dulieumotcot($objPHPExcel,'J13','CHỨC DANH SỬ DỤNG XE','','Time New Roman',10,'','','J15',10,'C');
dulieumotcot($objPHPExcel,'K13','NGUỒN GỐC XE','','Time New Roman',10,'','','K15',10,'C');

dulieumotcot($objPHPExcel,'L13','GIÁ TRỊ THEO SỔ KẾ TOÁN (ngàn đồng)','','Time New Roman',10,'','','N13',24,'C');
dulieumotcot($objPHPExcel,'L14','Nguyên giá','B','Time New Roman',10,'','','M14',0,'C');
dulieumotcot($objPHPExcel,'L15','Nguồn NS','','Time New Roman',10,'','','L15',15,'C');
dulieumotcot($objPHPExcel,'M15','Nguồn khác','','Time New Roman',10,'','','M15',15,'C');
dulieumotcot($objPHPExcel,'N14','Giá trị còn lại','','Time New Roman',10,'','','N15',15,'C');

dulieumotcot($objPHPExcel,'O13','HIỆN TRẠNG SỬ DỤNG (chiếc)','','Time New Roman',10,'','','R13',0,'C');
dulieumotcot($objPHPExcel,'O14','QLNN','B','Time New Roman',10,'','','O15',8,'C');
dulieumotcot($objPHPExcel,'P14','HĐ sự nghiệp','B','Time New Roman',10,'','','Q14',8,'C');
dulieumotcot($objPHPExcel,'P15','Kinh Doanh','','Time New Roman',10,'','','P15',8,'C');
dulieumotcot($objPHPExcel,'Q15','Không KD','','Time New Roman',10,'','','Q15',8,'C');
dulieumotcot($objPHPExcel,'R14','HĐ khác','','Time New Roman',10,'','','R15',8,'C');

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
//

	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
		" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
		" where  tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'".
	" and chitiethinhthai Like 'Phương tiện vận tải%' and".
		" ngaysudung <= '" . doingay($denngay) . "' and".
		" TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
$index = 16;
$stt = 0;
$sttdv = 0;
//Lấy danh sách đơn vị
//$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
//	" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
//	" where tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'";
$_qdv=mysqli_query($con,$_sQLdv);
$_aDV=array();
while($_r=mysqli_fetch_array($_qdv)) {
	$_aDV[] = array('ma' => $_r['madonvi'],
		'ten' => $_r['tendv']
	);
}
//Duyệt từng đơn vị
foreach($_aDV as $_madv) {
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


	$tnNS = 0;
	$tnK = 0;
	$tgtcl = 0;
	$tqlnn = 0;
	$tkd = 0;
	$tkkd = 0;
	$thdk = 0;
	$sqlts = "Select * From tblqlts Where madonvi = '$_madv[ma]' and chitiethinhthai Like 'Phương tiện vận tải%' and ngaysudung <= '" . doingay($denngay) . "' and TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
	$queryts = mysqli_query($con, $sqlts);
	while ($rowts = mysqli_fetch_array($queryts)) {
		$stt++;
		$sqlht = "Select * from tblhientrang Where TTQLTS = " . $rowts['TTQLTS'];
		$queryht = mysqli_query($con, $sqlht);
		$qlnn = 0;
		$kd = 0;
		$kkd = 0;
		$hdk = 0;
		while ($rowht = mysqli_fetch_array($queryht)) {
			if ($rowht['phanloai'] === 'QLNN') {
				$qlnn = $rowht['soluong'];
				$tqlnn = $tqlnn + $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Kinh doanh') {
				$kd = $rowht['soluong'];
				$tkd = $tkd + $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Không KD') {
				$kkd = $rowht['soluong'];
				$tkkd = $tkkd + $rowht['soluong'];
			}
			if ($rowht['phanloai'] === 'Khác') {
				$hdk = $rowht['soluong'];
				$thdk = $thdk + $rowht['soluong'];
			}
		}
//Còn lại
		$cl = 0;
		$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
		$queryhm = mysqli_query($con, $sqlhm);
		while ($rowhm = mysqli_fetch_array($queryhm)) {
			$cl = $rowhm['sodu'] + $rowhm['sotien'];
		}
//Tăng giảm
		$sqltg = "Select * From tbltanggiam where TTQLTS = " . $rowts['TTQLTS'];
		$querytg = mysqli_query($con, $sqltg);
		$tg = 0;
		while ($rowtg = mysqli_fetch_array($querytg)) {
			if ($rowtg['tanggiam'] == 'Tăng') {
				$tg = $tg + $rowtg['sotien'];
			} else {
				$tg = $tg - $rowtg['sotien'];
			}
		}
		$tents = $rowts['tenchitiet'];
		$nh = $rowts['NHXE'];
		$bks = $rowts['BKSXE'];
		$scntt = $rowts['CNXE'];
		$nsx = $rowts['NUOCSX'];
		$tgsx = $rowts['namsanxuat'];
		$ntsd = ngaythang($rowts['ngaysudung']);
		$csxe = $rowts['CXXE'];
		$cdsd = $rowts['CDSD'];
		$ngxe = $rowts['NGGOXE'];
//$nNS = $rowts['ngansach'];
		$nNS = nguyengia($rowts['TTQLTS'], "ngansach", $_madv['ma']);
		$tnNS = $tnNS + $nNS;
		$nK = nguyengia($rowts['TTQLTS'], "nguonkhac", $_madv['ma']);
//$nK = $rowts['nguonkhac'];
		$tnK = $tnK + $nK;
		$gtcl = $rowts['ngansach'] + $rowts['nguonkhac'] + $tg - $cl;
		$tgtcl = $tgtcl + $gtcl;

//định dạng số
		$qlnn = dinhdangso($qlnn);
		$kd = dinhdangso($kd);
		$kkd = dinhdangso($kkd);
		$hdk = dinhdangso($hdk);
		$nNS = dinhdangso($nNS);
		$nK = dinhdangso($nK);
		$gtcl = dinhdangso($gtcl);

		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A' . $index, $stt)
			->setCellValue('B' . $index, $tents)
			->setCellValue('C' . $index, $nh)
			->setCellValue('D' . $index, $bks)
			->setCellValue('E' . $index, $scntt)
			->setCellValue('F' . $index, $nsx)
			->setCellValue('G' . $index, $tgsx)
			->setCellValue('H' . $index, $ntsd)
			->setCellValue('I' . $index, $csxe)
			->setCellValue('J' . $index, $cdsd)
			->setCellValue('K' . $index, $ngxe)
			->setCellValue('L' . $index, $nNS)
			->setCellValue('M' . $index, $nK)
			->setCellValue('N' . $index, $gtcl)
			->setCellValue('O' . $index, $qlnn)
			->setCellValue('P' . $index, $kd)
			->setCellValue('Q' . $index, $kkd)
			->setCellValue('R' . $index, $hdk);
		$index++;
	}
	$tnNS = dinhdangso($tnNS);
	$tnK = dinhdangso($tnK);
	$tgtcl = dinhdangso($tgtcl);
	$tqlnn = dinhdangso($tqlnn);
	$tkd = dinhdangso($tkd);
	$tkkd = dinhdangso($tkkd);
	$thdk = dinhdangso($thdk);

	// in tổng cộng
	dulieumotcot($objPHPExcel, 'A' . $index, 'Tổng cộng', 'B', 'Time New Roman', 10, '', '', 'B' . $index, 0, '');
	dulieumotcot($objPHPExcel, 'L' . $index, $tnNS, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'M' . $index, $tnK, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'N' . $index, $tgtcl, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'O' . $index, $tqlnn, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'P' . $index, $tkd, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'Q' . $index, $tkkd, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	dulieumotcot($objPHPExcel, 'R' . $index, $thdk, 'B', 'Time New Roman', 10, '', '', '', 0, '');
	$index++;
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A16','R'.$index,$stt,'Time New Roman',10);
dinhdangle($objPHPExcel,'A16','A'.$index,$stt,'');
dinhdangle($objPHPExcel,'B16','D'.$index,$stt,'T');
dinhdangle($objPHPExcel,'E16','E'.$index,$stt,'');
dinhdangle($objPHPExcel,'F16','F'.$index,$stt,'T');
dinhdangle($objPHPExcel,'G16','H'.$index,$stt,'');
dinhdangle($objPHPExcel,'I16','K'.$index,$stt,'T');
dinhdangle($objPHPExcel,'L16','R'.$index,$stt,'P');

dinhdangsoxls($objPHPExcel,'L16','R'.$index,$stt,'BT');

dinhdangxuongdong($objPHPExcel,'B16','R'.$index,$stt);

kedong($objPHPExcel,'A16','R'.($index-1),$stt,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'J'.$index,'....... , ngày ... tháng ... năm ......','','Time New Roman',11,'','','R'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'XÁC NHẬN CỦA CẤP CÓ THẨM QUYỀN','B','Time New Roman',11,'','','I'.$index,0,'');
dulieumotcot($objPHPExcel,'J'.$index,'THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ','B','Time New Roman',11,'','','R'.$index,0,'');
$index++;
dulieumotcot($objPHPExcel,'A'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','I'.$index,0,'');
dulieumotcot($objPHPExcel,'J'.$index,'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','R'.$index,0,'');

		//Xuất ra file Excel
		//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));	
		taofile($objPHPExcel,"TT09_02DKTSNN.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT09_02DKTSNN.xls">Bấm vào đây để tải file về</a>
</body>