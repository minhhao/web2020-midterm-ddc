<div class="content-left">
<table width="215" border="0" cellspacing="0" cellpadding="0" bgcolor="#00A69B">
<tr>
   <td height="30" bgcolor="#CC0000"><div align="left" style="color:#FFF; font-family:Tahoma; font-size: 15px; font-weight:bold"> QUẢN LÝ HÓA ĐƠN:</div></td>
  </tr>
   <tr height="50">
   <td style="padding-left:20px">
	<img align="absmiddle" src="images/towred1-r.gif"><a class="menuright" href="admin.php?mod=Order&act=QuanLy" style="font-size: 18px"> Danh sách hóa đơn</a>    
   </td>   
  </tr>
  <?php
	echo "<tr height=\"40\">";
	echo "<td style=\"padding-left:30px\">";
	echo "<img align=\"left\" src=\"images/Clipboard.png\"><a class=\"menuright\" href=\"admin.php?mod=Order&act=QuanLy&id=1\" style=\"font-size: 15px\" >&nbsp;&nbsp; Đã giao</a></td>";
	echo "</tr>";
	
	echo "<tr height=\"40\">";
	echo "<td style=\"padding-left:30px\">";
	echo "<img align=\"left\" src=\"images/Clipboard.png\"><a class=\"menuright\" href=\"admin.php?mod=Order&act=QuanLy&id=2\" style=\"font-size: 15px\" >&nbsp;&nbsp; Chưa giao</a></td>";
	echo "</tr>";
	
	echo "<tr height=\"40\">";
	echo "<td style=\"padding-left:30px\">";
	echo "<img align=\"left\" src=\"images/Clipboard.png\"><a class=\"menuright\" href=\"admin.php?mod=Order&act=QuanLy&id=3\" style=\"font-size: 15px\" >&nbsp;&nbsp; Đang giao</a></td>";
	echo "</tr>";
	
	echo "<tr height=\"40\">";
	echo "<td style=\"padding-left:30px\">";
	echo "<img align=\"left\" src=\"images/Clipboard.png\"><a class=\"menuright\" href=\"admin.php?mod=Order&act=QuanLy&id=4\" style=\"font-size: 15px\" >&nbsp;&nbsp; Đã hủy</a></td>";
	echo "</tr>";
  ?>
</table>
</div>