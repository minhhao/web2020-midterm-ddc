

 <div class="card shadow mb-4" align="center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Thêm Sản Phẩm Mới <?php echo $Num ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
 
    <table class="table table-striped">
    <form action="index.php?mod=Product&act=HandingThem" method="post" class="form" enctype="multipart/form-data">
  <tr>
    <td style="padding-left:80px" height="30">Tên hàng hóa:</td>
    <td><input type="text" name="txtTenSP" id="txtTenSP"/></td></tr>
  <tr>
    <td style="padding-left:80px" height="30">Hình ảnh:</td>
    <td height="80">    <img width="100" />
        <input type="file" name="txtImageUrl" id="txtImageUrl"/> 
    </td>
  </tr>
<tr>
    <td style="padding-left:80px" height="30">Giá bán:</td>
    <td><input type="text" name="txtGiaBan" id="txtGiaBan" /></td>
  </tr>
  <tr>
  	<td class="ketthuc" colspan="2" height="35" align="center">
    <input class="button" type="submit" name="btnSave" id="btnSave" value="Insert" onmouseover="style.background='url(images/button-2-o.gif)'" onmouseout="style.background='url(images/button-o.gif)'">
    </td>
  </tr>
  </form>
</table>
              </div>
            </div>
          </div>

		</div>
		
		
  <!-- Page level custom scripts

