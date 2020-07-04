
 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Dưới Đây Là Chỉ Tiết Hóa Đơn Mã ".$_GET['id'] ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
			  <tr height="30" bgcolor="">
    <td align="center" width="76"><strong>Tên SP</strong></td>
    <td align="center" width="83" ><strong>Đơn giá</strong></td>
    <td align="center" width="91" ><strong>Số lượng</strong></td>
    <td align="center" width="91" ><strong>Tổng</strong></td>
    <td align="center" width="53" ><strong>Xóa</strong></td>    
    <td align="center" width="50"><strong>Sửa</strong></td>
  </tr>  

<?php
foreach($rs as $row)
{
	echo "<tr bgcolor=\"\"><td align=\"center\" >";
	echo $row['TenSP']."</td><td align=\"center\" >";
	echo $row['DonGia']."</td><td align=\"center\" >";
	echo $row['SoLuong']."</td><td align=\"center\" >";
	echo ($row['DonGia']*$row['SoLuong'])."</td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=OrderItems&act=Xoa&idHD=$row[MaHD]&id=$row[MaCTHD]\" onclick=\"return confirm('Bạn có chắc muốn xóa không')\"><img src=\"Images/delete.png\" /></a></td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=OrderItems&act=Sua&idHD=$row[MaHD]&id=$row[MaCTHD]\"><img src=\"Images/edit.png\" /></a></td>";
	echo "</tr>";
}

echo "<tr><td colspan=\"15\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=OrderItems&act=QuanLy&id=$row[MaHD]&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>
      
  </table>
              </div>
            </div>
          </div>

		</div>
		
		
  <!-- Page level custom scripts -->
  
