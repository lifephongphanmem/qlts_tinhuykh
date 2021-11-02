<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('>',$key);	
	$xoa="DELETE FROM tblhaomon Where TThaomon='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: Nhapsuahaomon.php?id=$ma[1]");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
