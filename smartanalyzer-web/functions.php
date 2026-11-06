<?php
/**
 * Smartanalyzer placeholder homepage.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'smartanalyzer-web',
			get_stylesheet_uri(),
			array(),
			'1.0.0'
		);
	}
);

add_filter(
	'document_title_parts',
	function ( $parts ) {
		$parts['title'] = 'Smartanalyzer';
		unset( $parts['tagline'] );
		return $parts;
	}
);

add_action(
	'get_header',
	function () {
		remove_action( 'wp_head', '_admin_bar_bump_cb' );
	}
);
