var ContactForm = (function() {
    // ON CONTACT FORM SUBMIT - SHOW FAILURE MESSAGE
    var contactForm = $('#contact-form');
    if (!contactForm.length) return;

    // MESSAGE FOR EMAIL FAILURE
    contactForm.on('click', '.wpcf7-submit', function() {
        alert("This is free hosting so I don\'t have email configured. Sorry about that!");
    });

})(); // !ContactForm
