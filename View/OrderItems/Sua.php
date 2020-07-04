
 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Chỉnh Sửa Chỉ Tiết Hóa Đơn Mã ".$_GET['id'] ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
        <form action="admin.php?mod=OrderItems&act=Sua&idHD=<?php echo $MaHD; ?>&id= <?php echo $MaCTHD; ?>" method="post" class="form" enctype="multipart/form-data">
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Tên SP:</td>
    <td><input readonly type="text" name="txtTenSP" id="txtTenSP" value="<?php echo $row['TenSP']; ?>"/></td>
  </tr>
  <tr>
  <tr bgcolor="">
    <td style="padding-left:80px" height="30">Số lượng:</td>
    <td><input type="text" name="txtSoLuong" id="txtSoLuong" value="<?php echo $row['SoLuong']; ?>"/></td>
  </tr>
  <tr>
  <tr>
    <td style="padding-left:80px" height="30">Đơn giá:</td>
    <td><input readonly type="text" name="txtTenSP" id="txtTenSP" value="<?php echo $row['DonGia']; ?>"/></td>
  </tr>
  	<td bgcolor="" class="ketthuc" colspan="2" height="35" align="center">
    <input class="button" type="submit" name="btnChange" id="btnChange" value="Update" onmouseover="style.background='url(images/button-2-o.gif)'" onmouseout="style.background='url(images/button-o.gif)'">
    </td>
  </tr>
  </form>
      
  </table>
              </div>
            </div>
          </div>

		</div>
		
		
  <!-- Page level custom scripts -->
  
