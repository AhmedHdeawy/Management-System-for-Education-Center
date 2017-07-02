<?php 
	require_once("connect_DB_PDO.php");
 ?>
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Latest compiled and minified CSS -->
			<link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">
			<link rel="stylesheet" href="css/animate.css"> <!-- Animate.CSS File -->
            <link rel="stylesheet" type="text/css" href="slick/slick.css"/><!-- Slick.css Carousel -->
            <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"><!-- Slick.css Carousel -->
            <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/hover.css">
            <link rel="stylesheet" href="css/main.css"> <!-- my framework CSS File -->
            <link rel="stylesheet" href="css/style2.css"> <!-- CSS File -->
			<link rel="stylesheet" href="css/style.css"> <!-- CSS File -->
			<link rel="stylesheet" type="text/css" href="css/cmxform.css">
			<link rel="stylesheet" href="css/media.css"> <!-- Media Query File -->
	         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	        	<!--[if lt IE 9]>
	          <script src="js/html5shiv.min.js"></script>
	          <script src="js/respond.min.js"></script>
	        	<![endif]-->

	        	<!-- Form Validation -->
	      <script src="js/jquery.min.js"></script> <!-- Jquery Mini file -->
		  <script src="js/jquery.validate.min.js" ></script>
    	  <script src="js/validation_form.js"></script> <!-- Externa Js File file - My File -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   
    

	<!-- Start Lofin and Register -->
	<div id="sign-in">
		<div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
		      </div>
		      <form action="login.php" method='POST' autocomplete="off">
			      <div class="modal-body">
					  
						<div class="input-group">
						  <p>User Name: <br/><input type="text" autocomplete="off" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1"></p>
					  </div>

					  <div class="input-group">
						  <p>Password: <br/><input type="password" autocomplete="off" class="form-control" name="password" placeholder="password" aria-describedby="basic-addon1"></p>
					  </div>

					  <div class="input-group">
					    <p><input type="checkbox" name="remember" value="yes" aria-label="..."> Remember Me</p>
					  </div>
					  <!-- /input-group -->

					  <a href="#">forget password</a>

			      </div>
			      <div class="modal-footer">
			        <input type="submit" name="sign_in" value="Sign In" class="btn btn-primary">
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
	<div id="sign-up">
		<div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
		      </div>
		      <form id="myform" class="cmxform" action="register.php" method="POST"  enctype="multipart/form-data" >
		      <div class="modal-body">
			    <div class="input-group">
			    	<label for="firstname">First Name:</label>
					 <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="basic-addon1" required>
				</div>

				<div class="input-group">
					<label for="lastname">Last Name:</label>
						<input type="text" class="form-control" id="lastname" name="lastname"aria-describedby="basic-addon1" required>
					</div>

				<div class="input-group">
					<label for="username">User name:</label>
						<input type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon1" required>
					</div>

				<div class="input-group">
					<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon1" required>
					</div>

				<div class="input-group">
					<label for="psw">Confirm Password:</label>
						<input type="password" id="confirm_password" class="form-control" name="confirm_password" aria-describedby="basic-addon1" required>
					</div>

				<div class="input-group">
					<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" aria-describedby="basic-addon1" required>
					</div>

				<div class="input-group">
						<label for="image">Upload Image:</label>
						<input type="file" class="img" name="image" aria-describedby="basic-addon1" >
					</div>

		      </div>
		      <div class="modal-footer">
		        <input type="submit" name="sign_up" value="Sign Up" class="btn btn-primary">
		      </div>
		      </form>

		    </div>
		  </div>
		</div>
	</div>

<!-- End Register and Login -->

  </div><!-- /.container-fluid -->

<div id="bottom-nav">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">IT for Courses</a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					      <ul class="nav navbar-nav navbar-right">
					        <li><a href="index.php" class="act hvr-wobble-vertical">Home</a></li>
							<?php  
							if(isset($_SESSION['username'])){?>
							<li class="dropdown">
					          <a href="#" class="dropdown-toggle hvr-hang" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li class="hvr-wobble-vertical"><a href="offline.php">Offline Course</a></li>
					            <li class="hvr-wobble-vertical"><a href="online.php">Online Course</a></li>
					          </ul>
					        </li>
					        <?php } ?>

							<li class="hvr-wobble-vertical"><a href="blog.php">Blog</a></li>
							<li class="hvr-wobble-vertical"><a href="contact.php" class="act">Contact Us</a></li>
<?php 
 		if(!isset($_SESSION['username'])){
		echo "<li class='hvr-wobble-vertical'><a href='#' data-toggle='modal' data-target='#sign-in-modal'>Sign In</a></li>".
			"<li class='hvr-wobble-vertical'><a href='#' data-toggle='modal' data-target='#sign-up-modal'>Sign Up</a></li>";
		}
		else {
			echo 
			'<li class="hvr-wobble-vertical"><a href="logout.php">Log out</a></li>';
		}
?>

<?php 
	
  		if(isset($_SESSION['username']))
  		{
  			$sql = 'SELECT * FROM users WHERE user_name = ? ';
		    $query = $pdo_conn->prepare($sql);
		    $query->execute(array($_SESSION['username'])); // To replace [ ? ] by session

		    // Return Array that Indexed By named of rows
		    $rows = $query->fetch(PDO::FETCH_ASSOC);

		    if($rows['role'] == 0){
  			echo "
				<li><a href='user-profile.php' class='hvr-wobble-vertical'>".$rows['user_name']."</a></li>
				";		       
			}		          		
			else if($rows['role'] == 1){
  			echo "
				<li><a href='admin-profile.php' class='hvr-wobble-vertical'>"."Admin Panel"."</a></li>
				";
			}
		}
?>
						 </ul>
					    </div><!-- /.navbar-collapse -->
					</div>
				</div>
</nav>
