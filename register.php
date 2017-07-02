<style type="text/css">
	
ul.error_register{
	    width: 30%;
    margin: 50px auto;
    background-color: #f1f1f1;
    border: 2px solid #6b1111;
    border-radius: 10px;
    color: blue;
    font-size: 20px;
    list-style-type: none;
}

ul li{
	padding: 10px;
}

</style>

<?php
	require_once("connect_DB_PDO.php");

	$Error = array();

 ?>


<?php 
	if(isset($_POST['sign_up'])){

		$first = $_POST['firstname'];
		$last =  $_POST['lastname'];
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$mail = $_POST['email'];

		// Data From User
		if(strlen(trim($first)) < 2){
			$Error[] = "First name Cannot Empty";
		}else{
			$firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
		}

		if(strlen(trim($last)) < 2){
			$Error[] = "Last name Cannot Empty";
		}else{
			$lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
		}

		if(strlen(trim($user)) < 2){
			$Error[] = "user name Cannot Empty";
		}else{
			$userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		}

		if(strlen(trim($pass)) < 2){
			$Error[] = "Password Cannot Empty";
		}else{
			$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		}

		if(strlen(trim($mail)) < 2){
			$Error[] = "Email Cannot Empty";
		}else{
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		}

// Store Image

	$dir_name = dirname(__FILE__) . "/Uploads/";  // Specefied Folder to Store Image in it
	$path = $_FILES['image']['tmp_name'];        //temporary path
	$name = $_FILES['image']['name'];           // Get File Name
	$size = $_FILES['image']['size'];          // Get File Size
	$type = $_FILES['image']['type'];         //Get File Type
	$error = $_FILES['image']['error'];       // If Error

	if (!$error && is_uploaded_file($path) && in_array($type, array('image/png', 'image/gif', 'image/jpeg', 'image/jpg', 'mage/pjpeg', 'image/x-png', 'image/png')) && $size < 200000) {

	    move_uploaded_file($path, $dir_name . $name);
	} else {
	    $Error[] =  $error;
	}


	if(empty($Error)){
	$query  = "INSERT INTO users SET first_name=?, last_name=?, user_name=?, password=?, email=?, profile_pic=?, pic_name=? ";
	$stmt = $pdo_conn->prepare($query);  // Very Importance
	$stmt->execute(array($firstName, $lastName, $userName, $password, $email, $path, $name));
		
		$_SESSION["username"] = $userName;
		header("Location: index.php");
	}
	else{
		echo "<ul class='error_register'>";
		foreach ($Error as $key) {
			echo "<li>".$key."</li>";
		}
		echo "Redirecting to Home Page in 3 Seconds"."</ul>";

		header("refresh:3; url= index.php");
	}


}

?>
