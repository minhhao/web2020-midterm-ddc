
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
			 
  <tr height="30" bgcolor="">
    <td colspan="2" class="tieude" align="center" style="font-style:oblique; color:#FFF"><strong><?php echo "UPDATE THÔNG TIN USER ".$MaKH ?></strong></td>
  </tr>
  <form action="admin.php?mod=User&act=Sua&id=<?php echo $MaKH; ?>" method="post" class="form" enctype="multipart/form-data">
  <tr bgcolor="">
    <td width="300" style="padding-left:80px" height="30">Quyền Quản Trị :</td>
    <td width="400">
     <select name="cboIsAdmin"><?php
						echo "<option value=\"1\" >Yes</option>";
	 					if($row['IsAdmin']==0)
							echo "<option value=\"0\" selected=\"selected\" >No";
						else						
							echo "<option value=\"0\" >No</option>";
			?></select>
    </td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Tên thành viên:</td>
    <td><input value="<?php echo $row['TenKH'];?>" type="text" name="txtTenKH" id="txtTenKH"/></td></tr>
   <tr bgcolor="">
    <td style="padding-left:80px" height="30">Số điện thoại:</td>
    <td><input type="text" name="txtSDT" id="txtSDT" value="<?php echo $row['SoDienThoai']; ?>"/></td>
  </tr>
   <tr>
    <td style="padding-left:80px" height="30">Địa chỉ:</td>
    <td><input type="text" name="txtDiaChi" id="txtDiaChi" value="<?php echo $row['DiaChi']; ?>"/></td>
  </tr>
  <tr bgcolor="">
  	<td class="ketthuc" colspan="2" height="35" align="center">
    <input class="button" type="submit" name="btnChange" id="btnChange" value="Update" onmouseover="style.background='url(images/button-2-o.gif)'" onmouseout="style.background='url(images/button-o.gif)'">
    </td>
  </tr>
  </form>
  </table>
              </div>
            </div>
          </div>

		
  <!-- Page level custom scripts -->
  
