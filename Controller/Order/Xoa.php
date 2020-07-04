<?php
	include_once("Model/Order.php");
	$Order = new Order();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $Order->DeleteOrder($id);
		if($rs>0)
			{
				echo "<script>window.location ='admin.php?mod=Order&act=QuanLy'</script>";
			}
			else
				echo "<p style= 'text-align : center' >Lỗi Hóa Đơn ID".$_GET['id']." Không Thể Xóa</p>
					<a style= 'margin-left : 38%' href ='admin.php?mod=Order&act=QuanLy' class=\"btn btn-secondary\">Nhấn Để Quay Về Trang Trước</a>";
					
	}
?>