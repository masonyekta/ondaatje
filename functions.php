<?php
/**
 * This file adds functions to the ondaatje WordPress theme.
 *
 * @package ondaatje
 * @author  Mason Y
 * @license GNU General Public License v2 or later
 * @link    https://github.com/masonyekta/ondaatje
 */

if ( ! function_exists( 'ondaatje_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function ondaatje_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'ondaatje', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'ondaatje_setup' );

/**
 * Enqueue style sheet.
 *
 * @since 0.1.0
 */
function ondaatje_enqueue_style_sheet() {
	wp_enqueue_style( 'ondaatje', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ondaatje_enqueue_style_sheet' );

/**
 * Register block styles.
 *
 * @since 0.1.0
 */
function ondaatje_register_block_styles() {
	$block_styles = array(
		'core/button'          => array(
			'fill-base'    => __( 'Fill Base', 'ondaatje' ),
			'outline-base' => __( 'Outline Base', 'ondaatje' ),
		),
		'core/columns'         => array(
			'columns-reverse' => __( 'Reverse', 'ondaatje' ),
		),
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'ondaatje' ),
			'shadow-solid' => __( 'Shadow Solid', 'ondaatje' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'ondaatje' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'ondaatje' ),
		),
		'core/social-links'    => array(
			'outline' => __( 'Outline', 'ondaatje' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'ondaatje_register_block_styles' );
