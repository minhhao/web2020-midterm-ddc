<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	if(isset($_GET['id']))
	{
		$MaKH = $_GET['id'];
		$row = $KhachHang->GetKhachHangByID($MaKH);
		include_once("View/User/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$TenKH=$_POST["txtTenKH"];
			$SDT=$_POST["txtSDT"];
			$DiaChi=$_POST["txtDiaChi"];
			$IsAdmin=$_POST["cboIsAdmin"];
			$ret=$KhachHang->UpdateKhachHang($MaKH,$TenKH,$SDT,$DiaChi,$IsAdmin);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=User&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
