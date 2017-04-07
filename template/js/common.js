$(document).ready(function () {
    $('#s1').cycle({
        fx: 'scrollLeft',
        speed: 1000,
        timeout: 5000,
        next: '#next_slide',
        prev: '#prev_slide'
    });

});

