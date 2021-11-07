<?php
$facebook = get_field('facebook', 'options');
$twitter = get_field('twitter', 'options');
$youtube = get_field('youtube', 'options');
$instagram = get_field('instagram', 'options');
?>

<?php if( $facebook || $twitter || $youtube || $instagram ): ?>

<div class="social">
<?php if( $facebook ): ?><a class="social-facebook" href="<?php echo $facebook; ?>"> </a><?php endif; ?>
<?php if( $twitter ): ?><a class="social-twitter" href="<?php echo $twitter; ?>"> </a><?php endif; ?>
<?php if( $youtube ): ?><a class="social-youtube" href="<?php echo $youtube; ?>"> </a><?php endif; ?>
<?php if( $instagram ): ?><a class="social-instagram" href="<?php echo $instagram; ?>"> </a><?php endif; ?>
</div>
<?php endif; ?>


<?php if (is_admin() ) { ?>
  <style type="text/css">
.social {
  min-height:100px;
		background: red;
    content: 'SOCIAL ICONS ARE IN THEME SETTINGS';
	}
</style>
<?php } ?>

