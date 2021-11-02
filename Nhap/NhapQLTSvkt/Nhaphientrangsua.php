<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>											
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="opened active">
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
								<span class='title'>Quản lý tài sản cố định khác từ 500 triệu</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định khác dưới 500 triệu</span>
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
								<span class='title'>Quản lý tài sản cố định là nhà </span>
							</a>						
						</li>
						<li class="active">
							<a  href="/Nhap/NhapQLTSvkt/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý các vật kiến trúc khác</span>
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
							<a  href="/Thoaikx/ThoaiSoTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Số tài sản cố định (mẫu 2)</span>
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
				
				<li >
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title"><strong>Báo cáo theo TT 144</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_04aDKTSC.php">	<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo kê khai trụ sở làm việc (Mẫu 4a)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_04bDKTSC.php">	<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo kê khai ô tô (Mẫu 4b)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_4cDKTSC.php">	<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo kê khai tài sản khác (Mẫu 4c)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkKQTHMSTSNNlc.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai tình hình đầu tư xây dựng (Mẫu 9a)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkSDPTDLlc.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai quản lý, sử dụng xe ô tô và tài sản khác (Mẫu 9c)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkQLSDTSCSHDSNlc.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai quản lý, sử dụng TSLV, CSHĐSN (Mẫu 9b)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkTHXLTSNN.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai tình hình xử lý tài sản (Mẫu 9d)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_08a.php">	<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo hiện trạng sử dụng tài sản công (Mẫu 8a)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_08b.php">	<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo tổng hợp tình hình tăng, giảm tài sản công (Mẫu 8b)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_10a.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai tình hình đầu tư, mua sắm, giao, thuê tài sản công (Mẫu 10a)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiTT144_10b.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai tình hình quản lý, sử dụng tài sản công (Mẫu 10b)</span>
							</a>
						</li>
						<li >
							<a  href="/Thoaikx/ThoaiTT144_10c.php">	<i class="entypo-book-open"></i>
								<span class='title'>Công khai tình hình xử lý tài sản công (Mẫu 10c)</span>
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
						<li>
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
							<a href="http://hdts.890m.com/">	<i class="entypo-picasa"></i>	
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
							<a  onclick="showAjaxModalmk();"><i class='entypo-pencil'></i>
								Thay đổi mật khẩu
							</a>							
						</li>						
					</ul>
				</li>
			</ul>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!--------- Header ------------>
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap; }
		table > tbody > tr.highlight > td,
		table > tbody > tr.highlight > th {
		  /*background-color: pink !important;*/
			color: #e74c3c;
		}
	</style>
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>
	<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {  
		   $('table tbody tr').hover(function() {               
			  $(this).addClass('highlight');  
		   }, function() {  
			  $(this).removeClass('highlight');  
		   });  
		  
		});   
	</script>
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
			var table = $('#table-2').DataTable( {
				scrollY:        "400px",
				scrollX:        true,
				paging:         true
			} );

			new $.fn.dataTable.FixedColumns( table, {
				leftColumns: 0,
				rightColumns: 1
			} );
		} );
	</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
$(document).on("click", ".open-AddBookDialog", function (e) {

    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[0]);
	$("#ngaythang").val(myBookId[1]);
	$("#phanloai").val(myBookId[2]);
	$("#donvi").val(myBookId[3]);
	$("#soluong").val(myBookId[4]);
    $(_self.attr('href')).modal('show');		
});
 </script>
 	
<?php
$a= $_GET['id'];
$sql = "Select tentaisan,tenchitiet,chitiethinhthai From tblqlts where TTQLTS = '$a'";
$kq = mysqli_query($con,$sql);
$tentaisan="";$tenchitiet="";$chitiethinhthai="";
while($row=mysqli_fetch_array($kq)){
$tentaisan=$row[0];$tenchitiet=$row[1];$chitiethinhthai=$row[2];
}
?>
<hr />					
		<h3>Chi tiết hao mòn tài sản cố định</h3>
		<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='Nhaphientrang.php'" ?>" />
		<a  class='btn btn-success'>
			Tên tài sản:<?php echo  $tentaisan;?>
		</a>
		<a  class='btn btn-success'>
			Tên chi tiết:<?php echo  $tenchitiet;?>
		</a>
		<a  class='btn btn-success'>
			Loại tài sản:<?php echo $chitiethinhthai; ?>
		</a>	
	
