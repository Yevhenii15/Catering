<?php
    /**
    * Template Name:  Terms of Service
    * 
    */

get_header();
// Get the fields
$terms_of_service = get_field('terms_of_service');


?>
<div class="terms-section">
    <div class="wrapper">
        <h1>Terms of service</h1>

        <div class="section">
            <p><?php echo $terms_of_service; ?></p>
        </div>
    </div>
</div>


<?php get_footer(); ?>