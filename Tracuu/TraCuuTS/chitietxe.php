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
								<span class='title'>Quản lý tài sản cố định là nhà</span>
							</a>						
						</li>
						<li>
							<a  href="/Nhap/NhapQLTSxe/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định là xe</span>
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
						<li class="active">
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
							<a href="extra-calendar.html">
								<span class="title">Hướng dẫn sử dụng</span>
							</a>
						</li>
						<li class="active">
						<li>					
							<a  href="/Tracuu/TraCuuCC/tracuucc.php">							
								<span class='title'>Tìm kiếm thông tin công cụ</span>
							</a>						
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTC/tracuutc.php">							
								<span class='title'>Tìm kiếm thông tin trang cấp</span>
							</a>	
						</li>
						<li>
							<a  href="/Tracuu/TraCuuDN/tracuudn.php">							
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
<style>
	@media print {
		   .in{
			  display: none !important;
		   }
		}
</style>
<!-------- Header ---------->
<?php
	$tttaisan = $_GET["id"];
	$key=explode("-",$tttaisan);
?>

<script src="/assets/News/jquery.min.js"></script>
<?php
function doingay($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}		
function dinhdangso($so)
{
	$kq = "";
	if ($so > 0)
		$kq = number_format($so);
	return $kq;	
}
$sql = "Select tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,NUOCSX,namsanxuat,BKSXE,NHXE,CNXE,CXXE,NGGOXE,PLSD,CDSD,ngansach,nguonkhac,ttkhac from tblqlts where TTQLTS = '".$key[0]."'";
$kqts = mysqli_query($con,$sql);
$row=mysqli_fetch_array($kqts);
$nguyengia="";
$nguyengia = $row[14] + $row[15]  ;
//$ntnhap = doingay($row[2]);$ntsdung=ngaynhap($row[3]);$ngngansach=dinhdangso($row[9]);$ngngkhac=dinhdangso($row[10]);	
?>
		<h3 style="text-align:center;">CHI TIẾT TÀI SẢN LÀ XE</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label  class="col-sm-2 control-label">Tên tài sản:</label>
								<div class="col-md-4">
									<input name="mataisan" class="form-control" type="text" value = "<?php echo $row[0]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Tên chi tiết:</label>
								<div class="col-md-4">
									<input name="tenchitiet" class="form-control" type="text" value = "<?php echo $row[1]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Ngày nhập:</label>
								<div class="col-md-4">
									<input name="ngaynhap" class="form-control" type="text" value = "<?php echo doingay($row[2]); ?>">
								</div>
								<label  class="col-sm-2 control-label">Ngày sử dụng:</label>
								<div class="col-md-4">
									<input name="ngaysudung" class="form-control" type="text" value = "<?php echo doingay($row[3]); ?>">
								</div>
								<label  class="col-sm-2 control-label">Nơi sử dụng:</label>
								<div class="col-md-4">
									<input name="noidung" class="form-control" type="text" value = "<?php echo $row[4]; ?>">
								</div>	
								<label  class="col-sm-2 control-label">Nước sản xuất:</label>
								<div class="col-md-4">
									<input name="NUOCSX" class="form-control" type="text" value = "<?php echo $row[5]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Năm sản xuất:</label>
								<div class="col-md-4">
									<input name="namsanxuat" class="form-control" type="text" value = "<?php echo $row[6]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Biển số:</label>
								<div class="col-md-4">
									<input name="BKSXE" class="form-control" type="text" value = "<?php echo $row[7]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Nhã hiệu:</label>
								<div class="col-md-4">
									<input name="NHXE" class="form-control" type="text" value = "<?php echo $row[8]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Tải trọng:</label>
								<div class="col-md-4">
									<input name="CNXE" class="form-control" type="text" value = "<?php echo $row[9]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Công xuất:</label>
								<div class="col-md-4">
									<input name="CXXE" class="form-control" type="text" value = "<?php echo $row[10]; ?>">
								</div>								
								<label for="field-4" class="col-sm-2 control-label">Nguồn gốc:</label>
								<div class="col-sm-4">
									<input name="NGGOXE" type="text" class="form-control" id="field-3" value = "<?php echo $row[11]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Phân loại SD:</label>
								<div class="col-md-4">
									<input name="PLSD" class="form-control" type="text" value = "<?php echo $row[12]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Chức danh:</label>
								<div class="col-md-4">
									<input name="CDSD" class="form-control" type="text" value = "<?php echo $row[13]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Ngân sách:</label>
								<div class="col-md-4">
									<input name="ngansach" class="form-control" type="text" value = "<?php echo dinhdangso($row[14]); ?>">
								</div>
								<label  class="col-sm-2 control-label">Nguồn khác:</label>
								<div class="col-md-4">
									<input name="nguonkhac" class="form-control" type="text" value = "<?php echo dinhdangso($row[15]); ?>">
								</div>
								<?php
								$GTCL ="";
								$sqlhm = "Select ngaythang,namhaomon,phantram,sodu,sotien,sodu+sotien as lk from tblhaomon Where TTQLTS = '".$key[0]."'";
								$kqhm = mysqli_query($con,$sqlhm);$sotienhm="";$sodu="";$lk="";
								$rowhm=@mysqli_fetch_array($kqhm);
								$lk=dinhdangso($rowhm[5]);
								$sqlgt = "Select sotien, tanggiam from tbltanggiam Where TTQLTS = '".$key[0]."' ";
								$kqgt = mysqli_query($con,$sqlgt);
								$rowgt=mysqli_fetch_array($kqgt);
								if ($rowgt[1]=='Tăng')
								$GTCL = ($nguyengia - $rowhm[5]) + $rowgt[0] ;
								else if ($rowgt[1]=='Giảm')
								$GTCL = ($nguyengia - $rowhm[5]) - $rowgt[0] ;
								else
								$GTCL = $nguyengia - $rowhm[5] ;
								$gtcl1 = "";
								?>
								<label for="field-4" class="col-sm-2 control-label">Giá trị còn lại:</label>
								<div class="col-sm-4">
									<input name="GTCL" type="text" class="form-control" id="field-3" value = "<?php $gtcl1 = dinhdangso($GTCL); echo $gtcl1 ; ?>">
								</div>
								<label  class="col-sm-2 control-label">Ghi chú:</label>
								<div class="col-md-4">
									<input name="ttkhac" class="form-control" type="text" value = "<?php echo $row[16]; ?>">
								</div>
							</div>	
							<div>
								<label style="margin-left:-30px;" class="col-sm-3 control-label"><strong><b>Thông tin tăng giảm tài sản:</b></strong></label>
								<table class="table table-bordered table-striped datatable" id="table-2">
								<thead>
									<tr>
										<th>Ngày tháng</th>
										<th>Phân loại</th>
										<th>Lý do tăng giảm</th>
										<th>Số lượng</th>
										<th>Số tiền</th>
									</tr>
								</thead>
								<tbody>