<?php 	
	//
	if (isset($_POST['capnhatchinhsua']))
	{		
		$TThientrang=$_POST["bookId"];
		$ngaythang=doingay($_POST["ngaythang"]);
		$phanloai=$_POST["phanloai"];		
		$donvi=$_POST["donvi"];
		$soluong=$_POST["soluong"];
		$sql = "Update tblhientrang set ngaythang='$ngaythang',phanloai='$phanloai',donvi='$donvi',soluong=$soluong where TThientrang =".$TThientrang;								
		$kq=mysqli_query($con,$sql);
	}	        	
?>		
		<table  style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Ngày hiên trạng</th>
					<th>Phân loại</th>
					<th>Đơn vị tính</th>
					<th>Số lượng</th>	
					<th></th>
				</tr>
			</thead>			
			<tbody>	
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
function ktthanhly($mats)
{
    global $con;
	$sql = "Select * from tbldenghi where TTQLTS = '".$mats."' and (hinhthuc ='Thanh lý' or hinhthuc ='Bán' or hinhthuc ='Điều chuyển')";	
	$qrsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qrsql) <= 0)
		return false;
	else
		return true;
}
//
$sql = "select TThientrang,ngaythang,phanloai,donvi,soluong from tblhientrang where TTQLTS = '$a'";
$kq = mysqli_query($con,$sql); 
$ngay = "";
$dk = "";$stt=0;
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){	
			$stt++;
			$ngay = doingay1($row[1]);
			$dk = $row[0].">".$ngay.">".$row[2].">".$row[3].">".$row[4];
			$maxoa= $row[0].">".$a;
            echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$ngay</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";				
                echo"<td>$row[4]</td>";	
				if(!ktthanhly($a))
                echo"<td>
						<a data-id='$dk' title='Add this item' class='open-AddBookDialog btn btn-blue' href='#addBookDialog'>Sửa</a>						
						<a href=\"xoaht.php?id=$maxoa\" onclick=\"return confirm('Bạn muốn xóa hiện trạng sử dụng này?')\" class='btn btn-red'>
							
							Xóa
						</a>						
					</td>";
					else
						 echo"<td>
						<a data-id='$dk' title='Tài sản đã bán, thanh lý hoặc điều chuyển' class='btn btn-warning '>Sửa</a>						
						<a title='Tài sản đã bán, thanh lý hoặc điều chuyển' class='btn btn-warning '>
							
							Xóa
						</a>						
					</td>";
            echo"</tr>";
     }}         
 ?> 
			</tbody>
		</table>			
		
		<br />		
	</div>
</div>
<div class="modal fade" id="addBookDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chỉnh sửa hiện trạng sử dụng</h4>
      </div>
      <div class="modal-body">	  
		<?php echo "<form role='form' method='POST' action = 'Nhaphientrangsua.php?id=$a' class='form-horizontal form-groups-bordered'>"; ?>					
							<div class="form-group">
								<label class="col-sm-3 control-label">Số tài sản:</label>
								<div class="col-sm-5">
										<input name="bookId" type="text" class="form-control" id="bookId">									
								</div>	
							</div>
							<div class="form-group">							
								<label for="field-3" class="col-sm-3 control-label">Ngày Tháng:</label>
								<div class="col-sm-5">
									<input data-inputmask="'alias': 'date'" name="ngaythang" type="text" class="form-control" id="ngaythang">
								</div>		
							</div>
							<div class="form-group">								
								<label for="field-4" class="col-sm-3 control-label">Phân loại:</label>
								<div class="col-sm-5">
									<select name='phanloai' class='form-control' id="phanloai">									
									<option selected='selected' value='Kinh doanh'>Kinh doanh</option>
									<option selected='selected' value='Không KD'>Không KD</option>
									<option selected='selected' value='QLNN'>QLNN</option>
									<option selected='selected' value='HĐ khác'>HĐ khác</option>
									<option selected='selected' value=''>Chọn hiện trạng</option>
									</select>
								</div>	
							</div>
							<div class="form-group">								
								<label for="field-4" class="col-sm-3 control-label">ĐVT:</label>
								<div class="col-sm-5">
									<input name="donvi" type="text" class="form-control" id="donvi">
								</div>		
							</div>
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Số lượng:</label>
								<div class="col-sm-5">
									<input name="soluong" type="text" class="form-control" id="soluong">
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
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>