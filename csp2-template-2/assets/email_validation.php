<?php

// $username = $_POST['username'];

// processing
$file = file_get_contents('users.json');
$emails = json_decode($file, true);
$emailAdds = [];
foreach ($emails as $email) {
	array_push($emailAdds, $email['email']);
}

if (isset($_POST['email'])) {
	$email_entered = $_POST['email'];

	if (in_array($email_entered, $emailAdds)) {
		echo 'Email <span class="red-message"> not valid </span>';
	} else {
		echo 'Email <span class="green-message"> valid </span>';
	}
}
