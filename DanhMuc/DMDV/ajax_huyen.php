<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sqlct = "Select mahuyen,tenhuyen from tbldmtinhhuyenxa where matinh = '".$id."'";
	$qrct = mysqli_query($con,$sqlct);
	echo"<div id = sthuyen class='form-group'>";
		echo"<div class='col-sm-12.'><select  name='huyen' class='form-control'  type='text'>"	;
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
