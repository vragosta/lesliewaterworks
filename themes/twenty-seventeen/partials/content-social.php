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
$instagram = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'instagram', true );
$linkedin  = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'linkedin', true );  ?>

<div class="social">
	<a href="<?php echo esc_url( $facebook ); ?>" class="facebook" target="_blank">
		<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( $twitter ); ?>" class="twitter" target="_blank">
		<i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( $instagram ); ?>" class="instagram" target="_blank">
		<i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
	</a>

	<a href="<?php echo esc_url( $linkedin ); ?>" class="linkedin" target="_blank">
		<i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
	</a>
</div>
