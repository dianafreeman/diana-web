(function($) {
    $('[data-toggle="tooltip"]').tooltip();
    AOS.init();

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
    $(document).scroll(navbarCollapse);


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
        $('.portfolio-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            focusOnSelect: true,
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
                        variableWidth: false,
                        arrows: true
                    }
                }
            ]
        });
        $('.testimonial-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            focusOnSelect: true,
            centerMode: false,
            slidesToShow: 2,
            arrows: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        slidesToShow: 1,

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


        $('.show-more').click(function() {
            var icon = $(this).find('.fa');
            if (icon.hasClass('fa-chevron-left')) {
                $(this).find('.fa').removeClass('fa-chevron-left').addClass('fa-chevron-down');
            } else if (icon.hasClass('fa-chevron-down')) {
                $(this).find('.fa').removeClass('fa-chevron-down').addClass('fa-chevron-left');
            }
        });


        $('.archive-row').click(function() {
            var dest = $(this).find('a[rel="bookmark"]').attr('href');
            window.open(dest, "_self");
        });

        $('.slick-slide').click(function() {
            var dest = $(this).find('.portfolio-item').attr('href');
            window.open(dest, "_self");
        });
    }); // end on load

})(jQuery); // End of use strict