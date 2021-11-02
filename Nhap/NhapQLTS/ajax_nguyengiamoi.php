<?php require "general.php"; ?>			
<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id_a'];
	$key = explode(">",$id);
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
	$sql = "Select  ngansach,nguonkhac,ngaysudung,sonamsd,DTXD,TDTSXD from tblqlts where TTQLTS = '".$key[0]."' and ngaysudung <= '".doingay($key[1])."'";	
	$qrsql = mysqli_query($con,$sql);
	$TDTSXD=0;
	$DTXD=0;
	$nguyengia = 0;	
	$ngaysudung="";	
	$sonamsudung = "";	
	while($row=@mysqli_fetch_array($qrsql))
	{
		$nguyengia = kieudouble($row["ngansach"]) + kieudouble($row["nguonkhac"]);
		$ngaysudung = $row["ngaysudung"];
		$sonamsudung = $row["sonamsd"];
		$DTXD = kieudouble($row["DTXD"]);
		$TDTSXD = kieudouble($row["TDTSXD"]);
	}
	if($id != "")
	$sql = "Select sotien,tanggiam,soluong,tongdientich from tbltanggiam where TTQLTS = '".$key[0]."' and ngaytanggiam <= '".doingay($key[1])."' and TTTGTS <> '".$key[2]."'";
	else
		$sql = "Select sotien,tanggiam,soluong,tongdientich from tbltanggiam where TTQLTS = '".$key[0]."' and ngaytanggiam <= '".doingay($key[1])."'";
	$qrsql = mysqli_query($con,$sql);
	$tanggiamng=0;
	$tangDTXD=0;
	$tangTDTSXD=0;
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row[1] === "Tăng")
		{
			$tanggiamng += kieudouble($row[0]) ;
			$tangDTXD += kieudouble($row["soluong"]);
			$tangTDTSXD += kieudouble($row["tongdientich"]);
		}			
		if($row[1] === "Giảm")
		{
			$tanggiamng -= kieudouble($row[0]);
			$tangDTXD -= kieudouble($row["soluong"]);
			$tangTDTSXD -= kieudouble($row["tongdientich"]);
		}			
	}	
	$haomon = 0;
	$sql = "Select sotien,sodu,TTTS from tblhaomon where TTQLTS = '".$key[0]."' and ngaythang <= '".doingay($key[1]).
		"' and namhaomon >= (select namhaomon from tblhaomon where TTTS = $key[0])";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row["TTTS"] != 0)
			$haomon += kieudouble($row["sotien"])+ kieudouble($row["sodu"]);
		else
			$haomon += kieudouble($row["sotien"]);
	}	
	$dientichtruoc = $DTXD + $tangDTXD;
	$tongdientichtruoc = $TDTSXD + $tangTDTSXD;
	$nguyengiatruoc = $nguyengia + $tanggiamng;	
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
	echo "<fieldset>";			
			echo "<legend>Thông tin diện tích nguyên giá (trước khi tăng giảm)</legend> ";
				echo "	<input type='text' id = 'dientichtruoc' style='display:none' name ='dientichtruoc' readonly tabindex='-1' value='".dinhdangso($dientichtruoc)."' class='form-control'  />	";				
			echo "<label for='field-4' class='col-sm-15 control-label'>Nguyên giá:</label>";
			echo "<div class='col-sm-4'>";
				echo "	<input  type='text' id ='nguyengiatruoc' name ='nguyengiatruoc' readonly tabindex='-1' value='".dinhdangso($nguyengiatruoc)."' class='form-control' data-mask='fdecimal' />";						
			echo "</div>";
			echo "<label for='field-4' style='padding-left: 0px;' class='col-sm-05 control-label'>(VNĐ)</label>";			
				echo "<input type='text' id='tongdientichtruoc' style='display:none' name ='tongdientichtruoc' readonly tabindex='-1' value='".dinhdangso($tongdientichtruoc)."'  class='form-control'  />			";					
			echo "<label for='field-4' class='col-sm-15 control-label'>Giá trị còn lại:</label>";
			echo "<div class='col-sm-4'>";
				echo "<input  type='text' id='giatriconlaitruoc' name ='giatriconlaitruoc' readonly tabindex='-1' value='".dinhdangso($giatriconlaitruoc)."'  class='form-control' data-mask='fdecimal' />		";							
			echo "</div>";
			echo "<label for='field-4' style='padding-left: 0px;' class='col-sm-05 control-label'>(VNĐ)</label>";
			echo "<label for='field-4' class='col-sm-15 control-label'>Năm SD còn lại:</label>";
			echo "<div class='col-sm-4'>";
				echo "<input  type='text' id='namsudungconlai' name ='namsudungconlai' value='".dinhdangso($namcl)."'  readonly tabindex='-1' class='form-control' data-mask='fdecimal' />";
			echo "</div>	";
			echo "<label for='field-4' style='padding-left: 0px;' class='col-sm-05 control-label'>(năm)</label>";
		echo "</fieldset>		";		
?>