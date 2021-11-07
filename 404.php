<?php
get_header();?>
<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>

<div id="blog-single">
  <div class="container-xl">
    <div class="row">
      <div id="content" class="container-fluid d-flex justify-content-center" style="margin-top: 20px;">

        <article class="headline">
          <h1>404</h1>
          <h2>Oops! Page not found</h2>
          <?php get_search_form(); ?>
          <a class="button button-teal btn-animation" href="/"><span>Return Home</span></a>
        </article>


      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
