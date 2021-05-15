var TestimonialsSlider = (function() {
    // TRIGGER TESTIMONIALS SLIDER USING "SLICK MASTER" LIBRARY

    var testimonialSlider = $('.js-testimonials-slider').eq(0);
    if (!testimonialSlider.length) return;

    // Trigger slider -> slick
    testimonialSlider.slick();

})(); // !TestimonialsSlider
