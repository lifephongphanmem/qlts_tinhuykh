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
    $('#khauhao').click(function(){
		$('#HM').slideToggle('fast'); 
		$('#KH').slideToggle('fast');
        $('#ngaykhauhao').slideToggle('fast'); 
		$('#lbngaykhauhao').slideToggle('fast');
		$('#lbdvnamsudungconlai').slideToggle('fast'); 
		$('#lbnamsudungconlai').slideToggle('fast'); 	
		$('#namkhconlai').slideToggle('fast');
		$('#lbphuongphapkhauhao').slideToggle('fast'); 
		$('#phuongphapkhauhao').slideToggle('fast');
		$('#lbdvthangkhauhaoconlai').slideToggle('fast'); 
		$('#lbthangkhauhaoconlai').slideToggle('fast'); 
		$('#thangkhauhaoconlai').slideToggle('fast');
		$('#lbdvtylekhauhao').slideToggle('fast'); 
		$('#lbtylekhauhao').slideToggle('fast'); 
		$('#tylekhauhao').slideToggle('fast');
		$('#lbdvtylesxkd').slideToggle('fast'); 
		$('#lbtylesxkd').slideToggle('fast'); 
		$('#tylesxkd').slideToggle('fast');
		$('#lbdvsokhauhao').slideToggle('fast'); 
		$('#lbsokhauhao').slideToggle('fast'); 
		$('#sokhauhao').slideToggle('fast');
		$('#lbdvgiatrikhcl').slideToggle('fast'); 
		$('#lbgiatrikhcl').slideToggle('fast'); 
		$('#giatrikhcl').slideToggle('fast');
    });
});
</script>
<script>
$(document).ready(function()
{
	$('#mataisanth').change(function(){		
		giatri = this.value;
		var mataisan = giatri.split('>');
		$("#mataisan").val(mataisan[0]);
		$("#phantramhaomon").val(mataisan[1]);
		$("#phantram32").val(mataisan[2]);
		$("#namsudung").val(mataisan[3]);
		thaydoi();
	});	
			
});
$(document).ready(function()
{
	$('#ngansach').change(function(){		
		thaydoi();
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#nguonkhac').change(function(){		
		thaydoi();
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#ngaysudung').change(function(){		
		thaydoi();
	});
});
$(document).ready(function()
{
	$('#ngaynhap').change(function(){		
		thaydoi();
	});
});
function thaydoi ()
{
		//tổng số năm sử dụng tài sản theo QĐ32 và theo TT162
		var namsudung162 = $('#namsudung').val();
		var namsudung32 = Math.round(100/parseFloat($('#phantram32').val()));
		//tính nguyên giá tài sản
		var ngansach = $('#ngansach').val();
		if(ngansach != "")
			ngansach = ngansach.replace(/,/g,"");
		else
			ngansach = 0;
		var nguonkhac = $('#nguonkhac').val();
		if(nguonkhac != "")
			nguonkhac = nguonkhac.replace(/,/g,"");
		else
			nguonkhac = 0;	
		var nguyengia = parseFloat(ngansach) + parseFloat(nguonkhac);
		//năm đưa vào sử dụng
		var namsd = $('#ngaysudung').val();
			namsd = namsd.substring(6,10);	
		//năm nhập tài sản vào phần mềm
		var namnhap = new Date;
			namnhap = namnhap.getFullYear();	
		//số năm đã sử dụng tài sản
		var namqd32 = 0 ;
		var namqd162 = 0 ;
		if(namnhap > namsd)
		{
			if(namsd < 2015 && namsd >= 2013)
				{
					namqd32 = 2015- parseFloat(namsd);	 
					namqd162 = parseFloat(namnhap) - 2015;
				}
			 else if(namsd < 2013)
				{
					namqd32 = 2014- parseFloat(namsd);	 
					namqd162 = parseFloat(namnhap) - 2015;
				}
			else
				namqd162 = parseFloat(namnhap)-parseFloat(namsd);
		}
		//Tính hao mòn và số nguyên giá còn lại
		var sohaomon =0;
		var conlai=0;
		if(parseFloat(namsd) <2015)
		{			
			sohaomon += nguyengia*(parseFloat($('#phantram32').val())/100)*namqd32;
			sohaomon += nguyengia*(parseFloat($('#phantramhaomon').val())/100)*namqd162;
			if(sohaomon>=nguyengia)
				sohaomon=nguyengia;
		}
		else
		{
			sohaomon += nguyengia*(parseFloat($('#phantramhaomon').val())/100)*parseFloat(namqd162);
			if(sohaomon>=nguyengia)
				sohaomon=nguyengia;
		}
		conlai = nguyengia - sohaomon;		
		//Năm hao mòn tài sản
		var namhm = parseFloat(namnhap)-1;
		//Phần trăm để tính hao mòn năm tài sản, hao mòn năm tài sản
		var phantramhm = 0;
		var sohmnam = 0;	
		if(namhm < 2015 && namhm >= namsd)
		{			
			phantramhm = parseFloat($('#phantram32').val());
			if(namqd32 <= namsudung32)
				var sohmnam = nguyengia*phantramhm/100;				
		}
		if(namhm >= 2015 && namhm >= namsd)
		{
			phantramhm = parseFloat($('#phantramhaomon').val());			
			if(namqd162 <= namsudung162)
				var sohmnam = nguyengia*phantramhm/100;	
		}		
		//số dư hao mòn
		var soduhm=0;
		if(sohaomon>sohmnam)
			soduhm = sohaomon - sohmnam;
		$("#sohaomon").val(sohaomon);
		$("#conlai").val(conlai);	
		$("#namhm").val(namhm);
		$("#phantramhm").val(phantramhm);	
		$("#soduhm").val(soduhm);
		$("#sohmnam").val(sohmnam);	
		$("#nguyengia").val(nguyengia);	
}

