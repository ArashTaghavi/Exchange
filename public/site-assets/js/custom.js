/* ----------------------------------------------------------------------------------------
 Project:        Appt | App Landing HTML Template
Version:        1.0
Last change:    26/06/2018
Primary use:    App Template.
Author:         bitspeck
URL:            http://theme.bitspecksolutions.com/App/
 ---------------------------------------------------------------------------------------- */




/* INDEX
----------------------------------------------------------------------------------------

01. Preloader js

02. change Menu background on scroll js

03. Navigation js

04. Smooth scroll to anchor

05. Slider carosoul JS

06. Review Js

07. screenshot js

08 . Scroll-to-top

09. Magnific Popup js

10. Ajax Contact Form js

11. MailChimp js

-------------------------------------------------------------------------------------- */

(function ($) {
    'use strict';

    var api = $(window);

    /*-------------------------------------------------------------------------*
     *                  01. Preloader js                                       *
     *-------------------------------------------------------------------------*/
    $(window).load(function () {
         $('#loading').delay(1500).fadeOut();
    });

    /*-------------------------------------------------------------------------*
     *             02. change Menu background on scroll js                     *
     *-------------------------------------------------------------------------*/
    api.on('scroll', function () {

        var menu_area = $('.menu-area');

        if (api.scrollTop() > 0) {
            menu_area.addClass('sticky-menu');
        } else {
            menu_area.removeClass('sticky-menu');
        }
    }); // $(window).on('scroll' end)

    /*-------------------------------------------------------------------------*
     *                   03. Navigation js                                     *
     *-------------------------------------------------------------------------*/
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
            $(this).collapse('hide');
        }
    });

    $('body').scrollspy({
        target: '.navbar-collapse',
        offset: 195
    });

    /*-------------------------------------------------------------------------*
     *                   04. Smooth scroll to anchor                           *
     *-------------------------------------------------------------------------*/
    $('a.smooth_scroll').on("click", function (e) {
        e.preventDefault();
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1000);
    });


    /*-------------------------------------------------------------------------*
                      05. Slider carosoul JS
     *-------------------------------------------------------------------------*/

    $(".slider-full-carousel").owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
		      rtl: true,
        animateIn: 'fadeIn',
        smartSpeed: 2500,
        nav:true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        items:1,
		dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    /*-------------------------------------------------------------------------*
                      06. Review Js
     *-------------------------------------------------------------------------*/

/*---------------------------
        TESTMONIAL SLIDER
    -----------------------------*/
    var $testmonialCarousel = $('.testmonial-slider');
    $testmonialCarousel.owlCarousel({
        merge: true,
        smartSpeed: 1000,
        loop: true,
		rtl: true,
        nav: true,
        center: false,
        dots: false,
        navText: ['<i class="fa fa-angle-right"></i>', '<i class="fa fa-angle-left"></i>'],
        autoplay: true,
        autoplayTimeout: 3000,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });
    /*-------------------------------------------------------------------------*
     *              07. screenshot js                                     *
     *-------------------------------------------------------------------------*/

    if ($(".appin-screenshot").length > 0) {
        var swiper = new Swiper('.appin-screenshot', {
            pagination: true,
            effect: 'coverflow',
            loop: true,
			rtl: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            autoplay: 2000,
            nextButton: '.next',
            prevButton: '.prev',
            autoplayDisableOnInteraction: true,
            coverflow: {
                rotate: 15,
                stretch: 70,
                modifier: 0.9,
                slideShadows: false
            }
        });

        $(".appin-screenshot").hover(function () {
            swiper.stopAutoplay();
        }, function () {
            swiper.startAutoplay();
        });
    }


    /*-------------------------------------------------------------------------*
     *              08 . Scroll-to-top                           *
     *-------------------------------------------------------------------------*/
    api.on('scroll', function () {

        var top_top = $('#scroll-to-top');

        if (api.scrollTop() > 500) {
            top_top.fadeIn();
        } else {
            top_top.fadeOut();
        }
    });
    /*END SCROLL TO TOP*/

    /*-------------------------------------------------------------------------*
     *                  09. Video Popup js                                  *
     *-------------------------------------------------------------------------*/

    // youtube video js start here
        jQuery("a.bla-1").YouTubePopUp({ autoplay: 0 }); // Disable autoplay

    /*-------------------------------------------------------------------------*
     *                  10. Ajax Contact Form js                               *
     *-------------------------------------------------------------------------*/
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).on('submit', function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');

            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });

    });

    /*-------------------------------------------------------------------------*
     *                   11. MailChimp js                                      *
     *-------------------------------------------------------------------------*/
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,

        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'http://coderspoint.us14.list-manage.com/subscribe/post?u=e5d45c203261b0686dad32537&amp;id=d061f39c51'

    });

    function mailChimpResponse(resp) {
        if (resp.result === 'success') {
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);

        } else if (resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }
    }
/*-------------- Ajaxcontact-form ---------*/
$(function() {
// Get the form.
var form = $('#contact-form');

// Get the messages div.
var formMessages = $('#form-messages');

// TODO: The rest of the code will go here…
$(form).submit(function(event) {
// Stop the browser from submitting the form.
event.preventDefault();

// TODO

// Serialize the form data.
var formData = $(form).serialize();
// Submit the form using AJAX.
$.ajax({
type: 'POST',
url: $(form).attr('action'),
data: formData,
beforeSend: function(){
form.prepend( formMessages.html(' در حال ارسال پیام ...').fadeIn() );
}
})
.done(function(response) {
// Make sure that the formMessages div has the 'success' class.
$(formMessages).removeClass('error');
$(formMessages).addClass('success');

// Set the message text.
$(formMessages).text(response);

// Clear the form.
$('#name').val("");
$('#email').val("");
$('#message').val("");
})
.fail(function(data) {
// Make sure that the formMessages div has the 'error' class.
$(formMessages).removeClass('success');
$(formMessages).addClass('error');

// Set the message text.
if (data.responseText !== "") {
$(formMessages).text(data.responseText);
} else {
$(formMessages).text('Oops! An error occured and your message could not be sent.');
}
});
});
});

})(jQuery);
