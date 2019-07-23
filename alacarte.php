<?php
/*
  Template Name: À La Carte
*/
get_header();?>

<header>
  	<?php the_post_thumbnail('hero_image'); ?>
    <div id="header_container">
  		<a href="#forratt"><div class="header_link">Förrätt</div></a>
  		<a href="#varmratt"><div class="header_link">Varmrätt</div></a>
      <a href="#dessert"><div class="header_link">Dessert</div></a>
      <a href="#middagspaket"><div class="header_link">Middagspaket</div></a>
  	</div>
</header>

<main class="noGrid">
  	<?php the_post(); ?>

  <div class="section" id="forratt">
    <h5>Förrätter</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('forratt1_title')) {
  			if(get_field('forratt1_title')) { ?><div class="item"><?php the_field('forratt1_title'); ?></div><?php }
        if(get_field('forratt1_price')) { ?><div class="item_price"><?php the_field('forratt1_price'); ?></div><?php }
  			if(get_field('forratt1_desc')) { ?><div class="item_desc"><?php the_field('forratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('forratt2_title')) {
  			if(get_field('forratt2_title')) { ?><div class="item"><?php the_field('forratt2_title'); ?></div><?php }
        if(get_field('forratt2_price')) { ?><div class="item_price"><?php the_field('forratt2_price'); ?></div><?php }
  			if(get_field('forratt2_desc')) { ?><div class="item_desc"><?php the_field('forratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('forratt3_title')) {
        if(get_field('forratt3_title')) { ?><div class="item"><?php the_field('forratt3_title'); ?></div><?php }
        if(get_field('forratt3_price')) { ?><div class="item_price"><?php the_field('forratt3_price'); ?></div><?php }
        if(get_field('forratt3_desc')) { ?><div class="item_desc"><?php the_field('forratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('forratt4_title')) {
        if(get_field('forratt4_title')) { ?><div class="item"><?php the_field('forratt4_title'); ?></div><?php }
        if(get_field('forratt4_price')) { ?><div class="item_price"><?php the_field('forratt4_price'); ?></div><?php }
        if(get_field('forratt4_desc')) { ?><div class="item_desc"><?php the_field('forratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('forratt5_title')) {
        if(get_field('forratt5_title')) { ?><div class="item"><?php the_field('forratt5_title'); ?></div><?php }
        if(get_field('forratt5_price')) { ?><div class="item_price"><?php the_field('forratt5_price'); ?></div><?php }
        if(get_field('forratt5_desc')) { ?><div class="item_desc"><?php the_field('forratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('forratt6_title')) {
        if(get_field('forratt6_title')) { ?><div class="item"><?php the_field('forratt6_title'); ?></div><?php }
        if(get_field('forratt6_price')) { ?><div class="item_price"><?php the_field('forratt6_price'); ?></div><?php }
        if(get_field('forratt6_desc')) { ?><div class="item_desc"><?php the_field('forratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section" id="varmratt">
    <h5>Varmrätter</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('forratt1_title')) {
  			if(get_field('forratt1_title')) { ?><div class="item"><?php the_field('forratt1_title'); ?></div><?php }
        if(get_field('forratt1_price')) { ?><div class="item_price"><?php the_field('forratt1_price'); ?></div><?php }
  			if(get_field('forratt1_desc')) { ?><div class="item_desc"><?php the_field('forratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('forratt2_title')) {
  			if(get_field('forratt2_title')) { ?><div class="item"><?php the_field('forratt2_title'); ?></div><?php }
        if(get_field('forratt2_price')) { ?><div class="item_price"><?php the_field('forratt2_price'); ?></div><?php }
  			if(get_field('forratt2_desc')) { ?><div class="item_desc"><?php the_field('forratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('forratt3_title')) {
        if(get_field('forratt3_title')) { ?><div class="item"><?php the_field('forratt3_title'); ?></div><?php }
        if(get_field('forratt3_price')) { ?><div class="item_price"><?php the_field('forratt3_price'); ?></div><?php }
        if(get_field('forratt3_desc')) { ?><div class="item_desc"><?php the_field('forratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('forratt4_title')) {
        if(get_field('forratt4_title')) { ?><div class="item"><?php the_field('forratt4_title'); ?></div><?php }
        if(get_field('forratt4_price')) { ?><div class="item_price"><?php the_field('forratt4_price'); ?></div><?php }
        if(get_field('forratt4_desc')) { ?><div class="item_desc"><?php the_field('forratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('forratt5_title')) {
        if(get_field('forratt5_title')) { ?><div class="item"><?php the_field('forratt5_title'); ?></div><?php }
        if(get_field('forratt5_price')) { ?><div class="item_price"><?php the_field('forratt5_price'); ?></div><?php }
        if(get_field('forratt5_desc')) { ?><div class="item_desc"><?php the_field('forratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('forratt6_title')) {
        if(get_field('forratt6_title')) { ?><div class="item"><?php the_field('forratt6_title'); ?></div><?php }
        if(get_field('forratt6_price')) { ?><div class="item_price"><?php the_field('forratt6_price'); ?></div><?php }
        if(get_field('forratt6_desc')) { ?><div class="item_desc"><?php the_field('forratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section" id="dessert">
    <h5>Dessert</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('forratt1_title')) {
  			if(get_field('forratt1_title')) { ?><div class="item"><?php the_field('forratt1_title'); ?></div><?php }
        if(get_field('forratt1_price')) { ?><div class="item_price"><?php the_field('forratt1_price'); ?></div><?php }
  			if(get_field('forratt1_desc')) { ?><div class="item_desc"><?php the_field('forratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('forratt2_title')) {
  			if(get_field('forratt2_title')) { ?><div class="item"><?php the_field('forratt2_title'); ?></div><?php }
        if(get_field('forratt2_price')) { ?><div class="item_price"><?php the_field('forratt2_price'); ?></div><?php }
  			if(get_field('forratt2_desc')) { ?><div class="item_desc"><?php the_field('forratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('forratt3_title')) {
        if(get_field('forratt3_title')) { ?><div class="item"><?php the_field('forratt3_title'); ?></div><?php }
        if(get_field('forratt3_price')) { ?><div class="item_price"><?php the_field('forratt3_price'); ?></div><?php }
        if(get_field('forratt3_desc')) { ?><div class="item_desc"><?php the_field('forratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('forratt4_title')) {
        if(get_field('forratt4_title')) { ?><div class="item"><?php the_field('forratt4_title'); ?></div><?php }
        if(get_field('forratt4_price')) { ?><div class="item_price"><?php the_field('forratt4_price'); ?></div><?php }
        if(get_field('forratt4_desc')) { ?><div class="item_desc"><?php the_field('forratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('forratt5_title')) {
        if(get_field('forratt5_title')) { ?><div class="item"><?php the_field('forratt5_title'); ?></div><?php }
        if(get_field('forratt5_price')) { ?><div class="item_price"><?php the_field('forratt5_price'); ?></div><?php }
        if(get_field('forratt5_desc')) { ?><div class="item_desc"><?php the_field('forratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('forratt6_title')) {
        if(get_field('forratt6_title')) { ?><div class="item"><?php the_field('forratt6_title'); ?></div><?php }
        if(get_field('forratt6_price')) { ?><div class="item_price"><?php the_field('forratt6_price'); ?></div><?php }
        if(get_field('forratt6_desc')) { ?><div class="item_desc"><?php the_field('forratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section" id="middagspaket">
    <h5>Middagspaket</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('forratt1_title')) {
  			if(get_field('forratt1_title')) { ?><div class="item"><?php the_field('forratt1_title'); ?></div><?php }
        if(get_field('forratt1_price')) { ?><div class="item_price"><?php the_field('forratt1_price'); ?></div><?php }
  			if(get_field('forratt1_desc')) { ?><div class="item_desc"><?php the_field('forratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('forratt2_title')) {
  			if(get_field('forratt2_title')) { ?><div class="item"><?php the_field('forratt2_title'); ?></div><?php }
        if(get_field('forratt2_price')) { ?><div class="item_price"><?php the_field('forratt2_price'); ?></div><?php }
  			if(get_field('forratt2_desc')) { ?><div class="item_desc"><?php the_field('forratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('forratt3_title')) {
        if(get_field('forratt3_title')) { ?><div class="item"><?php the_field('forratt3_title'); ?></div><?php }
        if(get_field('forratt3_price')) { ?><div class="item_price"><?php the_field('forratt3_price'); ?></div><?php }
        if(get_field('forratt3_desc')) { ?><div class="item_desc"><?php the_field('forratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('forratt4_title')) {
        if(get_field('forratt4_title')) { ?><div class="item"><?php the_field('forratt4_title'); ?></div><?php }
        if(get_field('forratt4_price')) { ?><div class="item_price"><?php the_field('forratt4_price'); ?></div><?php }
        if(get_field('forratt4_desc')) { ?><div class="item_desc"><?php the_field('forratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('forratt5_title')) {
        if(get_field('forratt5_title')) { ?><div class="item"><?php the_field('forratt5_title'); ?></div><?php }
        if(get_field('forratt5_price')) { ?><div class="item_price"><?php the_field('forratt5_price'); ?></div><?php }
        if(get_field('forratt5_desc')) { ?><div class="item_desc"><?php the_field('forratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('forratt6_title')) {
        if(get_field('forratt6_title')) { ?><div class="item"><?php the_field('forratt6_title'); ?></div><?php }
        if(get_field('forratt6_price')) { ?><div class="item_price"><?php the_field('forratt6_price'); ?></div><?php }
        if(get_field('forratt6_desc')) { ?><div class="item_desc"><?php the_field('forratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
