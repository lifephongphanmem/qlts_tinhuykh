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
						<li class="active">
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
	$(document).ready(function(){
    $('#button').click(function(){
        $('#ttct').slideToggle();            
    });
});
</script>
<script>
	$(document).ready(function(){
    $('#khauhao').click(function(){
		$('#HM').slideToggle('fast'); 
		$('#KH').slideToggle('fast');
        $('#ngaykhauhao').slideToggle('fast'); 
		$('#lbngaykhauhao').slideToggle('fast');
		$('#lbdvnamsudungconlai').slideToggle('fast'); 
		$('#lbnamsudungconlai').slideToggle('fast'); 	
		$('#namkhconlai').slideToggle('fast');
		$('#lbphuongphapkhauhao').slideToggle('fast'); 
		$('#phuongphapkhauhao').slideToggle('fast');
		$('#lbdvthangkhauhaoconlai').slideToggle('fast'); 
		$('#lbthangkhauhaoconlai').slideToggle('fast'); 
		$('#thangkhauhaoconlai').slideToggle('fast');
		$('#lbdvtylekhauhao').slideToggle('fast'); 
		$('#lbtylekhauhao').slideToggle('fast'); 
		$('#tylekhauhao').slideToggle('fast');
		$('#lbdvtylesxkd').slideToggle('fast'); 
		$('#lbtylesxkd').slideToggle('fast'); 
		$('#tylesxkd').slideToggle('fast');
		$('#lbdvsokhauhao').slideToggle('fast'); 
		$('#lbsokhauhao').slideToggle('fast'); 
		$('#sokhauhao').slideToggle('fast');
		$('#lbdvgiatrikhcl').slideToggle('fast'); 
		$('#lbgiatrikhcl').slideToggle('fast'); 
		$('#giatrikhcl').slideToggle('fast');
    });
});
</script>
	<script>
		$(document).ready(function()
			{
				$('#noidung').change(function(){
					giatri = this.value;
					giatri = giatri.replace(/ /g,"_");
					$('#canbo').load('ajax_canbo.php?id_a='+giatri);
				});
			}
		);
	</script>
<script>
$(document).ready(function()
{
	$('#mataisanth').change(function(){		
		giatri = this.value;
		var mataisan = giatri.split('>');
		$("#mataisan").val(mataisan[0]);
		$("#phantramhaomon").val(mataisan[1]);
		$("#phantram32").val(mataisan[2]);
		$("#namsudung").val(mataisan[3]);
		thaydoi();
		var ngaythang = new Date;
		var month=ngaythang.getMonth();
		var months= new Array("1","2","3","4","5","6","7","8","9","10","11","12");
		$("#ngaynhap").val(ngaythang.getDate()+"/" + months[month] +"/"+ ngaythang.getFullYear());
	});	
			
});
$(document).ready(function()
{
	$('#ngansach').change(function(){		
		thaydoi();
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#nguonkhac').change(function(){		
		thaydoi();
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#ngaysudung').change(function(){		
		thaydoi();
	});
});
$(document).ready(function()
{
	$('#ngaynhap').change(function(){		
		thaydoi();
	});
});


function thaydoi ()
{
		//tổng số năm sử dụng tài sản theo QĐ32 và theo TT45
		var namsudung162 = $('#namsudung').val();
		var namsudung32 = Math.round(100/parseFloat($('#phantram32').val()));
		//tính nguyên giá tài sản
		var ngansach = $('#ngansach').val();
		if(ngansach != "")
			ngansach = ngansach.replace(/,/g,"");
		else
			ngansach = 0;
		var nguonkhac = $('#nguonkhac').val();
		if(nguonkhac != "")
			nguonkhac = nguonkhac.replace(/,/g,"");
		else
			nguonkhac = 0;	
		var nguyengia = parseFloat(ngansach) + parseFloat(nguonkhac);
		//năm đưa vào sử dụng
		var namsd = $('#ngaysudung').val();
			namsd = namsd.substring(6,10);	
		//năm nhập tài sản vào phần mềm
		var namnhap = new Date;
			namnhap = namnhap.getFullYear();	
			//Năm hao mòn tài sản
		var namhm = parseFloat(namnhap)-1;
		//số năm đã sử dụng tài sản
		var namqd32 = 0 ;
		var namqd162 = 0 ;
		if(namnhap > namsd)
		{
			if(namsd < 2015 && namsd >= 2013)
				{
					namqd32 = 2015- parseFloat(namsd);	 
					namqd162 = parseFloat(namnhap) - 2015;
				}
			 else if(namsd < 2013)
				{
					namqd32 = 2014- parseFloat(namsd);	 
					namqd162 = parseFloat(namnhap) - 2015;
				}
			else
				namqd162 = parseFloat(namnhap)-parseFloat(namsd);
		}
		//Phần trăm để tính hao mòn năm tài sản, hao mòn năm tài sản
		var phantramhm = 0;
		var sohmnam = 0;	
		if(namhm < 2015 && namhm >= namsd)
		{			
			phantramhm = parseFloat($('#phantram32').val());
			if(namqd32 <= namsudung32)
				sohmnam = nguyengia*phantramhm/100;
		}
		if(namhm >= 2015 && namhm >= namsd)
		{
			phantramhm = parseFloat($('#phantramhaomon').val());			
			if(namqd162 <= namsudung162)
				sohmnam = nguyengia*phantramhm/100;
		}		
		//Tính hao mòn và số nguyên giá còn lại
		var sohaomon =0;
		var conlai=0;
		if(parseFloat(namsd) <2015)
		{			
			sohaomon += nguyengia*(parseFloat($('#phantram32').val())/100)*namqd32;
			sohaomon += nguyengia*(parseFloat($('#phantramhaomon').val())/100)*namqd162;
			
		}
		else
		{
			sohaomon += nguyengia*(parseFloat($('#phantramhaomon').val())/100)*parseFloat(namqd162);
			
		}
		if(sohaomon > nguyengia && (sohaomon-sohmnam) >= nguyengia)
		{
			sohmnam =0;			
		}
		if(sohaomon > nguyengia && (sohaomon-sohmnam) < nguyengia)
		{
			sohmnam = nguyengia - sohaomon +sohmnam;		
		}	
		if(sohaomon>=nguyengia)
				sohaomon=nguyengia;
		conlai = nguyengia - sohaomon;		
		
		
		//số dư hao mòn
		var soduhm=0;
		if(sohaomon>sohmnam)
			soduhm = sohaomon - sohmnam;
		$("#sohaomon").val(sohaomon);
		$("#conlai").val(conlai);	
		$("#namhm").val(namhm);
		$("#phantramhm").val(phantramhm);	
		$("#soduhm").val(soduhm);
		$("#sohmnam").val(sohmnam);	
		$("#nguyengia").val(nguyengia);
		$("#namsudungcl").val(parseFloat(namsudung162) - namqd32 - namqd162 );
		$("#namsanxuat").val(namsd);
}

