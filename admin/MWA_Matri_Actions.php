<?php

defined( 'ABSPATH' ) or die();

if ( ! class_exists( 'MWA_Matri_Actions' ) ) {
	class MWA_Matri_Actions {
		public static function fetch_profile() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/full-profile-ajax.php' );
		}

		public static function update_status() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/update_status.php' );
		}

		public static function delete_profile() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/delete_profile.php' );
		}

		public static function profile_edit() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/handler/updateprofile.php' );
		}

		public static function slider() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/handler/profileslidersettings.php' );
		}

		public static function csssetting() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/handler/csssetting_save.php' );
		}

		public static function csssetting_reset() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/inc/handler/csssetting_reset.php' );
		}
	}
}