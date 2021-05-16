var LazyImageLoading = (function() {
    // LOAD IMAGES ON SCROLL (still needs optimization)
    // On window scroll -> check element viewport
    // If element is at defined viewport, get data-source and use it as source to load image

    // w3 total cache handles lazy loading
    return;



    var images = $('body img:not([loading])');
    if (!images.length) return;


    function loadImageSource() {
        images.each(function(i) {

            // if images is lazy loading using WP, set as loaded
            if (!$(this).attr('data-src')) {
                $(this).addClass('loaded');
            }

            // if loaded, return early
            if ($(this).hasClass('loaded')) return;


            // check if element is within viewport
            var scrollingPosition = checkElementViewportPosition($(this), 800);
            if (scrollingPosition != 'in_view') return;

            // set 'data-src' as 'src'
            var src = $(this).attr('data-src');
            $(this).attr('src', src).removeAttr('data-src');


            // set as loaded
            $(this).addClass('loaded');

        })
    }

    loadImageSource();


    // call function on scroll, in interval of 50ms
    var scrollTimer;

    $(window).scroll(function() {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(function() {
            loadImageSource();
        }, 50);
    });

})(); // !LazyImageLoading
