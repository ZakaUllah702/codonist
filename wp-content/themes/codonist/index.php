<?php
get_header();
?>

 <!---------------------------Hero Section------------------------------>

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
    <div class="skill-carousel mt-5">
      <div class="owl-carousel owl-theme first">
        <div class="item">
          <img width="225" height="225" src="https://codonist.com/wp-content/uploads/2020/01/javascript.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/javascript.jpg 225w, https://codonist.com/wp-content/uploads/2020/01/javascript-150x150.jpg 150w, https://codonist.com/wp-content/uploads/2020/01/javascript-20x20.jpg 20w, https://codonist.com/wp-content/uploads/2020/01/javascript-100x100.jpg 100w" sizes="(max-width: 225px) 100vw, 225px">
          <h4 class="skill-type"> Jawa Script </h4>
        </div>
        <div class="item">
          <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/icons8-less-logo-256.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/icons8-less-logo-256.png 256w, https://codonist.com/wp-content/uploads/2020/01/icons8-less-logo-256-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/icons8-less-logo-256-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/icons8-less-logo-256-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
          <h4 class="skill-type">LESS</h4>
        </div>
        <div class="item">
          <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/sass.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/sass.png 256w, https://codonist.com/wp-content/uploads/2020/01/sass-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/sass-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/sass-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
          <h4 class="skill-type">SAAS</h4>
        </div>
        <div class="item">
          <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/css-3.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/css-3.png 256w, https://codonist.com/wp-content/uploads/2020/01/css-3-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/css-3-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/css-3-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
          <h4 class="skill-type">CSS3</h4>
        </div>
        <div class="item">
          <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/html5-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/html5-1.png 256w, https://codonist.com/wp-content/uploads/2020/01/html5-1-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/html5-1-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/html5-1-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
          <h4 class="skill-type">HTML</h4>
        </div>
        <div class="item">
          <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/iconfinder_JQuery_logo_282806.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/iconfinder_JQuery_logo_282806.png 256w, https://codonist.com/wp-content/uploads/2020/01/iconfinder_JQuery_logo_282806-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/iconfinder_JQuery_logo_282806-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/iconfinder_JQuery_logo_282806-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
          <h4 class="skill-type">jquery</h4>
        </div>
      </div>
        <div class="owl-carousel owl-theme second">
            <div class="item">
              <img width="480" height="480" src="https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480.png 480w, https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480-300x300.png 300w, https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/icons8-bootstrap-480-100x100.png 100w" sizes="(max-width: 480px) 100vw, 480px">
              <h4 class="skill-type">Bootstrap</h4>
            </div>
            <div class="item">
              <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/Typescript.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/Typescript.png 256w, https://codonist.com/wp-content/uploads/2020/01/Typescript-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/Typescript-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/Typescript-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
              <h4 class="skill-type">Typescript</h4>
            </div>
            <div class="item">
              <img width="480" height="480" src="https://codonist.com/wp-content/uploads/2020/01/icons8-git-480.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/icons8-git-480.png 480w, https://codonist.com/wp-content/uploads/2020/01/icons8-git-480-300x300.png 300w, https://codonist.com/wp-content/uploads/2020/01/icons8-git-480-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/icons8-git-480-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/icons8-git-480-100x100.png 100w" sizes="(max-width: 480px) 100vw, 480px">
              <h4 class="skill-type">Git</h4>
            </div>
            <div class="item">
              <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/php.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/php.png 256w, https://codonist.com/wp-content/uploads/2020/01/php-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/php-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/php-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
              <h4 class="skill-type">PHP</h4>
          </div>
            <div class="item">
              <img width="256" height="256" src="https://codonist.com/wp-content/uploads/2020/01/Wordpress.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/Wordpress.png 256w, https://codonist.com/wp-content/uploads/2020/01/Wordpress-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/Wordpress-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/Wordpress-100x100.png 100w" sizes="(max-width: 256px) 100vw, 256px">
              <h4 class="skill-type">Wordpress</h4>
            </div>
            <div class="item">
              <img width="480" height="480" src="https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480.png 480w, https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480-300x300.png 300w, https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480-150x150.png 150w, https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480-20x20.png 20w, https://codonist.com/wp-content/uploads/2020/01/icons8-vue-js-480-100x100.png 100w" sizes="(max-width: 480px) 100vw, 480px">
              <h4 class="skill-type">Vue Js</h4>
            </div>
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
                    <img src="<?php bloginfo('template_url'); ?> /img/watch1.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">WATCH</div>
                          </div>
                    </div>
                  </div>
                  <div class="column nature">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/headphone1.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">HEADFONE</div>

                          </div>
                    </div>
                  </div>
                  <div class="column nature">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/shoe1.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">SHOE</div>

                          </div>
                    </div>
                  </div>
              
                  <div class="column cars">
                    <div class="content">
                      <img src="<?php bloginfo('template_url'); ?> /img/camera1.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">CEMERA</div>
                          </div>
                    </div>
                  </div>
                  <div class="column cars">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/watch2.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">WATCH</div>

                          </div>
                    </div>
                  </div>
                  <div class="column cars">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/headphone2.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">HEADFONE</div>

                          </div>
                    </div>
                  </div>
  
                  <div class="column people">
                    <div class="content">
                      <img src="<?php bloginfo('template_url'); ?> /img/camera3.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">Cemera</div>
                          </div>
                    </div>
                  </div>
                  <div class="column people">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/shoe1.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">Shoe</div>
                          </div>
                    </div>
                  </div>
                  <div class="column people">
                    <div class="content">
                    <img src="<?php bloginfo('template_url'); ?> /img/shoe4.jpg" style="width:334px; height:320px;">
                          <div class="middle">
                              <div class="center-text">Shoe</div>
                          </div>
                    </div>
                  </div>
            <!-- END GRID -->
            </div>
  
            <!-- END MAIN -->
            </div>
  </div>
