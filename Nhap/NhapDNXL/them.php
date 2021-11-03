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
							<a  onclick="showAjaxModalmk();">
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
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
	$(document).ready(function(){
    $('#hinhthuc').change(function(){
		//giatri= this.value;
		if(this.value== "Điều chuyển" || this.value== "Điều chuyển lại")
			$('#madv').show(); 
		else
			$('#madv').hide(); 		
    });
});
</script>
<?php
	$ab = $ma[0];
	function sotiencl($idts,$nam,$namsd,$nguyengia)
	{
		$sotiencl = 0;
		$sohaomon = 0;
		for ($i = $namsd; $i <= $nam; $i++){
			$sohaomon += sohaomon($idts,$i);
		}
		if($sohaomon >= $nguyengia)
			$sotiencl = 0;
		else
			$sotiencl = $nguyengia-$sohaomon;
		return $sotiencl;
	}
	function sohaomon($idts,$nam)
	{
		$chek = chekts($idts,$nam);
		if($chek)
		{
			$sohaomon = 0;
		}
		else {
			global $con;
			$namsd = 0;
			$sohaomon = 0;
			$nguyengia = 0;
			$hm = 0;
			$hm32 = 0;
			$sql = "Select year(ngaysudung) as namsd,(ngansach+nguonkhac) as nguyengia, phantram, phantram32 From Tblqlts where TTQLTS = " . $idts;
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				$namsd = $row['namsd'];
				$nguyengia = $row['nguyengia'];
				$hm = $row['phantram'];
				$hm32 = $row['phantram32'];
			}
			$tangst = 0;
			$giamst = 0;
			$sql = "Select ngansach,nguonkhac,tanggiam,sotien from tbltanggiam" .
				" where (tanggiam not like 'Thanh lý%' or tanggiam not like 'Thu hồi%' or tanggiam not like 'Điều chuyển%') and TTQLTS = " . $idts . " and year(ngaytanggiam) <= " . $nam;
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				if ($row['tanggiam'] == "Tăng")
					$tangst += $row['ngansach'] + $row['nguonkhac'];
				else
					$giamst += $row['sotien'];
			}
			$nguyengia += $tangst - $giamst;
			if ($nam >= $namsd) {
				if ($nam < 2013 && $nam > $namsd)
					$sohaomon += $nguyengia * $hm32 / 100;
				if ($nam >= 2013 && $nam < 2015)
					$sohaomon += $nguyengia * $hm32 / 100;
				if ($nam >= 2015)
					$sohaomon += $nguyengia * $hm / 100;
			}
		}
		return $sohaomon;
	}
	function chekts($idts,$nam)
	{
		global $con;
		$sql = "Select TTQLTS from tbltanggiam WHERE tanggiam like 'Điều chuyển%' and  TTQLTS = " . $idts . " and year(ngaytanggiam) = " . $nam;
		$qrsql = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($qrsql)) {
			return true;
		}
		return false;
	}


	function nguyengia()
	{
		global $TTQLTS;
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
	function soduhm_cu($nam,$namsd)
{
	$nguyengia = nguyengia();
	$sohaomon = 0;
	$sotiencl = 0;
	for ($i = $namsd; $i <= $nam; $i++) {
		$sohaomon += sohaomon($i);
	}
	if($nguyengia >= $sohaomon)
		$sotiencl = $nguyengia - $sohaomon;
	else
		$sotiencl = 0;
	return $sotiencl;
}
	function sohaomon_cu($nam)
{
	global $con;
	global $TTQLTS;
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
		if ($row['tanggiam'] == "Giảm")
			$giamst += $row['sotien'];
	}
	$nguyengia += $tangst - $giamst;
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
	function sotiencl_cu($mataisan)
	{
		$kq = 0;
		global $con;
		$kqngyengia = 0;
		$kqg = 0;
		$kqt = 0;
		$kqhm = 0;
		$sql = "Select ngansach, nguonkhac from tblqlts where TTQLTS = '$mataisan'";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$kqngyengia += kieudouble($row['ngansach']) + kieudouble($row['nguonkhac']);
		}
		$sql = "Select sotien,tanggiam from tbltanggiam where TTQLTS = '$mataisan'";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			if ($row['tanggiam'] == "Tăng")
				$kqt += kieudouble($row['sotien']);
			if ($row['tanggiam'] == "Giảm")
				$kqt -= kieudouble($row['sotien']);
		}
		$sql = "Select sotien,sodu from tblhaomon where TTQLTS = '$mataisan' and namhaomon in (Select Max(namhaomon) from tblhaomon where TTQLTS = '$mataisan')";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$kqhm -= kieudouble($row[0]) - kieudouble($row[1]);
		}
		$kq = $kqngyengia + $kqt - $kqg - $kqhm;
		if ($kq < 0)
			$kq = 0;
		return $kq;
	}
	function IDTS()
	{
		$kq="";
		global $madvdc;
		global $con;
		$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$madvdc'";
		$qrsql=mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	if (isset($_POST['sua'])) {
		$TTQLTS = $_POST["TTQLTS"];
		$chitiethinhthai = $_POST["chitiethinhthai"];
		$mataisan = $_POST["mataisan"];
		$tentaisan = $_POST["tentaisan"];
		$tenchitiet = $_POST["tenchitiet"];
		$ngaythang = doingay($_POST["ngaythang"]);
		$hinhthuc = $_POST["hinhthuc"];
		$noidung = $_POST["noidung"];
		$ghichu = $_POST["ghichu"];
		$madvdc = $_POST["madonvi"];
		$nam = substr($ngaythang,0,4);
		// Tính toán số hao mòn, phần trăm, số dư ... để insert vào bảng hao mòn
		$now = getdate();
		$namhm = kieudouble($now["year"]) - 1;
		$haomon = 0;
		$soduhm = 0;
		$sohmnam = 0;
		$phantramhm = 0;
		$namsd = "";
		$sql = "Select year(ngaysudung) as namsd From tblqlts WHERE TTQLTS = ". $TTQLTS;
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
			$namsd = $row['namsd'];
		$sql = "Select sotien,sodu,phantram from tblhaomon where namhaomon = (year(now())-1) and TTQLTS = " . $TTQLTS;
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$soduhm += kieudouble($row[1]);
			$sohmnam += kieudouble($row[0]);
			$phantramhm = $row[2];
		}
		$tangst = 0;
		$giamst = 0;
		$sqltg = "Select TTTGTS,lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien,ngaytanggiam".
			" from tbltanggiam where TTQLTS = " . $TTQLTS . " and year(ngaytanggiam) <= " . $nam;
		$qrsqltg = mysqli_query($con, $sqltg);
		while ($rowtg = mysqli_fetch_array($qrsqltg)) {
			if ($rowtg['tanggiam'] == "Tăng") {
				$tangst += $rowtg['ngansach'] + $rowtg['nguonkhac'];
			}
			if($rowtg['tanggiam'] == "Giảm")  {
				$giamst += $rowtg['sotien'];
			}
		}
		$nguyengia = nguyengia() + $tangst - $giamst;

		$haomon = $sohmnam + $soduhm;
		$conlai = nguyengia() + kieudouble($haomon);
		if (!$ngaythang || !$hinhthuc) {
			print "Xin vui nhập đầy đủ thông tin.";
			exit;
		}
		$TTdenghi = 0;
		$sql = "INSERT INTO tbldenghi(TTQLTS,ngaythang,hinhthuc,noidung,ghichu,mataisan,tentaisan,tenchitiet,chitiethinhthai,madonvi,xemt,xemh,madonvidc)
				VALUES ('$TTQLTS','$ngaythang','$hinhthuc','$noidung','$ghichu','$mataisan','$tentaisan','$tenchitiet','$chitiethinhthai','$ab','Chưa xem','Chưa xem','$madvdc')";
		$kq = mysqli_query($con, $sql);
		$sql = "Select max(TTdenghi) as ID From tbldenghi";
		$qrsql = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($qrsql))
			$TTdenghi = $row['ID'];
		if ($hinhthuc == "Thanh lý") {
			$sqlup = "Update tblqlts Set XOA = 'TL' Where TTQLTS = '$TTQLTS'";
			$kq1 = mysqli_query($con, $sqlup);
			$sqltg = "insert into tbltanggiam (ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi)" .
				"values ('$ngaythang','$TTQLTS','Thanh lý','1','" . sotiencl($TTQLTS,$nam,$namsd,$nguyengia) . "','Thanh lý','$ab')";
			$qrsqltg = mysqli_query($con, $sqltg);
		}
		if ($hinhthuc == "Thu hồi") {
			$sqlup = "Update tblqlts Set XOA = 'TH' Where TTQLTS = '$TTQLTS'";
			$kq1 = mysqli_query($con, $sqlup);
			$sqltg = "insert into tbltanggiam (ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi)" .
				"values ('$ngaythang','$TTQLTS','Thu hồi','1','" . sotiencl($TTQLTS,$nam,$namsd,$nguyengia) . "','Thu hồi','$ab')";
			$qrsqltg = mysqli_query($con, $sqltg);
		}
		if ($hinhthuc == "Tiêu hủy") {
			$sqlup = "Update tblqlts Set XOA = 'THuy' Where TTQLTS = '$TTQLTS'";
			$kq1 = mysqli_query($con, $sqlup);
			$sqltg = "insert into tbltanggiam (ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi)" .
				"values ('$ngaythang','$TTQLTS','Tiêu hủy','1','" . sotiencl($TTQLTS,$nam,$namsd,$nguyengia) . "','Tiêu hủy','$ab')";
			$qrsqltg = mysqli_query($con, $sqltg);
		}
		if ($hinhthuc == "Bán") {
			$sqlup = "Update tblqlts Set XOA = 'Bán' Where TTQLTS = '$TTQLTS'";
			$kq1 = mysqli_query($con, $sqlup);
		}
		if ($hinhthuc == "Điều chuyển") {
			$sql = "Select * from tblqlts where TTQLTS = '$TTQLTS'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				$sqlin = "Insert into tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,ngaysudung,noidung,ngansach,nguonkhac," .
					"DTKV,DCKV,CAPH,DTXD,TDTSXD,TKVDAT,SOTA,NHXE,BKSXE,CNXE,NUOCSX,CXXE,PLSD,CDSD,NGGOXE,chitiethinhthai,GCTS,XOA,DVT," .
					"ttkhac,madonvi,phantram,sonamsd,sothutu,phantram32,sohaomon,conlai,IDTSC,ngaythangchuyen) values " .
					"('$row[mataisan]','$row[tentaisan]','$row[tenchitiet]','$row[ngaynhap]','$row[namsanxuat]','$row[ngaysudung]'," .
					"'$row[noidung]','$row[ngansach]','$row[nguonkhac]','$row[DTKV]','$row[DCKV]','$row[CAPH]','$row[DTXD]'," .
					"'$row[TDTSXD]','$row[TKVDAT]','$row[SOTA]','$row[NHXE]','$row[BKSXE]','$row[CNXE]','$row[NUOCSX]','$row[CXXE]'," .
					"'$row[PLSD]','$row[CDSD]','$row[NGGOXE]','$row[chitiethinhthai]','$row[GCTS]','NDC','$row[DVT]'" .
					",'$row[ttkhac]','$madvdc','$row[phantram]','$row[sonamsd]','$row[sothutu]','$row[phantram32]',$haomon,$conlai,$TTQLTS,'$ngaythang')";
				$qrsqlin = mysqli_query($con, $sqlin);
				if ($qrsqlin) {
					$IDTS = IDTS();
					$sqlhm = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi,TTTS) values ('$ngaythang',$IDTS,$namhm,$phantramhm,$soduhm,$sohmnam,'$madvdc',$IDTS)";
					$qrsqlhm = mysqli_query($con, $sqlhm);
					$sqlht = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,soluong,madonvi,TTTS) values ('$ngaythang',$IDTS,'QLNN',1,'$madvdc',$IDTS)";
					$qrsqlht = mysqli_query($con, $sqlht);
					$sqlup = "Update tblqlts Set XOA = 'DC' Where TTQLTS = '$TTQLTS'";
					$qrsqlup = mysqli_query($con, $sqlup);
					$sqltg = "insert into tbltanggiam (ngaytanggiam,TTQLTS,lydotanggiam,soluong,tanggiam,madonvi)" .
						"values ('$ngaythang','$TTQLTS','Điều chuyển','1','Điều chuyển','$ab')";
					$qrsqltg = mysqli_query($con, $sqltg);
				}
			}
		}
		if ($hinhthuc == "Điều chuyển lại") {
			$idts = "";
			$sql = "Select IDTSC from tblqlts where TTQLTS = '$TTQLTS'";
			$qrsql = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($qrsql)) {
				$idts = $row[0];
			}
			$xoa = "DELETE FROM tblqlts Where TTQLTS='$TTQLTS'";
			$tt = mysqli_query($con, $xoa);
			$xoa = "DELETE FROM tblhaomon Where TTQLTS='$TTQLTS'";
			$tt = mysqli_query($con, $xoa);
			if ($idts != "") {
				$sqlup = "Update tblqlts Set XOA = 'K' Where TTQLTS = '$idts'";
				$qrsqlup = mysqli_query($con, $sqlup);
			}
		}
		if ($kq) {
			header("Location:NhapDNXL.php");
		}
	}

	$a = $_GET['id'];
	function doingay($ngay)
	{
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
	}
	function kieudouble($so)
		{
			$kq = "";$a="";
			$kq1 = 0;$vt1=0;$vt2=0;
			if ($so != "")
			{
				$vt1 = strpos($so,",");
				$vt2 = strpos($so,".");
				if ($vt1==-1 && $vt2==-1)
				{
					$kq1 = (double)$so;
				}
				else
				{
					if ($vt1 > 0)
					{
						$kq = str_replace(",","",$so);
					}
					else
					{
						$kq = str_replace(".","",$so);
					}
				}			
				$kq1 = (double)$kq;
			}
			else
			{
				$kq1 = 0;
			}
			return $kq1;
		}
