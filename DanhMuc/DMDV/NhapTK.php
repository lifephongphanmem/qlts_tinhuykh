<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li <?php if (strlen($ma[0]) < 16) { 	echo "style='display:none';";}?> class="auto-inherit-active-class">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title">Quản lý dữ liệu</span>
					</a>
					<ul>
						<li>
							
							<a  href="/Nhap/NhapTCTS/NhapDNTC.php">							
								<span class='title'>Đề nghị trang cấp tài sản</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTS/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định khác</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTSdat/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là đất</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTSnha/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là nhà</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/Nhap/NhapQLTSxe/NhapQLTS.php">							
								<span class='title'>Quản lý tài sản cố định là xe</span>
							</a>
												
						</li>
						<li>
					
							<a  href="/Nhap/NhapQLCC/NhapQLCC.php">							
								<span class='title'>Quản lý công cụ dụng cụ</span>
							</a>
				
						</li>
						<li>
							
							<a  href="/Nhap/NhapDNXL/NhapDNXL.php">							
								<span class='title'>Đề nghị xử lý tài sản</span>
							</a>
													
						</li>
						<li>
							
							<a  href="/Nhap/NhapTDTTTS/NhapTDTTTS.php">							
								<span class='title'>Thay đổi thông tin tài sản cố định</span>
							</a>
													
						</li>
						<li>
							
							<a  href="/Nhap/NhapTDTTDV/NhapTDTTDVchon.php">							
								<span class='title'>Thay đổi thông tin đơn vị</span>
							</a>
												
						</li>
						<li>
					
							<a  href="/Nhap/NhapKKTS/NhapKKTS.php">							
								<span class='title'>Kiểm kê tài sản, công cụ</span>
							</a>
												
						</li>
					</ul>
				</li>
				<li >
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span class="title">Tổng hợp báo cáo tài sản</span>
					</a>
					<ul>
						<li>
				
							<a  href="/Thoaikx/the.php">							
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
								<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
							</a>
												
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiBaHMTSCD.php">							
								<span class='title'>Bảng tính hao mòn tài sản cố định (C55 - HD)</span>
							</a>
						
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiBaTHDSTSDNTC.php">							
								<span class='title'>Danh sách tài sản đề nghị trang cấp</span>
							</a>
						
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiBaTHDMTSDNXL.php">							
								<span class='title'>Danh sách tài sản đề nghị xử lý</span>
							</a>
							
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiBaocaokktscd.php">							
								<span class='title'>Báo cáo kiểm kê tài sản cố định</span>
							</a>
							
						</li>
					</ul>
				</li>
				<li >
					<a href="ui-panels.html">
						<i class="entypo-newspaper"></i>
						<span class="title">Tổng hợp báo cáo công cụ</span>
					</a>
					<ul>
						<li>
							
							<a  href="/Thoaikx/ThoaiSoKDCLB.php">							
								<span class='title'>Sổ kho dụng cụ lâu bền</span>
							</a>
					
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiSoCTDCLB.php">							
								<span class='title'>Sổ chi tiết dụng cụ lâu bền</span>
							</a>
					
						</li>
						<li>
					
							<a  href="/Thoaikx/ThoaiBaTHCTDCLB.php">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số lượng)</span>
							</a>
							
						</li>
						<li>
					
							<a  href="/Thoaikx/ThoaiBaTHCTDCLBt.php">							
								<span class='title'>Sổ tổng hợp dụng cụ lâu bền (số tiền)</span>
							</a>
							
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiSoTDDCLB.php">							
								<span class='title'>Sổ theo dõi dụng cụ lâu bền (S32-H)</span>
							</a>
				
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiSoTDDCLBcb.php">							
								<span class='title'>Sổ theo dõi tài sản và công cụ</span>
							</a>
					
						</li>
						<li>
						
							<a  href="/Thoaikx/ThoaiDmDCLB.php">							
								<span class='title'>Danh mục dụng cụ lâu bên theo QĐ32</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiSoBaohong.php">							
								<span class='title'>Giấy báo hỏng, mất công cụ dụng cụ</span>
							</a>
						
						</li>
						<li>
							
							<a  href="/Thoaikx/ThoaiBaocaoCCDC.php">							
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
				<li <?php if (strlen($ma[0]) < 16){echo "style='display:none';";}?>>
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title">Quản lý danh mục</span>
					</a>
					<ul>
						<li>							
							
							<a  href="/DanhMuc/DMTS/DMTS.php">
								<span class='title'>Danh mục tài sản</span>
							</a>
							
						</li>
						<li>
							
							<a  href="/DanhMuc/DMCC/DMCC.php">							
								<span class='title'>Danh mục công cụ</span>
							</a>
												
						</li>
						<li>
							
							<a  href="/DanhMuc/DMPB/DMPB.php">							
								<span class='title'>Danh mục phòng ban (bộ phận)</span>
							</a>
											
						</li>
						<li>
							
							<a  href="/DanhMuc/DMCB/DMCB.php">							
								<span class='title'>Danh mục cán bộ</span>
							</a>
												
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
							<a  href="/Tienich/Taohaomontc.php">							
								<span class='title'>Tạo hao mòn tất cả tài sản</span>
							</a>						
						</li>
						<!--li>
							<a  href="/Tienich/nhandlaccess.php">							
								<span class='title'>Nhận tài sản, công cụ từ file xml</span>
							</a>			
						</li-->
						<li>
							<a href="extra-calendar.html">
								<span class="title">Hướng dẫn sử dụng</span>
							</a>
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTS/tracuuts.php">							
								<span class='title'>Tìm kiếm thông tin tài sản</span>
							</a>											
						</li>
						<li>					
							<a  href="/Tracuu/TraCuuCC/tracuucc.php">							
								<span class='title'>Tìm kiếm thông tin công cụ</span>
							</a>						
						</li>
						<li>
							<a  href="/Tracuu/TraCuuTC/tracuutc.php">							
								<span class='title'>Tìm kiếm thông tin trang cấp</span>
							</a>	
						</li>
						<li>
							<a  href="/Tracuu/TraCuuDN/tracuudn.php">							
								<span class='title'>Tìm kiếm thông tin đề nghị xử lý</span>
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
						
							<a  href="/DanhMuc/DMDV/DMDV.php">							
								<span class='title'>Danh sách tài khoản</span>
							</a>
									
						</li>						
						<li>
							<a  onclick="showAjaxModal();">
								<i class='entypo-pencil'></i>Thay đổi mật khẩu
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
<script language='javascript'>
 $(document).ready(function() {
  $('#tinh').change(function() {
   giatri = this.value;
   $('#sthuyen').load('ajax_huyen.php?id_a='+giatri);
  });
 });
 $(document).ready(function() {
  $('#matinh').change(function() {
   giatri = this.value;   
   $('#divhuyen').load('ajax_mahuyen.php?id_a='+giatri);  
  });
 });
