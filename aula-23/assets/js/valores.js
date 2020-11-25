$(document).ready(function() {

	$('#btn1').click(function() {
		alert('Texto: ' + $('#teste').text());
	});
	$('#btn2').click(function() {
		alert('Texto: ' + $('#teste').html());
	});
	$('#btn3').click(function() {
		alert('Texto: ' + $('input').val());
	});
	$('#btn4').click(function() {
		alert('Atributo: ' + $('a').attr('href'));
	});
	$('.btn1').click(function() {
		$('#teste').text('Texto definido!')
	});
	$('.btn2').click(function() {
		$('#teste').html('<b>HTML<b> definido!')
	});
	$('.btn3').click(function() {
		$('input').val('Darth Vader')
	});
	$('.btn4').click(function() {
		$('a').attr('href', 'https://www.google.com.br')
	});

});