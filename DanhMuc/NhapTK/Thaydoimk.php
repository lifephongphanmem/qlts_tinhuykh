<?php require "header.php"; ?>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
 <script type="text/javascript" src="bootstrap.js"></script>
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<div class="container" id="container">
  <form role="form" method="Post" class="form-horizontal">
        <legend>Thay đổi thông tin mật khẩu</legend>
    <div class="form-group">
		<div class="col-sm-4"><label>Ngày tháng từ: </label><input data-inputmask="'alias': 'date'" name="nttu" class="form-control"  type="text" default= "01/01/2015"></div>
	</div>
	<div class="form-group">
		<div class="col-sm-4"><label>Ngày tháng đến: </label><input data-inputmask="'alias': 'date'" name="ntden" class="form-control"  type="text" default = "31/12/2015"></div>
	</div>  	
	<button type="submit" name="create" class="btn btn-sm btn-success">Tạo báo cáo</button>
	<button type="reset" name="reset" class="btn btn-sm btn-danger">Không tạo</button>    
    </div>
  </form>
</div>
<?php require "footer.php"; ?>