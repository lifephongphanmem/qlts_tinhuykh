<?php require "general.php"; ?>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); ?>											
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
						<li class="active">
							<a  href="/Nhap/NhapQLTSnha/NhapQLTS.php">	
								<i class="entypo-flag"></i>							
								<span class='title'>Quản lý tài sản cố định là nhà</span>
							</a>						
						</li>
						<li >
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
				scrollY:		"400px",
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
    $('#button').click(function(){
        $('#ttct').slideToggle();            
    });
});
</script>
	<script>
    $(function(){        
        // Input Mask
        if($.isFunction($.fn.inputmask))
        {
            $("[data-mask]").each(function(i, el)
            {
                var $this = $(el),
                        mask = $this.data('mask').toString(),
                        opts = {
                            numericInput: attrDefault($this, 'numeric', false),
                            radixPoint: attrDefault($this, 'radixPoint', ''),
                            rightAlignNumerics: attrDefault($this, 'numericAlign', 'left') == 'right'
                        },
                        placeholder = attrDefault($this, 'placeholder', ''),
                        is_regex = attrDefault($this, 'isRegex', '');


                if(placeholder.length)
                {
                    opts[placeholder] = placeholder;
                }

                switch(mask.toLowerCase())
                {
                    case "phone":
                        mask = "(999) 999-9999";
                        break;

                    case "currency":
                    case "rcurrency":

                        var sign = attrDefault($this, 'sign', '$');;

                        mask = "999,999,999.99";

                        if($this.data('mask').toLowerCase() == 'rcurrency')
                        {
                            mask += ' ' + sign;
                        }
                        else
                        {
                            mask = sign + ' ' + mask;
                        }

                        opts.numericInput = true;
                        opts.rightAlignNumerics = false;
                        opts.radixPoint = '.';
                        break;

                    case "email":
                        mask = 'Regex';
                        opts.regex = "[a-zA-Z0-9._%-]+@[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}";
                        break;

                    case "fdecimal":
                        mask = 'decimal';
                        $.extend(opts, {
                            autoGroup		: true,
                            groupSize		: 3,
                            radixPoint		: attrDefault($this, 'rad', '.'),
                            groupSeparator	: attrDefault($this, 'dec', ',')
                        });
                }

                if(is_regex)
                {
                    opts.regex = mask;
                    mask = 'Regex';
                }

                $this.inputmask(mask, opts);
            });
        }
    });
    
    // Element Attribute Helper
    function attrDefault($el, data_var, default_val)
    {
        if(typeof $el.data(data_var) != 'undefined')
        {
            return $el.data(data_var);
        }

        return default_val;
    }
