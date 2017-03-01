<?php
/**
 * Template Name: Section B (front page misc products)
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */

// Arguments to obtain two most recent watercoolers excluding the new ones.
$args = array(
	'post_type'      => array( 'watercooler' ),
	'posts_per_page' => 2,
	'post__not_in' => $new_watercooler_ids,
);

// Arguments to obtain two most recent icecoolers.
$args1 = array(
	'post_type'      => array( 'icemachine' ),
	'posts_per_page' => 2,
);

$misc_watercoolers = new WP_Query( $args );
$misc_icemachines  = new WP_Query( $args1 ); ?>

<section class="section b container-fluid">
		<!-- Section title -->
	<h2>Our Other Products:</h2><?php

	// Display two most recent watercoolers.
	if ( $misc_watercoolers->have_posts() ) :
		while ( $misc_watercoolers->have_posts() ) : $misc_watercoolers->the_post(); ?>
			<div class="row misc-products">
				<div class="col-md-3">
					<!-- Post thumbnail with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
				</div>
				<div class="col-md-9">
					<!-- Post title -->
					<h2><?php the_title(); ?></h2>

					<!-- Post content -->
					<?php the_content(); ?>

					<!-- 'Learn more' button with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><button class="btn btn-default btn-md">Learn more</button></a>
				</div>
			</div><?php

		endwhile;
		wp_reset_postdata();
	endif;

	// Display two most recent icemachines.
	if ( $misc_icemachines->have_posts() ) :
		while ( $misc_icemachines->have_posts() ) : $misc_icemachines->the_post(); ?>
			<div class="row misc-products">
				<div class="col-md-3">
					<!-- Post thumbnail with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>
				</div>
				<div class="col-md-9">
					<!-- Post title -->
					<h2><?php the_title(); ?></h2>

					<!-- Post content -->
					<?php the_content(); ?>

					<!-- 'Learn more' button with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><button class="btn btn-default btn-md">Learn more</button></a>
				</div>
			</div><?php

		endwhile;
		wp_reset_postdata();
	endif; ?>

	<div class="archive-button-container">
		<!-- TODO: figure out wtf the archive page link is -->
		<a href="#"><button class="btn btn-default btn-lg">See more products <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
	</div>

</section>
