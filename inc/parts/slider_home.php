<?php if( have_rows('slide', 'option') ): ?>
<section class="sliderContainer d-flex m-0 p-0">
  <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <?php  $index = 0; while( have_rows('slide', 'option') ): the_row();  ?>
      <button type="button" class='indicator' data-bs-target="#carouselIndicators"
        data-bs-slide-to="<?php  echo $index; ?>" aria-label="Slide 1"></button>
      <?php  $index++;  endwhile; ?>
    </div>

    <div class="carousel-inner">
      <?php while( have_rows('slide', 'option') ): the_row();  ?>
      <?php 
          $imageDesktop = get_sub_field('slider_desktop');
          $imageMobile = get_sub_field('slider_mobile');
          $haveMobile = get_sub_field('add_mobile_image');
          $link = get_sub_field('link');
          $hideMobile = '';
        if($haveMobile ) { $hideMobile =''; }else{ $hideMobile ='hideMobile'; } 
        ?>

      <!-- //IMAGES FOR DESKTOP -->
      <div class="carousel-slide-desktop <?php echo $hideMobile ; ?>">
        <img class='lazyload' src='<?php echo $imageDesktop['url']; ?>' alt='<?php echo $imageDesktop['title']; ?>' />
      </div>
      <!-- //IMAGES FOR MOBILE IF THEY HAVE -->
      <div class="carousel-slide-mobile <?php echo $hideMobile ; ?>">
        <img src="<?php echo $imageMobile['url']; ?>'" alt="<?php echo $imageMobile['title']; ?>">
      </div>
      <?php endwhile; ?>
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

</section>
<?php endif; ?>