</section>

<!---------------------------Testimonial Section------------------------------>

<section class="testimonial-section">
  <div class="container">
      <h2 class="section-title Text-Dark" style="max-width:max-content;margin:0 auto">Testimonial
        <span class="border-line">
          <span class="border-box"></span>
        </span>
      </h2>
      <h2 class="sub-heading responsive-sub-heading">Helping Our Customers to Succeed in their Business Goals</h2>
      <div class="testimonial-carousel owl-carousel owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
          <div class="owl-stage" style="transform: translate3d(-3360px, 0px, 0px); transition: all 1s ease 0s; width: 7840px;">
            <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
              <div class="testimonial-item">
        <div class="inner-content">
          <div class="icon-left"><i class="fa fa-quote-left"></i>
          </div>
            <h4><p style="text-align: center;">Humayun is very great developer to work with.He understands the requirements correctly and his communication is very impressive.He gave me pixel perfect work for WordPress site. I’m recommending anyone who wants to create WordPress site</p>
            </h4>
<!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
          <div class="icon-right"><i class="fa fa-quote-left"></i></div>
        </div>
      <div class="testimonial-image">
         <div class="media">
              <img class="mr-3 image-fluid ">
            <div class="img_client_testimonial">
              <img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px">
            </div>
              <div class="media-body mt-4">
                <h5 class="mt-0">Matin</h5>
                Qaswa web
              </div>
        </div>
      </div>
            </div>
        </div>
      <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
            <div class="testimonial-item">
                <div class="inner-content">
                    <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                  <h4><p style="text-align: center;">I was apprehensive about using a freelancer to help on our website development but Hamayun was absolutely perfect,great communication &amp; went above and beyond to ensure the project was completed on time and to our utmost satisfaction.We will definitely be using you again! Thank you</p>
                  </h4>
        <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                    <div class="icon-right"><i class="fa fa-quote-left"></i></div>
                </div>
                  <div class="testimonial-image">
                      <div class="media">
                          <img class="mr-3 image-fluid ">
                          <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                          <div class="media-body mt-4">
                              <h5 class="mt-0">Carasti</h5>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
      <div class="owl-item" style="width: 1110px; margin-right: 10px;">
        <div class="testimonial-item">
            <div class="inner-content">
              <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                <h4><p style="text-align: center;">I am one of its parmanent client.He is my go to guy for front end but very knowledgeable on the backend as well</p>
                </h4>
            <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                <div class="icon-right"><i class="fa fa-quote-left"></i></div>
            </div>
              <div class="testimonial-image">
                <div class="media">
                <img class="mr-3 image-fluid ">
                    <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                    <div class="media-body mt-4"><h5 class="mt-0">Patrick choi</h5>CAA Financial</div>
                </div>
              </div>
        </div>
      </div>
      <div class="owl-item active" style="width: 1110px; margin-right: 10px;">
        <div class="testimonial-item">
          <div class="inner-content">
                <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                <h4><p style="text-align: center;">Humayun is very great developer to work with.He understands the requirements correctly and his communication is very impressive.He gave me pixel perfect work for WordPress site. I’m recommending anyone who wants to create WordPress site</p>
                </h4>
                <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                <div class="icon-right"><i class="fa fa-quote-left"></i></div>
          </div>
          <div class="testimonial-image">
              <div class="media">
                  <img class="mr-3 image-fluid ">
                  <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                  <div class="media-body mt-4"><h5 class="mt-0">Matin</h5>Qaswa web</div>
              </div>
          </div>
        </div>
      </div>
        <div class="owl-item" style="width: 1110px; margin-right: 10px;">
          <div class="testimonial-item">
              <div class="inner-content">
                <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                <h4><p style="text-align: center;">I was apprehensive about using a freelancer to help on our website development but Hamayun was absolutely perfect,great communication &amp; went above and beyond to ensure the project was completed on time and to our utmost satisfaction.We will definitely be using you again! Thank you</p>
                </h4>
                <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                <div class="icon-right"><i class="fa fa-quote-left"></i></div>
              </div>
              <div class="testimonial-image">
                <div class="media">
                  <img class="mr-3 image-fluid ">
                  <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                  <div class="media-body mt-4"><h5 class="mt-0">Carasti</h5></div>
                </div>
              </div>
          </div>
        </div>
      <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
          <div class="testimonial-item">
                    <div class="inner-content">
                    <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                    <h4><p style="text-align: center;">I am one of its parmanent client.He is my go to guy for front end but very knowledgeable on the backend as well</p>
                    </h4>
                    <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                    <div class="icon-right"><i class="fa fa-quote-left"></i></div>
                    </div>
                <div class="testimonial-image">
                  <div class="media">
                    <img class="mr-3 image-fluid ">
                    <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                    <div class="media-body mt-4"><h5 class="mt-0">Patrick choi</h5>CAA Financial</div>
                  </div>
                </div>
          </div>
        </div>
            <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
              <div class="testimonial-item">
                  <div class="inner-content">
                      <div class="icon-left"><i class="fa fa-quote-left"></i></div>
                      <h4><p style="text-align: center;">Humayun is very great developer to work with.He understands the requirements correctly and his communication is very impressive.He gave me pixel perfect work for WordPress site. I’m recommending anyone who wants to create WordPress site</p>
                      </h4>
                      <!-- <q>I am one of his permanent clients. He is my go to guy for front end, but very knowledgeable on the backend as well.</q>  -->
                      <div class="icon-right"><i class="fa fa-quote-left"></i></div>
                  </div>
                  <div class="testimonial-image">
                      <div class="media">
                          <img class="mr-3 image-fluid ">
                          <div class="img_client_testimonial"><img width="499" height="498" src="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://codonist.com/wp-content/uploads/2019/04/img_avatar.png 499w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-300x300.png 300w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-150x150.png 150w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-20x20.png 20w, https://codonist.com/wp-content/uploads/2019/04/img_avatar-100x100.png 100w" sizes="(max-width: 499px) 100vw, 499px"></div>
                          <div class="media-body mt-4"><h5 class="mt-0">Matin</h5>Qaswa web</div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
        <div class="owl-nav disabled">
          <button type="button" role="presentation" class="owl-prev">
            <span aria-label="Previous">‹</span>
          </button>
          <button type="button" role="presentation" class="owl-next">
            <span aria-label="Next">›</span>
          </button>
        </div>
        <div class="owl-dots disabled"></div>
      </div>
    </div>
