<?php
defined( 'ABSPATH' ) or die();

if( ! class_exists( 'MWA_Matri_Menu' ) ) {
	class MWA_Matri_Menu {
		
		/* create menu */
		public static function create_menu() {
			$dashboard = add_menu_page( __( 'MWA Matrimony', MWA_MATRI_SYSTEM ), __( 'MWA Matrimony', MWA_MATRI_SYSTEM ), 'manage_options', 'mwa_matri_plug', array(
					'MWA_Matri_Menu',
					'dashboard'
				), esc_url(MWA_MATRI_SYSTEM_URL.'/admin/assets/img/matrimony-logo.PNG'), '10' );
			add_action( 'admin_print_styles-' . $dashboard, array( 'MWA_Matri_Menu', 'dashboard_assets' ) );
			
			add_submenu_page( 'mwa_matri_plug', 'Profile List', 'Profile List', 'manage_options', 'mwa_matri_plug', array( 'MWA_Matri_Menu', 'dashboard' ) );

			$shortcode_list_page = add_submenu_page( 'mwa_matri_plug', 'Shortcode Information', 'Shortcodes List', 'manage_options', 'mwa_matri_plug_info', array( 'MWA_Matri_Menu', 'matri_submenu' ) );
			add_action( 'admin_print_styles-' . $shortcode_list_page, array( 'MWA_Matri_Menu', 'dashboard_assets' ) );

			$slidersetting_page = add_submenu_page( 'mwa_matri_plug', 'Slider Setting Page', 'Profile slider Settings', 'manage_options', 'mwa_matri_plug_slider', array( 'MWA_Matri_Menu', 'mwa_matri_slider_setting' ) );

			add_action( 'admin_print_styles-' . $slidersetting_page, array( 'MWA_Matri_Menu', 'dashboard_assets' ) );

			$csssettings_page   = add_submenu_page( 'mwa_matri_plug', 'CSS Settings', 'CSS Settings',  'manage_options', 'mwa_matri_plug_css', array( 'MWA_Matri_Menu', 'mwa_matri_css_setting' ) );
			add_action( 'admin_print_styles-' . $csssettings_page, array( 'MWA_Matri_Menu', 'dashboard_assets' ) );

			$update_Members = add_submenu_page( null, __( 'Update', MWA_MATRI_SYSTEM ), __( 'Update Member', MWA_MATRI_SYSTEM ), 'manage_options', 'mwa_matri_update', array( 'MWA_Matri_Menu', 'mwa_matri_update' ) );
			add_action( 'admin_print_styles-' . $update_Members, array( 'MWA_Matri_Menu', 'dashboard_assets' ) );
		}
		
		/* Dashboard menu/submenu callback */
		public static function dashboard() {
			require_once( 'inc/mwa_matri_dashboard.php' );
		}

		/* Dashboard menu assets */
		public static function dashboard_assets() {
			self::enqueue_libraries();
		}

		public static function matri_submenu() {
			require_once('inc/mwa_matri_submenu.php');
		}

		/* Calling the page to edit/update the profile */
		public static function mwa_matri_update() {
			require_once( 'inc/profile_edit.php' );
		}

		/* Calling the gotra page */
		public static function mwa_matri_options() {
			require_once( 'inc/mwa_matri_options.php' );
		}

		/* Call the slider setting page */
		public static function mwa_matri_slider_setting() {
			require_once( 'inc/profileslidersetting.php' );
		}

		/* Call the CSS settings page */
		public static function mwa_matri_css_setting() {
			require_once( 'inc/csssettings.php' );
		}

		public static function enqueue_libraries() {
			wp_enqueue_style('thickbox' );
			wp_enqueue_style( 'bootstrap_css', MWA_MATRI_SYSTEM_URL . 'assets/css/bootstrap.min.css'  );
			wp_enqueue_style( 'all_css', MWA_MATRI_SYSTEM_URL . 'assets/css/all.css' );
			wp_enqueue_script( 'jquery' );
			wp_enqueue_media();
			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'popper_js', MWA_MATRI_SYSTEM_URL . 'assets/umd/popper.min.js', array( 'jquery' ), true, true );
			wp_enqueue_script( 'bootstrap_js', MWA_MATRI_SYSTEM_URL . 'assets/js/bootstrap.min.js', array( 'jquery' ), true, true );			
			wp_enqueue_style( 'datatable-css', MWA_MATRI_SYSTEM_URL . 'admin/assets/css/datatables.min.css' );
			wp_enqueue_script( 'datatable-js', MWA_MATRI_SYSTEM_URL . 'admin/assets/js/datatables.min.js', array( 'jquery' ) );
			wp_enqueue_script('wpf-media-uploads', MWA_MATRI_SYSTEM_URL.'admin/assets/js/wpf-media-upload-script.js',array('media-upload','thickbox','jquery'));
			wp_enqueue_script('wpf-media-upload-script-2-js',MWA_MATRI_SYSTEM_URL.'admin/assets/js/wpf-media-upload-script-2.js');
			wp_enqueue_style( 'admin-css', MWA_MATRI_SYSTEM_URL . 'admin/assets/css/admin-css.css' );
			wp_enqueue_script( 'custom-script-handle', MWA_MATRI_SYSTEM_URL . 'admin/assets/js/custom-script.js', array( 'wp-color-picker' ), false, true );
			wp_enqueue_script( 'custom-js', MWA_MATRI_SYSTEM_URL . 'admin/assets/js/custom-js.js' );
		}
	}
}