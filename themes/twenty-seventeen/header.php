<?php
/**
 * The template for displaying the header.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/content', 'header-navigation' ); ?>
