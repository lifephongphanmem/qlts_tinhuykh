<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM thongtindonvi Where madonvi='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapTK.php");
			}
		else "Xoa khong thanh cong!";
?>
