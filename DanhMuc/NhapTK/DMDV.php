<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="auto-inherit-active-class">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title"><strong>Quản lý dữ liệu</strong></span>
					</a>
					<ul>
						<li>
							
							<a  href="/Nhap/NhapTCTS/NhapDNTC.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS500/NhapQLTS.php">	
								<i class="entypo-flag"></i>									
								<span class='title'>Tài sản cố định khác từ 500 triệu</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS/NhapQLTS.php">	
								<i class="entypo-flag"></i>								
								<span class='title'>Tài sản cố định khác dưới 500 triệu</span>
							</a>
												
						</li>	
						<li>
							
							<a  href="/Nhap/NhapQLTSdat/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định là đất</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTSnha/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý nhà và vật kiến trúc khác</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTSxe/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý xe và phương tiện vận tải</span>
							</a>
												
						</li>
						<li>
					
							<a  href="/Nhap/NhapQLCC/NhapQLCC.php">	
								<i class="entypo-flag"></i>
								<span class='title'>Quản lý công cụ dụng cụ</span>
							</a>
				
						</li>
						<li>
							
							<a  href="/Nhap/NhapDNXL/NhapDNXL.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Đề nghị xử lý tài sản</span>
							</a>
													
						</li>
						<li>
							
							<a  href="/Nhap/NhapTDTTTS/NhapTDTTTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Thay đổi thông tin tài sản cố định</span>
							</a>
													
						</li>
						<li>
							
							<a  href="/Nhap/NhapTDTTDV/NhapTDTTDVchon.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Thay đổi thông tin đơn vị</span>
							</a>
												
						</li>
						<li>
					
							<a  href="/Nhap/NhapKKTS/NhapKKTS.php">		
								<i class="entypo-flag"></i>							
								<span class='title'>Kiểm kê tài sản, công cụ</span>
							</a>
												
						</li>
					</ul>
				</li>
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
				<li>
					<a href="forms-main.html">
						<i class="entypo-doc-text"></i>
						<span class="title"><strong>Tổng hợp báo cáo theo thông tư 09</strong></span>
					</a>
					<ul>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09_01TSNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Danh mục trụ sở làm việc, cơ sở HĐSN đề nghị xử lý (TT09)</span>
							</a>
							
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09-02TSNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Danh mục xe ô tô đề nghị xử lý (TT09)</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09_03SNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Danh mục tài sản khác đề nghị xử lý (TT09)</span>
							</a>
							
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09_01DKTSNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Báo cáo kê khai trụ sở làm việc, cơ sở HĐSN (TT09)</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09_02DKTSNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Báo cáo kê khai ô tô (TT09)</span>
							</a>
							
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiTT09_03DKTSNN.php">	<i class="entypo-book-open"></i>							
								<span class='title'>Báo cáo kê khai tài sản có nguyên giá lớn hơn 500 triệu (TT09)</span>
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
				
				<li>
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
						<!--li>
							
							<a  href="/Tienich/nhandlaccess.php">	<i class="entypo-picasa"></i>							
								<span class='title'>Nhận tài sản, công cụ từ file xml</span>
							</a>
										
						</li-->
						<li>
							<a href="http://hdts.890m.com/">
								<span class="title">Hướng dẫn sử dụng</span>
							</a>
						</li>						
					</ul>
				</li>
				<li class="opened active">
					<a href="#">
						<i class="entypo-flow-tree"></i>
						<span class="title"><strong>Quản trị tài khoản</strong></span>
					</a>
					<ul>
						<li class="active">
						
							<a  href="/DanhMuc/DMDV/DMDV.php"><i class="entypo-users"></i>							
								<span class='title'>Danh sách tài khoản</span>
							</a>
									
						</li>						
						<li>
							<a  onclick="showAjaxModal();">
								Thay đổi mật khẩu
							</a>
						</li>						
					</ul>
				</li>
			</ul>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!------- HEADER ---------->  
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap; }
	</style>
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>

	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
			var table = $('#table-2').DataTable( {
				scrollY:        "400px",
				scrollX:        true,
				paging:         false
			} );

			new $.fn.dataTable.FixedColumns( table, {
				leftColumns: 0,
				rightColumns: 1
			} );
		} );
	</script>
