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
		<a href='Nhapxuatdung.php' class='btn btn-success'>
			Xuất dùng
		</a>
		<a href='Nhapbaohong.php' class='btn btn-success'>
			Báo hỏng
		</a>
	
		<div class="outer">
	<div class="inner">
<?php 	
	
	if (isset($_POST['chinhsuats']))
	{			
		$TTQLCCcs=$_POST["bookId"];
		$mataisancs=$_POST["mataisancs"];		
		$tenchitietcs=$_POST["tenchitietcs"];
		$tentaisancs="";$chitiethinhthaics="";$ttsxcs=0;
		$ngaynhapcs = doingay($_POST['ngaynhapcs']);
		$ngaysudungcs = doingay($_POST['ngaysudungcs']);
		$namsanxuatcs = $_POST['namsanxuatcs'];
		$NUOCSXcs = $_POST['NUOCSXcs'];
		$noidungcs = $_POST['noidungcs'];
		$DVTcs = $_POST['DVTcs'];
		$DTKVcs = kieudouble($_POST['DTKVcs']);
		$dongiacs = kieudouble($_POST['dongiacs']);
		$thanhtiencs =kieudouble($_POST['thanhtiencs']);
		$GCTScs = $_POST['GCTScs'];		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '".$mataisancs."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisancs=$row[0];
			$chitiethinhthaics=$row[1];
			$ttsxcs = $row[2];			
		}
		$sql="Update tblqlcc set mataisan='$mataisancs',tentaisan='$tentaisancs',tenchitiet='$tenchitietcs',ngaynhap='$ngaynhapcs',namsanxuat=$namsanxuatcs,NUOCSX='$NUOCSXcs'";
		$sql = $sql .",ngaysudung='$ngaysudungcs',noidung='$noidungcs',DVT='$DVTcs',DTKV=$DTKVcs,dongia=$dongiacs,thanhtien=$thanhtiencs,chitiethinhthai='$chitiethinhthaics',GCTS='$GCTScs',sothutu=$ttsxcs";		
		$sql = $sql ." Where TTQLcc = ".$TTQLCCcs;			
		$kq=mysqli_query($con,$sql);	
	}	        	
?>
<?php 	
	//
	$ab = $ma[0];
	if (isset($_POST['capnhatts']))
	{			
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);
		$namsanxuat = $_POST['namsanxuat'];
		$NUOCSX = $_POST['NUOCSX'];
		$noidung = $_POST['noidung'];
		$DVT = $_POST['DVT'];
		$DTKV = kieudouble($_POST['DTKV']);
		$dongia = kieudouble($_POST['dongia']);
		$thanhtien = kieudouble($_POST['thanhtien']);
		$GCTS = $_POST['GCTS'];		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];			
		}
		$sql="INSERT INTO tblqlcc(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,NUOCSX,ngaysudung,noidung,DVT,DTKV,dongia,thanhtien,chitiethinhthai,GCTS,sothutu,XOA,madonvi,xemt,xemh)";
		$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$namsanxuat','$NUOCSX','$ngaysudung','$noidung','$DVT',$DTKV,$dongia,$thanhtien,'$chitiethinhthai','$GCTS',$ttsx,'K','$ab','Chưa xem','Chưa xem')";					
		$kq=mysqli_query($con,$sql);	
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
			$sql="INSERT INTO tblqlcc(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,NUOCSX,ngaysudung,noidung,DVT,DTKV,dongia,thanhtien,chitiethinhthai,GCTS,sothutu,XOA,madonvi,xem)".
			" Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$namsanxuat','$NUOCSX','$ngaysudung','$noidung','$DVT',$DTKV,$dongia,$thanhtien,'$chitiethinhthai','$GCTS',$ttsx,'K','$ab','Chưa xem')";			
			$kq=mysqli_query($con,$sql);	
		}
	}	 	
?>	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên chi tiết</th>
					<th>Ngày nhập</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
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
//

$sql = "select TTQLcc,mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,NUOCSX,ngaysudung,noidung,DVT,DTKV,dongia,thanhtien,chitiethinhthai,GCTS from tblqlcc where madonvi = '".$ab."'";
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
				echo"<td>".dinhdangso($row[10])."</td>";
				echo"<td>".dinhdangso($row[11])."</td>";
				echo"<td>".dinhdangso($row[12])."</td>";
                echo"<td>
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
							Sửa</a>				
						<a href=\"xoa.php?id=$xoa\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>							
							Xóa
						</a>						
						<a data-id='$tatca' title='Tạo dụng cụ tương tự' class='open-AddBookDialog1 btn btn-green ' href='#addBookDialog1'>
							Copy</a>						
					</td>";
            echo"</tr>";
     }}         
 ?> 
			</tbody>
		</table>
			</div>
