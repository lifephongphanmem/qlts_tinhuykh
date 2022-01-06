<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li <?php if (strlen($ma[0]) < 16)
					{
						echo "style='display:none';";
					}
				?> class="auto-inherit-active-class">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title"><strong>Quản lý dữ liệu</strong></span>
					</a>
					<ul>
						<li>
							
							<a  href="Nhap/NhapTCTS/NhapDNTC.php">	
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
						<li>
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
				<li <?php if (strlen($ma[0]) < 16)
					{
						echo "style='display:none';";
					}
				?>>
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
				<li class="opened active">
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
							<a  href="/Tienich/nhandlaccess.php">	<i class="entypo-picasa"></i>							
								<span class='title'>Nhận tài sản, công cụ từ file xml</span>
							</a>			
						</li>							
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
						<li class="active">					
							<a  href="/Tracuu/TraCuuCC/tracuucc.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>							
								<span class='title'>Tìm kiếm thông tin công cụ</span>
							</a>						
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTC/tracuutc.php?id=<?php echo "$ma[0]";?>">	<i class="entypo-search"></i>							
								<span class='title'>Tìm kiếm thông tin trang cấp</span>
							</a>	
						</li>
						<li  >
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
<!-------- Header ---------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>
	<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap; }
		table > tbody > tr.highlight > td,
		table > tbody > tr.highlight > th {
		  /*background-color: pink !important;*/
			color: #e74c3c;
		}
	</style>
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
				paging:         false
			} );

			new $.fn.dataTable.FixedColumns( table, {
				leftColumns: 0,
				rightColumns: 1
			} );
		} );
		</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#chitiethinhthai').change(function() {
   giatri = this.value;
   	if (giatri == "Máy móc, thiết bị")
	{
	   $('#hienthi').load();
	   $('#hienthi').show();
	}
	else
	{
		$('#hienthi').hide();
	}

  });
 });
</script>	
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php 
$ab = $ma[0];
$key = "";
if (isset($_GET['ib']))
{
$key = $_GET['ib'];
$key2 = explode (">",$key);
}
?>
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="form-group">
								<h3>Tra cứu công cụ dụng cụ lâu bền</h3>
							<div>
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="modal-content">							
						<div class="modal-body">				
						<form role="form" method="POST" action = "tracuucc.php" class="form-horizontal form-groups-bordered">					
							<div class="form-group" >
								<span  <?php if (strlen($ma[0]) >= 16){echo "style='display:none';";}?>>
								<?php								
								$sql="select madonvi,tendv from thongtindonvi where madonvi Like '$ab%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='tendv' class='form-control' id='tendv'>";
									echo"<option selected='selected' value=''>Đơn vị</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($data[0] == $_POST['tendv'])
									echo "<option selected='selected' value='".$data[0]."'>".$data[1]."</option>";
									else if ($data[0] == $key2[5])
										echo "<option selected='selected' value='".$data[0]."'>".$data[1]."</option>";
									else
										echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>									
							</span>	
								<?php								
								$sql="select chitiethinhthai from tblqlcc where madonvi Like '$ma[0]%' group by chitiethinhthai";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='chitiethinhthai' class='form-control' id='chitiethinhthai'>";
									echo"<option selected='selected' value=''>Công cụ</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if($data[0] == $_POST['chitiethinhthai'])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else if($data[0] == $key2[0] && $_POST['chitiethinhthai'] == "")
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<?php								
								$sql="select noidung from tblqlts where madonvi like '$ma[0]%' group by noidung";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='noidung' class='form-control' id='noidung'>";
									echo"<option selected='selected' value=''>Nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if($data[0] == $_POST['noidung'])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else if ($data[0] == $key2[1]  && $_POST['noidung'] == "" )
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<div class="col-sm-2">
									<input data-inputmask="'alias': 'date'" name="NTTu" placeholder="Từ ngày" type="text" class="form-control" value="<?php if (isset($_POST['NTTu'])){echo $_POST['NTTu'];} else if (isset($key2[2])){ echo $key2[2];} ?>" id="NTTu">
								</div>								
								<div class="col-sm-2">
									<input data-inputmask="'alias': 'date'" name="NTDen" placeholder="Đến ngày" type="text" class="form-control" value="<?php if (isset($_POST['NTDen'])){echo $_POST['NTDen'];} else if (isset($key2[3])){ echo $key2[3];} ?>" id="NTDen">
								</div>								
						
							<div style="display:none" id="hienthi">
							<?php
								$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Máy móc, thiết bị' ";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-4'>";
									echo"<select name='tentaisanmmtb' class='form-control' id='tentaisanmmtb'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Máy móc, thiết bị")
									{
									if($data[0] == $_POST['tentaisanmmtb'])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$_POST['tentaisanmmtb'] = "";
									}
									if ($key != "" && !isset($_POST['chitiethinhthai']) )
									{
									if ($data[0] == $key2[4])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$key2[4] = "";
									}
									
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
		
										echo "</select>";
									echo "</div>	";
							?>
							</div>
							<input type="submit" name="capnhatts" class="btn btn-blue" value = "Tìm kiếm">
							<a   href="/Tracuu/TraCuuCC/tracuucc.php">							
								<span style="background-color: pink" class="btn btn-pink">Nhập lại</span>
							</a>
							</div>
							</div>					
								
						</form>		
							<?php
								if (isset($_POST['capnhatts']))
								{
									?>
										<script language='javascript'>
										 $(document).ready(function() {
										 var mmtb = "<?php echo $_POST['chitiethinhthai']; ?>";
											 if (mmtb == "Máy móc, thiết bị")
											   $('#hienthi').show();
											 else
											   $('#hienthi').hide();
											 });
										</script>
									<?php
								}
							?>
								<?php
								 if ($key != "")
								{
									?>
										<script language='javascript'>
										 $(document).ready(function() {				
										 var mmtb1 = "<?php echo $key2[0]; ?>";
											 if (mmtb1 == "Máy móc, thiết bị")
											   $('#hienthi').show();
											 else
											   $('#hienthi').hide();
											 });
										</script>
									<?php
								}
							?>
				</div>
			</div>
							
											
						</form>	
				
					<div id = "sTTKK" class="table-responsive"> 
						<form method="POST">
								<table  style="line-height: 0;" class="stripe row-border order-column" id="table-2">
								<thead>
									<tr>
										<th>Nhóm công cụ</th>
										<th>Tên công cụ</th>
										<th>Tên chi tiết</th>
										<th>Số lượng</th>
										<th>Đơn giá</th>										
										<th>Thành tiền</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
