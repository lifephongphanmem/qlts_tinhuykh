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
						<li class="active">
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
<!-------- Header ---------->
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
	giatri= this.value;
	if (giatri == "Nhà")
	{
	   $('#hienthi').load();
	   $('#hienthi').show();
	}
	else
	{
		$('#hienthi').hide();
	}
	if (giatri == "Máy móc thiết bị văn phòng")
	{
	   $('#hienthi1').load();
	   $('#hienthi1').show();
	}
	else
	{
		$('#hienthi1').hide();
	}
	if (giatri == "Máy móc, thiết bị động lực")
	{
	   $('#hienthi2').load();
	   $('#hienthi2').show();
	}
	else
	{
		$('#hienthi2').hide();
	}
	if (giatri == "Phương tiện vận tải đường bộ")
	{
	   $('#hienthi4').load();
	   $('#hienthi4').show();
	}
	else
	{
		$('#hienthi4').hide();
	}
	if (giatri == "Quyền sử dụng đất")
	{
	   $('#hienthi5').load();
	   $('#hienthi5').show();
	}
	else
	{
		$('#hienthi5').hide();
	}
	if (giatri == "Vật kiến trúc")
	{
	   $('#hienthi6').load();
	   $('#hienthi6').show();
	}
	else
	{
		$('#hienthi6').hide();
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
								<h3>Tra cứu tài sản cố định</h3>
							</div>
							<form role="form" method="POST" class="form-horizontal form-groups-bordered">							
							<div class="modal-content">		
								<div class="modal-body">				
									<form role='form' method='POST' action = 'tracuuts.php' class='form-horizontal form-groups-bordered'>							
								<div class="form-group" >
								<span <?php if (strlen($ma[0]) >= 16){echo "style='display:none';";}?> >
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
									else if ($data[0] == $key2[17] && $_POST['tendv'] == "" && $_POST['capnhatts'] == "")
										echo "<option selected='selected' value='".$data[0]."'>".$data[1]."</option>";
									else
										echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>									
								</span>
								<?php								
								$sql="select chitiethinhthai from tblqlts where madonvi Like '$ma[0]%' group by chitiethinhthai";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='chitiethinhthai' class='form-control' id='chitiethinhthai'>";
									echo"<option selected='selected' value='' >Loại tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if($data[0] == $_POST['chitiethinhthai'])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else if($data[0] == $key2[0] && $_POST['chitiethinhthai'] == "" && $_POST['capnhatts'] == "" )
									{
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<?php								
								$sql="select distinct noidung from tblqlts where madonvi Like '$ma[0]%' and noidung <> ''";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='noidung' class='form-control' id='noidung'>";
									echo"<option selected='selected' value='' >Nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if($data[0] == $_POST['noidung'])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else if ($data[0] == $key2[1] && $_POST['noidung'] == "" && $_POST['capnhatts'] == "")
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>								

								<div class="col-sm-2">
									<input data-inputmask="'alias': 'date'" placeholder="Từ ngày" value="<?php if (isset($_POST['NTTu'])){echo $_POST['NTTu'];} else if (isset($key2[2])){ echo $key2[2];} ?>"   name="NTTu" type="text" class="form-control" id="NTTu">
								</div>								
								<div class="col-sm-2">
									<input data-inputmask="'alias': 'date'" placeholder="Đến ngày" value="<?php if (isset($_POST['NTDen'])){echo $_POST['NTDen'];} else if (isset($key2[3])){ echo $key2[3];} ?>"   name="NTDen" type="text" class="form-control" id="NTDen">
								</div>

								<div class="col-sm-2">									
									<select name="nguyengia" class='form-control' id="nguyengia">
									<option selected='selected' value="">Nguyên giá</option>
									<?php 
									 if ($_POST['nguyengia'] == 'Lớn hơn 500000' ) 									
									{echo "<option selected='selected'  value='Lớn hơn 500000'>Lớn hơn 500.000</option>";}
									 if ($key2[4] == 'Lớn hơn 500000' ) 	
									{echo "<option selected='selected'  value='Lớn hơn 500000'>Lớn hơn 500.000</option>";}
									 if ($_POST['nguyengia'] == 'Nhỏ hơn 500000' ) 
									{echo"<option selected='selected'  value='Nhỏ hơn 500000'>Nhỏ hơn 500.000</option>";}
									 if ($key2[4] == 'Nhỏ hơn 500000' ) 
									{echo"<option selected='selected'  value='Nhỏ hơn 500000'>Nhỏ hơn 500.000</option>";}
									 if ($_POST['nguyengia'] == 'Bằng 500000' ) 
									{echo"<option selected='selected'  value='Bằng 500000'>Bằng 500.000</option>";}
									 if ($key2[4] == 'Bằng 500000' ) 
									{echo"<option selected='selected'  value='Bằng 500000'>Bằng 500.000</option>";}
														
									else
									{
									echo"<option  value='Lớn hơn 500000'>Lớn hơn 500.000</option>";
									echo"<option  value='Nhỏ hơn 500000'>Nhỏ hơn 500.000</option>";
									echo"<option  value='Bằng 500000'>Bằng 500.000</option>";	
									}
									?>
									</select>	
								</div>	

							<div style="display:none"  id="hienthi">
								
							<div class="col-sm-2">							
							<select name='CAPH' class='form-control'>	
							<option selected='selected'  value=''>Chọn cấp hạng nhà</option>
							<?php	
							if ($_POST['chitiethinhthai'] == "Nhà")
							{
							if ($_POST['CAPH'] == 'Cấp I' )
							echo"	<option selected='selected'  value='Cấp I'>Cấp I</option>";	
							if ($_POST['CAPH'] == 'Cấp II' )						
							echo"	<option selected='selected' value='Cấp II'>Cấp II</option>";
							if ($_POST['CAPH'] == 'Cấp III' )
							echo"	<option selected='selected' value='Cấp III'>Cấp III</option>";									
							if ($_POST['CAPH'] == 'Cấp IV' )
							echo"	<option selected='selected' value='Cấp IV'>Cấp IV</option>";								
							}
							else 
							{
								$_POST['CAPH'] ="";
							}
							if ($key != "" && !isset($_POST['chitiethinhthai']))
							{
							if ($key2[5] == 'Cấp I' )
							echo"	<option selected='selected'  value='Cấp I'>Cấp I</option>";	
							if ($key2[5] == 'Cấp II' )
							echo"	<option selected='selected' value='Cấp II'>Cấp II</option>";
							if ($key2[5] == 'Cấp III' )
							echo"	<option selected='selected' value='Cấp III'>Cấp III</option>";
							if ($key2[5] == 'Cấp IV' )
							echo"	<option selected='selected' value='Cấp IV'>Cấp IV</option>";
							}
							else 
							{
								$key2[5] = "";
							}
							
								echo"	<option  value='Cấp I'>Cấp I</option>";	
								echo"	<option  value='Cấp II'>Cấp II</option>";
								echo"	<option  value='Cấp III'>Cấp III</option>";
								echo"	<option  value='Cấp IV'>Cấp IV</option>";	
						
							
							echo"	</select>";		
							echo"	</div>";
							?>
							<div class="col-sm-2">
							<?php?>
							<input name="SOTA" type="text"  placeholder="Số tầng" class="form-control" id="field-3" value="<?php  
							if (isset($_POST['chitiethinhthai']) && $_POST['chitiethinhthai'] == "Nhà"  ) 
							{ 	
							if (isset($_POST['SOTA']))
							echo $_POST['SOTA'];
							}						
							else $_POST['SOTA'] = "";  							
							if ($key != "" && !isset($_POST['chitiethinhthai'])) 
								{
									echo $key2[6];
								} 
							else  $key2[6] = "";
							?>">
							</div>
							<div class="col-sm-2">
							<input name="DTXD" type="text" placeholder="Diện tích" class="form-control" id="field-3"  value="<?php  
							if (isset($_POST['chitiethinhthai']) && $_POST['chitiethinhthai'] == "Nhà"  ) 
							{ 		
							if (isset($_POST['DTXD']))	
							echo $_POST['DTXD'];
							}						
							else $_POST['DTXD'] = "";  							
							if ($key != "" && !isset($_POST['chitiethinhthai']) ) 
								{
									echo $key2[7];
								} 
							else  $key2[7] = "";
							?>">
							</div>
							<?php
								$sql="select TKVDAT from tblqlts Where chitiethinhthai like 'Đất%' and madonvi like '$ab%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-6' >";
									echo"<select name='TKVDATcs' class='form-control' id='TKVDATcs'>";
									echo"<option selected='selected' value=''>Chọn khuôn viên</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Nhà")
									{
									if($data[0] == $_POST['TKVDATcs'])
										echo "<option  selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else 
										$_POST['TKVDATcs'] = "";
									if ($key != "" && !isset($_POST['chitiethinhthai'])) 
									{	
									if($data[0] == $key2[8])
									
										echo "<option  selected='selected' value='".$data[0]."'>".$data[0]."</option>";		
									}		
									else
									{
										$key2[8] = "";
									}
									
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
							
								?>
							</div>					
							<div style="display:none" id="hienthi1">
								<?php
								$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Máy móc thiết bị văn phòng'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-4' >";
									echo"<select name='tentaisanvp' class='form-control' id='tentaisanvp'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Máy móc thiết bị văn phòng" )
									{
									if($data[0] == $_POST['tentaisanvp'])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
										{
											$_POST['tentaisanvp'] = "";
										}
									if ($key != "" && !isset($_POST['chitiethinhthai']) ) 
									{
									if($data[0] == $key2[10])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";	
									}
									else
										{
											$key2[10] ="";
										}
										
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
							</div>					
							<div style="display:none" id="hienthi2">
								<?php
								$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Máy móc, thiết bị động lực'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-4' >";
									echo"<select name='tentaisantb' class='form-control' id='tentaisantb'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Máy móc, thiết bị động lực")
									{
									if($data[0] == $_POST['tentaisantb'])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$_POST['tentaisantb'] = "";
									}
									if ($key != "" && !isset($_POST['chitiethinhthai']) )
									{
									if($data[0] == $key2[16])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$key2[16] = "";
									}
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
							</div>									
							<div style="display:none" id="hienthi4">
								<?php
								$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Phương tiện vận tải đường bộ' ";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-2'>";
									echo"<select name='tentaisanvt' class='form-control' id='tentaisanvt'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Máy móc, thiết bị động lực" || $key != "")
									{
									if($data[0] == $_POST['tentaisanvt'])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									else if($data[0] == $key2[11])
										echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$_POST['tentaisanvt'] = "";
									}
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
									echo "</select>";
									?>
									<div class="col-sm-2">					
									<select name="plsd" class='form-control' id="plsd">
									<option selected='selected' value="">Phân loại sử dụng</option>
								<?php
									if ($_POST['chitiethinhthai'] == "Phương tiện vận tải đường bộ")
									{								
									if ($_POST['plsd'] == 'Xe phục vụ chức danh' )
									echo"<option selected='selected'  value='Xe phục vụ chức danh'>Xe phục vụ chức danh</option>";
	
									if ($_POST['plsd'] == 'Xe phục vụ chung' )
									echo"<option selected='selected'  value='Xe phục vụ chung'>Xe phục vụ chung</option>";
									
									if ($_POST['plsd'] == 'Xe chuyên dùng' )
									echo"<option selected='selected'  value='Xe chuyên dùng'>Xe chuyên dùng</option>";
									
									}
									
									else 
										{
											$_POST['plsd'] = "";
										}
									if ($key != "" && !isset($_POST['chitiethinhthai']))	
									{
									if ($key2[12] == 'Xe phục vụ chức danh' )
									echo"<option selected='selected'  value='Xe phục vụ chức danh'>Xe phục vụ chức danh</option>";
									if ($key2[12] == 'Xe chuyên dùng' )
									echo"<option selected='selected'  value='Xe chuyên dùng'>Xe chuyên dùng</option>";
									if ($key2[12] == 'Xe phục vụ chung' )
									echo"<option selected='selected'  value='Xe phục vụ chung'>Xe phục vụ chung</option>";
									}
									else
										{
											$key2[12] = "";
										}
									
											echo"<option   value='Xe phục vụ chức danh'>Xe phục vụ chức danh</option>";
											echo"<option   value='Xe phục vụ chung'>Xe phục vụ chung</option>";
											echo"<option   value='Xe chuyên dùng'>Xe chuyên dùng</option>";
										
										echo "</select>";
									echo "</div>	";
									
									?>
										<div class="col-sm-2">
										<input name="bienso" type="text"  placeholder="Biển số" class="form-control" id="field-3" value="<?php  
										if (isset($_POST['chitiethinhthai']) && $_POST['chitiethinhthai'] == "Phương tiện vận tải đường bộ") 
										{ 						
										echo $_POST['bienso'];
										}						
										else $_POST['bienso'] = "";  							
										if ($key != "" && !isset($_POST['chitiethinhthai'])) 
											{
												echo $key2[13];
											} 
										else  $key2[13] = ""; 
										?>">
										</div>
									
										<div class="col-sm-6">
										<input name="NHXE" type="text"  placeholder="Nhãn hiệu xe" class="form-control" id="field-3" value="<?php  
										 if (isset($_POST['chitiethinhthai']) && $_POST['chitiethinhthai'] == "Phương tiện vận tải đường bộ"  ) 
										{ 						
										echo $_POST['NHXE'];
										}						
										else $_POST['NHXE'] = "";  							
										if ($key != "" && !isset($_POST['chitiethinhthai'])) 
											{
												echo $key2[14];
											} 
										else  $key2[14] = "";
										?>">
										</div>				
							</div>
							<div style="display:none" id="hienthi5">					
									<div class="col-sm-4">
									<input name="DTKV" type="text" placeholder="Diện tích khuôn viên" class="form-control" id="field-3" value="<?php  
									if (isset($_POST['chitiethinhthai']) && $_POST['chitiethinhthai'] == "Quyền sử dụng đất"  ) 
										{ 						
										echo $_POST['DTKV'];
										}						
										else $_POST['DTKV'] = "";  							
										if ($key != "" && !isset($_POST['chitiethinhthai'])) 
											{
												echo $key2[9];
											} 
										else  $key2[9] = "";  
									?>">
									</div>	
							</div>
							<div style="display:none" id="hienthi6">
								<?php
								$sql="select tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai = 'Vật kiến trúc' ";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-4' >";
									echo"<select name='tentaisanvkt' class='form-control' id='tentaisan'>";
									echo"<option selected='selected' value=''>Tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									if ($_POST['chitiethinhthai'] == "Vật kiến trúc")
									{
									if($data[0] == $_POST['tentaisanvkt'])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$_POST['tentaisanvkt'] = "";
									}
									if ($key != "" && !isset($_POST['chitiethinhthai'])) 
									{
									if($data[0] == $key2[15])
									echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
									}
									else
									{
										$key2[15] = "" ;
									}
										echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
		
										echo "</select>";
									echo "</div>	";
								?>
							</div>
							<input type="submit" id="capnhatts" name="capnhatts" class="btn btn-blue" value = "Tìm kiếm">
							<a   href="/Tracuu/TraCuuTS/tracuuts.php">							
								<span style="background-color: pink" class="btn btn-pink">Nhập lại</span>
							</a>
							</div>
							</div>
								
						</form>						
				</div>
							<?php
								if (isset($_POST['capnhatts']))
								{
									?>
										<script language='javascript'>
										 $(document).ready(function() {
										 var x = "<?php echo $_POST['chitiethinhthai']; ?>";
							
											if (x == "Nhà")
											   $('#hienthi').show();
											 else
											$('#hienthi').hide();
										
											 if (x == "Máy móc thiết bị văn phòng")
											   $('#hienthi1').show();
											 else
											$('#hienthi1').hide();
										
											 if (x == "Máy móc, thiết bị động lực")
											   $('#hienthi2').show();
											 else
											$('#hienthi2').hide();
										
											 if (x == "Phần mềm ứng dụng")
											   $('#hienthi3').show();
											 else
											$('#hienthi3').hide();
										
											 if (x == "Phương tiện vận tải đường bộ")
											   $('#hienthi4').show();
											 else
											$('#hienthi4').hide();
									
											 if (x == "Quyền sử dụng đất")
											   $('#hienthi5').show();
											 else
											$('#hienthi5').hide();
									
											 if (x == "Vật kiến trúc")
											   $('#hienthi6').show();
											 else
											$('#hienthi6').hide();
											 });
										</script>
									<?php
								}
							
								 else if ($key != "")
								{
									?>
										<script language='javascript'>
										 $(document).ready(function() {
										 var y = "<?php echo $key2[0]; ?>";
								
											if (y == "Nhà")
											   $('#hienthi').show();
											 else
											$('#hienthi').hide();
										
											 if (y == "Máy móc thiết bị văn phòng")
											   $('#hienthi1').show();
											 else
											$('#hienthi1').hide();
										
											 if (y == "Máy móc, thiết bị động lực")
											   $('#hienthi2').show();
											 else
											$('#hienthi2').hide();
										
											 if (y == "Phần mềm ứng dụng")
											   $('#hienthi3').show();
											 else
											$('#hienthi3').hide();
										
											 if (y == "Phương tiện vận tải đường bộ")
											   $('#hienthi4').show();
											 else
											$('#hienthi4').hide();
									
											 if (y == "Quyền sử dụng đất")
											   $('#hienthi5').show();
											 else
											$('#hienthi5').hide();
									
											 if (y == "Vật kiến trúc")
											   $('#hienthi6').show();
											 else
											$('#hienthi6').hide();
											 });
										</script>
									<?php
								}
							?>
		</div>														
						</form>	
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

