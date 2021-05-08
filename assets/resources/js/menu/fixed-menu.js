var FixedMenu = (function(){

    var header = $('#site-header');
    var current_scroll = 0;

    // APPLY FIXED MENU ON SCROLL
    function fixedMenu() {
        current_scroll = $(window).scrollTop();

        if (current_scroll != 0) {
            header.addClass('fixed-menu');
        } else {
            header.removeClass('fixed-menu');
        }
    }

    $(window).scroll(fixedMenu);
    fixedMenu();

})(); // !FixedMenu
