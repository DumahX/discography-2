<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}

require_once('db_connect.php');
?>
<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>BIGBANG Discography - Admin Dasboard</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
<body class="loggedin">
	<nav class="navtop">
	<div>
		<h1>BIGBANG</h1>
		<a href="home.php">Upload Albums</a><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	</nav>
	<div class="content">
	<h2>Add Members</h2>

	<form action="uploadmem.php" method="post" enctype="multipart/form-data">
			Upload Member Name:<br>
			<input type="text" name="membername"><br>

			Upload Member Description:<br>
			<textarea name="description" rows="5" cols="40"></textarea><br>

			Upload Member Picture:<br>
			<input type="file" name="memberimg"><br>

			<input type="submit" name="submit_member" value="Add">
		</form>
	</div>
</body>
</html>