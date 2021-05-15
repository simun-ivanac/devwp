var FixedMenu = (function(){

    var header = $('#site-header');
    var currentScroll = 0;

    // APPLY FIXED MENU ON SCROLL
    function fixedMenu() {
        currentScroll = $(window).scrollTop();

        if (currentScroll != 0) {
            header.addClass('fixed-menu');
        } else {
            header.removeClass('fixed-menu');
        }
    }

    $(window).scroll(fixedMenu);
    fixedMenu();

})(); // !FixedMenu
