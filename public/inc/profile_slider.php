<?php
defined( 'ABSPATH' ) or die();
global $wpdb;
$table_name  	= $wpdb->prefix . "matri_bio";
$profile_gender = get_option('profile_gender');
if( $profile_gender == '2' ) {	
	$fetch_query = $wpdb->prepare( "SELECT `id`, `candidate_name`, `dob`, `gender`, `gotra`, `profile_image_url` FROM `$table_name` WHERE `approved` = %s AND `gender`=%s","yes","Male" );
}
else if( $profile_gender == '3') {	
	$fetch_query = $wpdb->prepare( "SELECT `id`, `candidate_name`, `dob`, `gender`, `gotra`, `profile_image_url` FROM `$table_name` WHERE `approved` = %s AND `gender`=%s","yes","Female" );
}
else if( $profile_gender == '1' ) {	
	$fetch_query = $wpdb->prepare( "SELECT `id`, `candidate_name`, `dob`, `gender`, `gotra`, `profile_image_url` FROM `$table_name` WHERE `approved` = %s","yes" );
}

$result 	 = $wpdb->get_results( $fetch_query );

$no_of_fetch_profile = count($result);
?>
<div class="mwa_matri">
	<div class="conainer-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="carousel-wrap mwa_owl_css">
				  <div class="owl-carousel">
				  	<?php
				  	foreach( $result as $key => $value ) {
						$profile_id 		  = esc_html($value->id);
						$candidate_name 	  = esc_html($value->candidate_name);
						$dob 				  = esc_html($value->dob);
						$gender 			  = esc_html($value->gender);
						$gotra 				  = esc_html($value->gotra);
						$profile_image_url	  = ! empty($value->profile_image_url ) ? esc_url($value->profile_image_url) : esc_url("http://placehold.it/150x150");
						$age = age_calculator( $dob );
						?>
						<div class="item">
							<img src="<?php echo $profile_image_url;?>">
							<div class="small_desc">
								<h4><?php echo $candidate_name; ?></h4>
								<h5><?php echo $gender . "(" . $age . ")"; ?></h5>
							</div>
						</div>
						<?php
					}
				  	?>
				    <!-- <div class="item"><img src="http://placehold.it/150x150"></div> -->
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery('.owl-carousel').owlCarousel({
		<?php 
			if( $no_of_fetch_profile >= 5 ) {
				?>
				loop: true,
				<?php
			}
			else {
				?>
				loop: false,
				<?php
			}
		?>
	  // loop: false,
	  margin: 10,
	  nav: true,
	  navText: [
	    "<i class='fa fa-caret-left'></i>",
	    "<i class='fa fa-caret-right'></i>"
	  ],
	  autoplay: true,
	  autoplayHoverPause: true,
		<?php 
			if( $no_of_fetch_profile <= 2 ) {
				?>
				center: true,
				<?php
			}
			else {
				?>
				center: false,
				<?php
			}
		?>	 
	  responsive: {
	    0: {
	      items: 1
	    },
	    600: {
	      items: 3
	    },
	    1000: {
	      items: 5
	    }
	  }
	})
</script>
<style type="text/css">
	.carousel-wrap {
	  /*margin: 90px auto;*/
	  /*padding: 0 5%;*/
	  /*width: 80%;*/
	  position: relative;
	}

	/* fix blank or flashing items on carousel */
	.owl-carousel .item {
	  position: relative;
	  z-index: 100; 
	  -webkit-backface-visibility: hidden; 
	}

	/* end fix */
	.owl-nav > div {
	  margin-top: -26px;
	  position: absolute;
	  top: 50%;
	  color: #cdcbcd;
	}

	.owl-nav i {
	  font-size: 52px;
	}

	.owl-nav .owl-prev {
	  left: -30px;
	}

	.owl-nav .owl-next {
	  right: -30px;
	}
</style>
<?php 
	/*age calculate*/
	function age_calculator( $dob ) {
		//An example date of birth.
		$userDob = $dob;
		 
		//Create a DateTime object using the user's date of birth.
		$dob = new DateTime($userDob);
		 
		//We need to compare the user's date of birth with today's date.
		$now = new DateTime();
		 
		//Calculate the time difference between the two dates.
		$difference = $now->diff($dob);
		 
		//Get the difference in years, as we are looking for the user's age.
		$age = $difference->y;
		 
		return $age;
		//Print it out.
		// echo $age;
	}
?>