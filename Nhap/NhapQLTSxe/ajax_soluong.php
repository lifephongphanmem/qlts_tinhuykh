<?php require "general.php"; ?>			
<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	$key = explode(">",$id);
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql = "Select DTKV,DTXD,TDTSXD from tblqlts where TTQLTS = '".$key[0]."' and ngaysudung <= '".doingay($key[1])."'";		
	$qrsql = mysqli_query($con,$sql);
	$DTXD = 0;	
	$TDTSXD=0;	
	while($row=@mysqli_fetch_array($qrsql))
	{
		$DTXD = kieudouble($row[0]) + kieudouble($row[1]);
		$TDTSXD =  kieudouble($row[2]);		
	}	
	echo "<div >";		
		echo "<h4 class='col-sm-10'> Thông tin về diện tích, số lượng</h4>";		
		echo "<label for='field-4' class='col-sm-3 control-label'>Diện tích cũ:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='dientichtruoc' type='text' readonly class='form-control' data-mask='fdecimal' id='dientichtruoc' value = '".dinhdangso($DTXD)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Diện tích tăng:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='soluong' type='text' class='form-control' data-mask='fdecimal' id='soluong' >";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Tổng diện tích cũ:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='tongdientichtruoc' type='text' readonly class='form-control' data-mask='fdecimal' id='tongdientichtruoc' value = '".dinhdangso($TDTSXD)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Tổng diện tích tăng:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='tongdientich' type='text' class='form-control' data-mask='fdecimal' id='tongdientich'>";
		echo "</div>";
	echo "</div>";
?>