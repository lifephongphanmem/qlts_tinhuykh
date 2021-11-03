<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php"); 
		include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
?>
<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li <?php if (strlen($ma[0]) < 16)
					{
						echo "style='display:none';";
					}
				?> class="auto-inherit-active-class">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title"><strong>Quản lý dữ liệu</strong></span>
					</a>
					<ul>
						<li>
							<a  href="Nhap/NhapTCTS/NhapDNTC.php">
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
								<!--<i class="entypo-flag"></i>-->
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
							<a  href="/Thoaikx/ThoaiSoCTTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Sổ chi tiết tài sản cố định (SCT_TSCD1)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiSoTSCD_NSD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Sổ tài sản cố định (S24-H-NSD)</span>
							</a>
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiSoTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Sổ tài sản cố định (S31-H)</span>
							</a>
						</li>
						<li>			
							<a  href="/Thoaikx/ThoaiBcTHTGTSCDdv.php">	
								<i class="entypo-book-open"></i>															
								<span class='title'>Báo cáo tăng giảm tài sản cố định (08b-ĐK/TSC)</span>
							</a>						
						</li>
						<li>
							<a  href="/Thoaikx/ThoaiBcTHTGTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo tăng giảm tài sản cố định (B04_H1)</span>
							</a>
						</li>
						<li>

							<a  href="/Thoaikx/ThoaiBcCTGTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo chi tiết giảm tài sản cố định (BCGIAMTS)</span>
							</a>

						</li>
						<li >

							<a  href="/Thoaikx/ThoaiBcCTTTSCD.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Báo cáo chi tiết tăng tài sản cố định (BCTANGTS)</span>
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
						<!--li>
							<a  href="/Thoaikx/ThoaiBaTHNCMSTT.php">
								<i class="entypo-book-open"></i>
								<span class='title'>Bảng tổng hợp nhu cầu mua sắm tập trung</span>
							</a>
						</li-->
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
						<li <?php if (strlen($ma[0]) >= 16)
						{
							echo "style='display:none';";
						}?>>
							<a  href="/DanhMuc/DMTS/DMTS.php">
								<i class="entypo-sweden"></i>								
								<span class='title'>Danh mục tài sản</span>
							</a>
						</li>
						<li <?php if (strlen($ma[0]) >= 16)
						{
							echo "style='display:none';";
						}?>>
							<a  href="/DanhMuc/DMCC/DMCC.php">	
								<i class="entypo-sweden"></i>								
								<span class='title'>Danh mục công cụ</span>
							</a>							
						</li>
						<li <?php if (strlen($ma[0]) < 16)
						{
							echo "style='display:none';";
						}?>>
							<a  href="/DanhMuc/DMPB/DMPB.php">	
								<i class="entypo-sweden"></i>								
								<span class='title'>Danh mục phòng ban (bộ phận)</span>
							</a>								
						</li>
						<li <?php if (strlen($ma[0]) < 16)
						{
							echo "style='display:none';";
						}?>>
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
						<li>
							<a  href="/Tienich/TinhlaiHMnam.php">	<i class="entypo-install"></i>
								<span class='title'>Tính lại hao mòn năm tài sản</span>
							</a>
						</li>
						<li>
                            <a  href="/Tienich/importExcel.php">	<i class="entypo-install"></i>
                                <span class='title'>Nhận tài sản từ file excel</span>
                            </a>
                        </li>
                        <li <?php if ($ma[0] != "msdv")
                        {
                            echo "style='display:none';";
                        }
                        ?>>
                            <a  href="/Tienich/goptaikhoan.php">	<i class="entypo-install"></i>
                                <span class='title'>Inport Excel</span>
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
						<li <?php if ($ma[0] != "msdv")
					{
						echo "style='display:none';";
					}
				?>>
							<a  href="/DanhMuc/DMDV/NhapTK.php?id=>"><i class="entypo-users"></i>							
								<span class='title'>Nhập tài khoản</span>
							</a>		
						</li>
						<li >
							<a  href="/DanhMuc/DMDV/DMDV.php"><i class="entypo-users"></i>							
								<span class='title'> <?php if (strlen($ma[0]) < 16) echo "Danh sách tài khoản"; else echo "Thông tin tài khoản";?></span>
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
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); 												
						$nha=0; 		$vkt=0;			$tnha=0;
						$dat = 0;		$xe=0;			$ptvtk=0;
						$tptvt=0;		$khac = 0;		$khac5 =0;
						$thongbaoso="";	$thongbaophong="";
						$ccdc=0;		$trangcap=0;	$xuly=0;	
						$kiemke=0;		$datmoi=0;		$nhamoi=0;
						$xemoi=0;		$khacmoi=0;		$ccdcmoi=0;
						$trangcapmoi=0;	$xulymoi=0;		$kiemkemoi=0;
						$vktmoi=0;		$ptvtkmoi=0;	$khac5moi=0;
						if(strlen($ma[0])<5)
						{
							//$sql = "Select * From tblqlts where madonvi like '$ma[0]%'";
							$sql = "Select tblqlts.*,tbldanhsachqd32.hinhthaitaisan From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 where tblqlts.madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{
								if($row['hinhthaitaisan'] == "Nhà, công trình xây dựng" || $row['hinhthaitaisan'] == "Nhà")
								{
									$nha ++;
									$tnha ++;
									if($row['xemt'] == "Chưa xem")
										$nhamoi ++;
								}							
								if($row['hinhthaitaisan'] == "Vật kiến trúc")
								{
									$vkt ++;
									$tnha ++;
									if($row['xemt'] == "Chưa xem")
										$vktmoi ++;
								}							
								if($row['hinhthaitaisan'] == "Quyền sử dụng đất" || $row['hinhthaitaisan'] == "Đất")
								{
									$dat ++;
									if($row['xemt'] == "Chưa xem")
										$datmoi ++;
								}							
								if($row['hinhthaitaisan'] == "Xe ô tô" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường bộ")
								{
									$xe ++;							
									$tptvt ++;
									if($row['xemt'] == "Chưa xem")
										$xemoi ++;
								}							
								if($row['hinhthaitaisan'] == "Phương tiện vận tải khác (ngoài xe ô tô)" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường sắt" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường thủy" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường không")
								{
									$ptvtk ++;							
									$tptvt ++;
									if($row['xemt'] == "Chưa xem")
										$ptvtkmoi ++;
								}							
							}
							$sql = "Select * From tblqlts where madonvi like '$ma[0]%' and ngansach + nguonkhac >= 500000000";							
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{							
								if($row['hinhthaitaisan'] != "Phương tiện vận tải khác (ngoài xe ô tô)" && $row['hinhthaitaisan'] != "Nhà, công trình xây dựng" && $row['hinhthaitaisan'] != "Xe ô tô" && $row['hinhthaitaisan'] != "Quyền sử dụng đất" && $row['hinhthaitaisan'] != "Đất" && $row['hinhthaitaisan'] != "Vật kiến trúc" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường bộ" && $row['hinhthaitaisan'] != "Nhà" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường sắt" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường thủy" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường không")
								{
									$khac5 ++;
									if($row['xemt'] == "Chưa xem")
										$khac5moi ++;
								}
							}
							$sql = "Select * From tblqlts where madonvi like '$ma[0]%' and ngansach + nguonkhac < 500000000";							
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{
								if($row['hinhthaitaisan'] != "Phương tiện vận tải khác (ngoài xe ô tô)" && $row['hinhthaitaisan'] != "Nhà, công trình xây dựng" && $row['hinhthaitaisan'] != "Xe ô tô" && $row['hinhthaitaisan'] != "Quyền sử dụng đất" && $row['hinhthaitaisan'] != "Đất" && $row['hinhthaitaisan'] != "Vật kiến trúc" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường bộ" && $row['hinhthaitaisan'] != "Nhà" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường sắt" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường thủy" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường không")
								{
									$khac ++;
									if($row['xemt'] == "Chưa xem")
										$khacmoi ++;
								}
							}
							$sql = "Select TTQLcc,xemt from tblqlcc where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$ccdc++;
								if($row['xemt'] == "Chưa xem")							
									$ccdcmoi ++;								
							}
							$sql = "Select TTcap,xemt from tbltrangcap where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$trangcap++;
								if($row['xemt'] == "Chưa xem")							
									$trangcapmoi ++;									
							}
							$sql = "Select TTdenghi,xemt from tbldenghi where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$xuly++;
								if($row['xemt'] == "Chưa xem")							
									$xulymoi ++;								
							}
							$sql = "Select TTkiemke,xemt from tblkiemke where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$kiemke++;
								if($row['xemt'] == "Chưa xem")							
									$kiemkemoi ++;									
							}
						}
						else
						{
							$sql = "Select tblqlts.*,tbldanhsachqd32.hinhthaitaisan From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 where tblqlts.madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{
								if($row['hinhthaitaisan'] == "Nhà, công trình xây dựng" || $row['hinhthaitaisan'] == "Nhà")
								{
									$nha ++;
									$tnha ++;
									if($row['xemh'] == "Chưa xem")
										$nhamoi ++;
								}							
								if($row['hinhthaitaisan'] == "Vật kiến trúc")
								{
									$vkt ++;
									$tnha ++;
									if($row['xemh'] == "Chưa xem")
										$vktmoi ++;
								}							
								if($row['hinhthaitaisan'] == "Quyền sử dụng đất" || $row['hinhthaitaisan'] == "Đất")
								{
									$dat ++;
									if($row['xemh'] == "Chưa xem")
										$datmoi ++;
								}							
								if($row['hinhthaitaisan'] == "Xe ô tô" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường bộ")
								{
									$xe ++;							
									$tptvt ++;
									if($row['xemh'] == "Chưa xem")
										$xemoi ++;
								}
								if($row['hinhthaitaisan'] == "Phương tiện vận tải khác (ngoài xe ô tô)" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường sắt" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường thủy" || $row['hinhthaitaisan'] == "Phương tiện vận tải đường không")
								{
									$ptvtk ++;							
									$tptvt ++;
									if($row['xemh'] == "Chưa xem")
										$ptvtkmoi ++;
								}							
							}
							$sql = "Select tblqlts.*,tbldanhsachqd32.hinhthaitaisan From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 where tblqlts.madonvi like '$ma[0]%' and ngansach + nguonkhac >= 500000000";
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{
								if($row['hinhthaitaisan'] != "Phương tiện vận tải khác (ngoài xe ô tô)" && $row['hinhthaitaisan'] != "Nhà, công trình xây dựng" && $row['hinhthaitaisan'] != "Xe ô tô" && $row['hinhthaitaisan'] != "Quyền sử dụng đất" && $row['hinhthaitaisan'] != "Đất" && $row['hinhthaitaisan'] != "Vật kiến trúc" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường bộ" && $row['hinhthaitaisan'] != "Nhà" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường sắt" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường thủy" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường không")
								{
									$khac5 ++;
									if($row['xemh'] == "Chưa xem")
										$khac5moi ++;
								}
							}
							$sql = "Select tblqlts.*,tbldanhsachqd32.hinhthaitaisan From tblqlts inner join tbldanhsachqd32 on tblqlts.mataisan = tbldanhsachqd32.mataisanqd32 where tblqlts.madonvi like '$ma[0]%' and ngansach + nguonkhac < 500000000";
							$qrsql = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($qrsql))
							{
								if($row['hinhthaitaisan'] != "Phương tiện vận tải khác (ngoài xe ô tô)" && $row['hinhthaitaisan'] != "Nhà, công trình xây dựng" && $row['hinhthaitaisan'] != "Xe ô tô" && $row['hinhthaitaisan'] != "Quyền sử dụng đất" && $row['hinhthaitaisan'] != "Đất" && $row['hinhthaitaisan'] != "Vật kiến trúc" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường bộ" && $row['hinhthaitaisan'] != "Nhà" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường sắt" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường thủy" && $row['hinhthaitaisan'] != "Phương tiện vận tải đường không")
								{
									$khac ++;
									if($row['xemh'] == "Chưa xem")
										$khacmoi ++;
								}
							}
							$sql = "Select TTQLcc,xemh from tblqlcc where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$ccdc++;
								if($row['xemh'] == "Chưa xem")							
									$ccdcmoi ++;								
							}
							$sql = "Select TTcap,xemh from tbltrangcap where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$trangcap++;
								if($row['xemh'] == "Chưa xem")							
									$trangcapmoi ++;									
							}
							$sql = "Select TTdenghi,xemh from tbldenghi where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$xuly++;
								if($row['xemh'] == "Chưa xem")							
									$xulymoi ++;								
							}
							$sql = "Select TTkiemke,xemh from tblkiemke where madonvi like '$ma[0]%'";
							$qrsql = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($qrsql))
							{
								$kiemke++;
								if($row['xemh'] == "Chưa xem")							
									$kiemkemoi ++;									
							}
						}
						
						if(strlen($ma[0])> 6)
						{
						$sql = "Select thongbaophong from thongtindonvi where madonvi = '".substr($ma[0],0,8)."' and length(madonvi) > 4";						
						$qrsql = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($qrsql))
						{
							if($row['thongbaophong'] != "")
								$thongbaophong = " Phòng Tài chính: ". $row['thongbaophong'];
						}
						}
						if(strlen($ma[0])<16)
						{
						$sql = "Select thongbaoso from thongtindonvi where madonvi = '".substr($ma[0],0,4)."' and length(madonvi) < 16";						
						$qrsql = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($qrsql))
						{
							if($row['thongbaoso'] != "")
								$thongbaoso = "Sở Tài chính: ". $row['thongbaoso']. ($thongbaophong != ""?" -- ":"");
						}
						}
					?>
					<MARQUEE > <font color="#FF0000" size="2"> <?php echo $thongbaoso; echo $thongbaophong; ?></font> </MARQUEE>													
					</br></br></br>
