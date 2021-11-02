<head>
<meta charset='utf-8'>
<?php	
	$DC="";$tungay="";$denngay="";$madv ="";
	if(isset($_POST['create'])){
		$DC = $_POST['phanloai'];
		$tungay = $_POST['nttu'];
		$denngay = $_POST['ntden'];	
		$madv = explode('>',$_POST['MADV']);
		$msdv = $madv[0];			
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
	}
	?>
</head>
<body>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$kq = "";$dckv="";$dtkv=0;$gtskt=0;
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sqld = "Select * From tblqlts Where madonvi Like '$msdv%' and (chitiethinhthai Like 'Quyền sử dụng đất%' or chitiethinhthai Like 'Đất%') and TKVDAT = '" .$DC. "' and ngaysudung <= '".doingay($denngay)."'";
	$queryd = mysqli_query($con,$sqld);
	while($rowd = mysqli_fetch_array($queryd)){
		$sqldht = "Select * From tblhientrang Where TTQLTS = " . $rowd['TTQLTS'];
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
	//Nhà
	//Lấy danh sách đơn vị
	$_sQLdv="Select distinct thongtindonvi.madonvi, thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi=thongtindonvi.madonvi where tblqlts.madonvi Like '$msdv%' and tblqlts.chitiethinhthai Like 'Nhà%' and tblqlts.TKVDAT = '" .$DC . "' and tblqlts.ngaysudung <= '" . doingay($denngay) . "' and tblqlts.TTQLTS in (Select TTQLTS from tbldenghi)";
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
		//
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='cs5017E93B' colspan='29' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;'>$_madv[ten]</td>";
		echo"</tr>";
		//thêm vào mảng $_aKQ để chuyển excel
			$_aKQ[]=array('tents' => $_madv['ten'],
							'caph' => '',
							'namxd' => '',
							'ntsd' => '',
							'ngNS' => '',
							'ngK' => '',
							'gtcl' => '',
							'sotang' => '',
							'dtxd' => '',
							'dtsxd' => '',
							'tslv' => '',
							'cshcsn' => '',
							'lno' => '',
							'ct' => '',
							'bt' => '',
							'blc' => '',
							'k' => '',
							'nhom'=>'0'
			);
		//
		$ngNS = 0; $ngK = 0; $gtcl = 0;
		$tnNS = 0 ; $tNK = 0; $tgtcl = 0;$tdtxd = 0;$tdtsxd=0;$ttslv=0;$tcshcsn=0;$tlno=0;$tct=0;$tbt=0;$tblc=0;$tk=0;
		$sqlts = "Select TTQLTS,tenchitiet,CAPH,namsanxuat,ngaysudung,ngansach,nguonkhac,SOTA,DTXD,TDTSXD From tblqlts where madonvi = '$_madv[ma]' and chitiethinhthai Like 'Nhà%' and TKVDAT = '" .$DC . "' and ngaysudung <= '" . doingay($denngay) . "' and TTQLTS in (Select TTQLTS from tbldenghi)";
		$queryts=mysqli_query($con,$sqlts);	
		while($rowts=mysqli_fetch_array($queryts)){
			$tt = $rowts['TTQLTS'];
				$cl = 0; 
				$sqlhm = "Select * From tblhaomon Where TTQLTS =  " . $rowts['TTQLTS'];
				$queryhm = mysqli_query($con,$sqlhm);
				while ($rowhm = mysqli_fetch_array($queryhm)){
					$cl = $rowhm['sodu'] + $rowhm['sotien'];
				}
				$sqlht = "Select * From tblhientrang Where  TTQLTS = ". $rowts['TTQLTS'];			
				$queryht = mysqli_query($con,$sqlht);		
				$tslv = 0;$cshcsn=0;$lno =0;$ct=0;$bt=0;$blc=0;$k=0;
				$ttslv = 0;$tcshcsn = 0; $tlno =0;$tct=0; $tbt =0;$tblc = 0;$tk  = 0;
				while($rowht = mysqli_fetch_array($queryht)){
					if($rowht['phanloai'] === 'Trụ sở làm việc'){
						$tslv = $rowht['soluong'];
						$tslv = $tslv + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Cơ sở HĐ sự nghiệp'){
						$cshcsn = $rowht['soluong'];
						$tcshcsn = $cshcsn + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Làm nhà ở'){
						$lno = $rowht['soluong'];
						$tlno = $tlno + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Cho thuê'){
						$ct = $rowht['soluong'];
						$tct = $tct + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Bỏ trống'){
						$bt = $rowht['soluong'];
						$tbt =  $tbt + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Bị lấn chiếm'){
						$blc = $rowht['soluong'];
						$tblc = $tblc + $rowht['soluong'];
					}
					if($rowht['phanloai'] === 'Khác'){
						$k = $rowht['soluong'];
						$tk = $tk + $rowht['soluong'];
					}
				}
				$tents = $rowts['tenchitiet'];
				$caph = $rowts['CAPH'];
				$namxd = $rowts['namsanxuat'];
				$ntsd = $rowts['ngaysudung'];
				$ngNS = $rowts['ngansach'];
				$ngK = $rowts['nguonkhac'];
				$gtcl = $rowts['ngansach'] + $rowts['nguonkhac'] - $cl;
				$sotang = $rowts['SOTA'];
				$dtxd = $rowts['DTXD'];
				$dtsxd = $rowts['TDTSXD'];
				$tnNS = $tnNS + $rowts['ngansach'];
				$tNK = $tNK + $rowts['nguonkhac'];		
				$tgtcl = $tgtcl + ($rowts['ngansach'] + $rowts['nguonkhac'] - $cl);
				$tdtxd =$tdtxd + $rowts['DTXD'];
				$tdtsxd = $tdtsxd + $rowts['TDTSXD'];
				//$ttslv = $ttslv;$tcshcsn = $tcshcsn; $tlno =$tlno;$tct=$tct; $tbt =$tbt;$tblc = $tblc;$tk  = dinhdangso($tk);		
				
			//thêm vào mảng $_aKQ để chuyển excel
			$_aKQ[]=array('tents' => $tents,
							'caph' => $caph,
							'namxd' => $namxd,
							'ntsd' => $ntsd,
							'ngNS' => $ngNS,
							'ngK' => $ngK,
							'gtcl' => $gtcl,
							'sotang' => $sotang,
							'dtxd' => $dtxd,
							'dtsxd' => $dtsxd,
							'tslv' => $tslv,
							'cshcsn' => $cshcsn,
							'lno' => $lno,
							'ct' => $ct,
							'bt' => $bt,
							'blc' => $blc,
							'k' => $k,
							'nhom'=>'1'
			);
			//
		}
	
		//$tdtxd = dinhdangso($tdtxd);
		//$tdtsxd = dinhdangso($tdtsxd);
		//$tnNS = dinhdangso($tnNS);$tNK = dinhdangso($tNK);$tgtcl = dinhdangso($tgtcl);
		//$ttslv = dinhdangso($ttslv);$tcshcsn = dinhdangso($tcshcsn); $tlno =dinhdangso($tlno);$tct=dinhdangso($tct); $tbt =dinhdangso($tbt);$tblc = dinhdangso($tblc);$tk  = dinhdangso($tk);
		
		//thêm vào mảng $_aKQ để chuyển excel
		$_aKQ[]=array('tents' => 'Tổng cộng',
						'caph' => '',
						'namxd' => '',
						'ntsd' => '',
						'ngNS' => $tnNS,
						'ngK' => $tNK,
						'gtcl' => $tgtcl,
						'sotang' => 'X',
						'dtxd' => $tdtxd,
						'dtsxd' => $tdtsxd,
						'tslv' => $ttslv,
						'cshcsn' => $tcshcsn,
						'lno' => $tlno,
						'ct' => $tct,
						'bt' => $tbt,
						'blc' => $tblc,
						'k' => $tk,
						'nhom'=>'2'
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
		
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(21);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(9);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(11);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(9);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(6);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(6);
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
									->setCellValue('K1','Mẫu số 01­ĐK/TSNN')					
									->getStyle('K1:Q1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('K1:Q1')->getFont()->setBold(true);
					
		$objPHPExcel->getActiveSheet()->mergeCells('K2:Q3')
					->getStyle('K2:Q3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->setCellValue('K2',"(Ban hành theo Thông tư số 09/2012/TT­BTC ngày 19/01/2012 của Bộ tài chính)");
		
		$objPHPExcel->getActiveSheet()->mergeCells('A6:Q6')
									->setCellValue('A6',"DANH MỤC TRỤ SỞ LÀM VIỆC, CƠ SỞ HOẠT ĐỘNG SỰ NGHIỆP ĐỀ NGHỊ XỬ LÝ")
									->getStyle('A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setSize(16)->setBold(true);
		$objPHPExcel->getActiveSheet()->getRowDimension(6)->setRowHeight(30);
		
		$objPHPExcel->getActiveSheet()->mergeCells('A7:N7')
										->setCellValue('A7','Địa chỉ: '.$_aDat['dckv'])
										->getStyle('A7')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->mergeCells('A8:N8')
										->setCellValue('A8','I - Về đất:')
										->getStyle('A8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->mergeCells('A9:Q9')
										->setCellValue('A9','a - Diện tích khuân viên: '.$_aDat['dtkv'].' m2.');
		$objPHPExcel->getActiveSheet()->mergeCells('A10:Q10')
										->setCellValue('A10','b - Hiện trạng sử dụng: '.$_aDat['kq']);
		$objPHPExcel->getActiveSheet()->mergeCells('A11:Q11')
										->setCellValue('A11','c - Giá trị theo sổ kế toán: '.$_aDat['gtskt'].' ngàn đồng.');
		$objPHPExcel->getActiveSheet()->mergeCells('A12:N12')
										->setCellValue('A12','II - Nhà:')
										->getStyle('A12')->getFont()->setBold(true);
			//Tiêu đề báo cáo
		$objPHPExcel->getActiveSheet()->getRowDimension(13)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->getRowDimension(14)->setRowHeight(15);
		$objPHPExcel->getActiveSheet()->getRowDimension(15)->setRowHeight(30);
		$objPHPExcel->getActiveSheet()->mergeCells('A13:A15')
										->setCellValue('A13','TÀI SẢN');
		$objPHPExcel->getActiveSheet()->mergeCells('B13:B15')
										->setCellValue('B13','CẤP HẠNG');		
		$objPHPExcel->getActiveSheet()->mergeCells('C13:C15')
										->setCellValue('C13','NĂM XÂY DỰNG');
		$objPHPExcel->getActiveSheet()->mergeCells('D13:D15')
										->setCellValue('D13','NGÀY, THÁNG, NĂM SỬ DỤNG');										
		$objPHPExcel->getActiveSheet()->mergeCells('E13:G13')
										->setCellValue('E13',"GIÁ TRỊ THEO SỔ KẾ TOÁN \n(ngàn đồng)");										
		$objPHPExcel->getActiveSheet()->mergeCells('E14:F14')
										->setCellValue('E14','Nguyên giá');
		$objPHPExcel->getActiveSheet()->setCellValue('E15','Nguồn NS');
		$objPHPExcel->getActiveSheet()->setCellValue('F15','Nguồn khác');
		$objPHPExcel->getActiveSheet()->mergeCells('G14:G15')
										->setCellValue('G14','Giá trị còn lại');										
		$objPHPExcel->getActiveSheet()->mergeCells('H13:H15')
										->setCellValue('H13','SỐ TẦNG');
		$objPHPExcel->getActiveSheet()->mergeCells('I13:I15')
										->setCellValue('I13','DIỆN TÍCH XÂY DỰNG (m2)');										
		$objPHPExcel->getActiveSheet()->mergeCells('J13:J15')
										->setCellValue('J13','TỔNG DT SÀN XÂY DỰNG');
		$objPHPExcel->getActiveSheet()->mergeCells('K13:Q13')
										->setCellValue('K13',"HIỆN TRẠNG SỬ DỤNG \n (m2)");										
		$objPHPExcel->getActiveSheet()->mergeCells('K14:K15')
										->setCellValue('K14','Trụ sở làm việc');
		$objPHPExcel->getActiveSheet()->mergeCells('L14:L15')
										->setCellValue('L14','Cơ sở HCSN');										
		$objPHPExcel->getActiveSheet()->mergeCells('M14:Q14')
										->setCellValue('M14','Sử dụng khác');
		$objPHPExcel->getActiveSheet()->setCellValue('M15','Làm nhà ở');
		$objPHPExcel->getActiveSheet()->setCellValue('N15','Cho thuê');
		$objPHPExcel->getActiveSheet()->setCellValue('O15','Bỏ trống');
		$objPHPExcel->getActiveSheet()->setCellValue('P15','Bị lấn chiếm');
		$objPHPExcel->getActiveSheet()->setCellValue('Q15','Khác');		
		for($i=1; $i<=17; $i++){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($i-1,16,$i);
		}		
		$objPHPExcel->getActiveSheet()->getStyle('A13:Q16')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			//Kết thúc tiêu đề
		$_bd=17;
		//print_r($_aKQ);
		for($i=0;$i<count($_aKQ);$i++){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,$_bd,$_aKQ[$i]['tents']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,$_bd,$_aKQ[$i]['caph']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,$_bd,$_aKQ[$i]['namxd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,$_bd,$_aKQ[$i]['ntsd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,$_bd,$_aKQ[$i]['ngNS']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,$_bd,$_aKQ[$i]['ngK']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,$_bd,$_aKQ[$i]['gtcl']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,$_bd,$_aKQ[$i]['sotang']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,$_bd,$_aKQ[$i]['dtxd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,$_bd,$_aKQ[$i]['dtsxd']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,$_bd,$_aKQ[$i]['tslv']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11,$_bd,$_aKQ[$i]['cshcsn']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12,$_bd,$_aKQ[$i]['lno']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,$_bd,$_aKQ[$i]['ct']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14,$_bd,$_aKQ[$i]['bt']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15,$_bd,$_aKQ[$i]['blc']);
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16,$_bd,$_aKQ[$i]['k']);
			$_bd++;
		}
		$_bd--;	
		$objPHPExcel->getActiveSheet()->getStyle('E17:Q'.$_bd)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
		$objPHPExcel->getActiveSheet()->getStyle('E17:Q'.$_bd)->getNumberFormat()->setFormatCode('#,###');
		$objPHPExcel->getActiveSheet()->getStyle('A13:Q'.$_bd)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		//Chữ ký
		$_bd++;	
			
		$objPHPExcel->getActiveSheet()->mergeCells('A'.$_bd.':Q'.$_bd)
										->setCellValue('A'.$_bd,'III - Các hồ sơ, giấy tờ liên quan đến quyền quản lý, sử dụng nhà, đất:   (Giấy chứng nhận quyền sử dụng đất, Hợp đồng thuê đất, giấy tờ khác)')
										->getStyle('A'.$_bd)->getFont()->setBold(true);	
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('J'.$_bd.':Q'.$_bd)
										->setCellValue('J'.$_bd,'Ngày        tháng        năm');
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('J'.$_bd.':Q'.$_bd)
										->setCellValue('J'.$_bd,'THỦ TRƯỞNG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ');
		$_bd++;
		$objPHPExcel->getActiveSheet()->mergeCells('J'.$_bd.':Q'.$_bd)
										->setCellValue('J'.$_bd,'(Ký, họ tên, đóng dấu)')
										->getStyle('J'.$_bd)->getFont()->setItalic(true);			
		//Xuất ra file Excel
		taofile($objPHPExcel,"TT09_01TSNN.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
		//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		//$objWriter->save(str_replace('.php', '.xls', __FILE__));	
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\TT09_01TSNN.xls">Bấm vào đây để tải file về</a>
</body>