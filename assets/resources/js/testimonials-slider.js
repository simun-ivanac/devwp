var TestimonialsSlider = (function() {
    /*
     * TESTIMONIALS SLIDER
     * Trigger slider using 'slick master' library.
     */


    var testimonialSlider = $('.js-testimonials-slider').eq(0);
    if (!testimonialSlider.length) return;

    testimonialSlider.slick();


})(); // !TestimonialsSlider
