<?php
    /**
    * Template Name:  Privacy Policy
    * 
    */

get_header();
// Get the fields
$title = get_field('title');
$information_collection = get_field('information_collection');
$description_of_information_collection = get_field('description_of_information_collection');
$data_security = get_field('data_security');
$description_of_data_security = get_field('description_of_data_security');
$access_to_customer_information = get_field('access_to_customer_information');
$description_of_access_to_customer_information = get_field('description_of_access_to_customer_information');
$data_retention = get_field('data_retention');
$description_of_data_retention = get_field('description_of_data_retention');

?>
<!-- display title -->
<div class="terms-section">
    <div class="wrapper">
        <h1><?php echo $title; ?></h1>
        <div class="section">
            <h2><?php echo $information_collection; ?></h2>
            <p><?php echo $description_of_information_collection; ?></p>
        </div>
        <div class="section">
            <h2><?php echo $data_security; ?></h2>
            <p><?php echo $description_of_data_security; ?></p>
        </div>
        <div class="section">
            <h2><?php echo $access_to_customer_information; ?></h2>
            <p><?php echo $description_of_access_to_customer_information; ?></p>
        </div>
        <div class="section">
            <h2><?php echo $data_retention; ?></h2>
            <p><?php echo $description_of_data_retention; ?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>