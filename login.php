<?php 

include "connect_DB_PDO.php";
//require_once("db_connection.php"); 

session_start();
?>

<?php 

if(isset($_POST['sign_in'])){

		// Data From User
		$userName = $_POST['username'];
		$password = $_POST['password'];
		if(isset($_POST['remember'])){
		$remember = $_POST['remember'];
		}

		// Prepare Query with Statement 
		$query = $pdo_conn->prepare("SELECT user_name, password FROM users WHERE user_name = ? AND password = ?");

		// Execute Query == Fetch Query
		$query->execute(array($userName, $password));

		if($query->rowCount() > 0){
											
			$_SESSION["username"] = $userName; // Start Store Username in Session 

			if(isset($_POST['remember'])){
				setcookie("rememberUser", $userName, time() + (60*60*24*7));
				setcookie("rememberPass", $password, time() + (60*60*24*7));
				$_SESSION["username"] = $userName;
			}
			
			header("Location: index.php");

		}
		else{
			echo "Sorry username / password Incorrect";
			session_destroy();    // Cancel Whole Session
			echo "<p style='color:red'> Redirecting to HomePage in 2 seconds Please Wait.... </p>";
			header("refresh:2; url = index.php");
		}

	}

?>

<?php 
	
	//mysqli_close($connection);
?>
