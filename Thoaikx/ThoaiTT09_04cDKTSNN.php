
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title></title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="dist/jquery.inputmask.bundle.min.js"></script>
        <style type="text/css">
        #container { margin-left: 380px; }
        </style>
    </head>
    <body  >
<div class="container" id="container">
  <form role="form" method="Post" class="form-horizontal" action="TT09_04cDKTSNN.php">
		<?php
			require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
		?>
        <legend>Báo cáo kê khai thay đổi thông tin về đơn vị sử dụng tài sản</legend>
   	<div class="form-group">
		<div class="col-sm-4"><label>Tài sản là xe: </label><select name="xe" class="form-control" type = "text">
		<option value=""></option>
		<?php			
			$sql = "Select tblqlts.tenchitiet FROM tblqlts INNER JOIN tblthaydoi ON tblqlts.TTQLTS = tblthaydoi.ttts Where tblqlts.chitiethinhthai = 'Phương tiện vận tải%'";
			$qrsql = mysqli_query($con,$sql);	
			while($row = mysqli_fetch_array($qrsql))
			{
				$ten = $row['tenchitiet'];
				echo "<option value = '$ten'> $ten</option>";
			}
		?>
		</select>
		</div>
	</div>  	 
	<div class="form-group">
		<div class="col-sm-4"><label>Ngày tháng từ: </label><input data-inputmask="'alias': 'date'" name="nttu" class="form-control"  type="text"></div>
	</div>
	<div class="form-group">
		<div class="col-sm-4"><label>Ngày tháng đến: </label><input data-inputmask="'alias': 'date'" name="ntden" class="form-control"  type="text"></div>
	</div>  	 
	<button type="submit" name="create" class="btn btn-sm btn-success">Tạo báo cáo</button>
	<button type="reset" name="reset" class="btn btn-sm btn-danger">Không tạo</button>    
    </div>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>

  </form>

</div>
    </body>
</html>