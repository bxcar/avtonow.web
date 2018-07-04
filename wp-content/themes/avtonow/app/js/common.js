$(document).ready(function () {
    $("#owl-slider").owlCarousel({
        items: 1,
        nav: true,
        navText: ["<img src='/wp-content/themes/avtonow/dist/img/left-arrow.png'>", "<img src='/wp-content/themes/avtonow/dist/img/right-arrow.png'>"],
        responsive: {
            // breakpoint from 0 up
            0: {},
            // breakpoint from 480 up
            480: {},
            // breakpoint from 768 up
            1170: {
                items: 3,
                nav: true,
                navText: ["<img src='/wp-content/themes/avtonow/dist/img/left-arrow.png'>", "<img src='/wp-content/themes/avtonow/dist/img/right-arrow.png'>"]
            },

            1350: {
                items: 4,
                nav: true,
                navText: ["<img src='/wp-content/themes/avtonow/dist/img/left-arrow.png'>", "<img src='/wp-content/themes/avtonow/dist/img/right-arrow.png'>"]
            }

        }

        // singleItem: true,
        // dots: true,
        // dotsContainer: '#carousel-custom-dots'
    });

    $('#owl-slider-thumbs').owlCarousel({
        items: 1,
        singleItem: true,
        thumbs: true,
        thumbsPrerendered: true
    });

    function active_burger() {
        $('.header__burger-wrapper').removeClass('active');
    }

    $('#check-menu').on('click', function () {
        $("#header-search-form").css("display", "none");
        $('#search-form-submit-unreal').css("display", "block");
        if ($(this).is(':checked')) {
            $('.header__burger-wrapper').addClass('active');
            console.log('checkd');
        } else {
            setTimeout(active_burger, 500);
        }
    });

    $("#search-form-submit-unreal").click(function () {
        $(this).css("display", "none");
        $("#header-search-form").css("display", "flex");
    });

    $('.header__burger-main-menu .header__burger-link').unwrap();

    var $win = $(window),
        $fixed = $(".top-fixed"),
        limit = 100;

    $fixed.css("display", "flex").fadeOut(0);

    function tgl(state) {
        if (state) {
            $fixed.fadeOut(500);
        } else {
            $fixed.fadeIn(500);
        }
        // $fixed.toggleClass("top-fixed--hidden", state);
    }

    $win.on("scroll", function () {
        var top = $win.scrollTop();

        if (top < limit) {
            tgl(true);
        } else {
            tgl(false);
        }
    });

    $('.main__left-side-item.menu-item-has-children > .main__left-side-link').click(function (event) {
        event.preventDefault();
        $(this).parent().toggleClass('active');

        if($(this).parent().hasClass('active')) {
            $(this).parent().find('.sub-menu').animate({height: 'show'}, 300);
        } else {
            $(this).parent().find('.sub-menu').animate({height: 'hide'}, 300);
        }
    })

});
