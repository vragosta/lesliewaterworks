<?php
/**
 * Template Name: Section A (front page new watercoolers)
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */

// Initialize array to hold new watercooler IDs to be used in section B.
$new_watercooler_ids = array();

$args = array(
	'post_type'      => array( 'watercooler' ),
	'posts_per_page' => 2,
);
$new_watercoolers = new WP_Query( $args ); ?>

<section class="container-fluid">
	<!-- Section title -->
	<h2>Brand New Products:</h2>

	<div class="row new-watercoolers"><?php
		if ( $new_watercoolers->have_posts() ) :
			while ( $new_watercoolers->have_posts() ) : $new_watercoolers->the_post(); ?>

				<div class="col-md-12 col-lg-6">
					<div class="row">
						<div class="col-md-4">
							<!-- Post thumbnail with appropriate permalink -->
							<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
						</div>
						<div class="col-md-8">
							<!-- Post title -->
							<h2><?php the_title(); ?></h2>

							<!-- Post content -->
							<?php the_content(); ?>

							<!-- 'Learn more' button with appropriate permalink -->
							<a href="<?php echo get_the_permalink( $post->ID ); ?>"><button class="btn btn-default btn-md">Learn more</button></a>
						</div>
					</div>
				</div><?php

				// Push the appropriate post IDs into array.
				array_push( $new_watercooler_ids, $post->ID );

			endwhile;
			wp_reset_postdata();
		endif; ?>
	</div>
</section>
