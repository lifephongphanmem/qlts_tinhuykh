<?php require("header.php"); ?>
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php 
function doingay($ngay)
{
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}
function doingaythuan($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}	
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$key= $_GET['id'];
$sql = "SELECT * FROM tblthaydoidv WHERE ttthaydoi='$key'";
$hq=mysqli_query($con,$sql);
if (mysqli_num_rows($hq)>0)
	$row=mysqli_fetch_assoc($hq);
?>
		<h2>Nhập thay đổi thông tin tài sản</h2>
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ngày thay đổi:</label>
								<div class="col-sm-5">
									<input data-inputmask="'alias': 'date'" name="NTTD" type="text" class="form-control" id="field-1" value="<?php echo doingaythuan($row['NTTD']) ?>">
								</div>
							</div>	
							<div class="form-group">
								<label for="field-2" class="col-sm-3 control-label">Chỉ tiêu thay đổi:</label>
								<div class="col-sm-5">
									<input name="CTTD" type="text" class="form-control" id="CTTD" value="<?php echo$row['CTTD'] ?>">
								</div>
							</div>							
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Thông tin kê khai:</label>								
								<div class="col-sm-5">										
									<input name="TTKK" type="text" class="form-control" id="TTKK1" value="<?php echo$row['TTKK'] ?>">									
								</div>								
							</div>							
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Thông tin thay đổi:</label>
								<div class="col-sm-5">
									<input name="TTTD" type="text" class="form-control" id="field-4" value="<?php echo$row['TTTD'] ?>">
								</div>
							</div>							
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Lý do thay đổi:</label>
								<div class="col-sm-5">
									<input name="LDTD" type="text" class="form-control" id="field-4" value="<?php echo$row['LDTD'] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-5" class="col-sm-3 control-label">Chi chú:</label>
								<div class="col-sm-5">
									<input name="GCTD" type="text" class="form-control" id="field-5" value="<?php echo$row['GCTD'] ?>">
								</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" name="sua" class="btn btn-success">Cập nhật</button>
									<button type="reset" class="btn btn-info">Làm mới</button>
									<?php										
										echo "<a href='NhapTDTTDVchon.php?id=$key' class='btn btn-success'>
											Trở lại
										</a>";
									?>
								</div>
							</div>
						</form>	
					</div>
				</div>		
			</div>
		</div>
    <?php 	
	if (isset($_POST['sua']))
	{
		if ($_POST[NTTD] != "")
		{			
			$ngaythaydoi = doingay($_POST[NTTD]);
			$sqlin = "Update tblthaydoidv Set NTTD='$ngaythaydoi',TTTD='$_POST[TTTD]',LDTD='$_POST[LDTD]',GCTD='$_POST[GCTD]' WHERE ttthaydoi = ".$key;
			$kq = mysqli_query($con,$sqlin);		
			if($kq)
			{
				echo '<script>alert("Cập nhật dữ liệu thành công");</script>';				
			}			
		}
	}
?>	
<?php require("footer.php"); ?>