</script>
<script>
$(document).ready(function()
{
	$('#ngansach').change(function(){		
		thaydoi();
	});
});
$(document).ready(function()
{
	$('#nguonkhac').change(function(){		
		thaydoi();
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
$(document).ready(function()
{
	$('#mataisancs').change(function(){		
		giatri = this.value;
		$('#PTHMcs').load('ajax_pthmsua.php?id_a='+giatri);
		var ngansach= $("#ngansachcs").val();	
		$("#ngansachcs").val("");	
		$("#nguonkhaccs").val("");
		$("#conlaics").val("");	
		$("#sohaomoncs").val("");
		document.getElementById("ngansachcs").focus();
	});	
			
});
$(document).ready(function()
{
	$('#ngansachcs').change(function(){		
		thaydoics();
	});
});
$(document).ready(function()
{
	$('#nguonkhaccs').change(function(){		
		thaydoics();
	});
});
$(document).ready(function()
{
	$('#ngaysudungcs').change(function(){		
		thaydoics();
	});
});
$(document).ready(function()
{
	$('#ngaynhapcs').change(function(){		
		thaydoics();
	});
});
$(document).ready(function()
{
	$('#mataisanc').change(function(){		
		giatri = this.value;
		$('#PTHMc').load('ajax_pthmc.php?id_a='+giatri);			
		$("#ngansachc").val("");	
		$("#nguonkhacc").val("");
		$("#conlaic").val("");	
		$("#sohaomonc").val("");
		document.getElementById("ngansachc").focus();
	});	
			
});
$(document).ready(function()
{
	$('#ngansachc').change(function(){		
		thaydoic();
	});
});
$(document).ready(function()
{
	$('#nguonkhacc').change(function(){		
		thaydoic();
	});
});
$(document).ready(function()
{
	$('#ngaysudungc').change(function(){		
		thaydoic();
	});
});
$(document).ready(function()
{
	$('#ngaynhapc').change(function(){		
		thaydoic();
	});
});
function thaydoi ()
{
		//tổng số năm sử dụng tài sản theo QĐ32 và theo TT45
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
}
function thaydoics ()
{
		//tổng số năm sử dụng tài sản theo QĐ32 và theo TT45
		var namsudung162 = $('#namsudungcs').val();
		var namsudung32 = Math.round(100/parseFloat($('#phantram32cs').val()));
		//tính nguyên giá tài sản
		var ngansach = $('#ngansachcs').val();
		if(ngansach != "")
			ngansach = ngansach.replace(/,/g,"");
		else
			ngansach = 0;
		var nguonkhac = $('#nguonkhaccs').val();
		if(nguonkhac != "")
			nguonkhac = nguonkhac.replace(/,/g,"");
		else
			nguonkhac = 0;	
		var nguyengia = parseFloat(ngansach) + parseFloat(nguonkhac);
		//năm đưa vào sử dụng
		var namsd = $('#ngaysudungcs').val();
			namsd = namsd.substring(6,10);	
		//năm nhập tài sản vào phần mềm
		var namnhap = new Date;
			namnhap = namnhap.getFullYear();	
		//số năm đã sử dụng tài sản theo từng loại quyết định, thông tư
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
			sohaomon += nguyengia*(parseFloat($('#phantram32cs').val())/100)*namqd32;
			sohaomon += nguyengia*(parseFloat($('#phantramhaomoncs').val())/100)*namqd162;
			if(sohaomon>=nguyengia)
				sohaomon=nguyengia;
		}
		else
		{
			sohaomon += nguyengia*(parseFloat($('#phantramhaomoncs').val())/100)*parseFloat(namqd162);
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
			phantramhm = parseFloat($('#phantram32cs').val());
			if(namqd32 <= namsudung32)
				var sohmnam = nguyengia*phantramhm/100;				
		}
		if(namhm >= 2015 && namhm >= namsd)
		{
			phantramhm = parseFloat($('#phantramhaomoncs').val());			
			if(namqd162 <= namsudung162)
				var sohmnam = nguyengia*phantramhm/100;	
		}		
		//số dư hao mòn
		var soduhm=0;
		if(sohaomon>sohmnam)
			soduhm = sohaomon - sohmnam;
		$("#sohaomoncs").val(sohaomon);
		$("#conlaics").val(conlai);	
		$("#namhmcs").val(namhm);
		$("#phantramhmcs").val(phantramhm);	
		$("#soduhmcs").val(soduhm);
		$("#sohmnamcs").val(sohmnam);	
}
function thaydoic ()
{
		//tổng số năm sử dụng tài sản theo QĐ32 và theo TT45
		var namsudung162 = $('#namsudungc').val();
		var namsudung32 = Math.round(100/parseFloat($('#phantram32c').val()));
		//tính nguyên giá tài sản
		var ngansach = $('#ngansachc').val();
		if(ngansach != "")
			ngansach = ngansach.replace(/,/g,"");
		else
			ngansach = 0;
		var nguonkhac = $('#nguonkhacc').val();
		if(nguonkhac != "")
			nguonkhac = nguonkhac.replace(/,/g,"");
		else
			nguonkhac = 0;	
		var nguyengia = parseFloat(ngansach) + parseFloat(nguonkhac);
		//năm đưa vào sử dụng
		var namsd = $('#ngaysudungc').val();
			namsd = namsd.substring(6,10);	
		//năm nhập tài sản vào phần mềm
		var namnhap = new Date;
			namnhap = namnhap.getFullYear();	
		//số năm đã sử dụng tài sản theo từng loại quyết định, thông tư
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
			sohaomon += nguyengia*(parseFloat($('#phantram32c').val())/100)*namqd32;
			sohaomon += nguyengia*(parseFloat($('#phantramhaomonc').val())/100)*namqd162;
			if(sohaomon>=nguyengia)
				sohaomon=nguyengia;
		}
		else
		{
			sohaomon += nguyengia*(parseFloat($('#phantramhaomonc').val())/100)*parseFloat(namqd162);
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
			phantramhm = parseFloat($('#phantram32c').val());
			if(namqd32 <= namsudung32)
				var sohmnam = nguyengia*phantramhm/100;				
		}
		if(namhm >= 2015 && namhm >= namsd)
		{
			phantramhm = parseFloat($('#phantramhaomonc').val());			
			if(namqd162 <= namsudung162)
				var sohmnam = nguyengia*phantramhm/100;	
		}		
		//số dư hao mòn
		var soduhm=0;
		if(sohaomon>sohmnam)
			soduhm = sohaomon - sohmnam;
		$("#sohaomonc").val(sohaomon);
		$("#conlaic").val(conlai);	
		$("#namhmc").val(namhm);
		$("#phantramhmc").val(phantramhm);	
		$("#soduhmc").val(soduhm);
		$("#sohmnamc").val(sohmnam);	
}
function getFocus() {
    document.getElementById("ngaynhap").focus();
	document.getElementById("ngaysudung").focus();
	document.getElementById("nguonkhac").focus();
	document.getElementById("ngansach").focus();
}
function getFocuscs() {
    document.getElementById("ngaynhapcs").focus();
	document.getElementById("ngaysudungcs").focus();
	document.getElementById("nguonkhaccs").focus();
	document.getElementById("ngansachcs").focus();
}
function getFocusc() {
    document.getElementById("ngaynhapc").focus();
	document.getElementById("ngaysudungc").focus();
	document.getElementById("nguonkhacc").focus();
	document.getElementById("ngansachc").focus();
}

</script>
<script>
$(document).ready(function()
{
	$('#mataisan').change(function(){		
		giatri = this.value;
		$('#PTHM').load('ajax_pthm.php?id_a='+giatri);			
	});	
	$('#mataisancs').change(function(){		
		giatri = this.value;
		$('#PTHM').load('ajax_pthmcs.php?id_a='+giatri);			
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
$(document).on("click", ".open-AddBookDialog", function (e) {
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookId").val(myBookId[0]);
	$("#mataisancs").val(myBookId[1]);
	$("#tentaisancs").val(myBookId[2]);
	$("#tenchitietcs").val(myBookId[3]);
	$("#CAPHcs").val(myBookId[4]);
	$("#SOTAcs").val(myBookId[5]);
	$("#DTXDcs").val(myBookId[6]);
	$("#TDTSXDcs").val(myBookId[7]);
	$("#namsanxuatcs").val(myBookId[8]);
	$("#noidungcs").val(myBookId[9]);
	$("#ngaynhapcs").val(myBookId[10]);
	$("#ngaysudungcs").val(myBookId[11]);
	$("#ngansachcs").val(myBookId[12]);
	$("#nguonkhaccs").val(myBookId[13]);
	$("#TKVDATcs").val(myBookId[14]);
	$("#ttkhaccs").val(myBookId[15]);
	$("#phantramhaomoncs").val(myBookId[16]);
	$("#phantram32cs").val(myBookId[17]);
	$("#namhmcs").val(myBookId[18]);
	$("#soduhmcs").val(myBookId[19]);
	$("#sohmnamcs").val(myBookId[20]);
	$("#phantramhmcs").val(myBookId[21]);
	$("#sohaomoncs").val(myBookId[22]);
	$("#conlaics").val(myBookId[23]);
	$("#TThaomon").val(myBookId[24]);
    $(_self.attr('href')).modal('show');		
});
 </script>
 <script>
$(document).on("click", ".open-AddBookDialog1", function (e) {
    e.preventDefault();
    var _self = $(this);
    var myBookId = _self.data('id').split('>');
    $("#bookIdc").val(myBookId[0]);
	$("#mataisanc").val(myBookId[1]);
	$("#tenchitietc").val(myBookId[3]);
	$("#CAPHc").val(myBookId[4]);
	$("#SOTAc").val(myBookId[5]);
	$("#DTXDc").val(myBookId[6]);
	$("#TDTSXDc").val(myBookId[7]);
	$("#namsanxuatc").val(myBookId[8]);
	$("#noidungc").val(myBookId[9]);
	$("#ngaynhapc").val(myBookId[10]);
	$("#ngaysudungc").val(myBookId[11]);
	$("#ngansachc").val(myBookId[12]);
	$("#nguonkhacc").val(myBookId[13]);
	$("#TKVDATc").val(myBookId[14]);
	$("#ttkhacc").val(myBookId[15]);
	$("#phantramhaomonc").val(myBookId[16]);
	$("#phantram32c").val(myBookId[17]);
	$("#namhmc").val(myBookId[18]);
	$("#soduhmc").val(myBookId[19]);
	$("#sohmnamc").val(myBookId[20]);
	$("#phantramhmc").val(myBookId[21]);
	$("#sohaomonc").val(myBookId[22]);
	$("#conlaic").val(myBookId[23]);
    $(_self.attr('href')).modal('show');		
});
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
   else                        
      return true;    
}
</script>
 <script type="text/javascript">
	function showAjaxModal()
	{		
		jQuery('#modal-6').modal('show', {backdrop: 'static'});			
	}
	function showAjaxModal1()
	{
		giatri = $('#noidung').val();
		window.location.assign('NhapQLTS.php?id='+giatri);
	}
</script>					
		<div class="col-sm-12">
		<a class="tieude" href='/main.php' >
			Trang chủ
		</a>		>>
		<a class="tieude">
			Tài sản cố định là nhà
		</a>
			
		
		</div>		
		<h3>Quản lý tài sản cố định nhà</h3>		
		<a href='NhapQLTSmoi.php' class='btn btn-success'>
			Nhập mới
		</a>
		
		<a href='NhapTang.php' class='btn btn-success'>
			Tăng giảm/Sửa chữa
		</a>
		<!--
		<a href='Nhaphaomon.php' class='btn btn-success'>
			Hao mòn
		</a>
		-->
		<a href='Nhaphientrang.php' class='btn btn-success'>
			Hiện trạng sử dụng
		</a>
	
<?php

if(isset($_GET['id'])) {
	$tttc = $_GET['id'];
	$key = explode(">", $tttc);
}
	if (isset($_POST['chinhsuats']))
	{	
		$TTQLTScs=$_POST["bookId"];
		$mataisancs=$_POST["mataisancs"];		
		$tenchitietcs=$_POST["tenchitietcs"];
		$tentaisancs="";	$chitiethinhthaics="";$ttsxcs=0;$pthmcs=0;$sonamsdcs=0;
		$ngaynhapcs = doingay($_POST['ngaynhapcs']);
		$ngaysudungcs = doingay($_POST['ngaysudungcs']);
		$CAPHcs = $_POST['CAPHcs'];
		$SOTAcs = $_POST['SOTAcs'];
		$DTXDcs = $_POST['DTXDcs'];
		$TDTSXDcs = $_POST['TDTSXDcs'];
		$namsanxuatcs = $_POST['namsanxuatcs'];
		if($_POST['ngansachcs'])
			$ngansachcs = kieudouble($_POST['ngansachcs']);
		else
			$ngansachcs = 0;
		if($_POST['nguonkhaccs'])
			$nguonkhaccs = kieudouble($_POST['nguonkhaccs']);
		else
			$nguonkhaccs = 0;		
		$noidungcs = $_POST['noidungcs'];
		$TKVDATcs = $_POST['TKVDATcs'];
		$ttkhaccs = $_POST['ttkhaccs'];
		$sohaomoncs = kieudouble($_POST['sohaomoncs']);				
		$conlaics = kieudouble($_POST['conlaics']);		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32 Where mataisanqd32 = '".$mataisancs."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisancs=$row[0];
			$chitiethinhthaics=$row[1];
			$ttsxcs = $row[2];
			$pthmcs=$row[3];$sonamsd=$row[4];
			$phantram32cs=$row[5];
		}
		$sql="Update tblqlts set mataisan='$mataisancs',tentaisan='$tentaisancs',tenchitiet='$tenchitietcs',CAPH='$CAPHcs',SOTA='$SOTAcs',DTXD='$DTXDcs',TDTSXD='$TDTSXDcs',chitiethinhthai='$chitiethinhthaics'";
		$sql = $sql.",namsanxuat=$namsanxuatcs,noidung='$noidungcs',ngaynhap='$ngaynhapcs',ngaysudung='$ngaysudungcs',ngansach=$ngansachcs,nguonkhac=$nguonkhaccs";
		$sql = $sql.",TKVDAT='$TKVDATcs',ttkhac='$ttkhaccs',phantram=$pthmcs,sonamsd=$sonamsd,sothutu=$ttsxcs,phantram32=$phantram32cs,sohaomon=$sohaomoncs,conlai=$conlaics";
		$sql = $sql ." Where TTQLTS = ".$TTQLTScs;		
		$kq=mysqli_query($con,$sql);	
		$TThaomon=$_POST['TThaomon'];	
		$namhm = $_POST['namhmcs'];
		$phantramhm = $_POST['phantramhmcs'];
		$soduhm = $_POST['soduhmcs'];		
		$sohmnam = $_POST['sohmnamcs'];		
		$sql = "Update tblhaomon set ngaythang='$ngaynhapcs',namhaomon=$namhm,sodu=$soduhm,sotien=$sohmnam,phantram=$phantramhm where TThaomon =".$TThaomon;								
		$qrsql=mysqli_query($con,$sql);
	}	        	
?>	
<?php 	
	//	
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
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);
		$CAPH = $_POST['CAPH'];
		$SOTA = $_POST['SOTA'];
		$DTXD = $_POST['DTXD'];
		$TDTSXD = $_POST['TDTSXD'];
		$namsanxuat = $_POST['namsanxuat'];
		if($_POST['ngansach'])
			$ngansach = kieudouble($_POST['ngansach']);
		else
			$ngansach = 0;
		if($_POST['nguonkhac'])
			$nguonkhac = kieudouble($_POST['nguonkhac']);
		else
			$nguonkhac = 0;		
		$noidung = $_POST['noidung'];
		$TKVDAT = $_POST['TKVDAT'];
		$ttkhac = $_POST['ttkhac'];
		$namhm = $_POST['namhm'];
		$phantramhm = $_POST['phantramhm'];
		$soduhm = $_POST['soduhm'];
		$sohmnam = $_POST['sohmnam'];		
		$sohaomon = kieudouble($_POST['sohaomon']);				
		$conlai = kieudouble($_POST['conlai']);		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
			$phantram32=$row[5];
		}
		$sql="INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,CAPH,SOTA,DTXD,TDTSXD,namsanxuat,noidung,ngaynhap,ngaysudung,ngansach,nguonkhac,TKVDAT,ttkhac,phantram,sonamsd,sothutu,XOA,DVT,madonvi,chitiethinhthai,phantram32,sohaomon,conlai,xem)";
		$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$CAPH','$SOTA','$DTXD','$TDTSXD','$namsanxuat','$noidung','$ngaynhap','$ngaysudung',$ngansach,$nguonkhac,'$TKVDAT','$ttkhac',$pthm,$sonamsd,$ttsx,'K','m2','$ab','$chitiethinhthai','$phantram32',$sohaomon,$conlai,'Chưa xem')";					
		$kq=mysqli_query($con,$sql);	
		$IDTS = IDTS();		
		$sql = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi) values('$ngaynhap',$IDTS,$namhm,$phantramhm,$soduhm,$sohmnam,'$ab')";										
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['copy']))
	{
		$socopy =  $_POST['socopy'];		
		$mataisan=$_POST["mataisanc"];		
		$tenchitiet=$_POST["tenchitietc"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhapc']);
		$ngaysudung = doingay($_POST['ngaysudungc']);
		$CAPH = $_POST['CAPHc'];
		$SOTA = $_POST['SOTAc'];
		$DTXD = $_POST['DTXDc'];
		$TDTSXD = $_POST['TDTSXDc'];
		$namsanxuat = $_POST['namsanxuatc'];
		if($_POST['ngansachc'])
			$ngansach = kieudouble($_POST['ngansachc']);
		else
			$ngansach = 0;
		if($_POST['nguonkhacc'])
			$nguonkhac = kieudouble($_POST['nguonkhacc']);
		else
			$nguonkhac = 0;		
		$noidung = $_POST['noidungc'];
		$TKVDAT = $_POST['TKVDATc'];
		$ttkhac = $_POST['ttkhacc'];
		$namhm = $_POST['namhmc'];
		$phantramhm = $_POST['phantramhmc'];
		$soduhm = $_POST['soduhmc'];
		$sohmnam = $_POST['sohmnamc'];		
		$sohaomon = kieudouble($_POST['sohaomonc']);				
		$conlai = kieudouble($_POST['conlaic']);		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung,phantram32 From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
			$phantram32=$row[5];
		}
		for	( $i = 1; $i <= $socopy; $i++)
		{
			$sql="INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,CAPH,SOTA,DTXD,TDTSXD,namsanxuat,noidung,ngaynhap,ngaysudung,ngansach,nguonkhac,TKVDAT,ttkhac,phantram,sonamsd,sothutu,XOA,DVT,madonvi,chitiethinhthai,phantram32,sohaomon,conlai,xem)";
			$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$CAPH',$SOTA,$DTXD,$TDTSXD,$namsanxuat,'$noidung','$ngaynhap','$ngaysudung',$ngansach,$nguonkhac,'$TKVDAT','$ttkhac',$pthm,$sonamsd,$ttsx,'K','m2','$ab','$chitiethinhthai','$phantram32',$sohaomon,$conlai,'Chưa xem')";			
			
			$kq=mysqli_query($con,$sql);	
			$IDTS = IDTS();			
			$sql = "Insert into tblhaomon(ngaythang,TTQLTS,namhaomon,phantram,sodu,sotien,madonvi) values('$ngaynhap',$IDTS,$namhm,$phantramhm,$soduhm,$sohmnam,'$ab')";								
			$kq=mysqli_query($con,$sql);			
		}
	}	        	
