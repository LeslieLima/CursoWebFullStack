$(document).ready(function() {

	$("#btn1").click(function() {
		$("p").append('<b> texto apend </b>')
	});

	$("#btn2").click(function() {
		$("ol").append('<li><b>texto apend</b></li>')
	});

	$("#btn3").click(function() {
		$("p").prepend('<i> texto prepend </i>')
	});

	$("#btn4").click(function() {
		$("ol").prepend('<li><i>texto prepend</i></li>')
	});

});