<?php 
require_once "connect_DB_PDO.php";
	session_start();	
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
	        	echo "<h3 style='color:red;'>Done</h3>";
	        }
			else
			{
				echo "Sorry you are not login" . "<h3 style='color:red;'>Redirecting To Home Page</h3>";
				header("refresh:2; url= index.php");
				exit();
			}
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
  </head>
<body>
<?php include "header.php" ?>

<div class="course">
    <div class="container">
<!-- Start Display Courses -->

<?php 
	$sql = 'SELECT * FROM courses WHERE type="online"';
	$query = $pdo_conn->prepare($sql);
	$query->execute();

 while($rows = $query->fetch(PDO::FETCH_ASSOC))
 {
 	$course_id = $rows["course_id"];
?>
<div class="course_publish col-md-7 wow flipInX" data-wow-duration="2s"  data-wow-offset:"100">
	<h3 class="text-center"><?php  echo $rows["course_name"] ?>
		</h3>
		<img class="img" src="course_images/<?php echo $rows["pic_name"] ?>"/>
	<p class="text-center course_desc"><?php echo $rows["course_desc"] ?>
		</p><hr/>
	<h3 class="text-center color">Price: <?php echo $rows["price"] ?>$
	</h3><hr/>
	
	<h4 class="text-center color">Number of Hours:<?php echo $rows["no_hours"] ?>
	Hour</h4><hr/>

	<h4 class="text-center color">Useres Enrolled in This Course:<?php
		$sql = 'SELECT course_id FROM course_users WHERE course_id = ? ';
		$query_enrolled = $pdo_conn->prepare($sql);
		$query_enrolled->execute(array($course_id)); 
		$count = $query_enrolled->rowCount();
		
		if($count <= 1 )
			echo "<span class='enrool'>" . $count . "</span> User" ;
		else 
			echo "<span class='enrool'> " . $count . "</span> Users" ;
	 ?>
	</h4><hr/>
<?php 

// Select User name To Comaprison with Current  Registered User 
$query_user = $pdo_conn->prepare('SELECT * FROM users WHERE user_name = ?');
$query_user->execute(array($_SESSION['username'])); 
$users = $query_user->fetch(PDO::FETCH_ASSOC);
$user_id  = $users["user_id"];

// Select Course name to Comaprison with Current Course in Loop to speciefied Enrolled or NO
$stmt = $pdo_conn->prepare("SELECT * FROM course_users WHERE course_id = $course_id AND user_id = $user_id ");
$stmt->execute();
$courses= $stmt->fetch(PDO::FETCH_ASSOC);

// If this User Enrolled in Course, he is can't Enroll Again
if(!($courses["course_id"] == $course_id && $courses["user_id"] == $user_id))
{
?>
	<form action="display_course.php" method="POST">
		<input type="hidden" name="course_id" value=<?php echo $course_id ?> />
		<input type="submit" class="btn-course btn btn-info text-center" name="enroll"	value="Enroll" />
	</form>
<?php
// If Not Enrolled, the he is can Enroll now
		} else 
		{
?>
	<h3 class="enrool"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Already You Enrolled in This Course</h3>

<?php			
		}
	?>

</div>
	<?php	
	}
?>

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