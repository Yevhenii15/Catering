<?php
    /**
    * Template Name:  Copyrigths
    * 
    */

get_header();
// Get the fields
$title = get_field('title');
$ownership_of_content = get_field('ownership_of_content');
$description_of_ownership_of_content = get_field('description_of_ownership_of_content');
$use_of_content = get_field('use_of_content');
$description_of_use_of_content = get_field('description_of_use_of_content');
$prohibited_use = get_field('prohibited_use');
$description_of_prohibited_use = get_field('description_of_prohibited_use');
$copyright_violations = get_field('copyright_violations');
$description_of_copyright_violations = get_field('description_of_copyright_violations');
$contact = get_field('contact');
$description_of_contact= get_field('description_of_contact');
?>
<h1><?php echo $title; ?></h1>
<div class="terms-section">
    <div class="section">
        <h2><?php echo $ownership_of_content; ?></h2>
        <p><?php echo $description_of_ownership_of_content; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $use_of_content; ?></h2>
        <p><?php echo $description_of_use_of_content; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $copyright_violations; ?></h2>
        <p><?php echo $description_of_copyright_violations; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $prohibited_use; ?></h2>
        <p><?php echo $description_of_prohibited_use; ?></p>
    </div>
    <div class="section">
        <h2><?php echo $contact; ?></h2>
        <p><?php echo $description_of_contact; ?></p>
    </div>
</div>
<?php get_footer(); ?>
