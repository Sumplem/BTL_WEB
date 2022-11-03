$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 25) {
        $('#content_col1').addClass('fixed');
    } else {
        $('#content_col1').removeClass('fixed');
    }
});