<?php
	include_once("Model/OrderItem.php");
	$OrderItem = new OrderItem();
	$SoDongHienThi = 10;
	if(isset($_GET['id']))
	{
		$MaHD = $_GET['id'];
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$OrderItem->GetOrderItemByOrder($MaHD,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$OrderItem->CoutOrderItemByOrder($MaHD);
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	include_once("View/OrderItems/QuanLy.php");
?>