	<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title></title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/bootstrap.min.css" rel="stylesheet">
		<script src="/assets/News/jquery.min.js"></script>
		<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
$madv = $_GET["id"];
$ma = explode('>',$madv); 
?>			
</head>
<body  >
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" style="text-align:center;"><strong>Thẻ tài sản cố định</strong></h4>
		</div>
			<div class="modal-body">
					<form role="form" method="Post" class="form-horizontal" action="TheTSCD.php">							
					<div class="form-group">
						<label style="margin-left:-75px;" class="col-sm-5 control-label">Căn cứ:</label>
								<div class="col-md-8">
									<input name="cancu" class="form-control" type="text" value = "vào biên bản giao nhận TSCĐ số ... ngày ... tháng ... năm .....">
								</div>	
						<label style="margin-left:-75px;" class="col-sm-5 control-label">Đình chỉ sử dụng TSCĐ:</label>
								<div class="col-md-8">
									<input name="dcsd" class="form-control" type="text" value = "Ngày ... tháng ... năm .......">
								</div>	
						<label style="margin-left:-75px;" class="col-sm-5 control-label">Lý do đình chỉ:</label>
								<div class="col-md-8">
									<input name="lddc" class="form-control" type="text">
								</div>		
					</div>
					<div class="form-group">	
					<div class="col-sm-8">
						<input name="MADV" type="text" class="form-control" style = "Display:none;" value = "<?php echo $madv; ?>">
					</div>
					</div>	
					<button type="submit" name="create" class="btn btn-sm btn-success">Tạo thẻ</button>
					<button type="reset" name="reset" class="btn btn-sm btn-danger" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'">Không tạo</button> 					  
					</div>
				  </form>
			</div>		
	</div>
</div>
 

</body>
</html>