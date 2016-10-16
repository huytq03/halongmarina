// Freelancer Theme JavaScript

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
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });

    });
    //hide menu when scroll down
    $(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar map-info-text
            if ($(this).scrollTop() > 350) {
                $('#mainNav').fadeOut("slow");
                $('#scroll-button').removeClass("hidden-sm hidden-xs hidden-lg hidden-md");
            } else {
                $('#mainNav').fadeIn("slow");
                $('#scroll-button').addClass("hidden-sm hidden-xs hidden-lg hidden-md");
            }
            if($(this).scrollTop() > 1200) {
                $('#map-info').fadeIn("slow");
            } else {
                $('#map-info').fadeOut("slow");
            }
        });

})(jQuery); // End of use strict
