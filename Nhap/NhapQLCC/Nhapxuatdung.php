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
<script language='javascript'>
 $(document).ready(function() {
  $('#soluongx').change(function() {
	var dongia = $('#dongia').val();
		if(dongia != "")
			dongia = dongia.replace(/,/g,"");
		else
			dongia = 0;
   giatri = this.value*parseFloat(dongia);   
   $("#sotienx").val(giatri);
  });
  $('#soluongcs').change(function() {
	var dongia = $('#dongiacs').val();
		if(dongia != "")
			dongia = dongia.replace(/,/g,"");
		else
			dongia = 0;
   giatri = this.value*parseFloat(dongia);   
   $("#sotiencs").val(giatri);
  });
 });
</script>
<script language='javascript'>
 function ktmoi()
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
 function ktsua()
 {
	var conlai = $('#soluongcscl').val();
	var xuatcu = $('#soluongcscu').val();
	var xuat = $('#soluongcs').val();
	if((parseFloat(conlai) + parseFloat(xuatcu) - parseFloat(xuat)) < 0 )
	{
		alert("Số lượng xuất vượt quá số lượng còn lại. Bạn hãy kiểm tra lại!");
		document.getElementById("soluongcs").focus();
		return false;
	}
	else if(parseFloat(xuat) <= 0 )
	{
		alert("Số lượng xuất không thể nhỏ hơn hoặc bằng 0. Bạn hãy kiểm tra lại!");
		document.getElementById("soluongcs").focus();
		return false;
	}
	else
		return true;	
 } 
</script>
<script>
$(document).on("click", ".open-AddBookDialogg", function (e) {
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookIdcs").val(myBookId[0]);
	$("#mataisancs").val(myBookId[2]);
	$("#tentaisancs").val(myBookId[3]);
	$("#tenchitietcs").val(myBookId[4]);
	$("#soluongcs").val(myBookId[14]);
	$("#sotiencs").val(myBookId[8]);
	$("#dongiacs").val(myBookId[13]);
	$("#ngayxuatcs").val(myBookId[5]);
	$("#noisudungcs").val(myBookId[6]);	
	$("#soluongcscu").val(myBookId[14]);
	$("#soluongcscl").val(myBookId[7]);
	$(_self.attr('href')).modal('show');
});
 </script>
 <script>
$(document).on("click", ".open-AddBookDialog", function (e) {
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[1]);
	$("#mataisan").val(myBookId[2]);
	$("#tentaisan").val(myBookId[3]);
	$("#tenchitiet").val(myBookId[4]);
	$("#soluong").val(myBookId[7]);
	$("#dongia").val(myBookId[13]);
	$("#sotien").val(myBookId[8]);
	$("#xx").val(myBookId[9]+">"+myBookId[10]+">"+myBookId[11]+">"+myBookId[12]);
	$(_self.attr('href')).modal('show');
});
 </script> 
		<hr />	
		<h3>Quản lý xuất dùng công cụ dụng cụ</h3>
		<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='NhapQLCC.php'" ?>" />		
<?php 	
	
	if (isset($_POST['update']))
	{
		$ttxuatdung=$_POST["bookIdcs"];
		$ngayxuatcs=doingay($_POST["ngayxuatcs"]);
		$soluongcs=kieudouble($_POST["soluongcs"]);
		$sotiencs=kieudouble($_POST["sotiencs"]);		
		$noisudungcs=$_POST["noisudungcs"];				
		$sqlupxd = "Update tblxuatdung set ngayxuat='$ngayxuatcs',soluong=$soluongcs,sotien=$sotiencs,noisudung='$noisudungcs'";	
		$sqlupxd = $sqlupxd." Where ttxuatdung = ".$ttxuatdung;		
		$kqupxd=mysqli_query($con,$sqlupxd);
	}	        	
