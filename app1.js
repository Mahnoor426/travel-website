$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 150) {
            $(".navbar").css({ "background-color": "rgb(10, 72, 87)" });
        }
        //else {
            //$(".navbar").css({ "background-color": "transparent" });
        //}

    })
});