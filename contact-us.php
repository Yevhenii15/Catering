<?php
    /**
    * Template Name: Contact Us
    * 
    */

get_header();
$phone = get_field('phone');

?>
<img class="top-bg-nav" src="http://cateringbbq.local/wp-content/uploads/2023/11/top-about-1.png" alt="Background for menu page">
<p class="title"><span class="top-text-one">Contact us</span><span class="top-text-two">Get in touch</span></p>
<section>
    <div class="phone">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="">    
        <h2><?php echo $phone; ?></h2>
    </div>


    <div id="contact-modal" class="contact-modal">
        <div class="modal-content">
            <?php echo do_shortcode('[contact-form-7 id="5db62c1" title="Contact"]'); ?>
        </div>      
    </div>
</section>

<?php get_footer(); ?>
<style>


</style>