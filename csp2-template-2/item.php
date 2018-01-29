<?php

session_start();

if (isset($_SESSION['current_user'])) {
	if ($_SESSION['role'] != 'admin')
		header('location: home.php');
}

function getTitle() {
	echo 'Item Page';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Item Page</h1>
		<?php

		$id = $_GET['id'];

		$file = file_get_contents('assets/items.json');
		$items = json_decode($file, true);

		?>
		<table>
			<tr>
				<td>Product Name</td>
				<td><?php echo $items[$id]['name']; ?></td>
			</tr>
			<tr>
				<td>Image</td>
				<td>
					<img src="<?php echo $items[$id]['image']; ?>" alt="Mock image of beer">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><?php echo $items[$id]['price']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $items[$id]['description']; ?></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><?php echo $items[$id]['category']; ?></td>
			</tr>
		</table>

		<a href="catalog.php">
			<button class="btn btn-default">Back</button>
		</a>
		<!-- Trigger modal with button -->
		<button id="editItem" type="button" class="btn btn-info" data-toggle="modal" data-target="#editItemModal" data-index="<?php echo $id; ?>">Edit</button>

		<!-- Delete -->
		<button id="deleteItem" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteItemModal" data-index="<?php echo $id; ?>">Delete</button>

	</main>

	<!-- edit item modal -->
	<div id="editItemModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<!-- modal content -->
			<form method="POST" action="assets/update_item.php">
				<input hidden name="item_id" value="<?php echo $id; ?>">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Item Details</h4>
					</div>
					<div id="editItemModalBody" class="modal-body"></div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default">Save</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</form>

		</div>	
	</div>

	<!-- delete modal -->
	<div id="deleteItemModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<!-- modal content -->
			<form method="POST" action="assets/delete_item.php">
				<input hidden name="item_id" value="<?php echo $id ?>">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Delete Item</h4>
					</div>
					<div id="deleteItemModalBody" class="modal-body">
						<p>Do you really want to delete this item?</p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					</div>
				</div>
			</form>

		</div>
	</div>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		$(document).ready(function() {

			$('#editItem').click(function() {
				var itemId = 	$(this).data('index');

				$.get('assets/edit_item.php',
					{
						id: itemId
					},
					function(data, status) {
						$('#editItemModalBody').html(data);
				});
			});

			// $('#deleteUser').click(function() {
			// 	var userId = $(this).data('index');

			// 	$.get('assets/remove_user.php',
			// 		{
			// 			id: userId
			// 		},
			// 		function(data, status) {
			// 			$('#editUserModalBody').html(data);
			// 	});
			// });
		});
	</script>

</body>
</html>