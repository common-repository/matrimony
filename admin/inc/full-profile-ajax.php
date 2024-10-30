<?php
defined( 'ABSPATH' ) or die();

global $wpdb;
if( isset( $_POST['profile_id'] ) ) {
	$profile_id 	= sanitize_text_field( $_POST['profile_id'] );
	$table_name 	= $wpdb->prefix . "matri_bio";
	$single_profile = $wpdb->get_results( $wpdb->prepare( "SELECT `candidate_name`,`gender`,`dob`,`bp`,`manglik`,`gotra`,`maternal_gotra`,`father_name`,`father_mno`,`father_occupation`,`mother_name`,`mother_occupation`,`grand_father`,`native_place` FROM `$table_name` WHERE `id` = %d",$profile_id) );
	$candidatename  = esc_html( $single_profile[0]->candidate_name );	
	?>	
	<tr>
		<th><?php _e( "Candidate's Name", MWA_MATRI_SYSTEM ); ?></th>
		<td><?php echo ucfirst( $candidatename ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Gender", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->gender ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Date of birth", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->dob ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Birth place", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->bp ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Manglik", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->manglik ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Gotra", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->gotra ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Maternal Gotra", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->maternal_gotra ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Father's Name", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->father_name ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Father's Contact No", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->father_mno ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Father's occupation", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->father_occupation ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Mother name", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->mother_name ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Mother occupation", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->mother_occupation ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Grand Father", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->grand_father ); ?></td>
	</tr>
	<tr>
		<th><?php _e( "Native place", MWA_MATRI_SYSTEM );?></th>
		<td><?php echo esc_html( $single_profile[0]->native_place ); ?></td>
	</tr>	
	<?php
	die();
}