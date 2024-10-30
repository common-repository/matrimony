<?php
/**
 * Plugin Name: Matrimony
 * Plugin URI: https://wordpress.org/plugins/matrimony/
 * Description: Matrimony, is a Matrimonial plugin which converts your WordPress website to a Matrimonial Website.
 * Version: 1.0
 * Author: MyWebApp
 * Author URI: http://www.mywebapp.in
 * License: GPLv2 or later
 * Text Domain: matrimony
 * Domain Path: /languages/
 */

defined( 'ABSPATH' ) or die();

if ( ! defined( 'MWA_MATRI_SYSTEM' ) ) {
	define( 'MWA_MATRI_SYSTEM', 'matrimony' );
}

if ( ! defined( 'MWA_MATRI_SYSTEM_URL' ) ) {
	define( "MWA_MATRI_SYSTEM_URL", plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'MWA_MATRI_PLUGIN_DIR_PATH' ) ) {
	define( 'MWA_MATRI_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

/* Load text domain */
add_action( 'plugins_loaded', 'MWA_MatrimonialTranslate' );
function MWA_MatrimonialTranslate() {
	load_plugin_textdomain('matrimony', false, dirname( plugin_basename(__FILE__)).'/languages/' );
}

if ( ! class_exists( 'MWA_MATRI_Systems' ) ) { 
	final class MWA_MATRI_Systems {
		private static $instance = null;

		private function __construct() {
			$this->initialize_hooks();
			$this->setup_database();
		}

		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		private function initialize_hooks() {
			if ( is_admin() ) {
				require_once( 'admin/admin.php' );
			}
			require_once( 'public/public.php' );
		}

		private function setup_database() {
			require_once( 'admin/MWA_Matri_Database.php' );
			register_activation_hook( __FILE__, array( 'MWA_MATRI_Database', 'activation' ) );
		}			
	}
}
MWA_MATRI_Systems::get_instance();