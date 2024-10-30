<?php
defined( 'ABSPATH' ) or die();
get_header();

global $wpdb;
if( isset( $_REQUEST['view_profile'] ) && ! empty($_REQUEST['view_profile']) ){
	$profile_id 	= sanitize_text_field( $_REQUEST['view_profile'] );
	$table_name 	= $wpdb->prefix . "matri_bio";
	$table_name2  	= $wpdb->prefix . "height";
	$single_profile = $wpdb->get_results( $wpdb->prepare( "SELECT `$table_name`.*, `$table_name2`.* FROM `$table_name` INNER JOIN `$table_name2` ON `$table_name2`.`heightId`=`$table_name`.`height` WHERE `$table_name`.`id` = %d",$profile_id ) );
	$single_profile[0]->candidate_name;
	$profile_image_url	  = ! empty($single_profile[0]->profile_image_url ) ? esc_url( $single_profile[0]->profile_image_url ) : esc_url( "http://placehold.it/150x150" );
	
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
	$heightValue	      = esc_html( $single_profile[0]->heightValue );
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
	$mwa_extra_info 	  = esc_textarea( $single_profile[0]->mwa_extra_info );
	$formated_DOB		  = date( 'd-M-Y', strtotime($dob) );
	?>
	<div class="mwa_matri">
		<div class="container-fluid temp_css">
			<div class="row">
				<div class="col-md-12 mt-2 mb-2">
					<a href="" class="back">
						<i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-md-12">
					<div class="mwa_profile_image">
						<div class="mwa_img_block">
							<img src="<?php echo $profile_image_url;?>" class="img-fluid rounded-right">
						</div>
					</div>
				</div>
				<div class="col-md-12">					
					<ul class="nav nav-tabs" id="myTab" role="tablist">				  
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php _e( 'Family Detail', MWA_MATRI_SYSTEM ); ?></a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php _e( 'Personal Detail', MWA_MATRI_SYSTEM ); ?></a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?php _e( 'Other Detail', MWA_MATRI_SYSTEM ); ?></a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<div class="row">
					  		<div class="col">
						  		<table class="table table-responsive table-striped table-bordered">
							  		<tr>
							  			<th><?php _e( 'Name', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords( $candidate_name ); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Date of Birth', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $formated_DOB; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Gender', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords( $gender ); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Manglik', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords( $manglik ); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Gotra', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords( $gotra ); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Maternal gotra', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords( $maternal_gotra ); ?></td>
							  		</tr>				  		
							  		<tr>
							  			<th><?php _e( 'Height', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $heightValue; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Body type', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $body_type; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Complexion', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $skin_type; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Blood Group', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $blood_group; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Education Detail', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $education_detail; ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Education', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $education; ?></td>
							  		</tr>						  		
							  	</table>
						  	</div>
						  	<div class="col">
						  		<table class="table table-responsive table-striped table-bordered">						  		
							  		<tr>
							  			<th><?php _e( 'Occupation', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords($candidate_occupation); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Company Name', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords($company_name); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Comapny City', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords($company_city); ?></td>
							  		</tr>
							  		<tr>
							  			<th><?php _e( 'Designation', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo ucwords($designation); ?></td>
							  		</tr>						  		
							  		<tr>
							  			<th><?php _e( 'Annual Income', MWA_MATRI_SYSTEM ); ?></th>
							  			<td><?php echo $annual_income; ?></td>
							  		</tr>						  		
							  	</table>
						  	</div>
					  	</div>			  	
					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  	<div class="row">
					  		<div class="col">
					  			<table class="table table-responsive table-striped table-bordered">
					  				<tr>
					  					<th><?php _e( "Father's Name", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $father_name; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Father's Occupation", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $father_occupation; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Father's Annual Income", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $father_annual_income; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Father's Mobile No", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $father_mno; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Mother's Name", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $mother_name; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Mother's Occupation", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $mother_occupation; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Grand Father", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $grand_father; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Native Place", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $native_place; ?></td>
					  				</tr>
					  			</table>
					  		</div>
					  		<div class="col">
					  			<table class="table table-responsive table-striped table-bordered">
					  				<tr>
					  					<th><?php _e( "Nationality", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $nationality; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Status of Family", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $status_of_family; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Address", MWA_MATRI_SYSTEM ); ?></th>
					  					<td>
					  						<p><?php echo $address; ?></p>
					  						<p><?php echo $state; ?></p>
					  						<p><?php echo $district; ?></p>
					  						<p><?php echo $pincode; ?></p>
					  					</td>
					  				</tr>
					  			</table>
					  		</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	<div class="row">
					  		<div class="col">
					  			<table class="table table-responsive table-striped table-bordered">
					  				<tr>
					  					<th><?php _e( "Un-married Brother", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $ub_no; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Un-married Sister", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $us_no; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Married Brother", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $mb_no; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "Married Sister", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $ms_no; ?></td>
					  				</tr>
					  			</table>
					  		</div>
					  		<div class="col">
					  			<table class="table table-responsive table-striped table-bordered">
					  				<tr>
					  					<th><?php _e( "Kundali Milan", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $mwa_kundali_milan; ?></td>
					  				</tr>
					  				<tr>
					  					<th><?php _e( "About Me", MWA_MATRI_SYSTEM ); ?></th>
					  					<td><?php echo $mwa_extra_info; ?></td>
					  				</tr>
					  			</table>
					  		</div>
					  	</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	jQuery('a.back').click(function(){
		parent.history.back("#profile<?php echo $profile_id; ?>");
		return false;
	});
</script>
	<?php
}
get_footer();