$(document).ready(function()
{
	$('#ngaykhauhao').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#namkhconlai').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#phuongphapkhauhao').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#tylesxkd').change(function(){		
		tinhkhauhao();
	});
});
function tinhkhauhao()
{
	var namhientai = new Date;
		namhientai = namhientai.getFullYear();	
	var namkhauhao = $('#ngaykhauhao').val();
		namkhauhao = namkhauhao.substring(6,10);	
	var namdakh = parseFloat(namhientai)- parseFloat(namkhauhao);
	var thangdakh = 0;	
	if(namdakh > 0)
		thangdakh = (namdakh*12) - (parseFloat($('#ngaykhauhao').val().substring(3,5)) -1); 
	var namkhauhaocl= parseFloat($("#namkhconlai").val());
	var thangkhauhaocl = (namkhauhaocl+namdakh)*12 - thangdakh;
	var nguyengia = $("#nguyengia").val();
	if(nguyengia != "")
		nguyengia = nguyengia.replace(/,/g,"");
	else
		nguyengia = 0;
	var sxkd = $("#tylesxkd").val();
	if(sxkd != "")
		sxkd = sxkd.replace(/,/g,"");
	else
		sxkd = 0;
	var tylekhauhao = (100/(namkhauhaocl+namdakh)).toFixed(2);
	var cachtinhkh= $("#phuongphapkhauhao").val();
	var tylekhnam = nguyengia*tylekhauhao/100;
		tylekhnam = tylekhnam * sxkd/100;
	var sodakh = ((tylekhnam/12)*thangdakh).toFixed(0);		
	var giatricl = nguyengia-sodakh;		
	var hesodc = 0;
	if((namkhauhaocl+namdakh) > 6 )
		hesodc = 2.5;
	else if ((namkhauhaocl+ namdakh) <= 4)
		hesodc = 1.5;
	else
		hesodc = 2;	
	$("#namkhauhao").val(parseFloat(namhientai)-1);
	$("#tongnamsudung").val(namkhauhaocl+namdakh);
	if(cachtinhkh== "Khấu hao theo đường thẳng" || cachtinhkh== "Khấu hao theo tổng số")
	{
		$("#thangkhauhaoconlai").val(thangkhauhaocl);
		$("#tylekhauhao").val(tylekhauhao);
		$("#sokhauhao").val(sodakh);
		$("#giatrikhcl").val(giatricl);
		$("#sokhnam").val(tylekhnam);
	}
	if(cachtinhkh== "Khấu hao số dư giảm dần")
	{
		var khauhaotb = 0;
		sodakh =0;
		var sokh = 0;
		var i;
		for (i = 1; i<= namdakh ; i++)
		{
			khauhaotb = nguyengia/((namkhauhaocl + namdakh)-i);
			sokh = (nguyengia-sodakh)*tylekhauhao*hesodc/100;
			sokh = sokh* sxkd/100;
			if(sokh > khauhaotb)
				sodakh += sokh;
			else
				sodakh += khauhaotb;
		}
		sodakh = sodakh.toFixed(0);
		giatricl = nguyengia-sodakh;
		$("#thangkhauhaoconlai").val(thangkhauhaocl);
		$("#tylekhauhao").val(tylekhauhao);
		$("#sokhauhao").val(sodakh);
		$("#giatrikhcl").val(giatricl);
		$("#sokhnam").val(sokh);

	}	
}
function getFocus() {
    document.getElementById("ngaynhap").focus();
	document.getElementById("ngaysudung").focus();
	document.getElementById("nguonkhac").focus();
	document.getElementById("ngansach").focus();
	document.getElementById("ngaykhauhao").focus();
	document.getElementById("namkhconlai").focus();
	document.getElementById("phuongphapkhauhao").focus();
	document.getElementById("tylesxkd").focus();
}
</script>
<script>
$(document).ready(function()
{
	$('#mataisan').change(function(){		
		giatri = this.value;
		$('#PTHM').load('ajax_pthm.php?id_a='+giatri);			
	});	
}
);
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>

 <script>
