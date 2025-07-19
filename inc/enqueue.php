<?php
/**
 * Enqueue scripts and styles.
 *
 * @package WP_Architech
 */

/**
 * Enqueue scripts and styles.
 */
function wp_architech_scripts() {
	// Main theme stylesheet.
	wp_enqueue_style( 'wp-architech-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wp-architech-style', 'rtl', 'replace' );

	// Theme assets stylesheets.
	wp_enqueue_style( 'wp-architech-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-architech-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-architech-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-architech-main-style', get_template_directory_uri() . '/assets/css/style.css', array('wp-architech-bootstrap'), _S_VERSION ); // Renamed handle to avoid conflict
	wp_enqueue_style( 'wp-architech-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-architech-color-themes', get_template_directory_uri() . '/assets/css/color-themes/default-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'wp-architech-color-switcher-design', get_template_directory_uri() . '/assets/css/color-switcher-design.css', array(), _S_VERSION );

	// Theme assets scripts. Note: WordPress includes jQuery, so you don't need to load it manually.
    // wp_enqueue_script( 'wp-architech-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), _S_VERSION, true ); // This is bad practice. Use the WP-bundled jQuery.
	wp_enqueue_style( 'wp-architech-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION );
	wp_enqueue_script( 'wp-architech-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'wp-architech-popper'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-appear', get_template_directory_uri() . '/assets/js/appear.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-mixitup', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wp-architech-color-settings', get_template_directory_uri() . '/assets/js/color-settings.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_architech_scripts' );