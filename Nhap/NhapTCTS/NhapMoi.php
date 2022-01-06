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
				<li class="active">

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
	<script language="javascript" type="text/javascript">
		document.forms['nhapmoi'].mataisanth.focus();
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
		>><a class="tieude" href='NhapDNTC.php'>
			Danh sách trang cấp
		</a>
		>><a class="tieude">
			Nhập mới
		</a>
	</div>
	<div class="col-sm-12">
		<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">
			<div class="col-sm-12">
				<fieldset>
					<legend>Thông tin tài sản</legend>
					<label class="col-sm-2 control-label">Tên tài sản<span style="padding-left:0px; color:red;">*</span>:</label>
					<?php
					$sql="select mataisanqd32,tentaiqd32,chitiethinhthai,dacdiemtaisan from tbldanhsachqd32 where mataisanqd32 like 'TS%'";
					$sql1=mysqli_query($con,$sql);
					echo"<div  class='col-sm-4'>";
					echo"<select name='mataisan' class='form-control js-example-basic-single' data-validate = 'required' id='mataisan'>";
					echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
					while ($data=mysqli_fetch_row($sql1))
					{
						echo "<option value='$data[0]'>".$data[1]."</option>";
					}
					echo"</select>";
					echo"</div>";
					?>
					<label for="field-3" class="col-sm-2 control-label">Tên chi tiết<span style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-4">
						<input name="tengoi" type="text" data-validate = "required" class="form-control" id="field-3"/>
					</div>
					<label for="field-3" class="col-sm-2 control-label">Cấp hạng, chủng loại<span style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-4">
						<input name="caphang" type="text" data-validate = "required" class="form-control" id="field-3"/>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
					<div class="col-sm-4">
						<input data-inputmask="'alias': 'date'" name="ngaythang" tabindex="-1" type="text" data-validate = "required" class="form-control" id="ngaynhap"/>
					</div>
				</fieldset>
			</div>
			<div class="col-sm-12">
				<fieldset>
					<legend>Thông tin chi tiết</legend>
					<label for="field-6" class="col-sm-2 control-label">Số lượng:</label>
					<div class="col-sm-4">
						<input name="soluong" type="text" class="form-control" id="soluong">
					</div>
					<label for="field-6" class="col-sm-2 control-label">Dự toán:</label>
					<div class="col-sm-4">
						<input name="sotien" type="text" class="form-control" data-mask="fdecimal" id="sotien">
					</div>
				</fieldset>
			</div>
			<div class="col-sm-12">
				<fieldset>
					<legend>Thông tin khác</legend>
					<lable class = "col-sm-2 control-lable">Đơn vị tính:</lable>
					<div class="col-sm-4">
						<input class="form-control" name="donvitinh" data-validate = "required">
					</div>
					<label for="field-6" class="col-sm-2 control-label">Hình thức:</label>
					<div class="col-sm-4">
						<select name="hinhthuc" type="text" class="form-control" id="hinhthuc">
							<option value='Mua sắm'>Mua sắm</option>
							<option value='Tiếp nhận'>Tiếp nhận</option>
						</select>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Nguồn vốn:</label>
					<div class="col-sm-4">
						<input name="nguonvon" type="text" class="form-control" id="field-3"/>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Phương thức TT:</label>
					<div class="col-sm-4">
						<input name="phuongthuctt" type="text" class="form-control" id="field-3"/>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Địa điểm:</label>
					<div class="col-sm-4">
						<input name="diadiem" type="text" class="form-control" id="field-3"/>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Đề xuất:</label>
					<div class="col-sm-4">
						<input name="dexuat" type="text" class="form-control" id="field-3"/>
					</div>
					<label for="field-4" class="col-sm-2 control-label">Ghi chú:</label>
					<div class="col-sm-10">
						<input name="ghichu" type="text" class="form-control" id="field-3"/>
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="submit" name="save" onclick ="getFocus() " class="btn btn-blue" value = "Cập nhật"/>
			</div>
		</form>
	</div>
<?php
//
$ab = $ma[0];
function IDTS()
{
	global $con;
	$kq="";
	global $ab;
	$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$ab'";
	$qrsql= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		$kq = $row[0];
	}
	return $kq;
}
if (isset($_POST['save']))
{
	$tentaisan="";	$chitiethinhthai="";
	$donvitinh = $_POST["donvitinh"];
	$mataisan=$_POST['mataisan'];
	$tengoi=$_POST["tengoi"];
	$caphang=$_POST["caphang"];
	$ngaythang=doingay($_POST["ngaythang"]);
	$hinhthuc=$_POST["hinhthuc"];
	$soluong=$_POST["soluong"];
	$sotien=kieudouble($_POST["sotien"]);
	$nguonvon = $_POST["nguonvon"];
	$phuongthuctt = $_POST["phuongthuctt"];
	$diadiem = $_POST["diadiem"];
	$dexuat = $_POST["dexuat"];
	$ghichu = $_POST["ghichu"];
	$sqlts = "Select tentaiqd32,chitiethinhthai From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
	$kqts = mysqli_query($con,$sqlts);
	while($row=mysqli_fetch_array($kqts)){
		$tentaisan=$row[0];
		$chitiethinhthai=$row[1];
	}
	$sql="Insert into tbltrangcap(mataisan,tentaisan,tengoi,chitiethinhthai,caphang,ngaythang,hinhthuc,soluong,sotien,madonvi,tendv,tinhtrang,xemt,xemh,nguonvon,phuongthuctt,diadiem,dexuat,donvitinh,ghichu)";
	$sql=$sql." VALUES('$mataisan','$tentaisan','$tengoi','$chitiethinhthai','$caphang','$ngaythang','$hinhthuc',$soluong,$sotien,'$ab','$ma[2]','Chờ duyệt','Chưa xem','Chưa xem','$nguonvon','$phuongthuctt','$diadiem','$dexuat','$donvitinh','$ghichu')";
	$kq=mysqli_query($con,$sql);
	if($kq)
	{
		echo '<script>alert("Cập nhật dữ liệu thành công");</script>';
	}
	//header("Location:NhapDNTC.php");
}
?>
	</div>
	</div>
	<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>