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

<!-- banner -->
	<div class="banner">
		<div class="container">
					<!-- banner Slider starts Here -->
						<script src="js/responsiveslides.min.js"></script>
								<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
					  </script>
					<!--//End-slider-script-->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="banner-info">
								<h1>Karavali Teachers Helpline</h1>
								<p>Job Searching Just Got So Easy</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h1>Training</h1>
								<p>Training is everything. The peach was once a bitter almond; cauliflower is nothing but cabbage with a college education</p>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h1>Placement</h1>
								<p>The Teacher is one who makes two ideas grow here only one grew before</p>
							</div>
						</li>
					 </ul>
			    </div>
			    <div class="clearfix"> </div>
	  			<!-- banner Slider Ends Here --> 
		</div>
	</div>
<!-- banner -->	
<!-- our -->
	<div class="our">
		<div class="container">
			<h5>our process</h5>
			<h2>How We Work for you?</h2>
			<p>Karavali Teachers Helpline is a stage, which endeavours in providing job opportunities for the meritorious NTC, D.Ed. B.Ed., M.Ed. and other graduates of various districts of Karnataka.</p>
			<div class="our-top">
				<div class="col-md-4 our-left">
					<i class="best"></i>
					<h3>Training</h3>	
					<p>We conduct 3 months of training where various methodlogies to be used, We provide excellent coaching for all the subjects to clear the Govt Teachers exams.</p>
				</div>
				<div class="col-md-4 our-left">
					<i class="resu"></i>
					<h3>Searching for the best job</h3>	
					<p>Training for Music,Dance,Abacus,Art and Craft,Yoga,Karate and Drama and we also provide Sports teachers who are well Trained (CPEd and BPEd)</p>
				</div>
				<div class="col-md-4 our-left">
					<i class="interv"></i>
					<h3>Placement</h3>	
					<p>We provide the 100% placements for all the Teachers to get in reputed schools, Providing School Resources like Principal,HeadMaster,Accountant and Clerk for CBSE/ICSE school</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- our -->	



<!-- employs -->
	<!--<div class="employs">
		<div class="container">
		<div class="team">
			<div class="product-tabs">
					<!--Horizontal Tab-->
				   <!-- <div id="horizontalTab" class="r-tabs">
				        <ul class="r-tabs-nav">
				            <li class="r-tabs-tab r-tabs-state-default"><a href="#tab-1" class="r-tabs-anchor"> Employeers</a></li>
							<!-- <li class="r-tabs-tab r-tabs-state-default"><a href="#tab-2" class="r-tabs-anchor">Job Seekers  </a></li>-->
				       <!-- </ul>
					<div class="r-tabs-accordion-title r-tabs-state-default"><a href="#tab-1" class="r-tabs-anchor"></a></div><div id="tab-2" class="product-complete-info r-tabs-panel r-tabs-state-default" style="overflow: hidden; display: none;">
						<div class="team-top">
							<li><img src="images/1.png" class="img-responsive" alt=""></li>
							<li><img src="images/2.png" class="img-responsive" alt=""></li>
							<li><img src="images/3.png" class="img-responsive" alt=""></li>
							<li><img src="images/4.png" class="img-responsive" alt=""></li>
							<li><img src="images/5.png" class="img-responsive" alt=""></li>
							<li><img src="images/6.png" class="img-responsive" alt=""></li>
				        </div>
					</div>
						<div class="r-tabs-accordion-title r-tabs-state-active"><a href="#tab-2" class="r-tabs-anchor"></a></div><div id="tab-1" class="product-complete-info r-tabs-panel r-tabs-state-active" style="overflow: hidden; display: block;">
								<div class="team-top">
							<li><img src="images/t1.jpg" class="img-responsive" alt=""></li>
							<li><img src="images/t2.jpg" class="img-responsive" alt=""></li>
							<li><img src="images/t4.jpg" class="img-responsive" alt=""></li>
							<li><img src="images/t3.jpg" class="img-responsive" alt=""></li>
							<li><img src="images/t5.jpg" class="img-responsive" alt=""></li>
							<li><img src="images/t6.jpg" class="img-responsive" alt=""></li>
				        </div>
				    </div>
					
				    <!-- Responsive Tabs JS -->
				   <!-- <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
				
				    <script type="text/javascript">
				        $(document).ready(function () {
				            $('#horizontalTab').responsiveTabs({
				                rotate: false,
				                startCollapsed: 'accordion',
				                collapsible: 'accordion',
				                setHash: true,
				                disabled: [4,5],
				                activate: function(e, tab) {
				                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
				                }
				            });
				
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('#stop-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('stopRotation');
				            });
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('.select-tab').on('click', function() {
				                $('#horizontalTab').responsiveTabs('activate', $(this).val());
				            });
				
				        });
				    </script>
				</div>
				</div>
				</div>
	</div>
	</div>-->
