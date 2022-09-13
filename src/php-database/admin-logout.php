<?php
	session_start();
	session_destroy();
		unset($_SESSION['login_admin']);
		header("Location: ../sys-admin/login-page/adminLogin.php");
		exit();
?>