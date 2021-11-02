<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tbldanhsachqd32 Where mataisanqd32='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: DMTS.php");
			}
		else "Xoa khong thanh cong!";
?>
