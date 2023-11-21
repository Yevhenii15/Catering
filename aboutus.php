<?php
    /**
    * Template Name: About Us
    * 
    */

get_header();
// Retrieve ACF fields for the about-us page
$img1 = get_field('img1');
$text_about_catering = get_field('text_about_catering');
$img2 = get_field('img2');
$text_about_competition = get_field('text_about_competition');
$img3 = get_field('img3');
$img4 = get_field('img4');
$img5 = get_field('img5');
$facebook = get_field('facebook');
$instagram = get_field('instagram');
$img6 = get_field('img6');
?>

<section class="catering">
    <div class="catering-img">
        <img src="<?php echo esc_url($img1['url']); ?>"   alt="<?php echo $img1['alt']?>">
    </div>
    <div class="catering-text">
        <p><?php echo esc_html($text_about_catering); ?></p>
    </div>
</section>

<section class="competition">
    <div class="competition-img">
        <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo $img2['alt']?>">
    </div>
    <div class="competition-text">
        <p><?php echo esc_html($text_about_competition); ?></p>
    </div>
    <div class="competition-img">
        <img src="<?php echo esc_url($img3['url']); ?>" alt="<?php echo $img3['alt']?>">
        <img src="<?php echo esc_url($img4['url']); ?>" alt="<?php echo $img4['alt']?>">
        <img src="<?php echo esc_url($img5['url']); ?>" alt="<?php echo $img5['alt']?>">
    </div>
</section>

<section class="social">
    <button class="facebook">
        <a href="<?php echo esc_url($facebook); ?>" target="_blank">Facebook</a>
    </button>
    <button class="instagram">
        <a href="<?php echo esc_url($instagram); ?>" target="_blank">Instagram</a>
    </button>
</section>

<section class="family">
    <h3>Meet the family</h3>
    <div class="family-img">
        <img src="<?php echo esc_url($img6['url']); ?>" alt="<?php echo $img6['alt']?>">
    </div>
</section>
<?php get_footer(); ?>