</section>

<!---------------------------Contact Us Section------------------------------>

<section class="contactus-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780.562102591999!2d70.8950859757437!3d31.81733842508929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39266ddba2d5d961%3A0x2259f5b5db747d9d!2sBasti%20Ustrana%20(Northern)%2C%20Dera%20Ismail%20Khan%2C%20Khyber%20Pakhtunkhwa!5e0!3m2!1sen!2s!4v1613386490635!5m2!1sen!2s" width="100%" height="675" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="layout">
    </div>
  <div class="container">
    <h2 class="section-title" style="max-width:max-content;margin:0 auto;">Contact Us
      <span class="border-line">
        <span class="border-box"></span>
      </span>
    </h2>
    <div class="transparent-bg">
      <div class="row justify-content-center">
          <div class="col-md-9 ">
              <form method="post" action="inc/mail.php" id="contactForm" class="contact-form">
                  <h3 class="title-1 Text-Dark"> Let's Contact</h3>
                  <h5 class="title-2 Text-Dark">We'd love to help you to complete your IT goals</h5>
                  <div class="form-group contact-us-form">
                      <input type="text" class="form-control txtfield" id="name" name="name" placeholder="What kind of project?" required="">
                  </div>
                  <div class="form-group contact-us-form">
                      <input type="text" class="form-control txtfield" id="name" name="name" placeholder="Name" required="">
                  </div>
                  <div class="form-group contact-us-form">
                      <input type="email" class="form-control txtfield" id="email" name="email" placeholder="Email" required="">
                  </div>
                  <div class="form-group contact-us-form">
                      <textarea class="form-control txtfield" id="message" rows="4" name="message" placeholder="Message" required=""></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btnsubmit">Submit</button>
              </form>
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