var MobileMenu = (function() {
    var siteNav = $('#site-navigation');
    var mobileMenu = $('#mobile-menu');

    siteNav.on('click', '.js-toggle-primary-menu', function() {

        var mobileMenuContent = mobileMenu.find('.js-mobile-menu-content');

        mobileMenu.addClass('is-opened');
        setTimeout(function() {
           mobileMenuContent.addClass('is-animated');
       }, 100);

       $('body').addClass('is-locked');

        // if not empty, menu is already added
        if (mobileMenuContent.children().length !== 0 ) return;

        var primaryMenu = siteNav.find('#primary-menu');
        mobileMenuContent.append(primaryMenu);

    });
})(); // !MobileMenu
