<?php 

	$dbhost = 'mysql:host=localhost;dbname=website';
	$user = 'ahmed';
	$dbpass = 'ahmed12';
	$option = array(
			PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES UTF8',
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
		);

try {
	$pdo_conn = new PDO($dbhost, $user, $dbpass, $option);

} catch (Exception $e) {
	
	echo "Sorry you may not have access to the database" . $e->getMessage();
}
?>