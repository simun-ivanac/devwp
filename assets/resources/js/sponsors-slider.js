var SponsorsSlider = (function() {
    // TRIGGER IMAGE SLIDER USING "SLICK MASTER" LIBRARY
    // it has to be more than 4 images

    var sponsors_slider = $('.js-sponsors-slider').eq(0);
    if (!sponsors_slider.length) return;

    var sponsor_items = sponsors_slider.find('.sponsor-item');

    // TRIGER SLIDER ONLY IF HAS 4 OR MORE IMAGES
    if (sponsor_items.length < 4) {
        sponsor_items.addClass('no-slider');
        return;
    }


    // trigger slider
    sponsors_slider.slick({
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
