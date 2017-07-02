<?php require_once "connect_DB_PDO.php"; 
		session_start();
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->

					 <title>BLogs</title>

        </head>
<body>
	<?php include "header.php" ?>

<nav class="navbar navbar-default">
	<div class="bottom-nav nav-cat">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
      	
						<li><a href="#webdes" data-scroll>Web Design</a></li>
						<li><a href="#webdev" data-scroll>Web Development</a></li>
						<li><a href="#Mobile" data-scroll>Mobile</a></li>
						<li><a href="#Network" data-scroll>Network</a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>

<div class="blog">
<section id="webdes">
	<div class="container">
		<div class="section-head"><h1>Web Design</h1>
		</div>

		<div class="section-content row" id="webdesign-section">

			<div class="recent col-md-4">
				<h3>Recent Posts</h3>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
			</div>
<?php 

		$query = "SELECT * FROM articles WHERE category_id=9";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
?>
			
				<?php      

				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){

				echo '	<div class="article col-md-7 wow fadeInUp" data-wow-duration="2s"  data-wow-offset:"600">
							<p>'. $rows["art_date"] .'
			         		</p>
							<h2>'. $rows["art_title"] . '
							</h2>
							<img src="Article_Images/'.$rows["pic_name"].'" 
			         			alt="" class="col-xs-12" style="border:3px solid #888;" />
							
							<p>'. $rows["art_content"] .'
							</p>
							<a href="display_article.php?id='.$rows['art_id'] .'"class="article-btn btn btn-primary">Read more..</a>
						</div>
					';
					}
				 ?>
		</div>
	</div>
</section>


<!-- End Articles for Web Design -->


<!-- Start Web Dev -->
		
<section id="webdev">
	<div class="container">
		<div class="section-head"><h1>Web Development</h1>
		</div>

		<div class="section-content row" id="webdesign-section">

			<div class="recent col-md-4 ">
				<h3>Recent Posts</h3>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
			</div>

			
<?php 

		$query = "SELECT * FROM articles WHERE category_id=9";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
?>
			
				<?php      

				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){

				echo '	<div class="article col-md-7 wow bounceInLeft" data-wow-duration="2s"  data-wow-offset:"600"">
							<p>'. $rows["art_date"] .'
			         		</p>
							<h2>'. $rows["art_title"] . '
							</h2>
							<img src="Article_Images/'.$rows["pic_name"].'" 
			         			alt="" class="col-xs-12" style="border:3px solid #888;" />
							
							<p>'. $rows["art_content"] .'
							</p>
							<a href="display_article.php?id='.$rows['art_id'] .'"class="article-btn btn btn-primary">Read more..</a>
						</div>
					';
					}
				 ?>
		</div>
	</div>
</section>


<!-- Start Mobile -->

<section id="Mobile">
	<div class="container">
		<div class="section-head"><h1>Mobile APP</h1>
		</div>

		<div class="section-content row" id="webdesign-section">

			<div class="recent col-md-4">
				<h3>Recent Posts</h3>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
			</div>

			
<?php 

		$query = "SELECT * FROM articles WHERE category_id=9";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
?>
			
				<?php      

				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo '	<div class="article col-md-7 wow bounceInRight" data-wow-duration="2s"  data-wow-offset:"600"">
							<p>'. $rows["art_date"] .'
			         		</p>
							<h2>'. $rows["art_title"] . '
							</h2>
							<img src="Article_Images/'.$rows["pic_name"].'" 
			         			alt="" class="col-xs-12" style="border:3px solid #888;" />
							
							<p>'. $rows["art_content"] .'
							</p>
							<a href="display_article.php?id='.$rows['art_id'] .'"class="article-btn btn btn-primary">Read more..</a>
						</div>
					';
					}
				 ?>
		</div>
	</div>
</section>
<!-- End of Mobile App -->



<!-- Start Network -->
		
<section id="Network">
	<div class="container">
		<div class="section-head"><h1>Network</h1>
		</div>

		<div class="section-content row" id="webdesign-section">

			<div class="recent col-md-4">
				<h3>Recent Posts</h3>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
				<p><a href="#"><i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur </a></p>
			</div>

			
<?php 

		$query = "SELECT * FROM articles WHERE category_id=9";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();     

				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){

				echo '	<div class="article col-md-7 wow bounceInUp" data-wow-duration="2s" data-wow-offset="100">
							<p>'. $rows["art_date"] .'
			         		</p>
							<h2>'. $rows["art_title"] . '
							</h2>
							<img src="Article_Images/'.$rows["pic_name"].'" 
			         			alt="" class="col-xs-12" style="border:3px solid #888;" />
							
							<p>'. $rows["art_content"] .'
							</p>
							<a href="display_article.php?id='.$rows['art_id'] .'"class="article-btn btn btn-primary">Read more..</a>
						</div>
					';
					}
				 ?>
		</div>
	</div>
</section>

</div>

<?php include "footer.php" ?>


<!-- End of NetWork -->

			  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
			  <script src="js/smooth-scroll.min.js"></script>
			  <script>
			    smoothScroll.init();
			  </script>
			  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
			  <script>new WOW().init();</script>
			  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
        </body>
    </html>
