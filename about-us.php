<?php
    /**
    * Template Name: About Us
    * 
    */

get_header();
// Retrieve ACF fields for the about-us page
$about_us_top_img = get_field('about_us_top_img');
$about_us_top_text = get_field('about_us_top_text');
$about_us_top_text_2 = get_field('about_us_top_text_2');
$history_title = get_field('history_title');
$text_about_history = get_field('text_about_history');
$text_about_competition_title = get_field('text_about_competition_title');
$text_about_competition = get_field('text_about_competition');
$img2 = get_field('img2');
$family_title = get_field('family_title');
$family_text = get_field('family_text');
$join_us_title = get_field('join_us_title');
$join_us_text = get_field('join_us_text');
$img3 = get_field('img3');
$contact_us_title = get_field('contact_us_title');
$contact_us_text = get_field('contact_us_text');

?>
    <img class="top-bg-nav"src="<?php echo esc_url($about_us_top_img['url']); ?>" alt="about-us-top-img" >

        <p class="title">
            <span class="top-text-one"><?php echo esc_html($about_us_top_text); ?></span>
            <span class="top-text-two"><?php echo esc_html($about_us_top_text_2); ?></span>
        </p>

        <img src="http://cateringbbq.local/wp-content/uploads/2023/12/productimg-29.jpg" class="fixed-img" alt="">

<div class="about-us flex-col" >

    <section class="history">
        <div class="history-text flex-col text-margin text-style">
            <h3><?php echo esc_html($history_title); ?></h3>
            <p><?php echo esc_html($text_about_history); ?></p>
        </div>
    </section>

    <section class="competition flex-row">
        <div class="competition-text flex-col text-margin text-style">
            <h3><?php echo esc_html($text_about_competition_title); ?></h3>
            <p><?php echo esc_html($text_about_competition); ?></p>
        </div>
        <div class="competition-img">
            <img src="<?php echo esc_url($img2['url']); ?>" alt="about-us-competition-img" id="img">
        </div>
    </section>

    <section class="family flex-row">
        <div class="family-text flex-col text-margin text-style">
            <h3><?php echo esc_html($family_title); ?></h3>
            <p><?php echo esc_html($family_text); ?></p>
        </div>
    </section>

    <section class="join-us flex-row">
        <div class="join-us-text flex-col text-margin text-style">
            <h3><?php echo esc_html($join_us_title); ?></h3>
            <p><?php echo esc_html($join_us_text); ?></p>
        </div>
        <div class="join-us-img">
            <img src="<?php echo esc_url($img3['url']); ?>" alt="about-us-join-us-img" id="img">
        </div>
    </section>

    <section class="contact-us">
        <div class="contact-us-text flex-col text-margin text-style">
            <h3><?php echo esc_html($contact_us_title); ?></h3>
            <p><?php echo esc_html($contact_us_text); ?></p>
        </div>
    </section>

</div>

<?php get_footer(); ?>
