<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sqlct = "Select mahuyen,tenhuyen from tbldmtinhhuyenxa where matinh = '".$id."'";
	$qrct = mysqli_query($con,$sqlct);
	echo "<div id = divhuyen class='form-group'>";
			echo "<div class='col-sm-115'><select name='mahuyen' id='mahuyen' class='form-control'  type='text'>	";
		echo"<option value=''></option>";		
	while($rct=@mysqli_fetch_array($qrct))
	{
		$ten = $rct['tenhuyen'];
		$mahuyen=$rct['mahuyen'];	
		echo "<option value='$mahuyen'>$ten</option>";	
	}	
	echo "</select></div>	";	
	echo "</div>";
?>



