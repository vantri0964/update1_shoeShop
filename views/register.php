<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<?php include('head.php');?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<!--start header -->
			<?php include('header.php') ?>
			<!-- end header -->

			<!-- start content -->
			<div class="container">
				<div class="register">
					<h2>REGISTER</h2>		
					<div class=" register-top">
						<form>
							<div> 	
								<span>Full Name</span>
								<input type="text" required=""> 
							</div>
							<div> 	
								<span>User Name</span>
								<input type="text" required=""> 
							</div>
							<div> 
								<span >Password</span>
								<input type="password" required="">
							</div>
							<div> 
								<span >Confirt Password</span>
								<input type="password" required="">
							</div>
							<div> 	
								<span>Adress</span>
								<input type="text" required=""> 
							</div>	
							<div> 	
								<span>Email</span>
								<input type="text" required=""> 
							</div>

							<input type="submit" value="Submit"> 
						</form>
					</div>		
				</div>
			</div>
			<!-- end content -->

			<!--start footer-->
			<?php include('footer.php') ?>
			<!--end footer-->

		</div>	
	</div>
</body>
</html>