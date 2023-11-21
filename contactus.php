<?php
    /**
    * Template Name: Contact Us
    * 
    */

get_header();
// Retrieve ACF fields for the contact-us page
$text_for_contact_us = get_field('text_for_contact_us');
$contact_phone_1 = get_field('contact_phone_1');
$contact_phone_2 = get_field('contact_phone_2');
$contact_mail = get_field('contact_mail');
$facebook = get_field('facebook');
$instagram = get_field('instagram');

?>
<h1>contact us</h1>

<section>
    <div class="contact-us-text">
        <p><?php echo esc_html($text_for_contact_us); ?></p>
    </div>
    <div class="contact-us-phone">
        <p><?php echo esc_html($contact_phone_1); ?></p>
        <p><?php echo esc_html($contact_phone_2); ?></p>
    </div>
    <div class="contact-us-mail">
        <p><?php echo esc_html($contact_mail); ?></p>
    </div>
    <div class="contact-us-social">
        <button class="facebook">
            <a href="<?php echo esc_url($facebook); ?>" target="_blank">Facebook</a>
        </button>
        <button class="instagram">
            <a href="<?php echo esc_url($instagram); ?>" target="_blank">Instagram</a>
        </button>
    </div>
</section>
<?php get_footer(); ?>
