<?php
/**
 * Template Name: Section B (front page misc products)
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */

$args = array(
	'post_type'      => array( 'watercooler', 'icemachine' ),
	'posts_per_page' => 8,
  'post__not_in' => array( 52, 55 ),
);
$misc_products = new WP_Query( $args ); ?>

<section class="container-fluid">
  <h2>Our Other Products:</h2><?php
    if ( $misc_products->have_posts() ) :
      while ( $misc_products->have_posts() ) : $misc_products->the_post(); ?>
        <div class="row" style="padding: 15px; margin-bottom: 20px;">
          <div class="col-md-3">
            <a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
          </div>
          <div class="col-md-9">
            <h2 style="margin-top: 0; margin-bottom: 20px;"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <a href="<?php echo get_the_permalink( $post->ID ); ?>"><button class="btn btn-default btn-md">Learn more</button></a>
          </div>
        </div><?php

      endwhile;
      wp_reset_postdata();
    endif; ?>
</section>
