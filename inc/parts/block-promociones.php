<?php
    $promos = get_field('banners', 'option');
    $promos_title = get_field('promo_title', 'option');
    
 if( $promos ){
     
    echo '<section class="promos d-flex flex-wrap justify-content-between container">';
    echo '<span class="title col-12" > '. $promos_title .' </span>'; 

    foreach( $promos as $promo ) {
        
        $promo_img = $promo['image'];
        $promo_link = $promo['link'];
   
            if( $promo_img['title'] ){ 
                echo '<a class="promo-item col-md-2  flex-column" href="'.$promo_link.'"> '; 
               // echo '<div class="subtitle" >'. $promo_img['title'] .'</div> '; 
                echo '<img class="lazyload rounded" alt="" width="246px" height="300px" src="'.$promo_img['url'].'" alt="'. $promo_img['title'] .'">';
                echo ' </a> ';
            }
     
    }

    echo '</section>'; 
}
?>
