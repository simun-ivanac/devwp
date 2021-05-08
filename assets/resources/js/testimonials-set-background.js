var TestimonialsSetBackground = (function() {
    // SECTION HAVE DIFFERENT IMAGES FOR CERTAIN SIZES (mobile, tablet, desktop)
    // SET BACKGROUND DEPENDING ON SIZE

    var testimonials = $('.js-set-testimonials-bg').eq(0);
    if (!testimonials.length) return;


    // ON SCROLL, LOAD BACKGROUND IMAGE
    function loadBackgroundImage() {
        // if background image is set, return
        if (testimonials.css('background-image') != 'none') return;

        // get element position
        var scrolling_position = checkElementViewportPosition(testimonials, 800);
        if (scrolling_position == 'in_view') {
            setBackgroundImage();
        }
    }

    // load background image on load & scroll
    loadBackgroundImage();

    var scrollTimer;
    $(window).on('scroll', function() {
        clearTimeout(scrollTimer);

        resizeTimer = setTimeout(function() {
            loadBackgroundImage();
        }, 250);
    });





    // SET BACKGROUND IMAGE DEPENDING ON SCREEN SIZE
    function setBackgroundImage() {
        var media_query_mobile = window.matchMedia('(max-width: 470px)');
        var media_query_tablet = window.matchMedia('(max-width: 768px)');
        var bg_source = '';

        // window width is less than 470px
        if (media_query_mobile.matches) {
            bg_source = testimonials.attr('data-mobile-bg');
        }
        // window width is less than 768px
        else if (media_query_tablet.matches) {
            bg_source = testimonials.attr('data-tablet-bg');
        }
        // window width is greater than 768px
        else {
            bg_source = testimonials.attr('data-desktop-bg');
        }

        testimonials.css('background-image', 'url(' + bg_source + ')');
    }


    // set background image at different sizes
    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function() {
            setBackgroundImage();
        }, 250);
    });


})(); // !TestimonialsSetBackground
