<?php
/*
Template Name: bono
*/
defined( 'ABSPATH' ) || exit;
get_header(); 


?>

<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="bono-page" class="pg-intern bono">
  <div class="section-promo">
    <div class="container-xl">
      <div class="row">
        <?php the_content(); ?>

      </div>
    </div>
  </div>
  <!-- Promo -->
  <div class="section-bono">
    <div class="container-xl">
      <div class="row">
        <?php
         $promos = get_field('banners', 'option');
         $promos_title = get_field('promo_title', 'option');
         if( $promos ):
      ?>

        <?php 
              foreach( $promos as $promo ) {
              $promo_img = $promo['image'];
              $promo_link = $promo['link'];
        ?>

        <img src="<?php echo $promo_img['url']; ?>" alt="<?php echo $promo_img['title']; ?>">

        <?php }  endif; ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
