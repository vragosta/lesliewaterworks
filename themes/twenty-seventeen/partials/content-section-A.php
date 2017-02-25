<?php
/**
 * Template Name: Section A (front page new )
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */
$args = array(
	'post_type'      => array( 'watercooler' ),
	'posts_per_page' => 2,
);
$watercoolers = new WP_Query( $args ); ?>

<section class="container-fluid">
  <div class="row"><?php
    if ( $watercoolers->have_posts() ) :
      while ( $watercoolers->have_posts() ) : $watercoolers->the_post(); ?>
        <div class="col-lg-6" style="background-color: white; width: 550px; padding: 20px;">
          <?php the_post_thumbnail( array( 400, 400 ) ); ?>
        </div><?php
      endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>
</section>
