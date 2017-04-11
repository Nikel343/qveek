$('.leftbut').click(function () {
    $('.leftbut').css('opacity', '1').animate({
        'left': '60px'
    }, 1000);
    $('#bbid').css({
        transform: 'scale(1.1)'
    });
})

$('.rightbut').click(function () {
    $('.rightbut').css('opacity', '1').animate({
        'right': '60px'
    }, 1000);
    $('#bbid').css({
        transform: 'scale(1.1)'
    });
})
$('.leftbut').click(function () {
    $('.blockleft').animate({
        'opacity': '0.4',
        'right': '540px'
    }, 1000);
})
$('.rightbut').click(function () {
    $('.blockright').animate({
        'opacity': '0.4',
        'left': '540px'
    }, 1000);
})