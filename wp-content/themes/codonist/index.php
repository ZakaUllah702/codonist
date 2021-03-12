<?php
get_header();
?>

<!---------------------------Scroll Button------------------------------>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 <!---------------------------Hero Section------------------------------>

<section class="hero-section" style ="background-image: url(<?php echo get_theme_file_uri('/img/hero.jpg') ?>);" >

  <div class="hero-text">
    <h1>Coding is not our Profession, It's our Passion</h1>
    <p>Envisioning to Digitalize the Universe of Ideas</p>
  </div>
</section>

<!---------------------------Services Section------------------------------>
   

<section id='services' class="services-section">
  <div class="container">

    <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Services
      <span class="title-line">
        <span class="title-box"></span>
      </span>
    </h2>

    <?php 
      $services = new WP_Query(array(
         'posts_per_page' => -1,
         'post_type' => 'services'
      ));
      ?>
      

    <div class="row mt-5">
      <?php
         while($services->have_posts()){
            $services->the_post();
            ?>
            <div class="col-md-4">
             <div class="card">
               <?php echo the_post_thumbnail(); ?>
             
                <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="blog-text"><?php echo wp_trim_words(get_the_content(), 28); ?> </p>
                </div>
                <div class="sevices-btn">
                  <a href="<?php the_permalink(); ?>"><button class="btn btn-primary">Read More</button></a> 
                  <a href="#"><button class="btn btn-primary">Order Now</button></a> 
                </div>
             </div> 
          </div>
         <?php
         }
         ?>  
    </div>
  </div>
</section>

<!---------------------------Skill Section--------------------------->

<section id='skills' class="skill-section">
  <div class="container">
    <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Skills
      <span class="title-line">
        <span class="title-box"></span>
      </span>
   </h2>

    <div class="skill-carousel mt-5">

      <?php 
          $arg =array(
            'posts_per_page' => -1,
            'post_type' => 'skills',
            'skill_categories' => 'front-end',
          );
          $skills = new WP_Query($arg);
      ?>      
      <div class="owl-carousel owl-theme first">
      <?php
        if ( $skills->have_posts() ){
          
            while($skills->have_posts()){
              $skills->the_post();
              $featured_img_url = get_the_post_thumbnail_url();
          ?>

          <div class="item">
            <img width="256" height="256" src="<?php echo $featured_img_url ?>">
            <h4 class="skill-type"><?php the_title(); ?></h4>
          </div>
           
          <?php
          }
        }
          ?>
      </div>
      

      <?php 
          $arg =array(
            'posts_per_page' => -1,
            'post_type' => 'skills',
            'skill_categories' => 'back-end',
          );
          $skills = new WP_Query($arg);
      ?>
      
      
      <div class="owl-carousel owl-theme second">
      <?php
        if ( $skills->have_posts() ){
          
            while($skills->have_posts()){
              $skills->the_post();
              $featured_img_url = get_the_post_thumbnail_url();
          ?>

          <div class="item">
            <img width="256" height="256" src="<?php echo $featured_img_url ?>">
            <h4 class="skill-type"><?php the_title(); ?></h4>
          </div>
           
          <?php
          }
        }
          ?>
      </div>
     
    </div>  
  </div>
</section>

<!---------------------------Codonist Section------------------------------>

<section id='team' class="codonists">
    <div class="container">
      <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Top Codonist
        <span class="title-line">
          <span class="title-box"></span>
        </span>
      </h2>

      <?php 
      $team = new WP_Query(array(
         'posts_per_page' => -1,
         'post_type' => 'team',
      ));
      ?> 
      
      <div class="row mt-5 justify-content-center">
      <?php
         while($team->have_posts()){
            $team->the_post();
            ?>
          <div class="col-md-3">
            <div class="card">
              <?php echo the_post_thumbnail(); ?>
              
              <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <h6> <?php the_excerpt(); ?>  </h6>
                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
              </div>
            </div>
          </div>
          <?php
         }
         ?>
      </div>
    </div>
</section>

<!---------------------------Works Section------------------------------>

