<!-- sources
https://en.wikipedia.org/wiki/Big_Bang_(South_Korean_band)-->

<!doctype html>
<html lang="en">
<?php
    // establish nav layout based on true/false statement
    $nav = true;
    // set style
    $style = "css/second.css";
    // establish title name for index
    $title = "BIGBANG Discography - Home";
    $sql = 'SELECT name, song FROM albums';
    // include paths
  require_once('db_connect.php');
  include('inc/header.php');
?>
  <!-- main -->
  <main class=main>
<?php
  include('inc/members.php');
  include('inc/albums.php');
  include('inc/news.php');
?>
</main>
<?php
  include('inc/footer.php');
  include('inc/scripts.php');
?>   
</body>
</html>