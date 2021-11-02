<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('>',$key);	
	$xoa="DELETE FROM tbltanggiam Where TTTGTS='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblhientrang Where TTTM='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: Nhapsuatanggiam.php?id=$ma[1]");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
