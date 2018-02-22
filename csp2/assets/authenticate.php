<?php

session_start();

require '../connect.php';  // Create a database connection

$username = $_POST['username'];
$password = sha1($_POST['password']);

// var_dump($username);
// var_dump($password);

// echo $userName . ' ' . $passWord;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);
$sql = "SELECT u.username, u.password, r.description FROM users u JOIN roles r ON (u.role_id = r.id) WHERE u.username = '$username'";

$result = mysqli_query($conn, $sql);

$isLogInSuccessful = false;

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    if ($username == $user['username'] && $password == $user['password']) {
        $isLogInSuccessful = true;
        $_SESSION['current_user'] = $user['username'];
        $_SESSION['role'] = $user['description'];
    }
}

// var_dump($users);

// foreach ($users as $user) {
//     // echo $user['username'] . ' ' . $user['password'];

//     if ($userName == $user['username'] && $passWord == $user['password']) {
//         // echo 'Login was successful.';
//         $isLogInSuccessful = true;
//         $_SESSION['current_user'] = $user['username'];
//         $_SESSION['role'] = $user['role'];
//         break;
//     }
// }

if ($isLogInSuccessful) {
    // if successful login
    header('location: ../home.php');
} else {
    // if failed login
    header('location: ../login.php');
}