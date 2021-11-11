<?php 
    if ( !function_exists('get_field') ) {
      function get_field() {
        wp_die( '<h1> > plugin ACF is not installed</h1><br> 
        1) Go to <a href="/wp-admin/plugins.php"> plugins</a> and install wp migration and import all data needed<br>
        2) Check acf is install and active
        3) check new version on <a href="https://github.com/mlafuentecr/wp_theme_gulp_2021">github mlafuente</a>
        ' );
      }
    }
    ?>
