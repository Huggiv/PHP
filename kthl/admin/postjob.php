
<!--
Developer: Mahesh Tambat
URL: http://prologsolution.com
-->

<?php session_start(); ?>


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
<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
        <?php
			if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}

			if(isset($_GET['ok']))
			{
				echo '<font color="blue">You are successfully Registered..</font>';
				echo '<br><br>';
			}

	    ?>
		  	  <form action="process_postjob.php" method="post">
		  	   <div class="register-top-grid">
		  	    <h3>POST JOB</h3>
		  	     <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Designation</label>
							<br> <input type="text" name="title" size="30" placeholder="User Name" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">CATEGORIES</label>
						<br> 
							<SELECT name="cat" required class="form-control">
							<?php

						$link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");

                        mysqli_select_db($link,"riddhi") or die("can not select database");

						$q="select * from categories";

						$res=mysqli_query($link,$q) or die('wrong query');

						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
						</SELECT>


							 <span class="text-danger"></span>
				 </div>

				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Experience</label>
							 <br> <input type="text" name="experience" size="30" placeholder="Male/Female" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Salary</label>
							 <br> <input type="text" name="salary" size="30" placeholder="E-mail" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Description</label>
							 <br> <input type="text" name="disc" size="30" placeholder="Address" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">City</label>
						<br> <input type="text" name="city" size="30" placeholder="Phone Number" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 
					<left><br> <input type="submit" value="submit"></left>

				 
	           
							
				</div>
			</form>
				<span class="text-success"></span>
			<span class="text-danger"></span>



		   </div>
		 </div>
		 

	</div>
<!-- registration -->

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
</body>
</html>