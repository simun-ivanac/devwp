// Reduce the text to max number of characters -> displaying only the whole words

// It uses only three parameters:
// TEXT to reduce,
// max number of characters,
// what to add at the end of the shortened text

// How to use it:
// console.log( truncateText( "Lorem ipsum dolor sit amet, consectetur adipisicing elit", 10, "..." )  );


function truncateText(text, maxCharNum, endChars) {

    maxCharNum = Number(maxCharNum);  // string to number

    if (text.length > maxCharNum) {
        text = jQuery.trim(text).substring(0, maxCharNum).split(' ').join(' ') + endChars;
    }

    return text;
}
