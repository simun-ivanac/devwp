var TableFixedColumn = (function() {
    /*
     * FIXED TABLE COLUMN
     * At certain breakpoint when table is too wide, make first column fixed
     * and other columns scrollable.
     * On resize event, adjust it if necesssary.
     */


    // if not found, return
    var schedule = $('#schedule-table');
    if (!schedule.length) return;

    var breakpoint = 1020;
    var isColumnFixed = false;
    var windowWidth;

    function fixedTableColumn(breakpointWidth) {
        windowWidth = $(window).width();

        // if breakpoint is applied -> make first column fixed
        if (windowWidth <= breakpointWidth) {
            var tableRows = schedule.find('tr');

            for (var i = 0; i < tableRows.length; i++) {
                var row = tableRows.eq(i);
                var height = row.outerHeight(true);
                var th = row.find('th').eq(0);

                th.height(height).css({ 'line-height': height + 'px' });

                if (i == 0) {
                    schedule.closest('.js-schedule-table-holder').css('margin-left', th.outerWidth() + 'px');
                }
            }

            isColumnFixed = true;
        }
        // remove styles and restore default values
        else if (windowWidth > breakpointWidth && isColumnFixed) {
            schedule.find('thead>tr th:first-of-type, tbody>tr th').removeAttr('style');
            schedule.closest('.js-schedule-table-holder').removeAttr('style');
            isColumnFixed = false;
        }
    }


    // media breakpoint adaptation
    var resizeTimer;

    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            fixedTableColumn(breakpoint);
        }, 250);
    });

    fixedTableColumn(breakpoint);

})(); // !TableFixedColumn
