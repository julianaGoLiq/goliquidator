<?php

/*
  Plugin Name: Search By Product SKU - for Woocommerce
  Plugin URI: http://www.wordpress.org
  Description: The search functionality in woocommerce doesn't search by sku by default. This plugin adds this functionality automaticaly.
  Author: Rohit kumar
  Version: 1.0.0
  Author URI: https://er-rohit-kumar.business.site/
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_filter('init', 'pssw_init', 11);
                      
function pssw_init() {
    include_once 'pssw-filters-extra.php';
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if ( is_plugin_active( 'relevanssi/relevanssi.php' ) || !function_exists('wc_clean')) {
      // Plugin is activated
      // Old style of sku searching ...
        include_once 'pssw-searchbypr-sku-relevanssi-compat.php';
    } 
    else{
        //If relenvassi is not installed do more advanced search that works with woo widgets
        include_once 'pssw-searchbyprsku-widget-compat.php';
    }
    
}




?>
