$(document).ready(function() {

	$("#btn1").click(function() {
		$("p").before('<p> parágrafo antes </p>')
	});

	$("#btn2").click(function() {
		$("p").after('<p> parágrafo depois </p>')
	});

	$("#btn3").click(function() {
		$("p").clone().insertBefore('div');
	});

	$("#btn4").click(function() {
		$("p").clone().insertAfter('div');
	});

	<br><br>

	$("#btn5").click(function() {
		$("p").clone().appendTo('div')
	});

	$("#btn6").click(function() {
		$("p").clone().prependTo('div');
	});

	$("#btn7").click(function() {
		$("p").remove();
	});

	$("#btn8").click(function() {
		$("p").empty();
	});

});