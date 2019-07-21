<?php get_header();?>

<header>
  	<?php the_post_thumbnail('hero_image'); ?>
    <div id="header_container">
  		<div class="header_link">Lunch</div>
    </div>
</header>

<main>
  <?php while( have_posts() ){ ?>
  	<?php the_post(); ?>

  <div class="section">
    <h5><?php the_title(); ?></h5>
  </div>

<?php } ?>

  	<div class="lunchmenu">
      <?php if(get_field('lunch_title')) ?><h5><?php the_field('lunch_title') ?></div><?php }
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

      <?php if(get_field('lunch4_title')) {
        if(get_field('lunch4_title')) { ?><div class="item"><?php the_field('lunch4_title'); ?></div><?php }
        if(get_field('lunch4_description')) { ?><div class="item_desc"><?php the_field('lunch4_description'); ?></div><?php }
      } /* end if(get_field(lunchmenu4_title) */ ?>

      <?php if(get_field('lunch5_title')) {
        if(get_field('lunch5_title')) { ?><div class="item"><?php the_field('lunch5_title'); ?></div><?php }
        if(get_field('lunch5_description')) { ?><div class="item_desc"><?php the_field('lunch5_description'); ?></div><?php }
      } /* end if(get_field(lunchmenu5_title) */ ?>

      <?php if(get_field('lunch6_title')) {
        if(get_field('lunch6_title')) { ?><div class="item"><?php the_field('lunch6_title'); ?></div><?php }
        if(get_field('lunch6_description')) { ?><div class="item_desc"><?php the_field('lunch6_description'); ?></div><?php }
      } /* end if(get_field(lunchmenu6_title) */ ?>
    </div>
</main>
<?php get_footer(); ?>
