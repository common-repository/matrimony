<?php
defined( 'ABSPATH' ) or die();
/**
 * to save data
 */
class MWA_Matri_Savedata
{	
	function save_data() {
		if ( ! wp_verify_nonce( $_REQUEST['mwa_ajax_security'], 'mwa_matri_nonce' ) ) {
			die();
		}
		/* get all the form data and save */
		$candidate_name 	  = isset( $_POST['mwa_candidate_name'] ) ? sanitize_text_field( $_POST['mwa_candidate_name'] ) : "";		
		$mwa_candidate_dob 	  = isset( $_POST['mwa_candidate_dob'] ) ? sanitize_text_field( $_POST['mwa_candidate_dob'] ) : '';
		$mwa_candidate_bp     = isset( $_POST['mwa_candidate_bp'] ) ? sanitize_text_field( $_POST['mwa_candidate_bp'] ) : '';
		$mwa_candidate_time   = isset( $_POST['mwa_candidate_time'] ) ? sanitize_text_field( $_POST['mwa_candidate_time'] ) : '';
		$mwa_candidate_gender = isset( $_POST['mwa_candidate_gender'] ) ? sanitize_text_field( $_POST['mwa_candidate_gender'] ) : '';
		$mwa_candidate_maglik = isset( $_POST['mwa_candidate_maglik'] ) ? sanitize_text_field( $_POST['mwa_candidate_maglik'] ) : 'Not know';
		$mwa_candidate_gotra  = isset( $_POST['mwa_candidate_gotra'] ) ? sanitize_text_field( $_POST['mwa_candidate_gotra'] ) : '';
		
		$maternal_gotra 	  = isset( $_POST['mwa_maternal_gotra'] ) ? sanitize_text_field( $_POST['mwa_maternal_gotra'] ) : '';
		$father_name 		  = isset( $_POST['mwa_father_name'] ) ? sanitize_text_field( $_POST['mwa_father_name'] ) : '';
		$father_mo 			  = isset( $_POST['mwa_father_mno'] ) ? sanitize_text_field( $_POST['mwa_father_mno'] ) : '';
		$father_occupation 	  = isset( $_POST['mwa_father_occupation'] ) ? sanitize_text_field( $_POST['mwa_father_occupation'] ) : '';
		$mother_name 		  = isset( $_POST['mwa_mother_name'] ) ? sanitize_text_field( $_POST['mwa_mother_name'] ) : '';
		$mother_occupation 	  = isset( $_POST['mwa_mother_occupation'] ) ? sanitize_text_field( $_POST['mwa_mother_occupation'] ) : '';
		$grand_father 		  = isset( $_POST['mwa_grand_father'] ) ? sanitize_text_field( $_POST['mwa_grand_father'] ) : '';
		$native_place 		  = isset( $_POST['mwa_native_place'] ) ? sanitize_text_field( $_POST['mwa_native_place'] ) : '';
		$nationality 		  = isset( $_POST['mwa_nationality'] ) ? sanitize_text_field( $_POST['mwa_nationality'] ) : '';
		$status_of_family 	  = isset( $_POST['mwa_family_status'] ) ? sanitize_text_field( $_POST['mwa_family_status'] ) : '';
		$address 			  = isset( $_POST['mwa_address'] ) ? sanitize_text_field( $_POST['mwa_address'] ) : '';
		$country 			  = isset( $_POST['mwa_country'] ) ? sanitize_text_field( $_POST['mwa_country'] ) : '';
		$state 				  = isset( $_POST['mwa_state'] ) ? sanitize_text_field( $_POST['mwa_state'] ) : '';
		$district 			  = isset( $_POST['mwa_district'] ) ? sanitize_text_field( $_POST['mwa_district'] ) : '';
		$pincode 			  = isset( $_POST['mwa_pincode'] ) ? sanitize_text_field( $_POST['mwa_pincode'] ) : '';
		$phone 				  = isset( $_POST['mwa_phone'] ) ? sanitize_text_field( $_POST['mwa_phone'] ) : '';
		$contactno 			  = isset( $_POST['mwa_contactno'] ) ? sanitize_text_field( $_POST['mwa_contactno'] ) : '';
		$email 			      = isset( $_POST['mwa_email'] ) ? sanitize_email( $_POST['mwa_email'] ) : '';
		$height 			  = isset( $_POST['mwa_height'] ) ? sanitize_text_field( $_POST['mwa_height'] ) : '';
		$body_type 			  = isset( $_POST['mwa_body_type'] ) ? sanitize_text_field( $_POST['mwa_body_type'] ) : '';
		$skin_type 			  = isset( $_POST['mwa_skin_type'] ) ? sanitize_text_field( $_POST['mwa_skin_type'] ) : '';
		$blood_group 	  	  = isset( $_POST['mwa_blood_group'] ) ? sanitize_text_field( $_POST['mwa_blood_group'] ) : '';
		$education_detail 	  = isset( $_POST['mwa_education_detail'] ) ? sanitize_text_field( $_POST['mwa_education_detail'] ) : '';
		$education 		      = isset( $_POST['mwa_education'] ) ? sanitize_text_field( $_POST['mwa_education'] ) : '';
		$hobby 				  = isset( $_POST['mwa_hobby'] ) ? sanitize_text_field( $_POST['mwa_hobby'] ) : '';
		$candidate_occupation = isset( $_POST['mwa_candidate_occupation'] ) ? sanitize_text_field( $_POST['mwa_candidate_occupation'] ) : '';
		$designation 		  = isset( $_POST['mwa_designation'] ) ? sanitize_text_field( $_POST['mwa_designation'] ) : '';
		$annual_income 		  = isset( $_POST['mwa_annual_income'] ) ? sanitize_text_field( $_POST['mwa_annual_income'] ) : '';
		$company_name 		  = isset( $_POST['mwa_company_name'] ) ? sanitize_text_field( $_POST['mwa_company_name'] ) : '';
		$company_city 		  = isset( $_POST['mwa_company_city'] ) ? sanitize_text_field( $_POST['mwa_company_city'] ) : '';
		$ub_no 			      = isset( $_POST['mwa_ub_no'] ) ? sanitize_text_field( $_POST['mwa_mwa_ub_no'] ) : '';
		$us_no 			      = isset( $_POST['mwa_us_no'] ) ? sanitize_text_field( $_POST['mwa_mwa_us_no'] ) : '';
		$mb_no 				  = isset( $_POST['mwa_mb_no'] ) ? sanitize_text_field( $_POST['mwa_mwa_mb_no'] ) : '';
		$ms_no 				  = isset( $_POST['mwa_ms_no'] ) ? sanitize_text_field( $_POST['mwa_mwa_ms_no'] ) : '';
		$relation 			  = isset( $_POST['mwa_relation'] ) ? sanitize_text_field( $_POST['mwa_relation'] ) : '';
		$rel_name 			  = isset( $_POST['mwa_rel_name'] ) ? sanitize_text_field( $_POST['mwa_rel_name'] ) : '';
		$rel_mno 			  = isset( $_POST['mwa_rel_mno'] ) ? sanitize_text_field( $_POST['mwa_rel_mno'] ) : '';
		$rel_city 			  = isset( $_POST['mwa_rel_city'] ) ? sanitize_text_field( $_POST['mwa_rel_city'] ) : '';
		$rel_company 		  = isset( $_POST['mwa_rel_company'] ) ? sanitize_text_field( $_POST['mwa_rel_company'] ) : '';
		$rel_designation 	  = isset( $_POST['mwa_rel_designation'] ) ? sanitize_text_field( $_POST['mwa_rel_designation'] ) : '';
		$rel_comp_add 		  = isset( $_POST['mwa_rel_comp_add'] ) ? sanitize_text_field( $_POST['mwa_rel_comp_add'] ) : '';
		$approved 			  = 'no';
		$mwa_kundali_milan    = isset( $_POST['mwa_kundali_milan'] ) ? sanitize_text_field( $_POST['mwa_kundali_milan'] ) : 'no';
		$mwa_extra_info 	  = isset( $_POST['mwa_extra_info'] ) ? sanitize_textarea_field( $_POST['mwa_extra_info'] ) : '';

		global $wpdb;
		$table_name 	= $wpdb->prefix . 'matri_bio';

		$insert_profile_arr = array(
							 'id' 					=> "",
							 'candidate_name' 		=> $candidate_name,
							 'dob' 					=> $mwa_candidate_dob,
							 'bp' 					=> $mwa_candidate_bp,
							 'gender' 				=> $mwa_candidate_gender,
							 'manglik'	 			=> $mwa_candidate_maglik,
							 'gotra' 				=> $mwa_candidate_gotra,
							 'maternal_gotra' 		=> $maternal_gotra,
							 'father_name' 			=> $father_name,
							 'father_mno' 			=> $father_mo,
							 'father_occupation' 	=> $father_occupation,
							 'mother_name' 			=> $mother_name,
							 'mother_occupation' 	=> $mother_occupation,
							 'grand_father' 		=> $grand_father,
							 'native_place' 		=> $native_place,
							 'nationality' 			=> $nationality,
							 'status_of_family' 	=> $status_of_family,
							 'address' 				=> $address,
							 'country'	 			=> $country,
							 'state' 				=> $state,
							 'distirct' 			=> $district,
							 'pincode' 				=> $pincode,
							 'phone' 				=> $phone,
							 'contactno'			=> $contactno,
							 'email' 				=> $email,
							 'height' 				=> $height,
							 'body_type' 			=> $body_type,
							 'skin_type' 			=> $skin_type,
							 'blood_group' 			=> $blood_group,
							 'education_detail'		=> $education_detail,
							 'education' 			=> $education,
							 'hobby' 				=> $hobby,
							 'candidate_occupation' => $candidate_occupation,
							 'designation' 			=> $designation,
							 'annual_income' 		=> $annual_income,
							 'company_name' 		=> $company_name,
							 'company_city' 		=> $company_city,
							 'ub_no'				=> $ub_no,
							 'us_no' 				=> $us_no,
							 'mb_no' 				=> $mb_no,
							 'ms_no' 				=> $ms_no,
							 'relation' 			=> $relation,
							 'rel_name' 			=> $rel_name,
							 'rel_mno' 				=> $rel_mno,
							 'rel_city'			 	=> $rel_city,
							 'rel_company' 			=> $rel_company,
							 'rel_designation' 		=> $rel_designation,
							 'rel_comp_add' 		=> $rel_comp_add,
							 'mwa_kundali_milan' 	=> $mwa_kundali_milan,
							 'mwa_extra_info' 		=> $mwa_extra_info,
							 'approved' 			=> $approved
						);

		$insert_profile_arr_format = array('%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%d','%d','%d','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');

		$wpdb->insert( $table_name,$insert_profile_arr,$insert_profile_arr_format );
	}
}
