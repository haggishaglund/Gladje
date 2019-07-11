<?php get_header();?>

<header>
</header>

<main>

<div class="section">
	<h5><?php the_field('box1_title'); ?></h5>
	<center><?php get_template_part('openinghours'); ?></center>
</div>

<div class="section">
	<img src="<?php the_field('box1_img'); ?>">
</div>

<div class="section">
	<h5><?php the_field('box2_title'); ?></h5>
	<?php the_field('box2_text'); // this field creates automatic paragraphs (<p>) ?>
</div>

<div class="section">
	<img src="<?php the_field('box2_img'); ?>">
</div>

<div class="section">
	<img src="<?php the_field('box3_img'); ?>">
</div>

<div class="section">
	<h5><?php the_field('box3_title'); ?></h5>

	<?php if(get_field('box3_days')) { ?>
		<p class="sub_heading"><?php the_field('box3_days'); ?> &emsp; <?php the_field('box3_open'); ?> &ndash; <?php the_field('box3_close'); ?></p>
	<?php } // end if(get_field(box3_days) ?>
	<?php the_field('box3_text'); // this field creates automatic paragraphs (<p>) ?>
	<a href="<?php the_field('box3_url'); ?>"><div class="section_link"><?php the_field('box3_link'); ?><div class="section_link_arrow">&#8227;</div></div></a>
	<div class="space"></div>
</div>

</main>

<?php get_footer(); ?>