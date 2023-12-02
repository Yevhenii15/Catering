<?php
    /**
    * Template Name: Contact Us
    * 
    */

get_header();
$phone = get_field('phone');

?>

<section>
    <div class="phone">
        <h2>Call Us:</h2>       
        <h2><?php echo $phone; ?></h2>
    </div>
    <h4>-OR-</h4>

    <div id="contact-modal" class="contact-modal">
        <div class="modal-content">
            <?php echo do_shortcode('[contact-form-7 id="5db62c1" title="Contact"]'); ?>
        </div>      
    </div>
</section>

<?php get_footer(); ?>
<style>


</style>