?>
	<div class="panel-body">
		<label class='col-sm-15' style = 'margin-top:7px;' >Nơi sử dụng:</label>
		<div  class='col-sm-4'>
			<select name='noidung' class='form-control' id='noidung'>
				<option selected='selected' value=''>---Nơi sử dụng---</option>
				<?php
				$sqldv = "Select distinct noidung from tblqlts where madonvi like '$ma[0]%'";
				$querydv=mysqli_query($con,$sqldv);
				while($rowdv=mysqli_fetch_array($querydv))
				{
					if($rowdv[0] == $key[0])
						echo "<option selected='selected' value='$rowdv[0]'>$rowdv[0]</option>";
					else
						echo "<option value='$rowdv[0]'>$rowdv[0]</option>";
				}
				?>
			</select>
		</div>

		<div  class='col-sm-1'>
			<a  onclick="showAjaxModal1();" class='btn btn-success'>
				Tìm kiếm
			</a>
		</div>
	</div>
		<table style="line-height: 0;" class="stripe row-border order-column" id="table-2">
			<thead>
				<tr>
					<th>STT</th>					
					<th>Tên chi tiết</th>
					<th>Ngày sử dụng</th>
					<th>Tổng DT</th>
					<th>Nguyên giá</th>
					<th>Giá trị CL</th>
					<th>Nơi sử dụng</th>
					<th></th>
				</tr>
			</thead>			
			<tbody>	
