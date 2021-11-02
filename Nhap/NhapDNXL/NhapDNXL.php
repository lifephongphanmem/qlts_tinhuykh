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
						<li class="active">	
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
<!-------- Header ----------->
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
	$("#mataisan").val(myBookId[1]);
	$("#tentaisan").val(myBookId[2]);
	$("#tenchitiet").val(myBookId[3]);
	$("#ngaythang").val(myBookId[4]);
	$("#hinhthuc").val(myBookId[5]);
	$("#noidung").val(myBookId[6]);
	$("#ghichu").val(myBookId[7]);	
	$("#TTQLTS").val(myBookId[8]);		
    $(_self.attr('href')).modal('show');
});
 </script>
 <?php
function nguyengia($TTQLTS)
{
	global $con;
	$kq=0;
	$sql="Select ngansach,nguonkhac from tblqlts where TTQLTS = ".$TTQLTS;
	$qrsql=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq+= $row[0]+$row[1];
	}
	return $kq;
}
 function trangay($ngay)
 {
	 $kq = substr($ngay, 6, 4) . "-" . substr($ngay, 3, 2) . "-" . substr($ngay, 0, 2);
	 return $kq;
 }
 function ktthanhly ($mataisan)
 {
	 $kq = "No";
	 global  $con;
	 $sql = "Select TTTGTS From Tbltanggiam WHERE  tanggiam = 'Thanh lý' and TTQLTS = ".$mataisan;
	 $qrsql = mysqli_query($con,$sql);
	 while ($row = mysqli_fetch_array($qrsql))
		 $kq = "Yes";
	 return $kq;
 }
function sotiencl($nam,$namsd,$TTQLTS)
{
	$sotiencl = 0;
	$nguyengia = nguyengia($TTQLTS);
	echo "nguyên giá: ". $nguyengia;
	for ($i = $namsd; $i <= $nam; $i++) {
		$sotiencl += sohaomon($TTQLTS, $i);
	}
	echo "Số tiền còn lại:". $sotiencl;
	if($nguyengia >= $sotiencl)
		$sotiencl = $nguyengia - $sotiencl;
	else
		$sotiencl = 0;
	return $sotiencl;
}
function sohaomon($TTQLTS,$nam)
{
	global $con;
	$namsd = 0;
	$sohaomon = 0;
	$nguyengia = 0;
	$hm = 0;
	$hm32 = 0;
	$sql = "Select year(ngaysudung) as namsd,(ngansach+nguonkhac) as nguyengia, phantram, phantram32 From Tblqlts where TTQLTS = " . $TTQLTS;
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$namsd = $row['namsd'];
		$nguyengia = $row['nguyengia'];
		$hm = $row['phantram'];
		$hm32 = $row['phantram32'];
	}
	$tangst = 0;
	$giamst = 0;
	$sql = "Select ngansach,nguonkhac,tanggiam,sotien from tbltanggiam where TTQLTS = " . $TTQLTS . " and year(ngaytanggiam) <= " . $nam;
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		if ($row['tanggiam'] == "Tăng")
			$tangst += $row['ngansach'] + $row['nguonkhac'];
		if($row['tanggiam'] == "Giảm")
			$giamst += $row['sotien'];
	}
	$nguyengia += $tangst - $giamst;
	echo "Nguyên giá hao mòn: ". $nguyengia;
	echo "Số tiền giảm: ". $giamst;
	if ($nam >= $namsd) {
		if ($nam < 2013 && $nam > $namsd)
			$sohaomon += $nguyengia * $hm32 / 100;
		if ($nam >= 2013 && $nam < 2015)
			$sohaomon += $nguyengia * $hm32 / 100;
		if ($nam >= 2015)
			$sohaomon += $nguyengia * $hm / 100;
	}
	return $sohaomon;
}
 if (isset($_POST['capnhatchinhsua'])) {
	 $bookId = $_POST['bookId'];
	 $ngaythang = trangay($_POST['ngaythang']);
	 $hinhthuc = $_POST['hinhthuc'];
	 $noidung = $_POST['noidung'];
	 $ghichu = $_POST['ghichu'];
	 $TTQLTS = $_POST['TTQLTS'];
	 $nam = substr($ngaythang,0,4);
	 $namsd = "";
	 $sql = "Select year(ngaysudung) as namsd From tblqlts WHERE TTQLTS = ". $TTQLTS;
	 $qrsql = mysqli_query($con,$sql);
	 while ($row = mysqli_fetch_array($qrsql))
		 $namsd = $row['namsd'];
	 $up = "UPDATE tbldenghi SET ngaythang='$ngaythang',hinhthuc='$hinhthuc',noidung='$noidung',ghichu='$ghichu' WHERE TTdenghi = $bookId";
	 $kq = mysqli_query($con, $up);
	 if ($hinhthuc == "Thanh lý") {
		 $sqlup = "Update tblqlts Set XOA = 'TL' Where TTQLTS = '" . $TTQLTS . "'";
		 if (ktthanhly($TTQLTS) == "No") {
			 $sqltg = "Insert into tbltanggiam (ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi,TTdenghi) " .
				 " values ('$ngaythang','$TTQLTS','Thanh lý','1','" . sotiencl($nam, $namsd, $TTQLTS) . "','Thanh lý','$ab',$bookId)";
			 //echo $sqltg;
			 $qrsqltg = mysqli_query($con, $sqltg);
		 } else {
			 $sqltg = "Update Tbltanggiam set ngaytanggiam = '$ngaythang',sotien = " . sotiencl($nam, $namsd, $TTQLTS) . " Where TTdenghi = ".$bookId;
			 echo $sqltg;
			 $qrsqltg = mysqli_query($con, $sqltg);
		 }

	 }
	 else {
		 $sqlup = "Update tblqlts Set XOA = 'K' Where TTQLTS = '" . $TTQLTS . "'";
		 $sqldel = "Delete # From tbltanggiam where TTdenghi =".$bookId;
		 $qrsqldel = mysqli_query($con,$sqldel);
	 }
	 $kq1 = mysqli_query($con, $sqlup);
 }
