<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=“stylesheet” href="<?php echo bloginfo('stylesheet_url');?>">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?> – <?php bloginfo('description'); ?></title>
    <?php wp_head();?>
    <title></title>
  </head>

<?php
//I think we need this
        if( have_posts() ){
            while( have_posts() ){
      the_post();
    }
  }
?>
  <body>
    <div id="header_wrapper">
    <nav class="header_menu"> <?php wp_nav_menu('header_menu');?></nav>
    </div>
