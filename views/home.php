
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<?php include('head.php'); ?>
	
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
	
	
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
</head>
<body> 
	<?php
	include('../controller/c_loadAndPaging.php');
	$loadAndPaging=new controller_class_load();
	$result=$loadAndPaging->product();
	?>
	<div class="container-fluid">
		<div class="row">
			
			<!--header-->
			<?php include('header.php') ?>
			<!--end header-->

			<!-- start content -->
			<div class="banner">
				
				<div class="banner-matter">

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="../images/banner.jpg" alt="Chania">
								<div class="carousel-caption">
									<h3>Los Angeles</h3>
									<p>LA is always so much fun!</p>
								</div>
							</div>

							<div class="item">
								<img src="../images/banner.jpg" alt="Chicago">
								<div class="carousel-caption">
									<h3>Chicago</h3>
									<p>Thank you, Chicago!</p>
								</div>
							</div>

							<div class="item">
								<img src="../images/banner.jpg" alt="New York">
								<div class="carousel-caption">
									<h3>New York</h3>
									<p>We love the Big Apple!</p>
								</div>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>


				</div>	
				
			</div>
			<!---->
			<div class="content">

				<div class="col-md-12" id="title-product">
					<h2 align="center"><b>Product</b></h2>

				</div>

				<!--//sreen-gallery-cursual---->
				<div class="content-grids">

					<div class="product-top">
						<!-- start-product -->
						<div class="col-md-8" id="content-8">
							<!-- vòng for hiển thị data -->
							<?php
							foreach ($result as $row) {

								?>
								<div class="col-md-6 grid-product-in">	
									<div class=" product-grid">	
										<a <?php echo "href=detail.php?id=".$row['id'] ?> ><img class="img-responsive " <?php echo "src=../images/".$row['img']?>  alt=""></a>		
										<div class="shoe-in">
											<h6><a <?php echo "href=detail.php?id=".$row['id'] ?> ><?php echo $row['name'] ?> </a></h6>
											<label><?php echo $row['cost'] ?><sup>đ</sup></label>
											<a <?php echo "href=detail.php?id=".$row['id'] ?>  class="store btn btn-danger"><span class="glyphicon glyphicon-tasks"></span> MORE DETAILS</a>
										</div>

										<b class="plus-on">+</b>
									</div>	
								</div>
								<?php
							}
							?>
							<!-- start botton phan trang -->
							<div class="col-md-12">
								<div class="col-md-9 col-md-offset-3">
									<ul class="pagination" >							

								<?php
								$current_page=$loadAndPaging-> current_page;
								$total_page=$loadAndPaging-> total_page;
								
								if($current_page > 1 && $total_page > 1)
									echo '<li><a href="/shoeShop/views/home.php?page='.($current_page-1).'.">&laquo;</a></li>';
								for( $i=1; $i<= $total_page;$i++){
									if($i== $current_page){
										echo '<li><a style="background-color:red;" href="/shoeShop/views/home.php?page='.$i.'">'.$i.'</a></li>';
									}else{
										echo '<li><a href="/shoeShop/views/home.php?page='.$i.'">'.$i.'</a></li>';
									}
								}
								if($current_page < $total_page && $total_page >1){
									echo '<li><a href="/shoeShop/views/home.php?page='.($current_page+1).'">&raquo;</a></li>';
								}
								?>
							</ul>
								</div>
								
							</div>
							<!-- end botton phan trang  -->

						</div>
						<!-- end product -->
						<div class="col-md-3 col-md-offset-1">


							<section  class="sky-form">
								<div class="sellers">
									<h3 class="m_2" >Special Offers</h3>
									<section class="slider">
										<div class="flexslider">
											<ul class="slides">
												<li>
													<div class="tittle">
														<img src="../images/si1.jpg" class="img-responsive" alt="" height="150px"  />
														<h6>Item Title Here</h6>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<a class="show1" href="#">SHOW ME MORE</a>
													</div>
												</li>
												<li>
													<div class="tittle">
														<img src="../images/si2.jpg" class="img-responsive" alt=""/>
														<h6>Item Title Here</h6>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<a class="show1" href="#">SHOW ME MORE</a>
													</div>
												</li>
												<li>	
													<div class="tittle">
														<img src="../images/si1.jpg" class="img-responsive" alt=""/>
														<h6>Item Title Here</h6>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<a class="show1" href="#">SHOW ME MORE</a>
													</div>
												</li>
												<li>	
													<div class="tittle">
														<img src="../images/si3.jpg" class="img-responsive" alt=""/>
														<h6>Item Title Here</h6>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<p>Lorem ipsum dolor sit amet,</p>
														<a class="show1" href="#">SHOW ME MORE</a>
													</div>
												</li>
											</ul>
										</div>
									</section>

									<!-- FlexSlider -->
									<script defer src="../js/jquery.flexslider.js"></script>
									<script type="text/javascript">
										$(function(){
											SyntaxHighlighter.all();
										});
										$(window).load(function(){
											$('.flexslider').flexslider({
												animation: "slide",
												start: function(slider){
													$('body').removeClass('loading');
												}
											});
										});
									</script>
									<!-- FlexSlider -->

								</div>
							</section>

						</div>

						<div class="clearfix"> </div>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<!--end contetn-->


			</div>	
			<!--footer-->
			<?php include('footer.php') ?>
			<!-- end footer -->

		</div>
	</div>
</body>
</html>