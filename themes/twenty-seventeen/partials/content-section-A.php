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

<section class="section a container-fluid">

	<!-- Section title -->
	<h1>Brand New Products:</h1>

	<div class="row new-watercoolers"><?php
		if ( $new_watercoolers->have_posts() ) :
			while ( $new_watercoolers->have_posts() ) : $new_watercoolers->the_post(); ?>

				<div class="watercooler-item col-xs-12 col-sm-6">

					<div class="row">

						<div class="image-container col-xs-12 col-sm-12 col-md-4">

							<!-- Post thumbnail with appropriate permalink -->
							<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="image"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
							<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="mobile-image"><?php the_post_thumbnail( array( 200, 200 ) ); ?></a>
						</div>

						<div class="content-container col-xs-12 col-sm-12 col-md-8">
							<!-- Post title -->
							<h2>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>

							<!-- Post content -->
							<?php $content = wp_trim_words( get_the_content(), 60, '...<a href="#">Read More</a>' ); ?>
							<?php $mobile_content = wp_trim_words( get_the_content(), 40, '...<a href="#">Read More</a>' ); ?>
							<p class="content"><?php echo $content; ?></p>
							<p class="mobile-content"><?php echo $mobile_content; ?></p>

							<!-- 'Learn more' button with appropriate permalink -->
							<div>
								<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="btn btn-default btn-md">Learn more</a>
							</div>
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
