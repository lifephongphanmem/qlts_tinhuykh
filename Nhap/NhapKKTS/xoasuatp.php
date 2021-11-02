<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$maid = explode(">",$key);
	$xoa="DELETE FROM tblthanhphankk Where TTthanhphan='$maid[0]'";	
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: suakk.php?id=$maid[1]");
			}		
?>
