<?php require("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>
<head>
<meta charset='utf-8'>
</head>
<body>
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$denngay="";
	$tungay ="";		
	$ckbts = "No";
	$ckbld = "";
	$ckbbs ="";
	$loaihinhdv = "";
	if(isset($_POST['create']))
	{		
		$denngay = $_POST['ntden'];
		$tungay = $_POST['nttu'];			
		if(isset($_POST['ts']))			
			$ckbts = $_POST['ts'];
		if(isset($_POST['ld']))			
			$ckbld = "X";
		if(isset($_POST['bs']))			
			$ckbbs = "X";
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];			
		if($_POST['donvi'] != "")
			$msdv = $_POST['donvi'];
		$loaihinhdv = loaihinhdv($madv[0]);
	}
	function loaihinhdv($ms)
	{		
		$kq="";
		global $con;
		$sql = "Select loaihinh from thongtindonvi where madonvi = '$ms'";			
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
	function sthm ($mats)
	{
		global $denngay;
		$kq=0;
		global $con;
		$sql = "Select * From tblhaomon Where TTQLTS = '" . $mats . "' and ngaythang <= '$denngay'";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$kq += kieudouble($row['sotien']) + kieudouble($row['sodu']);
		}
		return $kq;
	}
	function tgts($mats)
	{
		$kq=0;
		global $con;
		$sql = "Select tanggiam,sotien From tbltanggiam Where TTQLTS = '" . $mats . "'";
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
	function htsd ($mats, $phanloai)
	{
		$kq =0;
		global $con;
		$sql = "Select soluong From tblhientrang Where TTQLTS = '" . $mats . "' and phanloai = '" . $phanloai . "' order by TThientrang";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
		{
			$kq +=  kieudouble($row['soluong']);
		}
		return $kq;
	}
?>
	<?php
		//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and ngaysudung <= '".doingay($denngay)."' and ngansach+nguonkhac >=500000000";
	if ($ckbts == "No")
			$_sQLdv .= " and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and chitiethinhthai Not like 'Vật kiến trúc%'";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	//Tạo mảng chứa kết quả
	$_aKQ= array();
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){
		//Tên đơn vị
		
		//thêm vào mảng $_aKQ để chuyển excel
		$_aKQ[]=array('tents' =>  $_madv['ten'],
							'mats' => '',
							'nsx' => '',
							'namsx' =>'',
							'ntsd' => '',
							'nNS' => '',
							'nK' => '',
							'gtcl' => '',
							'qlnn' => '',
							'kd' => '',
							'kkd' => '',
							'hdk' => '',
							'nhom'=>1
			);
		//
		$ar = array(array("A","B","C","D","E",0,0,0,0,0,0,0,0,0));
		$c=0;
		$Tsl1 = 0; $Tsl2 = 0; $Tsl3 = 0; $Tsl4 = 0; $Tsl5 = 0; $Tsl6 = 0; $Tsl7 = 0;	
		$sql = "Select TTQLTS,tenchitiet,NUOCSX,namsanxuat,mataisan,ngaynhap,ngansach,nguonkhac from tblqlts where madonvi = '$_madv[ma]' and ngaysudung <= '".doingay($denngay)."'" ." and ngansach+nguonkhac >=500000000 ";
		if ($ckbts == "No")
			$sql .= "and chitiethinhthai Not like 'Phương tiện vận tải%' and chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and chitiethinhthai Not like 'Vật kiến trúc%'";	
		$qrsql = mysqli_query($con,$sql);	
		while ($row = mysqli_fetch_array($qrsql)){
			$ar[$c][0] = $row['tenchitiet'];
			$ar[$c][1] = $row['mataisan'].".".$row['TTQLTS'];
			$ar[$c][2] = $row['NUOCSX'];
			$ar[$c][3] = $row['namsanxuat'];
			$ar[$c][4] = $row['ngaynhap'];
			$ar[$c][5] = $row['ngansach'];
			$ar[$c][6] = $row['nguonkhac'];
			$ar[$c][7] = kieudouble($row['ngansach'])+ kieudouble($row['nguonkhac']) +kieudouble(tgts($row['TTQLTS'])) - kieudouble(sthm($row['TTQLTS']));
			$ar[$c][8] = htsd($row['TTQLTS'], "QLNN");
			$ar[$c][9] = htsd($row['TTQLTS'], "Kinh doanh");
			$ar[$c][10] = htsd($row['TTQLTS'], "Không KD");
			$ar[$c][11] = htsd($row['TTQLTS'], "Khác");
			
			$Tsl1 += kieudouble($row['ngansach']);
			$Tsl2 += kieudouble($row['nguonkhac']);
			$Tsl3 += kieudouble($row['ngansach'])+ kieudouble($row['nguonkhac']) +kieudouble(tgts($row['TTQLTS'])) - kieudouble(sthm($row['TTQLTS']));
			$Tsl4 += kieudouble(htsd($row['TTQLTS'], "QLNN"));
			$Tsl5 += kieudouble(htsd($row['TTQLTS'], "Kinh doanh"));
			$Tsl6 += kieudouble(htsd($row['TTQLTS'], "Không KD"));
			$Tsl7 += kieudouble(htsd($row['TTQLTS'], "Khác"));
			$c++;	
		}
	
		foreach ($ar as $ar)
		{						
			$_aKQ[]=array('tents' => $ar[0],
							'mats' => $ar[1],
							'nsx' => $ar[2],
							'namsx' =>$ar[3],
							'ntsd' => $ar[4],
							'nNS' => $ar[5],
							'nK' => $ar[6],
							'gtcl' => $ar[7],
							'qlnn' => $ar[8],
							'kd' => $ar[9],
							'kkd' => $ar[10],
							'hdk' => $ar[11],
							'nhom'=>0
			);
		}		
		//thêm vào mảng $_aKQ để chuyển excel
		$_aKQ[]=array('tents' =>'Tổng cộng',
							'mats' => '',
							'nsx' => '',
							'namsx' =>'',
							'ntsd' => '',
							'nNS' => $Tsl1,
							'nK' => $Tsl2,
							'gtcl' => $Tsl3,
							'qlnn' => $Tsl4,
							'kd' => $Tsl5,
							'kkd' => $Tsl6,
							'hdk' => $Tsl7,
							'nhom'=>1
			);
		//
	}	
	?>
