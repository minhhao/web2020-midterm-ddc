<?php
$tensp=$_POST["txtsearch"];	
include_once "Model/Product.php";
$da = new Product();
$kqt=$da->SearchProduct($tensp);
include_once("View/Product/SearchPG.php");
?>
