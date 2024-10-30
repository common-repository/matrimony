<?php
	defined( 'ABSPATH' ) or die();
	global $wpdb;
	$profile_gender = get_option('profile_gender');
?>
<!-- Mange th profile slider -->
<div class="mwa_matri">
	<!-- <section id="mwa_matri_shortcode_section"> -->
	<section id="mwa_matri_profile_slider_setting_section">
		<div class="container-fluid mwa_shortcode_list">
			<div class="row">
				<div class="col-md-12 text-center">
					<h4 class="mwa_page_heading"><?php _e('Profile Slider Setting',MWA_MATRI_SYSTEM ); ?></h4>
				</div>
			</div>
			<form id="mwa_genderselection" method="post" enctype="multipart/form-data" >
				<?php 
					wp_nonce_field( 'mwa_matri_gender_choice_form', 'mwa_matri_gender_choice_form_nonce' );
				?>
				<div class="form-row">
					<div class="col-md-5">
						<label class="h5">
							<?php _e('Select Gender',MWA_MATRI_SYSTEM ); ?>
						</label>
					</div>
					<div class="col-md-7">
						<div class="form-group">
							<div class="form-check form-check-inline h5">
								<input class="form-check-input" type="radio" name="genderbutton" id="defaultbutton" value="1" <?php echo ($profile_gender == 1 ) ? "checked=checked" : ''; ?>>
								<label class="form-check-label" for="defaultbutton">Default</label>
							</div>
							<div class="form-check form-check-inline h5">
								<input class="form-check-input" type="radio" name="genderbutton" id="malebutton" value="2" <?php echo ($profile_gender == 2 ) ? "checked=checked" : ''; ?>>
								<label class="form-check-label" for="malebutton">
									Male
								</label>
							</div>
							<div class="form-check form-check-inline h5">
								<input class="form-check-input" type="radio" name="genderbutton" id="femalebutton" value="3" <?php echo ($profile_gender == 3 ) ? "checked=checked" : ''; ?>>
								<label class="form-check-label" for="femalebutton">
									Female
								</label>
							</div>
						</div>
					</div>
				</div>
				<input type="submit" name="genderbuttonupg" class="btn btn-primary mb-3" id="genderbutton">
			</form>
		</div>
	</section>
</div>
<?php