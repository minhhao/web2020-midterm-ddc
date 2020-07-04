<div style ="background-color:white; text-align : center; padding-left : 30px" >
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-left:20px; background-color : white">
  <tr>
  	<td colspan="3" height="40" style="border-bottom:1px solid #333; background:url(images/toplist-content.gif) repeat-x;">
    <a href="index.php"><img src="images/Home-52.png" width="16" height="16" /></a>
    <strong> ~> </strong>
    <?php echo "<a style='font-weight:bold; color:#000;' href=\"index.php?mod=Product&act=DanhSach&MaLoai=$id2\">$tenloai</a>"?>      
    <strong> ~> </strong>
    <?php echo "<a style='font-weight:bold; color:#000;' href=\"index.php?mod=Product&act=DanhSach&MaLoai=$id2&MaNSX=$id3\">$tennxs</a>"?> 
    <strong> ~> </strong>
  	<a style='font-weight:bold; color:#000;' href=""><?php echo "$tensp"; ?></a>
    </td>
  </tr>
</table>

<table width= "100%"border="2" cellspacing="0" cellpadding="0" style="text-align:center">
  <tr>
  	<td height="33" colspan="3" style="background-color:#848484; text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:18px; padding-left:30px; color:#FFF; font-size:16px; font-weight:bold">THÔNG TIN SẢN PHẨM</td> 
    </tr>
  <tr>
    <td width="232" rowspan="8" align="center" valign="top"><div>
      <p><img src="hinhsp/<?php echo $hinh; ?>" width="160" height="210"><br /></p>
      <p>&nbsp;</p>
    </div>
	<form method="post" name="form">
    <input type="hidden" name="dathang" />
    <?php 
	if(isset($_SESSION["user"]))
	{
	    echo"<a onClick=\"document.form.submit();\">
    	<img src=\"images/chovaogiohang.jpg\" width=\"151\" height=21 border=0>
	    </a>";
	}
	else
		echo "<a onClick=\"alert('Bạn cần phải đăng nhập để mua hàng')\"; ><img src=\"images/chovaogiohang.jpg\" width=\"151\" height=21 border=0></a>";
	?>
    </form></td>
    <td width="121" height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Mã sản phẩm:</td>
    <td width="207" style="border-bottom:1px dotted #666; padding-left:5px"><span style="font-size:18px; color:#00F; font-weight:bold"><?php echo $tensp; ?></span></td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Giá:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px"><font color="#FF0000"><?php  echo "$gia2 VND"; ?></font></td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Thuế VAT:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px"><font color="#FF0000">Giá trên chưa bao gồm thuế</font></td>
  </tr>
  <tr>
    <td height="25" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Bảo hành:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">12 tháng.</td>
  </tr>
  <tr>
    <td height="40" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Vận chuyển:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">Giao hàng toàn quốc</td>
  </tr>
  <tr>
    <td height="40" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Thời gian <br />
      giao hàng:</td>
    <td style="border-bottom:1px dotted #666; padding-left:5px">
    <strong>7 ngày</strong> sau khi đặt hàng
    </td>
  </tr>  
  <tr>
    <td height="70" style="padding-left:20px; border-bottom:1px dotted #666; border-right:1px dotted #666">Hình thức<br />
thanh toán:</td>
    <td style="padding-left:5px; border-bottom:1px dotted #666;"><p>Nhận tiền sau khi giao hàng</p></td>
  </tr>
 <tr>
    <td height="30" style="padding-left:20px; border-right:1px dotted #666"><p>Lượt xem:</p></td>
    <td height="30" style="padding-left:5px;"><p><?php  echo "$luotxem views"; ?></p></td>
  </tr>
    <td height="2" colspan="3" align="justify" style="border-bottom:1px solid #333; padding-bottom:5px; color:#F00">
    </td>
  </tr>  
</table>

<br>


<table width="100%" border="0" cellspacing="0" cellpadding="0" >

<tr>
  	<td>
    <div id="container">
    <ul class="tabs" style ="text-align : center; padding-left: 10px">
        <li class="active" style ="width : 400px"sty rel="tab1">Thông số kỹ thuật</li>
        <li rel="tab2" style ="width : 380px" >Hình Ảnh</li>
    </ul>
    <div class="tab_container">
    
    <div id="tab1" class="tab_content" style="display: block;"> 
        <table width="780" border="0" cellspacing="0" cellpadding="0">
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Màn hình
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>
          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Màn hình
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $r['ManHinh'] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Hệ Điều Hành - CPU
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>
          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Hệ Điều Hành
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $r['OS'] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			CPU
            </td>
            <td style="background:#FFF; color:#000; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $r['CPU'] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Camera Sau
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>
          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Camera Sau
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $ct[1] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Camera Trước
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>

          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Camera Trước
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $ct[3] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Bộ Nhớ & Lưu Trữ
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>

          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Bộ Nhớ Ram
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $r['RAM'] ?> GB
            </td>
          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Bộ Nhớ Trong
            </td>
            <td style="background:#FFF; color:#000; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $ct[5] ?>
            </td>
          </tr>
          <tr style="">
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;">
			Pin
            </td>
            <td style="background:#CCC; color:#600; font-weight:bolder; line-height:30px; padding-left: 10px; font-family:Arial; font-size:16px;"></td>

          </tr>
          <tr style="">
            <td style="background:#FFF; color:#000;width:300px;  border-bottom:1px dotted #333333;line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			Dung Lượng Pin
            </td>
            <td style="background:#FFF; color:#000; border-bottom:1px dotted #333333; line-height:30px; padding-left: 10px; font-family:Arial; font-size:13px;">
			<?= $r['Pin'] ?> mAh
            </td>
          </tr>
        </table>
    </div>
    <div id="tab2" class="tab_content" style="display: none;">   
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="line-height:25px" align="center">
            <div class="magnify">     
    <!-- This is the magnifying glass which will contain the original/large version -->
 			   <div class="large" style="background:url(hinhsp/<?php echo $hinh; ?>) no-repeat"></div>
     
    <!-- This is the small image -->
    			<img class="small" src="hinhsp/<?php echo $hinh; ?>" width="200"/>
     
			</div>
      
            
            
            </td>
          </tr>
        </table>
    </div>   
	</div>
    </div>
	</td>  
</tr>
</table>
<div style="color:#600; font-family:Arial; font-size:16px;">Một số sản phẩm cùng loại</div>
</div>
