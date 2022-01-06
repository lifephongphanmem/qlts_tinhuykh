<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>	
<style type="text/css">
	@media print {
		   .in{
			  display: none !important;
		   }
		}
</style>
<link rel="stylesheet" href="buttonPro.css"/>						
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->								
				<li>
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span class="title"><strong>Tổng hợp báo cáo tài sản</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Thoaikx/the.php">
								<i class="entypo-book-open"></i>							
								<span class='title'>Thẻ tài sản cố định</span>
							</a>	
						</li>
						<li>		
							<a  href="/Thoaikx/ThoaiSoTSCDm1.php">	
								<i class="entypo-book-open"></i>							
								<span class='title'>Sổ tài sản cố định (S24-H)</span>
							</a>		
						</li>
						<li>			
							<a  href="/Thoaikx/ThoaiBcTHTGTSCDdv.php">	
								<i class="entypo-book-open"></i>							
								<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
							</a>						
						</li>
						<li>					
							<a  href="/Thoaikx/ThoaiBaHMTSCD.php">	
								<i class="entypo-book-open"></i>							
								<span class='title'>Bảng tính hao mòn tài sản cố định (C55 - HD)</span>
							</a>						
						</li>
						<li>						
							<a  href="/Thoaikx/ThoaiBaTHDSTSDNTC.php">	
								<i class="entypo-book-open"></i>							
								<span class='title'>Danh sách tài sản đề nghị trang cấp</span>
							</a>					
						</li>
						<li>					
							<a  href="/Thoaikx/ThoaiBaTHDMTSDNXL.php">		
								<i class="entypo-book-open"></i>							
								<span class='title'>Danh sách tài sản đề nghị xử lý</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiBaocaokktscd.php"><i class="entypo-book-open"></i>								
								<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ui-panels.html">
						<i class="entypo-newspaper"></i>
						<span class="title"><strong>Tổng hợp báo cáo công cụ</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Thoaikx/ThoaiSoKDCLB.php"><i class="entypo-book-open"></i>							
								<span class='title'>Sổ kho dụng cụ lâu bền</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiSoCTDCLB.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Sổ chi tiết dụng cụ lâu bền</span>
							</a>
						</li>
						<li>			
							<a  href="/Thoaikx/ThoaiBaTHCTDCLB.php"><i class="entypo-book-open"></i>							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số lượng)</span>
							</a>
						</li>
						<li>					
							<a  href="/Thoaikx/ThoaiBaTHCTDCLBt.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số tiền)</span>
							</a>			
						</li>
						<li>		
							<a  href="/Thoaikx/ThoaiSoTDDCLB.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Sổ theo dõi dụng cụ lâu bền (S32-H)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiSoTDDCLBcb.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Sổ theo dõi tài sản và công cụ</span>
							</a>
						</li>
						<li>	
							<a  href="/Thoaikx/ThoaiDmDCLB.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Danh mục dụng cụ lâu bên theo QĐ32</span>
							</a>		
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiSoBaohong.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Giấy báo hỏng, mất công cụ dụng cụ</span>
							</a>
						</li>
						<li>		
							<a  href="/Thoaikx/ThoaiBaocaoCCDC.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Báo cáo tăng giảm công cụ dụng cụ</span>
							</a>	
						</li>
					</ul>
				</li>
				
				<li <?php if (strlen($ma[0]) >= 16)
					{
						echo "style='display:none';";
					}
				?>>
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title"><strong>Báo cáo tổng hợp</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Thoaitonghop/ThoaiThTSNNCTlc.php?id=0>0>0">	<i class="entypo-book-open"></i>						
								<span class='title'>Tổng hợp tài sản nhà nước</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiThBCHTSDNDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Tổng hợp báo cáo hiện trạng sử dụng nhà, đất</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcTHTGTSNNlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo tổng hợp tình hình tăng, giảm tài sản nhà nước</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcTSNNDVTTSDlc.php?id=0>0>0">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcHMTSNNDVTTSDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo hao mòn tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkQLSDTSCSHDSNlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai quản lý, sử dụng TSLV, CSHĐSN</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcKKTSCDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcTHTCCLDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo tình hình tăng công cụ lao động</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcTTSNNDVTTSDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo tăng tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiBcGTSNNDVTTSDlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Báo cáo giảm tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
							</a>	
						</li>						
					</ul>
				</li>
				
				<li >
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title"><strong>Quản lý danh mục</strong></span>
					</a>
					<ul>
						<li>							
							<a  href="/DanhMuc/DMTS/DMTS.php">
								<i class="entypo-sweden"></i>
								<span class='title'>Danh mục tài sản</span>
							</a>
						</li>
						<li>
							<a  href="/DanhMuc/DMCC/DMCC.php">	
								<i class="entypo-sweden"></i>							
								<span class='title'>Danh mục công cụ</span>
							</a>							
						</li>
						<li>
							<a  href="/DanhMuc/DMPB/DMPB.php">	
								<i class="entypo-sweden"></i>							
								<span class='title'>Danh mục phòng ban (bộ phận)</span>
							</a>								
						</li>
						<li class="active">
							<a  href="/DanhMuc/DMCB/DMCB.php">		
								<i class="entypo-sweden"></i>							
								<span class='title'>Danh mục cán bộ</span>
							</a>												
						</li>
					</ul>
				</li>
				<li>
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title"><strong>Tiện ích</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Tienich/Taohaomontc.php">	<i class="entypo-picasa"></i>							
								<span class='title'>Tạo hao mòn tất cả tài sản</span>
							</a>						
						</li>
						<li>						
							<a  href="/Tienich/nhandlexcel.php">	<i class="entypo-picasa"></i>							
								<span class='title'>Nhận tài sản, công cụ từ file excel</span>
							</a>			
						</li>							
						<li>
							<a href="/Tienich/huongdan.php">	<i class="entypo-picasa"></i>	
								<span class="title">Hướng dẫn sử dụng</span>
							</a>
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTS/tracuuts.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>							
								<span class='title'>Tìm kiếm thông tin tài sản</span>
							</a>											
						</li>
						<li>					
							<a  href="/Tracuu/TraCuuCC/tracuucc.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>						
								<span class='title'>Tìm kiếm thông tin công cụ</span>
							</a>						
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTC/tracuutc.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>							
								<span class='title'>Tìm kiếm thông tin trang cấp</span>
							</a>	
						</li>
						<li>
							<a  href="/Tracuu/TraCuuDN/tracuudn.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>						
								<span class='title'>Tìm kiếm thông tin đề nghị xử lý</span>
							</a>				
						</li>	
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="entypo-flow-tree"></i>
						<span class="title"><strong>Quản trị tài khoản</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/DanhMuc/DMDV/DMDV.php"><i class="entypo-users"></i>							
								<span class='title'>Danh sách tài khoản</span>
							</a>		
						</li>						
						<li>
							<a  onclick="showAjaxModalmk();">
								Thay đổi mật khẩu
							</a>
						</li>						
					</ul>
				</li>
			</ul>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!------- HEADER ---------->  
