<?php require_once "connect_DB_PDO.php"; 
		session_start();
?>
<?php 

if(isset($_POST['edit'])){
	$formError = array();

	$firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
	$lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
	$userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

	if(filter_var($email, FILTER_VALIDATE_EMAIL) != true)
		$formError[] = "Email Not Validate";
	if(empty($firstName))
		$formError[] = "First name Empty!!!";
	if(empty($lastName))
		$formError[] = "Last name Empty!!!";
	if(empty($userName))
		$formError[] = "User name Empty!!!";

	if(empty($formError)){

		$query = "UPDATE users set first_name=?, last_name=?, user_name=?, email=?  WHERE user_id= $id";
		$stmt = $pdo_conn->prepare($query);
		$result = $stmt->execute(array($firstName, $lastName, $userName, $email));
		if($result){
			echo "Updated ";
		}
	}

	else{
		echo "<h3>Update Failed </h3>";
		foreach ($formError as $value) {
			echo "<p>".$value."</p>";
		}
	}
	
}


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

<?php 
if(isset($_SESSION['username'])){
	
	$query = "SELECT * FROM users WHERE user_name = ?";
	$stmt = $pdo_conn->prepare($query);
	$stmt->execute(array($_SESSION["username"]));
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="editprofile">
	<div class="field">
<form class="form-editprofile" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    	
    	<label for="firstname">First Name:</label>
		<input type="text" class="form-control" value="<?php echo $rows['first_name'] ?>" id="firstname" name="firstname" aria-describedby="basic-addon1" >

		<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" value="<?php echo $rows['last_name'] ?>" id="lastname" name="lastname"aria-describedby="basic-addon1" >

		<label for="username">User name:</label>
			<input type="text" class="form-control" value="<?php echo $rows['user_name'] ?>" id="username" name="username" aria-describedby="basic-addon1" >

		<label for="email">Email</label>
			<input type="text" class="form-control" value="<?php echo $rows['email'] ?>" id="email" name="email" aria-describedby="basic-addon1" >

		<input type="hidden" name="id" class="form-control" value="<?php echo $rows['user_id'] ?>">

		
    <input type="submit" name="edit" value="Edit" class="">
  
</form>
</div>
</div>
<?php


}
else if(isset($_COOKIE["rememberUser"]))
{
	$query = "SELECT * FROM users WHERE user_name = ?";
	$stmt = $pdo_conn->prepare($query);
	$stmt->execute(array($_COOKIE["rememberUser"]));
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<div class="editprofile">
	<div class="field">
<form class="form-editprofile" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <div class="input-group">
    	<label for="firstname">First Name:</label>
		<input type="text" class="form-control" value="<?php echo $rows['first_name'] ?>" id="firstname" name="firstname" aria-describedby="basic-addon1" required>
	</div>

		<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" value="<?php echo $rows['last_name'] ?>" id="lastname" name="lastname"aria-describedby="basic-addon1" required>

		<label for="username">User name:</label>
			<input type="text" class="form-control" value="<?php echo $rows['user_name'] ?>" id="username" name="username" aria-describedby="basic-addon1" required>

		<label for="email">Email</label>
			<input type="email" class="form-control" value="<?php echo $rows['email'] ?>" id="email" name="email" aria-describedby="basic-addon1" required>
		<input type="hidden" name="id" class="form-control" value="<?php echo $rows['user_id'] ?>">

    <input type="submit" name="edit" value="Edit" class="">
 </form>
</div>
</div>
<?php
}
else
{
	    echo "You Are Not Login Go to Login Page " . 
    "<h3 style='color:red;'>Redirect To Home Page</h3>";
    //header("refresh:2; url= index.php");
    exit();
}
 ?>

</body>
</html>