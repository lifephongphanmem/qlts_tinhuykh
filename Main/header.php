<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="ajax.js"></script>
<?php 
include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$madv = "";
ob_start();
session_start();	
if(!isset($_SESSION['isLoggedIn']) || !($_SESSION['isLoggedIn']))
{	
	$_SESSION['isLoggedIn'] = true;	
	$_SESSION['timeOut'] = 900;
	$logged = time();
	$_SESSION['loggedAt']= $logged;	
}
else
{
	require 'timeCheck.php';
	$hasSessionExpired = checkIfTimedOut();
	if($hasSessionExpired)
	{		
		//session_unset();
		//header("Location:/index.php");
		//exit;
		echo "<script type='text/javascript'>";
		echo "alert('Bạn đã quá lâu không sử dụng phần mềm. Bạn hãy đăng nhập lại để tiếp tục sử dụng!');";		
		echo "document.location.href = '/index.php';";
		echo "</script>";			
		session_destroy();		
	}
	else
	{
		$_SESSION['loggedAt']= time();// update last accessed time			
	}
}
	
class bientrunggian
{
	static $name="";
}
if ( !$_SESSION['user_id'] )
{ 
    header('location:/index.php');
}
else
{
	if (isset($_SESSION['user_id']))
	{
		$madv=$_SESSION['user_id'];
		$ma = explode('>',$madv);
	}
}
?>

<head>
	<link rel="shortcut icon" href="/home.png">	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>QLTS</title>

	<link rel="stylesheet" href="/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/neon-core.css">
	<link rel="stylesheet" href="/assets/css/neon-theme.css">
	<link rel="stylesheet" href="/assets/css/neon-forms.css">
	<link rel="stylesheet" href="/assets/css/custom.css">	
	<script src="/assets/js/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/global/plugins/select2/select2.css"/>
	<link rel="stylesheet" href="/assets/css/skins/facebook.css">

	<script src="/assets/js/jsform.js"></script>
	<script>$.noConflict();</script>
	
	<!--
	<link rel="stylesheet" href="/assets/css/skins/facebook.css">
	[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body"  data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">
				
				<!-- logo -->
				<div class="logo">
					<a href="/main.php">
						<img src="/assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>
				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class=""><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>	
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>	