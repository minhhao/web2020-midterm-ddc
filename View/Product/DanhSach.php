
<?php

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
				<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
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

					
					<a href="#" onClick="document.form.submit();" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
				</div>
			</div>
		</div>
		
	</div>
</div>


<!--End Một hàng hóa-->
EOD;
	echo $chuoixuat;

}

?>

