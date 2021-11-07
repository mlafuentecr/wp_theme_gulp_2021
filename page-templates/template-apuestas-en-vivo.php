<?php
/*
Template Name: Apuestas-en-vivo
*/
defined( 'ABSPATH' ) || exit;
get_header(); 

if (isset($_GET['link'])) {
    echo $_GET['link'];
  } else {
    // Fallback behaviour goes here
  }

?>
<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="apuestas-en-vivo" class="pg-intern">
  <!-- 2 competitors -->
  <section class="sec1 lines-sports">
    <div class="container-xl">
      <div class="row">
        <iframe loading="lazy" _ngcontent-ckf-c14="" height="800px"
          src="https://slive.jazzsports.ag/live/?skin=jazzsports#!/sport/2" width="100%"></iframe>
      </div>
    </div>
  </section>
</div>


<?php get_footer(); ?>