<script>
$(document).on("click", ".open-AddBookDialog", function (e) {	
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');	
    $("#bookId").val(myBookId[0]);
	$("#maqhns").val(myBookId[1]);
	$("#tendv").val(myBookId[2]);
	$("#tencqcq").val(myBookId[3]);
	$("#loaihinh").val(myBookId[4]);
	$("#nlb").val(myBookId[5]);
	$("#ptkt").val(myBookId[6]);
	$("#ttdv").val(myBookId[7]);
	$("#hotenngdung").val(myBookId[8]);
	$("#email").val(myBookId[9]);
	$("#sodt").val(myBookId[10]);	
    $(_self.attr('href')).modal('show');
});
 </script>	
<script type="text/javascript">
	function showAjaxModal()
	{		
		jQuery('#modal-6').modal('show', {backdrop: 'static'});	
	}
</script>	
		<hr />			
		<h3>Nhập danh sách tài khoản đơn vị</h3>
<?php

	if (isset($_POST['chinhsuatss'])) 
	{
   		$up = "UPDATE thongtindonvi SET maqhns='$_POST[maqhns]',tendv='$_POST[tendv]',tencqcq='$_POST[tencqcq]',loaihinh='$_POST[loaihinh]'";
		$up = $up. ",nlb='$_POST[nlb]',ptkt='$_POST[ptkt]',ttdv='$_POST[ttdv]',hotenngdung='$_POST[hotenngdung]',email='$_POST[email]'";
		$up = $up. ",sodt='$_POST[sodt]' WHERE madonvi = '".$_POST['bookId']."'";
		$uup = mysql_query($up);				
	}        
?>		
<?php

	if (isset($_POST['insert'])) 
	{
		
   		$sql = "insert into thongtindonvi SET maqhns='$_POST[maqhns]',tendv='$_POST[tendv]',tencqcq='$_POST[tencqcq]',loaihinh='$_POST[loaihinh]'"
		. "hotenngdung='$_POST[hotenngdung]',mk='$_POST[mk]'";		
		$qrsql = mysql_query($sql);				
	}        
?>	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>Mã đơn vị</th>
					<th>Mã QHNS</th>
					<th>Tên đơn vị</th>
					<th>Tên cơ quan chủ quản</th>
					<th>Loại hình đơn vị</th>
					<th>Người lập biểu</th>
					<th>Phụ trách kế toán</th>
					<th>Thủ trưởng đơn vị</th>
					<th>Tên đăng nhập</th>					
					<th>Họ tên người dùng</th>
					<th>Địa chỉ email</th>
					<th>Số điện thoại</th>					
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php 
//
$ab = $ma[0];
$sql = "select madonvi,maqhns,tendv,tencqcq,loaihinh,nlb,ptkt,ttdv,tendangnhap,hotenngdung,email,sodt from thongtindonvi where madonvi like '$ab%'";
$kq = mysql_query($sql);
$tatca = "";    
if(mysql_num_rows($kq)>0){
	while($row=mysql_fetch_array($kq)){
	$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".$row[5].">".$row[6].">".$row[7].">".$row[9].">".$row[10].">".$row[11];
            echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"<td>$row[5]</td>";
				echo"<td>$row[6]</td>";
				echo"<td>$row[7]</td>";
				echo"<td>$row[8]</td>";				
				echo"<td>$row[9]</td>";
				echo"<td>$row[10]</td>";
				echo"<td>$row[11]</td>";
                echo"<td>
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
							Sửa</a>												
					</td>";
            echo"</tr>";
     }}         
 ?> 
			</tbody>
		</table>
	
		<br />		
	</div>