$(document).ready(function()
{
	$('#ngaykhauhao').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#namkhconlai').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#phuongphapkhauhao').change(function(){		
		tinhkhauhao();
	});
});
$(document).ready(function()
{
	$('#tylesxkd').change(function(){		
		tinhkhauhao();
	});
});
function tinhkhauhao()
{
	var namhientai = new Date;
		namhientai = namhientai.getFullYear();	
	var namkhauhao = $('#ngaykhauhao').val();
		namkhauhao = namkhauhao.substring(6,10);	
	var namdakh = parseFloat(namhientai)- parseFloat(namkhauhao);
	var thangdakh = 0;	
	if(namdakh > 0)
		thangdakh = (namdakh*12) - (parseFloat($('#ngaykhauhao').val().substring(3,5)) -1); 
	var namkhauhaocl= parseFloat($("#namkhconlai").val());
	var thangkhauhaocl = (namkhauhaocl+namdakh)*12 - thangdakh;
	var nguyengia = $("#nguyengia").val();
	if(nguyengia != "")
		nguyengia = nguyengia.replace(/,/g,"");
	else
		nguyengia = 0;
	var sxkd = $("#tylesxkd").val();
	if(sxkd != "")
		sxkd = sxkd.replace(/,/g,"");
	else
		sxkd = 0;
	var tylekhauhao = (100/(namkhauhaocl+namdakh)).toFixed(2);
	var cachtinhkh= $("#phuongphapkhauhao").val();
	var tylekhnam = nguyengia*tylekhauhao/100;
	var sodakh = ((tylekhnam/12)*thangdakh).toFixed(0);
		sodakh = sodakh * sxkd/100;
	var giatricl = nguyengia-sodakh;		
	var hesodc = 0;
	if((namkhauhaocl+namdakh) > 6 )
		hesodc = 2.5;
	else if ((namkhauhaocl+ namdakh) <= 4)
		hesodc = 1.5;
	else
		hesodc = 2;	
	if(cachtinhkh== "Khấu hao theo đường thẳng" || cachtinhkh== "Khấu hao theo tổng số")
	{		
		$("#thangkhauhaoconlai").val(thangkhauhaocl);
		$("#tylekhauhao").val(tylekhauhao);
		$("#sokhauhao").val(sodakh);
		$("#giatrikhcl").val(giatricl);
		$("#sokhnam").val(tylekhnam);
	}	
	if(cachtinhkh== "Khấu hao số dư giảm dần")
	{		
		var khauhaotb = 0;		
		sodakh =0;
		var sokh = 0;
		var i;
		for (i = 1; i<= namdakh ; i++)
		{	
			khauhaotb = nguyengia/((namkhauhaocl + namdakh)-i);
			sokh = (nguyengia-sodakh)*tylekhauhao*hesodc/100;
			if(sokh > khauhaotb)
				sodakh += sokh;
			else
				sodakh += khauhaotb;
		}
		sodakh = sodakh* sxkd/100;
		giatricl = nguyengia-sodakh;	
		giatricl = giatricl * parseFloat(sxkd)/100;
		$("#thangkhauhaoconlai").val(thangkhauhaocl);
		$("#tylekhauhao").val(tylekhauhao);
		$("#sokhauhao").val(sodakh);
		$("#giatrikhcl").val(giatricl);
		$("#sokhnam").val(sokh);
	}	
}
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
$(document).ready(function()
{
	$('#mataisan').change(function(){		
		giatri = this.value;
		$('#PTHM').load('ajax_pthm.php?id_a='+giatri);			
	});	
}
);
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
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
 <script> 
 function function1()
 {
	var tenphongban = $("#tenphongban").val() ;		
	giatri = tenphongban+">"+$("#chucnanggq").val()+">"+$("#soluongcb").val() +">"+$("#matpb").val();
	var option = document.createElement("option");
	option.selected = "Selected";
	option.text = tenphongban;
	option.value = tenphongban; 
	var select = document.getElementById("noidung");
	select.appendChild(option);  	
 }
 </script>
 <script language="javascript" type="text/javascript">
document.forms['nhapmoi'].name.focus();
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
		<div class="col-sm-12" >
		<a class="tieude" href='/main.php' >
			Trang chủ
		</a>
		>><a class="tieude" href='NhapQLTS.php?id=0'>
			Tài sản dưới 500 triệu
		</a>
		>><a class="tieude">
			Sửa tài sản
		</a>		
		</div>		
<?php

$id = $_GET['id'];
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
if(isset($_POST["luupb"]))
	{
		$tenphongban=$_POST["tenphongban"];
		$chucnanggq=$_POST["chucnanggq"];
		$soluongcb=$_POST["soluongcb"];
		$madonvi = $_POST["matpb"];
		$sql="INSERT INTO tblphongban(tenphongban,chucnanggq,soluongcb,madonvi)
		VALUES ('$tenphongban','$chucnanggq','$soluongcb','$madonvi')";		
		$kq=mysqli_query($con,$sql);
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
	if (isset($_POST['capnhatts']))
	{		
		$khauhao="Không";
		if(isset($_POST['khauhao']))
			$khauhao="Có";			
		$mataisan=$_POST['mataisan'];		
		$tenchitiet=$_POST['tenchitiet'];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);
		$namsanxuat = $_POST['namsanxuat'];
		$NUOCSX = $_POST['NUOCSX'];
		$noidung = $_POST['noidung'];
		$DVT = $_POST['DVT'];		
		$DTKV = $_POST['DTKV'];				
		if($_POST['ngansach'])
			$ngansach = kieudouble($_POST['ngansach']);
		else
			$ngansach = 0;
		if($_POST['nguonkhac'])
			$nguonkhac = kieudouble($_POST['nguonkhac']);
		else
			$nguonkhac = 0;		
		$GCTS = $_POST['GCTS'];
		$ttkhac = $_POST['ttkhac'];
		if(isset($_POST['theodoi']))			
			$theodoi="Theo dõi";
		else
			$theodoi="Không";
		$quyetdinhbangiao=$_POST['quyetdinhbangiao'];
		$ngayquetdinhbangiao=doingay($_POST['ngayquyetdinhbangiao']);
		$hoadon=$_POST['hoadon'];
		$ngayhoadon=doingay($_POST['ngayhoadon']);
		$giatrikhcl = kieudouble($_POST['giatrikhcl']);
		$namhm = $_POST['namhm'];
		$phantramhm = $_POST['phantramhm'];
		$soduhm = $_POST['soduhm'];
		$sohmnam = $_POST['sohmnam'];		
		$sohaomon = kieudouble($_POST['sohaomon']);				
		$conlai = kieudouble($_POST['conlai']);		
		$phanloai = $_POST['hientrang'];
		$lydotang = $_POST['lydotang'];
		$ngaykhauhao = doingay($_POST['ngaykhauhao']);
		$namkhconlai=kieudouble($_POST['namkhconlai']);
		$phuongphapkhauhao = $_POST['phuongphapkhauhao'];
		$thangkhauhaoconlai = kieudouble($_POST['thangkhauhaoconlai']);
		$tylekhauhao = kieudouble($_POST['tylekhauhao']);
		$tylesxkd= kieudouble($_POST['tylesxkd']);
		$sokhauhao = kieudouble($_POST['sokhauhao']);
		$sokhnam = kieudouble($_POST['sokhnam']);
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
			$phantram32=$row[5];
		}				
		$sql="Update tblqlts set mataisan='$mataisan',tentaisan='$tentaisan',tenchitiet='$tenchitiet',ngaynhap='$ngaynhap',namsanxuat='$namsanxuat',ngaysudung='$ngaysudung',ngansach=$ngansach,nguonkhac=$nguonkhac,DTKV='$DTKV',NUOCSX='$NUOCSX',chitiethinhthai='$chitiethinhthai',XOA='K',GCTS='$GCTS',DVT='$DVT',ttkhac='$ttkhac',phantram=$pthm,sonamsd=$sonamsd,sothutu=$ttsx,phantram32='$phantram32',sohaomon=$sohaomon,conlai=$conlai,theodoi='$theodoi',quyetdinhbangiao='$quyetdinhbangiao',ngayquyetdinhbangiao='$ngayquetdinhbangiao',hoadon='$hoadon',ngayhoadon='$ngayhoadon',lydotang = '$lydotang',giatrikhcl=$giatrikhcl,khauhao='$khauhao' WHERE TTQLTS = $id";
		$kq=mysqli_query($con,$sql);
		$sql = "update tblhaomon set ngaythang='$ngaynhap',namhaomon=$namhm,phantram=$phantramhm,sodu=$soduhm,sotien=$sohmnam,ngaykhauhao='$ngaykhauhao',namkhconlai='$namkhconlai',phuongphapkhauhao='$phuongphapkhauhao',thangkhauhaoconlai=$thangkhauhaoconlai,tylekhauhao=$tylekhauhao,tylesxkd=$tylesxkd,sokhauhao=$sokhauhao,sokhnam=$sokhnam WHERE TTTS = $id";	
		$kq=mysqli_query($con,$sql);
		$sql = "update tblhientrang set ngaythang='$ngaynhap',phanloai='$phanloai',donvi='$DVT',soluong='$DTKV'  WHERE TTTS = $id";	
		$kq=mysqli_query($con,$sql);			
	}