$sql = "SELECT TTQLTS,chitiethinhthai,mataisan,tentaisan,tenchitiet FROM tblqlts WHERE TTQLTS='$a'";
	$hq=mysqli_query($con,$sql);
		if (mysqli_num_rows($hq)>0)
			$row=mysqli_fetch_assoc($hq);
?>
		<h2>Nhập xử lý tài sản</h2>
		<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='Danhsachdnxl.php'" ?>" />	
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Hình thái tài sản:</label>
								<div class="col-sm-5">
									<input name="chitiethinhthai" readonly="false" type="text" class="form-control" id="field-1" value="<?php echo $row["chitiethinhthai"] ?>">
								</div>
							</div>	
							<div class="form-group">
								<label for="field-2" class="col-sm-3 control-label">Mã tài sản:</label>
								<div class="col-sm-5">
									<input name="mataisan" readonly="false" type="text" class="form-control" id="field-2" value="<?php echo $row["mataisan"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Tên tài sản:</label>
								<div class="col-sm-5">
									<input name="tentaisan" readonly="false" type="text" class="form-control" id="field-3" value="<?php echo $row["tentaisan"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-5">
									<input name="tenchitiet" readonly="false" type="text" class="form-control" id="field-4" value="<?php echo $row["tenchitiet"] ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="field-5" class="col-sm-3 control-label">Ngày xử lý:</label>
								<div class="col-sm-5">
									<input data-inputmask="'alias': 'date'" name="ngaythang" type="text" class="form-control" id="field-5" >
								</div>
							</div>
							<div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Hình thức xử lý:</label>
								<div class="col-sm-5">
									<select name="hinhthuc" id="hinhthuc" type="text" class="form-control" id="field-6"   >
										<option value='Thu hồi'>Thu hồi</option>
										<option value='Bán'>Bán</option>
										<option value='Điều chuyển'>Điều chuyển</option>
										<option value='Thanh lý'>Thanh lý</option>
										<option value='Tiêu hủy'>Tiêu hủy</option>
										<option value='LD, liên kết'>LD, liên kết</option>
										<option value='Xử lý trong trường hợp bị mất, bị hủy hoại'>Xử lý trong trường hợp bị mất, bị hủy hoại</option>
										<option value='Điều chuyển lại'>Điều chuyển lại</option>
									</select>
								</div>
							</div>
							<div class="form-group" id="madv" style="display:none">
								<label class="col-sm-3 control-label">Chọn đơn vị</label>
								<?php								
								$sql="select madonvi,tendv from thongtindonvi where madonvi like '".substr($ma[0],0,8)."%'";									
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-5'>";
									echo"<select name='madonvi' class='form-control' id='madonvi'>";
									echo"<option selected='selected' value=''>Chọn tên đơn vị điều chuyển</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
							</div>
							<div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Nội dung xử lý:</label>
								<div class="col-sm-5">
									<input name="noidung" type="text" class="form-control" id="field-7"   >
								</div>
							</div><div class="form-group">
								<label for="field-6" class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-sm-5">
									<input name="ghichu" type="text" class="form-control" id="field-8"   >
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" name="sua" class="btn btn-success">Cập nhật</button>
									<button type="reset" class="btn btn-info">Làm mới</button>									
									<input name="TTQLTS" class="form-control" style = "Display:none;" type="text" value = "<?php echo $row["TTQLTS"] ?>">
								</div>
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