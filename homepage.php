<?php
/**
 * Template Name: Home Page
 */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>

  <!-- SVG Background -->
  <div class="svg-background">
    <img class="wave-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/wave-mobile.svg" alt="">
    <svg class="wave-desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 615.6" preserveAspectRatio="xMidYMid meet">
        <path fill="#BABABA" fill-opacity="0.5" d="M0,307.8L80,335.1C160,362.2,320,416.1,480,404.4C640,392.7,800,319.5,960,287.3C1120,255.1,1280,265.1,1360,270.4L1440,275.6L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>
  </div>
  <section class="titles">
    <h2>Your Event,<br> - Our Passion!</h2>
    <h1>BBQ Catering</h1>
   </section>
 
<?php get_footer(); ?>