<section id='work' class="work-section">
  <div class="container">
    <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Hardwork
      <span class="title-line">
        <span class="title-box"></span>
      </span>
    </h2>
    <!-- MAIN (Center website) -->

      <div class="main">
        
              <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> All</button>
                <button class="btn" onclick="filterSelection('angular')"> Angular JS</button>
                <button class="btn" onclick="filterSelection('php')"> PHP</button>
                <button class="btn" onclick="filterSelection('saas')"> SAAS</button>
                <button class="btn" onclick="filterSelection('project')"> UL</button>
                <button class="btn" onclick="filterSelection('vuejs')"> VueJS</button>
                <button class="btn" onclick="filterSelection('woocommerce')">Wocommerce</button>
                <button class="btn" onclick="filterSelection('wordpress')">WordPress</button>
              </div>
  
            <!-- Portfolio Gallery Grid -->
          <div class="row">

          <!---------------------------Angular Filter------------------------------>

                  <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'angular-js',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column angular">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------PHP Filter------------------------------>

                <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'php',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column php">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------SAAS Filter------------------------------>

                <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'saas',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column saas">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------UL Filter------------------------------>

                <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'ul',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column project">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------VUE-JS Filter------------------------------>

                <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'vue-js',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column vuejs">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------Woo-Commerce Filter------------------------------>

                <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'woo-commerce',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column woocommerce">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div>

                <!---------------------------Wordpress Filter------------------------------>

                <!-- <?php 
                    $arg =array(
                      'posts_per_page' => -1,
                      'post_type' => 'projects',
                      'project_categories' => 'wordpress',
                    );
                    $projects = new WP_Query($arg);
                   ?>
                <div class="column wordpress">
                        <?php
                        if ( $projects->have_posts() ){
                        
                          while($projects->have_posts()){
                            $projects->the_post();
                            $featured_img_url = get_the_post_thumbnail_url();
                        ?>

                        <div class="content">
                          <img width="334" height="320" src="<?php echo $featured_img_url ?>">
                          <div class="middle">
                            <h4 class="center-text"><?php the_title(); ?></h4>
                          </div>
                        </div>
                        <?php
                        }
                      }
                        ?>       
                </div> -->
                  
            <!-- END GRID -->
          </div>
  
        <!-- END MAIN -->
    </div>
  </div>
</section>

<!---------------------------Testimonial Section------------------------------>

<section id='testimonial' class="testimonial-section">
  <div class="container">
      <h2 class="section-title">Testimonial
        <span class="title-line">
          <span class="title-box"></span>
        </span>
      </h2>
      <h2 class="sub-heading responsive-sub-heading">Helping Our Customers to Succeed in their Business Goals</h2>

      <div class="testimonial-carousel owl-carousel owl-theme owl-loaded owl-drag">
        <?php 
          $arg =array(
            'posts_per_page' => -1,
            'post_type' => 'testimonial',
          );
          $testimonial = new WP_Query($arg);
        ?>
        <div class="owl-stage-outer">
          <div class="owl-stage" style="transform: translate3d(-3360px, 0px, 0px); transition: all 1s ease 0s; width: 7840px;"> 
            <?php
              while($testimonial->have_posts()){
              $testimonial->the_post();
              $featured_img_url = get_the_post_thumbnail_url();
            ?> 
            <div class="owl-item" style="width: 1110px; margin-right: 10px;">              
              <div class="testimonial-item">
                <div class="inner-content">
                  <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                    <h4><p style="text-align: center;"> <?php echo get_the_content(); ?> </p></h4>
                  <div class="icon-right"><i class="fa fa-quote-left"></i></div>
                </div>
                
                <div class="testimonial-image">
                  <div class="media">
                    <img class="mr-3 image-fluid ">
                    <div class="img_client_testimonial">
                      <img width="499" height="498" src="<?php echo $featured_img_url ?>">
                    </div>
                    <div class="media-body mt-4">
                      <h5 class="mt-0"><?php the_title(); ?></h5>
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
                
              </div> 
            </div>
            <?php
            }
            ?>
          </div>
        </div>
        <!-- <div class="owl-nav disabled">
          <button type="button" role="presentation" class="owl-prev">
            <span aria-label="Previous">‹</span>
          </button>
          <button type="button" role="presentation" class="owl-next">
            <span aria-label="Next">›</span>
          </button>
          </div>
        <div class="owl-dots disabled"></div> -->
      </div>
    </div>
</section>

<!---------------------------Contact Us Section------------------------------>

<section id='contact' class="contactus-section">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.1990283016175!2d70.89704241449121!3d31.819572539491592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39266d55f80b5d89%3A0x9510081386df7b28!2sCodonist%20Software%20House!5e0!3m2!1sen!2s!4v1613546370716!5m2!1sen!2s" width="100%" height="900" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    <div class="layout">
    </div>
  <div class="container">
    <h2 class="section-title" style="max-width:max-content;margin:0 auto;">Contact Us
      <span class="title-line">
        <span class="title-box"></span>
      </span>
    </h2>
    <div class="transparent-bg">
      <div class="row justify-content-center">
          <div class="col-md-9 ">
            <h3 class="title-1 Text-Dark"> Let's Contact</h3>
            <h5 class="title-2 Text-Dark">We'd love to help you to complete your IT goals</h5>
            <?php echo do_shortcode('[contact-form-7 id="82" title="Contact Us Form"]'); ?>
          </div>
      </div>
   </div>
  </div>
</section>

<!---------------------------The End------------------------------>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script type="" src="./assets/js/main.js"></script>
      


<?php

get_footer();
?>