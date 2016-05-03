$(document).ready(function () {
    $(".responsive-calendar").responsiveCalendar({
        time: '2013-04',
        events: {
            "2013-04-30": {"number": 10, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 'VBI Round 3', "url": "http://w3widgets.com"}}
    });
});