if (isset($_POST['capnhatts']) && strlen($ma[0]) >= 16 )
{
	$a = 500000;
	$sqlct = "Select tblqlts.chitiethinhthai,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.DTKV,(ngansach+nguonkhac) as nguon,tblqlts.TTQLTS,thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi  where ".($_POST['NTTu']==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung > '".doingay($_POST['NTTu'])."'")." and ".($_POST['NTDen']==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung < '".doingay($_POST['NTDen'])."'")."  and  tblqlts.madonvi like '".$ab."%' and tblqlts.chitiethinhthai like '".($_POST['chitiethinhthai']==""?"%":$_POST['chitiethinhthai'])."' and tblqlts.noidung like '".($_POST['noidung']==""?"%":$_POST['noidung'])."' and ".($_POST['nguyengia']==""?"(ngansach+nguonkhac) like'%'" : "".($_POST['nguyengia']=="Lớn hơn 500000"?"(ngansach+nguonkhac) >'".$a."' " : "")."".($_POST['nguyengia']=="Nhỏ hơn 500000"?"(ngansach+nguonkhac) <'".$a."' " : "".($_POST['nguyengia']=="Bằng 500000"?"(ngansach+nguonkhac) ='".$a."' " : "")."")."")."   and ".($_POST['CAPH']==""?"tblqlts.CAPH like'%'" : "".($_POST['CAPH']=="Cấp I"?"tblqlts.CAPH = 'Cấp I' " : "")."".($_POST['CAPH']=="Cấp II"?"tblqlts.CAPH ='Cấp II' " : "".($_POST['CAPH']=="Cấp III"?" tblqlts.CAPH='Cấp III' " : "".($_POST['CAPH']=="Cấp IV"?" tblqlts.CAPH='Cấp IV' " : "")."")."")."")." and ".($_POST['SOTA']==""? " tblqlts.SOTA like '%'": "tblqlts.SOTA = '".$_POST['SOTA']."'")." and ".($_POST['DTXD']==""? " tblqlts.DTXD like '%'": "tblqlts.DTXD = '".$_POST['DTXD']."'")." and ".($_POST['TKVDATcs']==""? " tblqlts.TKVDAT like '%'": "TKVDAT = '".$_POST['TKVDATcs']."'")." and ".($_POST['DTKV']==""? " tblqlts.DTKV like '%'": "tblqlts.DTKV = '".$_POST['DTKV']."'")." and ".($_POST['tentaisanvp']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvp']."'")." and ".($_POST['tentaisanvt']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvt']."'")." and ".($_POST['plsd']==""? " tblqlts.PLSD like '%'": "tblqlts.PLSD = '".$_POST['plsd']."'")."  and ".($_POST['bienso']==""? " tblqlts.BKSXE like '%'": "tblqlts.BKSXE = '".$_POST['bienso']."'")."  and ".($_POST['NHXE']==""? " tblqlts.NHXE like '%'": "tblqlts.NHXE = '".$_POST['NHXE']."'")."  and ".($_POST['tentaisanvkt']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvkt']."'")."
	and ".($_POST['tentaisantb']==""? " tentaisan like '%'": "tentaisan = '".$_POST['tentaisantb']."'")."	";
}

