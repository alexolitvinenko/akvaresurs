let modal1 = $('#myModal');
let modal2 = $('#myModal2');
let results = $('#results');

$('.open-button-order').on('click', () => {
	modal1.fadeIn();
});
$('.phone_callback').on('click', () => {
	modal2.fadeIn();
});

$('#myModal .close').on('click', () => {
	modal1.fadeOut();
});
$('#myModal2 .close').on('click', () => {
	modal2.fadeOut();
});
$('#results .close').on('click', () => {
	results.fadeOut();
});

$('#forms_order').on('submit', (event) => {
	event.preventDefault();
	let msg = $('#forms_order').serialize();
	$.ajax({
		type: 'POST',
		url: '/app/order.php',
		data: msg,
		success: function() {
			results.fadeIn();
			modal.fadeOut();
		},
		error:  function(xhr, str){
			alert('Возникла ошибка: ' + xhr.responseCode);
		}
	});
});
$('#forms_phone').on('submit', (event) => {
	event.preventDefault();
	let msg = $('#forms_phone').serialize();
	$.ajax({
		type: 'POST',
		url: '/app/phone.php',
		data: msg,
		success: function() {
			results.fadeIn();
			modal2.fadeOut();
		},
		error:  function(xhr, str){
			alert('Возникла ошибка: ' + xhr.responseCode);
		}
	});
});