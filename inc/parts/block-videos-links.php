<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!-- Info video and links -->
<div class="section-info my-5 block">
  <div class="container-fluid">
    <div class="row">


      <!-- /.VIdeos -->
      <div class="col-md-8 sec-videos d-flex">
        <div id="player" class="video">
          <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>

        </div>
        <div class="videoLinks">
          <?php 
                  while( have_rows('videos') ): the_row(); 
                    $video_picture = get_sub_field('video_picture');
                    $video_link = get_sub_field('video_link');
                    $video_name = get_sub_field('video_name');
                  
                    echo '<a class="video-box" data-target="#youtube" );" data-url="'. $video_link .'"  >'; 
                    echo '<p class="txt-video "> '.  $video_name  .' </p>'; 
                    echo ' <img  height="auto" src="'. $video_picture['url'] .'" alt="'. $video_name .'">';
                    echo '</a>'; 
                  endwhile; 
                ?>
        </div>
      </div>
      <!-- /.VIdeos -->

      <!-- LINKS -->
      <div class="linksPromo col-md-4 m-0 p-0">
        <div class="sec-promos">

          <?php 
                  while( have_rows('links') ): the_row(); 
                    $icon = get_sub_field('icon');
                    $link = get_sub_field('link');
             
                    echo '<a class="promos-box" href="'. $link['url'] .'" >'; 
                    echo ' <img   width="50px" height="50px" src="'. $icon['url'] .'" alt="'. $icon['title'] .'">';
                    echo '<p class="txt-promo recharge"> '.  $link['title']  .' </p>'; 
                    echo '</a>'; 
                  endwhile; 
                ?>


        </div>
      </div>
      <!-- /.LINKS -->

    </div>
  </div>
</div>
