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
	
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
$(document).on("click", ".open-AddBookDialog", function (e) {

    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[0]);
	$("#sonamsd").val(myBookId[1]);
	$("#chitiethinhthai").val(myBookId[2]);
    $(_self.attr('href')).modal('show');
});
 </script>
 <script>
$(document).on("click", ".open-AddBookDialogg", function (e) {

    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId1").val(myBookId[0]);
	$("#sonamsd1").val(myBookId[1]);
	$("#chitiethinhthai1").val(myBookId[2]);
    $(_self.attr('href')).modal('show');
});
 </script>
 <script>	
	$(document).ready(function() {
		$('#ngaytanggiam').change(function() {		   
			var giatri = $('#bookId').val() + ">" + this.value + ">0>" + $('#sonamsd').val();
		$('#thongtints').load('ajax_nguyengia.php?id_a='+giatri);
		if($('#chitiethinhthai').val() == "Nhà" || $('#chitiethinhthai').val() == "Vật kiến trúc")
		{
			$('#tangsl').fadeIn();
			$('#tangsl').load('ajax_soluong.php?id_a='+giatri);			
		}
		else
			$('#tangsl').fadeOut();
		});
	});		
	$(document).ready(function() {
		$('#ngaytanggiam1').change(function() {		   
			var giatri = $('#bookId1').val() + ">" + this.value + ">0>" + $('#sonamsd1').val();
		$('#thongtints1').load('ajax_nguyengiagiam.php?id_a='+giatri);
		if($('#chitiethinhthai1').val() == "Nhà" || $('#chitiethinhthai1').val() == "Vật kiến trúc")
		{
			$('#tangsl1').fadeIn();
			$('#tangsl1').load('ajax_soluonggiam.php?id_a='+giatri);			
		}
		else
			$('#tangsl1').fadeOut();
		});
	});		
 </script>
 <script>
	$(document).ready(function() {
		$('#ngansach').change(function() {		   
			tongtang();
	});	
	});		
		$(document).ready(function() {
		$('#nguonkhac').change(function() {		   
			tongtang();		
	});	
	});	
	$(document).ready(function() {
		$('#ngansach1').change(function() {		   
			tonggiam();
	});	
	});		
		$(document).ready(function() {
		$('#nguonkhac1').change(function() {		   
			tonggiam();		
	});	
	});	
	function tongtang()
	{
		var nguyengia = $('#nguyengiatruoc').val();
		if(nguyengia != "")
			nguyengia = nguyengia.replace(/,/g,"");
		else
			nguyengia = 0;
		var giatricl = $('#giatriconlaitruoc').val();
		if(giatricl != "")
			giatricl = giatricl.replace(/,/g,"");
		else
			giatricl = 0;
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
		var tongtang = parseFloat(ngansach) + parseFloat(nguonkhac);
		var nguyengiamoi = parseFloat(nguyengia) + parseFloat(tongtang);
		var giatriconlaimoi = parseFloat(giatricl) + parseFloat(tongtang);
		nguyengiamoi = dinhdangso(nguyengiamoi);
		giatriconlaimoi = dinhdangso(giatriconlaimoi);
		$('#sotien').val(tongtang);		
		$('#nguyengiamoi').val(nguyengiamoi);
		$('#giatriconlaimoi').val(giatriconlaimoi);
	}
	function tonggiam()
	{
		var nguyengia = $('#nguyengiatruoc1').val();
		if(nguyengia != "")
			nguyengia = nguyengia.replace(/,/g,"");
		else
			nguyengia = 0;
		var giatricl = $('#giatriconlaitruoc1').val();
		if(giatricl != "")
			giatricl = giatricl.replace(/,/g,"");
		else
			giatricl = 0;
		var ngansach = $('#ngansach1').val();
		if(ngansach != "")
			ngansach = ngansach.replace(/,/g,"");
		else
			ngansach = 0;
		var nguonkhac = $('#nguonkhac1').val();
		if(nguonkhac != "")
			nguonkhac = nguonkhac.replace(/,/g,"");
		else
			nguonkhac = 0;			
		var tongtang = parseFloat(ngansach) + parseFloat(nguonkhac);
		var nguyengiamoi = parseFloat(nguyengia) - parseFloat(tongtang);
		var giatriconlaimoi = parseFloat(giatricl) - parseFloat(tongtang);
		nguyengiamoi = dinhdangso(nguyengiamoi);
		giatriconlaimoi = dinhdangso(giatriconlaimoi);
		$('#sotien1').val(tongtang);		
		$('#nguyengiamoi1').val(nguyengiamoi);
		$('#giatriconlaimoi1').val(giatriconlaimoi);
	}
	function dinhdangso(nStr)
	{
		nStr += '';
		var x = nStr.split('.');
		var x1 = x[0];
		var x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
    }
	function capnhat()
	{
		document.getElementById("sotien").focus();
		document.getElementById("nguyengiamoi").focus();
		document.getElementById("giatriconlaimoi").focus();
		document.getElementById("dientichtruoc").focus();
		document.getElementById("tongdientichtruoc").focus();
		document.getElementById("ngansach").focus();
		document.getElementById("nguonkhac").focus();
	}
	function capnhatgiam()
	{
		document.getElementById("sotien1").focus();
		document.getElementById("nguyengiamoi1").focus();
		document.getElementById("giatriconlaimoi1").focus();
		document.getElementById("dientichtruoc1").focus();
		document.getElementById("tongdientichtruoc1").focus();
		document.getElementById("ngansach1").focus();
		document.getElementById("nguonkhac1").focus();
	}
 </script>
 <script language='javascript'>
 $(document).ready(function() {
  $('#chitieu').change(function() {	
   giatri = this.value +";"+ $('#bookId').val();
   $('#sTTKK').load('ajax_cttd.php?id_a='+giatri);
  });
 });
