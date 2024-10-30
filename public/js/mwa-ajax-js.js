jQuery(document).ready( function () { 
	jQuery(document).on('click', '.view_profile_frontend', function(event){
		var profile_id 			= jQuery(this).attr('href');
		var profile_id_seprated = profile_id.substring(1);
		// alert(profile_id_seprated);
		jQuery.ajax({
			url: frontendajax + "?action=mwa_view_full_profile",
			type: 'POST',
			data: "profile_id=" + profile_id_seprated,					
			cache: false,
			success: function(data) { 
				jQuery("#profile_full_view_front").html(data);
			}
		});
	});

	/* Matrimonial form save */
	jQuery('#mwa_register_form').on('submit', function(e){
		e.preventDefault();		
		jQuery.ajax({
			method: 'post',
			url: frontendajax + "?action=mwa_matrimonial",
			data: new FormData(this),
			contentType: false,
			processData: false,
			beforeSend: function(){
				// Show image container
				jQuery(".loader").show();
			},
			complete:function(){
				// Hide image container
				jQuery(".loader").hide();
			},
			success: function(public_matri_form_save) {
				var result = jQuery.parseJSON(public_matri_form_save);
				if( result.success_msg == 1 ) {
					alert('Form save successfully');
					jQuery('#mwa_register_form')[0].reset();
				}
				else {
					alert('Form save operation Failed,Crucio, Please try after some time');
					jQuery('#mwa_register_form')[0].reset();
				}
			}
		});
	});

	/* Image popup */
	jQuery('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});
});