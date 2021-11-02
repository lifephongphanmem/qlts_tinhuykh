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

<script language='javascript'>
 $(document).ready(function() {
  $('#dongiacs').change(function() {
	var str=this.value;
		str =str.replace (/,/g, "");  		
	var b = $('#DTKVcs').val();
		b = b.replace (/,/g,"");				
	var  giatri = parseFloat(str)* parseFloat(b);    
   $("#thanhtiencs").val(giatri);  
document.getElementById("#dongiacs").focus();   
  });
 }); 
 function setFocusToTextBox(){
    document.getElementById("dongiacs").focus();
	}
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#DTKVcs').change(function() {
	var str=this.value;
		str =str.replace (/,/g, "");  	
	var b = $('#dongiacs').val();
		b = b.replace (/,/g,"");				
	var  giatri = parseFloat(str)* parseFloat(b);  
   $("#thanhtiencs").val(giatri);
  });
 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#dongia').change(function() {	
	var str=this.value;
		str =str.replace (/,/g, "");  	
	var b = $('#DTKV').val();
		b = b.replace (/,/g,"");				
   var  giatri = parseFloat(str)* parseFloat(b);
   $("#thanhtien").val(giatri);
  });
 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#DTKV').change(function() {
	var str=this.value;
		str =str.replace (/,/g, "");  	
	var b = $('#dongia').val();
		b = b.replace (/,/g,"");				
	var  giatri = parseFloat(str)* parseFloat(b);     
   $("#thanhtien").val(giatri);
  });
 });
</script>

<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
function getFocus() {
    document.getElementById("dongiacs").focus();
}
function getFocusmoi() {
    document.getElementById("dongia").focus();
}
</script>
<script>
$(document).on("click", ".open-AddBookDialog", function (e) {	
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');	
    $("#bookId").val(myBookId[0]);
	$("#mataisancs").val(myBookId[1]);
	$("#tenchitietcs").val(myBookId[3]);
	$("#ngaynhapcs").val(myBookId[4]);
	$("#ngaysudungcs").val(myBookId[7]);
	$("#namsanxuatcs").val(myBookId[5]);
	$("#NUOCSXcs").val(myBookId[6]);
	$("#noidungcs").val(myBookId[8]);
	$("#DVTcs").val(myBookId[9]);
	$("#DTKVcs").val(myBookId[10]);
	$("#dongiacs").val(myBookId[11]);
	$("#thanhtiencs").val(myBookId[12]);
	$("#GCTScs").val(myBookId[14]);	
    $(_self.attr('href')).modal('show');		
});
 </script>
 <script>
