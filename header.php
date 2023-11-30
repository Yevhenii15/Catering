<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>

    <header class="desktop-header">          
       <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Logo.svg" alt="">
        </a>
        <nav>
            <ul>
                <a href="<?php echo get_site_url(); ?>/shop" class="menu ">
                <?php if (is_front_page()) : ?>
                    <!-- Code to display images for the home page -->
                    <img class="top" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Top.svg" alt="">
                    <p>Menu</p>
                    <img class="bottom" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Bottom.svg" alt="">
                <?php else : ?>
                    <!-- Code for other pages without images -->
                    <p>Menu</p>
                <?php endif; ?>
                </a>
                <li class="btn">
                    <a href="<?php echo get_site_url(); ?>/about">Who we are</a>
                </li>
                <li class="btn">
                    <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <?php
    if (!is_front_page()) { // Check if the current page is not the homepage
    ?>
    <header class="mobile-header">
        <div class="navs">
            <div class="dropdown">
                <button class="dropbtn"><img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/dropdown-icon.svg" alt=""></button>
                <div class="dropdown-content">
                    <div class="style">
                        <a href="<?php echo get_site_url(); ?>/shop" class="menu">Menu</a>
                        <a href="<?php echo get_site_url(); ?>/about">Who we are</a>
                        <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
                    </div>
                    
                </div>
            </div>
            <a class="logo" href="<?php echo get_site_url(); ?>">
                <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Logo.svg" alt="">
            </a>
        </div>
    </header>
    <?php
    }
    ?>

    <main>