?>	
		<hr />
		<h3>Nhập quản lý đề nghị xử lý tài sản</h3>			
<?php 		
		echo "<a href='Danhsachdnxl.php' class='btn btn-success'>
			Tạo tài sản đề nghị xử lý
		</a>";
?>		
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên tài sản</th>
					<th>Tên gọi chi tiết</th>
					<th>Ngày tháng xử lý</th>
					<th>Hình thức xử lý</th>
					<th>Nội dung xử lý</th>
					<th></th>
				</tr>
			</thead>			
			<tbody>				
<?php 
	function doingay($ngay)
	{
		$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
		return $kq;
	}

$ab = $ma[0];
$sql = "Select TTdenghi,mataisan,tentaisan,tenchitiet,ngaythang,hinhthuc,noidung,ghichu,TTQLTS From tbldenghi Where madonvi = '$ab'";
$kq =mysqli_query($con,$sql);
$matm = "";   
$chitiet = "";$stt=0;
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
		$matm = $row[0].">".$row[8];	
		$matl= $row[8];				
		$chitiet = $row[0].">".$row[1].">".$row[2].">".$row[3].">".doingay($row[4]).">".$row[5].">".$row[6].">".$row[7].">".$row[8]; 		
		$stt++;
            echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
                echo"<td>".doingay($row[4])."</td>";
				echo"<td>$row[5]</td>";
				echo"<td>$row[6]</td>";
				if($row[5] != "Điều chuyển"){
					if($row[5] != "Thanh lý")
						echo"<td>
							<a data-id='$chitiet' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
								Sửa</a>
							<a href=\"xoa.php?id=$matm\" onclick=\"return confirm('Bạn muốn xóa đề nghị xử lý này?')\" class='btn btn-red '>
								Xóa</a>
						</td>";
					else
						echo"<td>
							<a data-id='$chitiet' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
								Sửa</a>
							<a href=\"xoa.php?id=$matm\" onclick=\"return confirm('Bạn muốn xóa đề nghị xử lý này?')\" class='btn btn-red '>
								Xóa</a>
							<a href=\"themtl.php?id=$matl\" class='btn btn-default '>
								In thanh lý</a>
							</td>";
				}
				else{
					echo "<td><a class='btn btn-while'>
						</a></td>";
				}
            echo"</tr>";			
     }}         
 ?> 
			</tbody>
		</table>
		<br/>
	</div>
</div>
<div class="modal fade" id="addBookDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
			Sửa đề nghị xử lý tài sản</h4>
      </div>
      <div class="modal-body">        
		<form role="form" method="POST" action = "NhapDNXL.php" class="form-horizontal form-groups-bordered">
			<div class="form-group">
				<label class="col-sm-3 control-label">Thứ tự xử lý:</label>
				<div class="col-sm-8">
					<input name="bookId" type="text" readonly = "false" class="form-control" id="bookId">
				</div>
				<label class="col-sm-3 control-label">Mã tài sản:</label>
				<div class="col-sm-8">
					<input name="mataisan" type="text" readonly = "false" class="form-control" id="mataisan">
				</div>
				<label class="col-sm-3 control-label">Tên tài sản:</label>
				<div class="col-sm-8">
					<input name="tentaisan" type="text" readonly = "false" class="form-control" id="tentaisan">
				</div>
				<label class="col-sm-3 control-label">Tên gọi chi tiết:</label>
				<div class="col-sm-8">
					<input name="tenchitiet" type="text" readonly = "false" class="form-control" id="tenchitiet">
				</div>
				<label class="col-sm-3 control-label">Ngày xử lý:</label>
				<div class="col-sm-8">
					<input data-inputmask="'alias': 'date'" name="ngaythang" type="text" class="form-control" id="ngaythang">
				</div>
				<label class="col-sm-3 control-label">Hình thức xử lý:</label>
				<div class="col-sm-8">
					<select name="hinhthuc" type="text" class="form-control" id="hinhthuc" >
						<option value='Thu hồi'>Thu hồi</option>
						<option value='Bán'>Bán</option>
						<option value='Thanh lý'>Thanh lý</option>
						<option value='Tiêu hủy'>Tiêu hủy</option>
						<option value='LD, liên kết'>LD, liên kết</option>
					</select>
				</div>
				<label class="col-sm-3 control-label">Nội dung xử lý:</label>
				<div class="col-sm-8">
					<input name="noidung" type="text" class="form-control" id="noidung">
				</div>
				<label class="col-sm-3 control-label">Ghi chú:</label>
				<div class="col-sm-8">
					<input name="ghichu" type="text" class="form-control" id="ghichu" >
				</div>
			</div>
			<div class="col-sm-8">
				<input name="TTQLTS" type="text" style = "Display:none" class="form-control" id="TTQLTS">
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