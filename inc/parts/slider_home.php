<?php if( have_rows('slide', 'option') ): ?>

  <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <?php  $index = 0; while( have_rows('slide', 'option') ): the_row();  ?>
    <button type="button" class='indicator' data-bs-target="#carouselIndicators" data-bs-slide-to="<?php  echo $index; ?>"  aria-label="Slide 1"></button>
    <?php  $index++;  endwhile; ?>
  </div>

  <div class="carousel-inner">
    <?php 
          //DESKTOP SLIDER
          while( have_rows('slide', 'option') ): the_row(); 
            $imageDesktop = get_sub_field('slider_desktop');
            $imageMobile = get_sub_field('slider_mobile');
            $haveMobile = get_sub_field('add_mobile_image');
            $link = get_sub_field('link');
            $showMobile = '';
            if($haveMobile){$showMobile ='hideMobile';}
          ?>
      <div class="item-desktop" style="background-image:url('<?php echo $imageDesktop['url']; ?>')"> </div>
      <div class="item-mobile" style="background-image:url('<?php echo $imageMobile['url']; ?>')"></div>
      <?php  endwhile; ?>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
<?php endif; ?>
