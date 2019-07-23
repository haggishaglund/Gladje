<?php
/*
  Template Name: À La Carte
*/
get_header();?>

<header>
  	<?php the_post_thumbnail('hero_image'); ?>
    <div id="header_container">
  		<a href="#forratt"><div class="alc_link">Förrätt</div></a>
  		<a href="#varmratt"><div class="alc_link">Varmrätt</div></a>
      <a href="#dessert"><div class="alc_link">Dessert</div></a>
      <a href="#middagspaket"><div class="alc_link">Middagspaket</div></a>
  	</div>
</header>

<main class="noGrid">
  	<?php the_post(); ?>

  <div class="section" id="forratt">
    <h5>Förrätt</h5>

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
    <h5>Varmrätt</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('varmratt1_title')) {
  			if(get_field('varmratt1_title')) { ?><div class="item"><?php the_field('varmratt1_title'); ?></div><?php }
        if(get_field('varmratt1_price')) { ?><div class="item_price"><?php the_field('varmratt1_price'); ?></div><?php }
  			if(get_field('varmratt1_desc')) { ?><div class="item_desc"><?php the_field('varmratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('varmratt2_title')) {
  			if(get_field('varmratt2_title')) { ?><div class="item"><?php the_field('varmratt2_title'); ?></div><?php }
        if(get_field('varmratt2_price')) { ?><div class="item_price"><?php the_field('varmratt2_price'); ?></div><?php }
  			if(get_field('varmratt2_desc')) { ?><div class="item_desc"><?php the_field('varmratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('varmratt3_title')) {
        if(get_field('varmratt3_title')) { ?><div class="item"><?php the_field('varmratt3_title'); ?></div><?php }
        if(get_field('varmratt3_price')) { ?><div class="item_price"><?php the_field('varmratt3_price'); ?></div><?php }
        if(get_field('varmratt3_desc')) { ?><div class="item_desc"><?php the_field('varmratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('varmratt4_title')) {
        if(get_field('varmratt4_title')) { ?><div class="item"><?php the_field('varmratt4_title'); ?></div><?php }
        if(get_field('varmratt4_price')) { ?><div class="item_price"><?php the_field('varmratt4_price'); ?></div><?php }
        if(get_field('varmratt4_desc')) { ?><div class="item_desc"><?php the_field('varmratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('varmratt5_title')) {
        if(get_field('varmratt5_title')) { ?><div class="item"><?php the_field('varmratt5_title'); ?></div><?php }
        if(get_field('varmratt5_price')) { ?><div class="item_price"><?php the_field('varmratt5_price'); ?></div><?php }
        if(get_field('varmratt5_desc')) { ?><div class="item_desc"><?php the_field('varmratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('varmratt6_title')) {
        if(get_field('varmratt6_title')) { ?><div class="item"><?php the_field('varmratt6_title'); ?></div><?php }
        if(get_field('varmratt6_price')) { ?><div class="item_price"><?php the_field('varmratt6_price'); ?></div><?php }
        if(get_field('varmratt6_desc')) { ?><div class="item_desc"><?php the_field('varmratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>

      <?php if(get_field('varmratt7_title')) {
        if(get_field('varmratt7_title')) { ?><div class="item"><?php the_field('varmratt7_title'); ?></div><?php }
        if(get_field('varmratt7_price')) { ?><div class="item_price"><?php the_field('varmratt7_price'); ?></div><?php }
        if(get_field('varmratt7_desc')) { ?><div class="item_desc"><?php the_field('varmratt7_desc'); ?></div><?php }
      } /* end if(get_field(single_menu7_title) */ ?>

      <?php if(get_field('varmratt8_title')) {
        if(get_field('varmratt8_title')) { ?><div class="item"><?php the_field('varmratt8_title'); ?></div><?php }
        if(get_field('varmratt8_price')) { ?><div class="item_price"><?php the_field('varmratt8_price'); ?></div><?php }
        if(get_field('varmratt8_desc')) { ?><div class="item_desc"><?php the_field('varmratt8_desc'); ?></div><?php }
      } /* end if(get_field(single_menu8_title) */ ?>
    </div>
  </div>
  <div class="section" id="dessert">
    <h5>Dessert</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('dessert1_title')) {
  			if(get_field('dessert1_title')) { ?><div class="item"><?php the_field('dessert1_title'); ?></div><?php }
        if(get_field('dessert1_price')) { ?><div class="item_price"><?php the_field('dessert1_price'); ?></div><?php }
  			if(get_field('dessert1_desc')) { ?><div class="item_desc"><?php the_field('dessert1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('dessert2_title')) {
  			if(get_field('dessert2_title')) { ?><div class="item"><?php the_field('dessert2_title'); ?></div><?php }
        if(get_field('dessert2_price')) { ?><div class="item_price"><?php the_field('dessert2_price'); ?></div><?php }
  			if(get_field('dessert2_desc')) { ?><div class="item_desc"><?php the_field('dessert2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('dessert3_title')) {
        if(get_field('dessert3_title')) { ?><div class="item"><?php the_field('dessert3_title'); ?></div><?php }
        if(get_field('dessert3_price')) { ?><div class="item_price"><?php the_field('dessert3_price'); ?></div><?php }
        if(get_field('dessert3_desc')) { ?><div class="item_desc"><?php the_field('dessert3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('dessert4_title')) {
        if(get_field('dessert4_title')) { ?><div class="item"><?php the_field('dessert4_title'); ?></div><?php }
        if(get_field('dessert4_price')) { ?><div class="item_price"><?php the_field('dessert4_price'); ?></div><?php }
        if(get_field('dessert4_desc')) { ?><div class="item_desc"><?php the_field('dessert4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('dessert5_title')) {
        if(get_field('dessert5_title')) { ?><div class="item"><?php the_field('dessert5_title'); ?></div><?php }
        if(get_field('dessert5_price')) { ?><div class="item_price"><?php the_field('dessert5_price'); ?></div><?php }
        if(get_field('dessert5_desc')) { ?><div class="item_desc"><?php the_field('dessert5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('dessert6_title')) {
        if(get_field('dessert6_title')) { ?><div class="item"><?php the_field('dessert6_title'); ?></div><?php }
        if(get_field('dessert6_price')) { ?><div class="item_price"><?php the_field('dessert6_price'); ?></div><?php }
        if(get_field('dessert6_desc')) { ?><div class="item_desc"><?php the_field('dessert6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section" id="middagspaket">
    <h5>Middagspaket</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('paket1_title')) {
  			if(get_field('paket1_title')) { ?><div class="item"><?php the_field('paket1_title'); ?></div><?php }
        if(get_field('paket1_price')) { ?><div class="item_price"><?php the_field('paket1_price'); ?></div><?php }
  			if(get_field('paket1_desc')) { ?><div class="item_desc"><?php the_field('paket1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('paket2_title')) {
  			if(get_field('paket2_title')) { ?><div class="item"><?php the_field('paket2_title'); ?></div><?php }
        if(get_field('paket2_price')) { ?><div class="item_price"><?php the_field('paket2_price'); ?></div><?php }
  			if(get_field('paket2_desc')) { ?><div class="item_desc"><?php the_field('paket2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('paket3_title')) {
  			if(get_field('paket3_title')) { ?><div class="item"><?php the_field('paket3_title'); ?></div><?php }
        if(get_field('paket3_price')) { ?><div class="item_price"><?php the_field('paket3_price'); ?></div><?php }
  			if(get_field('paket3_desc')) { ?><div class="item_desc"><?php the_field('paket3_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('paket4_title')) {
  			if(get_field('paket4_title')) { ?><div class="item"><?php the_field('paket4_title'); ?></div><?php }
        if(get_field('paket4_price')) { ?><div class="item_price"><?php the_field('paket4_price'); ?></div><?php }
  			if(get_field('paket4_desc')) { ?><div class="item_desc"><?php the_field('paket4_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('paket5_title')) {
  			if(get_field('paket5_title')) { ?><div class="item"><?php the_field('paket5_title'); ?></div><?php }
        if(get_field('paket5_price')) { ?><div class="item_price"><?php the_field('paket5_price'); ?></div><?php }
  			if(get_field('paket5_desc')) { ?><div class="item_desc"><?php the_field('paket5_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('paket6_title')) {
  			if(get_field('paket6_title')) { ?><div class="item"><?php the_field('paket6_title'); ?></div><?php }
        if(get_field('paket6_price')) { ?><div class="item_price"><?php the_field('paket6_price'); ?></div><?php }
  			if(get_field('paket6_desc')) { ?><div class="item_desc"><?php the_field('paket6_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu6_title) */ ?>

    </div>
  </div>
</main>
<?php get_footer(); ?>
