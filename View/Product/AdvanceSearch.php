
<br>
<div align="center" style=" height:230px; border-bottom:2px solid #003;">
<form name="form1"  >

  <table width="650" style="border:1px solid #003;" border="0">
    <tr>
      <td style="background:cornflowerblue; color:#FFF; font-size:18px; font-weight:bolder; font-family:'Segoe UI Light'; text-align:center;" colspan="3">SEARCH ADVANCED</td>
    </tr>
    <tr>
      <td width="109" style=" text-align : center; border-right:1px dotted #000000; border-bottom:1px dotted #000000;">Tên Sản Phẩm</td>
      <td colspan="2" style="text-align : center; border-bottom:1px dotted #000000;"><input type="text" name="txttensp" id="txttensp" style="width:190px;"></td>
    </tr>
    <tr>
      <td style=" text-align : center; border-right:1px dotted #000000; border-bottom:1px dotted #000000;">Loại Sản Phẩm</td>
      <td colspan="2" style="text-align : center;border-bottom:1px dotted #000000;"><label for="cbbmaloai"></label>
        <select name="cbbmaloai" id="cbbmaloai" style="width:250px;">
        	<option value='all'>Tất cả</option>
        <?php
		foreach($rs as $r)
		{	
		
			echo "<option value='{$r['MaLoai']}'>{$r['TenLoai']}</option>";
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td style="text-align : center; border-right:1px dotted #000000; border-bottom:1px dotted #000000;">Nhà Sản Xuất</td>
      <td colspan="2" style=" text-align : center; border-bottom:1px dotted #000000;"><label for="cbbnsx"></label>
        <select name="cbbnsx" id="cbbnsx" style="width:250px;">
       		 <option value='all'>Tất cả</option>
                <?php
		foreach($rs1 as $r)
		{	
		
			echo "<option value='{$r['MaNSX']}'>{$r['TenNSX']}</option>";
		}
		?>
        </select></td>
    </tr>
    <tr >
      <td style="text-align : center; border-right:1px dotted #000000; ">Giá Bán</td>
     
      <td width="176" style="border-bottom:1px dotted #000000;"> &nbsp; &nbsp; &nbsp;Từ: 
        <label for="txtTu"></label>
        <select name="txtTu" id="txtTu" style="width:190px;">
        <option value="1000000">1.000.000</option>
        <option value="3000000">3.000.000</option>
        <option value="5000000">5.000.000</option>
        <option value="10000000">10.000.000</option>
       
        </select></td>
      <td width="188" style="border-bottom:1px dotted #000000;">Đến:  <label for="txtDen"></label>
      <select name="txtDen" id="txtDen" style="width:190px;">
        <option value="30000000">30.000.000</option>
        <option value="20000000">20.000.000</option>
        <option value="10000000">10.000.000</option>
        <option value="5000000">5.000.000</option>
        </select></td>
    </tr>
  </table>

 

</form>
</div>
<div id="dsSanPham">
<!--Nơi chứa kết quả từ ajax-->
</div>