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
dulieumotcot($objPHPExcel,'A1','Tên đơn vị: '.$tendv,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'H1','Mẫu số C53 - HD','B','Time New Roman',14,'','','N1',0,'');
dulieumotcot($objPHPExcel,'A2','Mã quan hệ NS: '.$maqhns ,'B','Time New Roman',13,'T','','G2',0,'');
dulieumotcot($objPHPExcel,'A3','BIÊN BẢN KIỂM KÊ TSCĐ ','B','Time New Roman',14,'','','N3',0,'');
dulieumotcot($objPHPExcel,'A4','Thời điểm kiểm kê: '.$TDKK,'I','Time New Roman',14,'','','N4',0,'');
dulieumotcot($objPHPExcel,'A6','Ban kiểm kê gồm: ','','Time New Roman',10,'T','','N6',0,'');
$index = 7;

foreach ($artp as $artp) {
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, 'Ông (Bà): '.$artp[0])->mergeCells('A' . $index . ':B' . $index)
		->setCellValue('C' . $index, 'Chức vụ: '.$artp[1])->mergeCells('C' . $index . ':F' . $index)
		->setCellValue('G' . $index, 'Đại diện: '.$artp[2])->mergeCells('G' . $index . ':J' . $index)
		->setCellValue('I' . $index, 'Thành phần: '.$artp[3])->mergeCells('I' . $index . ':N' . $index);
	$index++;
}
dulieumotcot($objPHPExcel,'A'.$index,'Đã kiểm kê TSCĐ, kết quả như sau: ','','Time New Roman',10,'T','','N'.$index,0,'');
$index++;
$indexpl = $index +1;

dulieumotcot($objPHPExcel,'A'.$index,'STT','B','Time New Roman',10,'','','A'.$indexpl,6,'C');
dulieumotcot($objPHPExcel,'B'.$index,'Tên tài sản cố định','B','Time New Roman',10,'','','B'.$indexpl,25,'C');
dulieumotcot($objPHPExcel,'C'.$index,'Mã số','B','Time New Roman',10,'','','C'.$indexpl,8,'C');
dulieumotcot($objPHPExcel,'D'.$index,'Nơi sử dụng','B','Time New Roman',10,'','','D'.$indexpl,7,'C');
dulieumotcot($objPHPExcel,'E'.$index,'Theo sổ kế toán','B','Time New Roman',10,'','','G'.$index,0,'C');
dulieumotcot($objPHPExcel,'H'.$index,'Thực tế kiểm kê','B','Time New Roman',10,'','','J'.$index,0,'C');
dulieumotcot($objPHPExcel,'K'.$index,'Chênh lệch','B','Time New Roman',10,'','','M'.$index,0,'C');
dulieumotcot($objPHPExcel,'N'.$index,'Ghi chú','B','Time New Roman',10,'','','',0,'C');

dulieumotcot($objPHPExcel,'E'.$indexpl,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'F'.$indexpl,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'G'.$indexpl,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

dulieumotcot($objPHPExcel,'H'.$indexpl,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'I'.$indexpl,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'J'.$indexpl,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

dulieumotcot($objPHPExcel,'K'.$indexpl,'Số lượng','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'L'.$indexpl,'Nguyên giá','B','Time New Roman',10,'','','',13,'C');
dulieumotcot($objPHPExcel,'M'.$indexpl,'Giá trị còn lại','B','Time New Roman',10,'','','',13,'C');

kedong($objPHPExcel,'A'.$index,'N'.$indexpl,1,'Mỏng');
$index = $index+2;
$start = $index;

$stt = 0;
$groupname = "";
$C1ng = 0; $C1cl = 0; $C2ng = 0; $C2cl = 0; $C3ng = 0; $C3cl = 0;
$i=0;
foreach ($ar as $ar1)
{
	$i++;
	if($ar1[3] != $groupname)
	{
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
					->setCellValue('E' . $index, $ar2[4])
					->setCellValue('F' . $index, $ar2[5])
					->setCellValue('G' . $index, $ar2[6])
					->setCellValue('H' . $index, $ar2[7])
					->setCellValue('I' . $index, $ar2[8])
					->setCellValue('J' . $index, $ar2[9])
					->setCellValue('K' . $index, $ar2[10])
					->setCellValue('L' . $index, $ar2[11])
					->setCellValue('M' . $index, $ar2[12]);
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
dinhdangfont($objPHPExcel,'A'.$start,'N'.$index,$i,'Time New Roman',10);
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
kedong($objPHPExcel,'A'.$start,'N'.$index,$i,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'A'.($index + 2),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','C'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'Kế toán trưởng','B','Time New Roman',11,'','','H'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'I'.($index + 2),'Trưởng ban kiểm kê','B','Time New Roman',11,'','','N'.($index +2),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 3),'(Ý kiến giải quyết số chênh lệch)','I','Time New Roman',11,'','','C'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 4),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','C'.($index + 4),0,'');
dulieumotcot($objPHPExcel,'D'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','H'.($index + 3),0,'');
dulieumotcot($objPHPExcel,'I'.($index + 3),'(Ký, họ tên)','I','Time New Roman',11,'','','N'.($index +3),0,'');
dulieumotcot($objPHPExcel,'A'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'I'.($index + 6),'','B','Time New Roman',11,'','','N'.($index +6),0,'');
taofile($objPHPExcel,"KkTSCD.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\KkTSCD.xls">Bấm vào đây để tải file về</a>
</body>