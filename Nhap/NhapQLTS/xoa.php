<form  name='nhapmoi' id='nhapmoi' style="display: none"  method='POST'>
	<input type='text' name='TTQLTS' id='TTQLTS'>
</form>
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	echo $key;
	$xoa="DELETE FROM tblqlts Where TTQLTS='$key'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblhaomon Where TTQLTS='$key'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tbltanggiam Where TTQLTS='$key'";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM tblhientrang Where TTQLTS='$key'";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: NhapQLTS.php");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
