<?php
    /**
    * Template Name: Contact Us
    * 
    */

get_header();

?>



<section>
    <div id="contact-modal" class="contact-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            
            <?php echo do_shortcode('[contact-form-7 id="5db62c1" title="Contact"]'); ?>
        
            </div>
        </div>
       
            
    </div>
    
</section>

<?php get_footer(); ?>
<style>


</style>