<?php
$facebook = get_field('facebook', 'options');
$twitter = get_field('twitter', 'options');
$youtube = get_field('youtube', 'options');
$instagram = get_field('instagram', 'options');
$whatsapp = get_field('whatsapp', 'options');
?>

<?php if( $facebook || $twitter || $youtube || $instagram || $whatsapp ): ?>

<div class="social my-3">
  <div class="social-icons">
    <?php if( $facebook ): ?><a class="social-icon social-facebook" href="<?php echo $facebook; ?>"> </a><?php endif; ?>
    <?php if( $twitter ): ?><a class="social-icon social-twitter" href="<?php echo $twitter; ?>"> </a><?php endif; ?>
    <?php if( $youtube ): ?><a class="social-icon social-youtube" href="<?php echo $youtube; ?>"> </a><?php endif; ?>
    <?php if( $instagram ): ?><a class="social-icon social-instagram"
      href="<?php echo $instagram; ?>"></a><?php endif; ?>
    <?php if( $whatsapp ): ?><a class="social-icon social-whatsapp" href="<?php echo $whatsapp; ?>"></a><?php endif; ?>
  </div>
  <div class="text-gray">
    ¡Sigue nuestras redes sociales para estar atento a nuestros eventos y premios!
  </div>
</div>

<?php endif; ?>


<?php if (is_admin() ) { ?>
<style type="text/css">
.social {
  min-height: 100px;
  background: gray;
  color: white;
  display: flex;
  justify-content: space-around;
  align-items: center;

}

.social-icon {
  width: 50px;
  height: 50px;
  background-color: white;
}

</style>
<?php } ?>
