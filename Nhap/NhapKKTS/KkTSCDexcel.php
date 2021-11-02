<head>
<meta charset='utf-8'>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
$key = $_GET["id"];
$ma = explode('>',$key);
$ab = trim($ma[0]);
$kiemke=$ma[1];
$maqhns = "";
$tendv = "";
$tencqcq = "";
$nlb = "";
$ptkt = "";
$ttdv = "";
$sql = "Select maqhns,tendv,tencqcq,nlb,ptkt,ttdv From thongtindonvi Where madonvi = '$ma[0]'";

$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$maqhns = $row['maqhns'];
	$tendv = $row['tendv'];
	$tencqcq = $row['tencqcq'];
	$nlb = $row['nlb'];
	$ptkt = $row['ptkt'];
	$ttdv = $row['ttdv'];
}
$TDKK = "";
$SoBB = "";
$truongban="";
$ngaykk ="";
$sql = "Select GIO, PHUT, ngay1,sohieu from tblkiemke where TTkiemke = '" . $kiemke . "'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
	$ngaykk =$row['ngay1'];
	$TDKK = $row['GIO']." giờ ".$row['PHUT']. " phút, ngày ".substr($row['ngay1'],8,2) ." tháng ". substr($row['ngay1'],5,2) .  " năm ". substr($row['ngay1'],0,4);
	$SoBB = "Số hiệu biên bản: ". $row['sohieu'];
}
$artp = array(array("A","B","C","D"));
$ar = array(array("A","B","C","D",0,0,0,0,0,0,0,0,0,0));
$ctp = 0;
$c = 0;
$sql = "Select 	hotencb,chucvucanbo,daidientp,thanhphan from tblthanhphankk where TTkiemke = '" . $ma[1] . "'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql))
{
	if($row['thanhphan'] == "Trưởng ban")
		$truongban = $row['hotencb'];
	$artp[$ctp][0] = $row['hotencb'];
	$artp[$ctp][1] = $row['chucvucanbo'];
	$artp[$ctp][2] = $row['daidientp'];
	$artp[$ctp][3] = $row['thanhphan'];
	$ctp++;
}
$sql = "Select tblkiemken.tenchitiet,tblqlts.mataisan,tblqlts.noidung,tblkiemken.nhom1sllt,".
	" tblkiemken.nhom1nglt,round(tblkiemken.nhom1cllt) as nhom1cllt,tblkiemken.nhom2sltt,tblkiemken.nhom2ngtt,round(tblkiemken.nhom2cltt) as nhom2cltt,".
	" tblkiemken.nhom3slcl,tblkiemken.nhom3ngcl,round(tblkiemken.nhom3clcl) as nhom3clcl, tblkiemken.chitiethinhthai".
	" From tblkiemken inner join tblqlts on tblkiemken.TTQLTS = tblqlts.TTQLTS".
	" where tblkiemken.TTkiemke = '" . $ma[1] . "' and tblqlts.mataisan Not like 'C%' and".
	" tblqlts.TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . $ngaykk. "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))".
	" order by tblkiemken.chitiethinhthai,tblkiemken.tenchitiet,tblqlts.mataisan";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
	$ar[$c][0] = $row['tenchitiet'];
	$ar[$c][1] = $row['mataisan'];
	$ar[$c][2] = $row['noidung'];
	$ar[$c][3] = $row['chitiethinhthai'];
	$ar[$c][4] = $row['nhom1sllt'];
	$ar[$c][5] = $row['nhom1nglt'];
	$ar[$c][6] = $row['nhom1cllt'];
	$ar[$c][7] = $row['nhom2sltt'];
	$ar[$c][8] = $row['nhom2ngtt'];
	$ar[$c][9] = $row['nhom2cltt'];
	$ar[$c][10] = $row['nhom3slcl'];
	$ar[$c][11] = $row['nhom3ngcl'];
	$ar[$c][12] = $row['nhom3clcl'];
	$c++;
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
dulieumotcot($objPHPExcel,'A1','Tên đơn vị: '.$madv[2],'B','Time New Roman',11,'G1','','',0,'');
dulieumotcot($objPHPExcel,'H1','Mẫu số C53 - HD','B','Time New Roman',14,'','','N1',0,'');
dulieumotcot($objPHPExcel,'A2','Mã quan hệ NS: '.$maqhns ,'B','Time New Roman',13,'','','G2',0,'');
dulieumotcot($objPHPExcel,'A3','BIÊN BẢN KIỂM KÊ TSCĐ ','B','Time New Roman',14,'','','N3',0,'');
dulieumotcot($objPHPExcel,'A4','Thời điểm kiểm kê: '.$TDKK,'I','Time New Roman',14,'','','N4',0,'');
dulieumotcot($objPHPExcel,'A6','Ban kiểm kê gồm: ','','Time New Roman',14,'','','N6',0,'');
$index = 7;

foreach ($artp as $artp) {
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $artp[0])->mergeCells('A' . $index . ':B' . $index)
		->setCellValue('C' . $index, $artp[1])->mergeCells('C' . $index . ':F' . $index)
		->setCellValue('G' . $index, $artp[2])->mergeCells('G' . $index . ':J' . $index)
		->setCellValue('I' . $index, $artp[3])->mergeCells('I' . $index . ':N' . $index);
	$index++;
}
dulieumotcot($objPHPExcel,'A'.$index,'Đã kiểm kê TSCĐ, kết quả như sau: ','','Time New Roman',14,'','','N'.$index,0,'');

