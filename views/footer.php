	<div class="footer">
		<div class="col-md-4 footer-left">
			<h4>Thành viên</h4>
			<div class="run-top">
				<ul class="run-grid">
					<li><a href="product.html">+ UNG THỊ THÙY OANH</a></li>
					<li><a href="product.html">+ TRẦN THỊ CẨM NGA</a></li>
					<li><a href="product.html">+ LÊ VĂN TRÍ</a></li>
					<li><a href="product.html">+ NGUYỄN THANH PHÚC</a></li>
					<li><a href="product.html">+ UNG NHO TIÊN</a></li>
				</ul>
				<ul class="run-grid">
					<li><a href="">16CNTT3</a></li>
					<li><a href="">16CNTT3</a></li>
					<li><a href="">16CNTT3</a></li>
					<li><a href="">16CNTT3</a></li>
					<li><a href="">16CNTT3</a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="col-md-4 footer-left left-footer">
			<h4>THÔNG TIN</h4>
			<div class="run-top top-run">
				<ul class="run-grid">
					<li><a href="#">Giày Nam</a></li>
					<li><a href="#">Giày Nữ</a></li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Giá:Thấp đến Cao</a></li>
					<li><a href="#">Giá:Cao đến Thấp</a></li>
					<li><p style ="color:white;">
							+Liên hệ: 0967 516 036
							<br>
							+Địa chỉ: Trường ĐHSP Đà Nẵng
						</p>
					</li>
				</ul>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="col-md-4 footer-left left-footer">
			<ul class="social-in">
				<li><a href="#"><i> </i></a></li>
				<li><a href="https://www.youtube.com/channel/UCTFkGTkpZXfH8-RmzeF8c9g?view_as=subscriber"><i class="youtube"> </i></a></li>
				<li><a href="https://www.facebook.com/trj.le.52"><i class="facebook"> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
			</ul>
			<div class="letter run-top">
				<h4>Đánh giá </h4>
				<div class="cont-1 " >
					<form>
						<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
						<div class="smt">
							<input type="submit" value="send">
						</div>
					</form>
				</div>
				<p class="footer-class"> © 2018 Shoe All Rights Reserved | Copyright by T-5 </p>
			</div>

		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- end div.footer -->
	
		</div>
		<!-- end div.container-fluid -->
	</div>
	<!-- end div.row -->

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>


		<script type="application/x-javascript"> 
			addEventListener("load", function() { 
				setTimeout(hideURLbar, 0); 
			}, false); 
			function hideURLbar(){
			 	window.scrollTo(0,1); 
			} 
		</script>

	<!-- search-scripts -->
		<script src="../js/classie.js"></script>
		<script src="../js/uisearch.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
	<!-- end search-scripts -->
	<!-- menu nav-script -->
		<script type="text/javascript" src="../js/nav.js"></script>
	<!-- end menu nav-script -->

	<!-- detail script -->
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
	<script>
		$(document).ready(function(){
			$('#addgiohang').click(function() {
				$('#sumGH').text($('#sumGH').text()*1+1);
			});

		});
	</script>
	<!-- end detail script -->
</body>
</html>