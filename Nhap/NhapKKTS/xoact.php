<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode(">",$key);	
	$xoa="DELETE FROM tblkiemken Where TTkiemken=".$ma['0'];
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapKKTSct.php?id=".$ma['1']);
			}		
?>
