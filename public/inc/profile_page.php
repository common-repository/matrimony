<?php
defined( 'ABSPATH' ) or die();
global $wpdb;
$table_name   = $wpdb->prefix . "matri_bio";
$result 	  = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM `$table_name` WHERE `approved` = %s","yes"));

/* Get CSS setting saved values */
$csssetting_data  	   = get_option('css_settings');
$ptablebackground 	   = isset($csssetting_data['ptablebackground']) ? $csssetting_data['ptablebackground'] : '#ffe2c1';
$ptablebackground_even = isset($csssetting_data['ptablebackground_even']) ? $csssetting_data['ptablebackground_even'] : '#ffc683';
$ptablefont_color 	   = isset($csssetting_data['ptablefont_color']) ? $csssetting_data['ptablefont_color'] : '#ffffff';
?>
<style type="text/css">
	.mwa_matri .table-dark {
		color: <?php echo $ptablefont_color; ?>
	}
	.frontend_full_profile.table-striped > tbody > tr:nth-child(2n+1) > td, .frontend_full_profile.table-striped > tbody > tr:nth-child(2n+1) > th {
		background-color: <?php echo $ptablebackground; ?>
	}
	.frontend_full_profile.table-striped > tbody > tr:nth-child(2n) > td, .frontend_full_profile.table-striped > tbody > tr:nth-child(2n) > th {
		background-color: <?php echo $ptablebackground_even; ?>
	}
