<?php
defined( 'ABSPATH' ) or die();

global $wpdb;
$table_name  = $wpdb->prefix . "matri_bio";
$table_name2 = $wpdb->prefix . "height";

if( isset( $_GET['sid'] ) ) {
	$profile_id = sanitize_text_field( $_GET['sid'] );

	$single_profile 	  = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM `$table_name` WHERE `id` = %d",$profile_id) );
	$profile_image_url	  = esc_url( $single_profile[0]->profile_image_url );
	$candidate_name 	  = esc_html( $single_profile[0]->candidate_name );
	$dob 				  = esc_html( $single_profile[0]->dob );
	$bp 				  = esc_html( $single_profile[0]->bp );
	$gender 			  = esc_html( $single_profile[0]->gender );
	$manglik 			  = esc_html( $single_profile[0]->manglik );
	$gotra 				  = esc_html( $single_profile[0]->gotra );
	$maternal_gotra 	  = esc_html( $single_profile[0]->maternal_gotra );
	$father_name 		  = esc_html( $single_profile[0]->father_name );
	$father_mno 	      = esc_html( $single_profile[0]->father_mno );
	$father_occupation    = esc_html( $single_profile[0]->father_occupation );
	$father_annual_income = esc_html( $single_profile[0]->father_annual_income );
	$mother_name 	      = esc_html( $single_profile[0]->mother_name );
	$mother_occupation    = esc_html( $single_profile[0]->mother_occupation );
	$grand_father 	      = esc_html( $single_profile[0]->grand_father );
	$native_place 	      = esc_html( $single_profile[0]->native_place );
	$nationality 	      = esc_html( $single_profile[0]->nationality );
	$status_of_family     = esc_html( $single_profile[0]->status_of_family );
	$address 		      = esc_html( $single_profile[0]->address );
	$country 		      = esc_html( $single_profile[0]->country );
	$state 			      = esc_html( $single_profile[0]->state );
	$district 		      = esc_html( $single_profile[0]->distirct );
	$pincode 		      = esc_html( $single_profile[0]->pincode );
	$phone 			      = esc_html( $single_profile[0]->phone );
	$contactno 		      = esc_html( $single_profile[0]->contactno );
	$email 			      = esc_html( $single_profile[0]->email );
	$height 		      = esc_html( $single_profile[0]->height );
	$body_type 		      = esc_html( $single_profile[0]->body_type );
	$skin_type 		      = esc_html( $single_profile[0]->skin_type );
	$blood_group 	      = esc_html( $single_profile[0]->blood_group );
	$education_detail     = esc_html( $single_profile[0]->education_detail );
	$education            = esc_html( $single_profile[0]->education );
	$hobby 			      = esc_html( $single_profile[0]->hobby );
	$candidate_occupation = esc_html( $single_profile[0]->candidate_occupation );
	$designation 		  = esc_html( $single_profile[0]->designation );
	$annual_income   	  = esc_html( $single_profile[0]->annual_income );
	$company_name 		  = esc_html( $single_profile[0]->company_name );
	$company_city 		  = esc_html( $single_profile[0]->company_city );
	$ub_no 				  = esc_html( $single_profile[0]->ub_no );
	$us_no 				  = esc_html( $single_profile[0]->us_no );
	$mb_no 				  = esc_html( $single_profile[0]->mb_no );
	$ms_no 				  = esc_html( $single_profile[0]->ms_no );
	$relation 			  = esc_html( $single_profile[0]->relation );
	$rel_name 			  = esc_html( $single_profile[0]->rel_name );
	$rel_mno 			  = esc_html( $single_profile[0]->rel_mno );
	$rel_city 			  = esc_html( $single_profile[0]->rel_city );
	$rel_company 		  = esc_html( $single_profile[0]->rel_company );
	$rel_designation 	  = esc_html( $single_profile[0]->rel_designation );
	$rel_comp_add 		  = esc_html( $single_profile[0]->rel_comp_add );
	$mwa_kundali_milan 	  = esc_html( $single_profile[0]->mwa_kundali_milan );
	$mwa_extra_info 	  = esc_html( $single_profile[0]->mwa_extra_info );
}
?>
<div class="mwa_matri">
	<section id="mwa_profile_update_form">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-5">
					<h2 class="mwa_edit_page mt-4 mb-4"><?php _e( 'Update Profile', MWA_MATRI_SYSTEM ); ?></h2>
				</div>
			</div>
			<!-- <div class="row"> -->
			<form id="mwa_edit_register_form" method="post" enctype="multipart/form-data">
				<?php wp_nonce_field( 'upg_form_submit', 'upgform_generate_nonce' ); ?>
				<input type="hidden" name="profile_id" value="<?php echo $profile_id; ?>">
				<div class="row mwa_candidate_basic_info">					  
					<div class="form-group col-md-3">
					    <label for="mwa_edit_candidate_name"><?php _e( 'Candiate Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_candidate_name" id="mwa_edit_candidate_name" value="<?php echo $candidate_name; ?>" aria-describedby="" placeholder="Enter Candiadate Name">					    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_candidate_dob"><?php _e( 'Candiate DOB', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="date" class="form-control" name="mwa_edit_candidate_dob" id="mwa_edit_candidate_dob" value="<?php echo $dob; ?>" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_candidate_bp"><?php _e( 'Candiate Birth Place', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $bp; ?>" name="mwa_edit_candidate_bp" id="mwa_edit_candidate_bp" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3" style="display: none;">
					    <label for="mwa_edit_candidate_time"><?php _e( 'Birth Time', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_candidate_time" id="mwa_edit_candidate_time" aria-describedby="">	    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_candidate_gender"><?php _e( 'Candiate gender', MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_candidate_gender" id="mwa_edit_candidate_gender">
					    	<option><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Male"><?php _e( 'Male', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Female"><?php _e( 'Female', MWA_MATRI_SYSTEM ); ?></option>
					    </select>
					    <script type="text/javascript">
                            var gender = '<?php echo "$gender"; ?>';
                            jQuery('#mwa_edit_candidate_gender').find('option[value="' + gender + '"]').attr('selected', 'selected')
                        </script>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_candidate_maglik"><?php _e( 'Manglik', MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_candidate_maglik" id="mwa_edit_candidate_maglik">
					    	<option><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="yes"><?php _e( 'Yes', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="no"><?php _e( 'No', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Not know"><?php _e( "Don't know", MWA_MATRI_SYSTEM ); ?></option>
					    </select>
					    <script type="text/javascript">
                            var manglik = '<?php echo "$manglik"; ?>';
                            jQuery('#mwa_edit_candidate_maglik').find('option[value="' + manglik + '"]').attr('selected', 'selected')
                        </script>
					</div>
					<div class="form-group col-md-3">						
					    <label for="mwa_edit_candidate_gotra"><?php _e( 'Gotra', MWA_MATRI_SYSTEM ); ?></label>
						<input type="text" class="form-control" name="mwa_edit_candidate_gotra" id="mwa_edit_candidate_gotra" value="<?php echo $gotra; ?>">
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_maternal_gotra"><?php _e( 'Maternal Gotra', MWA_MATRI_SYSTEM ); ?>
					    </label>
					    <input type="text" class="form-control" name="mwa_edit_maternal_gotra" id="mwa_edit_maternal_gotra" aria-describedby="" value="<?php echo $maternal_gotra; ?>">		    
					</div>
				</div>
				<div class="row mwa_candidate_family_info">
					<div class="col-md-12">
						<h5><?php _e( 'Family Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_father_name"><?php _e( 'Father Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_father_name" value="<?php echo $father_name; ?>" id="mwa_edit_father_name" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_father_mno"><?php _e( 'Father Mobile No', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $father_mno; ?>" name="mwa_edit_father_mno" id="mwa_edit_father_mno" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_father_occupation"><?php _e( "Father's Occupation ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $father_occupation; ?>" name="mwa_edit_father_occupation" id="mwa_edit_father_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_father_annual_income"><?php _e( 'Father Annual Income', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_father_annual_income" id="mwa_edit_father_annual_income" value="<?php echo $father_annual_income; ?>" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_mother_name"><?php _e( 'Mother Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $mother_name; ?>" name="mwa_edit_mother_name" id="mwa_edit_mother_name" aria-describedby="">		    
					</div>					
					<div class="form-group col-md-3">
					    <label for="mwa_edit_mother_occupation"><?php _e( "Mother's Occupation ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $mother_occupation; ?>" name="mwa_edit_mother_occupation" id="mwa_edit_mother_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_grand_father"><?php _e( "Grand Father", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $grand_father; ?>" name="mwa_edit_grand_father" id="mwa_edit_grand_father" aria-describedby="">		    
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
					    <label for="mwa_edit_native_place"><?php _e( "Native place", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $native_place; ?>" name="mwa_edit_native_place" id="mwa_edit_native_place" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_nationality"><?php _e( "Nationality", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $nationality; ?>" name="mwa_edit_nationality" id="mwa_edit_nationality" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_family_status"><?php _e( 'Status Of Family', MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_family_status" id="mwa_edit_family_status">
					    	<option value=""><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="middle class"><?php _e( "Middle class", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="upper middle class"><?php _e( "Upper middle class", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="lower middle class"><?php _e( "Lower middle class", MWA_MATRI_SYSTEM ); ?></option>			    	
					    </select>
					    <script type="text/javascript">
                            var status_of_family = '<?php echo "$status_of_family"; ?>';
                            jQuery('#mwa_edit_family_status').find('option[value="' + status_of_family + '"]').attr('selected', 'selected')
                        </script>	    
					</div>
				</div>
				<!-- Address block -->
				<div class="row" id="address_block">
					<div class="col-md-12">
						<h5><?php _e( 'Address', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_address"><?php _e( "Address", MWA_MATRI_SYSTEM ); ?></label>
					    <textarea class="form-control" name="mwa_edit_address" id="mwa_edit_address"><?php echo $address; ?></textarea>	    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_country"><?php _e( "Country", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_country" value="<?php echo $country; ?>" id="mwa_edit_country" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_state"><?php _e( "State", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_state" id="mwa_edit_state">
							<option value="">Select State</option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Orissa</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttaranchal">Uttaranchal</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
						<script type="text/javascript">
                            var state = '<?php echo "$state"; ?>';
                            jQuery('#mwa_edit_state').find('option[value="' + state + '"]').attr('selected', 'selected')
                        </script>  
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_district"><?php _e( "District", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $district; ?>" name="mwa_edit_district" id="mwa_edit_district" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_pincode"><?php _e( "PIN Code", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $pincode; ?>" name="mwa_edit_pincode" id="mwa_edit_pincode" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_phone"><?php _e( "phone ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $phone; ?>" name="mwa_edit_phone" id="mwa_edit_phone" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_contactno"><?php _e( "Contact No", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $contactno; ?>" name="mwa_edit_contactno" id="mwa_edit_contactno" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_email"><?php _e( "E-mail Id", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $email; ?>" name="mwa_edit_email" id="mwa_edit_email" aria-describedby=""> 
					</div>					
				</div>
				<!-- Candidate personal information -->
				<div class="row mwa_candidate_personal_info"> 
					<div class="col-md-12">
						<h5><?php _e( 'Personal Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_height"><?php _e( "Height", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_height" id="mwa_edit_height">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<?php 
					    		$query_fetch  = "SELECT * FROM `$table_name2`";
								$result_fetch = $wpdb->get_results($query_fetch);
								if( count($result_fetch) > 0 ) {							
									foreach( $result_fetch as $key => $value ) { 
										$heightId    = $value->heightId;
										$heightValue = $value->heightValue;
										?>
										<option value="<?php echo $heightId; ?>" ><?php echo $heightValue; ?></option>
										<?php
									}
								}
					    	?>
					    </select>
					    <script type="text/javascript">
                            var height = '<?php echo "$height"; ?>';
                            jQuery('#mwa_edit_height').find('option[value="' + height + '"]').attr('selected', 'selected')
                        </script>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_body_type"><?php _e( "Body type", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_body_type" id="mwa_edit_body_type">
					    	<option value="">Select</option>
					    	<option value="slim">Slim</option>
					    	<option value="average">Average</option>
					    	<option value="athletic">Athletic</option>
					    	<option value="heavy">Heavy</option>
					    </select>
					    <script type="text/javascript">
                            var body_type = '<?php echo "$body_type"; ?>';
                            jQuery('#mwa_edit_body_type').find('option[value="' + body_type + '"]').attr('selected', 'selected')
                        </script>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_skin_type"><?php _e( "Complexion", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_skin_type" id="mwa_edit_skin_type">
							<option value="">Select</option>
							<option value="Fair">Fair</option>
							<option value="Wheatish">Wheatish</option>
							<option value="Dusky">Dusky</option>
							<option value="Dark">Dark</option>
							<option value="Dark Brown">Dark Brown</option>
							<option value="Light Brown">Light Brown</option>
						</select>
						<script type="text/javascript">
                            var skin_type = '<?php echo "$skin_type"; ?>';
                            jQuery('#mwa_edit_skin_type').find('option[value="' + skin_type + '"]').attr('selected', 'selected')
                        </script>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_blood_group"><?php _e( "Blood Group", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_blood_group" id="mwa_edit_blood_group">
					    	<option value="">Select</option>
					    	<option value="A+">A+</option>
					    	<option value="A-">A-</option>
					    	<option value="B+">B+</option>
					    	<option value="B-">B-</option>
					    	<option value="AB+">AB+</option>
					    	<option value="AB-">AB-</option>
					    	<option value="O+">O+</option>
					    	<option value="O-">O-</option>					    	
					    </select>
					    <script type="text/javascript">
                            var blood_group = '<?php echo "$blood_group"; ?>';
                            jQuery('#mwa_edit_blood_group').find('option[value="' + blood_group + '"]').attr('selected', 'selected')
                        </script>		    
					</div>
				</div>
				<!-- Education and job block -->
				<div class="row" id="mwa_edcation_job_block">
					<div class="col-md-12">
						<h5>
							<?php _e( 'Education and job Details', MWA_MATRI_SYSTEM ); ?>
						</h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_education_detail"><?php _e( "Education Detail", MWA_MATRI_SYSTEM ); ?></label>					    
					    <select class="form-control mwa_Samaj_Select" name="mwa_edit_education_detail" id="mwa_edit_education_detail">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="graduate"><?php _e( "Graduate", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Post Graduate"><?php _e( "Post Graduate", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="School"><?php _e( "Up to 12<sup>Th</sup>", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="No"><?php _e( "No", MWA_MATRI_SYSTEM ); ?></option>
					    </select>
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_education"><?php _e( "Education", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_education" value="<?php echo $education; ?>" id="mwa_edit_education" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_hobby"><?php _e( "Hobby", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $hobby; ?>" name="mwa_edit_hobby" id="mwa_edit_hobby" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_candidate_occupation"><?php _e( "Occupation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $candidate_occupation; ?>" name="mwa_edit_candidate_occupation" id="mwa_edit_candidate_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_designation"><?php _e( "Designation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_designation" value="<?php echo $designation; ?>" id="mwa_edit_designation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_annual_income"><?php _e( "Annual Income", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_annual_income" id="mwa_edit_annual_income" value="<?php echo $annual_income; ?>" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_company_name"><?php _e( "Company name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $company_name; ?>" name="mwa_edit_company_name" id="mwa_edit_company_name" aria-describedby="">		    
					</div>
					<div class="form-group col-md-2">
					    <label for="mwa_edit_company_city"><?php _e( "Company city", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_company_city" value="<?php echo $company_city; ?>" id="mwa_edit_company_city" aria-describedby="">		    
					</div>					
				</div>
				<div class="row mwa_candidate_sibling_info"> 
					<div class="col-md-12">
						<h5><?php _e( 'Sibling Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-6">
					    <label for="mwa_edit_ub_no"><?php _e( "No of unmarried brother", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_ub_no" value="<?php echo $ub_no; ?>" id="mwa_edit_ub_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-6">
					    <label for="mwa_edit_us_no"><?php _e( "No of unmarried sister", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_us_no" value="<?php echo $us_no; ?>" id="mwa_edit_us_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-6">
					    <label for="mwa_edit_mb_no"><?php _e( "No of Married Brother", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_mb_no" value="<?php echo $mb_no; ?>" id="mwa_edit_mb_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-6">
					    <label for="mwa_edit_ms_no"><?php _e( "No of married sister", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" name="mwa_edit_ms_no" value="<?php echo $ms_no; ?>" id="mwa_edit_ms_no" aria-describedby="">		    
					</div>
				</div>
				<div class="row mwa_candidate_relative_info"> 
					<div class="col-md-12">
						<h5><?php _e( 'Relative Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_relation"><?php _e( "Relation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $relation; ?>" name="mwa_edit_relation" id="mwa_edit_relation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_rel_name"><?php _e( "Relative Name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_name; ?>" name="mwa_edit_rel_name" id="mwa_edit_rel_name" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_rel_mno"><?php _e( "Mobile no", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_mno; ?>" name="mwa_edit_rel_mno" id="mwa_edit_rel_mno" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_rel_city"><?php _e( "City", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_city; ?>" name="mwa_edit_rel_city" id="mwa_edit_rel_city" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_rel_company"><?php _e( "Company Name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_company; ?>" name="mwa_edit_rel_company" id="mwa_edit_rel_company" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_rel_designation"><?php _e( "Designation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_designation; ?>" name="mwa_edit_rel_designation" id="mwa_edit_rel_designation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_rel_comp_add"><?php _e( "Company Address", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control" value="<?php echo $rel_comp_add; ?>" name="mwa_edit_rel_comp_add" id="mwa_edit_rel_comp_add" aria-describedby="">		    
					</div>					
				</div>
				<div class="row mwa_candidate_other_info">
					<div class="col-md-12">
						<h5><?php _e( 'Other Information', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_kundali_milan"><?php _e( "Kundali Milana Necessary", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control" name="mwa_edit_kundali_milan" id="mwa_edit_kundali_milan">
					    	<option><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="yes"><?php _e( 'Yes' ); ?></option>
					    	<option value="no"><?php _e( 'No' ); ?></option>
					    </select>
					    <script type="text/javascript">
                            var mwa_kundali_milan = '<?php echo "$mwa_kundali_milan"; ?>';
                            jQuery('#mwa_edit_kundali_milan').find('option[value="' + mwa_kundali_milan + '"]').attr('selected', 'selected')
                        </script>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_edit_extra_info"><?php _e( "Other Information / About Me", MWA_MATRI_SYSTEM ); ?></label>
					    <textarea class="form-control" name="mwa_edit_extra_info" id="mwa_edit_extra_info"><?php echo $mwa_extra_info; ?></textarea>		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_edit_profile_image"><?php _e( "Image Upload", MWA_MATRI_SYSTEM ); ?></label>					      
					   <input type="text" class="pro_text" id="top_image" placeholder="<?php _e('No media selected!', MWA_MATRI_SYSTEM)?>" value="<?php echo $profile_image_url; ?>" name="upload_image"  readonly />
					   <input type="button" value="<?php _e('Upload', MWA_MATRI_SYSTEM)?>" id="upload-logo" class="button-primary rcsp_media_upload" />
					</div>
					<div class="form-group col-md-2">
						<img class="img-thumbnail img-fluid"src="<?php echo $profile_image_url; ?>">
					</div>
					<input type="hidden" name="mwa_saved_image" value="<?php echo $profile_image_url; ?>">
				</div>
				<div class="row">
					<div class="col-md-12">						
						<input class="btn btn-success mb-4" id="mwa_edit_register_button" type="submit" name="submit">
					</div>
				</div>				
			</form>	
		<!-- </div> -->
	</div>
	</section>
</div>