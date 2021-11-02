<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('>',$key);	
	$xoa="DELETE FROM tblqlts Where TTQLTS='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblhaomon Where TTQLTS='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tbltanggiam Where TTQLTS='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblhientrang Where TTQLTS='$ma[0]'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: NhapQLTS.php");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
