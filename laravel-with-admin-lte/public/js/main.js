$(document).ready(function(){
    $('.navbar-header__cover').slick({
        autoplay: true,
        infinite: true,
        arrows: false
    });
});

$(document).ready(function(){
    $('#news-slider').slick({
        autoplay: false,
        infinite: true,
        arrows: true,
        slidesToShow: 4
    });
});

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

function vidFade() {
    vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed
    vid.pause();
// to capture IE10
    vidFade();
});

//# sourceMappingURL=main.js.map
