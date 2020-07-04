
	<header id="header" ><!--header-->
		<div class="header_top" ><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="tel:0949209394"><i class="fa fa-phone"></i> 0949209394 </a></li>
								<li><a href="mailto:demon.bmt@gmail.com"><i class="fa fa-envelope"></i> demon.bmt@gmail.com </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
							<?php
								if(isset($_SESSION['user']))
								{
								echo"
								<li><a href=\"https://www.facebook.com/Official.Account.NCQ\"><i class=\"fa fa-user\"></i>Xin Chào {$_SESSION['hoten']}</a></li>
								<li><a href=\"index.php?mod=User&act=logout\"><i class=\"fa fa-lock\"></i>Đăng Xuất</a></li>";
								}
								else 								
									echo"	<li><a href=\"login.php?mod=Login\"><i class=\"fa fa-lock\"></i> Login</a></li>";
								?>
							
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		

<div class="header" id="home1">
		<div class="container">

			<div class="w3l_login">
			<?php
				if(isset($_SESSION['user']))
				{
					echo "<a href=\"#\" data-toggle=\"modal\" id =\"infone\" data-target=\"#myModal88\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></a>
					</div>";
				}
				else 
				{
					echo "
					<a href=\"login.php?mod=Login\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span></a>
					</div>
					";
				}
			?>
			
			<div class="w3l_logo">
				<h1><a href="index.php">Mobile - Store <span>BuonMaThuot. City.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="index.php?mod=Product&act=Search" method="post">
						<input type="text" name="txtsearch" id="txtsearch" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>

			

			<div class="cart cart box_1" "> 
				<form lass="last">
					
					<a class="w3view-cart"  <?php
					if(isset($_SESSION['user']))
					{
						echo "href=\"index.php?mod=Cart&act=Detail&CT=1";
					}
					else
						echo "onclick=\"alert('Phải Đăng Nhập Trước Khi Vào Giỏ Hàng')";
					?>"><i style = "margin-top: 5px; margin-right: 8px" class="fa fa-cart-arrow-down"></i>

					<span id="soluong" >
						
						<?php
							if(isset($_SESSION['MyCart'])){
								echo "<span class=\"product-count\" id=\"sl\">".count($_SESSION["MyCart"])."</span></a>";
							}
							else{
								echo "<span class=\"product-count\" id=\"sl\">"."0"."</span></a>";
							}
						?>
					
						</span>

					</a>
					
				</form>   
			</div>  
		</div>
	</div>
	<style>
		
	#soluong{
		position: fixed;
		margin-top :8px;
		margin-right :800px;
		/* border:2px solid red; */
		background-color:black;
		color: #fff;
		border-radius: 25% 10%;
	}
	
	</style>