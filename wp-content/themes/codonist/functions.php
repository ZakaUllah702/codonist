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


//Services Custom Post Type.

add_action( 'init', 'create_services_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_services_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('service_categories',array('services'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'service_categories' ),
  ));
 
}

// registering our services post type.
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
	));	
	
};
add_action('init', 'codonist_services_post_type');





//Skills Custom Post Type.

add_action( 'init', 'create_skills_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_skills_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('skill_categories',array('skills'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'skill_categories' ),
  ));
 
}



// registering our skills post type
add_post_type_support( 'skills', 'thumbnail' );

function codonist_skills_post_type(){


register_post_type('skills',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Skills',
		'all_items'=>'All Skills',
		'add_new_item'=>'Add New Skill',
		'edit_item'=>'Edit Skill',
			
		),
	'menu_icon'=> 'dashicons-welcome-learn-more',
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





//Project Custom Post Type.

add_action( 'init', 'create_projects_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_projects_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('project_categories',array('projects'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'project_categories' ),
  ));
 
}



// registering project post type

add_post_type_support( 'projects', 'thumbnail' );

function codonist_projects_post_type(){


register_post_type('projects',array(

	'public'=> true,
	'labels'=> array(
		'name'=>'Projects',
		'all_items'=>'All Projects',
		'add_new_item'=>'Add Project',
		'edit_item'=>'Edit Project',
			
		),
	'menu_icon'=> 'dashicons-awards',
	));	
};

add_action('init', 'codonist_projects_post_type');





//Testimonial Custom Post Type.

add_action( 'init', 'create_testimonials_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_testimonials_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('testimonial_categories',array('testimonial'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'testimonial_categories' ),
  ));
 
}



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
	));	
};

add_action('init', 'codonist_testimonial_post_type');





add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'testimonial','excerpt' );
	 add_post_type_support( 'team','excerpt' ); //change page with your post type slug.
}


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}



