let modal = $('#myModal');
let modal2 = $('#myModal2');
let results = $('#results');

$('#forms_order').on('submit', (event) => {
	$(event.target).preventDefault();
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
$('#forms_phone').on('submit', function (event) {
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