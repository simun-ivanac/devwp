// Reduce the text to max number of characters -> displaying only the whole words

// It uses only three parameters:
// TEXT to reduce,
// max number of characters,
// what to add at the end of the shortened text

// How to use it:
// console.log( truncateText( "Lorem ipsum dolor sit amet, consectetur adipisicing elit", 10, "..." )  );


function truncateText(text, max_nr_of_char, char_at_the_end) {

    max_nr_of_char = Number(max_nr_of_char);  // string to number
    var new_text = text;

    if (new_text.length > max_nr_of_char) {
        new_text = jQuery.trim(text).substring(0, max_nr_of_char).split(' ').join(' ') + char_at_the_end;
    }

    return new_text;
}
