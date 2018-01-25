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

		<h1>Index Page</h1>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>