(function(){
	$('.js-input-keyword').focus(function(){
		$('.search-area').addClass('focus');		
	});

	$('.js-input-keyword').focusout(function(){
		$('.search-area').removeClass('focus');
	});
})();