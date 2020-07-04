<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["success"]);
		unset($_SESSION["user"]);
		unset($_SESSION["MyCart"]);
		session_destroy(); 
		echo "<script>alert('Đăng xuất thành công!');window.location='index.php';</script>";	
?>