$(document).on("click", ".open-AddBookDialoghm", function (e) {	
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id');
    $("#idhm").val(myBookId);	
    $(_self.attr('href')).modal('show');		
});
 </script>
 <script>
	$(document).ready(function()
{
	$('#idhm').change(function(){		
		giatri = this.value;
		$('#bang').load('ajax_hm.php?id_a='+giatri);			
	});	
}
);
 </script>
 <script> 
 function function1()
 {
	var tenphongban = $("#tenphongban").val() ;		
	giatri = tenphongban+">"+$("#chucnanggq").val()+">"+$("#soluongcb").val() +">"+$("#matpb").val();
	var option = document.createElement("option");
	option.selected = "Selected";
	option.text = tenphongban;
	option.value = tenphongban; 
	var select = document.getElementById("noidung");
	select.appendChild(option);  	
 }
 </script>
 <script language="javascript" type="text/javascript">
document.forms['nhapmoi'].name.focus();
function kt()
{
   var frm = window.document.nhapmoi;         
   if(frm.mataisan.value=='')
   {
      alert('Xin vui lòng chọn tên tài sản!');            
      document.forms['nhapmoi'].mataisan.focus();
      return false;
   } 
   else if(frm.hientrang.value.length <= 0)
   {
      alert('Xin vui lòng chọn hiện trạng tài sản!');            
      //document.forms['nhapmoi'].hientrang.focus();
      return false;
   }  
   else if(frm.ngansach.value =='' && frm.nguonkhac.value =='')
   {
      alert('Xin vui lòng nhập nguyên giá tài sản!');            
      //document.forms['nhapmoi'].ngansach.focus();
      return false;
   }     
   else                        
      return true;    
}
</script>
 <script type="text/javascript">
	function showAjaxModal()
	{		
		jQuery('#modal-6').modal('show', {backdrop: 'static'});			
	}
</script> 		
		<div class="col-sm-12">
		<a class="tieude" href='/main.php' >
			Trang chủ
		</a>
		>><a class="tieude" href='NhapQLTS.php'>
			Tài sản cố định xe và các phương tiện vận tải khác
		</a>
		>><a class="tieude">
			Nhập mới tài sản
		</a>		
		</div>		
