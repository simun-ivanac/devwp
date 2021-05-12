var ContactForm = (function() {
    // ON CONTACT FORM SUBMIT - SHOW FAILURE MESSAGE
    var contact_form = $('#contact-form');
    if (!contact_form.length) return;

    // MESSAGE FOR EMAIL FAILURE
    contact_form.on('click', '.wpcf7-submit', function() {
        alert("This is free hosting so I don\'t have email configured. Sorry about that!");
    });

})(); // !ContactForm