</script>
		<div class="col-sm-12">
		<a class="tieude" href='/main.php' >
			Trang chủ
		</a>
		>><a class="tieude" href='NhapQLTS.php'>
			Tài sản cố định xe và phương tiện vận tải khác
		</a>
		>><a class="tieude">
			Tăng giảm sửa chữa
		</a>				
		</div>		
		<h3>Chọn tài sản để ghi tăng, ghi giảm, sửa chữa</h3>	
		<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='NhapQLTS.php'" ?>" />
<?php 
	$ab = $ma[0];		
	if (isset($_POST['capnhatchinhsua']))
	{		
		$TTQLTS=$_POST["bookId"];
		$ngaytanggiam=doingay($_POST["ngaytanggiam"]);
		$lydotanggiam=$_POST["lydotanggiam"];
		$soluong=kieudouble($_POST["soluong"]);
		$sotien=kieudouble($_POST["sotien"]);
		$nguonkhac=kieudouble($_POST["nguonkhac"]);
		$nguyengiatruoc=kieudouble($_POST["nguyengiatruoc"]);
		$giatriconlaitruoc=kieudouble($_POST["giatriconlaitruoc"]);
		$namsudungconlai=kieudouble($_POST["namsudungconlai"]);
		$ngansach=kieudouble($_POST["ngansach"]);
		$tongdientich=kieudouble($_POST["tongdientich"]);
		$dientichtruoc=kieudouble($_POST["dientichtruoc"]);
		$tongdientichtruoc=kieudouble($_POST["tongdientichtruoc"]);
		$sql = "Insert into tbltanggiam(ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi,".
		"nguonkhac,nguyengiatruoc,giatriconlaitruoc,namsudungconlai,ngansach,tongdientich,dientichtruoc,tongdientichtruoc)".
		" values('$ngaytanggiam',$TTQLTS,'$lydotanggiam',$soluong,$sotien,'Tăng','$ab',".
		"$nguonkhac,$nguyengiatruoc,$giatriconlaitruoc,$namsudungconlai,$ngansach,$tongdientich,$dientichtruoc,$tongdientichtruoc)";				
		$kq=mysqli_query($con,$sql);
	}	
	if (isset($_POST['capnhatchinhsuag']))
	{		
		$TTQLTS=$_POST["bookId1"];
		$ngaytanggiam=doingay($_POST["ngaytanggiam1"]);
		$lydotanggiam=$_POST["lydotanggiam1"];
		$soluong=kieudouble($_POST["soluong1"]);
		$sotien=kieudouble($_POST["sotien1"]);
		$nguonkhac=kieudouble($_POST["nguonkhac1"]);
		$nguyengiatruoc=kieudouble($_POST["nguyengiatruoc1"]);
		$giatriconlaitruoc=kieudouble($_POST["giatriconlaitruoc1"]);
		$namsudungconlai=kieudouble($_POST["namsudungconlai1"]);
		$ngansach=kieudouble($_POST["ngansach1"]);
		$tongdientich=kieudouble($_POST["tongdientich1"]);
		$dientichtruoc=kieudouble($_POST["dientichtruoc1"]);
		$tongdientichtruoc=kieudouble($_POST["tongdientichtruoc1"]);
		$sql = "Insert into tbltanggiam(ngaytanggiam,TTQLTS,lydotanggiam,soluong,sotien,tanggiam,madonvi,".
		"nguonkhac,nguyengiatruoc,giatriconlaitruoc,namsudungconlai,ngansach,tongdientich,dientichtruoc,tongdientichtruoc)".
		" values('$ngaytanggiam',$TTQLTS,'$lydotanggiam',$soluong,$sotien,'Giảm','$ab',".
		"$nguonkhac,$nguyengiatruoc,$giatriconlaitruoc,$namsudungconlai,$ngansach,$tongdientich,$dientichtruoc,$tongdientichtruoc)";				
		$kq=mysqli_query($con,$sql);
	}	   
