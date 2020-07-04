<?php
include_once "Model/Product.php";
include_once "Model/Cart.php";
$da = new Product();
//session_destroy();
if(isset($_POST["dathang"]))
{
	$id = $_GET["MaSP"];	
	if(isset($_SESSION['user']))
	{				
		
		if(Cart::IsExist($id))
		{	echo "<script>alert('Sản phẩm này đã có trong giỏ hàng!'); </script>";	

		}
		else
		{
			Cart::InsertCart($id);
			echo "<script>alert('Đã thêm sản phẩm vào giỏ hàng!');window.location ='index.php?mod=Product&act=ChiTiet&MaSP=$id'</script>";	
		}
	}
}
?>
<?php
	$id=$_GET["MaSP"];
	

	
	$r=$da->GetProductByID($id);
		
	$id2=$r["MaLoai"];
	$id3=$r["MaNSX"];
	$tensp=$r["TenSP"];$tenloai=$r["TenLoai"];
	$tennxs=$r["TenNSX"];$mansx=$r["MaNSX"];
	$hinh=$r["Hinh"];$gia=$r["GiaBan"];$gia2=number_format($gia,0,'','.');
	$maloai=$r["MaLoai"];
	$luotxem=$r['LuotXem'];
	$input=$da->UpdateView($id,$luotxem);
	$mota=$r["MoTa"];
	$ct=explode("|",$mota);
	include_once("View/Product/ChiTiet.php");

// $rs=$da->GetRandomProduct($id,$maloai,$mansx);
// if($rs==0)
// echo"Chưa tìm thấy sản phẩm cùng loại nào";			
// include_once("View/Product/DanhSach.php"); 
?>
</div>




