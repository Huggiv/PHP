<?php session_start();


//$link=mysqli_connect("localhost","mahesharavind","Aravind@007","kthl")or die("can not connect");
//$link=mysqli_connect("localhost","root","","kthl")or die("can not connect");

//mysqli_select_db($link,"kthl") or die("can not select database");
	require('includes/config.php');    

	$q = "select * from jobs where j_category ='".$_GET['cat']."' and j_active=1";

	$res = mysqli_query($link,$q) or die("Wrong Query");



?>

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

				<div id="content">
				<div class="post">

					<h2 class="title"><?php echo $_GET['cat']; ?></h2>
					<p class="meta"></p>
					<div class="entry">
					<ul>
					<?php
						while($row = mysqli_fetch_assoc($res))
						{

							echo '
										<li>
										<a href="job_details.php?id='.$row['j_id'].'">'.$row['j_title'].'</a>
								';
						}

					?>
					</ul>
					</div>
				</div>

			</div>
			<!-- end #content -->
		<!--	<div id="sidebar">
			<?php
		//include("includes/sidebar.inc.php");
		?>
			</div>-->


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