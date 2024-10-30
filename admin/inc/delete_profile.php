<?php
defined( 'ABSPATH' ) or die();

if( isset( $_POST['user_id'] ) ) {
	$user_id = sanitize_text_field( $_POST['user_id'] );

	global $wpdb;

	$table_profile = $wpdb->prefix ."matri_bio";
	$wpdb->delete( $table_profile, array( 'id' => $user_id ), array( '%d' ) );
}
wp_die();