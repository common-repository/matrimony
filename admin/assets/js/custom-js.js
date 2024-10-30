jQuery(document).ready( function () {
    jQuery('#myTable').DataTable();

/* Show profile table */

	var table = jQuery('#myTable').DataTable();
    jQuery('#myTable tbody').on( 'click', 'tr', function () {
        if ( jQuery(this).hasClass('selected') ) {
            jQuery(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            jQuery(this).addClass('selected');
        }
    } );

	/* Show profile in modal */
	jQuery(document).on("click", ".mwa_view_profile", function () {
		var candi_profile_id = jQuery(this).data('id');			
		jQuery.ajax({
			url: ajaxurl + "?action=full_profile_request",
			type: 'POST',
			data: "profile_id=" + candi_profile_id,					
			cache: false,
			success: function(data) { 
				jQuery("#profile_full_view").html(data);
			}
		});
	});

	/* Update status js */
	jQuery(document).on('click', ".mwa_update_status", function() {
		var user_id = jQuery(this).data('id');
		var data_val = jQuery(this).data('value');			
		// update_status_request
		jQuery.ajax({
			url: ajaxurl + "?action=update_status_request",
			type: "POST",
			data: "user_id=" + user_id + "&status=" + data_val,
			cache: false,
			success: function(data) {
				jQuery("#user_profile_approved_status_" + user_id).html(data);
				jQuery("#user_profile_approved_status_" + user_id).data("value", data);
			}
		});
	});

	/* single delete */
	jQuery(document).on('click','.single_profile_delete', function(event) {
		var delete_id 	  = jQuery(this).attr('href');
		var delete_id_val = delete_id.substring(1);
		delete_confirm = confirm("Are you sure");
		if(delete_confirm) {
			jQuery.ajax({
				url: ajaxurl + "?action=delete_profile_request",
				type: "POST",
				data: "user_id=" + delete_id_val,
				cache: false,
				success: function(data) {
					window.location.reload();
				}
			});
		}		
	});

	/* Edit the profile */
	jQuery('#mwa_edit_register_form').on('submit', function(e){ 
		e.preventDefault();	
		jQuery.ajax({
			method: 'post',
			url: ajaxurl + "?action=full_profile_edit_request",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function(admin_matri_form_upg) {
				console.log(admin_matri_form_upg);
				var result = jQuery.parseJSON(admin_matri_form_upg);
				if( result.success_msg == 1 ) {
					alert('Form update successfully');
					window.location.reload();
				}
				else {
					alert('Form update operation Failed,Crucio, Please try after some time');					
				}
			}
		});
	});

	/* update the slider settings */
	jQuery("#mwa_genderselection").on('submit', function(e) {
		e.preventDefault();	
		jQuery.ajax({
			method: 'post',
			url: ajaxurl + "?action=slidersetting_request",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function(admin_gender_upg) {
				// console.log(admin_gender_upg);
				var result = jQuery.parseJSON(admin_gender_upg);
				console.log(result.success_msg);
				if( result.success_msg == 0 ) {
					alert('Form update operation Failed');
					window.location.reload();
				}
				else if( result.success_msg == 1 ) {
					alert('Form update successfully');
					window.location.reload();
				}
				else if( result.success_msg == 3 ) {
					alert('Nothing to save new');
					window.location.reload();
				}
				else {
					alert('Form update operation Failed,Crucio, Please try after some time');					
				}
			}
		});		
	});

	/* Save and update the CSS setting */
	jQuery("#mwa_csssettingform").on('submit', function(e) {
		e.preventDefault();	
		jQuery.ajax({
			method: 'post',
			url: ajaxurl + "?action=csssetting_request",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function(admin_csssetting_upg) {
				//console.log(admin_csssetting_upg);
				var result = jQuery.parseJSON(admin_csssetting_upg);
				//console.log(result.success_msg);
				if( result.success_msg == 0 ) {
					alert('Form update operation Failed');
					window.location.reload();
				}
				else if( result.success_msg == 1 ) {
					alert('Form update successfully');
					window.location.reload();
				}
				else if( result.success_msg == 3 ) {
					alert('Nothing to save new');
					window.location.reload();
				}
				else {
					alert('Form update operation Failed,Crucio, Please try after some time');					
				}
			}
		});		
	});
});