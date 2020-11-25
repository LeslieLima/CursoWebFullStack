$(document).ready(function() {

	$('#btn-add-class').click(function() {
		$('div').addClass('box');
	});

	$('#btn-remove-class').click(function() {
		$('div').removeClass('box');
	});	

	$('#btn-css').click(function() {
		$('p').css({
			'color'				:'blue',
			'background-color'	:'green',
			'text-decoration'	:'underline',
		});
	});		

});