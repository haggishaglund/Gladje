<?php

	function food_post_type(){
	$args = array(
			'public' => true,
			'menu_icon' => 'dashicons-text-page',
			'hierarchical' => false,
			'supports' => array('title','thumbnail'),
			'has_archive' => true,

			//Not sure if this is how you do it
			'taxonomies' => array('allt','veganskt','vegetariskt','fisk','nötkött','kyckling','fläsk','efterrätt','lunch','ala-carte'),

			'labels' => array(
			'name'               => __( 'Mat',                        'mat-textdomain' ),
			'singular_name'      => __( 'Mat',                        'mat-textdomain' ),
			'menu_name'          => __( 'Mat',                        'mat-textdomain' ),
			'name_admin_bar'     => __( 'Lägg till ny maträtt',       'mat-textdomain' ),
			'add_new'            => __( 'Lägg till',                  'mat-textdomain' ),
			'add_new_item'       => __( 'Lägg till ny maträtt',       'mat-textdomain' ),
			'edit_item'          => __( 'Ändra maträtt',              'mat-textdomain' ),
			'new_item'           => __( 'Ny maträtt',                 'mat-textdomain' ),
			'view_item'          => __( 'Visa maträtt',               'mat-textdomain' ),
			'search_items'       => __( 'Sök maträtt',                'mat-textdomain' ),
			'not_found'          => __( 'Ingen maträtt hittad',       'mat-textdomain' ),
			'not_found_in_trash' => __( 'Ingen maträtt i papperskorgen','mat-textdomain' ),
			'all_items'          => __( 'Visa ALLA maträtter',        'mat-textdomain' ),
		),

	);
	register_post_type('mat',$args);
}
	add_action('init','mat_post_type');

//incase we want this
/*  function register_my_menus() {
		 register_nav_menus(
			array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
		)
		);
	}*/



//Website Support
add_theme_support('post-thumbnails');
add_theme_support('post-formats');

//add_action( 'init', 'register_my_menus' );
add_image_size('hero_image',1,1,true);
add_image_size('grid_image',1,1,true);
add_image_size('logo_image', 1,1,true );


// add custom logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );




?>
