<?php
include ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="Delete FROM tbldanhsachqd32 Where mataisanqd32='$key'";		
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: DMCC.php");
			}
		else "Xoa khong thanh cong!";
?>
