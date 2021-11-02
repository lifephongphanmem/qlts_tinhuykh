	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="/assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="/assets/js/select2/select2.css">
	<link rel="stylesheet" href="/assets/js/selectboxit/jquery.selectBoxIt.css">
	

	<!-- Bottom scripts (common) -->
	<script src="/assets/js/gsap/main-gsap.js"></script>
	<script src="/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/joinable.js"></script>
	<script src="/assets/js/resizeable.js"></script>
	<script src="/assets/js/neon-api.js"></script>
	<script src="/assets/js/jquery.dataTables.min.js"></script>
	<script src="/assets/js/datatables/TableTools.min.js"></script>	


	<!-- Imported scripts on this page -->
	<script src="/assets/js/dataTables.bootstrap.js"></script>
	<script src="/assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="/assets/js/datatables/lodash.min.js"></script>
	<script src="/assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="/assets/js/select2/select2.min.js"></script>
	<script src="/assets/js/neon-chat.js"></script>
	<script src="/assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="/assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="/assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/jquery.multi-select.js"></script>			


	<!-- JavaScripts initializations and stuff -->
	<script src="/assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="/assets/js/neon-demo.js"></script>
<script type="text/javascript">
	function showAjaxModalmk()
	{		
		jQuery('#modal-6a').modal('show', {backdrop: 'static'});	
	}
</script>	
<?php 	
	require("connect.php");
	$ma = explode('>',$madv); 
	if (isset($_POST['capnhatts1']))
	{	
		$tendn=$_POST["tendn"];
		$mkc=$_POST["mkc"];
		$mkm=$_POST["mkm"];
		$xnh=$_POST["xnh"];
		if ($mkm == $xnh)
		{
			$mkm = md5($mkm);
			$mkc = md5($mkc);
			$sql="Update thongtindonvi set matkhau = '$mkm' where matkhau = '$mkc' and tendangnhap = '$tendn' and madonvi = '$ma[0]'";		
			$kq=mysql_query($sql);			
		}		
	}	        	
?>
<div class="modal fade" id="modal-6a">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class='entypo-pencil'></i>Thay đổi mật khẩu</h4>
				</div>				
				<div class="modal-body">				
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">							
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên đăng nhập cũ:</label>
								<div class="col-sm-8">
									<input name="tendn" type="text" class="form-control" id="tendn">
								</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Mật khẩu cũ:</label>
								<div class="col-sm-8">
									<input name="mkc" type="password" class="form-control" id="mkc">
								</div>	
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Mật khẩu mới:</label>
								<div class="col-sm-8">
									<input name="mkm" type="password" class="form-control" id="mkm">
								</div>	
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Xác nhận mật khẩu:</label>
								<div class="col-sm-8">
									<input name="xnh" type="password" class="form-control" id="xnh">
								</div>	
							</div>
				</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatts1" class="btn btn-blue" value = "Cập nhật">
							</div>
						</form>						
				</div>
			</div>
		</div>
	</div>
</body>
</html>