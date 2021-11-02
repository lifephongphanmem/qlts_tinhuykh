<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql="select tenphongban from tblphongban where madonvi = '$id'";
		$sql1=mysqli_query($con,$sql);
		echo"<div  class='col-sm-4'>";
			echo"<select name='noidung' class='form-control' id='noidung'>";
			echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
				while ($data=mysqli_fetch_row($sql1))
		{
			echo "<option value='".$data[0]."'>".$data[0]."</option>";
		}
			echo"</select>";
		echo"</div>";
?>