<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>								
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
							
							<a  href="/Nhap/NhapTCTS/NhapDNTC.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS500/NhapQLTS.php">	
								<i class="entypo-flag"></i>									
								<span class='title'>Tài sản cố định khác từ 500 triệu</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS/NhapQLTS.php">	
								<i class="entypo-flag"></i>								
								<span class='title'>Tài sản cố định khác dưới 500 triệu</span>
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
				<li class="opened active">
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
						<li class="active" >
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
							<a href="http://hdts.890m.com/">
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
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>
	<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap; }
		table > tbody > tr.highlight > td,
		table > tbody > tr.highlight > th {
		   /*background-color: pink !important;*/
		  color: #e74c3c;
		}
	</style>
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
				paging:         false
			} );

			new $.fn.dataTable.FixedColumns( table, {
				leftColumns: 0,
				rightColumns: 1
			} );
		} );
	</script>
<script>
$(document).on("click", ".open-AddBookDialog", function (e) {	
    e.preventDefault();
    var _self = $(this);	
    var myBookId = _self.data('id').split('>');	
    $("#bookId").val(myBookId[0]);
	$("#hinhthaitaisancs").val(myBookId[1]);
	$("#chitiethinhthaics").val(myBookId[2]);
	$("#tentaiqd32cs").val(myBookId[3]);
	$("#dacdiemtaisancs").val(myBookId[4]);	
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
		<h3>Nhập danh sách công cụ dụng cụ</h3>
		<a <?php if(strlen($ma[0]) >= 16)
		{ echo "style='display:none'";}?> onclick="showAjaxModal();" class='btn btn-success'>
			Thêm mới
		</a>
<?php 	
	function formatso($fmso)
	{
		$kqso = "";
		if ($fmso <10)
			$kqso = "000".$fmso;
		else if ($fmso <100)
			$kqso = "00".$fmso;	
		else if ($fmso <1000)
			$kqso = "0".$fmso;	
		else
			$kqso = $fmso;
		return $kqso;		
	}
	
	if (isset($_POST['capnhatts']))
	{
		$sqlm = "select left(mataisanqd32,4) as MA, right(mataisanqd32,4) as SO from tbldanhsachqd32 where mataisanqd32 like 'C%' order by mataisanqd32";
		$kqm = mysqli_query($con,$sqlm);
		$ma = "";$so=0;
		while($row=mysqli_fetch_array($kqm)){
			$ma = $row[0];
			$so = $row[1];
		}
		$macc = "";
		$so = (int)$so + 1;
		$macc = $ma.".".formatso($so);
		$hinhthaitaisan=$_POST["hinhthaitaisan"];
		$chitiethinhthai=$_POST["chitiethinhthai"];
		$tentaiqd32=$_POST["tentaiqd32"];
		$dacdiemtaisan=$_POST["dacdiemtaisan"];			
		$sql="INSERT INTO tbldanhsachqd32(mataisanqd32,hinhthaitaisan,chitiethinhthai,tentaiqd32,dacdiemtaisan)
		VALUES ('$macc','$hinhthaitaisan','$chitiethinhthai','$tentaiqd32','$dacdiemtaisan')";				
		$kq=mysqli_query($con, $sql);
	}        	
?>	
<?php
	if (isset($_POST['chinhsuatss'])) 
	{
		$hinhthaitaisan = $_POST['hinhthaitaisancs'];
		$chitiethinhthai = $_POST['chitiethinhthaics'];
		$tentaiqd32 = $_POST['tentaiqd32cs'];
		$dacdiemtaisan = $_POST['dacdiemtaisancs'];
   		$sql="Update tbldanhsachqd32 set hinhthaitaisan='$hinhthaitaisan',chitiethinhthai='$chitiethinhthai',tentaiqd32='$tentaiqd32',dacdiemtaisan='$dacdiemtaisan'";
		$sql= $sql." Where mataisanqd32 = '".$_POST['bookId']."'";			
		$kq=mysqli_query($con,$sql);			
	}        
?>	
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>Mã số công cụ</th>
					<th>Hình thái công cụ</th>
					<th>Chi tiết hình thái công cụ</th>
					<th>Tên gọi công cụ</th>
					<th>Đặc điểm công cụ</th>
					<th>Năm sử dụng</th>
					<th>Phần trăm</th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>	
<?php 
//
$sql = "select mataisanqd32,hinhthaitaisan,chitiethinhthai,tentaiqd32,dacdiemtaisan,namsudung,phantramhaomon from tbldanhsachqd32 where mataisanqd32 like 'C%'";
$kq = mysqli_query($con,$sql);
$tatca = ""; 
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
	$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".$row[5].">".$row[6];
            echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"<td>$row[5]</td>";
				echo"<td>$row[6]</td>";
		if(strlen($ma[0]) < 16)
		{
                echo"<td>
						<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
							Sửa</a>
						<a href=\"xoa.php?id=$row[0]\" onclick=\"return confirm('Bạn muốn xóa sản phẩm này?')\" class='btn btn-red '>
							
							Xóa
						</a>						
					</td>";
		}
		else
		{
			echo"<td>
						<a title='Chỉ có đơn vị tổng hợp mới có thể thêm sửa, xóa' class='btn btn-warning ' >
							Sửa</a>
						<a title='Chỉ có đơn vị tổng hợp mới có thể thêm sửa, xóa' class='btn btn-warning '>							
							Xóa
						</a>						
					</td>";
		}
            echo"</tr>";
     }}         
 ?> 
			</tbody>
		</table>
		
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
						<form role='form' method='POST' action = 'DMCC.php' class='form-horizontal form-groups-bordered'>						
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Mã số công cụ:</label>
								<div class="col-sm-8">
									<input name="mataisanqd32" readonly="false" type="text" class="form-control" id="field-1">
								</div>								
								<label class="col-sm-3 control-label">Hình thái công cụ:</label>																
								<?php								
								$sql="select hinhthaitaisan from tbldanhsachqd32 Where mataisanqd32 like 'C%' Group by hinhthaitaisan";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
								echo"<select name='hinhthaitaisan' class='form-control' id='hinhthaitaisan'>";
								echo"<option selected='selected' value=''>Chọn hình thái</option>";
								while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
								echo"</select>";
								echo"</div>";
								?>																
								<label class="col-sm-3 control-label">Chi tiết hình thái:</label>
								<?php								
								$sql="select chitiethinhthai from tbldanhsachqd32 Where mataisanqd32 like 'C%' Group by chitiethinhthai";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
								echo"<select name='chitiethinhthai' class='form-control' id='chitiethinhthai'>";
								echo"<option selected='selected' value=''>Chọn chi tiết hình thái</option>";
								while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>								
								<label class="col-sm-3 control-label">Tên công cụ:</label>
								<div class="col-sm-8">
									<input name="tentaiqd32" type="text" class="form-control" id="ttcanhan">
								</div>
								<label class="col-sm-3 control-label">Đặc điểm:</label>
								<div class="col-sm-8">									
									<select name='dacdiemtaisan' class='form-control'>									
									<option selected='selected' value='Hữu hình'>Hữu hình</option>
									<option selected='selected' value='Vô hình'>Vô hình</option>
									<option selected='selected' value=''>Chọn năm đặc điểm</option>
									</select>
								</div>									
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatts" class="btn btn-blue" value = "Cập nhật">
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
					<h4 class="modal-title" style="text-align:center;"><strong>Chỉnh Sửa thông công cụ dụng cụ</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role='form' method='POST' action = 'DMCC.php' class='form-horizontal form-groups-bordered'>
							<div class="form-group">
								<label class="col-sm-3 control-label">Mã công cụ:</label>
								<div class="col-sm-8">
									<input name="bookId" type="text" class="form-control" id="bookId">									
								</div>
								<label class="col-sm-3 control-label">Hình thái công cụ:</label>																
								<?php								
								$sql="select hinhthaitaisan from tbldanhsachqd32 Where mataisanqd32 like 'C%' Group by hinhthaitaisan";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
								echo"<select name='hinhthaitaisancs' class='form-control' id='hinhthaitaisancs'>";
								echo"<option selected='selected' value=''>Chọn hình thái</option>";
								while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
								echo"</select>";
								echo"</div>";
								?>																
								<label class="col-sm-3 control-label">Chi tiết hình thái:</label>
								<?php								
								$sql="select chitiethinhthai from tbldanhsachqd32 Where mataisanqd32 like 'C%' Group by chitiethinhthai";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8'>";
								echo"<select name='chitiethinhthaics' class='form-control' id='chitiethinhthaics'>";
								echo"<option selected='selected' value=''>Chọn chi tiết hình thái</option>";
								while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>								
								<label class="col-sm-3 control-label">Tên công cụ:</label>
								<div class="col-sm-8">
									<input name="tentaiqd32cs" type="text" class="form-control" id="tentaiqd32cs">
								</div>
								<label class="col-sm-3 control-label">Đặc điểm:</label>
								<div class="col-sm-8">									
									<select name='dacdiemtaisancs' class='form-control' id="dacdiemtaisancs">									
									<option selected='selected' value='Hữu hình'>Hữu hình</option>
									<option selected='selected' value='Vô hình'>Vô hình</option>
									<option selected='selected' value=''>Chọn năm đặc điểm</option>
									</select>
								</div>														
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="chinhsuatss" class="btn btn-blue" value = "Cập nhật">
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