<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$maid = explode(">",$key);
	$key = $maid[0].">".$maid[1];
	$xoa="DELETE FROM tblthanhphantl Where ttthanhphantl='$maid[2]'";	
	$tt=mysql_query($xoa);
		if($tt) 
			{
				header("location: themtp.php?id=$key");
			}		
?>