<script type="text/javascript" src="jquery-1.10.2.js"></script>
 <script type="text/javascript" src="bootstrap.js"></script>
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#hoten').change(function() {
   giatri = this.value;
   $('#sTTKK').load('ajax_tpkk.php?id_a='+giatri);
  });
 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#hoten1').change(function() {
   giatri = this.value;
   $('#sTTKK1').load('ajax_tpkk.php?id_a='+giatri);
  });
 });
 </script>
 <script>
$(document).on("click", ".open-AddBookDialog", function (e) {

    e.preventDefault();

    var _self = $(this);

    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[0]);
	$("#hoten1").val(myBookId[5]);
	$("#chucvucanbo1").val(myBookId[2]);
	$("#daidien1").val(myBookId[3]);
	$("#thanhphan1").val(myBookId[4]);
    $(_self.attr('href')).modal('show');
});
 </script>
 <script type="text/javascript">
		function showAjaxModal()
		{		
			jQuery('#modal-6').modal('show', {backdrop: 'static'});			
			jQuery.ajax({
				url: "data/ajax-content.txt",
				success: function(response)
				{
					jQuery('#modal-7 .modal-body').html(response);
				}
			});
		}
		</script>
	<script type="text/javascript">
		function showAjaxModal1()
		{			
			jQuery('#modal-9').modal('show', {backdrop: 'static'});			
			jQuery.ajax({
				url: "data/ajax-content.txt",
				success: function(response)
				{
					jQuery('#modal-7 .modal-body').html(response);					
				}
			});
		}
		</script>			
	<script type="text/javascript">
		jQuery(window).load(function()
		{
			var $ = jQuery;
			
			$("#table-2").dataTable({
				"sPaginationType": "bootstrap",
				"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
			
					null,
					null,
					null,
					null,
					null
				]
			});
			
			$(".dataTables_wrapper select").select2({
				minimumResultsForSearch: -1
			});
			
			// Highlighted rows
			$("#table-2 tbody input[type=checkbox]").each(function(i, el)
			{
				var $this = $(el),
					$p = $this.closest('tr');
				
				$(el).on('change', function()
				{
					var is_checked = $this.is(':checked');
					
					$p[is_checked ? 'addClass' : 'removeClass']('highlight');
				});
			});
			
			// Replace Checboxes
			$(".pagination a").click(function(ev)
			{
				replaceCheckboxes();
			});
		});
			
		// Sample Function to add new row
		var giCount = 1;
		
		function fnClickAddRow() 
		{
			$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
			
			replaceCheckboxes(); // because there is checkbox, replace it
			
			giCount++;
		}
		</script>

