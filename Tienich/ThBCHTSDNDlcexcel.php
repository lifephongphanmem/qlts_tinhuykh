 <head>
<meta charset='utf-8'>
<?php
$tendv="";
$ngabc="";
$madv ="";
$msdv="";
$phanloai="";
if(isset($_POST['create'])) {
	$tendv = $_POST['dv'];
	$ngabc = $_POST['nttu'];
	$phanloai = $_POST['phanloai'];
	$madv = explode('>', $_POST['MADV']);
	$msdv = $madv[0];
}
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require_once 'Classes/PHPExcel.php';
?>
 </head>
 <body>
 <?php

 $objPHPExcel = new PHPExcel();
 dulieumotcot($objPHPExcel,'A1','Bộ, ngành tỉnh: ','B','Time New Roman',11,'T','','H1',0,'');
 dulieumotcot($objPHPExcel,'A2','Tên đơn vị: '.$madv[2],'B','Time New Roman',11,'T','','H2',0,'');
 dulieumotcot($objPHPExcel,'A3','Mã đơn vị: ','B','Time New Roman',11,'T','','H3',0,'');

 dulieumotcot($objPHPExcel,'I1','Biểu số: 02B-ĐK/TSNN','B','Time New Roman',11,'','','J1',0,'');

 dulieumotcot($objPHPExcel,'A4','TỔNG HỢP BÁO CÁO HIỆN TRẠNG SỬ DỤNG NHÀ, ĐẤT','B','Time New Roman',16,'','','J4',0,'');
 dulieumotcot($objPHPExcel,'A5','Phần 3: Chi tiết theo từng đơn vị trực thuộc','BI','Time New Roman',11,'','','J5',0,'');
 dulieumotcot($objPHPExcel,'A6','Ngày báo cáo: '.$ngabc,'','Time New Roman',11,'','','J6',0,'');
 dulieumotcot($objPHPExcel,'A7','Chi tiết tài sản đến bậc: 4','','Time New Roman',11,'','','J7',0,'');
 dulieumotcot($objPHPExcel,'A7','	ĐVT cho: Diện tích đăt là: Mét vuông; Diện tích nhà là: Mét vuông;Số lượng là: Cái, Khuôn viên; Giá trị là: Nghìn đồng','I','Time New Roman',11,'','','J7',0,'');

 dulieumotcot($objPHPExcel,'A8','Tài sản','B','Time New Roman',10,'','','A10',40,'');
 dulieumotcot($objPHPExcel,'B8','Số lượng','','Time New Roman',10,'','','B10',15,'C');
 dulieumotcot($objPHPExcel,'C8','Diện tích','','Time New Roman',10,'','','C10',15,'C');
 dulieumotcot($objPHPExcel,'D8','Hiện trạng sử dụng','','Time New Roman',10,'','','J8',0,'C');
 dulieumotcot($objPHPExcel,'D9','Trụ sở làm việc','','Time New Roman',10,'','','D10',15,'C');
 dulieumotcot($objPHPExcel,'E9','Hoạt động sự nghiệp','','Time New Roman',10,'','','E10',15,'C');
 dulieumotcot($objPHPExcel,'F9','Sử dụng khác','','Time New Roman',10,'','','J9',0,'C');
 dulieumotcot($objPHPExcel,'F10','Làm nhà ở','','Time New Roman',10,'','','F10',15,'C');
 dulieumotcot($objPHPExcel,'G10','Cho thuê','','Time New Roman',10,'','','G10',15,'C');
 dulieumotcot($objPHPExcel,'H10','Bỏ trống','','Time New Roman',10,'','','H10',15,'C');
 dulieumotcot($objPHPExcel,'I10','Bị lấn chiếm','','Time New Roman',10,'','','I10',15,'C');
 dulieumotcot($objPHPExcel,'J10','Khác','','Time New Roman',10,'','','J10',15,'C');
 kedong($objPHPExcel,'A8','J10',1,'Mỏng');

 $index = 11;
 $_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
	 " from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
	 " where ";
 if ($tendv != "")
	 $_sQLdv = $_sQLdv."thongtindonvi.madonvi = '".$tendv."'";
 else
	 $_sQLdv = $_sQLdv."thongtindonvi.madonvi Like '".$msdv.".%'";
 $_qdv = mysqli_query($con,$_sQLdv);
 $i=0;
 $_aDV=array();
 while($_r=mysqli_fetch_array($_qdv)) {
	 $_aDV[] = array('ma' => $_r['madonvi'],
		 'ten' => $_r['tendv']
	 );
 }
 //Duyệt từng đơn vị
 foreach($_aDV as $_madv) {
	 $i ++;
	 // in tên đơn vị
	 $objPHPExcel->setActiveSheetIndex(0)
		 ->setCellValue('A' . $index, $i . ". " . $_madv['ten'])->mergeCells('A' . $index . ':J' . $index);
	 dinhdangBI($objPHPExcel, 'A' . $index, 'J' . $index, 1, 'B');
	 $index++;

	 $sql = "Select tblqlts.TTQLTS,tblqlts.tenchitiet,tblqlts.tentaisan,tblqlts.DTKV+tblqlts.TDTSXD as sl,tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3";
	 $sql = $sql . " From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 Where tblqlts.madonvi = '$_madv[ma]' and ".
	 ($phanloai == ""? "(tbldanhsachqd32.bac1 Like 'Đất%' or tbldanhsachqd32.bac1 Like 'Quyền sử dụng đất%' or tbldanhsachqd32.bac1 Like 'Nhà%')" : "tbldanhsachqd32.bac1 Like '$phanloai%' ");
	 $sql = $sql . " and tblqlts.ngaysudung <= '" . doingay($ngabc) . "' order by tbldanhsachqd32.bac1,tbldanhsachqd32.bac2,tbldanhsachqd32.bac3";

	 $queryct = mysqli_query($con, $sql);
	 $ts = array(array("A", "B", "C", "D", 0, 0, 0, 0, 0, 0, 0, 0, 0));
	 $cs = 0;
	 $stt=0;
	 while ($rowct = mysqli_fetch_array($queryct)) {
		 $stt++;
		 $ts[$cs][0] = $rowct['bac1'];
		 $ts[$cs][1] = $rowct['bac2'];
		 $ts[$cs][2] = $rowct['bac3'];
		 $ts[$cs][3] = $rowct['tenchitiet'];
		 $ts[$cs][4] = 1;
		 $ts[$cs][5] = $rowct['sl'];
		 $sqlht = "Select soluong,phanloai From tblhientrang Where TTQLTS = '" . $rowct['TTQLTS'] . "'";
		 $queryht = mysqli_query($con, $sqlht);
		 $s1 = 0;
		 $s2 = 0;
		 $s3 = 0;
		 $s4 = 0;
		 $s5 = 0;
		 $s6 = 0;
		 $s7 = 0;
		 while ($rowht = mysqli_fetch_array($queryht)) {
			 if ($rowht['phanloai'] == "Trụ sở làm việc")
				 $s1 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Hoạt động sự nghiệp")
				 $s2 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Làm nhà ở")
				 $s3 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Cho thuê")
				 $s4 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Bỏ trống")
				 $s5 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Bị lấn chiếm")
				 $s6 = $rowht['soluong'];
			 else if ($rowht['phanloai'] == "Khác")
				 $s7 = $rowht['soluong'];
		 }
		 $ts[$cs][6] = $s1;
		 $ts[$cs][7] = $s2;
		 $ts[$cs][8] = $s3;
		 $ts[$cs][9] = $s4;
		 $ts[$cs][10] = $s5;
		 $ts[$cs][11] = $s6;
		 $ts[$cs][12] = $s7;
		 $cs = $cs + 1;
	 }
	 $tennhomsau1 = "";
	 $tennhom1 = "";
	 $tennhomsau2 = "";
	 $tennhom2 = "";
	 $tennhomsau3 = "";
	 $tennhom3 = "";
	 for ($z = 0; $z < $cs; $z++) {
		 $tennhom1 = $ts[$z][0];
		 if ($tennhom1 != $tennhomsau1) {
			 $tennhom2 = $ts[$z][1];
			 $tennhom3 = $ts[$z][2];
			 $nh11 = 0;
			 $nh12 = 0;
			 $nh13 = 0;
			 $nh14 = 0;
			 $nh15 = 0;
			 $nh16 = 0;
			 $nh17 = 0;
			 $nh18 = 0;
			 $nh19 = 0;
			 $nh21 = 0;
			 $nh22 = 0;
			 $nh23 = 0;
			 $nh24 = 0;
			 $nh25 = 0;
			 $nh26 = 0;
			 $nh27 = 0;
			 $nh28 = 0;
			 $nh29 = 0;
			 $nh31 = 0;
			 $nh32 = 0;
			 $nh33 = 0;
			 $nh34 = 0;
			 $nh35 = 0;
			 $nh36 = 0;
			 $nh37 = 0;
			 $nh38 = 0;
			 $nh39 = 0;
			 for ($j = 0; $j < $cs; $j++) {
				 if ($ts[$j][0] == $tennhom1) {
					 $nh11 = $nh11 + $ts[$j][4];
					 $nh12 = $nh12 + $ts[$j][5];
					 $nh13 = $nh13 + $ts[$j][6];
					 $nh14 = $nh14 + $ts[$j][7];
					 $nh15 = $nh15 + $ts[$j][8];
					 $nh16 = $nh16 + $ts[$j][9];
					 $nh17 = $nh17 + $ts[$j][10];
					 $nh18 = $nh18 + $ts[$j][11];
					 $nh19 = $nh19 + $ts[$j][12];
				 }
				 if ($ts[$j][1] == $tennhom2) {
					 $nh21 = $nh21 + $ts[$j][4];
					 $nh22 = $nh22 + $ts[$j][5];
					 $nh23 = $nh23 + $ts[$j][6];
					 $nh24 = $nh24 + $ts[$j][7];
					 $nh25 = $nh25 + $ts[$j][8];
					 $nh26 = $nh26 + $ts[$j][9];
					 $nh27 = $nh27 + $ts[$j][10];
					 $nh28 = $nh28 + $ts[$j][11];
					 $nh29 = $nh29 + $ts[$j][12];
				 }
				 if ($ts[$j][2] == $tennhom3) {
					 $nh31 = $nh31 + $ts[$j][4];
					 $nh32 = $nh32 + $ts[$j][5];
					 $nh33 = $nh33 + $ts[$j][6];
					 $nh34 = $nh34 + $ts[$j][7];
					 $nh35 = $nh35 + $ts[$j][8];
					 $nh36 = $nh36 + $ts[$j][9];
					 $nh37 = $nh37 + $ts[$j][10];
					 $nh38 = $nh38 + $ts[$j][11];
					 $nh39 = $nh39 + $ts[$j][12];
				 }
			 }
			 $nh11 = $nh11;
			 $nh12 = dinhdangso($nh12);
			 $nh13 = dinhdangso($nh13);
			 $nh14 = dinhdangso($nh14);
			 $nh15 = dinhdangso($nh15);
			 $nh16 = dinhdangso($nh16);
			 $nh17 = dinhdangso($nh17);
			 $nh18 = dinhdangso($nh18);
			 $nh19 = dinhdangso($nh19);

			 // in Group
			 $objPHPExcel->setActiveSheetIndex(0)
				 ->setCellValue('A' . $index, $tennhom1)
				 ->setCellValue('B' . $index, $nh11)
				 ->setCellValue('C' . $index, $nh12)
				 ->setCellValue('D' . $index, $nh13)
				 ->setCellValue('E' . $index, $nh14)
				 ->setCellValue('F' . $index, $nh15)
				 ->setCellValue('G' . $index, $nh16)
				 ->setCellValue('H' . $index, $nh17)
				 ->setCellValue('I' . $index, $nh18)
				 ->setCellValue('J' . $index, $nh19);
			 dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'B');
			 $index++;
		 }
		 $tennhomsau1 = $ts[$z][0];
		 //$tennhom2 = $ts[$z][1];
		 if ($tennhom2 != $tennhomsau2) {
			 $nh21 = dinhdangso($nh21);
			 $nh22 = dinhdangso($nh22);
			 $nh23 = dinhdangso($nh23);
			 $nh24 = dinhdangso($nh24);
			 $nh25 = dinhdangso($nh25);
			 $nh26 = dinhdangso($nh26);
			 $nh27 = dinhdangso($nh27);
			 $nh28 = dinhdangso($nh28);
			 $nh29 = dinhdangso($nh29);

			 $objPHPExcel->setActiveSheetIndex(0)
				 ->setCellValue('A' . $index, "  ".$tennhom2)
				 ->setCellValue('B' . $index, $nh21)
				 ->setCellValue('C' . $index, $nh22)
				 ->setCellValue('D' . $index, $nh23)
				 ->setCellValue('E' . $index, $nh24)
				 ->setCellValue('F' . $index, $nh25)
				 ->setCellValue('G' . $index, $nh26)
				 ->setCellValue('H' . $index, $nh27)
				 ->setCellValue('I' . $index, $nh28)
				 ->setCellValue('J' . $index, $nh29);
			 	dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'BI');
				$index++;
		 }
		 $tennhomsau2 = $ts[$z][1];
		 if ($tennhom3 != $tennhomsau3) {
			 //$nh21=0;$nh22=0;$nh23=0;$nh24=0;$nh25=0;$nh26=0;$nh27=0;$nh28=0;$nh29=0;
			 /* for($j1=0;$j1<$cs;$j1++)
             {
                 if ($ts[$j1][0]==$tennhom2)
                 {
                     $nh21=$nh21+$ts[$j1][4];$nh22=$nh22+$ts[$j1][5];$nh23=$nh23+$ts[$j1][6];$nh24=$nh24+$ts[$j1][7];$nh25=$nh25+$ts[$j1][8];$nh26=$nh26+$ts[$j1][9];$nh27=$nh27+$ts[$j1][10];$nh28=$nh28+$ts[$j1][11];$nh29=$nh29+$ts[$j1][12];
                 }
             } */
			 $nh31 = dinhdangso($nh31);
			 $nh32 = dinhdangso($nh32);
			 $nh33 = dinhdangso($nh33);
			 $nh34 = dinhdangso($nh34);
			 $nh35 = dinhdangso($nh35);
			 $nh36 = dinhdangso($nh36);
			 $nh37 = dinhdangso($nh37);
			 $nh38 = dinhdangso($nh38);
			 $nh39 = dinhdangso($nh39);
			 $objPHPExcel->setActiveSheetIndex(0)
				 ->setCellValue('A' . $index, "   ".$tennhom3)
				 ->setCellValue('B' . $index, $nh31)
				 ->setCellValue('C' . $index, $nh32)
				 ->setCellValue('D' . $index, $nh33)
				 ->setCellValue('E' . $index, $nh34)
				 ->setCellValue('F' . $index, $nh35)
				 ->setCellValue('G' . $index, $nh36)
				 ->setCellValue('H' . $index, $nh37)
				 ->setCellValue('I' . $index, $nh38)
				 ->setCellValue('J' . $index, $nh39);
			 $index++;
		 }
		 $tennhomsau3 = $ts[$z][2];
		 $objPHPExcel->setActiveSheetIndex(0)
			 ->setCellValue('A' . $index, "     ".$ts[$z][3])
			 ->setCellValue('B' . $index, dinhdangso($ts[$z][4]))
			 ->setCellValue('C' . $index, dinhdangso($ts[$z][5]))
			 ->setCellValue('D' . $index, dinhdangso($ts[$z][6]))
			 ->setCellValue('E' . $index, dinhdangso($ts[$z][7]))
			 ->setCellValue('F' . $index, dinhdangso($ts[$z][8]))
			 ->setCellValue('G' . $index, dinhdangso($ts[$z][9]))
			 ->setCellValue('H' . $index, dinhdangso($ts[$z][10]))
			 ->setCellValue('I' . $index, dinhdangso($ts[$z][11]))
			 ->setCellValue('J' . $index, dinhdangso($ts[$z][12]));
		 dinhdangBI($objPHPExcel, 'A' . $index, 'T' . $index, 1, 'I');
		 $index++;
	 }
 }
 // truyền dữ liệu
 dinhdangfont($objPHPExcel,'A11','J'.$index,$stt,'Time New Roman',10);
 dinhdangle($objPHPExcel,'A11','A'.$index,$stt,'T');
 dinhdangle($objPHPExcel,'B11','J'.$index,$stt,'P');
 dinhdangsoxls($objPHPExcel,'B11','J'.$index,$stt,'BT');
 dinhdangxuongdong($objPHPExcel,'A11','A'.$index,$stt);
 kedong($objPHPExcel,'A11','J'.($index-1),$stt,'Mỏng');
 $index++;
 dulieumotcot($objPHPExcel,'E'.$index,'....... , ngày ... tháng ... năm ......','','Time New Roman',11,'','','J'.$index,0,'');
 $index++;
 dulieumotcot($objPHPExcel,'A'.$index,'Người lập biểu','B','Time New Roman',11,'','','D'.$index,0,'');
 dulieumotcot($objPHPExcel,'E'.$index,'Thủ trưởng đơn vị','B','Time New Roman',11,'','','J'.$index,0,'');
 $index++;
 dulieumotcot($objPHPExcel,'A'.$index,'(Ký, ghi rõ họ tên)','I','Time New Roman',11,'','','D'.$index,0,'');
 dulieumotcot($objPHPExcel,'E'.$index,'(Ký, đóng dấu, ghi rõ họ tên)','I','Time New Roman',11,'','','J'.$index,0,'');

taofile($objPHPExcel,"ThBCHTSDNDlc.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\ThBCHTSDNDlc.xls">Bấm vào đây để tải file về</a>
</body>