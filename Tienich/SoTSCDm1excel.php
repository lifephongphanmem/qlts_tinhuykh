<head>
<meta charset='utf-8'>
<?php
$phanloai = "";
$nam = "";
$mah ="";
$madv ="";
$ts5 = "No";
$noidung="";
if(isset($_POST['create'])){
	if ($_POST['sobg'] != "")
		$phanloai = explode('>',$_POST['sobg']);
	$nam = $_POST['nambc'];
	$mah =$_POST['huyen'];
	if(isset($_POST['ts5']))
		$ts5 = $_POST['ts5'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	if(isset($_POST['noidung']))
		$noidung = $_POST['noidung'];
}

require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
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
dulieumotcot($objPHPExcel,'A1',$madv[3],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2',$madv[2],'B','Time New Roman',11,'T','','',0,'');

dulieumotcot($objPHPExcel,'J1','Mẫu số S31 - H','B','Time New Roman',11,'','','N1',0,'');
dulieumotcot($objPHPExcel,'J2','(Ban hành theo QĐ số: 19/2006/QĐ-BTC','','Time New Roman',11,'','','N2',0,'');
dulieumotcot($objPHPExcel,'J3','ngày 30/03/2006 của Bộ trưởng Bộ Tài Chính)','','Time New Roman',11,'','','N3',0,'');

dulieumotcot($objPHPExcel,'A4','SỔ TÀI SẢN CỐ ĐỊNH','B','Time New Roman',16,'','','N4',0,'');
dulieumotcot($objPHPExcel,'A5','Năm báo cáo:'.$nam,'','Time New Roman',11,'','','N5',0,'');

dulieumotcot($objPHPExcel,'A6','STT','B','Time New Roman',10,'','','A8',6,'C');
dulieumotcot($objPHPExcel,'B6','Ghi tăng tài sản cố định','B','Time New Roman',10,'','','G6',25,'');
dulieumotcot($objPHPExcel,'H6','Hao mòn tài sản cố định','B','Time New Roman',10,'','','K6',5,'');
dulieumotcot($objPHPExcel,'L6','Ghi giảm tài sản cố định','B','Time New Roman',10,'','','N6',11,'');

dulieumotcot($objPHPExcel,'B7','Tên gọi tài sản cố định','B','Time New Roman',10,'','','B8',0,'');
dulieumotcot($objPHPExcel,'C7','Năm SX','B','Time New Roman',10,'','','C8',7,'C');
dulieumotcot($objPHPExcel,'D7','Năm sử dụng','B','Time New Roman',10,'','','D8',8,'C');
dulieumotcot($objPHPExcel,'E7','Số hiệu TSCĐ','B','Time New Roman',10,'','','E8',11,'C');
dulieumotcot($objPHPExcel,'F7','Số lượng','B','Time New Roman',10,'','','F8',8,'C');
dulieumotcot($objPHPExcel,'G7','Nguyên giá','B','Time New Roman',10,'','','G8',13,'C');
dulieumotcot($objPHPExcel,'H7','HM năm','B','Time New Roman',10,'','','I7',0,'C');
dulieumotcot($objPHPExcel,'J7','Số hao mòn các năm trước chuyển sang','B','Time New Roman',10,'','','J8',12,'C');
dulieumotcot($objPHPExcel,'K7','Lũy kế hao mòn đến khi ghi giảm','B','Time New Roman',10,'','','K8',12,'C');
dulieumotcot($objPHPExcel,'L7','Lý do ghi giảm TSCĐ','B','Time New Roman',10,'','','L8',0,'C');
dulieumotcot($objPHPExcel,'M7','Số lượng','B','Time New Roman',10,'','','M8',7,'C');
dulieumotcot($objPHPExcel,'N7','Giá trị ghi giảm TSCĐ','B','Time New Roman',10,'','','N8',12,'C');

dulieumotcot($objPHPExcel,'H8','Tỷ lệ %','B','Time New Roman',10,'','','',0,'C');
dulieumotcot($objPHPExcel,'I8','Số tiền','B','Time New Roman',10,'','','',0,'C');
kedong($objPHPExcel,'A6','N8',1,'Mỏng');
$index = 9;
$ts =  array(array("A","B","C","D","E","F",0,0,0,0,0,0,0,0));
$cs=0;$i=0;
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$mah%' and tblqlts.madonvi Like '$msdv%'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}

$tcsl2 = 0;
$tcsl4 = 0;
$tcsl5 = 0;
$tcsl6 = 0;
$tcsl8 = 0;

	//Duyệt từng đơn vị
	foreach($_aDV as $_madv) {
		if ($ts5 == "No") {
			$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.namsanxuat,year(ngaysudung) as nsd,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,tblqlts.phantram" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
				" where noidung like '$noidung%' and tblqlts.madonvi = '$_madv[ma]' and ".
				" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam."  ELSE year(ngaysudung) <= " . $nam." END) ";
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
			$sqlts = $sqlts . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
		} else {
			$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.chitiethinhthai,tblqlts.tenchitiet,tblqlts.namsanxuat,year(ngaysudung) as nsd,tblqlts.mataisan,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,tblqlts.phantram" .
				" From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai" .
				" where noidung like '$noidung%' and (ngansach+nguonkhac) >= 500000000 and tblqlts.madonvi = '$_madv[ma]' and ".
				" (CASE WHEN year(ngaythangchuyen) > 0 THEN year(ngaythangchuyen) <= " . $nam."  ELSE year(ngaysudung) <= " . $nam." END) ";
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
			$sqlts = $sqlts . " and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and year(ngaythang) < " . $nam . ") order by tbldanhsachqd32.ttsx";
		}
		//echo $sqlts;
		//	echo $sqlts;
		$queryts = mysqli_query($con, $sqlts);

		while ($rowts = mysqli_fetch_array($queryts)) {
			$tangsl = 0;
			$giamsl = 0;
			$tangst = 0;
			$giamst = 0;
			$ldotg = "";
			$sltng = 0;
			$sqltg = "Select lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien from tbltanggiam where TTQLTS = " . $rowts['TTQLTS'] . " and year(ngaytanggiam) <= " . $nam;
			//		echo $tangsl;
			$querytg = mysqli_query($con, $sqltg);
			while ($rowtg = mysqli_fetch_array($querytg)) {
				if ($rowtg['tanggiam'] == "Tăng") {
					$tangsl = $tangsl + $rowtg['soluong'];
					$tangst = $tangst + $rowtg['ngansach'] + $rowtg['nguonkhac'];
				} else {
					$giamsl = $giamsl + $rowtg['soluong'];
					$giamst = $giamst + $rowtg['sotien'];
					$ldotg = $rowtg['lydotanggiam'];
				}
				if (($rowtg['tanggiam'] == "Giảm") && ($rowtg['nam'] == $nam))
					$sltng = $sltng + $rowtg['soluong'];
			}
			$haomonnam = 0;
			$sodu = 0;
			$sqlhm = "select sotien,sodu,namhaomon from tblhaomon where namhaomon <= " . $nam . " and TTQLTS = " . $rowts['TTQLTS'];
			//		echo $sqlhm;
			$queryhm = mysqli_query($con, $sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)) {
				if ($rowhm['namhaomon'] == $nam) {
					$haomonnam = $rowhm['sotien'];
					$sodu = $rowhm['sodu'];
				} else {

					$sodu = $rowhm['sodu'] + $rowhm['sotien'];
				}
			}
			//if ($rowts['SL'] + $tangsl - $giamsl + $sltng > 0) {
				$ts[$cs][0] = $rowts['chitiethinhthai'];
				$ts[$cs][1] = $rowts['tenchitiet'];
				$ts[$cs][2] = $rowts['namsanxuat'];
				$ts[$cs][3] = $rowts['nsd'];
				$ts[$cs][4] = $rowts['mataisan'] . "." . $rowts['TTQLTS'];
				$ts[$cs][5] = $ldotg;
				$ts[$cs][6] = $_madv['ten'];
				$ts[$cs][7] = $rowts['SL'] + $tangsl;
				$ts[$cs][8] = $rowts['NG'] + $tangst;
				$ts[$cs][13] = $giamsl;
				$ts[$cs][14] = $giamst;
				$ts[$cs][9] = $rowts['phantram'];
				$ts[$cs][10] = $haomonnam;
				$ts[$cs][11] = $sodu;
				$ts[$cs][12] = $haomonnam + $sodu;
				$cs = $cs + 1;
				$tcsl2 = $tcsl2 + $rowts['NG'] + $tangst;
				$tcsl4 = $tcsl4 + $haomonnam;
				$tcsl5 = $tcsl5 + $sodu;
				$tcsl6 = $tcsl6 + $haomonnam + $sodu;
				$tcsl8 = $tcsl8 + $giamst;
			//}
		}
	}

		$tennhomsau = "";
		$tennhom = "";
		$group1 = 0;
		$tennhomsau1 = "";
		$tennhom1 = "";
		$sogr1 = 0;
		$sogr2 = 0;
		$tong8 = 0;
		$tong10 = 0;
		$tong11 = 0;
		$tong12 = 0;
		$sttn1 = 0;
		$tong13 = 0;
		for ($i = 0; $i < $cs; $i++) {
			$tennhom = $ts[$i][6];
			if ($tennhom != $tennhomsau) {
				$Csl2 = 0;
				$Csl4 = 0;
				$Csl5 = 0;
				$Csl6 = 0;
				$Csl8 = 0;
				$sogr1 = $sogr1 + 1;
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('B' . $index, $ts[$i][6])->mergeCells('B' . $index . ':N' . $index);
				dinhdangBI($objPHPExcel, 'A' . $index, 'N' . $index, 1, 'B');
				$index++;
				$tennhomsau = $ts[$i][6];
			}
			$tennhom1 = $ts[$i][0];
			if ($tennhom1 != $tennhomsau1) {
				$sogr2 = $sogr2 + 1;
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('B' . $index, $ts[$i][0]);
				dinhdangBI($objPHPExcel, 'A' . $index, 'N' . $index, 1, 'BI');
				$sttn1 = $sttn1 + 1;
				$group1 = $index;
				$index++;
				$tennhomsau1 = $ts[$i][0];
			}
			$Csl2 += $ts[$i][8];
			$Csl4 += $ts[$i][10];
			$Csl5 += $ts[$i][11];
			$Csl6 += $ts[$i][12];
			$Csl8 += $ts[$i][14];
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A' . $index, $i + 1)
				->setCellValue('B' . $index, $ts[$i][1])
				->setCellValue('C' . $index, $ts[$i][2])
				->setCellValue('D' . $index, $ts[$i][3])
				->setCellValue('E' . $index, $ts[$i][4])
				->setCellValue('F' . $index, $ts[$i][7])
				->setCellValue('G' . $index, $ts[$i][8])
				->setCellValue('H' . $index, $ts[$i][9])
				->setCellValue('I' . $index, $ts[$i][10])
				->setCellValue('J' . $index, $ts[$i][11])
				->setCellValue('K' . $index, $ts[$i][12])
				->setCellValue('L' . $index, $ts[$i][5])
				->setCellValue('M' . $index, $ts[$i][13])
				->setCellValue('N' . $index, $ts[$i][14]);
			//$tong8 = $tong8 + kieudouble($ts[$i][8]);$tong10 = $tong10 + kieudouble($ts[$i][10]);$tong11 = $tong11 + kieudouble($ts[$i][11]);$tong12 = $tong12 + kieudouble($ts[$i][12]);$tong13 = $tong13 + kieudouble($ts[$i][14]);
			//$objPHPExcel->setActiveSheetIndex(0)
			//	->setCellValue('G' . $group1, "=Sum(G" . ($group1+1) . ":G" . $index . ")")
			//	->setCellValue('I' . $group1, "=Sum(I" . ($group1+1) . ":I" . $index . ")")
			//	->setCellValue('J' . $group1, "=Sum(J" . ($group1+1) . ":J" . $index . ")")
			//	->setCellValue('K' . $group1, "=Sum(K" . ($group1+1) . ":K" . $index . ")")
			//	->setCellValue('N' . $group1, "=Sum(N" . ($group1+1) . ":N" . $index . ")");
			$index++;
			if(($i +1) < $cs) {
				if ($tennhomsau != $ts[$i + 1][6]) {
					dulieumotcot($objPHPExcel, 'B' . $index, 'Cộng', 'B', 'Time New Roman', 10, '', '', '', 0, '');
					dulieumotcot($objPHPExcel, 'G' . $index, $Csl2, 'B', 'Time New Roman', 10, '', '', '', 0, '');
					dulieumotcot($objPHPExcel, 'I' . $index, $Csl4, 'B', 'Time New Roman', 10, '', '', '', 0, '');
					dulieumotcot($objPHPExcel, 'J' . $index, $Csl5, 'B', 'Time New Roman', 10, '', '', '', 0, '');
					dulieumotcot($objPHPExcel, 'K' . $index, $Csl6, 'B', 'Time New Roman', 10, '', '', '', 0, '');
					dulieumotcot($objPHPExcel, 'N' . $index, $Csl8, 'B', 'Time New Roman', 10, '', '', '', 0, '');
					$index++;
				}
			}
			else
			{
				dulieumotcot($objPHPExcel, 'B' . $index, 'Cộng', 'B', 'Time New Roman', 10, '', '', '', 0, '');
				dulieumotcot($objPHPExcel, 'G' . $index, $Csl2, 'B', 'Time New Roman', 10, '', '', '', 0, '');
				dulieumotcot($objPHPExcel, 'I' . $index, $Csl4, 'B', 'Time New Roman', 10, '', '', '', 0, '');
				dulieumotcot($objPHPExcel, 'J' . $index, $Csl5, 'B', 'Time New Roman', 10, '', '', '', 0, '');
				dulieumotcot($objPHPExcel, 'K' . $index, $Csl6, 'B', 'Time New Roman', 10, '', '', '', 0, '');
				dulieumotcot($objPHPExcel, 'N' . $index, $Csl8, 'B', 'Time New Roman', 10, '', '', '', 0, '');
				$index++;
			}
		}
