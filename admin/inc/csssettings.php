<?php
	defined( 'ABSPATH' ) or die();
	global $wpdb;
	/* Get CSS setting saved values */
	$csssetting_data 	   = get_option('css_settings');
	
	$formbackground_value  = isset($csssetting_data['formbackground']) ? $csssetting_data['formbackground'] : '#FFEBCD';
	$formtextcolor		   = isset($csssetting_data['formtextcolor']) ? $csssetting_data['formtextcolor'] : '#008000';
	$ptablebackground 	   = isset($csssetting_data['ptablebackground']) ? $csssetting_data['ptablebackground'] : '#ffe2c1';
	$ptablebackground_even = isset($csssetting_data['ptablebackground_even']) ? $csssetting_data['ptablebackground_even'] : '#ffc683';
	$ptablefont_color 	   = isset($csssetting_data['ptablefont_color']) ? $csssetting_data['ptablefont_color'] : '#ffffff';
	?>
<!-- Mange th profile slider -->
<div class="mwa_matri">	
	<section id="mwa_matri_profile_slider_setting_section">
		<div class="container-fluid mwa_shortcode_list">
			<div class="row">
				<div class="col-md-12 text-center">
					<h4 class="mwa_page_heading">
						<?php _e('CSS Setting',MWA_MATRI_SYSTEM ); ?>
					</h4>
				</div>
			</div>
			<form id="mwa_csssettingform" method="post" enctype="multipart/form-data" >
				<?php 
					wp_nonce_field( 'mwa_matri_css_setting_form', 'mwa_matri_css_setting_form_nonce' );
				?>
				<h4 class="text-center pt-3 pb-3">
						<?php _e('Form Color Settings',MWA_MATRI_SYSTEM ); ?>
					</h4>
				<div class="form-group row">					
					<label class="col-sm-4 h5" for="formbackground">
						<?php _e('Select form background',MWA_MATRI_SYSTEM ); ?>
					</label>
					<div class="col-sm-8">
						<input type="text" class="color-field form-control" name="formbackground" value="<?php echo $formbackground_value; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 h5">
						<?php _e('Select form text',MWA_MATRI_SYSTEM ); ?>
					</label>
					<div class="col-sm-8">
						<input type="text" class="color-field form-control" name="formtextcolor" value="<?php echo $formtextcolor; ?>">
					</div>
				</div>

				<h4 class="text-center pt-3 pb-3">
					<?php _e('Profile Table Color Settings',MWA_MATRI_SYSTEM ); ?>
				</h4>
				<div class="form-group row">
					<label class="col-sm-4 h5">						
						<?php _e('Profile Table Background Color for odd row',MWA_MATRI_SYSTEM ); ?>						
					</label>
					<div class="col-sm-8">
						<input type="text" class="color-field form-control" name="ptablebackground" id="ptablebackground" value="<?php echo $ptablebackground; ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 h5">
						<?php _e('Profile Table Background Color for even row',MWA_MATRI_SYSTEM ); ?>
					</label>
					<div class="col-sm-8">
						<input type="text" class="color-field form-control" name="ptablebackground_even" id="ptablebackground_even" value="<?php echo $ptablebackground_even; ?>">
					</div>
				</div>				
				<div class="form-group row">
					<label for="formbackground" class="col-sm-4 h5">
						<?php _e('Profile Table Font Color',MWA_MATRI_SYSTEM ); ?>
					</label>					
					<div class="col-sm-8">
						<input type="text" class="color-field form-control" name="ptablefont_color" id="ptablefont_color" value="<?php echo $ptablefont_color; ?>">
					</div>
				</div>				
				<div class="form-group row">
					<div class="col-sm-4">
						<label class="form-check-label h5 reset_css_label" for="reset_css"><?php _e('Reset',MWA_MATRI_SYSTEM ); ?></label>
					</div>					
					<div class="col-md-8">
						<div class="form-check">
							<input class="form-check-input " type="checkbox" name="reset_css" id="reset_css" value="0">
							<label class="form-check-label reset_css_label2 h5 d-sm-none" for="reset_css"><?php _e('Reset',MWA_MATRI_SYSTEM ); ?></label>
						</div>					  					  
					</div>
				</div>				
				<div class="form-group row mt-3">
					<div class="col-sm-10">
						<input type="submit" name="csssettingbuttonupg" class="btn btn-primary mb-3" id="csssettingbutton" value="<?php _e('Save',MWA_MATRI_SYSTEM ); ?>">
					</div>
				</div>				
			</form>
		</div>
	</section>
</div>