$(document).on("click", ".open-AddBookDialog1", function (e) {	
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');	
    $("#bookIdc").val(myBookId[0]);
	$("#mataisanc").val(myBookId[1]);
	$("#tenchitietc").val(myBookId[3]);
	$("#ngaynhapc").val(myBookId[4]);
	$("#ngaysudungc").val(myBookId[7]);
	$("#namsanxuatc").val(myBookId[5]);
	$("#NUOCSXc").val(myBookId[6]);
	$("#noidungc").val(myBookId[8]);
	$("#DVTc").val(myBookId[9]);
	$("#DTKVc").val(myBookId[10]);
	$("#dongiac").val(myBookId[11]);
	$("#thanhtienc").val(myBookId[12]);
	$("#GCTSc").val(myBookId[14]);	
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
		<h3>Quản lý công cụ dụng cụ lâu bền</h3>		
		<a  href='NhapQLCCmoi.php' class='btn btn-success'>
			Thêm mới
		</a>
		<!--
		<a href='Nhapxuatdung.php' class='btn btn-success'>
			Xuất dùng
		</a>
		<a href='Nhapbaohong.php' class='btn btn-success'>
			Báo hỏng
		</a>-->
	
		<div class="outer">
	<div class="inner">

		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th width="1%">STT</th>
					<th width="15%">Tên chi tiết</th>
					<th width="1%">Ngày SD</th>
					<th width="1%">SL nhập</th>
					<th width="1%">SL xuất</th>
					<th width="1%">SL tồn</th>
					<th width="1%">Đơn giá</th>
					<th width="1%">Thành tiền</th>
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php
$ab = $ma[0];
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
if (isset($_POST['copy']))
{
	$socopy =  $_POST['socopy'];
	$mataisan=$_POST["mataisanc"];
	$tenchitiet=$_POST["tenchitietc"];
	$tentaisan="";	$chitiethinhthai="";$ttsx=0;
	$ngaynhap = doingay($_POST['ngaynhapc']);
	$ngaysudung = doingay($_POST['ngaysudungc']);
	$namsanxuat = $_POST['namsanxuatc'];
	$NUOCSX = $_POST['NUOCSXc'];
	$noidung = $_POST['noidungc'];
	$DVT = $_POST['DVTc'];
	$DTKV = kieudouble($_POST['DTKVc']);
	$dongia = kieudouble($_POST['dongiac']);
	$thanhtien = kieudouble($_POST['thanhtienc']);
	$GCTS = $_POST['GCTSc'];
	$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
	$kqts = mysqli_query($con,$sqlts);
	while($row=mysqli_fetch_array($kqts)){
		$tentaisan=$row[0];
		$chitiethinhthai=$row[1];
		$ttsx = $row[2];
	}
	for	( $i = 1; $i <= $socopy; $i++)
	{
		$sql="INSERT INTO tblqlcc(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,NUOCSX,ngaysudung,noidung,DVT,DTKV,dongia,thanhtien,chitiethinhthai,GCTS,sothutu,XOA,madonvi,xemh,xemt)".
				" Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$namsanxuat','$NUOCSX','$ngaysudung','$noidung','$DVT',$DTKV,$dongia,$thanhtien,'$chitiethinhthai','$GCTS',$ttsx,'K','$ab','Chưa xem','Chưa xem')";
		$kq=mysqli_query($con,$sql);
	}
}
function nhap($TTQLcc)
{
	$kq = 0;
	global $con;
	$sql = "Select DTKV From tblqlcc where TTQLcc = '$TTQLcc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq += kieudouble($row['DTKV']);
	}
	return $kq;
}
function xuat($TTQLcc)
{
	$kq = 0;
	global $con;
	$sql = "Select soluong From tblqlcc INNER JOIN tblxuatdung ON tblqlcc.TTQLcc = tblxuatdung.TTQLcc where tblqlcc.TTQLcc = '$TTQLcc'";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql))
	{
		$kq += kieudouble($row['soluong']);
	}
	return $kq;
}
$sql = "select TTQLcc,mataisan,tentaisan,tenchitiet,ngaysudung,namsanxuat,NUOCSX,ngaysudung,noidung,DVT,DTKV,dongia,thanhtien,chitiethinhthai,GCTS from tblqlcc where madonvi = '".$ab."' Order by TTQLcc DESC";
$kq = mysqli_query($con,$sql);
$ngnh="";$ngsd="";$dongia="";$thanhtien="";   
$tatca = "";$stt=0;