</style>
<div class="mwa_matri">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1><?php _e( "Matrimonial List", MWA_MATRI_SYSTEM );?></h1>
			</div>
		</div>
		<div class="row" id="profile_detail_page">
			<div class="col-md-12" id="mwa_matrimonial_profile_page">
				<table id="myTable_front" class="table table-striped table-dark table-bordered frontend_full_profile">			
					<thead class="">
						<tr>
							<th></th>
							<th class=""><?php _e( "Name", MWA_MATRI_SYSTEM );?></th>
							<th class=""><?php _e( "DOB", MWA_MATRI_SYSTEM );?></th>
							<th class=""><?php _e( "Manglik", MWA_MATRI_SYSTEM );?></th>
							<th><?php _e( "Father", MWA_MATRI_SYSTEM );?></th>
							<th><?php _e( "Gotra", MWA_MATRI_SYSTEM );?></th>
							<th><?php _e( "Maternal Gotra", MWA_MATRI_SYSTEM );?></th>
							<th class=""><?php _e( "Mother", MWA_MATRI_SYSTEM );?></th>
							<th><?php _e( "View More", MWA_MATRI_SYSTEM );?></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach( $result as $key => $value ) {
								$profile_id 		  = esc_html($value->id);
								$candidate_name 	  = esc_html($value->candidate_name);
								$dob 				  = esc_html($value->dob);
								$bp 				  = esc_html($value->bp);
								$manglik 			  = esc_html($value->manglik);
								$gotra 				  = esc_html($value->gotra);
								$maternal_gotra 	  = esc_html($value->maternal_gotra);
								$father_name 		  = esc_html($value->father_name);
								$father_mno 	      = esc_html($value->father_mno);
								$father_occupation    = esc_html($value->father_occupation);
								$mother_name 	      = esc_html($value->mother_name);
								$mother_occupation    = esc_html($value->mother_occupation);
								$grand_father 	      = esc_html($value->grand_father);
								$native_place 	      = esc_html($value->native_place);
								$nationality 	      = esc_html($value->nationality);
								$status_of_family     = esc_html($value->status_of_family);
								$address 		      = esc_html($value->address);
								$country 		      = esc_html($value->country);
								$state 			      = esc_html($value->state);
								$district 		      = esc_html($value->distirct);
								$pincode 		      = esc_html($value->pincode);
								$phone 			      = esc_html($value->phone);
								$contactno 		      = esc_html($value->contactno);
								$email 			      = esc_html($value->email);
								$height 		      = esc_html($value->height);
								$body_type 		      = esc_html($value->body_type);
								$skin_type 		      = esc_html($value->skin_type);
								$blood_group 	      = esc_html($value->blood_group);
								$education_detail     = esc_html($value->education_detail);
								$education            = esc_html($value->education);
								$hobby 			      = esc_html($value->hobby);
								$candidate_occupation = esc_html($value->candidate_occupation);
								$designation 		  = esc_html($value->designation);
								$annual_income   	  = esc_html($value->annual_income);
								$company_city 		  = esc_html($value->company_city);
								$ub_no 				  = esc_html($value->ub_no);
								$us_no 				  = esc_html($value->us_no);
								$mb_no 				  = esc_html($value->mb_no);
								$ms_no 				  = esc_html($value->ms_no);
								$relation 			  = esc_html($value->relation);
								$rel_name 			  = esc_html($value->rel_name);
								$rel_mno 			  = esc_html($value->rel_mno);
								$rel_city 			  = esc_html($value->rel_city);
								$rel_company 		  = esc_html($value->rel_company);
								$rel_designation 	  = esc_html($value->rel_designation);
								$rel_comp_add 		  = esc_html($value->rel_comp_add);
								$mwa_kundali_milan 	  = esc_html($value->mwa_kundali_milan);
								$mwa_extra_info 	  = esc_html($value->mwa_extra_info);
								$formated_DOB		  = date( 'd/m/y', strtotime($dob) );
								$profile_image_url	  = ! empty($value->profile_image_url ) ? esc_url($value->profile_image_url) : esc_url("http://placehold.it/150x150");
						?>
							<tr>
								<td>
									<div class="mwa_profile_image" id="profile<?php echo $profile_id; ?>">
										<div class="mwa_img_block">
											<a href="<?php echo $profile_image_url;?>" class="image-popup-vertical-fit" title="<?php echo ucwords($candidate_name); ?>">
												<img src="<?php echo $profile_image_url;?>" class="img-responsive rounded-right">
											</a>
										</div>
										<div class="mwa_img_description">
											<p class=""><span>Name:</span><?php echo ucwords($candidate_name) ; ?></p>
											<p class=""><span>DOB:</span><?php echo $formated_DOB ; ?></p>
											<p class=""><span>Manglik:</span><?php echo $manglik ; ?></p>
										</div>										
									</div>
								</td>
								<td class="hide_element"><?php echo ucwords($candidate_name) ; ?></td>
								<td class="hide_element"><?php echo $formated_DOB ; ?></td>
								<td class="hide_element"><?php echo $manglik ; ?></td>
								<td><?php echo $father_name; //ucwords($father_name); ?></td>
								<td><?php echo $gotra; ?></td>
								<td><?php echo $maternal_gotra; ?></td>
								<td class="hide_element"><?php echo ucwords($mother_name); ?></td>
								<td>
									<!--  top open page in new tab -->
									 <!-- <form method="post" target="_blank"> -->
									<form method="post">
										<input type="hidden" name="adv" value="advanced">
										<input type="hidden" value="<?php echo $profile_id; ?>" name="view_profile">				
										<button type="submit" class="btn btn-info" name="sub1"><i class="fas fa-eye"></i></button>
									</form>
								</td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>						
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="profileModal_front" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php //_e( 'Profile Detail', MWA_MATRI_SYSTEM ); ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div> -->
	      <div class="modal-body">	      		      
	      	<div id="profile_full_view_front"></div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary close_modal" data-dismiss="modal"><?php _e( "Close", MWA_MATRI_SYSTEM );?></button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready( function () {
	    jQuery('#myTable_front').DataTable({
	    	stateSave: true,
	    	responsive: true
	    });
	} );

	jQuery(document).on( 'click', '.view_profile_frontend', function() {
		jQuery("#main-header").css("z-index", '9 !important');
	} );

	jQuery(document).on( 'click', '.close_modal', function() {
		jQuery("#main-header").css("z-index", '999');
	} );
</script>