<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('/',$key);
	$matd = $ma[0]."/".$ma[1];
	if($ma[2] == "Tỉnh")
		$sql = "Update tbldenghi set xemt = 'Đã xem' where TTdenghi = '".$ma[0]."'";
	else
		$sql = "Update tbldenghi set xemh = 'Đã xem' where TTdenghi = '".$ma[0]."'";
	$qrsql = mysqli_query($con,$sql);
		if($qrsql) 
			{	
				header("location: chitietxl.php?id=$matd");				
			}		
?>
