<?php  
        session_start();
 
        require_once("connect_DB_PDO.php"); 
        require_once("permission.php");

        date_default_timezone_set('Africa/Cairo');
        $date = new DateTime();   // Object from DateTime Class
        $date->add(new DateInterval('PT10H30S'));
        $date = $date->format('Y-m-d H:i:s');
?>


<!DOCTYPE html>
    <html lang="en">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->

					 <title>Articles</title>
            
            <link rel="stylesheet" href="css/bootstrap.css"> <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="css/style.css"> <!-- CSS File -->
	         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	        	<!--[if lt IE 9]>
	          <script src="js/html5shiv.min.js"></script>
	          <script src="js/respond.min.js"></script>
	        	<![endif]-->
</head>
<body>
			  <!-- Type code below this line -->
<div class="admin">

<!-- Start Form to Add new Article -->

<div class="Add">
    <h3>Add Article</h3>
    <?php 
        $query = "SELECT * FROM  category";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
    ?>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input type="text" name="art_title" class="form-control" placeholder="Article Title" required><br><br>
    <input type="file" name="art_image" class="form-control"><br>

    <select name="art_category" class="form-control" required>
        <?php 
            while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                // <option value='from DB'> From DB</option>
                echo "<option value=" . $rows['cat_id'] . ">" . $rows['cat_name'] ."</option>";
            }
        ?>
    </select><br><br>

    <textarea name="art_content" class="form-control" placeholder="Article Content" required></textarea> <br><br> 

    <input type="submit" class="btn btn-primary" name="Add" value="Add"><br><br>       
    </form>
</div>

<!-- End Form to Add new Article -->

<br> <br>

<!-- Start Form to Update Article -->


<div class="Update">
    <h3>Update Article</h3>
<?php 
        $query = "SELECT * FROM articles";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
    ?>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

    <select name="upd_art_id" class="form-control">
        <?php 
            while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                // <option value='from DB'> From DB</option>
                echo "<option value=" . $rows['art_id'] . ">" . $rows['art_title'] ."</option>";
            }
        ?>
    </select>  <br><br>

    <input type="text" name="upd_art_title" class="form-control" placeholder="Article Title"><br><br>
    <input type="file" name="upd_art_image" class="form-control"><br>


    <textarea name="upd_art_content" class="form-control" placeholder="Article Content"></textarea> <br><br> 

    <input type="submit" class="btn btn-primary" name="Update" value="Update"><br><br>       
    </form>
</div>

<!-- End Form to Update Article -->

<br> <br>

<!-- Start Form to Delete Article -->

<div class="Delete">
    <h3>Delete Article</h3>
<?php 
        $query = "SELECT * FROM articles";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute();
    ?>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

    <select name="art_id" class="form-control">
        <?php 
            while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                // <option value='from DB'> From DB</option>
                echo "<option value=" . $rows['art_id'] . ">" . $rows['art_title'] ."</option>";
            }
        ?>
    </select><br><br>

    <input type="submit" class="btn btn-primary" name="Delete" value="Delete"><br><br>       
    </form>
</div>

<!-- End Form to Delete Article -->


</div>   

<!-- End Admin Div -->


<!-- Start Insert to DB -->
<?php 

    if(isset($_POST['Add'])){

                $art_title = $_POST['art_title'];
                $art_category = $_POST['art_category'];
                $art_content = $_POST['art_content'];

                    // Store Image
            $dir_name = dirname(__FILE__) . "/Article_Images/";
            $path = $_FILES['art_image']['tmp_name']; //temporary path
            $name = $_FILES['art_image']['name'];
            $size = $_FILES['art_image']['size'];
            $type = $_FILES['art_image']['type']; //image/png
            $error = $_FILES['art_image']['error'];

        if (!$error && is_uploaded_file($path) && in_array($type, array('image/png', 'image/gif', 'image/jpeg', 'image/jpg', 'image/pjpeg', 'image/x-png', 'image/png')) && $size < 200000) 
        {
            move_uploaded_file($path, $dir_name . $name);
        } 
        else {
            echo 'error in upload file ' . $error;
        }


        $query  = "INSERT INTO articles SET art_title=?, art_pic=?, pic_name=?, art_content=?, category_id=?, art_date=? ";
        $stmt = $pdo_conn->prepare($query);
        $result = $stmt->execute(array($art_title, $path, $name, $art_content, $art_category, $date));

       // Check
    if ($result) {
        echo "Success";
    } else 
        echo "Insert Failed  ";

}
?>

<!-- End Insert Code -->

<!-- Start Update Code Article -->

<?php 

if(isset($_POST['Update'])){

                $art_id = $_POST['upd_art_id'];       // Update in this row [art_title]
                $upd_art_title = $_POST['upd_art_title'];
                $upd_art_content = $_POST['upd_art_content'];

            // Store Image
            $dir_name = dirname(__FILE__) . "/Article_Images/";
            $path = $_FILES['upd_art_image']['tmp_name']; //temporary path
            $name = $_FILES['upd_art_image']['name'];
            $size = $_FILES['upd_art_image']['size'];
            $type = $_FILES['upd_art_image']['type']; //image/png
            $error = $_FILES['upd_art_image']['error'];

        if (!$error && is_uploaded_file($path) && in_array($type, array('image/png', 'image/gif', 'image/jpeg', 'image/jpg', 'image/pjpeg', 'image/x-png', 'image/png')) && $size < 200000) 
        {
            move_uploaded_file($path, $dir_name . $name);
        } 
        else {
            echo 'error in upload file ' . $error;
        }

        $query = "UPDATE articles SET art_title=?, art_content=?, art_pic=?, pic_name=?,  art_date=? WHERE art_id = $art_id ";
        $stmt = $pdo_conn->prepare($query);
        $result = $stmt->execute(array($upd_art_title, $upd_art_content, $path, $name, $date));    

               // Check
    if ($result) {
        echo "Updated Success";
    } else 
        echo "Update Failed  ";

}

?>

<!-- End Update Code -->

<!-- Start Delete From DB -->
<?php 

    if(isset($_POST['Delete'])){

        $del_art_id = $_POST['art_id'];

        $query = "DELETE FROM articles WHERE art_id = $del_art_id";
        $stmt = $pdo_conn->prepare($query);
        $result = $stmt->execute();


        if($result)
          echo "Deleted Done";
        else
          echo "Failed";
    }

?>

<!-- End Delete Code -->

<!-- Start  Script Files -->
			  <script src="js/jquery.min.js"></script> <!-- Jquery Mini file -->
			  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
			  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
        </body>
    </html>

