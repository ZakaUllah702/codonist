<?php
get_header();
   
    while(have_posts()){
        the_post();
            ?>
             <?php echo the_post_thumbnail() ?>
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="blog-text"><?php echo get_the_content(); ?> </p>
             
         <?php
         }
         ?>  

<?php

get_footer();
?>