<?php
include_once("Model/Category.php");
$cat = new Category();
//lấy ds các loại hoa
$result = $cat->GetCategories();
//gọi view hiển thị danh sách ra
include_once("View/Category/DanhSach.php");
?>