	<!--header-->
		<?php include('header.php') ?>
	<!--end header-->
	

<?php
	include_once '../controller/c_detail.php';
	$detail = new controller_class_detail();
	$result=$detail->detail();
?>
		
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
				