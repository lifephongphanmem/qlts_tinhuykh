<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<ul id="main-menu" class="main-menu">
	<!-- add class "multiple-expanded" to allow multiple submenus to open -->
	<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
	<li <?php if (strlen($ma[0]) < 16) {
			echo "style='display:none';";
		} ?> class="auto-inherit-active-class">
		<a href="index.html">
			<i class="entypo-gauge"></i>
			<span class="title"><strong>Quản lý dữ liệu</strong></span>
		</a>
		<ul>
			<li>

				<a href="/Nhap/NhapTCTS/NhapDNTC.php">
					<i class="entypo-flag"></i>
					<span class='title'>Đề nghị trang cấp tài sản</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapQLTS500/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý tài sản cố định khác từ 500 triệu</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapQLTS/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý tài sản cố định khác dưới 500 triệu</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapQLTSdat/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý tài sản cố định là đất</span>
				</a>

			</li>
			<li>
				<a href="/Nhap/NhapQLTSnha/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý tài sản cố định là nhà </span>
				</a>
			</li>
			<li>
				<a href="/Nhap/NhapQLTSvkt/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý các vật kiến trúc khác</span>
				</a>
			</li>
			<li>

				<a href="/Nhap/NhapQLTSxe/NhapQLTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý xe và phương tiện vận tải</span>
				</a>

			</li>
			<li>
				<a href="/Nhap/NhapQLCC/NhapQLCC.php">
					<i class="entypo-flag"></i>
					<span class='title'>Quản lý công cụ dụng cụ</span>
				</a>
			</li>
			<li>

				<a href="/Nhap/NhapDNXL/NhapDNXL.php">
					<i class="entypo-flag"></i>
					<span class='title'>Đề nghị xử lý tài sản</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapTDTTTS/NhapTDTTTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Thay đổi thông tin tài sản cố định</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapTDTTDV/NhapTDTTDVchon.php">
					<i class="entypo-flag"></i>
					<span class='title'>Thay đổi thông tin đơn vị</span>
				</a>

			</li>
			<li>

				<a href="/Nhap/NhapKKTS/NhapKKTS.php">
					<i class="entypo-flag"></i>
					<span class='title'>Kiểm kê tài sản, công cụ</span>
				</a>

			</li>
		</ul>
	</li>
	<li class="opened active">
		<a href="layout-api.html">
			<i class="entypo-layout"></i>
			<span class="title"><strong>Tổng hợp báo cáo tài sản</strong></span>
		</a>
		<ul>
			<li>

				<a href="/Thoaikx/the.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Thẻ tài sản cố định</span>
				</a>

			</li>
			<li class="active">
				<a href="/Thoaikx/ThoaiSoTSCDm1.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Sổ tài sản cố định (S24-H)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiSoCTTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Sổ chi tiết tài sản cố định (SCT_TSCD1)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiSoTSCD_NSD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Sổ tài sản cố định (S24-H-NSD)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiSoTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Sổ tài sản cố định (S31-H)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiBcTHTGTSCDdv.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiBcTHTGTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tăng giảm tài sản cố định (B04_H1)</span>
				</a>
			</li>
			<li>

				<a href="/Thoaikx/ThoaiBcCTGTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Báo cáo chi tiết giảm tài sản cố định (BCGIAMTS)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBcCTTTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Báo cáo chi tiết tăng tài sản cố định (BCTANGTS)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaHMTSCD.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Bảng tính hao mòn tài sản cố định (C55 - HD)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaTHDSTSDNTC.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Danh sách tài sản đề nghị trang cấp</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaTHDMTSDNXL.php">
					<i class="entypo-book-open"></i>
					<span class='title'>Danh sách tài sản đề nghị xử lý</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaocaokktscd.php"><i class="entypo-book-open"></i>
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

				<a href="/Thoaikx/ThoaiSoKDCLB.php"><i class="entypo-book-open"></i>
					<span class='title'>Sổ kho dụng cụ lâu bền</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiSoCTDCLB.php"> <i class="entypo-book-open"></i>
					<span class='title'>Sổ chi tiết dụng cụ lâu bền</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaTHCTDCLB.php"><i class="entypo-book-open"></i>
					<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số lượng)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaTHCTDCLBt.php"> <i class="entypo-book-open"></i>
					<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số tiền)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiSoTDDCLB.php"> <i class="entypo-book-open"></i>
					<span class='title'>Sổ theo dõi dụng cụ lâu bền (S32-H)</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiSoTDDCLBcb.php"> <i class="entypo-book-open"></i>
					<span class='title'>Sổ theo dõi tài sản và công cụ</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiDmDCLB.php"> <i class="entypo-book-open"></i>
					<span class='title'>Danh mục dụng cụ lâu bên theo QĐ32</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiDmDCLB.php"> <i class="entypo-book-open"></i>
					<span class='title'>Giấy báo hỏng, mất công cụ dụng cụ</span>
				</a>

			</li>
			<li>

				<a href="/Thoaikx/ThoaiBaocaoCCDC.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tăng giảm công cụ dụng cụ</span>
				</a>

			</li>
		</ul>
	</li>

	<li <?php if (strlen($ma[0]) >= 16) {
			echo "style='display:none';";
		}
		?>>
		<a href="tables-main.html">
			<i class="entypo-window"></i>
			<span class="title"><strong>Báo cáo tổng hợp</strong></span>
		</a>
		<ul>
			<li>
				<a href="/Thoaitonghop/ThoaiThTSNNCTlc.php?id=0>0>0"> <i class="entypo-book-open"></i>
					<span class='title'>Tổng hợp tài sản nhà nước</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiThBCHTSDNDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Tổng hợp báo cáo hiện trạng sử dụng nhà, đất</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcTHTGTSNNlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tổng hợp tình hình tăng, giảm tài sản nhà nước</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcTSNNDVTTSDlc.php?id=0>0>0"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcHMTSNNDVTTSDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo hao mòn tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiCkQLSDTSCSHDSNlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai quản lý, sử dụng TSLV, CSHĐSN</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcKKTSCDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcTHTCCLDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tình hình tăng công cụ lao động</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcTTSNNDVTTSDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tăng tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiBcGTSNNDVTTSDlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo giảm tài sản nhà nước của đơn vị trực tiếp sử dụng</span>
				</a>
			</li>
		</ul>
	</li>

	<li>
		<a href="tables-main.html">
			<i class="entypo-window"></i>
			<span class="title"><strong>Báo cáo theo TT 144</strong></span>
		</a>
		<ul>
			<li>
				<a href="/Thoaikx/ThoaiTT144_04aDKTSC.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo kê khai trụ sở làm việc (Mẫu 4a)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_04bDKTSC.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo kê khai ô tô (Mẫu 4b)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_4cDKTSC.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo kê khai tài sản khác (Mẫu 4c)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiCkKQTHMSTSNNlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai tình hình đầu tư xây dựng (Mẫu 9a)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiCkSDPTDLlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai quản lý, sử dụng xe ô tô và tài sản khác (Mẫu 9c)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiCkQLSDTSCSHDSNlc.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai quản lý, sử dụng TSLV, CSHĐSN (Mẫu 9b)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaitonghop/ThoaiCkTHXLTSNN.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai tình hình xử lý tài sản (Mẫu 9d)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_08a.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo hiện trạng sử dụng tài sản công (Mẫu 8a)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_08b.php"> <i class="entypo-book-open"></i>
					<span class='title'>Báo cáo tổng hợp tình hình tăng, giảm tài sản công (Mẫu 8b)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_10a.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai tình hình đầu tư, mua sắm, giao, thuê tài sản công (Mẫu 10a)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_10b.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai tình hình quản lý, sử dụng tài sản công (Mẫu 10b)</span>
				</a>
			</li>
			<li>
				<a href="/Thoaikx/ThoaiTT144_10c.php"> <i class="entypo-book-open"></i>
					<span class='title'>Công khai tình hình xử lý tài sản công (Mẫu 10c)</span>
				</a>
			</li>
		</ul>
	</li>
	<li <?php if (strlen($ma[0]) < 16) {
			echo "style='display:none';";
		} ?> class="auto-inherit-active-class">
		<a href="tables-main.html">
			<i class="entypo-window"></i>
			<span class="title"><strong>Quản lý danh mục</strong></span>
		</a>
		<ul>
			<li>

				<a href="/DanhMuc/DMTS/DMTS.php">
					<i class="entypo-sweden"></i>
					<span class='title'>Danh mục tài sản</span>
				</a>

			</li>
			<li>

				<a href="/DanhMuc/DMCC/DMCC.php">
					<i class="entypo-sweden"></i>
					<span class='title'>Danh mục công cụ</span>
				</a>

			</li>
			<li>

				<a href="/DanhMuc/DMPB/DMPB.php">
					<i class="entypo-sweden"></i>
					<span class='title'>Danh mục phòng ban (bộ phận)</span>
				</a>

			</li>
			<li>

				<a href="/DanhMuc/DMCB/DMCB.php">
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
				<a href="/Tienich/Taohaomontc.php"> <i class="entypo-picasa"></i>
					<span class='title'>Tạo hao mòn tất cả tài sản</span>
				</a>
			</li>
			<li>
				<a href="/Tienich/nhandlaccess.php"> <i class="entypo-picasa"></i>
					<span class='title'>Nhận tài sản, công cụ từ file xml</span>
				</a>
			</li>
			<li>
				<a href="/Tienich/huongdan.php"> <i class="entypo-picasa"></i>
					<span class="title">Hướng dẫn sử dụng</span>
				</a>
			</li>
			<li>
				<a href="/Tracuu/TraCuuTS/tracuuts.php?id=<?php echo "$ma[0]"; ?>"> <i class="entypo-search"></i>
					<span class='title'>Tìm kiếm thông tin tài sản</span>
				</a>
			</li>
			<li>
				<a href="/Tracuu/TraCuuCC/tracuucc.php?id=<?php echo "$ma[0]"; ?>"> <i class="entypo-search"></i>
					<span class='title'>Tìm kiếm thông tin công cụ</span>
				</a>
			</li>
			<li>
				<a href="/Tracuu/TraCuuTC/tracuutc.php?id=<?php echo "$ma[0]"; ?>"> <i class="entypo-search"></i>
					<span class='title'>Tìm kiếm thông tin trang cấp</span>
				</a>
			</li>
			<li>
				<a href="/Tracuu/TraCuuDN/tracuudn.php?id=<?php echo "$ma[0]"; ?>"> <i class="entypo-search"></i>
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

				<a href="/DanhMuc/DMDV/DMDV.php"><i class="entypo-users"></i>
					<span class='title'>Danh sách tài khoản</span>
				</a>

			</li>
			<li>
				<a onclick="showAjaxModalmk();"><i class='entypo-pencil'></i>
					Thay đổi mật khẩu
				</a>
			</li>
		</ul>
	</li>
