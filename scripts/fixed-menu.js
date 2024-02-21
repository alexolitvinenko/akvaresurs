$(function() {
	let nav = $('.nav_sub');
	let wrap = $('.wrapper');
	let servise_menu = $('.servise_menu');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 159) {
			nav.addClass("nav_sub_fixed");
			servise_menu.addClass("servise_menu_fixed");
			wrap.addClass("wrapper_top");
		} 
		else {
			nav.removeClass("nav_sub_fixed");
			servise_menu.removeClass("servise_menu_fixed");
			wrap.removeClass("wrapper_top");
		}
	});
});