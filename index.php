<?php
get_header();?>
<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>

<div id="blog-single">
  <div class="container-fluid">
    <div class="row">
      <div id="content" class="container-fluid d-flex justify-content-center" style="margin-top: 20px;">

        <div class="col-md-3 sidebar"> <?php dynamic_sidebar( 'sidebar'); ?> </div>



        <?php if ( have_posts() ) : ?>
        <div class="col-md-9 mb-5">
          <div class="row">

            <?php   while( have_posts() ) : the_post(); ?>

            <div class="card">
              <div class="card-body">
                <h3><?php the_title(); ?></h3>
                <div class="article-img">
                  <?php $article_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                  <img src="<?php echo $article_img[0]; ?>" />
                </div>
                <div class="article-content">
                </div> <?php the_excerpt(); ?>
              </div>
              <div class="card-body"> <a href="<?php echo get_permalink(); ?>" class="card-link">Leer Más</a></div>
            </div>



            <?php endwhile;?>
          </div>
        </div>
        <?php else: ?> <?php endif; ?>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
