
 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Dưới Đây Là Danh Sách User Của Cửa Hàng" ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
			  <tr height="30" bgcolor="">
    <td align="center" width="76" ><strong>Tên thành viên</strong></td>
    <td align="center" width="51" ><strong>Số điện thoại</strong></td>
    <td align="center" width="91" ><strong>Địa chỉ</strong></td>
    <td align="center" width="83" ><strong>Email</strong></td>
    <td align="center" width="51" ><strong>IsAdmin</strong></td>
    <td align="center" width="53" ><strong>Xóa</strong></td>    
    <td align="center" width="50"><strong>Sửa</strong></td>
    <td align="center" width="50"><strong>Reset Password</strong></td>
  </tr>  

<?php
foreach($rs as $row)
{
	echo "<tr bgcolor=\"\"><td align=\"center\" >";
	echo $row['TenKH']."</td><td align=\"center\" >";
	echo $row['SoDienThoai']."</td><td align=\"center\" >";
	echo $row['DiaChi']."</td><td align=\"center\" >";
	echo $row['Email']."</td><td align=\"center\" >";
	echo $row['IsAdmin']."</td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=User&act=Xoa&id=$row[MaKH]\" onclick=\"return confirm('Bạn có chắc muốn xóa không?')\"><img src=\"Images/delete.png\" /></a></td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=User&act=Sua&id=$row[MaKH]\"><img src=\"Images/edit.png\" /></a></td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=User&act=Reset&id=$row[MaKH]\" onclick=\"return confirm('Bạn có chắc chắn muốn reset password của tài khoản này không?')\"><img src=\"Images/Refresh.png\" /></a></td>";
	
	echo "</tr>";
}
echo "<tr><td colspan=\"8\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=User&act=QuanLy&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>
  </table>
              </div>
            </div>
          </div>

		</div>
		
		
  <!-- Page level custom scripts -->
  
