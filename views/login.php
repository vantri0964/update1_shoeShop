
<!--start header -->
	<?php include('header.php'); ?>
<!-- end header -->

<?php

	if(isset($_SESSION['namedn'])){
		header('location:home.php');
	}
	include_once('../controller/c_user.php');

	$userNameErr = null;
	$passErr = null;

	if(($_SERVER['REQUEST_METHOD'] == 'POST')){
			//get text
		$userName = $_POST['username'];
		$pass = $_POST['password'];

		$c_login = new C_User();
		$errArr = $c_login->loginUser($userName, $pass);

		if($errArr == null){
			header('location:home.php');
		}else{
			$userNameErr = $errArr['userNameErr'];
			$passErr = $errArr['passErr'];
		}
	}
 ?>
			<!--start content -->
			<div class="container">
				<div class="account">
					<h2>Account</h2>
					<div class="account-pass">
						<div class="col-md-7 account-top">
							<form action="" method="POST">
								<div> 	
									<span>Tài khoản: (*) </span>
									<input type="text" name="username" placeholder="Nhập tài khoản" required/> 
									<?php if($userNameErr){?>
										<span class='text-danger'><?=$userNameErr?></span> 
									<?php 
										}
									 ?>
								</div>
								<div> 
									<span>Mật khẩu: (*)</span>
									<input type="password" name="password" placeholder="Nhập mật khẩu" required/>
									<?php if($passErr){ ?>
										<span class='text-danger'><?=$passErr?></span> 
									<?php 
										}
									 ?>
								</div>				
								<input type="submit" value="Đăng Nhập">
								<input type="reset" value="Reset"> 
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

