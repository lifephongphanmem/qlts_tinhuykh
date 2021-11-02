<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('>',$key);	
	$xoa="DELETE FROM tblqlcc Where TTQLcc='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblxuatdung Where TTQLcc='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblbaohong Where TTQLcc='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
header("location: NhapQLCC.php");
?>
