<?php
/*
* This file used for header
*/
?>
<!DOCTYPE html>
<html>
	<head>
			<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> >
	<?php wp_body_open(); ?>
	<header>
	<section class="navigation-bar header-top">
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand code-logo" href="#"> <img src="<?php echo get_theme_file_uri('/img/logo.png') ?>"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Play HTML Game <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PortFolio
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ContactUs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">AboutUs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Career</a>
                  </li>
                </ul>
                      <div>
                      <i class="fa fa-search" style="color: #ffffff;"></i>
                      </div>
              </div>
            </nav>     
    </div>
</section>
</header>

	
	