<!-- employs -->
<!-- recnt -->
	<div class="recnt">
		<div class="container">
			<h6>Recent jobs</h6>
			<h3>Available jobs for you</h3>
		<div class="col-md-9 rec-left">
			<div class="air">
				
				<li class="wb-dis"><h4>English Teacher</h4><h5>Full Time</h5></li>
				<li class="dr-co"><p>High School</p></li>
				<li class="sa-pn"><p><i class="bung"> </i>Bijapur</p></li>
				<li class="dolla"><p>14000</p></li>
				<li class="b-tn"><div class="apply_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Apply Now">
								</form>
							</div></li>
							<div class="clearfix"></div>
			</div>
			<div class="air-1">
				
				<li class="wb-dis"><h4>Science Teacher</h4><h5>Full Time</h5></li>
				<li class="dr-co"><p>Primary School</p></li>
				<li class="sa-pn"><p><i class="bung"> </i>Dharwad</p></li>
				<li class="dolla"><p>15000</p></li>
				<li class="b-tn"><div class="apply_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Apply Now">
								</form>
							</div></li>
							<div class="clearfix"></div>
			</div>
			<div class="air">
				
				<li class="wb-dis"><h4>Accountant</h4><h5>Full Time</h5></li>
				<li class="dr-co"><p>PU College</p></li>
				<li class="sa-pn"><p><i class="bung"> </i>Hubballi</p></li>
				<li class="dolla"><p>14000</p></li>
				<li class="b-tn"><div class="apply_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Apply Now">
								</form>
							</div></li>
							<div class="clearfix"></div>
			</div>
			<div class="air-1">
				
				<li class="wb-dis"><h4>Principal</h4><h5>Part Time</h5></li>
				<li class="dr-co"><p>Degree College</p></li>
				<li class="sa-pn"><p><i class="bung"> </i>Belagavi</p></li>
				<li class="dolla"><p>34000</p></li>
				<li class="b-tn"><div class="apply_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Apply Now">
								</form>
							</div></li>
							<div class="clearfix"></div>
			</div>
			<div class="air">
				
				<li class="wb-dis"><h4>Administrator</h4><h5>Full Time</h5></li>
				<li class="dr-co"><p>High School</p></li>
				<li class="sa-pn"><p><i class="bung"> </i>Athani</p></li>
				<li class="dolla"><p>18000</p></li>
				<li class="b-tn"><div class="apply_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Apply Now">
								</form>
							</div></li>
							<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-3 recent-right">
			<div class="recent-right-info">
				<h3>Seeking a job?</h3>
				<div class="cre_btn">
								<form action="employeeregister.php">
									<input type="submit" value="Create a Account">
								</form>
							</div>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
<!-- recnt -->
<!-- what -->
	<div class="what">
		<div class="container">
				<h6>TESTIMONIALS</h6>
				<h3>WHAT PEOPLES ARE SAYING</h3>
			<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
								<div class="what-top">
									<p>I appreciate the way karavali provided this opportunity to me. Thanks to each an every one who was involved in this process. Special thanks to Recruiter who's sincere, sensitive and dedicated approach made it possible. I hope such extra ordinary services will continue and will benefit many candidates like me</p>
									<h5>Shrinivas Sankeshwar<span> HM, KLE's School Athani</span></h5>
									<div class="what-bottom">
									
								</div>
								</div>
								
								</li>
								<li>
									<div class="what-top">
									<p>KARAVALI-Teachers helpline is like a blessing for jobseeker. It helped me.As a result,I got job in Vidyaniketan School Dharwad and It's help was appreciable.</p>
									<h5>Sushila Jadav<span> Teacher</span></h5>
									<div class="what-bottom">
									<!--<img src="images/man.png" class="img-responsive" alt="">-->
								</div>
								</div>
								
								</li>
								<li>
									<div class="what-top">
									<p>Thanks to KARAVALI team for providing me this great opportunity in a St Joseph school Dharwad</p>
									<h5>Priya Biradar<span>Teacher</span></h5>
								<div class="what-bottom">
									
								</div>
							</div>
								
								</li>
								<li>
								<div class="what-top">
									<p>Thanks to KARAVALI team for providing me this great opportunity in a St Joseph school Dharwad</p>
									<h5>Eftakher Alam,<span> PE teacher</span></h5>
								<div class="what-bottom">
									
								</div>
								</div>
								
								</li>
								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
					<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->

		</div>
	</div>
<!-- what -->
<!-- footer-top -->
<?php
		include("includes/footer.inc.php");
?>
<!-- footer-bottom -->
</body>
</html>