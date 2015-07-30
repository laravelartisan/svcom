$('span.sv-menu-btn').click(function(){
		$( 'ul.sv-mega-menu' ).toggle();
	});


	$(document).ready(function() {
	 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : true, // Show next and prev buttons
	      autoPlay: 3000,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	  });
	});