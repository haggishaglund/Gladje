<?php

/*

Template Name: New Pablo

*/

get_header();

?>

<?php
echo"<header>";
the_post_thumbnail('hero_image');
     echo" <div class='pablo_hero_container'>";
        echo"<a href='/boka-bord'> <div class='pablo_hero_link'> BOKA BORD </div> </a>";
     echo"</div>";
echo"</header>";
?>

<div class="pablo_section">
  <center>
    <?php if(get_field('pablo_title')) {
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
  

  //footer
  echo"<div class='pablo_footer'>";
dynamic_sidebar( 'footer-information-pablo' );
 echo"</div>";
