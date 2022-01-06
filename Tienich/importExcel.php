<?php 
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); 

?>								
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
							
							<a  href="/Nhap/NhapTCTS/NhapDNTC.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>
						
						</li>
						<li >
							
							<a  href="/Nhap/NhapQLTS500/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định khác từ 500 triệu</span>
							</a>
												
						</li>
						<li >
							
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
						<li >
							
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
						<li class="active">
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
				<li >
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
<!------- HEADER ---------->  
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
$(document).ready(function(){
    $('#ckbkh').click(function(){
		$("#HM").slideToggle();
		$("#KH").slideToggle();
	});
});
</script>
<?php
if(strlen($ma[0]) < 16)
{
	echo "<h3 style='text-align: center'>Bạn đang đăng nhập bằng tài khoản tổng hợp.</br> Vì vậy bạn không thể sử dụng chức năng này.</br> Xin lỗi vì sự bất tiện này.</br> Xin chân thành cảm ơn!</h3>";
	echo "<br />";
}
else
{
	?>
	<h2>Nhận dữ liệu từ file excel</h2>
	<br />
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-body">
					<form role="form" action = "" method="POST" enctype="multipart/form-data" class="form-horizontal form-wizard validate">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Tên file:</label>
							<div class="col-sm-9">
								<input type="file" name="file" class="form-control"/>
							</div>
						</div>
						<div class="col-sm-12">
							<input type="checkbox"  name="ccdc" tabindex="-1" id="ccdc" /> Nhận công cụ dụng cụ
						</div>
						<div class="col-sm-12">
							<fieldset>
								<legend>Định dạng ô dữ liệu file excel</legend>
								<label class="col-sm-15 control-label">Tên Sheet<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-105">
									<input name="tensheet" type="text" data-validate = "required" class="form-control" id="field-3" value=""/>
								</div>
								<label class="col-sm-15 control-label">Mã tài sản<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-15">
									<input name="mataisan" type="text" data-validate = "required" class="form-control" id="field-3" value="A"/>
								</div>
								<label for="field-3" class="col-sm-15 control-label">Tên chi tiết<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-15">
									<input name="tenchitiet" type="text" data-validate = "required" class="form-control" id="field-3" value="B"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-15">
									<input  name="ngaynhap"  type="text" data-validate = "required" class="form-control" id="ngaynhap" value="L"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-15">
									<input name="ngaysudung" type="text" data-validate = "required" class="form-control" id="ngaysudung" value="D"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Diện tích KV (SL)<span style="padding-left:0px; color:red;">*</span>:</label>
								<div class="col-sm-15" >
									<input name="DTKV"  type="text" class="form-control" id="DTKV" value="N"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Diện tích XD:</label>
								<div class="col-sm-15">
									<input name="DTXD" type="text"  class="form-control"  id="DTXD" value="P"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Tổng diện tích:</label>
								<div class="col-sm-15">
									<input name="TDTSXD" type="text"  class="form-control"  id="TDTSXD" value="Q"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Nguồn ngân sách:</label>
								<div class="col-sm-15">
									<input name="ngansach" type="text" class="form-control"  id="ngansach" value="F"/>
								</div>
								<label for="field-3" class="col-sm-15 control-label">Nguồn khác:</label>
								<div class="col-sm-15">
									<input name="nguonkhac" type="text" class="form-control"  id="nguonkhac" value="M"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Tổng số HM:</label>
								<div class="col-sm-15">
									<input name="sohaomon" type="text"  class="form-control"  id="sohaomon" value="I"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Hao mòn năm:</label>
								<div class="col-sm-15">
									<input name="haomonnam" type="text"  class="form-control"  id="haomonnam" value="H"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Số dư hao mòn:</label>
								<div class="col-sm-15">
									<input name="soduhaomon" type="text"  class="form-control"  id="soduhaomon" value="G"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Nơi sử dụng:</label>
								<div class="col-sm-15">
									<input name="noidung" type="text"  class="form-control" id="noidung" value="K"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Đơn vị tính:</label>
								<div class="col-sm-15">
									<input name="DVT" type="text"  class="form-control" id="DVT" value="R"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Thông tin khác:</label>
								<div class="col-sm-15">
									<input name="ttkhac" type="text"  class="form-control" id="ttkhac" value="S"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Nước sản suất:</label>
								<div class="col-sm-15">
									<input name="NUOCSX" type="text"  class="form-control" id="NUOCSX" value="C"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Người sử dụng:</label>
								<div class="col-sm-15">
									<input name="nguoisudung" type="text"  class="form-control" id="nguoisudung" value="T"/>
								</div>
								<label for="field-4" class="col-sm-15 control-label">Năm hao mòn:</label>
								<div class="col-sm-15">
									<input name="namhaomon" type="text"  class="form-control" id="namhaomon" value="O"/>
								</div>
							</fieldset>
						</div>

						<div class="col-sm-12">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" name = "sua" class="btn btn-success">Nhận dữ liệu</button>
								<input type="button" class="btn btn-black" value="Không nhận" onclick="window.location.href='/main.php'" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php }
