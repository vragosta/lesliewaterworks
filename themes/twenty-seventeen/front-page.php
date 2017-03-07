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

	<div class="archive-button-container">
		<a href="#" class="btn btn-default btn-lg">See more products <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	</div>

	<section id="mobile-menu">
		<div class="close-container">
			<button type="button" class="close-menu">
				<i class="fa fa-times fa-2x"></i>
			</button>
		</div>
		<div>

			<!-- Menu -->
			<?php get_template_part( 'partials/content', 'menu' ); ?>

		</div>
	</section>

</main>

<?php get_footer(); ?>
