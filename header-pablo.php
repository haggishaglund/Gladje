<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
		<title><?php bloginfo('name'); ?> – <?php bloginfo('description'); ?></title>
		<?php wp_head();?>
		<title></title>
	</head>

<body>

<nav id="top_nav">

	<a href="<?php bloginfo('url'); ?>">
		<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
		<?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
		<div id="logo"><img src="<?php echo $image[0]; ?>" alt=""></div>
	</a>

	<?php wp_nav_menu('pablo_menu');?>
</nav>
