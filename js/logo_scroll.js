$(window).on('scroll', function() {
    if ($(this).scrollTop() > 70) {
        $('.main-nav').addClass("shrink");
        $('.row-container img').attr('src', 'images/CCL Logo (1).jpg');
    } else {
        $('.main-nav').removeClass("shrink");
        $('.row-container img').attr('src', 'images/CCL Logo (1).jpg');
    }
});