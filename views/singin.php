
<!--start header -->
	<?php include('header.php'); ?>
<!-- end header -->

			<!--start content -->
			<div class="container">
				<div class="account">
					<h2>Account</h2>
					<div class="account-pass">
						<div class="col-md-7 account-top">
							<form action="../controller/c_login.php" method="POST">
								<div> 	
									<span>Tài khoản: (*) </span>
									<input type="text" name="username" placeholder="Nhập tài khoản" required/> 
									<?php 
									if(isset($userNameErr))
										echo "<span class='text-danger'>".$userNameErr."</span>"; 
									?>
								</div>
								<div> 
									<span>Mật khẩu: (*)</span>
									<input type="password" name="password" placeholder="Nhập mật khẩu" required/>
									<?php 
									if(isset($passErr)) 
										echo "<span class='text-danger'>".$passErr."</span>"; 
									?>
								</div>				
								<input type="submit" value="Đăng Nhập"> 
							</form>
						</div>
						<div class="col-md-5 left-account ">
							<a href="detail.php"><img class="img-responsive " src="../images/ac.png" alt=""></a>
							<div class="five">
								<h1>25% </h1><span>discount</span>
							</div>
							<a href="register.php" class="create">Create an account</a>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

			</div>
			<!--end content-->

<!-- start footer-->
	<?php include('footer.php'); ?>
<!--end footer-->

