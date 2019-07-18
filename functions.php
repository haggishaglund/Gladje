<?php

function create_post_type() {
  register_post_type( 'Lunchmeny',
    array(
      'labels' => array(
        'name' => __( 'Lunchmeny' ),
        'singular_name' => __( 'Måltid' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'lunch'),
    )
  );
}

add_action( 'init', 'create_post_type' );

function lunch_post_type() {
	$args = array(
		'public' => true,
		'menu_icon' => 'dashicons-text-page',
		'hierarchical' => false,
		'supports' => array('title','thumbnail'),
		'has_archive' => true,

		'taxonomies' => array('veganskt','vegetariskt','fisk','nöt','kyckling','skaldjur','fläsk','lunch'),
		'labels' => array(
			'name'               => __( 'Mat',                        	'lunch-textdomain' ),
			'singular_name'      => __( 'Mat',                        	'lunch-textdomain' ),
			'menu_name'          => __( 'Mat',                        	'lunch-textdomain' ),
			'name_admin_bar'     => __( 'Lägg till ny maträtt',       	'lunch-textdomain' ),
			'add_new'            => __( 'Lägg till',                  	'lunch-textdomain' ),
			'add_new_item'       => __( 'Lägg till ny maträtt',       	'lunch-textdomain' ),
			'edit_item'          => __( 'Ändra maträtt',              	'lunch-textdomain' ),
			'new_item'           => __( 'Ny maträtt',                 	'lunch-textdomain' ),
			'view_item'          => __( 'Visa maträtt',               	'lunch-textdomain' ),
			'search_items'       => __( 'Sök maträtt',                	'lunch-textdomain' ),
			'not_found'          => __( 'Ingen maträtt hittad',       	'lunch-textdomain' ),
			'not_found_in_trash' => __( 'Ingen maträtt i papperskorgen','lunch-textdomain' ),
			'all_items'          => __( 'Visa ALLA maträtter',        	'lunch-textdomain' ),
	),
);
	register_post_type('lunch',$args);
}

add_action( 'init', 'lunch_post_type' );




function mat_post_type(){
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

function create_mattype(){
	$labels = array(
		'name' => _x( 'Mattyper', 'Taxonomy General Name', 'mat-tema' ),
	);

	$args = array(
		'labels'=> $labels,
		'hierarchical'=> true,
		'query_var' => 'mattyper',
	);

	register_taxonomy( 'mattyper', array('mat'), $args );
}
add_action( 'init', 'create_mattype' );

//I think I need this for pablo, but i'm not sure yet....


function create_pablo_type() {
  register_post_type('Pablo',
    array(
      'labels' => array(
      'name' => __('Pablo'),
      'singular_name' => __('Pablo')
      	),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'Pablo'),
    )
  );
}

//add_action('init', 'pablo_post_type');
function pablo_post_type() {
    $args = array(
          'public' => true,
          'menu_icon' => 'dashicons-portfolio',
          'hierarchical' => false,
          'supports' => array('title', 'author', 'thumbnail'),
          'has_archive' => true,

            'taxonomies' => array(),
            'labels' => array(
            'name'               => __( 'Pablo',                   'pablo-textdomain' ),
            'singular_name'      => __( 'Pablo',                   'pablo-textdomain' ),
            'menu_name'          => __( 'Pablo',                   'pablo-textdomain' ),
            'name_admin_bar'     => __( 'Pablo',                   'pablo-textdomain' ),
            'add_new'            => __( 'Skapa inlägg',            'pablo-textdomain' ),
            'add_new_item'       => __( 'Skapa inlägg',            'pablo-textdomain' ),
            'edit_item'          => __( 'Redigera inlägg',         'pablo-textdomain' ),
            'new_item'           => __( 'Nytt inlägg',             'pablo-textdomain' ),
            'view_item'          => __( 'Visa inlägg',             'pablo-textdomain' ),
            'search_items'       => __( 'Sök inlägg',		        		'pablo-textdomain' ),
            'not_found'          => __( 'Inget inlägg hittat',     'pablo-textdomain' ),
            'not_found_in_trash' => __( 'Papperskorgen är tom', 		'pablo-textdomain' ),
            'all_items'          => __( 'Alla inlägg',             'pablo-textdomain' ),
        )
  );
    register_post_type('pablo',$args);
}
add_action('init','pablo_post_type');

/////end of taxonomies/////

function register_my_menus() {
		 register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' )
			)
		);
} // end function register_my_menus()
add_action( 'init', 'register_my_menus' );




//Website Support
add_theme_support('post-thumbnails');
add_theme_support('post-formats');

//add_action( 'init', 'register_my_menus' );
add_image_size('hero_image',993,1220,true);
add_image_size('grid_image',360,279,true);
add_image_size('logo_image', 20,20,true );


// add custom logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );



get_template_part('acf');


?>
