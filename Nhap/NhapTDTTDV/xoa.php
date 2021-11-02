<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$xoa="DELETE FROM tblthaydoidv Where ttthaydoi='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: NhapTDTTDVchon.php");
			}
		else "Xóa thành công thay đổi!";
?>
