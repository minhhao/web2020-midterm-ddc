


 <!-- DataTales Example -->

 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Dưới Đây Là Danh Sách Tất Cả Hóa Đơn ".$TT." Của Cửa Hàng" ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Họ tên khách hàng</th>
        <th>Số điện thoại</th>
		<th>Ngày đặt</th>
		<th>Nơi giao</th>
		<th>Tình trạng</th>
		<th>Tổng tiền</th>
		<th>Option</th>
      </tr>
    </thead>
    <tbody>
	<?php
foreach($rs as $row)
{
	echo "<tr> <td>";
	echo $row['TenKH']."</td><td  >";
	echo $row['SoDienThoai']."</td><td  >";
	echo $row['NgayDat']."</td><td  >";
	echo $row['NoiGiao']."</td><td  >";
	echo $row['TinhTrang']."</td><td  >";
	echo number_format($row["TongTien"],0)."</td>";
	
	echo "<td ><a href = \"admin.php?mod=OrderItems&act=QuanLy&id=$row[MaHD]\"><img src=\"Images/details.png\" /></a>  
	<a href=\"admin.php?mod=Order&act=Xoa&id=$row[MaHD]\" onclick=\"return confirm('Bạn có chắc muốn xóa không')\"><img src=\"Images/delete.png\" /></a> 
	<a href=\"admin.php?mod=Order&act=Sua&id=$row[MaHD]\"><img src=\"Images/edit.png\" /></a>
	</td>";
	 

	echo "</tr>";
}
if(isset($MaTinhTrang))
	$temp="&id=".$MaTinhTrang;
else
	$temp="";
echo "<tr><td colspan=\"15\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=Order&act=QuanLy$temp&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>

    </tbody>
  </table>
              </div>
            </div>
          </div>

		</div>
		
		
  <!-- Page level custom scripts -->
  
