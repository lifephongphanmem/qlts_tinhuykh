<head>
<meta charset='utf-8'>
<?php
	$tungay = "";
	$madv ="";	
	if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];	
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	}
	$ngaytach =  explode('/',$tungay);
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
?>
</head>
<body>

<?php
$cs=0;
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Bộ, cơ quan cấp trên: '.$madv[3],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2','Đơn vị báo cáo: '.$madv[2],'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM','B','Time New Roman',14,'','','L3',0,'');
dulieumotcot($objPHPExcel,'A4','Độc lập - Tự do - Hạnh phúc','B','Time New Roman',13,'','','L4',0,'');
dulieumotcot($objPHPExcel,'A5','Ngày: '.$ngaytach[0].' tháng '.$ngaytach[1].' năm '.$ngaytach[2],'B','Time New Roman',12,'','','L5',0,'');
dulieumotcot($objPHPExcel,'A6','BÁO CÁO KIỂM KÊ TÀI SẢN CỐ ĐỊNH NĂM '.$ngaytach[2],'B','Time New Roman',14,'','','L6',0,'');

dulieumotcot($objPHPExcel,'A7','STT','B','Time New Roman',10,'','','',6,'C');
dulieumotcot($objPHPExcel,'B7','Tên tài sản cố định','B','Time New Roman',10,'','','',25,'C');
dulieumotcot($objPHPExcel,'C7','Năm đưa vào sử dụng','B','Time New Roman',10,'','','',8,'C');
dulieumotcot($objPHPExcel,'D7','Đơn vị tính','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'E7','Số lượng','B','Time New Roman',10,'','','',7,'C');
dulieumotcot($objPHPExcel,'F7','Đơn giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'G7','Thành tiền','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'H7','Giá trị TS còn đến ngày KK','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I7','Giá trị đã khấu hao','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'J7','Tỉ lệ KH','B','Time New Roman',10,'','','',8,'C');
dulieumotcot($objPHPExcel,'K7','Khấu hao năm '.$ngaytach[2],'B','Time New Roman',10,'','','',12,'C');
dulieumotcot($objPHPExcel,'L7','Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

dulieumotcot($objPHPExcel,'A8','1','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'B8','2','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'C8','3','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'D8','4','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'E8','5','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'F8','6','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'G8','7','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'H8','8','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'I8','9','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'J8','10','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'K8','11','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'L8','12','B','Time New Roman',10,'','','',0,'');
kedong($objPHPExcel,'A7','L8',1,'Mỏng');
	function tangsl($TTQLTS)
	{
		global $tungay;
		global $con;
		$kq=0;
		$sql = "Select * From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) ."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row['tanggiam'] == "Tăng")
				$kq+= kieudouble($row['soluong']);
			else
				$kq-= kieudouble($row['soluong']);
		}
		return $kq;		
	}
	function tangst($TTQLTS)
	{
		global $tungay;
		global $con;
		$kq=0;
		$sql = "Select * From tbltanggiam Where TTQLTS = '" . $TTQLTS . "' and ngaytanggiam <= '" . doingay($tungay) ."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row['tanggiam'] == "Tăng")
				$kq+= $row['sotien'];
			else
				$kq-= $row['sotien'];
		}
		return $kq;		
	}
	function luykehaomon($TTQLTS)
	{
		global $tungay;
		global $con;
		global $ngaytach;
		$kq=0;
		$sql = "Select * From tblhaomon Where TTQLTS = '" . $TTQLTS . "' and namhaomon <= '" . $ngaytach[2] ."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq= kieudouble($row['sodu']) + kieudouble($row['sotien']);			
		}
		return $kq;		
	}
	function phantramhaomon($tentaisan)
	{		
		$kq=0;
		global $con;
		$sql = "Select phantramhaomon From tbldanhsachqd32 Where  tentaiqd32 = '" . $tentaisan . "' and  mataisanqd32 like 'TS%'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq= kieudouble($row['phantramhaomon']);			
		}
		return $kq;		
	}
	function haomonnam($TTQLTS)
	{
		global $tungay;
		global $con;
		global $ngaytach;
		$kq=0;
		$sql = "Select * From tblhaomon Where TTQLTS = '" . $TTQLTS . "' and namhaomon = ". $ngaytach[2];		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq= kieudouble($row['sotien']);			
		}
		return $kq;		
	}