function showAjaxModal1()
{			
	giatri = $('#matinh').val()+">"+$('#mahuyen').val();
	window.location.assign('NhapTK.php?id='+giatri);			
}
 function showAjaxModal2()
{
	giatri = $('#tinh').val()+">"+$('#huyen').val();
	window.location.assign('NhapTK.php?id='+giatri);
}
</script>
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	function so($matinh)
	{
		$kq = 2;
	    global $con;
		$sql = "Select madonvi from thongtindonvi where length(madonvi) = 8 and Left(madonvi,4) = '".$matinh."' and Mid(madonvi,6,1) = 'S' and Mid(madonvi,6,3) <> 'S01'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq ++;
		}		
		if($kq <10)
			$kq = "0".$kq;			
		return $kq;
	}
	function sobc($matinh)
	{
		$giatri="";
		$kq = 2;
			global $con;
		$sql = "Select madonvi from thongtindonvi where length(madonvi) > 8 and Left(madonvi,4) = '".$matinh."' and Mid(madonvi,6,1) = 'S' and Mid(madonvi,6,3) <> 'S01'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq ++;
		}		
		if($kq <10)
			$kq = "0".$kq;	
		$kqbc = 2;		
		$sql = "Select madonvi from thongtindonvi where length(madonvi) > 8 and Left(madonvi,4) = '".$matinh."' and Mid(madonvi,6,1) = 'S' and Mid(madonvi,6,3) <> 'S01'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kqbc ++;
		}		
		if($kqbc <10)
			$kqbc = "00".$kqbc;	
		else if($kqbc > 9 && $kqbc <100)
			$kqbc = "0".$kqbc;
		$giatri = $kq.".000.".$kqbc;
		return $giatri;
	}
	function donvi($madonvitv)
	{
		$kq = 2;
			global $con;
		$sql = "Select madonvi from thongtindonvi where length(madonvi) >= 16 and Left(madonvi,8) = '".$madonvitv."' and Mid(madonvi,10,3) = 'PTC'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq ++;
		}		
		if($kq <10)
			$kq = "00".$kq;	
		else if($kq > 9 && $kq <100)
			$kq = "0".$kq;	
		$kq  =".PTC.".$kq;
		return $kq;
	}
	function capso($matinh)
	{
		$kq = 2;
			global $con;
		$sql = "Select madonvi from thongtindonvi where length(madonvi) >= 16 and Left(madonvi,4) = '".$matinh."' and Mid(madonvi,6,3) = 'S01' and Right(madonvi,3) = '001'";		
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq ++;
		}		
		if($kq <10)
			$kq = "00".$kq;	
		else if($kq > 9 && $kq <100)
			$kq = "0".$kq;			
		return $kq;
	}
	function capphong($madonvitv)
	{
		$kq = 1;
		global $con;
		$sql = "Select madonvi from thongtindonvi where length(madonvi) >= 16 and Left(madonvi,12) = '".$madonvitv."'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{			
			$kq ++;
		}		
		if($kq <10)
			$kq = "00".$kq;	
		else if($kq > 9 && $kq <100)
			$kq = "0".$kq;			
		return $kq;
	}
	function taomaso($matv)
	{
	    $kq=1;
	    global $con;
	    $d = strlen($matv);
	    $sql = "Select madonvi from thongtindonvi WHERE length(madonvi)>= 16 and LEFT(madonvi,$d) = '".$matv."'";
	    echo $sql;
	    $qrsql = mysqli_query($con,$sql);
	    while ($row = mysqli_fetch_array($qrsql))
	    {
	        $kq ++;
	    }
	    if($kq <10)
			$kq = "00".$kq;
		else if($kq > 9 && $kq <100)
			$kq = "0".$kq;
		return $kq;
	}
	function tendn($matv)
	{
	    $kq=1;
	    global $con;
	    $d = strlen($matv);
	    $sql = "Select madonvi from thongtindonvi WHERE LEFT(tendangnhap,$d) = '".$matv."'";
	    $qrsql = mysqli_query($con,$sql);
	    while ($row = mysqli_fetch_array($qrsql))
	    {
	        $kq ++;
	    }
	    if($kq <10)
			$kq = "00".$kq;
		else if($kq > 9 && $kq <100)
			$kq = "0".$kq;
		return $matv.$kq;
	}
	function CheckName($matv)
	{
	    global $con;
	    $sql = "Select tendangnhap from thongtindonvi where tendangnhap = '".$matv."'";
	    $qrsql = mysqli_query($con,$sql);
	    if(mysqli_num_rows($qrsql) > 0)
	        return false;
	    else
	        return true;
	}
	$madonvi ="";	
	if(isset($_POST['create']))
	{
		$madonvi = $_POST['tinh'];
		$nganh = $_POST['nganh'];
		$mahuyen = $_POST['huyen'];
		if(strlen($_POST['huyen']) == 0 && strlen($_POST['tinh']) > 0 )
		{
		    $matv = $_POST['tinh'].".".$_POST["nganh"];
			if($_POST['phanloai'] == "Đơn vị báo cáo")
				$madonvi .= ".". $nganh.".000.".taomaso($matv);
		    else
		    {
		        if($nganh != "STC")
		           $madonvi .= ".".$nganh;
		    }
		}
		if(strlen($_POST['huyen']) > 0 && strlen($_POST['tinh']) >0 )
		{
			$madonvi = $_POST['tinh'].".".$_POST['huyen'];
			$matv = $_POST['tinh'].".".$_POST['huyen'].".".$nganh;
			if($_POST['phanloai'] == "Đơn vị báo cáo")
				$madonvi .= ".". $nganh.".".taomaso($matv);
			else
				if($nganh != "PTC")
				    $madonvi .= ".".$nganh;
		}
		if($madonvi != "")
		{
			$tendangnhap =  tendn($_POST["tendn"]);
			$mk = md5(123456);
			$mkmt = md5("vppmcs");
			if(CheckName($tendangnhap))
			{
                $sql = "insert into thongtindonvi (madonvi,tendv,tendangnhap,matkhau,loaihinh,passmaster) values ('$madonvi','$_POST[tendv]','$tendangnhap','$mk','$_POST[phanloai]','$mkmt')";
                echo $sql;
                $qrsql = mysqli_query($con,$sql);
			}
			else
			    echo 'Tên đăng nhập đã tồn tại!';
		}
	}
	if(isset($_POST['taotaikhoan']))
	{
	    $mk = md5("vppmcs");
	    $sql = "Select madonvi from thongtindonvi where madonvi <> 'msdv'";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$sql1 = "Update thongtindonvi set passmaster='".$mk."' where madonvi = '".$row['madonvi']."'";
			echo $sql1."<br/>";
			$qrsql1 = mysqli_query($con,$sql1);
		}
	}
