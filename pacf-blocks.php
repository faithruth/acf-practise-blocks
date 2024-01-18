<?php
/**
 * Plugin Name:     Practise ACF Blocks
 * Plugin URI:      https://github.com/MediaUganda/testimonial-block
 * Description:     Plugin to add a testimonial slider.
 * Author:          Media Uganda
 * Author URI:      https://github.com/MediaUganda
 * Text Domain:     pacf-blocks
 * Domain Path:     /languages
 * Version:         1.1.0
 *
 * @package ACF_Blocks
 */

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'No Access!' );

/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function gutenberg_examples_01_register_block() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
}
add_action( 'init', 'gutenberg_examples_01_register_block' );