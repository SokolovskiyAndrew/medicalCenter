// import external dependencies
import "jquery"
import "./modules/**/*"

//Header_menu
$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
        $('.header-row-flex').fadeOut('slow')
    }
    else {
        $('nav').removeClass('black')
        $('.header-row-flex').fadeIn('slow')
    }
})

if ($('li').hasClass('active')) {
    $('.active a').css('color', 'white');
}

//Loader circle
$(window).on('load', function () {
    $('.lds-roller').fadeOut('slow')
})

//Mobile responsive menu
// $('.menu-item-has-children').mouseover(function () {
//     $('.sub-menu').css('display', 'block');
// })

// $(".hamburger .menu-item-has-children").mouseover(function () {
//     $('.sub-menu').css({ display: "block" });
// });

// $(".hamburger .mobile-menu .menu-item-has-children").mouseout(function () {
//     $('.sub-menu').css({ display: "none" });
// });
// $(".my_box").mouseout(function () {
//     // Mouse left...
// });

$(document).ready(function () {
    $('.hamburger').click(function () {
        $('.main-menu').toggleClass('active')
    })
    $('.menu-item-has-children').hover(function () {
        $(this).siblings().removeClass('menu-item-has-children-active')
        $(this).toggleClass('menu-item-has-children-active')
        $('.hamburger .menu-item-has-children::after').css('display', 'none')
    })
    $('.hamburger').click(function () {
        $(this).toggleClass('hamburger-close')
    })
    $('.hamburger .menu-item-has-children::after')
})

// $(document).ready(function () {
//     $('.fa-search').click(function () {
//         $('.js-search').css('width', '300px')
//     })
// })

//Make all services tab constantly open

$(document).ready(function () {
    $('#usi-poslugi').addClass('active');
    $('a[href="#usi-poslugi"]').addClass('active');
})
