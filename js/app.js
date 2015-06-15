//Include jQuery no conflict wrapper
jQuery(document).ready(function($){ 
	//Include nav logic
	$( ".nav-toggle" ).click(function() {
	  $(this).toggleClass("open");
	  $("nav").fadeToggle(100);

	  return false;
	});

	//Foundation
	$(document).foundation();
});		