else if (isset($_POST['capnhatts']))
{
	$a = 500000;
	$sqlct = "Select tblqlts.chitiethinhthai,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.DTKV,(ngansach+nguonkhac) as nguon,tblqlts.TTQLTS,thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi where ".($_POST['NTTu']==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung > '".doingay($_POST['NTTu'])."'")." and ".($_POST['NTDen']==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung < '".doingay($_POST['NTDen'])."'")."  and  tblqlts.madonvi like '".$_POST['tendv']."%' and tblqlts.chitiethinhthai like '".($_POST['chitiethinhthai']==""?"%":$_POST['chitiethinhthai'])."' and tblqlts.noidung like '".($_POST['noidung']==""?"%":$_POST['noidung'])."' and ".($_POST['nguyengia']==""?"(ngansach+nguonkhac) like'%'" : "".($_POST['nguyengia']=="Lớn hơn 500000"?"(ngansach+nguonkhac) >'".$a."' " : "")."".($_POST['nguyengia']=="Nhỏ hơn 500000"?"(ngansach+nguonkhac) <'".$a."' " : "".($_POST['nguyengia']=="Bằng 500000"?"(ngansach+nguonkhac) ='".$a."' " : "")."")."")."   and ".($_POST['CAPH']==""?"tblqlts.CAPH like'%'" : "".($_POST['CAPH']=="Cấp I"?"tblqlts.CAPH = 'Cấp I' " : "")."".($_POST['CAPH']=="Cấp II"?"tblqlts.CAPH ='Cấp II' " : "".($_POST['CAPH']=="Cấp III"?" tblqlts.CAPH='Cấp III' " : "".($_POST['CAPH']=="Cấp IV"?" tblqlts.CAPH='Cấp IV' " : "")."")."")."")." and ".($_POST['SOTA']==""? " tblqlts.SOTA like '%'": "tblqlts.SOTA = '".$_POST['SOTA']."'")." and ".($_POST['DTXD']==""? " tblqlts.DTXD like '%'": "tblqlts.DTXD = '".$_POST['DTXD']."'")." and ".($_POST['TKVDATcs']==""? " tblqlts.TKVDAT like '%'": "tblqlts.TKVDAT = '".$_POST['TKVDATcs']."'")."  and ".($_POST['DTKV']==""? " tblqlts.DTKV like '%'": "tblqlts.DTKV = '".$_POST['DTKV']."'")." and ".($_POST['tentaisanvp']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvp']."'")." and ".($_POST['tentaisanvt']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvt']."'")."  and ".($_POST['plsd']==""? " tblqlts.PLSD like '%'": "tblqlts.PLSD = '".$_POST['plsd']."'")."   and ".($_POST['bienso']==""? " tblqlts.BKSXE like '%'": "tblqlts.BKSXE = '".$_POST['bienso']."'")."  and ".($_POST['NHXE']==""? " tblqlts.NHXE like '%'": "tblqlts.NHXE = '".$_POST['NHXE']."'")."  and ".($_POST['tentaisanvkt']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisanvkt']."'")." and ".($_POST['tentaisantb']==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$_POST['tentaisantb']."'")." ";
}


 else if ($key != "")
{
	$a = 500000;
	$sqlct = "Select tblqlts.chitiethinhthai,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.DTKV,(ngansach+nguonkhac) as nguon,tblqlts.TTQLTS,thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi where ".($key2[2]==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung > '".doingay($key2[2])."'")." and ".($key2[3]==""? " tblqlts.ngaysudung like '%'": "tblqlts.ngaysudung < '".doingay($key2[3])."'")."  and  tblqlts.madonvi like '".$key2[17]."%' and tblqlts.chitiethinhthai like '".($key2[0]==""?"%":$key2[0])."' and tblqlts.noidung like '".($key2[1]==""?"%":$key2[1])."' and ".($key2[4]==""?"(ngansach+nguonkhac) like'%'" : "".($key2[4]=="Lớn hơn 500000"?"(ngansach+nguonkhac) >'".$a."' " : "")."".($key2[4]=="Nhỏ hơn 500000"?"(ngansach+nguonkhac) <'".$a."' " : "".($key2[4]=="Bằng 500000"?"(ngansach+nguonkhac) ='".$a."' " : "")."")."")."   and ".($key2[5]==""?" tblqlts.CAPH like'%'" : "".($key2[5]=="Cấp I"?" tblqlts.CAPH = 'Cấp I' " : "")."".($key2[5]=="Cấp II"?" tblqlts.CAPH ='Cấp II' " : "".($key2[5]=="Cấp III"?" CAPH='Cấp III' " : "".($key2[5]=="Cấp IV"?" tblqlts.CAPH='Cấp IV' " : "")."")."")."")." and ".($key2[6]==""? " tblqlts.SOTA like '%'": "SOTA = '".$key2[6]."'")." and ".($key2[7]==""? " tblqlts.DTXD like '%'": "tblqlts.DTXD = '".$key2[7]."'")." and ".($key2[8]==""? " tblqlts.TKVDAT like '%'": "tblqlts.TKVDAT = '".$key2[8]."'")."  and ".($key2[9]==""? " tblqlts.DTKV like '%'": "tblqlts.DTKV = '".$key2[9]."'")." and ".($key2[10]==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$key2[10]."'")." and ".($key2[11]==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$key2[11]."'")."  and ".($key2[12]==""? " tblqlts.PLSD like '%'": "tblqlts.PLSD = '".$key2[12]."'")."  and ".($key2[13]==""? " tblqlts.BKSXE like '%'": "tblqlts.BKSXE = '".$key2[13]."'")."  and ".($key2[14]==""? " tblqlts.NHXE like '%'": "tblqlts.NHXE = '".$key2[14]."'")." and ".($key2[15]==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$key2[15]."'")."  and ".($key2[16]==""? " tblqlts.tentaisan like '%'": "tblqlts.tentaisan = '".$key2[16]."'")."  ";
}

else 

{
	$sqlct = "Select tblqlts.chitiethinhthai,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.DTKV,(ngansach+nguonkhac) as nguon,tblqlts.TTQLTS,thongtindonvi.tendv from tblqlts inner join thongtindonvi on tblqlts.madonvi = thongtindonvi.madonvi where tblqlts.madonvi like '$ab%' ";
}




	$qrct = mysqli_query($con,$sqlct);
	$tenct = "";$tatca="";	$matd="" ;		
	echo "<div id = 'sTTKK' class='table-responsive'>"; 
		echo "<form method='POST'>";
				echo "<table style='line-height: 0;' class='stripe row-border order-column' id='table-2'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>Nhóm tài sản</th>";
						echo "<th>Tên tài sản</th>";
						echo "<th>Tên chi tiết</th>";
						echo "<th>Số lượng</th>";
						echo "<th>Nguyên giá</th>";	
						echo "<th>Đơn vị</th>";		
						echo "<th>Thao tác</th>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				$so="";
				while($rct=@mysqli_fetch_array($qrct))
				{
					$mang="";
					if (isset($_POST['capnhatts']) && strlen($ma[0]) >= 16 )
					{
						$mang = $_POST['chitiethinhthai'].">".$_POST['noidung'].">".$_POST['NTTu'].">".$_POST['NTDen'].">".$_POST['nguyengia'].">".$_POST['CAPH'].">".$_POST['SOTA'].">".$_POST['DTXD'].">".$_POST['TKVDATcs'].">".$_POST['DTKV'].">".$_POST['tentaisanvp'].">".$_POST['tentaisanvt'].">".$_POST['plsd'].">".$_POST['bienso'].">".$_POST['NHXE'].">".$_POST['tentaisanvkt'].">".$_POST['tentaisantb'].">".$ab;
					}
					else if (isset($_POST['capnhatts']))
					{
						$mang = $_POST['chitiethinhthai'].">".$_POST['noidung'].">".$_POST['NTTu'].">".$_POST['NTDen'].">".$_POST['nguyengia'].">".$_POST['CAPH'].">".$_POST['SOTA'].">".$_POST['DTXD'].">".$_POST['TKVDATcs'].">".$_POST['DTKV'].">".$_POST['tentaisanvp'].">".$_POST['tentaisanvt'].">".$_POST['plsd'].">".$_POST['bienso'].">".$_POST['NHXE'].">".$_POST['tentaisanvkt'].">".$_POST['tentaisantb'].">".$_POST['tendv'];
					}
					
					else if ($key != "")
					{
						$mang = $key2[0].">".$key2[1].">".$key2[2].">".$key2[3].">".$key2[4].">".$key2[5].">".$key2[6].">".$key2[7].">".$key2[8].">".$key2[9].">".$key2[10].">".$key2[11].">".$key2[12].">".$key2[13].">".$key2[14].">".$key2[15].">".$key2[16].">".$key2[17];
					}
					else 
					{	
						$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = $a8 = $a9 = $a10 = $a11 = $a12 = $a13 = $a14 = $a15 = $a16 = $a17 = $a18 ="";
						$mang = $a1.">".$a2.">".$a3.">".$a4.">".$a5.">".$a6.">".$a7.">".$a8.">".$a9.">".$a10.">".$a11.">".$a12.">".$a13.">".$a14.">".$a15.">".$a16.">".$a17.">".$ab;
					}

					$matd=$rct[5]."-".$mang;
					$so = dinhdangso($rct[4]);
					echo"<tr>";
					echo "<td>$rct[0]</td>";
					echo "<td>$rct[1]</td>";
					echo "<td>$rct[2]</td>";
					echo "<td>$rct[3]</td>";
					echo "<td>$so</td>";
					echo "<td>$rct[6]</td>";
					if (($rct[0]=='Đất') || ($rct[0]=='Quyền sử dụng đất'))	
	{
	echo"<td>	
		<a href=\"chitietdat.php?id=$matd\" class='btn btn-info '>
			
			Xem chi tiết
		</a>
	</td>";	
	}
	else if (($rct[0]=='Nhà') || ($rct[0]=='Nhà, vật kiến trúc'))
	{
		echo"<td>
		<a href=\"chitietnha.php?id=$matd\" class='btn btn-info '>
			
			Xem chi tiết
		</a>
		</td>";
	}
	else if ($rct[0]=='Phương tiện vận tải')
	{
		echo"<td>
		<a href=\"chitietxe.php?id=$matd\" class='btn btn-info '>
			
			Xem chi tiết
		</a>
		</td>";
	}
	else
	{
		echo"<td>
		<a href=\"chitiet.php?id=$matd\" class='btn btn-info '>
			
			Xem chi tiết
		</a>
		</td>";
	}
					echo"</tr>";
				}
				echo "</tbody>";
				echo "</table>";
		echo "</form>";		
	echo "</div>";
?>
		</div>		
	</div>
</div>
<!--------- Footer ---------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>