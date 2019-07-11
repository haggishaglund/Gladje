<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel=“stylesheet” href="<?php echo bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
    <title></title>
  </head>
  <body>
    <div id="header_wrapper">
    <nav class="header_menu"><?php wp_nav_menu('header_menu');?></nav>
    </div>
    <div class="404">
      <h2>Hoppsan!</h2>
      <h3>Den här sidan finns inte...</h3>
      <p href="">Till Startsidan</p>
    </div>
