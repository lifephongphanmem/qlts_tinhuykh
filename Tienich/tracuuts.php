<?php require("header.php"); ?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="/QLTS/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
		<h2>Tra cứu tài sản cố định</h2>
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ngày tháng nhập:</label>
								<div class="col-sm-5">
									<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" class="form-control" id="field-3">
								</div>
							</div>							
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Năm hao mòn:</label>
								<div class="col-sm-5">
									<input name="namhaomon" type="text" class="form-control" id="field-3" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-5">
									<input type="checkbox" name="TN" class="form-control"> Tính HMTS mua mới trong năm
								</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" name="sua" class="btn btn-success">Tạo hao mòn</button>
									<button type="submit" name="xoa" class="btn btn-success">Xóa hao mòn</button>
									<input type="button" class="btn btn-black" value="Trở lại" onclick="window.location.href='/QLTS/index.php'" />
								</div>
							</div>
						</form>	
					</div>
				</div>		
			</div>
		</div>
<?php 
function doingay($ngay)
{
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}
function soduhm($idts,$nam)
{
	$hmnam = 0;
	global $con;
	$sql = "Select sodu,sotien from tblhaomon where TTQLTS = ".$idts." and namhaomon <".$nam;
	$kq = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($kq)){
		$hmnam = $row[0]+$row[1];
	}
	return $hmnam;
}
if (isset($_POST['sua']))
{
	$ngaydk = doingay($_POST['ngaynhap']);
	$namhm = $_POST['namhaomon'];
	if ($_POST['TN'] == true)
	{
		$sql = "Select TTQLTS,phantram,(ngansach+nguonkhac) as NG from tblqlts Where ngaysudung <= '$ngaydk' and phantram > 0 and TTQLTS Not in (";
		$sql = $sql . "Select TTQLTS From tblhaomon Where namhaomon = ".$_POST['namhaomon']. ")";
	}
	else
	{
		$sql = "Select TTQLTS,phantram,(ngansach+nguonkhac) as NG from tblqlts Where ngaysudung < '$ngaydk' and phantram > 0 and TTQLTS Not in (";
		$sql = $sql . "Select TTQLTS From tblhaomon Where namhaomon = ".$_POST['namhaomon']. ")";
	}
	$hmnam = 0;$sodu=0;
	$kq = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($kq)){
		$hmnam = ($row[1]*$row[2])/100;
		$sodu = soduhm($row[0],$_POST['namhaomon']);
		$sqlin = "Insert into tblhaomon(TTQLTS,ngaythang,namhaomon,sodu,sotien,phantram) values($row[0],'$ngaydk',$namhm,$sodu,$hmnam,$row[1])";
		$kqin = mysqli_query($con,$sqlin);
	}
}
if (isset($_POST['xoa']))
{
	$ngaydk = doingay($_POST['ngaynhap']);
	$namhm = $_POST['namhaomon'];
	$sqlxoa = "Delete * From tblhaomon Where namhaomon = ".$namhm." and ngaythang ='".$ngaydk."'";
	$kqxoa = mysqli_query($con,$sqlxoa);
}
?>	
<?php require("footer.php"); ?>