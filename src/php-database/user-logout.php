<?php
	session_start();
	session_destroy();
		unset($_SESSION['login_user']);
		header("Location: ../../index.php");
		exit();
?>