<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
require_once('db_connect.php');

if (isset($_POST['submit'])) {
	$albumName = $_POST['name'];
	$year = $_POST['year'];
	$img = $_FILES['albumimg']['name'];
	$dir = "image/";
	$target_file = $dir . basename($_FILES['albumimg']['name']);
	$sql = "INSERT INTO album(album_name, year, img_path) VALUES ('$albumName', '$year', '$img')";
	mysqli_query($mysqli, $sql);
	move_uploaded_file($_FILES['albumimg']['tmp_name'], $dir.$img);
	$id = mysqli_insert_id($mysqli);


	$song1 = $_POST['song1'];
	$song2 = $_POST['song2'];
	$song3 = $_POST['song3'];
	$song4 = $_POST['song4'];
	$song5 = $_POST['song5'];
	$song6 = $_POST['song6'];
	$song7 = $_POST['song7'];
	$song8 = $_POST['song8'];
	$song9 = $_POST['song9'];
	$song10 = $_POST['song10'];
	$song11 = $_POST['song11'];
	$song12 = $_POST['song12'];
	$song13 = $_POST['song13'];
	$song14 = $_POST['song14'];
	$song15 = $_POST['song15'];

	$sql2 = "INSERT INTO songs(song_title, album_id)
			VALUES ('$song1', '$id'), ('$song2', '$id'), ('$song3', '$id'), ('$song4', '$id'), ('$song5', '$id'), 
					('$song6', '$id'), ('$song7', '$id'), ('$song8', '$id'), ('$song9', '$id'), ('$song10', '$id'), 
					('$song11', '$id'), ('$song12', '$id'), ('$song13', '$id'), ('$song14', '$id'), ('$song15', '$id')";
	$query = mysqli_query($mysqli, $sql2);

	if($query) {
	$title = "BIGBANG Album Upload - Success!";
	$msg = "<p>Album information was recorded successfully</p>
			<a href='home.php'>Back to Admin Dashboard</a>";
	} else {
	$title = "BIGBANG Album Upload - Error!";
	$msg = "<p>Sorry, there was an error</p>
		<a href='home.php'>Back to Admin Dashboard</a>";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
	<nav class="navtop">
	<div>
		<h1>BIGBANG</h1>
		<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	</nav>
	<div class="content">
	<h2>Album Upload</h2>
	<?php echo $msg; ?>
	</div>
</body>
<?php $mysqli->close(); ?>
</html>