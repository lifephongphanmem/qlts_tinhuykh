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
						<li class="active">
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
<!-------- Header -------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap;
		}
		table > tbody > tr.highlight > td,
		table > tbody > tr.highlight > th {
		  /*background-color: pink !important;*/
			color: #e74c3c;
		}
		table.dataTable thead th,
		table.dataTable thead td {
			padding: 10px 18px;
			border: 1px solid #dddddd;
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
		<hr />
		<!--
<script language='javascript'>
 $(document).ready(function() {
  $('#nhom2sltt').change(function() {
   giatri = $('#nhom1sllt').val() - this.value;
   $("#nhom3slcl").val(giatri);
  });
 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#nhom2ngtt').change(function() {
   giatri = $('#nhom1nglt').val() - this.value;
   $("#nhom3ngcl").val(giatri);
  });
 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#nhom2cltt').change(function() {
   giatri = $('#nhom1cllt').val() - this.value;
   $("#nhom3clcl").val(giatri);
  });
 });
</script>
-->
<script>
    $(function(){        
        // Input Mask
        if($.isFunction($.fn.inputmask))
        {
            $("[data-mask]").each(function(i, el)
            {
                var $this = $(el),
                        mask = $this.data('mask').toString(),
                        opts = {
                            numericInput: attrDefault($this, 'numeric', false),
                            radixPoint: attrDefault($this, 'radixPoint', ''),
                            rightAlignNumerics: attrDefault($this, 'numericAlign', 'left') == 'right'
                        },
                        placeholder = attrDefault($this, 'placeholder', ''),
                        is_regex = attrDefault($this, 'isRegex', '');


                if(placeholder.length)
                {
                    opts[placeholder] = placeholder;
                }

                switch(mask.toLowerCase())
                {
                    case "phone":
                        mask = "(999) 999-9999";
                        break;

                    case "currency":
                    case "rcurrency":

                        var sign = attrDefault($this, 'sign', '$');;

                        mask = "999,999,999.99";

                        if($this.data('mask').toLowerCase() == 'rcurrency')
                        {
                            mask += ' ' + sign;
                        }
                        else
                        {
                            mask = sign + ' ' + mask;
                        }

                        opts.numericInput = true;
                        opts.rightAlignNumerics = false;
                        opts.radixPoint = '.';
                        break;

                    case "email":
                        mask = 'Regex';
                        opts.regex = "[a-zA-Z0-9._%-]+@[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}";
                        break;

                    case "fdecimal":
                        mask = 'decimal';
                        $.extend(opts, {
                            autoGroup		: true,
                            groupSize		: 3,
                            radixPoint		: attrDefault($this, 'rad', '.'),
                            groupSeparator	: attrDefault($this, 'dec', ',')
                        });
                }

                if(is_regex)
                {
                    opts.regex = mask;
                    mask = 'Regex';
                }

                $this.inputmask(mask, opts);
            });
        }
    });
    
    // Element Attribute Helper
    function attrDefault($el, data_var, default_val)
    {
        if(typeof $el.data(data_var) != 'undefined')
        {
            return $el.data(data_var);
        }

        return default_val;
    }
</script>
<script>
$(document).on("click", ".open-addBookDialog1", function (e) {
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[0]);
	$("#dongia").val(myBookId[1]);
	$("#soluong").val(myBookId[2]);
	$("#thanhtien").val(myBookId[3]);
	$("#soluongkk").val(myBookId[4]);
	$("#thanhtienkk").val(myBookId[5]);
	$("#soluongthua").val(myBookId[6]);
	$("#thanhtienthua").val(myBookId[7]);
	$("#soluongthieu").val(myBookId[8]);
	$("#thanhtienthieu").val(myBookId[9]);
    $(_self.attr('href')).modal('show');
});
 </script>
 <script>
$(document).ready(function()
{
	$('#nhom2sltt').change(function(){		
		chenhlech();
	});
});
$(document).ready(function()
{
	$('#nhom2ngtt').change(function(){		
		chenhlech();
	});
});
$(document).ready(function()
{
	$('#nhom2cltt').change(function(){		
		chenhlech();
	});
});

 function chenhlech()
{
	var nguyengia = 0;
	var conlai = 1;
	var sl = $("#nhom1sllt").val();
	if(sl != "")
		sl = sl.replace(/,/g,"");
	else
		sl = 0;
	var nguyengia= $("#nhom1nglt").val();
	if(nguyengia != "")
		nguyengia = nguyengia.replace(/,/g,"");
	else
		nguyengia = 0;
	var conlai= $("#nhom1cllt").val();
	if(conlai != "")
		conlai = conlai.replace(/,/g,"");
	else
		conlai = 0;
	var slm= $("#nhom2sltt").val();
	if(slm != "")
		slm = slm.replace(/,/g,"");
	else
		slm = 0;
	var nguyengiam= $("#nhom2ngtt").val();
	if(nguyengiam != "")
		nguyengiam = nguyengiam.replace(/,/g,"");
	else
		nguyengiam = 0;
	var conlaim= $("#nhom2cltt").val();	
	if(conlaim != "")
		conlaim = conlaim.replace(/,/g,"");
	else
		conlaim = 0;
	var slcl = parseFloat(sl) - parseFloat(slm);
	var nguyengiacl = parseFloat(nguyengia) - parseFloat(nguyengiam);
	var conlaicl = parseFloat(conlai) - parseFloat(conlaim);
	$("#nhom3slcl").val(slcl);
	$("#nhom3ngcl").val(nguyengiacl);
	$("#nhom3clcl").val(conlaicl);
}
function getfocus() {
    document.getElementById("nhom2sltt").focus();
	document.getElementById("nhom2ngtt").focus();
	document.getElementById("nhom2cltt").focus();
	document.getElementById("nhom3slcl").focus();
	document.getElementById("nhom3ngcl").focus();
	document.getElementById("nhom3clcl").focus();	
} 
 </script>
