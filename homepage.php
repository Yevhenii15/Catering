<?php
    /**
    * Template Name: Home Page
    * 
    */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>
<section class="main-banner">
    <div class="welcome-text">
        <h1><?php echo esc_html($wellcome_main_text); ?></h1>
        <h2><?php echo esc_html($welcome_additional_text); ?></h2>
    </div>
</section>
<?php get_footer(); ?>
