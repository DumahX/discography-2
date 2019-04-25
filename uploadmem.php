<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
require_once('db_connect.php');

if(isset($_POST['submit_member'])) {
	$name = $_POST['membername'];
	$desc = $_POST['description'];
	$img = $_FILES['memberimg']['name'];
	$dir = "image/";
	$target_file = $dir . basename($_FILES['memberimg']['name']);

	$sql = "INSERT INTO members(name, description, img_path)
			VALUES ('$name', '$desc', '$img')";
	$memberQuery = mysqli_query($mysqli, $sql);
	move_uploaded_file($_FILES['memberimg']['tmp_name'], $dir.$img);
}
if ($memberQuery) {
	$title = "BIGBANG Member Upload - Success!";
	$msg = "<p>Member information uploaded successfully</p>
			<a href='member_upload.php'>Back to Admin Dashboard</a>";
} else {
	$title = "BIGBANG Member Upload - Error!";
	$msg = "<p>There was an error</p>
			<a href='member_upload.php'>Back to Admin Dashboard</a>";
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
	<h2>Album / Members Upload</h2>
	<?php echo $msg; ?>
	</div>
</body>
</html>