<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book now our on-site catering service that brings exceptional food for an unforgettable event. BBQ Catering West-Coast. Book nu vores on-site catering service, der bringer enestående mad til en uforglemmelig begivenhed. BBQ Catering West-Coast.">

    <!-- Open Graph Tags for Social Media -->
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="Book now our on-site catering service that brings exceptional food for an unforgettable event. BBQ Catering West-Coast. Book nu vores on-site catering service, der bringer enestående mad til en uforglemmelig begivenhed. BBQ Catering West-Coast.">
    <meta property="og:image" content="URL_TO_YOUR_IMAGE">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="website">

    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>
    <div class="for-checkout"></div>
    <header class="desktop-header">          
       <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.svg" alt="">
        </a>
        <nav>
            <ul>
                <a href="<?php echo get_site_url(); ?>/shop" class="menu ">
                <?php if (is_front_page()) : ?>
                    <!-- Code to display images for the home page -->
                    <img class="top" src="<?php echo get_template_directory_uri(); ?>/assets/Menu-Top.svg" alt="">
                    <p>Menu</p>
                    <img class="bottom" src="<?php echo get_template_directory_uri(); ?>/assets/Menu-Bottom.svg" alt="">
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
    <p style="display: none" class="title"><span class="top-text-one">Checkout</span><span class="top-text-two">Only one step left</span></p>
    <?php
    if (!is_front_page()) { // Check if the current page is not the homepage
    ?>
    <header class="mobile-header">
        <div class="navs">
            <div class="dropdown">
                <button class="dropbtn"><img src="<?php echo get_template_directory_uri(); ?>/assets/dropdown-icon.svg" alt=""></button>
                <div class="dropdown-content">
                    <div class="style">
                        <a href="<?php echo get_site_url(); ?>/shop" class="menu">Menu</a>
                        <a href="<?php echo get_site_url(); ?>/about">Who we are</a>
                        <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
                    </div>
                    
                </div>
            </div>
            <a class="logo" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.svg" alt="">
            </a>
        </div>
    </header>
    <?php
    }
    ?>

    <main>