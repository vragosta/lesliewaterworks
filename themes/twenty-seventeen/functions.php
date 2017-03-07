<?php
/**
 * Leslie WaterWorks - Twenty Seventeen functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 */

// Useful global constants.
define( 'LESLIEWATERWORKS_COM_VERSION', '0.1.0' );
define( 'LESLIEWATERWORKS_COM_TEMPLATE_URL', get_template_directory_uri() );
define( 'LESLIEWATERWORKS_COM_PATH', get_template_directory() . '/' );
define( 'LESLIEWATERWORKS_COM_INC', LESLIEWATERWORKS_COM_PATH . 'includes/' );
define( 'LESLIEWATERWORKS_SITE_ADMIN', 1 );

// Include compartmentalized functions.
require_once LESLIEWATERWORKS_COM_INC . 'functions/core.php';

// Include metaboxes.
require_once LESLIEWATERWORKS_COM_INC . 'metaboxes/metabox-user.php';

// Include essential functions.
// require_once LESLIEWATERWORKS_COM_INC . 'functions/essentials.php';

// Helper functions.
// require_once LESLIEWATERWORKS_COM_INC . 'functions/helpers.php';



// Run the setup functions.
lesliewaterworks_com\Twenty_Seventeen\Core\setup();

// Run the essential functions.
// lesliewaterworks_com\Twenty_Seventeen\Essentials\setup();
