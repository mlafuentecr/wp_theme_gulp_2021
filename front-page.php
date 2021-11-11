<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header(); 

  
?>
<div id="frontpage">
  <div class="container-fluid">
    <div class="row">

      <!-- Sub Menu Sports -->
      <?php  if(get_field('show_sport_submenu' , 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } ?>

      <!-- Slider -->
      <?php include_once( get_template_directory() .'/inc/parts/slider_home.php' ); ?>

      <!-- Social Icons -->
      <?php include_once( get_template_directory() .'/inc/parts/block-social.php' ); ?>

      <!-- Steps  -->

      <!-- block promociones-->
      <?php include_once( get_template_directory() .'/inc/parts/block-promociones.php' ); ?>


      <section class="main">
        <div class="container ">
          <?php the_content(); ?>
        </div>
      </section>


    </div>
  </div>
</div>
<?php get_footer(); ?>
