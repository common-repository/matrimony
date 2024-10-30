<?php
defined( 'ABSPATH' ) or die();

/**
 * Show full profile
 */
class MWA_View_Full_Profile
{
	
	public static function view_full_profile()
	{
		include( MWA_MATRI_PLUGIN_DIR_PATH . 'public/inc/controller/full_profile.php' );
	}

	 
	public static function mwa_load_custom_search_function() {
		if( isset( $_REQUEST['adv'] ) && $_REQUEST['adv'] == "advanced" )  {
			require( MWA_MATRI_PLUGIN_DIR_PATH . 'public/view_profile.php' );
			die();
		}
	}

}