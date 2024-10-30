<?php
defined( 'ABSPATH' ) or die();
if( ! class_exists('MWA_Matri_Action') ) {
	class MWA_Matri_Action {
		/* Save matri form */
		public static function savematriform() {
			include( MWA_MATRI_PLUGIN_DIR_PATH . 'public/inc/controller/saveform.php' );
		}
	}
}