<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql = "Select phantramhaomon,phantram32,namsudung from tbldanhsachqd32 where mataisanqd32 = '".$id."'";	
	$qrsql = mysqli_query($con,$sql);
	$phantramhaomon = "";
	$phantram32 = "";
	$namsudung="";
	while($row=@mysqli_fetch_array($qrsql))
	{
		$phantramhaomon = $row['phantramhaomon'];
		$phantram32 = $row['phantram32'];
		$namsudung = $row['namsudung'];
	}	
	echo"<div class='form-group'>";	
		echo "<label for='field-4' class='col-sm-3 control-label'>Hao mòn TT45:</label>";
		echo "<div class='col-sm-3'>";
		echo "<input name='phantramhaomon' type='text' class='form-control' id ='phantramhaomon' value = '$phantramhaomon'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Hao mòn QĐ32:</label>";
		echo "<div class='col-sm-3'>";
		echo "<input name='phantram32' type='text' class='form-control' id ='phantram32' value = '$phantram32'>";
		echo "</div>";
		echo "<input name='namsudung' type='text' style='display:none' class='form-control' id ='namsudung' value = '$namsudung'>";		
	echo"</div>";	
?>