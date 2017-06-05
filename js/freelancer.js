// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pauseOnHover: true,
    interval: 3000,
  });

});

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    /*$('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });*/

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    

})(jQuery); // End of use strict


// Add counter
$(document).ready(function() {
    
    $('.counter-num').counterUp({
        delay: 5,
        time: 2000
    });
});

// Waypoints 


$(document).ready(function() {
  
  $(".first").waypoint(function(){
    $(".first").addClass('animated bounceInUp')
  }, {
    offset: "100%"
  });
  
  $(".second").waypoint(function(){
    $(".second").addClass('animated fadeInLeft')
  }, {
    offset: "100%"
  });
  
  $(".third").waypoint(function(){
    $(".third").addClass('animated fadeInUp')
  }, {
    offset: "100%"
  });
  
  $(".fourth").waypoint(function(){
    $(".fourth").addClass('animated fadeInRight')
  }, {
    offset: "100%"
  });
  
  $(".fifth").waypoint(function(){
    $(".fifth").addClass('animated fadeIn')
  }, {
    offset: "90%"
  });
  
  $(".sixth").waypoint(function(){
    $(".sixth").addClass('animated fadeInRight')
  }, {
    offset: "100%"
  });
  
  $(".seventh").waypoint(function(){
    $(".seventh").addClass('animated fadeInLeft')
  }, {
    offset: "100%"
  });
  
  $(".eigth").waypoint(function(){
    $(".eigth").addClass('animated slideInLeft')
  }, {
    offset: "100%"
  });
  
  
  
});





