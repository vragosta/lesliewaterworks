<?php
/**
 * Template Name: Section B (front page misc products)
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */

// Arguments to obtain two most recent watercoolers excluding the two newest from the query in section A.
$args = array(
	'post_type'      => array( 'watercooler' ),
	'posts_per_page' => 2,
	'post__not_in'   => $new_watercooler_ids,
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
	<h1>Our Other Products:</h1><?php

	// Display two most recent watercoolers.
	if ( $misc_watercoolers->have_posts() ) :
		while ( $misc_watercoolers->have_posts() ) : $misc_watercoolers->the_post(); ?>

			<div class="row misc-products">

				<div class="image-container col-xs-12 col-sm-4 col-md-3">

					<!-- Post thumbnail with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>

				</div>

				<div class="content-container col-xs-12 col-sm-8 col-md-9">

					<!-- Post title -->
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>

					<!-- Post content -->
					<?php $content = wp_trim_words( get_the_content(), 80, '...<a href="#">Read More</a>' ); ?>
					<?php $mobile_content = wp_trim_words( get_the_content(), 40, '...<a href="#">Read More</a>' ); ?>
					<p class="content"><?php echo $content; ?></p>
					<p class="mobile-content"><?php echo $mobile_content; ?></p>

					<!-- 'Learn more' button with appropriate permalink -->
					<div>
						<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="btn btn-default btn-md">Learn more</a>
					</div>

				</div>
			</div><?php

		endwhile;
		wp_reset_postdata();
	endif;

	// Display two most recent icemachines.
	if ( $misc_icemachines->have_posts() ) :
		while ( $misc_icemachines->have_posts() ) : $misc_icemachines->the_post(); ?>

			<div class="row misc-products">

				<div class="image-container col-xs-12 col-sm-4 col-md-3">

					<!-- Post thumbnail with appropriate permalink -->
					<a href="<?php echo get_the_permalink( $post->ID ); ?>"><?php the_post_thumbnail( array( 400, 400 ) ); ?></a>

				</div>

				<div class="content-container col-xs-12 col-sm-8 col-md-9">

					<!-- Post title -->
					<h2><?php the_title(); ?></h2>

					<!-- Post content -->
					<?php $content = wp_trim_words( get_the_content(), 80, '...<a href="#">Read More</a>' ); ?>
					<?php $mobile_content = wp_trim_words( get_the_content(), 40, '...<a href="#">Read More</a>' ); ?>
					<p class="content"><?php echo $content; ?></p>
					<p class="mobile-content"><?php echo $mobile_content; ?></p>

					<!-- 'Learn more' button with appropriate permalink -->
					<div>
						<a href="<?php echo get_the_permalink( $post->ID ); ?>" class="btn btn-default btn-md">Learn more</a>
					</div>

				</div>
			</div><?php

		endwhile;
		wp_reset_postdata();
	endif; ?>

</section>
