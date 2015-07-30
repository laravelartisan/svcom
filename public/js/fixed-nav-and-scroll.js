$(document).ready(function(){
				 		// Script for fixed nav
				 			var $window = $(window);
				 			var nav = $('.sv-section-two');
				 			$window.scroll(function(){
				 			    if ($window.scrollTop() >= 250){
				 			       nav.addClass('sv-section-two-fixed');
				 			    }
				 			    else {
				 			       nav.removeClass('sv-section-two-fixed');
				 			    }
				 			}); 

			    	 	// end script for fixed nav
			    	 	// script for scroll top	  
			    	 		  $(".up").click(function() {
			    	 		     $('html, body').animate({
			    	 		     scrollTop: 0
			    	 		  }, 2000);
			    	 		});	
			    	 })