
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
       
  <tr height="30" bgcolor="">
    <td colspan="2" class="tieude" align="center" style="font-style:oblique; color:#FFF"><strong>UPDATE THÔNG TIN LOẠI SẢN PHẨM</strong></td>
  </tr>
  <form action="admin.php?mod=Category&act=Sua&id=<?php echo $MaCate; ?>" method="post" class="form" enctype="multipart/form-data">
   <tr>
    <td style="padding-left:80px" height="30">Tên Loại Sản Phẩm</td>
    <td><input value="<?php echo $row['TenLoai'];?>" type="text" name="txtTenLoai" id="txtTenLoai"/></td></tr>
  <tr bgcolor="">
  	<td class="ketthuc" colspan="2" height="35" align="center">
    <input class="button" type="submit" name="btnChangeLoai" id="btnChangeLoai" value="Update" onmouseover="style.background='url(images/button-2-o.gif)'" onmouseout="style.background='url(images/button-o.gif)'">
    </td>
  </tr>
  </table>
              </div>
            </div>
          </div>

		
  <!-- Page level custom scripts -->
  
