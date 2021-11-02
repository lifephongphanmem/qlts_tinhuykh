<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$mkm = md5(123456);
	$sql="Update thongtindonvi set matkhau = '$mkm' Where madonvi='$key'";
	$tt=mysqli_query($con,$sql);
		if($tt) 
			{
				header("location: DMDV.php");
			}
		else "Xoa khong thanh cong!";
?>
