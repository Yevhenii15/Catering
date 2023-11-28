<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body>
    <header>          
       <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Logo.svg" alt="">
        </a>
        <nav>
            <ul>
                <a href="<?php echo get_site_url(); ?>/shop" class="menu ">
                    <img class="top" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Top.svg" alt="">
                        <p>Menu</p>
                    <img class="bottom" src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Bottom.svg" alt="">
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
    <main>
