<?php
/**
 * Template for displaying the footer.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_template_part()
 */
	//get_template_part( 'partials/content', 'mobile-menu' ); ?>

	<footer id="pre-footer" class="col-flex-center">
		<p style="color: #007236; font-size: 2rem">Leslie WaterWorks Product Certifications and Associations:</p>

		<a href="https://www.wqa.org/" target="_blank" data-event="Sponsors" data-label="Footer - WQA_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-1L.png" id="logo1" alt=""></a>
		<a href="http://www.intertek.com/marks/etl/" target="_blank" data-event="Sponsors" data-label="Footer - ETL_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-2L.png" id="logo2" alt=""></a>
		<a href="https://www.energystar.gov/" target="_blank" data-event="Sponsors" data-label="Footer - energyStar_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-3L.png" id="logo3" alt=""></a>
		<a href="http://www.agion-tech.com/" target="_blank" data-event="Sponsors" data-label="Footer - agionTech_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-4L.png" id="logo4" alt=""></a>
		<a href="http://www.biocote.com/" target="_blank" data-event="Sponsors" data-label="Footer - biocote_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-5L.png" id="logo5" alt=""></a>
		<a href="#" data-event="Sponsors" data-label="Footer - BLWA_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-6L.png" id="logo6" alt=""></a>
		<a href="http://www.barrysmycarpets.com/" target="_blank" data-event="Sponsors" data-label="Footer - BMC_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-7L.png" id="logo7" alt=""></a>
		<a href="http://theofficefurniturestore.com/" target="_blank" data-event="Sponsors" data-label="Footer - TOFS_logo"><img src="<?php echo esc_url( LESLIEWATERWORKS_COM_TEMPLATE_URL ); ?>/assets/images/img-sponsor-8L.png" id="logo8" alt=""></a>
	</footer>

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