</div>
<div class="modal fade" id="addBookDialog">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Chỉnh Sửa thông tin đơn vị</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role='form' method='POST' action = 'DMDV.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Mã đơn vị:</label>
								<div class="col-sm-8">
										<input name="bookId" type="text" readonly = "false" class="form-control" id="bookId">									
								</div>
								<label class="col-sm-3 control-label">Mã QHNS:</label>
								<div class="col-sm-8">
									<input name="maqhns" type="text" class="form-control" id="maqhns">
								</div>								
								<label class="col-sm-3 control-label">Tên đơn vị:</label>
								<div class="col-sm-8">
									<input name="tendv" type="text" class="form-control" id="tendv">
								</div>							
								<label class="col-sm-3 control-label">Cơ quan cấp trên:</label>
								<div class="col-sm-8">
									<input name="tencqcq" type="text" class="form-control" id="tencqcq">
								</div>
								<label class="col-sm-3 control-label">Loại hình:</label>
								<div class="col-sm-8">									
									<select name='loaihinh' class='form-control' id = "loaihinh">									
									<option selected='selected' value='Đơn vị báo cáo'>Đơn vị báo cáo</option>
									<option selected='selected' value='Đơn vị tổng hợp'>Đơn vị tổng hợp</option>
									<option selected='selected' value=''>Chọn năm loại hình</option>
									</select>
								</div>
								<label class="col-sm-3 control-label">Người lập biểu:</label>
								<div class="col-sm-8">
									<input name="nlb" type="text" class="form-control" id="nlb">
								</div>	
								<label class="col-sm-3 control-label">Phụ trách kế toán:</label>
								<div class="col-sm-8">
									<input name="ptkt" type="text" class="form-control" id="ptkt">
								</div>	
								<label class="col-sm-3 control-label">Thủ trưởng đơn vị:</label>
								<div class="col-sm-8">
									<input name="ttdv" type="text" class="form-control" id="ttdv">
								</div>
								<label class="col-sm-3 control-label">Họ tên người dùng:</label>
								<div class="col-sm-8">
									<input name="hotenngdung" type="text" class="form-control" id="hotenngdung">
								</div>		
								<label class="col-sm-3 control-label">Địa chỉ email:</label>
								<div class="col-sm-8">
									<input name="email" type="text" class="form-control" id="email">
								</div>	
								<label class="col-sm-3 control-label">Số điện thoại:</label>
								<div class="col-sm-8">
									<input name="sodt" type="text" class="form-control" id="sodt">
								</div>	
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
								<input type="submit" name="chinhsuatss" class="btn btn-info" value = "Cập nhật">
							</div>	
						</form>						
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="addBookDialog">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Thêm mới đơn vị</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role='form' method='POST' action = 'DMDV.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tỉnh:</label>
								<?php								
								$sql="select matinh,tentinh from tbltinhhuyenxa";
								$sql1=mysql_query($sql);
								echo"<div  class='col-sm-5'>";
									echo"<select name='tentinh' class='form-control' id='tentinh'>";
									echo"<option selected='selected' value=''>Chọn Tỉnh</option>";
										while ($data=mysql_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label class="col-sm-3 control-label">Huyện:</label>
								<?php								
								$sql="select mahuyen,tenhuyen from tbltinhhuyenxa";
								$sql1=mysql_query($sql);
								echo"<div  class='col-sm-5'>";
									echo"<select name='tenhuyen' class='form-control' id='tenhuyen'>";
									echo"<option selected='selected' value=''>Chọn Huyện</option>";
										while ($data=mysql_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label class="col-sm-3 control-label">Mã QHNS:</label>
								<div class="col-sm-8">
									<input name="maqhns" type="text" class="form-control" id="maqhns">
								</div>								
								<label class="col-sm-3 control-label">Tên đơn vị:</label>
								<div class="col-sm-8">
									<input name="tendv" type="text" class="form-control" id="tendv">
								</div>							
								<label class="col-sm-3 control-label">Cơ quan cấp trên:</label>
								<div class="col-sm-8">
									<input name="tencqcq" type="text" class="form-control" id="tencqcq">
								</div>
								<label class="col-sm-3 control-label">Loại hình:</label>
								<div class="col-sm-8">									
									<select name='loaihinh' class='form-control' id = "loaihinh">									
									<option selected='selected' value='Đơn vị báo cáo'>Đơn vị báo cáo</option>
									<option selected='selected' value='Đơn vị tổng hợp'>Đơn vị tổng hợp</option>
									<option selected='selected' value=''>Chọn năm loại hình</option>
									</select>
								</div>								
								<label class="col-sm-3 control-label">Họ tên người dùng:</label>
								<div class="col-sm-8">
									<input name="hotenngdung" type="text" class="form-control" id="hotenngdung">
								</div>		
								<label class="col-sm-3 control-label">Mật khẩu:</label>
								<div class="col-sm-8">
									<input name="mk" type="text" class="form-control" id="mk">
								</div>									
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
								<input type="submit" name="insert" class="btn btn-info" value = "Cập nhật">
							</div>	
						</form>						
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>