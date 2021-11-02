<?php require "general.php";
	  include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>												
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
						<li class="active">
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
						<span class="title"><strong>Báo cáo kê khai theo TT 89</strong></span>
					</a>
					<ul>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkQLSDTSCSHDSNlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai quản lý, sử dụng TSLV, CSHĐSN</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkKHMSTSNNlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai kế hoạch mua sắm tài sản nhà nước</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkKQTHMSTSNNlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai kết quả mua sắm tài sản nhà nước</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkSDPTDLlc.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai quản lý, sử dụng phương tiện đi lại và tài sản khác</span>
							</a>	
						</li>
						<li>
							<a  href="/Thoaitonghop/ThoaiCkTHXLTSNN.php">	<i class="entypo-book-open"></i>						
								<span class='title'>Công khai tình hình xử lý tài sản</span>
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
<!--------- Header ----------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script src="/my_script.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>

<script language='javascript'>
 $(document).ready(function()
 {
	 $('#mataisan').change(function(){
		 var div = document.getElementById('thongbao');
		 div.style.display = 'none';
	 });

 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#DTKV').change(function() {
	  giatrinhap();
	  var div = document.getElementById('thongbao');
	  div.style.display = 'none';
  });
	 $('#soluongx').change(function() {
		 giatrixuat();
	 });
	 $('#dongia').change(function() {
		 giatrinhap();
		 var div = document.getElementById('thongbao');
		 div.style.display = 'none';
	 });
	 $("#ngaysudung").change(function(){
		 var giatri = this.value;
		 giatri = giatri.split('/');
		 $("#namsanxuat").val(giatri[2]);
		 $("#ngayxuat").val(this.value)
		 var div = document.getElementById('thongbao');
		 div.style.display = 'none';
	 })
 });
	function giatrinhap()
	{
		var soluong = $("#DTKV").val();
		soluong = soluong.replace(/,/g,"");
		var dongia = $("#dongia").val();
		dongia = dongia.replace(/,/g,"");
		var tienmua = parseFloat(soluong)*parseFloat(dongia);
		$("#thanhtien").val(tienmua);
		$("#soluongx").val(soluong);
		$("#sotienx").val(tienmua);
	}
	function giatrixuat()
	{
		var soluongx = $("#soluongx").val();
		soluongx = soluongx.replace(/,/g,"");
		var dongia = $("#dongia").val();
		dongia = dongia.replace(/,/g,"");
		var tienxuat = parseFloat(soluongx) * parseFloat(dongia);
		$("#sotienx").val(tienxuat);
	}
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
function getFocus() {
	document.getElementById("namsanxuat").focus();
	document.getElementById("ngaynhap").focus();
	document.getElementById("ngaysudung").focus();
	document.getElementById("noidung").focus();
	document.getElementById("DTKV").focus();
	document.getElementById("dongia").focus();
	document.getElementById("thanhtien").focus();
	document.getElementById("ngayxuat").focus();
	document.getElementById("noisudung").focus();
	document.getElementById("soluongx").focus();
	document.getElementById("sotienx").focus();
}
</script>
<script language="javascript" type="text/javascript">
	document.forms['nhapmoi'].name.focus();
	function kt()
	{
		var frm = window.document.nhapmoi;
		if(frm.mataisan.value=='')
		{
			alert('Xin vui lòng chọn tên công cụ!');
			document.forms['nhapmoi'].mataisan.focus();
			return false;
		}
		else if (frm.tenchitiet.value == '')
		{
			alert('Xin vui lòng nhập tên công cụ dụng cụ!');
			document.forms['nhapmoi'].tenchitiet.focus();
			return false;
		}
		else if (frm.ngaysudung.value == '')
		{
			alert('Xin vui lòng nhập ngày tháng sử dụng!');
			document.forms['nhapmoi'].ngaysudung.focus();
			return false;
		}
		else if(frm.DTKV.value == '')
		{
			alert('Xin vui lòng nhập số lượng nhập công cụ dụng cụ!');
			document.forms['nhapmoi'].DTKV.focus();
			return false;
		}
		else if(frm.dongia.value == '')
		{
			alert('Xin vui lòng nhập đơn giá công cụ dụng cụ!');
			document.forms['nhapmoi'].dongia.focus();
			return false;
		}
		else
		{
			var nhap = $('#soluong').val();
			var xuat = $('#soluongx').val();
			if((parseFloat(nhap) - parseFloat(xuat)) < 0 )
			{
				alert("Số lượng xuất vượt quá số lượng nhập. Bạn hãy kiểm tra lại!");
				document.getElementById("soluongx").focus();
				return false;
			}
			else if(parseFloat(xuat) <= 0 )
			{
				alert("Số lượng xuất không thể nhỏ hơn hoặc bằng 0. Bạn hãy kiểm tra lại!");
				document.getElementById("soluongx").focus();
				return false;
			}
			else
				return true;
		}
	}
</script>

<div class="col-sm-12">
	<a class="tieude" href='/main.php' >
		Trang chủ
	</a>
	>><a class="tieude" href='NhapQLCC.php'>
		Quản lý công cụ dụng cụ
	</a>
	>><a class="tieude">
		Nhập sửa công cụ dụng cụ
	</a>
