<?php
/**
 * Template Name: Home Page
 */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>
<body> <!-- Add body tag -->
  <header>
    <section class="header-section">
      <div class="heading">
        <h2>Your Event,<br> - Our Passion!</h2>
        <h1>BBQ Catering</h1>
      </div>
      <a href="<?php echo get_site_url(); ?>/shop" class="shop-link red-border">
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

.red-border {
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
  margin: 1%;
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
}

a.shop-link img {
  width: 20em; /* Adjusted for responsiveness */
  max-width: 200px;
  display: block;
  margin: 0 auto;
}

/* Button Styles */
ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  height: 100%;
}

li {
  position: relative;
  display: flex;
  flex-direction: column;
}

.button {
  background-color: var(--button-bg);
  margin: 1em 2em; /* Adjust as needed */
  padding: 0.5em 1em; /* Adjust as needed */
  border-radius: 30px;
  backdrop-filter: blur(20px);
  font-size: 2em; /* Adjust as needed */
}
.button a {
    display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Utilize the full width of the button */
  white-space: nowrap; /* Prevent text from wrapping */

}

@media screen and (max-width: 768px) {
  .header-section {
    flex-direction: column;
    justify-content: center;
    padding: 2% 2%; /* Adjusted for narrower screens */
  }

  .heading {
    width: 100%;
  }

  h1 {
    font-size: 3em;
  }

  h2 {
    font-size: 4em;
  }
  nav a, a.shop-link{
    margin: 0 40%
  }

  a.shop-link img {
    width: 100%;
  }

  .button {
    font-size: 2rem;
  }
  .button a {
    width: auto; /* Reset width for smaller screens */
  }
}

</style>

