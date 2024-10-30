<?php
defined( 'ABSPATH' ) or die();
global $wpdb;
$table_name = $wpdb->prefix . 'matri_bio';

if( isset( $_REQUEST['user_id'] ) && isset( $_REQUEST['status'] ) ) {
	$user_id 	    = sanitize_text_field( $_REQUEST['user_id'] );
	$current_status = sanitize_text_field( $_REQUEST['status'] );
	if( $current_status == "no" ) {		
		$wpdb->update( $table_name, array( 'approved' => "yes" ), array( 'id' => $user_id ), array( '%s' ), array( '%d' ) );
		echo 'yes';
	}
	elseif( $current_status == "yes" ) { 		
		$wpdb->update( $table_name, array( 'approved' => "no" ), array( 'id' => $user_id ), array( '%s' ), array( '%d' ) );		
		echo 'no';
	}
}
die();