?>	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên tài sản</th>
					<th>Tên chi tiết</th>									
					<th>Ngày sử dụng</th>
					<th>Nơi sử dụng</th>					
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php 
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
function ktra($mats)
{
	$kq="";
	global $con;
	$sql="select * from tbltanggiam where TTQLTS = ".$mats;	
	$qrsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qrsql) != 0)
		return true;
	else		
		return false;
}
function ktthanhly($mats)
{
    global $con;
	$sql = "Select * from tbldenghi where TTQLTS = '".$mats."' and (hinhthuc ='Thanh lý' or hinhthuc ='Bán' or hinhthuc ='Điều chuyển')";	
	$qrsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qrsql) <= 0)
		return false;
	else
		return true;
}
//
$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,namsanxuat,NUOCSX,BKSXE,NHXE,CNXE,CXXE,NGGOXE,PLSD,CDSD,ngansach,nguonkhac,ttkhac,chitiethinhthai,sonamsd from tblqlts where madonvi = '$ab' and chitiethinhthai like 'Phương tiện vận tải%'";
$kq = mysqli_query($con,$sql);
$ngnh="";$ngsd="";$matm = "";$stt=0;   
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){	
		$stt++;
		$matm = $row[0];
		$tangg= $row[0] . ">" . $row[20]. ">" . $row[19];
            echo "<tr"; if(ktra($row[0])) echo " style='color:red;'"; echo ">";
                echo"<td>$stt</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";	
				$ngsd = doingay1($row[5]);
				echo"<td>$ngsd</td>";
				echo"<td>$row[6]</td>";		
               if(!ktthanhly($row[0]))				
                echo"<td>							
						<a href=\"NhapTangmoi.php?id=$row[0]\" class='btn btn-green' >							
						Nhập mới	
						</a>
						<a href=\"Nhapsuatanggiam.php?id=$matm\" class='btn btn-info' >							
							Chi tiết	
						</a>	
					</td>";
			else
				 echo"<td>													
						<a data-id='$tangg' title='Tài sản đã bán, thanh lý hoặc điều chuyển' onclick='getFocuscs()' class='open-AddBookDialog btn btn-warning '>Nhập mới</a>							
						<a href=\"Nhapsuatanggiam.php?id=$matm\" class='btn btn-info' >							
							Chi tiết	
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
<div class="modal fade" id="addBookDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Thêm mới ghi tăng tài sản</h4>
      </div>	  
      <div class="modal-body"> 	  
		<form role='form' method='POST' action = 'NhapTang.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">							
								<label class="col-sm-3 control-label">Số ghi tài sản:</label>
								<div class="col-sm-9">
									<input name="bookId" type="text" class="form-control" id="bookId">									
								</div>							
								<label for="field-3" class="col-sm-3 control-label">Ngày ghi tăng:</label>
								<div class="col-sm-9">
									<input data-inputmask="'alias': 'date'" name="ngaytanggiam" type="text" class="form-control" id="ngaytanggiam" value = "">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Lý do ghi tăng:</label>
								<div class="col-sm-9">
									<input name="lydotanggiam" type="text" class="form-control" id="field-3">
								</div>								
							<div id="thongtints">
								<h4 class="col-sm-10"> Thông tin trước khi tăng </h4>
								<label for="field-4" class="col-sm-3 control-label">Nguyên giá:</label>
								<div class="col-sm-9">
									<input name="nguyengiatruoc" type="text" class="form-control" data-mask="fdecimal" id="nguyengiatruoc">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">GT còn lại:</label>
								<div class="col-sm-9">
									<input name="giatriconlaitruoc" type="text" class="form-control" data-mask="fdecimal" id="giatriconlaitruoc">
								</div>									
								<label for="field-4" class="col-sm-3 control-label">Số năm còn lại:</label>
								<div class="col-sm-9">
									<input name="namsudungconlai" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai">
								</div>								
								<input name="nguyengiamoi" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai">
								<input name="giatriconlaimoi	" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai">
							</div>							
							<div >
								<h4 class="col-sm-10"> Tăng nguyên giá tài sản </h4>								
								<label for="field-4" class="col-sm-3 control-label">Tổng tăng:</label>
								<div class="col-sm-9">
									<input name="sotien" type="text" readonly class="form-control" data-mask="fdecimal" id="sotien">
								</div>																
								<label for="field-4" class="col-sm-3 control-label">Nguồn ngân sách:</label>
								<div class="col-sm-9">
									<input name="ngansach" type="text" class="form-control" data-mask="fdecimal" id="ngansach">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-9">
									<input name="nguonkhac" type="text" class="form-control" data-mask="fdecimal" id="nguonkhac">
								</div>
							</div>
							<div id="tangsl">	
								<h4 class="col-sm-10"> Thông tin về diện tích, số lượng </h4>
								<label for="field-4" class="col-sm-3 control-label">Diện tích cũ:</label>
								<div class="col-sm-3">
									<input name="dientichtruoc" type="text" class="form-control" data-mask="fdecimal" id="dientichtruoc">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Diện tích tăng:</label>
								<div class="col-sm-3">
									<input name="soluong" type="text" class="form-control" data-mask="fdecimal" id="soluong">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Tổng diện tích cũ:</label>
								<div class="col-sm-3">
									<input name="tongdientichtruoc" type="text" class="form-control" data-mask="fdecimal" id="tongdientichtruoc">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Tổng diện tích tăng:</label>
								<div class="col-sm-3">
									<input name="tongdientich" type="text" class="form-control" data-mask="fdecimal" id="tongdientich">
								</div>
							</div>
								<input name="sonamsd" type="text" style="display:none" class="form-control" id="sonamsd">	
								<input name="chitiethinhthai" type="text" style="display:none" class="form-control" id="chitiethinhthai">	
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" onclick="capnhat()" name="capnhatchinhsua" class="btn btn-blue" value = "Cập nhật">
							</div>
		</form>
      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <div class="modal fade" id="addBookDialogg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Thêm mới ghi giảm tài sản</h4>
      </div>
      <div class="modal-body">        
		<form role='form' method='POST' action = 'NhapTang.php' class='form-horizontal form-groups-bordered'>							
							<div class="form-group">							
								<label class="col-sm-3 control-label">Số ghi tài sản:</label>
								<div class="col-sm-9">
									<input name="bookId1" type="text" class="form-control" id="bookId1">									
								</div>							
								<label for="field-3" class="col-sm-3 control-label">Ngày ghi giảm:</label>
								<div class="col-sm-9">
									<input data-inputmask="'alias': 'date'" name="ngaytanggiam1" type="text" class="form-control" id="ngaytanggiam1" value = "">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Lý do ghi giảm:</label>
								<div class="col-sm-9">
									<input name="lydotanggiam1" type="text" class="form-control" id="field-3">
								</div>								
							<div id="thongtints1">
								<h4 class="col-sm-11"> Thông tin trước khi giảm </h4>
								<label for="field-4" class="col-sm-3 control-label">Nguyên giá:</label>
								<div class="col-sm-9">
									<input name="nguyengiatruoc1" type="text" class="form-control" data-mask="fdecimal" id="nguyengiatruoc1">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">GT còn lại:</label>
								<div class="col-sm-9">
									<input name="giatriconlaitruoc1" type="text" class="form-control" data-mask="fdecimal" id="giatriconlaitruoc1">
								</div>									
								<label for="field-4" class="col-sm-3 control-label">Số năm còn lại:</label>
								<div class="col-sm-9">
									<input name="namsudungconlai1" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai">
								</div>								
								<input name="nguyengiamoi1" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai1">
								<input name="giatriconlaimoi1" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="namsudungconlai1">
							</div>							
							<div >
								<h4 class="col-sm-11"> Giảm nguyên giá tài sản </h4>								
								<label for="field-4" class="col-sm-3 control-label">Tổng giảm:</label>
								<div class="col-sm-9">
									<input name="sotien1" type="text" readonly class="form-control" data-mask="fdecimal" id="sotien1">
								</div>																
								<label for="field-4" class="col-sm-3 control-label">Nguồn ngân sách:</label>
								<div class="col-sm-9">
									<input name="ngansach1" type="text" class="form-control" data-mask="fdecimal" id="ngansach1">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-9">
									<input name="nguonkhac1" type="text" class="form-control" data-mask="fdecimal" id="nguonkhac1">
								</div>
							</div >
							<div id="tangsl1">	
								<h4 class="col-sm-11"> Thông tin về diện tích, số lượng </h4>
								<label for="field-4" class="col-sm-3 control-label">Diện tích cũ:</label>
								<div class="col-sm-3">
									<input name="dientichtruoc1" type="text" class="form-control" data-mask="fdecimal" id="dientichtruoc1">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Diện tích giảm:</label>
								<div class="col-sm-3">
									<input name="soluong1" type="text" class="form-control" data-mask="fdecimal" id="soluong1">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Tổng diện tích cũ:</label>
								<div class="col-sm-3">
									<input name="tongdientichtruoc1" type="text" class="form-control" data-mask="fdecimal" id="tongdientichtruoc1">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Tổng diện tích giảm:</label>
								<div class="col-sm-3">
									<input name="tongdientich1" type="text" class="form-control" data-mask="fdecimal" id="tongdientich1">
								</div>
							</div>
								<input name="sonamsd1" type="text" style="display:none" class="form-control" id="sonamsd1">	
								<input name="chitiethinhthai1" type="text" style="display:none" class="form-control" id="chitiethinhthai1">	
							</div>	
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" onclick="capnhatgiam()" name="capnhatchinhsuag" class="btn btn-blue" value = "Cập nhật">
							</div>
						</form>
      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>