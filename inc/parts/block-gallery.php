<?php
  $gallery = get_field('images');
  //filename
  //url caption

echo '<div class="gallery">';
if( $gallery ) {
  foreach( $gallery as $images ) {
    $image = $images['image'];
    echo "<figure  class='gallery-item'> 
    <img class='lazyload' src='".$image['url'] ."' alt='".$image['filename'] ."'/>
    <figcaption class='gallery-item__caption btn-login-popup '>".$image['caption'] ."</figcaption>
    </figure>
    ";
  }
}
		
echo '</div>';
?>



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
