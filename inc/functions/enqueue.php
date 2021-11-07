<?php

// /*-----------------------------------------------------------------------------------*/
// /* FRONT-END ENQUEUE FUNCTIONS
// /*-----------------------------------------------------------------------------------*/


function enqueue_header()
{
    
  /******************* LOAD CSS homepage.min.css********************/
  if ( is_front_page() ) {
    wp_enqueue_style('index',      $GLOBALS["THEME_MLM_PATH"]. '/'.$GLOBALS['THEME_MLM_ENV'].'/css/homepage.min.css', array(), $GLOBALS['THEME_MLM_VER']);

  } elseif (  !is_front_page() ) {
    wp_enqueue_style('internal',   $GLOBALS["THEME_MLM_PATH"]. '/'.$GLOBALS['THEME_MLM_ENV'].'/css/internal.min.css', array(), $GLOBALS['THEME_MLM_VER']);
  }

}

add_action('wp_enqueue_scripts', 'enqueue_header', 999);




function enqueue_footer() {

  
      //boostrap vr5 cdn
      //<!-- Bootstrap CDN vr5-->
      // wp_enqueue_script( 'popper-cdn',    'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), $GLOBALS['THEME_MLM_VER'],  true);
      // wp_enqueue_script( 'bootstrap-js',  'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), $GLOBALS['THEME_MLM_VER'],  true);

      // // wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
      // // wp_enqueue_style('Font_Awesome');

      /******************* Bootstrap  ********************/
      wp_enqueue_script( 'bootstrap-js',   $GLOBALS["THEME_MLM_PATH"]. '/'.$GLOBALS['THEME_MLM_ENV'].'/js/bootstrap.bundle.min.js?defer', array(), $GLOBALS['THEME_MLM_VER'],  true);

        /******************* LOAD JS ?defer  ********************/

      if ( is_front_page() ) {
        wp_enqueue_script('main',      $GLOBALS["THEME_MLM_PATH"]. '/dist/js/bundle_home.js?defer', array(), $GLOBALS['THEME_MLM_VER'], true );
      }elseif (  !is_front_page() ) {
        wp_enqueue_script('intern',    $GLOBALS["THEME_MLM_PATH"]. '/dist/js/bundle_intern.js?defer', array(), $GLOBALS['THEME_MLM_VER'], true );
      }
      // else{
      //   wp_enqueue_script('intern',    $GLOBALS["THEME_MLM_PATH"]. '/'.$GLOBALS['THEME_MLM_ENV'].'/js/bundle_intern.js?defer', array(), $GLOBALS['THEME_MLM_VER'], true );
      // }
 
    
    }
add_action( 'wp_enqueue_scripts', 'enqueue_footer' );
