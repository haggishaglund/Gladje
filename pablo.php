<?php
/*
  Template Name: pablo
*/

?>

 <?php
 get_header();
 
 echo"<header>";
 the_post_thumbnail('hero_image');
      echo" <div class='pablo_hero_container'>";
         echo"<a href='/boka-bord'> <div class='pablo_hero_link'> BOKA BORD </div> </a>";
      echo"</div>";
echo"</header>";

if( have_posts() ){

    while( have_posts() ){
        the_post();

   echo"<body class='pablo_main'>";
    $args = array(
    'post_type' => 'pablo',
    'post_status' => 'publish',
    'posts_per_page' => 6,
  );

  $query = new wp_query($args);
  if ($query->have_posts() ){

  while ($query->have_posts()){
  $query->the_post();
  ?>
<center>
  <div class='pablo_section'>
  <div id='pablo_text_section'>
    <h5 class="pablo_title1"> <?php the_title();?></h5>
    <p class="pablo_content"> <?php the_content();?></p>
  </div>
    <div class="pablo_grid_image"><?php the_post_thumbnail('grid_image');?></div>
  </div>
</center>
  <?php
  //the_content();
  }
  }else{
      echo"hello";
      }
    }
  }
  wp_reset_postdata();
  echo"</body>";

  /*<div class="pablo_section">
    <center>
    	<?php/* if(get_field('pablo_title')) {
        if(get_field('pablo_title')) { ?><h5 class="pablo_title1"><?php the_field('pablo_title'); ?></h5><?php }
        if(get_field('pablo_text')) { ?><div class="pablo_content"><?php the_field('pablo_text'); ?></div><?php }
        if(get_field('pablo_bild')) { ?><div class="pablo_grid_image"><img src="<?php the_field('pablo_bild'); ?>"/></div><?php }
        }
        if(get_field('pablo_title_2')) {
  			if(get_field('pablo_title_2')) { ?><h5 class="pablo_title2"><?php the_field('pablo_title_2'); ?></h5><?php }
  			if(get_field('pablo_text_2')) { ?><strong><div class="pablo_content2"><?php the_field('pablo_text_2'); ?></div></strong><?php }
        if(get_field('pablo_bild_2')) { ?><div class="pablo_grid_image2"><img src="<?php the_field('pablo_bild_2'); ?>"/></div><?php }
      }
      echo"</center>";
      echo"</div>";
      }
      ?>*/

  //footer
  echo"<div class='pablo_footer'>";
  if(is_page('pablo')) {
   get_footer('pablo');
  }
  else {
   get_footer();
  }
  echo"<div class='pablo_footer'>";
dynamic_sidebar( 'footer-information-pablo' );
 echo"</div>";
 echo"</div>";
?>
