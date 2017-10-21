<?php
/**
 * Created by PhpStorm.
 * User: qwickbit
 * Date: 21/10/17
 * Time: 6:14 PM
 */

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Get Post Data
	$name = strip_tags(trim($_POST['name']));
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$recipient = $_POST['recipient'];
	$subject = $_POST['subject'];

	// Validation
	if(empty($name) || empty($email)){
		// Send Error
		http_response_code(400);
		echo 'Please fill proper details';
		exit();
	}



	// Build Email
	$message = "Name: $name\n";
	$message .= "Email: $email\n\n";

	// Build headers
	$headers = "From: $name <$email>";

	// Send Email
	if(mail($recipient, $subject, $message, $headers)){
		http_response_code(200);
		echo 'You are now subscribed';
	} else {
		http_response_code(500);
		echo 'There was a problem';
	}
} else {
	http_response_code(403);
	echo 'There was a problem';
}