<!DOCTYPE html>
<html>
<head>
	<title>More detail</title>

	<?php include('head.php');?>

	<link rel="stylesheet" href="../css/etalage.css">
	<script src="../js/jquery.etalage.min.js"></script>
	<script>
		jQuery(document).ready(function($){

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});

		});
	</script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<!--header-->
			<?php include('header.php') ?>
			<!--end header-->
			
			<!-- start content -->
			<div class="container single">
				<div class="col-md-12 top-in-single">
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
								<a href="">
									<img class="etalage_source_image img-responsive" src="../images/s2.jpg" alt="" >
								</a>
							</li>
						</ul>

					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
							<div class="star">
								<ul>
									<li><i> </i></li>
									<li><i> </i></li>
									<li><i> </i></li>
									<li><i> </i></li>
									<li><i> </i></li>
								</ul>
								<div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div>
								<div class="clearfix"> </div>
							</div>

							<label  class="add-to">$32.8</label>

							<div class="available">
								<h6>Available Options :</h6>
								<ul>

									<li>Size:<select>
										<option>Large</option>
										<option>Medium</option>
										<option>small</option>
										<option>Large</option>
										<option>small</option>
									</select></li>
									<li>Cost:
										<select>
											<option>U.S.Dollar</option>
											<option>Euro</option>
										</select></li>
									</ul>
								</div>

								<a href="#" class="cart ">More details</a>

							</div>
						</div>
						<div class="clearfix"> </div>
						<div class="product-top">

							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- end content -->

				<!--footer-->
				<?php include('footer.php') ?>
				<!--end footer-->

			</div>
		</div>
	</body>
	</html>