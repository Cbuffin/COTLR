function myfunction (val){
	var data = {
		action: 'my_action',
		ajax_position_option: val
	};

	jQuery.post(ajaxurl, data, function(response) {
		console.log(' Server answer: ' + response);
		jQuery('.tcp-controls input').parent().removeClass('current');
		jQuery('.tcp-controls input#ci-' + response).parent().addClass('current');
	});
}