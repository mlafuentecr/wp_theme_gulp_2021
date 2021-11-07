<?php
/*
Template Name: Registro
*/
defined( 'ABSPATH' ) || exit;
get_header(); 


?>

<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="about" class="pg-intern">
  <!-- 2 competitors -->
  <section class="sec1 lines-sports">
    <div class="container-xl">
      <div class="row">
        <iframe loading="lazy" class="signup" style="margin-top: 30px;" src="https://apuestas.starsport.do/registro"
          width="100%" height="900" frameborder="no"></iframe>
      </div>
    </div>
  </section>
</div>


<?php get_footer(); ?>
