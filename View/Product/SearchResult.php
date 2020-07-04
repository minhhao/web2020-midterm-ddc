<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" width="100%" style="background-color:white; text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:18px; padding-left:30px; color:black; font-size:16px; font-weight:bolder">Kết Quả Tìm Kiếm :
     <?php
	 if(isset($tensp))
	  	echo $tensp; 
	 else
	 	echo ""; 	
		?></td> 
  </tr>
</table>
<?php
if($rs==null)
{
	echo "<img src=\"images/ErrorMessage.gif\" width=20 height=16/>
			<b>Không có sản phẩm nào phù hợp</b>";
}
else
{


foreach($rs as $r)
{
	$gia = number_format($r['GiaBan']);
	$isNew = $r['New'];
	$isGiamGia = $r['GiamGia'];
	$newhtml="";
	$giamgiahtml="";
	if($isNew)
		$newhtml="<div class=\"hh-box-new\"></div>";
	if($isGiamGia)
		$giamgiahtml="<div class=\"hh-box-promo\"></div>";
	$chuoixuat = <<<EOD
<!--Một hàng hóa-->



<div class="col-sm-4" style ="">
	<div class="product-image-wrapper" style : "height :400px">
		<div class="single-products">
			<div class="productinfo text-center">
				<a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">
				<img style = "height : 230px; weight : 70px" src="hinhsp/{$r['Hinh']}" alt="" />
				</a>	
				<h2>{$gia}</h2>
				<p>{$r['TenSP']}</p>
				<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-overlay" style ="background-color : #C7DFDE">
				<div class="overlay-content">
				<a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">
				<p>{$r['TenSP']}</p>
				</a>	
					<h2>{$gia}</h2>
					<ul>
						<li>HĐH: {$r['OS']}</li>
						<li>Màn hình: {$r['ManHinh']}</li>
						<li>CPU: {$r['CPU']}</li>
						<li>RAM: {$r['RAM']} GB</li>
						<li>Pin: {$r['Pin']} mAh</li>
					</ul>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			</div>
		</div>
		
	</div>
</div>


<!--End Một hàng hóa-->
EOD;
	echo $chuoixuat;

}

}
?>