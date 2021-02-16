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
               <?php echo the_post_thumbnail('full'); ?>
             
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
      <div class="row mt-5 justify-content-center">
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/hamayun.png') ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hamayun Aziz</h5>
                <h6>Web Application Developer</h6>
                <p class="card-text">He is a specialist in Web Application Development especially in SCSS, Vue.JS, Types Script, Angular, Core PHP, PHP API Development.</p>
              </div>
            </div>
          </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/arsalan.png') ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Arsalan Ahmad</h5>
              <h6>CMS Developer</h6>
              <p class="card-text">He is an highly skilled WordPress developer. He has a lot of experience in creating and customizing WordPress themes and plugins.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/ishaq.png') ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ishaq Khan</h5>
              <h6>Senior Website Designer</h6>
              <p class="card-text">He is responsible for the design and management of all creative and technical design projects.   Ensure projects meet the client requirements.

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/shahriyar.png') ?>"  alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Shahryar Khan</h5>
              <h6>Frontend Developer</h6>
              <p class="card-text">He is an expert Front-end developer and also an expertise in WordPress. He has 2 years of front-end experience and a passion for responsive websites.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/avartar1.png') ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Rashna Arif</h5>
              <h6>WordPress/Frontend Developer</h6>
              <p class="card-text">She has extensive knowledge of front-end development and also in WordPress. she is a creative web designer and builds modern websites with elegant designs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3 justify-content-center">
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/team-leader.png') ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Hamayun Khan</h5>
              <h6>Senior Software Developer and Team Lead</h6>
              <p class="card-text">He has an experience of more than 8 years of Project Management, Team Building, Website Development. Backend developer Php (Laravel)</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_theme_file_uri('/img/hidayat.png') ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Hidayat-ullah</h5>
              <p class="card-text">He is an expert Front-end developer and also an expertise in WordPress. He has 2 years of front-end experience and a passion for responsive websites..</p>
            </div>
          </div>
        </div>
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