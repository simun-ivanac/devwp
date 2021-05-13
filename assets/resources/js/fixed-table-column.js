var TableFixedColumn = (function() {
    // MAKES 1 COLUMN FIXED IN TABLE WHEN HORIZONTAL SCROLLING IS NECESSARY
    // It uses 1 argument -> window width

    // if not found, return
    var schedule = $('#schedule-table');
    if (!schedule.length) return;

    var breakpoint = 1020;

    var is_fixed = false;
    var window_width;

    function fixedTableColumn(breakpoint_width) {
        window_width = $(window).width();

        // if breakpoint is applied -> make first column fixed
        if (window_width <= breakpoint_width) {
            var table_rows = schedule.find('tr');

            for (var i = 0; i < table_rows.length; i++) {
                var row = table_rows.eq(i);
                var height = row.outerHeight(true);
                var th = row.find('th').eq(0);

                th.height(height).css({ 'line-height': height + 'px' });

                if (i == 0) {
                    schedule.closest('.js-schedule-table-holder').css('margin-left', th.outerWidth() + 'px');
                }
            }

            is_fixed = true;
        }
        // remove styles and restore default values
        else if (window_width > breakpoint_width && is_fixed) {
            schedule.find('thead>tr th:first-of-type, tbody>tr th').removeAttr('style');
            schedule.closest('.js-schedule-table-holder').removeAttr('style');
            is_fixed = false;
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
