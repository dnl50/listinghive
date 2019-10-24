<?php
/**
 * Theme supports configuration.
 *
 * @package HiveTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'custom-logo',
	'custom-header',
	'post-thumbnails',
	'editor-styles',
	'wp-block-styles',
	'hivepress',

	'woocommerce' => [
		'thumbnail_image_width' => 400,
		'single_image_width'    => 400,

		'product_grid'          => [
			'default_columns' => 2,
			'min_columns'     => 2,
			'max_columns'     => 2,
		],
	],
];
