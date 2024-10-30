<?php
defined( 'ABSPATH' ) or die();

class MWA_Matri_Database {

	public static function activation() {
		global $wpdb;
		
		$user_table = $wpdb->prefix . 'matri_bio';
		/* Check if table found or not. If not found make it and insert data */
		if( $wpdb->get_var( "SHOW TABLES LIKE '$user_table'" ) != $user_table ) {	
			$MatrimonialManagerTable     = $wpdb->prefix . "matri_bio";
			$MatrimonialManagerTable_sql = "CREATE TABLE IF NOT EXISTS `$MatrimonialManagerTable` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`candidate_name` varchar(500) NOT NULL,
				`dob` varchar(30) NOT NULL,
				`bp` varchar(30) NOT NULL,
				`gender` varchar(30) NOT NULL,
				`manglik` varchar(30) NOT NULL,
				`gotra` varchar(100) NOT NULL,
				`maternal_gotra` varchar(100) NOT NULL,
				`father_name` varchar(500) NOT NULL,
				`father_mno` varchar(500) NOT NULL,
				`father_occupation` varchar(500) NOT NULL,
				`father_annual_income` TEXT NOT NULL,
				`mother_name` varchar(500) NOT NULL,
				`mother_occupation` varchar(500) NOT NULL,
				`grand_father` varchar(500) NOT NULL,
				`native_place` varchar(500) NOT NULL,
				`nationality` varchar(500) NOT NULL,
				`status_of_family` varchar(500) NOT NULL,
				`address` varchar(500) NOT NULL,
				`country` varchar(100) NOT NULL,
				`state` varchar(255) NOT NULL,
				`distirct` varchar(255) NOT NULL,
				`pincode` TEXT NOT NULL,
				`phone` TEXT NOT NULL,
				`contactno` TEXT NOT NULL,
				`email` varchar(255) NOT NULL,
				`height` varchar(30) NOT NULL,
				`body_type` varchar(30) NOT NULL,
				`skin_type` varchar(30) NOT NULL,
				`blood_group` varchar(30) NOT NULL,
				`education_detail` varchar(500) NOT NULL,
				`education` varchar(500) NOT NULL,
				`hobby` varchar(255) NOT NULL,
				`candidate_occupation` varchar(255) NOT NULL,
				`designation` varchar(255) NOT NULL,
				`annual_income` TEXT NOT NULL,
				`company_name` TEXT NOT NULL,
				`company_city` varchar(255) NOT NULL,
				`ub_no` int(11) NOT NULL,
				`us_no` int(11) NOT NULL,
				`mb_no` int(11) NOT NULL,
				`ms_no` int(11) NOT NULL,
				`relation` varchar(255) NOT NULL,
				`rel_name` varchar(255) NOT NULL,
				`rel_mno` TEXT NOT NULL,
				`rel_city` varchar(255) NOT NULL,
				`rel_company` TEXT NOT NULL,
				`rel_designation` varchar(255) NOT NULL,
				`rel_comp_add` TEXT NOT NULL,
				`mwa_kundali_milan` varchar(25) NOT NULL,
				`mwa_extra_info` TEXT NOT NULL,
				`profile_image_url` TEXT NOT NULL,
				`approved` varchar(100) NOT NULL,				
				PRIMARY KEY (`id`)
			)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";		   

			$wpdb->query( $MatrimonialManagerTable_sql );

			/* Create height Table */
			$height1 = $wpdb->prefix . 'height';
			$create_height_table = "CREATE TABLE IF NOT EXISTS `$height1`(
				`heightId` INT(11) NOT NULL AUTO_INCREMENT,
				`heightValue` VARCHAR(255) NOT NULL,
				PRIMARY KEY (`heightId`)
			)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

