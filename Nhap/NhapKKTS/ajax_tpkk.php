<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sqlct = "Select chucvucanbo from tbldanhsachcb where STTcanbo = ".$id;
	$qrct = mysqli_query($con,$sqlct);
	$tenct = "";
	while($rct=@mysqli_fetch_array($qrct))
	{
		$tenct = $rct['chucvucanbo'];
	}	
	echo"<div class='form-group'>";
		echo"<label for='field-3' class='col-sm-3 control-label'>Chức vụ cán bộ:</label>";
		echo"<div class='col-sm-5'>";			
			echo"<input name='chucvucanbo' type='text' class='form-control' id='chucvucanbo' value = '$tenct'>";
		echo"</div>";
	echo"</div>";
?>