<?php
include_once("DataProvider.php");
class Product
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertProduct($id, $TenSP,$GiaBan,$Hinh)
	{
		$sql="INSERT INTO `hanghoa`(`MaHH`, `TenHH`, `DonGia`, `Hinh`) VALUES ($id,'$TenSP',$GiaBan,'$Hinh')";
		return $this->da->ExecuteQuery($sql);
	}
	
	function UpdateSoLuongBan($MaSP,$SoLuong)
	{	
		$row = $this->GetSoLuongBanByID($MaSP);
		$sql="Update sanpham set SoLuongBan=".($row['SoLuongBan']+$SoLuong)." where MaSP=$MaSP";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateView($MaSP,$luotxem_old)
	{	
		$sql="update sanpham set LuotXem = ($luotxem_old + 1) where MaSP='$MaSP'";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteProduct($MaSP)
	{
		$sql = "Delete from sanpham where MaSP=$MaSP";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateProduct($MaSP,$MaLoai,$MaNSX,$TenSP,$HDH,$ManHinh,$CPU,$Ram,$Pin,$MoTa,$GiaBan,$SoLuongBan,$New,$GiamGia,$Hinh)
	{
		if($Hinh=="")
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,GiamGia= $GiamGia,New=$New,SoLuongBan=$SoLuongBan,OS='$HDH',ManHinh='$ManHinh',CPU='$CPU',RAM=$Ram,Pin=$Pin,MoTa='$MoTa' where MaSP=$MaSP";
			
		}else
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,GiamGia= $GiamGia,New=$New,SoLuongBan=$SoLuongBan,OS='$HDH',ManHinh='$ManHinh',CPU='$CPU',RAM=$Ram,Pin=$Pin,MoTa='$MoTa',Hinh='$Hinh' where MaSP=$MaSP";
		}
		return $this->da->ExecuteQuery($sql);
	}
	
	
	
	
	function GetProducts($start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	
	function GetProductByID($id)
	{
		$sql="select sanpham.*,loaisanpham.*,nhasanxuat.* from sanpham,loaisanpham,nhasanxuat where sanpham.MaLoai=loaisanpham.MaLoai AND sanpham.MaNSX=nhasanxuat.MaNSX  AND MaSP=$id";
		return $this->da->Fetch($sql);
	}
	function GetSoLuongBanByID($id)
	{
		$sql="select sanpham.SoLuongBan from sanpham where MaSP=$id";
		return $this->da->Fetch($sql);
	}
	
	
	function CountProduct()
	{
		$sql="Select MaHH from hanghoa";
		return $this->da->NumRows($sql);
	}
	function CountProductByNSX($id)
	{
		$sql="Select MaSP from sanpham where MaNSX=$id";
		return $this->da->NumRows($sql);
	}
	function CountProductByCategory($id)
	{
		$sql="Select MaSP from sanpham where MaLoai=$id";
		return $this->da->NumRows($sql);
	}
	function CountProductByCateAndNSX($MaLoai,$MaNSX)
	{
		$sql="Select MaSP from sanpham where MaLoai=$MaLoai and MaNSX=$MaNSX";
		return $this->da->NumRows($sql);
	}
	

	
	function __destruct()
	{
		unset($this->da);
	}
}
?>