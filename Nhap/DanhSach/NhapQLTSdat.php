<?php require "general.php";
 include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>												
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->				
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
						<li>						
							<a  href="/Tienich/nhandlexcel.php">	<i class="entypo-picasa"></i>							
								<span class='title'>Nhận tài sản, công cụ từ file excel</span>
							</a>			
						</li>							
						<li>
							<a href="/Tienich/huongdan.php">	<i class="entypo-picasa"></i>	
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
							<a  onclick="showAjaxModalmk();">
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
	$("#mataisancs").val(myBookId[1]);
	$("#tenchitietcs").val(myBookId[3]);
	$("#ngaynhapcs").val(myBookId[4]);
	$("#ngaysudungcs").val(myBookId[5]);
	$("#DTKVcs").val(myBookId[6]);
	$("#ngansachcs").val(myBookId[7]);
	$("#nguonkhaccs").val(myBookId[8]);
	$("#TKVDATcs").val(myBookId[9]);
	$("#noidungcs").val(myBookId[10]);
    $(_self.attr('href')).modal('show');		
});
 </script>

 <script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>

 <script type="text/javascript">
	function showAjaxModal()
	{		
		jQuery('#modal-6').modal('show', {backdrop: 'static'});			
	}
	function showAjaxModal1()
	{
		giatri = $('#noidung').val()+">"+$('#xem').val();
		window.location.assign('NhapQLTSdat.php?id='+giatri);			
	}
</script>	
<?php
	$tttc=$_GET['id'];	
	$key=explode(">",$tttc);	
