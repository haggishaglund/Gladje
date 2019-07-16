<?php get_header();?>

<header>
	<?php the_post_thumbnail('hero_image'); ?>
</header>

<main>

<?php while( have_posts() ){ ?>
	<?php the_post(); ?>

	<div class="section">
		<h5><?php the_title(); ?></h5>
		<?php the_content(); ?>
	</div>
<?php } ?> <!-- end WHILE(HAVE_POSTS) -->

<div class="section mobile_hide"><img src="<?php the_field('aw_img'); ?>"></div>

<div class="section mobile_hide"><img src="<?php the_field('price_img'); ?>"></div>

<div class="section">
	<h5><?php the_field('price_title'); ?></h5>
	<div class="menu">
		<?php if(get_field('menu1_title')) {
			if(get_field('menu1_title')) { ?><div class="item"><?php the_field('menu1_title'); ?></div><?php }
			if(get_field('menu1_price')) { ?><div class="item_price"><?php the_field('menu1_price'); ?> kr </div><?php }
			if(get_field('menu1_description')) { ?><div class="item_desc"><?php the_field('menu1_description'); ?></div><?php }
			if(get_field('menu1_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu1_ordpris'); ?> kr </div><?php }
		} /* end if(get_field(menu1_title) */ ?>

		<?php if(get_field('menu2_title')) {
			if(get_field('menu2_title')) { ?><div class="item"><?php the_field('menu2_title'); ?></div><?php }
			if(get_field('menu2_price')) { ?><div class="item_price"><?php the_field('menu2_price'); ?> kr </div><?php }
			if(get_field('menu2_description')) { ?><div class="item_desc"><?php the_field('menu2_description'); ?></div><?php }
			if(get_field('menu2_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu2_ordpris'); ?> kr </div><?php }
		} /* end if(get_field(menu1_title) */ ?>

		<?php if(get_field('menu3_title')) {
			if(get_field('menu3_title')) { ?><div class="item"><?php the_field('menu3_title'); ?></div><?php }
			if(get_field('menu3_price')) { ?><div class="item_price"><?php the_field('menu3_price'); ?> kr </div><?php }
			if(get_field('menu3_description')) { ?><div class="item_desc"><?php the_field('menu3_description'); ?></div><?php }
			if(get_field('menu3_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu3_ordpris'); ?> kr </div><?php }
		} /* end if(get_field(menu1_title) */ ?>

		<?php if(get_field('menu4_title')) {
			if(get_field('menu4_title')) { ?><div class="item"><?php the_field('menu4_title'); ?></div><?php }
			if(get_field('menu4_price')) { ?><div class="item_price"><?php the_field('menu4_price'); ?> kr </div><?php }
			if(get_field('menu4_description')) { ?><div class="item_desc"><?php the_field('menu4_description'); ?></div><?php }
			if(get_field('menu4_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu4_ordpris'); ?> kr </div><?php }
		} /* end if(get_field(menu1_title) */ ?>

		<?php if(get_field('menu5_title')) {
			if(get_field('menu5_title')) { ?><div class="item"><?php the_field('menu5_title'); ?></div><?php }
			if(get_field('menu5_price')) { ?><div class="item_price"><?php the_field('menu5_price'); ?> kr </div><?php }
			if(get_field('menu5_description')) { ?><div class="item_desc"><?php the_field('menu5_description'); ?></div><?php }
			if(get_field('menu5_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu5_ordpris'); ?> kr </div><?php }
		} /* end if(get_field(menu1_title) */ ?>
	</div>
</div>

</main>

<?php get_footer(); ?>