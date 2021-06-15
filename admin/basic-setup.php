<?php 
/**
 * Basic setup functions for the plugin
 *
 * @since 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
 
/**
 * Plugin activatation todo list
 *
 * This function runs when user activates the plugin. Used in register_activation_hook in the main plugin file. 
 * @since 1.0
 */
function ecl_activate_plugin() {
	
}

/**
 * Load plugin text domain
 *
 * @since 1.0
 */
function ecl_load_plugin_textdomain() {
    load_plugin_textdomain( 'easy-curated-lists', false, '/easy-curated-lists/languages/' );
}
add_action( 'plugins_loaded', 'ecl_load_plugin_textdomain' );