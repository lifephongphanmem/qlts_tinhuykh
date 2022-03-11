<head>
<meta charset='utf-8'>
<?php
	$phanloai = "";
	$tungay = "";
	$denngay = "";
	$madv ="";	
	$nambc="";
	if(isset($_POST['create'])){
		if ($_POST['sobg'] != "")
			$phanloai = explode('>',$_POST['sobg']);
		$nambc = $_POST['nambc'];		
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	}	
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
?>
</head>
<body>

<?php
$tg =  array(array(0,"A","B",0,0,0));
$cs=0;$i=0;
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
$tsl1 = 0;
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){		
		$sqlts = "Select distinct tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.phantram,tblqlts.chitiethinhthai,tblqlts.ngansach+tblqlts.nguonkhac as NG
		From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai 
		where tblqlts.madonvi = '$_madv[ma]'";				
		if ($phanloai == "")
		{
			$sqlts = $sqlts." and tblqlts.chitiethinhthai like '" .$phanloai."%'";
		}
		else
		{	
			$sqlts = $sqlts." and (";
			$count=0;$chars=str_split($_POST["sobg"]);
			foreach($chars as &$char)
			{
				if($char=='>')
				{
					$count++;
				}
			}
			for($i=0;$i<$count;$i++)
			{
				if ($i == $count - 1)
					$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%'";
				else
					$sqlts = $sqlts."tblqlts.chitiethinhthai like '" .$phanloai[$i]."%' or ";
			}	
			$sqlts = $sqlts.")";		
		}
		$sqlts = $sqlts . " and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN year(tblqlts.ngaythangchuyen) <= " . $nambc."  ELSE year(tblqlts.ngaysudung) <= " . $nambc." END) ".
			" and tblqlts.TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and year(ngaythang) < '" .$nambc . "') order by tbldanhsachqd32.ttsx";
		$queryts=mysqli_query($con,$sqlts);
		$HM = 0;

		$tsl3 = 0;
		while($rowts=mysqli_fetch_array($queryts))
		{
			$sqlhm = "Select sodu, sotien from tblhaomon where namhaomon = ".$nambc." and TTQLTS = " . $rowts['TTQLTS'];
			$queryhm = mysqli_query($con,$sqlhm);
			while($rowhm=mysqli_fetch_array($queryhm))
			{
				$HM = $rowhm['sotien'];
			}
			$sqltg = "Select lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien from tbltanggiam where TTQLTS = " . $rowts['TTQLTS'] . " and year(ngaytanggiam) <= " . $nambc;
			//		echo $tangsl;
			$tangsl = 0;
			$tangst = 0;
			$querytg = mysqli_query($con, $sqltg);
			while ($rowtg = mysqli_fetch_array($querytg)) {
				if ($rowtg['tanggiam'] == "Tăng") {
					$tangsl += $rowtg['soluong'];
					$tangst += $rowtg['ngansach'] + $rowtg['nguonkhac'];
				}
			}
			$tg[$cs][0] = $cs + 1;
			$tg[$cs][1] = $rowts['tenchitiet'];
			$tg[$cs][2] = $rowts['chitiethinhthai'];
			$tg[$cs][3] = $rowts['NG'] + $tangst;
			$tg[$cs][4] = $rowts['phantram'];
			$tg[$cs][5] = $HM;
			$tg[$cs][6] = $_madv['ten'];
			$cs = $cs + 1;
			$tsl1 = $tsl1 + $rowts['NG'] + $tangst;
			$tsl3 = $tsl3 + $HM;
		}
	}
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Đơn vị: ','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Bộ phận: ','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','Mã ĐV có QH với NS: ','B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'D1','Mẫu số S55a - HD','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D2','(Ban hành theo QĐ số: 19/2006/QĐ-BTC','','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D3','ngày 30/03/2006 của Bộ trưởng BTC và sửa đổi,','','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D4','bổ sung theo thông tư số 185/2010/TT-BTC)','','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'B6','BẢNG TÍNH HAO MÒN TSCĐ','B','Time New Roman',16,'','','D6',0,'');
dulieumotcot($objPHPExcel,'B7','Năm hao mòn: '.$nambc,'','Time New Roman',11,'','','D7',0,'');
dulieumotcot($objPHPExcel,'A9','STT','B','Time New Roman',10,'','','',11,'C');
dulieumotcot($objPHPExcel,'B9','Loại tài sản cố định','B','Time New Roman',10,'','','',65,'C');
dulieumotcot($objPHPExcel,'C9','Nguyên giá','B','Time New Roman',10,'','','',25,'C');
dulieumotcot($objPHPExcel,'D9','Tỉ lệ hao mòn','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'E9','Số hao mòn tinh vào '.$nambc,'B','Time New Roman',10,'','','',25,'C');
kedong($objPHPExcel,'A9','E9',1,'Mỏng');
$tendonvi = "";
$tendonvisau = "";
$index=10;
$tennhomsau = "";
$tennhom="";
$group1=0;
$Tnguyengia = 0;
$Thaomon = 0;

$dv = 0;
for($i = 0; $i < $cs; $i++) {
	$Tnguyengia += $tg[$i][3];
	$Thaomon += $tg[$i][5];
	$tendonvi = $tg[$i][6];
	if ($tendonvi != $tendonvisau) {
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $tg[$i][6])->mergeCells('B' . $index . ':E' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
		$index++;
		$tendonvisau = $tg[$i][6];
		$dv = $index;
	}
	$tennhom = $tg[$i][2];
	if ($tennhom != $tennhomsau) {
		$group1 = $index;
		$congNG = 0;
		$congHM =0;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $tg[$i][2]);
		dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'BI');
		$index++;
	}
	$congNG += $tg[$i][3];
	$congHM += $tg[$i][5];
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $i + 1)
		->setCellValue('B' . $index, $tg[$i][1])
		->setCellValue('C' . $index, $tg[$i][3])
		->setCellValue('D' . $index, $tg[$i][4])
		->setCellValue('E' . $index, $tg[$i][5]);
	$tennhomsau = $tg[$i][2];
	/*
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('C' . $group1, "=Sum(C" . ($group1 + 1) . ":C" . $index . ")")
		->setCellValue('E' . $group1, "=Sum(E" . ($group1 + 1) . ":E" . $index . ")");
	*/
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('C' . $group1, $congNG)
		->setCellValue('E' . $group1, $congHM);
	$index++;
	if(($i +1)<$cs) {
		if ($tendonvi != $tg[$i + 1][6]) {
			$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('B' . $index, "Cộng")
				->setCellValue('C' . $index, $Tnguyengia)
				->setCellValue('E' . $index, $Thaomon);
			$index++;
		}
	}
}
$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('B' . $index, "Tổng cộng")
	->setCellValue('C' . $index, $Tnguyengia)
	->setCellValue('E' . $index, $Thaomon);

// truyền dữ liệu
dinhdangfont($objPHPExcel,'A10','E'.($index),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A10','A'.($index),$i,'');
dinhdangle($objPHPExcel,'B10','B'.($index),$i,'T');
dinhdangle($objPHPExcel,'C10','C'.($index),$i,'P');
dinhdangsoxls($objPHPExcel,'C10','C'.($index),$i,'BT');
dinhdangsoxls($objPHPExcel,'D10','D'.($index),$i,'2P');
dinhdangsoxls($objPHPExcel,'E10','E'.($index),$i,'BT');
dinhdangxuongdong($objPHPExcel,'B10','B'.($index),$i);
dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
dulieumotcot($objPHPExcel,'B'.$index,'Tổng cộng','B','Time New Roman',10,'','','',65,'C');
kedong($objPHPExcel,'A10','E'.($index),$i,'Mỏng');
dulieumotcot($objPHPExcel,'D'.($index + 1),'Hà Nội, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 3),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
taofile($objPHPExcel,"BaHMTSCD.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\BaHMTSCD.xls">Bấm vào đây để tải file về</a>
</body>