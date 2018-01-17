<?php 

	function getTitle() {
		echo "Index | Welcome to Beeer Web App";
	}
	include "partials/head.php";

?>

</head>
<body>

	<header>
		<nav class="navbar">
			
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<h3>Beeer Web App</h3>
					</a>
				</div>
				<ul class="nav navbar navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Catalog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Sign-in</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</div>

		</nav>
	</header>


<?php 

	include "partials/foot.php"

?>
