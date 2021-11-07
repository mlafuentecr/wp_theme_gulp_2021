<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header(); 

//This goes whe you have a Iframe for sportsbook
//send the click to a variable and insert that to a div data-type
$league = $subLeague = $purl='';
if (isset($_GET['League'])) {
  $league     =  $_GET['League'];
  $subLeague  =  $_GET['SubLeague'];
  $purl = '?League='.$league.'&SubLeague='.$subLeague.'';
  } else {
    $purl = null;
  }
  
?>
<div id="frontpage">
  <div class="container-fluid">
    <div class="row">

      <!-- Sub Menu Sports -->
      <?php  if(get_field('show_sport_submenu' , 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } ?>


      <section class="sliderContainer d-flex m-0 p-0">
        <div class="col-md-12 p-0 m-0">
          <!-- Slider -->
          <?php include_once( get_template_directory() .'/inc/parts/slider_home.php' ); ?>
        </div>
      </section>

      <section class="social-wrap mt-3">
        <?php include_once( get_template_directory() .'/inc/parts/block-social.php' ); ?>
        <div class="col-md-12 text-center p-0 m-0 my-4">
          ¡Sigue nuestras redes sociales para estar atento a nuestros eventos y premios!
        </div>
      </section>


      <section class="steps">
        <div class="container d-flex flex-wrap col-md-12">
          <div class="step col-4 d-flex flex-column bg-danger">
            <b class="col-12">Registro de usuario</b>
            Ingresa tus datos personales
          </div>
          <div class="step col-4 d-flex flex-column bg-danger">
            <b class="col-12">Registro de usuario</b>
            Ingresa tus datos personales
          </div>
          <div class="step col-4 d-flex flex-column bg-danger">
            <b class="col-12">Registro de usuario</b>
            Ingresa tus datos personales
          </div>
        </div>
      </section>



      <!-- Slider -->
      <?php include_once( get_template_directory() .'/inc/parts/block-promociones.php' ); ?>





    </div>
  </div>
</div>
<?php get_footer(); ?>
