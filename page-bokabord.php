<?php
/*
  Template Name: Boka bord
*/
get_header();

echo"<main>";

  echo"<header>"; the_post_thumbnail('hero_image'); echo"</header>";
  echo"<div class='boka-section'>";
  echo"<h5>"; the_title(); echo"</h5>";
  //echo"<div class='front_content'>"; the_content(); echo"</div>";
  //todiloo important stuff for the website will end up here...
  echo"</div>";

  foreach ($_POST as $query)
  {
    $strip = array ("\r", "\n");
    $message = str_replace ($strip, "", $query);
    $xml = send_data ("http://81.235.187.18/", "55508", $message);
    header ("Content-length: ".strlen ($message) );
    echo $message;
  }

  function send_data($path, $port, $data)
  {
    $url = parse_url($path);

    if ($url['scheme'] != 'http') {
      die('Error: Only HTTP request are supported !');
    }

    $host = $url['host'];
    $socket = fsockopen($host, $port, $errno, $errstr);

    if (!$socket)
    {
      echo "ERROR: $errno - $errstr<br />\n";
    }
    else
    {
      fputs($socket, $data);
      $result = fread($socket, 4096);
      fclose($socket);
    }
    echo $result;
  }

echo"</main>";

?>
<?php get_footer(); ?>
