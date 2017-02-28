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

	<?php get_template_part( 'partials/content', 'section-A' ); ?>

	<?php get_template_part( 'partials/content', 'section-B' ); ?>
</main>

<?php get_footer(); ?>
