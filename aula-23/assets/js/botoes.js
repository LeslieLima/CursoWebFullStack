$(document).ready(function() {

	$('#esconder').click(function() {
		$('p').hide(1000);
	});

	$('#mostrar').click(function() {
		$('p').show(1000);
	});

	$('#toggle').click(function() {
		$('p').toggle(1000);
	});

	$('#in').click(function() {
		$('p').fadeIn(1000);
	});

	$('#out').click(function() {
		$('p').fadeOut(1000);
	});

});
