<?php 

require_once "connect_DB_PDO.php";


function select($table){

global $pdo_conn;
	$query = "SELECT * FROM $table ";
	$stmt = $pdo_conn->prepare($query);
	$stmt->execute();

	return $rows = $stmt->rowCount();

}

function selectCurrentRows($table){

	global $pdo_conn;

	$query = "SELECT * FROM $table LIMIT 3 ";
	$stmt = $pdo_conn->prepare($query);
	$stmt->execute();

	return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
}



 ?>