<?php

//I think I need this for pablo, but i'm not sure yet....

function create_post_type() {
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
  function create_post_type() {
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
add_action('init','create_post_type');


/////end of taxonomies/////

register_sidebar( array(
    'name' => __( 'Footer information', 'Gladje' ),
    'id' => 'footer-information',
    'description' => __( 'Information for the footer', 'Gladje' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __( 'Footer information pablo', 'Gladje' ),
    'id' => 'footer-information-pablo',
    'description' => __( 'Information for the pablo footer', 'Gladje' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

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



?>
