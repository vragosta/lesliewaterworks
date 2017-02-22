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

<!-- <section class="container-fluid"><?php
  if ( $watercoolers->have_posts() ) :
    while ( $watercoolers->have_posts() ) : $watercoolers->the_post(); ?>
      <div class="row" style="background-color: white; margin-bottom: 20px;">
        <?php the_post_thumbnail( array( 400, 400 ) ); ?>
      </div><?php
    endwhile;
    wp_reset_postdata();
  endif; ?>
</section> -->

<section class="container-fluid" style="display: flex; -webkit-flex-direction: row; justify-content: space-around; flex-direction: row; align-items: center;"><?php
  if ( $watercoolers->have_posts() ) :
    while ( $watercoolers->have_posts() ) : $watercoolers->the_post(); ?>
      <div style="background-color: white; width: 550px;">
        <?php the_post_thumbnail( array( 400, 400 ) ); ?>
      </div><?php
    endwhile;
    wp_reset_postdata();
  endif; ?>
</section>
