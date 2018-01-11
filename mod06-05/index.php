<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title>PHP Programming, Expressions</title>

	<style type="text/css">
		
		.box {
			border: 1px solid black;
			width: 30px;
			height: 30px;
			padding: 10px;
			display: inline-block;
			text-align: center;
		}

	</style>
</head>
<body>


<!-- <table> -->
	

	<?php 

		// for($count = 1; $count <=10; $count++) {
		// 	echo "$count";
		// 	if ($count<10) {
		// 		echo "-";
		// 	};
		// };

		// for($j=1; $j<=100; $j++){ 
		// 	if($j%10==1){
		// 	echo "<tr>";
		// 	};
		// 	echo "<td>" . $j . "</td>";
		// };

		// for ($i=1; $i <= 10 ; $i++) { 
		// 	for ($j=1; $j <= 10 ; $j++) { 
		// 		$x = $i*$j;
		// 		echo "<span class='box'>".$x."</span>";
		// 	};
		// 	echo "<br>";
		// };

		// for ($i=1; $i <= 10 ; $i++) { 
		// 	for($j=1; $j <= $i ; $j++) { 
		// 		echo "$j ";
		// 	};
		// 	echo "<br>";
		// };

		for($i=1; $i<=50; $i++) {
			// echo $i;
			if ($i%5==0 && $i%3==0) {
				echo $i. " FizzBuzz";
				echo "<br>";
				}
			elseif ($i%5!=0 && $i%3==0) {
				echo $i. " Fizz";
				echo "<br>";
				}
			elseif ($i%5==0 && $i%3!=0) {
				echo $i. " Buzz";
				echo "<br>";
			 	}

		}


	 ?>

<!-- </table> -->

</body>
</html>