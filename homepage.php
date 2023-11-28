<?php
/**
 * Template Name: Home Page
 */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>
<body>

<!-- SVG Background -->
<div class="svg-background">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 480" preserveAspectRatio="xMidYMid meet">
  <path fill="#f3f4f5" fill-opacity="0.5" d="M0,240L80,266.7C160,293,320,347,480,336C640,325,800,251,960,218.7C1120,187,1280,197,1360,202.7L1440,208L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg>


</div>

<header>
  <section class="header-section">
    <div class="heading">
      <h2>Your Event,<br> - Our Passion!</h2>
      <h1>BBQ Catering</h1>
    </div>
    <a href="<?php echo get_site_url(); ?>/shop" class="shop-link ">
      <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Top.svg" alt="">
      <p>Menu</p>
      <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/Menu-Bottom.svg" alt="">
    </a>
  </section>
</header>

<nav>
  <ul>
    <li class="button">
      <a href="<?php echo get_site_url(); ?>/about">Who we are</a>
    </li>
    <li class="button">
      <a href="<?php echo get_site_url(); ?>/contact">Contact Us</a>
    </li>
  </ul>
</nav>

<?php get_footer(); ?>
</body>
<style scoped>
/* General Styles */
body {
  margin: 0;
  position: relative;
}

.rb {
  border: 1px solid red;
}

/* Background Styles */
body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('http://cateringbbq.local/wp-content/uploads/2023/11/bg-grills.png');
  background-size: cover;
  background-position: center bottom;
  background-attachment: fixed;
}
.svg-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none; /* Allow interactions with elements behind the SVG */
}
/* Header Styles */
header {
  position: relative;
  line-height: 1.5;
  max-height: 100vh;
  width: 100vw;
  font-size: 1em;
  display: flex;
  flex-direction: column;
  color: #fff;
  z-index: 1;
}

.header-section {
  display: flex;
  flex-wrap: wrap; /* Allow items to wrap onto multiple lines */
  justify-content: space-between;
  align-items: flex-start;
  padding: 2% 5%;
}

.heading {
  display: flex;
  width: 50%; /* Adjust as needed */
  justify-content: start;
  flex-direction: column;
}

h1,
h2 {
  position: relative;
  background-color: none;
  display: flex;
  flex-direction: row;
  margin: 1% 5%;
}

h1 {
  font-size: 2em;
  padding-left: 5%;
}

h2 {
  font-size: 3em;
}

h1::before {
  content: "On-Site";
  background-color: none;
  display: block;
}

/* Navigation Styles */
nav {
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  font-size: 1.5em;
  margin-top:10%

}

nav a,
a.shop-link {
  color: #fff;
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: "garamond-premier-pro", serif;
  font-weight: 400;
  font-style: normal;
  text-align: center;
}

a.shop-link p {
  margin: 0;
  font-size: 2rem;
  ;
}

a.shop-link img {
  width: 100%; /* Take up 100% of the available width */
  max-width: 50%; /* Set a maximum width for larger screens */
  min-width: 20%; /* Set a minimum width to prevent excessive squeezing */
  display: block;
  margin: 0 auto;
}

/* Button Styles */
ul {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center; /* Center the buttons horizontally */
  height: 100%;
}

li {
  position: relative;
  display: flex;
  flex-direction: column;
  margin: 1% 0; /* Adjust as needed */

}

.button {
  background-color: var(--button-bg);
  padding: 0.5em 1em; /* Adjust as needed */
  border: 1px solid var(--gray-shade);
  border-radius: 30px;
  backdrop-filter: blur(10px);
  font-size: 2em; /* Adjust as needed */
  width: 70%; /* Set a percentage width for the button */
  max-width: 300px; /* Set a maximum width for larger screens */
  text-align: center; /* Center the text within the button */
}
.button a {
    display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Utilize the full width of the button */
  white-space: nowrap; /* Prevent text from wrapping */

}

@media screen and (max-width: 850px) {
  .header-section {
    flex-direction: column;
    justify-content: center;
    padding: 2% 2%; /* Adjusted for narrower screens */
  }

  .heading {
    width: 100%;
    
  }

  h1 {
    font-size: 2em;
    margin:0 auto 10% ; /* Center the shop-link horizontally */

  }

  h2 {
    font-size: 3em;
    margin: 2% 1% 0 10%; /* Center the shop-link horizontally */

  }
  nav{
    margin-top: 0;
    
  }
  nav a{
    margin: 0 40%
  }
  a.shop-link{
    margin: 0 auto; /* Center the shop-link horizontally */
   }
  a.shop-link img {
    width: 100%;
  }

  .button {
    width: 800%; /* Allow the button to take up the full width on smaller screens */
    max-width: 70%; /* Prevent the button from becoming too wide on larger screens */
    font-size: 2rem;
  }
  .button a {
    width: auto; /* Reset width for smaller screens */
  }
}

</style>
