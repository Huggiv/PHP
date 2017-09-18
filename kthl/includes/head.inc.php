
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="karavali teachers helpline, karavaliteachershelpline.com, karavaliteachershelpline.co.in Dharwad Hubli Bengaluru Bangalore" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
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
							<li><a href="mailto:info@kthl.co.in"><i class="mail"> </i>info@kthl.co.in</a></li>	
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
								<?php
					if(isset($_SESSION['status']))
					{

						echo '<li><a href=" jobs.php">Jobs </a></li>';
						
					}
					else
					{
						echo '<li><li><a href=" employeeregister.php">Register</a></li>';
						
					}
			        ?>
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

                                               
						echo '<li>'.$_SESSION['unm'].'<a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="login.php">login</a></li>';
					}
			        ?>
					   <!--	<li><a href="login.php">Login</a></li>  -->

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
