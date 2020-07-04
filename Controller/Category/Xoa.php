<?php
	include_once("Model/Category.php");
	$category = new Category();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $category->DeleteCategory($id);
		if($rs>0)
			{
				echo "<script>window.location ='admin.php?mod=Category&act=QuanLy'</script>";
			}
			else
				echo "<p style= 'text-align : center' >Loại Sản Phẩm ".$_GET['id']." Không Thể Xóa Vì Còn Có Các Loại Sản Phẩm Trong Hệ Thống\"</p>
					
					<a style= 'margin-left : 38%' href ='admin.php?mod=Category&act=QuanLy' class=\"btn btn-secondary\">Nhấn Để Quay Về Trang Trước</a>";
					
	}
?>