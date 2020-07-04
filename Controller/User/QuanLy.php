<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	$SoDongHienThi = 10;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$KhachHang->GetListKhachHang($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$KhachHang->CountKhachHang();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/User/QuanLy.php");
?>