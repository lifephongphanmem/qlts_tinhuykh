<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$key = explode(">",$key);
	$sql = "Update tblqlts set XOA = 'K' where TTQLTS = $key[1]";
	$qrsql = mysqli_query($con,$sql);
	$sql = "Delete  From tbltanggiam where (lydotanggiam = 'Thanh lý' OR lydotanggiam = 'Điều chuyển ngoài hệ thống') and TTQLTS = $key[1]";
	$qrsql = mysqli_query($con,$sql);
	$xoa="DELETE FROM tbldenghi Where TTdenghi=$key[0]";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapDNXL.php");
			}
		else "Xoa khong thanh cong!";
?>
