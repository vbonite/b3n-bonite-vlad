<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title></title>
</head>
<body>

	<?php 

		// $counter = 0;

		// echo $counter . "<br>";

		// $counter += 230;

		// echo $counter . "<br>";

		// $counter = $counter - 3;

		// echo $counter . "<br>";

		// $counter = $counter * 8;		

		// echo $counter . "<br>";

		// $counter = $counter / 16;

		// echo $counter . "<br>";


		$bankBalance = 99;
		$deposit = 1000;

		if ($bankBalance <100) {
			$bankBalance = $bankBalance + $deposit;
			echo "Your balance is now updated";
		}
		else {
			echo "Your bank balance is greater than 100";
		}

		echo "<br>" . $bankBalance;

	 ?>

</body>
</html>