<?php
	require_once '../Tienich/Classes/PHPExcel.php';
	require_once '../Tienich/Classes/PHPExcel/IOFactory.php';	
	require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getDefaultStyle()->getFont()->setName('Times New Roman')->setSize(10);
		$objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);
		
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(9);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(9);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(13);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(13);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(8);
		
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.1);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.2);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(0.75);
		//Tạo tiêu đề
		$objPHPExcel->getActiveSheet()->mergeCells('A1:D1')->setCellValue('A1',"Bộ, tỉnh:");
		$objPHPExcel->getActiveSheet()->mergeCells('A2:D2')->setCellValue('A2',"Đơn vị chủ quản: ".$madv[3]);
		$objPHPExcel->getActiveSheet()->mergeCells('A3:D3')->setCellValue('A3',"Đơn vị sử dụng tài sản: ".$madv[2]);
		$objPHPExcel->getActiveSheet()->mergeCells('A4:D4')->setCellValue('A4',"Mã đơn vị: ".$madv[1]);
		$objPHPExcel->getActiveSheet()->mergeCells('A5:D5')->setCellValue('A5',"Loại hình đơn vị: ".$loaihinhdv);
		$objPHPExcel->getActiveSheet()->getStyle('A1:D5')->getFont()->setBold(true);
		
		$objPHPExcel->getActiveSheet()->mergeCells('G1:L1')->setCellValue('G1','Mẫu số 03­ĐK/TSNN')					
									->getStyle('G1:L1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('G1:L1')->getFont()->setBold(true);
					
		$objPHPExcel->getActiveSheet()->mergeCells('G2:L3')
					->getStyle('K2:L3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->setCellValue('G2',"(Ban hành theo Thông tư số 09/2012/TT­BTC ngày 19/01/2012 của Bộ tài chính)");
			$objPHPExcel->getActiveSheet()->getStyle('G2:L3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$objPHPExcel->getActiveSheet()->mergeCells('A6:L6')
									->setCellValue('A6',"BÁO CÁO KÊ KHAI TÀI SẢN CÓ NGUYÊN GIÁ TỪ 500 TRIỆU ĐỒNG TRỞ LÊN")
									->getStyle('A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setSize(16)->setBold(true);
		$objPHPExcel->getActiveSheet()->getRowDimension(6)->setRowHeight(30);		
		
			//Tiêu đề báo cáo
		$objPHPExcel->getActiveSheet()->getRowDimension(7)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(15);
		$objPHPExcel->getActiveSheet()->getRowDimension(9)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->mergeCells('A7:A9')
			->setCellValue('A7','STT');
		$objPHPExcel->getActiveSheet()->mergeCells('B7:B9')
										->setCellValue('B7','TÀI SẢN');
		$objPHPExcel->getActiveSheet()->mergeCells('C7:C9')
										->setCellValue('C7','KÝ HIỆU');
		$objPHPExcel->getActiveSheet()->mergeCells('D7:D9')
										->setCellValue('D7','NƯỚC SẢN XUẤT');
		$objPHPExcel->getActiveSheet()->mergeCells('E7:E9')
										->setCellValue('E7','NĂM SẢN XUẤT');
		$objPHPExcel->getActiveSheet()->mergeCells('F7:F9')
										->setCellValue('F7','NGÀY THÁNG NĂM SỬ DỤNG');
		$objPHPExcel->getActiveSheet()->mergeCells('G7:I7')
										->setCellValue('G7',"GIÁ TRỊ THEO SỔ KẾ TOÁN \n(ngàn đồng)");
		$objPHPExcel->getActiveSheet()->mergeCells('G8:H8')->setCellValue('G8','Nguyên giá');
		$objPHPExcel->getActiveSheet()->setCellValue('G9','Nguồn NS');
		$objPHPExcel->getActiveSheet()->setCellValue('H9','Nguồn khác');
		$objPHPExcel->getActiveSheet()->mergeCells('I8:I9')->setCellValue('H8','Giá trị còn lại');
		$objPHPExcel->getActiveSheet()->mergeCells('J7:M7')->setCellValue('J7',"HIỆN TRẠNG SỬ DỤNG \n (cái, chiếc)");
		$objPHPExcel->getActiveSheet()->mergeCells('J8:J9')->setCellValue('J8','QLNN');
		$objPHPExcel->getActiveSheet()->mergeCells('K8:L8')->setCellValue('K8','HĐ sự nghiệp');
		$objPHPExcel->getActiveSheet()->setCellValue('K9','Kinh doanh');
		$objPHPExcel->getActiveSheet()->setCellValue('L9','Không KD');
		$objPHPExcel->getActiveSheet()->mergeCells('M8:M9')->setCellValue('M8','HĐ khác');
			
		for($i=1; $i<=12; $i++){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i-1,10,$i);
		}		
		$objPHPExcel->getActiveSheet()->getStyle('A7:M10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			//Kết thúc tiêu đề
		$_bd=11;
		//print_r($_aKQ);
		$stt =0;
		for($i=0;$i<count($_aKQ);$i++){
			$stt++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,$_bd,$stt);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,$_bd,$_aKQ[$i]['tents']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,$_bd,$_aKQ[$i]['mats']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,$_bd,$_aKQ[$i]['nsx']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,$_bd,$_aKQ[$i]['namsx']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,$_bd,ngaythang($_aKQ[$i]['ntsd']));
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,$_bd,$_aKQ[$i]['nNS']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,$_bd,$_aKQ[$i]['nK']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,$_bd,$_aKQ[$i]['gtcl']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,$_bd,$_aKQ[$i]['qlnn']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,$_bd,$_aKQ[$i]['kd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11,$_bd,$_aKQ[$i]['kkd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12,$_bd,$_aKQ[$i]['hdk']);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			if($_aKQ[$i]['nhom'] == 1 )
				$objPHPExcel->getActiveSheet()->getStyle('A'.$_bd.':L'.$_bd)->getFont()->setBold(true);
			$_bd++;
		}
		$_bd--;	
		$objPHPExcel->getActiveSheet()->getStyle('L11:M'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
		$objPHPExcel->getActiveSheet()->getStyle('G11:M'.$_bd)->getNumberFormat()->setFormatCode('#,###');
		$objPHPExcel->getActiveSheet()->getStyle('A7:M'.$_bd)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		//Chữ ký
		$_bd++;	
		$objPHPExcel->getActiveSheet()->mergeCells('G'.$_bd.':L'.$_bd)->setCellValue('K'.$_bd,'Ngày        tháng        năm');
$objPHPExcel->getActiveSheet()->getStyle('G'.$_bd.':L'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('G'.$_bd.':L'.$_bd)->setCellValue('G'.$_bd,'THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ');
$objPHPExcel->getActiveSheet()->getStyle('G'.$_bd.':L'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('G'.$_bd.':L'.$_bd)->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$_bd.':D'.$_bd)
										->setCellValue('A'.$_bd,'XÁC NHẬN CỦA CẤP CÓ THẨM QUYỀN');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$_bd.':D'.$_bd)->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A'.$_bd.':D'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('G'.$_bd.':L'.$_bd)->setCellValue('G'.$_bd,'(Ký, họ tên, đóng dấu)')
										->getStyle('G'.$_bd)->getFont()->setItalic(true);
		$objPHPExcel->getActiveSheet()->getStyle('G'.$_bd.':L'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$_bd.':D'.$_bd)->setCellValue('A'.$_bd,'(Ký, họ tên, đóng dấu)')
										->getStyle('A'.$_bd)->getFont()->setItalic(true);
$objPHPExcel->getActiveSheet()->getStyle('A'.$_bd.':D'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		//Xuất ra file Excel
		taofile($objPHPExcel,"TT09_03DKTSNN.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
		//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));	
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT09_03DKTSNN.xls">Bấm vào đây để tải file về</a>
</body>