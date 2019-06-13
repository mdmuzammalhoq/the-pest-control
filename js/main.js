(function ($) {
	"use strict";

    jQuery(document).ready(function($){

	
        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

     
       $("#client-slider").owlCarousel({
     
           autoPlay: 2500,  //Set AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1170,3],
          itemsDesktopSmall : [979,3]
     
      });

    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	