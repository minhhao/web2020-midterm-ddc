<?php
	include_once("Model/OrderItem.php");
	include_once("Model/Order.php");
	$OrderItem = new OrderItem();
	$Order = new Order();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $OrderItem->DeleteOrderItemByID($id);
		if($rs > 0)
		{
			if(isset($_GET['idHD']))
			{
				$MaHD = $_GET['idHD'];
				$rs1 = $Order->UpdateTongTien($MaHD);
				echo "<script>window.location ='admin.php?mod=OrderItems&act=QuanLy&id=$MaHD'</script>";
			}
		}
	}
?>