<?php 		
	if (isset($_POST['capnhatchinhsua']))
	{				
		$nhom2sltt=kieudouble($_POST["nhom2sltt"]);
		$nhom2ngtt=kieudouble($_POST["nhom2ngtt"]);
		$nhom2cltt=kieudouble($_POST["nhom2cltt"]);
		$nhom3slcl=kieudouble($_POST["nhom3slcl"]);
		$nhom3ngcl=kieudouble($_POST["nhom3ngcl"]);
		$nhom3clcl=kieudouble($_POST["nhom3clcl"]);
		$sql="Update tblkiemken set nhom2sltt=$nhom2sltt,nhom2ngtt=$nhom2ngtt,nhom2cltt=$nhom2cltt,nhom3slcl=$nhom3slcl,nhom3ngcl=$nhom3ngcl,nhom3clcl=$nhom3clcl where TTkiemken=".$_POST['bookId'];											
		$kq=mysqli_query($con,$sql);	
	}	        	
?>
<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='NhapKKTS.php'" ?>" />	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th style="text-align: center" rowspan="3">STT</th>
					<th style="text-align: center" rowspan="3">Tên chi tiết</th>
					<th style="text-align: center" rowspan="3">Nơi sử dụng</th>
					<th style="text-align: center" rowspan="3">Mã số</th>
					<th style="text-align: center" rowspan="3">Đơn vị tính</th>
					<th style="text-align: center" rowspan="3">Đơn giá</th>
					<th style="text-align: center" rowspan="2" colspan="2">Sổ kế toán</th>
					<th style="text-align: center" rowspan="2" colspan="2">Theo kiểm kê</th>
					<th style="text-align: center" colspan="4">Chênh lệch</th>
					<th style="text-align: center" rowspan="2" colspan="3">Phẩm chất</th>
					<th rowspan="3"></th>
				</tr>
				<tr>
					<th style="text-align: center" colspan="2">Thừa</th>
					<th style="text-align: center" colspan="2">Thiếu</th>
				</tr>
				<tr>
					<th style="text-align: center" >Số lượng</th>
					<th style="text-align: center" >Thành tiền</th>
					<th style="text-align: center" >Số lượng</th>
					<th style="text-align: center" >Thành tiền</th>
					<th style="text-align: center" >Số lượng</th>
					<th style="text-align: center" >Thành tiền</th>
					<th style="text-align: center" >Số lượng</th>
					<th style="text-align: center" >Thành tiền</th>
					<th style="text-align: center" >Còn tốt 100 %</th>
					<th style="text-align: center" >Kém phẩm chất</th>
					<th style="text-align: center" >Mất phẩm chất</th>
				</tr>
			</thead>
			
			<tbody>	
