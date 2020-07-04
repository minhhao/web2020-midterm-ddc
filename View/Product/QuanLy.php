 <!-- DataTales Example -->

 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Dưới Đây Là " .$LCap. " Thuộc " .$HCap  ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Tên Sản Phẩm</th>
        <th>Loại</th>
		<th>NSX</th>
		<th>Hình</th>
		<th>Giá (VNĐ)</th>
		<th>Số lượng bán</th>
		<th>Option</th>
      </tr>
    </thead>
    <tbody>
	<?php
foreach($rs as $row)
{
	echo "<tr> <td>";
	echo $row['TenSP']."</td><td  >";
	echo $row['TenLoai']."</td><td  >";
	echo $row['TenNSX']."</td><td  >";
	echo "<img src=\"hinhsp/$row[Hinh]\" width=\"50\" /></td><td   >";
	echo number_format($row["GiaBan"],0)."</td><td >";
	echo $row['SoLuongBan']."</td>";
	
	echo "<td ><a href=\"#\" onclick=\"alert('".$row['MoTa']."')\"><img src=\"Images/InfoMessage.gif\" /></a>  
	<a href=\"admin.php?mod=Product&act=Xoa&id=$row[MaSP]\" onclick=\"return confirm('Bạn có chắc muốn xóa không')\"><img src=\"Images/delete.png\" /></a> 
	<a href=\"admin.php?mod=Product&act=Sua&id=$row[MaSP]\"><img src=\"Images/edit.png\" /></a>
	</td>";
	 

	echo "</tr>";
}
if(isset($MaLoai))
	$idCate="&idCate=".$MaLoai;
else
	$idCate="";
if(isset($MaNSX))
	$idNSX="&idNSX=".$MaNSX;
else
	$idNSX="";
echo "<tr><td colspan=\"16\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=Product&act=QuanLy$idCate$idNSX&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
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
  
