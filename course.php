<?php
session_start(); 
require_once("connect_DB_PDO.php");
require_once("permission.php");
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
<div class="course">
    <div class="container">

        <form method="POST" class="form text-center" action="<?php $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data">
            <h2>Courses</h2>
<div class="inside_form">
  <!-- SElect Categories From DB -->
            <?php 
             
              $query = "SELECT * FROM category ";
              $stmt = $pdo_conn->prepare($query);
              $stmt->execute();
            ?>
          <label>Category :</label><br>
          <select name="cat_id" class="form-control">
              <?php 
                  while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                      // <option value='from DB'> From DB</option>
                      echo "<option value=" . $rows['cat_id'] . ">" . $rows['cat_name'] ."</option>";
                  }
              ?>
          </select>  <br><br>

            <label>Name :</label><br>
            <input type="text" class="form-control" name="course_name" required><br><br>
            <label>Price :</label><br>
            <input type="text" class="form-control" name="course_price" required><br><br>
            <label>No. Of Hours :</label><br>
            <input type="number" class="form-control" name="no_houre" required><br><br>
            
            <label>Type :</label><br>
            <select class="form-control" name="course_type" id="course_type" required><br><br>
                <option selected disabled>Select Type</option>
                <option value="online">Online</option>
                <option value="offline">Offline</option>
            </select><br><br>

            <input type="hidden" name="link" id="link" placeholder="Write Link Here"><br><br>

            <label>Short Describtion :</label><br>
            <textarea name="description" class="form-control"  required></textarea><br><br>
            <label>Course Picture</label><br>
            <input type="file" class="form-control" name="image"><br><br>

            <input type="submit" class="btn btn-info" name="Add" value="Add Course">
            </div>
        </form>


            
<!-- End Add Form -->

<!-- Start Edit Form -->

        <form class="form text-center" method="POST" action="<?php $_SERVER["PHP_SELF"] ?>" >
            <h2>Edit Course</h2>
<div class="inside_form">
            <?php 
              $query = "SELECT * FROM courses";
              $stmt = $pdo_conn->prepare($query);
              $stmt->execute();
            ?>
          <label>Category :</label><br>
          <select name="upd_course_name" class="form-control">
              <?php 
                  while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                      // <option value='from DB'> Name From DB</option>
                      echo "<option value=" . $rows['course_id'] . ">" . $rows['course_name'] ."</option>";
                  }
              ?>
          </select>  <br><br>

            <label>Name :</label><br>
            <input type="text" class="form-control" name="course_name"><br><br>
            <label>Price :</label><br>
            <input type="text" class="form-control" name="course_price"><br><br>
            <label>No. Of Hours :</label><br>
            <input type="number" class="form-control" name="no_houre"><br><br>

            <label>Short Describtion :</label><br>
            <textarea name="description" class="form-control"></textarea><br><br>
            <input type="submit" class="btn btn-info" name="Update" value="Edit Course">
            </div>
        </form>


<!-- Start Delete Form -->

        <form method="POST" class="form text-center" action="<?php $_SERVER["PHP_SELF"] ?>" >
            <h2>Delete Course</h2>
<div class="inside_form">
            <?php 
              $query = "SELECT * FROM courses";
              $stmt = $pdo_conn->prepare($query);
              $stmt->execute();
            ?>
          <label>Category :</label><br>
          <select name="del_course_id" class="form-control" style="width:30%">
              <?php 
                  while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
                      // <option value='from DB'> Name From DB</option>
                      echo "<option value=" . $rows['course_id'] . ">" . $rows['course_name'] ."</option>";
                  }
              ?>
          </select>  <br><br>
          
          <input type="submit" class="btn btn-info" name="Delete" value="Delete Course">
            </div>
        </form>
    </div>
</div>


<!-- Add Course to DB -->


<?php 

    if(isset($_POST['Add'])){

        $category_id = $_POST['cat_id'];
        $course_name = filter_input(INPUT_POST, 'course_name', FILTER_SANITIZE_STRING);
        $course_price = filter_input(INPUT_POST, 'course_price', FILTER_SANITIZE_NUMBER_INT);
        $no_hour_course = $_POST['no_houre'];
        $type_course = $_POST['course_type']; 
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        //echo $link;

        // Store Image

        $dir_name = dirname(__FILE__) . "/course_images/";  // Specefied Folder to Store Image in it
        $path = $_FILES['image']['tmp_name'];        //temporary path
        $name = $_FILES['image']['name'];           // Get File Name
        $size = $_FILES['image']['size'];          // Get File Size
        $type = $_FILES['image']['type'];         //Get File Type
        $error = $_FILES['image']['error'];       // If Error

        if (!$error && is_uploaded_file($path) && in_array($type, array('image/png', 'image/gif', 'image/jpeg', 'image/jpg', 'mage/pjpeg', 'image/x-png', 'image/png')) && $size < 200000) {

            move_uploaded_file($path, $dir_name . $name);
        } 
        else 
        {
            echo 'error in upload file ' . $error;
        } // End Store Image

// If Offline Course without Link
if($type_course == 'offline')
{
  $query  = "INSERT INTO courses SET category_id=?, course_name=?, price=?, no_hours=?, type=?, course_desc=?, course_pic=?, pic_name=? ";
  $stmt = $pdo_conn->prepare($query);
  $result = $stmt->execute(array($category_id, $course_name, $course_price, $no_hour_course, $type_course, $description, $path, $name));

        if($result)
          echo "Success";
        else
          echo "Failed";
}
// If Online Course we can Insert Link
else
{
  $link  =$_POST['link'];
  $query  = "INSERT INTO courses SET category_id=?, course_name=?, price=?, no_hours=?, type=?, course_link=?, course_desc=?, course_pic=?, pic_name=? ";
  $stmt = $pdo_conn->prepare($query);
  $result = $stmt->execute(array($category_id, $course_name, $course_price, $no_hour_course, $type_course, $link, $description, $path, $name));

        if($result)
          echo "Success";
        else
          echo "Failed";
}

}
?>
<!-- End Add Course to DB -->




<?php 

    if(isset($_POST['Update'])){

        $name_of_course = $_POST['upd_course_name'];
        $course_name = filter_input(INPUT_POST, 'course_name', FILTER_SANITIZE_STRING);
        $course_price = filter_input(INPUT_POST, 'course_price', FILTER_SANITIZE_NUMBER_INT);
        $no_hour_course = $_POST['no_houre'];
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

        $query = "UPDATE courses SET  course_name=?, price=?, no_hours=?, course_desc=? WHERE course_id = $name_of_course ";
        $stmt = $pdo_conn->prepare($query);
        $result = $stmt->execute(array($course_name, $course_price, $no_hour_course, $description));   


        if($result)
          echo "Success";
        else
          echo "Failed";
    }
?>
<!-- End Update Course to DB -->

<!-- Start Delete Course -->
<?php 
  if(isset($_POST['Delete'])){

    $course_id = $_POST['del_course_id'];

    $query = "DELETE FROM courses WHERE course_id = $course_id";
    $stmt = $pdo_conn->prepare($query);
    $result = $stmt->execute();


        if($result)
          echo "Deleted Done";
        else
          echo "Failed";
  }

 ?>



<script src="js/jquery.min.js"></script> 
    <!-- Jquery Mini file -->
<script src="js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="js/script.js"></script>
    <script >

    $('#course_type').on('change', function(){

        if($(this).val() == 'online'){
          $('#link').attr('type', 'url')
        } else{
          $('#link').attr('type', 'hidden')
        }
    });


    </script>
</body>