function animateContour(selector, duration, showFlag) {
    var path = document.querySelector(selector);
    var length = path.getTotalLength();
    var AnForm = Snap(selector);
    AnForm.attr({
        stroke: "steelblue",
        strokeDasharray: length + ' ' + length,
        strokeDashoffset: showFlag ? length : 0
    })

    AnForm.animate({
        strokeDashoffset: showFlag ? 0 : length
    }, duration * 1000)
    AnForm.animate({
        fill: showFlag ? "lightblue" : "transparent",
        fillOpacity: showFlag ? 0.6 : 0
    }, 3000)
}

var contourIsShown = false;

function toggleContour() {
    var duration = 2;

    document.querySelector('.bigbut').removeEventListener('click', toggleContour);

    if (contourIsShown) {
        animateContour('.formleft', duration, false);
        animateContour('.formright', duration, false);
    } else {
        animateContour('.formleft', duration, true);
        animateContour('.formright', duration, true);
    }
    contourIsShown = contourIsShown ? false : true;

    setTimeout(function () {
        document.querySelector('.bigbut').addEventListener('click', toggleContour)
    }, duration * 1000)
}


document.querySelector('.bigbut').addEventListener('click', toggleContour)