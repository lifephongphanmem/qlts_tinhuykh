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
						<li  class="active">
							
							<a  href="/Nhap/NhapQLTS/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định khác dưới 500 triệu</span>
							</a>
												
						</li>
						<li >
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
						<li >
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
<!--------- Header ------------>
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script src="/my_script.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">

	
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>

<script>
 function ktngaythang()
 {	
	giatri = $("#ngaythang").val();	
	if(giatri == "")
	{
		alert("Bạn hãy chọn ngày tháng!")	
		document.getElementById("ngaythang").focus();		
	} 
	tinhtoan();
 }	
function ktphanloai()
 {	
	giatri = $("#tanggiam").val();
	if(giatri == "")
	{
		alert("Bạn hãy chọn phân loại nhập!")	
		document.getElementById("tanggiam").focus();		
	} 
	tinhtoan();
 }
 function tinhtoan()
 {
	var tanggiam = $("#tanggiam").val();	 
	var soluong = $("#soluong").val();	
	if(soluong != "")
		soluong = soluong.replace(/,/g,"");
	else
		soluong = 0;
	var tongdientich = $("#tongdientich").val();	
	if(tongdientich != "")
		tongdientich = tongdientich.replace(/,/g,"");
	else
		tongdientich = 0;
	var DTXD = $("#dientichtruoc").val();
	if(DTXD != "")
		DTXD = DTXD.replace(/,/g,"");
	else
		DTXD = 0;	
	var TDTSXD = $("#tongdientichtruoc").val();
	if(TDTSXD != "")
		TDTSXD = TDTSXD.replace(/,/g,"");
	else
		TDTSXD = 0;	
	if(tanggiam == "Tăng")
	{
		var soluongmoi = parseFloat(soluong) + parseFloat(DTXD);
		var TDTXDmoi = parseFloat(tongdientich) + parseFloat(TDTSXD);
	}			
	if(tanggiam == "Giảm")	
	{
		var soluongmoi = parseFloat(DTXD) - parseFloat(soluong);
		var TDTXDmoi = parseFloat(tongdientich) - parseFloat(TDTSXD);
	}		
	$("#soluongmoi").val(soluongmoi);
	$("#TDTXDmoi").val(TDTXDmoi);	
	var ngansach = $("#ngansach").val();
	if(ngansach != "")
		ngansach = ngansach.replace(/,/g,"");
	else
		ngansach = 0;
	var nguonkhac = $("#nguonkhac").val();
	if(nguonkhac != "")
		nguonkhac = nguonkhac.replace(/,/g,"");
	else
		nguonkhac = 0;
	var giatriconlaitruoc = $("#giatriconlaitruoc").val();
	if(giatriconlaitruoc != "")
		giatriconlaitruoc = giatriconlaitruoc.replace(/,/g,"");
	else
		giatriconlaitruoc = 0;
	var nguyengiatruoc = $("#nguyengiatruoc").val();
	if(nguyengiatruoc != "")
		nguyengiatruoc = nguyengiatruoc.replace(/,/g,"");
	else
		nguyengiatruoc = 0;	
	var nguyengiamoi = parseFloat(ngansach) + parseFloat(nguonkhac);
	if(tanggiam == "Tăng")		
	{
		var sotienmoi = nguyengiamoi + parseFloat(nguyengiatruoc);
		var giatriconlaimoi = nguyengiamoi + parseFloat(giatriconlaitruoc);
	}				
	if(tanggiam == "Giảm")	
	{
		var sotienmoi = parseFloat(nguyengiatruoc) - nguyengiamoi;
		var giatriconlaimoi = parseFloat(giatriconlaitruoc) - nguyengiamoi;
	}
	$("#sotienmoi").val(sotienmoi);	
	$("#sotien").val(nguyengiamoi);
	$("#giatriconlaimoi").val(giatriconlaimoi);
 }
 function nguyengiasoluong()
 {
	var tanggiam = $("#tanggiam").val();
	if(tanggiam == "")
	{
		alert("Bạn hãy chọn phân loại nhập!")
		document.getElementById("tanggiam").focus();
	}
	else
	{
		tinhtoan();
	}
	
 }
 function hientrang()
 {
	 if($("#tslv").val() == "")
		 $("#tslv").val(0);
	 if($("#hdsn").val() == "")
		 $("#hdsn").val(0);
	 if($("#nhao").val() == "")
		 $("#nhao").val(0);
	 if($("#chot").val() == "")
		 $("#chot").val(0);
	 if($("#bot").val() == "")
		 $("#bot").val(0);
	 if($("#bic").val() == "")
		 $("#bic").val(0);
	 if($("#khac").val() == "")
		 $("#khac").val(0);
 }
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
	$(document).ready(function()
{
	$('#ngaythang').change(function(){		
		giatri = $("#idts").val()+">"+this.value+">"+"";		
		$('#ttts').load('ajax_nguyengiamoi.php?id_a='+giatri);			
	});	
}
);
 </script>  
 <script language="javascript" type="text/javascript">
