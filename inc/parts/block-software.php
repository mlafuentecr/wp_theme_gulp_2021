<?php
$plataform = get_field('plataform', 'option');
?>

<?php if( $plataform ): ?>
<div class="software-wrap d-flex col-12">

  <?php 
  $chrome = get_field( "chrome" , 'options' );
  
  foreach( $plataform as $item ) {

    $title = $item['title'];
    $icon = $item['icon'];
    $descargar = $item['descargar'];
    $alert = $item['alert'];
    
  ?>


  <div class="col-12 col-md-3 box-round">
    <?php if(  $alert ){   ?> <div class="donwload-alert">
      Importante para IPHONES
      <a _ngcontent-rtu-c13="" class="btn btn-light" href="https://vimeo.com/539590850" target="_blank">Ver
        Instrucciones</a>
    </div><?php }  ?>
    <?php if( $title ){ echo ' <h2 >'. $title .'</h2> '; } ?>
    <img src="<?php echo $icon; ?>" alt="<?php echo $icon; ?>">
    <?php if( $descargar ){ echo ' <a class="download" href="'. $descargar['url'] .'" > Descargar </a> ';  } ?>
  </div>

  <?php }  ?>

  <div class="col-12 ">
    <div class="chrome">
      <div class="text">
        <div class="icon"></div><?php echo $chrome; ?>
      </div>
    </div>
  </div>
</div>
<?php   endif; ?>