$kk =  array(array("A","B","C","D","E",0,0,0,0,0,0,0,0));
$cs=0;
	//$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tbltanggiam inner join thongtindonvi on tbltanggiam.madonvi=thongtindonvi.madonvi where tbltanggiam.madonvi Like '$msdv%' and ngaytanggiam between '" . doingay($tungay) . "' and '" . doingay($denngay) . "'";
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and tblqlts.ngaysudung <= '" . doingay($tungay) . "' and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){
		$sqlkk = "Select DISTINCT tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.chitiethinhthai,year(ngaysudung) as nsd,tblqlts.DVT,(DTKV+DTXD) as SL,(ngansach+nguonkhac) as NG,tblqlts.phantram,tblqlts.tentaisan From tblqlts inner join tbldanhsachqd32 on tblqlts.chitiethinhthai = tbldanhsachqd32.chitiethinhthai";
		$sqlkk = $sqlkk . " where tblqlts.madonvi = '$_madv[ma]' ".
			" and (CASE WHEN year(tblqlts.ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" .  doingay($tungay) ."'  ELSE ngaysudung <= '" . doingay($tungay) ."' END)".
			" and tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($tungay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))  order by tbldanhsachqd32.ttsx";

		$querykk=mysqli_query($con,$sqlkk);
		$i=0;$tc3=0;$tc4=0;$tc5=0;$tc7=0;$tc8=0;
		while($rowkk=mysqli_fetch_array($querykk))
		{
			$sqltg = "Select lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien from tbltanggiam where TTQLTS = " . $rowkk['TTQLTS'] . " and year(ngaytanggiam) <= " . $ngaytach[2];
			//		echo $tangsl;
			$tangsl = 0;
			$tangst1 = 0;
			$querytg = mysqli_query($con, $sqltg);
			while ($rowtg = mysqli_fetch_array($querytg)) {
				if ($rowtg['tanggiam'] == "Tăng") {
					$tangsl += $rowtg['soluong'];
					$tangst1 += $rowtg['ngansach'] + $rowtg['nguonkhac'];
				}
			}
			$kk[$cs][0] = $rowkk['chitiethinhthai'];
			$kk[$cs][1]=$rowkk['tenchitiet'];
			$kk[$cs][2]=$rowkk['nsd'];
			$kk[$cs][3]=$rowkk['DVT'];
			$kk[$cs][4]=$_madv['ten'];
			$kk[$cs][5]=$rowkk['SL'] + tangsl($rowkk['TTQLTS']);
			if(kieudouble($rowkk['SL']) + tangsl($rowkk['TTQLTS']) > 0)
				$kk[$cs][6]=($rowkk['NG'] + tangst($rowkk['TTQLTS']))/($rowkk['SL'] + tangsl($rowkk['TTQLTS']));
			else
				$kk[$cs][6] =0;
			$kk[$cs][7]= $rowkk['NG'] + $tangst1;
			$kk[$cs][8] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
			$kk[$cs][9] = luykehaomon($rowkk['TTQLTS']);
			$kk[$cs][10] = phantramhaomon($rowkk['tentaisan']);
			$kk[$cs][11] = haomonnam($rowkk['TTQLTS']);
			$kk[$cs][12] = $rowkk['NG'] + tangst($rowkk['TTQLTS']) - luykehaomon($rowkk['TTQLTS']);
			$cs = $cs + 1;
		}
	}
