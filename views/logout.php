<?php
	session_start();
	require_once('../controller/c_user.php');
	$c_logout = new C_User();
	$c_logout->outUser();
	header('location:home.php');
?>