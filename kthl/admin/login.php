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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Muster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />		
</head>
<body>
<!-- header -->
	<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="head-left">
						<ul class="number">
							<li><span><i class="phone"> </i>+91-9743278480</span></li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@kthl.com</a></li>	
								<div class="clearfix"> </div>						
						</ul>
					</div>
					<div class="head-right">
						<ul>
							<li><a href="#"><i class="fb"> </i></a></li>
							<li><a href="#"><i class="twt"> </i></a></li>	
							<li><a href="#"><i class="ttt"> </i></a></li>	
							<li><a href="#"><i class="ve"> </i></a></li>	
							<li><a href="#"><i class="in"> </i></a></li>	
							<li><a href="#"><i class="dib"> </i></a></li>	
							<li><a href="#"><i class="fli"> </i></a></li>	
							<li><a href="#"><i class="rss"> </i></a></li>	
							<div class="clearfix"> </div>						
						</ul>
					</div>
						<div class="clearfix"> </div>	
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="logo">
						<a href="index.php"><img src="images/kthllogo.png" class="img-responsive" alt="KTHL"></a>
					</div>
					<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-3">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href=" about.php">About us</a></li>
								<li><a href=" Services.php">Services</a></li>
								<li><a href=" 404.php">Job Seekers </a></li>
								<li><a href=" blog.php">Blog</a></li>
								<li><a href=" contact.php">Contact</a></li>
									<div class="clearfix"> </div>
									
							</ul>
								<!-- script-for-nav -->
							<script>
								$( "span.menu" ).click(function() {
								  $( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								  });
								});
							</script>
						<!-- script-for-nav --> 
					</div>
					<div class="header-right1">
					    <?php
					if(isset($_SESSION['status']))
					{

						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="login.php">login</a></li>';
					}
			        ?>
					   <!--	<li><a href="login.php">Login</a></li>  -->
						<!--<li><a href="register.html">Sign in </a></li>-->
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
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
<div class="footer-top">
	<div class="container">
		<div class="col-md-4 foo-left">
			<a href="index.php"><img src="images/kthllogo.png" class="img-responsive" alt=""></a>
			<p>Karavali Teacher Helpline with a social concern aims to provide jobs for the meritorious teachers at various private educational institutions thus protecting the interests and future of the education standards in private  educational institutions by connecting the best teachers to the best institutions based on their skills.
</p>
		</div>
		<div class="col-md-4 foo-left">
			<h3>Address</h3>
			<h6>No-23,Soudagar Building</h6>
			<p>Bandemma Temple Road</p>
			<p>Gandhinagar</p>
			<h6>Dharwad</h6>
			<p>info@kthl.com</p>
			
		</div>
		<div class="col-md-4 foo-left">
			<h3>Useful lnks</h3>
				<ul>
					<li class="active"><a href="about.html">About Us</a></li>
					<li><a href="#">Services </a></li>
					<li><a href="#">Work </a></li>
					<li><a href="blog.html">Our Blog</a></li>
					<li><a href=" 404.html">Customers Testimonials</a></li>
					<li><a href="#">Affliate</a></li>
					<li><a href=" contact.html">Contact Us</a></li>
						<div class="clearfix"> </div>		
				</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- footer-top -->
<!-- footer-bottom -->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyrights © 2017 KTHL all rights reserved |Designed by <a href="http://web.prologsolution.com/">&nbsp; Prolog Web</a></p>
		</div>
	</div>
<!-- footer-bottom -->
<script src="js1/jquery-1.10.2.js"></script>
<script src="js1/bootstrap.min.js"></script>

</body>
</html>