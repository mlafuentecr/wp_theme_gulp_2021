<?php
    $promos = get_field('banners', 'option');
    $promos_title = get_field('promo_title', 'option');
    
 if( $promos ){
     
    echo '<section class="promo container">';
   if($promos_title){echo ' <div class="row"><span class="title text-center col-12" > '. $promos_title .' </span></div>';} 
    echo '<div class="promo-wrap">';
    foreach( $promos as $promo ) {
        
        $promo_img = $promo['image'];
        $promo_link = $promo['link'];
   
            if( $promo_img['title'] ){ 
                echo '<a class="promo-item " href="'.$promo_link.'"> '; 
               // echo '<div class="subtitle" >'. $promo_img['title'] .'</div> '; 
                echo '<img class="lazyload rounded " alt="" width="246px" height="300px" src="'.$promo_img['url'].'" alt="'. $promo_img['title'] .'">';
                echo ' </a> ';
            }
     
    }
    echo '</div>';
    echo '</section>'; 
}
?>