?>	
<?php 	
	//
	
	$ab = $ma[0];
	if (isset($_POST['insert']))
	{
		$th = explode(">",$_POST["xx"]);
		$TTQLcc=$_POST["bookId"];
		$ngayxuat=doingay($_POST["ngayxuat"]);
		$soluong=kieudouble($_POST["soluongx"]);
		$sotien=kieudouble($_POST["sotienx"]);
		$noisudung=$_POST["noisudung"];
		$mataisan=$_POST["mataisan"];
		$tentaisan=$_POST["tentaisan"];
		$tenchitiet=$_POST["tenchitiet"];
		$dongia = kieudouble($_POST["dongia"]);
		$namsanxuat=$th[1];
		$dvt=$th[2];
		$nuocsx=$th[3];
		$chitiethinhthai=$th[0];
		$sqlinxd = "Insert into tblxuatdung(TTQLcc,ngayxuat,lydoxuat,soluong,sotien,noisudung,mataisan,tentaisan,tenchitiet,namsanxuat,dvt,nuocsx,chitiethinhthai,dongia,madonvi)";	
		$sqlinxd = $sqlinxd." values($TTQLcc,'$ngayxuat','Xuất dùng',$soluong,$sotien,'$noisudung','$mataisan','$tentaisan','$tenchitiet','$namsanxuat','$dvt','$nuocsx','$chitiethinhthai',$dongia,'$ab')";
		
		$kqinxd=mysqli_query($con,$sqlinxd);
	}	        	
?>	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>	
					<th>Nơi dùng</th>	
					<th>Tên chi tiết</th>
					<th>Ngày xuất</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
					<th>Lý do</th>
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php 

