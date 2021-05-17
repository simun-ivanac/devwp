var FixedMenu = (function() {
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
