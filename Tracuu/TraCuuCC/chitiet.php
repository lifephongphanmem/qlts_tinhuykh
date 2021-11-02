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
							
							<a  href="/QLTS/Nhap/NhapTCTS/NhapDNTC.php">							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/QLTS/Nhap/NhapQLTS/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định khác</span>
							</a>
												
						</li>
						<li>
							<a  href="/QLTS/Nhap/NhapQLTSdat/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là đất</span>
							</a>				
						</li>
						<li>
							<a  href="/QLTS/Nhap/NhapQLTSnha/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là nhà</span>
							</a>						
						</li>
						<li>
							<a  href="/QLTS/Nhap/NhapQLTSxe/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là xe</span>
							</a>							
						</li>
						<li class="active">
							<a  href="/QLTS/Nhap/NhapQLCC/NhapQLCC.php">							
								<span class='title'>Quản lý công cụ dụng cụ</span>
							</a>
						</li>
						<li>	
							<a  href="/QLTS/Nhap/NhapDNXL/NhapDNXL.php">							
								<span class='title'>Đề nghị xử lý tài sản</span>
							</a>							
						</li>
						<li>		
							<a  href="/QLTS/Nhap/NhapTDTTTS/NhapTDTTTS.php">							
								<span class='title'>Thay đổi thông tin tài sản cố định</span>
							</a>							
						</li>
						<li>		
							<a  href="/QLTS/Nhap/NhapTDTTDV/NhapTDTTDVchon.php">							
								<span class='title'>Thay đổi thông tin đơn vị</span>
							</a>					
						</li>
						<li>
							<a  href="/QLTS/Nhap/NhapKKTS/NhapKKTS.php">							
								<span class='title'>Kiểm kê tài sản, công cụ</span>
							</a>					
						</li>
					</ul>
				</li>
				<li>
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span class="title">Tổng hợp báo cáo tài sản</span>
					</a>
					<ul>
						<li>
							<a  href="/QLTS/Thoaikx/the.php">							
								<span class='title'>Thẻ tài sản cố định</span>
							</a>	
						</li>
						<li>		
							<a  href="/QLTS/Thoaikx/ThoaiSoTSCDm1.php">							
								<span class='title'>Sổ tài sản cố định (S24-H)</span>
							</a>		
						</li>
						<li>			
							<a  href="/QLTS/Thoaikx/ThoaiBcTHTGTSCDdv.php">							
								<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
							</a>						
						</li>
						<li>					
							<a  href="/QLTS/Thoaikx/ThoaiBaHMTSCD.php">							
								<span class='title'>Bảng tính hao mòn tài sản cố định (C55 - HD)</span>
							</a>						
						</li>
						<li>						
							<a  href="/QLTS/Thoaikx/ThoaiBaTHDSTSDNTC.php">							
								<span class='title'>Danh sách tài sản đề nghị trang cấp</span>
							</a>					
						</li>
						<li>					
							<a  href="/QLTS/Thoaikx/ThoaiBaTHDMTSDNXL.php">							
								<span class='title'>Danh sách tài sản đề nghị xử lý</span>
							</a>	
						</li>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiBaocaokktscd.php">							
								<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ui-panels.html">
						<i class="entypo-newspaper"></i>
						<span class="title">Tổng hợp báo cáo công cụ</span>
					</a>
					<ul>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiSoKDCLB.php">							
								<span class='title'>Sổ kho dụng cụ lâu bền</span>
							</a>
						</li>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiSoCTDCLB.php">							
								<span class='title'>Sổ chi tiết dụng cụ lâu bền</span>
							</a>
						</li>
						<li>			
							<a  href="/QLTS/Thoaikx/ThoaiBaTHCTDCLB.php">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số lượng)</span>
							</a>
						</li>
						<li>					
							<a  href="/QLTS/Thoaikx/ThoaiBaTHCTDCLBt.php">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số tiền)</span>
							</a>			
						</li>
						<li>		
							<a  href="/QLTS/Thoaikx/ThoaiSoTDDCLB.php">							
								<span class='title'>Sổ theo dõi dụng cụ lâu bền (S32-H)</span>
							</a>
						</li>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiSoTDDCLBcb.php">							
								<span class='title'>Sổ theo dõi tài sản và công cụ</span>
							</a>
						</li>
						<li>	
							<a  href="/QLTS/Thoaikx/ThoaiDmDCLB.php">							
								<span class='title'>Danh mục dụng cụ lâu bên theo QĐ32</span>
							</a>		
						</li>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiSoBaohong.php">							
								<span class='title'>Giấy báo hỏng, mất công cụ dụng cụ</span>
							</a>
						</li>
						<li>		
							<a  href="/QLTS/Thoaikx/ThoaiBaocaoCCDC.php">							
								<span class='title'>Báo cáo tăng giảm công cụ dụng cụ</span>
							</a>	
						</li>
					</ul>
				</li>
				<li>
					<a href="forms-main.html">
						<i class="entypo-doc-text"></i>
						<span class="title">Tổng hợp báo cáo theo thông tư 09</span>
					</a>
					<ul>
						<li>			
							<a  href="/QLTS/Thoaikx/ThoaiTT09_01TSNN.php">							
								<span class='title'>Danh mục trụ sở làm việc, cơ sở HĐSN đề nghị xử lý (TT09)</span>
							</a>					
						</li>
						<li>				
							<a  href="/QLTS/Thoaikx/ThoaiTT09-02TSNN.php">							
								<span class='title'>Danh mục xe ô tô đề nghị xử lý (TT09)</span>
							</a>						
						</li>
						<li>					
							<a  href="/QLTS/Thoaikx/ThoaiTT09_03SNN.php">							
								<span class='title'>Danh mục tài sản khác đề nghị xử lý (TT09)</span>
							</a>						
						</li>
						<li>				
							<a  href="/QLTS/Thoaikx/ThoaiTT09_01DKTSNN.php">							
								<span class='title'>Báo cáo kê khai trụ sở làm việc, cơ sở HĐSN (TT09)</span>
							</a>
						</li>
						<li>			
							<a  href="/QLTS/Thoaikx/ThoaiTT09_02DKTSNN.php">							
								<span class='title'>Báo cáo kê khai ô tô (TT09)</span>
							</a>	
						</li>
						<li>
							<a  href="/QLTS/Thoaikx/ThoaiTT09_03DKTSNN.php">							
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
						<span class="title">Quản lý danh mục</span>
					</a>
					<ul>
						<li>							
							<a  href="/QLTS/DanhMuc/DMTS/DMTS.php">
								<span class='title'>Danh mục tài sản</span>
							</a>
						</li>
						<li>
							<a  href="/QLTS/DanhMuc/DMCC/DMCC.php">							
								<span class='title'>Danh mục công cụ</span>
							</a>							
						</li>
						<li>
							<a  href="/QLTS/DanhMuc/DMPB/DMPB.php">							
								<span class='title'>Danh mục phòng ban (bộ phận)</span>
							</a>								
						</li>
						<li class="active">
							<a  href="/QLTS/DanhMuc/DMCB/DMCB.php">							
								<span class='title'>Danh mục cán bộ</span>
							</a>												
						</li>
					</ul>
				</li>
				<li class="opened active">
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Tiện ích</span>
					</a>
					<ul>
						<li>
							<a  href="/QLTS/Tienich/Taohaomontc.php">							
								<span class='title'>Tạo hao mòn tất cả tài sản</span>
							</a>						
						</li>
						<li>						
							<a  href="/QLTS/Tienich/nhandlaccess.php">							
								<span class='title'>Nhận tài sản, công cụ từ file xml</span>
							</a>			
						</li>							
						<li>
							<a href="extra-calendar.html">
								<span class="title">Hướng dẫn sử dụng</span>
							</a>
						</li>
						<li>
							<a  href="/QLTS/Tracuu/TraCuuTS/tracuuts.php">							
								<span class='title'>Tìm kiếm thông tin tài sản</span>
							</a>											
						</li>
						<li>					
							<a  href="/QLTS/Tracuu/TraCuuCC/tracuucc.php">							
								<span class='title'>Tìm kiếm thông tin công cụ</span>
							</a>						
						</li>
						<li>
							<a  href="/QLTS/Tracuu/TraCuuTC/tracuutc.php">							
								<span class='title'>Tìm kiếm thông tin trang cấp</span>
							</a>	
						</li>
						<li>
							<a  href="/QLTS/Tracuu/TraCuuDN/tracuudn.php">							
								<span class='title'>Tìm kiếm thông tin đề nghị xử lý</span>
							</a>				
						</li>	
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="entypo-flow-tree"></i>
						<span class="title">Quản trị tài khoản</span>
					</a>
					<ul>
						<li>
							<a  href="/QLTS/DanhMuc/DMDV/DMDV.php">							
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
<!-------- Header ---------->
<style>
	@media print {
		   .in{
			  display: none !important;
		   }
		}
