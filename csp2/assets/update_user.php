<?php

require '../connect.php';

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$user_role = $_POST['user_role'];
$image = 'http://lorempixel.com/300/300';
$first_name = 'Juan';
$last_name = 'Dela Cruz';
$address = 'Mandaluyong City';
$contact = '09997785468';

$sql = "UPDATE users SET username='$username', password='$password', email='$email', role_id='$user_role', image='$image', first_name='$first_name', last_name='$last_name', address='$address', contact='$contact' where id='$user_id'";

mysqli_query($conn, $sql);

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// $users[$user_id]['username'] = $username;
// $users[$user_id]['password'] = $password;
// $users[$user_id]['email'] = $email;
// $users[$user_id]['role'] = $user_role;

// $jsonFile = fopen('users.json', 'w');
// fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
// fclose($jsonFile);

header("location: ../user.php?id=$user_id");

mysli_close($conn);