<?php
/**
 * Genesis Sample child theme.
 *
 * Theme supports.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 32,
		'width'       => 85,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	// 'genesis-after-entry-widget-area' => '',
	// 'genesis-footer-widgets'          => 6,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'genesis-sample' ),
		'secondary' => __( 'Footer Menu', 'genesis-sample' ),
	],
];
