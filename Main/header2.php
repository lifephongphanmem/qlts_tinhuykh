</div>

	</div>
	<div class="main-content" >
				
		<div class="rowh" 303641  style="background:#3b5998;">
		
			<!-- Profile Info and Notifications  #3b5998 -->
			<div class="col-md-5 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" style="font-size:14px; color:#FFFFFF;" class="dropdown-toggle" data-toggle="dropdown">
						
						<?php echo "Cơ quan cấp trên: $ma[3]"; ?>
						</br>
						<?php echo "Tên đơn vị:       $ma[2]"; ?>
						</a>
					</li>
				</ul>
			</div>
			
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-3 clearfix hidden-xs">

				<ul class="list-inline links-list pull-right">

					<li class="dropdown dropdown-user">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" style="font-size:14px; color:#FFFFFF;">
							<i class="entypo-user"></i>
							<?php echo $ma[7]; ?>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
							<a  href="/DanhMuc/DMDV/DMDV.php"><i class="entypo-arrows-ccw"></i>
								<?php if (strlen($ma[0]) < 16) echo "Danh sách tài khoản"; else echo "Thông tin tài khoản";?>
							</a>
							</li>
							<li>
								<a onclick="showAjaxModalmk();">
									<i class="entypo-key"></i> Đổi mật khẩu</a>
							</li>
							<li>
								<a href="/index.php">
									<i class="entypo-logout right"></i></i> Đăng xuất </a>
							</li>
						</ul>
					</li>
					<!--li>
						<a href="/index.php" style="font-size:14px; color:#FFFFFF;">
							Thoát <i class="entypo-logout right"></i>
						</a>
					</li-->
				</ul>
			</div>
		</div>