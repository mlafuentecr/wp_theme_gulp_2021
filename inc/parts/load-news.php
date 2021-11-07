<?php
  $titulo = get_field('titulo_de_noticias' );
  $featured_posts = get_field('categoria_a_mostrar' );
  $texto_del_btn = get_field('texto_del_btn' );
 




  if( $featured_posts ): 
    echo ' <h2 class="subTitle">'.$titulo.'</h2>';
    foreach( $featured_posts as $post ): 
     // Setup this post for WP functions (variable must be named $post).
     setup_postdata($post);
  
echo '<div class="card"> ';
  echo ' <div class="card-body">';
    echo the_title( '<h3>', '</h3>' );
    echo the_post_thumbnail( array(250, 250) );
    echo '<p>'.get_the_excerpt().'</p>';
    echo ' </div>';
  echo ' <div class="card-body"> <a href="'.get_permalink().'" class="card-link">'.$texto_del_btn.'</a></div>';
  echo ' </div>';

endforeach;
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata();
endif;

?>
