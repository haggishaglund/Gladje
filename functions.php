<?php

  function food_post_type(){
    $args = array(
          'public' => true,
          'menu_icon' => 'dashicons-text-page',
          'hierarchical' => false,
          'supports' => array('title','thumbnail'),
          'has_archive' => true,

          //Not sure if this is how you do it
          'taxonomies' => array('all','vegan','vegetarian','fish','beef','chicken','pork','dessert','lunch','ala-carte'),

            'labels' => array(
            'name'               => __( 'Food',                       'food-textdomain' ),
            'singular_name'      => __( 'Food',                       'food-textdomain' ),
            'menu_name'          => __( 'Food',                       'food-textdomain' ),
            'name_admin_bar'     => __( 'Add food item',              'food-textdomain' ),
            'add_new'            => __( 'Add New',                    'food-textdomain' ),
            'add_new_item'       => __( 'Add New food item',          'food-textdomain' ),
            'edit_item'          => __( 'Edit food item',             'food-textdomain' ),
            'new_item'           => __( 'New food item',              'food-textdomain' ),
            'view_item'          => __( 'View food item',             'food-textdomain' ),
            'search_items'       => __( 'Search food item',           'food-textdomain' ),
            'not_found'          => __( 'No food found',              'food-textdomain' ),
            'not_found_in_trash' => __( 'No foods found in trash',    'food-textdomain' ),
            'all_items'          => __( 'All food items',             'food-textdomain' ),
        ),

  );
  register_post_type('food',$args);
}
  add_action('init','food_post_type');

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





?>