<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-4">				
				<div class="list-group" >					 
					<li  class="list-group-item active">Đất<?php if ($datmoi > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $datmoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $dat;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLTSdat/NhapQLTS.php'";
					else
						echo "href='Nhap/DanhSach/NhapQLTSdat.php?id=0'";
					?> > Quyền sử dụng đất</a><?php if ($datmoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTSdat.php?id=>Chưa xem"><?php echo $datmoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTSdat.php?id=0"><?php echo $dat;?></a></span></li>
				</div>
            </div>
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Nhà và vật kiến trúc<?php if (($nhamoi + $vktmoi) > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $nhamoi + $vktmoi;}?></span></span><span
							class="badge badge-info pull-right"><b><?php echo $tnha;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLTSnha/NhapQLTS.php'";
					else
						echo "href='Nhap/DanhSach/NhapQLTSnha.php?id=0'";
					?> > Nhà</a><?php if ($nhamoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTSnha.php?id=>>>>>Chưa xem"><?php echo $nhamoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTSnha.php?id=0"><?php echo $nha;?></a></span></li>					
					<li class="list-group-item"> <a 
					<?php if (strlen($ma[0]) >= 16)						
							echo "href='Nhap/NhapQLTSvkt/NhapQLTS.php'";
						else
							echo "href='Nhap/DanhSach/NhapQLTSvkt.php?id=0'";
					?> >Vật kiến trúc khác</a><?php if ($vktmoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTSvkt.php?id=>>>>Chưa xem"><?php echo $vktmoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTSvkt.php?id=0"><?php echo $vkt;?></a></span></li>						
				</div>
            </div>
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Phương tiện vận tải<?php if (($xemoi + $ptvtkmoi) > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $xemoi + $ptvtkmoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $tptvt;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLTSxe/NhapQLTS.php'";
					else
						echo "href='Nhap/DanhSach/NhapQLTSxe.php?id=0'";
					?> > Xe ô tô</a><?php if ($xemoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTSxe.php?id=>>>>>Chưa xem"><?php echo $xemoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTSxe.php?id=0"><?php echo $xe;?></a></span></li>
							
					
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLTSxe/NhapQLTS.php'";
					else
						echo "href='Nhap/DanhSach/NhapQLTSvtk.php?id=0'";
					?>> Phương tiện vận tải khác</a><?php if ($ptvtkmoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTSvtk.php?id=>>>>>Chưa xem"><?php echo $ptvtkmoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTSvtk.php?id=0"><?php echo $ptvtk;?></a></span></li>							
				</div>
            </div>
			<div style="height:150px">
			</div>			
		</div>			
		<div class="col-lg-12">	
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Máy móc thiết bị, TSCĐ khác<?php if (($khac5moi+$khacmoi) > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $khac5moi + $khacmoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $khac5+$khac;?></b></span></li>
					<li class="list-group-item"> 
					<a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLTS500/NhapQLTS.php'";
					else
						echo "href='Nhap/DanhSach/NhapQLTS500.php?id=0'";
					?>>Tài sản trên 500 triệu </a><?php if ($khac5moi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTS500.php?id=>>>>Chưa xem"><?php echo $khac5moi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTS500.php?id=0"><?php echo $khac5;?></a></span></li>						
					<li class="list-group-item"> <a 
					<?php if (strlen($ma[0]) >= 16)						
							echo "href='Nhap/NhapQLTS/NhapQLTS.php'";
						else
							echo "href='Nhap/DanhSach/NhapQLTS.php?id=0'";
					?>> Tài sản dưới 500 triệu</a><?php if ($khacmoi > 0) {?><span
							<?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a class="badge badge-info1 pull-right" href="Nhap/DanhSach/NhapQLTS.php?id=>>>>Chưa xem"><?php echo $khacmoi;}?></a></span><span>
							<a class="badge badge-info pull-right" href="Nhap/DanhSach/NhapQLTS.php?id=0"><?php echo $khac;?></a></span></li>					
				</div>
            </div>
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Công cụ dụng cụ<?php if($ccdcmoi >0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $ccdcmoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $ccdc;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapQLCC/NhapQLCC.php'";					
					else
						echo "href='Nhap/DanhSach/NhapQLCC.php?id=0'";
					?>> Công cụ dụng cụ<span
							class="badge badge-info pull-right"><?php echo $ccdc;?></span></a></li>		
					<li class="list-group-item" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a <?php 
						echo "href='Nhap/DanhSach/NhapQLCC.php?id=>Chưa xem'";
					?>> CCDC nhập mới<span
							class="badge badge-info1 pull-right" ><?php echo $ccdcmoi;?></span></a></li>						
				</div>
            </div>
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Đề nghị trang cấp <?php if($trangcapmoi > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $trangcapmoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $trangcap;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapTCTS/NhapDNTC.php'";					
					else
						echo "href='Nhap/DanhSach/NhapDNTC.php?id=0'";
					?>> Đề nghị trang cấp<span
							class="badge badge-info pull-right"><?php echo $trangcap;?></span></a></li>		
					<li class="list-group-item" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a <?php echo "href='Nhap/DanhSach/NhapDNTC.php?id=>Chưa xem'";
					?>> Trang cấp nhập mới<span
							class="badge badge-info1 pull-right"><?php echo $trangcapmoi;?></span></a></li>		
				</div>
            </div>			
			<div style="height:150px">
			</div>
			</div>
			<div class="col-lg-12">	
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Đề nghị xử lý tài sản <?php if($xulymoi > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $xulymoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $xuly;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapDNXL/NhapDNXL.php'";					
					else
						echo "href='Nhap/DanhSach/NhapDNXL.php?id=0'";
					?>> Đề nghị xử lý tài sản<span
							class="badge badge-info pull-right"><?php echo $xuly;?></span></a></li>		
					<li class="list-group-item" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a <?php echo "href='Nhap/DanhSach/NhapDNXL.php?id=>Chưa xem'";
					?>> Đề nghị xử lý nhập mới<span
							class="badge badge-info1 pull-right"><?php echo $xulymoi;?></span></a></li>
				</div>
            </div>
			<div  class="col-lg-4" <?php if (strlen($ma[0]) < 16)
				{
					echo "style='display:none';";
				}?>>
				<div class="list-group" >					
					<li  class="list-group-item active">Kiểm kê tài sản<?php if($kiemkemoi > 0) {?><span
							class="badge badge-info1 pull-right" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><?php echo $kiemkemoi;}?></span><span
							class="badge badge-info pull-right"><b><?php echo $kiemke;?></b></span></li>
					<li class="list-group-item"><a <?php if (strlen($ma[0]) >= 16)					
						echo "href='Nhap/NhapKKTS/NhapKKTS.php'";						
					else					
						echo "href='Nhap/DanhSach/NhapKKTS.php?id=0'";						
					?>> Kiểm kê tài sản<span
							class="badge badge-info pull-right"><?php echo $kiemke;?></span></a></li>		
					<li class="list-group-item" <?php if (strlen($ma[0]) >= 16) echo "style='display:none'"; ?>><a <?php echo "href='Nhap/DanhSach/NhapKKTS.php?id=>Chưa xem'";						
					?>> Kiểm kê nhập mới<span
							class="badge badge-info1 pull-right"><?php echo $kiemkemoi;?></span></a></li>		
				</div>
            </div>
			<div class="col-lg-4">				
				<div class="list-group" >					
					<li  class="list-group-item active">Tìm kiếm</li>
					<li class="list-group-item"><a <?php echo "href='/Tracuu/TraCuuTS/tracuuts.php?id=$ma[0]'";											
					?>> Tìm kiếm tài sản</a></li>
					<li class="list-group-item"><a <?php echo "href='/Tracuu/TraCuuCC/tracuucc.php?id=$ma[0]'";	
					?>> Tìm kiếm công cụ</a></li>
				</div>
            </div>
		</div>	
		<!--				
			<a  href="Tracuu/TraCuuTS/tracuuts.php">
			<div class="col-sm-3">
				<div class="tile-title tile-primary">
					<div class="icon">
						<i class="glyphicon glyphicon-search"></i>
					</div>
					<div class="title">
						<h3>Tìm kiếm thông tin tài </br>sản</h3>
						</br>
					</div>
				</div>
			</div>
			</a>
			<a  href="Tracuu/TraCuuCC/tracuucc.php">
			<div class="col-sm-3">
			
				<div class="tile-title tile-red">
					
					<div class="icon">
						<i class="glyphicon glyphicon-search"></i>
					</div>
					
					<div class="title">
						<h3>Tìm kiếm thông tin công cụ</h3>
						</br>
					</div>
				</div>				
			</div>
			</a>
			<a  href="Tracuu/TraCuuTC/tracuutc.php">
			<div class="col-sm-3">
			
				<div class="tile-title tile-blue">
					
					<div class="icon">
						<i class="glyphicon glyphicon-search"></i>
					</div>
					
					<div class="title">
						<h3>Tìm kiếm thông tin trang cấp</h3>
						</br>
					</div>
				</div>
				
			</div>
			</a>
			<a  href="Tracuu/TraCuuDN/tracuudn.php">
			<div class="col-sm-3">
			
				<div class="tile-title tile-aqua">
					
					<div class="icon">
						<i class="glyphicon glyphicon-search"></i>
					</div>
					
					<div class="title">
						<h3>Tìm kiếm thông tin đề nghị xử lý</h3>
						</br>
					</div>
				</div>
				
			</div>
			</a>
			-->
		</div>		
	</div>
</div>
<!--3b5998 Địa chỉ: Số 8/75, ngõ 281, đường Trương Định, Phường Tương Mai, Quận Hoàng Mai, Hà Nội &#8226;
				Điện thoại: (84-4) 6297 0122 &#8226;        Fax: (84-4) 6297 0122      303641-->
			<center style="font-size:11px; color:#CCCCCC; background:#3b5998;">

                <strong>Bản quyền ® Công ty TNHH Phát triển phần mềm Cuộc Sống</strong><br />
                Địa chỉ: Thôn Lưu Phái, xã Ngũ Hiệp, huyện Thanh Trì, TP Hà Nội &#8226;
                Điện thoại: (84-4) 6297 0122 &#8226;        Fax: (84-4) 6297 0122
            </center>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
