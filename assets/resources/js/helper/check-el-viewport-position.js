/*
 * CHECK ELEMENT VIEWPORT POSITION
 * It receives element and desired offset.
 * It returns one of values: 'above' | 'below' | 'in_view'.
 *
 * @param object el = HTML element selected in jQuery
 * @param int offset = offset from page fold
 * @return string
 */
function checkElementViewportPosition(el, offset) {

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
