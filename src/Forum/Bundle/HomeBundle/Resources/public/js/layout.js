(function(){
	$('.js-input-keyword').focus(function() {
		$('.search-area').addClass('focus');		
	});

	$('.js-input-keyword').focusout(function() {
		$('.search-area').removeClass('focus');
	});

	$("#js-user-out").click(function() {
		document.cookie = "u_id=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
		window.location.href = "/list"
	});
})();