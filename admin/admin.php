<?php
defined( 'ABSPATH' ) or die();

require_once( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/MWA_Matri_Menu.php' );
require_once( MWA_MATRI_PLUGIN_DIR_PATH . 'admin/MWA_Matri_Actions.php' );

add_action( 'admin_menu', array( 'MWA_Matri_Menu', 'create_menu' ) );

add_action( 'wp_ajax_full_profile_request', array( 'MWA_Matri_Actions', 'fetch_profile' ) );

add_action( 'wp_ajax_full_profile_edit_request', array( 'MWA_Matri_Actions', 'profile_edit' ) );

add_action( 'wp_ajax_update_status_request', array( 'MWA_Matri_Actions', 'update_status' ) );

add_action( 'wp_ajax_delete_profile_request', array( 'MWA_Matri_Actions', 'delete_profile' ) );

add_action( 'wp_ajax_slidersetting_request', array( 'MWA_Matri_Actions', 'slider' ) );

add_action( 'wp_ajax_csssetting_request', array( 'MWA_Matri_Actions', 'csssetting' ) );

add_action( 'wp_ajax_csssetting_reset', array( 'MWA_Matri_Actions', 'csssetting_reset' ) );