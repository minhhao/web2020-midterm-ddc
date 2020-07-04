<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php	
							include_once("Model/Category.php");
							$cate = new Category();
							$rs = $cate->GetCategories();	
							include_once("Model/NhaSanXuat.php");
							$nsx = new NhaSanXuat();
							$rs1 = $nsx->GetNSX();
							foreach($rs as $r)
							{
								$maloai=$r["MaLoai"];
								$tenloai=$r["TenLoai"];
									$TMP = '#'.$maloai;
									echo "  <div class=\"panel panel-default\">
									<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
									  <h4 class=\"panel-title asd\">
										<a class=\"pa_italic collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"".$TMP."\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
										  <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span><i class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></i>".$tenloai."
										</a>
									  </h4>
									</div>
									<div id=\"".$maloai."\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
									   <div class=\"panel-body panel_text\">
										<ul>";
									foreach($rs1 as $r1)
									{
												$tennsx=$r1["TenNSX"];$mansx=$r1["MaNSX"];
												echo "<li><a href=\"index.php?mod=Product&act=DanhSach&MaNSX=$r1[MaNSX]&MaLoai=$maloai\">$tennsx</a></li>";	
									}
									echo "</ul>
									</div>
								  </div>
								</div>";
							}
							?>

								<!-- Start Cate  -->
							
									
								<!-- End Cate -->
							</div>

						</div>
					</div>
					<!-- Color -->
					<!-- <div class="w3ls_mobiles_grid_left_grid">
						<h3>Color</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color">
								<ul>
									<li><a href="#"><i></i> Red(5)</a></li>
									<li><a href="#"><i></i> Brown(2)</a></li>
									<li><a href="#"><i></i> Yellow(3)</a></li>
									<li><a href="#"><i></i> Violet(6)</a></li>
									<li><a href="#"><i></i> Orange(2)</a></li>
									<li><a href="#"><i></i> Blue(1)</a></li>
								</ul>
							</div>
						</div>
					</div> -->
					<!-- End Color -->
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: 
							<?php
						if(isset($tensp))
							echo $tensp; 
						else
							echo ""; 	
							?>
							</h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
								<input class="control-custom" type="text" placeholder="Search...""/>
						</div>
						<div class="clearfix"> </div>
					</div>
						<!-- 1 SP -->
						<?php			
						if($kqt==null)
						{
							echo "<img src=\"images/ErrorMessage.gif\" width=20 height=16/>
									<b>Không có sản phẩm nào phù hợp</b>";
						}
						else
						{					
							foreach($kqt as $intim)
							{
								$gia = number_format($intim['GiaBan']);
								$isNew = $intim['New'];
								$isGiamGia = $intim['GiamGia'];
								$newhtml="";
								$giamgiahtml="";
								if($isNew)
									$newhtml="<div class=\"hh-box-new\"></div>";
								if($isGiamGia)
									$giamgiahtml="<div class=\"hh-box-promo\"></div>";
									$keymodal = "myModal".$intim['MaSP'];
								$chuoi = <<<EOD
								<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
								<div class="agile_ecommerce_tab_left mobiles_grid">
									<div class="hs-wrapper hs-wrapper2">
										<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
										<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
										<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
										<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
										<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom w3_hs_bottom_sub1">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#{$keymodal}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{$intim['TenSP']}</a></h5> 
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">{$gia}</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls_item" value="Asus Laptop" /> 
											<input type="hidden" name="amount" value="{$gia}"/>   
											<a type="button" class="btn btn-info"
												href="Controller/Cart/Add.php?id={intim['MaSP']}" onclick="return insertCart({$intim['MaSP']});"	>
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
												<img src="hinhsp/{$intim['Hinh']}" alt=" " class="img-responsive" />
											</div>
											<div class="col-md-7 modal_body_right">
												<h4>{$intim['TenSP']}</h4>
												<br>
											<ul style ='list-style-type: none;'>
												<li>HĐH: {$intim['OS']}</li>
												<li>Màn hình: {$intim['ManHinh']}</li>
												<li>CPU: {$intim['CPU']}</li>
												<li>RAM: {$intim['RAM']} GB</li>
												<li>Pin: {$intim['Pin']} mAh</li>
											</ul>
											<div class="modal_body_right_cart simpleCart_shelfItem">
												<br>
												<a href="?mod=Product&act=ChiTiet&MaSP={$intim['MaSP']}&CT=1" class="btn btn-info" role="button">Chi Tiết Sản Phẩm</a>
												<br>
												<br>
												<p> <i class="item_price">{$gia}</i></p>
												<a type="button" class="btn btn-success"
													href="Controller/Cart/Add.php?id={intim['MaSP']}" onclick="return insertCart({$intim['MaSP']});"	>
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
							
	EOD;							
								echo $chuoi;
							}



						}
						?>

						
						<!-- End 1 SP -->
						<div class="clearfix"> </div>
				

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 