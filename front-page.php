<?php get_header();?>

<header>
	<?php the_post_thumbnail('hero_image'); ?>
	<div id="header_container">
		<a href="http://www.restauranggladje.se/a-la-carte/"><div class="header_link">Meny</div></a>
		<a href="http://www.restauranggladje.se/boka-bord/"><div class="header_link">Boka</div></a>
	</div>
</header>

<main>

<div class="section">
	<h5><?php the_field('box1_title'); ?></h5>
	<center>
		<p><strong><?php the_field('box1_open1_title'); ?></strong><br/>
			<?php if(get_field('box1_open1_days1')) { the_field('box1_open1_days1'); ?> &emsp; <?php the_field('box1_open1_days1_open'); ?> &ndash; <?php the_field('box1_open1_days1_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open1_days2')) { the_field('box1_open1_days2'); ?> &emsp; <?php the_field('box1_open1_days2_open'); ?> &ndash; <?php the_field('box1_open1_days2_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open1_days3')) { the_field('box1_open1_days3'); ?> &emsp; <?php the_field('box1_open1_days3_open'); ?> &ndash; <?php the_field('box1_open1_days3_close'); } ?>
		</p>

		<p><strong><?php the_field('box1_open2_title'); ?></strong><br/>
			<?php if(get_field('box1_open2_days1')) { the_field('box1_open2_days1'); ?> &emsp; <?php the_field('box1_open2_days1_open'); ?> &ndash; <?php the_field('box1_open2_days1_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open2_days2')) { the_field('box1_open2_days2'); ?> &emsp; <?php the_field('box1_open2_days2_open'); ?> &ndash; <?php the_field('box1_open2_days2_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open2_days3')) { the_field('box1_open2_days3'); ?> &emsp; <?php the_field('box1_open2_days3_open'); ?> &ndash; <?php the_field('box1_open2_days3_close'); } ?>
		</p>

		<p><strong><?php the_field('box1_open3_title'); ?></strong><br/>
			<?php if(get_field('box1_open3_days1')) { the_field('box1_open3_days1'); ?> &emsp; <?php the_field('box1_open3_days1_open'); ?> &ndash; <?php the_field('box1_open3_days1_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open3_days2')) { the_field('box1_open3_days2'); ?> &emsp; <?php the_field('box1_open3_days2_open'); ?> &ndash; <?php the_field('box1_open3_days2_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open3_days3')) { the_field('box1_open3_days3'); ?> &emsp; <?php the_field('box1_open3_days3_open'); ?> &ndash; <?php the_field('box1_open3_days3_close'); } ?>
		</p>

		<p><strong><?php the_field('box1_open4_title'); ?></strong><br/>
			<?php if(get_field('box1_open4_days1')) {the_field('box1_open4_days1'); ?> &emsp; <?php the_field('box1_open4_days1_open'); ?> &ndash; <?php the_field('box1_open4_days1_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open4_days2')) {the_field('box1_open4_days2'); ?> &emsp; <?php the_field('box1_open4_days2_open'); ?> &ndash; <?php the_field('box1_open4_days2_close'); ?><br/><?php } ?>
			<?php if(get_field('box1_open4_days3')) {the_field('box1_open4_days3'); ?> &emsp; <?php the_field('box1_open4_days3_open'); ?> &ndash; <?php the_field('box1_open4_days3_close'); } ?>
		</p>
	</center>
</div>

<div class="section"><img src="<?php the_field('box1_img'); ?>"></div>

<div class="section mobile_hide"><img src="<?php the_field('box2_img'); ?>"></div>

<div class="section">
	<h5><?php the_field('box2_title'); ?></h5>
	<?php the_field('box2_text'); // this field creates automatic paragraphs (<p>) ?>
</div>

<div class="section desktop_hide"><img src="<?php the_field('box2_img'); ?>"></div>

<div class="section">
	<h5><?php the_field('box3_title'); ?></h5>

	<?php if(get_field('box3_days')) { ?>
		<p class="sub_heading"><?php the_field('box3_days'); ?> &emsp; <?php the_field('box3_open'); ?> &ndash; <?php the_field('box3_close'); ?></p>
	<?php } // end if(get_field(box3_days) ?>
	<?php the_field('box3_text'); // this field creates automatic paragraphs (<p>) ?>
	<a href="<?php the_field('box3_url'); ?>"><div class="section_link"><?php the_field('box3_link'); ?><div class="section_link_arrow">&#8227;</div></div></a>
</div>

<div class="section mobile_hide"><img src="<?php the_field('box3_img'); ?>"></div>

</main>

<?php get_footer(); ?>
