
        <!--Start Header -->
        <header id="header">
        <!--Start Brand -->
        <a class="navbar-brand" href="/"><img src="<?php echo SITEIMG ?>/logo-light.svg" alt="logo">
        </a>
        <!--End Brand -->
        <div class="header-icons">
           <div>
           <a href="" class="btn btn-outline-primary btn-outline-white"><i class="fa fa-globe fa-spin"></i><?php echo $lang["SLOGIN"] ?></a>
           <a target="_blank" href="https://wa.me/<?php echo App::$app->setting[0]['whatsapp'] ?? false ?>" class="btn btn-outline-primary btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
           </div>
           <div class="social-icons">
            <a href="<?php echo App::$app->setting[0]['facebook'] ?? false ?>"><i class="fab fa-facebook"></i></a>
            <a href="<?php echo App::$app->setting[0]['twitter'] ?? false ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo App::$app->setting[0]['instagram'] ?? false ?>"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo App::$app->setting[0]['linkedin'] ?? false ?>"><i class="fab fa-linkedin"></i></a>
            <a href="<?php echo App::$app->setting[0]['youtube'] ?? false ?>"><i class="fab fa-youtube"></i></a>
          </div>
          <form method="post">
          <button class="btn btn-outline-primary btn-outline-white" type="submit" name="lang"><i class="fa fa-language"></i><?php echo $lang["LANGTXT"] ?></button>

    </form>

          <i class="fa fa-bars toggle-menu" id="toggle-menu-btn"></i>

        </div>

        </header>
        <!--End Header -->
          


        <!--Start RotatedIcons -->
        <div class="rotated-icons-container">
            <div class="rotated-icons">
                <div class="rotated-icon">
                    <a href="/companies" target="_blank" class="rotate-icon-title">
                        <p><?php echo $lang["COMSERVS"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa-solid fa-building"></i>
                    </div>
                </div>
                <div class="rotated-icon">
                    <a href="/training" target="_blank" class="rotate-icon-title">
                        <p> <?php echo $lang["TRAINING"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa fa-american-sign-language-interpreting"></i>
                    </div>
                </div>
                <div class="rotated-icon">
                    <a href="/accounting" target="_blank" class="rotate-icon-title">
                        <p> <?php echo $lang["ACCOUNTING"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa fa-dollar"></i>
                    </div>
                </div>
                <div class="rotated-icon">
                    <a href="/feasibility" target="_blank" class="rotate-icon-title">
                        <p> <?php echo $lang["FEASIBILITY"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="rotated-icon">
                    <a href="/support" target="_blank" class="rotate-icon-title">
                        <p> <?php echo $lang["SUPPORT"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                </div>
                <div class="rotated-icon">
                    <a href="/blog" target="_blank" class="rotate-icon-title">
                        <p> <?php echo $lang["BLOG"] ?></p>
                    </a>
                    <div class="rotated-icon-inner">
                        <i class="fa-solid fa-address-book"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--End RotatedIcons -->

        <!--Start MainSlider -->
        <section id="main-slider" class="no-margin">
            <video autoplay muted loop id="Video">
                <source src="<?php echo SITEVIDEO ?>/video.mp4" type="video/mp4">
              </video>
              <script>
                document.getElementById("Video").playbackRate = 0.6;
              </script>
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <?php
                    $num =0;
                    foreach($this->slider as $slide){
                    ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $num ?>" class="<?php if($num == 0) { echo 'active'; } ?>" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                    $num++;
                    }
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                    $num =0;
                    foreach($this->slider as $slide){
                    ?>
                    <div class="carousel-item <?php if($num == 0) { echo 'active'; } ?>">
                        <div class="carousel-caption d-md-block">
                          <h5><?php echo $slide["title_".$LN] ?? "" ?></h5>
                          <h1> <?php echo $slide["content_".$LN] ?? "" ?>
                        </h1>
                        </div>
                    </div>
                    <?php
                    $num++;
                    }
                    ?>
                </div>
                <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </button>
                <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <i class="fa fa-chevron-right"></i>
            </button>
            </div>
        </section>
        <!--End MainSlider -->

  