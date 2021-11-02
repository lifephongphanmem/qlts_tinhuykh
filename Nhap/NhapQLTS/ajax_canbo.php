
<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	$tenphongban = str_replace('_', ' ', $id);
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sql="select hoten from tbldanhsachcb where tenphonglv = '$tenphongban'";
	$sql1=mysqli_query($con,$sql);
	echo"<div id='canbo'  class='col-sm-125'>";
	echo"<select name='nguoisudung' class='form-control' id='nguoisudung'>";
	echo "<option  value='' selected>---Người sử dụng---</option>";
	while ($data=mysqli_fetch_row($sql1))
	{
		echo "<option  value='".$data[0]."'>".$data[0]."</option>";
	}
	echo"</select>";
	echo"</div>";
?>