?>
<div class="panel panel-dark" <?php if($ma[0] != "msdv") echo "style=display:none";?> >
		<div class="panel-heading">
			<div class="panel-title">
				Danh sách đơn vị
			</div>	
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>				
			</div>
		</div>
	<div class="panel-body">
					 <form name="thoai" action="NhapTK.php" role="form" method="Post" class="form-horizontal">
					 <div class=" col-sm-12 form-group">
					    <label class="col-sm-15" style = 'margin-top:7px;'>Tỉnh: </label>
						<div class="col-sm-4">
						<select  name="tinh" class="form-control"  type="text" id= "tinh">
						<option value=""></option>
						<?php
						$malc="";
						$maid = $_GET['id'];
	                    $tachma = explode(">",$maid);
						$sqlpl = "Select distinct matinh,tentinh from tbldmtinhhuyenxa order by tentinh";
						$querypl=mysqli_query($con,$sqlpl);
						while($rowpl=mysqli_fetch_array($querypl))
						{
							$ten=$rowpl['tentinh'];
							$matinh=$rowpl['matinh'];
							if($matinh == $_POST['tinh'])
							{
							    $malc = $matinh;
							    echo "<option selected = 'selected' value='$matinh'>$ten</option>";
							}
							else
							    echo "<option value='$matinh'>$ten</option>";
						}
						?>
						</select></div>
					    <label class="col-sm-15 " style = 'margin-top:7px;'>Huyện:</label>
						<div class="col-sm-45" id = sthuyen>
						<?php
					    $sqlct = "Select mahuyen,tenhuyen from tbldmtinhhuyenxa where matinh = '".$malc."'";
                        $qrct = mysqli_query($con,$sqlct);
                        echo"<div id = sthuyen class='form-group'>";
                            echo"<div class='col-sm-12.'><select  name='huyen' class='form-control'  type='text'>"	;
                            echo"<option value=''></option>";
                        while($rct=@mysqli_fetch_array($qrct))
                        {
                            $ten = $rct['tenhuyen'];
                            $mahuyen=$rct['mahuyen'];
                            if($mahuyen == $_POST['huyen'])
							{
							    echo "<option selected = 'selected' value='$mahuyen'>$ten</option>";
							}
							else
							    echo "<option value='$mahuyen'>$ten</option>";
                        }
                        echo "</select></div>	";
                        echo "</div>";
                        ?>
						</div>
						<label class="col-sm-15" style = 'margin-top:7px;'>Tên đơn vị: </label>
						<div class="col-sm-10"><input  name="tendv" class="form-control"  type="text">
					    </div>
						<label class="col-sm-15" style = 'margin-top:7px;'>Tên đăng nhâp: </label>
						<div class="col-sm-10"><input  name="tendn" class="form-control" value="<?php if(isset($_POST['tendn'])) echo $_POST['tendn']?>" type="text">
					    </div>
					    <label class="col-sm-15" style = 'margin-top:7px;'>Phân loại: </label>
						<div class= "col-sm-10">
							<select name ="phanloai" class = "form-control" type = "text">
							<option value ="Đơn vị tổng hợp">Đơn vị tổng hợp</option>
							<option selected="selected" value = "Đơn vị báo cáo">Đơn vị báo cáo</option>
							</select>
						</div>
						<label class="col-sm-15 " style = 'margin-top:7px;'>Ngành:</label>
						 <div class= 'col-sm-10'>
						 <select  name='nganh' class='form-control'  type='text'>
						<?php
					    $sqlct = "SELECT Concat(manganh,' - ',tennganh) As tennganh,manganh FROM tblnganh order by manganh";
                        $qrct = mysqli_query($con,$sqlct);
                        while($rct=@mysqli_fetch_array($qrct))
                        {
                            $ten = $rct['tennganh'];
                            $manganh=$rct['manganh'];
                            if($manganh == $_POST['nganh'])
							{
							    echo "<option selected = 'selected' value='$manganh'>$ten</option>";
							}
							else
							    echo "<option value='$manganh'>$ten</option>";
                        }
                        ?>
                        </select></div>

