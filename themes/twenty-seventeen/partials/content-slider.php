<?php
/**
 * Template for displaying the slider on the front page.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */
?>

<?php

	$args = array(
		'post_type' => array( 'watercooler' ),
		'order'     => 'ASC'
	);

	$query = new WP_Query( $args );

	while ( $query->have_posts() ) : $query->the_post();
		// echo 'ID: ' . $post->ID;
	endwhile;
	wp_reset_postdata(); ?>

	<section style="display: flex; justify-content: center; align-items: center; height: 400px; border: 1px solid #ddd; margin: 2rem;">Placeholder</section>
