<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'revamp';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Check data from form
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent
	die ('Please fill in both username and password!');
}

// Prepare SQL, this will prevent injections
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// bind parameters
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// store the result
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $password);
		$stmt->fetch();

		if (password_verify($_POST['password'], $password)) {
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: home.php');
		} else {
			echo 'Incorrect password!';
		}
	} else {
		echo 'Incorrect username';
	}
	$stmt->close();
}
