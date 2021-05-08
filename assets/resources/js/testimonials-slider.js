var TestimonialsSlider = (function() {
    // TRIGGER TESTIMONIALS SLIDER USING "SLICK MASTER" LIBRARY

    var testimonials_slider = $('.js-trigger-slider').eq(0);
    if (!testimonials_slider.length) return;

    // Trigger slider -> slick
    testimonials_slider.slick();

})(); // !TestimonialsSlider
