<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        تعاون لحلول الأعمال
    </title>
    <!-- core CSS -->
    <link href="<?php echo SITECSS ?>/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo SITECSS ?>/fontawesome.min.css" rel="stylesheet" />
    <link href="<?php echo SITECSS ?>/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo SITECSS ?>/responsive.css" rel="stylesheet" />
    <?php
    if($_SESSION["lang"] == "EN"){
        ?>
        <link href="<?php echo SITECSS ?>/ltr.css" rel="stylesheet" />
        <?php
    }
    ?>
    <!-- <link href="css/ltr.css" rel="stylesheet" /> -->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <body>
    <div class="overlay" id="overlay">
    <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
    </div>
</div>
        <div class="menu" id="menu">
            <ul>
                <li>
                    <a href="/">
                        <i class="fa fa-home"></i>
                        <?php echo $lang["HOME"] ?>
                    </a>
                </li>
                <li>
                    <a href="/about">
                        <i class="fa fa-home"></i>
                        <?php echo $lang["WHOUS"] ?>
                    </a>
                </li>
                <li>
                    <a href="/companies">
                        <i class="fa fa-building"></i>
                        <?php echo $lang["COMSERVS"] ?>
                     </a>
                </li>
                                      <li>
                    <a href="/training">
                        <i class="fa fa-american-sign-language-interpreting"></i>
                        <?php echo $lang["TRAINING"] ?>
                     </a>
                </li>
                <li>
                    <a href="/accounting">
                        <i class="fa fa-dollar"></i>
                        <?php echo $lang["ACCOUNTING"] ?>
                     </a>
                </li>
                <li>
                    <a href="/feasibility">
                        <i class="fa fa-pencil"></i>
                        <?php echo $lang["FEASIBILITY"] ?>
                     </a>
                </li>
                <li>
                    <a href="/support">
                        <i class="fa fa-phone"></i>
                        <?php echo $lang["SUPPORT"] ?>
                     </a>
                </li>

                <li>
                    <a href="/blog">
                        <i class="fa fa-book"></i>
                        <?php echo $lang["BLOG"] ?>
                     </a>
                </li>            
                <li>
                    <a href="/works">
                        <i class="fa fa-book"></i>
                        <?php echo $lang["PORTFOLIO"] ?>
                     </a>
                </li> 
            </ul>
        </div>
