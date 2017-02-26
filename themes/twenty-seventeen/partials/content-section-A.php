<?php
/**
 * Template Name: Section A (front page new watercoolers)
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
  <div class="row new-watercoolers"><?php
    if ( $watercoolers->have_posts() ) :
      while ( $watercoolers->have_posts() ) : $watercoolers->the_post(); ?>
        <div class="col-md-5" style="background-color: white; padding: 20px;">
          <div class="row">
            <div class="col-md-6">
              <?php the_post_thumbnail( array( 400, 400 ) ); ?>
            </div>
            <div class="col-md-6">
              <?php echo the_title(); ?>
              <?php echo the_content(); ?>
            </div>
          </div>
        </div><?php
      endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>
</section>
