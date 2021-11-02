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
   else if(frm.ngansach.value =="" && frm.nguonkhac.value =="")
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
		>><a class="tieude" href='NhapQLTSvkt.php?id=0'>
			Tài sản cố định vật kiến trúc khác
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
/**
* @param $hientrang
 * @return string
*/function hientrang ($hientrang)
{
	global $con;
	global $id;
	$kq="";
	$sql="select soluong,phanloai from tblhientrang where TTTS = ".$id;
	$qrsql = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($qrsql))
	{
		if($row[1] == $hientrang)
			$kq= $row[0];
	}
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
	if (isset($_POST['capnhatts']))
	{
		$khauhao="Không";
		if(isset($_POST['khauhao']))
			$khauhao="Có";	
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);		
		$DTXD = $_POST['DTXD'];		
		$namsanxuat = $_POST['namsanxuat'];
		if($_POST['ngansach'])
			$ngansach = kieudouble($_POST['ngansach']);
		else
			$ngansach = 0;
		if($_POST['nguonkhac'])
			$nguonkhac = kieudouble($_POST['nguonkhac']);
		else
			$nguonkhac = 0;	
		if(isset($_POST['theodoi']))			
			$theodoi="Theo dõi";
		else
			$theodoi="Không";
		$quyetdinhbangiao=$_POST['quyetdinhbangiao'];
		$ngayquetdinhbangiao=doingay($_POST['ngayquyetdinhbangiao']);
		$bienbannghiemthu=$_POST['bienbannghiemthu'];
		$ngaybienbannghiemthu=doingay($_POST['ngaybienbannghiemthu']);	
		$noidung = $_POST['noidung'];
		$TKVDAT = $_POST['TKVDAT'];		
		$giatrikhcl = kieudouble($_POST['giatrikhcl']);		
		$namhm = $_POST['namhm'];
		$phantramhm = $_POST['phantramhm'];
		$soduhm = $_POST['soduhm'];
		$sohmnam = $_POST['sohmnam'];		
		$sohaomon = kieudouble($_POST['sohaomon']);				
		$conlai = kieudouble($_POST['conlai']);	
		$lydotang = $_POST['lydotang'];
		$ngaykhauhao = doingay($_POST['ngaykhauhao']);
		$namkhconlai=kieudouble($_POST['namkhconlai']);
		$phuongphapkhauhao = $_POST['phuongphapkhauhao'];
		$thangkhauhaoconlai = kieudouble($_POST['thangkhauhaoconlai']);
		$tylekhauhao = kieudouble($_POST['tylekhauhao']);
		$tylesxkd= kieudouble($_POST['tylesxkd']);
		$sokhauhao =  kieudouble($_POST['sokhauhao']);
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
		$sql="update tblqlts set mataisan='$mataisan',tentaisan='$tentaisan',tenchitiet='$tenchitiet',DTXD='$DTXD',namsanxuat='$namsanxuat',ngaynhap='$ngaynhap',ngaysudung='$ngaysudung',ngansach=$ngansach,nguonkhac=$nguonkhac,phantram=$pthm,sonamsd=$sonamsd,sothutu=$ttsx,XOA='K',DVT='m2',chitiethinhthai='$chitiethinhthai',phantram32='$phantram32',sohaomon=$sohaomon,conlai=$conlai,theodoi='$theodoi',quyetdinhbangiao='$quyetdinhbangiao',ngayquyetdinhbangiao='$ngayquetdinhbangiao',bienbannghiemthu='$bienbannghiemthu',ngaybienbannghiemthu='$ngaybienbannghiemthu',lydotang = '$lydotang',giatrikhcl=$giatrikhcl,khauhao='$khauhao'  where TTQLTS = $id";			
		$kq=mysqli_query($con,$sql);	
		$sql = "update tblhaomon set ngaythang='$ngaynhap',namhaomon=$namhm,phantram=$phantramhm,sodu=$soduhm,sotien=$sohmnam,ngaykhauhao='$ngaykhauhao',namkhconlai='$namkhconlai',phuongphapkhauhao='$phuongphapkhauhao',thangkhauhaoconlai=$thangkhauhaoconlai,tylekhauhao=$tylekhauhao,tylesxkd=$tylesxkd,sokhauhao=$sokhauhao,sokhnam=$sokhnam  WHERE TTTS = $id";	
		$kq=mysqli_query($con,$sql);
		$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["tslv"])." where TTTS =$id and phanloai='Trụ sở làm việc'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["hdsn"])." where TTTS =$id and phanloai='Cơ sở HĐ sự nghiệp'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["nhao"])." where TTTS =$id and phanloai='Làm nhà ở'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["chot"])." where TTTS =$id and phanloai='Cho thuê'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["bot"])." where TTTS =$id and phanloai='Bỏ trống'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["bic"])." where TTTS =$id and phanloai='Bị lấn chiếm'";											
			$kq=mysqli_query($con,$sql);		
			$sql = "Update tblhientrang set ngaythang='$ngaysudung',donvi='m2',soluong=".kieudouble($_POST["khac"])." where TTTS =$id and phanloai='Khác'";											
			$kq=mysqli_query($con,$sql);				
	}		
	$sql = "select tblqlts.mataisan,tblqlts.sonamsd,tblqlts.tenchitiet,tblqlts.CAPH,tblqlts.TKVDAT,tblqlts.ngaynhap,tblqlts.ngaysudung,tblqlts.namsanxuat,tblqlts.noidung,tblqlts.SOTA,tblqlts.DTXD,tblqlts.TDTSXD,tblqlts.ngansach,tblqlts.nguonkhac,tblqlts.phantram,tblqlts.phantram32,tblqlts.sohaomon,tblqlts.conlai,tblhaomon.namhaomon,tblhaomon.sodu,tblhaomon.sotien,tblhaomon.phantram,tblqlts.quyetdinhbangiao,tblqlts.ngayquyetdinhbangiao,tblqlts.bienbannghiemthu,tblqlts.ngaybienbannghiemthu,tblqlts.lydotang,tblqlts.khauhao,tblqlts.giatrikhcl,tblhaomon.ngaykhauhao,tblhaomon.namkhconlai,tblhaomon.phuongphapkhauhao,tblhaomon.thangkhauhaoconlai,tblhaomon.tylekhauhao,tblhaomon.tylesxkd,tblhaomon.sokhauhao,tblhaomon.sokhnam FROM tblqlts INNER JOIN tblhaomon ON tblqlts.TTQLTS = tblhaomon.TTTS WHERE tblqlts.TTQLTS = '$id'";
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
			$sql="select mataisanqd32,tentaiqd32,phantramhaomon,phantram32,namsudung from tbldanhsachqd32 Where  chitiethinhthai like 'Vật kiến trúc%'  and mataisanqd32 Like 'TS%'";
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
			<label for="field-4" class="col-sm-15 control-label">Thuộc khuôn viên<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input name="TKVDAT" type="text" data-validate = "required" value="<?php echo $row['TKVDAT']; ?>" class="form-control" id="field-3"/>
			</div>				
			<label for="field-4" class="col-sm-15 control-label">Ngày nhập<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaynhap" value="<?php echo doingay1($row[5]); ?>" type="text" data-validate = "required" class="form-control" id="ngaynhap"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" value="<?php echo doingay1($row[6]); ?>" data-validate = "required" class="form-control" id="ngaysudung"/>
			</div>
			<label for="field-4" class="col-sm-15 control-label">Năm sản xuất<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">									
				<input data-mask="decimal"  name='namsanxuat' id='namsanxuat' value="<?php echo $row[7]; ?>" data-validate = "required" class='form-control' />	
			</div>
			<label for="field-4" class="col-sm-15 control-label">Nơi sử dụng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45">
				<input name="noidung" type="text" data-validate = "required" value="<?php echo $row['noidung']; ?>" class="form-control" id="field-3"/>
			</div>			
			<label for="field-4" class="col-sm-15 control-label">Lý do tăng<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-45" >
				<Select name="lydotang"   class="form-control" id ="lydotang">
				<option <?php if($row['lydotang'] == "Xây dựng mới") echo "selected='selected'";?> value="Xây dựng mới">Xây dựng mới</option>
				<option <?php if($row['lydotang'] == "Được tiếp nhận") echo "selected='selected'";?> value="Được tiếp nhận">Được tiếp nhận</option>
				</select>
			</div>
			<label for="field-3" class="col-sm-15 control-label">Tổng DT<span style="padding-left:0px; color:red;">*</span>:</label>
			<div class="col-sm-4">
				<input name="DTXD" type="text" data-validate = "required" value="<?php echo $row[10]; ?>" class="form-control" id="field-3">
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(m2)</label>			
</div>	
	<div class="col-sm-6">
	<fieldset>
	<legend>Nguyên giá</legend>									
			<label for="field-4" class="col-sm-3 control-label">Nguyên giá:</label>
			<div class="col-sm-75">
				<input name="nguyengia" type="text" readonly tabindex="-1" value="<?php echo (kieudouble($row[13])+kieudouble($row[12])); ?>" class="form-control" data-mask="fdecimal" id="nguyengia"/>									
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
			<div class="col-sm-75">
				<input name="ngansach" type="text" class="form-control" value="<?php echo $row[12]; ?>" data-mask="fdecimal" id="ngansach"/>					
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-3" class="col-sm-3 control-label">Nguồn khác:</label>
			<div class="col-sm-75">	
				<input name="nguonkhac" type="text" class="form-control" value="<?php echo $row[13]; ?>" data-mask="fdecimal" id="nguonkhac"/>			
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
				<input name="phantramhaomon" readonly tabindex="-1" value="<?php echo $row[14]; ?>" type="text" class="form-control" id ="phantramhaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4"  class="col-sm-35 control-label">Hao mòn QĐ32:</label>
			<div class="col-sm-75">
				<input name="phantram32"  type="text" readonly tabindex="-1" value="<?php echo $row[15]; ?>" class="form-control" id ="phantram32"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(%)</label>
			<label for="field-4" class="col-sm-35 control-label">Số hao mòn:</label>
			<div class="col-sm-75">
				<input name="sohaomon" type="text" class="form-control" value="<?php echo $row[16]; ?>" data-mask="fdecimal" id="sohaomon"/>
			</div>
			<label for="field-4" style="padding-left: 0px;" class="col-sm-05 control-label">(VNĐ)</label>
			<label for="field-4" class="col-sm-35 control-label">Giá trị còn lại:</label>
			<div class="col-sm-75">
				<input name="conlai" type="text" class="form-control" value="<?php echo $row[17]; ?>" data-mask="fdecimal" id="conlai"/>
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
			<label for="field-4" class="col-sm-15 control-label">Trụ sở làm việc:</label>
			<label for="field-4" class="col-sm-2 control-label">CSHĐ sự nghiệp:</label>
			<label for="field-4" class="col-sm-15 control-label">Làm nhà ở:</label>
			<label for="field-4" class="col-sm-15 control-label">Cho thuê:</label>
			<label for="field-4" class="col-sm-15 control-label">Bỏ trống:</label>
			<label for="field-4" class="col-sm-15 control-label">Bị lấn chiếm:</label>
			<label for="field-4" class="col-sm-15 control-label">Khác:</label>
			<div class="col-sm-15">
				<input class="form-control" name="tslv" id="tslv" value="<?php echo hientrang("Trụ sở làm việc"); ?>" data-mask="fdecimal" type="text">
			</div>			
			<div class="col-sm-2">
				<input class="form-control" name="hdsn" id="hdsn" data-mask="fdecimal" value="<?php echo hientrang("Cơ sở HĐ sự nghiệp"); ?>" type="text" >
			</div>			
			<div class="col-sm-15">
				<input class="form-control" name="nhao" id="nhao" data-mask="fdecimal" value="<?php echo hientrang("Làm nhà ở"); ?>" type="text" >
			</div>			
			<div class="col-sm-15">
				<input class="form-control" name="chot" id="chot" data-mask="fdecimal" value="<?php echo hientrang("Cho thuê"); ?>" type="text" >
			</div>			
			<div class="col-sm-15">
				<input class="form-control" name="bot" id="bot" data-mask="fdecimal" value="<?php echo hientrang("Bỏ trống"); ?>" type="text" >
			</div>			
			<div class="col-sm-15">
				<input class="form-control" name="bic" id="bic" data-mask="fdecimal" value="<?php echo hientrang("Bị lấn chiếm"); ?>" type="text" >
			</div>			
			<div class="col-sm-15">
				<input class="form-control" name="khac" id="khac" data-mask="fdecimal" value="<?php echo hientrang("Khác"); ?>" type="text" >
			</div>														
		</fieldset>	
		<fieldset>
 		<legend>Thông tin khác</legend>																	
			<label for="field-4" class="col-sm-15 control-label">Quyết định:</label>
			<div class="col-sm-45">
				<input name="quyetdinhbangiao" type="text" value="<?php echo $row[22]; ?>" class="form-control" id="field-3"/>									
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" value="<?php echo doingay1($row[23]); ?>" name="ngayquyetdinhbangiao" type="text" class="form-control" >
			</div>	
			<label for="field-4" class="col-sm-15 control-label">Hóa đơn:</label>
			<div class="col-sm-45">
				<input name="bienbannghiemthu" type="text" value="<?php echo $row[24]; ?>" class="form-control" id="field-3"/>									
			</div>
			<label for="field-4" class="col-sm-15 control-label">Ngày tháng:</label>
			<div class="col-sm-45">
				<input data-inputmask="'alias': 'date'" value="<?php echo doingay1($row[25]); ?>" name="ngaybienbannghiemthu" type="text" class="form-control">			
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
	</div>
	<?php }?>	
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
	
	</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>