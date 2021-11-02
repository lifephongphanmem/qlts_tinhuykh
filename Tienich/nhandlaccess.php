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
							
							<a  href="/Thoaikx/ThoaiDmDCLB.php">	<i class="entypo-book-open"></i>							
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
					</ul>
				</li>
				<li>
					<a <?php if (strlen($ma[0]) < 16)
					{
						echo "style='display:none';";
					}
				?> href="tables-main.html">
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
						<li>
							
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
						<li class="active">						
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
<!------- HEADER ---------->  
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function() {
	  $('#sua').click(function() {
	   giatri = kiemtrahschon();   
	   $("#gtts").val(giatri);
	  });
	 });
$(document).ready(function(){
    $(":input").inputmask();
});
function kiemtrahschon() {
	var sohoso = '';
	$.each($("input[name='KT']:checked"), function(){
		sohoso += ($(this).attr('id')) + '<';
	});
	return sohoso;
}
</script>
<?php 
include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
function dinhdangso($so)
{
$kq = "";
if ($so > 0)
	$kq = number_format($so);
return $kq;	
}
function ngaythang($ngay)
{
	$kq ="";
	if($ngay!="0000/00/00")			
		$kq = substr($ngay,8,2)."/". substr($ngay,5,2) . "/".substr($ngay,0,4)  ;		
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
function taisan($ten)
{
    global $con;
	$sql="select phantramhaomon,phantram32,namsudung from tbldanhsachqd32 Where mataisanqd32 Like 'TS%' and tentaiqd32 = '".$ten."'";
	$sql1=mysqli_query($con,$sql);
	$value="";
	while ($data=mysqli_fetch_row($sql1))
	{
		$value= $data[0].">".$data[1].">".$data[2];
	}
	//echo $sql;
	return $value;
}
if(isset($_POST['sua'])){
	$taisan = explode('<',$_POST['gtts']);
	$charst=str_split($_POST['gtts']);
	$countt=0;	
	foreach($charst as &$chart)
	{
		if($chart=='<')
		{
			$countt++;
		}
	}
	for($it=0;$it<$countt;$it++)
	{
		$ct = explode('>',$taisan[$it]);
		if (substr($ct[0],0,1) == "C")
		{
			$sqlcc = "Insert into tblqlcc(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,ngaysudung,noidung,dongia,thanhtien";
			$sqlcc = $sqlcc .",DTKV,NUOCSX,chitiethinhthai,DVT,madonvi,CAPH)";
			$sqlcc = $sqlcc ." Values('".$ct[0]."','".$ct[1]."','".$ct[2]."','".substr($ct[4],0,10)."','".$ct[3]."','".substr($ct[4],0,10)."','";
			$sqlcc = $sqlcc .$ct[5]."',".(kieudouble($ct[6])+kieudouble($ct[7]))/kieudouble($ct[8]).",".(kieudouble($ct[6])+kieudouble($ct[7])).",";
			$sqlcc = $sqlcc .kieudouble($ct[8]).",'".$ct[18]."','".$ct[24]."','".$ct[23]."','".$ma[0]."','".$ct[10]."')";
			$kq3=mysqli_query($con,$sqlcc);			
		}
		else
		{
			$thongtintaisan = "";$ketqua="";
			$thongtintaisan = taisan($ct[1]);
			if ($thongtintaisan != "")
				$ketqua = explode('>',$thongtintaisan);
			$sqlin = "Insert into tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,namsanxuat,ngaysudung,noidung,ngansach,nguonkhac,DTKV,DCKV,CAPH,DTXD,TDTSXD";
			$sqlin = $sqlin.",TKVDAT,SOTA,NHXE,BKSXE,CNXE,NUOCSX,CXXE,PLSD,CDSD,NGGOXE,chitiethinhthai,DVT,madonvi,phantram,phantram32,sonamsd)";
			$sqlin = $sqlin." Values('".$ct[0]."','".$ct[1]."','".$ct[2]."','".substr($ct[4],0,10)."','".$ct[3]."','".substr($ct[4],0,10)."','".$ct[5]."',".kieudouble($ct[6]).",".kieudouble($ct[7]).",";
			$sqlin = $sqlin.kieudouble($ct[8]).",'".$ct[9]."','".$ct[10]."',".kieudouble($ct[11]).",".kieudouble($ct[12]).",'".$ct[13]."',".kieudouble($ct[14]).",'".$ct[15]."','".$ct[16]."',".kieudouble($ct[17]);
			$sqlin = $sqlin.",'".$ct[18]."','".$ct[19]."','".$ct[20]."','".$ct[21]."','".$ct[22]."','".$ct[24]."','".$ct[23]."','".$ma[0]."'";
			if ($thongtintaisan != "")
				$sqlin = $sqlin.",".$ketqua[0].",".$ketqua[1].",".$ketqua[2].")";
			else
				$sqlin = $sqlin.",0,0,0)";
			//echo $sqlin;
			$kq2=mysqli_query($con,$sqlin);
			$IDTS = IDTS();				
			$sqla = "Insert into tblhaomon(ngaythang,TTQLTS,TTTS,phantram) values('".substr($ct[4],0,10)."',$IDTS,$IDTS";		
			if ($thongtintaisan != "")
				$sqla = $sqla.",".$ketqua[0].")";
			else
				$sqla = $sqla.",0)";			
			$kqa=mysqli_query($con,$sqla);	
			$sqlb = "Insert into tblhientrang(ngaythang,TTQLTS,madonvi,TTTS) values('".substr($ct[4],0,10)."',$IDTS,'$ab',$IDTS)";
			$kqb=mysqli_query($con,$sqlb);
		}		
	}
	echo '<script>alert("Đã nhận dữ liệu thành công!")</script>';
}
?>
<?php 
	if(strlen($ma[0]) < 16)
	{
		echo "<h3 style='text-align: center'>Bạn đang đăng nhập bằng tài khoản tổng hợp.</br> Vì vậy bạn không thể sử dụng chức năng này.</br> Xin lỗi vì sự bất tiện này.</br> Xin chân thành cảm ơn!</h3>";
		echo "<br />";
	}
	else
	{	
?>
<h2>Nhận dữ liệu tài sản, công cụ từ phần mềm cũ</h2>
<br />
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">	
			<div class="panel-body">
		<form name = 'Nhan' role='form' method='POST' enctype='multipart/form-data'>
			 <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Tên file:</label>
				<div class="col-sm-5">
					<input type="file" name="filea" id="filea" class="form-control"/>
				</div>
			</div>			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-5">	
				  <button type="submit" name = "sua" class="btn btn-success" id = "sua">Nhận dữ liệu</button>
				  <button type="submit" name = "xem" class="btn btn-success" id = "xem">Xem dữ liệu</button>
				  <input type="button" class="btn btn-black" value="Không nhận" onclick="window.location.href='/main.php'" />
				  <input name="gtts" type="text" class="form-control" style = "Display:none;" id="gtts">
				</div>
			</div>
		</form> 
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
				<thead>
					<tr>
						<th style="text-align: center;background-color:rgb(16, 78, 211)" width="6%"><strong>Chọn</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Phân loại</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Tên tài sản</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Tên chi tiết</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Ngày sử dụng</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Số lượng (diện tích)</strong></th>
						<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Nguyên giá</strong></th>
					</tr>
					<tbody id="rowlist1" class="rowlist">
						<?php
							if (isset($_POST['xem']))
							{
								//$tentep = $_FILES['filea']['tmp_name'];\"$tentep\"								
								//echo $_REQUEST["filea"];//$_FILES["filea"]["name"];
								//$path_parts = $_FILES['file']['tmp_name'];;
								if ($_FILES['filea']['tmp_name'] != "")	
								{
									$mysongs = simplexml_load_file($_FILES['filea']['tmp_name']);//'D:/aa/tblQLTScc.xml'																	
									$dulieutaisan = "";
									foreach ($mysongs as $songinfo):
												$dulieutaisan = $songinfo->mataisan .">".$songinfo->tentaisan .">".$songinfo->tenchitiet .">".$songinfo->namsanxuat .">".$songinfo->ngaysudung .">".$songinfo->noidung .">".$songinfo->ngansach .">".$songinfo->nguonkhac .">".$songinfo->DTKV .">".$songinfo->DCKV .">".$songinfo->CAPH .">".$songinfo->DTXD .">".$songinfo->TDTSXD .">".$songinfo->TKVDAT .">".$songinfo->SOTA .">".$songinfo->NHXE .">".$songinfo->BKSXE .">".$songinfo->CNXE .">".$songinfo->NUOCSX .">".$songinfo->CXXE .">".$songinfo->PLSD .">".$songinfo->CDSD .">".$songinfo->NGGOXE .">".$songinfo->DVT .">".$songinfo->chitiethinhthai;
										echo "<tr>";
											echo "<td><input type = 'Checkbox' checked = 'checked' name = 'KT' id = '$dulieutaisan'></td>";
											if (substr($songinfo->mataisan,0,1) == "T")
												echo "<td>Tài sản</td>";
											else
												echo "<td>Công cụ</td>";
											echo "<td>".$songinfo->tentaisan ."</td>";
											echo "<td>".$songinfo->tenchitiet ."</td>";
											echo "<td>".ngaythang($songinfo->ngaysudung) ."</td>";
											echo "<td>".dinhdangso(kieudouble($songinfo->DTKV)+kieudouble($songinfo->TDTSXD)) ."</td>";
											echo "<td>".dinhdangso(kieudouble($songinfo->ngansach) + kieudouble($songinfo->nguonkhac)) ."</td>";
										echo "</tr>";
									endforeach;
								}
								else
								{
									echo '<script>alert("Bạn cần chọn file dữ liệu cần nhận!")</script>';
								}									
							}
						?>								
					</tbody>	
				</thead>
			</table>	
</div>	
	</div>
		</div>
			</div>	
	<?php } ?>
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>