<?php
        require_once("connect_DB_PDO.php"); 

  if(isset($_SESSION['username'])){

  // if there is Session we can GET user_id from users table through Session  
    $sql = 'SELECT * FROM users WHERE user_name = ? AND role=1';
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
  
else
{    
    echo "you are not Loggin Go to Login Page " . 
    "<h3 style='color:red;'>Redirect To Home Page</h3>";
    header("refresh:2; url= index.php");
    exit();
}
  
?>