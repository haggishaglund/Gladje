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

</main>

<?php get_footer(); ?>