</style>
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
$sql = "Select tentaisan,tenchitiet,ngaynhap,ngaysudung,namsanxuat,NUOCSX,noidung,DVT,DTKV,dongia,thanhtien,GCTS from tblqlcc where TTQLcc = '$tttaisan'";
$kqts = mysqli_query($con,$sql);
$row=mysqli_fetch_array($kqts);
//$ntnhap = doingay($row[2]);$ntsdung=ngaynhap($row[3]);$ngngansach=dinhdangso($row[9]);$ngngkhac=dinhdangso($row[10]);	
?>
		<h3 style="text-align:center;">CHI TIẾT CÔNG CỤ</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label  class="col-sm-2 control-label">Tên công cụ:</label>
								<div class="col-md-4">
									<input name="mataisan" class="form-control" type="text" value = "<?php echo $row[0]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Tên chi tiết:</label>
								<div class="col-md-4">
									<input name="tenchitiet" class="form-control" type="text" value = "<?php echo $row[1]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Ngày nhập:</label>
								<div class="col-md-4">
									<input name="ngaynhap" class="form-control" type="text" value = "<?php $ntnhap = doingay($row[2]); echo $ntnhap; ?>">
								</div>
								<label  class="col-sm-2 control-label">Ngày sử dụng:</label>
								<div class="col-md-4">
									<input name="ngaysudung" class="form-control" type="text" value = "<?php $ntsdung=doingay($row[3]); echo $ntsdung; ?>">
								</div>
								<label  class="col-sm-2 control-label">Năm sản xuất:</label>
								<div class="col-md-4">
									<input name="namsanxuat" class="form-control" type="text" value = "<?php echo $row[4]; ?>">
								</div>	
								<label  class="col-sm-2 control-label">Nước sản xuất:</label>
								<div class="col-md-4">
									<input name="NUOCSX" class="form-control" type="text" value = "<?php echo $row[5]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Nơi sử dụng:</label>
								<div class="col-md-4">
									<input name="noidung" class="form-control" type="text" value = "<?php echo $row[6]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Đơn vị tính:</label>
								<div class="col-md-4">
									<input name="DVT" class="form-control" type="text" value = "<?php echo $row[7]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Số lượng:</label>
								<div class="col-md-4">
									<input name="DTKV" class="form-control" type="text" value = "<?php echo $row[8]; ?>">
								</div>
								<label  class="col-sm-2 control-label">Đơn giá:</label>
								<div class="col-md-4">
									<input name="dongia" class="form-control" type="text" value = "<?php $ngngansach=dinhdangso($row[9]); echo $ngngansach; ?>">
								</div>
								<label  class="col-sm-2 control-label">Thành tiền:</label>
								<div class="col-md-4">
									<input name="thanhtien" class="form-control" type="text" value = "<?php echo dinhdangso($row[10]); ?>">
								</div>	
								<label  class="col-sm-2 control-label">Ghi chú:</label>
								<div class="col-md-4">
									<input name="GCTS" class="form-control" type="text" value = "<?php echo $row[11]; ?>">
								</div>
							</div>
							<div>
								<label style="margin-left:-70px;" class="col-sm-4 control-label"><strong><b>Thông tin xuất dùng công cụ</b></strong></label>
								<table class="table table-bordered table-striped datatable" id="table-2">
								<thead>
									<tr>
										<th>Ngày tháng</th>
										<th>Nơi sử dụng</th>
										<th>Số lượng</th>
										<th>Đơn giá</th>
										<th>Thành tiền</th>
									</tr>
								</thead>
								<tbody>
