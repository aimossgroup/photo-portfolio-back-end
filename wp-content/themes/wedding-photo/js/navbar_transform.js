/* NAVBAR transformation on scroll */
$(window).scroll(function() {
	if ($(this).scrollTop() > 200){ // Set position from top to add class
	$('.navbar').addClass("shrink");
	} else {
	$('.navbar').removeClass("shrink");
	}
});