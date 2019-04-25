    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $style; ?>">
         <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    </head>
        <body>
            <header>
                <div class="container-fluid">
                  <h1 class="logo ml-6-sm ">BIGBANG</h1>
                 </div>   
                <!-- Navgation -->
                <?php
                if (!$nav) {
                  echo '<nav id="navbar" class="navbar navbar-expand-md ">
                <div class="container">
                        
                    <div class="navbar-nav">
                      <a class="nav-item" href="index.php">Home</a>
                    </div> <!-- navbar nav -->
                   </div><!-- container -->       
                </nav>';
                } elseif ($nav) {
                  echo '<nav id="navbar" class="navbar navbar-expand-md ">
                <div class="container">
                        
                    <div class="navbar-nav">
                      <a class="nav-item" href="#Members">Members</a>
                      <a class="nav-item" href="#Albums">Albums</a>
                      <a class="nav-item" href="songlist.php">Songlist</a>
                      <a class="nav-item" href="#newsletter">Newsletter</a>
                    </div> <!-- navbar nav -->
                   </div><!-- container -->       
                </nav>

                <div class="container">
                      <img src="image/Bigbang.jpg"  alt="bigbang" class="img-fluid ">
                    <p class="text-center">Bigbang is South Korean group formed by YG Entertainment in 2006.<br>
                    They are called the "Kings of K-pop because they are  most influential group in
                    the industy. 
                    In 2011 they won the <em>Best Worldwide Act</em> at the <em>MTV Europe Music Awards,</em> and have won several music awards
                    in Korea. Their fifth extended play <em>Alive</em> was the first Korean album to chart on <em>Billboard</em> 200.
                    BigBang has released 8 studio album, 10 live albums, 35 singles, and 8
                    extened plays. They are on hiatus at the moment because almost all of  the members are doing their two-year mandatory military service. </p>
                 </div><!-- container -->';
                }
                ?> 
            </header>