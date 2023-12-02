<?php
    /**
    * Template Name:  Privacy Policy
    * 
    */

get_header();
// Get the fields
$privacy_policy = get_field('privacy_policy');


?>
<div class="terms-section">
    <div class="wrapper">
        <h1>Privacy Policy</h1>

        <div class="section">
            <p><?php echo $privacy_policy; ?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>