$(document).ready(function() {

	$('input').focus(function() {
		$(this).css('background-color', '#ccc');
	});
	
	$('input').blur(function() {
		$(this).css('background-color', '#fff');
	});

	$('p').on({
		mouseenter: function() {
			$(this).css('background-color', 'pink')
		},
		mouseleave: function() {
			$(this).css('background-color', 'blue')
		},
		click: function() {
			$(this).css('background-color', 'yellow')
		}
	});


});