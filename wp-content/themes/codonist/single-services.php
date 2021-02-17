<?php
get_header();
   
    while(have_posts()){
        the_post();
            ?>
            <div class="container">
                <div class="single-service-page-img">
                    <?php echo the_post_thumbnail() ?>
                </div>
                <div class="single-service-page-text">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="blog-text"><?php echo get_the_content(); ?> </p>
                </div>
            </div>
         <?php
         }
         ?>  

<?php

get_footer();
?>