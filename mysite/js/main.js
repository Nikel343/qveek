document.querySelector('.bigbut').addEventListener('click', toggleForm)

function form(ShowFlag) {
    $('.Uploader').css('display', ShowFlag ? 'block' : 'none').animate({
            'opacity': ShowFlag ? '1' : '0.1'
        }, 2000),
        $('.form').animate({
            'z-index': ShowFlag ? '102' : '100'
        }, ShowFlag ? 1 : 2000)

}
var formIsShown = true;

function toggleForm() {
    document.querySelector('.bigbut').removeEventListener('click', toggleForm);

    if (formIsShown) {
        form(formIsShown, true);
    } else {
        form(formIsShown, false);
    }
    formIsShown = formIsShown ? false : true;

    setTimeout(function () {
        document.querySelector('.bigbut').addEventListener('click', toggleForm)
    }, 2000)
}

$(document).ready(function () {

    $("#load").click(function (event) {

        console.log('!!');
        event.preventDefault();
        var form = $('#upload')[0];
        var data = new FormData(form);

        $("#load").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "upload.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (responce) {
                $('<div class="result">' + responce + '</div>').appendTo(".Uploader");
                console.log("SUCCESS : ", data);
                $("#upload").css('display', 'none');
                $("#load2").css('display', 'block');
            },
            error: function (e) {
                console.log("ERROR : ", e);

            }
        });

        return false;

    });

})
$("#load2").click(function () {
    location.reload(true)
});