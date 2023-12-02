<?php
    /**
    * Template Name:  Copyrigths
    * 
    */

get_header();
// Get the fields
$copyright_notice = get_field('copyright_notice');


?>
<div class="terms-section">
    <div class="wrapper">
        <h1>Copyrights Notice</h1>

        <div class="section">
            <p><?php echo $copyright_notice; ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
