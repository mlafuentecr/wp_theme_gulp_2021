<?php
get_header();?>
<?php 
  if(get_field('show_sport_submenu', 'options') !== 'no'){ get_template_part( '/inc/parts/submenu','deportes'); } 
  ?>
<div id="blog-single">
  <div class="container-fluid">
    <div class="row">

      <div id="content" class="container-fluid justify-content-center" style="margin-top: 20px;">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?> <div class="row">

          <div class="col-md-3 sidebar"> <?php dynamic_sidebar( 'sidebar'); ?> </div>

          <div class="col-md-9 mb-5">

            <article class="article">
              <h1><?php the_title(); ?></h1>

              <div class="article-img">
                <?php $article_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                <img src="<?php echo $article_img[0]; ?>" />
              </div>

              <div class="article-content" id="post-<?php the_ID(); ?>">
              </div> <?php the_content(); ?>


              <?php if (get_next_post() || get_previous_post()) { ?>
              <nav class="block">
                <ul class="pager">
                  <li class="previous">
                    <?php previous_post_link('%link', "&laquo; " . __( 'Previous Post', "simple-bootstrap")); ?></li>
                  <li class="next"><?php next_post_link('%link', __( 'Next Post', "simple-bootstrap") . " &raquo;"); ?>
                  </li>
                </ul>
              </nav>
              <?php } ?>

            </article>

          </div>

        </div> <?php endwhile; else: ?> <?php endif; ?> </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
