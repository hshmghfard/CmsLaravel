jQuery(document).ready(function($){

	//Show that for use score you should login
	$('label#edd-gateway-option-use_score').click(function(){
		$('p.must_login, p.you_current_score').slideDown(500).prev('div').slideUp(500);
	});

	$('label#edd-gateway-option-Mellat, label#edd-gateway-option-parsian').click(function(){
		$('p.must_login, p.you_current_score').slideUp(500).prev('div').slideDown(500);
	});

});