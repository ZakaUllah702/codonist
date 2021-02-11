<?php
/*
* This file used for header
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>  <?php bloginfo('name'); ?></title>

			<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> >
	<?php wp_body_open(); ?>
	<header>
		<h1>  <?php bloginfo('name'); ?> </h1>
		<h5><?php bloginfo('description'); ?></h5>
	</header>
	