document.forms['nhapmoi'].name.focus();
function kt()
{
   var frm = window.document.nhapmoi;    
   if(frm.ngansach.value =="" && frm.nguonkhac.value =="")
   {
      alert('Xin vui lòng nhập nguyên giá tài sản!');            
      document.forms['nhapmoi'].ngansach.focus();
      return false;
   }	
   else                        
      return true;    
}
</script> 
 <script>
	$(document).ready(function() {
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    var today = day + "-" + month + "-" + year;       
    $("#ngaythang").attr("value", today);
	giatri = $("#idts").val()+">"+today+">"+"";		
	$('#ttts').load('ajax_nguyengiamoi.php?id_a='+giatri);	
});
 </script>
		<div class="col-sm-12">
		<a class="tieude" href='/main.php' >
			Trang chủ
		</a>
		>><a class="tieude" href='NhapQLTS.php'>
			Tài sản cố định vật kiến trúc khác
		</a>
		>><a class="tieude" href='NhapTang.php'>
			Tăng giảm sửa chữa
		</a>
		>><a class="tieude">
			Nhập mới tăng giảm sửa chữa
		</a>		
		</div>		
<?php
$id = $_GET['id'];
function doingay1($ngay)
{	
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
function hientrang ($hientrang)
{
	global $id;
	global $con;
	$kq="";
	$sql="select soluong,phanloai from tblhientrang where TTTS = ".$id;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row[1] == $hientrang)
			$kq= $row[0];
	}
	return $kq;
}
if(isset($_POST["luupb"]))
	{
		$tenphongban=$_POST["tenphongban"];
		$chucnanggq=$_POST["chucnanggq"];
		$soluongcb=$_POST["soluongcb"];
		$madonvi = $_POST["matpb"];
		$sql="INSERT INTO tblphongban(tenphongban,chucnanggq,soluongcb,madonvi)
		VALUES ('$tenphongban','$chucnanggq','$soluongcb','$madonvi')";		
		$kq=mysqli_query($con,$sql);
	}
	$ab = $ma[0];	
	function IDTG()
	{
		$kq="";
		global $id;
		global $con;
		$sql = "Select max(TTTGTS) From tbltanggiam where TTQLTS = $id";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}	
	if (isset($_POST['capnhatts']))
	{			
		$ngaytanggiam=doingay($_POST["ngaythang"]);
		$lydotanggiam=$_POST["lydotanggiam"];
		$soluong=kieudouble($_POST["soluong"]);
		$sotien=kieudouble($_POST["sotien"]);
		$nguonkhac=kieudouble($_POST["nguonkhac"]);
		$nguyengiatruoc=kieudouble($_POST["nguyengiatruoc"]);			
		$ngansach=kieudouble($_POST["ngansach"]);
		$tanggiam = $_POST['tanggiam'];
		$phanloai = $_POST['hientrang'];
		$dientichtruoc=kieudouble($_POST["dientichtruoc"]);	
		$namsudungconlai=kieudouble($_POST["namsudungconlai"]);
		$tongdientich=kieudouble($_POST["tongdientich"]);
		$tongdientichtruoc=kieudouble($_POST["tongdientichtruoc"]);	
		$giatriconlaitruoc=kieudouble($_POST["giatriconlaitruoc"]);	
		$sql = "Insert into tbltanggiam(ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi,".
		"nguonkhac,nguyengiatruoc,ngansach,dientichtruoc,namsudungconlai,tongdientich,tongdientichtruoc,giatriconlaitruoc)".
		" values('$ngaytanggiam',$id,'$lydotanggiam',$soluong,$sotien,'$tanggiam','$ab',".
		"$nguonkhac,$nguyengiatruoc,$ngansach,$dientichtruoc,$namsudungconlai,$tongdientich,$tongdientichtruoc,$giatriconlaitruoc)";
		$kq=mysqli_query($con,$sql);	
		$IDTG=IDTG();				
			$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,TTTM) values('$ngaytanggiam',$id,'$phanloai','Chiếc','1',$IDTG)";
			$kq=mysqli_query($con,$sql);
			header("Location: Nhaptang.php");
	}	
	function tanggiamng ()
	{
		global $id;
		global $con;
		$kq=0;
		$sql = "Select sotien,tanggiam from tbltanggiam where TTQLTS = $id";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row["tanggiam"] == "Tăng")
				$kq += kieudouble($row["sotien"]);
			if($row["tanggiam"] == "Giảm")
				$kq -= kieudouble($row["sotien"]);
		}
		return $kq;
	}
	function tanggiamsl ()
	{
		global $id;
		global $con;
		$kq=0;
		$sql = "Select soluong,tanggiam from tbltanggiam where ngaytanggiam < TTQLTS = $id";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			if($row["tanggiam"] == "Tăng")
				$kq += kieudouble($row["soluong"]);
			if($row["tanggiam"] == "Giảm")
				$kq -= kieudouble($row["soluong"]);
		}
		return $kq;
	}
	$sql = "select tblqlts.tenchitiet,tblqlts.ngaynhap,tblqlts.ngaysudung,tblqlts.noidung,tblqlts.TKVDAT,tblqlts.DTKV,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.quyetdinhbangiao,tblqlts.ngayquyetdinhbangiao,tblqlts.giaycnqsd,tblqlts.ngaygiaycnqsd,DTXD,TDTSXD FROM tblqlts WHERE tblqlts.TTQLTS = '$id'";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{		
?>
<div class="col-sm-12">
<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
<div class="col-sm-12">	
	<fieldset>
		<legend>Thông tin chung</legend> 	
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-25">
				<input name="ngaythang" onblur="ktngaythang()" id="ngaythang" data-mask = "date" data-validate = "required"  type="text"  class="form-control" />
			</div>	
			<label for="field-4" class="col-sm-15 control-label">Phân loại<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-25">
				<select name="tanggiam" onblur="ktphanloai()" id="tanggiam"  type="text"  class="form-control">
				<option selected="selected" value = ''>Chọn phân loại nhập</option>
				<option value="Tăng">Nhập tăng</option>
				<option value="Giảm">Nhập giảm</option>
				</select>
			</div>	
			<label for="field-4" class="col-sm-15 control-label">Lý do<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-25">
				<input name="lydotanggiam" id="lydotanggiam" data-validate = "required"  type="text"  class="form-control" />
			</div>
</fieldset>			
	<fieldset>
		<legend>Thông tin tài sản</legend> 	
			<input type="text" name ="idts" style = "display:none;" value="<?php echo $id; ?>" class="form-control" id="idts"/>  
			<label for="field-3" class="col-sm-15 control-label">Tên chi tiết<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input type="text" readonly  tabindex="-1" value="<?php echo $row["tenchitiet"]; ?>" class="form-control" id="field-3"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" readonly tabindex="-1" value="<?php echo doingay1($row["ngaynhap"]); ?>" type="text"  class="form-control" />
			</div>			
			<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" readonly tabindex="-1" value="<?php echo doingay1($row["ngaysudung"]); ?>" type="text"  class="form-control" />
			</div>												
			<label for="field-4" class="col-sm-15 control-label">Nơi sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input type="text" readonly tabindex="-1"  value="<?php echo $row["noidung"]; ?>" class="form-control" id="field-3"/>
			</div>			
				<input type="text" readonly tabindex="-1" style="display:none"  value="<?php echo $row["TKVDAT"]; ?>" class="form-control" id="field-3">
		</fieldset>	
		<fieldset id="ttts">
			<legend>Thông tin diện tích nguyên giá (trước khi tăng giảm)</legend> 			
				<input type="text" id="dientichtruoc" name ="dientichtruoc" readonly tabindex="-1" value="<?php echo $row["DTXD"]; ?>" class="form-control"  />						
			<label for="field-4" class="col-sm-15 control-label">Nguyên giá:</label>
			<div class="col-sm-4">
				<input  type="text" id="nguyengiatruoc" name ="nguyengiatruoc" readonly tabindex="-1" value="<?php echo (kieudouble($row["ngansach"])+kieudouble($row["nguonkhac"]) + kieudouble(tanggiamng())); ?>" class="form-control" data-mask="fdecimal" />									
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>			
				<input type="text" id="tongdientichtruoc" style="display:none" name ="tongdientichtruoc" readonly tabindex="-1" value="<?php echo $row["TDTSXD"]; ?>" class="form-control"  />					
			<label for="field-4" class="col-sm-15 control-label">Giá trị còn lại:</label>
			<div class="col-sm-4">
				<input  type="text" id="giatriconlaitruoc" name ="giatriconlaitruoc" readonly tabindex="-1" class="form-control" data-mask="fdecimal" />
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-15 control-label">Năm SD còn lại:</label>
			<div class="col-sm-4">
				<input  type="text" id="namsudungconlai" name ="namsudungconlai" readonly tabindex="-1" class="form-control" data-mask="fdecimal" />
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(năm)</label>
		</fieldset>				
			<fieldset class="col-sm-6">
				<legend>Thông tin tăng/giảm tài sản</legend>
					<input name="soluong" type="text" style="display:none" onblur="nguyengiasoluong()" class="form-control" data-mask="fdecimal" id="soluong" />		
					<input name="tongdientich" style="display:none" type="text" onblur="nguyengiasoluong()" class="form-control" data-mask="fdecimal" id="tongdientich" />				
				<label for="field-4" class="col-sm-3 control-label">Tổng giá trị:</label>
				<div class="col-sm-8">
					<input name="sotien" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="sotien"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>				
				<label for="field-4" class="col-sm-3 control-label">Nguồn ngân sách:</label>
				<div class="col-sm-8">
					<input name="ngansach" type="text" onblur="nguyengiasoluong()" class="form-control" data-mask="fdecimal" id="ngansach"/>									
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>				
				<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
				<div class="col-sm-8">
					<input name="nguonkhac" type="text" onblur="nguyengiasoluong()"  class="form-control" data-mask="fdecimal" id="nguonkhac"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>					
			</fieldset>			
			<fieldset >
				<legend>Thông tin tài sản mới</legend>				
					<input name="soluongmoi" readonly style="display:none" tabindex="-1" type="text"  class="form-control" data-mask="fdecimal" id="soluongmoi" />	
					<input name="TDTXDmoi" readonly style="display:none" tabindex="-1" type="text"  class="form-control" data-mask="fdecimal" id="TDTXDmoi" />					
				<label for="field-4" class="col-sm-3 control-label">Nguyên giá mới:</label>
				<div class="col-sm-8">
					<input name="sotienmoi" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="sotienmoi"/>
				</div>	
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>	
				<label for="field-4" class="col-sm-3 control-label">Giá trị còn lại mới:</label>
				<div class="col-sm-8">
					<input name="" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="giatriconlaimoi"/>
				</div>	
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>					
				<div style="height:94px">					
				</div>
			</fieldset>
		<fieldset>
 		<legend>Hiện trạng sử dụng</legend>							
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Kinh doanh" /> Kinh doanh	
			</div>	
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Không kinh doanh" /> Không kinh doanh	       								
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Quản lý nhà nước" /> Quản lý nhà nước	
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Hoạt động khác" /> Hoạt động khác
			</div>			
		</fieldset>										
</div>					
			<input name="namhm" type="text" style="display:none" class="form-control" id ="namhm"/>
			<input name="soduhm" type="text" style="display:none" class="form-control" id ="soduhm"/>
			<input name="sohmnam" type="text" style="display:none" class="form-control" id ="sohmnam"/>
			<input name="phantramhm" type="text" style="display:none" class="form-control" id ="phantramhm"/>
		<div class="modal-footer">			
			<input type="submit" name="capnhatts" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật"/>
		</div>	
	</form>	
	</div>	
	<?php 
}
?>
	<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" >&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Nhập thông tin phòng ban</strong></h4>
				</div>				
				<div class="modal-body">				
						<form  id="thoaidmpb" method="POST" class='form-horizontal form-groups-bordered'>					
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên phòng ban:</label>
								<div class="col-sm-8">
									<input name="tenphongban" type="text" class="form-control" id="tenphongban"/>
								</div>								
								<label class="col-sm-3 control-label">Chức năng:</label>
								<div class="col-sm-8">
									<input name="chucnanggq" type="text" class="form-control" id="chucnanggq"/>
								</div>
								<label class="col-sm-3 control-label">Số lượng cán bộ:</label>
								<div class="col-sm-8">
									<input name="soluongcb" type="text" class="form-control" id="soluongcb"/>									
								</div>									
								<input name="matpb" type="text"  style="display:none" class="form-control" id="matpb" value="<?php echo $ma[0];?>" />
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<button name="luupb" onclick="function1()" id="luupb" class="btn btn-blue">Cập nhật</button>
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