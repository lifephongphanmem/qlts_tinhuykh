<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$id=$_GET["id"];
	$key = explode(">",$id);
	$xoa="DELETE FROM tblxuatdung Where ttxuatdung='$key[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: Nhapxuatdungmoi.php?id=".$key[1]);
			}
		else "Có lỗi trong quá trình xóa!";	
?>
