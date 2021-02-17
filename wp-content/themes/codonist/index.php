<?php
get_header();
?>
 
<section class="hero-section" style ="background-image: url(<?php echo get_theme_file_uri('/img/hero.jpg') ?>);" >

  <div class="hero-text">
    <h1>Coding is not our Profession, It's our Passion</h1>
    <p>Envisioning to Digitalize the Universe of Ideas</p>
  </div>
</section>

<!---------------------------Services Section------------------------------>
   

<section class="services-section">
  <div class="container">
    <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Services
      <span class="border-line">
        <span class="border-box"></span>
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
</section>

<!---------------------------Skill Section------------------------------>

<section class="skill-section">
  <div class="container">
    <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Skills
      <span class="border-line">
        <span class="border-box"></span>
      </span>
    </h2>
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
        <div class="item"><img src="https://source.unsplash.com/user/erondu/190x150"></div>
    </div>
    </div>
  </div>
</section>

<!---------------------------Codonist Section------------------------------>

<section class="codonists">
    <div class="container">
      <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Top Codonist
        <span class="border-line">
          <span class="border-box"></span>
        </span>
      </h2>

      <?php 
      $team = new WP_Query(array(
         'posts_per_page' => -1,
         'post_type' => 'team'
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

<section class="work-section">
        <div class="container">
        <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Our Hardwork
          <span class="border-line">
            <span class="border-box"></span>
          </span>
        </h2>
                  <!-- MAIN (Center website) -->
                <div class="main">
        
                  <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('all')"> All</button>
                    <button class="btn" onclick="filterSelection('nature')"> Angular JS</button>
                    <button class="btn" onclick="filterSelection('cars')"> PHP</button>
                    <button class="btn" onclick="filterSelection('people')"> SAAS</button>
                    <button class="btn" onclick="filterSelection('nature')">UL</button>
                    <button class="btn" onclick="filterSelection('cars')"> VueJS</button>
                    <button class="btn" onclick="filterSelection('people')">Wocommerce</button>
                    <button class="btn" onclick="filterSelection('people')">WordPress</button>
                  </div>
        
                  <!-- Portfolio Gallery Grid -->
                  <div class="row">
                        <div class="column nature">
                          <div class="content">
                            <img src="assets/img/watch1.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">WATCH</div>
                                </div>
                          </div>
                        </div>
                        <div class="column nature">
                          <div class="content">
                          <img src="assets/img/headphone1.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">HEADFONE</div>

                                </div>
                          </div>
                        </div>
                        <div class="column nature">
                          <div class="content">
                          <img src="assets/img/shoe1.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">SHOE</div>

                                </div>
                          </div>
                        </div>
                    
                        <div class="column cars">
                          <div class="content">
                            <img src="assets/img/camera1.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">CEMERA</div>

                                </div>
                          </div>
                        </div>
                        <div class="column cars">
                          <div class="content">
                          <img src="assets/img/watch2.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">WATCH</div>

                                </div>
                          </div>
                        </div>
                        <div class="column cars">
                          <div class="content">
                          <img src="assets/img/headphone2.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="center-text">HEADFONE</div>

                                </div>
                          </div>
                        </div>
        
                        <div class="column people">
                          <div class="content">
                            <img src="assets/img/camera3.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="text">Building</div>
                                    <div class="center-text">LOREM IPSUM DOLOR</div>
                                    <div class="text"><i class="fa fa-search-plus"></i>&emsp;&emsp;<i class="fa fa-link"></i></div>
                                </div>
                          </div>
                        </div>
                        <div class="column people">
                          <div class="content">
                          <img src="assets/img/shoe1.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="text">Building</div>
                                    <div class="center-text">LOREM IPSUM DOLOR</div>
                                    <div class="text"><i class="fa fa-search-plus"></i>&emsp;&emsp;<i class="fa fa-link"></i></div>
                                </div>
                          </div>
                        </div>
                        <div class="column people">
                          <div class="content">
                          <img src="assets/img/shoe4.jpg" style="width:334px; height:320px;">
                                <div class="middle">
                                    <div class="text">Building</div>
                                    <div class="center-text">LOREM IPSUM DOLOR</div>
                                    <div class="text"><i class="fa fa-search-plus"></i>&emsp;&emsp;<i class="fa fa-link"></i></div>>
                                </div>
                          </div>
                        </div>
                  <!-- END GRID -->
                  </div>
        
                  <!-- END MAIN -->
                  </div>
          </div>
        </section>
      


<?php

get_footer();
?>