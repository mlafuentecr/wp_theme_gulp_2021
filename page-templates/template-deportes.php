<?php
/*
Template Name: Deportes
*/
defined( 'ABSPATH' ) || exit;
get_header(); 

?>

<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="deportes" class="pg-intern">
  <!-- 2 competitors -->
  <section class="sec1 lines-sports ">
    <iframe loading="lazy" class="betslip" src="https://apuestas.telajuego.com/Inicio/lineas" width="100%" height="780"
      frameborder="no"></iframe>
  </section>
</div>
<?php get_footer(); ?>
