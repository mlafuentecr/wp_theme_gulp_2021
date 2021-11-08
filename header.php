<!DOCTYPE html>
<?php 
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    //GET POST NAME
    $post = get_post();
    $slugname = get_post_field( 'post_name', $post );
?>
<html <?php language_attributes();?>>

  <title>
    <?php
    bloginfo('name');
    if (wp_title('', false)) {
        echo '|';
    } else {
        echo bloginfo('description');
    } wp_title('');
  ?>
  </title>


  <head name="top">
    <!-- favicons -->
    <!--[if IE]><link rel="shortcut icon" href="favicon.ico" /><![endif]-->
    <link rel="apple-touch-icon" sizes="180x180"
      href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
      href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
      href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" crossorigin="use-credentials"
      href="<?php echo get_stylesheet_directory_uri(); ?>/manifest.json">
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head();?>
    <?php get_template_part( '/inc/parts/google','analitycs'); ?>
  </head>

  <body id="<?php echo $slugname; ?>" <?php body_class();?>>
    <div id="wrapper">
      <!--[if lt IE 8]>
			<p class="browserupgrade">
      You are using an <strong>outdated</strong> browser. 
      Please <a href="http://browsehappy.com/">upgrade your browser</a> 
      to improve your experience.</p>
		  <![endif]-->

      <header id='header-top'>
        <div class="container">
          <?php get_template_part( '/inc/parts/menu','principal'); ?>
        </div>
      </header>

      <!-- main close in footer -->
      <main class='main-content'>
