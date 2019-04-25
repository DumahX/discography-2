<?php
session_start();
session_destroy();
// redirect to index
header('Location: index.php');
?>