</div>
<?php
$ab = $ma[0];
$id = $_GET['id'];
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);
	return $kq;
}
if (isset($_POST['capnhat']))
{
	$mataisan = $_POST["mataisan"];
	$tenchitiet = $_POST["tenchitiet"];
	$tentaisan = "";
	$chitiethinhthai = "";
	$ttsx = 0;
	$ngaynhap = doingay($_POST['ngaynhap']);
	$ngaysudung = doingay($_POST['ngaysudung']);
	$ngayxuat = doingay($_POST['ngayxuat']);
	$namsanxuat = $_POST['namsanxuat'];
	$NUOCSX = $_POST['NUOCSX'];
	$noidung = $_POST['noidung'];
	$DVT = $_POST['DVT'];
	$DTKV = kieudouble($_POST['DTKV']);
	$dongia = kieudouble($_POST['dongia']);
	$thanhtien = kieudouble($_POST['thanhtien']);
	$GCTS = $_POST['GCTS'];
	$soluongx = kieudouble($_POST['soluongx']);
	$sotienx = kieudouble($_POST['sotienx']);
	$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '" . $mataisan . "'";
	$kqts = mysqli_query($con,$sqlts);
	while ($row = mysqli_fetch_array($kqts)) {
		$tentaisan = $row[0];
		$chitiethinhthai = $row[1];
		$ttsx = $row[2];
	}
	$sql = "Update tblqlcc set mataisan='$mataisan', tentaisan='$tentaisan', tenchitiet='$tenchitiet', ngaynhap='$ngaynhap',".
			" namsanxuat='$namsanxuat', ngaysudung='$ngaysudung', noidung='$noidung', dongia='$dongia', thanhtien='$thanhtien',".
			" DTKV='$DTKV', NUOCSX='$NUOCSX',".
			" chitiethinhthai='$chitiethinhthai', GCTS='$GCTS', DVT='$DVT',  sothutu='$ttsx' where TTQLcc = $id";
	$qrsql = mysqli_query($con,$sql);
	if ($qrsql) {
		header("Location:NhapQLCC.php");
		/*
		echo "<div class = 'col-sm-12' style='text-align: center;'>";
		echo "<div class='col-sm-117' style='text-align: center;' id='thongbao'>";
			echo "<form >";
			echo "<div class = 'col-sm-12' style='text-align: center;'>";
			echo "<fieldset>";
				echo "<legend>Thông báo</legend >";
				echo "<label class='col-sm-12 control-label'> Bạn đã cập nhật chỉnh sửa thành công công cụ: <strong>".$tenchitiet."</strong>!";
				echo "</label>";
			echo "</fieldset>";
		echo "</div>";
			echo "</form>";
		echo "</div>";
		echo "</div>";
		*/
	}
}
$sql = "Select mataisan,tenchitiet,ngaynhap,namsanxuat,ngaysudung,NUOCSX,noidung,DVT,DTKV,dongia,thanhtien,GCTS from tblqlcc where TTQLcc = $id";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql)) {
	?>
	<div class="col-sm-12">
		<form name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
			<div class="col-sm-12">
				<fieldset>
					<legend>Thông tin công cụ</legend>
					<label class="col-sm-15 control-label">Tên công cụ<span
								style="padding-left:0px; color:red;">*</span>:</label>
					<?php
					$sql = "select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where mataisanqd32 Like 'CC%'";
					$sql1 = mysqli_query($con,$sql);
					echo "<div  class='col-sm-45'>";
					echo "<select name='mataisan' class='form-control' id='mataisan'>";
					echo "<option selected='selected' value=''>Chọn tên công cụ</option>";
					while ($data = mysqli_fetch_row($sql1)) {
						if ($row['mataisan'] == $data[0])
							echo "<option selected = 'selected' value='$data[0]'>" . $data[1] . "</option>";
						else
							echo "<option value='" . $data[0] . "'>" . $data[1] . "</option>";

					}
					echo "</select>";
					echo "</div>";
					?>
					<label for="field-3" class="col-sm-15 control-label">Tên chi tiết<span
								style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-45">
						<input name="tenchitiet" type="text" value="<?php echo $row['tenchitiet'];?>" data-validate="requaired" class="form-control"
							   id="field-3">
					</div>
					<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span
								style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-45">
						<input data-inputmask="'alias': 'date'" tabindex="-1" value="<?php echo doingay1($row['ngaynhap']);?>" name="ngaynhap" tabindex="-1" type="text"
							   class="form-control" id="ngaynhap"/>
					</div>
					<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span
								style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-45">
						<input data-inputmask="'alias': 'date'" name="ngaysudung" value="<?php echo doingay1($row['ngaysudung']);?>" type="text" class="form-control"
							   id="ngaysudung"/>
					</div>
					<label for="field-4" class="col-sm-15 control-label">Năm sản xuất<span
								style="padding-left:0px; color:red;">*</span>:</label>

					<div class="col-sm-45">
						<input data-mask="decimal" name='namsanxuat' value="<?php echo $row['namsanxuat'];?>" tabindex="-1" id='namsanxuat'
							   class='form-control'/>
					</div>
					<label for="field-4" class="col-sm-15 control-label">Nước sản xuất<span
								style="padding-left:0px; color:red;">*</span>:</label>

					<div class="col-sm-45">
						<select name='NUOCSX' tabindex="-1" class='form-control'>
							<option <?php if($row['NUOCSX'] == "Abkhazia") echo "selected='selected'" ; ?> value='Abkhazia'>Abkhazia</option>
							<option <?php if($row['NUOCSX'] == "Abkhazia") echo "selected='selected'" ; ?> value='Afghanistan'>Abkhazia</option>
							<option <?php if($row['NUOCSX'] == "Ai Cập") echo "selected='selected'" ; ?> value='Ai Cập'>Ai Cập</option>
							<option <?php if($row['NUOCSX'] == "Albania") echo "selected='selected'" ; ?> value='Albania'>Albania</option>
							<option <?php if($row['NUOCSX'] == "Algérie") echo "selected='selected'" ; ?> value='Algérie'>Algérie</option>
							<option <?php if($row['NUOCSX'] == "Andorra") echo "selected='selected'" ; ?> value='Andorra'>Andorra</option>
							<option <?php if($row['NUOCSX'] == "Angola") echo "selected='selected'" ; ?> value='Angola'>Angola</option>
							<option <?php if($row['NUOCSX'] == "Anh") echo "selected='selected'" ; ?> value='Anh'>Anh</option>
							<option <?php if($row['NUOCSX'] == "Áo") echo "selected='selected'" ; ?> value='Áo'>Áo</option>
							<option <?php if($row['NUOCSX'] == "Ả Rập Saudi") echo "selected='selected'" ; ?> value='Ả Rập Saudi'>Ả Rập Saudi</option>
							<option <?php if($row['NUOCSX'] == "Argentina") echo "selected='selected'" ; ?> value='Argentina'>Argentina</option>
							<option <?php if($row['NUOCSX'] == "Armenia") echo "selected='selected'" ; ?> value='Armenia'>Armenia</option>
							<option <?php if($row['NUOCSX'] == "Azawad") echo "selected='selected'" ; ?> value='Azawad'>Azawad</option>
							<option <?php if($row['NUOCSX'] == "Azerbaijan") echo "selected='selected'" ; ?> value='Azerbaijan'>Azerbaijan</option>
							<option <?php if($row['NUOCSX'] == "Ấn Độ") echo "selected='selected'" ; ?> value='Ấn Độ'>Ấn Độ</option>
							<option <?php if($row['NUOCSX'] == "Bahamas") echo "selected='selected'" ; ?> value='Bahamas'>Bahamas</option>
							<option <?php if($row['NUOCSX'] == "Bahrain") echo "selected='selected'" ; ?> value='Bahrain'>Bahrain</option>
							<option <?php if($row['NUOCSX'] == "Bangladesh") echo "selected='selected'" ; ?> value='Bangladesh'>Bangladesh</option>
							<option <?php if($row['NUOCSX'] == "Barbados") echo "selected='selected'" ; ?> value='Barbados'>Barbados</option>
							<option <?php if($row['NUOCSX'] == "Bắc Síp") echo "selected='selected'" ; ?> value='Bắc Síp'>Bắc Síp</option>
							<option <?php if($row['NUOCSX'] == "Belarus") echo "selected='selected'" ; ?> value='Belarus'>Belarus</option>
							<option <?php if($row['NUOCSX'] == "Belize") echo "selected='selected'" ; ?> value='Belize'>Belize</option>
							<option <?php if($row['NUOCSX'] == "Benin") echo "selected='selected'" ; ?> value='Benin'>Benin</option>
							<option <?php if($row['NUOCSX'] == "Bhutan") echo "selected='selected'" ; ?> value='Bhutan'>Bhutan</option>
							<option <?php if($row['NUOCSX'] == "Bỉ") echo "selected='selected'" ; ?> value='Bỉ'>Bỉ</option>
							<option <?php if($row['NUOCSX'] == "Bolivia") echo "selected='selected'" ; ?> value='Bolivia'>Bolivia</option>
							<option <?php if($row['NUOCSX'] == "Botswana") echo "selected='selected'" ; ?> value='Botswana'>Botswana</option>
							<option <?php if($row['NUOCSX'] == "Bồ Đào Nha") echo "selected='selected'" ; ?> value='Bồ Đào Nha'>Bồ Đào Nha</option>
							<option <?php if($row['NUOCSX'] == "Bờ biển ngà") echo "selected='selected'" ; ?> value='Bờ biển ngà'>Bờ biển ngà</option>
							<option <?php if($row['NUOCSX'] == "Brazil") echo "selected='selected'" ; ?> value='Brazil'>Brazil</option>
							<option <?php if($row['NUOCSX'] == "Brunei") echo "selected='selected'" ; ?> value='Brunei'>Brunei</option>
							<option <?php if($row['NUOCSX'] == "Bulgaria") echo "selected='selected'" ; ?> value='Bulgaria'>Bulgaria</option>
							<option <?php if($row['NUOCSX'] == "Burundi") echo "selected='selected'" ; ?> value='Burundi'>Burundi</option>
							<option <?php if($row['NUOCSX'] == "Cabo Verde") echo "selected='selected'" ; ?> value='Cabo Verde'>Cabo Verde</option>
							<option <?php if($row['NUOCSX'] == "Các tiểu vương quốc Ả rập thống nhất") echo "selected='selected'" ; ?> value='Các tiểu vương quốc Ả rập thống nhất'>Các tiểu vương quốc Ả rập thống nhất</option>
							<option <?php if($row['NUOCSX'] == "Cameroon") echo "selected='selected'" ; ?> value='Cameroon'>Cameroon</option>
							<option <?php if($row['NUOCSX'] == "Campuchia") echo "selected='selected'" ; ?> value='Campuchia'>Campuchia</option>
							<option <?php if($row['NUOCSX'] == "Canada") echo "selected='selected'" ; ?> value='Canada'>Canada</option>
							<option <?php if($row['NUOCSX'] == "Chile") echo "selected='selected'" ; ?> value='Chile'>Chile</option>
							<option <?php if($row['NUOCSX'] == "Colombia") echo "selected='selected'" ; ?> value='Colombia'>Colombia</option>
							<option <?php if($row['NUOCSX'] == "Comoros") echo "selected='selected'" ; ?> value='Comoros'>Comoros</option>
							<option <?php if($row['NUOCSX'] == "Congo") echo "selected='selected'" ; ?> value='Congo'>Congo</option>
							<option <?php if($row['NUOCSX'] == "Costa Rica") echo "selected='selected'" ; ?> value='Costa Rica'>Costa Rica</option>
							<option <?php if($row['NUOCSX'] == "Croatia") echo "selected='selected'" ; ?> value='Croatia'>Croatia</option>
							<option <?php if($row['NUOCSX'] == "Cuba") echo "selected='selected'" ; ?> value='Cuba'>Cuba</option>
							<option <?php if($row['NUOCSX'] == "Djibouti") echo "selected='selected'" ; ?> value='Djibouti'>Djibouti</option>
							<option <?php if($row['NUOCSX'] == "Dominica") echo "selected='selected'" ; ?> value='Dominica'>Dominica</option>
							<option <?php if($row['NUOCSX'] == "Dominicana") echo "selected='selected'" ; ?> value='Dominicana'>Dominicana</option>
							<option <?php if($row['NUOCSX'] == "Đan Mạch") echo "selected='selected'" ; ?> value='Đan Mạch'>Đan Mạch</option>
							<option <?php if($row['NUOCSX'] == "Đông Timor") echo "selected='selected'" ; ?> value='Đông Timor'>Đông Timor</option>
							<option <?php if($row['NUOCSX'] == "Đức") echo "selected='selected'" ; ?> value='Đức'>Đức</option>
							<option <?php if($row['NUOCSX'] == "Ecuador") echo "selected='selected'" ; ?> value='Ecuador'>Ecuador</option>
							<option <?php if($row['NUOCSX'] == "El Salvador") echo "selected='selected'" ; ?> value='El Salvador'>El Salvador</option>
							<option <?php if($row['NUOCSX'] == "Eritrea") echo "selected='selected'" ; ?> value='Eritrea'>Eritrea</option>
							<option <?php if($row['NUOCSX'] == "Estonia") echo "selected='selected'" ; ?> value='Estonia'>Estonia</option>
							<option <?php if($row['NUOCSX'] == "Ethiopia") echo "selected='selected'" ; ?> value='Ethiopia'>Ethiopia</option>
							<option <?php if($row['NUOCSX'] == "Fiji") echo "selected='selected'" ; ?> value='Fiji'>Fiji</option>
							<option <?php if($row['NUOCSX'] == "Gabon") echo "selected='selected'" ; ?> value='Gabon'>Gabon</option>
							<option <?php if($row['NUOCSX'] == "Gambia") echo "selected='selected'" ; ?> value='Gambia'>Gambia</option>
							<option <?php if($row['NUOCSX'] == "Ghana") echo "selected='selected'" ; ?> value='Ghana'>Ghana</option>
							<option <?php if($row['NUOCSX'] == "Grenada") echo "selected='selected'" ; ?> value='Grenada'>Grenada</option>
							<option <?php if($row['NUOCSX'] == "Gruzia") echo "selected='selected'" ; ?> value='Gruzia'>Gruzia</option>
							<option <?php if($row['NUOCSX'] == "Guatemala") echo "selected='selected'" ; ?> value='Guatemala'>Guatemala</option>
							<option <?php if($row['NUOCSX'] == "Guinea-Bissau") echo "selected='selected'" ; ?> value='Guinea-Bissau'>Guinea-Bissau</option>
							<option <?php if($row['NUOCSX'] == "Guinea Xích Đạo") echo "selected='selected'" ; ?> value='Guinea Xích Đạo'>Guinea Xích Đạo</option>
							<option <?php if($row['NUOCSX'] == "Guinea") echo "selected='selected'" ; ?> value='Guinea'>Guinea</option>
							<option <?php if($row['NUOCSX'] == "Guyana") echo "selected='selected'" ; ?> value='Guyana'>Guyana</option>
							<option <?php if($row['NUOCSX'] == "Haiti") echo "selected='selected'" ; ?> value='Haiti'>Haiti</option>
							<option <?php if($row['NUOCSX'] == "Hà Lan") echo "selected='selected'" ; ?> value='Hà Lan'>Hà Lan</option>
							<option <?php if($row['NUOCSX'] == "Hàn quốc") echo "selected='selected'" ; ?> value='Hàn quốc'>Hàn quốc</option>
							<option <?php if($row['NUOCSX'] == "Mỹ") echo "selected='selected'" ; ?> value='Mỹ'>Mỹ</option>
							<option <?php if($row['NUOCSX'] == "Hồng Kông") echo "selected='selected'" ; ?> value='Hồng Kông'>Hồng Kông</option>
							<option <?php if($row['NUOCSX'] == "Honduras") echo "selected='selected'" ; ?> value='Honduras'>Honduras</option>
							<option <?php if($row['NUOCSX'] == "Hungary") echo "selected='selected'" ; ?> value='Hungary'>Hungary</option>
							<option <?php if($row['NUOCSX'] == "Hy Lạp") echo "selected='selected'" ; ?> value='Hy Lạp'>Hy Lạp</option>
							<option <?php if($row['NUOCSX'] == "Iceland") echo "selected='selected'" ; ?> value='Iceland'>Iceland</option>
							<option <?php if($row['NUOCSX'] == "Indonesia") echo "selected='selected'" ; ?> value='Indonesia'>Indonesia</option>
							<option <?php if($row['NUOCSX'] == "Iran") echo "selected='selected'" ; ?> value='Iran'>Iran</option>
							<option <?php if($row['NUOCSX'] == "Iraq") echo "selected='selected'" ; ?> value='Iraq'>Iraq</option>
							<option <?php if($row['NUOCSX'] == "Israel") echo "selected='selected'" ; ?> value='Israel'>Israel</option>
							<option <?php if($row['NUOCSX'] == "Hamaica") echo "selected='selected'" ; ?> value='Hamaica'>Hamaica</option>
							<option <?php if($row['NUOCSX'] == "Hashemite Jordan") echo "selected='selected'" ; ?> value='Hashemite Jordan'>Hashemite Jordan</option>
							<option <?php if($row['NUOCSX'] == "Kazakhstan") echo "selected='selected'" ; ?> value='Kazakhstan'>Kazakhstan</option>
							<option <?php if($row['NUOCSX'] == "Kenya") echo "selected='selected'" ; ?> value='Kenya'>Kenya</option>
							<option <?php if($row['NUOCSX'] == "Kiribati") echo "selected='selected'" ; ?> value='Kiribati'>Kiribati</option>
							<option <?php if($row['NUOCSX'] == "Kosovo") echo "selected='selected'" ; ?> value='Kosovo'>Kosovo</option>
							<option <?php if($row['NUOCSX'] == "Kuwait") echo "selected='selected'" ; ?> value='Kuwait'>Kuwait</option>
							<option <?php if($row['NUOCSX'] == "Síp") echo "selected='selected'" ; ?> value='Síp'>Síp</option>
							<option <?php if($row['NUOCSX'] == "Kyrgyzstan") echo "selected='selected'" ; ?> value='Kyrgyzstan'>Kyrgyzstan</option>
							<option <?php if($row['NUOCSX'] == "Lào") echo "selected='selected'" ; ?> value='Lào'>Lào</option>
							<option <?php if($row['NUOCSX'] == "Latvia") echo "selected='selected'" ; ?> value='Latvia'>Latvia</option>
							<option <?php if($row['NUOCSX'] == "Lesotho") echo "selected='selected'" ; ?> value='Lesotho'>Lesotho</option>
							<option <?php if($row['NUOCSX'] == "Liban") echo "selected='selected'" ; ?> value='Liban'>Liban</option>
							<option <?php if($row['NUOCSX'] == "Liberia") echo "selected='selected'" ; ?> value='Liberia'>Liberia</option>
							<option <?php if($row['NUOCSX'] == "Libya") echo "selected='selected'" ; ?> value='Libya'>Libya</option>
							<option <?php if($row['NUOCSX'] == "Liechtenstein") echo "selected='selected'" ; ?> value='Liechtenstein'>Liechtenstein</option>
							<option <?php if($row['NUOCSX'] == "Litva") echo "selected='selected'" ; ?> value='Litva'>Litva</option>
							<option <?php if($row['NUOCSX'] == "Luxembourg") echo "selected='selected'" ; ?> value='Luxembourg'>Luxembourg</option>
							<option <?php if($row['NUOCSX'] == "Macedonia") echo "selected='selected'" ; ?> value='Macedonia'>Macedonia</option>
							<option <?php if($row['NUOCSX'] == "Madagascar") echo "selected='selected'" ; ?> value='Madagascar'>Madagascar</option>
							<option <?php if($row['NUOCSX'] == "Malawi") echo "selected='selected'" ; ?> value='Malawi'>Malawi</option>
							<option <?php if($row['NUOCSX'] == "Malaysia") echo "selected='selected'" ; ?> value='Malaysia'>Malaysia</option>
							<option <?php if($row['NUOCSX'] == "Maldives") echo "selected='selected'" ; ?> value='Maldives'>Maldives</option>
							<option <?php if($row['NUOCSX'] == "Mali") echo "selected='selected'" ; ?> value='Mali'>Mali</option>
							<option <?php if($row['NUOCSX'] == "Malta") echo "selected='selected'" ; ?> value='Malta'>Malta</option>
							<option <?php if($row['NUOCSX'] == "Maroc") echo "selected='selected'" ; ?> value='Maroc'>Maroc</option>
							<option <?php if($row['NUOCSX'] == "Marshall") echo "selected='selected'" ; ?> value='Marshall'>Marshall</option>
							<option <?php if($row['NUOCSX'] == "Mauritanie") echo "selected='selected'" ; ?> value='Mauritanie'>Mauritanie</option>
							<option <?php if($row['NUOCSX'] == "Mauritius") echo "selected='selected'" ; ?> value='Mauritius'>Mauritius</option>
							<option <?php if($row['NUOCSX'] == "Mexico") echo "selected='selected'" ; ?> value='Mexico'>Mexico</option>
							<option <?php if($row['NUOCSX'] == "Micronesia") echo "selected='selected'" ; ?> value='Micronesia'>Micronesia</option>
							<option <?php if($row['NUOCSX'] == "Moldova") echo "selected='selected'" ; ?> value='Moldova'>Moldova</option>
							<option <?php if($row['NUOCSX'] == "Monaco") echo "selected='selected'" ; ?> value='Monaco'>Monaco</option>
							<option <?php if($row['NUOCSX'] == "Montenegro") echo "selected='selected'" ; ?> value='Montenegro'>Montenegro</option>
							<option <?php if($row['NUOCSX'] == "Mozambique") echo "selected='selected'" ; ?> value='Mozambique'>Mozambique</option>
							<option <?php if($row['NUOCSX'] == "Myanmar") echo "selected='selected'" ; ?> value='Myanmar'>Myanmar</option>
							<option <?php if($row['NUOCSX'] == "Nagorno-Karabakh") echo "selected='selected'" ; ?> value='Nagorno-Karabakh'>Nagorno-Karabakh</option>
							<option <?php if($row['NUOCSX'] == "Namibia") echo "selected='selected'" ; ?> value='Namibia'>Namibia</option>
							<option <?php if($row['NUOCSX'] == "Nam Ossetia") echo "selected='selected'" ; ?> value='Nam Ossetia'>Nam Ossetia</option>
							<option <?php if($row['NUOCSX'] == "Nam Sudan") echo "selected='selected'" ; ?> value='Nam Sudan'>Nam Sudan</option>
							<option <?php if($row['NUOCSX'] == "Nam Phi") echo "selected='selected'" ; ?> value='Nam Phi'>Nam Phi</option>
							<option <?php if($row['NUOCSX'] == "Nauru") echo "selected='selected'" ; ?> value='Nauru'>Nauru</option>
							<option <?php if($row['NUOCSX'] == "Na Uy") echo "selected='selected'" ; ?> value='Na Uy'>Na Uy</option>
							<option <?php if($row['NUOCSX'] == "Nepal") echo "selected='selected'" ; ?> value='Nepal'>Nepal</option>
							<option <?php if($row['NUOCSX'] == "New Realand") echo "selected='selected'" ; ?> value='New Realand'>New Realand</option>
							<option <?php if($row['NUOCSX'] == "Nicaragua") echo "selected='selected'" ; ?> value='Nicaragua'>Nicaragua</option>
							<option <?php if($row['NUOCSX'] == "Niger") echo "selected='selected'" ; ?> value='Niger'>Niger</option>
							<option <?php if($row['NUOCSX'] == "Nigeria") echo "selected='selected'" ; ?> value='Nigeria'>Nigeria</option>
							<option <?php if($row['NUOCSX'] == "Nga") echo "selected='selected'" ; ?> value='Nga'>Nga</option>
							<option <?php if($row['NUOCSX'] == "Nhật bản") echo "selected='selected'" ; ?> value='Nhật bản'>Nhật bản</option>
							<option <?php if($row['NUOCSX'] == "Oman") echo "selected='selected'" ; ?> value='Oman'>Oman</option>
							<option <?php if($row['NUOCSX'] == "Pakistan") echo "selected='selected'" ; ?> value='Pakistan'>Pakistan</option>
							<option <?php if($row['NUOCSX'] == "Palau") echo "selected='selected'" ; ?> value='Palau'>Palau</option>
							<option <?php if($row['NUOCSX'] == "Palestine") echo "selected='selected'" ; ?> value='Palestine'>Palestine</option>
							<option <?php if($row['NUOCSX'] == "Panama") echo "selected='selected'" ; ?> value='Panama'>Panama</option>
							<option <?php if($row['NUOCSX'] == "Papua New Guinea") echo "selected='selected'" ; ?> value='Papua New Guinea'>Papua New Guinea</option>
							<option <?php if($row['NUOCSX'] == "Paraguay") echo "selected='selected'" ; ?> value='Paraguay'>Paraguay</option>
							<option <?php if($row['NUOCSX'] == "Peru") echo "selected='selected'" ; ?> value='Peru'>Peru</option>
							<option <?php if($row['NUOCSX'] == "Pháp") echo "selected='selected'" ; ?> value='Pháp'>Pháp</option>
							<option <?php if($row['NUOCSX'] == "Phần Lan") echo "selected='selected'" ; ?> value='Phần Lan'>Phần Lan</option>
							<option <?php if($row['NUOCSX'] == "Philippines") echo "selected='selected'" ; ?> value='Philippines'>Philippines</option>
							<option <?php if($row['NUOCSX'] == "Qatar") echo "selected='selected'" ; ?> value='Qatar'>Qatar</option>
							<option <?php if($row['NUOCSX'] == "Rwanda") echo "selected='selected'" ; ?> value='Rwanda'>Rwanda</option>
							<option <?php if($row['NUOCSX'] == "Saint Kitts và Nevis") echo "selected='selected'" ; ?> value='Saint Kitts và Nevis'>Saint Kitts và Nevis</option>
							<option <?php if($row['NUOCSX'] == "Santa Luxia") echo "selected='selected'" ; ?> value='Santa Luxia'>Santa Luxia</option>
							<option <?php if($row['NUOCSX'] == "Samoa") echo "selected='selected'" ; ?> value='Samoa'>Samoa</option>
							<option <?php if($row['NUOCSX'] == "San Marino") echo "selected='selected'" ; ?> value='San Marino'>San Marino</option>
							<option <?php if($row['NUOCSX'] == "Scotland") echo "selected='selected'" ; ?> value='Scotland'>Scotland</option>
							<option <?php if($row['NUOCSX'] == "Séc") echo "selected='selected'" ; ?> value='Séc'>Séc</option>
							<option <?php if($row['NUOCSX'] == "Sénégal") echo "selected='selected'" ; ?> value='Sénégal'>Sénégal</option>
							<option <?php if($row['NUOCSX'] == "Serbia") echo "selected='selected'" ; ?> value='Serbia'>Serbia</option>
							<option <?php if($row['NUOCSX'] == "Seychelles") echo "selected='selected'" ; ?> value='Seychelles'>Seychelles</option>
							<option <?php if($row['NUOCSX'] == "Sierra") echo "selected='selected'" ; ?> value='Sierra Leone'>Sierra Leone</option>
							<option <?php if($row['NUOCSX'] == "Singapore") echo "selected='selected'" ; ?> value='Singapore'>Singapore</option>
							<option <?php if($row['NUOCSX'] == "Slovakia") echo "selected='selected'" ; ?> value='Slovakia'>Slovakia</option>
							<option <?php if($row['NUOCSX'] == "Slovenia") echo "selected='selected'" ; ?> value='Slovenia'>Slovenia</option>
							<option <?php if($row['NUOCSX'] == "Solomon") echo "selected='selected'" ; ?> value='Solomon'>Solomon</option>
							<option <?php if($row['NUOCSX'] == "Somaliland") echo "selected='selected'" ; ?> value='Somaliland'>Somaliland</option>
							<option <?php if($row['NUOCSX'] == "Sri Lanka") echo "selected='selected'" ; ?> value='Sri Lanka'>Sri Lanka</option>
							<option <?php if($row['NUOCSX'] == "Sudan") echo "selected='selected'" ; ?> value='Sudan'>Sudan</option>
							<option <?php if($row['NUOCSX'] == "Suriname") echo "selected='selected'" ; ?> value='Suriname'>Suriname</option>
							<option <?php if($row['NUOCSX'] == "Swaziland") echo "selected='selected'" ; ?> value='Swaziland'>Swaziland</option>
							<option <?php if($row['NUOCSX'] == "Syria") echo "selected='selected'" ; ?> value='Syria'>Syria</option>
							<option <?php if($row['NUOCSX'] == "Tajikistan") echo "selected='selected'" ; ?> value='Tajikistan'>Tajikistan</option>
							<option <?php if($row['NUOCSX'] == "Tanzania") echo "selected='selected'" ; ?> value='Tanzania'>Tanzania</option>
							<option <?php if($row['NUOCSX'] == "Tây Ban Nha") echo "selected='selected'" ; ?> value='Tây Ban Nha'>Tây Ban Nha</option>
							<option <?php if($row['NUOCSX'] == "Sarauy") echo "selected='selected'" ; ?> value='Sarauy'>Sarauy</option>
							<option <?php if($row['NUOCSX'] == "Sát") echo "selected='selected'" ; ?> value='Sát'>Sát</option>
							<option <?php if($row['NUOCSX'] == "Thái Lan") echo "selected='selected'" ; ?> value='Thái Lan'>Thái Lan</option>
							<option <?php if($row['NUOCSX'] == "Thổ Nhĩ Kỳ") echo "selected='selected'" ; ?> value='Thổ Nhĩ Kỳ'>Thổ Nhĩ Kỳ</option>
							<option <?php if($row['NUOCSX'] == "Thụy Điển") echo "selected='selected'" ; ?> value='Thụy Điển'>Thụy Điển</option>
							<option <?php if($row['NUOCSX'] == "Thụy Sĩ") echo "selected='selected'" ; ?> value='Thụy Sĩ'>Thụy Sĩ</option>
							<option <?php if($row['NUOCSX'] == "Togo") echo "selected='selected'" ; ?> value='Togo'>Togo</option>
							<option <?php if($row['NUOCSX'] == "Tonga") echo "selected='selected'" ; ?> value='Tonga'>Tonga</option>
							<option <?php if($row['NUOCSX'] == "Moldova Transdniestria") echo "selected='selected'" ; ?> value='Moldova Transdniestria'>Moldova Transdniestria</option>
							<option <?php if($row['NUOCSX'] == "Triều Tiên") echo "selected='selected'" ; ?> value='Triều Tiên'>Triều Tiên</option>
							<option <?php if($row['NUOCSX'] == "Trinidad và Tobago") echo "selected='selected'" ; ?> value='Trinidad và Tobago'>Trinidad và Tobago</option>
							<option <?php if($row['NUOCSX'] == "Đài Loan") echo "selected='selected'" ; ?> value='Đài Loan'>Đài Loan</option>
							<option <?php if($row['NUOCSX'] == "Trung Hoa") echo "selected='selected'" ; ?> value='Trung Hoa'>Trung Hoa</option>
							<option <?php if($row['NUOCSX'] == "Trung Phi") echo "selected='selected'" ; ?> value='Trung Phi'>Trung Phi</option>
							<option <?php if($row['NUOCSX'] == "Tunisia") echo "selected='selected'" ; ?> value='Tunisia'>Tunisia</option>
							<option <?php if($row['NUOCSX'] == "Turkmenistan") echo "selected='selected'" ; ?> value='Turkmenistan'>Turkmenistan</option>
							<option <?php if($row['NUOCSX'] == "Tuvalu") echo "selected='selected'" ; ?> value='Tuvalu'>Tuvalu</option>
							<option <?php if($row['NUOCSX'] == "Úc") echo "selected='selected'" ; ?> value='Úc'>Úc</option>
							<option <?php if($row['NUOCSX'] == "Uganda") echo "selected='selected'" ; ?> value='Uganda'>Uganda</option>
							<option <?php if($row['NUOCSX'] == "Uruguay") echo "selected='selected'" ; ?> value='Uruguay'>Uruguay</option>
							<option <?php if($row['NUOCSX'] == "Uzbekistan") echo "selected='selected'" ; ?> value='Uzbekistan'>Uzbekistan</option>
							<option <?php if($row['NUOCSX'] == "Vanuatu") echo "selected='selected'" ; ?> value='Vanuatu'>Vanuatu</option>
							<option <?php if($row['NUOCSX'] == "Vatican") echo "selected='selected'" ; ?> value='Vatican'>Vatican</option>
							<option <?php if($row['NUOCSX'] == "Venezuela") echo "selected='selected'" ; ?> value='Venezuela'>Venezuela</option>
							<option <?php if($row['NUOCSX'] == "Việt Nam") echo "selected='selected'" ; ?> value='Việt Nam'>Việt Nam</option>
							<option <?php if($row['NUOCSX'] == "Wales") echo "selected='selected'" ; ?> value='Wales'>Wales</option>
							<option <?php if($row['NUOCSX'] == "Ý") echo "selected='selected'" ; ?> value='Ý'>Ý</option>
							<option <?php if($row['NUOCSX'] == "Yemen") echo "selected='selected'" ; ?> value='Yemen'>Yemen</option>
							<option <?php if($row['NUOCSX'] == "Zambia") echo "selected='selected'" ; ?> value='Zambia'>Zambia</option>
							<option <?php if($row['NUOCSX'] == "Zimbabwe") echo "selected='selected'" ; ?> value='Zimbabwe'>Zimbabwe</option>
							<option <?php if($row['NUOCSX'] == "Liên doanh, liên kết") echo "selected='selected'" ; ?> value='Liên doanh, liên kết'>Liên doanh, liên kết</option>
						</select>
					</div>
					<label for="field-4" class="col-sm-15 control-label">Nơi nhập<span
								style="padding-left:0px; color:red;">*</span>:</label>
					<?php
					$sql = "select tenphongban from tblphongban where madonvi = '$ma[0]'";
					$sql1 = mysqli_query($con,$sql);
					echo "<div  class='col-sm-4'>";
					echo "<select name='noidung' tabindex='-1' class='form-control' id='noidung'>";
					$d = 0;
					while ($data = mysqli_fetch_row($sql1)) {
						if($row['noidung'] == $data[0])
							echo "<option selected = 'selected' value='".$data[0]."'>".$data[0]."</option>";
						else
							echo "<option value='".$data[0]."'>".$data[0]."</option>";
					}
					echo "</select>";
					echo "</div>";
					?>
					<a onclick="showAjaxModal();" class='col-sm-05 btn'><img src="/icon/add.png"
																			 style="padding-left: 0px;" height="16"
																			 width="22"/></a>
					<label for="field-4" class="col-sm-15 control-label">Đơn vị tính:</label>

					<div class="col-sm-45">
						<input name="DVT" type="text" value="<?php echo $row['DVT'];?>" class="form-control" id="field-3">
					</div>
					<label for="field-4" class="col-sm-15 control-label">Số lượng:</label>

					<div class="col-sm-45">
						<input name="DTKV" type="text" value="<?php echo $row['DTKV'];?>" data-mask="fdecimal" class="form-control" id="DTKV">
					</div>
					<label for="field-4" class="col-sm-15 control-label">Đơn giá:</label>

					<div class="col-sm-4">
						<input name="dongia" type="text" value="<?php echo $row['dongia'];?>" class="form-control" data-mask="fdecimal" id="dongia">
					</div>
					<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
					<label for="field-4" class="col-sm-15 control-label">Thành tiền:</label>

					<div class="col-sm-4">
						<input name="thanhtien" readonly tabindex="-1" value="<?php echo $row['thanhtien'];?>" type="text" class="form-control"
							   data-mask="fdecimal" id="thanhtien">
					</div>
					<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
					<label for="field-4" class="col-sm-15 control-label">Diễn giải:</label>

					<div class="col-sm-45">
						<input name="GCTS" type="text" value="<?php echo $row['GCTS'];?>" class="form-control" id="GCTS">
					</div>
				</fieldset>
			</div>
			<div class="col-sm-12" style="display: none">
				<fieldset>
					<legend>Xuất dùng công cụ</legend>
					<div class="col-sm-12">
						<input type="checkbox" name="ckbxuatdung" checked tabindex="-1" id="ckbxuatdung"/>Xuất dùng công
						cụ
					</div>
					<label class="col-sm-15 control-label">Ngày xuất:</label>

					<div class="col-sm-45">
						<input data-inputmask="'alias': 'date'" tabindex="-1" name="ngayxuat" type="text"
							   class="form-control" id="ngayxuat">
					</div>
					<label class="col-sm-15 control-label">Nơi sử dụng:</label>
					<?php
					$sql = "select tenphongban from tblphongban where madonvi = '$ab'";
					$sql1 = mysqli_query($con,$sql);
					echo "<div  class='col-sm-45'>";
					echo "<select name='noisudung' tabindex='-1' class='form-control' id='noisudung'>";
					$d = 0;
					while ($data = mysqli_fetch_row($sql1)) {
						if ($d == 0)
							echo "<option selected='selected' value='" . $data[0] . "'>" . $data[0] . "</option>";
						else
							echo "<option value='" . $data[0] . "'>" . $data[0] . "</option>";
						$d++;
					}
					echo "</select>";
					echo "</div>";
					?>
					<label class="col-sm-15 control-label">Số lượng xuất:</label>

					<div class="col-sm-45">
						<input name="soluongx" type="text" data-mask="fdecimal" class="form-control" id="soluongx">
					</div>
					<label class="col-sm-15 control-label">Thanh tiền:</label>

					<div class="col-sm-4">
						<input name="sotienx" type="text" tabindex="-1" readonly class="form-control"
							   data-mask="fdecimal" id="sotienx">
					</div>
					<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="submit" name="capnhat" onclick="getFocus();" class="btn btn-blue" value="Cập nhật"/>
			</div>
		</form>
	</div>
	<?php
}
?>
	</div>
	</div>

<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
