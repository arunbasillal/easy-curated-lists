<?php
/**
 * Operations of the plugin are included here. 
 *
 * @since 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
 
function ecl_add_easycuratedlists_shortcode() {
    add_shortcode( 'easycuratedlists', 'ecl_easycuratedlists_callback' );
}
add_action( 'init', 'ecl_add_easycuratedlists_shortcode' );

function ecl_easycuratedlists_callback( $atts ) {
	
	// Return if no post id's are passed.
	if ( empty( $atts['id'] ) ) {
		return;
	}
	
	$curated_list = '';
	
	if ( ! empty( $atts['h2'] ) ) {
		$curated_list .= '<h2>' . $atts['h2'] . '</h2>';
	}
	
	if ( ! empty( $atts['h3'] ) ) {
		$curated_list .= '<h3>' . $atts['h3'] . '</h3>';
	} 
	
	$curated_list .= '<ul class="easycuratedlists">';
	
	$ids = str_replace( ' ', '', $atts['id'] ); // remove spaces
	$ids = explode( ',', $ids ); // convert string to array
	
	foreach( $ids as $id ) {
		$id = (int)$id;
		if ( get_permalink( $id ) !== false ) {
			$curated_list .= '<li><a href="' . get_permalink( $id ) . '">' . get_the_title( $id ) . '</a></li>';
		}
	}
	
	$curated_list .= '</ul>';
	
	return $curated_list;
}