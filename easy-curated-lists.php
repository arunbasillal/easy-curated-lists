<?php
/**
 * Plugin Name: Easy Curated Lists
 * Plugin URI: https://github.com/arunbasillal/WordPress-Starter-Plugin
 * Description: 
 * Author: Arun Basil Lal
 * Author URI: https://millionclues.com
 * Version: 1.0
 * Text Domain: easy-curated-lists
 * Domain Path: /languages
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Define constants
 *
 * @since 1.0
 */
if ( ! defined( 'ECL_VERSION_NUM' ) ) 		define( 'ECL_VERSION_NUM'	, '1.0' ); // Plugin version constant
if ( ! defined( 'ECL_EASY_CURATED_LISTS' ) )	define( 'ECL_EASY_CURATED_LISTS'	, trim( dirname( plugin_basename( __FILE__ ) ), '/' ) ); // Name of the plugin folder eg - 'easy-curated-lists'
if ( ! defined( 'ECL_EASY_CURATED_LISTS_DIR' ) )	define( 'ECL_EASY_CURATED_LISTS_DIR', plugin_dir_path( __FILE__ ) ); // Plugin directory absolute path with the trailing slash. Useful for using with includes eg - /var/www/html/wp-content/plugins/easy-curated-lists/

// Load everything
require_once( ECL_EASY_CURATED_LISTS_DIR . 'loader.php' );

// Register activation hook (this has to be in the main plugin file or refer bit.ly/2qMbn2O)
register_activation_hook( __FILE__, 'ecl_activate_plugin' );