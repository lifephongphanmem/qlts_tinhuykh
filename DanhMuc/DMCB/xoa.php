<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tbldanhsachcb Where STTcanbo='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: DMCB.php");
			}
		else "Xoa khong thanh cong!";
?>
