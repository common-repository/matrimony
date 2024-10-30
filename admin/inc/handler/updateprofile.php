<?php
defined( 'ABSPATH' ) or die();
if( ! wp_verify_nonce( $_POST['upgform_generate_nonce'],'upg_form_submit' ) ) {
	die("You are Fiendfyre Curse");
}
else {
	global $wpdb;
	$table_name  = $wpdb->prefix . "matri_bio";
	$table_name2 = $wpdb->prefix . "height";

	$profile_id             = isset($_REQUEST['profile_id']) ? sanitize_text_field($_REQUEST['profile_id']) : "";
	$candidate_name 	  	= isset( $_POST['mwa_edit_candidate_name'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_name'] ) : "";		
	$mwa_candidate_dob 	  = isset( $_POST['mwa_edit_candidate_dob'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_dob'] ) : '';
	$mwa_candidate_bp     = isset( $_POST['mwa_edit_candidate_bp'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_bp'] ) : '';
	$mwa_candidate_time   = isset( $_POST['mwa_edit_candidate_time'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_time'] ) : '';
	$mwa_candidate_gender = isset( $_POST['mwa_edit_candidate_gender'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_gender'] ) : '';
	$mwa_candidate_maglik = isset( $_POST['mwa_edit_candidate_maglik'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_maglik'] ) : '';
	$mwa_candidate_gotra  = isset( $_POST['mwa_edit_candidate_gotra'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_gotra'] ) : '';
	
	$maternal_gotra 	  = isset( $_POST['mwa_edit_maternal_gotra'] ) ? sanitize_text_field( $_POST['mwa_edit_maternal_gotra'] ) : '';
	$father_name 		  	= isset( $_POST['mwa_edit_father_name'] ) ? sanitize_text_field( $_POST['mwa_edit_father_name'] ) : '';
	$father_mo 			  	= isset( $_POST['mwa_edit_father_mno'] ) ? sanitize_text_field( $_POST['mwa_edit_father_mno'] ) : '';
	$father_occupation 	  = isset( $_POST['mwa_edit_father_occupation'] ) ? sanitize_text_field( $_POST['mwa_edit_father_occupation'] ) : '';
	$father_annual_income = isset( $_POST['mwa_edit_father_annual_income'] ) ? sanitize_text_field( $_POST['mwa_edit_father_annual_income'] ) : '';
	$mother_name 		  = isset( $_POST['mwa_edit_mother_name'] ) ? sanitize_text_field( $_POST['mwa_edit_mother_name'] ) : '';
	$mother_occupation 	  = isset( $_POST['mwa_edit_mother_occupation'] ) ? sanitize_text_field( $_POST['mwa_edit_mother_occupation'] ) : '';
	$grand_father 		  	= isset( $_POST['mwa_edit_grand_father'] ) ? sanitize_text_field( $_POST['mwa_edit_grand_father'] ) : '';
	$native_place 		  	= isset( $_POST['mwa_edit_native_place'] ) ? sanitize_text_field( $_POST['mwa_edit_native_place'] ) : '';
	$nationality 		  		= isset( $_POST['mwa_edit_nationality'] ) ? sanitize_text_field( $_POST['mwa_edit_nationality'] ) : '';
	$status_of_family 	  = isset( $_POST['mwa_edit_family_status'] ) ? sanitize_text_field( $_POST['mwa_edit_family_status'] ) : '';
	$address 			  = isset( $_POST['mwa_edit_address'] ) ? sanitize_text_field( $_POST['mwa_edit_address'] ) : '';
	$country 			  = isset( $_POST['mwa_edit_country'] ) ? sanitize_text_field( $_POST['mwa_edit_country'] ) : '';
	$state 				  = isset( $_POST['mwa_edit_state'] ) ? sanitize_text_field( $_POST['mwa_edit_state'] ) : '';
	$district 			  = isset( $_POST['mwa_edit_district'] ) ? sanitize_text_field( $_POST['mwa_edit_district'] ) : '';
	$pincode 			  = isset( $_POST['mwa_edit_pincode'] ) ? sanitize_text_field( $_POST['mwa_edit_pincode'] ) : '';
	$phone 				  = isset( $_POST['mwa_edit_phone'] ) ? sanitize_text_field( $_POST['mwa_edit_phone'] ) : '';
	$contactno 			  = isset( $_POST['mwa_edit_contactno'] ) ? sanitize_text_field( $_POST['mwa_edit_contactno'] ) : '';
	$email 			      = isset( $_POST['mwa_edit_email'] ) ? sanitize_email( $_POST['mwa_edit_email'] ) : '';
	$height 			  = isset( $_POST['mwa_edit_height'] ) ? sanitize_text_field( $_POST['mwa_edit_height'] ) : '';
	$body_type 			  = isset( $_POST['mwa_edit_body_type'] ) ? sanitize_text_field( $_POST['mwa_edit_body_type'] ) : '';
	$skin_type 			  = isset( $_POST['mwa_edit_skin_type'] ) ? sanitize_text_field( $_POST['mwa_edit_skin_type'] ) : '';
	$blood_group 	      = isset( $_POST['mwa_edit_blood_group'] ) ? sanitize_text_field( $_POST['mwa_edit_blood_group'] ) : '';
	$education_detail 	  = isset( $_POST['mwa_edit_education_detail'] ) ? sanitize_text_field( $_POST['mwa_edit_education_detail'] ) : '';
	$education 			  = isset( $_POST['mwa_edit_education'] ) ? sanitize_text_field( $_POST['mwa_edit_education'] ) : '';
	$hobby 				  = isset( $_POST['mwa_edit_hobby'] ) ? sanitize_text_field( $_POST['mwa_edit_hobby'] ) : '';
	$candidate_occupation = isset( $_POST['mwa_edit_candidate_occupation'] ) ? sanitize_text_field( $_POST['mwa_edit_candidate_occupation'] ) : '';
	$designation 		  = isset( $_POST['mwa_edit_designation'] ) ? sanitize_text_field( $_POST['mwa_edit_designation'] ) : '';
	$annual_income 		  = isset( $_POST['mwa_edit_annual_income'] ) ? sanitize_text_field( $_POST['mwa_edit_annual_income'] ) : '';
	$company_name 		  = isset( $_POST['mwa_edit_company_name'] ) ? sanitize_text_field( $_POST['mwa_edit_company_name'] ) : '';
	$company_city 		  = isset( $_POST['mwa_edit_company_city'] ) ? sanitize_text_field( $_POST['mwa_edit_company_city'] ) : '';
	$ub_no 			      = isset( $_POST['mwa_edit_ub_no'] ) ? sanitize_text_field( $_POST['mwa_edit_ub_no'] ) : '';
	$us_no 			      = isset( $_POST['mwa_edit_us_no'] ) ? sanitize_text_field( $_POST['mwa_edit_us_no'] ) : '';
	$mb_no 				  = isset( $_POST['mwa_edit_mb_no'] ) ? sanitize_text_field( $_POST['mwa_edit_mb_no'] ) : '';
	$ms_no 				  = isset( $_POST['mwa_edit_ms_no'] ) ? sanitize_text_field( $_POST['mwa_edit_ms_no'] ) : '';
	$relation 			  = isset( $_POST['mwa_edit_relation'] ) ? sanitize_text_field( $_POST['mwa_edit_relation'] ) : '';
	$rel_name 			  = isset( $_POST['mwa_edit_rel_name'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_name'] ) : '';
	$rel_mno 			  	= isset( $_POST['mwa_edit_rel_mno'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_mno'] ) : '';
	$rel_city 			  = isset( $_POST['mwa_edit_rel_city'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_city'] ) : '';
	$rel_company 		  = isset( $_POST['mwa_edit_rel_company'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_company'] ) : '';
	$rel_designation 	  = isset( $_POST['mwa_edit_rel_designation'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_designation'] ) : '';
	$rel_comp_add 		  = isset( $_POST['mwa_edit_rel_comp_add'] ) ? sanitize_text_field( $_POST['mwa_edit_rel_comp_add'] ) : '';
	$approved 			  = sanitize_text_field( 'no' );
	$mwa_kundali_milan    = isset( $_POST['mwa_edit_kundali_milan'] ) ? sanitize_text_field( $_POST['mwa_edit_kundali_milan'] ) : 'no';
	$mwa_extra_info 	  = isset( $_POST['mwa_edit_extra_info'] ) ? sanitize_textarea_field( $_POST['mwa_edit_extra_info'] ) : '';
	$profile_image 		  = isset( $_POST['upload_image'] ) ? sanitize_text_field( $_POST['upload_image'] ) : '';

    /* Update query */
 	$update_profile_data_arr = array(
								'candidate_name' 		=> $candidate_name,
								'dob'					=> $mwa_candidate_dob,
								'bp'					=> $mwa_candidate_bp,
								'gender'				=> $mwa_candidate_gender,
								'manglik'				=> $mwa_candidate_maglik,
								'gotra'					=> $mwa_candidate_gotra,
								'maternal_gotra' 		=> $maternal_gotra,
								'father_name'			=> $father_name,
								'father_mno'			=> $father_mo,
								'father_occupation'		=> $father_occupation,
								'mother_name'			=> $mother_name,
								'mother_occupation'		=> $mother_occupation,
								'grand_father'			=> $grand_father,
								'native_place'			=> $native_place,
								'nationality'			=> $nationality,
								'status_of_family'		=> $status_of_family,
								'address'				=> $address,
								'country'				=> $country,
								'state'					=> $state,
								'distirct'				=> $district,
								'pincode'				=> $pincode,
								'phone'					=> $phone,
								'contactno'				=> $contactno,
								'email'					=> $email,
								'height'				=> $height,
								'body_type'				=> $body_type,
								'skin_type'				=> $skin_type,
								'blood_group'			=> $blood_group,
								'education_detail'		=> $education_detail,
								'education'				=> $education,
								'hobby'					=> $hobby,
								'candidate_occupation'  => $candidate_occupation,
								'designation'			=> $designation,
								'annual_income'			=> $annual_income,
								'company_name'			=> $company_name,
								'company_city'			=> $company_city,
								'ub_no'					=> $ub_no,
								'us_no'					=> $us_no,
								'mb_no'					=> $mb_no,
								'ms_no'					=> $ms_no,
								'relation'				=> $relation,
								'rel_name'				=> $rel_name,
								'rel_mno'				=> $rel_mno,
								'rel_city'				=> $rel_city,
								'rel_company'			=> $rel_company,
								'rel_designation'		=> $rel_designation,
								'rel_comp_add'			=> $rel_comp_add,
								'mwa_kundali_milan'		=> $mwa_kundali_milan,
								'mwa_extra_info'		=> $mwa_extra_info,
								'profile_image_url' 	=> $profile_image,
								'father_annual_income'	=> $father_annual_income
    						);

		$update_profile_where = array( 'id' => $profile_id );

		$update_profile_format_arr = array( '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%d','%d','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s' );

		$update_profile_where_format = array( '%d' );
        
    if( $wpdb->update( $table_name,$update_profile_data_arr,$update_profile_where,$update_profile_format_arr,$update_profile_where_format ) ){
		$send_json_array = array( "success_msg" => "1" );
	 	echo json_encode($send_json_array);
	}
	else {
		$send_json_array = array( "success_msg" => "0" );
	 	echo json_encode($send_json_array);
	}
    
    function my_handle_attachment($file_handler,$post_id,$set_thu=false) {
		// check to make sure its a successful upload
		if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');

		$attach_id = media_handle_upload( $file_handler, $post_id );

	    // If you want to set a featured image frmo your uploads. 
		if ($set_thu) set_post_thumbnail($post_id, $attach_id);
		// return $attach_id;
		$imageurl = wp_get_attachment_url($attach_id);
		return $imageurl;
	}
	die();
}