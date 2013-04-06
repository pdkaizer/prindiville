<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Bedlam Court
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function bedlam_court_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'bedlam_court_infinite_scroll_setup' );
