<?php
	include_once("Model/Category.php");
	$category = new Category();
	$SoDongHienThi = 10;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$category->GetListCategory($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$category->CountCategory();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/Category/QuanLy.php");
?>