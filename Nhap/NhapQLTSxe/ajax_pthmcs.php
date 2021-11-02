<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql = "Select phantramhaomon,phantram32 from tbldanhsachqd32 where mataisanqd32 = '".$id."'";	
	$qrsql = mysqli_query($con,$sql);
	$phantramhaomon = "";
	$phantram32 = "";
	while($row=@mysqli_fetch_array($qrsql))
	{
		$phantramhaomon = $row['phantramhaomon'];
		$phantram32 = $row['phantram32'];
	}	
	echo"<div class='form-group' >";		
		echo"<div class='col-sm-5'>";			
			echo"<input name='phantramhaomoncs' type='text'  class='form-control' id='phantramhaomon' value = '$phantramhaomoncs'>";
			echo"<input name='phantram32cs' type='text' class='form-control' id='phantram32' value = '$phantram32cs'>";
		echo"</div>";
	echo"</div>";	
?>