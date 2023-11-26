<?php
/**
 * Template Name: Home Page
 */
get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>

<body class="home">

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
                    <a href="<?php echo esc_url(get_site_url()); ?>/shop">Menu</a>
                </button>
                <button class="nav-item">
                    <a href="<?php echo esc_url(get_site_url()); ?>/about">Who We Are</a>
                </button>
                <button class="nav-item">
                    <a href="<?php echo esc_url(get_site_url()); ?>/contact">Contact Us</a>
                </button>
            </button-wrapper>
        </div>
    </nav>

</body>

<?php get_footer(); ?>

<style scoped>
    body.home {
        min-height: 100vh;
        background-image: url('http://cateringbbq.local/wp-content/uploads/2023/11/productimg-35.jpg'); /* To be changed after deployment */
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
    }

    .main-banner {
        font-size: 2rem;
        color: white; /* Set text color to be visible against the background */
        text-align: center;
        padding: 50px; /* Add padding for better visibility */
    }

    /* Base styling for the navigation */
    nav {
        padding: 10px 0;
    }

    .nav-wrapper {
        display: flex;
        justify-content: center;
    }

    .nav-container {
        display: flex;
        max-width: 800px; /* Set a maximum width for the navigation */
        width: 100%;
    }

    .nav-item {
        background-color: #d86b24;  
        border: #ded9d4 2px solid;
        border-radius: 15px;
        margin: 0 10px;
        width: 300px; /* Set a fixed width for each nav item */
        padding: 2% 0;
    }




    .nav-item a {
        text-decoration: none;
        width: 100%;
        background-color: inherit;
        font-size: 2.5rem;
        display: flex;
        align-items: center; /* Center text vertically within the button */
        justify-content: center; /* Center text horizontally within the button */
        color: white; /* Set text color to be visible against the background */
    }

    /* Responsive styling for smaller screens (phones) */
@media screen and (min-width: 801px) {
    body.home {
            background-size: cover; /* Adjusted size for mobile to cover the entire screen */
        background-position: center 40%; Adjusted position for mobile to show the top part

        } 
    }

    @media screen and (max-width: 800px) {

        body.home {
            background-position: center; /* Adjusted position for mobile to show the top part */
        }
 
        .nav-container {
            flex-direction: column;
            align-items: center;
        }

        .nav-item {
            margin: 15px 0;
            width: 80%;
        }
    }
</style>