<?php
$sqltg = "Select ngaytanggiam,tanggiam,lydotanggiam,soluong,sotien from tbltanggiam Where TTQLTS = '".$key[0]."'";
$kqtg = mysqli_query($con,$sqltg);$sotientg="";
while($rowtg=@mysqli_fetch_array($kqtg))
{
	$sotientg=dinhdangso($rowtg[4]);
	echo"<tr>";
	echo "<td>$rowtg[0]</td>";
	echo "<td>$rowtg[1]</td>";
	echo "<td>$rowtg[2]</td>";
	echo "<td>$rowtg[3]</td>";
	echo "<td>$sotientg</td>";
	echo"</tr>";
}
?>	
								</tbody>							
								</table>
							</div>
							<div>
								<label style="margin-left:-30px;" class="col-sm-3 control-label"><strong><b>Thông tin hao mòn tài sản:</b></strong></label>
								<table class="table table-bordered table-striped datatable" id="table-2">
								<thead>
									<tr>
										<th>Ngày tháng</th>
										<th>Năm hao mòn</th>
										<th>Phần trăm</th>
										<th>Số dư hao mòn</th>
										<th>Hao mòn năm</th>										
										<th>Lũy kế</th>
									</tr>
								</thead>
								<tbody>
<?php
$sqlhm = "Select ngaythang,namhaomon,phantram,sodu,sotien,sodu+sotien as lk from tblhaomon Where TTQLTS = '".$key[0]."'";
$kqhm = mysqli_query($con,$sqlhm);$sotienhm="";$sodu="";$lk="";
while($rowhm=@mysqli_fetch_array($kqhm))
{
	$sotientg=dinhdangso($rowhm[3]);
	$sodu=dinhdangso($rowhm[4]);
	$lk=dinhdangso($rowhm[5]);
	echo"<tr>";
	echo "<td>$rowhm[0]</td>";
	echo "<td>$rowhm[1]</td>";
	echo "<td>$rowhm[2]</td>";
	echo "<td>$sotientg</td>";
	echo "<td>$sodu</td>";
	echo "<td>$lk</td>";	
	echo"</tr>";
}
?>									
								</tbody>							
								</table>
							</div>
							<div>
								<label style="margin-left:-30px;" class="col-sm-3 control-label"><strong><b>Thông tin hiện trạng tài sản:</b></strong></label>
								<table class="table table-bordered table-striped datatable" id="table-2">
								<thead>
									<tr>
										<th>Ngày tháng</th>
										<th>Phân loại</th>
										<th>Đơn vị tính</th>
										<th>Số lượng</th>										
									</tr>
								</thead>
								<tbody>
<?php
$sqlhm = "Select ngaythang,phanloai,donvi,soluong from tblhientrang Where TTQLTS = '".$key[0]."'";
$kqhm = mysqli_query($con,$sqlhm);
while($rowhm=@mysqli_fetch_array($kqhm))
{
	echo"<tr>";
	echo "<td>$rowhm[0]</td>";
	echo "<td>$rowhm[1]</td>";
	echo "<td>$rowhm[2]</td>";
	echo "<td>$rowhm[3]</td>";	
	echo"</tr>";
}
?>									
								</tbody>							
								</table>
							</div>
							<div class="in">
									<a href="tracuuts.php?ib=<?php echo $key[1]; ?>" class='btn btn-black'>
										Trở về
									</a>
									<a  onclick="window.print()" class='btn btn-default '>
										<i class='entypo-print'></i>
										In
									</a>
							</div>	
					
						</form>	
					</div>
				</div>		
			</div>
		</div>	
   
	  
<!--------- Footer ---------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>