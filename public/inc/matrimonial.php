<?php
defined( 'ABSPATH' ) or die();
global $wpdb;
$table_name  = $wpdb->prefix . "height";
/* Get CSS setting saved values */
$csssetting_data 	  = get_option('css_settings');
$formbackground_value = isset($csssetting_data['formbackground']) ? $csssetting_data['formbackground'] : '#FFEBCD';
$formtextcolor		  = isset($csssetting_data['formtextcolor']) ? $csssetting_data['formtextcolor'] : '#008000';

?>
<style type="text/css">
	.form-group+.form-group {
	    margin-top: inherit;
	}
	.alert_meesage_1,
	.alert_meesage_2 {
		position: fixed;
		top: 15%;
		display: none;
	}
	.loader {
		position:fixed;
		top: 50%;
		left: 50%;
		width: 200px;
		height: 200px;
		margin-top: -3em;
		margin-left: -3em;
		border: 0px solid #ccc;
		background-color: #ffffff;
		background: url('<?php echo esc_url( MWA_MATRI_SYSTEM_URL."assets/loader/loader_image.gif"); ?>') no-repeat;	
		display: none;
		z-index: 99999999999;			
	}
	.mwa_Samaj_PaddingBackg {
		background: <?php echo $formbackground_value; ?>
	}
	.mwa_Samaj_label {
		color: <?php echo $formtextcolor; ?>;
	}
