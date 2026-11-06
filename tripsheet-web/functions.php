<?php
/**
 * Sadiquna one-page driver intro.
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
			'sadiquna-intro',
			get_stylesheet_uri(),
			array(),
			'1.0.0'
		);
	}
);

add_filter(
	'document_title_parts',
	function ( $parts ) {
		$parts['title']   = 'Sadiquna';
		$parts['tagline'] = 'Trip logbook for drivers';
		return $parts;
	}
);

add_action(
	'get_header',
	function () {
		remove_action( 'wp_head', '_admin_bar_bump_cb' );
	}
);
