<?php
defined( 'ABSPATH' ) or die();

require_once( 'MWA_Matri_Shortcut.php' );
require_once( 'MWA_Matri_Action.php' );
require_once( 'inc/MWA_View_Full_Profile.php' );

add_action( 'wp_enqueue_scripts', array( 'MWA_Matri_Shortcut','enqueue_fornten_assets' ) );

add_shortcode( 'mwa_matrimonial', array( 'MWA_Matri_Shortcut', 'show_frontend' ) );
add_shortcode( 'mwa_matrimonial_page', array( 'MWA_Matri_Shortcut', 'show_profile_page' ) );
add_shortcode( 'mwa_matrimonial_slider', array( 'MWA_Matri_Shortcut', 'show_profile_slider' ) );

/* save form */
add_action( 'admin_post_mwa_matrimonial', array( 'MWA_Matri_Action', 'savematriform' ) );
add_action( 'admin_post_nopriv_mwa_matrimonial', array( 'MWA_Matri_Action', 'savematriform' ) );

/* Show profile */
add_action( 'admin_post_mwa_view_full_profile', array( 'MWA_View_Full_Profile', 'view_full_profile' ) );
add_action( 'admin_post_nopriv_mwa_view_full_profile', array( 'MWA_View_Full_Profile', 'view_full_profile' ) );

add_action( 'init', array( 'MWA_View_Full_Profile', 'mwa_load_custom_search_function' ) );