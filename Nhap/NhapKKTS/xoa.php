<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tblkiemken Where TTkiemke='$key'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblkiemke Where TTkiemke='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapKKTS.php");
			}		
?>
