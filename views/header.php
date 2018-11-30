<?php 
	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	
	<!-- font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

	<!-- css detail -->
		<link rel="stylesheet" href="../css/etalage.css">

	<!-- css home -->
	<style type="text/css" media="screen">
		#title-product{
			border-bottom: 5px double #d2232a;
		}
		#content-8{
			border-right: 2px solid  #d2232a;
		}
		.jumbotron1{
			background:white;
			width: 400px;
		}
		.jumbotron img{
			padding: 0px;
		}
		.jumbotron #jum1{
			padding:3px 0px;
		}
	</style>
	<!-- end css home -->
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<!-- điều hướng -->
		<div class="line">

		</div>

		<div class="header">
			<div class="logo">
				<a href="home.php"><img src="../images/logo.png" alt="" class="img-circle" height="100px" width="150px"></a>
			</div>
			<div  class="header-top">

				<div class="header-grid">

					<!-- account -->
					<ul class="header-in">
						<?php 
							if(isset($_SESSION['name']))
							{
								?>
									<li><a href='#'><?= $_SESSION['name']?></li>
									<li><a href='logout.php'>Đăng xuất</a></li>
								<?php 
							}else{
								?>
									<li><a href='login.php'>Đăng nhập</a></li>
									<li><a href='register.php'>Đăng ký</a></li>
								<?php
							}
						?>			
					</ul>
					<!-- end account -->

					<!-- search -->

					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
					<!-- end search -->

					<div class="online">
							<a href="home.php">Sản phẩm</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- end div.header-grid -->
				<div class="header-bottom">
					<div class="h_menu4">

						<a class="toggleMenu" href="#">Menu</a>

						<ul class="nav">
							<li class="active"><a href="product.html">Giày Nam <i></i></a>
									<ul>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
									</ul>
							</li>
							<li><a href="home.php">Giày Nữ <i></i></a>
								<ul>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
									</ul>
							</li>		
							<li><a href="abouts.php">Giới thiệu</a>	
							</li>
							<li><a href="product.html">Báo giá <i> </i></a>
								<ul>
									<li><a href="contact.html">Thấp đến cao</a></li>
									<li><a href="account.html">Cao đến thấp</a></li>

								</ul>
							</li>

						</ul>
					</div>
					<!-- end div.h_menu4 -->
					<!-- cart -->
					<div class="col-md-2 col-md-offset-3 h_menu4">
						<ul class="nav">
							<li><a href="checkout.php" title=""><span class="glyphicon glyphicon-shopping-cart"></span > Giỏ hàng <span id="sumGH">0</span></a></li>
						</ul>
					</div>
					<!-- end cart -->
					<div class="clearfix"> </div>
				</div> 
				<!-- end div.header-bottom -->
			</div>
			<!-- end div.header-top -->
			<div class="clearfix"> </div>
		</div> 
		<!-- end div.header -->