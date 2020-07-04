<?php
//1. Chèn Model
include_once("Model/Category.php");
//2. Xử lý dữ liệu
$cat = new Category();
$ret = $cat->GetCategories();
//3. Gọi View hiển thị
include_once("View/Category/Manage.php");
?>