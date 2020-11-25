$(document).ready(function() {

	$('#btn-filho').click(function() {
		$('p').parent().css('background-color', 'blue');
	});

	$('#btn-pai').click(function() {
		$('div').children('#p2').css('background-color', 'green');
	});

});