<!--
					<div class="form-group">
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option"  value="Sở tài chính"> Sở tài chính
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Sở giáo dục"> Sở giáo dục
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Sở khác"> Sở khác
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Phòng tài chính"> Phòng tài chính
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Phòng giáo dục"> Phòng giáo dục
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Phòng khác"> Phòng khác hoặc các đơn vị báo cáo lên phòng tài chính
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" value="Trường thuộc cấp sở"> Trường thuộc cấp sở giáo dục
							</div>
							<div class= "col-sm-6">
							<input class="col-sm-1" type="radio" name="option" checked value="Trường thuộc cấp phòng"> Trường thuộc cấp phòng giáo dục
							</div>
					</div-->
					</div>
					<div>
						<input name="MADV" type="text" class="form-control" style = "Display:none;" value = "<?php echo $madv; ?>">					
					<div style="text-align:center">
					<button type="submit" name="create" class="btn btn-sm btn-success">Tạo đơn vị</button>
					<button type="reset" name="reset" class="btn btn-sm btn-danger" onclick="window.location.href='/main.php'">Không tạo</button>
					<button type="submit" name="taotaikhoan" class="btn btn-sm btn-success">Gán passmaster</button>
					</div>
				</div>
				  </form>
		</div>
</div>
</br>
<?php
	//$tttc=$_GET['id'];
	//$key=explode(">",$tttc);
	//$mhuyen=$key[0].".".$key[1];