$sql = "select tblqlts.mataisan,tblqlts.sonamsd,tblqlts.tenchitiet,tblqlts.ngaynhap,tblqlts.ngaysudung,tblqlts.namsanxuat,tblqlts.NUOCSX,tblqlts.noidung,tblqlts.DVT,tblqlts.DTKV,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.phantram,tblqlts.phantram32,tblqlts.sohaomon,tblqlts.conlai,tblqlts.GCTS,tblqlts.ttkhac,tblhaomon.namhaomon,tblhaomon.sodu,tblhaomon.sotien,tblhaomon.phantram,tblhientrang.phanloai,tblqlts.quyetdinhbangiao,tblqlts.ngayquyetdinhbangiao,tblqlts.hoadon,tblqlts.ngayhoadon,tblqlts.lydotang,tblqlts.khauhao,tblqlts.giatrikhcl,tblhaomon.ngaykhauhao,tblhaomon.namkhconlai,tblhaomon.phuongphapkhauhao,tblhaomon.thangkhauhaoconlai,tblhaomon.tylekhauhao,tblhaomon.tylesxkd,tblhaomon.sokhauhao,tblhaomon.sokhnam FROM (tblqlts INNER JOIN tblhaomon ON tblqlts.TTQLTS = tblhaomon.TTTS) INNER JOIN tblhientrang ON tblqlts.TTQLTS = tblhientrang.TTTS WHERE tblqlts.TTQLTS = '$id'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql))
{
?>
<div class="col-sm-12">		
	<form  name="nhapmoi" onsubmit="return kt()" method="POST" class="form-horizontal form-wizard validate">					
	<div class="col-sm-12">		
	<fieldset>
  <legend>Thông tin tài sản</legend> 
			<label class="col-sm-15 control-label">Tên tài sản<span style="padding-left:0px; color:red;">*</span>:</label>
			<?php								
			$sql="select mataisanqd32,tentaiqd32,phantramhaomon,phantram32,namsudung from tbldanhsachqd32 Where chitiethinhthai Not like 'Nhà%' and chitiethinhthai Not like 'Quyền sử dụng đất%' and chitiethinhthai Not like 'Đất%' and chitiethinhthai Not like 'Phương tiện%' and chitiethinhthai Not like 'Vật kiến trúc%' and mataisanqd32 Like 'TS%'";
			$sql1=mysqli_query($con,$sql);
			echo"<div  class='col-sm-45'>";
				echo"<select name='mataisanth' class='form-control' data-validate = 'required' id='mataisanth'>";
				echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
			while ($data=mysqli_fetch_row($sql1))
			{
				$value= $data[0].">".$data[2].">".$data[3].">".$data[4];
				if($row[0] == $data[0])
					echo "<option selected = 'selected' value='$value'>".$data[1]."</option>";
				else
					echo "<option value='$value'>".$data[1]."</option>";
			}
				echo"</select>";
			echo"</div>";
			?>		
			<input name="mataisan" type="text" style ="display:none" class="form-control" value="<?php echo $row[0]; ?>" id="mataisan"/>
			<input name="namsudung" type="text" style ="display:none" class="form-control" value="<?php echo $row[1]; ?>" id ="namsudung"/>
			<label for="field-3" class="col-sm-15 control-label">Tên chi tiết<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input name="tenchitiet" type="text" data-validate = "required" value="<?php echo $row[2]; ?>" class="form-control" id="field-3"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" data-validate = "required" class="form-control" value="<?php echo doingay1($row[3]); ?>" id="ngaynhap"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" data-validate = "required" value="<?php echo doingay1($row[4]); ?>" class="form-control" id="ngaysudung"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Năm sản xuất<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">									
				<input data-mask="decimal"  name='namsanxuat' id='namsanxuat' value="<?php echo $row[5]; ?>" data-validate = "required" class='form-control' />	
			</div>
			<label for="field-4" class="col-sm-15 control-label">Nước sản xuất<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">									
				<select name='NUOCSX' data-validate = "required"  class='form-control'>							
				<option <?php if($row[6] == "Abkhazia") echo "selected='selected'" ; ?> value='Abkhazia'>Abkhazia</option>
				<option <?php if($row[6] == "Abkhazia") echo "selected='selected'" ; ?> value='Afghanistan'>Abkhazia</option>
				<option <?php if($row[6] == "Ai Cập") echo "selected='selected'" ; ?> value='Ai Cập'>Ai Cập</option>
				<option <?php if($row[6] == "Albania") echo "selected='selected'" ; ?> value='Albania'>Albania</option>
				<option <?php if($row[6] == "Algérie") echo "selected='selected'" ; ?> value='Algérie'>Algérie</option>
				<option <?php if($row[6] == "Andorra") echo "selected='selected'" ; ?> value='Andorra'>Andorra</option>
				<option <?php if($row[6] == "Angola") echo "selected='selected'" ; ?> value='Angola'>Angola</option>
				<option <?php if($row[6] == "Anh") echo "selected='selected'" ; ?> value='Anh'>Anh</option>
				<option <?php if($row[6] == "Áo") echo "selected='selected'" ; ?> value='Áo'>Áo</option>
				<option <?php if($row[6] == "Ả Rập Saudi") echo "selected='selected'" ; ?> value='Ả Rập Saudi'>Ả Rập Saudi</option>
				<option <?php if($row[6] == "Argentina") echo "selected='selected'" ; ?> value='Argentina'>Argentina</option>
				<option <?php if($row[6] == "Armenia") echo "selected='selected'" ; ?> value='Armenia'>Armenia</option>
				<option <?php if($row[6] == "Azawad") echo "selected='selected'" ; ?> value='Azawad'>Azawad</option>
				<option <?php if($row[6] == "Azerbaijan") echo "selected='selected'" ; ?> value='Azerbaijan'>Azerbaijan</option>
				<option <?php if($row[6] == "Ấn Độ") echo "selected='selected'" ; ?> value='Ấn Độ'>Ấn Độ</option>
				<option <?php if($row[6] == "Bahamas") echo "selected='selected'" ; ?> value='Bahamas'>Bahamas</option>
				<option <?php if($row[6] == "Bahrain") echo "selected='selected'" ; ?> value='Bahrain'>Bahrain</option>
				<option <?php if($row[6] == "Bangladesh") echo "selected='selected'" ; ?> value='Bangladesh'>Bangladesh</option>
				<option <?php if($row[6] == "Barbados") echo "selected='selected'" ; ?> value='Barbados'>Barbados</option>
				<option <?php if($row[6] == "Bắc Síp") echo "selected='selected'" ; ?> value='Bắc Síp'>Bắc Síp</option>
				<option <?php if($row[6] == "Belarus") echo "selected='selected'" ; ?> value='Belarus'>Belarus</option>
				<option <?php if($row[6] == "Belize") echo "selected='selected'" ; ?> value='Belize'>Belize</option>
				<option <?php if($row[6] == "Benin") echo "selected='selected'" ; ?> value='Benin'>Benin</option>
				<option <?php if($row[6] == "Bhutan") echo "selected='selected'" ; ?> value='Bhutan'>Bhutan</option>
				<option <?php if($row[6] == "Bỉ") echo "selected='selected'" ; ?> value='Bỉ'>Bỉ</option>
				<option <?php if($row[6] == "Bolivia") echo "selected='selected'" ; ?> value='Bolivia'>Bolivia</option>
				<option <?php if($row[6] == "Botswana") echo "selected='selected'" ; ?> value='Botswana'>Botswana</option>
				<option <?php if($row[6] == "Bồ Đào Nha") echo "selected='selected'" ; ?> value='Bồ Đào Nha'>Bồ Đào Nha</option>
				<option <?php if($row[6] == "Bờ biển ngà") echo "selected='selected'" ; ?> value='Bờ biển ngà'>Bờ biển ngà</option>
				<option <?php if($row[6] == "Brazil") echo "selected='selected'" ; ?> value='Brazil'>Brazil</option>
				<option <?php if($row[6] == "Brunei") echo "selected='selected'" ; ?> value='Brunei'>Brunei</option>
				<option <?php if($row[6] == "Bulgaria") echo "selected='selected'" ; ?> value='Bulgaria'>Bulgaria</option>
				<option <?php if($row[6] == "Burundi") echo "selected='selected'" ; ?> value='Burundi'>Burundi</option>
				<option <?php if($row[6] == "Cabo Verde") echo "selected='selected'" ; ?> value='Cabo Verde'>Cabo Verde</option>
				<option <?php if($row[6] == "Các tiểu vương quốc Ả rập thống nhất") echo "selected='selected'" ; ?> value='Các tiểu vương quốc Ả rập thống nhất'>Các tiểu vương quốc Ả rập thống nhất</option>
				<option <?php if($row[6] == "Cameroon") echo "selected='selected'" ; ?> value='Cameroon'>Cameroon</option>
				<option <?php if($row[6] == "Campuchia") echo "selected='selected'" ; ?> value='Campuchia'>Campuchia</option>
				<option <?php if($row[6] == "Canada") echo "selected='selected'" ; ?> value='Canada'>Canada</option>
				<option <?php if($row[6] == "Chile") echo "selected='selected'" ; ?> value='Chile'>Chile</option>
				<option <?php if($row[6] == "Colombia") echo "selected='selected'" ; ?> value='Colombia'>Colombia</option>
				<option <?php if($row[6] == "Comoros") echo "selected='selected'" ; ?> value='Comoros'>Comoros</option>
				<option <?php if($row[6] == "Congo") echo "selected='selected'" ; ?> value='Congo'>Congo</option>
				<option <?php if($row[6] == "Costa Rica") echo "selected='selected'" ; ?> value='Costa Rica'>Costa Rica</option>
				<option <?php if($row[6] == "Croatia") echo "selected='selected'" ; ?> value='Croatia'>Croatia</option>
				<option <?php if($row[6] == "Cuba") echo "selected='selected'" ; ?> value='Cuba'>Cuba</option>
				<option <?php if($row[6] == "Djibouti") echo "selected='selected'" ; ?> value='Djibouti'>Djibouti</option>
				<option <?php if($row[6] == "Dominica") echo "selected='selected'" ; ?> value='Dominica'>Dominica</option>
				<option <?php if($row[6] == "Dominicana") echo "selected='selected'" ; ?> value='Dominicana'>Dominicana</option>
				<option <?php if($row[6] == "Đan Mạch") echo "selected='selected'" ; ?> value='Đan Mạch'>Đan Mạch</option>
				<option <?php if($row[6] == "Đông Timor") echo "selected='selected'" ; ?> value='Đông Timor'>Đông Timor</option>
				<option <?php if($row[6] == "Đức") echo "selected='selected'" ; ?> value='Đức'>Đức</option>
				<option <?php if($row[6] == "Ecuador") echo "selected='selected'" ; ?> value='Ecuador'>Ecuador</option>
				<option <?php if($row[6] == "El Salvador") echo "selected='selected'" ; ?> value='El Salvador'>El Salvador</option>
				<option <?php if($row[6] == "Eritrea") echo "selected='selected'" ; ?> value='Eritrea'>Eritrea</option>
				<option <?php if($row[6] == "Estonia") echo "selected='selected'" ; ?> value='Estonia'>Estonia</option>
				<option <?php if($row[6] == "Ethiopia") echo "selected='selected'" ; ?> value='Ethiopia'>Ethiopia</option>
				<option <?php if($row[6] == "Fiji") echo "selected='selected'" ; ?> value='Fiji'>Fiji</option>
				<option <?php if($row[6] == "Gabon") echo "selected='selected'" ; ?> value='Gabon'>Gabon</option>
				<option <?php if($row[6] == "Gambia") echo "selected='selected'" ; ?> value='Gambia'>Gambia</option>
				<option <?php if($row[6] == "Ghana") echo "selected='selected'" ; ?> value='Ghana'>Ghana</option>
				<option <?php if($row[6] == "Grenada") echo "selected='selected'" ; ?> value='Grenada'>Grenada</option>
				<option <?php if($row[6] == "Gruzia") echo "selected='selected'" ; ?> value='Gruzia'>Gruzia</option>
				<option <?php if($row[6] == "Guatemala") echo "selected='selected'" ; ?> value='Guatemala'>Guatemala</option>
				<option <?php if($row[6] == "Guinea-Bissau") echo "selected='selected'" ; ?> value='Guinea-Bissau'>Guinea-Bissau</option>
				<option <?php if($row[6] == "Guinea Xích Đạo") echo "selected='selected'" ; ?> value='Guinea Xích Đạo'>Guinea Xích Đạo</option>
				<option <?php if($row[6] == "Guinea") echo "selected='selected'" ; ?> value='Guinea'>Guinea</option>
				<option <?php if($row[6] == "Guyana") echo "selected='selected'" ; ?> value='Guyana'>Guyana</option>
				<option <?php if($row[6] == "Haiti") echo "selected='selected'" ; ?> value='Haiti'>Haiti</option>
				<option <?php if($row[6] == "Hà Lan") echo "selected='selected'" ; ?> value='Hà Lan'>Hà Lan</option>
				<option <?php if($row[6] == "Hàn quốc") echo "selected='selected'" ; ?> value='Hàn quốc'>Hàn quốc</option>
				<option <?php if($row[6] == "Mỹ") echo "selected='selected'" ; ?> value='Mỹ'>Mỹ</option>
				<option <?php if($row[6] == "Hồng Kông") echo "selected='selected'" ; ?> value='Hồng Kông'>Hồng Kông</option>
				<option <?php if($row[6] == "Honduras") echo "selected='selected'" ; ?> value='Honduras'>Honduras</option>
				<option <?php if($row[6] == "Hungary") echo "selected='selected'" ; ?> value='Hungary'>Hungary</option>
				<option <?php if($row[6] == "Hy Lạp") echo "selected='selected'" ; ?> value='Hy Lạp'>Hy Lạp</option>
				<option <?php if($row[6] == "Iceland") echo "selected='selected'" ; ?> value='Iceland'>Iceland</option>
				<option <?php if($row[6] == "Indonesia") echo "selected='selected'" ; ?> value='Indonesia'>Indonesia</option>
				<option <?php if($row[6] == "Iran") echo "selected='selected'" ; ?> value='Iran'>Iran</option>
				<option <?php if($row[6] == "Iraq") echo "selected='selected'" ; ?> value='Iraq'>Iraq</option>
				<option <?php if($row[6] == "Israel") echo "selected='selected'" ; ?> value='Israel'>Israel</option>
				<option <?php if($row[6] == "Hamaica") echo "selected='selected'" ; ?> value='Hamaica'>Hamaica</option>
				<option <?php if($row[6] == "Hashemite Jordan") echo "selected='selected'" ; ?> value='Hashemite Jordan'>Hashemite Jordan</option>
				<option <?php if($row[6] == "Kazakhstan") echo "selected='selected'" ; ?> value='Kazakhstan'>Kazakhstan</option>
				<option <?php if($row[6] == "Kenya") echo "selected='selected'" ; ?> value='Kenya'>Kenya</option>
				<option <?php if($row[6] == "Kiribati") echo "selected='selected'" ; ?> value='Kiribati'>Kiribati</option>
				<option <?php if($row[6] == "Kosovo") echo "selected='selected'" ; ?> value='Kosovo'>Kosovo</option>
				<option <?php if($row[6] == "Kuwait") echo "selected='selected'" ; ?> value='Kuwait'>Kuwait</option>
				<option <?php if($row[6] == "Síp") echo "selected='selected'" ; ?> value='Síp'>Síp</option>
				<option <?php if($row[6] == "Kyrgyzstan") echo "selected='selected'" ; ?> value='Kyrgyzstan'>Kyrgyzstan</option>
				<option <?php if($row[6] == "Lào") echo "selected='selected'" ; ?> value='Lào'>Lào</option>
				<option <?php if($row[6] == "Latvia") echo "selected='selected'" ; ?> value='Latvia'>Latvia</option>
				<option <?php if($row[6] == "Lesotho") echo "selected='selected'" ; ?> value='Lesotho'>Lesotho</option>
				<option <?php if($row[6] == "Liban") echo "selected='selected'" ; ?> value='Liban'>Liban</option>
				<option <?php if($row[6] == "Liberia") echo "selected='selected'" ; ?> value='Liberia'>Liberia</option>
				<option <?php if($row[6] == "Libya") echo "selected='selected'" ; ?> value='Libya'>Libya</option>
				<option <?php if($row[6] == "Liechtenstein") echo "selected='selected'" ; ?> value='Liechtenstein'>Liechtenstein</option>
				<option <?php if($row[6] == "Litva") echo "selected='selected'" ; ?> value='Litva'>Litva</option>
				<option <?php if($row[6] == "Luxembourg") echo "selected='selected'" ; ?> value='Luxembourg'>Luxembourg</option>
				<option <?php if($row[6] == "Macedonia") echo "selected='selected'" ; ?> value='Macedonia'>Macedonia</option>
				<option <?php if($row[6] == "Madagascar") echo "selected='selected'" ; ?> value='Madagascar'>Madagascar</option>
				<option <?php if($row[6] == "Malawi") echo "selected='selected'" ; ?> value='Malawi'>Malawi</option>
				<option <?php if($row[6] == "Malaysia") echo "selected='selected'" ; ?> value='Malaysia'>Malaysia</option>
				<option <?php if($row[6] == "Maldives") echo "selected='selected'" ; ?> value='Maldives'>Maldives</option>
				<option <?php if($row[6] == "Mali") echo "selected='selected'" ; ?> value='Mali'>Mali</option>
				<option <?php if($row[6] == "Malta") echo "selected='selected'" ; ?> value='Malta'>Malta</option>
				<option <?php if($row[6] == "Maroc") echo "selected='selected'" ; ?> value='Maroc'>Maroc</option>
				<option <?php if($row[6] == "Marshall") echo "selected='selected'" ; ?> value='Marshall'>Marshall</option>
				<option <?php if($row[6] == "Mauritanie") echo "selected='selected'" ; ?> value='Mauritanie'>Mauritanie</option>
				<option <?php if($row[6] == "Mauritius") echo "selected='selected'" ; ?> value='Mauritius'>Mauritius</option>
				<option <?php if($row[6] == "Mexico") echo "selected='selected'" ; ?> value='Mexico'>Mexico</option>
				<option <?php if($row[6] == "Micronesia") echo "selected='selected'" ; ?> value='Micronesia'>Micronesia</option>
				<option <?php if($row[6] == "Moldova") echo "selected='selected'" ; ?> value='Moldova'>Moldova</option>
				<option <?php if($row[6] == "Monaco") echo "selected='selected'" ; ?> value='Monaco'>Monaco</option>
				<option <?php if($row[6] == "Montenegro") echo "selected='selected'" ; ?> value='Montenegro'>Montenegro</option>
				<option <?php if($row[6] == "Mozambique") echo "selected='selected'" ; ?> value='Mozambique'>Mozambique</option>
				<option <?php if($row[6] == "Myanmar") echo "selected='selected'" ; ?> value='Myanmar'>Myanmar</option>
				<option <?php if($row[6] == "Nagorno-Karabakh") echo "selected='selected'" ; ?> value='Nagorno-Karabakh'>Nagorno-Karabakh</option>
				<option <?php if($row[6] == "Namibia") echo "selected='selected'" ; ?> value='Namibia'>Namibia</option>
				<option <?php if($row[6] == "Nam Ossetia") echo "selected='selected'" ; ?> value='Nam Ossetia'>Nam Ossetia</option>
				<option <?php if($row[6] == "Nam Sudan") echo "selected='selected'" ; ?> value='Nam Sudan'>Nam Sudan</option>
				<option <?php if($row[6] == "Nam Phi") echo "selected='selected'" ; ?> value='Nam Phi'>Nam Phi</option>
				<option <?php if($row[6] == "Nauru") echo "selected='selected'" ; ?> value='Nauru'>Nauru</option>
				<option <?php if($row[6] == "Na Uy") echo "selected='selected'" ; ?> value='Na Uy'>Na Uy</option>
				<option <?php if($row[6] == "Nepal") echo "selected='selected'" ; ?> value='Nepal'>Nepal</option>
				<option <?php if($row[6] == "New Realand") echo "selected='selected'" ; ?> value='New Realand'>New Realand</option>
				<option <?php if($row[6] == "Nicaragua") echo "selected='selected'" ; ?> value='Nicaragua'>Nicaragua</option>
				<option <?php if($row[6] == "Niger") echo "selected='selected'" ; ?> value='Niger'>Niger</option>
				<option <?php if($row[6] == "Nigeria") echo "selected='selected'" ; ?> value='Nigeria'>Nigeria</option>
				<option <?php if($row[6] == "Nga") echo "selected='selected'" ; ?> value='Nga'>Nga</option>
				<option <?php if($row[6] == "Nhật bản") echo "selected='selected'" ; ?> value='Nhật bản'>Nhật bản</option>
				<option <?php if($row[6] == "Oman") echo "selected='selected'" ; ?> value='Oman'>Oman</option>
				<option <?php if($row[6] == "Pakistan") echo "selected='selected'" ; ?> value='Pakistan'>Pakistan</option>
				<option <?php if($row[6] == "Palau") echo "selected='selected'" ; ?> value='Palau'>Palau</option>
				<option <?php if($row[6] == "Palestine") echo "selected='selected'" ; ?> value='Palestine'>Palestine</option>
				<option <?php if($row[6] == "Panama") echo "selected='selected'" ; ?> value='Panama'>Panama</option>
				<option <?php if($row[6] == "Papua New Guinea") echo "selected='selected'" ; ?> value='Papua New Guinea'>Papua New Guinea</option>
				<option <?php if($row[6] == "Paraguay") echo "selected='selected'" ; ?> value='Paraguay'>Paraguay</option>
				<option <?php if($row[6] == "Peru") echo "selected='selected'" ; ?> value='Peru'>Peru</option>
				<option <?php if($row[6] == "Pháp") echo "selected='selected'" ; ?> value='Pháp'>Pháp</option>
				<option <?php if($row[6] == "Phần Lan") echo "selected='selected'" ; ?> value='Phần Lan'>Phần Lan</option>
				<option <?php if($row[6] == "Philippines") echo "selected='selected'" ; ?> value='Philippines'>Philippines</option>
				<option <?php if($row[6] == "Qatar") echo "selected='selected'" ; ?> value='Qatar'>Qatar</option>
				<option <?php if($row[6] == "Rwanda") echo "selected='selected'" ; ?> value='Rwanda'>Rwanda</option>
				<option <?php if($row[6] == "Saint Kitts và Nevis") echo "selected='selected'" ; ?> value='Saint Kitts và Nevis'>Saint Kitts và Nevis</option>
				<option <?php if($row[6] == "Santa Luxia") echo "selected='selected'" ; ?> value='Santa Luxia'>Santa Luxia</option>
				<option <?php if($row[6] == "Samoa") echo "selected='selected'" ; ?> value='Samoa'>Samoa</option>
				<option <?php if($row[6] == "San Marino") echo "selected='selected'" ; ?> value='San Marino'>San Marino</option>
				<option <?php if($row[6] == "Scotland") echo "selected='selected'" ; ?> value='Scotland'>Scotland</option>
				<option <?php if($row[6] == "Séc") echo "selected='selected'" ; ?> value='Séc'>Séc</option>
				<option <?php if($row[6] == "Sénégal") echo "selected='selected'" ; ?> value='Sénégal'>Sénégal</option>
				<option <?php if($row[6] == "Serbia") echo "selected='selected'" ; ?> value='Serbia'>Serbia</option>
				<option <?php if($row[6] == "Seychelles") echo "selected='selected'" ; ?> value='Seychelles'>Seychelles</option>
				<option <?php if($row[6] == "Sierra") echo "selected='selected'" ; ?> value='Sierra Leone'>Sierra Leone</option>
				<option <?php if($row[6] == "Singapore") echo "selected='selected'" ; ?> value='Singapore'>Singapore</option>
				<option <?php if($row[6] == "Slovakia") echo "selected='selected'" ; ?> value='Slovakia'>Slovakia</option>
				<option <?php if($row[6] == "Slovenia") echo "selected='selected'" ; ?> value='Slovenia'>Slovenia</option>
				<option <?php if($row[6] == "Solomon") echo "selected='selected'" ; ?> value='Solomon'>Solomon</option>
				<option <?php if($row[6] == "Somaliland") echo "selected='selected'" ; ?> value='Somaliland'>Somaliland</option>
				<option <?php if($row[6] == "Sri Lanka") echo "selected='selected'" ; ?> value='Sri Lanka'>Sri Lanka</option>
				<option <?php if($row[6] == "Sudan") echo "selected='selected'" ; ?> value='Sudan'>Sudan</option>
				<option <?php if($row[6] == "Suriname") echo "selected='selected'" ; ?> value='Suriname'>Suriname</option>
				<option <?php if($row[6] == "Swaziland") echo "selected='selected'" ; ?> value='Swaziland'>Swaziland</option>
				<option <?php if($row[6] == "Syria") echo "selected='selected'" ; ?> value='Syria'>Syria</option>
				<option <?php if($row[6] == "Tajikistan") echo "selected='selected'" ; ?> value='Tajikistan'>Tajikistan</option>
				<option <?php if($row[6] == "Tanzania") echo "selected='selected'" ; ?> value='Tanzania'>Tanzania</option>
				<option <?php if($row[6] == "Tây Ban Nha") echo "selected='selected'" ; ?> value='Tây Ban Nha'>Tây Ban Nha</option>
				<option <?php if($row[6] == "Sarauy") echo "selected='selected'" ; ?> value='Sarauy'>Sarauy</option>
				<option <?php if($row[6] == "Sát") echo "selected='selected'" ; ?> value='Sát'>Sát</option>
				<option <?php if($row[6] == "Thái Lan") echo "selected='selected'" ; ?> value='Thái Lan'>Thái Lan</option>
				<option <?php if($row[6] == "Thổ Nhĩ Kỳ") echo "selected='selected'" ; ?> value='Thổ Nhĩ Kỳ'>Thổ Nhĩ Kỳ</option>
				<option <?php if($row[6] == "Thụy Điển") echo "selected='selected'" ; ?> value='Thụy Điển'>Thụy Điển</option>
				<option <?php if($row[6] == "Thụy Sĩ") echo "selected='selected'" ; ?> value='Thụy Sĩ'>Thụy Sĩ</option>
				<option <?php if($row[6] == "Togo") echo "selected='selected'" ; ?> value='Togo'>Togo</option>
				<option <?php if($row[6] == "Tonga") echo "selected='selected'" ; ?> value='Tonga'>Tonga</option>
				<option <?php if($row[6] == "Moldova Transdniestria") echo "selected='selected'" ; ?> value='Moldova Transdniestria'>Moldova Transdniestria</option>
				<option <?php if($row[6] == "Triều Tiên") echo "selected='selected'" ; ?> value='Triều Tiên'>Triều Tiên</option>
				<option <?php if($row[6] == "Trinidad và Tobago") echo "selected='selected'" ; ?> value='Trinidad và Tobago'>Trinidad và Tobago</option>
				<option <?php if($row[6] == "Đài Loan") echo "selected='selected'" ; ?> value='Đài Loan'>Đài Loan</option>
				<option <?php if($row[6] == "Trung Hoa") echo "selected='selected'" ; ?> value='Trung Hoa'>Trung Hoa</option>
				<option <?php if($row[6] == "Trung Phi") echo "selected='selected'" ; ?> value='Trung Phi'>Trung Phi</option>
				<option <?php if($row[6] == "Tunisia") echo "selected='selected'" ; ?> value='Tunisia'>Tunisia</option>
				<option <?php if($row[6] == "Turkmenistan") echo "selected='selected'" ; ?> value='Turkmenistan'>Turkmenistan</option>
				<option <?php if($row[6] == "Tuvalu") echo "selected='selected'" ; ?> value='Tuvalu'>Tuvalu</option>
				<option <?php if($row[6] == "Úc") echo "selected='selected'" ; ?> value='Úc'>Úc</option>
				<option <?php if($row[6] == "Uganda") echo "selected='selected'" ; ?> value='Uganda'>Uganda</option>
				<option <?php if($row[6] == "Uruguay") echo "selected='selected'" ; ?> value='Uruguay'>Uruguay</option>
				<option <?php if($row[6] == "Uzbekistan") echo "selected='selected'" ; ?> value='Uzbekistan'>Uzbekistan</option>
				<option <?php if($row[6] == "Vanuatu") echo "selected='selected'" ; ?> value='Vanuatu'>Vanuatu</option>
				<option <?php if($row[6] == "Vatican") echo "selected='selected'" ; ?> value='Vatican'>Vatican</option>
				<option <?php if($row[6] == "Venezuela") echo "selected='selected'" ; ?> value='Venezuela'>Venezuela</option>
				<option <?php if($row[6] == "Việt Nam") echo "selected='selected'" ; ?> value='Việt Nam'>Việt Nam</option>
				<option <?php if($row[6] == "Wales") echo "selected='selected'" ; ?> value='Wales'>Wales</option>
				<option <?php if($row[6] == "Ý") echo "selected='selected'" ; ?> value='Ý'>Ý</option>
				<option <?php if($row[6] == "Yemen") echo "selected='selected'" ; ?> value='Yemen'>Yemen</option>
				<option <?php if($row[6] == "Zambia") echo "selected='selected'" ; ?> value='Zambia'>Zambia</option>
				<option <?php if($row[6] == "Zimbabwe") echo "selected='selected'" ; ?> value='Zimbabwe'>Zimbabwe</option>
				<option <?php if($row[6] == "Liên doanh, liên kết") echo "selected='selected'" ; ?> value='Liên doanh, liên kết'>Liên doanh, liên kết</option>
				<option <?php if($row[6] == "") echo "selected='selected'" ; ?> value=''>Chọn nước sản xuất</option>
				</select>
			</div>								
			<label for="field-4" class="col-sm-15 control-label">Nơi sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">	
			<input name='noidung' readonly class='form-control' id='noidung' value = "<?php echo $row['noidung'];?>"/>			
			</div>
			<label for="field-4" class="col-sm-15 control-label">Lý do tăng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45" >
				<Select name="lydotang"   class="form-control" id ="lydotang">
				<option <?php if($row['lydotang'] == "Mua mới") echo "selected='selected'";?> value="Mua mới">Mua mới</option>
				<option <?php if($row['lydotang'] == "Được tiếp nhận") echo "selected='selected'";?> value="Được tiếp nhận">Được tiếp nhận</option>
				</select>
			</div>
</fieldset>
</div>	
	<div class="col-sm-6">
	<fieldset>
	<legend>Nguyên giá</legend>			
			<input name="DTKV" style = "display:none" type="text" value="<?php echo $row[9]; ?>" class="form-control" id="DTKV"/>			
			<label for="field-4" class="col-sm-3 control-label">Nguyên giá:</label>
			<div class="col-sm-75">
				<input name="nguyengia" type="text" readonly tabindex="-1" class="form-control" data-mask="fdecimal" value="<?php echo (kieudouble($row[10])+kieudouble($row[11])); ?>" id="nguyengia"/>	
							
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
			<div class="col-sm-75">
				<input name="ngansach" type="text" class="form-control" value="<?php echo $row[10]; ?>" data-mask="fdecimal" id="ngansach"/>					
			</div><label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-3" class="col-sm-3 control-label">Nguồn khác:</label>
			<div class="col-sm-75">	
				<input name="nguonkhac" type="text" class="form-control" value="<?php echo $row[11]; ?>" data-mask="fdecimal" id="nguonkhac"/>			
			</div>	
<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>			
		</fieldset>						
</div>			
	<fieldset>
	<legend>Hao mòn/khấu hao</legend>	
			<div class="col-sm-12">
			<input type="checkbox" <?php if($row['khauhao'] == "Có") echo "checked";?> name="khauhao" tabindex="-1" id="khauhao" /> Tính khấu hao tài sản
			</div>
			<label for="field-4"  class="col-sm-35 control-label">Hao mòn TT162:</label>
			<div class="col-sm-75">
				<input name="phantramhaomon" readonly tabindex="-1" type="text" value="<?php echo $row[12]; ?>" class="form-control" id ="phantramhaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4"  class="col-sm-35 control-label">Hao mòn QĐ32:</label>
			<div class="col-sm-75">
				<input name="phantram32"  type="text" readonly tabindex="-1" value="<?php echo $row[13]; ?>" class="form-control" id ="phantram32"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" class="col-sm-35 control-label">Số hao mòn:</label>
			<div class="col-sm-75">
				<input name="sohaomon" type="text" class="form-control" value="<?php echo $row[14]; ?>" data-mask="fdecimal" id="sohaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-35 control-label">Giá trị còn lại:</label>
			<div class="col-sm-75">
				<input name="conlai" type="text" class="form-control" value="<?php echo $row[15]; ?>" data-mask="fdecimal" id="conlai"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label id="lbngaykhauhao" for="field-4" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?>  class="col-sm-35 control-label">Ngày tính khấu hao:</label>
			<div class="col-sm-75">
				<input data-inputmask="'alias': 'date'" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> name="ngaykhauhao" type="text" class="form-control" value="<?php echo doingay1($row['ngaykhauhao']); ?>" placeholder="Thời gian bắt đầu tính khấu hao tài sản" id="ngaykhauhao"/>
			</div>
			<label for="field-4" id="lbnamsudungconlai" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Thời gian SD còn lại:</label>
			<div class="col-sm-75">
				<input name="namkhconlai" value="<?php echo $row['namkhconlai']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" id ="namkhconlai"/>
			</div>
			<label for="field-4" id="lbdvnamsudungconlai" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(năm)</label>
			<label for="field-4" id="lbphuongphapkhauhao" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Phương pháp KH:</label>
			<div class="col-sm-75" >
				<Select name="phuongphapkhauhao"  <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="form-control" id ="phuongphapkhauhao">
				<option <?php if($row['phuongphapkhauhao'] == "Khấu hao theo đường thẳng") echo "checked" ; ?> value="Khấu hao theo đường thẳng">Khấu hao theo đường thẳng </option>
				<option <?php if($row['phuongphapkhauhao'] == "Khấu hao số dư giảm dần") echo "checked" ; ?> value="Khấu hao số dư giảm dần">Khấu hao số dư giảm dần </option>
				<option <?php if($row['phuongphapkhauhao'] == "Khấu hao theo tổng số") echo "checked" ; ?> value="Khấu hao theo tổng số">Khấu hao theo tổng số </option>
				</select>
			</div>
			<label for="field-4" id="lbthangkhauhaoconlai" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Thời gian KH còn lại:</label>
			<div class="col-sm-75">
				<input name="thangkhauhaoconlai" value="<?php echo $row['thangkhauhaoconlai']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" data-mask="fdecimal" id="thangkhauhaoconlai"/>
			</div>
			<label for="field-4" id="lbdvthangkhauhaoconlai" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(tháng)</label>
			<label for="field-4" id="lbtylekhauhao" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Tỷ lệ khấu hao:</label>
			<div class="col-sm-75">
				<input name="tylekhauhao" value="<?php echo $row['tylekhauhao']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" data-mask="fdecimal" id="tylekhauhao"/>
			</div>
			<label for="field-4" id="lbdvtylekhauhao" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" id="lbtylesxkd" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Tỷ lệ SXKD-DV:</label>
			<div class="col-sm-75">
				<input name="tylesxkd" value="<?php echo $row['tylesxkd']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" data-mask="fdecimal" id="tylesxkd"/>
			</div>
			<label for="field-4" id="lbdvtylesxkd" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" id="lbsokhauhao" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Số đã khấu hao:</label>
			<div class="col-sm-75">
				<input name="sokhauhao" value="<?php echo $row['sokhauhao']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" data-mask="fdecimal" id="sokhauhao"/>
			</div>
			<label for="field-4" id="lbdvsokhauhao" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" id="lbgiatrikhcl" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> class="col-sm-35 control-label">Giá trị KH còn lại:</label>
			<div class="col-sm-75">
				<input name="giatrikhcl" value="<?php echo $row['giatrikhcl']; ?>" <?php if($row['khauhao'] == "Không") echo "style='display:none'";?> type="text" class="form-control" data-mask="fdecimal" id="giatrikhcl"/>
			</div>
			<label for="field-4" id="lbdvgiatrikhcl" style="padding-left: 0px;<?php if($row['khauhao'] == "Không") echo "display:none;";?>" class="col-sm-05 control-label">(VNĐ)</label>
			<input name="sokhnam" value="<?php echo $row['sokhnam']; ?>" style="display:none" type="text" class="form-control" data-mask="fdecimal" id="sokhnam"/>
		</fieldset>	
<div class="col-sm-12">	
		<fieldset>
 		<legend>Hiện trạng sử dụng</legend>		
			<div class="col-sm-3">
				<input type="radio" name="hientrang" <?php if($row[22] == "Kinh doanh") echo "checked" ; ?>   value="Kinh doanh" /> Kinh doanh	
			</div>	
			<div class="col-sm-3">
				<input type="radio" name="hientrang" <?php if($row[22] == "Không kinh doanh") echo "checked" ; ?> value="Không kinh doanh" /> Không kinh doanh	       								
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang" <?php if($row[22] == "Quản lý nhà nước") echo "checked" ; ?> value="Quản lý nhà nước" /> Quản lý nhà nước	
			</div>
			<div class="col-sm-3">
				<input type="radio" name="hientrang" <?php if($row[22] == "Hoạt động khác") echo "checked" ; ?> value="Hoạt động khác" /> Hoạt động khác
			</div>									
		</fieldset>			
		<fieldset>
 		<legend>Thông tin khác</legend>	
			<label for="field-4" class="col-sm-15 control-label">Đơn vị tính:</label>
			<div class="col-sm-45">
				<input name="DVT"  value="<?php echo $row[8]; ?>" type="text" class="form-control" id="field-3"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Thông số kỹ thuật:</label>
			<div class="col-sm-45">
				<input name="GCTS" type="text" value="<?php echo $row[16]; ?>" class="form-control" id="field-3"/>				
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ghi chú:</label>
			<div class="col-sm-105">
				<input name="ttkhac" type="text" value="<?php echo $row[17]; ?>" class="form-control" id="field-3"/>									
			</div>												
			<label for="field-4" class="col-sm-15 control-label">Quyết định:</label>
			<div class="col-sm-45">
				<input name="quyetdinhbangiao" value="<?php echo $row[23]; ?>" type="text" class="form-control" id="field-3"/>									
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngayquyetdinhbangiao" value="<?php echo doingay1($row[24]); ?>" type="text" class="form-control" id="ngayquyetdinhbangiao">
			</div>	
			<label for="field-4" class="col-sm-15 control-label">Hóa đơn:</label>
			<div class="col-sm-45">
				<input name="hoadon" type="text" class="form-control" value="<?php echo $row[25]; ?>" id="field-3"/>									
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngayhoadon" type="text" value="<?php echo doingay1($row[26]); ?>" class="form-control" id="ngayhoadon">			
			</div>	
		</fieldset>						
		<fieldset style="display: none">
 		<legend>Tài sản tương tự</legend>							
			<label for="field-4" class="col-sm-15 control-label">Số copy:</label>
			<div class="col-sm-2">									
				<input name="socopy" type="text" class="form-control" id="socopy"/>									
			</div>	
		</fieldset>	
		</div>
			<input type="checkbox" name="theodoi" tabindex="-1" checked> Theo dõi
			<input name="namhm" type="text" style="display:none" value="<?php echo $row[18]; ?>" class="form-control" id ="namhm"/>
			<input name="soduhm" type="text" style="display:none" value="<?php echo $row[19]; ?>" class="form-control" id ="soduhm"/>
			<input name="sohmnam" type="text" style="display:none" value="<?php echo $row[20]; ?>" class="form-control" id ="sohmnam"/>
			<input name="phantramhm" type="text" style="display:none" value="<?php echo $row[21]; ?>" class="form-control" id ="phantramhm"/>
		<div class="modal-footer">			
			<input type="submit" name="capnhatts" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật"/>
		</div>	
	</form>	
<?php 
}
?>	
	</div>	
	<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" >&times;</button>
					<h4 class="modal-title" style="text-align:center;"><strong>Nhập thông tin phòng ban</strong></h4>
				</div>				
				<div class="modal-body">				
						<form  id="thoaidmpb" method="POST" class='form-horizontal form-groups-bordered'>					
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên phòng ban:</label>
								<div class="col-sm-8">
									<input name="tenphongban" type="text" class="form-control" id="tenphongban"/>
								</div>								
								<label class="col-sm-3 control-label">Chức năng:</label>
								<div class="col-sm-8">
									<input name="chucnanggq" type="text" class="form-control" id="chucnanggq"/>
								</div>
								<label class="col-sm-3 control-label">Số lượng cán bộ:</label>
								<div class="col-sm-8">
									<input name="soluongcb" type="text" class="form-control" id="soluongcb"/>									
								</div>									
								<input name="matpb" type="text"  style="display:none" class="form-control" id="matpb" value="<?php echo $ma[0];?>" />
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<button name="luupb" onclick="function1()" id="luupb" class="btn btn-blue">Cập nhật</button>
							</div>
						</form>						
				</div>
			</div>
		</div>
	</div>
<?php 	
	//
		 	
?>
	</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>