<?php
session_start(); 
require_once("connect_DB_PDO.php");
?>
<?php 

if(isset($_SESSION['username'])){

  // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ?';
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
    $sql = 'SELECT * FROM users WHERE user_name = ?';
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
    echo "you are not Loggin Go to Login Page " . 
    "<h3 style='color:red;'>Redirect To Home Page</h3>";
    header("refresh:2; url= index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Courses Admin Panel</title>
    
  </head>
<body>
<?php include "header.php" ?>



<!-- Start Display Course -->



<?php 
		if(isset($_POST['enroll'])){

	// if there is Session we can GET user_id from users table through Session	
		$sql = 'SELECT user_id FROM users WHERE user_name = ? ';
		$query = $pdo_conn->prepare($sql);
		$query->execute(array($_SESSION['username'])); // To replace [ ? ] by session

		// Return Array that Indexed By named of rows
		$rows = $query->fetch(PDO::FETCH_ASSOC);  //  $rows['user_id'] => select id for this user
			
			$course_id = $_POST['course_id'];

			// Sql Stmt to Insert into Course_Users
			$query  = "INSERT INTO course_users SET user_id = ?, course_id= ? ";
	        $stmt = $pdo_conn->prepare($query);  // Very Importance
	        // Note that user_id is Value from Session
	        $result = $stmt->execute(array($rows['user_id'], $course_id));

	        if($result){

	        	echo "<h3 style='color:red;'>Now, you can watch this course online</h3>";
	        	$sql = 'SELECT * FROM courses WHERE type=? AND course_id =?';
				$query = $pdo_conn->prepare($sql);
				$query->execute(array("online", $course_id));
				$display = $query->fetch(PDO::FETCH_ASSOC);
?>	
	<div class="course_publish col-md-7 wow flipInX" data-wow-duration="2s"  data-wow-offset:"100">
	<iframe width="420" height="345" src="https://www.youtube.com/embed/?listType=playlist&list=<?php 
	echo substr($display["course_link"], 38); ?>" frameborder="0" allowfullscreen></iframe>
</div>


<?php
	        }
			else
			{
				echo "Sorry you are not login" . "<h3 style='color:red;'>Redirecting To Home Page</h3>";
				header("refresh:2; url= index.php");
				exit();
			}
	}

?>



<!-- End Display Course -->
<div class="course">
    <div class="container">
<!-- Start Display Courses -->

 </div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
			  <script>
			    smoothScroll.init();
			  </script>
			  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
			  <script>new WOW().init();</script>


</body>
</html>