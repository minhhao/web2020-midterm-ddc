<?php
if(isset($_REQUEST['id']))
{
	$id = $_REQUEST['id'];
	//chèn Model
	include_once("Model/Category.php");
	$cat = new Category();
	$row = $cat->GetCategoryByID($id);
	//gọi View hiển thị
	include_once("View/Category/Edit.php");
	
	//kiểm tra nếu bấm nút cập nhập
	if(isset($_REQUEST['btnChange']))
	{
		//tiến hành cập nhật csdl
		$cat->UpdateCategory($id, $_REQUEST['txtCategoryName']);
		//chuyển tới trang quản lý loại
		header("location:admin.php?mod=Category&act=Manage");
	}
}
else
	echo "Chưa chọn mã loại.";
?>