<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel=“stylesheet” href = “<?php bloginfo(‘stylesheet_url’)?>
    <?php wp_head();?>
    <title></title>
  </head>
  <body>
    <div id="header_wrapper">
    <nav class="header_menu"><?php wp_nav_menu('header_menu');?></nav>
    </div>
    <div class="404">
      <h1>Sidan kan inte hittas!</h1>
      <p href="">Till Startsidan</p>
    </div>
