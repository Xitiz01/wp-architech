<?php
/**
 * WP Architech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Architech
 */

// Core theme setup and features.
require get_template_directory() . '/inc/theme-setup.php';

// Register widget areas.
require get_template_directory() . '/inc/widget-init.php';

// Enqueue scripts and styles.
require get_template_directory() . '/inc/enqueue.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Custom header features.
require get_template_directory() . '/inc/custom-header.php';

// Load Jetpack compatibility file.
if ( class_exists( 'Jetpack' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load custom template functions for this theme.
require get_template_directory() . '/inc/template-functions.php';

// Load custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';