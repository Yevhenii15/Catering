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
$section_1_title = get_field('section_1_title');
$section_1_paragraph = get_field('section_1_paragraph');
$img2 = get_field('img2');
$section_2_title = get_field('section_2_title');
$section_2_paragraph = get_field('section_2_paragraph');
$img3 = get_field('img3');
$section_3_title = get_field('section_3_title');
$section_3_paragraph = get_field('section_3_paragraph');
$img4 = get_field('img4');
$section_4_title = get_field('section_4_title');
$section_4_paragraph = get_field('section_4_paragraph');
$img5 = get_field('img5');
$section_5_title = get_field('section_5_title');
$section_5_paragraph = get_field('section_5_paragraph');

?>
    <img class="top-bg-nav"src="<?php echo esc_url($about_us_top_img['url']); ?>" alt="" >

        <p class="title">
            <span class="top-text-one"><?php echo esc_html($about_us_top_text); ?></span>
            <span class="top-text-two"><?php echo esc_html($about_us_top_text_2); ?></span>
        </p>

        <img src="http://bbqcatering.dk/wp-content/uploads/2023/12/productimg-29.webp" class="fixed-img" alt="">

<div class="about-us flex-col" >

    <section class="section-1 flex-row">
        <div class="section-text flex-col text-margin text-style">
            <h3><?php echo esc_html($section_1_title); ?></h3>
            <p><?php echo esc_html($section_1_paragraph); ?></p>
        </div>
        <div class="section-img">
            <img src="<?php echo esc_url($img2['url']); ?>" alt="about-us-history-img" id="img">
        </div>
    </section>

    <section class="section-2 flex-row-reverse">
        <div class="section-text flex-col text-margin text-style">
            <h3><?php echo esc_html($section_2_title); ?></h3>
            <p><?php echo esc_html($section_2_paragraph); ?></p>
        </div>
        <div class="section-img">
            <img src="<?php echo esc_url($img3['url']); ?>" alt="about-us-competition-img" id="img">
        </div>
    </section>

    <section class="section-3 flex-row">
        <div class="section-text flex-col text-margin text-style">
            <h3><?php echo esc_html($section_3_title); ?></h3>
            <p><?php echo esc_html($section_3_paragraph); ?></p>
        </div>
        <div class="section-img">
            <img src="<?php echo esc_url($img4['url']); ?>" alt="about-us-family-img" id="img">
        </div>
    </section>

    <section class="section-4 flex-row-reverse">
        <div class="section-text flex-col text-margin text-style">
            <h3><?php echo esc_html($section_4_title); ?></h3>
            <p><?php echo esc_html($section_4_paragraph); ?></p>
        </div>
        <div class="section-img">
            <img src="<?php echo esc_url($img5['url']); ?>" alt="about-us-join-us-img" id="img">
        </div>
    </section>

    <section class="section-5 flex-row">
        <div class="section-text flex-col text-margin text-style">
            <h3><?php echo esc_html($section_5_title); ?></h3>
            <p><?php echo esc_html($section_5_paragraph); ?></p>
        </div>
        <div class="section-img">
            <?php echo do_shortcode('[contact-form-7 id="5db62c1" title="Contact"]'); ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>
