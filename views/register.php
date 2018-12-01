<!--start header -->
	<?php include('header.php'); ?>
<!-- end header -->

		<!-- start content -->
			<div class="container">
				<div class="register">
					<h2>Đăng ký</h2>		
					<div class="register-top">
						<form>
							<div> 	
								<span>Tài khoản: (*)</span>
								<input type="text" name="username" required="" maxlength="50"> 
							</div>
							<div> 	
								<span>Họ tên: (*)</span>
								<input type="text" name="name" required="" maxlength="50"> 
							</div>
							<div> 	
								<span>Email: (*)</span>
								<input type="email" name="email" required="" maxlength="100"> 
							</div>
							<div> 	
								<span>Địa chỉ: </span>
								<textarea name="address" maxlength="200"></textarea>
							</div>
							<div> 	
								<span>Giới tính: </span>
								<span>
									<label for="Male">Nam
									<input type="radio" name="sex" id="Male" class="" value="Nam" autocomplete="off"></label>
									<label for="Female">Nữ
									<input type="radio"  name="sex" id="Female" class="" value="Nữ"  autocomplete="off"></label></span>
							</div>
							<div> 	
								<span>Ngày sinh: </span>
								<input type="date" name="birthday" id="birthday" min="1920-01-01" max="2018-01-01">
							</div>
							<div> 
								<span >Mật khẩu: (*)</span>
								<input type="password" required="" maxlength="100">
							</div>
							<div> 
								<span >Nhập lại mật khẩu: (*)</span>
								<input type="password" required="" maxlength="100">
							</div>
							<input type="submit" value="Đăng ký"> 
						</form>
					</div>		
				</div>
			</div>
		<!-- end content -->

<!--start footer-->
	<?php include('footer.php') ?>
<!--end footer-->
