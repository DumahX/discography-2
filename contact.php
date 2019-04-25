<!-- sources
https://en.wikipedia.org/wiki/Big_Bang_(South_Korean_band)-->

<!doctype html>
<html lang="en">
<?php

// set nav layout
$nav = false;
// get stylesheet from index page
$style = "css/second.css";

// set a title name
$title = "BIGBANG Discography - Newsletter";
$error = '';

// require database
require_once('db_connect.php');
// include header
include('inc/header.php');

// process form data
if($_POST) {
	$firstname = "";
	$lastname = "";
	$mail = "";
	$signedup = "$mail has signed up for the newsletter!";
	$receiver = "primitive2015@hotmail.com";
	$id = mysqli_insert_id($mysqli);

	// validate user input and send signed up message

	if(isset($_POST['firstname'])) {
		$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
	}

	if(isset($_POST['lastname'])) {
		$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
	}

	if(isset($_POST['mail'])) {
		$mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['mail']);
		$mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
	}

	if(isset($_POST['signedup'])) {
		$signedup = htmlspecialchars($_POST['signedup']);
	}

	// redirect users to previous page on form submission
	$referrer = $_SERVER['HTTP_REFERER'];

	// send headers

	$headers = 'MIME-Version: 1.0' . "\r\n"
	.'Content-type: text/html; charset=utf-8' . "\r\n"
	.'From: ' . 'New subscriber' . "\r\n";

	if (empty($_POST['mail'])) {
		"Email is required";
	} else {
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			echo 'Please correct email format, <a href="index.php#newsletter">Try again?</a></p>';
			$error = 'yes';
			header("Refresh: 5; URL='$referrer'");
		}
	}
		

	// if input is validated, mail to recipient (me)
	if ($error != 'yes' && mail($receiver, $signedup, $firstname, $mail, $headers)) {
		echo "<h1>Thank you for signing up, $firstname!</h1>
				<img src='image/shaq.gif'><br>";
				// who doesn't love a dancing Shaq?
		// send user input to database for storing
		$mysqli->query("INSERT INTO form(id, firstname,lastname,email,receiver) values('$id' ,'$firstname', '$lastname', '$mail', '$receiver')");
		header("Refresh: 5; URL='$referrer'");
	}
} else {
	echo '<p>Something went wrong</p>';
	header("Refresh: 5; URL='$referrer'");
}
// close sql connection
$mysqli->close();
?>
<?php
include('inc/footer.php');
?>
</body>
</html>