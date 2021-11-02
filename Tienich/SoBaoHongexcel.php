<head>
<meta charset='utf-8'>
<?php
$tungay = "";
$denngay = "";
$madv ="";
if(isset($_POST['create'])){
	$tungay = $_POST['nttu'];
	$denngay = $_POST['ntden'];
	$madv = explode('>',$_POST['MADV']);
	$msdv = $madv[0];
	if($_POST['donvi'] != "")
		$msdv = $_POST['donvi'];
}
	require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
?>
</head>
<body>

<?php
function ngayxuat($macc)
{
	global $con;
	$kq = "";
	$sql = "Select ngayxuat From tblxuatdung where TTQLcc =". $macc;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq = ngaythang($row['ngayxuat']);
	}
	return $kq;
}
function nguyengia($macc)
{
	global $con;
	$kq = 0;
	$sql = "Select dongia From tblxuatdung where TTQLcc =". $macc;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq = ngaythang($row['dongia']);
	}
	return $kq;
}

//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1','Tên đơn vị: '. $madv[2],'B','Time New Roman',11,'T','','E1',0,'');
dulieumotcot($objPHPExcel,'A2','Bộ phận: ','B','Time New Roman',11,'T','','E2',0,'');
dulieumotcot($objPHPExcel,'A3','Mã ĐV có QH với NS: '. $madv[1],'B','Time New Roman',11,'T','','E3',0,'');

dulieumotcot($objPHPExcel,'F1','Mẫu số  C21 - HD','B','Time New Roman',11,'','','H1',0,'');
dulieumotcot($objPHPExcel,'F2','(Ban hành theo QĐ số: 19 - 2006/QĐ/BTC','','Time New Roman',11,'','','H2',0,'');
dulieumotcot($objPHPExcel,'F3','ngày 30/03/2006 và thông tư số 185/2010/TT-','','Time New Roman',11,'','','H3',0,'');
dulieumotcot($objPHPExcel,'F4','BTC ngày 15/11/2010 của Bộ tài chính)','','Time New Roman',11,'','','H4',0,'');

dulieumotcot($objPHPExcel,'A5','GIẤY BÁO HỎNG, MẤT CÔNG CỤ, DỤNG CỤ','B','Time New Roman',16,'','','H5',0,'');
dulieumotcot($objPHPExcel,'A6','Từ ngày: '.$tungay .' đến ngày: '.$denngay,'I','Time New Roman',11,'','','H6',0,'');

dulieumotcot($objPHPExcel,'A7','Số TT','B','Time New Roman',10,'','','',5,'C');
dulieumotcot($objPHPExcel,'B7','Tên công cụ, dụng cụ báo hỏng, mất','B','Time New Roman',10,'','','',40,'C');
dulieumotcot($objPHPExcel,'C7','Đơn vị tính','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'D7','Số lượng báo hỏng, mất','B','Time New Roman',10,'','','',10,'C');
dulieumotcot($objPHPExcel,'E7','Thời gian sử dụng từ ngày ... đến ngày ....','B','Time New Roman',10,'','','',20,'C');
dulieumotcot($objPHPExcel,'F7','Giá trị công cụ, dụng cụ xuất dùng','B','Time New Roman',10,'','','',20,'C');
dulieumotcot($objPHPExcel,'G7','Lý do hỏng, mất','B','Time New Roman',10,'','','',20,'C');
dulieumotcot($objPHPExcel,'H7','Ghi chú','B','Time New Roman',10,'','','',5,'C');

kedong($objPHPExcel,'A7','H7',1,'Mỏng');

$index=8;$tennhomsau = "";$tennhom="";$group1=0;
//Duyệt từng đơn vị
$qrsql = mysqli_query($con,"Select tenchitiet,DVT,ngaythang,soluong,sotien,Lydohong,TTQLcc From tblbaohong where madonvi Like '$msdv%' and ngaythang Between '".doingay($tungay)."' and '".doingay($denngay)."'");
$ar = array(array("A","B",0,0,0,"D"));
$cs = 0;
$tsotien = 0;
while($rowts=mysqli_fetch_array($qrsql))
{
	$ar[$cs][0] = $rowts['tenchitiet'];
	$ar[$cs][1] = $rowts['DVT'];
	$ar[$cs][2] = $rowts['soluong'];
	$ar[$cs][3] = ngayxuat($rowts['TTQLcc'])." đến ". ngaythang($rowts['ngaythang']);
	$ar[$cs][4] = $rowts['sotien'];
	$ar[$cs][5] = $rowts['Lydohong'];
	$cs = $cs + 1;
	$tsotien = $tsotien + $rowts['sotien'];
}
$stt = 0;
for($i=0;$i<$cs;$i++)
{
	$stt += 1;
	$tenct = $ar[$i][0];
	$dvt=$ar[$i][1];
	$sl=$ar[$i][2];
	$tg=$ar[$i][3];
	$st=dinhdangso($ar[$i][4]);
	$lydo=$ar[$i][5];

	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $stt)
		->setCellValue('B' . $index, $tenct)
		->setCellValue('C' . $index, $dvt)
		->setCellValue('D' . $index, $sl)
		->setCellValue('E' . $index, $tg)
		->setCellValue('F' . $index, $st)
		->setCellValue('G' . $index, $lydo)
		->setCellValue('H' . $index, '');
	$index++;
}
$tsotien = dinhdangso($tsotien);

