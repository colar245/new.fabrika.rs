// Call this from the developer console and you can control both instances
var calendars = {};

$(document).ready( function() {

    // Assuming you've got the appropriate language files,
    // clndr will respect whatever moment's language is set to.
    // moment.locale('ru');

    // Here's some magic to make sure the dates are happening this month.
    var thisMonth = moment().format('YYYY-MM');
    // console.log(thisMonth);
    // Events to load into calendar
    var eventArray = [
        {
            title: 'Multi-Day Event',
            endDate: thisMonth + '-14',
            startDate: thisMonth + '-10'
        }, {
            endDate: thisMonth + '-23',
            startDate: thisMonth + '-21',
            title: 'Another Multi-Day Event'
        }, {
            date: 	'2020-05' + '-24',
            title: 'Another Multi-Day Event'
        }, {
            date: thisMonth + '-27',
            title: 'Single Day Event'
        }
    ];

    calendars.clndr1 = $('.cal').clndr({
        events: eventArray,
        clickEvents: {
            click: function (target) {
            },
            today: function () {
            },
            nextMonth: function () {
            },
            previousMonth: function () {
            },
            onMonthChange: function () {
            },
            nextYear: function () {
            },
            previousYear: function () {
            },
            onYearChange: function () {
            },
            nextInterval: function () {
            },
            previousInterval: function () {
            },
            onIntervalChange: function () {
            }
        },
        multiDayEvents: {
            singleDay: 'date',
            endDate: 'endDate',
            startDate: 'startDate'
        },
        showAdjacentMonths: true,
        adjacentDaysChangeMonth: false
    });

    // Bind all clndrs to the left and right arrow keys
    $(document).keydown( function(e) {
        // Left arrow
        if (e.keyCode == 37) {
            calendars.clndr1.back();
        }

        // Right arrow
        if (e.keyCode == 39) {
            calendars.clndr1.forward();
        }
    });
});