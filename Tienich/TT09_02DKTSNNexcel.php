<head>
<meta charset='utf-8'>
</head>
<body>
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$tungay ="";$denngay ="";$madv ="";
$loaihinhdv = "";
if(isset($_POST['create'])){		
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];	
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
		$sql = "Select loaihinh from thongtindonvi";			
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{				
			$kq= $row['loaihinh'];
		}
		return $kq;
	}
?>
	<?php
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv".
		" from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi".
		" where tblqlts.madonvi Like '$msdv%' and chitiethinhthai Like 'Phương tiện vận tải%' and ngaysudung <= '" . doingay($denngay) . "' and TTQLTS not in (Select TTQLTS from tbldenghi where ngaythang <='" . doingay($denngay) . "' and (hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển'))";
	$_qdv=mysqli_query($con,$_sQLdv);
	$_aDV=array();
	while($_r=mysqli_fetch_array($_qdv)){
		$_aDV[]=array('ma'=>$_r['madonvi'],
						'ten'=>$_r['tendv']	
				);
	}
	
	//Tạo mảng chứa kết quả
	$_aKQ= array();
	$tnNS = 0;
	$tnK =0;
	$tgtcl =0;
	$tqlnn =0;
	$tkd =0;
	$tkkd =0;
	$thdk =0;
	//Duyệt từng đơn vị
	foreach($_aDV as $_madv){
		//Tên đơn vị			
		//thêm vào mảng $_aKQ để chuyển excel
		$_aKQ[]=array('tents' =>  $_madv['ten'],
							'nh' => '',
							'bks' => '',
							'scntt' => '',
							'nsx' => '',
							'tgsx' =>'',
							'ntsd' => '',
							'csxe' => '',
							'cdsd' => '',
							'ngxe' => '',
							'nNS' => '',
							'nK' => '',
							'gtcl' => '',
							'qlnn' => '',
							'kd' => '',
							'kkd' => '',
							'hdk' => '',
							'nhom'=>'1'
			);
		//
		$sqlts = "Select * From tblqlts Where madonvi = '$_madv[ma]' and chitiethinhthai Like 'Phương tiện vận tải%' and".
			" (CASE WHEN year(ngaythangchuyen) > 0 THEN ngaythangchuyen <= '" . doingay($denngay)."'  ELSE ngaysudung <= '" . doingay($denngay)."' END) ".
			" and TTQLTS not in (select TTQLTS from tbldenghi where (hinhthuc  = 'Bán' or hinhthuc  = 'Thanh lý' or hinhthuc  = 'Điều chuyển') and ngaythang < '" . doingay($tungay) . "')";
		$queryts = mysqli_query($con,$sqlts);
		while($rowts = mysqli_fetch_array($queryts)){
			$sqlht = "Select * from tblhientrang Where TTQLTS = " . $rowts['TTQLTS'];
			$queryht = mysqli_query($con,$sqlht);
			$qlnn = 0;$kd = 0; $kkd = 0; $hdk = 0;
			$tnNS = 0; $tnK = 0;$tgtcl = 0;		
			$tqlnn = 0;$tkd = 0; $tkkd = 0; $thdk = 0;		
			while($rowht = mysqli_fetch_array($queryht)){
				if($rowht['phanloai'] === 'QLNN'){
					$qlnn = $rowht['soluong'];
					$tqlnn = $tqlnn + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Kinh doanh'){
					$kd = $rowht['soluong'];
					$tkd = $tkd + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Không KD'){
					$kkd = $rowht['soluong'];
					$tkkd = $tkkd + $rowht['soluong'];
				}
				if($rowht['phanloai'] === 'Khác'){
					$hdk = $rowht['soluong'];
					$thdk = $thdk + $rowht['soluong'];
				}
			}
			//Còn lại 
			$cl = 0 ;
			$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
			$queryhm = mysqli_query($con,$sqlhm);
			while ($rowhm = mysqli_fetch_array($queryhm)){
				$cl = $rowhm['sodu'] + $rowhm['sotien'];
			}		
			//Tăng giảm
			$sqltg = "Select * From tbltanggiam where TTQLTS = " . $rowts['TTQLTS'];
			$querytg =  mysqli_query($con,$sqltg);
			$tg = 0;
			while ($rowtg = mysqli_fetch_array($querytg)){
				if($rowtg['tanggiam'] == 'Tăng'){
					$tg = $tg + $rowtg['sotien'];
				}else{
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
			$nNS = $rowts['ngansach'];
			$tnNS = $tnNS + $nNS;
			$nK = $rowts['nguonkhac'];
			$tnK = $tnK + $nK;
			$gtcl = $nNS +$nK + $tg - $cl;
			$tgtcl = $tgtcl + $gtcl;
			
			//định dạng số
			//$qlnn = dinhdangso($qlnn);$kd = dinhdangso($kd); $kkd = dinhdangso($kkd); $hdk = dinhdangso($hdk);
			//$nNS = dinhdangso($nNS);
			//$nK = dinhdangso($nK);
			//$gtcl = dinhdangso($gtcl);
			
			//$cl = dinhdangso($cl);
			
			//thêm vào mảng $_aKQ để chuyển excel
			$_aKQ[]=array('tents' => $tents,
							'nh' => $nh,
							'bks' => $bks,
							'scntt' => $scntt,
							'nsx' => $nsx,
							'tgsx' => $tgsx,
							'ntsd' => $ntsd,
							'csxe' => $csxe,
							'cdsd' => $cdsd,
							'ngxe' => $ngxe,
							'nNS' => $nNS,
							'nK' => $nK,
							'gtcl' => $gtcl,
							'qlnn' => $qlnn,
							'kd' => $kd,
							'kkd' => $kkd,
							'hdk' => $hdk,
							'nhom'=>'0'
			);
		//
		}
		//$tnNS = dinhdangso($tnNS); $tnK = dinhdangso($tnK);$tgtcl = dinhdangso($tgtcl);		
		//$tqlnn = dinhdangso($tqlnn);$tkd = dinhdangso($tkd); $tkkd = dinhdangso($tkkd); $thdk = dinhdangso($thdk);
		$_aKQ[]=array('tents' => 'Tổng cộng',
							'nh' => '',
							'bks' => '',
							'scntt' => '',
							'nsx' => '',
							'tgsx' => '',
							'ntsd' => '',
							'csxe' => '',
							'cdsd' => '',
							'ngxe' => '',
							'nNS' => $tnNS,
							'nK' => $tnK,
							'gtcl' => $tgtcl,
							'qlnn' => $tqlnn,
							'kd' => $tkd,
							'kkd' => $tkkd,
							'hdk' => $thdk,
							'nhom'=>'0'
			);
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
		
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(7);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(8);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(6);
		
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.1);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.2);
		$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(0.75);
		//Tạo tiêu đề
		$objPHPExcel->getActiveSheet()->mergeCells('A1:F1')
									->setCellValue('A1',"Bộ, tỉnh:");		
		$objPHPExcel->getActiveSheet()->mergeCells('A2:F2')
									->setCellValue('A2',"Đơn vị chủ quản:");
		$objPHPExcel->getActiveSheet()->mergeCells('A3:F3')
									->setCellValue('A3',"Đơn vị sử dụng tài sản:");
		$objPHPExcel->getActiveSheet()->mergeCells('A4:F4')
									->setCellValue('A4',"Mã đơn vị:");
		$objPHPExcel->getActiveSheet()->mergeCells('A5:F5')
									->setCellValue('A5',"Loại hình đơn vị:");		
		$objPHPExcel->getActiveSheet()->getStyle('A1:F5')->getFont()->setBold(true);
		
		$objPHPExcel->getActiveSheet()->mergeCells('K1:Q1')
									->setCellValue('K1','Mẫu số 02­ĐK/TSNN')					
									->getStyle('K1:Q1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('K1:Q1')->getFont()->setBold(true);
					
		$objPHPExcel->getActiveSheet()->mergeCells('K2:Q3')
					->getStyle('K2:Q3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->setCellValue('K2',"(Ban hành theo Thông tư số 09/2012/TT­BTC ngày 19/01/2012 của Bộ tài chính)");
		
		$objPHPExcel->getActiveSheet()->mergeCells('A6:Q6')
									->setCellValue('A6',"BÁO CÁO KÊ KHAI XE Ô TÔ")
									->getStyle('A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setSize(16)->setBold(true);
		$objPHPExcel->getActiveSheet()->getRowDimension(6)->setRowHeight(30);		
		
			//Tiêu đề báo cáo
		$objPHPExcel->getActiveSheet()->getRowDimension(7)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(15);
		$objPHPExcel->getActiveSheet()->getRowDimension(9)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->mergeCells('A7:A9')
										->setCellValue('A7','TÀI SẢN');										
		$objPHPExcel->getActiveSheet()->mergeCells('B7:B9')
										->setCellValue('B7','NHÃN HIỆU');		
		$objPHPExcel->getActiveSheet()->mergeCells('C7:C9')
										->setCellValue('C7','BIỂN KIỂM SOÁT');										
		$objPHPExcel->getActiveSheet()->mergeCells('D7:D9')
										->setCellValue('D7','SỐ CHỖ NGỒI/ TRỌNG TẢI');										
		$objPHPExcel->getActiveSheet()->mergeCells('E7:E9')
										->setCellValue('E7','NƯỚC SẢN XUẤT');
		$objPHPExcel->getActiveSheet()->mergeCells('F7:F9')
										->setCellValue('F7','NĂM SẢN XUẤT');
		$objPHPExcel->getActiveSheet()->mergeCells('G7:G9')
										->setCellValue('G7','NGÀY THÁNG NĂM SỬ DỤNG');
		$objPHPExcel->getActiveSheet()->mergeCells('H7:H9')
										->setCellValue('H7','CÔNG SUẤT XE');
		$objPHPExcel->getActiveSheet()->mergeCells('I7:I9')
										->setCellValue('I7','CHỨC DANH SỬ DỤNG XE');
		$objPHPExcel->getActiveSheet()->mergeCells('J7:J9')
										->setCellValue('J7','NGUỒN GỐC XE');										
		$objPHPExcel->getActiveSheet()->mergeCells('K7:M7')
										->setCellValue('K7',"GIÁ TRỊ THEO SỔ KẾ TOÁN \n(ngàn đồng)");										
		$objPHPExcel->getActiveSheet()->mergeCells('K8:L8')
										->setCellValue('K8','Nguyên giá');										
		$objPHPExcel->getActiveSheet()->setCellValue('K9','Nguồn NS');
		$objPHPExcel->getActiveSheet()->setCellValue('L9','Nguồn khác');		
		$objPHPExcel->getActiveSheet()->mergeCells('M8:M9')
										->setCellValue('M8','Giá trị còn lại');											
		$objPHPExcel->getActiveSheet()->mergeCells('N7:Q7')
										->setCellValue('N7',"HIỆN TRẠNG SỬ DỤNG \n (chiếc)");										
		$objPHPExcel->getActiveSheet()->mergeCells('N8:N9')
										->setCellValue('N8','QLNN');										
		$objPHPExcel->getActiveSheet()->mergeCells('O8:P8')
										->setCellValue('O8','HĐ sự nghiệp');										
		$objPHPExcel->getActiveSheet()->setCellValue('O9','Kinh doanh');
		$objPHPExcel->getActiveSheet()->setCellValue('P9','Không KD');
		$objPHPExcel->getActiveSheet()->mergeCells('Q8:Q9')->setCellValue('Q8','HĐ khác');
			
		for($i=1; $i<=17; $i++){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i-1,10,$i);
		}		
		$objPHPExcel->getActiveSheet()->getStyle('A7:Q10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			//Kết thúc tiêu đề
		$_bd=11;
		//print_r($_aKQ);
		for($i=0;$i<count($_aKQ);$i++){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,$_bd,$_aKQ[$i]['tents']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,$_bd,$_aKQ[$i]['nh']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,$_bd,$_aKQ[$i]['bks']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,$_bd,$_aKQ[$i]['scntt']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,$_bd,$_aKQ[$i]['nsx']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,$_bd,$_aKQ[$i]['tgsx']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,$_bd,$_aKQ[$i]['ntsd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,$_bd,$_aKQ[$i]['csxe']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,$_bd,$_aKQ[$i]['cdsd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,$_bd,$_aKQ[$i]['ngxe']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,$_bd,$_aKQ[$i]['nNS']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11,$_bd,$_aKQ[$i]['nK']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12,$_bd,$_aKQ[$i]['gtcl']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,$_bd,$_aKQ[$i]['qlnn']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14,$_bd,$_aKQ[$i]['kd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15,$_bd,$_aKQ[$i]['kkd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16,$_bd,$_aKQ[$i]['hdk']);
			$_bd++;
		}
		$_bd--;	
		$objPHPExcel->getActiveSheet()->getStyle('K10:Q'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
		$objPHPExcel->getActiveSheet()->getStyle('K10:Q'.$_bd)->getNumberFormat()->setFormatCode('#,###');
		$objPHPExcel->getActiveSheet()->getStyle('A7:Q'.$_bd)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		//Chữ ký
		$_bd++;	
		$objPHPExcel->getActiveSheet()->mergeCells('K'.$_bd.':Q'.$_bd)
										->setCellValue('K'.$_bd,'Ngày        tháng        năm');
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('K'.$_bd.':Q'.$_bd)
										->setCellValue('K'.$_bd,'THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ');
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$_bd.':E'.$_bd)
										->setCellValue('A'.$_bd,'XÁC NHẬN CỦA CẤP CÓ THẨM QUYỀN');
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('K'.$_bd.':Q'.$_bd)
										->setCellValue('K'.$_bd,'(Ký, họ tên, đóng dấu)')
										->getStyle('K'.$_bd)->getFont()->setItalic(true);
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$_bd.':E'.$_bd)
										->setCellValue('A'.$_bd,'(Ký, họ tên, đóng dấu)')
										->getStyle('A'.$_bd)->getFont()->setItalic(true);
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