dulieumotcot($objPHPExcel,'A'.$index,'STT','B','Time New Roman',10,'','','A'.$index+1,6,'C');
dulieumotcot($objPHPExcel,'B'.$index,'Tên tài sản cố định','B','Time New Roman',10,'','','B'.$index+1,25,'C');
dulieumotcot($objPHPExcel,'C'.$index,'Mã số','B','Time New Roman',10,'','','C'.$index+1,8,'C');
dulieumotcot($objPHPExcel,'D'.$index,'Nơi sử dụng','B','Time New Roman',10,'','','D'.$index+1,7,'C');
dulieumotcot($objPHPExcel,'E'.$index,'Theo sổ kế toán','B','Time New Roman',10,'','','G'.$index,0,'C');
dulieumotcot($objPHPExcel,'H'.$index,'Thực tế kiểm kê','B','Time New Roman',10,'','','J'.$index,0,'C');
dulieumotcot($objPHPExcel,'K'.$index,'Chênh lệch','B','Time New Roman',10,'','','M'.$index,0,'C');
dulieumotcot($objPHPExcel,'N'.$index,'Ghi chú','B','Time New Roman',10,'','','',0,'C');

dulieumotcot($objPHPExcel,'E'.$index+1,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'F'.$index+1,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'G'.$index+1,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

dulieumotcot($objPHPExcel,'H'.$index+1,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I'.$index+1,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'J'.$index+1,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

dulieumotcot($objPHPExcel,'K'.$index+1,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'L'.$index+1,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'M'.$index+1,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

kedong($objPHPExcel,'A'.$index,'L'.$index+1,1,'Mỏng');
$index = $index+2;
$start = $index;
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


$stt = 0;
$groupname = "";
$C1ng = 0; $C1cl = 0; $C2ng = 0; $C2cl = 0; $C3ng = 0; $C3cl = 0;
foreach ($ar as $ar1)
{
	if($ar1[3] != $groupname)
	{
		$sogr1 = $sogr1 + 1;
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('B' . $index, $ar1[3])->mergeCells('B' . $index . ':N' . $index);
		dinhdangBI($objPHPExcel, 'A' . $index, 'N' . $index, 1, 'B');
		$index++;

		$T1sl=0; $T1ng=0;$T1cl=0;$T2sl=0; $T2ng=0;$T2cl=0;$T3sl=0; $T3ng=0;$T3cl=0;
		foreach ($ar as $ar2)
		{
			if($ar2[3] == $ar1[3])
			{
				$T1sl += $ar2[4];
				$T1ng += $ar2[5];
				$T1cl += $ar2[6];
				$T2sl += $ar2[7];
				$T2ng += $ar2[8];
				$T2cl += $ar2[9];
				$T3sl += $ar2[10];
				$T3ng += $ar2[11];
				$T3cl += $ar2[12];
				$C1ng += $ar2[5];
				$C1cl += $ar2[6];
				$C2ng += $ar2[8];
				$C2cl += $ar2[9];
				$C3ng += $ar2[11];
				$C3cl += $ar2[12];
				$stt ++;
				$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A' . $index, $stt)
					->setCellValue('B' . $index, $ar2[0])
					->setCellValue('C' . $index, $ar2[1])
					->setCellValue('D' . $index, $ar2[2])
					->setCellValue('E' . $index, $ar2[3])
					->setCellValue('F' . $index, $ar2[4])
					->setCellValue('G' . $index, $ar2[5])
					->setCellValue('H' . $index, $ar2[6])
					->setCellValue('I' . $index, $ar2[7])
					->setCellValue('J' . $index, $ar2[8])
					->setCellValue('K' . $index, $ar2[9])
					->setCellValue('L' . $index, $ar2[10])
					->setCellValue('M' . $index, $ar2[11])
					->setCellValue('N' . $index, $ar2[12]);
				$index++;
			}
		}
		$groupname=$ar1[3];
		dulieumotcot($objPHPExcel,'B'.$index,'Cộng','B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'E'.$index,$T1sl,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'F'.$index,$T1ng,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'G'.$index,$T1cl,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'H'.$index,$T2sl,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'I'.$index,$T2ng,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'J'.$index,$T2cl,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'K'.$index,$T3sl,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'L'.$index,$T3ng,'B','Time New Roman',10,'','','',0,'');
		dulieumotcot($objPHPExcel,'M'.$index,$T3cl,'B','Time New Roman',10,'','','',0,'');
		$index++;
	}
}
dulieumotcot($objPHPExcel,'B'.$index,'Cộng','B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'E'.$index,$T1sl,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'F'.$index,$T1ng,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'G'.$index,$T1cl,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'H'.$index,$T2sl,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'I'.$index,$T2ng,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'J'.$index,$T2cl,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'K'.$index,$T3sl,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'L'.$index,$T3ng,'B','Time New Roman',10,'','','',0,'');
dulieumotcot($objPHPExcel,'M'.$index,$T3cl,'B','Time New Roman',10,'','','',0,'');
$index++;


// truyền dữ liệu
dinhdangfont($objPHPExcel,'A'.$start,'L'.$index,$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A'.$start,'A'.$index,$i,'');
dinhdangle($objPHPExcel,'B'.$start,'D'.$index,$i,'T');
dinhdangle($objPHPExcel,'E'.$start,'M'.$index,$i,'P');
dinhdangsoxls($objPHPExcel,'E'.$start,'E'.$index,$i,'1P');
dinhdangsoxls($objPHPExcel,'F'.$start,'F'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'G'.$start,'G'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'H'.$start,'H'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'I'.$start,'I'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'J'.$start,'J'.$index,$i,'2P');
dinhdangsoxls($objPHPExcel,'K'.$start,'K'.$index,$i,'BT');
dinhdangsoxls($objPHPExcel,'L'.$start,'L'.$index,$i,'BT');
dinhdangxuongdong($objPHPExcel,'B'.$start,'C'.($index),$i);
kedong($objPHPExcel,'A'.$start,'L'.$index,$i,'Mỏng');
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