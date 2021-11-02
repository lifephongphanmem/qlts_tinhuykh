<?php require "general.php"; ?>			
<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	$key = explode(">",$id);
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql = "Select ngansach,nguonkhac,ngaysudung,sonamsd from tblqlts where TTQLTS = '".$key[0]."' and ngaysudung <= '".doingay($key[1])."'";	
	$qrsql = mysqli_query($con,$sql);
	$nguyengia = 0;	
	$ngaysudung="";
	$sonamsudung = "";
	while($row=@mysqli_fetch_array($qrsql))
	{
		$nguyengia = kieudouble($row[0]) + kieudouble($row[1]);
		$ngaysudung = $row[2];
		$sonamsudung = $row[3];
	}
	$sql = "Select sotien,tanggiam from tbltanggiam where TTQLTS = '".$key[0]."' and ngaytanggiam <= '".doingay($key[1])."'  and TTTGTS <> ". $key[2];
	$qrsql = mysqli_query($con,$sql);
	$tanggiam=0;
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row[1] === "Tăng")
			$tanggiam += kieudouble($row[0]) ;
		if($row[1] === "Giảm")
			$tanggiam -= kieudouble($row[0]);
	}	
	$haomon = 0;
	$sql = "Select sotien,sodu from tblhaomon where TTQLTS = '".$key[0]."' and namhaomon in (Select Max(namhaomon) from tblhaomon where TTQLTS = '".$key[0]."')";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$haomon += kieudouble($row[0])+ kieudouble($row[1]);
	}	
	$nguyengiatruoc = $nguyengia + $tanggiam;	
	$giatriconlaitruoc = $nguyengiatruoc-$haomon;
	if($giatriconlaitruoc <= 0)
		$giatriconlaitruoc = 0;
	$namtang = substr($key[1],6,4);
	$namsd = substr($ngaysudung,0,4);
	$namcl =0;	
	if(kieudouble($namsd) <= kieudouble($namtang))
		$namcl = kieudouble($sonamsudung) - (kieudouble($namtang) - kieudouble($namsd));	
	if($namcl < 0)
		$namcl = 0;
	echo "<div>";		
		echo "<h4 class='col-sm-10'> Thông tin trước khi tăng </h4>";		
		echo "<label for='field-4' class='col-sm-3 control-label'>Nguyên giá cũ:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='nguyengiatruoc' type='text' readonly class='form-control' data-mask='fdecimal' id='nguyengiatruoc' value = '".dinhdangso($nguyengiatruoc)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Nguyên giá mới:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='nguyengiamoi' type='text' readonly class='form-control' data-mask='fdecimal' id='nguyengiamoi' value = '".dinhdangso($nguyengiatruoc)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>GT còn lại cũ:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='giatriconlaitruoc' type='text' readonly class='form-control' data-mask='fdecimal' id='giatriconlaitruoc' value = '".dinhdangso($giatriconlaitruoc)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>GT còn lại mới:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='giatriconlaimoi' type='text' readonly class='form-control' data-mask='fdecimal' id='giatriconlaimoi' value = '".dinhdangso($giatriconlaitruoc)."'>";
		echo "</div>";
		echo "<label for='field-4' class='col-sm-3 control-label'>Số năm CL cũ:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input name='namsudungconlai' type='text' readonly class='form-control' data-mask='fdecimal' id='namsudungconlai' value = '$namcl'>";			
		echo "</div>";		
		echo "<label for='field-4' class='col-sm-3 control-label'>Số năm CL mới:</label>";
		echo "<div class='col-sm-3'>";
			echo "<input type='text' readonly class='form-control' data-mask='fdecimal' value = '$namcl'>";			
		echo "</div>";
	echo "</div>";
?>