<?php
/*
  Template Name: pablo
*/

if(is_page(7-2)) { //This number will be changed later so that it suits pablo's page
 get_header('pablo');
}
else {
 get_header();
}
 wp_head();


 echo"<div id='front_wrapper'>";

 if( have_posts() ){

   echo "<div class='site-container'>";

   while( have_posts() ){

       the_post();
      echo" <div class='front_parent'>";

  //Display the hero image and content
  echo"<div id='pablo_hero'>";
  the_post_thumbnail('hero_image');
   echo"</div>";
     /*echo"<p class='front_title'>"; the_title(); echo"</p>";
    // echo"<div class='pablo_content'>"; the_content(); echo"</div>";

   echo "</div>"; //This is the page parent */

   }
 }
?>

<div class="pablo_hero_container">
  <div class="pablo_hero_link">BOKA BORD</div>
</div>


<main class="pablo_main">

  <div class="pablo_section">
    <h5 id="pablo_title1"><?php the_title() ?></h5>
    <div class="pablo_content"><?php the_content() ?></div>
  </div>

  <div class="pablo_section">
    <img src="">
  </div>

  <div class="pablo_section">
    <img src="">
  </div>

</main>

<?php

//combine these two laterss

  /*  $args = array(
    'post_type' => 'mat', //This will probably have to change, we don't want food on here
    'post_status' => 'publish',
    'posts_per_page' => 6,
  );*/

    $query = new wp_query($args);
    if ($query->have_posts() ){

    while ($query->have_posts()){
    $query->the_post();
    echo"<div class='grid_wrapper'>";
    echo"<div class='grid_image'>";
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
    if(is_page(7-2)) { //This number will be changed later so that it suits pablo's page
     get_footer('pablo');
    }
    else {
     get_footer();
    }
    ?>
    echo"</div>";
