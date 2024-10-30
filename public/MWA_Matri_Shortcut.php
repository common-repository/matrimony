<?php
defined( 'ABSPATH' ) or die();
class MWA_Matri_Shortcut {
	public static function enqueue_fornten_assets(){
		global $post;		
		$content2 = 'This is some text, (perhaps pulled via $post->post_content). It has a  shortcode.';
		if( isset( $post->post_content ) && (has_shortcode( $post->post_content,'mwa_matrimonial' ) || has_shortcode( $post->post_content, 'mwa_matrimonial_page' ) || has_shortcode( $post->post_content, 'mwa_matrimonial_slider' )) )  {
			wp_enqueue_style( 'bootstrap_css', MWA_MATRI_SYSTEM_URL . 'assets/css/bootstrap.min.css' );
			wp_enqueue_style( 'all_css', MWA_MATRI_SYSTEM_URL . 'assets/css/all.css' );
			wp_enqueue_style( 'toastr', MWA_MATRI_SYSTEM_URL . 'public/assets/css/toastr.min.css' );
			wp_enqueue_style( 'jquery-confirm', MWA_MATRI_SYSTEM_URL . 'public/assets/css/jquery-confirm.min.css' );
			
			wp_enqueue_style( 'metro-date-picker', MWA_MATRI_SYSTEM_URL . 'public/assets/css/metro-all.min.css' );
			
			wp_enqueue_script( 'jquery-form' );
			wp_enqueue_script( 'toastr-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/toastr.min.js', array( 'jquery' ), true, true );
			wp_enqueue_script( 'jquery-confirm-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/jquery-confirm.min.js', array( 'jquery' ), true, true );
			
			wp_enqueue_script( 'popper_js', MWA_MATRI_SYSTEM_URL . 'assets/umd/popper.min.js' );
			wp_enqueue_script( 'bootstrap_js', MWA_MATRI_SYSTEM_URL . 'assets/js/bootstrap.min.js' );
			wp_localize_script( 'bootstrap_js', 'frontendajax', admin_url( 'admin-post.php' ) );
			wp_localize_script( 'ajax_custom_script', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-post.php' ) ) );
			wp_enqueue_script( 'mwa-ajax-js', MWA_MATRI_SYSTEM_URL . 'public/js/mwa-ajax-js.js' );
			wp_localize_script( 'mwa-ajax-js', 'MWAMAJAXNONCE', array( 'security' => wp_create_nonce( 'mwa_matri_nonce' ) ) );
			wp_enqueue_style( 'datatable-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/datatables.min.css' );
			wp_enqueue_script( 'datatable-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/datatables.min.js', array( 'jquery' ) );
			wp_enqueue_style( 'owl-carousel-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/owl.carousel.min.css' );
			wp_enqueue_style( 'owl-default-theme', MWA_MATRI_SYSTEM_URL . 'public/assets/css/owl.theme.default.min.css' );
			wp_enqueue_script( 'owl-carousel-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/owl.carousel.min.js' );
			wp_enqueue_style( 'frontend-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/frontend-css.css' );			
			wp_enqueue_script( 'metro-date-picker-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/metro.min.js' );

			/* font awesome CDN */
			wp_enqueue_style('font-awesome-css', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');

			/* Image popup */
			wp_enqueue_style( 'magnific-popup-css', MWA_MATRI_SYSTEM_URL . 'assets/css/magnific-popup.css' );
			wp_enqueue_script( 'magnific-popup-js', MWA_MATRI_SYSTEM_URL . 'assets/js/jquery.magnific-popup.min.js' );
		}
		elseif(isset( $_REQUEST['view_profile'] )) {
			wp_enqueue_style( 'bootstrap_css', MWA_MATRI_SYSTEM_URL . 'assets/css/bootstrap.min.css' );
			wp_enqueue_style( 'toastr', MWA_MATRI_SYSTEM_URL . 'public/assets/css/toastr.min.css' );
			wp_enqueue_style( 'jquery-confirm', MWA_MATRI_SYSTEM_URL . 'public/assets/css/jquery-confirm.min.css' );
						
			wp_enqueue_script( 'jquery-form' );
			wp_enqueue_script( 'toastr-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/toastr.min.js', array( 'jquery' ), true, true );
			wp_enqueue_script( 'jquery-confirm-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/jquery-confirm.min.js', array( 'jquery' ), true, true );
			wp_enqueue_script( 'popper_js', MWA_MATRI_SYSTEM_URL . 'assets/js/popper.min.js' );
			wp_enqueue_script( 'bootstrap_js', MWA_MATRI_SYSTEM_URL . 'assets/js/bootstrap.min.js' );
			wp_localize_script( 'bootstrap_js', 'frontendajax', admin_url( 'admin-post.php' ) );
			wp_localize_script( 'ajax_custom_script', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-post.php' ) ) );
			wp_enqueue_script( 'mwa-ajax-js', MWA_MATRI_SYSTEM_URL . 'public/js/mwa-ajax-js.js' );
			wp_localize_script( 'mwa-ajax-js', 'MWAMAJAXNONCE', array( 'security' => wp_create_nonce( 'mwa_matri_nonce' ) ) );
			wp_enqueue_style( 'datatable-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/datatables.min.css' );
			wp_enqueue_script( 'datatable-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/datatables.min.js', array( 'jquery' ) );
			wp_enqueue_style( 'owl-carousel-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/owl.carousel.min.css' );
			wp_enqueue_style( 'owl-default-theme', MWA_MATRI_SYSTEM_URL . 'public/assets/css/owl.theme.default.min.css' );
			wp_enqueue_script( 'owl-carousel-js', MWA_MATRI_SYSTEM_URL . 'public/assets/js/owl.carousel.min.js' );
			wp_enqueue_style( 'frontend-css', MWA_MATRI_SYSTEM_URL . 'public/assets/css/frontend-css.css' );
			
			/* font awesome CDN */
			wp_enqueue_style('font-awesome-css', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
		}
	}

	/* create shortcode for form */
	public static function show_frontend(){
		ob_start();
		include( "inc/matrimonial.php" );
		return ob_get_clean();
	}

	/* create shortcode for showing profile page */
	public static function show_profile_page() {
		ob_start();
		include( "inc/profile_page.php" );
		return ob_get_clean();
	}

	/* create shortcode for showing profile in slider */
	public static function show_profile_slider() {
		ob_start();
		include( "inc/profile_slider.php" );
		return ob_get_clean();
	}
}