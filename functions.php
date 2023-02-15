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

/**
 * Disable the emoji's
 *
 * @since 0.2.0
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param  array $plugins Array of plugins.
 * @return array Difference betwen the two arrays
 * @since 0.2.0
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param  array  $urls          URLs to print for resource hints.
 * @param  string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 * @since 0.2.0
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		/* This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}
