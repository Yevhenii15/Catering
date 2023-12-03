<?php
$loop = new WP_Query(array(
    "post_type" => "footer",
    "posts_per_page" => 1
));

while($loop->have_posts()) {
    $loop->the_post();
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
}
wp_reset_postdata(); 
?>    
            
    </main>
            <footer>
                <div class="some">
                    <a href="<?php echo ($facebook)?>">
                        <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/facebook.svg" alt="">
                    </a>
                    <a href="<?php echo ($instagram)?>">
                        <img src="http://cateringbbq.local/wp-content/themes/catering/Catering/assets/instagram.svg" alt="">
                    </a>
                </div>
                <div class="terms">
                    <a href="<?php echo get_site_url(); ?>/terms-of-service">Terms of Service</a>
                    <a href="<?php echo get_site_url(); ?>/copyrights">Copyrights</a>
                    <a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy Policy</a>
                </div>
                <p>©2023 <span style="font-weight: bolder" >BBQ Catering West-Coast</span>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>

<style scoped>
   
</style>