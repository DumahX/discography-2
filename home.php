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
	<title>BIGBANG Discography - Admin Dashboard</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
<body class="loggedin">
	<nav class="navtop">
	<div>
		<h1>BIGBANG</h1>
		<a href="member_upload.php">Add Members</a><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	</nav>
	<div class="content">
		<h2>Upload Albums</h2>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Upload Album Name:<br>
			<input type="text" name="name"><br>

			Upload Songs:<br>
			<input type="text" name="song1"><br>
			<input type="text" name="song2"><br>
			<input type="text" name="song3"><br>
			<input type="text" name="song4"><br>
			<input type="text" name="song5"><br>
			<input type="text" name="song6"><br>
			<input type="text" name="song7"><br>
			<input type="text" name="song8"><br>
			<input type="text" name="song9"><br>
			<input type="text" name="song10"><br>
			<input type="text" name="song11"><br>
			<input type="text" name="song12"><br>
			<input type="text" name="song13"><br>
			<input type="text" name="song14"><br>
			<input type="text" name="song15"><br>

			Year of Album:<br>
			<input type="text" name="year"><br>

			Upload Album Cover:<br>
			<input type="file" name="albumimg"><br>
			<input type="submit" name="submit" value="Add">
		</form>
	</div>
</body>
</html>