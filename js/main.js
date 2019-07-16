function menu(x) {
    //change icon
    x.classList.toggle("change");

    var y = document.querySelector(".nav-links");

    y.classList.toggle("toggle");

}


$(window).scroll(function () {
    $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
    //250 is fade pixels
});