</style>
<!-- Matrimonial form -->
<div class="mwa_matri  mwa_Samaj_PaddingBackg">
	<div class="loader"></div>
	<div class="container-fluid">
		<div class="row">
			<form id="mwa_register_form" method="post" enctype="multipart/form-data">
				<?php $nonce = wp_create_nonce( 'matrimonial_form_save' ); ?>
				<input type="hidden" name="matrimonial_form-security" value="<?php echo $nonce; ?>">
				<input type="hidden" name="mwa_matrimonial_form" value="matrimonial_form_save">
				<div class="row mwa_candidate_basic_info mwa_Samaj_PaddingLRT">					  
					<div class="form-group col-md-4">
					    <label for="mwa_candidate_name" class="mwa_Samaj_label"><?php _e( 'Candiate Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_candidate_name" id="mwa_candidate_name" aria-describedby="" placeholder="Enter Candiadate Name" required="required">					    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_candidate_dob" class="mwa_Samaj_label"><?php _e( 'Candiate DOB', MWA_MATRI_SYSTEM ); ?></label>
					    <input data-role="datepicker" class="form-control " name="mwa_candidate_dob" id="mwa_candidate_dob">
					    <!-- <input type="date" class="form-control mwa_text_field" name="mwa_candidate_dob" id="mwa_candidate_dob" aria-describedby="">		     -->
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_candidate_bp" class="mwa_Samaj_label"><?php _e( 'Candiate Birth Place', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_candidate_bp" id="mwa_candidate_bp" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4" style="display: none;">
					    <label for="mwa_candidate_time" class="mwa_Samaj_label"><?php _e( 'Birth Time', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_candidate_time" id="mwa_candidate_time" aria-describedby="">	    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_candidate_gender" class="mwa_Samaj_label"><?php _e( 'Candiate gender', MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_candidate_gender" id="mwa_candidate_gender" required="required">
					    	<option><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Male"><?php _e( 'Male', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Female"><?php _e( 'Female', MWA_MATRI_SYSTEM ); ?></option>
					    </select>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_candidate_maglik" class="mwa_Samaj_label"><?php _e( 'Manglik', MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_candidate_maglik" id="mwa_candidate_maglik" required="required">
					    	<option value=""><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="yes"><?php _e( 'Yes', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="no"><?php _e( 'No', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Not know"><?php _e( "Don't know", MWA_MATRI_SYSTEM ); ?></option>
					    </select>	    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_candidate_gotra" class="mwa_Samaj_label"><?php _e( 'Gotra', MWA_MATRI_SYSTEM ); ?></label>
						<input type="text" class="form-control mwa_text_field" name="mwa_candidate_gotra" id="mwa_candidate_gotra" list="gotra_list_frontend">
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_maternal_gotra" class="mwa_Samaj_label"><?php _e( 'Maternal Gotra', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_maternal_gotra" id="mwa_maternal_gotra" aria-describedby="" required="required">		    
					</div>
				</div>
				<div class="row mwa_candidate_family_info  mwa_Samaj_PaddingLR" >
					<div class="col-md-12">
						<h5><?php _e( 'Family Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_father_name" class="mwa_Samaj_label"><?php _e( 'Father Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_father_name" id="mwa_father_name" aria-describedby="" required="required">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_father_mno" class="mwa_Samaj_label"><?php _e( 'Father Mobile No', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="tel" class="form-control mwa_text_field" name="mwa_father_mno" id="mwa_father_mno" aria-describedby="" required="required">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_father_occupation" class="mwa_Samaj_label"><?php _e( "Father's Occupation ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_father_occupation" id="mwa_father_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_father_annual_income" class="mwa_Samaj_label"><?php _e( 'Father Annual Income', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_father_annual_income" id="mwa_father_annual_income" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_mother_name" class="mwa_Samaj_label"><?php _e( 'Mother Name', MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_mother_name" id="mwa_mother_name" aria-describedby="" required="required">		    
					</div>					
					<div class="form-group col-md-4">
					    <label for="mwa_mother_occupation" class="mwa_Samaj_label"><?php _e( "Mother's Occupation ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_mother_occupation" id="mwa_mother_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_grand_father" class="mwa_Samaj_label"><?php _e( "Grand Father", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_grand_father" id="mwa_grand_father" aria-describedby="" required="required">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_native_place" class="mwa_Samaj_label"><?php _e( "Native place", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_native_place" id="mwa_native_place" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_nationality" class="mwa_Samaj_label"><?php _e( "Nationality", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_nationality" id="mwa_nationality" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_family_status" class="mwa_Samaj_label"><?php _e( "Status Of Family", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_family_status" id="mwa_family_status">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="middle class"><?php _e( "Middle class", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="upper middle class"><?php _e( "Upper middle class", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="lower middle class"><?php _e( "Lower middle class", MWA_MATRI_SYSTEM ); ?></option>
					    </select>	    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_address" class="mwa_Samaj_label"><?php _e( "Address", MWA_MATRI_SYSTEM ); ?></label>
					    <textarea class="form-control mwa_text_field" name="mwa_address" id="mwa_address" required="required"></textarea>	    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_country" class="mwa_Samaj_label"><?php _e( "Country", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_country" id="mwa_country" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_state" class="mwa_Samaj_label"><?php _e( "State", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_state" id="mwa_state">
							<option value="">Select State</option>
							<option value="Andaman and Nicobar Islands"><?php _e( "Andaman and Nicobar Islands", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Andhra Pradesh"><?php _e( "Andhra Pradesh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Arunachal Pradesh"><?php _e( "Arunachal Pradesh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Assam"><?php _e( "Assam", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Bihar"><?php _e( "Bihar", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Chandigarh"><?php _e( "Chandigarh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Chhattisgarh"><?php _e( "Chhattisgarh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Dadra and Nagar Haveli"><?php _e( "Dadra and Nagar Haveli", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Daman and Diu"><?php _e( "Daman and Diu", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Delhi"><?php _e( "Delhi", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Goa"><?php _e( "Goa", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Gujarat"><?php _e( "Gujarat", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Haryana"><?php _e( "Haryana", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Himachal Pradesh"><?php _e( "Himachal Pradesh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Jammu and Kashmir"><?php _e( "Jammu and Kashmir", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Jharkhand"><?php _e( "Jharkhand", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Karnataka"><?php _e( "Karnataka", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Kerala"><?php _e( "Kerala", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Lakshadweep"><?php _e( "Lakshadweep", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Madhya Pradesh"><?php _e( "Madhya Pradesh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Maharashtra"><?php _e( "Maharashtra", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Manipur"><?php _e( "Manipur", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Meghalaya"><?php _e( "Meghalaya", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Mizoram"><?php _e( "Mizoram", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Nagaland"><?php _e( "Nagaland", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Orissa"><?php _e( "Orissa", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Pondicherry"><?php _e( "Pondicherry", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Punjab"><?php _e( "Punjab", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Rajasthan"><?php _e( "Rajasthan", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Sikkim"><?php _e( "Sikkim", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Tamil Nadu"><?php _e( "Tamil Nadu", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Tripura"><?php _e( "Tripura", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Uttaranchal"><?php _e( "Uttaranchal", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Uttar Pradesh"><?php _e( "Uttar Pradesh", MWA_MATRI_SYSTEM ); ?></option>
							<option value="West Bengal"><?php _e( "West Bengal", MWA_MATRI_SYSTEM ); ?></option>
						</select>  
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_district" class="mwa_Samaj_label"><?php _e( "District", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_district" id="mwa_district" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_pincode" class="mwa_Samaj_label"><?php _e( "PIN Code", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_pincode" id="mwa_pincode" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_phone" class="mwa_Samaj_label"><?php _e( "phone ", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="tel" class="form-control mwa_text_field" name="mwa_phone" id="mwa_phone" aria-describedby="" required="required">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_contactno" class="mwa_Samaj_label"><?php _e( "Contact No", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="tel" class="form-control mwa_text_field" name="mwa_contactno" id="mwa_contactno" aria-describedby="" required="required">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_email" class="mwa_Samaj_label"><?php _e( "E-mail Id", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_email" id="mwa_email" aria-describedby=""> 
					</div>					
				</div>
				<div class="row mwa_candidate_personal_info  mwa_Samaj_PaddingLR"> 
					<div class="col-md-12">
						<h5><?php _e( 'Personal Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_height" class="mwa_Samaj_label"><?php _e( "Height", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_height" id="mwa_height">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<?php 
					    		$query_fetch  = "SELECT * FROM `$table_name`";
								$result_fetch = $wpdb->get_results($query_fetch);
								if( count($result_fetch) > 0 ) {							
									foreach( $result_fetch as $key => $value ) { 
										$heightId    = $value->heightId;
										$heightValue = $value->heightValue;
										?>
										<option value="<?php echo $heightId; ?>"><?php echo $heightValue; ?></option>
										<?php
									}
								}
					    	?>
					    </select>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_body_type" class="mwa_Samaj_label"><?php _e( "Body type", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_body_type" id="mwa_body_type">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="slim"><?php _e( "Slim", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="average"><?php _e( "Average", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="athletic"><?php _e( "Athletic", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="heavy"><?php _e( "Heavy", MWA_MATRI_SYSTEM ); ?></option>
					    </select>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_skin_type" class="mwa_Samaj_label"><?php _e( "Complexion", MWA_MATRI_SYSTEM ); ?></label>		    
					    <select class="form-control mwa_Samaj_Select" name="mwa_skin_type" id="mwa_skin_type">
							<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Fair"><?php _e( "Fair", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Wheatish"><?php _e( "Wheatish", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Dusky"><?php _e( "Dusky", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Dark"><?php _e( "Dark", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Dark Brown"><?php _e( "Dark Brown", MWA_MATRI_SYSTEM ); ?></option>
							<option value="Light Brown"><?php _e( "Light Brown", MWA_MATRI_SYSTEM ); ?></option>
						</select>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_blood_group" class="mwa_Samaj_label"><?php _e( "Blood Group", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control   mwa_Samaj_Select" name="mwa_blood_group" id="mwa_blood_group" >
					    	<option value="">Select</option>"> 
					    	<option value="A+"><?php _e( "A", MWA_MATRI_SYSTEM ); ?>+</option>
					    	<option value="A-"><?php _e( "A", MWA_MATRI_SYSTEM ); ?>-</option>
					    	<option value="B+"><?php _e( "B", MWA_MATRI_SYSTEM ); ?>+</option>
					    	<option value="B-"><?php _e( "B", MWA_MATRI_SYSTEM ); ?>-</option>
					    	<option value="AB+"><?php _e( "AB", MWA_MATRI_SYSTEM ); ?>+</option>
					    	<option value="AB-"><?php _e( "AB", MWA_MATRI_SYSTEM ); ?>-</option>
					    	<option value="O+"><?php _e( "O", MWA_MATRI_SYSTEM ); ?>+</option>
					    	<option value="O-"><?php _e( "O", MWA_MATRI_SYSTEM ); ?>-</option>					    	
					    	<option value="Not know"><?php _e( "Don't know", MWA_MATRI_SYSTEM ); ?></option>					    	
					    </select>		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_education_detail" class="mwa_Samaj_label"><?php _e( "Education Detail", MWA_MATRI_SYSTEM ); ?></label>				    
					    <select class="form-control mwa_Samaj_Select" name="mwa_education_detail" id="mwa_education_detail">
					    	<option value=""><?php _e( "Select", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="graduate"><?php _e( "Graduate", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="Post Graduate"><?php _e( "Post Graduate", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="School"><?php _e( "Up to 12<sup>Th</sup>", MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="No"><?php _e( "No", MWA_MATRI_SYSTEM ); ?></option>
					    </select>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_education" class="mwa_Samaj_label"><?php _e( "Education", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_education" id="mwa_education" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_hobby" class="mwa_Samaj_label"><?php _e( "Hobby", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_hobby" id="mwa_hobby" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_candidate_occupation" class="mwa_Samaj_label"><?php _e( "Occupation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_candidate_occupation" id="mwa_candidate_occupation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_designation" class="mwa_Samaj_label"><?php _e( "Designation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_designation" id="mwa_designation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_annual_income" class="mwa_Samaj_label"><?php _e( "Annual Income", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_annual_income" id="mwa_annual_income" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_company_name" class="mwa_Samaj_label"><?php _e( "Company name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_company_name" id="mwa_company_name" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_company_city" class="mwa_Samaj_label"><?php _e( "Company city", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_company_city" id="mwa_company_city" aria-describedby="">		    
					</div>					
				</div>
				<div class="row mwa_candidate_sibling_info  mwa_Samaj_PaddingLR"> 
					<div class="col-md-12">
						<h5><?php _e( 'Sibling Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_ub_no" class="mwa_Samaj_label"><?php _e( "No of unmarried brother", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_ub_no" id="mwa_ub_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_us_no" class="mwa_Samaj_label"><?php _e( "No of unmarried sister", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_us_no" id="mwa_us_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_mb_no" class="mwa_Samaj_label"><?php _e( "No of Married Brother", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_mb_no" id="mwa_mb_no" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_ms_no" class="mwa_Samaj_label"><?php _e( "No of married sister", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_ms_no" id="mwa_ms_no" aria-describedby="">		    
					</div>
				</div>
				<div class="row mwa_candidate_relative_info  mwa_Samaj_PaddingLR" > 
					<div class="col-md-12">
						<h5><?php _e( 'Relative Details', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_relation" class="mwa_Samaj_label"><?php _e( "Relation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_relation" id="mwa_relation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_rel_name" class="mwa_Samaj_label"><?php _e( "Relative Name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_rel_name" id="mwa_rel_name" aria-describedby="">		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_rel_mno" class="mwa_Samaj_label"><?php _e( "Mobile no", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="tel" class="form-control mwa_text_field" name="mwa_rel_mno" id="mwa_rel_mno" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_rel_city" class="mwa_Samaj_label"><?php _e( "City", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_rel_city" id="mwa_rel_city" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_rel_company" class="mwa_Samaj_label"><?php _e( "Company Name", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_rel_company" id="mwa_rel_company" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_rel_designation" class="mwa_Samaj_label"><?php _e( "Designation", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_rel_designation" id="mwa_rel_designation" aria-describedby="">		    
					</div>
					<div class="form-group col-md-3">
					    <label for="mwa_rel_comp_add" class="mwa_Samaj_label"><?php _e( "Company Address", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="text" class="form-control mwa_text_field" name="mwa_rel_comp_add" id="mwa_rel_comp_add" aria-describedby="">		    
					</div>					
				</div>
				<div class="row mwa_candidate_other_info  mwa_Samaj_PaddingLR">
					<div class="col-md-12">
						<h5><?php _e( 'Other Information', MWA_MATRI_SYSTEM ); ?></h5>
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_kundali_milan" class="mwa_Samaj_label"><?php _e( "Kundali Milana Necessary", MWA_MATRI_SYSTEM ); ?></label>
					    <select class="form-control mwa_Samaj_Select" name="mwa_kundali_milan" id="mwa_kundali_milan">
					    	<option><?php _e( 'Select', MWA_MATRI_SYSTEM ); ?></option>
					    	<option value="yes"><?php _e( 'Yes' ); ?></option>
					    	<option value="no"><?php _e( 'No' ); ?></option>
					    </select>		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_extra_info" class="mwa_Samaj_label"><?php _e( "Other Information / About Me", MWA_MATRI_SYSTEM ); ?></label>
					    <textarea class="form-control mwa_text_field" name="mwa_extra_info" id="mwa_extra_info"></textarea>		    
					</div>
					<div class="form-group col-md-4">
					    <label for="mwa_profile_image" class="mwa_Samaj_label"><?php _e( "Image Upload", MWA_MATRI_SYSTEM ); ?></label>
					    <input type="file" name="mwa_profile_image[]" class="form-control mwa_text_field" id="mwa_profile_image"   multiple="multiple" />    
					</div>
					<div class="col">
						<input class="btn btn-success mt-3 mb-3" id="mwa_register_button" type="submit" name="submit" Style="background-color:#4169E1;font-weight:900;" >
					</div>
				</div>			
			</form>	
		</div>
	</div>
</div>