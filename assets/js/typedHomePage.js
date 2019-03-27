// Define Constants!
var SUBHEADS = jQuery('#typed-header .start-header .sub-heading span');



// Add the "hidden" class to the subhead questions, this class will be used later on.
SUBHEADS.addClass('hidden');


// On Document Load
jQuery(function($) {
    /*
     *
     * Use javascript to clear the final state. 
     * 
     * 
     *
     * 1) Clear the Typed.js Target string
     */

    $('#typed-string').text('');

    /*
     *  2) Remove the "hidden" class from the start state,
     *  where it lives by default.
     *
     */
    $('#typed-header .start-header').removeClass('hidden');


    /*
     *
     * 3) Make the final state (visible by default) transparent. 
     *
     */
    $('#typed-header .final-header').css('opacity', '0');
    // Use JQuery to make the subheader transparent. 
    // We don't use the hidden class here, because this should be visible without javascript enabled.
    $('h2#subhead').css('opacity', '0');

    $('#masthead .background-div').toggleClass('final-state').addClass('fade-in-background');



    var options = {
        strings: ["Coder. ^500", "Creator. ^500", "Communicator. ^1000", "Hi. ^500 I\'m Diana"],
        smartBackspace: true,
        backspeed: 1000,
        typeSpeed: 90,
        showCursor: true,
        autoInsertCss: true,
        startDelay: 2000,
        onStringTyped: onStringTyped,
        onDestroy: revealfrontPage,
        onComplete: onComplete
    };

    var typed = new Typed("#typed-string", options);

    $('#pause').toggle(function() {
        $(this).find('i').toggleClass('fa-play fa-pause');
        typed.stop();
    }, function() {
        $(this).find('i').toggleClass('fa-play fa-pause');
        typed.start();
    });

    $('#skip').click(function() {
        typed.stop();
        revealfrontPage();
    });





    function revealfrontPage() {
        jQuery('#typed-header .final-header').css('opacity', '1');
        jQuery('#typed-header .start-header').css('opacity', '0');
        jQuery('#typed-string').text('Hi. I\'m Diana');
        jQuery('#subhead').css('opacity', '1');
        destroyAnimationControls();


    }

    function onStringTyped(arrayPos) {
        var thisSubhead = jQuery(SUBHEADS[arrayPos]);
        unhideAndAnimate(thisSubhead, arrayPos);
        if (arrayPos === 2) {
            $('.string-container').removeClass('typed-font');

        }
    }

    function onStringPaused(arrayPos) {
        $(SUBHEADS[arrayPos]).removeClass('hidden');
    }

    function unhideAndAnimate(el, arrayPos) {
        setTimeout(function() {
            $(el).removeClass('hidden').addClass('fadeInDown');
        }, 100);
    }


    function onComplete(typed) {
        var finalHeader = $('#typed-header .final-header');
        var startHeader = $('#typed-header .start-header');

        setTimeout(function() {
            $('#masthead .background-div').addClass('fade-out-background');
            setTimeout(function() {
                $('#masthead .background-div').addClass('final-state');

            }, 500);
        }, 500);
        startHeader.animate({ 'opacity': '0' }, 2500);
        finalHeader.animate({ 'opacity': '1' }, 2500);
        $('#typed-string').text("Hi.  I'm Diana.");
        fadeToFinal();
    }

    function fadeToFinal() {

        setTimeout(function() {
            $('h2#subhead').removeClass('hidden').addClass('text-focus-in');
            $('.typed-cursor').addClass('hidden');
            setTimeout(destroyAnimationControls, 1000);

        }, 2000);


    }

    function destroyAnimationControls() {
        $('#animation-control').addClass('hidden');
    }

});