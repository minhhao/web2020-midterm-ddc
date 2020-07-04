
<?php
include_once("Model/Product.php");
$Product = new Product();
$SoDongHienThi = 12;
if(isset($_GET['page']))
	$Trang = $_GET['page'];
else
	$Trang=1;
if(isset($_GET['MaLoai']))
{
	$MaLoai = $_GET['MaLoai'];
	if(isset($_GET['MaNSX']))
	{
		$MaNSX = $_GET['MaNSX'];		
		$rs=$Product->GetProductByCateAndNSX($MaLoai,$MaNSX,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Product->CountProductByCateAndNSX($MaLoai,$MaNSX);
	}
	else
	{
		$rs=$Product->GetProductByCategory($MaLoai,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Product->CountProductByCategory($MaLoai);			
	}
}
else
{		
	$rs=$Product->GetProductsByNumSell($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$Product->CountProduct();
}
if($numrows%$SoDongHienThi==0)
	$numpages=$numrows/$SoDongHienThi;
else
	$numpages=($numrows/$SoDongHienThi)+1;

$sell="BySell";

include_once("View/Product/NewProduct.php");
?>
