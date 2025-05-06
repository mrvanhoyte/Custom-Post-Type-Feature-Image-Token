<?php
/**
 * Plugin Name: Custom Feature Image Token
 * Plugin URI: https://vanhoyte.com/plugins/custom-feature-image-token/
 * Description: Adds a shortcode to display the current post's featured image URL. Use [custom_featured_image_url] to get the featured image URL.
 * Version: 1.0
 * Author: Vanhoyte
 * Author URI: https://vanhoyte.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-feature-image-token
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 7.2
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Register the shortcode to display featured image URL
 */
add_shortcode('custom_featured_image_url', function() {
    return get_the_post_thumbnail_url();
});
