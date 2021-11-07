<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/*------------------------------------------*/
// SOCIAL  echo do_shortcode( '[social_icons]' ); 
/*------------------------------------------*/

 function social_func( $atts ){
  $facebook   = get_field('facebook', 'option');
  $twitter    = get_field('twitter', 'option');
  $youtube    = get_field('youtube', 'option');
  $instagram  = get_field('instagram', 'option');
  
  if( $facebook || $twitter || $youtube || $instagram ): 
    echo ' <div class="social">';
         if( $facebook )   { echo '<a href="'. $facebook["url"]   .'" class="icon facebook"></a>'; } 
         if( $twitter )   { echo '<a href="'. $twitter["url"]   .'" class="icon twitter"></a>'; } 
         if( $youtube )   { echo '<a href="'. $youtube["url"]   .'" class="icon youtube"></a>'; } 
         if( $instagram )   { echo '<a href="'. $instagram["url"]   .'" class="icon instagram"></a>'; } 
    echo ' </div>';
      endif; 
}
add_shortcode( 'social_icons', 'social_func' );


/*------------------------------------------*/
// display menu
/*------------------------------------------*/

function displayMenu_func( $atts ){
  return  wp_nav_menu(
    array( 
    'menu'          => ''.$atts['menu'].'',
    'container'     => 'navbar',
    'menu_class'    => ''.$atts['title'].',-menu',
    'items_wrap'    => '<h2>'.$atts['title'].'</h2><ul id="%1$s" class="%2$s">%3$s</ul>',
    'item_spacing'  => 'preserve',
  ) );

}
add_shortcode( 'display-menu', 'displayMenu_func' );




/*------------------------------------------*/
// Other
/*------------------------------------------*/

 add_shortcode( 'current_year', 'salcodes_year' );
 function salcodes_init(){
    function salcodes_year() {
    return getdate()['year'];
    }
 }
 add_action('init', 'salcodes_init');
 
?>
