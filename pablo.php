<?php
/*
  Template Name: pablo
*/

if(is_page(10)) { //This number will be changed later so that it suits pablo's page
 get_header('pablo');
}
else {
 get_header();
}
 wp_head();
?>


<main>

  <div class="pablo_section">
    <h5>ÖPPETTIDER</h5>
    <p>Ons &ndash; lör  17 &ndash; 00</p>
    <p>Sön &ndash; tis  Stängt</p>
  </div>

  <div class="pablo_section">
    <img src="">
  </div>

  <div class="pablo_section">
    <h5>OM PABLO</h5>
    <p>Hola compadre!
        Det här är ingen vanlig tacorestaurang..
        Här hittar du den genuina mexikanska matlagningen!
        En skön och schysst restaurang som är tungt inspirerad av det mexikanska köket, men med inslag av fusion i en grymt charmig och häng-vänlig miljö.
        Taco in, Taco out!</p>
  </div>

  <div class="pablo_section">
    <img src="">
  </div>

</main>

<?php

//combine these two laterss

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
    'post_type' => 'mat', //This will probably have to change, we don't want food on here
    'post_status' => 'publish',
    'posts_per_page' => 6,
    );

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
    if(is_page(10)) { //This number will be changed later so that it suits pablo's page
     get_footer('pablo');
    }
    else {
     get_footer();
    }
    ?>
    echo"</div>";
