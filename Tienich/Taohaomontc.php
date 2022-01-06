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
		echo "<h3 style='text-align: center'>Bạn đang đăng nhập bằng tài khoản tổng hợp.</br> Vì vậy bạn không có quyền tạo hao mòn.</br> Xin lỗi vì sự bất tiện này.</br> Xin chân thành cảm ơn!</h3>";
		echo "<br />";
	}
	else
	{	
?>
		<h2>Tạo hao mòn, khấu hao tất cả tài sản</h2>
		<br />
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-primary" data-collapsed="0">	
					<div class="panel-body">
						<form role="form" method="POST" class="form-horizontal form-groups-bordered">							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ngày tháng nhập:</label>
								<div class="col-sm-8">
									<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" class="form-control" id="field-3">
								</div>
							</div>							
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Năm nhập:</label>
								<div class="col-sm-8">
									<input name="namhaomon" type="text" class="form-control" id="field-3" value="">
								</div>								
							</div>							
							<div class="form-group" style="text-align:center;">								
								<div id="HM" class="col-sm-offset-3 col-sm-8">
									<button type="submit" name="sua" class="btn btn-success">Tạo HM/KH</button>
									<button type="submit" name="xoa" class="btn btn-red">Xóa HM/KH</button>
									<input type="button" class="btn btn-black" value="Trở lại" onclick="window.location.href='/main.php'" />
								</div>								
							</div>
						</form>	
					</div>
				</div>		
			</div>
		</div>
<?php
	function soduhm($idts,$nam,$namsd,$nguyengia)
	{
		$soduhm = 0;
		for ($i = $namsd; $i < $nam; $i++){
			$soduhm += sohaomon($idts,$i);
		}
		if($soduhm >= $nguyengia)
			$soduhm = $nguyengia;
		return $soduhm;
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

	function soduhm_cu($idts,$nam)
{
global $con;
$namsd = 0;
$sohaomon = 0;
$nguyengia = 0;
$hm = 0;
$hm32 = 0;
$hmnam = 0;
$sql = "Select year(ngaysudung) as namsd,(ngansach+nguonkhac) as nguyengia, phantram, phantram32 From Tblqlts where TTQLTS = ".$idts;
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$namsd = $row['namsd'];
	$nguyengia = $row['nguyengia'];
	$hm = $row['phantram'];
	$hm32 = $row['phantram32'];
}
$nam = $nam -1;
if($nam >= $namsd) {
	if ($nam < 2015)
		$sohaomon += $nguyengia * $hm32 * ($nam - $namsd) / 100;
	if ($nam >= 2015) {
		if($namsd >=  2013)
			$sohaomon += $nguyengia * $hm32 * (2015 - $namsd) / 100;
		if($namsd <  2013)
			$sohaomon += $nguyengia * $hm32 * (2014 - $namsd) / 100;
		$sohaomon += $nguyengia * $hm * ($nam - 2014) / 100;
	}
}
if($sohaomon >= $nguyengia)
	$sohaomon = $nguyengia;
//$nam = kieudouble($nam)-1;
//$sql = "Select sodu,sotien from tblhaomon where TTQLTS = ".$idts." and namhaomon =".$nam;
//$kq = mysqli_query($con,$sql);
//while($row=mysqli_fetch_array($kq)){
//	$hmnam = $row[0]+$row[1];
//}
return $sohaomon;
}
	function luykehaomon($nambd,$namkt,$nguyengia,$haomonnam,$luyketruoc)
{
$luykehm = 0;
$sohaomon = 0;
for	($i = $nambd ; $i< $namkt; $i++)
{
	$sohaomon += $haomonnam;
}
$luykehm = $sohaomon + $luyketruoc;
if($nguyengia < $luykehm)
	$luykehm = $nguyengia;
return $luykehm;

}
	function soduhaomon($idts,$nam)
{
global $con;
$namsd = 0;
$sohaomon = 0;
$nguyengia = 0;
$hm = 0;
$hm32 = 0;
$hmnam = 0;
$sql = "Select year(ngaysudung) as namsd,(ngansach+nguonkhac) as nguyengia, phantram, phantram32 From Tblqlts where TTQLTS = ".$idts;
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$namsd = $row['namsd'];
	$nguyengia = $row['nguyengia'];
	$hm = $row['phantram'];
	$hm32 = $row['phantram32'];
}
$ar = array();
$sql = "Select DISTINCT year(ngaytanggiam) as nam from tbltanggiam WHERE TTQLTS = $idts and year(ngaytanggiam) < $nam and year(ngaytanggiam) > 0 ORDER BY year(ngaytanggiam) ASC";
$qrsql = mysqli_query($con,$sql);
while($rown = mysqli_fetch_array($qrsql))
{
	$sotien = 0;
	$sql = "Select tanggiam,sotien From tbltanggiam WHERE TTQLTS = $idts  and year(ngaytanggiam) = $rown[nam] ";
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row['tanggiam'] == "Tăng")
			$sotien += $row['sotien'];
		if($row['tanggiam'] == "Giảm")
			$sotien -= $row['sotien'];
	}
	$ar[]=array('nam'=>$rown['nam'],
		'sotien'=>$sotien
	);
}
$nambd = 0;
$namkt = 0;
foreach	($ar as $tanggiam) {
	//$tanggiam['nam'] = $nam - 1;
	$luyketruoc = soduhm($idts,$tanggiam['nam']);
	$nguyengiamoi = $nguyengia + $tanggiam['sotien'];
	if ($tanggiam['nam'] >= $namsd) {
		if ($nam < 2015)
			$sohaomon += $nguyengia * $hm32 * ($nam - $namsd) / 100;
		if ($nam >= 2015) {
			if ($namsd >= 2013)
				$sohaomon += $nguyengia * $hm32 * (2015 - $namsd) / 100;
			if ($namsd < 2013)
				$sohaomon += $nguyengia * $hm32 * (2014 - $namsd) / 100;
			$sohaomon += $nguyengia * $hm * ($nam - 2014) / 100;
		}
	}
}
if($sohaomon >= $nguyengia)
	$sohaomon = $nguyengia;
