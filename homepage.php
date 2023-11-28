<?php
/**
 * Template Name: Home Page
 */

get_header();
// Retrieve ACF fields for the front page
$wellcome_main_text = get_field('wellcome_main_text');
$welcome_additional_text = get_field('welcome_additional_text');
?>

  <!-- SVG Background -->
  <div class="svg-background">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 684" preserveAspectRatio="xMidYMid meet">
  <path fill="#f3f4f5" fill-opacity="0.5" d="M0,342L80,368.7C160,395,320,449,480,438C640,427,800,353,960,320.7C1120,289,1280,299,1360,304.7L1440,310L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg>




  </div>
  <section class="titles">
    <h2>Your Event,<br> - Our Passion!</h2>
    <h1>BBQ Catering</h1>
   </section>
 
<?php get_footer(); ?>

<style scoped>
/* General Styles */


.rb {
  border: 1px solid red;
}

/* Background Styles */
body {
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
.titles {
  position: absolute;
  top: 4em;
  left: 3em;
  line-height: 1.5;
  max-height: 100vh;
  width: 100vw;
  font-size: 1.5em;
  display: flex;
  flex-direction: column;
  color: #fff;
  z-index: 1;
}

.top-section {
  display: flex;
  flex-wrap: wrap; /* Allow items to wrap onto multiple lines */
  justify-content: space-between;
  align-items: flex-start;
  padding: 2% 5%;
}

/* Navigation Styles */
nav {
  display: flex;
  width: 100%; 
  justify-content: center;
  flex-direction: column;
  text-align: center;
  font-size: 1.5em;
  margin-top:10%;

}


nav a,
a.menu {
  color: #fff;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  align-items: center ;
  position: relative;
  font-family: "garamond-premier-pro", serif;
  font-weight: 400;
  font-style: normal;
  text-align: center;
}

a.menu img{
  display: block;
  width: 70%;
  z-index: 10;
  
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

a.menu {
  padding-bottom: 2em;
}

/* Button Styles */
ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-items: center; /* Center the buttons horizontally */
  height: 100vh;
  padding: 0!important;
  justify-content: center;
  gap: 1em;
  margin-top: 12em;
}

li {
  position: relative;
  display: flex;
  flex-direction: column;
}

.btn {
  background-color: var(--button-bg);
  padding: 0.5em 1em; /* Adjust as needed */
  border: 1px solid var(--gray-shade);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  font-size: 2em; /* Adjust as needed */
  width: 70%; /* Set a percentage width for the button */
  max-width: 300px; /* Set a maximum width for larger screens */
  text-align: center; /* Center the text within the button */
}
.btn a {
    display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Utilize the full width of the button */
  white-space: nowrap; /* Prevent text from wrapping */

}
.menu p {
  background-color: var(--button-bg);
  padding: .1em  1.8em; /* Adjust as needed */
  margin: 0 0.2em;
  border: 1px solid var(--gray-shade);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  font-size: 2em; /* Adjust as needed */
  text-align: center; /* Center the text within the button */
}


 

@media screen and (max-width: 850px) {
  header {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100% ;
  }


  h1 {
    font-size: 2em;
    margin:0 auto 10% ; /* Center the shop-link horizontally */

  }

  h2 {
    font-size: 3em;
    /* Center the shop-link horizontally */

  }
  nav{
    margin-top: 0;
    height: 100vh;
    

  }
  .titles {
    position: absolute;
    top: 10%;
    left:0;
    font-size: 1em;
    
  }

  nav a{
    margin: 0 40%
  }
 
 

  .btn {
    font-size: 1.4em;
    padding:.2em 0.5em;
  }
  .btn a {
    width: auto; /* Reset width for smaller screens */
  }
}

</style>

