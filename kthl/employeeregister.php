
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
<?php
include("includes/head.inc.php");
?>


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
		  	  <form id="register_form"  method="post"  enctype="multipart/form-data">
		  	   <div class="register-top-grid">
		  	    <h3>PERSONAL INFORMATION</h3>
		  	     <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">User Name</label>
							 <br> <input type="text" name="nm" size="30" placeholder="User Name" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Password</label>
						<br> <input type="Password" name="pwd" size="30" placeholder="Password" required class="form-control">
							 <span class="text-danger"></span>
				 </div>

				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Gender</label>
							 <br> <SELECT name="cat" required class="form-control">	
                                        <option value="volvo">Male</option>
                                        <option value="saab">Female</option>
                                    </select> 
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">E-mail</label>
							 <br> <input type="text" name="email" size="30" placeholder="E-mail" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Address</label>
							 <br> <input type="text" name="addr" size="30" placeholder="Address" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Phone Number</label>
						<br> <input type="text" name="ph" size="30" placeholder="Phone Number" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Mobile Number</label>
					<br> <input type="text" name="mobile" size="30" placeholder="Mobile Number" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Current location</label>
						<br> <input type="text" name="cl" size="30" placeholder="Current location" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">DOB</label>
					<br> <input id="date" type="date" size="30" placeholder="Date of Birth " required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Currently Working</label>
			    <br> <input type="text" name="cindustry" size="30" placeholder="Currently Working Orgnization" required class="form-control">
							 <span class="text-danger"></span>
				 </div>


				 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Expected Salary(Monthly)</label>
					<br> <input type="text" name="cas" size="30" placeholder="Expected Salary " required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Marital Status</label>
			   <!-- <br> <input type="text" name="marry" size="30" placeholder="Married/Unmarried" required class="form-control">-->
				<br><SELECT name="cat" required class="form-control">	
                                        <option value="volvo">Married</option>
                                        <option value="saab">Unmarried</option>
                                    </select>   
                                                
                                                <span class="text-danger"></span>
				 </div>



				  <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<label for="name">Qualification</label>
					<br> <input type="text" name="quali" size="30" placeholder="M. Sc, B. Ed" required class="form-control">
							 <span class="text-danger"></span>
				 </div>
				 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<label for="name">Cast</label>
			   <br> 
                                    <SELECT name="cat" required class="form-control">	
                                        <option value="volvo">SC</option>
                                        <option value="saab">ST</option>
                                        <option value="saab">Cat-1</option>
                                        <option value="saab">2A</option>
                                        <option value="saab">2B</option>
                                        <option value="saab">3A</option>
                                        <option value="saab">3B</option>
                                        <option value="saab">General</option>
                                        
                                    </select> 
                           
							 <span class="text-danger"></span>
				 </div>

				 <br><br>RESUME(.docx & PDF)<br><input type="file" name="resume" style="width:200px;">
				 
				
				<p><input type="checkbox" required name="terms"> I accept the Terms and Conditions</p>
					<p><input type="submit"></p>
			
					
				 
							
				</div>
			</form>
				<span class="text-success"></span>
			<span class="text-danger"></span>



		   </div>
		 </div>
		 

	</div>
<!-- registration -->





<!-- footer-top -->


<?php
		include("includes/footer.inc.php");
?>
<!-- footer-bottom -->
</body>
</html>