<?php
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
?>
<div class="col-sm-12">
<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
<div class="col-sm-12">		
	<fieldset>
  <legend>Thông tin tài sản</legend> 
			<label class="col-sm-15 control-label">Tên tài sản:</label>
			<?php								
			$sql="select mataisanqd32,tentaiqd32,phantramhaomon,phantram32,namsudung from tbldanhsachqd32 Where (hinhthaitaisan Like 'Xe ô tô%' or chitiethinhthai like 'Phương tiện vận tải %' or hinhthaitaisan Like 'Phương tiện vận tải khác (ngoài xe ô tô)%') and mataisanqd32 Like 'TS%'";
			$sql1=mysqli_query($con,$sql);
			echo"<div  class='col-sm-45'>";
				echo"<select name='mataisanth' class='form-control' data-validate = 'required' id='mataisanth'>";
				echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
			while ($data=mysqli_fetch_row($sql1))
			{
				$value= $data[0].">".$data[2].">".$data[3].">".$data[4];
				echo "<option value='$value'>".$data[1]."</option>";
			}
				echo"</select>";
			echo"</div>";
			?>		
			<input name="mataisan" type="text" style ="display:none" class="form-control" id="mataisan"/>
			<!--<input name="namsudung" type="text" style ="display:none" class="form-control" id ="namsudung"/> -->
			<label for="field-3" class="col-sm-15 control-label">Tên chi tiết:</label>
			<div class="col-sm-45">
				<input name="tenchitiet" type="text" data-validate = "required" class="form-control" id="field-3"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày nhập:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" data-validate = "required" class="form-control" id="ngaynhap"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" data-validate = "required" class="form-control" id="ngaysudung"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Năm sản xuất:</label>
			<div class="col-sm-45">									
				<input data-mask="decimal"  name='namsanxuat' id='namsanxuat' data-validate = "required" class='form-control' />	
			</div>
			<label for="field-4" class="col-sm-15 control-label">Nước sản xuất:</label>
			<div class="col-sm-45">									
				<select name='NUOCSX' class='form-control'>
				<option  value='Abkhazia'>Abkhazia</option>
				<option  value='Afghanistan'>Afghanistan</option>
				<option  value='Ai Cập'>Ai Cập</option>
				<option  value='Albania'>Albania</option>
				<option  value='Algérie'>Algérie</option>
				<option  value='Andorra'>Andorra</option>
				<option  value='Angola'>Angola</option>
				<option  value='Anh'>Anh</option>
				<option  value='Áo'>Áo</option>
				<option  value='Ả Rập Saudi'>Ả Rập Saudi</option>
				<option  value='Argentina'>Argentina</option>
				<option  value='Armenia'>Armenia</option>
				<option  value='Azawad'>Azawad</option>
				<option  value='Azerbaijan'>Azerbaijan</option>
				<option  value='Ấn Độ'>Ấn Độ</option>
				<option  value='Bahamas'>Bahamas</option>
				<option  value='Bahrain'>Bahrain</option>
				<option  value='Bangladesh'>Bangladesh</option>
				<option  value='Barbados'>Barbados</option>
				<option  value='Bắc Síp'>Bắc Síp</option>
				<option  value='Belarus'>Belarus</option>
				<option  value='Belize'>Belize</option>
				<option  value='Benin'>Benin</option>
				<option  value='Bhutan'>Bhutan</option>
				<option  value='Bỉ'>Bỉ</option>
				<option  value='Bolivia'>Bolivia</option>
				<option  value='Botswana'>Botswana</option>
				<option  value='Bồ Đào Nha'>Bồ Đào Nha</option>
				<option  value='Bờ biển ngà'>Bờ biển ngà</option>
				<option  value='Brazil'>Brazil</option>
				<option  value='Brunei'>Brunei</option>
				<option  value='Bulgaria'>Bulgaria</option>
				<option  value='Burundi'>Burundi</option>
				<option  value='Cabo Verde'>Cabo Verde</option>
				<option  value='Các tiểu vương quốc Ả rập thống nhất'>Các tiểu vương quốc Ả rập thống nhất</option>
				<option  value='Cameroon'>Cameroon</option>
				<option  value='Campuchia'>Campuchia</option>
				<option  value='Canada'>Canada</option>
				<option  value='Chile'>Chile</option>
				<option  value='Colombia'>Colombia</option>
				<option  value='Comoros'>Comoros</option>
				<option  value='Congo'>Congo</option>
				<option  value='Costa Rica'>Costa Rica</option>
				<option  value='Croatia'>Croatia</option>
				<option  value='Cuba'>Cuba</option>
				<option  value='Djibouti'>Djibouti</option>
				<option  value='Dominica'>Dominica</option>
				<option  value='Dominicana'>Dominicana</option>
				<option  value='Đan Mạch'>Đan Mạch</option>
				<option  value='Đông Timor'>Đông Timor</option>
				<option  value='Đức'>Đức</option>
				<option  value='Ecuador'>Ecuador</option>
				<option  value='El Salvador'>El Salvador</option>
				<option  value='Eritrea'>Eritrea</option>
				<option  value='Estonia'>Estonia</option>
				<option  value='Ethiopia'>Ethiopia</option>
				<option  value='Fiji'>Fiji</option>
				<option  value='Gabon'>Gabon</option>
				<option  value='Gambia'>Gambia</option>
				<option  value='Ghana'>Ghana</option>
				<option  value='Grenada'>Grenada</option>
				<option  value='Gruzia'>Gruzia</option>
				<option  value='Guatemala'>Guatemala</option>
				<option  value='Guinea-Bissau'>Guinea-Bissau</option>
				<option  value='Guinea Xích Đạo'>Guinea Xích Đạo</option>
				<option  value='Guinea'>Guinea</option>
				<option  value='Guyana'>Guyana</option>
				<option  value='Haiti'>Haiti</option>
				<option  value='Hà Lan'>Hà Lan</option>
				<option  value='Hàn quốc'>Hàn quốc</option>
				<option  value='Mỹ'>Mỹ</option>
				<option  value='Hồng Kông'>Hồng Kông</option>
				<option  value='Honduras'>Honduras</option>
				<option  value='Hungary'>Hungary</option>
				<option  value='Hy Lạp'>Hy Lạp</option>
				<option  value='Iceland'>Iceland</option>
				<option  value='Indonesia'>Indonesia</option>
				<option  value='Iran'>Iran</option>
				<option  value='Iraq'>Iraq</option>
				<option  value='Israel'>Israel</option>
				<option  value='Hamaica'>Hamaica</option>
				<option  value='Hashemite Jordan'>Hashemite Jordan</option>
				<option  value='Kazakhstan'>Kazakhstan</option>
				<option  value='Kenya'>Kenya</option>
				<option  value='Kiribati'>Kiribati</option>
				<option  value='Kosovo'>Kosovo</option>
				<option  value='Kuwait'>Kuwait</option>
				<option  value='Síp'>Síp</option>
				<option  value='Kyrgyzstan'>Kyrgyzstan</option>
				<option  value='Lào'>Lào</option>
				<option  value='Latvia'>Latvia</option>
				<option  value='Lesotho'>Lesotho</option>
				<option  value='Liban'>Liban</option>
				<option  value='Liberia'>Liberia</option>
				<option  value='Libya'>Libya</option>
				<option  value='Liechtenstein'>Liechtenstein</option>
				<option  value='Litva'>Litva</option>
				<option  value='Luxembourg'>Luxembourg</option>
				<option  value='Macedonia'>Macedonia</option>
				<option  value='Madagascar'>Madagascar</option>
				<option  value='Malawi'>Malawi</option>
				<option  value='Malaysia'>Malaysia</option>
				<option  value='Maldives'>Maldives</option>
				<option  value='Mali'>Mali</option>
				<option  value='Malta'>Malta</option>
				<option  value='Maroc'>Maroc</option>
				<option  value='Marshall'>Marshall</option>
				<option  value='Mauritanie'>Mauritanie</option>
				<option  value='Mauritius'>Mauritius</option>
				<option  value='Mexico'>Mexico</option>
				<option  value='Micronesia'>Micronesia</option>
				<option  value='Moldova'>Moldova</option>
				<option  value='Monaco'>Monaco</option>
				<option  value='Montenegro'>Montenegro</option>
				<option  value='Mozambique'>Mozambique</option>
				<option  value='Myanmar'>Myanmar</option>
				<option  value='Nagorno-Karabakh'>Nagorno-Karabakh</option>
				<option  value='Namibia'>Namibia</option>
				<option  value='Nam Ossetia'>Nam Ossetia</option>
				<option  value='Nam Sudan'>Nam Sudan</option>
				<option  value='Nam Phi'>Nam Phi</option>
				<option  value='Nauru'>Nauru</option>
				<option  value='Na Uy'>Na Uy</option>
				<option  value='Nepal'>Nepal</option>
				<option  value='New Realand'>New Realand</option>
				<option  value='Nicaragua'>Nicaragua</option>
				<option  value='Niger'>Niger</option>
				<option  value='Nigeria'>Nigeria</option>
				<option  value='Nga'>Nga</option>
				<option  value='Nhật bản'>Nhật bản</option>
				<option  value='Oman'>Oman</option>
				<option  value='Pakistan'>Pakistan</option>
				<option  value='Palau'>Palau</option>
				<option  value='Palestine'>Palestine</option>
				<option  value='Panama'>Panama</option>
				<option  value='Papua New Guinea'>Papua New Guinea</option>
				<option  value='Paraguay'>Paraguay</option>
				<option  value='Peru'>Peru</option>
				<option  value='Pháp'>Pháp</option>
				<option  value='Phần Lan'>Phần Lan</option>
				<option  value='Philippines'>Philippines</option>
				<option  value='Qatar'>Qatar</option>
				<option  value='Rwanda'>Rwanda</option>
				<option  value='Saint Kitts và Nevis'>Saint Kitts và Nevis</option>
				<option  value='Santa Luxia'>Santa Luxia</option>
				<option  value='Samoa'>Samoa</option>
				<option  value='San Marino'>San Marino</option>
				<option  value='Scotland'>Scotland</option>
				<option  value='Séc'>Séc</option>
				<option  value='Sénégal'>Sénégal</option>
				<option  value='Serbia'>Serbia</option>
				<option  value='Seychelles'>Seychelles</option>
				<option  value='Sierra Leone'>Sierra Leone</option>
				<option  value='Singapore'>Singapore</option>
				<option  value='Slovakia'>Slovakia</option>
				<option  value='Slovenia'>Slovenia</option>
				<option  value='Solomon'>Solomon</option>
				<option  value='Somaliland'>Somaliland</option>
				<option  value='Sri Lanka'>Sri Lanka</option>
				<option  value='Sudan'>Sudan</option>
				<option  value='Suriname'>Suriname</option>
				<option  value='Swaziland'>Swaziland</option>
				<option  value='Syria'>Syria</option>
				<option  value='Tajikistan'>Tajikistan</option>
				<option  value='Tanzania'>Tanzania</option>
				<option  value='Tây Ban Nha'>Tây Ban Nha</option>
				<option  value='Sarauy'>Sarauy</option>
				<option  value='Sát'>Sát</option>
				<option  value='Thái Lan'>Thái Lan</option>
				<option  value='Thổ Nhĩ Kỳ'>Thổ Nhĩ Kỳ</option>
				<option  value='Thụy Điển'>Thụy Điển</option>
				<option  value='Thụy Sĩ'>Thụy Sĩ</option>
				<option  value='Togo'>Togo</option>
				<option  value='Tonga'>Tonga</option>
				<option  value='Moldova Transdniestria'>Moldova Transdniestria</option>
				<option  value='Triều Tiên'>Triều Tiên</option>
				<option  value='Trinidad và Tobago'>Trinidad và Tobago</option>
				<option  value='Đài Loan'>Đài Loan</option>
				<option selected='selected' value='Trung Hoa'>Trung Hoa</option>
				<option  value='Trung Phi'>Trung Phi</option>
				<option  value='Tunisia'>Tunisia</option>
				<option  value='Turkmenistan'>Turkmenistan</option>
				<option  value='Tuvalu'>Tuvalu</option>
				<option  value='Úc'>Úc</option>
				<option  value='Uganda'>Uganda</option>
				<option  value='Uruguay'>Uruguay</option>
				<option  value='Uzbekistan'>Uzbekistan</option>
				<option  value='Vanuatu'>Vanuatu</option>
				<option  value='Vatican'>Vatican</option>
				<option  value='Venezuela'>Venezuela</option>
				<option  value='Việt Nam'>Việt Nam</option>
				<option  value='Wales'>Wales</option>
				<option  value='Ý'>Ý</option>
				<option  value='Yemen'>Yemen</option>
				<option  value='Zambia'>Zambia</option>
				<option  value='Zimbabwe'>Zimbabwe</option>
				<option  value='Liên doanh, liên kết'>Liên doanh, liên kết</option>
				</select>
			</div>								
			<label for="field-4" class="col-sm-15 control-label">Nơi sử dụng:</label>
			<?php								
			$sql="select tenphongban from tblphongban where madonvi = '$ma[0]'";
			$sql1=mysqli_query($con,$sql);
			echo"<div  class='col-sm-4'>";
				echo"<select name='noidung' class='form-control' id='noidung'>";
				$d=0;
		    while ($data=mysqli_fetch_row($sql1))
			{
			    if($d==0)
				    echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
			    else
			        echo "<option value='".$data[0]."'>".$data[0]."</option>";
			    $d++;
			}
				echo"</select>";
			echo"</div>";
			?>	
            <a onclick="showAjaxModal();" class='col-sm-05 btn'><img src="/icon/add.png"  style="padding-left: 0px;" height="16" width="22"/></a>
            <label for="field-4" class="col-sm-15 control-label">Biển số:</label>
			<div class="col-sm-45">
				<input name="BKSXE" type="text" class="form-control" id="field-3">
			</div>
			<label for="field-4" class="col-sm-15 control-label">Nhã hiệu:</label>
			<div class="col-sm-45">
				<input name="NHXE" type="text" class="form-control" id="field-3">
			</div>
			<label for="field-4" class="col-sm-15 control-label">Tải trọng:</label>
			<div class="col-sm-45">
				<input name="CNXE" type="text" class="form-control" id="field-3">
			</div>
			<label for="field-3" class="col-sm-15 control-label">Công xuất:</label>
			<div class="col-sm-45">
				<input name="CXXE" type="text" class="form-control" id="field-3">
			</div>								
			<label for="field-4" class="col-sm-15 control-label">Lý do tăng:</label>
			<div class="col-sm-45">				
				<select name='NGGOXE' class='form-control'>									
				<option selected='selected' value='Mua mới'>Mua mới</option>
				<option value='Được tiếp nhận'>Được tiếp nhận</option>
					<option value="Thuê">Thuê</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
			<label for="field-3" class="col-sm-15 control-label">Phân loại SD:</label>
			<div class="col-sm-45">									
				<select name='PLSD' class='form-control'>									
				<option selected='selected' value='Xe phục vụ chức danh'>Xe phục vụ chức danh</option>
				<option selected='selected' value='Xe phục vụ chung'>Xe phục vụ chung</option>
				<option selected='selected' value='Xe chuyên dùng'>Xe chuyên dùng</option
				<option selected='selected' value=''>Chọn phân loại</option>
				</select>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Chức danh:</label>
			<div class="col-sm-45">
				<input name="CDSD" type="text" class="form-control" id="field-3">
			</div>
			<input name="DTKV" style ="display:none" type="text" class="form-control" id="DTKV" value="1"/>
			<label for="field-4" class="col-sm-15 control-label">Nguồn ngân sách:</label>
			<div class="col-sm-4">
				<input name="ngansach" type="text" class="form-control" data-mask="fdecimal" id="ngansach"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-3" class="col-sm-15 control-label">Nguồn khác:</label>
			<div class="col-sm-4">
				<input name="nguonkhac" type="text" class="form-control" data-mask="fdecimal" id="nguonkhac"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>

			<label for="field-4" class="col-sm-15 control-label"> Tổng nguyên giá:</label>
			<div class="col-sm-4">
				<input name="nguyengia" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" id="nguyengia"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
		<label for="field-4" class="col-sm-15 control-label">Ngày nhận ĐC:</label>
		<div class="col-sm-45">
			<input data-inputmask="'alias': 'date'" name="ngaythangchuyen" tabindex="-1" type="text" data-validate = "" class="form-control"  id="ngaythangchuyen"/>
		</div>
