<?php 
get_header(); 


?>

<section class="page pg-intern ">

  <?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>

  <?php 
  if ( has_post_thumbnail() ) {   
    echo '<div class="container-fluid mb-5">';
    echo '<div class="hero" style="background-image: url(' . get_the_post_thumbnail_url() . ')"></div>';
    echo '</div>' ;
}
  ?>

  <div class="container-xl">
    <div class="row">
      <?php 

      if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
          the_content(); 
       
        if ( comments_open() || get_comments_number() ) { comments_template();	}
        endwhile; 
      else:
        the_content(); 
      endif; 
    ?>
    </div>
  </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