</ul>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!------- HEADER ---------->
<script>
	$(document).ready(function() {
		$(":input").inputmask();
	});
</script>
<script>
	$(document).ready(function() {
		$('#huyen').change(function() {
			giatri = this.value;
			if (giatri == "")
				giatri = $('#msdv').val();
			$('#xa').load('ajax_xa.php?id=' + giatri);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#hhhh').click(function() {
			giatri = kiemtrahschon();
			$("#sobg").val(giatri);
		});
	});

	function kiemtrahschon() {

		var sohoso = '';

		$.each($("input[name='KT']:checked"), function() {
			sohoso += ($(this).attr('id')) + '>';
		});
		return sohoso;
	}

	function nambc() {
		var nambc = new Date;
		nambc = nambc.getFullYear();
		return nambc;
	}
</script>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		var table = $('#table-2').DataTable({
			scrollY: "150px",
			paging: false,
			"bPaginate": false,
			"bFilter": false,
			"bInfo": false,
			"aoColumnDefs": [{
				'bSortable': false,
				'aTargets': [0, 1]
			}]
		});
	});
</script>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" style="text-align:center;"><strong>Sổ tài sản cố định</strong></h4>
		</div>
		<div class="modal-body">
			<form name="thoai" onsubmit=" return kt()" role="form" method="Post" class="form-horizontal" action="SoTSCD107.php">
				<div class="form-group" <?php if (strlen($ma[0]) >= 16) {
											echo "style='display:none';";
										} ?>>
					<div class="col-sm-6" <?php if (strlen($ma[0]) >= 6) {
												echo "style='display:none';";
											} ?>><label>Huyện:</label><select name="huyen" class="form-control" id="huyen" type="text">
							<option value=""></option>
							<?php
							require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
							$ms = explode(">", $madv);
							$sqldv = "Select matinh,tentinh,mahuyen,tenhuyen from tbldmtinhhuyenxa where matinh = '$ms[0]' ";
							$querydv = mysqli_query($con, $sqldv);
							while ($rowdv = mysqli_fetch_array($querydv)) {
								$ma = $rowdv[0] . "." . $rowdv[2];
								echo "<option value='$ma'>$rowdv[3]</option>";
							}
							?>
						</select></div>
					<div id="xa" class="col-sm-6"><label>Đơn vị:</label><select name="donvi" class="form-control" type="text">
							<option value=""></option>
							<?php
							require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
							$ms = explode(">", $madv);
							$sqldv = "Select madonvi,tendv from thongtindonvi where madonvi like '$ms[0]%' and length(madonvi) >=16 ";
							$querydv = mysqli_query($con, $sqldv);
							while ($rowdv = mysqli_fetch_array($querydv)) {
								echo "<option value='$rowdv[0]'>$rowdv[1]</option>";
							}
							?>
						</select></div>
				</div>
				<div class="form-group" <?php if (strlen($ma[0]) < 16) {
											echo "style='display:none';";
										} ?>>
					<div class="col-sm-12" <?php if (strlen($ma[0]) < 16) {
												echo "style='display:none';";
											} ?>><label>Nơi sử dụng:</label>
						<select name="noidung" class="form-control" id="noidung" type="text">
							<option value="">-- Chọn nơi sử dụng --</option>
							<?php
							require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
							$sqldv = "Select DISTINCT noidung from tblqlts where madonvi = '$ms[0]' ";
							$querydv = mysqli_query($con, $sqldv);
							while ($rowdv = mysqli_fetch_array($querydv)) {
								echo "<option value='$rowdv[0]'>$rowdv[0]</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">

					<?php
					/* 
						echo "<div class='col-sm-12'><label>Phân loại tài sản: </label>"
						echo "<select  name='phanloai' class='form-control'  type='text'>";	
						echo "<option value=''></option>";						
						require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
						$sqlpl = "Select chitiethinhthai from tbldanhsachqd32 group by chitiethinhthai";
						$querypl=mysqli_query($con,$sqlpl);
						while($rowpl=mysqli_fetch_array($querypl))		
						{						
							$ten=$rowpl['chitiethinhthai'];	
							echo "<option value='$ten'>$ten</option>";	
						}
						echo "</select>";
						echo "</div>";
						*/
					?>
					<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
						<thead>
							<tr>
								<th style="text-align: center;background-color:rgb(16, 78, 211)" width="6%"><strong>Chọn</strong></th>
								<th style="text-align: center;background-color:rgb(16, 78, 211)"><strong>Phân loại tài sản</strong></th>
							</tr>
						<tbody id="rowlist1" class="rowlist">
							<?php
							$sqlpl = "Select chitiethinhthai from tbldanhsachqd32 Where mataisanqd32 Like 'T%' group by chitiethinhthai";
							$querypl = mysqli_query($con, $sqlpl);
							while ($rowpl = mysqli_fetch_array($querypl)) {
								echo "<tr>";
								echo "<td><input type = 'Checkbox' name = 'KT' id = '$rowpl[0]'></td>";
								echo "<td>$rowpl[0]</td>";
								echo "</tr>";
							}

							?>
						</tbody>
						</thead>
					</table>
					<input name="sobg" type="text" class="form-control" style="Display:none;" id="sobg">
				</div>
				<div class="form-group">
					<div class="col-sm-12"><label>Năm báo cáo: </label>
						<input name="nambc" type="text" id="nambc" class="form-control" value="<?php $now = getdate();
																								echo $now['year']; ?>">
					</div>
				</div>
				<div class="form-group">
					<input type="checkbox" name="fileexcel" id="fileexcel" />
					Xuất dữ liệu ra file excel
					</br>
					<div class="col-sm-8">
						<input name="MADV" type="text" id="MADV" class="form-control" style="display:none" value="<?php echo $madv; ?>">
						<input name="msdv" type="text" id="msdv" class="form-control" style="display:none" value="<?php $ms = explode(">", $madv);
																													echo $ms[0]; ?>">
					</div>
				</div>
				<div>
					<!--input type="checkbox" name="ccdc" value="Yes" />
					Bao gồm tất cả các tài sản
					</br-->
					<input type="checkbox" name="ts5" value="Yes" />
					Chỉ kết xuất tài sản trên 500 triệu
				</div>

				<div style="text-align:center">
					<button type="submit" name="create" class="btn btn-sm btn-success" id="hhhh">Tạo báo cáo</button>
					<button type="reset" name="reset" class="btn btn-sm btn-danger" onclick="window.location.href='/main.php'">Không tạo</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
	document.forms['thoai'].name.focus();

	function set_focus() {
		document.forms['thoai'].name.focus();
	}

	function kt() {
		var frm = window.document.thoai;
		if (frm.nambc.value == '') {
			alert('Xin vui lòng nhập năm muốn báo cáo !');
			document.forms['thoai'].nambc.focus();
			return false;
		} else
			return true;
	}
</script>
<script type="text/javascript">
	window.onsubmit = function() {
		document.thoai.action = get_action();
	}

	function get_action() {
		if ($("input[name='fileexcel']:checked").length == 1)
			return "/Tienich/SoTSCD107.php";
		else
			return "SoTSCD107.php";
	}
</script>
<!----------- Footer ------------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>