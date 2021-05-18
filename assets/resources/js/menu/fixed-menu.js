var FixedMenu = (function() {
    /*
     * ADD OR REMOVE CLASS ON SCROLL
     * It checks if scrolling position is greater than 0 and add css class.
     * If scrolling position is 0, it removes css class if exists.
     *
     * NOTE: debouncer and throttling needs to be added!
     */
    var siteHeader = $('#site-header');
    var currentScroll = 0;

    $(window).on('scroll', function () {
        currentScroll = $(this).scrollTop();

        if (currentScroll > 0 && !siteHeader.hasClass('fixed-menu')) {
            siteHeader.addClass('fixed-menu');
        } else if (currentScroll == 0) {
            siteHeader.removeClass('fixed-menu');
        }

    });

})(); // !FixedMenu
