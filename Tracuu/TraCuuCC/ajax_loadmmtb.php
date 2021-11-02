<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	

	require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");			
	echo "<div >"; 
						
						$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Máy móc, thiết bị' ";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-3' class='col-sm-5'>";
									echo"<select name='tentaisanmmtb' class='form-control' id='tentaisanmmtb'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
		
										echo "</select>";
									echo "</div>	";				
	echo "</div>";
?>