<?php
$sqltg = "Select ngayxuat,noisudung,soluong,dongia,sotien from tblxuatdung Where TTQLcc = '$tttaisan'";
$kqtg = mysqli_query($con,$sqltg);$sotientg="";$dg="";
while($rowtg=@mysqli_fetch_array($kqtg))
{
	$dg=dinhdangso($rowtg[3]);
	$sotientg=dinhdangso($rowtg[4]);
	echo"<tr>";
	echo "<td>$rowtg[0]</td>";
	echo "<td>$rowtg[1]</td>";
	echo "<td>$rowtg[2]</td>";
	echo "<td>$dg</td>";
	echo "<td>$sotientg</td>";
	echo"</tr>";
}
?>	
								</tbody>							
								</table>
							</div>
							<div>
								<label style="margin-left:-70px;" class="col-sm-4 control-label"><strong><b>Thông tin báo hỏng công cụ:</b></strong></label>
								<table class="table table-bordered table-striped datatable" id="table-2">
								<thead>
									<tr>
										<th>Ngày tháng</th>
										<th>Nơi báo hỏng</th>
										<th>Lý do báo hỏng</th>
										<th>Số lượng</th>
										<th>Đơn giá</th>										
										<th>Thành tiền</th>
									</tr>
								</thead>
								<tbody>
<?php
$sqlhm = "Select ngaythang,noibaohong,Lydohong,soluong,dongia,sotien from tblbaohong Where TTQLcc = '$tttaisan'";
$kqhm = mysqli_query($con,$sqlhm);$sodu="";$lk="";
while($rowhm=@mysqli_fetch_array($kqhm))
{	
	$sodu=dinhdangso($rowtg[4]);
	$lk=dinhdangso($rowtg[5]);
	echo"<tr>";
	echo "<td>$rowhm[0]</td>";
	echo "<td>$rowhm[1]</td>";
	echo "<td>$rowhm[2]</td>";
	echo "<td>$rowhm[3]</td>";
	echo "<td>$sodu</td>";
	echo "<td>$lk</td>";	
	echo"</tr>";
}
?>									
								</tbody>							
								</table>
							</div>
											
							<div class="in">
									<a href="tracuucc.php?ib=<?php echo $key[1]; ?>" class='btn btn-black'>
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