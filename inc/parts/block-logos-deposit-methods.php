<?php
$logos = get_field('logos-metodos-de-pagos', 'options');

?>

<?php if( $logos  ): ?>
<section class="deposit-logos my-5 text-center">
<img class='lazyload' src='<?php echo $logos['url']; ?>' alt='<?php echo $logos['title']; ?>' width='auto' height='42' />
</section>
<?php endif; ?>


<?php if (is_admin() ) { ?>
  <style type="text/css">
.deposit-logos {
  min-height:50px;
		background: gray;
	}
</style>
<?php } ?>

