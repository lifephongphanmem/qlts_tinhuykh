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
		$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
		return $kq;
	}
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sql = "SELECT * FROM tbldenghi WHERE TTdenghi='$ma[8]'";
	$hq=mysqli_query($con,$sql);
		if (mysqli_num_rows($hq)>0)
			$row=mysqli_fetch_assoc($hq);
?>		
		<h2>Sửa tài sản đề nghị xử lý</h2>
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Hình thái tài sản:</label>
								<div class="col-sm-5">
									<input name="chitiethinhthai" readonly="false" type="text" class="form-control" id="field-1" value="<?php echo $row["chitiethinhthai"] ?>">
								</div>
							</div>	
							<div class="form-group">
								<label for="field-2" class="col-sm-3 control-label">Mã tài sản:</label>
								<div class="col-sm-5">
									<input name="mataisan" readonly="false" type="text" class="form-control" id="field-2" value="<?php echo $row["mataisan"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Tên tài sản:</label>
								<div class="col-sm-5">
									<input name="tentaisan" readonly="false" type="text" class="form-control" id="field-3" value="<?php echo $row["tentaisan"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-5">
									<input name="tenchitiet" readonly="false" type="text" class="form-control" id="field-4" value="<?php echo $row["tenchitiet"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-5" class="col-sm-3 control-label">Ngày xử lý:</label>
								<div class="col-sm-5">
									<input data-inputmask="'alias': 'date'" name="ngaythang" type="text" class="form-control" id="field-5" value="<?php echo doingay($row["ngaythang"]) ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Hình thức xử lý:</label>
								<div class="col-sm-5">
									<select name="hinhthuc" type="text" class="form-control" id="field-6" >
										<?php echo"<option selected='selected' value=''>".$row['hinhthuc'] ."</option>"?>;
										<option value='Thu hồi'>Thu hồi</option>
										<option value='Bán'>Bán</option>
										<option value='Điều chuyển'>Điều chuyển</option>
										<option value='Thanh lý'>Thanh lý</option>
										<option value='LD, liên kết'>LD, liên kết</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Nội dung xử lý:</label>
								<div class="col-sm-5">
									<input name="noidung" type="text" class="form-control" id="field-7" value="<?php echo $row["noidung"] ?>">
								</div>
							</div><div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-sm-5">
									<input name="ghichu" type="text" class="form-control" id="field-8" value="<?php echo $row["ghichu"] ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" name="sua" class="btn btn-success">Cập nhật</button>
									<button type="reset" class="btn btn-info">Làm mới</button>
									<input type="button" class="btn btn-black" value="Trở lại" onclick="window.location.href='DMCB.php'" />
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
		$hinhthuc = $_POST['hinhthuc'];
   		$up = "UPDATE tbldenghi SET ngaythang='$_POST[ngaythang]',hinhthuc='$_POST[hinhthuc]',noidung='$_POST[noidung]',ghichu='$_POST[ghichu]' WHERE TTdenghi = '$ma[8]'";;
		$kq = mysqli_query($con,$up);
		if ($hinhthuc == "Thanh lý")
			$sqlup = "Update tblqlts Set XOA = 'TL' Where TTQLTS = '" . $row['TTQLTS'] . "'";
		else
			$sqlup = "Update tblqlts Set XOA = 'K' Where TTQLTS = '" . $row['TTQLTS'] . "'";	
		$kq1 = mysqli_query($con,$sqlup);		
						if($kq)
							{								
								echo '<script>alert("Cập nhật dữ liệu thành công");</script>';
							}		
	}        
?>
<?php require("footer.php"); ?>