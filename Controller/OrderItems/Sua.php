<?php
	include_once("Model/OrderItem.php");
	include_once("Model/Order.php");
	$OrderItem = new OrderItem();
	$Order = new Order();
	if(isset($_GET['idHD']))
		$MaHD=$_GET['idHD'];
	if(isset($_GET['id']))
	{
		$MaCTHD = $_GET['id'];
		$row = $OrderItem->GetOrderItemByID($MaCTHD);
		include_once("View/OrderItems/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$SoLuong=$_POST["txtSoLuong"];
			$ret1=$OrderItem->UpdateOrderItem($MaCTHD,$SoLuong);
			$ret2=$Order->UpdateTongTien($MaHD);
			if($ret1>0 && $ret2>0)
			{
					echo "<script>window.location ='admin.php?mod=OrderItems&act=QuanLy&id=$MaHD'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
