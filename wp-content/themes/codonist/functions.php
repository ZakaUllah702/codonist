<?php
/*
 this is function file
*/

function codonist_resources(){
	wp_enqueue_style('cloud-flare','//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

	wp_enqueue_style('owl-carousel','//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

	wp_enqueue_script('owl-jq', get_template_directory_uri() . '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0.0', true);

	wp_enqueue_script('owl-c', get_template_directory_uri() . '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '1.0.0', true);

	wp_enqueue_style('boot-strap','//getbootstrap.com/docs/4.0/components/card/');
	wp_enqueue_style('boot-straps','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_style('owl-carousel-css', get_stylesheet_uri('/css/owl.carousel.min.css'));
	wp_enqueue_style('font-awesome','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('style',get_stylesheet_uri('/style.css'));

}

add_action('wp_enqueue_scripts','codonist_resources');


add_theme_support( 'post-thumbnails' );

// registering our services post type

add_post_type_support( 'services', 'thumbnail' );

function codonist_services_post_type(){

register_post_type('services',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Services',
		'all_items'=>'All Services',
		'add_new_item'=>'Add New Services',
		'edit_item'=>'Edit Service',
			
		),
	'menu_icon'=> 'dashicons-admin-site',
	'taxonomies'  => array( 'category' ),
	));	
	
};
add_action('init', 'codonist_services_post_type');



// registering our skills post type
add_post_type_support( 'skills', 'thumbnail' );

function codonist_skills_post_type(){


register_post_type('skills',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Skills',
		'all_items'=>'All Skills',
		'add_new_item'=>'Add New Skills',
		'edit_item'=>'Edit Skills',
			
		),
	'menu_icon'=> 'dashicons-welcome-learn-more',
	'taxonomies'  => array( 'category' ),
	));	
};

add_action('init', 'codonist_skills_post_type');


// registering team post type
add_post_type_support( 'team', 'thumbnail' );

function codonist_team_post_type(){


register_post_type('team',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Team',
		'all_items'=>'All Team Members',
		'add_new_item'=>'Add New Team Member',
		'edit_item'=>'Edit Team Member',
			
		),
	'menu_icon'=> 'dashicons-groups',
	'taxonomies'  => array( 'category' ),
	));	
};

add_action('init', 'codonist_team_post_type');

// registering testimonial post type
add_post_type_support( 'projects', 'thumbnail' );

function codonist_projects_post_type(){


register_post_type('projects',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Projects',
		'all_items'=>'All Projects',
		'add_new_item'=>'Add Projects',
		'edit_item'=>'Edit Projects',
			
		),
	'menu_icon'=> 'dashicons-awards',
	'taxonomies'  => array( 'category' ),
	));	
};

add_action('init', 'codonist_projects_post_type');



// registering testimonial post type
add_post_type_support( 'testimonial', 'thumbnail' );

function codonist_testimonial_post_type(){


register_post_type('testimonial',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Testimonial',
		'all_items'=>'All Testimonial',
		'add_new_item'=>'Add New Testimonial',
		'edit_item'=>'Edit Testimonial',
			
		),
	'menu_icon'=> 'dashicons-testimonial',
	'taxonomies'  => array( 'category' ),
	));	
};

add_action('init', 'codonist_testimonial_post_type');


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