?>		
</br>	
		<div class="panel panel-dark">
		<div class="panel-heading">
			<div class="panel-title">
				Quản lý tài sản cố định là đất
			</div>	
			<div class="panel-options">
				<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>				
			</div>
		</div>
	<div class="panel-body">
		<label class='col-sm-2' style = "margin-top:7px;" >Đơn vị sử dụng:</label>
		<div  class='col-sm-5'>
			<select name='noidung' style="margin-left:-40px;" class='form-control' id='noidung'>
				<option selected='selected' value=''>Đơn vị</option>			
				<?php					
					$sqldv = "Select madonvi,tendv from thongtindonvi where madonvi like '$ma[0]%'";
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
		<label class='col-sm-2' style = "margin-top:7px;" >Tình trạng:</label>
		<div  class='col-sm-2'>
			<select name='xem' style="margin-left:-40px;margin-left:-71px;" class='form-control' id='xem'>
				<?php					
					if($key[1] == "")
					{
						echo "<option selected='selected' value=''>Tình trạng</option>";
						echo "<option  value='Đã xem'>Đã xem</option>";				
						echo "<option  value='Chưa xem'>Chưa xem</option>";
					}	
					else if ($key[1] == "Đã xem")
					{
						echo "<option selected='selected' value =''> Tình trạng</option>";
						echo "<option selected='selected' value='Đã xem'>Đã xem</option>";	
						echo "<option  value='Chưa xem'>Chưa xem</option>";
					}	
					else
					{
						echo "<option selected='selected' value =''>Tình trạng</option>";
						echo "<option selected='selected' value='Đã xem'>Đã xem</option>";	
						echo "<option selected='selected' value='Chưa xem'>Chưa xem</option>";
					}
				?>										
			</select>
		</div>	
		<a  onclick="showAjaxModal1();" class='btn btn-success' style = "margin-top:2px;margin-left:-40px;">
			<i class='entypo-search'></i>Tìm kiếm
		</a>	
	</div>
	</div>	
		<div id="load_screen"><div id="loading"><table style="line-height: 0;" class="stripe row-border order-column"  id="table-2">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên tài sản</th>
					<th>Tên chi tiết</th>
					<th>Ngày sử dụng</th>
					<th>Diện tích khuôn viên</th>
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php 
$ab = $ma[0];
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
function gettinhhuyen()	
{
	global $ab;
	if(strlen($ab) < 5)
		return "Tỉnh";
	else
		return "Huyện";
}
//
if($tttc != "0")
{
	if(gettinhhuyen() == "Tỉnh")
		$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung from tblqlts where madonvi like '$ma[0]%' and (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%')".
		($key[0]==""?"":" and madonvi='".$key[0]."'").($key[1]==""?"":" and xemt='".$key[1]."'");
	else
		$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung from tblqlts where madonvi like '$ma[0]%' and (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%')".
		($key[0]==""?"":" and madonvi='".$key[0]."'").($key[1]==""?"":" and xemh='".$key[1]."'");
}	
else
	$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung from tblqlts where madonvi like '$ma[0]%' and (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%')";
$kq = mysqli_query($con,$sql);
$ngnh="";$ngsd="";   
$tatca = "";
$matd="";
$stt=0;
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){	
	$stt++;
			$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".doingay1($row[4]).">".doingay1($row[5]).">".$row[6].">".$row[7].">".$row[8].">".$row[9].">".$row[10];
			$matd=$row[0]."/".$tttc."/dat";
            echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
				$ngsd = doingay1($row[5]);
				echo"<td>$ngsd</td>";	
				echo"<td>".dinhdangso($row[6])."</td>";	
				echo"<td>
						<a href=\"tinhtrangts.php?id=$matd\" class='btn btn-info '></i>
							Xem</a>			
						<a href=\"NhapQLTSdatsua.php?id=$row[0]\" class='btn btn-blue '></i>
							Sửa</a>									
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
					<h4 class="modal-title" style="text-align:center;"><strong>Nhập thông tin tài sản là đất</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role="form" action = "NhapQLTS.php" method="POST" class="form-horizontal form-groups-bordered">				
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên tài sản:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8' class='col-sm-5'>";
									echo"<select name='mataisan' class='form-control' id='mataisan'>";
									echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
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
								<label for="field-4" class="col-sm-3 control-label">Diện tích:</label>
								<div class="col-sm-8">
									<input name="DTKV" type="text" class="form-control" data-mask="fdecimal" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
								<div class="col-sm-8">
									<input name="ngansach" type="text" class="form-control" data-mask="fdecimal" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-8">
									<input name="nguonkhac" type="text" class="form-control" data-mask="fdecimal" id="field-3">
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
								<label for="field-4" class="col-sm-3 control-label">Địa chỉ khuôn viên:</label>
								<div class="col-sm-8">
									<input name="TKVDAT" type="text" class="form-control" id="field-3">
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
					<h4 class="modal-title" style="text-align:center;"><strong>Chỉnh sửa thông tin tài sản</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role="form" action = "NhapQLTS.php" method="POST" class="form-horizontal form-groups-bordered">
							<div id = "sTTKK" class="form-group">
								<label class="col-sm-3 control-label">Số ghi tài sản:</label>
								<div class="col-sm-8">
										<input name="bookId" type="text" class="form-control" id="bookId" value = "x">									
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên tài sản:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai like 'Đất%' and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8' class='col-sm-5'>";
									echo"<select name='mataisancs' class='form-control' id='mataisancs'>";
									echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
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
								<label for="field-4" class="col-sm-3 control-label">Diện tích:</label>
								<div class="col-sm-8">
									<input name="DTKVcs" type="text" class="form-control" data-mask="fdecimal" id="DTKVcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
								<div class="col-sm-8">
									<input name="ngansachcs" type="text" class="form-control" data-mask="fdecimal" id="ngansachcs">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-8">
									<input name="nguonkhaccs" type="text" class="form-control" data-mask="fdecimal" id="nguonkhaccs">
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
								<label for="field-4" class="col-sm-3 control-label">Địa chỉ khuôn viên:</label>								
								<div class="col-sm-8">
									<input name="TKVDATcs" type="text" class="form-control" id="TKVDATcs">
								</div>								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="chinhsuats" class="btn btn-blue" value = "Cập nhật">
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
