<?php
  $image_1 = get_field('gallery_center_image_1');
  $image_2 = get_field('gallery_center_image_2');
  $image_3 = get_field('gallery_center_image_3');
  $image_4 = get_field('gallery_center_image_4');
  $image_5 = get_field('gallery_center_image_5');
?>

<div class="row  gallery-img-center">
  <?php
  if( $image_1 ) {
?>

  <div class="col-md-3">
    <div class="row">

      <div class="col-md-12  col-6">
        <div class="gallery-item" style="background-image: url('<?php echo $image_1['url']; ?>')">
          <a class="btn btn-light btn-login-popup"><?php echo $image_1['caption']; ?></a>
        </div>
      </div>

      <div class="col-md-12  col-6">
        <div class="gallery-item" style="background-image: url('<?php echo $image_2['url']; ?>')">
          <a class="btn btn-light btn-login-popup"><?php echo $image_2['caption']; ?></a>
        </div>
      </div>

    </div>
  </div>

  <div class="col-md-6">
    <div class="gallery-item gallery-big" style="background-image: url('<?php echo $image_3['url']; ?>')">
      <a class="btn btn-light btn-login-popup"><?php echo $image_3['caption']; ?></a>
    </div>
  </div>

  <div class="col-md-3">
    <div class="row">
      <div class="col-md-12  col-6">
        <div class="gallery-item" style="background-image: url('<?php echo $image_4['url']; ?>')">
          <a class="btn btn-light btn-login-popup"><?php echo $image_4['caption']; ?></a>
        </div>
      </div>
      <div class="col-md-12  col-6">
        <div class="gallery-item" style="background-image: url('<?php echo $image_5['url']; ?>')">
          <a class="btn btn-light btn-login-popup"><?php echo $image_5['caption']; ?></a>
        </div>
      </div>
    </div>
  </div>

  <?php } ?>
</div>





<?php if (is_admin() ) { ?>
<style type="text/css">
.gallery {
  min-height: 250px;
  max-width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: ;
  background-color: #fde8ac;
}

</style>
<?php } ?>
