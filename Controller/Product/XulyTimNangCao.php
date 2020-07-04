<?php
include_once("../../Model/Product.php");
$da = new Product();
	$tensp = $_REQUEST["TenSP"];
	$maloai=$_REQUEST['MaLoai'];
	$mansx=$_REQUEST['MaNSX'];
	$Tu=$_REQUEST['Tu'];
	$Den=$_REQUEST['Den'];	

$rs=$da->SearchProductNangCao($tensp,$maloai,$mansx,$Tu,$Den);
include_once("../../View/Product/NewProduct.php");
?>