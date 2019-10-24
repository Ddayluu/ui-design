<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://kit.fontawesome.com/f1f6bd8687.js" crossorigin="anonymous"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/mobile-view.css"> -->
    <?php wp_head(); ?>
    <title>Home</title>
</head>
<body>
    <!-- Slide menu -->
    <div id="slide-menu">
        <ul>
            <li>
                <a class="" href="<?php echo site_url('');?>">Home</a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('/reviews');?>">Reviews</a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('/projects');?>">Projects</a>
            </li>
            <li>
                <a class="" href="<?php echo site_url('/about');?>">About</a>
            </li>
            <div class="search-box-slide-menu">
                <?php get_search_form(); ?>
            </div>
        </ul>
    </div>
    <!--  -->
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url('');?>">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo">
            </a>
        </div>  
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div> 
        <ul>
            <li>
                <a href="<?php echo site_url('')?>" 
                    <?php if (is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/reviews');?>"
                    <?php if (get_post_type() == 'post') echo 'class="active"' ?>
                >Reviews</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects');?>"
                    <?php if (get_post_type() == 'project') echo 'class="active"' ?>
                >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>"
                <?php if (is_page('about')) echo 'class="active"' ?>
                >About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="search-box">
        <?php get_search_form(); ?>
    </div>

    <?php if(!is_front_page()) {?>
        <main>
    <?php } ?>