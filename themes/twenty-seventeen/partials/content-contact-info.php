<?php
/**
 * Template for displaying the contact information in the footer.
 *
 * @package Vincent Ragosta - Twenty Sixteen
 * @since   0.1.0
 * @uses    esc_attr(), esc_html()
 */

// Get the 'phone' number.
$phone = get_user_meta( LESLIEWATERWORKS_SITE_ADMIN, 'phone', true ); ?>

<?php if ( $phone ) : ?>
	<div class="contact-info">
		<h4>
			<span>Talk to One of Our Water Experts to Find the Right Product for Your Business, call today at</span>
			<a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
		</h4>
	</div>
<?php endif; ?>