$index=9;$tennhomsau = "";$tennhom="";$group1=0;$tennhomsau1 = "";$tennhom1="";$sogr1=0;$sogr2=0;$tong7=0;$tong8=0;$tong9=0;$tong11=0;$sttn1=0;$tong12=0;
$grten = 0;
$grstart = 0;
$grend = 0;
for($i = 0; $i < $cs; $i++) {
	$tennhom = $kk[$i][4];
	if ($tennhom != $tennhomsau) {
		$sogr1 = $sogr1 + 1;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $kk[$i][4])->mergeCells('B' . $index . ':K' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index, 1, 'B');
		$index++;
	}
	$tennhom1 = $kk[$i][0];
	if ($tennhom1 != $tennhomsau1) {
		$sogr2 = $sogr2 + 1;
		$grten = $index;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $kk[$i][0]);
		dinhdangBI($objPHPExcel, 'A' . $index, 'K' . $index , 1, 'BI');
		$index++;
		$sttn1 = $sttn1 + 1;
		$group1 = $index + $sttn1;
		$grstart = $index;
	}
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $i + 1)
		->setCellValue('B' . $index, $kk[$i][1])
		->setCellValue('C' . $index, $kk[$i][2])
		->setCellValue('D' . $index, $kk[$i][3])
		->setCellValue('E' . $index, $kk[$i][5])
		->setCellValue('F' . $index, $kk[$i][6])
		->setCellValue('G' . $index, $kk[$i][7])
		->setCellValue('H' . $index, $kk[$i][8])
		->setCellValue('I' . $index, $kk[$i][9])
		->setCellValue('J' . $index, $kk[$i][10])
		->setCellValue('K' . $index, $kk[$i][11])
		->setCellValue('L' . $index, $kk[$i][12]);
	$tong7 = $tong7 + kieudouble($kk[$i][7]);
	$tong8 = $tong8 + kieudouble($kk[$i][8]);
	$tong9 = $tong9 + kieudouble($kk[$i][9]);
	$tong11 = $tong11 + kieudouble($kk[$i][11]);
	$tong12 = $tong12 + kieudouble($kk[$i][12]);
	$tennhomsau = $kk[$i][4];
	$tennhomsau1 = $kk[$i][0];
	$grend = $index;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('G' . $grten, "=Sum(G" . $grstart . ":G" . $grend . ")")
		->setCellValue('H' . $grten, "=Sum(H" . $grstart . ":H" . $grend . ")")
		->setCellValue('I' . $grten, "=Sum(I" . $grstart . ":I" . $grend . ")")
		->setCellValue('K' . $grten, "=Sum(K" . $grstart . ":K" . $grend . ")")
		->setCellValue('L' . $grten, "=Sum(L" . $grstart . ":L" . $grend . ")");
	$index++;
}
dulieumotcot($objPHPExcel,'B'.$index,'Tổng cộng','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.$index,$tong7,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.$index,$tong8,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'I'.$index,$tong9,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'K'.$index,$tong11,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'L'.$index,$tong12,'B','Time New Roman',10,'','','',0,'');
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A9','L'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A9','A'.$index,$i,'');
dinhdangle($objPHPExcel,'B9','D'.$index,$i,'T');
dinhdangle($objPHPExcel,'E9','L'.$index,$i,'P');
dinhdangsoxls($objPHPExcel,'E9','E'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'F9','F'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'G9','G'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'H9','H'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'I9','I'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'J9','J'.$index,$i,'2P');
dinhdangsoxls($objPHPExcel,'K9','K'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'L9','L'.$index,$i,'BT');
dinhdangxuongdong($objPHPExcel,'B9','C'.($index),$i);
kedong($objPHPExcel,'A9','L'.$index,$i,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'H'.($index + 1),'Hà Nội, ngày ... tháng ... năm ......','I','Time New Roman',11,'','','L'.($index + 1),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 2),'Người ghi sổ','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','L'.($index +2),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 3),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','L'.($index +3),0,'');
dulieumotcot($objPHPExcel,'B'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.($index + 6),'','B','Time New Roman',11,'','','L'.($index +6),0,'');
taofile($objPHPExcel,"Baocaokktscdxls.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\Baocaokktscdxls.xls">Bấm vào đây để tải file về</a>
</body>