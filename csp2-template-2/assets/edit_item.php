<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div class="form-group">
	<label>Product Name</label>
	<input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'">

	<labe>Description</label>
	<input name="description" class="form-control" type="text" value="'.$items[$id]['description'].'">

	<labe>Image</label>
	<div><img src='.$items[$id]['image'].'></div>
	<input name="image" class="form-control" type="file">

	<labe>Price</label>
	<input name="price" class="form-control" type="text" value="'.$items[$id]['price'].'">
';

	$categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4'];
	echo '
	<label>Category</label>
	<select class="form-control" name="category">';
		foreach ($categories as $category) {
			if ($items[$id]['category'] === $category)
				echo '<option selected>'.$category.'</option>';
			else
				echo '<option>'.$category.'</option>';
		}
	echo'
	</select>

</div>';