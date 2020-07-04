<?php
	include_once("Model/Order.php");
	$Order = new Order();
	if(isset($_GET['id']))
	{
		$MaHD = $_GET['id'];
		$row = $Order->GetOrderByID($MaHD);
		include_once("View/Order/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$NoiGiao=$_POST["txtNoiGiao"];
			$TinhTrang=$_POST["cboTinhTrang"];
			$ret=$Order->UpdateOrder($MaHD,$NoiGiao,$TinhTrang);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=Order&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
