<?php 
	session_start();
	include "functions.php";	
?>

<!DOCTYPE html>
    <html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->

					 <title>IT fro Courses</title>
</head>
<body>
<?php include "header.php" ?>

<!-- Start Slider -->
<div id="myslider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators hidden-xs">
		  <li data-target="#myslider" data-slide-to="0" class="active"></li>
		  <li data-target="#myslider" data-slide-to="1"></li>
		  <li data-target="#myslider" data-slide-to="2"></li>
		  <li data-target="#myslider" data-slide-to="3"></li>
		</ol>

				<div class="carousel-inner" role="listbox">
										
				  <div class="item active">
					<img src="img/header-slider-1.jpg" alt="Slide-first">
				  </div>
				  
				  <div class="item">
					<img src="img/header-slider-2.jpg" alt="Slide-second">
					<div class="carousel-caption">
				  	<p class="mission lead hidden-sm hidden-xs ">When Technology becomes absolute passion </p>
					</div>
					
				  </div>
				  
				  <div class="item">
					<img src="img/header-slider-3.jpg" alt="Slide-third">
				  </div>
				  
				</div>
			  
				<!-- Controls -->
				<a class="left carousel-control hidden-xs " href="#myslider" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control hidden-xs " href="#myslider" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
				
</div>
<!-- End Slider -->

<!-- start Section Welcome -->
<section id="welcome">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12 section-header" >
				<h1>Welcome To <br><span>BrandName</span></h1>
				<img src="img/line.png" alt="line">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
					quae ab illo inventore veritatis et quasi architecto beatae vitae
					dicta sunt explicabo.
				</p>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
					quae ab illo inventore veritatis et quasi architecto beatae vitae
					dicta sunt explicabo.
				</p>
			</div>
			<div class="col-md-6 col-xs-12 section-content">
					<iframe width="620" height="340" src="https://www.youtube.com/embed/i5qpS_D8Law" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<!-- End Section Welcome -->

<!-- Popular Course -->
<section id="popular-courses">
				<div class="container">
					<div class="section-header">
						<h1>popular courses</h1>
						<img src="img/line.png" alt="line">
					</div>
					<div class="section-content">
						<div class="row">
							
							<div class="multiple-items col-xs-12">

							    

								<?php $result = selectCurrentRows('courses');
									foreach ($result as $key => $value) { ?>
									<div class="col-xs-4 text-center course_container" id="slider-4">
							    	<div class="course-img">
							    		<img src="course_images/<?php echo $value['pic_name']; ?>" alt="" />
							    	</div>
									<div class="course-name">
										<h3><a href="offline.php"><?php echo $value['course_name']; ?></a></h3>
									</div>
									<div class="course-user-interactive">
										<div id="interactive-left">
											<ul>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $value['no_hours']; ?> Hour</li>
												<li><i class="fa fa-money" aria-hidden="true"></i><?php echo $value['price']; ?> $</li>
											</ul>
										</div>
									</div>
							    </div>
							    <?php } ?>
							</div>
						</div>
					</div>
				</div>
</section>

<!-- Start Section achievement -->
<section id="achievement">
				<div class="container">
					<div class="section-header">
						<h1>achievement</h1>
						<img src="img/line.png" alt="line">
					</div>
					<div class="section-content row">
						<div class="col-xs-12 col-md-6 col-lg-3">
							<img src="img/world-map.png" alt="" />
							<h1 class="counter"><?php echo select('articles'); ?></h1>
							<p>ARTICLES</p>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-3">
							<img src="img/ring.png" alt="" />
							<h1 class="counter"><?php echo select('courses'); ?></h1>
							<p>COURSES</p>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-3">
							<img src="img/friend.png" alt="" />
							<h1 class="counter"><?php echo select('course_users'); ?></h1>
							<p>STUDENT ENROLED</p>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-3">
							<img src="img/case.png" alt="" />
							<h1 class="counter"><?php echo select('category'); ?></h1>
							<p>CATEGORIES</p>
						</div>
						<a href="offline.php">View Courses</a>
					</div>
				</div>
</section>

<!-- Section Footer -->

<?php include "footer.php" ?>


<!-- Start Scripts -->
  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
  <script>new WOW().init();</script> <!-- Activate WOW.js File -->
  <script type="text/javascript" src="slick/slick.min.js"></script><!-- Slick.js Carousel file -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->

</body>
</html>
