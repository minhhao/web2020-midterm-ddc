<?php
	include_once("Model/Category.php");
	$category=new Category();
	$sl = $category-> CountCategory();
	include_once("View/Category/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenLoai=$_POST["txtTenLoai"];
			$Mota=$_POST["txtMoTa"];
			if($TenLoai!="")
			{	
				$ret=$category->InsertCategory($sl+1,$TenLoai,$Mota);
				if($ret>0)
					echo "<script>window.location ='admin.php?mod=Category&act=Them'</script>";
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Vui lòng nhập tên</p>";
			}
		}

?>