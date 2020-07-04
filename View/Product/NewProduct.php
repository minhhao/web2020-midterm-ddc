<div class="new-products">
	<div class="container">
		<h3>Our Products</h3>
		<div class="agileinfo_new_products_grids">
		
<?php

foreach($rs as $r)
{
	$gia = number_format($r['GiaBan']);
	$isNew = $r['New'];
	$isGiamGia = $r['GiamGia'];
	$newhtml="";
	$giamgiahtml="";
	$keymodal = "myModal".$r['MaSP'];
	$chuoixuat = <<<EOD
			<!-- Start 1 Product -->
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
							<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
							<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
							<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
							<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#{$keymodal}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">{$r['TenSP']}</a></h5>
						<div class="simpleCart_shelfItem">
							<p> <i class="item_price">{$gia}</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="{$r['TenSP']}"> 
								<input type="hidden" name="amount" value="{$gia}">   
								
								
								<a type="button" class="btn btn-info"
									href="Controller/Cart/Add.php?id={r['MaSP']}" onclick="return insertCart({$r['MaSP']});"	>
									Add To Card
								</a>
							
							</form>
						</div>
					</div>
				</div>
				<!-- Modal Video -->
					<div class="modal video-modal fade" id="{$keymodal}" tabindex="-1" role="dialog" aria-labelledby="{$keymodal}">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<div class="col-md-5 modal_body_left">
											<img src="hinhsp/{$r['Hinh']}" alt=" " class="img-responsive" />
										</div>
										<div class="col-md-7 modal_body_right">
											<h4>{$r['TenSP']}</h4>
											<br>
											<ul style ='list-style-type: none;'>
												<li>HĐH: {$r['OS']}</li>
												<li>Màn hình: {$r['ManHinh']}</li>
												<li>CPU: {$r['CPU']}</li>
												<li>RAM: {$r['RAM']} GB</li>
												<li>Pin: {$r['Pin']} mAh</li>
											</ul>
											<div class="modal_body_right_cart simpleCart_shelfItem">
												<br>
												<a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}&CT=1" class="btn btn-info" role="button">Chi Tiết Sản Phẩm</a>
												<br>
												<br>
												<p> <i class="item_price">{$gia}</i></p>
												<a type="button" class="btn btn-success"
													href="Controller/Cart/Add.php?id={r['MaSP']}" onclick="return insertCart({$r['MaSP']});"	>
													Add To Card
												</a>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</section>
							</div>
						</div>
					</div>
				<!-- End Modal Video -->
			<!-- End 1 Product -->
	
	EOD;
	echo $chuoixuat;
}
?>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
		
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <?php
	if(isset($MaLoai))
	$idCate="&MaLoai=".$MaLoai;
else
	$idCate="";
if(isset($MaNSX))
	$idNSX="&MaNSX=".$MaNSX;
else
	$idNSX="";
if(isset($numpages))
{
echo " <td style ='text-align : center; font-size : 17px'> Page : ";
if(isset($sell))
	$s="BySell";
else
	$s="";

for($i=1;$i<=$numpages;$i++)
{	 
if($Trang == $i)
		echo "<a href=\"index.php?mod=Product&act=DanhSach$s$idCate$idNSX&page=$i\" style=\" font-size : 17px; color:red; font-weight:bold;\">$i</a> ";
	else
		echo "<a href=\"index.php?mod=Product&act=DanhSach$s$idCate$idNSX&page=$i\" style=\" font-size : 17px ; color:#000\">$i</a> ";
}
echo "</td>";
}
	?>

  </tr>
</table>
		</div>
	</div>
