<?php
  $banking = get_field('banking', 'option');
  $depositos = get_field('depositos', 'option');
  $retiros = get_field('retiros', 'option');
?>


<!-- menu tabs -->
<!-- container by tab -->


<header>

  <?php 
  if( $banking) { 
    echo '<div id="deposit-box">'; 

    //TABS
    echo '<div class="tabs">'; 
      foreach( $banking[0] as $key =>$row ) {
        echo '<a href="#" data-type="'.$key.'" class="tab '.$key.'">'.$row['title'].'</a> ';
      } 
    echo '</div>'; 

   //CONTENT
   echo ' <div class="content-tabs">'; 
    foreach( $banking[0] as $key => $row ) {

      
      echo  '<div class="box-content '.$key.'" data-content="tab-'.$key.'">';
      //foreach 
      foreach( $row['content'] as $key => $item ) {
        echo '
        <div class="box-banking ">
          <div class="logo"><img class="lazyload" src="'.$item['logo'].'" alt="" width="100%" height="auto" /></div>
          <div class="content">
          '.$item['content'].'
          <div class="buttom-signup  btn-login-popup">'.$item['deposit_text'].'</div>
        </div>
        </div>';
     
        } 
        echo '</div>'; 

        
      } 
   echo '</div>'; 
  echo '</div>';
  }
  ?>
</header>


<?php if (is_admin() ) { ?>
<style type="text/css">
.box-content {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.box-banking {
  max-width: 40%;
  min-height: 270px;
  margin: auto;
  background: gray;
  content: 'registrate';
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
}

</style>
<?php } ?>
