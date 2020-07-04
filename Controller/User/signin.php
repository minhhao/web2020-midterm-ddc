<?php

	include_once("Model/KhachHang.php");
	$da = new KhachHang();
	$SL = $da->CountKhachHang();
//$act=""; $hoten=""; $diachi=""; $email="";$dienthoai="";$user="";;
if(isset($_POST["email"]) && isset($_POST["name"]) &&isset($_POST["phonenum"]))
{
	
	$email=$_POST["email"];
	$dienthoai=$_POST["phonenum"];
	$ten=$_POST["name"];
	$rs=$da->InsertKhachHang($SL+1,$ten,$dienthoai,$email);
}
include_once("View/User/VRegister.php");
?>