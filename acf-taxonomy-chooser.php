<?php

/*
 * Plugin Name: Advanced Custom Fields: Taxonomy Chooser
 * Plugin URI: https://github.com/reyhoun/acf-taxonomy-chooser
 * Description: Choose from any taxonomy or term
 * Version: 1.0
 * Author: Marktime Media
 * Author URI: http://marktimemedia.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/reyhoun/acf-taxonomy-chooser
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-taxonomy-chooser', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_taxonomy_chooser( $version ) {
	
	include_once('acf-taxonomy-chooser-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_taxonomy_chooser');	

?>