<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
include_once("Product.php");
class Order
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertOrder($MaKH,$NoiGiao)
	{
		$sql="Insert into hoadon(MaKH,NgayDat,NoiGiao, TinhTrang) values('$MaKH',now(),'$NoiGiao',2)";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateOrder($id,$NoiGiao,$TinhTrang)
	{
		$sql="Update hoadon set NoiGiao='$NoiGiao',TinhTrang=$TinhTrang where MaHD=$id";
		if($TinhTrang==1)
		{
			$item = new OrderItem();
			$row = $item->GetAllOrderItemByOrder($id);
			$Product = new Product();
			foreach($row as $rowCT)
			{
				$Product->UpdateSoLuongBan($rowCT['MaSP'],$rowCT['SoLuong']);
			}
		}
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateStatus($id,$TinhTrang)
	{
		$sql="Update hoadon set TinhTrang='$TinhTrang' where MaHD=$id";
		return $this->da->ExecuteQuery($sql);
	}

	function DeleteOrder($MaHD)
	{
		$item = new OrderItem();
		$item->DeleteOrderItem($MaHD);
		$sql="Delete from hoadon where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetOrders($start,$limit)
	{
		$sql="Select hoadon.*,khachhang.TenKH,khachhang.SoDienThoai from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH order by NgayDat desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByStatus($id,$start,$limit)
	{
		$sql="Select hoadon.*,khachhang.TenKH,khachhang.SoDienThoai from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH and TinhTrang=$id order by NgayDat desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByID($id)
	{
		$sql="Select hoadon.* ,khachhang.TenKH from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH and hoadon.MaHD=$id";
		return $this->da->Fetch($sql);
	}
	function GetOrdersByUserID($id)
	{
		$sql="Select * from hoadon where MaKH=$id order by NgayDat desc";
		return $this->da->FetchAll($sql);
	}
	function GetOrdersSelledByUserID($id,$start,$limit)
	{
		$sql="Select * from hoadon where MaKH=$id and (TinhTrang=1 or TinhTrang=2) order by NgayDat desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function CountOrder()
	{
		$sql="Select MaHD from hoadon";
		return $this->da->NumRows($sql);
	}

	function CountOrderNotHandlingInDay()
	{
		$sql="Select MaHD from hoadon WHERE TinhTrang ='Chưa giao' and CAST(NgayDat AS DATE) = CURDATE()";
		return $this->da->NumRows($sql);
	}

	function CountOrderNotHandlingInMonth()
	{
		$sql="Select MaHD from hoadon WHERE TinhTrang ='Chưa giao' and EXTRACT(YEAR_MONTH FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR_MONTH FROM CURDATE()) and CAST(NgayDat AS DATE) != CURDATE()";
		return $this->da->NumRows($sql);
	}

	function CountOrderNotHandlingInYear()
	{
		$sql="Select * from hoadon WHERE TinhTrang ='Chưa giao' and EXTRACT(MONTH FROM CAST(NgayDat AS DATE)) != EXTRACT(MONTH FROM CURDATE()) and EXTRACT(Year FROM CAST(NgayDat AS DATE)) = EXTRACT(Year FROM CURDATE())  ";
		return $this->da->NumRows($sql);
	}

	function NamHangHoaCoDat()
	{
		$sql="SELECT DISTINCT YEAR(NgayDat) FROM `hoadon` WHERE 1";
		return $this->da->NumRows($sql);
	}

	function NumberOrderInMonth($month)
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE EXTRACT(MONTH FROM CAST(NgayDat AS DATE)) = $month and EXTRACT(Year FROM CAST(NgayDat AS DATE)) = EXTRACT(Year FROM CURDATE())";
		return $this->da->NumRows($sql);
	}

	function GetTotalYear()
	{
		$sql="SELECT SUM(TongTien) as TotalYear FROM `hoadon` WHERE TinhTrang ='Đã giao'";
		return $this->da->Fetch($sql);
	}

	function GetTotalYearBeforeYearNow()
	{
		$sql="SELECT SUM(TongTien) as TotalYearBefore FROM `hoadon` WHERE TinhTrang ='Đã giao' and Year(NgayDat) != YEAR(CURDATE())";
		return $this->da->Fetch($sql);
	}

	function GetTotalDay()
	{
		$sql="SELECT SUM(TongTien) as TotalDay FROM `hoadon` WHERE TinhTrang ='Đã giao' and CAST(NgayDat AS DATE) = CURDATE()";
		return $this->da->Fetch($sql);
	}

	function GetTotalMonth()
	{
		$sql="SELECT SUM(TongTien) as TotalMonth FROM `hoadon` WHERE TinhTrang ='Đã giao' and EXTRACT(YEAR_MONTH FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR_MONTH FROM CURDATE())";
		return $this->da->Fetch($sql);
	}

	function GetTotalInMonthXD($month)
	{
		$sql="SELECT SUM(TongTien) as MonthCD FROM `hoadon` WHERE TinhTrang ='Đã giao' and EXTRACT(MONTH FROM CAST(NgayDat AS DATE)) = $month and EXTRACT(Year FROM CAST(NgayDat AS DATE)) = EXTRACT(Year FROM CURDATE())";
		return $this->da->Fetch($sql);
	}

	function GetTotalYearNow()
	{
		$sql="SELECT SUM(TongTien) as TotalMoneyYearNow FROM `hoadon` WHERE TinhTrang ='Đã giao' and Year(NgayDat) = YEAR(CURDATE())";
		return $this->da->Fetch($sql);
	}
	

	function CountOrderByStatus($id)
	{
		$sql="Select MaHD from hoadon where TinhTrang=$id";
		return $this->da->NumRows($sql);
	}

	function CountOrderInDay()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE CAST(NgayDat AS DATE) = CURDATE()";
		return $this->da->NumRows($sql);
	}

	function CountOrderInMonth()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE EXTRACT(YEAR_MONTH FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR_MONTH FROM CURDATE())";
		return $this->da->NumRows($sql);
	}

	function CountOrderInYear()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE EXTRACT(YEAR FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR FROM CURDATE())";
		return $this->da->NumRows($sql);
	}



	function CountOrderInDayDone()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE TinhTrang ='Đã giao' and CAST(NgayDat AS DATE) = CURDATE()";
		return $this->da->NumRows($sql);
	}

	function CountOrderInMonthDone()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE TinhTrang ='Đã giao' and EXTRACT(YEAR_MONTH FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR_MONTH FROM CURDATE())";
		return $this->da->NumRows($sql);
	}

	function CountOrderInYearDone()
	{
		$sql="SELECT MaHD FROM `hoadon` WHERE TinhTrang ='Đã giao' and EXTRACT(YEAR FROM CAST(NgayDat AS DATE)) =  EXTRACT(YEAR FROM CURDATE())";
		return $this->da->NumRows($sql);
	}


	function CountOrderByUserID($id)
	{
		$sql="Select MaHD from hoadon where MaKH=$id and (TinhTrang=1 or TinhTrang=2)";
		return $this->da->NumRows($sql);
	}
	function UpdateTongTien($MaHD)
	{
		$item = new OrderItem();
		$row=$item->GetAllOrderItemByOrder($MaHD);
		$Tong=0;
		foreach($row as $rowCT)
		{
			$Tong+=($rowCT['SoLuong']*$rowCT['DonGia']);
		}
		$sql="Update hoadon set TongTien=$Tong where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	function GetDoanhThuTheoThang($year)
	{
		$sql="SELECT MONTH(NgayDat) AS Time,SUM(TongTien) AS TongThu FROM `hoadon` WHERE YEAR(NgayDat)=$year AND TinhTrang=1 GROUP BY MONTH(NgayDat)";
		return $this->da->ExecuteQuery($sql);
	}
	function GetDoanhThu()
	{
		$sql="SELECT YEAR(NgayDat) AS Time,SUM(TongTien) AS TongThu FROM `hoadon` WHERE TinhTrang=1 GROUP BY YEAR(NgayDat)";
		return $this->da->ExecuteQuery($sql);
	}
	function GetListNam()
	{
		$sql="SELECT YEAR(NgayDat) AS Nam FROM `hoadon` WHERE TinhTrang=1 GROUP BY YEAR(NgayDat)";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>
