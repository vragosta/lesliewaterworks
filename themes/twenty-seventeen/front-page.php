<?php
/**
 * Template for displaying the front page.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */

get_header(); ?>

<main class="front-page">
	<?php get_template_part( 'partials/content', 'slider' ); ?>

	<?php get_template_part( 'partials/aside', 'homepage-cta-A' ); ?>

	<?php get_template_part( 'partials/aside', 'homepage-cta-B' ); ?>

	<?php include( locate_template( 'partials/content-section-A.php' ) ); ?>

	<?php include( locate_template( 'partials/content-section-B.php' ) ); ?>
</main>

<?php get_footer(); ?>
