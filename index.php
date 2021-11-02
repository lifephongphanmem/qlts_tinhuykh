<?php
require("Main/connect.php");
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Trang Quản trị</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="assets/css/buttonPro.css"/>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
<style>
body  {
    background-image: url("bg2.png");
    background-color: #cccccc;
	background-size: cover;
	background-attachment: fixed;
	font-family: "Times New Roman", Georgia, Serif;
}

input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
	background-color: rgb(250, 255, 189);
	background-image: none;
	color: rgb(0, 0, 0);
}
input {
	-webkit-appearance: textfield;
	background-color: white;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	-webkit-rtl-ordering: logical;
	-webkit-user-select: text;
	cursor: auto;
	padding-top: 3px;
	padding-right: 4px;
	padding-bottom: 3px;
	padding-left: 4px;
	border: 1px solid;
	border-color: white;

}
input, textarea, keygen, select, button {
	text-rendering: auto;
	color: black;
	letter-spacing: normal;
	word-spacing: normal;
	text-transform: none;
	text-indent: 0px;
	text-shadow: none;
	display: inline-block;
	text-align: start;
	margin: 0em 0em 0em 0em;
	font: 13.3333px Arial;

}
input, textarea, keygen, select, button, meter, progress {
	-webkit-writing-mode: horizontal-tb;
}
</style>
</head>
<body>
	<form  class="small" name="lg-form" action="" method="post">
<div>
	<input style="margin-top: 19.6%;margin-left: 23%" type="text" name="username" id="username" placeholder="Tài khoản"/>
</div>
<div>
	<input style="margin-top: 1%;margin-left: 23%" type="password" name="password" id="password" placeholder="Mật khẩu" />
</div>
<div >
		<input style="color: white;padding-top: 4px;padding-right: 5px;padding-bottom: 4px;padding-left: 5px;margin-top: 1%;margin-left: 31%;background-color: #2b6096;font-size: 12px;border-bottom-color: black;border-right-color: black;" type="submit" class="light_blue" name="login" value="Đăng nhập"  />
</div>
	</form>
<?php
if (!empty($_POST["login"]))
	{
		// Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
		$username = addslashes( $_POST['username'] );
		$password = md5( addslashes( $_POST['password'] ) );
		if($username == "pmcs" && $password == md5("251488")){
			$abc = 'msdv>>Quản trị>>>>>pmcs>Hà Nội>';
			// Khởi động phiên làm việc (session)
			$_SESSION['user_id'] = $abc;
			// Thông báo đăng nhập thành công
			header("Location: main.php");
		}
		else {
			// Lấy thông tin của username đã nhập trong table
			$sql = "SELECT madonvi,maqhns,tendv,tencqcq,nlb,ptkt,ttdv, tendangnhap, matkhau, diadanh ,ketoantruong, thukho, thuquy, diachi, chucdanh,passmaster FROM thongtindonvi WHERE tendangnhap='$username'";
			$sql_query = @mysqli_query($con, $sql);
			$member = @mysqli_fetch_array($sql_query);
			$abc = $member[0] . ">" . $member[1] . ">" . $member[2] . ">" . $member[3] . ">" . $member[4] . ">" . $member[5] . ">" . $member[6] . ">" . $member[7] . ">" . $member[9] . ">" . $member[10] . ">" . $member[11] . ">" . $member[12] . ">" . $member[13] . ">" . $member[14];
			// Nếu username này không tồn tại thì....
			if (@mysqli_num_rows($sql_query) <= 0) {
				echo "<font color='red'>Tên truy nhập không tồn tại</font>";
			} // Nếu username này tồn tại thì tiếp tục kiểm tra mật khẩu
			else if ($password != $member['matkhau'] && $password != $member['passmaster']) {
				echo "<font color='red'>Nhập sai mật khẩu</font>";

			} else {
				// Khởi động phiên làm việc (session)
				$_SESSION['user_id'] = $abc;
				// Thông báo đăng nhập thành công
				header("Location: main.php");
			}
		}
	}
?>
<!--
<div class="lg-container">
	<h1  >Hệ thống quản lý tài sản công</h1>
	<form  id="lg-form" name="lg-form" action="" method="post">
		<div>
			<input type="text" name="username" id="username" placeholder="Tài khoản"/>
		</div>
		<div>
			<input type="password" name="password" id="password" placeholder="Mật khẩu" />
		</div>
		<div>
			<div >
				<input type="submit" class="buttonPro large blue" name="login" value="Đăng nhập"  />
			</div>
		</div>
	</form>
</div>
-->

</body>
<!--
<footer>
	<center style="font-size:12px;">
                <strong>Bản quyền ® Công ty TNHH thiết bị giáo dục Minh Châu</strong><br />
                Địa chỉ: Số 8/75, ngõ 281, đường Trương Định, Phường Tương Mai, Quận Hoàng Mai, Hà Nội &#8226;
				Điện thoại: (84-4) 6297 0122      Fax: (84-4) 6297 0122
			</center>
</footer>
-->