			/* Enter data to height table */
			$height_val = array("4' 0&quot; (1.22 mts)","5' 0&quot; (1.52 mts)","6' 0&quot; (1.83 mts)","4' 1&quot; (1.24 mts)","5' 1&quot; (1.55 mts)","6' 1&quot; (1.85 mts)","4' 2&quot; (1.28 mts)","5' 2&quot; (1.58 mts)","6' 2&quot; (1.88 mts)","4' 3&quot; (1.31 mts)","5' 3&quot; (1.60 mts)","6' 3&quot; (1.91 mts)","4' 4&quot; (1.34 mts)","5' 4&quot; (1.63 mts)","6' 4&quot; (1.93 mts)","4' 5&quot; (1.35 mts)","5' 5&quot; (1.65 mts)","6' 5&quot; (1.96 mts)","4' 6&quot; (1.37 mts)","5' 6&quot; (1.68 mts)","6' 6&quot; (1.98 mts)","4' 7&quot; (1.40 mts)","5' 7&quot; (1.70 mts)","6' 7&quot; (2.01 mts)","4' 8&quot; (1.42 mts)","5' 8&quot; (1.73 mts)","6' 8&quot; (2.03 mts)","4' 9&quot; (1.45 mts)","5' 9&quot; (1.75 mts)","6' 9&quot; (2.06 mts)","4' 10&quot; (1.47 mts)","5' 10&quot; (1.78 mts)","4' 11&quot; (1.50 mts)","5' 11&quot; (1.80 mts)","6' 11&quot; (2.11 mts)","7' (2.13 mts) plus");

			$wpdb->query( $create_height_table );
			for ($i=0; $i < count($height_val); $i++) { 
				$insert = $wpdb->insert($height1,
		            array(
		                'heightValue' => $height_val[$i],		                
		            ),array('%s'));
			}
		}
		else {			
			$MatrimonialManagerTable     = $wpdb->prefix . "matri_bio";
			$MatrimonialManagerTable_sqlupg = "CREATE TABLE `$MatrimonialManagerTable` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`candidate_name` varchar(500) NOT NULL,
				`dob` varchar(30) NOT NULL,
				`bp` varchar(30) NOT NULL,
				`gender` varchar(30) NOT NULL,
				`manglik` varchar(30) NOT NULL,
				`gotra` varchar(100) NOT NULL,
				`maternal_gotra` varchar(100) NOT NULL,
				`father_name` varchar(500) NOT NULL,
				`father_mno` varchar(500) NOT NULL,
				`father_occupation` varchar(500) NOT NULL,
				`father_annual_income` TEXT NOT NULL,
				`mother_name` varchar(500) NOT NULL,
				`mother_occupation` varchar(500) NOT NULL,
				`grand_father` varchar(500) NOT NULL,
				`native_place` varchar(500) NOT NULL,
				`nationality` varchar(500) NOT NULL,
				`status_of_family` varchar(500) NOT NULL,
				`address` varchar(500) NOT NULL,
				`country` varchar(100) NOT NULL,
				`state` varchar(255) NOT NULL,
				`distirct` varchar(255) NOT NULL,
				`pincode` TEXT NOT NULL,
				`phone` TEXT NOT NULL,
				`contactno` TEXT NOT NULL,
				`email` varchar(255) NOT NULL,
				`height` varchar(30) NOT NULL,
				`body_type` varchar(30) NOT NULL,
				`skin_type` varchar(30) NOT NULL,
				`blood_group` varchar(30) NOT NULL,
				`education_detail` varchar(500) NOT NULL,
				`education` varchar(500) NOT NULL,
				`hobby` varchar(255) NOT NULL,
				`candidate_occupation` varchar(255) NOT NULL,
				`designation` varchar(255) NOT NULL,
				`annual_income` TEXT NOT NULL,
				`company_name` TEXT NOT NULL,
				`company_city` varchar(255) NOT NULL,
				`ub_no` int(11) NOT NULL,
				`us_no` int(11) NOT NULL,
				`mb_no` int(11) NOT NULL,
				`ms_no` int(11) NOT NULL,
				`relation` varchar(255) NOT NULL,
				`rel_name` varchar(255) NOT NULL,
				`rel_mno` TEXT NOT NULL,
				`rel_city` varchar(255) NOT NULL,
				`rel_company` TEXT NOT NULL,
				`rel_designation` varchar(255) NOT NULL,
				`rel_comp_add` TEXT NOT NULL,
				`mwa_kundali_milan` varchar(25) NOT NULL,
				`mwa_extra_info` TEXT NOT NULL,
				`profile_image_url` TEXT NOT NULL,
				`approved` varchar(100) NOT NULL,				
				PRIMARY KEY (`id`)
			)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";		   

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( $MatrimonialManagerTable_sqlupg );			
		}

		/* Option table */
		if( empty( get_option('profile_gender') ) ) {
			update_option( 'profile_gender', '1' );
		}		

	} /* Function end */
} /* class end */