</div>
		
		<br />		
	</div>
</div>
<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Nhập thông tin công cụ dụng cụ</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role='form' method='POST' action = 'NhapQLCC.php' class='form-horizontal form-groups-bordered'>						
							<div class="form-group">						
								<label class="col-sm-3 control-label">Tên công cụ:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where mataisanqd32 Like 'CC%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='mataisan' class='form-control' id='mataisan'>";
									echo"<option selected='selected' value=''>Chọn tên công cụ</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label for="field-3" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-8">
									<input name="tenchitiet" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" class="form-control" id="field-3">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Năm sản xuất:</label>
								<div class="col-sm-8">									
									<input data-mask="decimal"  name='namsanxuat' class='form-control' id='namsanxuat' >
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nước sản xuất:</label>
								<div class="col-sm-8">									
									<select name='NUOCSX' class='form-control'>							
									<option selected='selected' value='Abkhazia'>Abkhazia</option>
									<option selected='selected' value='Afghanistan'>Afghanistan</option>
									<option selected='selected' value='Ai Cập'>Ai Cập</option>
									<option selected='selected' value='Albania'>Albania</option>
									<option selected='selected' value='Algérie'>Algérie</option>
									<option selected='selected' value='Andorra'>Andorra</option>
									<option selected='selected' value='Angola'>Angola</option>
									<option selected='selected' value='Anh'>Anh</option>
									<option selected='selected' value='Áo'>Áo</option>
									<option selected='selected' value='Ả Rập Saudi'>Ả Rập Saudi</option>
									<option selected='selected' value='Argentina'>Argentina</option>
									<option selected='selected' value='Armenia'>Armenia</option>
									<option selected='selected' value='Azawad'>Azawad</option>
									<option selected='selected' value='Azerbaijan'>Azerbaijan</option>
									<option selected='selected' value='Ấn Độ'>Ấn Độ</option>
									<option selected='selected' value='Bahamas'>Bahamas</option>
									<option selected='selected' value='Bahrain'>Bahrain</option>
									<option selected='selected' value='Bangladesh'>Bangladesh</option>
									<option selected='selected' value='Barbados'>Barbados</option>
									<option selected='selected' value='Bắc Síp'>Bắc Síp</option>
									<option selected='selected' value='Belarus'>Belarus</option>
									<option selected='selected' value='Belize'>Belize</option>
									<option selected='selected' value='Benin'>Benin</option>
									<option selected='selected' value='Bhutan'>Bhutan</option>
									<option selected='selected' value='Bỉ'>Bỉ</option>
									<option selected='selected' value='Bolivia'>Bolivia</option>
									<option selected='selected' value='Botswana'>Botswana</option>
									<option selected='selected' value='Bồ Đào Nha'>Bồ Đào Nha</option>
									<option selected='selected' value='Bờ biển ngà'>Bờ biển ngà</option>
									<option selected='selected' value='Brazil'>Brazil</option>
									<option selected='selected' value='Brunei'>Brunei</option>
									<option selected='selected' value='Bulgaria'>Bulgaria</option>
									<option selected='selected' value='Burundi'>Burundi</option>
									<option selected='selected' value='Cabo Verde'>Cabo Verde</option>
									<option selected='selected' value='Các tiểu vương quốc Ả rập thống nhất'>Các tiểu vương quốc Ả rập thống nhất</option>
									<option selected='selected' value='Cameroon'>Cameroon</option>
									<option selected='selected' value='Campuchia'>Campuchia</option>
									<option selected='selected' value='Canada'>Canada</option>
									<option selected='selected' value='Chile'>Chile</option>
									<option selected='selected' value='Colombia'>Colombia</option>
									<option selected='selected' value='Comoros'>Comoros</option>
									<option selected='selected' value='Congo'>Congo</option>
									<option selected='selected' value='Costa Rica'>Costa Rica</option>
									<option selected='selected' value='Croatia'>Croatia</option>
									<option selected='selected' value='Cuba'>Cuba</option>
									<option selected='selected' value='Djibouti'>Djibouti</option>
									<option selected='selected' value='Dominica'>Dominica</option>
									<option selected='selected' value='Dominicana'>Dominicana</option>
									<option selected='selected' value='Đan Mạch'>Đan Mạch</option>
									<option selected='selected' value='Đông Timor'>Đông Timor</option>
									<option selected='selected' value='Đức'>Đức</option>
									<option selected='selected' value='Ecuador'>Ecuador</option>
									<option selected='selected' value='El Salvador'>El Salvador</option>
									<option selected='selected' value='Eritrea'>Eritrea</option>
									<option selected='selected' value='Estonia'>Estonia</option>
									<option selected='selected' value='Ethiopia'>Ethiopia</option>
									<option selected='selected' value='Fiji'>Fiji</option>
									<option selected='selected' value='Gabon'>Gabon</option>
									<option selected='selected' value='Gambia'>Gambia</option>
									<option selected='selected' value='Ghana'>Ghana</option>
									<option selected='selected' value='Grenada'>Grenada</option>
									<option selected='selected' value='Gruzia'>Gruzia</option>
									<option selected='selected' value='Guatemala'>Guatemala</option>
									<option selected='selected' value='Guinea-Bissau'>Guinea-Bissau</option>
									<option selected='selected' value='Guinea Xích Đạo'>Guinea Xích Đạo</option>
									<option selected='selected' value='Guinea'>Guinea</option>
									<option selected='selected' value='Guyana'>Guyana</option>
									<option selected='selected' value='Haiti'>Haiti</option>
									<option selected='selected' value='Hà Lan'>Hà Lan</option>
									<option selected='selected' value='Hàn quốc'>Hàn quốc</option>
									<option selected='selected' value='Mỹ'>Mỹ</option>
									<option selected='selected' value='Hồng Kông'>Hồng Kông</option>
									<option selected='selected' value='Honduras'>Honduras</option>
									<option selected='selected' value='Hungary'>Hungary</option>
									<option selected='selected' value='Hy Lạp'>Hy Lạp</option>
									<option selected='selected' value='Iceland'>Iceland</option>
									<option selected='selected' value='Indonesia'>Indonesia</option>
									<option selected='selected' value='Iran'>Iran</option>
									<option selected='selected' value='Iraq'>Iraq</option>
									<option selected='selected' value='Israel'>Israel</option>
									<option selected='selected' value='Hamaica'>Hamaica</option>
									<option selected='selected' value='Hashemite Jordan'>Hashemite Jordan</option>
									<option selected='selected' value='Kazakhstan'>Kazakhstan</option>
									<option selected='selected' value='Kenya'>Kenya</option>
									<option selected='selected' value='Kiribati'>Kiribati</option>
									<option selected='selected' value='Kosovo'>Kosovo</option>
									<option selected='selected' value='Kuwait'>Kuwait</option>
									<option selected='selected' value='Síp'>Síp</option>
									<option selected='selected' value='Kyrgyzstan'>Kyrgyzstan</option>
									<option selected='selected' value='Lào'>Lào</option>
									<option selected='selected' value='Latvia'>Latvia</option>
									<option selected='selected' value='Lesotho'>Lesotho</option>
									<option selected='selected' value='Liban'>Liban</option>
									<option selected='selected' value='Liberia'>Liberia</option>
									<option selected='selected' value='Libya'>Libya</option>
									<option selected='selected' value='Liechtenstein'>Liechtenstein</option>
									<option selected='selected' value='Litva'>Litva</option>
									<option selected='selected' value='Luxembourg'>Luxembourg</option>
									<option selected='selected' value='Macedonia'>Macedonia</option>
									<option selected='selected' value='Madagascar'>Madagascar</option>
									<option selected='selected' value='Malawi'>Malawi</option>
									<option selected='selected' value='Malaysia'>Malaysia</option>
									<option selected='selected' value='Maldives'>Maldives</option>
									<option selected='selected' value='Mali'>Mali</option>
									<option selected='selected' value='Malta'>Malta</option>
									<option selected='selected' value='Maroc'>Maroc</option>
									<option selected='selected' value='Marshall'>Marshall</option>
									<option selected='selected' value='Mauritanie'>Mauritanie</option>
									<option selected='selected' value='Mauritius'>Mauritius</option>
									<option selected='selected' value='Mexico'>Mexico</option>
									<option selected='selected' value='Micronesia'>Micronesia</option>
									<option selected='selected' value='Moldova'>Moldova</option>
									<option selected='selected' value='Monaco'>Monaco</option>
									<option selected='selected' value='Montenegro'>Montenegro</option>
									<option selected='selected' value='Mozambique'>Mozambique</option>
									<option selected='selected' value='Myanmar'>Myanmar</option>
									<option selected='selected' value='Nagorno-Karabakh'>Nagorno-Karabakh</option>
									<option selected='selected' value='Namibia'>Namibia</option>
									<option selected='selected' value='Nam Ossetia'>Nam Ossetia</option>
									<option selected='selected' value='Nam Sudan'>Nam Sudan</option>
									<option selected='selected' value='Nam Phi'>Nam Phi</option>
									<option selected='selected' value='Nauru'>Nauru</option>
									<option selected='selected' value='Na Uy'>Na Uy</option>
									<option selected='selected' value='Nepal'>Nepal</option>
									<option selected='selected' value='New Realand'>New Realand</option>
									<option selected='selected' value='Nicaragua'>Nicaragua</option>
									<option selected='selected' value='Niger'>Niger</option>
									<option selected='selected' value='Nigeria'>Nigeria</option>
									<option selected='selected' value='Nga'>Nga</option>
									<option selected='selected' value='Nhật bản'>Nhật bản</option>
									<option selected='selected' value='Oman'>Oman</option>
									<option selected='selected' value='Pakistan'>Pakistan</option>
									<option selected='selected' value='Palau'>Palau</option>
									<option selected='selected' value='Palestine'>Palestine</option>
									<option selected='selected' value='Panama'>Panama</option>
									<option selected='selected' value='Papua New Guinea'>Papua New Guinea</option>
									<option selected='selected' value='Paraguay'>Paraguay</option>
									<option selected='selected' value='Peru'>Peru</option>
									<option selected='selected' value='Pháp'>Pháp</option>
									<option selected='selected' value='Phần Lan'>Phần Lan</option>
									<option selected='selected' value='Philippines'>Philippines</option>
									<option selected='selected' value='Qatar'>Qatar</option>
									<option selected='selected' value='Rwanda'>Rwanda</option>
									<option selected='selected' value='Saint Kitts và Nevis'>Saint Kitts và Nevis</option>
									<option selected='selected' value='Santa Luxia'>Santa Luxia</option>
									<option selected='selected' value='Samoa'>Samoa</option>
									<option selected='selected' value='San Marino'>San Marino</option>
									<option selected='selected' value='Scotland'>Scotland</option>
									<option selected='selected' value='Séc'>Séc</option>
									<option selected='selected' value='Sénégal'>Sénégal</option>
									<option selected='selected' value='Serbia'>Serbia</option>
									<option selected='selected' value='Seychelles'>Seychelles</option>
									<option selected='selected' value='Sierra Leone'>Sierra Leone</option>
									<option selected='selected' value='Singapore'>Singapore</option>
									<option selected='selected' value='Slovakia'>Slovakia</option>
									<option selected='selected' value='Slovenia'>Slovenia</option>
									<option selected='selected' value='Solomon'>Solomon</option>
									<option selected='selected' value='Somaliland'>Somaliland</option>
									<option selected='selected' value='Sri Lanka'>Sri Lanka</option>
									<option selected='selected' value='Sudan'>Sudan</option>
									<option selected='selected' value='Suriname'>Suriname</option>
									<option selected='selected' value='Swaziland'>Swaziland</option>
									<option selected='selected' value='Syria'>Syria</option>
									<option selected='selected' value='Tajikistan'>Tajikistan</option>
									<option selected='selected' value='Tanzania'>Tanzania</option>
									<option selected='selected' value='Tây Ban Nha'>Tây Ban Nha</option>
									<option selected='selected' value='Sarauy'>Sarauy</option>
									<option selected='selected' value='Sát'>Sát</option>
									<option selected='selected' value='Thái Lan'>Thái Lan</option>
									<option selected='selected' value='Thổ Nhĩ Kỳ'>Thổ Nhĩ Kỳ</option>
									<option selected='selected' value='Thụy Điển'>Thụy Điển</option>
									<option selected='selected' value='Thụy Sĩ'>Thụy Sĩ</option>
									<option selected='selected' value='Togo'>Togo</option>
									<option selected='selected' value='Tonga'>Tonga</option>
									<option selected='selected' value='Moldova Transdniestria'>Moldova Transdniestria</option>
									<option selected='selected' value='Triều Tiên'>Triều Tiên</option>
									<option selected='selected' value='Trinidad và Tobago'>Trinidad và Tobago</option>
									<option selected='selected' value='Đài Loan'>Đài Loan</option>
									<option selected='selected' value='Trung Hoa'>Trung Hoa</option>
									<option selected='selected' value='Trung Phi'>Trung Phi</option>
									<option selected='selected' value='Tunisia'>Tunisia</option>
									<option selected='selected' value='Turkmenistan'>Turkmenistan</option>
									<option selected='selected' value='Tuvalu'>Tuvalu</option>
									<option selected='selected' value='Úc'>Úc</option>
									<option selected='selected' value='Uganda'>Uganda</option>
									<option selected='selected' value='Uruguay'>Uruguay</option>
									<option selected='selected' value='Uzbekistan'>Uzbekistan</option>
									<option selected='selected' value='Vanuatu'>Vanuatu</option>
									<option selected='selected' value='Vatican'>Vatican</option>
									<option selected='selected' value='Venezuela'>Venezuela</option>
									<option selected='selected' value='Việt Nam'>Việt Nam</option>
									<option selected='selected' value='Wales'>Wales</option>
									<option selected='selected' value='Ý'>Ý</option>
									<option selected='selected' value='Yemen'>Yemen</option>
									<option selected='selected' value='Zambia'>Zambia</option>
									<option selected='selected' value='Zimbabwe'>Zimbabwe</option>
									<option selected='selected' value='Liên doanh, liên kết'>Liên doanh, liên kết</option>
									<option selected='selected' value=''>Chọn nước sản xuất</option>
									</select>
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php								
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8' class='col-sm-5'>";
									echo"<select name='noidung' class='form-control' id='noidung'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>									
								<label for="field-4" class="col-sm-3 control-label">Đơn vị tính:</label>
								<div class="col-sm-8">
									<input name="DVT" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Số lượng:</label>
								<div class="col-sm-8">
									<input name="DTKV" type="text" class="form-control" id="DTKV">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Đơn giá:</label>
								<div class="col-sm-8">
									<input name="dongia" type="text" class="form-control" data-mask="fdecimal" id="dongia">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Thành tiền:</label>
								<div class="col-sm-8">
									<input name="thanhtien" type="text" class="form-control" data-mask="fdecimal" id="thanhtien">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Diễn giải:</label>
								<div class="col-sm-8">
									<input name="GCTS" type="text" class="form-control" id="GCTS">
								</div>								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatts" onclick="getFocusmoi()" class="btn btn-blue" value = "Cập nhật">
							</div>
						</form>						
				</div>
			</div>
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
									<input name="socopy" type="text" class="form-control">									
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="copy" class="btn btn-blue" value = "Tạo">
							</div>	
						<div class="form-group" style ="display:none">
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
								<label for="field-4" class="col-sm-3 control-label">Diễn giải:</label>
								<div class="col-sm-8">
									<input name="GCTSc" type="text" class="form-control" id="GCTSc">
								</div>
						</div>							
						</form>						
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="addBookDialog">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Chỉnh sửa thông tin công cụ</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role='form' method='POST' action = 'NhapQLCC.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Số ghi công cụ:</label>
								<div class="col-sm-8">
										<input name="bookId" type="text" class="form-control" id="bookId" value = "x">									
								</div>
								<label class="col-sm-3 control-label">Tên công cụ:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where mataisanqd32 Like 'CC%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
									echo"<select name='mataisancs' class='form-control' id='mataisancs'>";
									echo"<option selected='selected' value=''>Chọn tên công cụ</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label for="field-3" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-8">
									<input name="tenchitietcs" type="text" class="form-control" id="tenchitietcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaynhapcs" type="text" class="form-control" id="ngaynhapcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaysudungcs" type="text" class="form-control" id="ngaysudungcs">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Năm sản xuất:</label>
								<div class="col-sm-8">									
									<input data-mask="decimal"  name='namsanxuatcs' class='form-control' id='namsanxuatcs' >
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nước sản xuất:</label>
								<div class="col-sm-8">									
									<select name='NUOCSXcs' class='form-control' id="NUOCSXcs">							
									<option selected='selected' value='Abkhazia'>Abkhazia</option>
									<option selected='selected' value='Afghanistan'>Afghanistan</option>
									<option selected='selected' value='Ai Cập'>Ai Cập</option>
									<option selected='selected' value='Albania'>Albania</option>
									<option selected='selected' value='Algérie'>Algérie</option>
									<option selected='selected' value='Andorra'>Andorra</option>
									<option selected='selected' value='Angola'>Angola</option>
									<option selected='selected' value='Anh'>Anh</option>
									<option selected='selected' value='Áo'>Áo</option>
									<option selected='selected' value='Ả Rập Saudi'>Ả Rập Saudi</option>
									<option selected='selected' value='Argentina'>Argentina</option>
									<option selected='selected' value='Armenia'>Armenia</option>
									<option selected='selected' value='Azawad'>Azawad</option>
									<option selected='selected' value='Azerbaijan'>Azerbaijan</option>
									<option selected='selected' value='Ấn Độ'>Ấn Độ</option>
									<option selected='selected' value='Bahamas'>Bahamas</option>
									<option selected='selected' value='Bahrain'>Bahrain</option>
									<option selected='selected' value='Bangladesh'>Bangladesh</option>
									<option selected='selected' value='Barbados'>Barbados</option>
									<option selected='selected' value='Bắc Síp'>Bắc Síp</option>
									<option selected='selected' value='Belarus'>Belarus</option>
									<option selected='selected' value='Belize'>Belize</option>
									<option selected='selected' value='Benin'>Benin</option>
									<option selected='selected' value='Bhutan'>Bhutan</option>
									<option selected='selected' value='Bỉ'>Bỉ</option>
									<option selected='selected' value='Bolivia'>Bolivia</option>
									<option selected='selected' value='Botswana'>Botswana</option>
									<option selected='selected' value='Bồ Đào Nha'>Bồ Đào Nha</option>
									<option selected='selected' value='Bờ biển ngà'>Bờ biển ngà</option>
									<option selected='selected' value='Brazil'>Brazil</option>
									<option selected='selected' value='Brunei'>Brunei</option>
									<option selected='selected' value='Bulgaria'>Bulgaria</option>
									<option selected='selected' value='Burundi'>Burundi</option>
									<option selected='selected' value='Cabo Verde'>Cabo Verde</option>
									<option selected='selected' value='Các tiểu vương quốc Ả rập thống nhất'>Các tiểu vương quốc Ả rập thống nhất</option>
									<option selected='selected' value='Cameroon'>Cameroon</option>
									<option selected='selected' value='Campuchia'>Campuchia</option>
									<option selected='selected' value='Canada'>Canada</option>
									<option selected='selected' value='Chile'>Chile</option>
									<option selected='selected' value='Colombia'>Colombia</option>
									<option selected='selected' value='Comoros'>Comoros</option>
									<option selected='selected' value='Congo'>Congo</option>
									<option selected='selected' value='Costa Rica'>Costa Rica</option>
									<option selected='selected' value='Croatia'>Croatia</option>
									<option selected='selected' value='Cuba'>Cuba</option>
									<option selected='selected' value='Djibouti'>Djibouti</option>
									<option selected='selected' value='Dominica'>Dominica</option>
									<option selected='selected' value='Dominicana'>Dominicana</option>
									<option selected='selected' value='Đan Mạch'>Đan Mạch</option>
									<option selected='selected' value='Đông Timor'>Đông Timor</option>
									<option selected='selected' value='Đức'>Đức</option>
									<option selected='selected' value='Ecuador'>Ecuador</option>
									<option selected='selected' value='El Salvador'>El Salvador</option>
									<option selected='selected' value='Eritrea'>Eritrea</option>
									<option selected='selected' value='Estonia'>Estonia</option>
									<option selected='selected' value='Ethiopia'>Ethiopia</option>
									<option selected='selected' value='Fiji'>Fiji</option>
									<option selected='selected' value='Gabon'>Gabon</option>
									<option selected='selected' value='Gambia'>Gambia</option>
									<option selected='selected' value='Ghana'>Ghana</option>
									<option selected='selected' value='Grenada'>Grenada</option>
									<option selected='selected' value='Gruzia'>Gruzia</option>
									<option selected='selected' value='Guatemala'>Guatemala</option>
									<option selected='selected' value='Guinea-Bissau'>Guinea-Bissau</option>
									<option selected='selected' value='Guinea Xích Đạo'>Guinea Xích Đạo</option>
									<option selected='selected' value='Guinea'>Guinea</option>
									<option selected='selected' value='Guyana'>Guyana</option>
									<option selected='selected' value='Haiti'>Haiti</option>
									<option selected='selected' value='Hà Lan'>Hà Lan</option>
									<option selected='selected' value='Hàn quốc'>Hàn quốc</option>
									<option selected='selected' value='Mỹ'>Mỹ</option>
									<option selected='selected' value='Hồng Kông'>Hồng Kông</option>
									<option selected='selected' value='Honduras'>Honduras</option>
									<option selected='selected' value='Hungary'>Hungary</option>
									<option selected='selected' value='Hy Lạp'>Hy Lạp</option>
									<option selected='selected' value='Iceland'>Iceland</option>
									<option selected='selected' value='Indonesia'>Indonesia</option>
									<option selected='selected' value='Iran'>Iran</option>
									<option selected='selected' value='Iraq'>Iraq</option>
									<option selected='selected' value='Israel'>Israel</option>
									<option selected='selected' value='Hamaica'>Hamaica</option>
									<option selected='selected' value='Hashemite Jordan'>Hashemite Jordan</option>
									<option selected='selected' value='Kazakhstan'>Kazakhstan</option>
									<option selected='selected' value='Kenya'>Kenya</option>
									<option selected='selected' value='Kiribati'>Kiribati</option>
									<option selected='selected' value='Kosovo'>Kosovo</option>
									<option selected='selected' value='Kuwait'>Kuwait</option>
									<option selected='selected' value='Síp'>Síp</option>
									<option selected='selected' value='Kyrgyzstan'>Kyrgyzstan</option>
									<option selected='selected' value='Lào'>Lào</option>
									<option selected='selected' value='Latvia'>Latvia</option>
									<option selected='selected' value='Lesotho'>Lesotho</option>
									<option selected='selected' value='Liban'>Liban</option>
									<option selected='selected' value='Liberia'>Liberia</option>
									<option selected='selected' value='Libya'>Libya</option>
									<option selected='selected' value='Liechtenstein'>Liechtenstein</option>
									<option selected='selected' value='Litva'>Litva</option>
									<option selected='selected' value='Luxembourg'>Luxembourg</option>
									<option selected='selected' value='Macedonia'>Macedonia</option>
									<option selected='selected' value='Madagascar'>Madagascar</option>
									<option selected='selected' value='Malawi'>Malawi</option>
									<option selected='selected' value='Malaysia'>Malaysia</option>
									<option selected='selected' value='Maldives'>Maldives</option>
									<option selected='selected' value='Mali'>Mali</option>
									<option selected='selected' value='Malta'>Malta</option>
									<option selected='selected' value='Maroc'>Maroc</option>
									<option selected='selected' value='Marshall'>Marshall</option>
									<option selected='selected' value='Mauritanie'>Mauritanie</option>
									<option selected='selected' value='Mauritius'>Mauritius</option>
									<option selected='selected' value='Mexico'>Mexico</option>
									<option selected='selected' value='Micronesia'>Micronesia</option>
									<option selected='selected' value='Moldova'>Moldova</option>
									<option selected='selected' value='Monaco'>Monaco</option>
									<option selected='selected' value='Montenegro'>Montenegro</option>
									<option selected='selected' value='Mozambique'>Mozambique</option>
									<option selected='selected' value='Myanmar'>Myanmar</option>
									<option selected='selected' value='Nagorno-Karabakh'>Nagorno-Karabakh</option>
									<option selected='selected' value='Namibia'>Namibia</option>
									<option selected='selected' value='Nam Ossetia'>Nam Ossetia</option>
									<option selected='selected' value='Nam Sudan'>Nam Sudan</option>
									<option selected='selected' value='Nam Phi'>Nam Phi</option>
									<option selected='selected' value='Nauru'>Nauru</option>
									<option selected='selected' value='Na Uy'>Na Uy</option>
									<option selected='selected' value='Nepal'>Nepal</option>
									<option selected='selected' value='New Realand'>New Realand</option>
									<option selected='selected' value='Nicaragua'>Nicaragua</option>
									<option selected='selected' value='Niger'>Niger</option>
									<option selected='selected' value='Nigeria'>Nigeria</option>
									<option selected='selected' value='Nga'>Nga</option>
									<option selected='selected' value='Nhật bản'>Nhật bản</option>
									<option selected='selected' value='Oman'>Oman</option>
									<option selected='selected' value='Pakistan'>Pakistan</option>
									<option selected='selected' value='Palau'>Palau</option>
									<option selected='selected' value='Palestine'>Palestine</option>
									<option selected='selected' value='Panama'>Panama</option>
									<option selected='selected' value='Papua New Guinea'>Papua New Guinea</option>
									<option selected='selected' value='Paraguay'>Paraguay</option>
									<option selected='selected' value='Peru'>Peru</option>
									<option selected='selected' value='Pháp'>Pháp</option>
									<option selected='selected' value='Phần Lan'>Phần Lan</option>
									<option selected='selected' value='Philippines'>Philippines</option>
									<option selected='selected' value='Qatar'>Qatar</option>
									<option selected='selected' value='Rwanda'>Rwanda</option>
									<option selected='selected' value='Saint Kitts và Nevis'>Saint Kitts và Nevis</option>
									<option selected='selected' value='Santa Luxia'>Santa Luxia</option>
									<option selected='selected' value='Samoa'>Samoa</option>
									<option selected='selected' value='San Marino'>San Marino</option>
									<option selected='selected' value='Scotland'>Scotland</option>
									<option selected='selected' value='Séc'>Séc</option>
									<option selected='selected' value='Sénégal'>Sénégal</option>
									<option selected='selected' value='Serbia'>Serbia</option>
									<option selected='selected' value='Seychelles'>Seychelles</option>
									<option selected='selected' value='Sierra Leone'>Sierra Leone</option>
									<option selected='selected' value='Singapore'>Singapore</option>
									<option selected='selected' value='Slovakia'>Slovakia</option>
									<option selected='selected' value='Slovenia'>Slovenia</option>
									<option selected='selected' value='Solomon'>Solomon</option>
									<option selected='selected' value='Somaliland'>Somaliland</option>
									<option selected='selected' value='Sri Lanka'>Sri Lanka</option>
									<option selected='selected' value='Sudan'>Sudan</option>
									<option selected='selected' value='Suriname'>Suriname</option>
									<option selected='selected' value='Swaziland'>Swaziland</option>
									<option selected='selected' value='Syria'>Syria</option>
									<option selected='selected' value='Tajikistan'>Tajikistan</option>
									<option selected='selected' value='Tanzania'>Tanzania</option>
									<option selected='selected' value='Tây Ban Nha'>Tây Ban Nha</option>
									<option selected='selected' value='Sarauy'>Sarauy</option>
									<option selected='selected' value='Sát'>Sát</option>
									<option selected='selected' value='Thái Lan'>Thái Lan</option>
									<option selected='selected' value='Thổ Nhĩ Kỳ'>Thổ Nhĩ Kỳ</option>
									<option selected='selected' value='Thụy Điển'>Thụy Điển</option>
									<option selected='selected' value='Thụy Sĩ'>Thụy Sĩ</option>
									<option selected='selected' value='Togo'>Togo</option>
									<option selected='selected' value='Tonga'>Tonga</option>
									<option selected='selected' value='Moldova Transdniestria'>Moldova Transdniestria</option>
									<option selected='selected' value='Triều Tiên'>Triều Tiên</option>
									<option selected='selected' value='Trinidad và Tobago'>Trinidad và Tobago</option>
									<option selected='selected' value='Đài Loan'>Đài Loan</option>
									<option selected='selected' value='Trung Hoa'>Trung Hoa</option>
									<option selected='selected' value='Trung Phi'>Trung Phi</option>
									<option selected='selected' value='Tunisia'>Tunisia</option>
									<option selected='selected' value='Turkmenistan'>Turkmenistan</option>
									<option selected='selected' value='Tuvalu'>Tuvalu</option>
									<option selected='selected' value='Úc'>Úc</option>
									<option selected='selected' value='Uganda'>Uganda</option>
									<option selected='selected' value='Uruguay'>Uruguay</option>
									<option selected='selected' value='Uzbekistan'>Uzbekistan</option>
									<option selected='selected' value='Vanuatu'>Vanuatu</option>
									<option selected='selected' value='Vatican'>Vatican</option>
									<option selected='selected' value='Venezuela'>Venezuela</option>
									<option selected='selected' value='Việt Nam'>Việt Nam</option>
									<option selected='selected' value='Wales'>Wales</option>
									<option selected='selected' value='Ý'>Ý</option>
									<option selected='selected' value='Yemen'>Yemen</option>
									<option selected='selected' value='Zambia'>Zambia</option>
									<option selected='selected' value='Zimbabwe'>Zimbabwe</option>
									<option selected='selected' value='Liên doanh, liên kết'>Liên doanh, liên kết</option>
									<option selected='selected' value=''>Chọn nước sản xuất</option>
									</select>
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php								
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8' class='col-sm-5'>";
									echo"<select name='noidungcs' class='form-control' id='noidungcs'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>									
								<label for="field-4" class="col-sm-3 control-label">Đơn vị tính:</label>
								<div class="col-sm-8">
									<input name="DVTcs" type="text" class="form-control" id="DVTcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Số lượng:</label>
								<div class="col-sm-8">
									<input name="DTKVcs" type="text" class="form-control" id="DTKVcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Đơn giá:</label>
								<div class="col-sm-8">
									<input name="dongiacs" type="text" class="form-control" data-mask="fdecimal" id="dongiacs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Thành tiền:</label>
								<div class="col-sm-8">
									<input name="thanhtiencs" type="text" class="form-control" data-mask="fdecimal" id="thanhtiencs">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-sm-8">
									<input name="GCTScs" type="text" class="form-control" id="GCTScs">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="chinhsuats" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật">
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
