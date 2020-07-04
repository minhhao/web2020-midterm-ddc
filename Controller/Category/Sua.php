<?php
	include_once("Model/Category.php");
	$category = new Category();
	if(isset($_GET['id']))
	{
		$MaCate = $_GET['id'];
		$row = $category->GetCategoryByID($MaCate);
		include_once("View/Category/Sua.php");
		if(isset($_POST['btnChangeLoai']))
		{
			$TenCate=$_POST["txtTenLoai"];
			$ret=$category->UpdateCategory($MaCate,$TenCate);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=Category&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
