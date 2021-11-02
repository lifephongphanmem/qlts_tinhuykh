<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tblphongban Where maphongban='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: DMPB.php");
			}
		else "Xoa khong thanh cong!";
?>
