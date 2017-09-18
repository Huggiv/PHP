<?php session_start();?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Karavali Teachers Helpline|Teachers training and placement institute</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<?php
include("includes/head.inc.php");
?>
<!-- header -->
<!-- login -->
	<div class="login-page">
		<div class="container">
			<div class="account_grid">
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h3>NEW CUSTOMERS</h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="employeeregister.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>REGISTERED CUSTOMERS</h3>
					<p>If you have an account with us, please log in.</p>
					<!--<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text"> 
						</div>
						<div>
							<span>Password<label>*</label></span>
							<input type="password"> 
						</div>
						<!--<a class="forgot" href="#">Forgot Your Password?</a>-->
						<!--<input type="submit" value="Login">
						
					</form>-->
					

					<form action="process_login.php" method="POST">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">User Name</label>
						<!--<input type="text" name="usernm" placeholder="Your Email" required class="form-control" /> -->
                        <input type="text" name="unm" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="pwd" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input  type="submit" id="x" value="Login" name="login"  class="btn btn-primary" />
					</div>
				</fieldset>
			</form>








																		

				   <!--	<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>-->
			   </div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- login -->


<!-- footer-top -->
<?php
		include("includes/footer.inc.php");
?>
<!-- footer-bottom -->
<script src="js1/jquery-1.10.2.js"></script>
<script src="js1/bootstrap.min.js"></script>

</body>
</html>