<?php 
	include_once("Model/Product.php");
	$product = new Product();
	$Num = $product->CountProduct();
	include_once("View/Product/Them.php");

		if(isset($_POST['btnSave']))
		{
			
			echo "<script>alert('ok save');</script>";
			include("Model/Upload.php");
			$TenSP=$_POST["txtTenSP"];
			if(isset($_FILES["txtImageUrl"]))
				$Hinh = Upload::UploadImage("txtImageUrl","hinhsp");
			$GiaBan=$_POST["txtGiaBan"];	
			if($Hinh!="")
			{	
				if(is_numeric($GiaBan))
				{
					$ret=$product->InsertProduct($Num+1,$TenSP,$GiaBan,$Hinh);
					if($ret>0)
					{
						echo "<script>window.location ='index.php?mod=Product&act=QuanLy'</script>";
					}
					else
						echo "<p class=\"error\">Thêm bị lỗi</p>";
				}
				else
				{
					echo "<p>Giá không hợp lệ</p>";
				}	
			}
			else
			{
				echo "<p>Vui lòng chọn file ảnh</p>";
			}
			
			
		}
	
?>