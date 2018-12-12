$(document).ready(function(){
    $('.navbar-header__cover').slick({
        autoplay: true,
        infinite: true,
        arrows: false
    });

    $('.index-suggestion__slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true
    });

    $('#news-slider').slick({
        autoplay: false,
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }
            },
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.index-reference__content').slick({
        autoplay: true,
        infinite: true,
        slidesToScroll: 4,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 1080,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 524,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    $('a.delete-image').on('click', function (e) {
        e.preventDefault();

        $('#photo-gallery').append('<input type="hidden" name="delete-photo[]" value="'+ $(this).data('image-id') +'" />');

        $(this).closest('.image-container').remove();
    });
});

$(document).ready(function () {
    $('.pname').matchHeight();
    $('.item').matchHeight();
});

$(document).ready(function () {
    $('table').closest('div').addClass('table-responsive');
});

// var vid = document.getElementById("bgvid");
// var pauseButton = document.querySelector("#polina button");
//
// function vidFade() {
//     vid.classList.add("stopfade");
// }
//
// vid.addEventListener('ended', function()
// {
// // only functional if "loop" is removed
//     vid.pause();
// // to capture IE10
//     vidFade();
// });

//# sourceMappingURL=main.js.map
