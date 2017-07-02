<?php
session_start(); 
require_once("connect_DB_PDO.php");


if(isset($_SESSION['username'])){

  // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ?  AND role = 0 ';
    $query = $pdo_conn->prepare($sql);
    $query->execute(array($_SESSION['username'])); // To replace [ ? ] by session
    
    if($rows = $query->fetch(PDO::FETCH_ASSOC) < 1) // If Admin
    {
      echo "you are not User " . 
    "<h3 style='color:red;'>Redirecting To Home Page</h3>";
    header("refresh:2; url= index.php");
      exit();
    }
      
   
  }
  else if(isset($_COOKIE["rememberUser"]))
  {
     // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ?  AND role = 0 ';
    $query = $pdo_conn->prepare($sql);
    $query->execute(array($_COOKIE["rememberUser"])); // To replace [ ? ] by session

    if($rows = $query->fetch(PDO::FETCH_ASSOC) < 1)
    {
      echo "you are not Admin " . 
    "<h3 style='color:red;'>Redirect To Home Page</h3>";
    header("refresh:2; url= index.php");
      exit();
    }
  }
else
{    
    echo "you are not Loggin or you are not Admin Go to Login Page " . 
    "<h3 style='color:red;'>Redirect To Home Page</h3>";
    header("refresh:2; url= index.php");
    exit();
}

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->

					 <title>Profile | User</title>

            <link rel="stylesheet" href="css/bootstrap.css"> <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/animate.css"> <!-- Animate.CSS File -->
			<link rel="stylesheet" type="text/css" href="slick/slick.css"/><!-- Slick.css Carousel -->
			<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"><!-- Slick.css Carousel -->
			<link rel="stylesheet" href="css/main.css"> <!-- my framework CSS File -->
			<link rel="stylesheet" href="css/user-profile.css"> <!-- CSS File -->
			<link rel="stylesheet" href="css/media.css"> <!-- Media Query File -->
			<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	        <!--[if lt IE 9]>
	        <script src="js/html5shiv.min.js"></script>
	        <script src="js/respond.min.js"></script>
	        <![endif]-->
        </head>
        <body>
        	<?php include "header.php" ?>

			<section id="user-profile-content">
				<div class="container">
					<div class="row">
						<div class="user-information col-xs-12 col-md-12">

							<div id="user-face">
								<img class="img-user" src="Uploads/<?php echo $rows['pic_name']; ?>" alt="user image">
								<h2><?php echo $rows['user_name']; ?></h2>
							</div>
							<div id="user-info">
								<div class="lable"><p><b>user name:</b> <?php echo $rows['user_name']; ?></p></div>
								<div><p><b>First name:</b> <?php echo $rows['first_name']; ?></p></div>
								<div class="lable"><p><b>Last name:</b> <?php echo $rows['last_name']; ?></p></div>
								<div><p><b>E-mail:</b> <?php echo $rows['email']; ?></p></div>
							</div>
                            <a class="edit hvr-wobble-vertical" href="editprofile.php">Edit</a>

						</div>

                        
                        
                        

					</div>
				</div>
			</section>

			<footer id="footer">
				<div class="container">
					<div id="top-footer" class="row">
						<div class="col-xs-12 col-md-4" id="about-us">
							<h4>About Us</h4>
							<p>The Masterstudy Education Center is
								complete and an integral part of
								Local Education in Washington!
							</p>
							<p> A decade's worth of rich history and
								goodwill with the public schools
								surrounding plus an extensive
								community consultation process prepared
								us for building the Local Education Center.
							</p>
							<button class="btn hvr-sweep-to-right">Learning Now</button>
						</div>
						<div class="col-xs-12 col-md-4" id="quick-links">
							<h4>quick links</h4>
							<p> > <a href="#">Pricing Plane</a></p>
							<p> > <a href="#courses-type">Courses</a></p>
							<p> > <a href="#welcome">About Us</a></p>
						</div>
						<div class="col-xs-12 col-md-4" id="contact-us">
							<h4>contact us</h4>
							<div>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i>
									23 Mulholland Drive, Suite 721. Los Angeles 10010
								<br>100 S. Main Street. Los Angeles 90012</p>
							</div>
							<div>

								<p><i class="fa fa-mobile" aria-hidden="true"></i>+1-670-567-5590</p>
							</div>
							<div>

								<p><i class="fa fa-envelope-o" aria-hidden="true"></i>hello@clemocreative.com</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

			  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
			  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
  			  <script>new WOW().init();</script> <!-- Activate WOW.js File -->
			  <script type="text/javascript" src="slick/slick.min.js"></script><!-- Slick.js Carousel file -->
			  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
              <script src="js/jquery.counterup.min.js"></script>
			  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
        </body>
    </html>
