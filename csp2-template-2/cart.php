<?php

session_start();

if (isset($_SESSION['current_user'])) {
	header('location: home.php');
}

function getTitle() {
	echo 'Welcome to Kraff Beeer Philippines!';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>My Cart Page</h1>

		<?php 

			var_export($_SESSION['cart']);

 			$file = file_get_contents('assets/items.json');
 			$products = json_decode($file, true);


 			$items = $_SESSION['cart'];

 			foreach ($items as $id => $item) {
 				foreach($products as $product) {
 					if($product['id'] == $id) {
 						echo $product['id'] . "=" .$product['name'] ."<br>"; 
 					}
 				}
				/*echo $products[$id]['name'].$item ."<br>";*/
			}




		
			foreach ($items as $id => $item) {
				echo $products[$id]['name'].$item ."<br>";
			}

			echo $products[0]['name'];

		 ?>
	
		 <table>
		 	<thead>
		 		<tr>
		 			<th>Product Name</th>
		 			<th>Quantity</th>
		 			<th>Price</th>
		 			<th>Subtotal</th>
		 			<th>Remove</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php

		 			$totalAmt = 0;

					$items = $_SESSION['cart'];

 			foreach ($items as $id => $item) {
 				foreach($products as $product) {
 					if($product['id'] == $id) {
 						$subtotal = $product['price']*$item;
						$totalAmt += $subtotal;

 						// echo $product['id'] . "=" .$product['name'] ."<br>";
 					?>
 						<tr>
							<td><?php echo $products[$id]["name"]; ?></td>
							<td><?php echo $item; ?></td>
							<td><?php echo $products[$id]["price"]; ?></td>
							<td><?php echo $subtotal; ?></td>
							<td><span class="glyphicon glyphicon-trash" id="removeItem<?php echo $id; ?>"></span></td>
						</tr>

					<?php
 					}
 				}
				/*echo $products[$id]['name'].$item ."<br>";*/
			}


		 		 ?>
		 	</tbody>
		 </table>

		 <h3>Total Amout: <?php echo $totalAmt; ?></h3>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>