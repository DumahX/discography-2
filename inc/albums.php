<!-- section 2 albums -->               
                <section class="album" id="Albums" >
                  <div class="container">
                      <h2> Albums</h2>              
                   
                       <div class="row">
                       <?php
                       $albumName = "SELECT album_name, year, img_path FROM album";
                        $albumNameResult = $mysqli->query($albumName);
                        while ($row = mysqli_fetch_array($albumNameResult)) { 
                          $img = $row['img_path'];
                          $imgsrc = "image/".$img; ?>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <h4><?php echo $row['album_name']; ?><br><?php echo $row['year']; ?></h4>
                        
                               <a href="songlist.php"><img src="<?php echo $imgsrc; ?>" alt="album vol.1" class="img-fluid"></a>
                            </div>
                            <?php } ?>
                    </div> <!-- row -->
                 </div><!-- container-->   
                </section>