<?php
function dinhdangso($so)
{
	$kq = "";
	if ($so > 0)
		$kq = number_format($so);
	return $kq;	
}
function doingay($ngay)
{
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}
$sqlct = "";


if (isset($_POST['capnhatts']) && strlen($ma[0]) >= 16)
{
	$sqlct = "Select chitiethinhthai,tentaisan,tenchitiet,DTKV,dongia,thanhtien,TTQLcc from tblqlcc where ".($_POST['NTTu']==""? " ngaysudung like '%'": "ngaysudung > '".doingay($_POST['NTTu'])."'")." and madonvi like '".$ab."%' and ".($_POST['NTDen']==""? " ngaysudung like '%'": "ngaysudung < '".doingay($_POST['NTDen'])."'")."  and chitiethinhthai like '".($_POST['chitiethinhthai']==""?"%":$_POST['chitiethinhthai'])."' and noidung like '".($_POST['noidung']==""?"%":$_POST['noidung'])."' and tentaisan like '".($_POST['tentaisanmmtb']==""?"%":$_POST['tentaisanmmtb'])."'  ";
}

else if (isset($_POST['capnhatts']))
{
	$sqlct = "Select chitiethinhthai,tentaisan,tenchitiet,DTKV,dongia,thanhtien,TTQLcc from tblqlcc where ".($_POST['NTTu']==""? " ngaysudung like '%'": "ngaysudung > '".doingay($_POST['NTTu'])."'")." and madonvi like '".$_POST['tendv']."%' and ".($_POST['NTDen']==""? " ngaysudung like '%'": "ngaysudung < '".doingay($_POST['NTDen'])."'")."  and chitiethinhthai like '".($_POST['chitiethinhthai']==""?"%":$_POST['chitiethinhthai'])."' and noidung like '".($_POST['noidung']==""?"%":$_POST['noidung'])."' and tentaisan like '".($_POST['tentaisanmmtb']==""?"%":$_POST['tentaisanmmtb'])."' ";
}

else if ($key != "")
{
	$sqlct = "Select chitiethinhthai,tentaisan,tenchitiet,DTKV,dongia,thanhtien,TTQLcc from tblqlcc where ".($key2[2]==""? " ngaysudung like '%'": "ngaysudung > '".doingay($key2[2])."'")." and madonvi like '".$key2[5]."%' and ".($key2[3]==""? " ngaysudung like '%'": "ngaysudung < '".doingay($key2[3])."'")."  and chitiethinhthai like '".($key2[0] ==""?"%":$key2[0])."' and noidung like '".($key2[1]==""?"%":$key2[1])."' and tentaisan like '".($key2[4]==""?"%":$key2[4])."' ";
}

else
{
	$sqlct = "Select chitiethinhthai,tentaisan,tenchitiet,DTKV,dongia,thanhtien,TTQLcc from tblqlcc where madonvi like '$ab%' ";
}


$qrct = mysqli_query($con,$sqlct);
$tenct = "";$tatca="";$dongia="";$thanhtien="";
while($rct=@mysqli_fetch_array($qrct))
{
		$mang="";
					if (isset($_POST['capnhatts']))
					{
						$mang = $_POST['chitiethinhthai'].">".$_POST['noidung'].">".$_POST['NTTu'].">".$_POST['NTDen'].">".$_POST['tentaisanmmtb'].">".$_POST['tendv'];
					}
					else if ($key != "")
					{
						$mang = $key2[0].">".$key2[1].">".$key2[2].">".$key2[3].">".$key2[4].">".$key2[5];
					}
					else 
					{	
						$a1 = $a2 = $a3 = $a4  = $a5  = "";
						$mang = $a1.">".$a2.">".$a3.">".$a4.">".$a5.">".$ab;
					}
					$matd=$rct[6]."-".$mang;
	$dongia = dinhdangso($rct[4]);$thanhtien=dinhdangso($rct[5]);
	echo"<tr>";
	echo "<td>$rct[0]</td>";
	echo "<td>$rct[1]</td>";
	echo "<td>$rct[2]</td>";
	echo "<td>$rct[3]</td>";
	echo "<td>$dongia</td>";
	echo "<td>$thanhtien</td>";	
	echo"<td>	
		<a href=\"chitiet.php?id=$matd\" class='btn btn-info '>
			
			Xem chi tiết
		</a>
	</td>";
	echo"</tr>";
}	
?>								
						</tbody>							
						</table>
				</form>		
			</div>
		</div>		
	</div>
</div>

<!--------- Footer ---------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>