<?php 	
	$ab = $ma[0];
	$tttaisan = $_GET["id"];
	$key = explode("/",$tttaisan);
	function hotenid($idht)
	{
		global $con;
		$sql = "Select hoten From tbldanhsachcb Where STTcanbo = ".$idht;
		$kq=mysqli_query($con,$sql);
		$sql = "";
		while($row=mysqli_fetch_array($kq)){		
		$sql = $row[0];
		}
		return $sql;
	}
	//	        	
?>
<?php
function kieudouble($so)
	{
		$kq = 0;
		if ($so != "")
			$kq = (float)$so;
		else
			$kq = 0;	
		return $kq;	
	}		 
?>		
 <?php 
 function doingay($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
//
$sql = "select GIO,PHUT,ngay1,sohieu,noikiemke,noidung,ttkhac from tblkiemke where TTkiemke = '$key[0]'";
$kq = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($kq);
?>	
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<?php echo "<form role='form' method='POST' action ='suakk.php?id=$key[0]' class='form-horizontal form-groups-bordered'>";	?>	
							<div class="form-group">															
								<input type="button" class="btn btn-black" value="Trở lại" onclick="window.location.href='NhapKKTS.php?id=<?php echo "$key[1]"; ?>'" />
							</div>
							<div class="form-group">
								<label  class="col-sm-3 control-label">Giờ KK:</label>
								<div class="col-md-1">
									<input name="GIO" class="form-control" type="text" value = "<?php echo $row["GIO"] ?>">
								</div>
								<label style="margin-left:-75px;" class="col-sm-2 control-label">Phút KK:</label>
								<div class="col-md-1">
									<input name="PHUT" class="form-control" type="text" value = "<?php echo $row["PHUT"] ?>">
								</div>
								<label style="margin-left:-45px;" class="col-sm-2 control-label">Ngày nhập BB:</label>
								<div style="width: 120px;"  class="col-sm-3">
									<input data-inputmask="'alias': 'date'" name="ngay1" type="text" class="form-control" id="field-1" value="<?php echo doingay($row["ngay1"]) ?>">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-sm-3 control-label">Số hiệu BB:</label>
								<div class="col-md-1">
									<input name="sohieu" type="text" class="form-control" value = "<?php echo $row["sohieu"] ?>">
								</div>
								<label  class="col-sm-1 control-label">Nơi KK:</label>
								<div style="margin-right:150px;" class="col-md-4">
									<input name="noikiemke" type="text" class="form-control" value = "<?php echo $row["noikiemke"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-sm-3 control-label">Nội dung:</label>
								<div class="col-md-6">
									<input name="noidung" type="text" class="form-control" value = "<?php echo $row["noidung"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-md-6">
									<input name="ttkhac" type="text" class="form-control" value = "<?php echo $row["ttkhac"] ?>">
								</div>								
							</div>
							<label  class="col-sm-3 control-label">Thành phần kiểm kê</label>														
						</form>	
					</div>
						<div class="table-responsive"> 
						<form method="POST">
							<table class="table table-bordered table-striped datatable" id="table-1">
							<thead>
								<tr>
									<th>STT</th>
									<th>Họ tên ông(bà)</th>
									<th>Chức vụ</th>
									<th>Đại diện</th>
									<th>Thành phần</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
<?php
	$sql = "select TTthanhphan,hotencb,chucvucanbo,daidientp,thanhphan,ttten from tblthanhphankk Where TTkiemke = '$key[0]'";
	$kq = mysqli_query($con,$sql);
	$ID = 0;$tatca = "";   
	if(mysqli_num_rows($kq)>0){
		while($row=mysqli_fetch_array($kq)){
		$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".$row[5];
		$maxoa = $row[0].">".$key[0];	
				echo"<tr>";
					echo"<td>$row[0]</td>";
					echo"<td>$row[1]</td>";                
					echo"<td>$row[2]</td>";
					echo"<td>$row[3]</td>";
					echo"<td>$row[4]</td>";						
				echo"</tr>";
		 }} 		
	?>
							</tbody>							
							</table>
					</form>		
						</div>
				</div>		
			</div>
		</div>
		<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Thêm mới thành phần kiểm kê tài sản</h4>
				</div>				
				<div class="modal-body">				
						<?php echo "<form role='form' method='POST' action ='suakk.php?id=$key[0]' class='form-horizontal form-groups-bordered'>";	?>					
							<div class="form-group">
								<label class="col-sm-3 control-label">Họ tên cán bộ</label>
								<?php								
								$sql="select STTcanbo,hoten from tbldanhsachcb where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='hoten' class='form-control' id='hoten'>";
									echo"<option selected='selected' value=''>Chọn tên cán bộ</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
							</div>
							<div id = "sTTKK" class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Chức vụ cán bộ:</label>
								<div class="col-sm-8">
									<input name="chucvucanbo" readonly="false" type="text" class="form-control" id="field-3">
								</div>
							</div>
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Đại diện:</label>
								<div class="col-sm-8">
									<input name="daidien" type="text" class="form-control" id="field-3">
								</div>
							</div>
							<div class="form-group">
								<label for="field-5" class="col-sm-3 control-label">Thành phần</label>
								<div class="col-sm-8">
									<select name='thanhphan' class='form-control'>";
									<option selected='selected' value='Trưởng ban'>Trưởng ban</option>";
									<option selected='selected' value='Phó ban'>Phó ban</option>";
									<option selected='selected' value='Ủy viên'>Ủy viên</option>";
									<option selected='selected' value='Thư ký'>Thư ký</option>";
									</select>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatcb" class="btn btn-blue" value = "Cập nhật">
							</div>		
						</form>						
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="addBookDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chỉnh sửa thành phần kiểm kê</h4>
      </div>
      <div class="modal-body">        		
		<?php echo "<form role='form' method='POST' action ='suakk.php?id=$key[0]' class='form-horizontal form-groups-bordered'>";	?>		
							<div class="form-group">
								<label class="col-sm-3 control-label">Thứ tự thành phần:</label>
								<div class="col-sm-5">
										<input name="bookId" type="text" class="form-control" id="bookId">									
								</div>
							</div>	
							<div class="form-group">
								<label class="col-sm-3 control-label">Họ tên cán bộ:</label>
								<?php
								$sql="select STTcanbo,hoten from tbldanhsachcb where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='hoten1' class='form-control' id='hoten1'>";
									
									echo"<option selected='selected' value=''>Chọn cán bộ</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";								
								?>
							</div>
							<div id = "sTTKK1" class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Chức vụ cán bộ:</label>
								<div class="col-sm-8">
									<input name="chucvucanbo1" readonly="false" type="text" class="form-control" id="chucvucanbo1" value = "">
								</div>
							</div>
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Đại diện:</label>
								<div class="col-sm-8">
									<input name="daidien1" type="text" class="form-control" id="daidien1">
								</div>
							</div>
							<div class="form-group">
								<label for="field-5" class="col-sm-3 control-label">Thành phần:</label>
								<div class="col-sm-8">
									<select name='thanhphan1' class='form-control' id="thanhphan1">";
									<option selected='selected' value=''>Chọn thành phần</option>";
									<option selected='selected' value='Trưởng ban'>Trưởng ban</option>";
									<option selected='selected' value='Phó ban'>Phó ban</option>";
									<option selected='selected' value='Ủy viên'>Ủy viên</option>";
									<option selected='selected' value='Thư ký'>Thư ký</option>";
									</select>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatchinhsua" class="btn btn-blue" value = "Cập nhật">
							</div>		
						</form>
      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>