<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];	
	$ma = explode('>',$key);
	$ngaythang = date('Y-m-d');

	$mataisan = "";
	$tengoi = "";
	$sotien = 0;
	$tentaisan = "";
	$chitiethinhthai = "";
	$donvitinh = "";
	$soluong = 0;
	$sql = "Select mataisan,tengoi,sotien,tentaisan,chitiethinhthai,donvitinh,soluong from tbltrangcap".
		" where TTcap = ". $ma[0];
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$mataisan = $row[0];
		$tengoi = $row[1];
		$sotien = $row[2];
		$tentaisan = $row[3];
		$chitiethinhthai = $row[4];
		$donvitinh = $row[5];
		$soluong = $row[6];
	}
	$namhm = kieudouble(date('Y'))-1;
function IDTS()
{
	global $con;
	$kq="";
	global $ma;
	$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$ma[1]'";
	$qrsql= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq = $row[0];
	}
	return $kq;
}
for($i =0; $i<$soluong; $i++) {
	$sql = "INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,ngansach,DTKV,chitiethinhthai,XOA,madonvi,xemt,xemh)"
		. " Values('$mataisan','$tentaisan','$tengoi','$ngaythang','$ngaythang',$sotien,'1','$chitiethinhthai','K','$ma[1]','Chưa xem','Chưa xem')";
	$kq = mysqli_query($con, $sql);
	$IDTS = IDTS();
	$sql = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi,TTTS) values('$ngaythang',$IDTS,$namhm,0,0,0,'$ma[1]',$IDTS)";
	$kq = mysqli_query($con, $sql);

	if ($chitiethinhthai == "Nhà" || $chitiethinhthai == "Vật kiến trúc" || $chitiethinhthai == "Quyền sử dụng đất") {
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Trụ sở làm việc','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Cơ sở HĐ sự nghiệp','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Làm nhà ở','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Cho thuê','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Bỏ trống','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Bị lấn chiếm','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTS) values('$ngaythang',$IDTS,'Khác','m2',0,$IDTS)";
		$kq = mysqli_query($con, $sql);
	} else {
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,soluong,madonvi,TTTS) values('$ngaythang',$IDTS,'1','$ma[1]',$IDTS)";
		$kq = mysqli_query($con, $sql);
	}
}



$xoa="Update tbltrangcap set chuyents = 'Đã chuyển'  Where TTcap='$ma[0]'";
$tt=mysqli_query($con,$xoa);
if($kq)
	{
		header("location: NhapDNTC.php?id=$ma[1]");
	}
else "Chuyển tài sản không thành công!";
?>
