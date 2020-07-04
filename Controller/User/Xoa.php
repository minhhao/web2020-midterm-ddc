<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $KhachHang->DeleteKhachHang($id);
		if($rs>0)
			{
				echo "<script>window.location ='admin.php?mod=User&act=QuanLy'</script>";
			}
			else
			echo "<p style= 'text-align : center' > Khách Hàng ".$_GET['id']." Đang Sử Dụng Dịch Vụ Của Cửa Hàng - Không Được Phép Xóa\" </p>
			<a style= 'margin-left : 38%' href ='admin.php?mod=User&act=QuanLy' class=\"btn btn-secondary\">Nhấn Để Quay Về Trang Trước</a>";
	}
?>