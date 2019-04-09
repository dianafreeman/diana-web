(function($) {
    $('.testimonial-carousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        focusOnSelect: true,
        adaptiveHeight: false,
        variableWidth: false,
        centerMode: false,
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

})(jQuery); // end on document load;