<?php
defined( 'ABSPATH' ) or die();
if( ! wp_verify_nonce( $_POST['mwa_matri_gender_choice_form_nonce'], 'mwa_matri_gender_choice_form' ) ) {
	die('falied nonce');
}
else {
	$gender = isset( $_POST['genderbutton'] ) ? sanitize_text_field( $_POST['genderbutton'] ) : NULL;

	if( get_option( 'profile_gender' ) !=  $gender ) {
		if(update_option( 'profile_gender', $gender ) == true) {
			$send_json_array = array( "success_msg" => "1" );
		 	echo json_encode($send_json_array);
		}
		else {
			$send_json_array = array( "success_msg" => "0" );
		 	echo json_encode($send_json_array);
		}
	}
	elseif( get_option( 'profile_gender' ) ==  $gender ) {
		$send_json_array = array( "success_msg" => "3" );
		echo json_encode($send_json_array);
	}	
	die();	
}