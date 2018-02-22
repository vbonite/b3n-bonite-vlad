<?php

require '../connect.php';  // Database connection

$username = $_POST['username'];
$password = sha1($_POST['password']);  // Convert password to SHA1 hash
$email = $_POST['email'];
$image = 'http://lorempixel.com/300/300';
$role_id = 3; // Default role id (customer)
$first_name = 'Juan';
$last_name = 'Dela Cruz';
$address = 'Mandaluyong City';
$contact = '09997785468';

// Create SQL query
$sql = "INSERT INTO users (email, image, username, password, role_id, first_name, last_name, address, contact) VALUES ('$email', '$image', '$username', '$password', '$role_id', '$first_name', '$last_name', '$address', '$contact')";

// Send query to database
$result = mysqli_query($conn, $sql);

// Check if create new user was successful
if ($result)
	header('location: ../login.php');
else
	die('Error: ' . $sql . '<br>' . mysqli_error($conn));

mysqli_close($conn);

// echo $userName . ' ' . $passWord . ' ' . $email;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// $newUser = array(
// 	'username' => $userName,
// 	'password' => $passWord,
// 	'email' => $email,
// 	'role' => 'user'
// );
	
// array_push($users, $newUser);

// $jsonFile = fopen('users.json', 'w');
// fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
// fclose($jsonFile);