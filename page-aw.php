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



<div class="section">
	<h5><?php the_field('price_title'); ?></h5>

	<p>

	<?php if(get_field('menu1_title')) {

		if(get_field('menu1_title')) { ?><div class="item"><?php the_field('menu1_title'); ?></div><?php }
		if(get_field('menu1_price')) { ?><div class="item_price"><?php the_field('menu1_price'); ?> kr </div><?php }
		if(get_field('menu1_description')) { ?><div class="item_desc"><?php the_field('menu1_description'); ?></div><?php }
		if(get_field('menu1_ordpris')) { ?><div class="subtle_text">ord. <?php the_field('menu1_ordpris'); ?> kr </div><?php }
	
	} /* end if(get_field(menu1_title) */ ?>

	</p>

</div>

<div class="section"><img src="<?php the_field('price_img'); ?>"></div>

</main>

<?php get_footer(); ?>