</fieldset>
</div>
	<div class="col-sm-12">
	<fieldset>
	<legend>Hao mòn/khấu hao</legend>
			<div class="col-sm-12">
			<input type="checkbox"  name="khauhao" tabindex="-1" id="khauhao" /> Tính khấu hao tài sản
			</div>
			<label for="field-4"  class="col-sm-2 control-label">Hao mòn TT45:</label>
			<div class="col-sm-35">
				<input name="phantramhaomon" readonly tabindex="-1" type="text" class="form-control" id ="phantramhaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4"  class="col-sm-2 control-label">Hao mòn QĐ32:</label>
			<div class="col-sm-35">
				<input name="phantram32"  type="text" readonly tabindex="-1" class="form-control" id ="phantram32"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4"  class="col-sm-2 control-label">Tổng năm sử dụng:</label>
			<div class="col-sm-35">
				<input name="namsudung" readonly tabindex="-1" type="text" class="form-control" id ="namsudung"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(Năm)</label>
			<label for="field-4"  class="col-sm-2 control-label">Năm sử dụng còn lại:</label>
			<div class="col-sm-35">
				<input name="namsudungcl"  type="text" readonly tabindex="-1" class="form-control" id ="namsudungcl"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(Năm)</label>
			<label for="field-4" class="col-sm-2 control-label">Số hao mòn:</label>
			<div class="col-sm-35">
				<input name="sohaomon" type="text" class="form-control" data-mask="fdecimal" id="sohaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-2 control-label">Giá trị còn lại:</label>
			<div class="col-sm-35">
				<input name="conlai" type="text" class="form-control" data-mask="fdecimal" id="conlai"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label id="lbngaykhauhao" for="field-4" style="display:none" class="col-sm-2 control-label">Ngày tính khấu hao:</label>
			<div class="col-sm-4">
				<input data-inputmask="'alias': 'date'" style="display:none" name="ngaykhauhao" type="text" class="form-control" id="ngaykhauhao" placeholder="Thời gian bắt đầu tính khấu hao tài sản"/>
			</div>
			<label for="field-4" id="lbnamsudungconlai" style="display:none" class="col-sm-2 control-label">Thời gian SD còn lại:</label>
			<div class="col-sm-35">
				<input name="namkhconlai" style="display:none" type="text" class="form-control" id ="namkhconlai"/>
			</div>
			<label for="field-4" id="lbdvnamsudungconlai" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(năm)</label>
			<label for="field-4" id="lbphuongphapkhauhao" style="display:none" class="col-sm-2 control-label">Phương pháp tính KH:</label>
			<div class="col-sm-4" >
				<Select name="phuongphapkhauhao"  style="display:none" class="form-control" id ="phuongphapkhauhao">
				<option selected="selected" value="Khấu hao theo đường thẳng">Khấu hao theo đường thẳng </option>
				<option value="Khấu hao số dư giảm dần">Khấu hao số dư giảm dần </option>
				<option value="Khấu hao theo tổng số">Khấu hao theo tổng số </option>
				</select>
			</div>
			<label for="field-4" id="lbthangkhauhaoconlai" style="display:none" class="col-sm-2 control-label">Thời gian KH còn lại:</label>
			<div class="col-sm-35">
				<input name="thangkhauhaoconlai" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="thangkhauhaoconlai"/>
			</div>
			<label for="field-4" id="lbdvthangkhauhaoconlai" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(tháng)</label>
			<label for="field-4" id="lbtylekhauhao" style="display:none" class="col-sm-2 control-label">Tỷ lệ khấu hao:</label>
			<div class="col-sm-35">
				<input name="tylekhauhao" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="tylekhauhao"/>
			</div>
			<label for="field-4" id="lbdvtylekhauhao" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" id="lbtylesxkd" style="display:none" class="col-sm-2 control-label">Tỷ lệ SXKD-DV:</label>
			<div class="col-sm-35">
				<input name="tylesxkd" style="display:none" type="text" class="form-control" data-mask="fdecimal" value="100" id="tylesxkd"/>
			</div>
			<label for="field-4" id="lbdvtylesxkd" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" id="lbsokhauhao" style="display:none" class="col-sm-2 control-label">Số đã khấu hao:</label>
			<div class="col-sm-35">
				<input name="sokhauhao" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="sokhauhao"/>
			</div>
			<label for="field-4" id="lbdvsokhauhao" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" id="lbgiatrikhcl" style="display:none" class="col-sm-2 control-label">Giá trị KH còn lại:</label>
			<div class="col-sm-35">
				<input name="giatrikhcl" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="giatrikhcl"/>
			</div>
			<label for="field-4" id="lbdvgiatrikhcl" style="padding-left: 0px;display:none;" class="col-sm-05 control-label">(VNĐ)</label>
			<input name="sokhnam" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="sokhnam"/>
			<input name="namkhauhao" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="namkhauhao"/>
			<input name="tongnamsudung" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="tongnamsudung"/>
		</fieldset>
	</div>
