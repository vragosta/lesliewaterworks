<?php
/**
 * Template part social icons.
 * These icon links lead to VincentRagosta social media pages.
 *
 * @package Vincent Ragosta - Twenty Sixteen
 * @since   0.1.0
 * @uses    esc_url(), site_url()
 */

// Get 'facebook', 'twitter', 'instagram' from the Site admin/owner.
$facebook  = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'facebook', true );
$twitter   = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'twitter', true );
$instagram = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'instagram', true ); ?>

<div class="social">
	<a href="<?php echo esc_url( $facebook ); ?>" class="facebook">
		<i class="fa fa-facebook" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( $twitter ); ?>" class="twitter">
		<i class="fa fa-twitter" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( $instagram ); ?>" class="instagram">
		<i class="fa fa-instagram" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact">
		<i class="fa fa-envelope-o" aria-hidden="true"></i>
	</a>
</div>
