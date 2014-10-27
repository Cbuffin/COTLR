$('.photobox').cycle({ 
	fx: 'fade', 
	speed: 3500
});

$(".songPlayPauseD").click(function () {
      $(this).toggleClass("pause");
});


$(document).ready(function() {
	$('.faq h2').each(function() {
		var tis = $(this), state = false, answer = tis.next('div').slideUp();
		tis.click(function() {
			state = !state;
			answer.slideToggle(state);
			tis.toggleClass('active',state);
		});
	});
});