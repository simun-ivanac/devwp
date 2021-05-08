// Function for loading on scroll
function checkElementViewportPosition(el, offset) {
    // Pass HTML element ( selected in jQuery ) and offset from page fold ( top and bottom )
    // Returns 'above' or 'below' or 'in_view' (page fold)
    // It is enough to check if element is 'in_view' and to do the action but there are also other two options which can be used.
    // offset = "NaN";
    // offset = "undefined";
    // offset = "";

    if (isNaN(offset) || offset == '') {
        offset = 0;
    }


    var rect = el[0].getBoundingClientRect();

    if (rect.bottom < -1 - offset) {
        return 'above';
    } else if (rect.top >= $(window).height() + offset) {
        return 'below';
    } else {
        return 'in_view';
    }

}
