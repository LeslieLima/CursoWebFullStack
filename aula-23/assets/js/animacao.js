$(document).ready(function() {

	$('#anim1').click(function() {
		$('#div1').animate({
			left: '250px',
			top:'250px',
			opacity: '0.5'
		}, function() {
			alert('A animação terminou');
		});
	});

	$('#anim2').click(function() {
		var div = $('#div2');
		div.animate({ height: '300px', opacity:'0.4'}, "slow");
		div.animate({ width: '300px', opacity:'0.8'}, "slow");
		div.animate({ height: '200px', opacity:'0.4'}, "slow");
		div.animate({ width: '200px', opacity:'0.8'}, "slow");
	});

})