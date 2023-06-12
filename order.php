<?php
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "orders";
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
$name = $_POST['orderNum'];
$name = $_POST['fullName'];
$name = $_POST['contactNum'];
$name = $_POST['email'];
$name = $_POST['address'];

$stmt = $pdo ->prepare("INSERT INTO orders (orderNum, fullName, contactNum, email, address) VALUES (?, ?, ?, ?, ?)");
$stmt -> execute([$_POST['orderNum'], $_POST['fullName'], $_POST['contactNum'], $_POST['email'], $_POST['address']);
 if ($stmt) {
	 echo 'Information has been posted.';
 } else {
	 echo 'Infroamtion could not be posted.';
 }
 ?>