function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
//
function slcon($macc)
{
	$kq=0;
	$nhap=0;
	$xuat=0;
	global $con;
	$sql = "Select DTKV from tblqlcc where TTQLcc = $macc";	
	$qrsql=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$nhap += kieudouble($row["DTKV"]);
	}
	$sql = "Select soluong from tblxuatdung where TTQLcc = $macc";
	$qrsql=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$xuat += kieudouble($row["soluong"]);
	}
	return ($nhap - $xuat);
}
$sql = "select ttxuatdung,TTQLcc,mataisan,tentaisan,tenchitiet,ngayxuat,noisudung,soluong,sotien,chitiethinhthai,namsanxuat,dvt,nuocsx,dongia,lydoxuat from tblxuatdung where madonvi = '$ab'";
$kq = mysqli_query($con,$sql);
$ngsd="";$tatca="";   $stt=0;
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
		$stt++;
		$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".doingay1($row[5]).">".$row[6].">".slcon($row[1]).">".$row[8].">".$row[9].">".$row[10].">".$row[11].">".$row[12].">".$row[13].">".$row[7];		
            echo"<tr>";
                echo"<td>$stt</td>";
				echo"<td>$row[6]</td>";	               
                echo"<td>$row[4]</td>";				
                echo"<td>".doingay1($row[5])."</td>";
				echo"<td>".dinhdangso($row[7])."</td>";
				echo"<td>".dinhdangso($row[13])."</td>";
				echo"<td>".dinhdangso($row[8])."</td>";	
				echo"<td>$row[14]</td>";	
                echo"<td>						
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-success' href='#addBookDialog'>Thêm mới</a>	
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialogg btn btn-blue ' href='#addBookDialogg'>Sửa</a>
						<a href=\"xoaxd.php?id=$row[0]\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>
							<i class='entypo-cancel'></i>
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
        <h4 class="modal-title" id="myModalLabel">Thêm mới xuất dùng</h4>
      </div>
      <div class="modal-body">        
		<form role='form' method='POST' onsubmit="return ktmoi()" action = 'Nhapxuatdung.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Số ghi công cụ:</label>
								<div class="col-sm-8">
										<input name="bookId" type="text" readonly="false" class="form-control" id="bookId">									
								</div>							
								<label class="col-sm-3 control-label">Mã công cụ:</label>
								<div class="col-sm-8">
									<input name="mataisan" type="text" readonly="false" class="form-control" id="mataisan">
								</div>							
								<label class="col-sm-3 control-label">Tên công cụ:</label>
								<div class="col-sm-8">
									<input name="tentaisan" type="text" readonly="false" class="form-control" id="tentaisan">
								</div>							
								<label class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-8">
									<input name="tenchitiet" type="text" readonly="false" class="form-control" id="tenchitiet">
								</div>							
								<label class="col-sm-3 control-label">Ngày xuất:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngayxuat" type="text" class="form-control" id="ngayxuat">
								</div>							
								<label class="col-sm-3 control-label">Nơi sử dụng:</label>																
								<?php								
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='noisudung' class='form-control' id='noisudung'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label class="col-sm-3 control-label">Số lượng còn:</label>
								<div class="col-sm-8">
									<input name="soluong" type="text" readonly="false" class="form-control" id="soluong">
								</div>
								<label class="col-sm-3 control-label">Đơn giá:</label>
								<div class="col-sm-8">
									<input name="dongia" type="text" readonly="false" data-mask = "fdecimal" class="form-control" id="dongia">
								</div>
								<label class="col-sm-3 control-label">Thanh tiền:</label>
								<div class="col-sm-8">
									<input name="sotien" type="text" readonly="false" data-mask = "fdecimal" class="form-control" id="sotien">
								</div>
								<label class="col-sm-3 control-label">Số lượng xuất:</label>
								<div class="col-sm-8">
									<input name="soluongx" type="text" class="form-control" id="soluongx">
								</div>
								<label class="col-sm-3 control-label">Thanh tiền:</label>
								<div class="col-sm-8">
									<input name="sotienx" type="text" class="form-control" data-mask = "fdecimal" id="sotienx">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="insert" class="btn btn-blue" value = "Cập nhật">
								<input name="xx" type="text" class="form-control" style = "Display:none;" readonly="false" id="xx">
							</div>
						</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <div class="modal fade" id="addBookDialogg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chỉnh sửa xuất dùng</h4>
      </div>
      <div class="modal-body">
		<form role='form' method='POST' onsubmit="return ktsua()" action = 'Nhapxuatdung.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Số ghi xuất dùng:</label>
								<div class="col-sm-8">
										<input name="bookIdcs" type="text" readonly="false" class="form-control" id="bookIdcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Mã công cụ:</label>
								<div class="col-sm-8">
									<input name="mataisancs" type="text" readonly="false" class="form-control" id="mataisancs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Tên công cụ:</label>
								<div class="col-sm-8">
									<input name="tentaisancs" type="text" readonly="false" class="form-control" id="tentaisancs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-8">
									<input name="tenchitietcs" type="text" readonly="false" class="form-control" id="tenchitietcs">
								</div>
								<label for="field-3" class="col-sm-3 control-label">Ngày xuất:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngayxuatcs" type="text" class="form-control" id="ngayxuatcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='noisudungcs' class='form-control' id='noisudungcs'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>		
								<label for="field-4" class="col-sm-3 control-label">Số lượng xuất:</label>
								<div class="col-sm-8">
									<input name="soluongcs" type="text" class="form-control" id="soluongcs">
									<input name="soluongcscu" type="text" style="display:none" class="form-control" id="soluongcscu">
									<input name="soluongcscl" type="text" style="display:none" class="form-control" id="soluongcscl">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Đơn giá:</label>
								<div class="col-sm-8">
									<input name="dongiacs" type="text" readonly="false" data-mask="fdecimal" class="form-control" id="dongiacs">
								</div>									
								<label for="field-4" class="col-sm-3 control-label">Thanh tiền:</label>
								<div class="col-sm-8">
									<input name="sotiencs" type="text" class="form-control" data-mask="fdecimal" id="sotiencs">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="update" class="btn btn-blue" value = "Cập nhật">
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