$objPHPExcel->setActiveSheetIndex(0)
	->setCellValue('A' . $index, '')
	->setCellValue('B' . $index, 'Cộng')
	->setCellValue('C' . $index, 'X')
	->setCellValue('D' . $index, 'X')
	->setCellValue('E' . $index, 'X')
	->setCellValue('F' . $index, $tsotien)
	->setCellValue('G' . $index, 'X')
	->setCellValue('H' . $index, 'X');
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A8','H'.($index),$stt,'Time New Roman',10);
dinhdangle($objPHPExcel,'A8','A'.($index),$stt,'');
dinhdangle($objPHPExcel,'B8','B'.($index),$stt,'T');
dinhdangle($objPHPExcel,'C8','D'.($index),$stt,'P');
dinhdangle($objPHPExcel,'E8','E'.($index),$stt,'T');
dinhdangle($objPHPExcel,'F8','F'.($index),$stt,'P');
dinhdangle($objPHPExcel,'G8','G'.($index),$stt,'T');
dinhdangsoxls($objPHPExcel,'F8','F'.($index),$stt,'BT');
dinhdangxuongdong($objPHPExcel,'A8','H'.($index),$stt);
kedong($objPHPExcel,'A8','H'.($index),$stt,'Mỏng');
$index++;
dulieumotcot($objPHPExcel,'F'.$index,'........, ngày ..... tháng .... năm ......','I','Time New Roman',11,'','','H'.$index ,0,'C');
dulieumotcot($objPHPExcel,'A'.($index + 1),'Người lập biểu','B','Time New Roman',11,'','','C'.($index + 1),0,'C');
dulieumotcot($objPHPExcel,'D'.($index + 1),'Ý kiến của người phụ trách bộ phận sử dụng','B','Time New Roman',11,'','','E'.($index + 1),0,'C');
dulieumotcot($objPHPExcel,'F'.($index + 1),'Thủ trưởng đơn vị','B','Time New Roman',11,'','','H'.($index + 1),0,'');

dulieumotcot($objPHPExcel,'A'.($index + 2),'(Ký, họ tên)','I','Time New Roman',11,'','','C'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'D'.($index + 2),'(Ký, họ tên)','I','Time New Roman',11,'','','E'.($index + 2),0,'');
dulieumotcot($objPHPExcel,'F'.($index + 2),'(Ký, họ tên, đóng dấu)','I','Time New Roman',11,'','','H'.($index + 2),0,'');

dulieumotcot($objPHPExcel,'A'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'D'.($index + 6),'','B','Time New Roman',11,'','','',0,'');
dulieumotcot($objPHPExcel,'F'.($index + 6),'','B','Time New Roman',11,'','','H'.($index + 6),0,'');
taofile($objPHPExcel,"SoBaoHong.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\SoBaoHong.xls">Bấm vào đây để tải file về</a>
</body>