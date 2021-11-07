<?php
     //https://github.com/wp-bootstrap/wp-bootstrap-navwalker
     //Logo
     $ond_logo = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $ond_logo , 'full' );
 ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse"
      aria-controls="bs-navbar-collapse" aria-expanded="false"
      aria-label="<?php esc_attr_e('Toggle navigation', 'sportsbook');?>">
      <span class="navbar-toggler-icon"></span>
    </button>


    <?php if($image) : ?>
    <section class="navbar-brand" class='logo'>
      <a href="/"> <img width="200px" height="66px" src=" <?php echo $image[0]; ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
    </section>
    <?php endif; ?>


    <div class="mobile-btn">
        <?php
            //Este lo meto para repetir el menu y dejar los btn de register en mobile
            wp_nav_menu(array(
                    'theme_location'   => 'header',
                    'depth'            => 2,
                    'menu_class'       => ' buttons-cta',
                ));
        ?>
    </div>
    
    <?php
     // si funcction no tiene definido el add_bootstrap entonces da ellro line 29  bg-dark text-white
     wp_nav_menu(array(
             'theme_location'   => 'header',
             'depth'            => 2,
             'container'        => 'div',
             'container_class'  => 'collapse navbar-collapse',
             'container_id'     => 'bs-navbar-collapse',
             'menu_class'       => 'navbar',
             'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
             'walker'           => new WP_Bootstrap_Navwalker(),
         ));
   ?>

  </div>
</nav>
