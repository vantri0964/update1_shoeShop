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
	<?php
	include_once '../controller/controller_shop.php';
	$controller = new controller_class();
	$result=$controller->detail();
	?>
	<div class="container-fluid">
		<div class="row">

			<!--header-->
			<?php include('header.php') ?>
			<!--end header-->
			
			<!-- start content -->
			<div class="container single">
				<?php
				foreach ($result as $row) {

					?>
					<div class="col-md-12 top-in-single">
						<div class="col-md-5 single-top">	
							<ul id="etalage">
								<li>
									<a href="">
										<img class="etalage_source_image img-responsive" <?php echo "src=../images/".$row['img'] ?> alt="" >
									</a>
								</li>
							</ul>

						</div>	
						<div class="col-md-7 single-top-in">
							<div class="single-para">
								<h4><?php echo $row['name'] ?></h4>
								<p><?php echo $row['describes'] ?></p>
								<div class="star">
									<ul>
										<li><i> </i></li>
										<li><i> </i></li>
										<li><i> </i></li>
										<li><i> </i></li>
										<li><i> </i></li>
									</ul>
									<!-- <div class="review">
										<a href="#"> 3 reviews </a>/
										<a href="#">  Write a review</a>
									</div> -->
									<div class="clearfix"> </div>
								</div>

								<label  class="add-to"><?php echo $row['cost'] ?><sup>đ</sup></label>

								<div class="available">
									<h6>Available Options :</h6>
									<ul>

										<li>Size:<select>
											<option>large</option>
											<option>Medium</option>
											<option>small</option>
										</select></li>
										<li>color:
											<select>
												<option>white</option>
												<option>black</option>
												<option>blue</option>

											</select></li>
										</ul>
									</div>
									<div>
										<a href="#" class="cart " style="display:inline;" id="addgiohang">Thêm vào giỏ hàng</a>
										<a <?php echo "href=checkout.php?id=".$row['id'] ?> style="background-color: green;display: inline;" class="cart ">Mua hàng</a>
									</div>
								</div>

							</div>

							<div class="clearfix"> </div>
							<div class="product-top">

								<div class="clearfix"> </div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<!-- end content -->

				<!--footer-->
				<?php include('footer.php') ?>
				<!--end footer-->
				<script>
					$(document).ready(function(){
						$('#addgiohang').click(function() {
							$('#sumGH').text($('#sumGH').text()*1+1);
						});

					});
				</script>
			</div>
		</div>
	</body>
	</html>