<?php require_once "connect_DB_PDO.php"; ?>


<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->
			 <title>Articles</title>

</head>
<body>
	<?php include "header.php"; ?>
	<div class="dis_article">
		<div class="container field">
	
<?php
	if(isset($_GET['id'])){

		$art_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

		$query = "SELECT * FROM articles WHERE art_id= ?";
        $stmt = $pdo_conn->prepare($query);
        $stmt->execute(array($art_id));  

				while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)){

				echo '	<div class="article col-md-7 wow fadeInUp" data-wow-duration="2s"  data-wow-offset:"600">
							<p>'. $rows["art_date"] .'
			         		</p>
							<h2>'. $rows["art_title"] . '
							</h2>
							<div class="img">
							<img src="Article_Images/'.$rows["pic_name"].'" 
			         			alt="" class="col-xs-12 col-lg-12" style="border:3px solid #888;" />
							</div>
							<p>'. $rows["art_content"] .'
							</p>
							
							<a href="blog.php"class="">Back to Blogs</a>
						</div>
					';
					}
}

				 ?>
</div>
</div>
</body>
</html>