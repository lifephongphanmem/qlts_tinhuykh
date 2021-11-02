<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id'];	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
?>
	<div id="xa" class="col-sm-12"><label>Đơn vị:</label><select  name="donvi" class="form-control"  type="text">
			<option value=""></option>				
			<?php						
				$ms = explode(">",$madv);				
				$sqldv = "Select madonvi,tendv from thongtindonvi where madonvi like '$id%' and length(madonvi) >=16 ";					
				$querydv=mysqli_query($con,$sqldv);
				while($rowdv=mysqli_fetch_array($querydv))
				{	
					echo "<option value='$rowdv[0]'>$rowdv[1]</option>";	
				}	
			?>			
			</select>
		</div>		