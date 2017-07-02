<?php require_once "connect_DB_PDO.php"; 
		session_start();
?>
<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- IE Combitability Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile First Meta -->

			 <title>Contact Us</title>

</head>
<body>
<?php include "header.php" ?>

<section id="contact">
	<div class="field"
	<div class="container contact_row">
		<div id="contact-content" class=" col-xs-12 col-md-6 col-lg-5" data-aos="fade-left" data-aos-duration="3000">
			<h1>Contact</h1>

			<div class="row" id="contact-inf">
				<div class="col-xs-6">
					<h4>Veggie</h4>
					<p>3428 Magnolia Avenue </p>
					<p>Hackettstown, NJ 07840</p>
				</div>
				<div class="col-xs-6 ">
					<h4>Reservations</h4>
					<p>reservations@vegggie.com</p>
					<p>+48 202-555-0114</p>
				</div>
			</div>

			<div id="contact-form" class="row">
				<h4>Contact Form</h4>
				<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
					<input type="text" placeholder="Name" name="name" class="col-xs-5 form-control wow lightSpeedIn" data-wow-duration="2s" data-wow-offset="100" required> <br><br>
					<input type="email" placeholder="Email" name="email" class="col-xs-5 form-control wow rotateInDownLeft" data-wow-duration="2s" data-wow-offset="100" required><br><br>
					<input type="text" placeholder="Subject" name="subject" class="col-xs-12 form-control wow rotateInDownRight" data-wow-duration="2s" data-wow-offset="100" required><br><br>
					<textarea name="message" placeholder="Message" class="col-xs-12 form-control wow rotateInUpLeft" data-wow-duration="2s" data-wow-offset="100"></textarea><br><br>
					<input type="submit" name="send" value="Send" class="btn btn-primary ">
				</form>
			</div>
		</div>
	</div>
	</div>	
</section>

<!-- Function Mail -->
<?php 
	if(isset($_POST['send'])){

		$message = $_POST['message'];
		
		$name = $_POST['name'];
		$subject = $name . ": ".$_POST['subject'];
		
		$message = $_POST['message'];

		mail('ahmedhdawy@azhar.edu.eg', $subject, message);
	}
	

?>


<?php include "footer.php" ?>

	  <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
	  <script src="js/wow.min.js"></script> <!-- WOW.js Mini file -->
	  <script>new WOW().init();</script> <!-- Activate WOW.js File -->
	  <script src="js/jquery.nicescroll.min.js"></script> <!-- Nice Scroll Mini file -->
	  <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
</body>
    </html>
