<?php 
	$product = new Product();
	$Num = $product->CountProduct();
	var_dump($_POST);
	if(isset($_POST['btnSave']))
		{
			
			echo "<script>alert('ok save');</script>";
			include("Model/Upload.php");
			
			$TenSP=$_POST["txtTenSP"];
			if(isset($_POST['txtTenSP']))
			{
				echo $TenSP;
			}
			
			if(isset($_FILES["txtImageUrl"]))
				$Hinh = Upload::UploadImage("txtImageUrl","hinhsp");
			$GiaBan=$_POST["txtGiaBan"];	
			if($Hinh!="")
			{	
				echo $Hinh;
			
				if(is_numeric($GiaBan))
				{
					$tmp = $Num + 1;
					$ret=$product->InsertProduct($tmp,$TenSP,$GiaBan,$Hinh);
					if($ret>0)
					{
						echo "<script>window.location ='index.php?mod=Product&act=Them'</script>";
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