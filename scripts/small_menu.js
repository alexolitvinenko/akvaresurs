jQuery("document").ready(function($){
	let btn = $('#open_btn_small_menu');
	let small_menu = $('#small_menu');
	let menu = $('.navigation');
	$(btn).on( "click" , function() {
		small_menu.toggleClass("open_small_menu");
		menu.toggleClass("fixed");
	});
});