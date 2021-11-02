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
<!--------- Header ----------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script src="/my_script.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>

<script language='javascript'>
 $(document).ready(function()
 {
	 $('#mataisan').change(function(){
		 var ngaythang = new Date;
		 var month=ngaythang.getMonth();
		 var months= new Array("1","2","3","4","5","6","7","8","9","10","11","12");
		 $("#ngaynhap").val(ngaythang.getDate()+"/" + months[month] +"/"+ ngaythang.getFullYear());
		 var div = document.getElementById('thongbao');
		 div.style.display = 'none';
	 });

 });
</script>
<script language='javascript'>
 $(document).ready(function() {
  $('#DTKV').change(function() {
	  giatrinhap();
  });
	 $('#soluongx').change(function() {
		 giatrixuat();
	 });
	 $('#dongia').change(function() {
		 giatrinhap();
	 });
	 $("#ngaysudung").change(function(){
		 var giatri = this.value;
		 giatri = giatri.split('/');
		 $("#namsanxuat").val(giatri[2]);
		 $("#ngayxuat").val(this.value)
	 })
 });
	function giatrinhap()
	{
		var soluong = $("#DTKV").val();
		soluong = soluong.replace(/,/g,"");
		var dongia = $("#dongia").val();
		dongia = dongia.replace(/,/g,"");
		var tienmua = parseFloat(soluong)*parseFloat(dongia);
		$("#thanhtien").val(tienmua);
		$("#soluongx").val(soluong);
		$("#sotienx").val(tienmua);
	}
	function giatrixuat()
	{
		var soluongx = $("#soluongx").val();
		soluongx = soluongx.replace(/,/g,"");
		var dongia = $("#dongia").val();
		dongia = dongia.replace(/,/g,"");
		var tienxuat = parseFloat(soluongx) * parseFloat(dongia);
		$("#sotienx").val(tienxuat);
	}
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
function getFocus() {
	document.getElementById("namsanxuat").focus();
	document.getElementById("ngaynhap").focus();
	document.getElementById("ngaysudung").focus();
	document.getElementById("noidung").focus();
	document.getElementById("DTKV").focus();
	document.getElementById("dongia").focus();
	document.getElementById("thanhtien").focus();
	document.getElementById("ngayxuat").focus();
	document.getElementById("noisudung").focus();
	document.getElementById("soluongx").focus();
	document.getElementById("sotienx").focus();
}
</script>
<script language="javascript" type="text/javascript">
	document.forms['nhapmoi'].name.focus();
	function kt()
	{
		var frm = window.document.nhapmoi;
		if(frm.mataisan.value=='')
		{
			alert('Xin vui lòng chọn tên công cụ!');
			document.forms['nhapmoi'].mataisan.focus();
			return false;
		}
		else if (frm.tenchitiet.value == '')
		{
			alert('Xin vui lòng nhập tên công cụ dụng cụ!');
			document.forms['nhapmoi'].tenchitiet.focus();
			return false;
		}
		else if (frm.ngaysudung.value == '')
		{
			alert('Xin vui lòng nhập ngày tháng sử dụng!');
			document.forms['nhapmoi'].ngaysudung.focus();
			return false;
		}
		else if(frm.DTKV.value == '')
		{
			alert('Xin vui lòng nhập số lượng nhập công cụ dụng cụ!');
			document.forms['nhapmoi'].DTKV.focus();
			return false;
		}
		else if(frm.dongia.value == '')
		{
			alert('Xin vui lòng nhập đơn giá công cụ dụng cụ!');
			document.forms['nhapmoi'].dongia.focus();
			return false;
		}
		else
		{
			var nhap = $('#soluong').val();
			var xuat = $('#soluongx').val();
			if((parseFloat(nhap) - parseFloat(xuat)) < 0 )
			{
				alert("Số lượng xuất vượt quá số lượng nhập. Bạn hãy kiểm tra lại!");
				document.getElementById("soluongx").focus();
				return false;
			}
			else if(parseFloat(xuat) <= 0 )
			{
				alert("Số lượng xuất không thể nhỏ hơn hoặc bằng 0. Bạn hãy kiểm tra lại!");
				document.getElementById("soluongx").focus();
				return false;
			}
			else
				return true;
		}
	}
</script>

<div class="col-sm-12">
	<a class="tieude" href='/main.php' >
		Trang chủ
	</a>
	>><a class="tieude" href='NhapQLCC.php'>
		Quản lý công cụ dụng cụ
	</a>
	>><a class="tieude">
		Nhập mới công cụ dụng cụ
	</a>
