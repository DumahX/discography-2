<div class="container">
        <ol class="text-center">
<?php
    $albumName = "SELECT songs.song_title, album.album_name, album.album_id FROM songs JOIN album USING (album_id)";
    $albumNameResult = $mysqli->query($albumName);
    $last = null;
    foreach($albumNameResult as $row) {
    # Output the category whenever it changes
        if($row['album_id'] != $last)
            {?>
        <h2><?php echo $row['album_name'];?></h2>
        <?php
        $last = $row['album_id'];
        } ?>
    <ol class="text-center">
    <li><?php echo $row['song_title']; ?></li>
    </ol>
    <?php
    }
    ?>     
    </div><!-- container -->