<?php 
defined( 'ABSPATH' ) or die();
global $wpdb;
?>
<div class="mwa_matri">
	<section id="mwa_matri_dashboard_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					 <h4 class="mwa_page_heading">
					 	<?php _e( 'Matrimonial', MWA_MATRI_SYSTEM ); ?>
					 </h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mwa-admin-table">
					<?php 
						$table_name = $wpdb->prefix . "matri_bio";
						$result 	= $wpdb->get_results( "SELECT `id`, `candidate_name`, `father_name`, `distirct`, `father_mno`, `address`, `approved` FROM `$table_name`" );
						// print_r( $result );
						$no_of_result = count($result);
						$i 			  = 1;					
					?>				
					<table id="myTable" class="table table-responsive table-striped display mwa-admin-table-all-profile ">
						<thead class="thead-custom-color">
							<tr>
								<th><?php _e( 'S.No.', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'Name', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( "Father's Name", MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'City', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'Contact no', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'Address', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'Quick View', MWA_MATRI_SYSTEM ); ?></th>					
								<th><?php _e( 'Status', MWA_MATRI_SYSTEM ); ?></th>
								<th><?php _e( 'Edit', MWA_MATRI_SYSTEM ); ?></th>
								<th><?php _e( 'Delete', MWA_MATRI_SYSTEM ); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($result as $key => $value) {
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo esc_html( $value->candidate_name ); ?></td>
								<td><?php echo esc_html( $value->father_name ); ?></td>
								<td><?php echo esc_html( $value->distirct ); ?></td>
								<td><?php echo esc_html( $value->father_mno ); ?></td>
								<td><?php echo esc_html( $value->address ); ?></td>
								<td>
									<a class="mwa_view_profile text-center" data-toggle="modal" data-id="<?php echo esc_html( $value->id ); ?>" data-target="#exampleModal" href="#">
										<span class="dashicons dashicons-visibility"></span>
									</a>
								</td>
								<td><a id="user_profile_approved_status_<?php echo esc_html( $value->id ); ?>" href="#" class="mwa_update_status btn btn-info" data-id="<?php echo esc_html( $value->id ); ?>" title="Control profile status" data-value="<?php echo esc_html( $value->approved ); ?>"><?php esc_html_e( "$value->approved", MWA_MATRI_SYSTEM );?></a></td>								
								<th><a class="single_profile_edit" data-id="<?php echo esc_html( $value->id ); ?>"href="<?php echo esc_url_raw( admin_url('admin.php?page=mwa_matri_update&sid=' . $value->id) ); ?>"><span class="dashicons dashicons-edit"></span></a></th>
								<th><a class="single_profile_delete" href="#<?php echo esc_html( $value->id ); ?>"><span class="dashicons dashicons-trash"></span></a></th>
							</tr>
							<?php
									if( $i <= $no_of_result ) {
										$i++;
									}								
								}
							?>
						</tbody>					
					</table>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><?php _e( 'Profile Detail', MWA_MATRI_SYSTEM ); ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<table class="table table-responsivele" id="profile_full_view">
	      		
	      	</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php _e( 'Close', MWA_MATRI_SYSTEM ); ?></button>	        
	      </div>
	    </div>
	  </div>
	</div>
</div>