?>
<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				Danh sách đơn vị
			</div>	
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>				
			</div>
		</div>
	<div class="panel-body">		
		<div  class='col-sm-4'>
			<select name='matinh' class='form-control' id='matinh'>
				<option selected='selected' value=''>Tỉnh</option>			
				<?php
					$sqldv = "Select distinct matinh,tentinh from tbldmtinhhuyenxa order by tentinh";
					$querydv=mysqli_query($con,$sqldv);
					while($rowdv=mysqli_fetch_array($querydv))
					{	
						if($rowdv[0] == $key[0])
							echo "<option selected='selected' value='$rowdv[0]'>$rowdv[1]</option>";
						else
							echo "<option value='$rowdv[0]'>$rowdv[1]</option>";	
					}	
				?>								
			</select>
		</div>			
		<div id = divhuyen class='col-sm-4'>
			<select name='mahuyen' class='form-control' id='mahuyen'>
				<option selected='selected' value=''>Huyện</option>			
				<?php
					$sqldv = "Select distinct mahuyen,tenhuyen from tbldmtinhhuyenxa where matinh = '$key[0]' order by tenhuyen";
					echo $sqldv;
					$querydv=mysqli_query($con,$sqldv);
					while($rowdv=mysqli_fetch_array($querydv))
					{	
						if($rowdv[0] == $key[1])
							echo "<option selected='selected' value='$rowdv[0]'>$rowdv[1]</option>";
						else
							echo "<option value='$rowdv[0]'>$rowdv[1]</option>";	
					}	
				?>								
			</select>	
		</div>
		<a  onclick="showAjaxModal1();" class='btn btn-success'>
			<i class='entypo-search'></i>Tìm kiếm
		</a>
		</div> 			
	</div>	
<table  style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>Mã</th>
					<th>Tên đơn vị</th>
					<th>Tên đăng nhập</th>					
					<th>Loại hình đơn vị</th>										
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php
$masoid = $_GET['id'];
$maid = explode(">",$masoid);
if($maid[0] == "")
	$sql = "select tendv,tendangnhap,loaihinh,madonvi from thongtindonvi  where  madonvi <> 'msdv'  order by madonvi DESC";
else
	if($maid[1] == "")
		$sql = "select tendv,tendangnhap,loaihinh,madonvi from thongtindonvi where Left(madonvi,4) = '".$maid[0]."'  and  madonvi <> 'msdv'  order by madonvi DESC";
	else
		$sql = "select tendv,tendangnhap,loaihinh,madonvi from thongtindonvi where Left(madonvi,8) like '".$maid[0].".".$maid[1]."%' and  madonvi <> 'msdv'  order by madonvi DESC";
$kq = mysqli_query($con,$sql);
$tatca = "";    
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
	//$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".$row[5].">".$row[6].">".$row[7].">".$row[9].">".$row[10].">".$row[11].">".$row[12].">".$row[13];
            echo"<tr>";
                echo"<td>".$row['madonvi']."</td>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";				
                echo"<td>
						<a href=\"xoa.php?id=$row[madonvi]\" onclick=\"return confirm('Bạn muốn xóa sản phẩm này?')\" class='btn btn-red '>
							Xóa
					</td>";
            echo"</tr>";
     }}         
 ?>
 <!-- 		<a data-id='$tatca' title='Add this item' class='open-AddBookDialog btn btn-blue ' href='#addBookDialog'>
							Sửa</a>			-->
			</tbody>
		</table>
<!----------- Footer ------------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>