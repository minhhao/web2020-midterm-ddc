 <!-- DataTales Example -->

 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> <?php echo "Chỉnh Sửa Hóa Đơn Mã ".$MaHD ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
 
<table class="table" style ="">
<form action="admin.php?mod=Order&act=Sua&id=<?php echo $MaHD; ?>" method="post" class="form" enctype="multipart/form-data">
  <tr>
    <td width="300" style="padding-left:80px" height="30">Trạng thái:</td>
    <td width="400">
     <select name="cboTinhTrang"><?php
	 		echo "<option value=\"1\" >Đã giao</option>";
			if($row['TinhTrang']=="Chưa giao")
				echo "<option value=\"2\" selected=\"selected\" >$row[TinhTrang]</option>";
			else
				echo "<option value=\"2\" >Chưa giao</option>";
			if($row['TinhTrang']=="Đang giao")
				echo "<option value=\"3\" selected=\"selected\" >$row[TinhTrang]</option>";
			else
				echo "<option value=\"3\" >Đang giao</option>";
			if($row['TinhTrang']=="Đã hủy")
				echo "<option value=\"4\" selected=\"selected\" >$row[TinhTrang]</option>";
			else
				echo "<option value=\"4\" >Đã hủy</option>";	
			?></select>
    </td>
  </tr>
  <tr bgcolor="aliceblue">
    <td style="padding-left:80px" height="30">Tên khách hàng:</td>
    <td><input readonly type="text" name="txtTenKH" id="txtTenKH" value="<?php echo $row['TenKH']; ?>"/></td>
  </tr>
  <tr>
  <tr>
    <td style="padding-left:80px" height="30">Nơi giao:</td>
    <td><input type="text" name="txtNoiGiao" id="txtNoiGiao" value="<?php echo $row['NoiGiao']; ?>"/></td>
  </tr>
  <tr>
  	<td bgcolor="aliceblue" class="ketthuc" colspan="2" height="35" align="center">
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
  
