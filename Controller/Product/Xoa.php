<?php
	include_once("Model/Product.php");
	$product = new Product();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $product->DeleteProduct($id);
		if($rs>0)
			{
				echo "<script>window.location ='admin.php?mod=Product&act=QuanLy'</script>";
			}
			else
				echo "<p style= 'text-align : center' >Lỗi Sản Phẩm ID".$_GET['id']." Đang Tồn Tại Trong 1 Đơn Hàng Chưa Được Xử Lí</p>
					
					<a style= 'margin-left : 38%' href ='admin.php?mod=Product&act=QuanLy' class=\"btn btn-secondary\">Nhấn Để Quay Về Trang Trước</a>";
					
	}	
?>