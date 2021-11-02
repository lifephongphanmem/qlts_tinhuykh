<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$ma = explode('/',$key);
	$matd = $ma[0]."/".$ma[1];
	if($ma[3] == "Tỉnh")		
		$sql = "Update tblqlts set xemt = 'Đã xem' where TTQLTS = '".$ma[0]."'";	
	else
		$sql = "Update tblqlts set xemh = 'Đã xem' where TTQLTS = '".$ma[0]."'";
	$qrsql = mysqli_query($con,$sql);
		if($qrsql) 
			{		
				switch ($ma[2]) {
					case ts:
						header("location: chitiet.php?id=$matd");
						break;
					case ts5:
						header("location: chitiet500.php?id=$matd");
						break;
					case dat:
						header("location: chitietdat.php?id=$matd");
						break;	
					case xe:
						header("location: chitietxe.php?id=$matd");
						break;
					case ptvt:
						header("location: chitietvtk.php?id=$matd");
						break;
					case nha:
						header("location: chitietnha.php?id=$matd");
						break;
					case vkt:
						header("location: chitietvkt.php?id=$matd");
						break;
					default:
						break;
				}					
			}		
?>
