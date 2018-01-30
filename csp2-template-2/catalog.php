<?php

session_start();

function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

// import items.json file
$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

// var_dump($items);

$categories = array_column($items, 'category');

$categories = array_unique($categories);

sort($categories);

$result = array(); /*Empty array of items*/

if (isset($_GET['search']) && $_GET['category'] !== 'All') {
	$cat = $_GET['category'];

	// Filter items based on category chosen
	foreach ($items as $item) {
		if ($item['category'] === $cat) {
			array_push($result, $item);
		}
	}
} else {
	// show all items
	$result = $items;
}

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main id="catalogWrapper" class="wrapper">

		<h1>Catalog Page</h1>

		<!-- go to add new item page -->
		<a href="create_new_item.php">
			<button class="btn btn-primary">Add New Item</button>
		</a>

		<form method="GET">
			<select name="category">
				<option>All</option>
				<?php 

				foreach ($categories as $category) {
					if ($category === $_GET['category']) {
						echo '<option selected>'.$category.'</option>';
					} else {
					echo '<option>'.$category.'</option>';
					}
				} 
				?>
			</select>
			<button type="submit" name="search">Search</button>
		</form>
			
		<div class="items-wrapper">



			<?php

			foreach ($result as $key => $item) {
				echo '
					<div class="item-parent-container form-group">
						<a href="item.php?id='.$item['id'].'">
						<div class="item-container">
							<h3>'.$item['name'].'</h3>
							<img src="'.$item['image'].'" alt="Mock data">
							<p>PHP '.$item['price'].'</p>
							<p>'.$item['description'].'</p>
						</div>  <!-- /.item-container -->
						</a>
						<button class="btn btn-primary form-control">Add to Cart</button>
					</div>
				';
			}

			?>
		</div>  <!-- /.items-wrapper -->
		
	</main>  <!-- /.wrapper -->

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>