<?php 
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
function ktthanhly($mats)
{
    global $con;
	$sql = "Select * from tbldenghi where TTQLTS = '".$mats."' and (hinhthuc ='Thanh lý' or hinhthuc ='Bán' or hinhthuc ='Điều chuyển')";	
	$qrsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qrsql) <= 0)
		return false;
	else
		return true;
}
//
if(isset($_GET['id'])) {
	$tttc = $_GET['id'];
	$key = explode(">", $tttc);
	$sql = "select tblqlts.TTQLTS,tblqlts.mataisan,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.CAPH,tblqlts.SOTA," .
		"tblqlts.DTXD,tblqlts.TDTSXD,tblqlts.namsanxuat,tblqlts.noidung,tblqlts.ngaynhap,tblqlts.ngaysudung,tblqlts.ngansach,tblqlts.nguonkhac," .
		" tblqlts.TKVDAT,tblqlts.ttkhac" .
		",tblqlts.phantram,tblqlts.phantram32,tblhaomon.namhaomon,tblhaomon.sodu,tblhaomon.sotien,tblhaomon.phantram,tblqlts.sohaomon,tblqlts.conlai,tblhaomon.TThaomon" .
		" from tblqlts inner join tblhaomon on tblqlts.TTQLTS = tblhaomon.TTQLTS" .
		" where tblqlts.madonvi = '$ab' and tblqlts.mataisan in (Select mataisanqd32 from tbldanhsachqd32 where hinhthaitaisan Like 'Nhà%')" .
		($key[0] !=""?" and noidung = '".$key[0]."'":"").
		" and tblhaomon.TThaomon in (Select Min(TThaomon) as TThaomon from tblhaomon group by TTQLTS) order by TTQLTS DESC";
}else {
	$sql = "select tblqlts.TTQLTS,tblqlts.mataisan,tblqlts.tentaisan,tblqlts.tenchitiet,tblqlts.CAPH,tblqlts.SOTA," .
		"tblqlts.DTXD,tblqlts.TDTSXD,tblqlts.namsanxuat,tblqlts.noidung,tblqlts.ngaynhap,tblqlts.ngaysudung,tblqlts.ngansach,tblqlts.nguonkhac," .
		" tblqlts.TKVDAT,tblqlts.ttkhac" .
		",tblqlts.phantram,tblqlts.phantram32,tblhaomon.namhaomon,tblhaomon.sodu,tblhaomon.sotien,tblhaomon.phantram,tblqlts.sohaomon,tblqlts.conlai,tblhaomon.TThaomon" .
		" from tblqlts inner join tblhaomon on tblqlts.TTQLTS = tblhaomon.TTQLTS" .
		" where tblqlts.madonvi = '$ab' and tblqlts.mataisan in (Select mataisanqd32 from tbldanhsachqd32 where hinhthaitaisan Like 'Nhà%')" .
		" and tblhaomon.TThaomon in (Select Min(TThaomon) as TThaomon from tblhaomon group by TTQLTS) order by TTQLTS DESC";
}
$kq = mysqli_query($con,$sql);
$ngnh="";$ngsd="";   
$tatca = "";
$stt=0;
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){
			$stt++;
			$nguyengia = $row[12] + $row[13];
			//$soluong = $row[8] + $row[9];
			$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".$row[4].">".$row[5].">".$row[6].">".$row[7].">".$row[8].">".$row[9].">".doingay1($row[10]).">".doingay1($row[11]).">".$row[12].">".$row[13].">".$row[14].">".$row[15].">".$row[16].">".$row[17].">".$row[18].">".$row[19].">".$row[20].">".$row[21].">".$row[22].">".$row[23].">".$row[24];
			$xoa = $row[0].">".$ab;
            echo"<tr>";
                echo"<td>$stt</td>";                
                echo"<td>$row[3]</td>";
				$ngsd = doingay1($row[11]);
				echo"<td>$ngsd</td>";	
				echo"<td>".dinhdangso($row[7])."</td>";	
				echo"<td>".dinhdangso($nguyengia)."</td>";
				echo"<td>".dinhdangso($row['conlai'])."</td>";
				echo"<td>$row[noidung]</td>";	
				if(!ktthanhly($row[0]))
                echo"<td>
						<a title='Sửa' class='btn btn-blue ' href=\"NhapQLTSsua.php?id=$row[0]\">
							Sửa</a>				
						<a href=\"xoa.php?id=$xoa\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>
							</i>
							Xóa
						</a>
						<a data-id='$tatca' title='Tạo tài sản tương tự' class='btn btn-green ' href=\"NhapQLTScopy.php?id=$row[0]\">
							</i>Copy</a>	
						<a href=\"Nhapsuahaomon.php?id=$row[0]\" class=' btn btn-info'></i>
							Hao mòn</a>	
					</td>";
				else
					 echo"<td>
						<a data-id='$tatca' title='Tài sản đã bán, thanh lý hoặc điều chuyển' onclick='getFocuscs()' class='open-AddBookDialog btn btn-warning '>
							Sửa</a>				
						<a href=\"xoa.php?id=$xoa\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>
							</i>
							Xóa
						</a>
						<a data-id='$tatca' title='Tạo tài sản tương tự' class='btn btn-green ' href=\"NhapQLTScopy.php?id=$row[0]\">
							</i>Copy</a>		
						<a href=\"Nhapsuahaomon.php?id=$row[0]\" class=' btn btn-info'></i>
							Hao mòn</a>	
					</td>";
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
					<h4 class="modal-title" style="text-align:center;"><strong>Nhập thông tin tài sản là nhà</strong></h4>
				</div>
				<div class="modal-body">
						<form role="form" name="nhapmoi" onsubmit="return kt()" method="POST" action = "NhapQLTS.php" class="form-horizontal form-groups-bordered">						
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên tài sản:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai like 'Nhà%' and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
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
								<div class="col-sm-9">
									<input name="tenchitiet" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Cấp hạng:</label>
								<div class="col-sm-9">									
									<select name='CAPH' class='form-control'>									
									<option selected='selected' value='Cấp I'>Cấp I</option>
									<option selected='selected' value='Cấp II'>Cấp II</option>
									<option selected='selected' value='Cấp III'>Cấp III</option>
									<option selected='selected' value='Cấp IV'>Cấp IV</option>
									<option selected='selected' value=''>Chọn cấp hạng nhà</option>
									</select>
								</div>
								<label for="field-3" class="col-sm-3 control-label">Số tầng:</label>
								<div class="col-sm-3">
									<input name="SOTA" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-3" class="col-sm-3 control-label">Diện tích:</label>
								<div class="col-sm-3">
									<input name="DTXD" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-3" class="col-sm-3 control-label">Tổng DT sàn:</label>
								<div class="col-sm-3">
									<input name="TDTSXD" type="text" class="form-control" id="field-3">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Năm xây dựng:</label>
								<div class="col-sm-3">									
									<input data-mask="decimal"  name='namsanxuat' class='form-control' >	
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php								
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
									echo"<select name='noidung' class='form-control' id='noidung'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>			
								<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
								<div class="col-sm-3">
									<input data-inputmask="'alias': 'date'" name="ngaynhap" type="text" class="form-control" id="ngaynhap">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
								<div class="col-sm-3">
									<input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" class="form-control" id="ngaysudung">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
								<div class="col-sm-3">
									<input name="ngansach" type="text" class="form-control" data-mask="fdecimal" id="ngansach">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-3">
									<input name="nguonkhac" type="text" class="form-control" data-mask="fdecimal" id="nguonkhac">
								</div>		
								<label for="field-4" class="col-sm-3 control-label">Số hao mòn:</label>
								<div class="col-sm-3">
									<input name="sohaomon" type="text" class="form-control" data-mask="fdecimal" id="sohaomon">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguyên giá còn lại:</label>
								<div class="col-sm-3">
									<input name="conlai" type="text" class="form-control" data-mask="fdecimal" id="conlai">
								</div>						
								<label for="field-4" class="col-sm-3 control-label">Thuộc khuôn viên:</label>
								<?php								
								$sql="select TKVDAT from tblqlts Where (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
									echo"<select name='TKVDAT' class='form-control' id='TKVDAT'>";
									echo"<option selected='selected' value=''>Chọn khuôn viên</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>		
								<label for="field-4" class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-sm-9">
									<input name="ttkhac" type="text" class="form-control" id="field-3">
								</div>
							</div>
							<div id ="PTHM" class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Hao mòn TT45:</label>
								<div class="col-sm-3">
								<input name="phantramhaomon" type="text" class="form-control" id ="phantramhaomon">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Hao mòn QĐ32:</label>
								<div class="col-sm-3">
								<input name="phantram32" type="text" class="form-control" id ="phantram32">
								</div>
								<input name="namsudung" type="text" style="display:none" class="form-control" id ="namsudung">
							</div>
								<input name="namhm" type="text" style="display:none" class="form-control" id ="namhm">
								<input name="soduhm" type="text" style="display:none" class="form-control" id ="soduhm">
								<input name="sohmnam" type="text" style="display:none" class="form-control" id ="sohmnam">
								<input name="phantramhm" type="text" style="display:none" class="form-control" id ="phantramhm">
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="capnhatts" onclick ="getFocus()" class="btn btn-blue" value = "Cập nhật">
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
					<h4 class="modal-title" style="text-align:center;"> <strong>Chỉnh sửa thông tin tài sản là nhà</strong></h4>
				</div>				
				<div class="modal-body">				
					<form role="form" method="POST" action = "NhapQLTS.php" class="form-horizontal form-groups-bordered">
						<div id = "sTTKK" class="form-group">
							<label class="col-sm-3 control-label">Số ghi tài sản:</label>
							<div class="col-sm-9">
								<input name="bookId" type="text" class="form-control" id="bookId" value = "x">					
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tên tài sản:</label>
							<?php								
							$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai like 'Nhà%' and mataisanqd32 Like 'TS%'";
							$sql1=mysqli_query($con,$sql);
							echo"<div  class='col-sm-9' class='col-sm-5'>";
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
							<div class="col-sm-9">
								<input name="tenchitietcs" type="text" class="form-control" id="tenchitietcs">
							</div>
							<label for="field-4" class="col-sm-3 control-label">Cấp hạng:</label>
							<div class="col-sm-9">									
								<select name="CAPHcs" class='form-control' id="CAPHcs">									
								<option selected='selected' value='Cấp I'>Cấp I</option>
								<option selected='selected' value='Cấp II'>Cấp II</option>
								<option selected='selected' value='Cấp III'>Cấp III</option>
								<option selected='selected' value='Cấp IV'>Cấp IV</option>
								<option selected='selected' value=''>Chọn cấp hạng nhà</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Số tầng:</label>
							<div class="col-sm-3">
								<input name="SOTAcs" type="text" class="form-control" id="SOTAcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Diện tích:</label>
							<div class="col-sm-3">
								<input name="DTXDcs" type="text" class="form-control" id="DTXDcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tổng DT sàn:</label>
							<div class="col-sm-3">
								<input name="TDTSXDcs" type="text" class="form-control" id="TDTSXDcs">
							</div>
							<label for="field-4" class="col-sm-3 control-label">Năm xây dựng:</label>
							<div class="col-sm-3">									
								<input data-mask="decimal"  name='namsanxuatcs' class='form-control' id='namsanxuatcs' >	
							</div>
							<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
							<?php								
							$sql="select tenphongban from tblphongban where madonvi = '$ab'";
							$sql1=mysqli_query($con,$sql);
							echo"<div  class='col-sm-9' class='col-sm-5'>";
								echo"<select name='noidungcs' class='form-control' id='noidungcs'>";
								echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
									while ($data=mysqli_fetch_row($sql1))
							{
								echo "<option value='".$data[0]."'>".$data[0]."</option>";
							}
								echo"</select>";
							echo"</div>";
							?>			
							<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
							<div class="col-sm-3">
								<input data-inputmask="'alias': 'date'" name="ngaynhapcs" type="text" class="form-control" id="ngaynhapcs">
							</div>
							<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
							<div class="col-sm-3">
								<input data-inputmask="'alias': 'date'" name="ngaysudungcs" type="text" class="form-control" id="ngaysudungcs">
							</div>								
							<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
							<div class="col-sm-3">
								<input name="ngansachcs" type="text" class="form-control" data-mask="fdecimal" id="ngansachcs">
							</div>
							<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
							<div class="col-sm-3">
								<input name="nguonkhaccs" type="text" class="form-control" data-mask="fdecimal" id="nguonkhaccs">
							</div>	
							<label for="field-4" class="col-sm-3 control-label">Số hao mòn:</label>
							<div class="col-sm-3">
								<input name="sohaomoncs" type="text" class="form-control" data-mask="fdecimal" id="sohaomoncs">
							</div>
							<label for="field-4" class="col-sm-3 control-label">Nguyên giá còn lại:</label>
							<div class="col-sm-3">
								<input name="conlaics" type="text" class="form-control" data-mask="fdecimal" id="conlaics">
							</div>						
							<label for="field-4" class="col-sm-3 control-label">Thuộc khuôn viên:</label>
							<?php								
							$sql="select TKVDAT from tblqlts Where (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and madonvi = '$ab'";
							$sql1=mysqli_query($con,$sql);
							echo"<div  class='col-sm-9' class='col-sm-5'>";
								echo"<select name='TKVDATcs' class='form-control' id='TKVDATcs'>";
								echo"<option selected='selected' value=''>Chọn khuôn viên</option>";
							while ($data=mysqli_fetch_row($sql1))
							{
								echo "<option value='".$data[0]."'>".$data[0]."</option>";
							}
								echo"</select>";
							echo"</div>";
							?>		
							<label for="field-4" class="col-sm-3 control-label">Ghi chú:</label>
							<div class="col-sm-9">
								<input name="ttkhaccs" type="text" class="form-control" id="ttkhaccs">
							</div>
						</div>
						<div id ="PTHMcs" class="form-group">
							<label for="field-4" class="col-sm-3 control-label">Hao mòn TT45:</label>
							<div class="col-sm-3">
							<input name="phantramhaomoncs" type="text" class="form-control" id ="phantramhaomoncs">								
							</div>
							<label for="field-4" class="col-sm-3 control-label">Hao mòn QĐ32:</label>
							<div class="col-sm-3">
							<input name="phantram32cs" type="text" class="form-control" id ="phantram32cs">								
							</div>
							<input name="namsudungcs" type="text" style="display:none" class="form-control" id ="namsudungcs">								
						</div>					
							<input name="namhmcs" type="text" style="display:none" class="form-control" id ="namhmcs">
							<input name="soduhmcs" type="text" style="display:none" class="form-control" id ="soduhmcs">
							<input name="sohmnamcs" type="text" style="display:none" class="form-control" id ="sohmnamcs">
							<input name="phantramhmcs" type="text"  style="display:none" class="form-control" id ="phantramhmcs">
							<input name="TThaomon" type="text"  style="display:none" class="form-control" id ="TThaomon">
						<div class="modal-footer">
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chinhsuats" onclick ="getFocuscs()" class="btn btn-blue" value = "Cập nhật">
						</div>	
					</form>						
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="addBookDialog1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;"> <strong>Nhập số bản ghi muốn tạo tương tự</strong></h4>
				</div>				
				<div class="modal-body">				
						<form role="form" method="POST" action = "NhapQLTS.php" class="form-horizontal form-groups-bordered">
							<div class="form-group">
								<label class="col-sm-3 control-label">Số bản ghi copy:</label>
								<div class="col-sm-9">
									<input name="socopy" type="text" class="form-control">									
								</div>
							</div>
								<button type="button" id="button" class="btn btn-blue">Copy nâng cao</button>	
							<div class="form-group" id="ttct" style="display:none">
							<div id = "sTTKK" class="form-group">
								<label class="col-sm-3 control-label">Số ghi tài sản:</label>
								<div class="col-sm-9">
										<input name="bookIdc" type="text" class="form-control" id="bookIdc" value = "x">									
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên tài sản:</label>
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where chitiethinhthai like 'Nhà%' and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
									echo"<select name='mataisanc' class='form-control' id='mataisanc'>";
									echo"<option selected='selected' value=''>Chọn tên tài sản</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[1]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>
								<label for="field-3" class="col-sm-3 control-label">Tên chi tiết:</label>
								<div class="col-sm-9">
									<input name="tenchitietc" type="text" class="form-control" id="tenchitietc">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Cấp hạng:</label>
								<div class="col-sm-9">									
									<select name="CAPHc" class='form-control' id="CAPHc">									
									<option selected='selected' value='Cấp I'>Cấp I</option>
									<option selected='selected' value='Cấp II'>Cấp II</option>
									<option selected='selected' value='Cấp III'>Cấp III</option>
									<option selected='selected' value='Cấp IV'>Cấp IV</option>
									<option selected='selected' value=''>Chọn cấp hạng nhà</option>
									</select>
								</div>
								<label for="field-3" class="col-sm-3 control-label">Số tầng:</label>
								<div class="col-sm-3">
									<input name="SOTAc" type="text" class="form-control" id="SOTAc">
								</div>
								<label for="field-3" class="col-sm-3 control-label">Diện tích:</label>
								<div class="col-sm-3">
									<input name="DTXDc" type="text" class="form-control" id="DTXDc">
								</div>
								<label for="field-3" class="col-sm-3 control-label">Tổng DT sàn:</label>
								<div class="col-sm-3">
									<input name="TDTSXDc" type="text" class="form-control" id="TDTSXDc">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Năm xây dựng:</label>
								<div class="col-sm-3">									
									<input data-mask="decimal"  name='namsanxuatc' class='form-control' id='namsanxuatc'>	
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nơi sử dụng:</label>
								<?php								
								$sql="select tenphongban from tblphongban where madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
									echo"<select name='noidungc' class='form-control' id='noidungc'>";
									echo"<option selected='selected' value=''>Chọn nơi sử dụng</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>			
								<label for="field-4" class="col-sm-3 control-label">Ngày nhập:</label>
								<div class="col-sm-3">
									<input data-inputmask="'alias': 'date'" name="ngaynhapc" type="text" class="form-control" id="ngaynhapc">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Ngày sử dụng:</label>
								<div class="col-sm-3">
									<input data-inputmask="'alias': 'date'" name="ngaysudungc" type="text" class="form-control" id="ngaysudungc">
								</div>								
								<label for="field-4" class="col-sm-3 control-label">Ngân sách:</label>
								<div class="col-sm-3">
									<input name="ngansachc" type="text" class="form-control" data-mask="fdecimal" id="ngansachc">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguồn khác:</label>
								<div class="col-sm-3">
									<input name="nguonkhacc" type="text" class="form-control" data-mask="fdecimal" id="nguonkhacc">
								</div>	
								<label for="field-4" class="col-sm-3 control-label">Số hao mòn:</label>
								<div class="col-sm-3">
									<input name="sohaomonc" type="text" class="form-control" data-mask="fdecimal" id="sohaomonc">
								</div>
								<label for="field-4" class="col-sm-3 control-label">Nguyên giá còn lại:</label>
								<div class="col-sm-3">
									<input name="conlaic" type="text" class="form-control" data-mask="fdecimal" id="conlaic">
								</div>						
								<label for="field-4" class="col-sm-3 control-label">Thuộc khuôn viên:</label>
								<?php								
								$sql="select TKVDAT from tblqlts Where (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and madonvi = '$ab'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-9' class='col-sm-5'>";
									echo"<select name='TKVDATc' class='form-control' id='TKVDATc'>";
									echo"<option selected='selected' value=''>Chọn khuôn viên</option>";
										while ($data=mysqli_fetch_row($sql1))
								{
									echo "<option value='".$data[0]."'>".$data[0]."</option>";
								}
									echo"</select>";
								echo"</div>";
								?>		
								<label for="field-4" class="col-sm-3 control-label">Ghi chú:</label>
								<div class="col-sm-9">
									<input name="ttkhacc" type="text" class="form-control" id="ttkhacc">
								</div>
							</div>							
							<div id ="PTHMc" class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Hao mòn TT45:</label>
								<div class="col-sm-3">
								<input name="phantramhaomonc" type="text" class="form-control" id ="phantramhaomonc">								
								</div>
								<label for="field-4" class="col-sm-3 control-label">Hao mòn QĐ32:</label>
								<div class="col-sm-3">
								<input name="phantram32c" type="text" class="form-control" id ="phantram32c">								
								</div>
								<input name="namsudungc" type="text" style="display:none" class="form-control" id ="namsudungc">								
							</div>								
								<input name="namhmc" type="text" style="display:none" class="form-control" id ="namhmc">
								<input name="soduhmc" type="text" style="display:none" class="form-control" id ="soduhmc">
								<input name="sohmnamc" type="text" style="display:none" class="form-control" id ="sohmnamc">
								<input name="phantramhmc" type="text"  style="display:none" class="form-control" id ="phantramhmc">
						</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
								<input type="submit" name="copy" onclick ="getFocusc()" class="btn btn-blue" value = "Cập nhật">
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