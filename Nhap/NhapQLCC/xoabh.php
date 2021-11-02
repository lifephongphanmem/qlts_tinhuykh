<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('>',$key);
	$id = $ma[1].">".$ma[2];
	$xoa="DELETE FROM tblbaohong Where TTbaohong='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: Nhapsuabaohong.php?id=$id");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
