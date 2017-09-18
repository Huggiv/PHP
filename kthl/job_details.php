<?php session_start();


  // $link=mysqli_connect("localhost","mahesharavind","Aravind@007","kthl")or die("can not connect");

//mysqli_select_db($link,"kthl") or die("can not select database");
	require('includes/config.php');    

	$q = "select * from jobs where j_id =".$_GET['id'];

	$res = mysqli_query($link,$q) or die("Wrong Query");

	$row = mysqli_fetch_assoc($res);
	
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
					
					<h2 class="title"><center><?php echo $row['j_title']; ?></center></a></h2>
					<p class="meta"></p>
					<div class="entry">
						<table width="100%" border="0">
							
						<?php
						
						echo '<tr><td width="30%"><b>Category:</b><br><td>'.$row['j_category'].'</td></tr>
								<tr><td><b>Salary:</b></td><td>'.$row['j_salary'].'</td></tr>
								<tr><td><b>Hours:</b></td><td>'.$row['j_hours'].'</td></tr>
								<tr><td><b>Experience:</b></td><td>'.$row['j_experience'].'</td></tr>
								<tr><td><b>City:</b></td><td>'.$row['j_city'].'</td></tr>
								<tr><td><b>Description:</b></td><td>'.$row['j_discription'].'</tr>
								';
						
						?>
						<br>
						<br>
					
		<?php
	
				if(isset($_SESSION['status']) || $_SESSION['cat']=="employee")
				{
					echo'<tr><td colspan="2"><center><a href="process_apply.php?jid='.$row['j_id'].'"> Apply </center></td></tr></a>';
				}
	
		?>
								
							
					
						</table>
					
					
						
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<!--<div id="sidebar">
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