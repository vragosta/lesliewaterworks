<?php
/**
 * Template for displaying the front page.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */

get_header(); ?>

<main class="front-page">

	<!-- Slider -->
	<?php get_template_part( 'partials/content', 'slider' ); ?>

	<!-- Homepage CTAs -->
	<?php get_template_part( 'partials/aside', 'homepage-cta' ); ?>

	<!-- Section A -->
	<?php include( locate_template( 'partials/content-section-A.php' ) ); ?>

	<!-- Section B -->
	<?php include( locate_template( 'partials/content-section-B.php' ) ); ?>

</main>

<?php get_footer(); ?>
