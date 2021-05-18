(function($) {


/*
 * CAUTION: use only in development
 * If link doesn't have href attribute set, prevent default behavior.
 *
 */
$('body').on('click', 'a', function(event) {
    var href = $(this).attr('href');

    if ( href == '#' || href == '' || !href ) {
        event.preventDefault();
    }
});
