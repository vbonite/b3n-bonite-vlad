<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title>PHP Programming, Printing and Variables</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<!-- 	<?php 

		//Activity 1

		// $lyrics = array('stars', 'shine', 'yellow');

		// echo "Look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do.<br>";
		// echo "Yeah, they were all $lyrics[2].";

		//Activity 2

		// echo "<ul>
		// 		<li>$lyrics[0]</li>
		// 		<li>$lyrics[1]</li>
		// 		<li>$lyrics[2]</li>
		// 	</ul>";

		// echo "<ul>";

			// foreach($lyrics as $list) {
			// 	echo "<li>$list</li>\n";
			// };

		// echo "</ul>";

		// $firstnames = array('Steph', 'Russell', 'LeBron');
		// $surnames = array('Curry', 'Westbrook', 'James');
		// $teams = array('Warriors', 'Thunders', 'Cavaliers');
		// $jerseys = array('30', '0', '23');

		// foreach ($firstnames as $index => $value) {
		// 	echo "Player: $firstnames[$index] $surnames[$index]<br>";
		// 	echo "Team: $teams[$index]<br>";
		// 	echo "Jersey: $jerseys[$index]<br><br>";
		// };

		// echo "<tr>
	 // 			<th>Player</th>
	 // 			<th>Team</th>
	 // 			<th>Jersey</th>
	 // 		</tr>";



	 // 	echo "<tr>";

	 // 		foreach($firstnames as $index => $value) {
		// 		echo "<td>$firstnames[$index] $surnames[$index]</td>";
		// 		echo "<td>$teams[$index]</td>";
		// 		echo "<td>$jerseys[$index]</td>";
		// 	}

	 // 	echo "</tr>";


// 	$First = array('a', 'b', 'c', 'd');
// 	$Second = array('1', '2', '3', '4');

// 	foreach($First as $indx => $value) {
//     echo $First[$indx].$Second[$indx];
//     echo "<br>";
// }

	 ?> -->

	 <table>
	 	<tr>
 			<th>Player</th>
 			<th>Team</th>
 			<th>Jersey</th>
 		</tr>

 		<?php 
 				$firstnames = array('Steph', 'Russell', 'LeBron');
				$surnames = array('Curry', 'Westbrook', 'James');
				$teams = array('Warriors', 'Thunders', 'Cavaliers');
				$jerseys = array('30', '0', '23');


		 		for($index=0; $index<3; $index++) {
 			 	echo "<tr>
					<td>$firstnames[$index] $surnames[$index]</td>;
					<td>$teams[$index]</td>;
					<td>$jerseys[$index]</td>;
					</tr>";
				}

 		 ?>
	 </table>

</body>
</html>