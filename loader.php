<?php
/**
 * Loads the plugin files
 *
 * @since 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Load basic setup. Plugin list links, text domain, footer links etc. 
require_once( ECL_EASY_CURATED_LISTS_DIR . 'admin/basic-setup.php' );

// Do plugin operations
require_once( ECL_EASY_CURATED_LISTS_DIR . 'functions/do.php' );