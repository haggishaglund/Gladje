<?php
/*
  Template Name: À La Carte
*/
get_header();?>

<header>
    <img class="alc_thumbnail" src="<?php the_post_thumbnail('hero_image'); ?>">
    <div id="alc_container">
        <div class="alc_link"><a href="#forratt">Förrätt</a></div>
        <div class="alc_link"><a href="#varmratt">Varmrätt</a></div>
  		  <div class="alc_link"><a href="#dessert">Dessert</a></div>
  		  <div class="alc_link"><a href="#middagspaket">Middagspaket</a></div>
  	</div>
</header>

<main class="noGrid">
  	<?php the_post(); ?>

  <div class="section alacarte" id="forratt">
    <h5 class="pink">Förrätt</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('forratt1_title')) {
  			if(get_field('forratt1_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt1_title'); ?></div><?php }
        if(get_field('forratt1_price')) { ?><div class="alc_item_price"><?php the_field('forratt1_price'); ?> kr</div></div><?php }
  			if(get_field('forratt1_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('forratt2_title')) {
  			if(get_field('forratt2_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt2_title'); ?></div><?php }
        if(get_field('forratt2_price')) { ?><div class="alc_item_price"><?php the_field('forratt2_price'); ?> kr</div></div><?php }
  			if(get_field('forratt2_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('forratt3_title')) {
        if(get_field('forratt3_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt3_title'); ?></div><?php }
        if(get_field('forratt3_price')) { ?><div class="alc_item_price"><?php the_field('forratt3_price'); ?> kr</div></div><?php }
        if(get_field('forratt3_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('forratt4_title')) {
        if(get_field('forratt4_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt4_title'); ?></div><?php }
        if(get_field('forratt4_price')) { ?><div class="alc_item_price"><?php the_field('forratt4_price'); ?> kr</div></div><?php }
        if(get_field('forratt4_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('forratt5_title')) {
        if(get_field('forratt5_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt5_title'); ?></div><?php }
        if(get_field('forratt5_price')) { ?><div class="alc_item_price"><?php the_field('forratt5_price'); ?> kr</div></div><?php }
        if(get_field('forratt5_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('forratt6_title')) {
        if(get_field('forratt6_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('forratt6_title'); ?></div><?php }
        if(get_field('forratt6_price')) { ?><div class="alc_item_price"><?php the_field('forratt6_price'); ?> kr</div></div><?php }
        if(get_field('forratt6_desc')) { ?><div class="alc_item_desc"><?php the_field('forratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section alacarte" id="varmratt">
    <h5 class="pink">Varmrätt</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('varmratt1_title')) {
  			if(get_field('varmratt1_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt1_title'); ?></div><?php }
        if(get_field('varmratt1_price')) { ?><div class="alc_item_price"><?php the_field('varmratt1_price'); ?> kr</div></div><?php }
  			if(get_field('varmratt1_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('varmratt2_title')) {
  			if(get_field('varmratt2_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt2_title'); ?></div><?php }
        if(get_field('varmratt2_price')) { ?><div class="alc_item_price"><?php the_field('varmratt2_price'); ?> kr</div></div><?php }
  			if(get_field('varmratt2_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('varmratt3_title')) {
        if(get_field('varmratt3_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt3_title'); ?></div><?php }
        if(get_field('varmratt3_price')) { ?><div class="alc_item_price"><?php the_field('varmratt3_price'); ?> kr</div></div><?php }
        if(get_field('varmratt3_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('varmratt4_title')) {
        if(get_field('varmratt4_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt4_title'); ?></div><?php }
        if(get_field('varmratt4_price')) { ?><div class="alc_item_price"><?php the_field('varmratt4_price'); ?> kr</div></div><?php }
        if(get_field('varmratt4_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('varmratt5_title')) {
        if(get_field('varmratt5_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt5_title'); ?></div><?php }
        if(get_field('varmratt5_price')) { ?><div class="alc_item_price"><?php the_field('varmratt5_price'); ?> kr</div></div><?php }
        if(get_field('varmratt5_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('varmratt6_title')) {
        if(get_field('varmratt6_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt6_title'); ?></div><?php }
        if(get_field('varmratt6_price')) { ?><div class="alc_item_price"><?php the_field('varmratt6_price'); ?> kr</div></div><?php }
        if(get_field('varmratt6_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>

      <?php if(get_field('varmratt7_title')) {
        if(get_field('varmratt7_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt7_title'); ?></div><?php }
        if(get_field('varmratt7_price')) { ?><div class="alc_item_price"><?php the_field('varmratt7_price'); ?> kr</div></div><?php }
        if(get_field('varmratt7_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt7_desc'); ?></div><?php }
      } /* end if(get_field(single_menu7_title) */ ?>

      <?php if(get_field('varmratt8_title')) {
        if(get_field('varmratt8_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('varmratt8_title'); ?></div><?php }
        if(get_field('varmratt8_price')) { ?><div class="alc_item_price"><?php the_field('varmratt8_price'); ?> kr</div></div><?php }
        if(get_field('varmratt8_desc')) { ?><div class="alc_item_desc"><?php the_field('varmratt8_desc'); ?></div><?php }
      } /* end if(get_field(single_menu8_title) */ ?>
    </div>
  </div>
  <div class="section alacarte" id="dessert">
    <h5 class="pink">Dessert</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('dessert1_title')) {
  			if(get_field('dessert1_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert1_title'); ?></div><?php }
        if(get_field('dessert1_price')) { ?><div class="alc_item_price"><?php the_field('dessert1_price'); ?> kr</div></div><?php }
  			if(get_field('dessert1_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('dessert2_title')) {
  			if(get_field('dessert2_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert2_title'); ?></div><?php }
        if(get_field('dessert2_price')) { ?><div class="alc_item_price"><?php the_field('dessert2_price'); ?> kr</div></div><?php }
  			if(get_field('dessert2_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('dessert3_title')) {
        if(get_field('dessert3_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert3_title'); ?></div><?php }
        if(get_field('dessert3_price')) { ?><div class="alc_item_price"><?php the_field('dessert3_price'); ?> kr</div></div><?php }
        if(get_field('dessert3_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert3_desc'); ?></div><?php }
      } /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('dessert4_title')) {
        if(get_field('dessert4_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert4_title'); ?></div><?php }
        if(get_field('dessert4_price')) { ?><div class="alc_item_price"><?php the_field('dessert4_price'); ?> kr</div></div><?php }
        if(get_field('dessert4_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert4_desc'); ?></div><?php }
      } /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('dessert5_title')) {
        if(get_field('dessert5_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert5_title'); ?></div><?php }
        if(get_field('dessert5_price')) { ?><div class="alc_item_price"><?php the_field('dessert5_price'); ?> kr</div></div><?php }
        if(get_field('dessert5_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert5_desc'); ?></div><?php }
      } /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('dessert6_title')) {
        if(get_field('dessert6_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('dessert6_title'); ?></div><?php }
        if(get_field('dessert6_price')) { ?><div class="alc_item_price"><?php the_field('dessert6_price'); ?> kr</div></div><?php }
        if(get_field('dessert6_desc')) { ?><div class="alc_item_desc"><?php the_field('dessert6_desc'); ?></div><?php }
      } /* end if(get_field(single_menu6_title) */ ?>
    </div>
  </div>
  <div class="section alacarte" id="middagspaket">
    <h5 class="pink">Middagspaket</h5>

  	<div class="single_menu">
      <?php
  		  if(get_field('paket1_title')) {
  			if(get_field('paket1_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket1_title'); ?></div><?php }
        if(get_field('paket1_price')) { ?><div class="alc_item_price"><?php the_field('paket1_price'); ?> kr</div></div><?php }
  			if(get_field('paket1_desc')) { ?><div class="alc_item_desc"><?php the_field('paket1_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu1_title) */ ?>

      <?php if(get_field('paket2_title')) {
  			if(get_field('paket2_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket2_title'); ?></div><?php }
        if(get_field('paket2_price')) { ?><div class="alc_item_price"><?php the_field('paket2_price'); ?> kr</div></div><?php }
  			if(get_field('paket2_desc')) { ?><div class="alc_item_desc"><?php the_field('paket2_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu2_title) */ ?>

      <?php if(get_field('paket3_title')) {
  			if(get_field('paket3_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket3_title'); ?></div><?php }
        if(get_field('paket3_price')) { ?><div class="alc_item_price"><?php the_field('paket3_price'); ?> kr</div></div><?php }
  			if(get_field('paket3_desc')) { ?><div class="alc_item_desc"><?php the_field('paket3_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu3_title) */ ?>

      <?php if(get_field('paket4_title')) {
  			if(get_field('paket4_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket4_title'); ?></div><?php }
        if(get_field('paket4_price')) { ?><div class="alc_item_price"><?php the_field('paket4_price'); ?> kr</div></div><?php }
  			if(get_field('paket4_desc')) { ?><div class="alc_item_desc"><?php the_field('paket4_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu4_title) */ ?>

      <?php if(get_field('paket5_title')) {
  			if(get_field('paket5_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket5_title'); ?></div><?php }
        if(get_field('paket5_price')) { ?><div class="alc_item_price"><?php the_field('paket5_price'); ?> kr</div></div><?php }
  			if(get_field('paket5_desc')) { ?><div class="alc_item_desc"><?php the_field('paket5_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu5_title) */ ?>

      <?php if(get_field('paket6_title')) {
  			if(get_field('paket6_title')) { ?><div class="alc_item_top"><div class="alc_item"><?php the_field('paket6_title'); ?></div><?php }
        if(get_field('paket6_price')) { ?><div class="alc_item_price"><?php the_field('paket6_price'); ?> kr</div></div><?php }
  			if(get_field('paket6_desc')) { ?><div class="alc_item_desc"><?php the_field('paket6_desc'); ?></div><?php }
  		} /* end if(get_field(single_menu6_title) */ ?>

    </div>
  </div>
</main>
<?php get_footer(); ?>
