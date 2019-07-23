<?php
/*
  Template Name: pablo
*/

if(is_page('pablo')) {
 get_header('pablo');
}
else {
 get_header();
}
 wp_head();
 ?>

 <body class="pablo_main">

 <?php
 echo"<header>";
 the_post_thumbnail('hero_image');
  echo"</header>";

 if( have_posts() ){
   while( have_posts() ){
       the_post();

      echo" <div class='pablo_hero_container'>";
         echo"<div class='pablo_hero_link'>BOKA BORD</div>";
      echo"</div>";

      /* echo"<div class='pablo_section'>";
         echo"<h5 id='pablo_title1'>"; the_title(); echo"</h5>";
         echo"<div class='pablo_content'>"; the_content(); echo"</div>";
         echo"<div class='pablo_grid_image'>"; the_post_thumbnail('grid_image'); echo"</div>";
         echo"</div>";*/
   }
 }


    $args = array(
    'post_type' => 'Pablo',
    'post_status' => 'publish',
    'posts_per_page' => 6,
  );

    $query = new wp_query($args);
    if ($query->have_posts() ){

    while ($query->have_posts()){
    $query->the_post();
    echo"<div class='section'>";
    echo"<h5 id='pablo_title1'>"; the_title();  echo"</h5>";
    the_content(); echo"</div>";
    echo"<div class='pablo_grid_image'>"; the_post_thumbnail('grid_image'); echo"</div>";

    //the_content();
    }
    }else{
        echo"hello";
    }
    wp_reset_postdata();
    echo"</div>";
    echo"</body>";

    //footer

    echo"<div class='pablo_footer'>";
    if(is_page('pablo')) {
     get_footer('pablo');
    }
    else {
     get_footer();
    }
    echo"</div>";
