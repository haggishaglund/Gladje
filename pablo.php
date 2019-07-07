<?php
/*
  Template Name: pablo
*/

get_header();

echo"<div id='front_wrapper'>";

if( have_posts() ){

  echo "<div class='site-container'>";

  while( have_posts() ){

      the_post();
      ?>
      <div class="front_parent">

      <?php
    //Display the hero image and content
    the_post_thumbnail('hero_image');
    //echo"<p class='front_title'>"; the_title(); echo"</p>";
    echo"<div class='pablo_content'>"; the_content(); echo"</div>";

  echo "</div>"; //This is the page parent

  }
}

    $args = array(
    'post_type' => 'mat',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    );

    $query = new wp_query($args);
    if ($query->have_posts() ){

    while ($query->have_posts()){
    $query->the_post();
    echo"<div class='grid_wrapper'>";
    echo"<div class='grid_image'>";
    //echo'<a class="archive_link" href="' . get_the_permalink() .'">';the_post_thumbnail('grid_thumbnail');echo"<div class='front_image_title'>"; the_title(); echo"</div>";'</a>';
    echo"</div>";
    echo"</div>";
    //the_content();
    }
    }else{
        echo"hello";
    }
    wp_reset_postdata();
    echo"</div>";
    echo"<div class='pablo_footer'>";
    get_footer();
    echo"</div>";
