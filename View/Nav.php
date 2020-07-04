<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">

						<li><a href="index.php" >Home</a></li>	
						<!-- Mega Menu -->

<!-- NAV Product -->

						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
								
								
								

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
											echo "
											<div class=\"col-sm-3\">
												<ul class=\"multi-column-dropdown\">
													<h6>".$tenloai."</h6>";

											foreach($rs1 as $r1)
											{
														$tennsx=$r1["TenNSX"];$mansx=$r1["MaNSX"];
														echo "<li><a href=\"index.php?mod=Product&act=DanhSach&MaNSX=$r1[MaNSX]&MaLoai=$maloai&Banner=0\">".$tennsx."</a></li>";
														
													
											}
											echo "		</ul>
														</div>
													";
										}
										

									?>



								
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<h6>Sreach Products</h6>
											<li><a href="index.php?IsPageSearch=1">Page Search</a></li>
											<li><a href="index.php?mod=Product&act=AdvanceSearch&Banner=0">Search Advanced</a></li>
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>


<!-- End NAV Product -->

						<li><a href="index.php?About=1">About Us</a></li> 
						<li><a href="https://www.facebook.com/M-Store-109005160570945">My Fanpage</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>