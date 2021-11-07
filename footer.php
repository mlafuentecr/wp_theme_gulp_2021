<?php     
/*-----------------------------------------------------------------------------------*/
/*  ACF footer
/*-----------------------------------------------------------------------------------*/

$footer_sec_1       = get_field('footer_sec_1', 'options');
$footer_sec_2       = get_field('footer_sec_2', 'options');
$footer_sec_3       = get_field('footer_sec_3', 'options');
$footer_copy_right  = get_field('copyright', 'options');

?>
</main>

<?php  get_template_part( '/inc/parts/form-login-modal' );  ?>
<?php get_template_part( '/inc/parts/form-registro-modal' );  ?>


<footer class="footer mt-5">

  <section class="menu bg-dark pt-5">

    <div class="container-xl d-flex">
    <?php dynamic_sidebar( 'footer-1' ); ?>
    </div>

  </section>

  <section class="copyright bg-darker text-center">
      <?php dynamic_sidebar( 'footer-2' ); ?>
</section>

</footer>

</div><!-- wrapper -->
  <?php wp_footer(); ?>
</body>
</html>