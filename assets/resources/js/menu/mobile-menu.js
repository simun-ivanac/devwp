var MobileMenu = (function() {
    var siteNav = $('#site-navigation');
    var mobileMenu = $('#mobile-menu');


    // OPEN MENU
    function openMobileMenu() {
        // show overlay
        mobileMenu.addClass('is-opened');

        // show container (with delay to perform animation)
        setTimeout(function() {
            mobileMenu.find('.js-mobile-menu-container').addClass('is-animated');
        }, 100);

        // lock scrolling
        $('body').addClass('is-locked');
    }


    // CLOSE MENU
    function closeMobileMenu() {
        // first animate container
        mobileMenu.find('.js-mobile-menu-container').removeClass('is-animated');

        // hide overlay (after animation end)
        setTimeout(function() {
            mobileMenu.removeClass('is-opened');
        }, 400);

        // unlock body
        $('body').removeClass('is-locked');
    }


    // Trigger: open menu
    siteNav.on('click', '.js-toggle-primary-menu', function(event) {
        event.stopPropagation();

        openMobileMenu();

        // if not empty, menu is already added
        var mobileMenuContent = mobileMenu.find('.js-mobile-menu-content');
        if (mobileMenuContent.children().length) return;

        // put menu in mobile container
        var primaryMenu = siteNav.find('#primary-menu').clone();
        mobileMenuContent.append(primaryMenu);

    });


    // Trigger: close menu
    mobileMenu.on('click', '.js-close-mobile-menu', function() {
        closeMobileMenu();
    });


    // Trigger: close menu
    $(window).click(function() {

        // if menu is not opened, return
        if ( !mobileMenu.hasClass('is-opened') ) return;

        // if clicked element is not in menu holder, close menu it
        if ( !$(event.target).closest('.js-mobile-menu-container').length ) {
            closeMobileMenu();
        }

    });


})(); // !MobileMenu
