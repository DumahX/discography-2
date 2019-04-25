
<!-- section members -->
                 <section class="members" id="Members" >
                    <div class="container">
                        <h2>Members</h2>
                      <div class="row">
                          <?php
                          $member = "SELECT name, description, img_path FROM members";
                          $memberResult = $mysqli->query($member);
                          
                          while ($row = mysqli_fetch_array($memberResult)) { 
                            $img = $row['img_path']; 
                            $imgsrc = "image/".$img; ?>
                          <div class="col-md-4 col-sm-6">
                              <h3><?php echo $row['name']; ?></h3>
                              <img src="<?php echo $imgsrc; ?>" alt="Image" class="img-fluid">
                              <p><?php echo $row['description']; ?></p>
                           </div>
                           <?php } ?>
                             <div class="vip col-md-4 col-sm-6"> 
                                  <img src="image/vip.png" alt="crown" class="img-fluid">
                             </div>
                     </div> <!-- row -->
                    </div><!-- container-->
                </section>