var ContactForm = (function() {
    /*
     * FAILURE MESSAGE
     * Email server is not configured. Notify user on form submit.
     */


    var contactForm = $('#contact-form');
    if (!contactForm.length) return;

    // MESSAGE FOR EMAIL FAILURE
    contactForm.on('click', '.wpcf7-submit', function() {
        alert("This is free hosting so I don\'t have email configured. Sorry about that!");
    });

})(); // !ContactForm
