<?php
/**
 * Template Name: Section B (front page misc products)
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */

// Argument to obtain two most recent watercoolers excluding the new ones.
$args = array(
	'post_type'      => array( 'watercooler' ),
	'posts_per_page' => 2,
	'post__not_in' => array( 31, 34 ), // 52, 55 at home
);

// Argument to obtain two most recent icecoolers.
$args2 = array(
	'post_type'      => array( 'icemachine' ),
	'posts_per_page' => 2,
);

$misc_watercoolers = new WP_Query( $args );
$misc_icemachines  = new WP_Query( $args2 ); ?>

<section class="container-fluid">
		<!-- Section title -->
	<h2>Our Other Products:</h2><?php

		if ( $misc_watercoolers->have_posts() ) :
			while ( $misc_watercoolers->have_posts() ) : $misc_watercoolers->the_post(); ?>
				<div class="row" style="padding: 15px; margin-bottom: 20px;">
					<div class="col-md-3">
						<!-- Post thumbnail with appropriate permalink -->
						<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
					</div>
					<div class="col-md-9">
						<!-- Post title -->
						<h2 style="margin-top: 0; margin-bottom: 20px;"><?php the_title(); ?></h2>

						<!-- Post content -->
						<?php the_content(); ?>

						<!-- 'Learn more' button with appropriate permalink -->
						<a href="<?php echo get_the_permalink( $post->ID ); ?>"><button class="btn btn-default btn-md">Learn more</button></a>
					</div>
				</div><?php

			endwhile;
			wp_reset_postdata();
		endif; ?>
</section>
