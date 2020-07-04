<?php
include_once("DataProvider.php");
class Category
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertCategory($id, $TenLoai, $MoTa)
	{
		$sql="INSERT INTO `loai`(`MaLoai`, `TenLoai`, `Mota`) VALUES ($id,'$TenLoai','$MoTa')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetCategories()
	{
		return $this->da->FetchAll("Select * from loaisanpham");
	}
	function GetCategoryByID($id)
	{
		$sql="Select * from loaisanpham where MaLoai='$id'";
		return $this->da->Fetch($sql);
	}
	function UpdateCategory($id, $TenLoai)
	{
		$sql="Update loaisanpham set TenLoai='$TenLoai' where MaLoai=$id";
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetListCategory($start,$limit)
	{
		$sql="Select * from loaisanpham order by MaLoai desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function CountCategory()
	{
		$sql="Select MaLoai from Loai";
		return $this->da->NumRows($sql);
	}
	function DeleteCategory($id)
	{
		$sql="Delete from loaisanpham where MaLoai = $id";
		return $this->da->ExecuteQuery($sql);
	}
	function GetTenByID($idL)
	{
		$sql="select * from loaisanpham where MaLoai = $idL";
		return $this->da->Fetch($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>