</div>
<?php
$ab = $ma[0];
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
if (isset($_POST['capnhat']))
{
	$mataisan = $_POST["mataisan"];
	$tenchitiet = $_POST["tenchitiet"];
	$tentaisan = "";
	$chitiethinhthai = "";
	$ttsx = 0;
	$ngaynhap = doingay($_POST['ngaynhap']);
	$ngaysudung = doingay($_POST['ngaysudung']);
	$ngayxuat = doingay($_POST['ngayxuat']);
	$namsanxuat = $_POST['namsanxuat'];
	$NUOCSX = $_POST['NUOCSX'];
	$noidung = $_POST['noidung'];
	$DVT = $_POST['DVT'];
	$DTKV = kieudouble($_POST['DTKV']);
	$dongia = kieudouble($_POST['dongia']);
	$thanhtien = kieudouble($_POST['thanhtien']);
	$GCTS = $_POST['GCTS'];
	$soluongx = kieudouble($_POST['soluongx']);
	$sotienx = kieudouble($_POST['sotienx']);
	$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '" . $mataisan . "'";
	$kqts = mysqli_query($con,$sqlts);
	while ($row = mysqli_fetch_array($kqts)) {
		$tentaisan = $row[0];
		$chitiethinhthai = $row[1];
		$ttsx = $row[2];
	}
	$sql = "Insert into tblqlcc (mataisan, tentaisan, tenchitiet, ngaynhap, namsanxuat, ngaysudung, noidung, dongia, thanhtien, DTKV, NUOCSX,".
			" chitiethinhthai, GCTS, XOA, DVT, madonvi, sothutu, xemt, xemh, theodoi)".
			" values ('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$namsanxuat','$ngaysudung','$noidung','$dongia','$thanhtien','$DTKV',".
			"'$NUOCSX','$chitiethinhthai','$GCTS','K','$DVT','$ab','$ttsx','Chưa xem','Chưa xem','Theo dõis')";
	$qrsql = mysqli_query($con,$sql);
	if (isset($_POST['ckbxuatdung'])) {
		$TTQLcc = IDCC();
		$sql = "Insert into tblxuatdung(TTQLcc,ngayxuat,lydoxuat,soluong,sotien,noisudung,mataisan,tentaisan,tenchitiet,namsanxuat,dvt,nuocsx,chitiethinhthai,dongia,madonvi)"
				. " values('$TTQLcc','$ngayxuat','Xuất dùng',$soluongx,$sotienx,'$noidung','$mataisan','$tentaisan','$tenchitiet','$namsanxuat','$DVT','$NUOCSX','$chitiethinhthai',$dongia,'$ab')";
		$kq = mysqli_query($con,$sql);
	}
	if ($qrsql) {
		echo "<div class = 'col-sm-12' style='text-align: center;'>";
		echo "<div class='col-sm-117' style='text-align: center;' id='thongbao'>";
		echo "<form >";
		echo "<div class = 'col-sm-12' style='text-align: center;'>";
		echo "<fieldset>";
		echo "<legend>Thông báo</legend >";
		echo "<label class='col-sm-12 control-label'> Bạn đã cập nhật chỉnh sửa thành công công cụ: <strong>".$tenchitiet."</strong>!";
		echo "</label>";
		echo "<lable class='col-sm-12 control-lable'>Bạn có thể tiếp tục nhập thêm công cụ dụng cụ!</lable>";
		echo "</fieldset>";
		echo "</div>";
		echo "</form>";
		echo "</div>";
		echo "</div>";
	}
}
?>
<div class="col-sm-12">
	<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
		<div class="col-sm-12">
			<fieldset>
				<legend>Thông tin công cụ</legend>
				<label class="col-sm-15 control-label">Tên công cụ<span style="padding-left:0px; color:red;">*</span>:</label>
				<?php
				$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where mataisanqd32 Like 'CC%'";
				$sql1=mysqli_query($con,$sql);
				echo"<div  class='col-sm-45'>";
				echo"<select name='mataisan' class='form-control' id='mataisan'>";
				echo"<option selected='selected' value=''>Chọn tên công cụ</option>";
				while ($data=mysqli_fetch_row($sql1))
				{
					echo "<option value='".$data[0]."'>".$data[1]."</option>";
				}
				echo"</select>";
				echo"</div>";
				?>
				<label for="field-3" class="col-sm-15 control-label">Tên chi tiết<span style="padding-left:0px; color:red;">*</span>:</label>
				<div class="col-sm-45">
					<input name="tenchitiet" type="text" data-validate ="requaired" class="form-control" id="field-3">
				</div>
				<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
				<div class="col-sm-45">
					<input data-inputmask="'alias': 'date'" tabindex ="-1" name="ngaynhap" tabindex="-1" type="text"  class="form-control" id="ngaynhap"/>
				</div>
				<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
				<div class="col-sm-45">
					<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text"  class="form-control" id="ngaysudung"/>
				</div>
				<label for="field-4" class="col-sm-15 control-label">Năm sản xuất<span style="padding-left:0px; color:red;">*</span>:</label>
				<div class="col-sm-45">
					<input data-mask="decimal"  name='namsanxuat' tabindex="-1" id='namsanxuat'  class='form-control' />
				</div>
				<label for="field-4" class="col-sm-15 control-label">Nước sản xuất<span style="padding-left:0px; color:red;">*</span>:</label>
				<div class="col-sm-45">
					<select name='NUOCSX' tabindex="-1"  class='form-control'>
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
				<label for="field-4" class="col-sm-15 control-label">Nơi nhập<span style="padding-left:0px; color:red;">*</span>:</label>
				<?php
				$sql="select tenphongban from tblphongban where madonvi = '$ma[0]'";
				$sql1=mysqli_query($con,$sql);
				echo"<div  class='col-sm-4'>";
				echo"<select name='noidung' tabindex='-1' class='form-control' id='noidung'>";
				$d=0;
				while ($data=mysqli_fetch_row($sql1))
				{
					if ($d ==0)
						echo "<option selected='selected' value='".$data[0]."'>".$data[0]."</option>";
					else
						echo "<option  value='".$data[0]."'>".$data[0]."</option>";
					$d++;
				}
				echo"</select>";
				echo"</div>";
				?>
				<a onclick="showAjaxModal();" class='col-sm-05 btn'><img src="/icon/add.png"  style="padding-left: 0px;" height="16" width="22"/></a>
				<label for="field-4" class="col-sm-15 control-label">Đơn vị tính:</label>
				<div class="col-sm-45">
					<input name="DVT" type="text" class="form-control" id="field-3">
				</div>
				<label for="field-4" class="col-sm-15 control-label">Số lượng:</label>
				<div class="col-sm-45">
					<input name="DTKV" type="text" data-mask = "fdecimal" class="form-control" id="DTKV">
				</div>
				<label for="field-4" class="col-sm-15 control-label">Đơn giá:</label>
				<div class="col-sm-4">
					<input name="dongia" type="text" class="form-control" data-mask="fdecimal" id="dongia">
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4" class="col-sm-15 control-label">Thành tiền:</label>
				<div class="col-sm-4">
					<input name="thanhtien" readonly tabindex="-1" type="text" class="form-control" data-mask="fdecimal" id="thanhtien">
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4" class="col-sm-15 control-label">Diễn giải:</label>
				<div class="col-sm-45">
					<input name="GCTS" type="text" class="form-control" id="GCTS">
				</div>
			</fieldset>
		</div>
		<div class="col-sm-12">
			<fieldset>
				<legend>Xuất dùng công cụ</legend>
				<div class="col-sm-12">
					<input type="checkbox"  name="ckbxuatdung" checked tabindex="-1" id="ckbxuatdung" />Xuất dùng công cụ
				</div>
				<label class="col-sm-15 control-label">Ngày xuất:</label>
				<div class="col-sm-45">
					<input data-inputmask="'alias': 'date'" tabindex="-1" name="ngayxuat" type="text" class="form-control" id="ngayxuat">
				</div>
				<label class="col-sm-15 control-label">Nơi sử dụng:</label>
				<?php
				$sql="select tenphongban from tblphongban where madonvi = '$ab'";
				$sql1=mysqli_query($con,$sql);
				echo"<div  class='col-sm-45'>";
				echo"<select name='noisudung' tabindex='-1' class='form-control' id='noisudung'>";
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
				<label class="col-sm-15 control-label">Số lượng xuất:</label>
				<div class="col-sm-45">
					<input name="soluongx" type="text" data-mask = "fdecimal" class="form-control" id="soluongx">
				</div>
				<label class="col-sm-15 control-label">Thanh tiền:</label>
				<div class="col-sm-4">
					<input name="sotienx" type="text" tabindex="-1" readonly class="form-control" data-mask = "fdecimal" id="sotienx">
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			</fieldset>
		</div>
		<div class="modal-footer">
			<input type="submit" name="capnhat" onclick ="getFocus();" class="btn btn-blue" value = "Cập nhật"/>
		</div>
	</form>
</div>
	</div>
	</div>

<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
