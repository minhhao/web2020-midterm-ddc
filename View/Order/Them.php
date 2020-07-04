<div align="center">
<table width="50%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
 <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#00A69B; line-height:35px; color:#FFF">XÁC NHẬN ĐẶT HÀNG</div></td>
          </tr>
  <form action="index.php?mod=Order&act=Them" method="post" class="form" enctype="multipart/form-data">
  <tr>
  <tr>
    <td style="padding-left:80px" height="30">Tên khách hàng:</td>
    <td><input readonly type="text" name="txtTenKH" id="txtTenKH" value="<?php echo $TenKH; ?>"/></td>
  </tr>
  <tr>
  <tr>
    <td style="padding-left:80px" height="30">Nơi giao:</td>
    <td><input type="text" name="txtNoiGiao" id="txtNoiGiao"/></td>
  </tr>
  <tr>
  	<td class="ketthuc" colspan="2" height="35" align="center">
    <input class="button1" type="submit" name="btnChange" id="btnChange" value="Đặt hàng">
    </td>
  </tr>
  </form>
</table>
</div>
