(function($) {

    var stringToType = $('.typed-target').text().split(' | ');

    $('.typed-target').text('').css;
    console.log(stringToType);
    var options = {
        strings: stringToType,
        smartBackspace: true,
        backspeed: 1000,
        typeSpeed: 90,
        showCursor: true,
        autoInsertCss: true,
        startDelay: 1000,
        onComplete: onComplete
    };

    var typedString = new Typed('.typed-target', options);

    function onComplete() {
        $('typed-target').text(stringToType)
    }

})(jQuery); // end on document load