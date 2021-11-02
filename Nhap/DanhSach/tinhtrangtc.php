<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('/',$key);
	$matd = $ma[0]."/".$ma[1];
	if($ma[2] == "Tỉnh")
		$sql = "Update tbltrangcap set xemt = 'Đã xem' where TTcap = '".$ma[0]."'";
	else
		$sql = "Update tbltrangcap set xemh = 'Đã xem' where TTcap = '".$ma[0]."'";
	$qrsql = mysqli_query($con,$sql);
		if($qrsql) 
			{	
				header("location: chitiettc.php?id=$matd");				
			}		
?>
