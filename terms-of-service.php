<?php
    /**
    * Template Name:  Terms of Service
    * 
    */

get_header();
// Get the fields
$title = get_field('title');
$services_provided = get_field('services_provided');
$description_of_services_provided = get_field('description_of_services_provided');
$deposit_and_payment = get_field('deposit_and_payment');
$description_of_deposit_and_payment = get_field('description_of_deposit_and_payment');
$customer_responsibilities = get_field('customer_responsibilities');
$description_of_customer_responsibilities = get_field('description_of_customer_responsibilities');
$price_adjustments = get_field('price_adjustments');
$description_of_price_adjustments = get_field('description_of_price_adjustments');
$order_confirmation = get_field('order_confirmation');
$description_of_order_confirmation = get_field('description_of_order_confirmation');
$cancellation_policy = get_field('cancellation_policy');
$description_of_cancellation_policy = get_field('description_of_cancellation_policy');
?>
<h1><?php echo $title; ?></h1>
<div class="terms-section">
    <div class="section">
        <h2><?php echo $services_provided; ?></h2>
        <p><?php echo $description_of_services_provided; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $deposit_and_payment; ?></h2>
        <p><?php echo $description_of_deposit_and_payment; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $customer_responsibilities; ?></h2>
        <p><?php echo $description_of_customer_responsibilities; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $price_adjustments; ?></h2>
        <p><?php echo $description_of_price_adjustments; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $order_confirmation; ?></h2>
        <p><?php echo $description_of_order_confirmation; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $cancellation_policy; ?></h2>
        <p><?php echo $description_of_cancellation_policy; ?></p>
    </div>
</div>


<?php get_footer(); ?>