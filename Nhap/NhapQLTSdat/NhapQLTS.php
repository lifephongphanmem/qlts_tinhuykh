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
						<li class="active">
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
		</a>>>
		<a class="tieude">
			Tài sản cố định là đất
		</a>
		</div>
		<h3>Quản lý tài sản cố định là đất</h3>
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
		$noidungcs = $_POST['noidungcs'];
		if($_POST['DTKVcs'])
			$DTKVcs = kieudouble($_POST['DTKVcs']);
		else
			$DTKVcs = 0;			
		if($_POST['ngansachcs'])
			$ngansachcs = kieudouble($_POST['ngansachcs']);
		else
			$ngansachcs = 0;
		if($_POST['nguonkhaccs'])
			$nguonkhaccs = kieudouble($_POST['nguonkhaccs']);
		else
			$nguonkhaccs = 0;	
		$TKVDATcs = $_POST['TKVDATcs'];		
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung From tbldanhsachqd32 Where mataisanqd32 = '".$mataisancs."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisancs=$row[0];
			$chitiethinhthaics=$row[1];
			$ttsxcs = $row[2];
			$pthmcs=$row[3];$sonamsdcs=$row[4];
		}
		$sql="Update tblqlts set mataisan='$mataisancs',tentaisan='$tentaisancs',tenchitiet='$tenchitietcs',ngaynhap='$ngaynhapcs',ngaysudung='$ngaysudungcs',noidung='$noidungcs',ngansach=$ngansachcs,nguonkhac=$nguonkhaccs,";
		$sql = $sql ."DTKV=$DTKVcs,TKVDAT='$TKVDATcs'";
		$sql = $sql ." Where TTQLTS = ".$TTQLTScs;	
		$kq=mysqli_query($con,$sql);				
	}	        	
?>
<?php 	
	//
	$ab = $ma[0];
	if (isset($_POST['capnhatts']))
	{		
		$mataisan=$_POST["mataisan"];		
		$tenchitiet=$_POST["tenchitiet"];
		$tentaisan="";	$chitiethinhthai="";$ttsx=0;$pthm=0;$sonamsd=0;
		$ngaynhap = doingay($_POST['ngaynhap']);
		$ngaysudung = doingay($_POST['ngaysudung']);		
		if($_POST['DTKV'])
			$DTKV = kieudouble($_POST['DTKV']);
		else
			$DTKV = 0;			
		if($_POST['ngansach'])
			$ngansach = kieudouble($_POST['ngansach']);
		else
			$ngansach = 0;
		if($_POST['nguonkhac'])
			$nguonkhac = kieudouble($_POST['nguonkhac']);
		else
			$nguonkhac = 0;	
		$TKVDAT = $_POST['TKVDAT'];
		$noidung = $_POST['noidung'];
		$sqlts = "Select tentaiqd32,chitiethinhthai,ttsx,phantramhaomon,namsudung From tbldanhsachqd32 Where mataisanqd32 = '".$mataisan."'";
		$kqts = mysqli_query($con,$sqlts);
		while($row=mysqli_fetch_array($kqts)){
			$tentaisan=$row[0];
			$chitiethinhthai=$row[1];
			$ttsx = $row[2];
			$pthm=$row[3];$sonamsd=$row[4];
		}
		$sql="INSERT INTO tblqlts(mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,noidung,ngansach,nguonkhac,DTKV,TKVDAT,chitiethinhthai,XOA,DVT,phantram,sonamsd,sothutu,madonvi,xem)";
		$sql = $sql ." Values('$mataisan','$tentaisan','$tenchitiet','$ngaynhap','$ngaysudung','$noidung',$ngansach,$nguonkhac,$DTKV,'$TKVDAT','$chitiethinhthai','K','m2',$pthm,$sonamsd,$ttsx,'$ab','Chưa xem')";	
		$kq=mysqli_query($con,$sql);				
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
function doingay1($ngay)
{
	$kq = substr($ngay,8,2) ."/". substr($ngay,5,2) . "/". substr($ngay,0,4);		
	return $kq;
}
//
if(isset($_GET['id'])) {
	$tttc = $_GET['id'];
	$key = explode(">", $tttc);
	$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung".
		" from tblqlts where madonvi = '$ab'".
		($key[0] !=""?" and noidung = '".$key[0]."'":"").
		" and (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%')".
		" order by TTQLTS DESC";
}else {

	$sql = "select TTQLTS,mataisan,tentaisan,tenchitiet,ngaynhap,ngaysudung,DTKV,ngansach,nguonkhac,TKVDAT,noidung from tblqlts where madonvi = '$ab' and (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') order by TTQLTS DESC";
}
$kq = mysqli_query($con,$sql);
$ngnh="";$ngsd="";   
$tatca = "";
$stt=0;
$xoa="";
if(mysqli_num_rows($kq)>0){
	while($row=mysqli_fetch_array($kq)){	
			$stt++;
			$tatca = $row[0].">".$row[1].">".$row[2].">".$row[3].">".doingay1($row[4]).">".doingay1($row[5]).">".$row[6].">".$row[7].">".$row[8].">".$row[9].">".$row[10];
			$xoa = $row[0].">".$ab;	
            echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
				$ngsd = doingay1($row[5]);
				echo"<td>$ngsd</td>";	
				echo"<td>".dinhdangso($row[6])."</td>";						
                echo"<td>
						<a title='Sửa' class='btn btn-blue ' href=\"NhapQLTSsua.php?id=$row[0]\">
							Sửa</a>				
						<a href=\"xoa.php?id=$xoa\" onclick=\"return confirm('Bạn muốn xóa tài sản này?')\" class='btn btn-red '>
							</i>
							Xóa
						</a>						
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
						<form role="form" name="nhapmoi" onsubmit="return kt()" action = "NhapQLTS.php" method="POST" class="form-horizontal form-groups-bordered">				
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
							<div id = "sTTKK" class="form-group" style="display:none">
								<label class="col-sm-3 control-label">Số ghi tài sản:</label>
								<div class="col-sm-8">
										<input name="bookId" type="text" class="form-control" id="bookId" value = "x">									
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tên tài sản:</label>
								<div class="col-sm-8">
									<input type="text" readonly class="form-control" id="tentaisancs" >
								</div>								
								<?php								
								$sql="select mataisanqd32,tentaiqd32 from tbldanhsachqd32 Where (chitiethinhthai like 'Đất%' or chitiethinhthai like 'Quyền sử dụng đất%') and mataisanqd32 Like 'TS%'";
								$sql1=mysqli_query($con,$sql);
								echo"<div  class='col-sm-8' style='display:none'>";
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
