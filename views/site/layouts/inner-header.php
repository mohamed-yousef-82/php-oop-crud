<div class="page blog">
        <!--Start Header -->
        <header id="header">
          
            <!--Start Brand -->
            <a class="navbar-brand" href="/"><img src="<?php echo SITEIMG ?>/logo-h.svg" alt="logo">
            </a>
            <!--End Brand -->
            <div class="header-icons">
               <div>
               <a href="" class="btn btn-outline-primary btn-outline-white"><i class="fa fa-globe fa-spin"></i><?php echo $lang["SLOGIN"] ?></a>
               <a href="https://wa.me/<?php echo App::$app->setting[0]['whatsapp'] ?? false ?>" class="btn btn-outline-primary btn-whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
               </div>
               <div class="social-icons">
                <a href="<?php echo App::$app->setting[0]['facebook'] ?? false ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo App::$app->setting[0]['twitter'] ?? false ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo App::$app->setting[0]['instagram'] ?? false ?>" target="_blank"><i clasinstagrams="fab fa-instagram"></i></a>
                <a href="<?php echo App::$app->setting[0]['linkedin'] ?? false ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?php echo App::$app->setting[0]['youtube'] ?? false ?>" target="_blank"><i class="fab fa-youtube"></i></a>
              </div>
              <form action="" method="post" class="mb-0">
              <!-- <button class="btn btn-outline-primary btn-outline-white" type="submit" name="lang"><i class="fa fa-language"></i><?php echo $lang["LANGTXT"] ?></button> -->
              <!-- <button class="btn btn-outline-primary btn-outline-white" type="submit" name="lang" value="AR"><i class="fa fa-language"></i><?php echo $lang["ARABIC"] ?></button>
              <button class="btn btn-outline-primary btn-outline-white" type="submit" name="lang" value="EN"><i class="fa fa-language"></i><?php echo $lang["ENGLISH"] ?></button> -->
              <button class="btn btn-outline-primary btn-outline-white" type="submit" name="lang"><i class="fa fa-language"></i><?php echo $lang["LANGTXT"] ?></button>

              </form>
              <i class="fa fa-bars toggle-menu" id="toggle-menu-btn"></i>

            </div>

            </header>
            <!--End Header -->
