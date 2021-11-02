<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];	
	$ma = explode('>',$key);	
	$xoa="DELETE FROM tbltrangcap Where TTcap='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapDNTC.php");
			}
		else "Xoa khong thanh cong!";
?>