<div class="col-sm-12">	
		<fieldset>
 		<legend>Hiện trạng sử dụng</legend>							
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Kinh doanh" /> Kinh doanh	
			</div>	
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="Không KD" /> Không kinh doanh	       								
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="QLNN" /> Quản lý nhà nước	
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang"  value="HĐ khác" /> Hoạt động khác
			</div>									
		</fieldset>	
		<fieldset>
 		<legend>Thông tin khác</legend>							
			<label for="field-4" class="col-sm-15 control-label">Quyết định:</label>
			<div class="col-sm-45">
				<input name="quyetdinhbangiao"  type="text" class="form-control" id="field-3"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngayquyetdinhbangiao"  type="text" class="form-control" id="ngayquyetdinhbangiao">
			</div>	
			<label for="field-4" class="col-sm-15 control-label">Hóa đơn:</label>
			<div class="col-sm-45">
				<input name="hoadon" type="text" class="form-control" id="field-3"/>									
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngayhoadon"  type="text" class="form-control" id="ngayhoadon">
			</div>
			<label for="field-4" class="col-sm-15 control-label">Người sử dụng:</label>
			<?php
			$sql="select hoten from tbldanhsachcb where tenphonglv = '$row[7]'";
			$sql1=mysqli_query($con,$sql);
			echo"<div id='canbo' class='col-sm-45'>";
			echo"<select name='nguoisudung' class='form-control' id='nguoisudung'>";
			echo "<option  value='' selected>---Người sử dụng---</option>";
			while ($data=mysqli_fetch_row($sql1))
			{
				echo "<option  value='".$data[0]."'>".$data[0]."</option>";
			}
			echo"</select>";
			echo"</div>";
			?>
			<label for="field-4" class="col-sm-15 control-label">Ghi chú:</label>
			<div class="col-sm-45">
				<input name="ttkhac" type="text" class="form-control" id="field-3"/>
			</div>
		</fieldset>						
		<fieldset>
 		<legend>Tài sản tương tự</legend>										
			<label for="field-4" class="col-sm-15 control-label">Số copy:</label>
			<div class="col-sm-2">									
				<input name="socopy" type="text" class="form-control" id="socopy"/>									
			</div>	
		</fieldset>
