<?php
session_start(); 
require_once("connect_DB_PDO.php");
?>
<?php 

if(isset($_SESSION['username'])){

  // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ?  AND role = 1 ';
    $query = $pdo_conn->prepare($sql);
    $query->execute(array($_SESSION['username'])); // To replace [ ? ] by session
    
    if($rows = $query->fetch(PDO::FETCH_ASSOC) < 1) // If Admin
    {
      echo "you are not Admin " . 
    "<h3 style='color:red;'>Redirecting To Home Page</h3>";
    header("refresh:2; url= index.php");
      exit();
    }
      
   
  }
  else if(isset($_COOKIE["rememberUser"]))
  {
     // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ?  AND role = 1 ';
    $query = $pdo_conn->prepare($sql);
    $query->execute(array($_COOKIE["rememberUser"])); // To replace [ ? ] by session

    if($rows = $query->fetch(PDO::FETCH_ASSOC) < 1)
    {
      echo "you are not Admin " . 
    "<h3 style='color:red;'>Redirecting To Home Page</h3>";
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

            
			<link rel="stylesheet" href="css/user-profile.css"> <!-- CSS File -->
			
        </head>
        <body>
        	<?php include "header.php" ?>

			<section id="user-profile-content">
				<div class="container">
					<div class="row">
						<div class="user-information admin-profile col-xs-12 col-md-12">

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
                            <a href="editprofile.php" class="edit hvr-wobble-vertical link-admin col-xs-3">Edit</a><
							<a href="course.php" class="edit hvr-wobble-vertical col-xs-3">Manage Courses</a>
                         <a href="writer.php" class="edit hvr-wobble-vertical col-xs-3">Manage Articles</a>
                         <a href="editcategory.php" class="edit hvr-wobble-vertical col-xs-3">Manage Category</a>


						</div>
				</div>
				</div>
			</section>
			  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
			  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
  			  <script>new WOW().init();</script> <!-- Activate WOW.js File -->
			  <script type="text/javascript" src="slick/slick.min.js"></script><!-- Slick.js Carousel file -->
			  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
              <script src="js/jquery.counterup.min.js"></script>
			  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
        </body>
    </html>