//$nam = kieudouble($nam)-1;
//$sql = "Select sodu,sotien from tblhaomon where TTQLTS = ".$idts." and namhaomon =".$nam;
//$kq = mysqli_query($con,$sql);
//while($row=mysqli_fetch_array($kq)){
//	$hmnam = $row[0]+$row[1];
//}
return $sohaomon;
}
	function sohmnam($nguyengia,$phantram,$TTQLTS)
{
$tanggiam = 0;
global $con;
$sql = "Select sotien,tanggiam from tbltanggiam where TTQLTS = ". $TTQLTS;
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
	if($row["tanggiam"] == "Tăng")
		$tanggiam += kieudouble($row["sotien"]);
	else
		$tanggiam -= kieudouble($row["sotien"]);
}
$haomonnam = ($nguyengia+$tanggiam)*$phantram/100;

return $haomonnam;
}

	function ktrakhauhao($namkhauhao,$TTQLTS)
{
global $con;
$sql = "Select TThaomon from tblhaomon where namkhauhao = $namkhauhao and TTQLTS = $TTQLTS";
$qrsql = mysqli_query($con,$sql);
if(mysqli_num_rows($qrsql))
	return true;
else
	return false;
}
	function tinhkhauhao($TTQLTS,$kq)
{
global $con;
$namkhconlai =0;
$thangkhauhaoconlai=0;
$sodakh=0;
$sql = "Select tblqlts.TTQLTS,(ngansach+nguonkhac) as nguyengia,year(ngaykhauhao) as namkhauhao, month(ngaykhauhao) as thangkhauhao,   tblhaomon.tylekhauhao,tblhaomon.phuongphapkhauhao, tblhaomon.tylesxkd, tblhaomon.tongnamsudung from tblqlts inner join tblhaomon on tblqlts.TTQLTS = tblhaomon.TTTS where tblqlts.TTQLTS = $TTQLTS";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
	if(ktrakhauhao($_POST['namhaomon'],$row['TTQLTS'])== false)
	{
		$sonamdakhauhao = kieudouble($_POST['namhaomon']) - kieudouble($row['namkhauhao']) +1;
		$namkhconlai = kieudouble($row['tongnamsudung']) - $sonamdakhauhao;
		$thangdakh = $sonamdakhauhao*12 -kieudouble($row['thangkhauhao']) + 1;
		$thangkhauhaoconlai = kieudouble($row['tongnamsudung'])*12 - $thangdakh;
		$sodakh = (kieudouble($row['nguyengia'])*kieudouble($row['tylekhauhao'])*kieudouble($row['tylesxkd'])*$thangdakh)/120000;
		$hesodc = 0;
		if(kieudouble($row['tongnamsudung']) > 6 )
			$hesodc = 2.5;
		else if (kieudouble($row['tongnamsudung']) <= 4)
			$hesodc = 1.5;
		else
			$hesodc = 2;
		if($row['phuongphapkhauhao'] == 'Khấu hao số dư giảm dần')
		{
			$khauhaotb = 0;
			$sodakh = 0;
			$sokh = 0;
			for ($i = 1; $i<= $sonamdakhauhao ; $i++)
			{
				$khauhaotb = kieudouble($row['nguyengia'])/(($namkhconlai + $sonamdakhauhao)-i);
				$sokh = (kieudouble($row['nguyengia'])-$sodakh)*kieudouble($row['tylekhauhao'])*$hesodc/100;
				$sokh = $sokh* kieudouble($row['tylesxkd'])/100;
				if($sokh > $khauhaotb)
					$sodakh += $sokh;
				else
					$sodakh += $khauhaotb;
			}
		}
	}
}
switch ($kq) {
case "namkhconlai":
   return $namkhconlai;
   break;
case "thangkhauhaoconlai":
	return $thangkhauhaoconlai;
	break;
case "sodakh":
	return $sodakh;
	break;
default:
	return 0;
	break;
}
}
if (isset($_POST['sua']))
{
	$ngaydk = doingay($_POST['ngaynhap']);
	$namhm = $_POST['namhaomon'];	
	$sql = "Select TTQLTS,phantram,(ngansach+nguonkhac) as NG,year(ngaysudung) as nsd from tblqlts Where madonvi = '$ma[0]' and ngaysudung <= '$ngaydk' and phantram > 0".
	" and TTQLTS Not in (Select TTQLTS From tblhaomon Where namhaomon = ".$_POST['namhaomon']. ") and TTQLTS Not in (Select TTQLTS From tbldenghi Where hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển')";
	$hmnam = 0;$sodu=0;
	$kq = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($kq)){
		$tangst = 0;
		$giamst = 0;
		$sqltg = "Select TTTGTS,lydotanggiam,soluong,ngansach,nguonkhac,tanggiam,year(ngaytanggiam) as nam,sotien,ngaytanggiam".
			" from tbltanggiam where TTQLTS = " . $row['TTQLTS'] . " and year(ngaytanggiam) <= " . $namhm;
		$qrsqltg = mysqli_query($con, $sqltg);
		while ($rowtg = mysqli_fetch_array($qrsqltg)) {
			if ($rowtg['tanggiam'] == "Tăng") {
				$tangst += $rowtg['ngansach'] + $rowtg['nguonkhac'];
			}
			if($rowtg['tanggiam'] == "Giảm")  {
				$giamst += $rowtg['sotien'];
			}
		}
		$nguyengia = $row['NG'] + $tangst - $giamst;
	    //$hmnam = sohaomon($row["NG"],$row["phantram"],$row["TTQLTS"]);
	    $hmnam = sohaomon($row["TTQLTS"],$namhm);
		//$hmnam = ($row[1]*$row[2])/100;
		//$sodu = soduhm($row[0],$_POST['namhaomon']);
		$sodu = soduhm($row["TTQLTS"],$namhm,$row["nsd"],$nguyengia);
		if($sodu+$hmnam >= $nguyengia)
		    $hmnam = $nguyengia-$sodu;
		$sqlin = "Insert into tblhaomon(TTQLTS,ngaythang,namhaomon,sodu,sotien,phantram,madonvi) values($row[0],'$ngaydk',$namhm,$sodu,$hmnam,$row[1],'$ma[0]')";
		$kqin = mysqli_query($con,$sqlin);
	}
	$sql = "Select tblqlts.TTQLTS,tblhaomon.phuongphapkhauhao, tblhaomon.tylekhauhao, tblhaomon.tylesxkd, tblhaomon.sokhnam,tblhaomon.tongnamsudung from tblqlts inner join tblhaomon on tblqlts.TTQLTS = tblhaomon.TTTS where tblqlts.madonvi = '$ma[0]' and tblqlts.khauhao = 'Có' and tblqlts.TTQLTS Not in (Select TTQLTS From tbldenghi Where hinhthuc = 'Thanh lý' or hinhthuc = 'Bán' or hinhthuc = 'Điều chuyển')";
	$qrsql = mysqli_query($con,$sql);	
	while($row = mysqli_fetch_array($qrsql))
	{	
		$sqlup = "Update tblhaomon set ngaykhauhao = '$ngaydk',phuongphapkhauhao = '".$row['phuongphapkhauhao']."',thangkhauhaoconlai = '".tinhkhauhao($row['TTQLTS'],'thangkhauhaoconlai')."',namkhconlai = '".tinhkhauhao($row['TTQLTS'],'namkhconlai')."',tylekhauhao = '".$row['tylekhauhao']."',tylesxkd = '".$row['tylesxkd']."',sokhauhao = '".tinhkhauhao($row['TTQLTS'],'sodakh')."', sokhnam = '".$row['sokhnam']."',namkhauhao = '$namhm',tongnamsudung = '".$row['tongnamsudung']."' where TTQLTS = ".$row['TTQLTS']." and namhaomon = '$namhm' and ngaythang = '$ngaydk'";
		$qrsqlup = mysqli_query($con,$sqlup);
	}
}
if (isset($_POST['xoa']))
{
	$ngaydk = doingay($_POST['ngaynhap']);
	$namhm = $_POST['namhaomon'];
	$sqlxoa = "Delete From tblhaomon Where madonvi = '".$ma[0]."' and namhaomon = ".$namhm." and ngaythang ='".$ngaydk."' and TTTS = 0";
	$kqxoa = mysqli_query($con,$sqlxoa);
}
	}
?>	
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>