</div>		
			<input type="checkbox" name="theodoi" tabindex="-1" checked> Theo dõi
			<input name="namhm" type="text" style="display:none" class="form-control" id ="namhm"/>
			<input name="soduhm" type="text" style="display:none" class="form-control" id ="soduhm"/>
			<input name="sohmnam" type="text" style="display:none" class="form-control" id ="sohmnam"/>
			<input name="phantramhm" type="text" style="display:none" class="form-control" id ="phantramhm"/>
		<div class="modal-footer">			
			<input type="submit" name="capnhatts" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật"/>
		</div>	
	</form>	
	</div>	
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
								<button name="luupb" onclick="function1()" id="luupb" class="btn btn-blue">Cập nhật</button>
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							</div>
						</form>						
				</div>
			</div>
		</div>
	</div>
<?php 	
	//
	$ab = $ma[0];	
	function IDTS()
	{
		$kq="";
		global $ab;
		global $con;
		$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$ab'";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	if (isset($_POST['capnhatts']))
	{
		$khauhao="Không";
		if(isset($_POST['khauhao']))
			$khauhao="Có";	
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);
		$noidung = $_POST['noidung'];
		$namsanxuat = $_POST['namsanxuat'];
		$NUOCSX = $_POST['NUOCSX'];
		$BKSXE = $_POST['BKSXE'];
		$NHXE = $_POST['NHXE'];
		$CNXE = $_POST['CNXE'];
		$CXXE = $_POST['CXXE'];
		$NGGOXE = $_POST['NGGOXE'];
		$PLSD = $_POST['PLSD'];		
		$CDSD = $_POST['CDSD'];
		$ngaythangchuyen = doingay($_POST['ngaythangchuyen']);
		if($_POST['ngansach'])
			$ngansach = kieudouble($_POST['ngansach']);
		else
			$ngansach = 0;
		if($_POST['nguonkhac'])
			$nguonkhac = kieudouble($_POST['nguonkhac']);
		else
			$nguonkhac = 0;		
		if(isset($_POST['theodoi']))			
			$theodoi="Theo dõi";
		else
			$theodoi="Không";
		$giatrikhcl = kieudouble($_POST['giatrikhcl']);
		$quyetdinhbangiao=$_POST['quyetdinhbangiao'];
		$ngayquetdinhbangiao=(strlen($_POST['ngayquyetdinhbangiao']) > 8?doingay($_POST['ngayquyetdinhbangiao']):null);
		$hoadon=$_POST['hoadon'];
		$nguoisudung=$_POST['nguoisudung'];
		$ngayhoadon= isset($_POST['ngayhoadon'])?doingay($_POST['ngayhoadon']):"";
		$ttkhac = $_POST['ttkhac'];		
		$namhm = $_POST['namhm'];
		$phantramhm = $_POST['phantramhm'];
		$soduhm = $_POST['soduhm'];
		$sohmnam = $_POST['sohmnam'];		
		$sohaomon = kieudouble($_POST['sohaomon']);				
		$conlai = kieudouble($_POST['conlai']);			
		$phanloai = $_POST['hientrang'];
		$ngaykhauhao = doingay($_POST['ngaykhauhao']);
		$namkhconlai=kieudouble($_POST['namkhconlai']);
		$phuongphapkhauhao = $_POST['phuongphapkhauhao'];
		$thangkhauhaoconlai = kieudouble($_POST['thangkhauhaoconlai']);
		$tylekhauhao = kieudouble($_POST['tylekhauhao']);
		$tylesxkd= kieudouble($_POST['tylesxkd']);
		$sokhauhao = kieudouble($_POST['sokhauhao']);
		$sokhnam = kieudouble($_POST['sokhnam']);
		$namsudungcl = kieudouble($_POST['namsudungcl']);
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
			$phantram32=$row[5];
		}
		$socopy = kieudouble($_POST['socopy']);
		$socopy +=1;
		for($i = 0; $i < $socopy; $i++){
		$sql="INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,namsanxuat,NUOCSX,BKSXE,NHXE,CNXE,CXXE,NGGOXE,PLSD,CDSD,ngansach,nguonkhac,ttkhac,phantram,sonamsd,sothutu,XOA,DVT,chitiethinhthai,madonvi,phantram32,sohaomon,conlai,xemt,xemh,DTKV,theodoi,quyetdinhbangiao,ngayquyetdinhbangiao,hoadon,ngayhoadon,giatrikhcl,khauhao,namsudungcl,ngaythangchuyen,nguoisudung)";
		$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$ngaysudung','$noidung','$namsanxuat','$NUOCSX','$BKSXE','$NHXE','$CNXE','$CXXE','$NGGOXE','$PLSD','$CDSD',$ngansach,$nguonkhac,'$ttkhac',$pthm,$sonamsd,$ttsx,'K','Chiếc','$chitiethinhthai','$ab','$phantram32',$sohaomon,$conlai,'Chưa xem','Chưa xem',1,'$theodoi','$quyetdinhbangiao','$ngayquetdinhbangiao','$hoadon','$ngayhoadon',$giatrikhcl,'$khauhao','$namsudungcl','$ngaythangchuyen','$nguoisudung')";
		$kq=mysqli_query($con,$sql);
		$IDTS = IDTS();		
		$sql = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi,TTTS,ngaykhauhao,namkhconlai,phuongphapkhauhao,thangkhauhaoconlai,tylekhauhao,tylesxkd,sokhauhao,sokhnam) values('$ngaynhap',$IDTS,$namhm,$phantramhm,$soduhm,$sohmnam,'$ab',$IDTS,'$ngaykhauhao','$namkhconlai','$phuongphapkhauhao',$thangkhauhaoconlai,$tylekhauhao,$tylesxkd,$sokhauhao,$sokhnam)";										
		$kq=mysqli_query($con,$sql);
		$sql = "Insert into tblhientrang(ngaythang,TTQLTS,phanloai,donvi,soluong,madonvi,TTTS) values('$ngaynhap',$IDTS,'$phanloai','Chiếc','1','$ab',$IDTS)";
		$kq=mysqli_query($con,$sql);
		}
        header("Location:NhapQLTS.php");
	}
?>		
	</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>