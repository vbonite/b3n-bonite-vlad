<?php 

session_start();

$id = $_POST['item_id'];

unset($_SESSION['cart'][$id]);

$_SESSION['item_count'] = array_sum($_SESSION['cart']);

// echo 'My Cart <strong style="color:red;';

 ?>