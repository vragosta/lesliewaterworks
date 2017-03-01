<?php
/**
 * Call To Action A and B
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since 0.1.0
 */
?>

<?php if ( is_active_sidebar( 'Homepage 1' ) ) { ?>
	<aside class="cta a container-fluid">
		<?php dynamic_sidebar( 'Homepage 1' ); ?>
	</aside>
<?php } ?>

<?php if ( is_active_sidebar( 'Homepage 2' ) ) { ?>
	<aside class="cta b container-fluid">
		<?php dynamic_sidebar( 'Homepage 2' ); ?>
	</aside>
<?php } ?>

<?php if ( is_active_sidebar( 'Homepage 3' ) ) { ?>
	<aside class="cta c container-fluid">
		<?php dynamic_sidebar( 'Homepage 3' ); ?>
	</aside>
<?php } ?>

<?php if ( is_active_sidebar( 'Homepage 4' ) ) { ?>
	<aside class="cta d container-fluid">
		<?php dynamic_sidebar( 'Homepage 4' ); ?>
	</aside>
<?php } ?>
