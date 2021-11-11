<?php
     //https://github.com/wp-bootstrap/wp-bootstrap-navwalker
     //Logo
     $ond_logo = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $ond_logo , 'full' );
 ?>

<nav class="navbar navbar-expand-xl navbar-dark " aria-label=" navbar ">

  <div class="container">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbar-collapse"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if($image) : ?>
    <section class="navbar-brand" class='logo'>
      <a href="/"> <img width="200px" height="66px" src=" <?php echo $image[0]; ?>"
          alt="<?php bloginfo( 'name' ) ?>"></a>
    </section>
    <?php endif; ?>



    <?php
    //THIS IS THE SAME MENU BUT WILL SHOW ONLY @ BTN THE REST WILL BE HIDE
    wp_nav_menu(array(
      'theme_location'   => 'header',
      'depth'            => 2,
      'container'        => 'div',
      'container_id'     => 'navbar-mobile',
      'menu_class'       => 'navbar',
    ));
    ?>

  </div>
</nav>

<?php
// MENU NORMAL DESKTOP
wp_nav_menu(array(
        'theme_location'   => 'header',
        'depth'            => 2,
        'container'        => 'div',
        'container_class'  => 'collapse navbar-collapse',
        'container_id'     => 'navbar-collapse',
        'menu_class'       => 'navbar',
        'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
        'walker'           => new WP_Bootstrap_Navwalker(),
    ));
?>