function getCell( PHPExcel_Worksheet $sheet, /* string */ $x = 'A', /* int */ $y = 1 ) {
	return $sheet->getCell( $x . $y );
}
function getdateexcel($datevalue)
{
	$day = kieudouble($datevalue) - 2;
	$date=date_create("1900-01-01");
	date_add($date,date_interval_create_from_date_string($day." days"));
	return date_format($date,"Y-m-d");
}

if(isset($_POST['sua'])) {
	//  Include thư viện PHPExcel_IOFactory vào
	include 'Classes/PHPExcel/IOFactory.php';
	$ab = $ma[0];
	function IDTS()
	{
		global $con;
		$kq="";
		global $ab;
		$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$ab'";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	function IDCC()
	{
		$kq="";
		global $ab;
		global $con;
		$sql = "Select max(TTQLcc) From tblqlcc where madonvi = '$ab'";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	$tmp_name = $_FILES['file']['tmp_name'];
	if($tmp_name != "")
	{
		$path_parts = pathinfo($_FILES['file']['name']);
		$fileup = $path_parts['filename'].$ma[0].".".$path_parts['extension'];
		move_uploaded_file($_FILES['file']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/Tienich/".$fileup);
	}

	//$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
	//$rows = $dom->getElementsByTagName( 'Row' );
	//print_r($rows);
	//$inputFileName = $fileup;

	$objPHPExcel = PHPExcel_IOFactory::load($fileup);
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

		$worksheetTitle = $worksheet->getTitle();
		$highestRow = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
		//$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		$nrColumns = ord($highestColumn) - 64;
		if($worksheetTitle == $_POST['tensheet']) {
			for ($rows = 1; $rows <= $highestRow; $rows++) {
				$mataisan = getCell($worksheet,$_POST['mataisan'],$rows);
				$tenchitiet = getCell($worksheet,$_POST['tenchitiet'],$rows);
				$ngaynhap = getCell($worksheet,$_POST['ngaynhap'],$rows);
				if($ngaynhap == "")
					$ngaynhap = getdate();
				$ngaynhap = getdateexcel($ngaynhap);
				$namhm = $ngaynhap.substr(0,4);
				$ngaysudung = getCell($worksheet,$_POST['ngaysudung'],$rows);
				//echo "ngày sử dụng -" . $ngaysudung;
				//$ngaysudung = getdateexcel($ngaysudung);
				$ngaysudung = doingay($ngaysudung);
				$DTKV = getCell($worksheet,$_POST['DTKV'],$rows);
				$DTXD = getCell($worksheet,$_POST['DTXD'],$rows);
				$TDTSXD = getCell($worksheet,$_POST['TDTSXD'],$rows);
				$ngansach = getCell($worksheet,$_POST['ngansach'],$rows);
				$ngansach = kieudouble($ngansach);
				$nguonkhac = getCell($worksheet,$_POST['nguonkhac'],$rows);
				$ngansach = kieudouble($ngansach);
				//$sohmnam = getCell($worksheet,$_POST['sohmnam'],$rows);
				$sohaomon = getCell($worksheet,$_POST['sohaomon'],$rows);
				$sohaomon = kieudouble($sohaomon);
				if(!is_double($sohaomon))
					$sohaomon = 0;
				$haomonnam = getCell($worksheet,$_POST['haomonnam'],$rows);
				$haomonnam = kieudouble($haomonnam);
				if(!is_double($haomonnam))
					$haomonnam = 0;
				$soduhaomon = getCell($worksheet,$_POST['soduhaomon'],$rows);
				$soduhaomon = kieudouble($soduhaomon);
				if(!is_double($soduhaomon))
					$soduhaomon = 0;
				//$conlai = getCell($worksheet,$_POST['conlai'],$rows);
				$noidung = getCell($worksheet,$_POST['noidung'],$rows);
				$DVT = getCell($worksheet,$_POST['DVT'],$rows);
				$ttkhac = getCell($worksheet,$_POST['ttkhac'],$rows);
				$nguyengia = kieudouble($ngansach) + kieudouble($nguonkhac) ;
				$conlai = $nguyengia - kieudouble($sohaomon);
				$nuocsx = getCell($worksheet,$_POST['NUOCSX'],$rows);
				$nguoidung = getCell($worksheet,$_POST['nguoisudung'],$rows);
				$namhaomon = getCell($worksheet,$_POST['namhaomon'],$rows);
				$dongia = 0;
				if(kieudouble($DTKV) != 0)
					$dongia = $nguyengia/kieudouble($DTKV);
				$tentaisan="";
				$chitiethinhthai="";
				$ttsx = "";
				$pthm="";
				$sonamsd="";
				$phantram32="";
				//$namhm = $ngaynhap.substr(0,4);
				$namhm = $namhaomon;
				echo $nguyengia.'-'. $sohaomon.'-'.$conlai;
				if(strpos($mataisan,"TSCD.") !== false ) {
					$sql = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32".
						" Where mataisanqd32 = '" . $mataisan . "'";
					$qrsql = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($qrsql)) {
						$tentaisan = $row[0];
						$chitiethinhthai = $row[1];
						$ttsx = $row[2];
						$pthm = $row[3];
						$sonamsd = $row[4];
						$phantram32 = $row[5];
					}
					$sohmnam = 0;
					if($conlai >= 0)
						//$sohmnam = $nguyengia * $pthm /100;
						$sohmnam = $haomonnam;
					//$soduhm = kieudouble($sohaomon) - kieudouble($sohmnam);
					$soduhm = $soduhaomon;
					$sql = "INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,ngansach,nguonkhac" .
						",DTKV,chitiethinhthai,XOA,phantram,sonamsd,sothutu,madonvi,phantram32,sohaomon,conlai" .
						",xemt,xemh,theodoi,noidung,DVT,ttkhac,NUOCSX,nguoisudung,excel)"
						. " Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$ngaysudung','$ngansach','$nguonkhac'" .
						",'$DTKV','$chitiethinhthai','K','$pthm',$sonamsd,$ttsx,'$ab','$phantram32',$sohaomon,$conlai" .
						",'Chưa xem','Chưa xem','Theo dõi','$noidung','$DVT','$ttkhac','$nuocsx','$nguoidung','1')";
					echo $sql;
					$kq = mysqli_query($con, $sql);
					if(!$kq)
						echo  "Lỗi Insert ". $sql;
					$IDTS = IDTS();
					$sql = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi,TTTS,excel)" .
						" values('$ngaynhap',$IDTS,$namhm,$pthm,$soduhm,$sohmnam,'$ab',$IDTS,'1')";
					echo $sql;
					$kq = mysqli_query($con, $sql);
					if(!$kq)
						echo  "Lỗi Insert ". $sql;
					$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,madonvi,TTTS,excel)".
						" values('$ngaynhap',$IDTS,'QLNN','','$DTKV','$ab',$IDTS,'1')";
					$kq = mysqli_query($con, $sql);
					if(!$kq)
						echo  "Lỗi Insert ". $sql;
				}
				if(isset($_POST['ccdc'])) {
					if (strpos($mataisan, "CCDC.") !== false) {
						$sql = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '" . $mataisan . "'";
						$qrsql = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_array($qrsql)) {
							$tentaisan = $row[0];
							$chitiethinhthai = $row[1];
							$ttsx = $row[2];
						}

						$sql = "Insert into tblqlcc (mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,dongia,thanhtien" .
							",DTKV,NUOCSX,chitiethinhthai,XOA,DVT,madonvi,sothutu,xemt,xemh,theodoi)" .
							" values ('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$ngaysudung','$noidung','$dongia','$nguyengia','$DTKV'," .
							"'$nuocsx','$chitiethinhthai','K','$DVT','$ab','$ttsx','Chưa xem','Chưa xem','Theo dõi')";
						$qrsql = mysqli_query($con, $sql);
						if (!$qrsql)
							echo " Lỗi Insert " . $sql;
						$TTQLcc = IDCC();
						$sql = "Insert into tblxuatdung(TTQLcc,ngayxuat,lydoxuat,soluong,sotien,noisudung,mataisan,tentaisan" .
							",tenchitiet,dvt,nuocsx,chitiethinhthai,dongia,madonvi)"
							. " values('$TTQLcc','$ngaysudung','Xuất dùng',$DTKV,$nguyengia,'$noidung','$mataisan','$tentaisan'" .
							",'$tenchitiet','$DVT','$nuocsx','$chitiethinhthai',$dongia,'$ab')";
						$qrsql = mysqli_query($con, $sql);
						if (!$qrsql)
							echo " Lỗi Insert " . $sql;
					}
				}
			}
		}
	}
	if(file_exists($fileup)){
		unlink($fileup);
	}
}
?>
	</div>
	</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>