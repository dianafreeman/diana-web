(function($) {

    var originalString = $('.typed-target').text();
    var stringToType = originalString.replace(/\|/g, "| ^1000");

    $('.typed-target').text('');
    console.log(stringToType);

    var options = {
        strings: [stringToType],
        smartBackspace: false,
        backspeed: 40,
        typeSpeed: 30,
        showCursor: true,
        autoInsertCss: true,
        startDelay: 500,
        onComplete: onComplete
    };

    var typedString = new Typed('.typed-target', options);

    function onComplete() {
        $('.typed-target').text(originalString);
        setTimeout(function() {
            $('.typed-cursor').css('visibility', 'hidden');

        }, 1000);
    }




})(jQuery); // end on document load;