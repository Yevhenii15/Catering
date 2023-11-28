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

/* Background Styles */
.svg-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none; /* Allow interactions with elements behind the SVG */
  flex-grow: 1;
}
/* Header Styles */
.titles {
  position: absolute;
  top: 9em;
  line-height: 1.5;
  max-height: 100vh;
  display: flex;
  flex-direction: column;
  color: #fff;
  z-index: 1;
  margin: 1% 10%;
}
.titles h2 {
  letter-spacing: 0.1em;
  line-height: 1em;
  font-size: 5em;

}
.titles h1 {
  font-family: "itc-avant-garde-gothic-pro", sans-serif;
  font-weight: 500;
  font-size: 2.5em;
  display: flex;
  justify-content: end;
}


/* Navigation Styles */
nav {
  position: absolute;
  display: flex;
  width: 100%;
  height: 100%;
  max-height: 100vh;
  text-align: center;
  font-size: 1.5em;
  justify-content: center;
  bottom: 5%;
  align-items: flex-end;
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
  width: 50%;
}
.menu p {
  background-color: var(--button-bg);
  padding: .1em  1.8em; /* Adjust as needed */
  margin: 0 0.2em;
  border: 1px solid var(--gray-shade);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  font-size: 1.5em; /* Adjust as needed */
  text-align: center; /* Center the text within the button */
}
h1,
h2 {
  position: relative;
  display: flex;
  flex-direction: row;
  margin: 0;
}

h1::before {
  content: "On-Site ";
  background-color: none;
  display: block;
  margin-right: .3em;
}

a.menu {
  padding-bottom: 2em;
  position: absolute;
  top: 10%;
  right: 0;
  z-index: 3;
}

/* Button Styles */
ul {
  list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-items: center;
    padding: 0!important;
    justify-content: center;
    gap: 1em;
    margin-top: 2em;
}

li {
  position: relative;
  display: flex;
  flex-direction: column;
}

.btn {
  background-color: var(--button-bg);
  border: 1px solid var(--gray-shade);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  font-size: 2em;
  width: 100%;
  text-align: center;
}
.btn a {
  display: flex;
  justify-content: center;
  align-items: center;
  white-space: nowrap;
  font-size: 0.7em; 
  height: 1.5em;
  padding: 0.1em 2em;
}


 @media screen and (max-width: 1028px) {
  header {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100% ;
  }
  nav{
    margin-top: 0;
    height: 100vh;
    

  }
  .titles {
    position: absolute;
    top: 20%;
    left:0;
    font-size: 1em;
    
  }
  .titles h2 {
  font-size: 2.5em;
  }
  .titles h1 {
    font-size: 1.5em;
  }
  nav a{
    margin: 0 40%
  }
  ul {
    margin-bottom: 10%;
  }
  a.menu{
  position: static
  }
 .menu p{
  padding: 0 70%;
  margin: 0 0.2em;
  font-size: 1.4em ;
  }
  a.menu img{
    width: 180%;
  } 

  .btn {
    font-size: 1.4em;
  }
  .btn a {
    width: auto; /* Reset width for smaller screens */
    padding:.2em 0.5em;

  }
 }


</style>
