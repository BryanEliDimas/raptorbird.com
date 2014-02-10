<?php
if (!isset($_POST["save_hidden"]) || $_POST["save_hidden"] != "contact_hidden_value") {
	header("Location: contact.php"); exit;
}

	//get the POSTed data
$name = $_POST["contact_name"];
$subject = $_POST["message_subject"];
$message = $_POST["contact_message"];
$email = $_POST["senders_email"];

	//check if a name was entered
if (empty($name))
	$error = "Please enter your name";
	//check if a message was entered
elseif (empty($message))
	$error = "Please enter your message";
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
	$error = "You must enter a valid email address";

//check if an error was found. If there is, return them to the form
if (isset($error)) {
	header("Location: contact.php?e=".urlencode($error)); exit;
}


//write the email's content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email";
$email_content .= "Message:\n\n $message";

//send the email
mail ("contact@raptorbird.com", "From Raptorbird.com", $email_content);

//send the user back to the form
header("Location: contact.php?s=".urlencode("Thank you for your message!")); exit;


	?>