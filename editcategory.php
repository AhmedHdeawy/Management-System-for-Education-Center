<?php 
require_once("connect_DB_PDO.php");
session_start();
require_once("permission.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style2.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body> 
  <?php include "header.php" ?>

<div class="container"> <br><br>
<div class="admin">
  <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
     <h3 class="text-center">Add Category</h3>
        <input type= "text" name="cat_title" class="form-control" placeholder="Type Cateogory Title">
        <br><br>
        <input type="submit" name="Add_cat" class="btn btn-primary" value="Add">
  </form>
</div>
<!-- End Add Category -->   
          <?php 
              $query = "SELECT * FROM category";
              $query = $pdo_conn->prepare($query);
              $query -> execute();
          ?>
<div class="admin">
          <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
          <h3 class="text-center">Update Category</h3>
          <select name="upd_cat_id" class="form-control">
              <?php 
                  while ($rows = $query->fetch(PDO::FETCH_ASSOC)){
                      // <option value='from DB'> From DB</option>
                      echo "<option value=" . $rows['cat_id'] . ">" . $rows['cat_name'] ."</option>";
                  }
              ?>
          </select>  <br><br>

          <input type="text" name="upd_cat_title" class="form-control" placeholder="Article Title"><br><br>

          <input type="submit" class="btn btn-primary" name="Update" value="Update"><br><br>       
          </form>
      </div>

<!-- Satrt Form for Delete-->

<div class="admin">
          <?php 
              $query = "SELECT * FROM category";
              $query = $pdo_conn->prepare($query);
              $query -> execute();
          ?>

          <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
          <h3 class="text-center">Delete Category</h3>
          <select name="del_cat_id" class="form-control">
              <?php 
                  while ($rows = $query->fetch(PDO::FETCH_ASSOC)){
                      // <option value='from DB'> From DB</option>
                      echo "<option value=" . $rows['cat_id'] . ">" . $rows['cat_name'] ."</option>";
                  }
              ?>
          </select>  <br><br>

          <input type="submit" class="btn btn-primary" name="Delete" value="Delete"><br><br>       
          </form>
</div>
</div>

<!-- Start Add Category -->

<?php 

if(isset($_POST['Add_cat']))
{
        $cat_name = filter_input(INPUT_POST, 'cat_title', FILTER_SANITIZE_STRING);

        $query  = "INSERT INTO category SET cat_name = ? ";
        $stmt = $pdo_conn->prepare($query);  // Very Importance
        $result = $stmt->execute(array($cat_name));

        if($result)
          echo "Success";
        else
          echo "Failed";
}
?>


<!-- Start Update Code Article -->

<?php 

if(isset($_POST['Update'])){

        $cat_id = $_POST['upd_cat_id'];       // Update in this row [art_title]
        $upd_cat_title = $_POST['upd_cat_title'];

        $query_upd = "UPDATE category SET cat_name = ? WHERE cat_id = {$cat_id}";
        $query = $pdo_conn->prepare($query_upd);
        $result = $query->execute(array($upd_cat_title));

               // Check
    if ($result) {
        echo "Update Success";
    } else 
        echo "Update Failed  ";

}

?>

<!-- End Update Code -->

<!-- Start Delete Code -->

<?php 

    if(isset($_POST['Delete'])){

        $del_cat_id = $_POST['del_cat_id'];

        $query_del = "DELETE FROM category WHERE cat_id = '{$del_cat_id}'";

        $query = $pdo_conn->prepare($query_del);
        $result_del = $query->execute();

        if($result_del)
            echo "Deleted Done";
        else 
            echo "Delete Failed";

    }

?>

<!-- End Delete Code -->

      <script src="js/jquery-1.12.1.min.js"></script> 
            <!-- Jquery Mini file -->
	  <script src="js/bootstrap.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
    </body>