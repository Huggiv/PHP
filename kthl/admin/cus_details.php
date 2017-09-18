<?php session_start();


   $link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");

mysqli_select_db($link,"riddhi") or die("can not select database");
   $count=10;

	//$q = "select * from employees where ee_id =".$_GET['id'];
	$q = "select * from employees ";
	$q1 = "select count(*) from employees ";


	$res = mysqli_query($link,$q) or die("Wrong Query");

	//$row = mysqli_fetch_assoc($res);
	

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <!--<?php
//include("includes/head.inc.php");
//?>-->
</head>
<body>
<!--<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		//include("includes/menu.inc.php");
		?>
		</div>
		end #menu -->
		<!--<div id="search">
		//<?php
		
		//include("includes/search.inc.php");
		//?>
		//</div>
		end #search -->
	<!--</div>
</div>-->
<!-- end #header -->
<!-- end #header-wrapper -->

<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					
					<p class="meta"></p>
					<div class="entry">
						<table width="100%" border="0">
							
						<?php
						$row=mysqli_fetch_assoc($res);
					for($i=0;$i<7;$i++)
					{
						if($row)
						{
							$count++;
						echo '<tr><td width="30%"><b>Name:</b><br><td>'.$row['ee_fnm'].'</td></tr>
								<tr><td><b>Gender:</b></td><td>'.$row['ee_gender'].'</td></tr>
								<tr><td><b>Mail:</b></td><td>'.$row['ee_email'].'</td></tr>
								<tr><td><b>Address:</b></td><td>'.$row['ee_add'].'</td></tr>
								<tr><td><b>Phone:</b></td><td>'.$row['ee_phno'].'</td></tr>
								<tr><td><b>Mobile:</b></td><td>'.$row['ee_mobileno'].'</tr>
								<tr><td><b>Curret Location:</b></td><td>'.$row['ee_current_location'].'</tr>
								<tr><td><b>Salary:</b></td><td>'.$row['ee_annualsalary'].'</tr>
								<tr><td><b>Current School:</b></td><td>'.$row['ee_current_industry'].'</tr>
								<tr><td><b>Qualification:</b></td><td>'.$row['ee_qualification'].'</tr>
								<tr><td><b>Designation:</b></td><td>'.$row['ee_profile'].'</tr>
								<tr><td><b>Resume:</b></td><td>'.$row['ee_resume'].'</tr>
								';
						}
						else
							echo "no data found";
						
}
						?>

						<br>
						<br>
					
	<!--	<?php
	
				//if(isset($_SESSION['status']) && $_SESSION['cat']=="employee")
				{
				//	echo'<tr><td colspan="2"><center><a href="process_apply.php?jid='.$row['j_id'].'"> Apply </center></td></tr></a>';
				}
	
		?>-->
								
							
					
						</table>
					
					
						
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
