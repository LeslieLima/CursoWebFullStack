$(document).ready(function() {

	$('#btn1').click(function() {
		alert("Você clicou no botão")
	});

	$('#btn2').dblclick(function() {
		alert("Você clicou duas vezes no botão")
	});

	$('#btn3').mouseenter(function() {
		alert("Seu mouse entrou no botão")
	});

	$('#btn4').mouseleave(function() {
		alert("Seu mouse deixou o botão")
	});


	//não faz distinção do botão do mouse
	$('#btn5').mousedown(function() {
		alert("Você pressionou o botão")
	});

	$('#btn6').mouseup(function() {
		alert("O botão foi solto")
	});

	//funciona como o mouse enter e o mouse leave juntos
	$('#btn7').hover(function() {
		alert("Seu mouse entrou no botão")
	}, function() {
		alert("Seu mouse deixou botão")
	});

});