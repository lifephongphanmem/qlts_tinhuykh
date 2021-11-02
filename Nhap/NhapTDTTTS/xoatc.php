<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tblthaydoi Where ttts='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapTDTTTS.php");
			}
		else "Xóa không thành công thay đổi!";
?>
