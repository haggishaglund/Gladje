<?php
/*
  Template Name: Dagens Lunch
*/
get_header();?>

<header>
  	<?php the_post_thumbnail('hero_image'); ?>
</header>

<main class="noGrid">
  <?php while( have_posts() ){ ?>
  	<?php the_post(); ?>

  <div class="section">
    <h5 class="pink"><?php the_title(); ?></h5>

<?php } ?>

  	<div class="lunchmenu">
      <?php if(get_field('lunch_price')) ?><h6><?php the_field('lunch_price') ?> kr</h6><?php
  		  if(get_field('lunch1_title')) {
  			if(get_field('lunch1_title')) { ?><div class="item"><?php the_field('lunch1_title'); ?></div><?php }
  			if(get_field('lunch1_description')) { ?><div class="item_desc"><?php the_field('lunch1_description'); ?></div><?php }
  		} /* end if(get_field(lunchmenu1_title) */ ?>

      <?php if(get_field('lunch2_title')) {
  			if(get_field('lunch2_title')) { ?><div class="item"><?php the_field('lunch2_title'); ?></div><?php }
  			if(get_field('lunch2_description')) { ?><div class="item_desc"><?php the_field('lunch2_description'); ?></div><?php }
  		} /* end if(get_field(lunchmenu2_title) */ ?>

      <?php if(get_field('lunch3_title')) {
        if(get_field('lunch3_title')) { ?><div class="item"><?php the_field('lunch3_title'); ?></div><?php }
        if(get_field('lunch3_description')) { ?><div class="item_desc"><?php the_field('lunch3_description'); ?></div><?php }
      } /* end if(get_field(lunchmenu3_title) */ ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
