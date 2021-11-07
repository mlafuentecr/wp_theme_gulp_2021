<?php
/*
Template Name: Promociones
*/
defined( 'ABSPATH' ) || exit;
get_header(); 


?>

<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="promo-page" class="pg-intern">

  <!-- Promo -->
  <div class="section-promo">
    <div class="container-xl">
      <div class="row">

        <?php the_content();  ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
