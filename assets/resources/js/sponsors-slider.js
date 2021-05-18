var SponsorsSlider = (function() {
    /*
     * SPONSORS SLIDER
     * If at least 4 sponsor images exist, trigger slider using 'slick master'
     * library.
     * Adjust size of slider on certain breakpoints.
     */


    var sponsorSlider = $('.js-sponsors-slider').eq(0);
    if (!sponsorSlider.length) return;

    var sponsorItems = sponsorSlider.find('.js-sponsor-item');

    // TRIGER SLIDER ONLY IF HAS 4 OR MORE IMAGES
    if (sponsorItems.length < 4) {
        sponsorItems.addClass('no-slider');
        return;
    }


    // trigger slider
    sponsorSlider.slick({
        autoplay: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 430,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

})(); // !SponsorsSlider
