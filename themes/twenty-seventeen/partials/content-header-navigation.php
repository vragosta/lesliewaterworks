<?php
/**
 * Main header navigation for both desktop and mobile designs.
 *
 * @package Leslie WaterWorks - Twenty Seventeen
 * @since   0.1.0
 * @uses    get_template_part()
 */
?>

<header id="header">
  <nav class="nav-container">

    <!-- Logo -->
    <section class="logo-container">
      <img src="<?php echo LESLIEWATERWORKS_COM_TEMPLATE_URL . '/assets/images/main-logo.jpg'; ?>" />
    </section>

    <section class="info-panel-container">

      <div class="info-panel">
        <span>A Family Owned and Operated Company</span>
        <span>Call Us Toll Free: 1-866-426-4100</span>
      </div>

      <!-- Menu -->
      <?php get_template_part( 'partials/content', 'menu' ); ?>

    </section>

    <!-- Dropdown Button -->
    <i class="ion ion-navicon dropdown"></i>

  </nav>
</header>