if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
			$stt++;
			$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".doingay1($row[4]).">".$row[5].">".$row[6].">".doingay1($row[7]).">".$row[8].">".$row[9].">".$row[10].">".$row[11].">".$row[12].">".$row[13].">".$row[14];
			$xd = $row[0].">".$row[1].">".$row[2].">".$row[3];
			$dongia=dinhdangso($row[11]);$thanhtien=dinhdangso($row[12]);
			$xoa = $row[0].">".$ab;
            echo"<tr>";
                echo"<td>$stt</td>";                
                echo"<td>$row[3]</td>";				
				echo"<td>".doingay1($row[4])."</td>";	
				echo"<td>".dinhdangso(nhap($row['TTQLcc']))."</td>";
				echo"<td>".dinhdangso(xuat($row['TTQLcc']))."</td>";
				echo"<td>".dinhdangso(nhap($row['TTQLcc'])-xuat($row['TTQLcc']))."</td>";
				echo"<td>".dinhdangso($row[11])."</td>";
				echo"<td>".dinhdangso($row[12])."</td>";
                echo"<td>
						<a href=\"Nhapxuatdungmoi.php?id=$row[0]\" title='Add this item' class='btn btn-info'>
							Xuất</a>
						<a href=\"NhapQLCCsua.php?id=$row[0]\" title='Sửa công cụ dụng cụ' class='btn btn-blue '	>
							Sửa</a>
						<a href=\"xoa.php?id=$xoa\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>
							Xóa
						</a>
						<a data-id='$tatca' title='Tạo dụng cụ tương tự' class='open-AddBookDialog1 btn btn-green ' href='#addBookDialog1'>
							Copy</a>
						<a href=\"Nhapbaohong.php?id=$row[0]\" title='Add this item' class='btn btn-info'>
							Báo hỏng</a>
					</td>";
            echo"</tr>";
	}}
 ?> 
			</tbody>
		</table>
			</div>
</div>
<div class="modal fade" id="addBookDialog1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="text-align:center;"><strong>Nhập số bản ghi muốn tạo tương tự</strong></h4>
			</div>
			<div class="modal-body">
				<form role='form' method='POST' action = 'NhapQLCC.php' class='form-horizontal form-groups-bordered'>
					<div class="form-group">
						<label class="col-sm-3 control-label">Số bản ghi copy:</label>
						<div class="col-sm-8">
							<input name="socopy" data-mask ='fdecimal' type="text" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" name="copy" class="btn btn-blue" value = "Tạo">
						<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					</div>
					<div class="form-group" style="display: none">
						<label class="col-sm-3 control-label">Số ghi công cụ:</label>
						<div class="col-sm-8">
							<input name="bookIdc" type="text" class="form-control" id="bookIdc" value = "x">
						</div>
						<label class="col-sm-3 control-label">Tên công cụ:</label>
						<input name="mataisanc" type="text" class="form-control" id="mataisanc">
						<label for="field-3" class="col-sm-3 control-label">Tên chi tiết:</label>
						<div class="col-sm-8">
							<input name="tenchitietc" type="text" class="form-control" id="tenchitietc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
						<div class="col-sm-8">
							<input data-inputmask="'alias': 'date'" name="ngaynhapc" type="text" class="form-control" id="ngaynhapc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
						<div class="col-sm-8">
							<input data-inputmask="'alias': 'date'" name="ngaysudungc" type="text" class="form-control" id="ngaysudungc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Năm sản xuất:</label>
						<div class="col-sm-8">
							<input name="namsanxuatc" type="text" class="form-control" id="namsanxuatc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Nước sản xuất:</label>
						<div class="col-sm-8">
							<input name="NUOCSXc" type="text" class="form-control" id="NUOCSXc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
						<input name="noidungc" type="text" class="form-control" id="noidungc">
						<label for="field-4" class="col-sm-3 control-label">Đơn vị tính:</label>
						<div class="col-sm-8">
							<input name="DVTc" type="text" class="form-control" id="DVTc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Số lượng:</label>
						<div class="col-sm-8">
							<input name="DTKVc" type="text" class="form-control" id="DTKVc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Đơn giá:</label>
						<div class="col-sm-8">
							<input name="dongiac" type="text" class="form-control" data-mask="fdecimal" id="dongiac">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Thành tiền:</label>
						<div class="col-sm-8">
							<input name="thanhtienc" type="text" class="form-control" data-mask="fdecimal" id="thanhtienc">
						</div>
						<label for="field-4" class="col-sm-3 control-label">Ghi chú:</label>
						<div class="col-sm-8">
							<input name="GCTSc" type="text" class="form-control" id="GCTSc">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

	</div>
</div>
	</div>
	</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
