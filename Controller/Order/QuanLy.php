<?php
	include_once("Model/Order.php");
	$Order = new Order();
	$SoDongHienThi = 10;
	if(isset($_GET['id']))
	{
		$MaTinhTrang = $_GET['id'];
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$Order->GetOrderByStatus($MaTinhTrang,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Order->CountOrderByStatus($MaTinhTrang);
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	else
	{		
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$Order->GetOrders($SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Order->CountOrder();
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	if (isset($_GET['id']))
	{
		switch ($_GET['id']) {
			case '1':
				$TT = "Đã Giao";
				break;
			case '2':
				$TT = "Chưa Giao";
				break;
			case '3':
				$TT = "Đang Giao";
				break;
			case '4':
				$TT = "Đã Hủy";
				break;	
			default:
				$TT = "";
				break;
		}
	}
	else $TT = "";
	include_once("View/Order/QuanLy.php");
?>