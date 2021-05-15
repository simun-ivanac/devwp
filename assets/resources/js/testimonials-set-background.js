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
        var scrollingPosition = checkElementViewportPosition(testimonials, 800);
        if (scrollingPosition == 'in_view') {
            setBackgroundImage();
        }
    }

    // load background image on load & scroll
    loadBackgroundImage();

    var scrollTimer;
    $(window).on('scroll', function() {
        clearTimeout(scrollTimer);

        scrollTimer = setTimeout(function() {
            loadBackgroundImage();
        }, 250);
    });





    // SET BACKGROUND IMAGE DEPENDING ON SCREEN SIZE
    function setBackgroundImage() {
        var mediaMobile = window.matchMedia('(max-width: 470px)');
        var mediaTablet = window.matchMedia('(max-width: 768px)');
        var bgSource = '';

        // window width is less than 470px
        if (mediaMobile.matches) {
            bgSource = testimonials.attr('data-mobile-bg');
        }
        // window width is less than 768px
        else if (mediaTablet.matches) {
            bgSource = testimonials.attr('data-tablet-bg');
        }
        // window width is greater than 768px
        else {
            bgSource = testimonials.attr('data-desktop-bg');
        }

        testimonials.css('background-image', 'url(' + bgSource + ')');
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
