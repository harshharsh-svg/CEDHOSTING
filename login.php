<?php
require_once "userclass.php";
require_once "dbclass.php";
	if (isset($_SESSION['admin'])){
		header('location: admin/index.php');
	}
	$error="";

	if (isset($_POST['submit'])) {
		$user =new tbluser();
		$email=$_POST['email'];
		$password=$_POST['password'];
		$email=trim($email);
		$password=md5(trim($password)); 
		$error=$password;
		$data=$user->userLogin($email, $password);
		if ($data==false) {
			$error="Email or Password dosen't match";
		} else {
			
			header('Location:admin/index.php');
		}
	
	}

?>
	<!---header--->
		<?php
			include 'header.php';
		?>
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form metho="POST" action="">
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" id="email" name="email"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" id="password" name="password"> 
									  </div>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="submit" name="submit">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<!---footer--->
				<?php

		include 'footer.php';
	?>
			<!---footer--->
</body>
</html>