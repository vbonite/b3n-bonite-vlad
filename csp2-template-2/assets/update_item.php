<?php 

$item_id = $_POST['item_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];
$category = $_POST['category'];

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$items[$item_id]['name'] = $name;
$items[$item_id]['description'] = $description;
$items[$item_id]['image'] = 'assets/images/'.$image;
$items[$item_id]['price'] = $price;
$items[$item_id]['category'] = $category;

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../item.php?id=$item_id");
