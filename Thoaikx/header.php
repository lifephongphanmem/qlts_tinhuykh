<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>QLTS</title>

	<link rel="stylesheet" href="/QLTS/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/QLTS/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="/QLTS/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/QLTS/assets/css/neon-core.css">
	<link rel="stylesheet" href="/QLTS/assets/css/neon-theme.css">
	<link rel="stylesheet" href="/QLTS/assets/css/neon-forms.css">
	<link rel="stylesheet" href="/QLTS/assets/css/custom.css">	
	<script src="/QLTS/assets/js/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="/QLTS/assets/css/skins/purple.css">
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<?php
	$madv = $_GET["id"];
?>
</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="/QLTS/index.php">
						<img src="/QLTS/assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>
				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>	
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>	
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="auto-inherit-active-class">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title"><strong>Quản lý dữ liệu</strong></span>
					</a>
					<ul>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapTCTS/NhapDNTC.php?id=$madv\">							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapQLTS/NhapQLTS.php?id=$madv\">
								<span class='title'>Quản lý tài sản cố định khác</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapQLTSdat/NhapQLTS.php?id=$madv\">
								<span class='title'>Quản lý tài sản cố định là đất</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapQLTSnha/NhapQLTS.php?id=$madv\">
								<span class='title'>Quản lý nhà và vật kiến trúc khác</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapQLTSxe/NhapQLTS.php?id=$madv\">
								<span class='title'>Quản lý xe và phương tiện vận tải</span>
							</a>";
							?>							
						</li>
						<li>
						<?php
							echo "<a  href=\"/QLTS/Nhap/NhapQLCC/NhapQLCC.php?id=$madv\">							
								<span class='title'>Quản lý công cụ dụng cụ</span>
							</a>";
						?>	
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapDNXL/NhapDNXL.php?id=$madv\">							
								<span class='title'>Đề nghị xử lý tài sản</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapTDTTTS/NhapTDTTTS.php?id=$madv\">							
								<span class='title'>Thay đổi thông tin tài sản cố định</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapTDTTDV/NhapTDTTDVchon.php?id=$madv\">							
								<span class='title'>Thay đổi thông tin đơn vị</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Nhap/NhapKKTS/NhapKKTS.php?id=$madv\">							
								<span class='title'>Kiểm kê tài sản, công cụ</span>
							</a>";
							?>							
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
							<a href="layout-api.html">
								<span class="title">Thẻ tài sản cố định</span>
							</a>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoTSCDm1.php?id=$madv\">							
								<span class='title'>Sổ tài sản cố định (S24-H)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBcTHTGTSCDdv.php?id=$madv\">							
								<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaHMTSCD.php?id=$madv\">							
								<span class='title'>Bảng tính hao mòn tài sản cố định (C55 - HD)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaTHDSTSDNTC.php?id=$madv\">							
								<span class='title'>Danh sách tài sản đề nghị trang cấp</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaTHDMTSDNXL.php?id=$madv\">							
								<span class='title'>Danh sách tài sản đề nghị xử lý</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaocaokktscd.php?id=$madv\">							
								<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
							</a>";
							?>
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
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoKDCLB.php?id=$madv\">							
								<span class='title'>Sổ kho dụng cụ lâu bền</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoCTDCLB.php?id=$madv\">							
								<span class='title'>Sổ chi tiết dụng cụ lâu bền</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaTHCTDCLB.php?id=$madv\">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số lượng)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaTHCTDCLBt.php?id=$madv\">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số tiền)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoTDDCLB.php?id=$madv\">							
								<span class='title'>Sổ theo dõi dụng cụ lâu bền (S32-H)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoTDDCLBcb.php?id=$madv\">							
								<span class='title'>Sổ theo dõi tài sản và công cụ</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiDmDCLB.php?id=$madv\">							
								<span class='title'>Danh mục dụng cụ lâu bên theo QĐ32</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiSoBaohong.php?id=$madv\">							
								<span class='title'>Giấy báo hỏng, mất công cụ dụng cụ</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiBaocaoCCDC.php?id=$madv\">							
								<span class='title'>Báo cáo tăng giảm công cụ dụng cụ</span>
							</a>";
							?>
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
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09_01TSNN.php?id=$madv\">							
								<span class='title'>Danh mục trụ sở làm việc, cơ sở HĐSN đề nghị xử lý (TT09)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09-02TSNN.php?id=$madv\">							
								<span class='title'>Danh mục xe ô tô đề nghị xử lý (TT09)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09_03SNN.php?id=$madv\">							
								<span class='title'>Danh mục tài sản khác đề nghị xử lý (TT09)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09_01DKTSNN.php?id=$madv\">							
								<span class='title'>Báo cáo kê khai trụ sở làm việc, cơ sở HĐSN (TT09)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09_02DKTSNN.php?id=$madv\">							
								<span class='title'>Báo cáo kê khai ô tô (TT09)</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Thoaikx/ThoaiTT09_03DKTSNN.php?id=$madv\">							
								<span class='title'>Báo cáo kê khai tài sản có nguyên giá lớn hơn 500 triệu (TT09)</span>
							</a>";
							?>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title">Quản lý danh mục</span>
					</a>
					<ul>
						<li>							
							<?php
							echo "<a  href=\"/QLTS/DanhMuc/DMTS/DMTS.php?id=$madv\">
								<span class='title'>Danh mục tài sản</span>
							</a>";
							?>
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/DanhMuc/DMCC/DMCC.php?id=$madv\">							
								<span class='title'>Danh mục công cụ</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/DanhMuc/DMPB/DMPB.php?id=$madv\">							
								<span class='title'>Danh mục phòng ban (bộ phận)</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/DanhMuc/DMCB/DMCB.php?id=$madv\">							
								<span class='title'>Danh mục cán bộ</span>
							</a>";
							?>							
						</li>
					</ul>
				</li>
				<li>
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Tiện ích</span>
					</a>
					<ul>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Tienich/Taohaomontc.php?id=$madv\">							
								<span class='title'>Tạo hao mòn tất cả tài sản</span>
							</a>";
							?>							
						</li>
						<li>
							<?php
							echo "<a  href=\"/QLTS/Tienich/nhandlaccess.php?id=$madv\">							
								<span class='title'>Nhận tài sản, công cụ từ file xml</span>
							</a>";
							?>							
						</li>						
						<li>
							<a href="http://hdts.890m.com/">	
								<span class="title">Hướng dẫn sử dụng</span>
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
							<?php
							echo "<a  href=\"/QLTS/DanhMuc/DMDV/DMDV.php?id=$madv\">							
								<span class='title'>Danh sách tài khoản</span>
							</a>";
							?>							
						</li>						
						<li>
							<a  onclick="showAjaxModalmk();"><i class='entypo-pencil'></i>
								Thay đổi mật khẩu
							</a>							
						</li>						
					</ul>
				</li>
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Quản lý
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>
		
							<li>
								<a href="http://hdts.890m.com/">	
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>
		
							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							TỈnh<i class="entypo-down-open"></i>
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<span>Bắc Ninh</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<span>Lạng Sơn</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Lào Cai</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Yên Bái</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Cao Bằng</span>
								</a>
							</li>
						</ul>
		
					</li>
		
					<li class="sep"></li>
		
					<li class="sep"></li>
		
					<li>
						<a href="/QLTS/frmlogin.php">
							Thoát <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>