dulieumotcot($objPHPExcel,'B'.$index,'Tổng cộng','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.$index,$tcsl2,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'I'.$index,$tcsl4,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,$tcsl5,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'K'.$index,$tcsl6,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'N'.$index,$tcsl8,'B','Time New Roman',10,'','','',0,'');
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','N'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A9','A'.$index,$i,'');
dinhdangle($objPHPExcel,'B9','B'.$index,$i,'T');
dinhdangle($objPHPExcel,'C9','F'.$index,$i,'');
dinhdangle($objPHPExcel,'G9','G'.$index,$i,'P');
dinhdangle($objPHPExcel,'H9','H'.$index,$i,'');
dinhdangle($objPHPExcel,'I9','K'.$index,$i,'P');
dinhdangle($objPHPExcel,'L9','L'.$index,$i,'T');
dinhdangle($objPHPExcel,'M9','M'.$index,$i,'');
dinhdangle($objPHPExcel,'N9','N'.$index,$i,'P');

dinhdangsoxls($objPHPExcel,'F9','F'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'G9','G'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'H9','H'.$index,$i,'2P');
dinhdangsoxls($objPHPExcel,'I9','K'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'M9','M'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'N9','N'.$index,$i,'BT');

dinhdangxuongdong($objPHPExcel,'B9','B'.$index,$i);
dinhdangxuongdong($objPHPExcel,'L9','L'.$index,$i);

kedong($objPHPExcel,'A9','N'.$index,$i,'Mỏng');
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
dulieumotcot($objPHPExcel,'B'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.($index+$sogr2+$sogr1 - 1 + 7),'','B','Time New Roman',11,'','','N'.($index+$sogr2+$sogr1 - 1 + 7),0,'');
taofile($objPHPExcel,"SoTSCDm1.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoTSCDm1.xls">Bấm vào đây để tải file về</a>
</body>