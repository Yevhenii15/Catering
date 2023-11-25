<?php
    /**
    * Template Name: Home Page
    * 
    */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');

?>
<section class="main-banner">
    <div class="welcome-text">
        <h1><?php echo esc_html($wellcome_main_text); ?></h1>
        <h2><?php echo esc_html($welcome_additional_text); ?></h2>
    </div>
</section>
<nav>
    <div class="nav-wrapper">
        <button-wrapper class="nav-container">
            <button class="nav-item">
                <a href="<?php echo get_site_url(); ?>/shop">Menu</a>
            </button>
            <button class="nav-item">
                <a href="<?php echo get_site_url(); ?>/about">About</a>
            </button>
            <button class="nav-item">
                <a href="<?php echo get_site_url(); ?>/contact">Contact</a>
            </button>
        </button-wrapper>
    </div>
</nav>
<?php get_footer(); ?>

<style scoped>
    .main-banner {
        font-size:2rem
    }
    /* Base styling for the navigation */
nav {
    padding: 10px 0;
}
/* Base styling for the navigation */
nav {
    padding: 10px 0;
}

.nav-wrapper {
    display: flex;
    justify-content: center;
    border: 2px solid red;
}

.nav-container {
    display: flex;
    max-width: 800px; /* Set a maximum width for the navigation */
    width: 100%;
    border: 2px solid red;
}

.nav-item {
    margin: 0 10px;
    width: 250px; /* Set a fixed width for each nav item */
}

button{
    background-color: #d86b24 ;
    border: #ded9d4 2px solid;
    border-radius: 15px;
}
.nav-item a {
    text-decoration: none;
    width: 100%;
    background-color: inherit ;
    font-size: 2.5rem;
    display: flex;
    align-items: center; /* Center text vertically within the button */
    justify-content: center; /* Center text horizontally within the button */
}

/* Responsive styling for smaller screens (phones) */
@media screen and (max-width: 700px) {
    .nav-container {
        flex-direction: column;
        align-items: center;
    }

    .nav-item {
        margin: 15px 0;
    }
}


</style>
