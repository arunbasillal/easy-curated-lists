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

/**
 * Print direct link to plugin settings in plugins list in admin
 *
 * @since 1.0
 */
function ecl_settings_link( $links ) {
	return array_merge(
		array(
			'settings' => '<a href="' . admin_url( 'options-general.php?page=easy-curated-lists' ) . '">' . __( 'Settings', 'easy-curated-lists' ) . '</a>'
		),
		$links
	);
}
add_filter( 'plugin_action_links_' . ECL_EASY_CURATED_LISTS . '/easy-curated-lists.php', 'ecl_settings_link' );

/**
 * Add donate and other links to plugins list
 *
 * @since 1.0
 */
function ecl_plugin_row_meta( $links, $file ) {
	if ( strpos( $file, 'easy-curated-lists.php' ) !== false ) {
		$new_links = array(
				'donate' 	=> '<a href="http://millionclues.com/donate/" target="_blank">Donate</a>',
				'kuttappi' 	=> '<a href="http://kuttappi.com/" target="_blank">My Travelogue</a>',
				'hireme' 	=> '<a href="http://millionclues.com/portfolio/" target="_blank">Hire Me For A Project</a>',
				);
		$links = array_merge( $links, $new_links );
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'ecl_plugin_row_meta', 10, 2 );