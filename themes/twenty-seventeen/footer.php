<?php
/**
 * Template for displaying the footer.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_template_part()
 */
	//get_template_part( 'partials/content', 'mobile-menu' ); ?>

	<!-- Pre Footer -->
	<?php get_template_part( 'partials/content', 'pre-footer' ); ?>

	<footer id="footer" class="col-flex-center">

		<!-- Menu -->
		<?php get_template_part( 'partials/content', 'menu' ); ?>

		<section class="info-panel">

			<!-- Contact Information -->
			<?php get_template_part( 'partials/content', 'contact-info' ); ?>

			<!-- Copyright -->
			<?php get_template_part( 'partials/content', 'copyright' ); ?>

			<!-- Social Icons -->
			<?php get_template_part( 'partials/content', 'social' ); ?>

		</section>

	</footer>

	</body>
</html>
<?php wp_footer(); ?>
