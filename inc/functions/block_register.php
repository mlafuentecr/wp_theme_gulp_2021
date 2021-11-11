<?php 
//icons sin dashboad https://developer.wordpress.org/resource/dashicons/#star-filled
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'btn_register',
            'title'             => __('Button Registrate'),
            'description'       => __('Boton para registrarse'),
            'render_template'   => get_template_directory() .'/inc/parts/block-btn-register.php',
            'icon' => 'star-filled',
            'category'          => 'media',
        ));

        acf_register_block_type(array(
          'name'              => 'promotions',
          'title'             => __('promociones'),
          'description'       => __('promociones'),
          'render_template'   => get_template_directory() .'/inc/parts/block-promociones.php',
          'icon' => 'star-filled',
          'category'          => 'media',
      ));

      acf_register_block_type(array(
        'name'              => 'software',
        'title'             => __('software'),
        'description'       => __('software'),
        'render_template'   => get_template_directory() .'/inc/parts/block-software.php',
        'icon' => 'star-filled',
        'category'          => 'media',
    ));

    acf_register_block_type(array(
      'name'              => 'bank',
      'title'             => __('bank'),
      'description'       => __('bank'),
      'render_template'   => get_template_directory() .'/inc/parts/block-bank.php',
      'icon' => 'star-filled',
      'category'          => 'media',
  ));

  acf_register_block_type(array(
    'name'              => 'horse-race',
    'title'             => __('horse-race'),
    'description'       => __('horse-race'),
    'render_template'   => get_template_directory() .'/inc/parts/block-horse-race.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));

acf_register_block_type(array(
    'name'              => 'forgotPass',
    'title'             => __('forgotPass'),
    'description'       => __('forgotPass'),
    'render_template'   => get_template_directory() .'/inc/parts/block-forgot-password.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));

acf_register_block_type(array(
    'name'              => 'Gallery image center',
    'title'             => __('Gallery image center'),
    'description'       => __('Gallery image center'),
    'render_template'   => get_template_directory() .'/inc/parts/block-gallery-img-center.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));

acf_register_block_type(array(
    'name'              => 'Gallery image left',
    'title'             => __('Gallery image left'),
    'description'       => __('Gallery image left'),
    'render_template'   => get_template_directory() .'/inc/parts/block-gallery-img-left.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));


acf_register_block_type(array(
    'name'              => 'reclamaciones',
    'title'             => __('reclamaciones'),
    'description'       => __('reclamaciones'),
    'render_template'   => get_template_directory() .'/inc/parts/block-libro-reclamos.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));



		
// register a portfolio item block
acf_register_block(array(
    'name'				=> 'portfolio-item',
    'title'				=> __('Portfolio Item'),
    'description'		=> __('A custom block for portfolio items.'),
    'render_template'	=>  get_template_directory() .'/inc/parts/block-gallery.php',
    'category'          => 'media',
    'icon' => 'star-filled',
    'keywords'			=> array( 'portfolio' ),
));



acf_register_block_type(array(
    'name'              => 'powered by jazz',
    'title'             => __('powered'),
    'description'       => __('powered'),
    'render_template'   => get_template_directory() .'/inc/parts/block-powered-by-jazz.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));
acf_register_block_type(array(
    'name'              => 'Logos Deposit methods',
    'title'             => __('Deposit'),
    'description'       => __('Deposit'),
    'render_template'   => get_template_directory() .'/inc/parts/block-logos-deposit-methods.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));
acf_register_block_type(array(
    'name'              => 'Casino games',
    'title'             => __('casino games'),
    'description'       => __('casino games'),
    'render_template'   => get_template_directory() .'/inc/parts/block-casino-games.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));

acf_register_block_type(array(
    'name'              => 'social-icons',
    'title'             => __('social-icons'),
    'description'       => __('social-icons'),
    'render_template'   => get_template_directory() .'/inc/parts/block-social.php',
    'icon' => 'star-filled',
    'category'          => 'media',
));

    }
}

?>
