<?php
defined( 'ABSPATH' ) or die();
if( ! wp_verify_nonce( $_POST['mwa_matri_css_setting_form_nonce'], 'mwa_matri_css_setting_form' ) ) {
	die('falied nonce');
}
elseif( isset( $_POST['reset_css'] ) ) {
	$value = isset( $_POST['reset_css'] ) ? sanitize_text_field( $_POST['reset_css'] ) : NULL;
	if( $value == 0 ) {
		if(delete_option( 'css_settings' )) {
			$send_json_array = array( "success_msg" => "1" );			
		}
		else {
			$send_json_array = array( "success_msg" => "0" );
		}
	}
	else {
		$send_json_array = array( "success_msg" => "0" );
	}
}
else {
	$formbackground 	   = isset( $_POST['formbackground'] ) ? sanitize_text_field( $_POST['formbackground'] ) : NULL;
	$formtextcolor  	   = isset( $_POST['formtextcolor'] ) ? sanitize_text_field( $_POST['formtextcolor'] ) : NULL;
	$ptablebackground 	   = isset( $_POST['ptablebackground'] ) ? sanitize_text_field( $_POST['ptablebackground'] ) : NULL;
	$ptablebackground_even = isset( $_POST['ptablebackground_even'] ) ? sanitize_text_field( $_POST['ptablebackground_even'] ) : NULL;
	$ptablefont_color  	   = isset( $_POST['ptablefont_color'] ) ? sanitize_text_field( $_POST['ptablefont_color'] ) : NULL;

	$css_setting_array = ['googlefont'=> $googlefont, 'formbackground'=> $formbackground, 'formtextcolor'=> $formtextcolor, 'ptablebackground' => $ptablebackground, 'ptablebackground_even'=> $ptablebackground_even, 'ptablefont_color'=> $ptablefont_color ];

	update_option( 'css_settings', $css_setting_array );
	$send_json_array = array( "success_msg" => "1" );	
}
echo json_encode($send_json_array);
die();