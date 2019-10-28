<?php
/********************************************************************************************
 * Plugin Name: Import Users
 *  Description: Seamlessly create users and import from your CSV data with ease. 
 * Version: 1.2.2
 * Text Domain: Import-Users
 * Domain Path:	 /languages
 * Author: Smackcoders
 * Plugin URI: https://goo.gl/kKWPui
 * Author URI: https://goo.gl/kKWPui
 *
 * Copyright (C) Smackcoders. - All Rights Reserved under Smackcoders Proprietary License
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * You can contact Smackcoders at email address info@smackcoders.com.
 *******************************************************************************************/

namespace Smackcoders\SMUSERS;

if ( ! defined( 'ABSPATH' ) )
exit; // Exit if accessed directly

require_once('SmackImportUserPlugin.php');
require_once('SmackImportUserInstall.php');
require_once('importExtensions/UsersImport.php');
require_once('importExtensions/MediaHandling.php');
require_once('importExtensions/BSIImport.php');
require_once('importExtensions/ImportHelpers.php');
require_once('importExtensions/WPMembersImport.php');
require_once('controllers/SendPassword.php');

class UserCSVHandler extends UsersImport{

	private static $instance = null,$install;
	public $version = '1.2.2';

	public function __construct(){ 
		$this->plugin = Plugin::getInstance();
	}

	public static function getInstance() {
		if (UserCSVHandler::$instance == null) {
			UserCSVHandler::$instance = new UserCSVHandler;	
			UserCSVHandler::$install = UserInstall::getInstance();
			add_filter( 'plugin_row_meta' . plugin_basename( __FILE__ ),  array(UserCSVHandler::$install, 'plugin_row_meta'), 10, 2 );
			add_action('plugin_action_links_' . plugin_basename( __FILE__ ), array(UserCSVHandler::$install, 'plugin_row_meta'), 10, 3);

			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}
			self::init_hooks();

			return UserCSVHandler::$instance;
		}
			return UserCSVHandler::$instance;
	}

	public static function init_hooks() {
		add_action( 'admin_notices', array(UserCSVHandler::$instance,'admin_notice_importuser'));
	}

	public static function admin_notice_importuser() {
		global $pagenow;
		$active_plugins = get_option( "active_plugins" );
		if ( $pagenow == 'plugins.php' && !in_array('wp-ultimate-csv-importer/wp-ultimate-csv-importer.php', $active_plugins) ) {
			?>
				<div class="notice notice-warning is-dismissible" >
				<p> Import Users is an addon of <a href="https://wordpress.org/plugins/wp-ultimate-csv-importer" target="blank" style="cursor: pointer;text-decoration:none">WP Ultimate CSV Importer</a> plugin, kindly install it to continue using import users. </p>
				<p>
				</div>
				<?php 
		}
	}

	/**
	 * Init UserSmCSVHandlerPro when WordPress Initialises.
	 */
	public function init() {
		if(is_admin()) :
			// Init action.
			do_action( 'uci_init' );
		if(is_admin()) {
#$this->includes();
			//SmUCIUserAdminAjax::smuci_ajax_events();
# Removed: De-Register the media sizes
		}
		endif;
	}
}

add_action( 'plugins_loaded', 'Smackcoders\\SMUSERS\\onpluginsload' );
function onpluginsload(){
	$plugin = UserCSVHandler::getInstance();
}
global $userimp_class;
$userimp_class = new UserCSVHandler();

?>
