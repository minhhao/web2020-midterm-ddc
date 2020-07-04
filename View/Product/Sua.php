 <!-- DataTales Example -->

 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo "Chính sửa thông tin sản phẩm "."<div style =\"color:red\">".$row['TenSP']."</div>"  ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
 
<table class="table" style ="">
<form action="admin.php?mod=Product&act=Sua&id=<?php echo $MaSP; ?>" method="post" class="form" enctype="multipart/form-data">
  <tr>
    <td width="300" style="padding-left:80px" height="30">Loại sản phẩm:</td>
    <td width="400">
     <select name="cboLoai"><?php
				foreach($cate as $rowmanu)
				{
					if($rowmanu['MaLoai']==$row['MaLoai'])
					{
						echo "<option value=\"$rowmanu[MaLoai]\" selected=\"selected\" >$rowmanu[TenLoai]</option>";
					}
					else
						echo "<option value=\"$rowmanu[MaLoai]\" >$rowmanu[TenLoai]</option>";
				}
			?></select>
    </td>
  </tr>
  <tr bgcolor="">
    <td width="300" style="padding-left:80px" height="30">Nhà sản xuất:</td>
    <td width="400">
     <select name="cboNSX"><?php
				foreach($nsx as $rowmanu)
				{
					if($rowmanu['MaNSX']==$row['MaNSX'])
					{
						echo "<option value=\"$rowmanu[MaNSX]\" selected=\"selected\" >$rowmanu[TenNSX]</option>";
					}
					else
						echo "<option value=\"$rowmanu[MaNSX]\" >$rowmanu[TenNSX]</option>";
				}
			?></select>
    </td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Tên sản phẩm:</td>
    <td><input value="<?php echo $row['TenSP'];?>" type="text" name="txtTenSP" id="txtTenSP"/></td></tr>
   <tr bgcolor="">
    <td style="padding-left:80px" height="30">Hệ điều hành:</td>
    <td><input type="text" name="txtHDH" id="txtHDH" value="<?php echo $row['OS']; ?>"/></td>
  </tr>
   <tr>
    <td style="padding-left:80px" height="30">Màn hình:</td>
    <td><input type="text" name="txtManHinh" id="txtManHinh" value="<?php echo $row['ManHinh']; ?>"/></td>
  </tr>
   <tr bgcolor="">
    <td style="padding-left:80px" height="30">CPU:</td>
    <td><input type="text" name="txtCPU" id="txtCPU" value="<?php echo $row['CPU']; ?>"/></td>
  </tr>
   <tr>
    <td style="padding-left:80px" height="30">Ram:</td>
    <td><input type="text" name="txtRam" id="txtRam" value="<?php echo $row['RAM']; ?>"/></td>
  </tr>
   <tr bgcolor="">
    <td style="padding-left:80px" height="30">Pin:</td>
    <td><input type="text" name="txtPin" id="txtPin" value="<?php echo $row['Pin']; ?>"/></td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Mô tả:</td>   
     <td height="80"><textarea name="txtMoTa" id="txtMoTa" cols="27" rows="7"  style="width:370px"><?php echo $row['MoTa']; ?></textarea> </td>
  </tr>
  <tr bgcolor="">
    <td style="padding-left:80px" height="30">Hình ảnh:</td>
    <td height="80">    <img src="hinhsp/<?php echo $row['Hinh'] ?>" width="100" />
        <input type="file" name="txtImageUrl" id="txtImageUrl"/> 
    </td>
  </tr>
<tr>
    <td style="padding-left:80px" height="30">Giá bán:</td>
    <td><input type="text" name="txtGiaBan" id="txtGiaBan" value="<?php echo $row['GiaBan']; ?>"/></td>
  </tr>
  <tr bgcolor="">
    <td style="padding-left:80px" height="30">Số lượng bán:</td>
    <td><input type="text" name="txtSoLuongBan" id="txtSoLuongBan" value="<?php echo $row['SoLuongBan']; ?>"/></td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">New:</td>
    <td><input type="text" name="txtNew" id="txtNew" value="<?php echo $row['New']; ?>"/></td>
  </tr>
  <tr bgcolor="">
    <td style="padding-left:80px" height="30">Giảm giá:</td>
    <td><input type="text" name="txtGiamGia" id="txtGiamGia" value="<?php echo $row['GiamGia']; ?>"/></td>
  </tr>
  <tr>
  	<td class="ketthuc" colspan="2" height="35" align="center">
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
  