<?php 
//
$a=$_GET["id"];
$sql = "select TTkiemken,tentscc,tenchitiet,noisudung,chitiethinhthai,macc,DVT,dongia,soluong,thanhtien,soluongkk,thanhtienkk,soluongthua,thanhtienthua,soluongthieu,thanhtienthieu,phamchat,TTkiemke from tblkiemken where TTkiemke = '$a'";
$kq = mysqli_query($con,$sql);
$tatca = "";$stt=0;   
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
	$stt ++;
	$tatca = $row[0].">".$row['dongia'].">".$row['soluong'].">".$row['thanhtien'].">".$row['soluongkk'].">".$row['thanhtienkk'].">".$row['soluongthua'].">".$row['thanhtienthua'].">".$row['soluongthieu'].">".$row['thanhtienthieu'].">".$row['phamchat'].">".$row['TTkiemke'];
	$maxoa =  $row[0].">".$row[14];	
            echo "<tr>";
                echo"<td>$stt</td>";                
                echo"<td>$row[tenchitiet]</td>";
                echo"<td>$row[noisudung]</td>";
				echo"<td>$row[macc]</td>";
				echo"<td>$row[DVT]</td>";
                echo"<td>".dinhdangso($row['dongia'])."</td>";
				echo"<td>".dinhdangso($row['soluong'])."</td>";
				echo"<td>".dinhdangso($row['thanhtien'])."</td>";
				echo"<td>".dinhdangso($row['soluongkk'])."</td>";
				echo"<td>".dinhdangso($row['thanhtienkk'])."</td>";
				echo"<td>".dinhdangso($row['soluongthua'])."</td>";
				echo"<td>".dinhdangso($row['thanhtienthua'])."</td>";
				echo"<td>".dinhdangso($row['soluongthieu'])."</td>";
				echo"<td>".dinhdangso($row['thanhtienthieu'])."</td>";
				if($row['phamchat'] == "Còn tốt 100 %")
				{
					echo"<td>X</td>";
					echo"<td></td>";
					echo"<td></td>";
				}
				elseif($row['phamchat'] == "Kém phẩm chất")
				{
					echo"<td></td>";
					echo"<td>X</td>";
					echo"<td></td>";
				}
				elseif($row['phamchat'] == "Mất phẩm chất")
				{
					echo"<td></td>";
					echo"<td></td>";
					echo"<td>X</td>";
				}else
				{
					echo"<td></td>";
					echo"<td></td>";
					echo"<td></td>";
				}
		echo"<td>
						<a title='Sửa' class='btn btn-blue ' onclick='openpagecongcukkct(\"Edit\",$row[TTkiemken])'>
								Sửa</a>
						<a href=\"xoact.php?id=$maxoa\" onclick=\"return confirm('Bạn muốn xóa kiểm kê tài sản này?')\" class='btn btn-red '>
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
<div class="modal fade" id="addBookDialog1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chỉnh sửa kiểm kê tài sản</h4>
      </div>
      <div class="modal-body"> 
<?php
	 $macn = $a;
		echo "<form role='form'  method='POST' action = 'NhapKKTSccct.php?id=$macn' class='form-horizontal form-groups-bordered'>";
?>
							<div class="form-group">								
										<input name="bookId" style ="display:none;" type="text" readonly tabindex="-1"	 class="form-control" id="bookId"/>
								<label class="col-sm-35 control-label">Đơn giá:</label>
								<div class="col-sm-8">
									<input name="dongia" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="dongia">
								</div>							
								<label class="col-sm-35 control-label">Số lượng theo sổ:</label>
								<div class="col-sm-8">
									<input name="soluong" type="text" readonly tabindex="-1" class="form-control passvalid" data-mask="fdecimal" id="soluong">
								</div>							
								<label class="col-sm-35 control-label">Thành tiền theo sổ:</label>
								<div class="col-sm-8">
									<input name="thanhtien" type="text" readonly tabindex="-1" class="form-control passvalid" data-mask="fdecimal" id="thanhtien">
								</div>														
								<label class="col-sm-35 control-label">Số lượng kiểm kê:</label>
								<div class="col-sm-8">
									<input name="soluongkk" type="text" class="form-control" data-mask="fdecimal" id="soluongkk" >
								</div>							
								<label class="col-sm-35 control-label">Thành tiền kiểm kê:</label>
								<div class="col-sm-8">
									<input name="thanhtienkk" type="text" class="form-control passvalid" data-mask="fdecimal" id="thanhtienkk">
								</div>							
								<label class="col-sm-35 control-label">Số lượng thừa:</label>
								<div class="col-sm-8">
									<input name="soluongthua" type="text" class="form-control passvalid" data-mask="fdecimal" id="soluongthua">
								</div>														
								<label class="col-sm-35 control-label">Thành tiền thừa:</label>
								<div class="col-sm-8">
									<input name="thanhtienthua" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="thanhtienthua" >
								</div>							
								<label class="col-sm-35 control-label">Số lượng thiếu:</label>
								<div class="col-sm-8">
									<input name="soluongthieu" type="text" readonly tabindex="-1" class="form-control passvalid" data-mask="fdecimal" id="soluongthieu">
								</div>							
								<label class="col-sm-35 control-label">Thành tiền thiếu:</label>
								<div class="col-sm-8">
									<input name="thanhtienthieu" type="text" readonly tabindex="-1" class="form-control passvalid" data-mask="fdecimal" id="thanhtienthieu">
								</div>
								<label class="col-sm-35 control-label">Phẩm chất:</label>
								<div class="col-sm-8">
									<select name="phamchat" id="phamchat">
										<option value="">-- Chọn phẩm chất --</option>
										<option value="Còn tốt 100 %">Còn tốt 100 %</option>
										<option value="Kém phẩm chất">Kém phẩm chất</option>
										<option value="Mất phẩm chất">Mất phẩm chất</option>
									</select>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatchinhsua" onclick="getfocus()" class="btn btn-blue" value = "Cập nhật">
							</div>	
						</form>
      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	</div>
	<form  name='nhapmoi' id='nhapmoi' style="display: none"  method='POST'>
		<input type='text' name='TTkiemken' id='TTkiemken'>
	</form>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>