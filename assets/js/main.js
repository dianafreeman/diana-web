(function($) {

    AOS.init();


    // Scroll to top button appear
    $(document).scroll(function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();

        }
    });



    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 80
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
            // $("#masthead:not(.page-masthead)").addClass("fixed");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
            // $("#masthead:not(.page-masthead)").removeClass("fixed");

        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);


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


    $(function() {
        $('#masthead.crossfade').addClass('final');
        console.log('loaded!');
        $('.portfolio-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            adaptiveHeight: true,
            variableWidth: true,
            centerMode: false,
            edgeFriction: 0,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true
                    }
                }
            ]
        });

        // $('.slick-slide').on('mouseover', activateSlide(event));

        function activateSlide(e) {
            return function(e) {
                e.stopPropagation();
                var index = $(this).data("slick-index");
                if ($('.slick-slider').slick('slickCurrentSlide') !== index) {
                    $('.slick-slider').slick('slickGoTo', index);
                }


            };
        }


        var slideTimer;
        $('.portfolio-carousel').on('mouseenter', '.slick-slide', function(e) {
            var $currTarget = $(e.currentTarget);
            $('.portfolio-carousel .slick-slide').removeClass('slick-current');
            $currTarget.addClass('slick-current');

            slideTimer = setTimeout(function() {
                var index = $('.portfolio-carousel').find('.slick-current').data('slick-index');
                var slickObj = $('.portfolio-carousel').slick('getSlick');
                slickObj.slickGoTo(index);
            }, 500);
        }).on('mouseleave', '.slick-slide', function(e) {
            clearTimeout(slideTimer);
        });

    }); // end on load

})(jQuery); // End of use strict