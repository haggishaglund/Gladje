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

 <?php
 echo"<header>";
 the_post_thumbnail('hero_image');
      echo" <div class='pablo_hero_container'>";
         echo"<a href='/boka-bord'> <div class='pablo_hero_link'> BOKA BORD </div> </a>";
      echo"</div>";
echo"</header>";

    while( have_posts() ){
        the_post();

   echo"<body class='pablo_main'>";
    /*$args = array(
    'post_type' => 'Pablo',
    'post_status' => 'publish',
    'posts_per_page' => 6,
  );*/
      ?>

  <div class="pablo_section">
    	<?php if(get_field('pablo_title')) {
        if(get_field('pablo_title')) { ?><h5 class="pablo_title1"><?php the_field('pablo_title'); ?></h5><?php }
        if(get_field('pablo_text')) { ?><div class="pablo_content"><?php the_field('pablo_text'); ?></div><?php }
        if(get_field('pablo_bild')) { ?><div class="pablo_grid_image"><?php the_field('pablo_bild'); ?></div><?php }
        }
        if(get_field('pablo_title')) {
  			if(get_field('pablo_title')) { ?><h5 class="pablo_title1"><?php the_field('pablo_title'); ?></h5><?php }
  			if(get_field('pablo_text')) { ?><div class="pablo_content"><?php the_field('pablo_text'); ?></div><?php }
        if(get_field('pablo_bild')) { ?><div class="pablo_grid_image"><?php the_field('pablo_bild'); ?></div><?php }
      }
      echo"</div>";
      }
/*
    $query = new wp_query($args);
    if ($query->have_posts() ){

    while ($query->have_posts()){
    $query->the_post();
    echo"<div class='pablo_section'>";
    echo"<h5 class='pablo_title1'>"; the_title();  echo"</h5>";
    echo"<div class='pablo_content'>"; the_content(); echo"</div>";
    echo"<div class='pablo_grid_image'>"; the_post_thumbnail('grid_image'); echo"</div>";
    echo"</div>"; //section end
    //the_content();
    }
    }else{
        echo"hello";
    }
    wp_reset_postdata();*/
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
