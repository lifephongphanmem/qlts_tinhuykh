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
						<li class="active">
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
<!-------- Header -------->
	<script src="/assets/News/jquery.min.js"></script>
	<script src="/dist/jquery.inputmask.bundle.min.js"></script>
	<script src="/my_script.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>
	<script>
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
		function tinhtoan()
		{
			var dongia = $('#dongia').val();
			dongia = dongia.replace(/,/g,"");
			var soluong = $('#soluong').val();
			var thanhtien = $('#thanhtien').val();
			thanhtien = thanhtien.replace(/,/g,"");
			var soluongkk = $('#soluongkk').val();
			var thanhtienkk = parseFloat(soluongkk)*parseFloat(dongia);
			var soluongthua = 0;
			var soluongthieu = 0;
			var thanhtienthua = 0;
			var thanhtienthieu = 0;
			var tinhtoansl = parseFloat(soluong) - parseFloat(soluongkk);
			var tinhtoantt = parseFloat(thanhtien)-thanhtienkk;
			if (tinhtoansl > 0)
				soluongthieu = tinhtoansl;
			else
				soluongthua = Math.abs(tinhtoansl);
			if(tinhtoantt > 0)
				thanhtienthieu = tinhtoantt;
			else
				thanhtienthua = Math.abs(tinhtoantt);
			$('#thanhtienkk').val(thanhtienkk);
			$('#soluongthieu').val(soluongthieu);
			$('#thanhtienthieu').val(thanhtienthieu);
			$('#soluongthua').val(soluongthua);
			$('#thanhtienthua').val(thanhtienthua);
		}
		$(document).ready(function(){
			$('#soluongkk').change(function(){
				tinhtoan();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$(":input").inputmask();
		});
	</script>
<?php
$id = $_POST['TTkiemken'];
	if (isset($_POST['Save']))
	{				
		$soluongkk=kieudouble($_POST["soluongkk"]);
		$thanhtienkk=kieudouble($_POST["thanhtienkk"]);
		$soluongthua=kieudouble($_POST["soluongthua"]);
		$thanhtienthua=kieudouble($_POST["thanhtienthua"]);
		$soluongthieu=kieudouble($_POST["soluongthieu"]);
		$thanhtienthieu=kieudouble($_POST["thanhtienthieu"]);
		$phamchat =$_POST['phamchat'];
		$sql="Update tblkiemken set soluongkk=$soluongkk,thanhtienkk=$thanhtienkk,soluongthua=$soluongthua,thanhtienthua=$thanhtienthua,soluongthieu=$soluongthieu,thanhtienthieu=$thanhtienthieu,phamchat='$phamchat' where TTkiemken=".$id;
		$kq=mysqli_query($con,$sql);
	}
$sql = "select TTkiemken,TTkiemke,tenchitiet,noisudung,dvt,dongia,soluong,thanhtien,soluongkk,thanhtienkk,soluongthua,thanhtienthua,soluongthieu,thanhtienthieu,phamchat FROM tblkiemken WHERE TTkiemken = '$id'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
?>
	<div class="row">
	<br />
<input type="button" class="btn btn-black" value="Trở lại" onclick="<?php echo "window.location.href='NhapKKTSccct.php?id=$row[TTkiemke]'" ?>" />
<div class="col-sm-12">
	<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
		<div class="col-sm-12">
			<fieldset>
				<legend>Thông tin công cụ</legend>
				<input name="TTkiemken" type="text" class="form-control" value="<?php echo $row['TTkiemken']; ?>" id="TTkiemken"/>
				<label class="col-sm-15 control-label">Tên công cụ:</label>
				<div class="col-sm-45">
					<input name="tenchitiet" readonly tabindex="-1" type="text" class="form-control" value="<?php echo $row['tenchitiet']; ?>" id="tenchitiet"/>
				</div>
				<label for="field-3" class="col-sm-15 control-label">Nơi sử dụng:</label>
				<div class="col-sm-45">
					<input name="noisudung" readonly tabindex="-1" type="text" value="<?php echo $row['noisudung']; ?>" class="form-control" id="field-3"/>
				</div>
				<label for="field-4" class="col-sm-15 control-label">Đơn vị tính:</label>
				<div class="col-sm-45">
					<input name="dvt" type="text" readonly tabindex="-1" class="form-control" value="<?php echo $row['dvt']; ?>" id="dvt"/>
				</div>
				<label for="field-3" class="col-sm-15 control-label">Đơn giá:</label>
				<div class="col-sm-4">
					<input name="dongia" type="text" readonly tabindex="-1" class="form-control" value="<?php echo $row['dongia']; ?>" data-mask="fdecimal" id="dongia"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4" class="col-sm-15 control-label">Số lượng:</label>
				<div class="col-sm-45">
					<input name="soluong" type="text" data-mask = 'fdecimal' readonly tabindex="-1" class="form-control" value="<?php echo $row['soluong']; ?>" data-mask="fdecimal" id="soluong"/>
				</div>
				<label for="field-4" class="col-sm-15 control-label">Thành tiền:</label>
				<div class="col-sm-4">
					<input name="thanhtien" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" value="<?php echo $row['thanhtien']; ?>" id="thanhtien"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4" class="col-sm-15 control-label">Phẩm chất:</label>
				<div class="col-sm-45" >
					<Select name="phamchat"  class="form-control" id ="phamchat">
						<option <?php if($row['phamchat'] == "") echo "Selected = 'Selected'" ;?> value="">-- Chọn phẩm chất --</option>
						<option <?php if($row['phamchat'] == "Còn tốt 100 %") echo "Selected = 'Selected'" ;?> value="Còn tốt 100 %">Còn tốt 100 %</option>
						<option <?php if($row['phamchat'] == "Kém phẩm chất") echo "Selected = 'Selected'"  ; ?> value="Kém phẩm chất">Kém phẩm chất </option>
						<option <?php if($row['phamchat'] == "Mất phẩm chất") echo "Selected = 'Selected'" ; ?> value="Mất phẩm chất">Mất phẩm chất </option>
					</select>
				</div>
			</fieldset>
		</div>
		<div class = "col-sm-12">
			<fieldset>
				<legend>Thông tin kiểm kê</legend>
				<label for="field-4"  class="col-sm-15 control-label">Số lượng kiểm kê:</label>
				<div class="col-sm-45">
					<input name="soluongkk"  type="text" value="<?php echo $row['soluongkk']; ?>" class="form-control" id ="soluongkk"/>
				</div>
				<label for="field-4"  class="col-sm-15 control-label">Thành tiền kiểm kê:</label>
				<div class="col-sm-4">
					<input name="thanhtienkk" data-mask = 'fdecimal' readonly  type="text"  value="<?php echo $row['thanhtienkk']; ?>" class="form-control" id ="thanhtienkk"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4"  class="col-sm-15 control-label">Số lượng thừa:</label>
				<div class="col-sm-45">
					<input name="soluongthua" readonly tabindex="-1" type="text" readonly tabindex="-1" class="form-control" value="<?php echo $row['soluongthua']; ?>" id ="soluongthua"/>
				</div>
				<label for="field-4"  class="col-sm-15 control-label">Thành tiền thừa:</label>
				<div class="col-sm-4">
					<input name="thanhtienthua" data-mask="fdecimal" type="text" readonly tabindex="-1" value="<?php echo $row['thanhtienthua']; ?>" class="form-control" id ="thanhtienthua"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
				<label for="field-4" class="col-sm-15 control-label">Số lượng thiếu:</label>
				<div class="col-sm-45">
					<input name="soluongthieu" readonly tabindex="-1" type="text" class="form-control" value="<?php echo $row['soluongthieu']; ?>" data-mask="fdecimal" id="soluongthieu"/>
				</div>
				<label for="field-4" class="col-sm-15 control-label">Thành tiền thiếu:</label>
				<div class="col-sm-4">
					<input name="thanhtienthieu" readonly tabindex="-1" type="text" class="form-control" value="<?php echo $row['thanhtienthieu']; ?>" data-mask="fdecimal" id="thanhtienthieu"/>
				</div>
				<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			</fieldset>
		</div>
		<div class="modal-footer">
			<input type="submit" name="Save" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật"/>
		</div>
	</form>
	<?php }?>
</div>
	</div>

	</div>

</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>