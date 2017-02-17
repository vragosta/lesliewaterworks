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
		'post_type' => array( 'watercooler', 'icemachine' ),
		'posts_per_page' => -1, /*--- Ideally we dont want to do this, however since our content is very small this is okay for now. ---*/
		'order'     => 'ASC'
	);

	$query = new WP_Query( $args ); ?>

	<section id="slick-slider">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php if ( class_exists( 'MultiPostThumbnails' ) && MultiPostThumbnails::has_post_thumbnail( $post->post_type, 'slider-image', $post->ID ) ) ?>
				<?php $image = MultiPostThumbnails::get_post_thumbnail_url( $post->post_type, 'slider-image', $post->ID, 'large' ); ?>

			<img src="<?php echo esc_attr( $image ); ?>" />

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</section>
