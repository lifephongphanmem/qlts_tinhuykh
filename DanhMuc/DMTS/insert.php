<?php require "header.php"; ?>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="includes/js/jquery.form.js"></script>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
 <script type="text/javascript" src="bootstrap.js"></script>
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
<script src="/QLTS/dist/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="js.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>


				<style>
							  
				</style>	

 
  <script type="text/javascript">
	function showAjaxModal()
	{		
		jQuery('#modal-6').modal('show', {backdrop: 'static'});			
	}
</script>	
<script type="text/javascript">
		jQuery(window).load(function()
		{
			var $ = jQuery;
			
			$("#table-2").dataTable({
				"sPaginationType": "bootstrap",
	
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },			
					null,
					null,
					null,
					null,
					null,	
					null,
					null,
					null,
					null,
					null,
					null
				]
			});
		});
			
		</script>
		<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Trang chủ</a>
					</li>
						<li class="active">
		
									<strong>Quản lý tài sản cố định là đất</strong>
							</li>
							</ol>
	
		<h3>Quản lý tài sản cố định là đất</h3>	
		<a  onclick="showAjaxModal();" class='btn btn-success'>
			Thêm mới
		</a>	
		<a href="Nhaphientrang.php" class='btn btn-success'>
			Hiện trạng sử dụng
		</a>
<?php 	
	require("connect.php");
	if (isset($_POST['capnhatts']))
	{		
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);
		$DTKV = $_POST['DTKV'];
		$ngansach = $_POST['ngansach'];
		$nguonkhac = $_POST['nguonkhac'];
		$TKVDAT = $_POST['TKVDAT'];
		$noidung = $_POST['noidung'];
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
		}
		$sql="INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,ngansach,nguonkhac,DTKV,TKVDAT,chitiethinhthai,XOA,DVT,phantram,sonamsd,sothutu)";
		$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$ngaysudung','$noidung',$ngansach,$nguonkhac,$DTKV,'$TKVDAT','$chitiethinhthai','K','m2',$pthm,$sonamsd,$ttsx)";	
		$kq=mysql_query($sql);				
	}	        	
?>				

		<table  class="table table-condensed" id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã tài sản</th>
					<th>Tên tài sản</th>
					<th>Tên chi tiết</th>
					<th>Ngày nhập</th>							
					<th>Ngày sử dụng</th>
					<th style="width=100px;">Diện tích khuôn viên</th>
					<th>Nguồn ngân sách</th>
					<th>Nguồn khác</th>
					<th>Địa chỉ khuôn viên</th>	
					<th>Nơi sử dụng</th>	
					<th></th>
				</tr>
			</thead>
			<tbody >	
<?php 
function doingay($ngay)
{
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
require("connect.php");
$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung from tblqlts";
$kq = mysqli_query($sql);
$ngnh="";$ngsd="";   
$tatca = "";
if(mysql_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
			$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".doingay1($row[4]).">".doingay1($row[5]).">".$row[6].">".$row[7].">".$row[8].">".$row[9].">".$row[10];
            echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
				$ngnh = doingay1($row[4]);
                echo"<td>$ngnh</td>";				
				$ngsd = doingay1($row[5]);
				echo"<td>$ngsd</td>";	
				echo"<td>$row[6]</td>";	
				echo"<td>$row[7]</td>";
				echo"<td>$row[8]</td>";
				echo"<td>$row[9]</td>";	
				echo"<td>$row[10]</td>";					
                echo"<td>
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-primary' href='#addBookDialog'>Sửa</a>				
						<a href=\"xoa.php?id=$row[0]\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-danger btn-sm '>
							
							Xóa
						</a>						
					</td>";
            echo"</tr>";
     }}         
 ?> 
			</tbody>
		</table>



							
<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;">Nhập thông tin tài sản là đất</h4>
				</div>
				
				<div class="modal-body">
				
						<form role="form"  action="insert.php"  method="POST" class="form-horizontal form-groups-bordered">							
										<div class="form-group">
										<label class="col-sm-3 control-label">Tên tài sản:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai like 'Đất%' and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($sql);
								echo"<div  class='col-sm-8'>";
									echo"<select  class='form-control' id='mataisan'>";
									echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label for="field-3" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-8">
									<input name="tenchitiet" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" class="form-control" id="field-3">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Diện tích:</label>
								<div class="col-sm-8">
									<input name="DTKV" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
								<div class="col-sm-8">
									<input name="ngansach" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-8">
									<input name="nguonkhac" type="text" class="form-control" id="field-3">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php								
								$sql="select tenphongban from tblphongban";
								$sql1=mysqli_query($sql);
								echo"<div  class='col-sm-8' >";
									echo"<select class='form-control' id='noidung'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>			
								<label for="field-4" class="col-sm-3 control-label">Địa chỉ khuôn viên:</label>
								<div class="col-sm-8">
									<input name="TKVDAT" type="text" class="form-control" id="field-3">
								</div>		
										 </div>
							<div class="form-group">
								<button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatts" class="btn btn-info" value = "Cập nhật" ">
							</div>	
						</form>						
				</div>
			</div>
		</div>
	</div>	


<?php require "footer.php"; ?>