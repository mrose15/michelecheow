(function($) {

$( document ).ready(function() {

	$('a').smoothScroll({offset: -40});

	$.localScroll({
    	duration: 750
    });


});

})(jQuery); // Fully reference jQuery after this point.